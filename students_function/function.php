<?php
    include('db.php');
    function index(){
        // global $pdo;
        $pdo = pdo();
        $sql = 'SELECT * FROM students ORDER BY id DESC';
        $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        // $students = pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $students;
    }