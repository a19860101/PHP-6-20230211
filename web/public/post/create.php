<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>新增文章</h2>
            <form action="">
                <div class="mb-3">
                    <label for="" class="form-label">文章標題</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="1">科技</option>
                        <option value="2">政治</option>
                        <option value="3">休閒</option>
                        <option value="4">體育</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章內文</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>