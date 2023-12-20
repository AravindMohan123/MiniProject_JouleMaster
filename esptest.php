
<?php

$server = "localhost";
$user   ="id21609601_espdb";
$db     ="id21609601_espdb";
$pass   ="Power@123";
$conn = mysqli_connect($server,$user,$pass,$db);

$getty="";
if($conn){
    echo "connection established";
    $val = "select cstatus from psupply where cid=121;";
   $sety =  mysqli_query($conn,$val);
   $res = mysqli_fetch_assoc($sety);
   $getty = $res['cstatus'];
}else{
    
    echo "not connected";
}
if(isset($_POST['cstate'])){
    $val = "select status from pow where id=1;";
   $sety =  mysqli_query($conn,$val);
   $res = mysqli_fetch_assoc($sety);
   $getty = $res['status'];
    if($res['status'] == "active"){
    $sql = "update psupply set cstatus ='inactive' where cid = 121";
    mysqli_query($conn,$sql);
    }else{
        
        $sql = "update pow set status ='active' where id = 1";
    mysqli_query($conn,$sql);
    }
}
?>
 <html>
     
     <p><?php echo $getty ?></p>
    <form method="post"><input type="submit" name="cstate" value="click"></form>
 </html>