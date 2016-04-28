<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $userModel = M('User');
            $isReg = $userModel->where("(phone=".intval($post['username'])." or name='".htmlspecialchars($post['username'])."') and password = '".htmlspecialchars($post['password'])."'")->join('LEFT JOIN user_info ON user.id = user_info.uid')->field('user.id,name,realName,path')->find();

            if (empty($isReg))
            {
                echo json_encode(m_error('用户名或密码错误')); exit;
            }

            session('userInfo', array('id' => $isReg['id'], 'name' => $isReg['name'],'realName'=> $isReg['realname'], 'path' => $isReg['path']));
            echo json_encode(m_success()); exit;
        }

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

            $info = $userModel->join('LEFT JOIN user_info ON user.id=user_info.uid')->where(array("name"=>$post['pidName']))->field('user.id,user_info.path')->find();
            $path = '0,';
            if (!empty($info))
            {
                $path = $info['path'] . $info['id'] . ',';
            }
            else
            {
                unset($post['pidName']);
            }
            $post['regtime'] = time();
            if ($id = $userModel->data($post)->add())
            {
                M('UserInfo')->data(array('uid' => $id, 'path' => $path))->add();
                session('userInfo', array('id' => $id, 'name' => $post['name'], 'realName' => $post['realName'], 'path' => $path));
                echo json_encode(m_success()); exit;
            }
            echo json_encode(m_error('注册失败')); exit;
        }

        $this->display();
    }
}