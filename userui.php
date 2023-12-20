<?php 

include 'connection.php';

$raw = "select cid,dconsumption from adaily where cid='c121'";
$ge =mysqli_query($conn,$raw);





?>
<html>
    <head><style>
    .glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
        #col{
            
            position:relative;
            width:50%;
            height:30%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:10%;
            top:24%;
            background-image:linear-gradient(limegreen,white);
            font-size:4em;
            
        }
    </style></head>
    <body>
      <center>  <div id ="col">
          <?php
          
                  if ($ge->num_rows > 0) {
        
          while($row = $ge->fetch_assoc()) {
            echo "<br>".$row['cid']." = ".$row['dconsumption']."<br>"."watts";
          }
        
        }
            ?>
        </div><br><br><button class ="glow-on-hover" onclick="abs()">Check accurately</button><br><br>
       <form method="POST"><input type=submit name ="clickit" value="Request power off" class ="glow-on-hover" ></button></form>
        <?php
        if(isset($_POST['clickit'])){
            $rev = "update psupply set cstatus ='NA' where cid='c121';";
            mysqli_query($conn,$rev);
            
            
        }
        
        ?>
        </center>
        
        <script>
            
            function abs(){
                
                location.reload();
                
            }
        </script>
    </body>
    

    
</html>