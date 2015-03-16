<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package cw-magazine
 */
?>
		<div class="clear"></div>
    </div><!-- .container -->
</div><!-- .wrapper -->
<footer class="site-footer">
	<div class="container">

        <?php if ( is_active_sidebar( 'Footer1' ) ) : ?>
		  <?php dynamic_sidebar( 'Footer1' ); ?>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'Footer2' ) ) : ?>
		  <?php dynamic_sidebar( 'Footer2' ); ?>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'Footer3' ) ) : ?>
		  <?php dynamic_sidebar( 'Footer3' ); ?>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'Footer4' ) ) : ?>
		  <?php dynamic_sidebar( 'Footer4' ); ?>
        <?php endif; ?>


        <div class="clear"></div>
    </div><!-- .container -->

    <div class="site-info">

        <div class="contact-info">
               Contact<br/>
               <br/>
               General Enquiries:<br/> 
               +44 (0)121 236 6833<br/>
               <br/>
                      
               <a href="mailto:enquiries@magicmilestones.com">enquiries@magicmilestones.com</a>
                       
         </div>

            
         <div class="contact-info" style="left: 40px;">
              Registered Office:<br/>
              40 Warstone Parade East,<br/>
              The Jewellery Quarter,<br/>
              Birmingham. B18 6NR<br/>
              Registered in England and Wales: 06261134
          </div>

          <div id="search-footer-container" class="search-container">
               <?php get_search_form(); ?>
          </div>
    </div>
</footer><!-- .site-footer -->

<?php wp_footer(); ?>
</body>
</html>