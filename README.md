# PHP-
學習程式
<?php 

$city = array(
            'New York,NY' => '8175133',
            'Los Angeles,CA' => '3792621',
            'Chicago,IL' => '2695598',
            'Houston,TX' => '2100263',
            'Philadelphia,PA' => '1526006',
            'Phoenix,AZ' => '1445632',
            'San Antonio,TX' => '1327407',
            'San Diego,CA' => '1307402',
            'Dallas,TX' => '1197816',
            'San Jose,CA' => '945942'    
);
$city1 = array(3792621,1307402,945942);
$city2 = array(2100263,1327407,1197816);

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array0502</title>
</head>
<body>
 <!--用foreach()表格印出城市名稱 $key 和人口總數 $value 排序 -->
    <?php foreach ($city as $key => $value) :?>
     <table border="1" width="80%" align="center">    
       <tr><td width="40%">城市名稱<?=$key?><td width="40%">人口資訊(<?=$value?>)人</tr>
     </table>
     
<?php endforeach;?>
<hr>
<table  border="1" width="80%" align="center" >
<tr>
    <td>屬於CA同洲人口總數 <?= array_sum($city1)?>人</td>
</tr>
<tr>
     <td>屬於TX同洲人口總數 <?= array_sum($city2)?>人</td>
</tr>
</table>


</body>
</html>
