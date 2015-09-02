<?php
/**
 * Add new register fields for WooCommerce registration.
 *
 * @return string Register fields HTML.
 */
function wooc_extra_register_fields() {
	?>
	<p class="form-row form-row-wide">
		<label for="reg_confirm_password"><?php _e( 'Confirm Pasword', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="password" class="input-text" name="confirm_password" id="reg_confirm_password" value="<?php if ( ! empty( $_POST['confirm_password'] ) ) esc_attr_e( $_POST['confirm_password'] ); ?>" />
	</p>

		<p class="form-row form-row-wide">
		<label for="reg_confirm_password"><?php _e( 'Confirm Pasword', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="password" class="input-text" name="confirm_password" id="reg_confirm_password" value="<?php if ( ! empty( $_POST['confirm_password'] ) ) esc_attr_e( $_POST['confirm_password'] ); ?>" />
	</p>


	<p class="form-row form-row-wide">
		<label for="reg_first_name"><?php _e( 'First Name', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="first_name" id="reg_first_name" value="<?php if ( ! empty( $_POST['first_name'] ) ) esc_attr_e( $_POST['first_name'] ); ?>" />
	</p>

	<p class="form-row form-row-wide">
		<label for="reg_first_name"><?php _e( 'Last Name', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="last_name" id="reg_last_name" value="<?php if ( ! empty( $_POST['last_name'] ) ) esc_attr_e( $_POST['last_name'] ); ?>" />
	</p>


	<p class="form-row form-row-wide">
		<label for="reg_firm_name"><?php _e( 'Firm/Company Name', 'woocommerce' ); ?> <span class="required">*</span></label>
		<select id="reg_firm_name" name="firm_name">
			<option value="Solo Practitioner">Solo Practitioner</option>
			<option value="Associate">Associate</option>
			<option value="Partner">Partner</option>
			<option value="Judge">Judge</option>
			<option value="Non-Practicing Lawyer">Non-Practicing Lawyer</option>
			<option value="In-house Counsel">In-house Counsel</option>
 		</select>
	</p>

	<p class="form-row form-row-wide">
		<label for="reg_firm_size"><?php _e( 'Firm Size', 'woocommerce' ); ?> <span class="required">*</span></label>
		<select id="reg_firm_size" name="firm_size">
			<option value="">--Select firm size--</option>
			<option value="2-10 lawyers">2-10 lawyers</option>
			<option value="11-30 lawyers">11-30 lawyers</option>
			<option value="31-50 lawyers">31-50 lawyers</option>
			<option value="50 or more lawyers">50 or more lawyers</option>
 		</select>
	</p>

	<p class="form-row form-row-wide">
		<label for="reg_primary_practice_area"><?php _e( 'Primary Practice Area', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="primary_practice_area" id="reg_primary_practice_area" value="<?php if ( ! empty( $_POST['primary_practice_area'] ) ) esc_attr_e( $_POST['primary_practice_area'] ); ?>" />
	</p>

	<p class="form-row form-row-wide">
		<label for="reg_secondary_practice_area"><?php _e( 'Secondary Practice Area', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="secondary_practice_area" id="reg_secondary_practice_area" value="<?php if ( ! empty( $_POST['secondary_practice_area'] ) ) esc_attr_e( $_POST['secondary_practice_area'] ); ?>" />
	</p>

	<p class="form-row form-row-wide">
		<label for="reg_work_address"><?php _e( 'Work Address', 'woocommerce' ); ?> <span class="required">*</span></label>
		<textarea class="input-text" name="work_address" id="reg_work_address"><?php if ( ! empty( $_POST['work_address'] ) ) esc_attr_e( $_POST['work_address'] ); ?></textarea>
	</p>

	<p class="form-row form-row-wide">
		<label for="reg_city"><?php _e( 'City', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="city" id="reg_city" value="<?php if ( ! empty( $_POST['city'] ) ) esc_attr_e( $_POST['city'] ); ?>" />
	</p>


	<p class="form-row form-row-wide">
		<label for="reg_secondary_practice_area"><?php _e( 'Secondary Practice Area', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="secondary_practice_area" id="reg_secondary_practice_area" value="<?php if ( ! empty( $_POST['secondary_practice_area'] ) ) esc_attr_e( $_POST['secondary_practice_area'] ); ?>" />
	</p>
	<?php
}

add_action( 'woocommerce_register_form', 'wooc_extra_register_fields' );


https://support.woothemes.com/hc/en-us/articles/203182373-How-to-add-custom-fields-in-user-registration-on-the-My-Account-page
