<?php
/**
 * The template for displaying Author bios
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>

    <div class="authorbox cf">
	<div class="author-pic">
		<?php
		$author_bio_avatar_size = apply_filters( 'pirate_rogue_author_bio_avatar_size', 180 );
		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-pic -->
	<div class="author-heading">
		<h3 class="author-title"><span><?php esc_html_e( 'About', 'pirate-rogue'); ?></span><?php printf( "<a href='" .  esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . "' rel='author'>" . get_the_author() . "</a>" ); ?></h3>
	</div><!-- end .author-heading -->
	<p class="author-bio"><?php the_author_meta( 'description' ); ?></p>
	<div class="author-links">
		
		<?php if(get_the_author_meta('user_url') ): ?>
		<?php
		$author_url = get_the_author_meta('user_url');
                $to_remove = array( 'http://', 'https://' );
                foreach ( $to_remove as $item ) {
                    $author_url = str_replace($item, '', $author_url);
                }
		echo '<a class="author-website" href=' . get_the_author_meta('user_url') .'><span class="fa fa-link"></span> '  . $author_url . ' </a>';
		?>
		<?php endif; ?>
		<?php if(get_the_author_meta('twitter') ): ?>
			<a class="author-twitter" href="https://www.twitter.com/<?php echo get_the_author_meta('twitter'); ?>"><span class="fa fa-twitter"></span><?php echo get_the_author_meta('twitter'); ?></a>
		<?php endif; ?>


	</div><!-- end .author-links -->
    </div><!-- end .authorbox -->
