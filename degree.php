<?php

$message = ' ';
$errors = [];
if (!empty($_POST['form']) && empty($_POST['student_name'])) {
    $errors [] = 'PLZ Enter Your Name' ;

} if(!empty($_POST['form']) && empty($_POST['degree'])){
    $errors [] = 'PLZ Enter Your Degree' ;

}

if (!empty($_POST['form']) && count($errors) === 0 ) {
        $degree=$_POST['degree'];


        if(!is_numeric($degree)) {
            $errors [] = 'Degree Should Be numeric' ;
        }
        elseif ($degree > 100 || $degree < 0) {
            $errors [] = 'Degree Should Be Ranged From 0 To 100' ;
        }
        elseif ($degree > 85) {
            $message = 'Welcome, '. $_POST['student_name'].' '.  'your Score A';
        }elseif ($degree>75){
            $message = 'Welcome, '. $_POST['student_name'].' '. 'your Score B';
        }elseif ($degree>65){
            $message = 'Welcome, '. $_POST['student_name'].' '.  'your Score C';
        }elseif ($degree>50){
            $message = 'Welcome, '. $_POST['student_name'].' ' . 'your Score D';
        }else {
            $message = 'Welcome, '. $_POST['student_name'].' '. 'your Score F';
        }
    
}

 
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
ul {color :red}
</style>
<body>
<?php
      
      if (count($errors)) :
    ?>
        <ul>
        <?php for ($i = 0;  $i < count($errors); $i++ ) :?>   
            <li> <?= $errors[$i]  ?> </li>
        <?php endfor; ?> 
        </ul>
        <?php
    
      endif;

    ?>
    <form method="post">
        Student Name:
        <input type="text" name="student_name" value= "<?php 
          if (isset($_POST['student_name'])) {
            echo $_POST['student_name'];
          }
            ?>" >
        <hr>
        Student Degree:
        <input type="text" name="degree" value= "<?php 
          if (isset($_POST['degree'])) {
            echo $_POST['degree'];
          }
            ?>" > 
        <hr>
        <input type="submit" name="form">
    </form>

    <h1>
      <?=$message?>
    </h1>

 
</body>
</html>