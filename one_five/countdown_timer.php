

<?php

$start = '10';

for($i=10; $i >= 0; $i--){
    if($i == 0){
        echo '申し込みは締め切りました。';
        break;
        }
        echo $i.'秒前<br>';
        sleep(1); 
}

?>