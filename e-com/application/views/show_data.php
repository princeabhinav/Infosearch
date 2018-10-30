<?php include_once 'admin/admin_login/header.php';?>


<!------ Include the above in your HEAD tag ---------->
  </head>
<body >
<div class="container">

 <table id="mytable" class="table table-bordred table-striped">
 	<thead>
      <tr>
        <th>Serial No#</th>
        <th>Image</th>
        <th>Book Name</th>
        <th>Topic Name</th>
        <th>Link</th>
        
      </tr>
    </thead>
    <tbody>
    	<?php 
    	if($fetch_data->num_rows() > 0)
    	{
    		$i=1;
    		foreach($fetch_data->result() as $row) 
    		{
    			?>

      <tr>
        <td><?php echo $i++; ?></td>
        <td><img src="<?php echo base_url('assets/img/'.$row->img)?>" width="150px" height = 100px></td>
        <td><?php echo $row->item_name;?></td>
        <td><?php echo $row->brand_name;?></td>
        <td><?php echo "<a href='$row->Link'>".'view'."</a>";?></td>
        
      </tr>
      <?php } } ?>
      
    </tbody>
  </table>

</div>


</body>
</html>

<?php include_once 'admin/admin_login/footer.php';?>

