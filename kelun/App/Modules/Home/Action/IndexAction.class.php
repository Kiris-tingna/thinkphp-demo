<?php
class IndexAction extends Action {
    //主控制器
    public function index(){
    	$this->result = M('ship')->where('state = 1')->select();
    	//p($result);
        
        $this->display();
    }

    public function index_s(){
        $start = I('start');
        $end = I('end');
        $where['start']  = array('like', '%'.$start.'%');
        $where['end']  = array('like','%'.$end.'%');
        
        
        $where['_logic'] = 'and';
        $map['_complex'] = $where;

        $this->result = M('ship')->where($map)->select();
        $this->display('index');
    }
    public function order()
    {
        $this->order_id = I('id','','intval');
        $this->display();
    }

    public function search()
    {
        $pid = I('passport_id');
        if($pid == '')
        {
            $this->error('输入不能为空');
        }
        $re = M('order')->where(['passport_id' => $pid])->select();
        $id = $re['ship_id'];
        $ship = M('ship')->find($id); 
        $this->assign('re',$re[0]);
        $this->assign('ship',$ship);
        $this->display();
    }

    public function orderHandel()
    {
        //p($_POST);
        $data = $_POST;
        $sid = I('ship_id','','intval');
        if(!$sid > 0)
        {
            $this->error('订票失败');
        }
        $data['state'] = 1;
        $data['is_baoxian'] = 1;
        if(M('ship')->where(['ship_id'=>$sid])->getField('remain_num') == 0)
        {
            $this->error('票已经订完');
        }
        if(M('order')->add($data) && M('ship')->where(['ship_id'=>$sid])->setDec('remain_num',1))
        {
            $this->success('订票成功');
        }else{
            $this->error('订票失败');
        }
    }
}