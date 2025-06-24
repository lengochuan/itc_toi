<?php

if( $v == 'login' ) {

   

} elseif( $v == 'xu_ly_dang_nhap' ) {
    // Handle login logic here

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    setcookie("username", $_SESSION['username'], time() + (86400 * 30)); // Cookie expires in 30 days
    // Redirect to the main page after login
    header("Location: /?c=user&v=welcome");
    exit();

} elseif( $v == 'welcome' ) {

    if( !isset($_SESSION['username']) || empty($_SESSION['username']) ) {
        echo "Bạn chưa đăng nhập. Vui lòng đăng nhập để tiếp tục.";
        header("Location: index.php");//Trang đăng nhập
        // Nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
    }


    $smarty->assign('username', $_SESSION['username']);
    
} elseif( $v == 'logout' ) {
    // Handle logout logic here

    session_destroy();
    setcookie("username", '', -1); // Cookie expires in 30 days
    header("Location: index.php");
    exit();
    
} elseif( $v == 'register' ) {
    // Handle logout logic here

} else {
    echo "Invalid action.";
}