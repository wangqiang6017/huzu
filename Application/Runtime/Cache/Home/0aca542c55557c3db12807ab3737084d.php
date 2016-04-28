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
    <!--<link  href="/Public/js/artDialog4.1.7/skins/default.css" rel="stylesheet" />-->
    <!--<link  href="/Public/js/artDialog/ui-dialog.css" rel="stylesheet" />-->
    <script src="/Public/js/artDialog4.1.7/artDialog.js?skin=default"></script>
    <script src="/Public/js/artDialog4.1.7/plugins/iframeTools.source.js"></script>
<script>
    jQuery(document).ready(function () {
        App.init(); // initlayout and core plugins
    });
</script>
</head>
<body class="page-header-fixed">
<div class="header navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="Default.aspx">

            </a>
            <a href="javascript:void(0);" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="/Public/images/menu-toggler.png" alt="" />
            </a>

            <ul class="nav pull-right">
                <li class="dropdown user" style="margin-top: 4px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i><span class="username"><?php echo ($_SESSION['userInfo']['name']); ?></span> <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/user/update/"><i class="icon-pencil"></i>修改资料</a></li>

                        <li class="divider"></li>
                        <li><a  href="/user/logout/"><i class="icon-remove"></i>安全退出</a></li>
                    </ul>
                </li>

            </ul>
            <script>
                $(function(){
                    $(".dropdown-toggle").dropdown();
                });
            </script>
        </div>
    </div>
</div>

<div class="page-container">

    <div style="height: 0px;" class="page-sidebar nav-collapse collapse">
<ul class="page-sidebar-menu">
    <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone"></div>
        <!--  BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li>
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <div style="height: 15px;"></div>
        <form class="sidebar-search" style="display: none;">
            <div class="input-box">
                <a href="javascript:;" class="remove"></a>
                <input placeholder="Search..." type="text">
                <input class="submit" value=" " type="button">
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="active">
        <a href="/">
            <i class="icon-home"></i>
            <span class="title">系统首页 <span class="label-en">Home</span></span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="">
        <a href="javascript:;"><i class="icon-cog"></i><span class="title">账户管理 <span class="label-en">Account</span></span> <span class="arrow"></span></a>
        <ul class="sub-menu">
            <li><a href="/user/update/">个人资料 <span class="label-en">My Profile</span></a></li>
            <li><a href="/user/activate/">账户激活 <span class="label-en">Activate</span></a></li>
        </ul>
    </li>

    <li class=''>
        <a href='javascript:;'><i class='icon-user'></i><span class='title'>会员中心 <span class='label-en'>Member</span></span> <span class='arrow'></span></a>
        <ul class='sub-menu'>
            <li><a href='/user/register/'>新建账户 <span class='label-en'>Create Account</span></a> </li>
            <li><a href='/user/index/'>用户列表 <span class='label-en'>Member List</span></a> </li>
            <li><a href='/user/level/'>会员级别 <span class='label-en'>Member Level</span></a> </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;"><i class="icon-cog"></i><span class="title">组织管理 <span class="label-en">Account</span></span> <span class="arrow"></span></a>
        <ul class="sub-menu">
            <li><a href="/user/team/">我的团队 <span class="label-en">My Team</span></a></li>
            <li><a href="/match/teamOrder/">我的团队订单 <span class="label-en">My TeamOrder</span></a></li>
        </ul>
    </li>

    <li class=''>
        <a href='javascript:;'> <i class='icon-user'></i> <span class='title'>匹配系统 <span class='label-en'>Matching</span></span> <span class='arrow'></span> </a>
        <ul class='sub-menu'>
            <li><a href='/match/provide/'>提供帮助 <span class='label-en'>Provide Help List</span></a> </li>
            <li><a href='/match/accept/'>接受帮助 <span class='label-en'>Accept Help List</span></a> </li>
            <li><a href='/match/order/'>交易管理 <span class='label-en'>Transaction Management</span></a> </li>
            <li><a href='/match/system/'>系统管理 <span class='label-en'>System Management</span></a> </li>
        </ul>
    </li>


    <li class="">
        <a href="javascript:;"><i class="icon-tags"></i><span class="title">财务管理 <span class="label-en">Financial</span></span> <span class="arrow"></span></a>
        <ul class="sub-menu">
            <li><a href='#'>激活码管理<span class="label-en">Activation Code</span></a></li>
            <li><a href='/match/coinList/'>排单币管理<span class="label-en">Add to Order Code</span></a></li>
            <li><a href='/match/gold/'>金币充值<span class='label-en'>Recharge</span></a> </li>

        </ul>
    </li>
    <li class="">
        <a href="javascript:;"><i class="icon-comments"></i><span class="title">交流中心 <span class=A"label-en">Communication</span></span> <span class="arrow"></span></a>
        <ul class="sub-menu">

            <li><a href='/exchange/news/'>网站公告 <span class='label-en'>News</span></a> </li>
            <li><a href="/exchange/message/">在线留言 <span class="label-en">Leave a Message</span></a> </li>
        </ul>
    </li>
    <li class="">
        <a  href="/user/logout/"><i class="icon-lock"></i><span class="title">安全退出 <span class="label-en">Logoff</span></span> <span class=""></span></a>
    </li>
</ul>

</div>
    <form method="post" action="" id="ctl01">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row-fluid">
                    <div class="span12">
                        <h3 class="page-title">分成管理 <small>Change Password</small> </h3>
                        <ul class="breadcrumb">
                            <li><i class="icon-home"></i><a href="/">Home</a> <i class="icon-angle-right"></i></li>
                            <li><a href="#">分成管理</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <div class="tab-content">
                        <div class="tab-pane row-fluid active" id="tab_1_1">
                            <div class="alert alert-error"><strong>系统提示：</strong> 申请完成后，请等待系统分配受善需求。</div>
                            <div class="span9">
                                <div class="portlet box ">
                                    <form action="" id="SettingsForm" method="post">
                                        <div class="portlet-body form-horizontal">
                                            <div class="control-group">
                                                <label class="control-label" for="">仅需互助<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control" name="min" id="min" value="<?php echo ($info["min"]); ?>" required="" type="text" />
                                                    <span>元~</span>
                                                    <input class="form-control" name="max" id="max" value="<?php echo ($info["max"]); ?>" required="" type="text" />
                                                    <span>元&nbsp;&nbsp;且必须</span>
                                                    <span>100元的整倍数</span>
                                                </div>
                                            </div>
                                            <div class="control-group" style="display:none" >
                                                <label class="control-label" for="">新用户注册奖励<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="regReward" id="regReward" value="<?php echo ($info["regReward"]); ?>" required="" type="number" />
                                                    <span>元</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="">推荐奖<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="recommendAward" id="recommendAward" value="<?php echo ($info["recommendAward"]); ?>" required="" type="text" />
                                                    <span>% 用,号分隔</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="">分红天数<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="dividendDays" id="dividendDays" value="<?php echo ($info["dividendDays"]); ?>" required="" type="number" />
                                                    <span>天</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="">冻结天数<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="freezeDays" id="freezeDays" value="<?php echo ($info["freezeDays"]); ?>" required="" type="number" />
                                                    <span>天</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="">排队利息<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="interest" id="interest" value="<?php echo ($info["interest"]); ?>" required="" type="number" />
                                                    <span>%</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="">单个账号投资封顶<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="upLimit" id="upLimit" value="<?php echo ($info["upLimit"]); ?>" required="" type="number" />
                                                    <span>元/月</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="">打款时间<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="PaymentTime" id="PaymentTime" value="<?php echo ($info["PaymentTime"]); ?>" required="" type="number" />
                                                    <span>小时</span>
                                                </div>
                                            </div>
                                            <div class="control-group" style="display:none" >
                                                <label class="control-label" for="">超时未打款扣除上级<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="fine" id="fine" value="<?php echo ($info["fine"]); ?>" required="" type="number" />
                                                    <span>元</span>
                                                </div>
                                            </div>
                                            <div class="control-group" style="display:none" >
                                                <label class="control-label" for="">提供帮助消耗排单币<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="costCoin" id="costCoin" value="<?php echo ($info["costCoin"]); ?>" required="" type="number" />
                                                    <span>个/千元</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="">最低接受帮助金额<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="minAccept" id="minAccept" value="<?php echo ($info["minAccept"]); ?>" required="" type="number" />
                                                    <span>元</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="">取消提供帮助时限<span class="required">&nbsp;</span></label>
                                                <div class="controls input-icon">
                                                    <input class="form-control from-controlx" name="cancelDays" id="cancelDays" value="<?php echo ($info["cancelDays"]); ?>" required="" type="number" />
                                                    <span>天</span>
                                                </div>
                                            </div>
                                            <div class="alert alert-error">警告，我已完全了解所有风险。我决定参与并尊重传承文化与传统。</div>
                                            <div class="form-actions">
                                                <button onclick="return doSubmit();" class="btn blue" id="joinformsubbtn">确认修改(Submit)</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    function doSubmit() {
                        $.post('/match/system/', $('#ctl01').serialize(), function(data){
                            if (data.ret)
                            {
                                alert('修改成功');
                                window.location.reload();
                            }
                            else
                            {
                                alert(data.msg);
                            }
                        }, 'json');
                        return false;
                    }
                </script>

            </div>
        </div>
    </form>
</div>
<div class="footer">
    <div class="footer-inner"></div>
    <div class="footer-tools"><span class="go-top"><i class="icon-angle-up"></i></span></div>
</div>
</body>
</html>