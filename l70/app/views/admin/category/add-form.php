<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title"></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="category-save-add.php" method="post" novalidate>
      <!-- text input -->
      <div class="form-group">
        <label>Tên danh mục</label>
        <input type="text" class="form-control" placeholder="Tên danh mục ..." name="name">
      </div>
      <div class="form-group">
        <label>Danh mục cha</label>
        <select name="parent_id" class="form-control">
          <option value="0">--- Danh mục gốc ---</option>
          <?php foreach ($parents as $cate): ?>
            <option value="<?= $cate->id?>"><?= $cate->name?></option>
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
        <textarea class="form-control textarea" rows="5" placeholder="Enter ..." name="description"></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-sm btn-success">Lưu</button>
        <a href="category-list.php" class="btn btn-sm btn-danger">Huỷ</a>
      </div>

    </form>
  </div>
  <!-- /.box-body -->
</div>
<script>
  
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

</script>