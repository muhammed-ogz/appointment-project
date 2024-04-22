<?php 

session_start();

require __DIR__ ."/config/config.php";

if(DEV_MODE == true){
    error_reporting(E_ALL);
    
}