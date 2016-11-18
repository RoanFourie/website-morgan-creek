
 <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?php echo date("Y")?> Morgan Creek PTY. LTD. &middot; <a href="/privacy/#">Privacy</a> &middot; <a href="/terms/#">Terms</a></p>
        <?php 
				$File = '../js/visitor-counter.php';  
				if (file_exists($File)) {
					include_once('../js/visitor-counter.php');
				} else {
					include_once('./js/visitor-counter.php');
				}
		?>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>