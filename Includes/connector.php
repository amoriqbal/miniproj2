<?php
    $_SESSION["id"]=session_start();
    $con=mysqli_connect("localhost","root","","qbank");
    $qpcon=mysqli_connect("localhost","root","","qpapers");
?>