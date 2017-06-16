<?php
  session_start();
  $path = '../';
  include $path.'templates/header.php';
  include $path.'config.php';
  include $path.'conexao.php';
?>

<article class="container">
<div id="debug">
</div>
  <div class="row">
    <div class="col-xs-12">
      <div id="post-form"></div>
  </div>
</div>
</article>
<?php include $path.'templates/footer.php'; ?>

    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>
    <script id="form-template" type="text/x-handlebars-template">
<form  id="theForm">
        {{#if post.IdPost}}
        <input type="hidden" name="IdPost" value="{{post.IdPost}}" />
        {{/if}}
        <div class="form-group">
          <span>Autor: {{post.autor.nome}}</span>
        </div>

          <input type="hidden" name="IdAutor" value="{{post.autor.IdUsuario}}" />
        <div class="form-group">
          <label>Categoria</label>
          <select class="form-control" name="IdCategoria"> 
            <option value="0">-- Selecione a Categoria --</option>
            {{#each categorias}}
              {{#if isSelected}}
            <option value="{{IdCategoria}}" selected>
              {{else}}
            <option value="{{IdCategoria}}">
              {{/if}}
            {{nome}}
            </option>
            {{/each}}
          </select>
      <span id="categoria-validation" class="validation"></span>
        <div class="form-group">
          <label>Titulo</label>
          <input type="text" name="titulo"
            value="{{post.titulo}}" class="form-control" />
          <span id="titulo-validation" class="validation"></span>
        </div>
        <div class="form-group">
          <label>Texto</label>
          <textarea id="editor" name="texto" rows="10" class="form-control" >{{post.texto}}</textarea>
          <span id="texto-validation" class="validation"></span>
        </div>
      <button type="submit"  id="form-submit-button" class="btn btn-primary form-control">
        Salvar
      </button>
<span id="message-span"></span>
      </form>
</script>


<script src="/admin/js/posts/post.js"></script>
