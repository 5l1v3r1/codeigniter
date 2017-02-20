<div class="be-content">
	<div class="main-content container-fluid">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="panel panel-default panel-border-color panel-border-color-primary">
	        <div class="panel-heading panel-heading-divider"><?php echo $title; ?></div>
	        <div class="panel-body">
	          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal group-border-dashed">


<div class="form-group">
	<div class="col-md-12">
		<label class="control-label">input_title</label>
		<input name="input_name" type="text" class="form-control" value="<?php echo $veri[0]->table_name; ?>">
    </div>       
</div> 


<div class="form-group">
	<div class="col-md-12">
		<label class="control-label">input_title</label>
		<textarea name="input_name" id="editor1" rows="10" cols="80"><?php echo $veri[0]->table_name; ?></textarea>
    </div>       
</div> 


<div class="form-group">
	<div class="col-md-12">
		<label class="control-label">input_title</label>
		<select name="input_name" id="form" class="form-control select2">
			<option value="0">Aktif</option>
			<option value="1">Pasif</option>
		</select>
    </div>       
</div> 


<div class="form-group">
	<div class="col-md-12">
		<img src="<?php echo base_url("/uploads/sablon/").$veri[0]->table_name; ?>" width="200">
	</div>  
	<br>
	<div class="col-md-12">
		<label class="control-label">input_title</label>
		<input type="file" class="form-control" name="fotograf">
    </div>       
</div> 


<div class="form-group">
	<div class="col-md-12">
		<p style="margin-top: 20px;" class="text-right">
          <button type="submit" class="btn btn-lg btn-space btn-primary">Güncelle</button>
          <button onclick="goBack()" class="btn btn-lg btn-space btn-default">İptal</button>
        </p>
    </div>       
</div>       


	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>