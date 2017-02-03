
<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "register";

$con = mysqli_connect("127.0.0.1","root","","register");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$i = 0;
 $results= array();

$sql = "SELECT * FROM register";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
         
        $results[$i]['f'] = $row['Firstname'];
        $results[$i]['l'] = $row['Lastname'];
        $results[$i]['m'] = $row['MI'];
        $results[$i]['d'] = $row['Dateofbirth'];
        $results[$i]['g'] = $row['Gender'];
        
        $i++;
    }
}
  
echo json_encode($results);
?>


