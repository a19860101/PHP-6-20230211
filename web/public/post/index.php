<?php
    include('../../vendor/autoload.php');
    use Gjun\Web\Controller\Post;
    $posts = Post::index();
?>
<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row">
        <?php foreach($posts as $post){ ?>
        <div class="col-12 py-3">
            <div class="border p-4 rounded">
                <small class="text-muted"><?php echo $post['category_title']; ?></small>
                <h3 class="mb-1"><?php echo $post['title']; ?></h3>
                <div class="my-4">
                    <?php echo $post['body']; ?>
                </div>
                <div class="mb-3">
                    <small class="text-muted"><?php echo $post['created_at']; ?></small>
                </div>

                <a href="show.php?id=<?php echo $post['id'];?>" class="btn btn-primary">繼續閱讀</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('../template/footer.php'); ?>