<?php
if (empty($_COOKIE['username']))
{
    echo "<script>alert('请先登陆!')</script>";
    echo "<script>window.location.href='login.php';</script>";
}
?>
<meta charset="utf-8"/></head>
<?php
#$fullpath = iconv('gbk', 'utf-8', $_GET['fullpath']);
if (! file_exists($_GET['fullpath']))
{
    echo "<script>alert('文件不存在!删除失败!')</script>";
    die;
}

if (unlink($_GET['fullpath']))
    echo "<script>alert('删除成功!')</script>";
else
    echo "<script>alert('删除失败!')</script>";
echo "<script>window.location.href='delete_file.php';</script>";
?>
