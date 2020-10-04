<?php
require_once 'core/init.php';

if (Session::exists('home')) {
    echo '<p>'.Session::flash('home').'</p>';
}

$user = new User(); //current
if ($user->isLoggedIn()) {
?>
    <p>Hello <a href="#"><?php echo escape($user->data()->username); ?></a> </p>
    <ul>
        <li><a href="update.php">Update Details</a></li>
        <li><a href="changepassword.php">Update Password</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
<?php
} else {
    echo '<p> You need to <a href="login.php">log in</a> or <a href="register.php">register</a> </p>';
}
//$anotheruser = new User(); //another user
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
