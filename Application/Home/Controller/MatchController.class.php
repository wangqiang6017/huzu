<?php
namespace Home\Controller;
use Think\Controller;
class MatchController extends BaseController
{
    public $systemPath = '';
    public $matchStatus = array(
        '0' => '等待中',
        '1' => '匹配成功',
    );
    public $status = array(
        '0' => '待付款',
        '1' => '待收款',
        '2' => '已收款',
    );

    public function __construct()
    {
        parent::__construct();
        $this->systemPath = APP_PATH . 'system.config';
    }
    public function coinList()
    {
        $coin = M('Coin');
        $uname = session('userInfo.name');
        $status = intval($_GET['status']);
        $where = '1=1 ';
        $where .= empty($status) ? '' : " AND status=$status";
        $where .= $uname == 'admin' ? '' : " AND uname='$uname'";
        $count      = $coin->where($where)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show = $Page->show();

        $list = $coin->where($where)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->assign('status',$status);
        $this->display();
    }

    public function coinAdd()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $post['addtime'] = time();
            $data = gen_code($post);
            $coin = M('Coin');
            $insert = $coin->addAll($data);
            if ($insert)
            {
                echo json_encode(m_success());exit;
            }

            echo json_encode(m_error('生成失败'));exit;
        }

        $this->display();
    }

    public function coinTrans()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $coin = M('Coin');
            $info = $coin->where(array('uname' => session('userInfo.name'), 'status' => 1))->field('id')->select();
            if (count($info) < $post['count'])
            {
                echo json_encode(m_error('拍单币数量不足'));exit;
            }

            foreach($info as $v)
            {
                $insert = $coin->where(array('id' => $v['id']))->save(array('uname' => $post['uname']));
            }

            if ($insert)
            {
                echo json_encode(m_success());exit;
            }

            echo json_encode(m_error('转让失败'));exit;
        }
        $this->display();
    }

    public function system()
    {
        if (IS_POST) {
            $post = $_POST;
            file_put_contents($this->systemPath, serialize($post));
            echo json_encode(m_success());exit;
        }

        $this->assign('info', unserialize(file_get_contents($this->systemPath)));
        $this->display();
    }

    public function provide()
    {
        $provide = M('Provide');
        $where = '';
        $count      = $provide->where($where)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show = $Page->show();

        $list = $provide->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->assign('matchStatus', $this->matchStatus);
        $this->assign('status', $this->status);
        $this->display();
    }

    public function provideAdd()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $system = unserialize(file_get_contents($this->systemPath));
            if ($post['money'] < $system['min'] || $post['money'] > $system['max'])
            {
                echo json_encode(m_error("金额必须在{$system['min']}~{$system['max']}之间"));exit;
            }
            $userInfo = session('userInfo');
            $coinMode = M('Coin');
            $coin = $coinMode->where(array('status' =>1, 'uname' => $userInfo['name']))->field('id')->find();
            if (empty($coin))
            {
                echo json_encode(m_error('您的拍单币不足！'));exit;
            }
            $data = array('payment' => implode(',', $post['payment']),'provide_name'=> $userInfo['name'], 'provide_nc' => $userInfo['realName'], 'addtime'=> time());

            $insetData = array(
                array_merge($data, array('money' => $post['money'] * 0.1)),
                array_merge($data, array('money' => $post['money'] * 0.9)),
            );
            if (M('Provide')->addAll($insetData))
            {
                echo json_encode(m_success());exit;
            }
            echo json_encode(m_error('申请失败！'));exit;
        }

        $this->display();
    }

    public function acceptAdd()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $system = unserialize(file_get_contents($this->systemPath));
            if ($post['money'] < $system['min'] || $post['money'] > $system['max'])
            {
                echo json_encode(m_error("金额必须在{$system['min']}~{$system['max']}之间"));exit;
            }
            $userInfo = session('userInfo');
            $userInfoMode = M('UserInfo');
            $user = $userInfoMode->where(array('uid' => $userInfo['id']))->field('static_money,dynamic_money')->find();
            if (($post['type'] == 1 && $post['money'] > $user['static_money']) ||
                ($post['type'] == 2 && $post['money'] > $user['dynamic_money'])
            )
            {
                echo json_encode(m_error('您的余额不足！'));exit;
            }
            $data = array('payment' => implode(',', $post['payment']),'ac_name'=> $userInfo['name'], 'ac_nc' => $userInfo['realName'], 'addtime'=>time(), 'money' => $post['money']);

            if (M('Accept')->data($data)->add())
            {
                $filed = $post['type'] == 1 ? 'static_money' : 'dynamic_money';
                $userInfoMode->where(array('uid' => $userInfo['id']))->setDec($filed, $post['money']);
                echo json_encode(m_success());exit;
            }
            echo json_encode(m_error('申请失败！'));exit;
        }

        $this->display();
    }

    public function getAccept()
    {
        if (IS_POST)
        {
            $id = intval($_POST['id']);
            $accept = M('Accept');
            $list = $accept->where(array('match' => 0))->order('id desc')->select();
            if (empty($list))
            {
                echo json_encode(m_error('暂无数据'));exit;
            }
            $html = '';
            foreach($list as $v)
            {
                $html .= '<tr role="row" class="odd"><td>'.$v["id"].'</td><td>'.$v["ac_name"].'</td><td>1,2,3,</td><td>'.$v["money"].'</td><td>'.$v["ac_nc"].'</td><td>'.date("Y-m-d H:i:s", $v["addtime"]).'</td><td><a href="#;" onclick="match('.$v["id"].','.$id.')">匹配</a></td></tr>';
            }
            echo json_encode(m_success($html));exit;
        }
    }

    public function setMatch()
    {
        if (IS_POST)
        {
            $tag = false;
            $aid = intval($_POST['aid']);
            $pid = intval($_POST['pid']);
            $acceptModel = M('Accept');
            $acceptModel->startTrans();

            $accept = $acceptModel->where(array('id' => $aid))->field('id,money,ac_name,ac_nc')->find();
            $provideModel = M('Provide');
            $provide = $provideModel->where(array('id' => $pid))->field('id,money,provide_name,provide_nc')->find();
            $time = time();
            $money = $provide['money'];
            // 提现 > 提供
            if ($accept['money'] > $provide['money'])
            {
                // 新添加一条提现记录，原来的记录金额 - 提供的金额
                $insertData = array(
                    'money' => $provide['money'],
                    'ac_name' => $accept['ac_name'],
                    'ac_nc' => $accept['ac_nc'],
                    'match' => 1,
                    'addtime' => $time,
                    'matchtime' => $time,
                    'provide_name' => $provide['provide_name'],
                );
                $insert = $acceptModel->data($insertData)->add();
                $updatea = $acceptModel->where(array('id' => $aid))->setDec('money', $provide['money']);
                $updatep = $provideModel->where(array('id' => $pid))->save(array('match' => 1, 'matchtime' => $time, 'accept_name' => $accept['ac_name']));
            }
            elseif($accept['money'] < $provide['money'])
            {
                $money = $accept['money'];
                // 提供 > 提现，新添加一条提供记录，原来的记录金额 - 提现金额
                $insertData = array(
                    'money' => $accept['money'],
                    'provide_name' => $provide['provide_name'],
                    'provide_nc' => $provide['provide_nc'],
                    'match' => 1,
                    'addtime' => $time,
                    'matchtime' => $time,
                    'accept_name' => $accept['ac_name'],
                );
                $insert = $provideModel->data($insertData)->add();
                $updatep = $provideModel->where(array('id' => $pid))->setDec('money', $accept['money']);
                $updatea = $acceptModel->where(array('id' => $aid))->save(array('match' => 1, 'matchtime' => $time, 'provide_name' => $provide['provide_name']));
            }
            else
            {
                $updatea = $acceptModel->where(array('id' => $aid))->save(array('match' => 1, 'matchtime' => $time, 'provide_name' => $provide['provide_name']));
                $updatep = $provideModel->where(array('id' => $pid))->save(array('match' => 1, 'matchtime' => $time, 'accept_name' => $accept['ac_name']));
            }
            $orderData = array(
                'aid' => $aid,
                'pid' => $pid,
                'aname' => $accept['ac_name'],
                'pname' => $provide['provide_name'],
                'addtime' => $time,
                'money' => $money
            );
            $inOrder = M('Order')->data($orderData)->add();

            if($updatea && $updatep && $inOrder){
                $tag = true;
                $acceptModel->commit();//成功则提交
            }else{
                $acceptModel->rollback();//不成功，则回滚
            }
            if ($tag)
            {
                echo json_encode(m_success());exit;
            }
            echo json_encode(m_error('匹配失败'));exit;
        }
    }

    public function accept()
    {
        $order = M('Accept');
        $where = '';
        $count      = $order->where($where)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show = $Page->show();

        $list = $order->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->assign('status',$this->status);
        $this->assign('matchStatus',$this->matchStatus);
        $this->display();
    }

    public function order()
    {
        $order = M('Order');
        $where = '';
        $count      = $order->where($where)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page->setConfig('header', '<span class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show = $Page->show();

        $list = $order->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->assign('status',$this->status);
        $this->display();
    }

    public function pay()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
            // 上传文件
            $info   =   $upload->upload();
            if(!$info)
            {
                echo '<script>alert("请先上传图片");window.location.href="/match/pay/id/'.$post["id"].'";</script>';exit;
            }
            else
            {
                $img = $info['file']['savepath'].$info['file']['savename'];
                $orderModel = M('Order');
                $orderModel->startTrans();
                $info = $orderModel->where(array('pid' => $post['id']))->field('aid')->find();
                $in = M('Provide')->where(array('id' => $post['id']))->save(array('status' => 1));
                $in1 = M('Accept')->where(array('id' => $info['aid']))->save(array('status' => 1));
                $in2 = $orderModel->where(array('pid' => $post['id']))->save(array('status' => 1,'payimg'=>$img));

                if($in && $in1 && $in2){
                    $orderModel->commit();//成功则提交
                }else{
                    $orderModel->rollback();//不成功，则回滚
                }
                echo '<script>parent.art.dialog({id:\'mybuttons\'}).close();</script>';
            }
            exit;
        }

        $this->assign('id',intval($_GET['id']));
        $this->display();
    }

    public function get()
    {
        $orderModel = M('Order');
        if (IS_POST)
        {
            $id = intval($_POST['id']);
            $orderModel->startTrans();
            $info = $orderModel->where(array('aid' => $id))->field('id,pid')->find();
            $in = M('Provide')->where(array('id' => $info['pid']))->save(array('status' => 2));
            $in1 = M('Accept')->where(array('id' => $id))->save(array('status' => 2));
            $in2 = $orderModel->where(array('pid' => $info['id']))->save(array('status' => 2, 'transtime' => time()));

            // TODO

            if($in && $in1 && $in2){
                $orderModel->commit();//成功则提交
            }else{
                $orderModel->rollback();//不成功，则回滚
            }
            echo '<script>parent.art.dialog({id:\'mybuttons2\'}).close();</script>';
            exit;
        }

        $id = intval($_GET['id']);
        $img = $orderModel->where(array('aid' => $id))->field('payimg')->find();

        $this->assign('id', $id);
        $this->assign('img', $img['payimg']);
        $this->display();
    }

    public function teamOrder()
    {

        $this->display();
    }

    public function gold()
    {
        if (IS_POST)
        {
            $post = $_POST;
            $info = M('User')->where(array('name' => trim($post['name'])))->field('id')->find();
            if (empty($info))
            {
                echo json_encode(m_error('没有这个用户'));exit;
            }
            if (M('UserInfo')->where(array('uid' => $info['id']))->setInc('static_money', intval($post['money'])))
            {
                echo json_encode(m_success());exit;
            }

            echo json_encode(m_error('添加失败'));exit;
        }

        $this->display();
    }
}