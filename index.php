<?php
session_start();
if(isset($_SESSION['activeUser']))
{
    header("location:admin");
}
else
{
    header("location:auth");

}
?>