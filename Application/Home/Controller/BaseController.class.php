<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $userInfo = session('userInfo');
        if (empty($userInfo))
        {
            redirect('/Login/index/');
        }
    }
}