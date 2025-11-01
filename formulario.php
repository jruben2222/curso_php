<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Formulario Get  para enviar a otro archivo</h2>
   <form action="suma.php" method="get">
     <label for="n1">Numero 1</label>
    <input type="text" id="n1" name="n1"/><br/>
    <label for="n2">Numero 2</label>
    <input type="text" id="n2" name="n2"/><br/>
    <button type="submit">Enviar</button>
   </form>
   <br>


    <h2>Formulario Post  sin  enviar a otro archivo</h2>

     <?php
    if($_POST){
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $r=$n1+$n2;
        echo "La suma de ".$n1." y ".$n2." es ".$r;
         
    }
    ?>

   <form  method="post">
     <label for="n1">Numero 1</label>
    <input type="text" id="n1" name="n1"/><br/>
    <label for="n2">Numero 2</label>
    <input type="text" id="n2" name="n2"/><br/>
    <button type="submit">Enviar</button>
    <br>
    <br>
    <label for="r">Resultado <?php echo $r ; ?></label>
    
   </form>

   
</body>
</html>