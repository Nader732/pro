<?php

if(isset($_POST['sub'])){


    $errors = [
'firstnameError' => '',
'lastnameError'=> '',
'emilError' => '',
    ];

    $firstname =  $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $emil= $_POST['emil'];

    // $firstname =  mysqli_real_escape_string($con, $_POST['firstname']);
    // $lastname =   mysqli_real_escape_string($con, $_POST['lastname']);
    // $emil=        mysqli_real_escape_string($con, $_POST['emil']) ;
    
    //echo $firstname.''.$lastname .''.$emil;
    // $sql="INSERT INTO users(firstname , lastname , emil )
    // VALUES('$firstname','$lastname','$emil')";
    //تحقق من الاسم الاول
    if(empty($firstname)){
        $errors['firstnameError'] ='ادخل الاسم الاول';
    }
//تحقق من الاسم الاخير
    if (empty($lastname)) {
        $errors['lastnameError'] ='ادخل الاسم الاخير';
    }    
    //تحقق من الايميل
    if (empty($emil)) {
        $errors['emilError'] ='ادخل الايميل';
    }    
    elseif(!filter_var($emil, FILTER_VALIDATE_EMAIL)){
        $errors['emilError'] ='ادخل الايميل بشكل صحيح';
    }
//تحقق لايوجد اخطاء 
if(!array_filter($errors)){
    $firstname =  mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname =   mysqli_real_escape_string($con, $_POST['lastname']);
    $emil=        mysqli_real_escape_string($con, $_POST['emil']) ;
  
  $sql="INSERT INTO users(firstname , lastname , emil )
    VALUES('$firstname','$lastname','$emil')";

if(mysqli_query($con , $sql))
{
header('Location: '.  $_SERVER['PHP_SELF'] );
}

else{
    echo'error:'.mysqli_connect_error($con);
}

}


  
    }











?>