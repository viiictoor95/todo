


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="steelsheet" type="text/css" href="public/css/boostrap.min.css">

</head>
<body>

	
<?php

	include('config.inc.php');



$db=new mysqli($dbhost, $dbuser, $dbpassw, $dbname);

if ($db->connect_errno){
	die('error de connexió');
}
else{

$sql="SELECT * from tasks"; 
//mostrar llistat

$result=$db->query($sql);  

while($rows=$result->fetch_array()){
	echo "  <table border='1' class='table'>
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripcion</th>
        <th>Data</th>
        <th>Completed</th>
        <th>User</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>".$rows['id']."</td>
        <td>".$rows['descripcion']."</td>
        <td>".$rows['data']."</td>
        <td>".$rows['completed']."</td>
        <td>".$rows['user']."</td>
      </tr>

    </tbody>
  </table>";
	echo "</table>";

};
}
$db->close();



?>
</body>
</html>