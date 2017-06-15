<?php 
$path = "../";
include $path."templates/header.php";
?>

<article class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <a href="categoria.php">
        <button class="btn btn-primary">
          Nova Categoria
        </button>
      </a>
    <div id="categorias-table" />


    </div>
  </div>

</article>

<script id="table-template" type="text/x-handlebars-template">
      <div id="table-template">
      <table class="table table-stripped">
        <thead>
          <tr>
            <th>Categoria</th>
            <th>Ações</th>
          </tr>
        </thead>

        <tbody>
            {{#each categorias}}
             <tr>
               <td>{{nome}}</td>
               <td>
                 <a href="/admin/categorias/categoria.php?id={{IdCategoria}}">
                   <button class="btn btn-default">
                     <span class="glyphicon glyphicon-edit">
                   </button>
                 </a>
               </td>
             </tr>
            {{/each}}
            <ul class="pagination" id="categorias-pagination">
            {{#times count activePage}}
              {{#if this.active}}
                <li class="active"><a href="#">{{this.page}}</a></li>
              {{else}}
                <li class=""><a href="#">{{this.page}}</a></li>
              {{/if}}
            {{/times}}
            </ul>
            
        </tbody>
      </table>
      </div>
</script>

<?php include $path.'templates/footer.php'; ?>
<script src="<?php echo $path."js/categorias/categorias.js"; ?>"></script>
