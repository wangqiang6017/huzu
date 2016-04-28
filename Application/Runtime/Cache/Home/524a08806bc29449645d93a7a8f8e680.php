<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>传承</title>
    <link  href="/Public/css/bootstrap.css" rel="stylesheet" />
    <link  href="/Public/css/bootstrap-responsive.css" rel="stylesheet" />
    <link  href="/Public/css/Font-Awesome-3.2.1/css/font-awesome.css" rel="stylesheet" />
    <link  href="/Public/css/style-metro.css" rel="stylesheet" />
    <link  href="/Public/css/style.css" rel="stylesheet" />
    <link  href="/Public/css/style-responsive.css" rel="stylesheet" />
    <link  href="/Public/css/grey.css" rel="stylesheet" />
    <link  href="/Public/css/uniform.css" rel="stylesheet" />
    <link  href="/Public/css/jquery.css" rel="stylesheet" />
    <link  href="/Public/css/daterangepicker.css" rel="stylesheet" />
    <link  href="/Public/css/fullcalendar.css" rel="stylesheet" />
    <link  href="/Public/css/jquery_002.css" rel="stylesheet" />
    <link  href="/Public/css/news.css" rel="stylesheet" />
    <link  href="/Public/css/glyphicons.css" rel="stylesheet" />
    <link  href="/Public/css/halflings.css" rel="stylesheet" />
    <link  href="/Public/css/Site.css" rel="stylesheet" />
    <script src="/Public/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/jquery-ui-1.8.16.min.js"></script>
    <script src="/Public/js/transition.js"></script>
    <script src="/Public/js/tooltip.js"></script>
    <script src="/Public/js/popover.js"></script>
    <script src="/Public/js/button.js"></script>
    <script src="/Public/js/carousel.js"></script>
    <script src="/Public/js/modal.js"></script>
    <script src="/Public/js/modernizr-2.6.2.js"></script>
    <script src="/Public/js/respond.js"></script>
    <script src="/Public/js/scrollspy.js"></script>
    <script src="/Public/js/tab.js"></script>
    <script src="/Public/js/app.js"></script>
    <script src="/Public/js/artDialog4.1.7/artDialog.js?skin=default"></script>
    <script src="/Public/js/artDialog4.1.7/plugins/iframeTools.source.js"></script>
    <script>
        jQuery(document).ready(function () {
            App.init(); // initlayout and core plugins
        });
    </script>
</head>
<body>
<div class="page-content" style="margin-left:0;">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <h3 class="page-title">新建账户 <small>Create User</small> </h3>
            </div>
        </div>
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <div class="tab-pane row-fluid active" id="tab_1_1">
                    <div class="span9">
                        <div class="portlet box ">
                            <div class="portlet-body form-horizontal">
                                <form action="" id="loginForm" method="post">
                                    <div class="control-group">
                                        <label class="control-label" for="">用户名</label>
                                        <div class="controls input-icon">
                                            <input id="name" class="form-control" name="name" required="" type="text" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="">确认用户名</label>
                                        <div class="controls input-icon">
                                            <input id="UserName_repeat" class="form-control" name="UserName_repeat" required="" type="text" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="">登入密码</label>
                                        <div class="controls input-icon">
                                            <input id="password" class="form-control" name="password" min="6" required="" type="password" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="">确认登入密码</label>
                                        <div class="controls input-icon">
                                            <input id="PassWord2" class="form-control" name="PassWord2" required="" type="password" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="">二级密码</label>
                                        <div class="controls input-icon">
                                            <input name="pay_pass" class="form-control" id="pay_pass" min="6" required="" type="password" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="">确认二级密码</label>
                                        <div class="controls input-icon">
                                            <input name="PaymentPassWord2" class="form-control" id="PaymentPassWord2" required="" type="password" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="">姓名</label>
                                        <div class="controls input-icon">
                                            <input id="realName" class="form-control" name="realName" maxlength="60" required="" type="text" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="">手机号码</label>
                                        <div class="controls input-icon">
                                            <input id="phone" class="form-control" name="phone" maxlength="13" required="" type="text" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">短信验证码<span class="required">*</span></label>
                                        <div class="controls input-icon">
                                            <input id="SMSCode" name="SMSCode" placeholder="短信验证码" class="span3 m-wrap" required="" type="text"/>
                                            <input type="button" id="getSMS" value="获取短信验证码" class="btn red" onclick="return GetSMSCode_Click();" />
                                            <span class="help-inline"></span>
                                        </div>
                                        <div class="help-hint">
                                            <span id="lblSMS"></span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="">推荐人账户</label>
                                        <div class="controls input-icon">
                                            <input id="pidName" class="form-control" name="pidName" readonly="true" value="<?php echo ($_GET['id']); ?>" type="text" />
                                        </div>
                                    </div>
                                    <div class="alert alert-error">
                                        <input name="ty" id="ty" value="ye" checked="checked" type="checkbox" />我已完全了解所有风险。。
                                    </div>
                                    <div class="control-group">
                                        <div class="controls input-icon">
                                            <button class="btn btn-success" onclick="return doSubmit();">注册</button>
                                            <input name="重置" class="btn btn-default" value="取消" type="reset" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function isNull(arg1) {
        return !arg1 && arg1 !== 0 && typeof arg1 !== "boolean" ? true : false;
    }
    var nTime = 120;

    function doSubmit() {
        var r_type = document.getElementById("Mobile").value;
        if (isNull(r_type)) {
            alert("手机号不能为空！");
            return false;
        }

        $.post('/login/register',$("#loginForm").serialize(),function(data){
            if(data.ret){
                window.location.href='/index/index';
            }
            else{
                alert(data.msg);
            }
        }, 'json');
        return false;
    }

    function checkSend() {
        if (nTime <= 0) {
            clearInterval();
            $("#getSMS").attr("value", "获取短信验证码");
            $("#getSMS").attr("disabled", false);
        } else {
            $("#getSMS").attr("value", nTime + "秒后重新获取验证码");
            nTime = nTime - 1;
        }

    }

</script>
</body>
</html>