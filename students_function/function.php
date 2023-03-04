<?php
    include('db.php');
    function index(){
        // $pdo = pdo();
        $sql = 'SELECT * FROM students1 ORDER BY id DESC';
        // $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        try{
            $students = pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $students;
        }catch(PDOException $e){
            // echo $e->getMessage();
            // print_r($e);
            return [
                'errCode'=>$e->getCode(),
                'errMsg'=>$e->getMessage()
            ];
        }
    }
    function show($request){
        extract($request);
        $sql = 'SELECT * FROM students WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
        return $student;
    }
    function store($request){
        extract($request);
        $sql = 'INSERT INTO students(name,phone,email,edu,gender,skill)VALUES(?,?,?,?,?,?)';
        $stmt = pdo()->prepare($sql);
        $skill = implode(',',$skill);
        $stmt->execute([$name,$phone,$email,$edu,$gender,$skill]);
    }
    function delete($request){
        extract($request);
        $sql = 'DELETE FROM students WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
    }
    function edit($request){
        extract($request);
        $sql = 'SELECT * FROM students WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
        return $student;
    }
    function update($request){
        extract($request);
        $sql = 'UPDATE students SET name=?,email=?,phone=?,edu=?,gender=?,skill=? WHERE id =?';
        $stmt = pdo()->prepare($sql);
        $skill = implode(',',$skill);
        $stmt->execute([$name,$email,$phone,$edu,$gender,$skill,$id]);

    }