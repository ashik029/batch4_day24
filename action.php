<?php

require_once 'vendor/autoload.php';
use App\classes\FileUpload;
use App\classes\Auth;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'file-upload')
    {
        include "pages/fileUpload.php";
    }
    elseif ($_GET['pages'] == 'view-students')
    {
        $fileUpload = new FileUpload();
        $students = $fileUpload->getAllStudentsInfo();
        include "pages/viewStudents.php";
    }
    if ($_GET['pages'] == 'login')
    {
        include "pages/login.php";
    }elseif ($_GET['pages'] == 'logout')
    {
        include "pages/logout.php";
    }

} elseif (isset($_POST['btn']))
{
    $fileUpload = new FileUpload($_FILES, $_POST);
    $message = $fileUpload->index();
    include 'pages/fileUpload.php';
}
elseif (isset($_POST['loginBtn'])){
    $auth = new Auth($_POST);
    $message = $auth-login();
    $auth->login();
}




