<?php
session_start();

?>


<html>
    <body>
        <form method="POST" action=index.php enctype="multipart/form-data">
        <input type="file" value="Upload" name="file1">
            <input type="submit" />
</form>
<?php

if(isset($_FILES["file1"]))
{

$file_name=$_FILES["file1"]["name"];
$file_type=$_FILES["file1"]["type"];

$file_temp=$_FILES["file1"]['tmp_name'];

$file_size=$_FILES["file1"]["size"];
$folder="uploads/".$file_name;


move_uploaded_file($file_temp,"uploads/".$file_name );

$_SESSION[$file_name]=$file_name;


foreach ($_SESSION as $key=>$value)
{
    
    $x='uploads/'.$_SESSION[$key];
   
    echo "<img src='$x' width='150' height='150'>";
}

}

?>

</body>
</html>