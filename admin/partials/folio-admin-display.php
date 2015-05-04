<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       pootlepress.com
 * @since      1.0.0
 *
 * @package    Folio
 * @subpackage Folio/admin/partials
 */
?>

<?php do_action( 'before_folio_metabox' ); ?>
<div class="folio-metabox">

	<div class="folio-section pad2">

		<div class="folio-rows-container">
			<div class="folio-row pad" >
				<div class="folio-cell pad" >
					<div class="folio-content" >
						+ Add content
					</div>
				</div>
				<div class="folio-cell pad" >
					<div class="folio-content" >
						+ Add content
					</div>
				</div>
			</div>
		</div>

		<div class="folio-add-row">
			+ Add Row
		</div>

	</div>

	<div class="folio-add-section"> + Add Section </div>

</div>
<?php do_action( 'after_folio_metabox' ); ?>