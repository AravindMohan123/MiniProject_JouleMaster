<?php
include 'connection.php';

$sql = "select cid,pm1,pm2 from psupply";

$ge= mysqli_query($conn,$sql);

 if ($ge->num_rows > 0) {
        
          while($rows = $ge->fetch_assoc()) {
             
           if($rows['pm1'] > 30){
               $val =strval($rows['cid'].":" .$rows['pm1']);
              echo $val;
           }else if($rows['pm2'] > 30){
                $val =strval($rows['cid'].":". $rows['pm2']);
               echo $val;
           }
            
          }
          
          
        
        
        }


if(isset($_POST['getid'])){
    $set = $_POST['idfetch'];
    
    $sql2 = "select cid,mail,munits from amonthly where cid='".$set."';";
   
    $te = mysqli_query($conn,$sql2);
   
$res = $te->fetch_assoc();

$str = $res['mail'];
$mstring = "https://formsubmit.co/".strval($str);
echo $mstring;
echo $res['munits'];
$amt = ($res['munits']*0+43)* 3;

    
}

?>
<html>
    <head>
        <style>
            
        </style>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="idfetch">
            <input type="submit" name="getid">
        </form>
        
        <form action="<?php echo $mstring?>" method="POST">
             <input type="text" name="cid" value= "<?php echo $res['cid'];?>" required>
             <input type="text" name="units" value= "<?php echo $res['munits'];?>" required>
             <input type="text" name="amount" value= "<?php echo $amt ?>"required>
             <button type="submit">Send</button>
</form>
        </form> 
    </body>
</html>