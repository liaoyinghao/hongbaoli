<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
    
//登录*****************************************************************************
    public function login($name,$pass){
        if(empty($name) || empty($pass)){ return 5; }
        $pd = $this->field('passwd')->where("name='$name'")->select();
        if($pd){
            if($pd[0]['passwd']==$pass){
                $u = $this->where("name='$name'")->setInc('frequency',1);
                if($u){
                    session("hongbaoli",$name);
                    return 1; 
                }else{ 
                    return 2; 
                }
            }else{ return 3; }
        }else{ return 4; }
    }

//登录*****************************************************************************
    public function portrait($user){
        $name = $this->field("portrait")->where("name='$user'")->select();
        $nameimg = $name[0]["portrait"];
        if($nameimg == false){
            $portrait = "<img src='$nameimg' class='img-circle'>";
        }else{
            $portrait = "";
        }
        return $portrait;
    }











}
