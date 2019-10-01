
<?php

  $conexao = mysqli_connect("localhost" , "id11075039_cludpizza" , "cludpizza", "id11075039_cludpizza	");
  //                  onde esta o banco     Usuario banco             Senha         Nome banco de daos



  $sabor = $_POST['sabor'];
  $valor = $_POST['valor'];

  $query = "insert into tb_pizza values (null,'$sabor', $valor)";

  mysqli_query($conexao,$query);


  echo "Registro salvo com Sucesso!";

 ?>
