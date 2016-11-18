<?php
foreach($childpages as $page){
?>
	<a class="child-thumb" href="<?php echo get_page_link($page->ID); ?>">
	<div> <i><?php echo $page->post_title;?></i></div>
	<img src="<?php echo get_the_post_thumbnail_url($page->ID); ?>"/>
	</a>
<?php
}
?>
