<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
        	<tr>
              <th>STT</th>
              <th>Tên danh mục</th>
              <th>Ảnh</th>
              <th>
                <a href="category-add.php" class="btn btn-sm btn-success">Thêm</a>
              </th>
            </tr>
            <?php foreach ($cates as $index => $c): ?>
            	<tr>
	              <td><?= $index+1 ?></td>
	              <td><?= $c->name ?></td>
	              <td>
	              	<img src="<?= $c->image?>" alt="">
	              </td>
	              <td>
	              	<a href="category-edit.php?id=<?= $c->id?>" class="btn btn-sm btn-info">Sửa</a>
	              	<a href="category-remove.php?id=<?= $c->id?>" class="btn btn-sm btn-danger">Xoá</a>
	              </td>
	            </tr>
            <?php endforeach ?>
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>