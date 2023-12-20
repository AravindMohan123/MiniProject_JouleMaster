

<?php
// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = strval(file_get_contents('https://joulemastertkmceminiproject.000webhostapp.com/esptest.php', false, $context));

$arr = array($file);
echo strpos($file,'active')."<br>";
echo $file[47].$file[48].$file[49].$file[50].$file[51].$file[52].$file[53];
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    
    
    $name = $_GET(strpos("name"));
    echo $name;    
    
}
?>
<html><body>
    
    
    
    
    
    <script>
        
    </script>
</body></html>