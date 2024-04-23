<?php 

if ( route(0) == 'home' && !route(1) ){

    $return = model('home', [], 'list');
    view('home/home', $return['data']);

}