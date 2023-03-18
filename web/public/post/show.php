<?php
    include('../../vendor/autoload.php');
    $post = Gjun\Web\Controller\Post::show($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row">
    <div class="col-12 py-3">
            <div class="border p-4 rounded">
                <small class="text-muted"><?php echo $post['category_id']; ?></small>
                <h3 class="mb-1"><?php echo $post['title']; ?></h3>
                <div class="my-4">
                    <?php echo $post['body']; ?>
                </div>
                <div class="mb-3">
                    <small class="text-muted"><?php echo $post['created_at']; ?></small>
                </div>
                <a href="index.php" class="btn btn-success">文章列表</a>
            </div>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>