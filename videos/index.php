<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Live Stream Videos | Angela J Holden';
$description = '';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="masonry-articles video-articles">
			<header class="content-header">
				<h1 class="primary-heading">Videos</h1>
				<p>This is the full archive of everything I've streamed on YouTube. Filter by category to find exactly what you need.</p>
				<!-- No categories right now. Eventually I'll build this out -->
				<!-- <div class="article-buttons">
					<button class="button blue-hollow active" data-category="all">All Articles</button>
					<button class="button blue-hollow" data-category="pdfs">DevOps</button>
					<button class="button blue-hollow" data-category="lifestyle">Lifestyle</button>
					<button class="button blue-hollow" data-category="tips">Tips &amp; Advice</button>
					<button class="button blue-hollow" data-category="tutorials">Tutorials</button>
				</div> -->
			</header>
			<div class="masonry-wrap video-wrap"></div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>