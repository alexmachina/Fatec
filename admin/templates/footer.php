 

<footer>
  <div class="row">
    <div class="col-xs-12 footer-container">
      <small>Nighttools, 2017. MIT. <a href="https://github.com/alexxmde/Fatec">Disponivel no Github!</a></small>
    </div>
  </div>
</footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.10/handlebars.min.js"></script>
<script src="/admin/vendor/jquery/dist/jquery.min.js"></script>
<script src="/admin/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.min.js"></script>
<script>
  if (!Cookies.get('logado')) {
    window.location.href = '/admin';
}
</script>
</html>
