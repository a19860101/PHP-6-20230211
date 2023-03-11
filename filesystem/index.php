<?php 
    if(isset($_REQUEST['del'])){
        unlink($_REQUEST['img']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="上傳">
    </form>
    <div>
        <?php
            $imgs = glob('images/*');
            // var_dump($imgs);
            $img_nums = count($imgs);
            
        ?>
        <div><?php echo "目前共{$img_nums}張圖";?> </div>
        <?php  foreach($imgs as $img){ ?>
        <div>
            <img src="<?php echo $img;?>" alt="" width="150">
            <form action="" method="post">
                <input type="hidden" name="img" value="<?php echo $img;?>">
                <input type="submit" value="刪除圖片" name="del" onclick="return confirm('確認刪除?')">
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>