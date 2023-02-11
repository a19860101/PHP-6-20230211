<?php
    $drinks = ['熟成紅茶','熟成歐蕾','熟成冷露','春芽冷露'];

    $beans = [
        'name' => '阿拉比卡',
        'area' => '高海拔',
        'shape' => '圓形'
    ];

    // count() 計算陣列數量

    // echo count($drinks);
    // echo count($beans);

    // implode() 陣列->字串
    // echo implode($drinks);
    // echo implode($beans);
    // echo implode('_',$drinks);

    // explode() 字串->陣列
    // $str = '生活,科技,健康,政治';
    // $str_array = explode(',',$str);
    // print_r($str_array);

    // extract() 解構
    // echo $beans['name'];
    // echo $beans['area'];
    // echo $beans['shape'];
    extract($beans);
    // echo $name;
    // echo $area;
    // echo $shape;

    // compact() 
    $server = 'Apache';
    $program = 'PHP';
    $database = 'MySQL';

    // $test = [$server, $program, $database];
    $test = compact('server','program','database');
    // print_r($test);

    // in_array() 判斷資料是否存在在陣列內
    // var_dump(in_array('熟成紅茶',$drinks));
    // var_dump(in_array('拿鐵',$drinks));

    // is_array() 判斷是否為陣列
    $s = 'hello';
    // var_dump(is_array($s));
    // var_dump(is_array($drinks));
    // var_dump(is_array($beans));

    $array = ['banana','fruit','apple','dog'];
    // sort($array);
    // rsort($array);
    // print_r($array);

    // ksort($beans);
    // krsort($beans);

    $user = [
        'name'  => 'john',
        'mail'  => 'asdf@gmail.com',
        'gender'=> 'male'
    ];

    // asort($user);
    // arsort($user);

    
    shuffle($beans);
    print_r($beans);
?>