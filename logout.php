<?php

session_start();

if(isset($_SESSION['authentication']) || isset($_COOKIE['authentication']))
{
    session_destroy();
    setcookie('authentication',null,time()-3600,'/');
    header("Location:index.html");
}
else
{
    header("Location:index.html");
}

?>