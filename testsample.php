

<?php
include 'connection.php';
$sql = "select cstatus,cid from psupply where cid='c121'";
$dt = mysqli_query($conn,$sql);


if ($dt->num_rows > 0) {

  while($row = $dt->fetch_assoc()) {
    echo "<br>".$row['cid']." = ".$row['cstatus']."<br>";
  }

}

?>
