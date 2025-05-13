<?php

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
      <img style="max-width:100%;" src="2.jfif" alt="">
      <h1 class="display-4 fw-normal">اربح معنا رحلة إلى مدينة الرياض </h1>
      <p class="lead fw-normal">باقي على التسجيل </p>
      <h3 style="color:blue; border: 5px black solid ; background-color: black ; "   id="demo" ></h3>
      <p class="lead fw-normal">للحصول على تذكرة مجانية  </p>
      <a class="btn btn-outline-secondary" href="#">لتسجيل</a>
    
<h2> في السحب اقراء مايلي</h2>
   <ul style="background:transparent;" class="list-group list-group-flush">
      <li class="list-group-item">تابع السناب</li>
      <li class="list-group-item">سيكون اسئلة واجوبة     </li>
      <li class="list-group-item">بيكون في وقت محدد  </li>
      <li class="list-group-item">وفي النهاية بيكون السحب من قاعدة البيانات  بشكل عشوائي </li>
      <li class="list-group-item">وفي النهاية تكون واحد ان شاءالله من الرابحين  </li>
   </ul>  
    </div>
  </div>  

<div class="container">

<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form style="color:blue; border: 5px black solid;  " class="mt-5" method="POST" action="<?php $_SERVER['PHP_SELF']   ?>">
  

<h3>الرجاء الدخل المعلومات</h3>

  <div class="mt-5">

    <label for="firstname" class="form-label">  <h2>الاسم الاول</h2>  </label>
    <input type="text" name="firstname" class="form-control" id="firstname" value="<?php if(isset($_POST['sub'])){  echo $firstname; }?>" >
    <div id="emailHelp" class="form-text error"><?php if(isset($_POST['sub'])){ echo $errors['firstnameError']; }?></div>
  </div>

  <div class="mt-5">
   
    <label for="lastname" class="form-label"> <h2>الاسم الاخير</h2></label>
    <input type="text" name="lastname" class="form-control" id="lastname" value="<?php  if(isset($_POST['sub'])){  echo $lastname; }?>" >
    <div id="emailHelp" class="form-text error"><?php if(isset($_POST['sub'])){ echo $errors['lastnameError']; }?></div>
  </div>

  <div class="mt-5">
    
    <label for="emil" class="form-label">  <h2>البريد الالكتروني</h2>      </label>
    <input type="text" name="emil"  class="form-control" id="emil" value="<?php  if(isset($_POST['sub'])){  echo $emil; }?>">
    <div id="emailHelp" class="form-text error"><?php if(isset($_POST['sub'])){ echo $errors['emilError']; }?></div>
  </div>
  
  <button type="submit"  name="sub"  class="btn btn-primary">ارسال البيانات</button>
</form>
</div> 



<div style="display: none;position:fixed; top: 0 ; left:0; width:100% ; height: 100%;  background-color:#000000eb;" class="loader-con">
 <div style="position:fixed; top:50%; left: 50%; transform: translate(-50%,-50%) ; " id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-3 mx-auto my-2">
  <button id="winner" type="button" class="btn btn-primary" >
    اختيار الرابح 
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="modal-header">
   
        <h5 class="modal-title" id="modalLabel">الرابح</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach ($users as $user) : ?>
        <h2 class="modal-title text-centerc modal-title" id="modalLabel"><?php echo htmlspecialchars( $user['firstname']).'  '. htmlspecialchars( $user['lastname']);?></h2>
        <?php endforeach; ?> 

      </div>
      
      </div>
    </div>
  </div>
</div>


<!-- 

<div style=" display: none" id="cards" class="row mb-5 pb-5"> 
  <div class="col-sm-6">
    <div class="card my-2">
      <div class="card -body">
        <h1 class="card-title"></h1>
        <p class="card-text"><?php echo htmlspecialchars( $user['emil']); ?></p>

      </div>   
   </div>   
  </div>   
</div> -->

<?php include_once './parts/footer.php'; ?>