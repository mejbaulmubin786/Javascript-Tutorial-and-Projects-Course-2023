<div class="container">

  <hr>

  <footer>
    <div class="row">
      <div class="col-lg-12">
        <p>Copyright &copy; Company <span id="getCurrentDate"></span></p>
      </div>
    </div>
  </footer>
  
</div><!-- /.container -->

<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
  var dt = new Date();
  document.getElementById('getCurrentDate').innerHTML = dt.getFullYear();
</script>
</body>

</html>