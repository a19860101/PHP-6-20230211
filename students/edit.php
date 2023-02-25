<?php
    include("db.php");
    extract($_REQUEST);
    $sql = 'SELECT * FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $student['name'];?>">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="<?php echo $student['phone'];?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $student['email'];?>" >
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小" <?php echo $student['edu']=='國小'?'selected':'';?>>國小</option>
                <option value="國中 <?php echo $student['edu']=='國中'?'selected':'';?>">國中</option>
                <option value="高中職" <?php echo $student['edu']=='高中職'?'selected':'';?>>高中職</option>
                <option value="大專院校" <?php echo $student['edu']=='大專院校'?'selected':'';?>>大專院校</option>
                <option value="研究所以上" <?php echo $student['edu']=='研究所以上'?'selected':'';?>>研究所以上</option>
            </select>
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="男" <?php echo $student['gender']=='男'?'checked':'';?>>
            <label for="">男</label>
            <input type="radio" name="gender" value="女" <?php echo $student['gender']=='女'?'checked':'';?>>
            <label for="">女</label>
            <input type="radio" name="gender" value="不透漏" <?php echo $student['gender']=='不透漏'?'checked':'';?>>
            <label for="">不透漏</label>
        </div>
        <div>
            <?php 
                $skill = explode(',',$student['skill']);
            ?>
            <label for="">專長</label>
            <input type="checkbox" name="skill[]" value="平面設計" <?php echo in_array('平面設計',$skill)?'checked':'';?>>
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="網頁" <?php echo in_array('網頁',$skill)?'checked':'';?>>
            <label for="">網頁</label>
            <input type="checkbox" name="skill[]" value="影片剪輯" <?php echo in_array('影片剪輯',$skill)?'checked':'';?>>
            <label for="">影片剪輯</label>
        </div>
        <input type="submit" value="更新">
        <input type="button" value="取消" onclick="history.back()" >
    </form>
</body>
</html>