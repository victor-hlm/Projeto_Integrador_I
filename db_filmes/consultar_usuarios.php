<?php

include_once 'topo.php';

echo"<h1>Consultar Usuário</h1>";

// Abrir a conexão com o banco.
include_once 'conexao.php';

// Montar a instrução para buscar os produtos cadastrados.   
$sql = "select * from usuario ORDER BY nome ASC"; // ASC --> ascendente. 

// Executar a consulta na base de dados
$rs = mysqli_query($con,$sql);

// Vou verificar se tem produto no banco    
if(mysqli_num_rows($rs) > 0){
?>
    <input id="myInput" type="text" placeholder="Search..">
    <br><br>
    <table table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>CEP</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>IBGE</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Perfil</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>               
        <?php        
        while($linha = mysqli_fetch_array($rs)){
        ?>
        <tbody id="myTable">
            <tr>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["cep"]; ?></td>
                <td><?php echo $linha["rua"]; ?></td>
                <td><?php echo $linha["bairro"]; ?></td>
                <td><?php echo $linha["cidade"]; ?></td>
                <td><?php echo $linha["estado"]; ?></td>
                <td><?php echo $linha["ibge"]; ?></td>
                <td><?php echo $linha["login"]; ?></td>
                <td><?php echo $linha["senha"]; ?></td>
                <td><?php echo $linha["perfil"]; ?></td>
                <td>
                <a href="editar_usuario.php?id=<?php echo base64_encode($linha["idusuario"]); ?>">
                    editar
                </a>
                </td>
                <!-- CHAMA A EXCLUSÃO-->
                <!-- iremos codificar id na URL -->
                <td>
                    <a href="excluir_usuario.php?id=<?php echo($linha["idusuario"]); ?>">excluir</a>
                </td>
            </tr>
        </tbody>
        <?php          
        }
        ?>
    </table>
<?php
}else{
    echo"não existe usuário cadastrado";    
}

mysqli_close($con);
?>

<br>
<a href="painel.php" class="btn btn-sm btn-secondary"> Voltar </a>
<a href="sair.php" class="btn btn-sm btn-secondary"> Sair </a>

<?php include_once 'rodape.php';?>   