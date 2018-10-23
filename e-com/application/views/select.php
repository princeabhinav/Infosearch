<?php include_once 'admin/admin_login/header.php';?>


<!------ Include the above in your HEAD tag ---------->
  </head>
<body >
<div class="container">

<form method = "POST" action="<?php echo base_url('main/answer')?>">

  <input type="radio" name="size" value="Admin" > Admin<br>
  <input type="radio" name="size" value="User"> User<br>
  <button type="submit" class="btn btn-default btn-md">Apply</button>
  
</form>

</div>


</body>
</html>

<?php include_once 'admin/admin_login/footer.php';?>
