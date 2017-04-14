<?php 
  $path="../";
  include $path.'templates/header.php';
  include $path.'config.php';
  include $path.'conexao.php';
  $query = 'SELECT IdCategoria, nome FROM Categorias';

  $result = $con->query($query);
?>
<article class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <a href="categoria.php">
        <button class="btn btn-primary">
          Nova Categoria
        </button>
      </a>

      <table class="table table-stripped">
        <thead>
          <tr>
            <th>Categoria</th>
            <th>Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php 
             while($row= $result->fetch_assoc()) {
             ?>
             <tr>
               <td><?php echo $row['nome'] ?></td>
               <td>
                 <a href="/admin/categorias/categoria.php?id=<?php echo $row['IdCategoria']; ?>">
                   <button class="btn btn-default">
                     <span class="glyphicon glyphicon-edit">
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

<?php include $path.'templates/footer.php';
