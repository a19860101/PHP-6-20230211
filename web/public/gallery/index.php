<?php
    include('../../vendor/autoload.php');
    $galleries = Gjun\Web\Controller\File::index();
?>
<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-6 m-auto">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">圖片</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <input type="submit" value="上傳" class="btn btn-primary">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>名稱</th>
                    <th>檔名</th>
                    <th>上傳時間</th>
                    <th>動作</th>
                </tr>
                <?php foreach($galleries as $g){ ?>
                <tr>
                    <td><?php echo $g['title'];?></td>
                    <td><?php echo $g['img_name'];?></td>
                    <td><?php echo $g['created_at'];?></td>
                    <td>
                        <form action="">
                            <input type="submit" value="刪除" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>