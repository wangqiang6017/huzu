<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>

</title></head>
<body>
<form id="frmGetMoney" method="post">
    <div class="div_search">
        <input type="hidden" name="id" id="id" value="<?php echo ($id); ?>" />
        <img src="/Uploads/<?php echo ($img); ?>" /><br />
        <input type="checkbox" checked="checked" id="compPay" /><span>我已确认款</span>
    </div>
</form>
</body>
</html>