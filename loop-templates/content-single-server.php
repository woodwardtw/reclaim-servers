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
			<div class="col-md-5">
				<?php echo reclaim_server_url();?>			
				<?php reclaim_server_detail('institution', 'Institution');?>
				<?php reclaim_server_detail('server_data_center', 'Data Center');?>
				<?php reclaim_server_detail('server_backup_location', 'Backup Location');?>
				<?php reclaim_server_detail('setup_type', 'Setup Type');?>
				<?php reclaim_server_detail('additional_variables', 'Variables');?>
																
				<?php reclaim_server_details();?>
			</div>			
			<div class="updates col-md-7" id="updates">
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
