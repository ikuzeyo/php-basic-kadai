<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題合計と平均</title>
</head>

<body>
    <p>
    <?php


$a = array(80,60,55,40,100,25,80,95,30,60);
$Sum =array_sum($a);
echo $Sum;

echo '<br>';

$Average = $Sum/10;
echo $Average;



?>
    </p>
    
</body>


</html>

