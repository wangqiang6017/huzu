<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController
{
    public $matchStatus = array(
        '0' => '等待中',
        '1' => '匹配成功',
    );
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $userInfo = session('userInfo');
        $provideModel = M('Provide');
        $provide = $provideModel->where(array('provide_name' => $userInfo['name']))->order('id desc')->select();
        $acceptModel = M('Accept');
        $accept = $acceptModel->where(array('ac_name' => $userInfo['name']))->order('id desc')->select();
        $direct = M('User')->where("pidName = '".$userInfo['name']."'")->count();
        $path = $userInfo['path']. $userInfo['id'];
        $userInfoModel = M('UserInfo');
        $team = $userInfoModel->where("path like '$path%'")->count();
        $news = M('News')->where('is_show=1')->order('id desc')->select();
        $uinfo = $userInfoModel->where(array('uid' => $userInfo['id']))->field('level,static_money,dynamic_money')->find();

        $this->assign('provide', $provide);
        $this->assign('accept', $accept);
        $this->assign('matchStatus', $this->matchStatus);
        $this->assign('direct', $direct);
        $this->assign('team', $team);
        $this->assign('news', $news);
        $this->assign('uinfo', $uinfo);
        $this->display();
    }
}