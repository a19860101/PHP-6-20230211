<?php
    include('../../vendor/autoload.php');
    $post = Gjun\Web\Controller\Post::edit($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>編輯文章</h2>
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">文章標題</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $post['title'];?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="1" <?php echo $post['category_id']==1 ? 'selected':'';?>>科技</option>
                        <option value="2" <?php echo $post['category_id']==2 ? 'selected':'';?>>政治</option>
                        <option value="3" <?php echo $post['category_id']==3 ? 'selected':'';?>>休閒</option>
                        <option value="4" <?php echo $post['category_id']==4 ? 'selected':'';?>>體育</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章內文</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?php echo $post['body'];?></textarea>
                </div>
                <input type="submit" value="更新" class="btn btn-primary">
                <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>