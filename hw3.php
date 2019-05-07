<?php 
$en = $_POST['en'];

$word = [
    'apple' => "蘋果",
    'orange' => "橘子",
    'watermelon' => "西瓜",
    'strawberry' => "草莓",
    'pineapple' => "鳳梨",
];
isset($word[$en])
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hw3</title>
</head>
<body>
    <table border="1">
    <tr>
        <td>英文:</td>
        <td>中文:</td>
    </tr>
    <tr>
        <td><?= $_POST['en']?></td>
        <td><?= @$word[$en];?></td>
    </tr>
    </table> 
        <br>
        <?php if(isset($word[$en])):?>
        <?php else:?>
            水果字典沒有<?= $en?>這個單字
        <?php endif?>
</body>
</html>
