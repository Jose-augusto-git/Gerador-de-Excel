<?php require_once'calculo.php';?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos por quilometros</title>

    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
</head>
<body>
<div class="container">    
      <div class="row">
        <form action="index.php" method="POST">
        <div class="form-group pt-2">
            
            <input type="number" class="form-control" id="" placeholder="KM/INICIAL" name="km_inicio">
        </div>
        <div class="form-group">
            
            <input type="number" class="form-control" id="" placeholder="KM/FINAL" name="km_fim">
        </div>

        <div class="form-group">
            
            <input type="date" class="form-control" id="" name="data">
        </div>
        <button type="submit" value="enviar" class="btn btn-primary">CALCULAR</button>
        <br>
        <br>
        <br>
        </form>



    
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">KM Rodados Inicio</th>
            <th scope="col">KM Rodados Final</th>
            <th scope="col">KM Total Gastos</th>
            <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            
            <td><?php echo $km_inicio; ?></td>
            <td><?php echo $km_fim; ?></td>
            <td><?php echo $resultado; ?></td>
            <td><?php echo $novaData;?></td>

            </tr>
            
        </tbody>
        </table>
</div>
</div>

</body>
</html>




        <!--
        <form action="index.php" method="POST">

        <input type="number" name="km_inicio">

        <input type="numer" name="km_fim">

        <input type="date" id="data" >

        <input type="submit" value="enviar">

        <p>Total de quilometros gastos <?php echo $resultado; ?></p>
        <p>No dia <?php echo $novaData; ?></p>



        </form>-->