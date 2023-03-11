<?php 
   include('db.php');
   $sql = 'SELECT * FROM galleries';
   $imgs = pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
   $img_nums = count($imgs);
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
        <input type="text" name="title">
        <input type="file" name="img">
        <input type="submit" value="上傳">
    </form>
    <div>
        <div><?php echo "目前共{$img_nums}張圖";?> </div>
        <?php  foreach($imgs as $img){ ?>
        <div>
            <figure>
                <img src="images/<?php echo $img['img_name'];?>" alt="" width="150">
                <figcaption><?php echo $img['title'];?></figcaption>
            </figure>
            <form action="" method="post">
                <input type="hidden" name="img" value="<?php echo $img['img_name'];?>">
                <input type="submit" value="刪除圖片" name="del" onclick="return confirm('確認刪除?')">
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>