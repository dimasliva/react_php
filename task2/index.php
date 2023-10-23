<?php
    $arr = [0,1,2,3,4,5,6,7,8,9,10];

function isNotEmpty($array) {
  return !empty($array);

}
function countSum($array) {
    if (isNotEmpty($array)) {
      $sum = array_sum($array);
      return $sum;
    }

}
function countMin($array) {
  if (isNotEmpty($array)) {
    $min = min($array);
    return $min;
  }

}
function countMax($array) {
  if (isNotEmpty($array)) {
    $max = max($array);
    return $max;
  }
}
function countAverage($array) {
  if (isNotEmpty($array)) {
    $average = array_sum($array)/count($array);
    return $average;
  }
}
function getAllOperations($array) {
    echo countSum($array).' '.countMin($array).' '.countMax($array).' '.countAverage($array);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
<div class="wrapper">

    <div class="table">

        <div class="row header blue">
            <div class="cell">
                Массив
            </div>
            <div class="cell">
                Сумма
            </div>
            <div class="cell">
                Наименьшее
            </div>
            <div class="cell">
                Наибольшее
            </div>
            <div class="cell">
                Среднее
            </div>
            <div class="cell">
                Результат каждой операции
            </div>
        </div>

        <div class="row">
            <div class="cell" data-title="Username">
              <?php foreach ($arr as $i => $val) {
                  if($i !== 0) {
                    echo ','.$val;
                  } else {
                    echo $val;
                  }
              } ?>
            </div>
            <div class="cell" data-title="Username">
              <?php echo @countSum(@$arr)?>
            </div>
            <div class="cell" data-title="Email">
              <?php echo @countMin(@$arr)?>
            </div>
            <div class="cell" data-title="Password">
              <?php echo @countMax(@$arr)?>
            </div>
            <div class="cell" data-title="Active">
              <?php echo @countAverage(@$arr)?>
            </div>
            <div class="cell" data-title="Active">
              <?php echo @getAllOperations(@$arr)?>
            </div>
        </div>


    </div>

</div>

</body>
</html>