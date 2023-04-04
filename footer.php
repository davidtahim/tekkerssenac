      <hr>

      <footer>
      <div class="container">
        <div class = "row">
        <div class="col-md-4">
          <?php if (dynamic_sidebar( 'footer-left' ));  ?>
        </div>
        <div class="col-md-4">
          <?php if (dynamic_sidebar( 'footer-center' ));  ?>
        </div>
        <div class="col-md-4">
          <?php if (dynamic_sidebar( 'footer-right' ));  ?>
        </div>
        </div>
      </div>
      </footer>
    </div> <!-- /container -->

    <?php wp_footer(); ?>
   
  </body>
</html>
