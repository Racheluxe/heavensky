<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show();
    }
    public function intro()
    {
        $dbCommit = M('commit');
    	$this->assign('pid',I('get.pid'));
    	$this->show();
    }

    public function Submit()
    {
        $dbCommit = M('commit');
        // $result = $dbCommit->add(I('.post'));
        if($dbCommit->create()) {
            $result = $dbCommit->add(); // 写入数据到数据库 
            if($result){
        // 如果主键是自动增长型 成功后返回值就是最新插入的值
            $insertId = $result;
            }
        }
dump($_POST);
}
}
