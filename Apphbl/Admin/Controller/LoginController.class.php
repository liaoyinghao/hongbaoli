<?php
namespace Admin\Controller;
use Admin\Model\UserModel;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class LoginController extends Controller {
//退出页面
    public function signout(){
     session("hongbaoli",null);
     echo "<script>top.location='../Login/login';</script>";
    }

    public function login(){
        $this->display();
    }
    
    public function signin(){
            $admin=new UserModel();
            $uid= $admin->login($_POST['user'],sha1($_POST['pass']));
            echo $uid;
    }



}