<?php
session_start();
if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $users = simplexml_load_file('xml_php/files/members.xml');

    foreach ($users->user as $user) {

        if ($user->uname == $_POST['uname'] && $user->password == $_POST['password']) {
            header('location: BLOG/blog.html');
            exit;
        }else {
            $_SESSION['message'] = 'Invalid username or password';
            header('location: index.php');
        }
    }
} 
?>