<?php 
class X{

	private $name = 'tam';

	public function getName(){
		echo $this->name;
	}
}

class Y extends X{
	function getParentProperty(){
		echo $this->name;
	}
}

$model = new Y();
echo $model->getParentProperty();



 ?>