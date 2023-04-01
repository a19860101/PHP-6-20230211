<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-6 m-auto">
            <h2>會員登入</h2>
            <form action="">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="pw" class="form-label">密碼</label>
                    <input type="password" class="form-control" name="pw">
                </div>
                <input type="submit" value="登入" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>