<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "school";

$conn = new mysqli($server_name,$username,$password,$db_name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #add{
            background-color:text-secondary;

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$id = $_GET['id'];
$sql_student = "SELECT * FROM studentes WHERE id = '$id'";
$reselt_student = $conn -> query($sql_student);
$student = $reselt_student -> fetch_assoc();
$student_marhala = $student['marhala'];
$student_mohafza = $student['mohafza'];

?>


<nav class="navbar ">
  <div class="container-fluid bg-success-subtle ">
  <h1 class="mx-auto">Edit Studente</h1>
  </div>
</nav>
<form action="do_edit school.php" method="post"> 
    <input type="hidden" name="id" value="<?= $id ?>">
         <input class="form-control bg-body-tertiary" type="text" placeholder="اسم الطالب" name="name" value="<?=$student['name']?>">
        <br>
<select class="form-select bg-body-tertiary" name="marhala" >
<option selected><?=$student['marhala']?></option>

    <?php
$sql_marhala =" SELECT * FROM marhala";
$reselt_marhala = $conn -> query($sql_marhala);
while ($row_marhala = $reselt_marhala ->fetch_assoc()){
    ?>
    <option  value="<?=$row_marhala['id']?>" <?php
    
    if($row_marhala['id'] === $student_marhala ){
        echo"selected";
    }

    ?>><?=$row_marhala['name']?></option>

<?php

}
    ?>
</select>
        <br>
        <select class="form-select bg-body-tertiary" name="mohafza" >
        <option selected> <?=$student['mohafza']?></option>

        <?php
$sql_mohafza =" SELECT * FROM mohafza";
$reselt_mohafza = $conn -> query($sql_mohafza);
while ($row_mohafza = $reselt_mohafza ->fetch_assoc()){
    ?>
    <option  value="<?=$row_mohafza['id']?>"<?php
    
    if($row_mohafza['id'] === $student_mohafza ){
        echo"selected";
    }

    ?>><?=$row_mohafza['name']?></option>

<?php

}
    ?>

    <option value=""></option>
</select>
        <br>
        <input class="form-control bg-body-tertiary" type="text" placeholder=" رقم الجلوس" name="golos" value="<?=$student['golos']?>">
        <br>
        <input class="form-control bg-body-tertiary" type="text" placeholder=" النتيجة" name="natiga" value="<?=$student['natiga']?>">
        <br>

        <input   class="form-control btn btn-success " type="submit" value="Edit Studente">

    </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

