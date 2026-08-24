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
		<section class="video-articles">
			<header class="content-header">
				<h1 class="primary-heading">Videos</h1>
				<p>This is the full archive of everything I've streamed on YouTube. I go live every Saturday and Sunday to practice HTML, CSS and JavaScript. I build real vanilla projects in real-time.</p>
			</header>
			<div class="video-wrap"></div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>