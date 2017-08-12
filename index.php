<?php
    require 'controlador_agenda.php';
?>
<!DOCTYPE html>
<html lang="en"><head> <meta charset="UTF-8"> <title>Agenda</title> <!-- Latest compiled and minified CSS --> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></head><body>
 <div class="container" style="margin-top: 30px;">

<h3>Minha Agenda de Contatos</h3>  <br />
        <!-- buscar -->       
        <form method="get" action="" >            
        <label for="busca" >Busca</label>            
        <input type="submit">        
        </form>
        
  <!-- CADASTRO-->  
  <div class="row">   
  <div class="col-md-12">    
  <form class="form-inline" action="controlador_agenda.php?acao=cadastrar" method="post">
      <!--nome-->      
      <div class="form-group">        
      <label for="nome">Nome</label>        
      <input name="Nome" type="text" class="form-control" id="nome">      
      </div>
      
      <!--email-->      
      <div class="form-group">        
      <label for="email">Email</label>        
      <input name="Email" type="email" class="form-control" id="email">      
      </div>
      
      <!--telefone-->      
      <div class="form-group">        
      <label for="telefone">Telefone</label>        
      <input name="Telefone" type="text" class="form-control" id="telefone">      
      </div>
      <button type="submit" class="btn btn-default">CADASTRAR</button>
    </form>   
    </div>  
    </div>
  <br />
  
  <!--CONTATOS-->  
  <div class="row">   
  <div class="col-md-12">
  
    <!-- Conteúdo -->    
    
    <table class="table">     
    <thead>      
    <tr>       
    <th>#</th>       
    <th>Nome</th>       
    <th>Email</th>       
    <th>Telefone</th>                            
    <th>Ações</th>      
    </tr>     
    </thead>     
    <tbody>      
    
    <!-- repetir -->
                        
    <?php foreach ($meusContatos as $contato) : ?>                            
    <tr>                                
    <th><?= $contato['id'] ?></th> 
    <!-- php echo é igual a < ? = ? > -->
    <td><?= $contato['nome'] ?></td>                                
    <td><?= $contato['email'] ?></td>                                
    <td><?= $contato['telefone'] ?></td>                                
    <td><a href="controlador_agenda.php?acao=excluir&id=<?= $contato['id'] ?>">Excluir</a>                                    <a href="formulario_editar_contato.php?id=<?= $contato['id'] ?>">Editar</a>                                </td>                            
  </tr>                        
  <?php endforeach; ?>
                    
   </tbody>    
   </table>   
   </div>  
   </div> 
   </div>
   </body>
   </html>
