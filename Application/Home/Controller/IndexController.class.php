<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function Index()
    {
        $this->show();
    }
    public function Intro()
    {
        $dbComment = M('comment');
        $this->assign('pid', I('get.pid'));
        $arrComment = $dbComment->where(array('pid'=>I('get.pid')))->order('time desc')->limit(20)->select();
        $this->assign('arrComment',$arrComment);
        $this->show();
    }

    public function Submit()
    {
        $dbComment = M('comment');
        if ($dbComment->create()) {
            $result = $dbComment->add(); // 写入数据到数据库
            if ($result) {
                $this->ajaxReturn(array('status' => 0, 'msg' => 'success'));
            } else {
                $this->ajaxReturn(array('status' => 0, 'msg' => 'error', array('sql' => $dbComment->getLastSql(), 'err' => $dbComment->getDbError())));
            }
        }
    }
}
