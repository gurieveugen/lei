<?php

class WidgetImageBox extends WP_Widget{
	//                    __  __              __    
	//    ____ ___  ___  / /_/ /_  ____  ____/ /____
	//   / __ `__ \/ _ \/ __/ __ \/ __ \/ __  / ___/
	//  / / / / / /  __/ /_/ / / / /_/ / /_/ (__  ) 
	// /_/ /_/ /_/\___/\__/_/ /_/\____/\__,_/____/  	                                             
	function __construct() 
	{		
		parent::__construct(
			'widget-image-box', 
			__('Image box'), 
			array( 
				'description' => __('Add a promo image box to sidebar.'), 
				'classname' => 'b-box-info_image'
			)
		);
	}

	function widget($args, $instance) 
	{
		$arr['image'] = isset($instance['image']) ? $instance['image'] : '';
		$arr['title'] = isset($instance['title']) ? $instance['title'] : '';
		$arr['url']   = isset($instance['url']) ? $instance['url'] : '';
		
		extract($arr);
		echo $args['before_widget'];
		?>
		<a href="<?php echo $url; ?>" class="image">
			<img src="<?php echo $image; ?>" alt="Image">
			<span>Click for more</span>
		</a>
		<?php echo $args['before_title']; ?>
			<a href="<?php echo $url; ?>"><?php echo $title; ?></a>
		<?php echo $args['after_title']; ?>
		<?php
		echo $args['after_widget'];
	}

	function update( $new_instance, $old_instance ) 
	{
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['image'] = strip_tags($new_instance['image']);
		$instance['url']   = strip_tags($new_instance['url']);
		
		return $instance;
	}

	function form( $instance ) 
	{
		$arr['title']  = isset($instance['title']) ? $instance['title'] : '';
		$arr['image'] = isset($instance['image']) ? $instance['image'] : '';
		$arr['url'] = isset($instance['url']) ? $instance['url'] : '';

		extract($arr);
		?>
		<p>
			<label for="<?php echo $this->get_field_id('image'); ?>"><?php _e('Image ( url ):') ?></label>
			<div class="widefat">
				<input type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" value="<?php echo $image; ?>" style="width: 70%;" />
				<button type="button" class="button button-upload" onclick="uploadMedia(event, this)">Upload</button>	
			</div>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('URL:') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" value="<?php echo $url; ?>" />
		</p>
		<?php
	}
}