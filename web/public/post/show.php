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
                <small class="text-muted"><?php echo $post['category_title']; ?></small>
                <h3><?php echo $post['title']; ?></h3>
                <small class="text-muted">
                    <?php echo $post['name']; ?>
                    [<?php echo $post['email']; ?>]
                </small>
                <div class="my-4">
                    <?php echo $post['body']; ?>
                </div>
                <div class="mb-3">
                    <small class="text-muted"><?php echo $post['created_at']; ?></small>
                </div>
                <a href="index.php" class="btn btn-primary">文章列表</a>
                <?php if(isset($_SESSION['AUTH']) && $_SESSION['AUTH']['id'] == $post['user_id']){?>
                <a href="edit.php?id=<?php echo $post['id'];?>" class="btn btn-success">編輯</a>
                <form action="delete.php" method="post" class="d-inline-block">
                    <input type="hidden" value="<?php echo $post['id']; ?>" name="id">
                    <input type="submit" value="刪除" class="btn btn-danger">
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>