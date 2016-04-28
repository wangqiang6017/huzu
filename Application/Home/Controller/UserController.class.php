<?php
/**
 * Copyright (c) 2016
 * 摘    要：
 * 修改日期：2016.04.17
 */
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public $level = array(
        0 => '第一代',
        1 => '第二代',
        2 => '第三代',
        3 => '第四代',
        4 => '第五代',
    );

    public function index()
    {
        $name = trim(I('get.name', ''));
        $where = empty($name) ? '' : "name='$name'";
        $userModel = M('User');
        $count      = $userModel->where($where)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show = $Page->show();

        $list = $userModel->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function register()
    {
        if (IS_POST)
        {
            $post = $_POST;
            if (!preg_match("/^1[0-9]{10}$/", $post['phone']))
            {
                echo json_encode(m_error('请填写正确手机号')); exit;
            }
            // 其他校验
            $userModel = M('User');
            $isReg = $userModel->where("phone= {$post['phone']} or name='".$post['name']."'")->field('id')->find();
            if (!empty($isReg))
            {
                echo json_encode(m_error('该手机号或用户名已经注册过')); exit;
            }

            $path = session('userInfo.path') . session('userInfo.id') . ',';

            $post['regtime'] = time();
            if ($id = $userModel->data($post)->add())
            {
                M('UserInfo')->data(array('uid' => $id, 'path' => $path))->add();
                echo json_encode(m_success()); exit;
            }
            echo json_encode(m_error('注册失败')); exit;
        }

        $this->display();
    }

    public function update()
    {
        $userModel = M('User');
        if (IS_POST)
        {
            $post = $_POST;
            if($userModel->where(array('id' => $post['uid']))->save($post))
            {
                echo json_encode(m_success());exit;
            }
            echo json_encode(m_error('修改失败'));exit;
        }
        $info = $userModel->where(array('id' => session('userInfo.id')))->find();

        $this->assign('info', $info);
        $this->display();
    }

    public function activate()
    {

        $this->display();
    }

    public function logout()
    {
        session('userInfo',null);
        redirect('/Login/index/');
    }

    public function level()
    {
        $userModel = M('UserLevel');
        $list = $userModel->order('id asc')->select();

        $this->assign('list', $list);
        $this->display();
    }

    public function levelAdd()
    {
        if (IS_POST)
        {
            $userModel = M('UserLevel');
            $post = $_POST;
            if ($userModel->data($post)->add())
            {
                echo json_encode(m_success()); exit;
            }
            echo json_encode(m_error('添加失败')); exit;
        }

        $this->display();
    }

    public function levelEdit()
    {
        $userModel = M('UserLevel');
        if (IS_POST)
        {
            $post = $_POST;
            if ($userModel->where(array('id' => $post['id']))->save($post))
            {
                echo json_encode(m_success());exit;
            }
            echo json_encode(m_error('删除失败'));exit;

            exit;
        }
        $id = intval($_GET['id']);

        $info = $userModel->where(array('id' => $id))->find();
        $this->assign('info', $info);
        $this->display('levelAdd');
    }

    public function levelDel()
    {
        $id = intval($_GET['id']);
        if (M('UserLevel')->where(array('id' => $id))->delete())
        {
            echo json_encode(m_success());exit;
        }
        echo json_encode(m_error('删除失败'));exit;
    }

    public function team()
    {
        $model = M('User');
        $userInfo = session('userInfo');
        $name = htmlspecialchars(trim($_GET['name']));
        $where1 = empty($name) ? '' : " and u.name like '$name%'";
        $where = $userInfo['path'] . $userInfo['id'];
        $sqlCount = "SELECT count(u.id) AS count FROM `user` u LEFT JOIN user_info i ON u.id=i.`uid` WHERE 1=1 $where1 and i.path LIKE '$where%'";

        $count = $model->query($sqlCount);
        $Page       = new \Think\Page($count[0]['count'],20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show = $Page->show();
        $sql = "SELECT u.id,u.name,u.realName,u.phone,u.weixin,u.qq,u.pidName,u.invalid,u.active,i.level,i.path FROM `user` u LEFT JOIN user_info i ON u.id=i.`uid` WHERE 1=1 $where1 and i.path LIKE '$where%' order by u.id desc limit " . $Page->firstRow . ',' . $Page->listRows;

        $list = $model->query($sql);
        $this->assign('list', $list);
        $this->assign('name', $name);
        $this->display();
    }
}