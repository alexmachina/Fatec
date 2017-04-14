<?php 
  $path="../";
  include $path.'templates/header.php';
  include $path.'config.php';
  include $path.'conexao.php';

  $query = 'Select Posts.IdPost, Categorias.nome as categoria, Posts.titulo from Posts ';
  $query = $query. 'Inner Join Categorias on Posts.IdCategoria = Categorias.IdCategoria';
  $result = $con->query($query);
  if(!$result) {
    echo $con->error;
  }


?>

  <article class="container">
    <div class="row">
      <div class="col-xs-12">
      <a href="post.php">
        <button class="btn btn-primary">  
          Novo Post
        </button>
      </a>
        <table class="table table-stripped">
          <thead>
            <tr>
              <th>Categoria</th>
              <th>Titulo</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['titulo']; ?></td>
            <td>
              <a href="post.php?id=<?php echo $row['IdPost']; ?>">
              <button class="btn btn-default">
                <span class="glyphicon glyphicon-edit" />
              </button>
              </a>

            </td>
            </tr>
<?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </article>


<?php
  include $path.'templates/footer.php';
?>
