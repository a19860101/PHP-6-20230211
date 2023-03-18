<?php
    namespace Gjun\Web\Controller;
    // use PDO;
    use Gjun\Web\Config\DB;
    class Post {
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,body,category_id,created_at)VALUES(?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title,$body,$category_id,DB::now()]);
        }
    }