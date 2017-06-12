<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    // 自动验证
    // array(验证字段,验证规则,错误提示,[验证条件],[附加规则],[验证时间]);
// 用户表自动验证
    protected $_validate = array(
        //-1 代表账号长度不合法
        array('bk_user','3,12',-1,0,'length'),
        //-2 代表密码长度不合法
        array('bk_password','6,30',-2,0,'length'),
        //-3 代表密码和确认密码不一致
        array('repassword','bk_pass',-3,0,'confirm'),
        //-4 代表密码和确认密码不一致
//        array('wb_email','email',-4,0),
        //-5 代表账号被占用了
        array('bk_user','',-5,0,'unique'),
        //-6 代表邮箱被占用了
//        array('wb_email','',-6,0,'unique'),
        //-7代表的是验证码错误
        array('verify','check_verify',-7,0,'function'),
    );

//用户表自动完成************************************************************************************
    protected $_auto = array (
        array('bk_password','sha1',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
    );

//验证字段是否被占用*******************************************************************************
    public function checkField($field,$type){
        $data=array();
        switch ($type){
            case 'username':
                $data['bk_user']=$field;
                break;
            case 'verify':
                $data['verify']=$field;
                break;
            default:
                return 0;
        }
        return $this->create($data)? 1:$this->getError();
    }

//注册一个用户************************************************************************************
    public function register($username,$password,$passwords){
        $data=array(
            'bk_user'=> $username,
            'bk_password'=>$password,
            'passwords'=>$password,
            'bk_huaduo'=>100,
            'bk_time'=>date("Y-m-d H:i:s"),
        );
        if($this->create($data)){
            $uid= $this->add();     //$this->create($data)
            return $uid? $uid:0;
        }else{
            return $this->getError();
        }
    }
    
//登录**********************************************************************************************
    public function login1($name,$pass){
        $data=array(
            'bk_user'=> $name,
            'bk_password'=>$pass,
        );
        $uid= $this->field("bk_user.bk_user,bk_user.bk_id")->where($data)->find();
        if($uid){
            session('userinfo',$uid);
            $time = date("Y-m-d H:i:s");
            $this->where("bk_user='$name'")->setField('bk_dltime',"$time");
            return $uid['bk_user'];
        }else{
            return null;
        }

    }

//登录之后用户的信息查看****************************************************************************
    public function chakan($name){
        $ap = $this->where("bk_user='$name'")->field("bk_id,bk_user,bk_gxqm,bk_email,bk_touxiang,bk_dltime,bk_gx,bk_wz")->select();
        return $ap;
    }
//登录之后用户的信息修改1****************************************************************************
    public function xiugai1($name){
        $ap = $this->where("bk_user='$name'")->field("bk_id,bk_user,bk_gxqm,bk_email,bk_touxiang")->select();
        return $ap;
    }
//登录之后用户的信息修改2****************************************************************************
    public function xiugai2($name,$qianming,$email){
        $updata['bk_email']="$email";
        $updata['bk_gxqm']="$qianming";
        $ca = $this->where("bk_user='$name'")->save($updata);
        if($ca){
            return $ca;
        }else{
            return $ca;
        }
    }
    
//发布文章左边的个人资料
    public function ziliao($name){
        $ziliao = $this->field('bk_user,bk_touxiang,bk_dltime,bk_gx,bk_wz')->where("bk_user='$name'")->select();
        return $ziliao;
    }
    
}
