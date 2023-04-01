<?php
        include('../vendor/autoload.php');
        use Gjun\Web\Controller\Post;
        use Gjun\Web\Controller\File;
        $posts = Post::new_post();
        $galleries = File::index();

?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>作品展示</h2>
        </div>
        <?php foreach($galleries as $g){ ?>
        <div class="col-lg-3 col-6">
            <figure>
                <img src="gallery/images/<?php echo $g['img_name'];?>" alt="" class="w-100 h-100">
                <figcaption><?php echo $g['title'];?></figcaption>
            </figure>
        </div>
        <?php } ?>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>最新文章</h2>
        </div>
        <?php foreach($posts as $post){ ?>
        <div class="col-lg-3 col-6 py-3">
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