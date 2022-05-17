
<?php
$hostName = "localhost";
$userName = "root";
$password = "123";
$databaseName = "eldb";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php

$db= $conn;
$tableName="institutes";
$columns= ['job_id', 'location_id','institute_name','equipment_name'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT $columnName FROM $tableName ORDER BY job_id DESC LIMIT 0,1";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>


<!doctype html>
<html lang="en"> 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Job Card</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0"> 

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.a {
  table-layout: auto;
  width: 180px;  
}

table.b {
  table-layout: fixed;
  width: 180px;  
}

table.c {
  table-layout: auto;
  width: 100%;  
}

table.d {
  table-layout: fixed;
  width: 100%;  
}
</style>
  </head>


  <div class="card text-left">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->

        

  <body>

  


  
  <div id="main">
	<div id="header">
	  <div id="logo">
		<div id="logo_text">
		  <!-- class="logo_colour", allows you to change the colour of the text -->
		  <h1><a href="home.php"> <span class="logo_colour"> </span></a></h1>
		  <h2>Division of Biomedical Engineering Services&nbsp; &nbsp; &nbsp; JOB CARD </h2>
		<!-- <h3><div>DEPARTMENT OF HEALTH SERVICES &nbsp; &nbsp; &nbsp; &nbsp; <span class="a">Job Number</span> <span class="a"></span> . </div> </h3> -->
		    
		  <h4> &nbsp; &nbsp;DEPARTMENT OF HEALTH SERVICES &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </h4>


          <div class="container">
  <div class="row">
    <div class="col-6 col-sm-3"><div class="card" style="width: 18rem;">
  <div class="card-header">
    Featured
</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>
</div>
    <div class="col-6 col-sm-3"><div class="card" style="width: 18rem;">
  <div class="card-header">
    Featured
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>
</div>
<div class="col-6 col-sm-3"><div class="card" style="width: 18rem;">
  <div class="card-header">
    Featured
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>
</div>

    <!-- Force next columns to break to new line -->
    <div class="w-100"></div>
  </div>

          










<div class="container">
<?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
 <div class="row">
    <div class="col">Hospital  &nbsp; <?php echo $data['institute_name']??''; ?></div>
    <div class="col">Job Number : &nbsp; <?php echo $data['job_id']??''; ?></div>
  </div>

  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col">Hospital  &nbsp; <?php echo $data['institute_name']??''; ?></div>
    <div class="col">Location &nbsp; <?php echo $data['location_id']??''; ?></div>
  </div>

  <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
  </div>

  <!-- Columns are always 50% wide, on mobile and desktop -->
  <div class="row">
    <div class="col-6">.col-6</div>
    <div class="col-6">.col-6</div>
  </div>

  <?php
      $sn++;}}else{ ?>
      <tr>
      <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
</div>
		
      
        <h2>2</h2>
    <form action="insert.php" method="post">
                <label for="e1"></label>
                <input type="text" name="emp1" id="e1"><br>
                <label for="e2"></label>
                <input type="text" name="emp2" id="e2"><br>
                <label for="e3"></label>
                <input type="text" name="emp3" id="e3"><br>
                <label for="e4"></label>
                <input type="text" name="emp4" id="e4"><br>
                <label for="e5"></label>
                <input type="text" name="emp5" id="e5"><br>

            <input type="submit" value="Submit">
        </form>

<div class="container">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>

        

<h2>3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spare Parts</h2>
<table class="c">
<tr>
    
  </tr>
    <th>H500</th>
    <th>STOCK No</th>
	<th>QUENTITY</th>
    <th>DISCRIPTION</th>
    <th>SIGNATURE HOD</th>
	<th>H503</th>
	<th>STOK NO</th>
	<th>QUENTITY</th>
	
  </tr>
  
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
  </tr>

  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
  </tr>
  
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
  </tr>
  
   <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
	<th>&nbsp;</th>
  </tr>
   <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
	<th>&nbsp;</th> 
	<th>&nbsp;</th>
	<th>&nbsp;</th>
  </tr>
</table>
<h2>4 I, </h2>	
<p style="margin-left: 2.5em;padding: 0 7em 2em 0;border-width: 2px; border-color: black; border-style:solid;">SURNAME &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;DESIGNATION</p>



<h5> Of this institution certify that:&nbsp;&nbsp; 1. The medical equipment referred to in section 1 was reported as being defective to the BES 
 2. That the BES offices listed in section 2 personally attended to the repair of this equipment at the times specified therein
 3. That the entries in section 5 are to the best of my knowledge correct. </h5>
  		 
		  		
<h2>5 </h2>	
<h4>&emsp;&emsp;&emsp;&emsp; Officer in Charge &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ...............................</h4>	

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>







</html>