<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        
        
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light ">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <title>App</title>
        
        <script src="js/Jquery.js"></script>
        
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/index.js"></script>

     
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
        <p id="tittle">Cadastrar - Agendamento de potenciais clientes</p>
      </h1>
      <p>Sistema utilizado para agendamento de serviços</p>

      <form method="post" action="CadastroCont.php?funcao=cadastro" id="form" name="form">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control " id="" name="cadNome"  placeholder="Digite seu nome completo">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Telefone</label>
          <input type="number" class="form-control" id="" name="cadtelefone" placeholder="(XX)XXXX-XXXX">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Origem</label>
          <select class="form-control" id="" name="txtorigem">
            <option>Celular</option>
            <option>Fixo</option>
            <option>Whatsapp</option>
            <option>Facebook</option>
            <option>Instagram</option>
            <option>Teams</option>
          </select>
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Data</label>
          <input type="date" class="form-control" id="" name="cadData"> 
          
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Observações</label>
          <textarea class="form-control" id="" name="observacoes"rows="3"></textarea>
        </div>
        
        <button type="submit" value="submit" name="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
      
    </div>  
</form>
    </body>
</html>

