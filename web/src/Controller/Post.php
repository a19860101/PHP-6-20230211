<?php
    namespace Gjun\Web\Controller;
    // use PDO;
    use Gjun\Web\Config\DB;
    class Post {
        static function index(){
            $sql = 'SELECT posts.*,category.title AS category_title FROM posts 
                    LEFT JOIN category ON posts.category_id = category.id 
                    ORDER BY id DESC';
            $data = DB::pdo()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
            return $data;
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT posts.*,category.title AS category_title FROM posts 
                    LEFT JOIN category ON posts.category_id = category.id 
                    WHERE posts.id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $data;
        }
        static function store($request){
            session_start();
            extract($request);
            $user_id = $_SESSION['AUTH']['id'];
            $sql = 'INSERT INTO posts(title,body,user_id,category_id,created_at)VALUES(?,?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title,$body,$user_id,$category_id,DB::now()]);
        }
        static function edit($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $data;
        }
        static function update($request){
            extract($request);
            $sql = 'UPDATE posts SET title=?,body=?,category_id=?,updated_at=? WHERE id=?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title, $body,$category_id,DB::now(),$id]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
        }

    }