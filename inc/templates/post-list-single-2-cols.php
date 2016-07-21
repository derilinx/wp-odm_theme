<?php
	$post = $params["post"];
	$show_meta = $params["show_meta"];
	$show_excerpt = $params["show_excerpt"];
	?>

<div class="eight columns post-list-item">
	<p><a class="post-list-item-title" href="<?php echo get_permalink($post->ID); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a></p>
	<div class="post-list-item-content">
			<?php if ($show_excerpt):
				$thumb_src = odm_get_thumbnail($post->ID,false);
				if (isset($thumb_src)):
					echo $thumb_src;
				endif; ?>
				<div class="post-excerpt">
					<?php echo odm_excerpt($post); ?>
				</div>
			<?php endif; ?>
			<?php if ($show_meta): ?>
			<div class="meta">
					<?php echo_post_meta($post,array('date','sources','categories')); ?>
			</div>
			<?php endif; ?>
	</div>
</div>