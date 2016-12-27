<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>网页计算器</title>
</head>
<body>

<form action="#" method="POST">
    num1: <input type="text" name="num1" id="">
    <select name="op" id="">

        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>

    </select>
    num2: <input type="text" name="num2" id="">

    <input type="submit" name="btn" value="计算" id="">

</form>


<?php


@$num1 = $_POST['num1'];
@$num2 = $_POST['num2'];
@$op = $_POST['op'];
@$btn = $_POST['btn'];


if (isset($btn)) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo '输入值非法或为空';
    } else {
        if ($op == '+') {
            echo $num1 . '+' . $num2 . '=' . ($num1 + $num2);
        } else if ($op == '-') {
            echo $num1 . '+' . $num2 . '=' . ($num1 - $num2);
        } else if ($op == '*') {
            echo $num1 . '+' . $num2 . '=' . ($num1 * $num2);
        } else if ($op == '/') {
            echo $num2 != 0 ? ($num1 . '+' . $num2 . '=' . ($num1 / $num2)) : '被除数不能为0';
        } else if ($op == '%') {
            echo $num1 . '+' . $num2 . '=' . ($num1 % $num2);
        }
    }


} else {
    echo "请输入需要计算的值";
}

?>

</body>
</html>