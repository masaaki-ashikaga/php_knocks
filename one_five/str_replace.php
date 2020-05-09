<?php

$templateText = "{username}様";

$resultText = str_replace('{username}', '田中太郎', $templateText);
echo $resultText;

?>