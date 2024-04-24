<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Produto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Cadastro Produto</h2>
  <form action="{{ route('prod.cadastrar') }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="text">Nome Produto:</label>
      <input type="text" class="form-control" id="" placeholder="Nome do produto" name="nome">
    </div>

    <div class="mb-3 mt-3">
      <label for="text">Descrição do Produto:</label>
      <textarea class="form-control" id="descricao" rows="4" name="descricao"></textarea>
    </div>
    
    <div class="mb-3 mt-3">
      <label for="text">Preço do Produto:</label>
      <input type="text" class="form-control" id="preco" placeholder="Preço do produto" name="preco">
    </div>
    
    <div class="mb-3">
  		<label for="formFileMultiple" class="form-label">Imagens do produto</label>
 	 	<input class="form-control" type="file" id="formFileMultiple" multiple>
	</div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>

</body>
</html>
