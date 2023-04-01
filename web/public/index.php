<?php
        include('../vendor/autoload.php');
        use Gjun\Web\Controller\Post;
        $posts = Post::new_post();
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>最新文章</h2>
        </div>
        <?php foreach($posts as $post){ ?>
        <div class="col-4 py-3">
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

                <a href="show.php?id=<?php echo $post['id'];?>" class="btn btn-primary">繼續閱讀</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('template/footer.php'); ?>