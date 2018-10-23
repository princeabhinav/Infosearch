<?php include_once dirname(__FILE__).'/../header.php';
$arr=[];
  foreach ($data as $value){
  $arr = $value;
}

?>

<div class="row">

	<div class="col-md-4 col-md-offset-2">
				<h3 style="text-align: center;">Edit items</h3>
		<hr>
		<form action="<?php echo base_url('admin_controller/update'.$arr->item_id);?>" method= "POST" enctype="multipart/form-data">
  <fieldset>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Item Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Item" name="item_name" val value="<?= $arr->item_name?>">
     
    </div>
    <?= form_error('item_name');?>
    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Price(enter numbers)" name="price" value= "<?= $arr->price?>">
   </div>
   <?= form_error('price');?>

    <div class="form-group">
      <label for="exampleSelect1">Select Brand</label>
      <select class="form-control" name="brand_id">
        <option value='<?=$arr->b_id?>'><?= $arr->brand_name?></option>
        <?php foreach ($result['brand'] as  $value) {
        	$id = $value->id;
        	$name = $value->brand_name; ?>
        	<option value="<?php echo $id?>"><?php echo $name?> </option>
      <?php  }?>
      </select>
    </div>

<?= form_error('brand_id');?>
   
    <div class="form-group">
      <label for="exampleTextarea">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="des" value= "<?=$arr->des?>"></textarea>
    </div>
    <?= form_error('des');?>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="upload_file">
    </div>
   
<div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="upload_file">
   
    </div>
   
   <img src="<?=base_url('assets/img/'.$arr->img);?>">
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
	</div>
</div>
<?php include_once dirname(__FILE__).'/../footer.php';?>

<script type="text/javascript">
	$("#number").keypress(function(e){
		if(String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false; 
	});

</script>