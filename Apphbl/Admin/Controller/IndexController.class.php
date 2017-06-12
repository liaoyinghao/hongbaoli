<?php
namespace Admin\Controller;
use Admin\Model\UserModel;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class IndexController extends Controller{

    public function index(){
        $user = $_SESSION['hongbaoli'];
        $u = new UserModel();
        $portrait = $u->portrait($user);
        $this->assign('user',$user);
        $this->assign('portrait',$portrait);
        $this->display();
    }

}