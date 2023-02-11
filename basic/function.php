<?php
    function test(){
        return 'test123';
    }

    function test2(){
        echo '123123';
    }

    function tw_us($money,$exc){
        return $money / $exc;
    }

    echo tw_us(10000,30);

    function square($v){
        return $v * $v;
    }
    echo square(11);
?>