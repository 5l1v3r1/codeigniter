<div class="be-content">
	<div class="main-content container-fluid">
	  <div class="row">
	    <div class="col-sm-12">
	      <div class="panel panel-default panel-table">
	        <div class="panel-heading"><?php echo $title; ?></div>
	        <br>
	        <div class="panel-body">
	          <table id="table1" class="table table-striped table-hover table-fw-widget">
	            <thead>
	              <tr>
	                <th>ID</th>
	                <th>input_name_1</th>
	                <th>input_name_2</th>
	                <th>#</th>
	              </tr>
	            </thead>
	            <tbody>

	            <?php foreach ($veri as $key) {?>
	              <tr class="odd gradeX">
	                <td><?php echo $key->id; ?></td>
	                <td><?php echo $key->input_name_1; ?></td>
	                <td><?php echo $key->input_name_2; ?></td>

	                <td style="width: 15%;">
	                	<a href="<?php echo base_url("admin/sablon/duzenle/").$key->id; ?>" class="btn btn-space btn-primary btn-sm">Görüntüle</a>
	                	<a onclick="return confirm('Seçilen içerik silinsin mi ?');" href="<?php echo base_url("admin/sablon/sil/").$key->id; ?>" class="btn btn-space btn-primary btn-sm">Sil</a>
	                </td>
	              </tr>
	            <?php } ?>

	            </tbody>
	          </table>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>