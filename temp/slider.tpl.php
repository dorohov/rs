<?
/////// slider

$argums = array('post_type' => 'post', 'include' => '8637, 8683, 8432, 8325, 5370', 'orderby' => 'post__in');
$projects_slider = get_posts($argums);
?>
<div class="_ipc__slider">
	<div class="_ipc__slider-block">
		<div id="carousel-index" class="_ipc__slider-carousel carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<?foreach ($projects_slider as $post ){ ?>
					<div class="item" style="background-image: url(<?=get_field('index_slider_img', $post->ID); ?>);">
    				<a class="carousel-link" href="<?=l($post->ID);?>"></a>
					<div class="carousel-caption">
						<a href="<?=l($post->ID);?>"><?=$post->post_title;?></a>
					</div>
    			</div>
    			<?} wp_reset_postdata();?>
    			<a class="left carousel-control" href="#carousel-index" data-slide="prev"></a>
				<a class="right carousel-control" href="#carousel-index" data-slide="next"></a>
			 	<ol class="carousel-indicators">
					<?foreach ($projects_slider as $post_index => $post ){ ?>
					<li data-target="#carousel-index" data-slide-to="<?=$post_index;?>" class="<?if($post_index == 0){?> active <?}?>"></li>
					<?} wp_reset_postdata();?>
				</ol>
			</div>
		</div>
	</div>
</div>