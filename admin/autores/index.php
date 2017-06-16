<?php
$path="../";
include $path."templates/header.php";
include $path."config.php";
include $path."conexao.php";
include $path."motumbo.php";



?>
<article class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <a href="autor.php">
        <button class="btn btn-primary">
          Novo Autor
        </button>
      </a>
    <div id="autores-table-render">
    </div>
    <div id="pagination"></div>
  </div>

</article>

<?php 
  include $path."templates/footer.php";
?>
<script id="autores-table" type="text/x-handlebars-template">
<table class="table table-stripped">
  <thead>
  <th>Autor</th>
  <th>Opções</th>
  </thead>
  <tbody>
  {{#each autores}}
    <tr>
      <td>
         {{nome}} 
        </td>
        <td>
          <a href="/admin/autores/autor.php?id={{IdUsuario}}">
            <button class="btn btn-default">
              <span class="glyphicon glyphicon-edit" />
            </button>
          </a>
        </td>
      </tr>
    {{/each}}
      <ul class="pagination" id="autores-pagination">
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

</script>
<script src="<?php echo $path."js/autores/autores.js"; ?>"></script>


