<?php
require_once 'core/init.php';

if (Session::exists('home')) {
    echo '<p>'.Session::flash('home').'</p>';
//    echo Session::flash('success');
}

//DB::getInstance;
//$userInsert = DB::getInstance()->insert('users', array(
//    'username' => 'Dean',
//    'password' => 'password',
//    'salt' => 'salt'
//));

//$userInsert = DB::getInstance()->update('users', 3 , array(
//    'password' => 'newpassword',
//    'username' => 'Sam'
//));
