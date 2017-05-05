<?php
/**
 * The template used for displaying single post content.
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>

<?php
$introtext = get_post_meta($post->ID, 'intro', true);
$custom_class = get_post_meta($post->ID, 'post_class', true);
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class($custom_class); ?>>
		<header class="entry-header cf">
			<div class="title-wrap"> 
				<?php 
				the_title( '<h1 class="entry-title">', '</h1>' );                     
				if ( get_post_meta($post->ID, 'intro', true) ) { ?>
					<p class="intro"><?php echo $introtext; ?></p>
				<?php } ?>
			</div><!-- end .title-wrap -->

			<div class="entry-meta cf">
				<div class="meta-columnone">
				    <div class="entry-date">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
				    </div><!-- end .entry-date -->
				</div><!-- end .meta-columnone -->
				<div class="meta-columntwo">	
				</div><!-- end .meta-columntwo -->
				<div class="meta-columnthree">
					<?php edit_post_link( esc_html__( 'Edit Post', 'pirate-rogue'), '<span class="entry-edit">', '</span>' ); ?>
				</div><!-- end .meta-columnthree -->
			</div><!-- end .entry-meta -->
		</header><!-- end .entry-header -->

		<div class="contentwrap">

			<div id="socialicons-sticky">
				<div id="entry-content" class="entry-content">
                                <?php    

                                    $output = '';
  
                                    echo wp_get_attachment_image( $post->ID, 'full' );
                                    echo '<p class="auszug">';
                                        the_excerpt();
                                    echo "</p>\n";
                                    the_content();
						
                                    $imgdata = pirate_rogue_get_image_attributs($post->ID);
                                    if ( is_user_logged_in() ) {
					echo '<p class="box maincolor-box">'.__('Only viewed by website members:','pirate-rogue').'</p>';
					echo "<h3>".__('Image-Attributs','pirate-rogue')."</h3>";
						   
					echo pirate_rogue_array2table($imgdata);

					echo "<h3>".__('Meta','pirate-rogue')."</h3>";
					$meta = get_post_meta( $post->ID );

                                        if (isset($meta) && isset($meta['_wp_attachment_metadata']) 
                                                && is_array($meta['_wp_attachment_metadata'])) { 
                                            $data = unserialize($meta['_wp_attachment_metadata'][0]);
                                            echo pirate_rogue_array2table($data['image_meta']);
                                            echo "<h3>".__('Image Sizes','pirate-rogue')."</h3>\n";
                                            echo pirate_rogue_array2table($data['sizes']);
                                        } else { 
                                             echo '<p class="box red-box">'.__('No meta data found','pirate-rogue').'</p>';
                                        }

                                        echo '<p class="hinweis">'.__('Public viewable informations:','pirate-rogue').'</p>';
                                    }
                                    ?>
						    
                                    <h3><?php _e('Image Informations','pirate-rogue'); ?></h3>
						    
                                    <table>
                                        <tr>
                                            <th><?php _e('Title','pirate-rogue');?></th>
                                            <td><?php echo $imgdata['title']; ?></td>
                                        </tr>
                                        <?php if(!empty($imgdata['caption'])) { ?>
                                        <tr>
                                            <th><?php _e('Caption','pirate-rogue');?></th>
                                            <td><?php echo $imgdata['caption']; ?></td>
                                        </tr>
                                        <?php } ?>
                                        <?php if(!empty($imgdata['excerpt'])) { ?>
                                        <tr>
                                            <th><?php _e('Excerpt','pirate-rogue');?></th>
                                            <td><?php echo $imgdata['excerpt']; ?></td>
                                        </tr>
                                        <?php } ?>
                                        <?php if(!empty($imgdata['description'])) { ?>
                                        <tr>
                                            <th><?php _e('Description','pirate-rogue');?></th>
                                            <td><?php echo $imgdata['description']; ?></td>
                                        </tr>
                                        <?php } ?>
                                        <?php if(!empty($imgdata['copyright'])) { ?>
                                        <tr>
                                            <th><?php _e('Copyright','pirate-rogue');?></th>
                                            <td><?php echo $imgdata['copyright']; ?></td>
                                        </tr>
                                        <?php } 		
					?>
					<tr>
					    <th><?php _e('Download','pirate-rogue');?></th>
					    <td><a href="<?php echo $imgdata['src']; ?>"><?php echo $imgdata['title']; ?> (<?php _e('Size','pirate-rogue');?> <?php echo $imgdata['width']; ?> x <?php echo $imgdata['height']; ?>)</a></td>
					</tr>
                                    </table>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pirate-rogue'),
						'after'  => '</div>',
					) );
				?>
				
				</div><!-- end .entry-content -->

			<footer class="entry-footer cf">
				<?php $tags_list = get_the_tag_list();
                                    if ( $tags_list ): ?>
					<div class="entry-tags"><span><?php esc_html_e('Tags', 'pirate-rogue') ?></span><?php the_tags('',' &bull; ', ''); ?></div>
                                    <?php endif; ?>
			</footer><!-- end .entry-footer -->


			<?php the_post_navigation( array (
				'next_text' => '<span class="meta-nav">' . esc_html__( 'Next Post', 'pirate-rogue') . '</span> ' .
				'<span class="screen-reader-text">' . esc_html__( 'Next Post', 'pirate-rogue') . '</span> ',
				'prev_text' => '<span class="meta-nav">' . esc_html__( 'Previous Post', 'pirate-rogue') . '</span> ' .
				'<span class="screen-reader-text">' . esc_html__( 'Previous Post', 'pirate-rogue') . '</span> ',
			) ); ?>

		</div><!-- end #socialicons-sticky -->
		</div><!-- end .content-wrap -->

	</article><!-- end post -<?php the_ID(); ?> -->
