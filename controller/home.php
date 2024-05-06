<?php 

if ( route(0) == 'home' && !route(1) ){

    $return = model('home', [], 'list');
    view('home/home', $return['data']);

}else if (route(0) == 'add') {
    $return = model('categories' , [], 'list');
    view('todo/add', $return['data']);
}