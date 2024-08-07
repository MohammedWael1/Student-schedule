 <head>


<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<nav class="navbar ">
  <div class="container-fluid bg-success-subtle ">
  <h1 class="mx-auto"> Student schedule</h1>
  </div>
</nav>

<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Marhala</th>
    <th>Moohafza</th>
    <th>Golos</th>
    <th>Natiga</th>
    <th>control</th>
    
  </tr>

<?php
// $num = $_POST['num'];


///////////connect///////////
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "school";

$conn = new mysqli($server_name,$username,$password,$db_name);
////////////////////////

$sql_stu =" SELECT * FROM studentes";
$reselt = $conn -> query($sql_stu);


while($row = $reselt -> fetch_assoc()){
    ?>
    <tr>
      <td><?="$row[id]"?></td>
      <td><?="$row[name]"?></td>
      <td><?php $marhala_id="$row[marhala]";
      $sql_marhala="SELECT * FROM marhala WHERE id= '$marhala_id' ";
      $reselt_marhala= $conn -> query($sql_marhala);
      $row_marhala= $reselt_marhala -> fetch_assoc();
      echo $row_marhala['name'];
      ?></td>
      <td><?php $mohafza_id="$row[mohafza]";
      $sql_mohafza="SELECT * FROM mohafza WHERE id='$mohafza_id' ";
      $reselt_mohafza= $conn -> query($sql_mohafza);
      $row_mohafza= $reselt_mohafza -> fetch_assoc();
      echo $row_mohafza['name'];
      ?></td>
      <td><?="$row[golos]"?></td>
      <td><?="$row[natiga]"?></td>
      <td><a href="delete school.php?id=<?="$row[id]"?>"><button class=" btn btn-danger">Delete</button></a>
      <a href="edit school.php?id=<?="$row[id]"?>"><button class=" btn btn-primary">Edit</button></a>
    </td>

</tr>


<?php
}
?>

</table>
<a href="add school.php"><button class="add btn btn-primary">Add New Studente</button></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>