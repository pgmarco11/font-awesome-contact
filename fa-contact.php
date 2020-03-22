<?php
/**
 * Plugin Name: Font Awesome Contact 
 * Description: Easily add contact info and Social links into your WordPress posts, pages, and custom post types with Font Awesome Icons
 * Version: 1.0.0
 */

/**
 * Do not load this file directly.
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Adds widget.
 */
class fa_contact_slinks_widget extends WP_Widget {

		/**
	 * Register widget with WordPress.
	 */

	public function __construct(){	
		
		parent::__construct( 'fasl_contact_widget', 'Contact and Social Links Widget', array(
			'classname' => 'fa_contact_slinks_widget',
			'description' => __('Display nice looking font awesome social links'))
		);
		
	}


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */

	public function faw_assets(){


	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance){
		
		return $new_instance;

	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */

	public function form($instance){

		$title = '';

		$tw_icon = '';
		$tw_link = '';

		$fa_icon = '';
		$fa_link = '';

		$pi_icon = '';
		$pi_link = '';

		$li_icon = '';
		$li_link = '';

		$address_icon = '';
		$phone_icon = '';
		$email_icon = '';

		$address = '';
		$phone = '';
		$email = '';


		if( !empty( $instance['title'] ) ) { $title = $instance['title']; }

		if( !empty( $instance['tw_link'] ) ) { $tw_link= $instance['tw_link']; }
		if( !empty( $instance['fa_link'] ) ) { $fa_link= $instance['fa_link']; }
		if( !empty( $instance['pi_link'] ) ) { $pi_link= $instance['pi_link']; }
		if( !empty( $instance['li_link'] ) ) { $li_link= $instance['li_link']; }

		if( !empty( $instance['tw_icon'] ) ) { $tw_icon = $instance['tw_icon']; }
		if( !empty( $instance['fa_icon'] ) ) { $fa_icon = $instance['fa_icon']; }
		if( !empty( $instance['pi_icon'] ) ) { $pi_icon = $instance['pi_icon']; }
		if( !empty( $instance['li_icon'] ) ) { $li_icon = $instance['li_icon']; }

		if( !empty( $instance['phone'] ) ) { $phone = $instance['phone']; }
		if( !empty( $instance['address'] ) ) { $address = $instance['address']; }
		if( !empty( $instance['email'] ) ) { $email = $instance['email']; }

		if( !empty( $instance['phone_icon'] ) ) { $phone_icon = $instance['phone_icon']; }
		if( !empty( $instance['address_icon'] ) ) { $address_icon = $instance['address_icon']; }
		if( !empty( $instance['email_icon'] ) ) { $email_icon = $instance['email_icon']; }

	?>


	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('title')); ?>">
				<?php _e('Title:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr_e( $title ); ?>"/></br>
	</p>


	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('phone_icon')); ?>">
				<?php _e('Phone Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $phone_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('phone')); ?>">
				<?php _e('Phone:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>" type="text" value="<?php echo esc_attr_e( $phone ); ?>"/>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('address_icon')); ?>">
				<?php _e('Address Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $address_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('address')); ?>">
				<?php _e('Address:'); ?>
		</label>
		<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>" ><?php echo esc_attr_e( $address ); ?></textarea>

	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('email_icon')); ?>">
				<?php _e('Email Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $email_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('email')); ?>">
				<?php _e('Email Address:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" type="text" value="<?php echo esc_attr_e( $email ); ?>"/>
	</p>




	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('fa_icon')); ?>">
				<?php _e('Facebook Font Awesome Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fa_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fa_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $fa_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('fa_link')); ?>">
				<?php _e('FaceBook Link:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fa_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fa_link' ) ); ?>" type="text" value="<?php echo esc_attr_e( $fa_link ); ?>"/>
	</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_name('tw_icon')); ?>">
				<?php _e('Twitter Font Awesome Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tw_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tw_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $tw_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('tw_link')); ?>">
				<?php _e('Twitter Link:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tw_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tw_link' ) ); ?>" type="text" value="<?php echo esc_attr_e( $tw_link ); ?>"/>
	</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_name('li_icon')); ?>">
				<?php _e('LinkedIn Font Awesome Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'li_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'li_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $li_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('li_link')); ?>">
				<?php _e('LinkedIn Link:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'li_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'li_link' ) ); ?>" type="text" value="<?php echo esc_attr_e( $li_link ); ?>"/>
	</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_name('pi_icon')); ?>">
				<?php _e('Pinterest Font Awesome Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pi_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pi_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $pi_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('pi_link')); ?>">
				<?php _e('Pinterest Link:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pi_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pi_link' ) ); ?>" type="text" value="<?php echo esc_attr_e( $pi_link ); ?>"/>
	</p>

	


	<?php

		}

	public function widget($args, $instance){

			echo $args['before_widget'];

	?>
	
				<?php if( !empty( $instance['title'] ) ) {  
		
				echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		
				} ?>

					<div class="contactdetail">
	                	<p>
	                	<?php 
	                	if( !empty( $instance['address_icon'] ) ) { echo sprintf( $instance['address_icon'] ); } 
	                	?>
	                	<span class="address">
	                	<?php
	                	if( !empty( $instance['address'] ) ) { echo sprintf( nl2br($instance['address']) ); }  
	                	?>
	                	</span>	                	 	
	                	</p>
	                                   
						<p>
	                	<?php 
	                	if( !empty( $instance['phone_icon'] ) ) { echo sprintf( $instance['phone_icon'] ); } 
	                	if( !empty( $instance['phone'] ) ) { echo esc_attr_e( $instance['phone'] ); }  
	                	?>	  	
						</p>
	                                         
						<p>
	                	<?php 
	                	if( !empty( $instance['email_icon'] ) ) { echo sprintf( $instance['email_icon'] ); } 
	                	
	                	?>
	                	<a href="mailto:<?php if( !empty( $instance['email'] ) ) { echo esc_attr_e( $instance['email'] ); } ?>">
	                	<?php if( !empty( $instance['email'] ) ) { echo esc_attr_e( $instance['email'] ); } ?>
	                	</a>
						</p>
	                                       
	                                                            
	                </div>

					<ul class="social-icon clearfix unstyled">
						<?php if( !empty( $instance['tw_link'] ) ) { ?>
						<li>
						<a href="<?php echo esc_url( $instance['tw_link'] ); ?>" data-toggle="tooltip" title="Twitter"><?php if( !empty( $instance['tw_icon'] ) ) { 
							echo sprintf( $instance['tw_icon'] ); }
						?>
						</a>
						</li>
						<?php } if( !empty( $instance['fa_link'] ) ) { ?>
						<li>
						<a href="<?php echo esc_url( $instance['fa_link'] ); ?>" data-toggle="tooltip" title="Facebook"><?php if( !empty( $instance['fa_icon'] ) ) { 
							echo sprintf( $instance['fa_icon'] ); } 
						?>
						</a>
						</li>
						<?php } if( !empty( $instance['li_link'] ) ) { ?>
						<li>
						<a href="<?php echo esc_url( $instance['li_link'] ); ?>" data-toggle="tooltip" title="LinkedIn"><?php if( !empty( $instance['li_icon'] ) ) { 
							echo sprintf( $instance['li_icon'] ); } 
						?>
						</a>
						</li>
						<?php } if( !empty( $instance['pi_link'] ) ) { ?>
						<li>
						<a href="<?php echo esc_url( $instance['pi_link'] ); ?>" data-toggle="tooltip" title="Pinterest"><?php if( !empty( $instance['pi_icon'] ) ) { 
							echo sprintf( $instance['pi_icon'] ); } 
						?>
						</a>
						</li>
						<?php } ?>
								
					</ul>



	<?php

			echo $args['after_widget'];

	}

}

add_action( 'widgets_init', function(){
	return register_widget("fa_contact_slinks_widget");
});

?>