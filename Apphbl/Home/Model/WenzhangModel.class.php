<?php
namespace Home\Model;

use Think\Model;
use Think\Page;

class WenzhangModel extends Model{
    
    //这是文章详情页下面的 添加回复功能 
    public function wenzhang($id,$name,$nr){
            $data=array(
                'bk_piid'=> $id,
                'bk_fbtime'=>date("Y-m-d H:i:s"),
                'bk_name'=> $name,
                'bk_neirong'=>$nr,
            );
            $this->create($data);
            if($this->add()){
                $arr = $this->where("bk_id=$id")->setInc('bk_pl',1);
                if($arr){
                    return 1;
                }else{
                    return null;
                }
            }else{
                return null;
            }
        }

    //这是登录之后查看自己所有文字的内容1
    public function loginwz1($num){
        $arr = $this->where("bk_id=$num")->select();
        return $arr;
    }
    public function loginwz2($num){
        $con = $this->where("bk_piid=$num")->count();    //取得数据表总条数
        $p = new Page($con,18);  //实例化分页类，think自带的
        return $p;
    }    
    public function loginwz3($num,$fy,$p){
        if($fy==2){
            $list = $this->where("bk_piid=$num")->field('bk_piid,bk_name,bk_fbtime,bk_neirong')->order('bk_id desc')->limit($p->firstRow.','.$p->listRows)->select();
        }else{
            $list = $this->where("bk_piid=$num")->field('bk_piid,bk_name,bk_fbtime,bk_neirong')->order('bk_id')->limit($p->firstRow.','.$p->listRows)->select();
        }
        return $list;
    }

    //这是全部文章页下面所有的文章
    public function yema($num){
        $con = $this->where('bk_piid=0')->count();      //取得数据表总条数
        $p = new Page($con,$num);                          //实例化分页类，think自带的
        return $p;
    }
    public function neirong($paixu,$p){
        $list = $this->where('bk_piid=0')->field('bk_id,bk_biaoti,bk_fbtime,bk_name,bk_pl,bk_zan,bk_xihuan,bk_neirong')
                ->order($paixu)->limit($p->firstRow.','.$p->listRows)->select();
        return $list;
    }

    //这是点击文章内容里面的一些操作
    public function wznrimg($num,$shuzi){
        $con = $this->where("bk_piid=$num")->count();    //取得数据表总条数
        $p = new Page($con,$shuzi);  //实例化分页类，think自带的
        return $p;
    }
    public function wznrimg2($p,$fy,$num){
        if($fy==2){
            $list = $this->where("bk_piid=$num")->field('bk_piid,bk_name,bk_fbtime,bk_neirong')->order('bk_id desc')->limit($p->firstRow.','.$p->listRows)->select();
        }else{
            $list = $this->where("bk_piid=$num")->field('bk_piid,bk_name,bk_fbtime,bk_neirong')->order('bk_id')->limit($p->firstRow.','.$p->listRows)->select();
        }
        return $list;
    }
    
}