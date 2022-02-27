<?php
$JazzMan = "не определено";

if(isset($_POST["JazzMan"])){
  
    $JazzMan = $_POST["JazzMan"];
}
echo "$JazzMan";
?>