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
    if(file_exists(BASEDIR .'/assets/'. $assetName)) return URL . 'assets/'. $assetName;
}
