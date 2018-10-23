<?php include_once dirname(__FILE__).'/../header.php';?>
	<?php //print_r($data); die();?>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
			 <table id="mytable" class="table table-bordred table-striped">
      <tr>
        <th>Serial No#</th>
        <th>Image</th>
        <th>Book Name</th>
        <th>Topic Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php $i = 1;
    	foreach($data as $result) 
    	{?>

      <tr>
        <td><?php echo $i++?></td>
        <td><img src="<?php echo base_url('assets/img/'.$result->img)?>" width="150px" height = 100px></td>
        <td><?php echo $result->item_name?></td>
        <td><?php echo $result->brand_name?></td>
        <td><?php echo anchor('admin_controller/edit_item/'.$result->item_id ,'Edit',['class'=>'btn btn-primary']);?>    <?php echo anchor('admin_controller/delete_item/'.$result->item_id,'Delete',['class'=>'btn btn-danger']);?></td>
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
</div>
</div>
</div>
<?php include_once dirname(__FILE__).'/../footer.php';?>