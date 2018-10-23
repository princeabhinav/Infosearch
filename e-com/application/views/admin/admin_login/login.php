<?php include_once 'header.php';?>


<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">


<?php echo form_open('login_controller/login_pro',['method'=>'post','name'=>'Login_Form','class'=>'form-signin']);?>
      <form action="<?php echo base_url('login_controller/login_pro');?>" method="post" name="Login_Form" class="form-signin">

<div class="login-form">
<div class="main-div">
    <div class="panel">
        
   <p>Please enter your email and password</p>
   </div>
    <form id="Login">

        <div class="form-group">
            
            <?php echo form_input(['type'=>'email','class'=>'form-control','placeholder'=>'Email Address','id'=>'inputEmail','name'=>'Username']);?>
            <?php echo form_error('Username');?>
          <!--<input type="email" class="form-control" id="inputEmail" placeholder="Email Address">-->

        </div>

        <div class="form-group">
            
            <?php echo form_input(['type'=>'password','class'=>'form-control','placeholder'=>'Password','id'=>'inputPassword','name'=>'Password']);?>
            <?php echo form_error('Password')?>

            <!--<input type="password" class="form-control" id="inputPassword" placeholder="Password">-->

        </div>
       
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>

</div></div></div>


</body>
</html>

<?php include_once 'footer.php';?>
