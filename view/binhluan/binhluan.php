<?php
include '../../model/pdo.php';
include '../../model/binhluan.php';
session_start(); 
$idpro = $_REQUEST['idpro'];
$dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="row mb">
        <div class="boxtitle">Bình Luận</div>
        <div class="boxcontent2 list">
            <table border="">
                <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>'.$noidung.'</td>';
                        echo '<td>'.$id_user.'</td>';
                        echo '<td>'.$ngay_binh_luan.'</td><tr>';
                    }
                ?>
            </table>
        </div>
        <div class="boxfooter search">
            <?php
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
            ?>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" style="margin-top:20px ;" value="Gửi bình luận">
            </form>
            <?php
                }else echo "Vui lòng đăng nhập để bình luận";
            ?>
        </div>
        <?php
        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $noidung=$_POST['noidung'];
            $id_pro= $_POST['idpro'];
            $id_user=$_SESSION['user']['id'];
            $ngay_binh_luan=date('h:i:sa d/m/Y');
            insert_binhluan($noidung,$id_user,$id_pro,$ngay_binh_luan);
            header("Location:".$_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>