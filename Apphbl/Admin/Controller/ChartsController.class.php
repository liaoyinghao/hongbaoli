<?php
namespace Admin\Controller;
use Admin\Model\XgindexModel;
use Think\Controller;
use Think\Page;
use Think\Upload;
header('content-type:text/html;charset=utf-8');
class ChartsController extends Controller{
    //首页
    public function charts(){

        $this->display();
    }
}