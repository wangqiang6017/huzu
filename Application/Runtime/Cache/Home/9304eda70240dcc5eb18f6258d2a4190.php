<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>

</title></head>
<body>
<form id="frmPayMoney" method="post" action="" enctype="multipart/form-data">
    <div class="div_search">
        <input type="hidden" name="id" id="id" value="<?php echo ($id); ?>" />
        <input type="hidden" name="type" id="type" value="<?php echo ($type); ?>" />
        请选择要上传的<b style="color: Red">付款截图</b>文件:
        <input type="file" id="file" name="file"/><br />
        <input type="checkbox" checked="checked" id="compPay" /><span>我已完成付款</span>
    </div>
</form>
</body>
</html>