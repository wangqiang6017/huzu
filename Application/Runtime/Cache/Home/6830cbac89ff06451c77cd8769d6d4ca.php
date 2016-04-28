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
            <li><a href='Recharge.aspx'>金币充值<span class='label-en'>Recharge</span></a> </li>

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


        <div class="page-content">
            <div class="container-fluid">

                <div class="row-fluid">
                    <div class="span12">
                        <h3 class="page-title">用户列表 <small>Change Password</small> </h3>
                        <ul class="breadcrumb">
                            <li><i class="icon-home"></i><a href="/">Home</a> <i class="icon-angle-right"></i></li>
                            <li><a href="#">用户列表</a></li>
                        </ul>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <div class="controls input-icon">
                        <form method="get" action="" id="ctl01">
                            <span id="ContentPlaceHolder1_Label1" class="control-label">用户名：</span>
                            <input name="name" type="text" id="userName" class="form-control" />
                            <input type="submit" value="查询" id="btnSearch" class="btn blue" />
                        </form>
                    </div>
                    <div>
                        <table class="table table-hover table-bordered flip-content  table-full-width" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_GridView1" style="border-collapse:collapse;">
                            <tr>
                                <th scope="col"><a href="javascript:void(0);">编号</a></th>
                                <th scope="col"><a href="">用户名</a></th>
                                <th scope="col"><a href="">密码</a></th>
                                <th scope="col"><a href="">支付密码</a></th>
                                <th scope="col"><a href="">真实姓名</a></th>
                                <th scope="col"><a href="">手机号</a></th>
                                <th scope="col"><a href="">微信号</a></th>
                                <th scope="col"><a href="">QQ</a></th>
                                <th scope="col"><a href="">推荐人</a></th>
                                <th scope="col"><a href="">级别</a></th>
                                <th scope="col"><a href="">注册时间</a></th>
                                <th scope="col"><a href="">封号</a></th>
                                <th scope="col"><a href="">激活</a></th>
                                <th scope="col">操作</th>
                            </tr>
                            <?php if(empty($list)){ ?>
                            <tr>
                                <td colspan="14">暂无此用户！</td>
                            </tr>
                            <?php }else{ foreach($list as $v){ ?>
                            <tr>
                                <td><?php echo ($v["id"]); ?></td>
                                <td><?php echo ($v["name"]); ?></td>
                                <td><?php echo ($v["password"]); ?></td>
                                <td><?php echo ($v["pay_pass"]); ?></td>
                                <td><?php echo ($v["realname"]); ?></td>
                                <td><?php echo ($v["phone"]); ?></td>
                                <td><?php echo ($v["weixin"]); ?></td>
                                <td><?php echo ($v["qq"]); ?></td>
                                <td><?php echo ($v["pidname"]); ?></td>
                                <td><?php echo ($v["path"]); ?></td>
                                <td><?php echo ($v["regtime"]); ?></td>
                                <td>
                                    <span class="aspNetDisabled"><input type="checkbox" class="invalid" <?php if($v['invalid'] == 1){ echo 'checked="checked" ';} ?> value="1" /></span>
                                </td>
                                <td>
                                    <span class="aspNetDisabled"><input type="checkbox" class="active" <?php if($v['active'] == 1){ echo 'checked="checked" ';} ?> value="1" /></span>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="updateStatus" id="<?php echo ($v["id"]); ?>">修改</a>
                                </td>
                        </tr>
                            <?php }} ?>
                        </table>
                        <div class="pagelist"><?php echo ($page); ?></div>
                    </div>

                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    $(function(){
        $('.updateStatus').click(function(){
            var id = $(this).attr('id');
            var invalid = $(this).closest('tr').find('.invalid').is(':checked') == false ? 0 : 1;
            var active = $(this).closest('tr').find('.active').is(':checked') == false ? 0 : 1;
            if (invalid == 0 && active == 0)
            {
                return false;
            }
            var d = dialog( {
                title: '提示',
                content: '确定要修改吗',
                width: '60%',
                okValue: '确定',
                ok: function () {
                    this.title('修改中…');
                    $.post('/user/update/', {uid:id, invalid:invalid, active:active}, function(data){
                        window.location.reload();
                    })
                    return false;
                },
                cancelValue: '取消'
            });
            d.show();
        });
    })
</script>
<div class="footer">
    <div class="footer-inner"></div>
    <div class="footer-tools"><span class="go-top"><i class="icon-angle-up"></i></span></div>
</div>
</body>
</html>