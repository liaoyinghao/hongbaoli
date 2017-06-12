<?php
namespace Home\Model;

use Think\Model;
use Think\Page;

class LiuyanModel extends Model{
    public function fenye($num,$p){
        if($num==2){
            $list = $this->order('bk_id')->limit($p->firstRow.','.$p->listRows)->select();
        }else{
            $list = $this->order('bk_id desc')->limit($p->firstRow.','.$p->listRows)->select();
        }
        return $list;
    }

    public function liuyan($name,$sb_remarks){
        $bk_touxiang = $this->touxiang($name);
        $data['bk_name'] = $name;
        $data['bk_time'] = date("Y-m-d H:i:s");
        $data['bk_neirong'] = $sb_remarks;
        $data['bk_touxiang'] = $bk_touxiang;
        $adddata = $this->create($data);   //$adddata 内置函数，把 create 收集到的数据保存到$adddata里面去的
        $a = $this->add($adddata);
        return $a;
    }
    public function touxiang($name){
        $d = D('user');
        $toux = $d->where("bk_user='$name'")->field('bk_touxiang')->select();
        return $toux[0]['bk_touxiang'];
    }

}