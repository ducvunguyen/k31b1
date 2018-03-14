<?php 
session_start();
class BaseController{
	function __construct(){
		if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
			if($_SESSION['auth']['role'] < 2){
				header('location: ../index.php');
			}
			header('location: ../login.php');
		}
	}

	protected function get_options($array, $parent=0, $indent="", $forget = null) {
      
      // Return variable
      $return = [];
      for ($i=0; $i < count($array); $i++) {
          $val = $array[$i];
        	if($val->parent_id == $parent && $val->id != $forget) {
          	$return["x".$val->id] = $indent.$val->name;
          	$return = array_merge($return, $this->get_options($array, $val->id, "--".$indent, $forget));
          }
      }
      return $return;
  }
}

 ?>