<?php

function m_success($data='')
{
    return array(
        'ret' => true,
        'data' => $data
    );
}
function m_error($msg='system error')
{
    return array(
        'ret' => false,
        'msg' => $msg
    );
}

function gen_code($data = array())
{
    $code = array();
    for($i=0; $i<$data['count']; $i++){
        $code[] = array(
            'code' => md5(uniqid()),
            'uname' => $data['uname'],
            'addtime' => $data['addtime']
        );
    }
    return $code;
}