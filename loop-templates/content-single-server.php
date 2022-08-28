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

		<?php the_title( '<h1 class="entry-title server-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<div class="dates">
				<div class="created">Created: <?php echo get_the_date(); ?></div>
				<div class="modified">Last Modified: <?php echo get_the_modified_date(); ?></div>
			</div>
			<div class="actions">
				<a class="btn btn-primary btn-server" href="#updates">See Updates</a>
				<button type="button" class="btn btn-primary btn-server" data-bs-toggle="modal" data-bs-target="#serverUpdateModal">
					Make Update
				</button>
			</div>		
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="row server-details">
			<div class="col-md-4">
				<div class="info-block">				
					<h2>Environment URL</h2>
					<?php echo reclaim_server_url();?>
				</div>
			</div>			
			<div class="col-md-4">
				<div class="info-block">
					<h2>Institution</h2>
					<?php reclaim_server_tax('institution');?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-block">
					<h2>Data Center</h2>
					<?php reclaim_server_tax('server_data_center');?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-block">
					<h2>Backup Location</h2>				
					<?php reclaim_server_tax('server_backup_location');?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-block">
					<h2>Setup Type</h2>				
					<?php reclaim_server_tax('setup_type');?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-block">
					<h2>Variables</h2>				
					<?php reclaim_server_tax('additional_variables');?>
				</div>
			</div>
			<?php reclaim_server_details();?>
			<div class="updates col-md-12" id="updates">
				<div class='info-block'>
					<h2>Updates</h2>
					<?php reclaim_server_updates();?>
				</div>
			</div>
		</div><!--end row-->
		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- Modal -->
			<div class="modal fade" id="serverUpdateModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="modalLabel">Update</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <?php reclaim_server_update_form();?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
