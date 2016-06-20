
<?php 
	$link1 = site_url() . "/" . "slug1/";  
	$link2 = site_url() . "/" . "slug2/";
	$link3 = site_url() . "/" . "slug3/";
	$link4 = site_url() . "/" . "slug3/";

	$title1 = "10 Awesome Facebook Marketing Ideas For Your Restaurant";
	$title2 = "What Is In A Star – Michelin Star That Is";
	$title3 = "How to Respond To Negative Restaurant Reviews";
	$title4 = "10 Local And Mobile Marketing Strategies To Expand Your Restaurant";

	$image1 = get_template_directory_uri() . '/resources/'. 'post-1.jpg';
	$image2 = get_template_directory_uri() . '/resources/'. 'post-2.jpg';
	$image3 = get_template_directory_uri() . '/resources/'. 'post-3.jpg';
	$image4 = get_template_directory_uri() . '/resources/'. 'post-4.jpg';

?>
<div class="row-quatro-wrap">
<div class="show-for-large row-quatro">

	<!-- LARGE + -->
	<div id="block-one quatro" class="gradient-5 clearfix">
		<div class="box" id="box-1-wrap" style="float:left;width:50%;padding:.5rem .25em .5rem .5rem;">
			<a href="<?php echo $link1; ?>" id="box-1-anchor">
				<div id="box-1" style="background:url(<?php echo $image1; ?>);background-size:cover;height:39.5rem;">
					<h2><?php echo $title1; ?></h2>
				</div>
			</a><!-- box #1 -->
		</div>

		<div id="right-news" style="width:50%;float:left; padding:.5rem .5rem .5rem .25rem;">
			<div id="box-2-wrap" style="padding-bottom:.5rem;">
				<a id="box-2-anchor" href="<?php echo $link2; ?>">
					<div class="box" id="box-2" style="width:100%;height:19.5rem;background:url(<?php echo $image2; ?>);background-size:cover;">

					<h2><?php echo $title2; ?></h2>
	
				</div>
			</a<!-- box #2 -->
		</div>

		<div id="bottom-right">
			<div id="box-3-wrap" style="padding-right:.5rem;float:left;width:50%;">
				<a id="box-3-anchor" href="<?php echo $link3; ?>">
					<div class="box" id="box-3" style="height:19.5rem;background:url(<?php echo $image3; ?>);background-size:cover;">
						<h2><?php echo $title3; ?></h2>

					</div>
				</a><!-- anchor #3 -->
			</div>

			<a id="box-4-anchor" href="<?php echo $link4; ?>">
				<div class="box" id="box-4" style="float:left;width:50%;height:19.5rem;background:url(<?php echo $image4; ?>);background-size:cover;">
					<h2><?php echo $title4; ?></h2>

				</div>
			</a><!-- anchor #4 -->
		</div>
	</div>
 </div><!-- show-for-large row-quatro -->
</div>



<!-- begin MEDIUM:OCHO -->

<div class="show-for-medium-only">
	<div id="medium-ocho-container quatro" class="gradient-3 clearfix">

		<div id="medium-top" style="width:100%;float:left; padding:.5rem .5rem .5rem .5rem;">
			<div id="box-1-wrap" style="padding-bottom:.5rem;">
				<a id="box-1-anchor" href="<?php echo $link1; ?>">
					<div class="box" id="box-1" style="width:100%;height:19.5rem;background:url(<?php echo $image1; ?>);background-size:cover;">
						<h2><?php echo $title1; ?></h2>

					</div>
				</a>
			</div>

			<div id="medium-bottom">
				<div id="box-2" style="padding-right:.5rem;float:left;width:33.33%;">
					<a href="<?php echo $link2; ?>">
						<div class="box" id="box-2" style="height:19.5rem;background:url(<?php echo $image2; ?>);background-size:cover;">
							<h4><?php echo $title2; ?></h4>

						</div>
					</a><!-- box #2 -->
				</div>
				
				<div id="box-3-wrap" style="padding-right:.5rem;float:left;width:33.33%;">
					<a href="<?php echo $link3; ?>">
						<div class="box" id="box-3" style="height:19.5rem;background:url(<?php echo $image3; ?>);background-size:cover;">
							<h4><?php echo $title3; ?></h4>

						</div>
					</a><!-- box #3 -->
				</div>

				<a href="<?php echo $link4; ?>">
					<div class="box" id="box-4" style="float:left;width:33.33%;height:19.5rem;background:url(<?php echo $image4; ?>);background-size:cover;">
						<h4><?php echo $title4; ?></h4>

					</div>
				</a><!-- box #4 -->
			</div>
		</div>


	</div>

</div><!-- end MEDIUM:OCHO -->


<!-- buegin SMALL:OCHO -->
<div class="show-for-small-only">
	<div class="gradient-3 clearfix quatro">

			<div id="box-1-wrap" style="padding:.5rem;width:100%;">
				<a id="box-1-anchor" href="#">
					<div class="box" id="box-1" style="width:100%;height:24rem;background:url(<?php echo $image1; ?>);background-size:cover;">
						<h2><?php echo $title1; ?></h2>

				</a>
					</div>
			</div>
			
			<div id="box-2-wrap" style="padding:.5rem;width:100%;">
				<a id="box-2-anchor" href="#">
					<div class="box" id="box-1" style="width:100%;height:24rem;background:url(<?php echo $image2; ?>);background-size:cover;">
						<h2><?php echo $title2; ?></h2>

				</a>
					</div>
			</div>
			
			<div id="box-3" style="padding:.5rem;width:100%;">
				<a href="#">
					<div class="box" id="box-3" style="height:24rem;background:url(<?php echo $image3; ?>);background-size:cover;">
						<h2><?php echo $title3; ?></h2>

					</div>
				</a>
			</div>
			
			<div id="box-4" style="padding: .5rem;width:100%;">
				<a href="#">
					<div class="box" id="cinco" style="height:24rem;background:url(<?php echo $image4; ?>);background-size:cover;">
						<h2><?php echo $title4; ?></h2>

					</div>
				</a>
			</div>
	</div>
</div><!-- end SMALL:OCHO  -->


</div><!-- row-quatro-wrap -->
