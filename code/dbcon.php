<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "smart_fashion_db";
$port=3307;

$con = mysqli_connect($server,$user,$password,$db,$port);

if(!$con) {
    ?>
    <script>
        alert("No Connection");
    </script>
    <?php
}

?>