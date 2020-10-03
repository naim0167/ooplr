<?php
require_once 'core/init.php';

//DB::getInstance;
$user = DB::getInstance()->get('users', array('username', '=', 'naim'));

if(!$user->count()) {
    echo 'No User';
} else {
    echo 'OK!';
}

//if($users->count()){
//    foreach ($users as $user){
//        echo $user->username;
//    }
//}