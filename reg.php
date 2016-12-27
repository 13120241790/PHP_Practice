<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册页面</title>
</head>
<body>
<h2>注册页面</h2>

<?php
//验证码
$string = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
$code = '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . $string{mt_rand(0, strlen($string) - 1)} . '</span>';
$code .= '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . $string{mt_rand(0, strlen($string) - 1)} . '</span>';
$code .= '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . $string{mt_rand(0, strlen($string) - 1)} . '</span>';
$code .= '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . $string{mt_rand(0, strlen($string) - 1)} . '</span>';
?>


<form action="regAction.php" method="post">

    <table border="1" cellpadding="0" cellspacing="0" bgcolor="#ABCDEF" width="80%">
        <tr>
            <td align="center">用户名</td>
            <td><input type="text" name="username" id="" placeholder="请输入合法用户名">用户名以字母开始，长度5~10</td>
        </tr>
        <tr>
            <td align="center">密码</td>
            <td><input type="password" name="password" id="" placeholder="请输入密码">密码不能为空</td>
        </tr>
        <tr>
            <td align="center">确认密码</td>
            <td><input type="password" name="password1" id="">两次密码一致</td>
        </tr>
        <tr>
            <td align="center">邮箱</td>
            <td><input type="email" name="email" id="">请输入合法邮箱</td>
        </tr>
        <tr>
            <td align="center">年龄</td>
            <td><input type="number" name="age" id="">要求年龄范围在1~125</td>
        </tr>
        <tr>
            <td align="center">验证码</td>
            <td>
                <input type="text" name="verify" id=""/>
                <?php echo $code; ?>
                <input type="hidden" name="verify1" value='<?php echo strip_tags($code); ?>'/>
            </td>
        </tr>
        <tr>
            <td align="center"><input type="submit" value="注册"></td>
        </tr>
    </table>


</form>
</body>
</html>
