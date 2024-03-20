if (isset($_REQUEST['logout'])){
    setcookie('EXAMPLECOOKIE@#$%^', '000000', time() - (86400 * 30), "/");
    unset($_SESSION['user_id']);
    session_destroy();
    header('location: ../Auth/');
            exit();
}
