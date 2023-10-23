<?php
    if(isset($_POST['num']))
    {
        if($_POST['num'] !== 'c') {
            if($_POST['input'] == 0) {
              $num=$_POST['num'] ;
            } else {
              $num=$_POST['input'].$_POST['num'] ;
            }
        } else {
            $num = 0;
        }
    }
    else{
        $num="";
    }
    if(isset($_POST['op']))
    {
        $lastOperation = substr($_POST['input'], -1);
      if(is_numeric($lastOperation)) {
        $num=$_POST['input'].$_POST['op'];
      } else {
          $num = $_POST['input'];
      }
    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        $arr = str_split($num);
        $result = 0;
        $operation = null;
      $nums = [];
      $operations = [];

      preg_match_all('/\d+/', $num, $nums);
      preg_match_all('/\D+/', $num, $operations);

        foreach ($nums[0] as $in => $num) {
            if($in === 0) {
              $result = $num;
              continue;
            }

          $index = $in - 1 < 0 ? 0 : $in-1;
          switch ($operations[0][$index]) {
            case "+":
              $result = $result + $num;
              break;
            case "-":
              $result = $result - $num;
              break;
            case '*':
              $result = $result * $num;
              break;
            case '/':
              $result = $result / $num;
              break;
          }
        }
        $num=$result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <form action="" method="post">
		<div id="operations">
		  <main>
		  	<div id="screen">
                <input id="output" type="text" class="maininput" name="input" value="<?php echo @$num ?>">
		  	</div>
		  	<div id="buttons">
		  		<button type="submit" name="num" value="7">	7</button>
		  		<button type="submit" name="num" value="8">	8</button>
		  		<button type="submit" name="num" value="9">	9</button>
		  		<button type="submit" name="op" value="/"><label for="divide"></label>&divide;</button>
		  		<button type="submit" name="num" value="4">	4</button>
		  		<button type="submit" name="num" value="5">	5</button>
		  		<button type="submit" name="num" value="6">	6</button>
		  		<button type="submit" name="op" value="*"><label for="multiply"></label>&times;</button>
		  		<button type="submit" name="num" value="1">	1</button>
		  		<button type="submit" name="num" value="2">	2</button>
		  		<button type="submit" name="num" value="3">	3</button>
		  		<button type="submit" name="op" value="-"><label for="subtract"></label>-</button>
		  		<button type="submit" name="num" value="c">AC</button>
		  		<button type="submit" name="num" value="0">	0</button>
		  		<button type="submit" name="equal" value="="><label for="equals"></label>=</button>
		  		<button type="submit" name="op" value="+"><label for="add"></label>+</button>
		  	</div>
		  </main>
		</div>
	</form>
</body>
</html>