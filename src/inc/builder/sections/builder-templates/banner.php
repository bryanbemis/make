<?php ttf_one_load_section_header(); ?>
<?php global $ttf_one_section_data, $ttf_one_is_js_template; ?>
<?php $section_name = ttf_one_get_section_name( $ttf_one_section_data, $ttf_one_is_js_template ); ?>

<div class="ttf-one-add-slide-wrapper">
	<a href="#" class="button button-small ttf-one-add-slide"><?php _e( 'Add Slide', 'ttf-one' ); ?></a>
</div>

<div class="ttf-one-banner-options">
	<p>
		<input type="checkbox" name="<?php echo $section_name; ?>[display-arrows]" value="1" />
		<label>
			<?php _e( 'Display navigation arrows', 'ttf-one' ); ?>
		</label>
		<input type="checkbox" name="<?php echo $section_name; ?>[display-dots]" value="1" />
		<label>
			<?php _e( 'Display navigation dots', 'ttf-one' ); ?>
		</label>
	</p>
</div>

<input type="hidden" class="ttf-one-section-state" name="<?php echo $section_name; ?>[state]" value="<?php if ( isset( $ttf_one_section_data['data']['state'] ) ) echo esc_attr( $ttf_one_section_data['data']['state'] ); else echo 'open'; ?>" />
<?php ttf_one_load_section_footer(); ?>