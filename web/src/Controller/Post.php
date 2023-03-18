<?php
    namespace Gjun\Web\Controller;
    // use PDO;
    use Gjun\Web\Config\DB;
    class Post {
        static function index(){
            $sql = 'SELECT * FROM posts ORDER BY id DESC';
            $data = DB::pdo()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
            return $data;
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $data;
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,body,category_id,created_at)VALUES(?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title,$body,$category_id,DB::now()]);
        }
        static function edit($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $data;
        }
    }