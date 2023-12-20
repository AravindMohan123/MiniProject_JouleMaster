<?php
$servername = "localhost";


$dbname = "id21609601_espdb";
$username = "id21609601_espdb";
$password = "Power@123";
 $v= 0;
// Keep this API Key value to be compatible with the ESP32 code provided in the project page. 
// If you change this value, the ESP32 sketch needs to match
$api_key_value = "12345";

$api_key= $value1 =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        
        $value1 = test_input($_POST["value1"]);
    
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "UPDATE adaily SET dconsumption = '" . $value1 . "' where cid ='c121'";
        $v++;
        
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql2 = "UPDATE amonthly SET munits = munits +'".$value1."'where cid ='c121'";
        
        $sql3 = "UPDATE amonthly SET days = days + 1 where cid ='c121'";
        
        mysqli_query($conn,$sql2);
        mysqli_query($conn,$sql3);
        
        
        $getdt = "select * from adaily";
        $rows = mysqli.query($conn,$getdt);
        while($rows->num_rows()>0){
            $data = $rows->fetch_assoc();
            if($data['days']>30){
                $cid = $data['cid'];
                $name = $data['name'];
                $units = $data['munits'];
                $amount = $units * 3;
                $mail = $data['mail'];
                $msg = "cid".$cid."\nName".$name."\nUnits".$units."\nAmount".$amount."\n";
                mail($mail,"MONTHLY BILL",$msg);
           }
        }
        
       
       $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }

}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>