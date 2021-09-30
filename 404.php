<?php
get_header();

if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) :
?>
<nav class="breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ) ?>
</nav>
<?php endif; ?>
<main>
	<h1 class="heading-title">お探しのページが見つかりませんでした。</h1>
	<p>
		申し訳ございません。お探しのページが見つかりませんでした。<br>
		サイト内検索をご利用いただくか、新着記事・ブログ記事一覧などからお探しください。
	</p>
</main>




<?php
get_footer();
