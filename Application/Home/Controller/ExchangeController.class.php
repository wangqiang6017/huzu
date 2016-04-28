<?php
namespace Home\Controller;
use Think\Controller;
class ExchangeController extends BaseController {
    public function __construct()
    {
        parent::__construct();
//        $userInfo = session('userInfo');
    }

    public function message()
    {
        $newsModel = M('Message');
        $list = $newsModel->order('id desc')->select();

        $this->assign('list', $list);

        $this->display();
    }

    public function messageAdd()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $newsModel = M('Message');
            $post['uname'] = session('userInfo.name');
            $post['addtime'] = time();
            if ($newsModel->data($post)->add())
            {
                echo json_encode(m_success());exit;
            }

            echo json_encode(m_error('添加失败'));exit;
        }

        $this->display();
    }

    public function messageDel()
    {
        $id = intval($_GET['id']);
        if (M('Message')->where(array('id' => $id))->delete())
        {
            echo json_encode(m_success());exit;
        }
        echo json_encode(m_error('删除失败'));exit;
    }

    public function messageReply()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $post['status'] = 1;
            if (M('Message')->where(array('id' => $post['id']))->save($post))
            {
                echo json_encode(m_success());exit;
            }
            echo json_encode(m_error('回复失败'));exit;
        }

    }


    public function news()
    {
        $newsModel = M('News');
        $list = $newsModel->order('id desc')->select();

        $this->assign('list', $list);
        $this->display();
    }

    public function newsAdd()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $newsModel = M('News');
            $post['addtime'] = time();
            if ($newsModel->data($post)->add())
            {
                echo json_encode(m_success());exit;
            }

            echo json_encode(m_error('添加失败'));exit;
        }

        $this->display();
    }

    public function newsDel()
    {
        $id = intval($_GET['id']);
        if (M('News')->where(array('id' => $id))->delete())
        {
            echo json_encode(m_success());exit;
        }
        echo json_encode(m_error('删除失败'));exit;
    }

    public function newsView()
    {
        $id = intval($_GET['id']);
        $info = M('News')->where(array('id' => $id))->find();

        $this->assign('info', $info);
        $this->display();
    }
}