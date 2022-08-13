<?php include_once 'topo.php'; ?>

<h3>Novo Usuário</h3>

<!-- Inicio do formulario -->
<form class="formgroup" name="FormSenha" action="cadastrado_user.php" method="post" onsubmit="return validarSenha()">
    <label>Nome:
    <input name="nome" type="text" id="nome" size="60" class="form-control" requerid="true"/></label><br/>
    <label>Cep:
    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
            onblur="pesquisacep(this.value);" class="form-control"/></label><br/>
    <label>Rua:
    <input name="rua" type="text" id="rua" size="60" class="form-control"/></label><br/>
    <label>Bairro:
    <input name="bairro" type="text" id="bairro" size="40" class="form-control"/></label><br/>
    <label>Cidade:
    <input name="cidade" type="text" id="cidade" size="40" class="form-control"/></label><br/>
    <label>Estado:
    <input name="uf" type="text" id="uf" size="2" class="form-control"/></label><br/>
    <label>IBGE:
    <input name="ibge" type="text" id="ibge" size="8" class="form-control"/></label><br/>
    <label>Login:
    <input name="login" type="text" id="login" size="20" class="form-control"/></label><br/>
    
    <label>Senha:
    <input name="senha" type="password" id="senha" size="20" class="form-control"/></label><br/>
    <label>Confirmar Senha:
    <input name="senhaconf" type="password" id="senhaconf" size="20" class="form-control"/></label><br/><br/>
    
    <input type="submit" value="Cadastrar Usuário" class="btn btn-sm btn-primary"/>  
    <input type="reset" value="Limpar Campos" class="btn btn-sm btn-primary"/>
</form>

<br>
<a href="index.php" class="btn btn-sm btn-secondary"> Voltar </a>

<?php include_once 'rodape.php'; ?>