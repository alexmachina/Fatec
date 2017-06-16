<?php 
  $path="../";
  include $path.'templates/header.php';
?>

  <article class="container">
    <div class="row">
      <div class="col-xs-12">
       <a href="post.php">
        <button class="btn btn-primary">  
          Novo Post
        </button>
        </a>
      </div>
    </div>
    <div id="posts-table"></div>
  </article>


<?php
  include $path.'templates/footer.php';
?>
  <script src="<?php echo $path."js/posts/posts.js"; ?>"></script>
  <script id="table-template" type="text/x-handlebars-template">
  <table class="table table-stripped">
    <thead>
    <tr>
    <th>Categoria</th>
    <th>Titulo</th>
    <th>Ações</th>
    </tr>
    </thead>
    <tbody>
  {{#each posts}}
  <tr>
    <td>{{categoria}}</td>
    <td>{{titulo}}</td>
    <td>
    <a href="post.php?id={{IdPost}}">
    <button class="btn btn-default">
    <span class="glyphicon glyphicon-edit" />
    </button>
    </a>

    </td>
    </tr>
  {{/each}}
<ul class="pagination" id="posts-pagination">
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
