<?php
/**
 * Single server partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<div class="created">Created: <?php echo get_the_date(); ?></div>
			<div class="modified">Last Modified: <?php echo get_the_modified_date(); ?></div>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="row server-details">
			<div class="env-url col-md-12">
				<?php echo reclaim_server_url();?>
			</div>
			<div class="col-md-4">
				<h2>Institution</h2>
				<?php reclaim_server_tax('institution');?>
			</div>
			<div class="col-md-4">
				<h2>Data Center</h2>
				<?php reclaim_server_tax('server_data_center');?>
			</div>
			<div class="col-md-4">
				<h2>Backup Location</h2>				
				<?php reclaim_server_tax('server_backup_location');?>
			</div>
			<div class="col-md-4">
				<h2>Setup Type</h2>				
				<?php reclaim_server_tax('setup_type');?>
			</div>
			<div class="col-md-4">
				<h2>Variables</h2>				
				<?php reclaim_server_tax('additional_variables');?>
			</div>
		</div>
		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
