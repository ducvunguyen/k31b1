<?php 
require_once $hint.'app/controllers/admin/BaseController.php';
require_once $hint.'app/models/Category.php';
class CategoryController extends BaseController{
	public function index(){
		$cateModel = new Category();
		$list = $cateModel->getCateList();
		$sortOrderList = $this->get_options($list, 0, "", null);

		$cates = [];
		foreach ($sortOrderList as $key => $value) {
			$id = ltrim($key, 'x');
			for ($i=0; $i < count($list); $i++) { 
				if($id == $list[$i]->id){
					$list[$i]->name = $value;
					array_push($cates, $list[$i]);
					break;
				}
			}
		}

		$title = "Danh sách danh mục";
		$view = '../app/views/admin/category/list.php';

		include_once '../app/views/layouts/admin.php';
	}
}

 ?>