<?php
    namespace Gjun\Web\Controller;
    // use PDO;
    use Gjun\Web\Config\DB;

    class Category{
        static function index(){}
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO category(title)VALUES(?)';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title]);
        }
        static function delete(){}
    }