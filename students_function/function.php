<?php
    include('db.php');
    function index(){
        // $pdo = pdo();
        $sql = 'SELECT * FROM students ORDER BY id DESC';
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
        try{
            $student = $stmt->fetch(PDO::FETCH_ASSOC);
            return $student;
        }catch(PDOException $e){
            return [
                'errCode'=>$e->getCode(),
                'errMsg'=>$e->getMessage()
            ];
        }
    }
    function store($request){
        extract($request);
        $sql = 'INSERT INTO students(name,phone,email,edu,gender,skill)VALUES(?,?,?,?,?,?)';
        $stmt = pdo()->prepare($sql);
        if($name == ''){
            return [
                'err' => 1,
                'status' => '請填寫姓名'
            ];
        }
        if($phone == ''){
            return [
                'err' => 1,
                'status' => '請填寫電話'
            ];
        }
        if(!isset($skill) || !isset($gender)){
            return [
                'err' => 1,
                'status' => '請填寫所有資料'
            ];
        }else{
            $skill = implode(',',$skill);
        }

        try{   
            $stmt->execute([$name,$phone,$email,$edu,$gender,$skill]);
        }catch(PDOException $e){
            return [
                'errCode'=>$e->getCode(),
                'errMsg'=>$e->getMessage()
            ];
        }
    }
    function delete($request){
        extract($request);
        $sql = 'DELETE FROM students WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        try{
            $stmt->execute([$id]);
        }catch(PDOException $e){
            return [
                'errCode'=>$e->getCode(),
                'errMsg'=>$e->getMessage()
            ];
        }
    }
    function edit($request){
        extract($request);
        $sql = 'SELECT * FROM students WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        try{
            $student = $stmt->fetch(PDO::FETCH_ASSOC);
            return $student;
        }catch(PDOException $e){
            return [
                'errCode'=>$e->getCode(),
                'errMsg'=>$e->getMessage()
            ];
        }
    }
    function update($request){
        extract($request);
        $sql = 'UPDATE students SET name=?,email=?,phone=?,edu=?,gender=?,skill=? WHERE id =?';
        $stmt = pdo()->prepare($sql);
        $skill = implode(',',$skill);
        try{
            $stmt->execute([$name,$email,$phone,$edu,$gender,$skill,$id]);
        }catch(PDOException $e){
            return [
                'errCode'=>$e->getCode(),
                'errMsg'=>$e->getMessage()
            ];
        }

    }