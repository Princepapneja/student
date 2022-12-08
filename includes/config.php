<?php
$db=mysqli_connect('localhost','root','','student');
if (!$db)
{
    echo 'connection failed';
    exit;
}
// if (empty($_SESSION) || !isset($_SESSION))
// {}
    session_start();


include('functions.php');
?> 