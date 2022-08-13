<?php
include_once 'topo.php';

// retirar a decodificação
// base64_decode
//$id = base64_decode($_GET["id"]); -> Para codficar a URL.
$id = $_GET["id"];

$sql = "delete from filmes where idfilme =".$id;

include_once 'conexao.php';

if(mysqli_query($con,$sql)){
    $msg = "Filme excluído com sucesso!";
}else{
    $msg = "Erro ao excluir filme!";
}

mysqli_close($con);

echo"<script>
        alert ('".$msg."');
        location.href='consulta.php';
    </script>";

include_once 'rodape.php';
?>