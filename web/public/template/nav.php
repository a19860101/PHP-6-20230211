<?php
    if(!session_id()){
        session_start();
    }
    $webroot = 'http://localhost/php-6-20230211/web/public';
   
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $webroot;?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $webroot;?>">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot;?>/post/index.php">文章列表</a>
                </li>
                <?php if(isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "{$webroot}/post/create.php"?>">新增文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "{$webroot}/category/index.php"?>">分類管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "{$webroot}/gallery/index.php"?>">作品管理</a>
                </li>
                <?php } ?>
               
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if(!isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a href="<?php echo "{$webroot}/user/register.php"?>" class="nav-link">註冊</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo "{$webroot}/user/login.php"?>" class="nav-link">登入</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo $_SESSION['AUTH']['name'];?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo "{$webroot}/user/logout.php"?>" class="nav-link">登出</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>