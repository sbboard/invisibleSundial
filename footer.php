<footer>
      <div id="rabbit_holder">
      <img
        src="img/rabbit.gif"
        onmouseover="var rh = document.getElementById('rabbit_holder'); rh.style['text-align'] = ( rh.style['text-align'] == 'right' ? 'left' : 'right' );"
      />
      </div>
      <div id="copyright">
      &copy;
      <span id="copywrite">
          <script>document.getElementById('copywrite').appendChild(document.createTextNode(new Date().getFullYear()))</script>
      </span>
      The Invisible Sundial
    </div>
    </footer>
<?php //wp_footer(); ?>
  </body>
</html>