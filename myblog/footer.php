<footer>
      <section id="ft_widget">
      <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer')) : endif;    ?>
      </section>
      <p id="copyright">Mi Blog copyright @ 2019</p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
