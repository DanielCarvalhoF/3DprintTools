<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body>
		<div class="container-fluid" style="font-size: 10; width:80%;">
		<form method="POST" action="">
			<br>
			<center><header><h2>Cadastro de Produtos</h2></header></center>
			<br>
			<div class="form-floating mb-3">
	       		<input type="text" class="form-control" id="nomeproduto" name="nome_produto" placeholder="Produto">
	      		<label for="floatingInput">Produto</label>
    		</div>

    		<div class="form-floating mb-3" style="width:50%">
	       		<input type="text" class="form-control" id="valorproduto" name="valor_produto" placeholder="valor">
	      		<label for="floatingInput">Valor Venda</label>
    		</div>

    		<div class="input-group">
  				<span class="input-group-text">Descrição</span>
 				<textarea class="form-control" aria-label="With textarea" name="desc_produto"></textarea>
			</div>
			<br>
    		<div class="form-floating mb-3">
	       		<input type="file" class="form-control" id="fonte" name="fonte_produto" placeholder="fonte">
	      		<label for="floatingInput">Fonte</label>
    		</div>
    		<br>
    		<button type="submit" class="btn btn-success" onclick="alert('Cadastro Realizado')">Cadastrar</button>
    		<button type="button" class="btn btn-danger" onclick="">Cancelar</button>

		</form>
	</div>
	</body>
</html>