<?php

function route($index)
{
    global $config;
    if (isset($config['route'][$index])) return $config['route'][$index];
    else return false;
}

function view($viewName, $pagedata = [])
{
    $data = $pagedata;
    if (file_exists(BASEDIR . '/View/' . $viewName . '.php')) require BASEDIR . '/View/' . $viewName . '.php';
    else return false;
}

function model($modelName, $pagedata = [], $dataProccess = NULL)
{
    global $db;
    if ($dataProccess != NULL) $proccess = $dataProccess;
    $data = $pagedata;
    if (file_exists(BASEDIR . '/Model/' . $modelName . '.php')) {
        require BASEDIR . '/Model/' . $modelName . '.php';
    } else {

        return false;
    }
}

function assets($assetName)
{
    if (file_exists(BASEDIR . '/assets/' . $assetName)) return URL . 'assets/' . $assetName;
}

function add_session($index, $value)
{
    $_SESSION[$index] = $value;
}
function get_session($index)
{
    if (isset($_SESSION[$index])) return $_SESSION[$index];
    else return false;
}
function filter($field)
{
    return is_array($field) ? array_map('filter', $field) : htmlspecialchars(trim($field));
}
function post($index){
    if (isset($_POST[$index])) return filter($_POST[$index]);
    else return false;
}
function get($index){
    if (isset($_GET[$index])) return filter($_GET[$index]);
    else return false;
}

function get_cookies($index){
    if (isset($_COOKIE[$index])) return trim($_COOKIE[$index]);
    else return false;
}
function redirect($link){
    header('Location:'. URL . $link);
}

function url($url){
    global $config;
    return URL . $url;
}

function _p($data){
    echo "<pre style = 'background-color:#1d1d1d; color: greenyellow; position: absolute; left: 0; top: 0; z-index: 9999999999; width: 100%; height: 400px;'>";
    print_r($data);
    echo "</pre>";
}


