<?php
    namespace Gjun\Web\Controller;
    use PDO;
    use Gjun\Web\Config\DB;

    class File{
        static function index(){
            $sql = 'SELECT * FROM galleries ORDER BY created_at DESC';
            $data = DB::pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $data; 
        }
        static function upload($request,$file){
            extract($request);
            extract($file);

            if($title == ''){
                $title = $name;
            }
            

            $img_name = md5(time());
            $ext = pathinfo($name,PATHINFO_EXTENSION);
            $fullname = $img_name.'.'.$ext;

            $folder = 'images/';

            if(!is_dir($folder)){
                mkdir($folder);
            }

            $target = $folder.$fullname;
            $sql = 'INSERT INTO galleries(title,img_name,created_at)VALUES(?,?,?)';

            switch($error){
                case 0:
                    if(move_uploaded_file($tmp_name,$target)){
                        $stmt = DB::pdo()->prepare($sql);
                        $stmt->execute([$title,$fullname,DB::now()]);
                        echo '<script>alert("檔案已上傳")</script>';
                    }else{
                        echo '上傳失敗';
                    }
                    break;
                case 4:
                    echo '<script>alert("請選擇檔案")</script>';
                    break;
                    

            }
        }
        static function delete($request){
            extract($request);
            unlink('images/'.$img);
            $sql = 'DELETE FROM galleries WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
        }
    }