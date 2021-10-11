<?php
require_once("CadastroCont.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        
        
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light ">
        
      
        <link rel="stylesheet" href="css/estilo.css">
        <title>App</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="js/Jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/consultar.js"></script>
        <script>
              function confirmDelete(delUrl) {
                  if (confirm("Deseja apagar o registro?")) {
                    document.location = delUrl;
                   
                  }  
            }
	        </script>
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
                  <a class="nav-link" href="index.php">Cadastro</a>
                </li>
                
            </div>
          </nav> 
          
           <div class="row">
              <div class="card mb-3 col-12">
                <div class="card-body">
                  <h5 class="card-title">Consultar - Contatos Agendados</h5>
                  <table class="table table-responsive" style="width:auto;">
                      <thead>
                        <tr>
                          <th scope="col">Nome</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Origem</th>
                          <th scope="col">Contato</th>
                          <th scope="col">Observação</th>
                          <th scope="col">Ação</th>
                        </tr>
                      </thead>
                      <!--<thead id="TableData">

                      </thead>-->
                      <?php 
                        $cont = new CadastroCont();
                        $resultado = $cont->listar(0);
                        for($i=0;$i<=count($resultado)-1;$i++){
                         
                          ?>
                          <tr>
                            <td scope="row"><?php print($resultado[$i]['nome']);?></td>
                            <td><?php echo $resultado[$i]['telefone']; ?></td>
                            <td><?php echo $resultado[$i]['origem']; ?></td>
                            <td><?php echo $resultado[$i]['data_contato']; ?></td>
                            <td><?php echo $resultado[$i]['observacao']; ?></td>
                            <td>
                              <button type="button" class="btn btn-outline-primary" onclick="location.href='editarClientes.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
                              <button type="button" class="btn btn-outline-primary" onclick="javascript:confirmDelete('excluir.php?id=<?php echo $resultado[$i]['id']; ?>')" style="width: 72px;">Excluir</button>
                            </td>
                          </tr>
                          <?php } ?>
                        
                      

                  </table>
                 
                </div>
              </div>
           </div> 
              

          
    </body>
</html>
