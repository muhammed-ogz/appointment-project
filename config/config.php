<?php

const BASEDIR = 'C:/xampp/htdocs/appointment-project';
const URL = 'http://localhost/appointment-project/';
const DEV_MODE = 'true';

try {
    $db = new PDO('mysql:host=localhost; dbname=appointment;','root','12345');
} catch (PDOException $e) {
    echo $e->getMessage();
}