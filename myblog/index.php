<?php get_header(); ?>

<section id="main">
      <div id="no-slide">
        <?php include (TEMPLATEPATH. '/slideshow.php');?>
      </div>

    
      
      <section id="article_list">
      <?php query_posts("paged=$paged"); ?>
      <?php if(have_posts()): while(have_posts()): the_post();?>
      <article>
          <div class="thumb"><a href="<?php the_permalink();  ?> '">
            <?php if (has_post_thumbnail()){ the_post_thumbnail('list_article_thumbs');} ?>
          </a></div>
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
          <div class="date"><?php the_date(); ?> en <span><?php the_category(); ?></span></div>
          <div class="extract">
           <?php the_excerpt(); ?>
          </div>
        </article>
      <!--Codigo que se ejecutara cuando se encuentren articulos-->
      <?php endwhile; else: ?>
            <h2>NO SE ENCONTRARON ARTICULOS</h2>
      <!--Aqui el codigo se ejecutara si no wncuwntra articulos-->
      <?php endif; ?>
      
       
        <div id="pagination">
            <p> <?php previous_posts_link('<- Post Anteriores'); ?> <?php next_posts_link('Post Siguientes ->'); ?></p>
        </div>
      </section>


<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>