<?php
include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>مركز مايكرولاند للتدريب</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
   
	

	<link rel="stylesheet" href="../css/style.css">
	
      <script src="../js/jquery.min.js"></script>
	  <script src="../js/bootstrap.js"></script>
	  

	  
      
  

</head>
<body>

	<div class="container">
	<h2>مركز مايكرولاند للتدريب</h2><br>
	<a href="../index.html" class="btn btn-success"><i class="fa fa-arrow-cirleft"></i> الرجوع للرئيسية</a>
	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus"></i> تسجيل جديد
  </button><br><br>
  
   




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<h2 class="modal-title text-center"> مركز مايكرولاند للتدريب</h2><br>
		 <h2 class="modal-title text-center">تسجيل  جديد</h2>
      </div>
      <div class="modal-body text-">
        <form action="add.php" method="POST" enctype="multipart/form-data">
			
			<!-- This is test for New Card Activate Form  -->
			<!-- This is Address with email id  -->
<div class="form-row text-">
<div class="form-group col-md-6">
<label for="inputEmail4">العنوان</label>
<input type="text" class="form-control" name="card_no" placeholder="ادخل العنوان"  required>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">رقم الهاتف</label>
<input type="phone" class="form-control" name="user_phone" placeholder="ادخل رقم الهاتف المكون من 10" maxlength="10" required>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname">الاسم الاخري</label>
<input type="text" class="form-control" name="user_first_name" placeholder="ادخل الاسم لاخير">
</div>
<div class="form-group col-md-6">
<label for="lastname">الاسم الاول</label>
<input type="text" class="form-control" name="user_last_name" placeholder=" ادخل الاسم الاول ">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-12">
<label for="fathername">الاسم بانجليزي</label>
<input type="text" class="form-control" name="user_father" placeholder=" ادخل الاسم رباعي انجليزي">
</div>

</div>


<div class="form-row" style="color: skyblue;">
<div class="form-group col-md-6">
<label for="email">البريد الالكتروني</label>
<input type="email" class="form-control" name="user_email" placeholder="ادخل البريد الالكتروني">
</div>
<div class="form-group col-md-6">
<label for="aadharno">جهة العمل</label>
<input type="text" class="form-control" name="user_aadhar" maxlength="12" placeholder="ادخل جهة العمل ">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputState">وقت إقامةالدورة</label>
<select id="inputState" name="user_gender" class="form-control">
  <option selected>اختار...</option>
  <option>صباح</option>
  <option>مساء</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">تاريخ الميلاد </label>
<input type="date" class="form-control" name="user_dob" placeholder="Date of Birth">
</div>
</div>


<div class="form-group">
<label for="family"> اضافة تعليق</label>
    <textarea class="form-control" name="family" rows="3"></textarea>
</div>






<div class="form-group col-md-12">
<label for="inputState">الدورة المطلوب التسجيل فيها</label>
<select name="state" class="form-control">
  <option selected>اختار...</option>
  <option value="المحتركيب وصيانة الشبكات</option>
		<option value="تطبقات الحاسوب">تطبقات الحاسوب</option>
		<option value="تركيب وصيانةالشبكات">تركيب وصيانةالشبكات</option>
		<option value="صيانة الموبايلات">صيانة الموبايلات</option>
		<option value="كاميرات المراقبة">كاميرات المراقبة</option>
		<option value="الفوتوشوب">الفوتوشوب</option>
</select>
</div>

</div>



			


        	<div class="form-group col-md-12 ">
        		<label>اضافة صورة الاشعار</label>
        		<input type="file" name="image" class="form-control" >
        	</div>

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="ارسال">
        	
			 <div class="modal-footer ">
        <button type="button" class="btn btn-default " data-dismiss="modal">الغاء</button>
      </div>
        </form>
      </div>
     
    </div>

  </div>
</div>


<!------DELETE modal---->




<!-- Modal -->
<?php

$get_data = "SELECT * FROM card_activation";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>تاكيد عملية الحذف</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


	";
	
}


?>


<!-- View modal  -->
<?php 

// <!-- profile modal start -->
$get_data = "SELECT * FROM card_activation";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$card = $row['u_card'];
	$name = $row['u_f_name'];
	$name2 = $row['u_l_name'];
	$namee = $row['u_namee'];

	$gender = $row['u_gender'];
	$email = $row['u_email'];
	$aadhar = $row['u_aadhar'];
	$Bday = $row['u_birthday'];

	$phone = $row['u_phone'];
	$address = $row['u_state'];


	
	
	$state = $row['u_state'];
	$time = $row['uploaded'];
	
	$image = $row['image'];
	echo "

		<div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
		<div class='modal-dialog'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLabel'>Profile <i class='fa fa-user-circle-o' aria-hidden='true'></i></h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			<div class='modal-body'>
			<div class='container' id='profile'> 
				<div class='row'>
					<div class='col-sm-4 col-md-2'>
						<img src='upload_images/$image' alt='' style='width: 150px; height: 150px;' ><br>
		
						<i class='fa fa-id-card' aria-hidden='true'></i> $card<br>
						<i class='fa fa-phone' aria-hidden='true'></i> $phone  <br>
						Issue Date : $time
					</div>
					<div class='col-sm-3 col-md-6'>
						<h3 class='text-primary'>$name $name2</h3>
						<p class='text-secondary'>
						<strong>S/O :</strong> $namee <br>
					
						<strong>Aadhar :</strong> $aadhar <br>
						<i class='fa fa-venus-mars' aria-hidden='true'></i> $gender
						<br />
						<i class='fa fa-envelope-o' aria-hidden='true'></i> $email
						<br />
						
						
						<i class='fa fa-home' aria-hidden='true'> Address : </i>, <br>, $state - 
						<br />
						</p>
						<!-- Split button -->
					</div>
				</div>

			</div>   
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
			</div>
			</form>
			</div>
		</div>
		</div> 


    ";
}


// <!-- profile modal end -->


?>





<!----edit Data--->

<?php

$get_data = "SELECT * FROM card_activation";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$card = $row['u_card'];
	$name = $row['u_f_name'];
	$name2 = $row['u_l_name'];
	$namee = $row['u_namee'];

	$gender = $row['u_gender'];
	$email = $row['u_email'];
	$aadhar = $row['u_aadhar'];
	$Bday = $row['u_birthday'];

	$phone = $row['u_phone'];
	$address = $row['u_state'];

	
	
	
	$state = $row['u_state'];

	$time = $row['uploaded'];
	$image = $row['image'];
	echo "

<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit your Data</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputEmail4'>العنوان</label>
		<input type='text' class='form-control' name='card_no' placeholder='ادخل العنوان.'  value='$card' required>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>رقم الهاتف</label>
		<input type='phone' class='form-control' name='user_phone' placeholder='ادخل الهاتف المكون من 10.' maxlength='10' value='$phone' required>
		</div>
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='firstname'>الاسم الاخير</label>
		<input type='text' class='form-control' name='user_first_name' placeholder='ادخل الاسم الاخير' value='$name'>
		</div>
		<div class='form-group col-md-6'>
		<label for='lastname'>الاسم الاول</label>
		<input type='text' class='form-control' name='user_last_name' placeholder='ادخل الاسم الاول' value='$name2'>
		</div>
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-12'>
		<label for='fathername'> ادخل الاسم بنجليزي</label>
		<input type='text' class='form-control' name='user_father' placeholder=' ادخل الاسم رباعي بنجليزي' value='$namee'>
		</div>
	
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='email'>البريد الالكتروني</label>
		<input type='email' class='form-control' name='user_email' placeholder='ادخل البريد الالكتروني' value='$email'>
		</div>
		<div class='form-group col-md-6'>
		<label for='aadharno'>جهة العمل </label>
		<input type='text' class='form-control' name='user_aadhar' maxlength='12' placeholder='Enter 12-digit Aadhar no. ' value='$aadhar'>
		</div>
		</div>
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputState'>وقت إقامة الدورة</label>
		<select id='inputState' name='user_gender' class='form-control' value='$gender'>
		  <option selected>$gender</option>
		  <option>صباح</option>
		  <option>مساء</option>
		
		</select>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>تاريخ الميلاد</label>
		<input type='date' class='form-control' name='user_dob' placeholder='Date of Birth' value='$Bday'>
		</div>
		</div>
		
		
		
		
		
		
		<div class='form-row'>
		
		<div class='form-group col-md-12'>
		<label for='inputState'>الدورة المطلوب التسجيل فيها</label>
		<select name='state' class='form-control'>
		  <option>$state</option>
		  <option value='محاسبة إلكترونية'>محاسبة إلكترونية</option>
											<option value='تطبيقات الحاسوب'>تطبيقات الحاسوب</option>
											<option value='تركيب وصيانة الشبكات'>تركيب وصيانة الشبكات</option>
											<option value='صيانة الموبايلات'>صيانة الموبايلات</option>
											<option value='كاميرات المرقبة'>كاميرات المرقبة</option>
											<option value='الفوتوشوب'>الفوتوشوب</option>
											
									
		</select>
		</div>
		
		</div>
		
		
		
        	

        	<div class='form-group'>
        		<label>اضافة صورة الاشعار</label>
        		<input type='file' name='image' class='form-control'>
        		<img src = 'upload_images/$image' style='width:50px; height:50px'>
        	</div>

        	
        	
			 <div class='modal-footer'>
			 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
			 <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		 </div>


        </form>
      </div>

    </div>

  </div>
</div>


	";
}


?>

<script src="//../cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

</body>
</html>
