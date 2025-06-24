<?php

if( $v == 'login' ) {

   

} elseif( $v == 'xu_ly_dang_nhap' ) {
    // Handle login logic here

    $email = $_POST['email'];
    $password = $_POST['password'];

    /**
     * Bước 1: Lấy thông tin đăng nhập từ form: email và password
     * Bước 2: Kiểm tra email có trong database hay không
     * Bước 3: Nếu có, kiểm tra password có đúng không
     * Bước 4: Nếu đúng, lưu thông tin đăng nhập vào session và cookie
     * Bước 5: Chuyển hướng người dùng đến trang chính hoặc trang chào mừng
     * Bước 6: Nếu không đúng, hiển thị thông báo lỗi đăng nhập
     * Bước 7: Nếu không có email trong database, hiển thị thông báo lỗi đăng nhập
     * Bước 8: Nếu người dùng đã đăng nhập, hiển thị thông báo đã đăng nhập
     */ 
    $users = new users();
    $user = $users->user( $email);
    
    if(empty($user)) {
        // Nếu không tìm thấy người dùng
        echo "Tên đăng nhập không tồn tại.";
        exit();
    }elseif( $user[0]['password'] != $password ) {
        // Nếu mật khẩu không đúng
        echo "Mật khẩu không đúng.";
        exit();
    }else{
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        setcookie("email", $_SESSION['email'], time() + (86400 * 30)); // Cookie expires in 30 days
        // Redirect to the main page after login
        header("Location: /?c=user&v=welcome");
        exit();
    }

} elseif( $v == 'welcome' ) {

    if( !isset($_SESSION['email']) || empty($_SESSION['email']) ) {
        echo "Bạn chưa đăng nhập. Vui lòng đăng nhập để tiếp tục.";
        header("Location: index.php");//Trang đăng nhập
        // Nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
    }


    $smarty->assign('email', $_SESSION['email']);
    
} elseif( $v == 'logout' ) {
    // Handle logout logic here

    session_destroy();
    setcookie("email", '', -1); // Cookie expires in 30 days
    header("Location: index.php");
    exit();
    
} elseif( $v == 'register' ) {
    // Handle logout logic here

} else {
    echo "Invalid action.";
}