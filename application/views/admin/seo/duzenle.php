<div class="be-content">
	<div class="main-content container-fluid">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="panel panel-default panel-border-color panel-border-color-primary">
	        <div class="panel-heading panel-heading-divider"><?php echo $title; ?></div>
	        <div class="panel-body">
	          <form action="" method="post" novalidate="" class="form-horizontal group-border-dashed">

				<div class="form-group">
					<div class="col-md-12">
						<div class="panel-heading">Meta Title</div>
						<input name="title" type="text" class="form-control" value="<?php echo $veri[0]->title; ?>">
				    </div>       
				</div>   

				<div class="form-group">
					<div class="col-md-12">
						<div class="panel-heading">Meta Description</div>
						<input name="desc" type="text" class="form-control" value="<?php echo $veri[0]->description; ?>">
				    </div>       
				</div>    

				<div class="form-group">
					<div class="col-md-12">
						<div class="panel-heading">Meta Keywords</div>
						<input name="key" type="text" class="form-control" value="<?php echo $veri[0]->keywords; ?>">
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

<?php echo $this->session->flashdata("bilgi"); ?>

<script>
function goBack() {window.history.back();}
CKEDITOR.replace('editor1');
CKEDITOR.replace('editor2');
CKEDITOR.replace('editor3');
CKEDITOR.replace('editor4');
</script>