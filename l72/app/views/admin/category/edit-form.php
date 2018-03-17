<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title"></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" id="category-form" action="category-save-add.php" method="post" novalidate enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?=$cate->id?>">
      <!-- text input -->
      <div class="form-group">
        <label>Tên danh mục <span class="text-danger">*</span></label>
        <input type="text" class="form-control" placeholder="Tên danh mục ..." name="name" value="<?= $cate->name?>">
      </div>
      <div class="form-group">
        <label>Danh mục cha <span class="text-danger">*</span></label>
        <select name="parent_id" class="form-control">
          <option value="0">--- Danh mục gốc ---</option>
          <?php foreach ($parents as $c): ?>
            <?php 
              $selected = $cate->parent_id == $c->id ? "selected" : "";
             ?>
            <option <?=$selected?> value="<?= $c->id?>"><?= $c->name?></option>
          <?php endforeach ?>  
        </select>
      </div>

      <!-- textarea -->
      <div class="form-group">
        <label>Ảnh</label>
        <input type="file" name="image" value="" placeholder="" class="form-control">
      </div>
      <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control textarea" rows="5" placeholder="Enter ..." name="description"><?=$cate->description?></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-sm btn-success">Lưu</button>
        <a href="category-list.php" class="btn btn-sm btn-danger">Huỷ</a>
      </div>

    </form>
  </div>
  <!-- /.box-body -->
</div>
<style>
  label.error{
    color: red;
  }
</style>
<script>
  
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5();


    $('#category-form').validate({
      rules: {
        name: {
          required: true,
          minlength: 4,
          maxlength: 100
        },
        parent_id: {
          required: true
        },
        image: {
          extension: "jpg|jpeg|png|gif"
        }
      },
      messages: {
        name:{
          required: "Vui lòng nhập tên danh mục",
          minlength: "Độ dài tối thiểu lớn hơn 4 ký tự"
        }
      }
    });
  });



</script>