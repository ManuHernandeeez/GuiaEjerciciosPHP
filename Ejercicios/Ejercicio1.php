<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
        function generarFibonacci($num){
            $primero =0;
            $segundo =1;
            for ($i = 0; $i < $num; $i++){
                echo $primero. " ";
                $resultado = $primero + $segundo;
                $primero = $segundo;
                $segundo = $resultado;
            }
        }
        generarFibonacci(5)
    ?>

</html>