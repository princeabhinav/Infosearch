<?php include_once 'admin/admin_login/header.php';?>


<!------ Include the above in your HEAD tag ---------->
  </head>
<body >
<div class="container">

<form method = "POST" action="<?php echo base_url('User_controller/answer2')?>">

  <input type="text" name="text"> enter the topic </input>
  <button type="submit" class="btn btn-default btn-md">Apply</button>
  
</form>

</div>


</body>
</html>

<?php include_once 'admin/admin_login/footer.php';?>
