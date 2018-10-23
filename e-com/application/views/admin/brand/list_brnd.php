<?php include_once dirname(__FILE__).'/../header.php';?>
	<?php //print_r($data); die();?>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<div class="table-responsive">
			 <table id="mytable" class="table table-bordred table-striped">
      <tr>
        <th>Serial No#</th>
        <th>Topics Name</th>
        <th>Created At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php $i = 1;
    	foreach($data as $result) 
    	{?>

      <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $result->brand_name?></td>
        <td><?php echo $result->created_at?></td>
        <td><?php echo anchor('admin_controller/edit_b/'.$result->id ,'Edit',['class'=>'btn btn-primary']);?>    <?php echo anchor('admin_controller/delete_b/'.$result->id,'Delete',['class'=>'btn btn-danger']);?></td>
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
</div>
</div>
</div>
<?php include_once dirname(__FILE__).'/../footer.php';?>