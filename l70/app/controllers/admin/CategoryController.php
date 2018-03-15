<?php 
require_once $hint.'app/controllers/admin/BaseController.php';
require_once $hint.'app/models/Category.php';
class CategoryController extends BaseController{

	private $viewhint = '../app/views/admin/category/';

	public function index(){
		
		$cates = $this->getSortedCateList();
		$title = "Danh sách danh mục";
		$view = $this->viewhint.'list.php';

		include_once $this->layoutView;
	}

	private function getSortedCateList(){
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

		return $cates;
	}


	public function addForm(){
		$parents = $this->getSortedCateList();
		$title = 'Thêm danh mục';
		$view = $this->viewhint.'add-form.php';
		include_once $this->layoutView;
	}
}

 ?>