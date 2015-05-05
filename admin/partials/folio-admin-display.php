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

	<div class="folio-section">

		<div class="folio-rows-container">
			<div class="folio-row" >
				<div class="folio-cell" >
					<div class="folio-content" >
						Lorem Ipsum dolor sit amet consectetur...
					</div>
					<div class="folio-content" >
						Consectetur dolor sit lorem...
					</div>
					<div class="folio-content" >
						sit amet consectetur dolor ipsum morel...
					</div>
					<div class="folio-add-content folio-add" >
						+ Add content
					</div>
				</div>
				<div class="folio-cell" >
					<div class="folio-content" >
						Dolor sit amet lorem Ipsum consectetur...
					</div>
					<div class="folio-content" >
						Amet ipsum lorem Ipsum consectetur...
					</div>
					<div class="folio-content" >
						Sit amet dolor lorem Ipsum consectetur...
					</div>
					<div class="folio-add-content folio-add" >
						+ Add content
					</div>
				</div>
			</div>
		</div>

		<div class="folio-add-row folio-add">
			+ Add Row
		</div>

	</div>

	<div class="folio-add-section folio-add"> + Add Section </div>

</div>
<?php do_action( 'after_folio_metabox' ); ?>