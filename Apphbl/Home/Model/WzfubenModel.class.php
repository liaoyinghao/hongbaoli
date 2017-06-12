<?php
namespace Home\Model;

use Think\Model;

class WzfubenModel extends Model {
    public function wzfuben($bk_name,$bk_biaoti,$bk_neirong){
        $data=array(
            'bk_name'=> $bk_name,
            'bk_biaoti'=>$bk_biaoti,
            'bk_time'=> date("Y-m-d H:i:s"),
            'bk_neirong'=>$bk_neirong,
        );
        $this->create($data);
        if($this->add()){
            return 1;
        }else{
            return null;
        }
    }
}
