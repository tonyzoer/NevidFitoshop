<?php
header('Content-type: text/plain; charset=utf-8');
$servername = "localhost";
$username = "u465847862_nevid";
$password = "zoer66469";
$mydb="u465847862_nevid";
// Create connection
$conn = new mysqli($servername, $username, $password,$mydb);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$name= $_POST["name"];
$desc= $_POST["desc"];
$descuse= $_POST["descuse"];
$composits=$_POST["composite"];
$compositsvalues=$_POST["compvalue"];
$size=count($composits);
$last_id=null;
$last_product_id=null;
$sql="INSERT INTO `products`(`name`, `desc`, `descForUse`) VALUES ("+$name+","+$desc+","+$descForUse+")";
echo $sql;
if ($conn->query($sql) === TRUE) {
    $last_product_id = $conn->insert_id;
  }else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
$sql="INSERT INTO `composition`(`productsId`) VALUES ("+$last_product_id+");";
echo $sql;
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
  }else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }

for ($i=0; $i < size; $i++) {
  $sql="INSERT INTO complines (text,value,compositionId) VALUES("+$composits[i]+","+$compositsvalues[i]+","+$last_id+")";
  echo $sql;
  $conn->query($sql);
}
// echo $name;
// echo $desc;
// echo $descuse;
// echo $composits;
// echo $compositsvalues;
// echo '<script>';
// echo 'console.log('. json_encode( $composits ) .');';
// echo 'console.log('. json_encode( $compositsvalues) .');';
// echo '</script>';

?>
