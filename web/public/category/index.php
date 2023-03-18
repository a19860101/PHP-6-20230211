<?php
    include('../../vendor/autoload.php');
    use Gjun\Web\Controller\Category;
    $categories = Category::index();
?>
<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">分類標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <input type="submit" value="新增分類" class="btn btn-primary">
            </form>
        </div>
        <div class="col-4">
            <ul class="list-group">
                <?php foreach($categories as $category){ ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $category['title'];?>
                    <form action="delete.php" method="post">
                        <input type="submit" value="刪除" class="btn btn-sm btn-danger" onclick="return confirm('確認刪除？');">
                    </form>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>