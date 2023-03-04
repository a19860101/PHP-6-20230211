<?php
    include('db.php');
    function index(){
        // $pdo = pdo();
        $sql = 'SELECT * FROM students ORDER BY id DESC';
        // $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $students = pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $students;
    }
    function show($request){
        extract($request);
        $sql = 'SELECT * FROM students WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
        return $student;
    }