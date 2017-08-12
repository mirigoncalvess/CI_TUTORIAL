    <?php        
    require 'controlador_agenda.php';       
    $contato = editarContato($_GET['id']);
    ?>    
    <!doctype html>    
    <html lang="pt-br">    
    <head>      
    <meta charset="UTF-8">        
    <title>Document</title>    
    </head>    
    <body>
   
   <form method="post" action="controlador_agenda.php?acao=editar&id=<?= $contato['id'] ?>">        
    <input name="id" readonly  type="text"  value="<?= $contato['id']?>" >       
    <input name="nome"     type="text"  value="<?= $contato['nome']?>">        
    <input name="email"    type="email" value="<?= $contato['email']?>"
    <input name="telefone" type="text" value="<?= $contato['telefone']?>">
    <input type="submit" value="Editar Contato">   
     </form>
    </body>    
    </html>
    
    
