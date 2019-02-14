<?php get_header(); ?>

<section id="main">      
      <section id="article_list">
      <?php if(have_posts()): while(have_posts()): the_post();?>
      <article>
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
          <div class="date"><?php the_date(); ?> en <span><?php the_category(); ?></span></div>
          <div class="extract">
           <?php the_content(); ?>
          </div>
        </article>
      <!--Codigo que se ejecutara cuando se encuentren articulos-->
      <?php endwhile; else: ?>
            <h2>NO SE ENCONTRARON ARTICULOS</h2>
      <!--Aqui el codigo se ejecutara si no wncuwntra articulos-->
      <?php endif; ?>
      </section>


<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>