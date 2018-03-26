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

	private function getSortedCateList($parentId = null){
		$cateModel = new Category();
		$list = $cateModel->getCateList();
		$sortOrderList = $this->get_options($list, 0, "", $parentId);

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

	public function editForm(){
		$id = $_GET['id'];
		$model = new Category();
		$cate = $model->getCateById($id);
		if(!$cate){
			header('location: index.php');
		}
		$parents = $this->getSortedCateList($cate->id);
		$title = 'Sửa danh mục';
		$view = $this->viewhint.'edit-form.php';
		include_once $this->layoutView;
	}

	public function saveAdd(){
		$model = new Category();

		$model->name = $_POST['name'];
		$model->parent_id = $_POST['parent_id'];
		$model->description = $_POST['description'];
		$file = $_FILES['image'];
		
		if($file['size'] > 0){
			$filename = "public/uploads/category/".uniqid() . "-" . $file['name'];
			move_uploaded_file($file['tmp_name'], "../".$filename);
			$model->image = $filename;
		}

		$model->insert();

		header('location: category-list.php');

	}
}

 ?>