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
    <div class="row mb border my-4">
        <div class="tittle bg-gray-400 px-2 py-3">
            <h1 class="uppercase">Mô tả chi tiết</h1>
        </div> 
        <div class="boxcontent2 list px-6">
            <table  class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 my-3 px-4">
                <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '
                            <tbody>
                                <tr class="bg-white border dark:border-gray-500 text-black">
                                    <td class="px-7 py-4 text-black">'.$noidung.'</td>
                                    <td class="px-8 py-4 text-black">'.$id_user.'</td>
                                    <td class="px-8 py-4 text-black">'.$ngay_binh_luan.'</td>
                                <tr>
                            </tbody>
                        ';
                    } 
                ?>
            </table>
        </div>
        <div class="boxfooter search">
            <?php
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
            ?>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="px-3 py-2">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input class="border w-full px-2 py-4 mt-3" placeholder="Enter the comment..." type="text" name="noidung">
                <input class="border rounded-lg px-2 py-2" type="submit" name="guibinhluan" style="margin-top:20px ;" value="Gửi bình luận">
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