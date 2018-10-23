<?php include_once dirname(__FILE__).'/../header.php';?>

<div class="row">

	<div class="col-md-4 col-md-offset-2">
				<h3>Add New Brand</h3>
		<hr>
		<form action="<?php echo base_url('admin_controller/update_brand');?>" method="POST">
			<input type="hidden" name="id" value="<?php echo $result->id?>">
			<label>Brand Name</label>
			<input type="text" name="brand_name" class="form-control" value="<?php echo $result->brand_name?>">
			<?php echo form_error('brand_name');?>
			<button class="btn btn-primary">Add Brand</button>
		</form>
	</div>
</div>
<?php include_once dirname(__FILE__).'/../footer.php';?>