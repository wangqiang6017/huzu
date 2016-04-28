<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>传承</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <link href="/Public/css/cf.css" rel="stylesheet" />
</head>
<body>
    <div class="site-wrapper">

        <header id="header" class="header">
            <div id="header-global" class="header-main">
                <div class="wrapper header-global-wrapper">
                    
                </div>
            </div>
        </header>
        <div class="no-login-wrapper">
            <div id="main" class="wrapper">

                <section data-cid="view48" class="center login-form">
                    <div class="login-container">
                        <legend>
                            <h3 class="form-title">登录传承</h3>
                        </legend>
                        <div class="form-controls">
                            <form id="frmPost" method="post" action="">
                                <div data-cid="view58" class="control-group">
                                    <label class="assistive-text" style="font-size: 14px">用户名</label>
                                    <div class="controls">
                                        <input id="UserName" name="username" type="text" class="width-full user-success" placeholder="用户名 / 手机号" autocapitalize="none" />
                                    </div>
                                    <div class="help-hint"></div>
                                </div>

                                <div data-cid="view61" class="control-group">
                                    <label class="assistive-text" style="font-size: 14px">登录密码</label>
                                    <div class="controls">
                                        <input type="password" id="PassWord" name="password" class="width-full" placeholder="登录密码" onkeydown="if(event.keyCode==13){doSubmit();};" />
                                    </div>
                                    <div class="help-hint"></div>
                                </div>
                                <div data-cid="view67" class="control-group">
                                    <div class="form-actions">
                                        <input id="IsSubmit" name="IsSubmit" type="hidden" value="" />
                                        <button onclick="return doSubmit();" class="btn btn-success btn-large width-full">确认登录</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div></div>
                    </div>
                </section>
            </div>
        </div>
        
    </div>
    <div id="overlays"></div>
</body>
</html>
<script src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    function doSubmit() {
        var UserName = document.getElementById("UserName");
        if (UserName == null) return;
        if (IsNull(UserName.value)) {
            alert("用户名不能为空");
            UserName.focus();
            return;
        }
        var PassWord = document.getElementById("PassWord");
        if (PassWord == null) return;
        if (IsNull(PassWord.value)) {
            alert("密码不能为空");
            PassWord.focus();
            return;
        }
        $.post('/login/index/',$("#frmPost").serialize(),function(data){
            if(data.ret){
                window.location.href='/index/index';
            }
            else{
                alert(data.msg);
            }
        }, 'json');
        return false;
    }
    function IsNull(value) {
        if (value.replace(/^\s+|\s+$/g, '') == '')
            return true;
        else
            return false;
    }
</script>