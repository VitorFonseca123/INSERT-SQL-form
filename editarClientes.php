<?php
require_once("CadastroCont.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light ">
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <title>App</title>
       
        <script src="bootstrap/js/bootstrap.js"></script>
        
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Aplicativo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="consulta.php">Consulta</a>
            </li>
            
        </div>
      </nav>
  <div class="estilo">
      <h1>
        <p id="tittle">Editar - Agendamento de potenciais clientes</p>
      </h1>
      <p>Sistema utilizado para agendamento de serviços</p>
      <?php
							$controller = new CadastroCont();
              $resultado = $controller->listar($_GET['id']);
              
							//print_r($resultado);
						?>
      <form method="post" action="CadastroCont.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control " id="cadNome" name="txtNome"   placeholder="Digite seu nome completo" value="<?php echo $resultado[0]['nome']; ?>">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Telefone</label>
          <input type="tel" class="form-control" required name="cadtelefone" id="cadtelefone" placeholder="(xx)xxxxx-xxxx" value="<?php echo $resultado[0]['telefone']; ?>">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Origem</label>
          <select class="form-control" id="txtorigem" name="txtorigem">
          <option <?php if($resultado[0]['origem'] == "Celular"){ echo "selected"; } ?>>Celular</option>
									<option <?php if($resultado[0]['origem'] == "Fixo"){ echo "selected"; } ?>>Fixo</option>
									<option <?php if($resultado[0]['origem'] == "Whatsapp"){ echo "selected"; } ?>>Whatsapp</option>
									<option <?php if($resultado[0]['origem'] == "Facebook"){ echo "selected"; } ?>>Facebook</option>
									<option <?php if($resultado[0]['origem'] == "Instagram"){ echo "selected"; } ?>>Instagram</option>
									<option <?php if($resultado[0]['origem'] == "Google Meu Negocio"){ echo "selected"; } ?>>Google Meu Negocio</option>
          </select>
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Data</label>
          <input type="date" class="form-control" id="cadData" name="cadData"alue="<?php echo $resultado[0]['data']; ?>"> 
          
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Observações</label>
          <textarea class="form-control" id="observacoes"name="observacoes" rows="3"><?php echo $resultado[0]['observacao']; ?></textarea>
        </div>
        
        
				<button type="submit" id="btnEditar" class="btn btn-primary">Editar</button>
      </form>
    </div>  
    </body>
</html>