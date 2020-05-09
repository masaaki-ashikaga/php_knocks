<?php

$userPlan = "0";

$commonMessage = 'ようこそ、脳科学 × 動画 Marketing サイトへ！';

switch($userPlan){
    case 0:
        $welcomMessage = $commonMessage.'あなたは無料ユーザーです。課金すると全ての機能にフルアクセスできるようになりますよ！ ';
    break;
    case 1:
        $welcomMessage = $commonMessage.'あなたは課金ユーザーです。課金していただいたあなたに特別なご案内、VIP課金ユーザーになりませんか？ ';
    break;
    case 2:
        $welcomMessage = $commonMessage.'あなたはVIP課金ユーザーです。これから一緒に億単位の資産を築いて行きましょう！ ';
    break;
}
echo $welcomMessage;

?>