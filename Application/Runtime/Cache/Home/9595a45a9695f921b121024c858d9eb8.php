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
                        <h3 class="page-title">我的团队订单 <small>My Team Orders</small> </h3>
                        <ul class="breadcrumb">
                            <li><i class="icon-home"></i><a href="/">Home</a> <i class="icon-angle-right"></i></li>
                            <li><a href="#">我的团队订单</a></li>
                        </ul>
                    </div>
                </div>

                <div class="portlet-body flip-scroll">
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$HDUserName" id="ContentPlaceHolder1_HDUserName" value="admin" />
                    <div>
                        <table class="table table-hover table-bordered flip-content  table-full-width" cellspacing="0" id="ContentPlaceHolder1_GridView1" style="border-collapse:collapse;">
                            <tr>
                                <th scope="col"><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Sort$RowNum&#39;)">编号</a></th><th scope="col"><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Sort$HelperID&#39;)">会员</a></th><th scope="col"><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Sort$HelperName&#39;)">昵称</a></th><th scope="col"><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Sort$Quantity&#39;)">提供金额</a></th><th scope="col"><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Sort$Status&#39;)">匹配状态</a></th><th scope="col"><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Sort$ConfirmStatus&#39;)">确认状态</a></th><th scope="col"><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Sort$HelpTime&#39;)">提供时间</a></th>
                            </tr><tr class="sorting">
                            <td>1</td><td>zz</td><td>zz</td><td>100</td><td>匹配成功</td><td>已付款</td><td>2016-4-21 13:07:28</td>
                        </tr><tr class="sorting">
                            <td>2</td><td>zz</td><td>zz</td><td>900</td><td>等待中</td><td>待付款</td><td>2016-4-21 13:07:28</td>
                        </tr><tr class="sorting">
                            <td>3</td><td>zyy1113</td><td>媛</td><td>200</td><td>匹配成功</td><td>待付款</td><td>2016-4-19 17:53:16</td>
                        </tr><tr class="sorting">
                            <td>4</td><td>zyy1113</td><td>媛</td><td>1800</td><td>等待中</td><td>待付款</td><td>2016-4-19 17:53:16</td>
                        </tr><tr class="sorting">
                            <td>5</td><td>zy4487</td><td>玛丽媛</td><td>100</td><td>匹配成功</td><td>待付款</td><td>2016-4-19 15:05:35</td>
                        </tr><tr class="sorting">
                            <td>6</td><td>zy4487</td><td>玛丽媛</td><td>900</td><td>等待中</td><td>待付款</td><td>2016-4-19 15:05:35</td>
                        </tr><tr class="sorting">
                            <td>7</td><td>wzh2008</td><td>王厚年</td><td>500</td><td>匹配成功</td><td>已收款</td><td>2016-4-19 8:24:00</td>
                        </tr><tr class="sorting">
                            <td>8</td><td>wzh2008</td><td>王厚年</td><td>4500</td><td>等待中</td><td>待付款</td><td>2016-4-19 8:24:00</td>
                        </tr><tr class="sorting">
                            <td>9</td><td>Luckymo</td><td>玛丽</td><td>1000</td><td>匹配成功</td><td>已收款</td><td>2016-4-18 1:56:36</td>
                        </tr><tr class="sorting">
                            <td>10</td><td>Luckymo</td><td>玛丽</td><td>9000</td><td>等待中</td><td>待付款</td><td>2016-4-18 1:56:36</td>
                        </tr><tr>
                            <td colspan="7"><table>
                                <tr>
                                    <td><span>1</span></td><td><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Page$2&#39;)">2</a></td><td><a href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$GridView1&#39;,&#39;Page$3&#39;)">3</a></td>
                                </tr>
                            </table></td>
                        </tr>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </form>
    <div class="footer">
    <div class="footer-inner"></div>
    <div class="footer-tools"><span class="go-top"><i class="icon-angle-up"></i></span></div>
</div>
</body>
</html>