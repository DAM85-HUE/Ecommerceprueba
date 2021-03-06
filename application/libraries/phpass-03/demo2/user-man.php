<?php

require '../PasswordHash.php';

// In a real application, these should be in a config file instead
$db_host = '127.0.0.1';
$db_port = 3306;
$db_user = 'mydbuser';
$db_pass = 'voulDyu0gue$s?';
$db_name = 'myapp';

// Base-2 logarithm of the iteration count used for password stretching
$hash_cost_log2 = 8;
// Do we require the hashes to be portable to older systems (less secure)?
$hash_portable = FALSE;

// Are we debugging this code?  If enabled, OK to leak server setup details.
$debug = TRUE;

function fail($pub, $pvt = '')
{
	global $debug;
	$msg = $pub;
	if ($debug && $pvt !== '')
		$msg .= ": $pvt";
/* The $pvt debugging messages may contain characters that would need to be
 * quoted if we were producing HTML output, like we would be in a real app,
 * but we're using text/plain here.  Also, $debug is meant to be disabled on
 * a "production install" to avoid leaking server setup details. */
	exit("An error occurred ($msg).\n");
}

function get_post_var($var)
{
	$val = $_POST[$var];
	if (get_magic_quotes_gpc())
		$val = stripslashes($val);
	return $val;
}

header('Content-Type: text/plain');

$user = get_post_var('user');
/* Sanity-check the username, don't rely on our use of prepared statements
 * alone to prevent attacks on the SQL server via malicious usernames. */
if (!preg_match('/^[a-zA-Z0-9_]{1,60}$/', $user))
	fail('Invalid username');

$pass = get_post_var('pass');
/* Don't let them spend more of our CPU time than we were willing to.
 * Besides, bcrypt happens to use the first 72 characters only anyway. */
if (strlen($pass) > 72)
	fail('The supplied password is too long');

$db = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
if (mysqli_connect_errno())
	fail('MySQL connect', mysqli_connect_error());

$hasher = new PasswordHash($hash_cost_log2, $hash_portable);
$hash = $hasher->HashPassword($pass);
if (strlen($hash) < 20)
	fail('Failed to hash new password');
unset($hasher);

($stmt = $db->prepare('insert into users (user, pass) values (?, ?)'))
	|| fail('MySQL prepare', $db->error);
$stmt->bind_param('ss', $user, $hash)
	|| fail('MySQL bind_param', $db->error);
if (!$stmt->execute()) {
/* Figure out why this failed - maybe the username is already taken?
 * It could be more reliable/portable to issue a SELECT query here.  We would
 * definitely need to do that (or at least include code to do it) if we were
 * supporting multiple kinds of database backends, not just MySQL.  However,
 * the prepared statements interface we're using is MySQL-specific anyway. */
	if ($db->errno === 1062 /* ER_DUP_ENTRY */)
		fail('This username is already taken');
	else
		fail('MySQL execute', $db->error);
}

$stmt->close();
$db->close();

echo "User created\n";

?>
