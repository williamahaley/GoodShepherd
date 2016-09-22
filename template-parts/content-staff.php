<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


$fields = get_fields();
?>
		<li>
			<?php  ?>
			<img src="<?php echo $fields['image']['url']?>" alt="" class="thumbnail">
			<div class="seremon-detail">
				<h3><?php echo $fields['full_name']?></h3>
				<h4><?php echo $fields['position']; ?></h4>
				<p><?php echo $fields['write_up']; ?></p>
			</div>
		</li>
