<?php
namespace Admin\Controller;
use Admin\Model\XgindexModel;
use Think\Controller;
use Think\Page;
use Think\Upload;
header('content-type:text/html;charset=utf-8');
class ElementsController extends Controller{
    //首页
    public function elements(){

        $this->display();
    }
}