<?php
session_start();
if(isset($_SESSION['activeUser']) && isset($_SESSION['user_id']))
{
  
}
else
{
    $curentUrl = urlencode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    header("location:../auth/index.php?last_link=$curentUrl");
}
?>