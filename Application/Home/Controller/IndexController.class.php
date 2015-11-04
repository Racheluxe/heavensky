<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show();
    }
    public function intro()
    {
    	$this->assign('id',I('get.id'));
    	$this->show();
    }

    public function Submit()
    {
    	$dbCommit = M('commit');
    	dump($dbCommit);
    }
}
