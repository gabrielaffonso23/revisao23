<?php 
   
     $nome = $_POST["nome"];
     $senha = $_POST ["senha"];

    include "conexao.php";

    $sql = "insert into cliente(nome, senha) values('$nome', '$senha')";

    if(mysqli_query($conecta,$sql)){
    echo "cadastrado gabriel vc e foda ";


    }
else{

echo"não foi que pena";

}



?>