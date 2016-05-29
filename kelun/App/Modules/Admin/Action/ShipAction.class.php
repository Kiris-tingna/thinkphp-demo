<?php
    /**
    * 
    */
    class ShipAction extends Action
    {
        public function index()
        {
           $this->display();
        }

        public function select()
        {
            $this->re = M('ship')->where('state = 1')->select();
            $this->display();
        }

        public function update()
        {
            $id = I('id','','intval');
            $this->re = M('ship')->find($id);

            $this->display();
        }

        public function delete()
        {
            $id = I('id','','intval');

            if(M('ship')->where(['ship_id'=>$id])->setField('state',0))
            {
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
        
        public function addHandle()
        {
            $data = $_POST;
            if(!in_array(I('level'), ['A','B','C']))
            {
                halt('level 错误');
            }
            $data['date'] = date("Y-m-d H:i:s" ,time());
            $data['intiliaze_num'] = I('intiliaze_num','','intval');
            $data['begin']      =   I('begin');
            $data['arrival']    =   I('arrival');
            $data['price']      =   I('price','','intval');

            $data['remain_num'] =   I('intiliaze_num','','intval');
            $data['state'] = 1;
            // p($data);
            // die;

            if (M('ship')->add($data))
            {
                $this->success('添加成功');
            }else{
                $this->error('添加失败！');
            }
        }

        public function updateHandle()
        {
            $id = I('ship_id','','intval');
            $data = $_POST;
            $data['date'] = date("Y-m-d H:i:s" ,time());
            $data['state'] = 1;
            if(M('ship')->where(['ship_id' => $id])->save($data))
            {
                $this->success('修改成功');
            }else{
                $this->error('修改失败！');
            }
        }

        public function order()
        {
            $re = M('order')->select();
            foreach ($re as $key => $value) {
                $id = $value['ship_id'];
                $re[$key]['ship_n'] = M('ship')->where('ship_id = '.$id)->getField('ship_num');
            }
            $this->assign('re',$re);
            $this->display();
        }
    }