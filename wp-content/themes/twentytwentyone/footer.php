<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php //get_template_part( 'template-parts/footer/footer-widgets' ); -->?>

	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Comments</h5>
				<?php
				$comments = get_comments(array(
					'number' => 3,  // Số lượng bình luận bạn muốn lấy
					'status' => 'approve',  // Lấy các bình luận đã được phê duyệt
					'type' => 'comment',    // Lấy các bình luận (loại bình luận)
				));
						foreach($comments as $comment):
							//$comment_link = get_comment_link($comment_id);
							$permalink = get_permalink($comment->comment_post_ID);
						?>
							<a href="<?php echo $permalink ?>"><i class="fa fa-angle-double-right"></i><?php echo $comment->comment_content ?></a><br>
						<?php endforeach;?>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Categories</h5>
						<?php
					$getcatagories = get_categories();
						foreach($getcatagories as $category):
							?>
							<a href=<?php echo get_term_link($category->slug, 'category');?>><i class="fa fa-angle-double-right"></i><?php echo $category->cat_name ?></a><br>
						<?php endforeach;?>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Last posts</h5>
					<?php if(have_posts()):
					$recent_posts = get_posts(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'order' => 'DESC'
					));	
						?>
					<?php foreach($recent_posts as $post):?>
					<a href=<?php the_permalink()  ?>><i class="fa fa-angle-double-right"></i><?php  the_title(); ?></a><br>		
					<?php endforeach; endif;?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
