<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>تسجيل دخول مشرف النظام</title>
	 <!-- Bootstrap -->
	
  
        
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body dir="rtl">
	<br>
	<br>
	<main class="container"> 
<form  method="post">

<div class="form-row">
<div class="form-group col-md-12">
<label for="username">اسم المستخدم </label>
<input type="text" class="form-control" name="username">
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="password"> كلمة المرور</label>
<input type="password" class="form-control" name="password">
</div>
   
    <button class="btn btn-success mt-3" name="login" type="submit"> تسجيل الدخول</button>

</form>

<?php
$username="mohmm";
$password="12345";

if(isset($_POST['login'])){
    $getusername = $_POST['username'];
    $getpassword =$_POST['password'];
    if($username === $getusername && $password === $getpassword){

header('location://localhost/ss/index.php');


        
    
    }else{
        echo " <h4> كلمة المرور اسم المستخدم غير صحيحة</h4>";
    }
}


?>
</main>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>

	
</body>
</html>