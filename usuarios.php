<?php include "cabecalho.php"; ?>

<div class = "row">
    <div class = "col-12">
      <div class = "card">

        <div class= "card-header">
            Pesquisar Usuários
        </div>   

     <div class = "card-body">
        <div class="row" > 
        <div class = "col-2">
      
            <a href = "novoUsuario.php"  class="btn btn-success">
                Novo Usuários
            </a>
        </div><!-- Fechador da col-2-->
        <div class = "col-8">
            <div class="input-group mb-3" >
                <input type = "text" class="form-control">
                <button class="btn btn-primary" type="button">
                    Pesquisar
                </button>
            </div>     
        </div>
   
       </div><!-- Fechador da ROW -->
      </div><!-- Fechador do card body-->
     </div><!-- Fechador do card-->
  </div><!-- Fechador da col-12-->
</div><!-- Fechador da ROW-->

<?php include "rodape.php"; ?>
