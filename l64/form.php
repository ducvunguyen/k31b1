<form action="cate-save" method="post" >
	<input type="hidden" name="id" value="<?= $model->id ?>">
	<br>
	Name: <input type="text" name="name" value="<?= $model->name?>" placeholder="">
	<br>
	Description: <textarea name="description" cols="30" rows="10"><?= $model->description?></textarea>
	<br>
	<button type="submit">Save</button>
</form>