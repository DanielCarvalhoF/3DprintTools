<br>
<br>
<br>
<div class="container-fluid" style="font-size: 10; width:80%;">
<body>
  <center><header><h2>Cadastrar Cliente<h2></header></center>
  <form method="POST" action="./functions/cadcli2.php">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nomecliente" name="nome_cliente" placeholder="Nome completo">
      <label for="floatingInput">Nome do Cliente</label>
    </div>    
    <div class="form-floating mb-3" style="width:35%">
        <input type="text" class="form-control" id="cpfcliente" name="cpf_cliente"placeholder="Digite o Cpf ou CNPJ">
      <label for="floatingInput">CPF ou CNPJ</label>
    </div>
    <div class="form-floating mb-3" style="width:35%">
        <input type="text" class="form-control" id="rgcliente" name="rg_cliente" placeholder="Digiteo Rg ou Inscrição estadual">
      <label for="floatingInput">Rg ou IE</label>
    </div>
    <div class="form-floating mb-3" style="width:35%">
        <input type="tel" class="form-control" id="telcliente" name="tel_cliente" placeholder="Digite o Telefone">
      <label for="floatingInput">Telefone</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="emailcliente" name="email_cliente" placeholder="Digite o E-mail">
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="end_cliente" name="end_cliente"placeholder="Digite o Endereço">
      <label for="floatingInput">Endereço</label>
    </div>
    <div class="form-floating mb-3" style="width:20%">
        <input type="text" class="form-control" id="numcliente" name="num_cliente" placeholder="Numero">
      <label for="floatingInput">Numero</label>
    </div>
    <div class="form-floating mb-3">
        <input type="long-text" class="form-control" id="comple_cliente" name="comple_cliente" placeholder="Completento">
      <label for="floatingInput">Complemento</label>
    </div>
    <div class="form-floating mb-3" style="width:50%">
        <input type="long-text" class="form-control" id="bairro_cliente" name="bairro_cliente" placeholder="Bairro">
      <label for="floatingInput">Bairro</label>
    </div>
    <div class="form-floating mb-3" style="width:50%">
        <input type="text" class="form-control" id="cidadecliente" name="cidade_cliente" placeholder="Cidade">
      <label for="floatingInput">Cidade</label>
    </div>
     <div class="form-floating mb-3" style="width:20%">
        <input type="text" class="form-control" id="ufcliente" name="uf_cliente" placeholder="Estado">
      <label for="floatingInput">Estado</label>
    </div>
    <div class="form-floating mb-3" style="width:40%">
        <input type="text" class="form-control" id="paiscliente"  name="pais_cliente" placeholder="Pais">
      <label for="floatingInput">Pais</label>
    </div>
    <button type="submit" class="btn btn-success" onclick="alert('Cadastro Realizado')">Cadastrar</button>
    <button type="button" class="btn btn-danger" onclick="index.php">Cancelar</button>
    <br>
    <br>
  </form>

</body>
</div>
