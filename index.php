<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <form action="" method="POST">
      <input type="number" name="number1">
      <select name="operand">
        <option value="+">+</option>
      </select>
      <input type="number" name="number2">
      <button>Click me</button>
    </form>
  </div>

  <h1>
    <?php
          if (isset($_POST['operand']) && isset ($_POST['number1']) && isset ($_POST['number2'])) {
              $num1 = $_POST['number1'];
              $num2 = $_POST['number2'];
              $operand = $_POST['operand'];

              switch ($operand) {
                case '+':
                  echo $num1 + $num2;
                  break;

                 default :
                 echo "error"; 
              }
          }
          
      



?>
  </h1>
  
</body>
</html>