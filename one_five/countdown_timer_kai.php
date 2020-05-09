<?php

$start = 10;

for($i = $start; $i >= 0; $i--){

    switch($i){
        case 5:
            $message = '、終了まで5秒前です、この間にも3名の方が申し込みました。';
        break;
        case 4:
            $message = '、残り4秒です、後悔のない選択をしてください。';
        break;
        case 3:
            $message = '、残り3秒です、胸に手を当てて';
        break;
        case 2:
            $message = '、あと1秒でお別れです。';
        break;
        case 1:
            $message = '、これまでお付き合い頂きありがとうございました。';
        break;
    }

    if($i >= 6){
        $second = $i.'秒前';
        echo $second.'<br>';
    } elseif($i >= 1){
        $second = $i.'秒前';
        echo $second . $message .'<br>';
    } else{
        echo '申し込みは締め切りました。';
        sleep(1);
    }
}

?>