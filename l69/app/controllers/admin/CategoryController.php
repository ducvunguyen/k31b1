<?php 
require_once $hint.'app/controllers/admin/BaseController.php';
require_once $hint.'app/models/Category.php';
class CategoryController extends BaseController{
	public function index(){
		$cateModel = new Category();
		$cates = $cateModel->getCateList();

		$title = "Danh sách danh mục";
		$view = '../app/views/admin/category/list.php';

		include_once '../app/views/layouts/admin.php';
	}
}

 ?>