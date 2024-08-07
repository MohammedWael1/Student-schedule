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
<nav class="navbar ">
  <div class="container-fluid bg-success-subtle ">
  <h1 class="mx-auto">Add New Studente</h1>
  </div>
</nav>
<form action="do_add school.php" method="post"> 
         <input class="form-control bg-body-tertiary" type="text" placeholder="اسم الطالب" name="name">
        <br>
<select class="form-select bg-body-tertiary" name="marhala" >
<option selected>اختر المرحلة</option>

    <?php
$sql_marhala =" SELECT * FROM marhala";
$reselt_marhala = $conn -> query($sql_marhala);
while ($row_marhala = $reselt_marhala ->fetch_assoc()){
    ?>
    <option  value="<?=$row_marhala['id']?>"><?=$row_marhala['name']?></option>

<?php

}
    ?>
</select>
        <br>
        <select class="form-select bg-body-tertiary" name="mohafza" >
        <option selected>اختر المحافظة</option>

        <?php
$sql_mohafza =" SELECT * FROM mohafza";
$reselt_mohafza = $conn -> query($sql_mohafza);
while ($row_mohafza = $reselt_mohafza ->fetch_assoc()){
    ?>
    <option  value="<?=$row_mohafza['id']?>"><?=$row_mohafza['name']?></option>

<?php

}
    ?>

    <option value=""></option>
</select>
        <br>
        <input class="form-control bg-body-tertiary" type="text" placeholder=" رقم الجلوس" name="golos">
        <br>
        <input class="form-control bg-body-tertiary" type="text" placeholder=" النتيجة" name="natiga">
        <br>

        <input   class="form-control btn btn-success " type="submit" value="Add">

    </form>


<!-- <div class="form-floating">
  <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example" disabled>
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelectDisabled">Works with selects</label>
</div> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

