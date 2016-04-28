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

        <form method="post" action="Default.aspx" id="ctl01">
            <div class="page-content">
                <div class="container-fluid">
                    

    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">
            <h3 class="page-title">我的主页 <small>My Homepage</small> </h3>
            <ul class="breadcrumb">
                <li><i class="icon-home"></i><a  href="./Default.aspx">Home</a> <i class="icon-angle-right"></i></li>
                <li><a  href="./Default.aspx">我的主页</a></li>
            </ul>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN ACCOUNT INFO-->
    <div class="row-fluid">
        <div class="span12">
            <div class="first_div">
                <div class="portlet box grey portlet_a" style="">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-user"></i>我的帳戶 My account </div>
                        <div class="tools"><a href="javascript:;" class="collapse"></a></div>
                    </div>
                    <div class="portlet-body">

                        
                        <table cellspacing="0" id="ContentPlaceHolder1_FormView1" style="width:100%;border-collapse:collapse;">
	<tr>
		<td colspan="2">
                                <table class="table-bordered table-striped table-condensed flip-content" width="100%">
                                    <thead class="flip-content">
                                        <tr>
                                            <td class="tit" width="21%">账户编号</td>

                                            <td style="text-align: center;" width="29%">
                                                <span id="ContentPlaceHolder1_FormView1_UserNameLabel">admin</span>
                                            </td>
                                            <td class="tit" width="21%">账户昵称</td>
                                            <td style="text-align: center;" width="29%"><span id="AccountNickName">
                                                <span id="ContentPlaceHolder1_FormView1_ActualNameLabel">iiiiiii</span>
                                            </span>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tit">信用评级</td>
                                            <td class="text-center">
                                                <img src="/Public/images/x.gif" height="12" width="14">
                                                <img src="/Public/images/x0.gif" height="12" width="14">
                                                <img src="/Public/images/x0.gif" height="12" width="14">
                                                <img src="/Public/images/x0.gif" height="12" width="14">
                                                <img src="/Public/images/x0.gif" height="12" width="14">
                                            </td>
                                            <td class="tit">我的级别</td>
                                            <td class="text-center">M0</td>
                                        </tr>
                                        <tr>
                                            <td class="tit">直推数量</td>
                                            <td class="text-center">全部<?php echo ($direct); ?> &nbsp;合格0</td>
                                            <td class="tit">团队数量</td>
                                            <td class="text-center">全部<?php echo ($team); ?> &nbsp;合格0</td>
                                        </tr>

                                        <tr>
                                            <td class="tit">静态余额</td>
                                            <td class="text-center"><span style="color: green;"><i class="icon-money"></i></span>
                                                <span><?php echo ($uinfo["static_money"]); ?></span>
                                            </td>
                                            <td class="tit">动态余额</td>
                                            <td class="text-center"><span style="color: green;"><i class="icon-money"></i></span>
                                                <span><?php echo ($uinfo["dynamic_money"]); ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tit">推荐奖待定</td>
                                            <td class="text-center"><span style="color: green;"><i class="icon-money"></i></span>
                                                <span>480</span>
                                                <!--<a href="#">充值</a>-->
                                            </td>
                                            <td class="tit">冻结数额</td>
                                            <td class="text-center"><span style="color: green;"><i class="icon-money"></i></span>0</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <div class="tg-link text-center"><b>推广链接：<a href="http://www.cc.local/login/register/id/<?php echo urlencode(session('userInfo.name'));?>" target="_blank">http://www.cc.local/login/register/id/<?php echo urlencode(session('userInfo.name'));?></a></b></div>
                            </td>
	</tr>
</table>

                    </div>
                </div>
                <div class="portlet box grey portlet_b" style="">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-user"></i>网站公告 Notice </div>
                        <div class="tools"><a href="javascript:;" class="collapse"></a></div>
                    </div>
                    <div class="portlet-body">
                        <ul class="list-notice">
                            <?php if(!empty($news)){ foreach($news as $v){ ?>
                            <li>
                                <span><?php echo date('Y-m-d H:i:s', $v['addtime']);?></span>
                                <a  href="/exchange/newsView/id/<?php echo ($v["id"]); ?>"><i class="icon-file-alt"></i><?php echo ($v["title"]); ?></a>
                            </li>
                            <?php }} ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ACCOUNT INFO-->
    <!--舍得按钮-->
    <div class="row-fluid">
        <div class="span12">
            <div class="portlet big-btn-box">
                
                <div class='big-btn-box-a'>
                    <a class='btn red btn-bigbig' id='pdBtn' href='/match/provideAdd/'><i class='icon-cloud-upload'></i>提供帮助</a>
                </div>
                <div class='big-btn-box-b'>
                    <a class='btn green btn-bigbig' id='bBtn' href='/match/acceptAdd/'><i class='icon-cloud-upload'></i>接受帮助</a>
                </div>
                
            </div>
        </div>
    </div>

    <!--舍列表-->
    <div class="row-fluid">
        <div class="span12">
            <div class="portlet box grey">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-cloud-upload"></i>接受列表</div>
                    <div class="tools"><a href="javascript:;" class="collapse"></a></div>
                </div>
                <div class="portlet-body pd-wrap">
                    
<table class="table table-hover table-bordered flip-content  table-full-width" id="sample_2">
    <tr>
        <th>编号</th>
        <th>匹配状态</th>
        
        <th>配对时间</th>
        <th>援助者</th>
        <th>接受者</th>
        <th>支付方式</th>
        <th>金额</th>
        <th></th>
    </tr>
    <tbody>
    <?php if(!empty($accept)){ $anum = 0; foreach($accept as $v){ $anum++; ?>
    <tr style="background-color: #fff;">
        <td>
            <strong>T<?php echo ($anum); ?></strong>
        </td>
        <td>
            <font color="<?php if($v['match'] == 0){ echo 'red';}else{ echo '#017F01';} ?>"><?php echo $matchStatus[$v['match']];?></font>
        </td>
        <td>
            <small><?php if($v['match'] > 0){ echo date('Y-m-d H:i:s', $v['matchtime']);}?></small>
        </td>
        <td><?php echo ($v["provide_name"]); ?></td>
        <td><?php echo ($v["ac_name"]); ?></td>
        <td>
            <img src="/Public/images/bank.png"><img src="/Public/images/zfb.png"><img src="/Public/images/wx.png">
        </td>
        <td><?php echo ($v["money"]); ?>RMB</td>
        <td>
            <?php if($v['match']){ if($v['status'] == 1){ ?>
            <input  name='btn' value='确认收款' class='btn btn-info btn-xs addmsg' data-toggle='modal' data-target='#myModal5' type='button' onclick='getMoney(<?php echo ($v["id"]); ?>)'/>
            <?php }elseif($v['status'] == 2){ ?>
            交易成功
            <?php } ?>
            <br><input name="btn" id="btn1" value="详细资料" class="btn btn_detail btn-primary btn-xs" data-toggle="modal" data-target="#myModal5" type="button" onclick="oterInfoa(71)">
            <?php } ?>
        </td>
    </tr>
    <?php }} ?>
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>

    <!--得列表-->
    <div class="row-fluid">
        <div class="span12">
            <div class="portlet box grey">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-cloud-download"></i>提供列表</div>
                    <div class="tools"><a href="javascript:;" class="collapse"></a></div>
                </div>
                <div class="portlet-body pd-wrap">
                    
<table class="table table-hover table-bordered flip-content  table-full-width" id="sample_2">
    <tr>
        <th>编号</th>
        <th>匹配状态</th>
        <th>配对时间</th>
        <th>援助者</th>
        <th>接受者</th>
        <th>支付方式</th>
        <th>金额</th>
        <th></th>
    </tr>
    <tbody>
    <?php if(!empty($provide)){ $pnum = 0; foreach($provide as $v){ $pnum++; ?>
    <tr style="background-color: #fff;">
        <td>
            <strong>T<?php echo ($pnum); ?></strong>
        </td>
        <td>
            <font color="<?php if($v['match'] == 0){ echo 'red';}else{ echo '#017F01';} ?>"><?php echo $matchStatus[$v['match']];?></font>
        </td>
        <td>
            <small><?php if($v['match'] > 0){ echo date('Y-m-d H:i:s', $v['matchtime']);}?></small>
        </td>
        <td><?php echo ($v["provide_name"]); ?></td>
        <td><?php echo ($v["accept_name"]); ?></td>
        <td>
            <img src="/Public/images/bank.png"><img src="/Public/images/zfb.png"><img src="/Public/images/wx.png">
        </td>
        <td><?php echo ($v["money"]); ?>RMB</td>
        <td>
            <?php if($v['match']){ if($v['status'] == 0){ ?>
            <input  name='btn' value='确认付款' class='btn btn-info btn-xs addmsg' data-toggle='modal' data-target='#myModal5' type='button' onclick='payMoney(<?php echo ($v["id"]); ?>)'/>
            <?php }else{ ?>
            交易成功
            <?php } ?>
            <br><input name="btn" id="btn1" value="详细资料" class="btn btn_detail btn-primary btn-xs" data-toggle="modal" data-target="#myModal5" type="button" onclick="oterInfoa(71)">
            <?php } ?>
        </td>
    </tr>
    <?php }} ?>
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function payMoney(id) {
            art.dialog.open('/match/pay/id/' + id, {
                title: '付款',
                resize: true,
                ok: function () {
                    var iframe = this.iframe.contentWindow;
                    if (!iframe.document.body) {
                        alert('iframe还没加载完毕呢');
                        return false;
                    }
                    var form = iframe.document.getElementById('frmPayMoney'),
                            compPay = iframe.document.getElementById('compPay');
                    if (compPay.checked) {
                            form.submit();
                    } else {
                        alert("必须选择我已完成付款！");
                        return false;
                    }
                    return false;
                },
                id:'mybuttons',
                cancel: true,
                close: function () {
                    location.reload();
                }
            });
        }

        function getMoney(id)
        {
            art.dialog.open('/match/get/id/' + id, {
                title: '收款',
                resize: true,
                ok: function () {
                    var iframe = this.iframe.contentWindow;
                    if (!iframe.document.body) {
                        alert('iframe还没加载完毕呢');
                        return false;
                    }
                    var form = iframe.document.getElementById('frmGetMoney'),
                            compPay = iframe.document.getElementById('compPay');
                    if (compPay.checked) {
                        form.submit();
                    } else {
                        alert("必须选择我已经收款！");
                        return false;
                    }
                    return false;
                },
                id:'mybuttons2',
                cancel: true,
                close: function () {
                    location.reload();
                }
            });
        }
        function oterInfop(dealID) {
            art.dialog.open('OtherInfo.aspx?dealID=' + dealID, {
                title: '对方详细资料',
                width: '800px',
                resize: true,
                ok: function () {
                    var iframe = this.iframe.contentWindow;
                    if (!iframe.document.body) {
                        alert('iframe还没加载完毕呢');
                        return false;
                    }
                    var form = iframe.document.getElementById('geneCodeForm'),
                            User = iframe.document.getElementById('User'),
                            count = iframe.document.getElementById('count');
                    if (check(number) && check(count)) form.submit();
                    return false;
                },
                cancel: true,
                close: function () {
                    location.reload();
                }
            });
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