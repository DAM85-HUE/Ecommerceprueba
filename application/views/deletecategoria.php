<?php
   public function del(){
		$sql = "delete from ".self::$tablename." where cat_id=$this->cat_id";
		Executor::doit($sql);
	}


?>
