<?php
get_header();
?>
<?php if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) : ?>
<nav class="breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ) ?>
</nav>
<?php endif; ?>
<main>
	<article class="news-list">
		<h1 class="heading-title"><?php the_archive_title(); ?></h1>
		<?php if ( have_posts() ) : ?>
			<ol>
				<?php while( have_posts() ) : the_post(); ?>
				<li>
          <a href="news.html">
            <div class="news-list-img">
              <img src="img/photo-thumb01.jpg" width="120" alt="クリスマスイベントを開催しました">
            </div>
            <div class="news-list-info">
              <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
              <p class="news-list-title"><?php the_title(); ?></p>
            </div>
          </a>
        </li>
				<?php endwhile; ?>
			</ol>
		<?php else : ?>
			<p>該当の記事はありませんでした。</p>
		<?php endif; ?>
	</article>
</main>
<?php
get_footer();
