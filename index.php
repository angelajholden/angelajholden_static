<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Angela J Holden | Frontend Developer &amp; Software Engineer';
$description = 'Hi, I\'m Angela Holden. I build accessible, responsive websites and share the process through live streams, tutorials and developer mentorship.';
$noindex = false; // or true, if you want to block this specific page
include_once (__DIR__) . '/includes/head.php';
?>

<body>
	<h1 class="access-hidden">Angela J Holden | Frontend Developer &amp; Software Engineer</h1>
	<?php include_once __DIR__ . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="top-banner_hero animate__animated animate__fadeIn">
			<div class="wrap">
				<div class="text-wrap_hero">
					<h2 class="secondary-heading">
						<span>Design.</span>
						<span>Develop.</span>
						<span>Deploy.</span>
					</h2>
					<p>I'm Angela Holden, a frontend developer and software engineer in Saint Paul, MN. I'm available for freelancing and consulting. <a href="<?php echo BASE_URL; ?>contact/">Contact me</a> if you'd like help with your project.</p>
				</div>
				<figure class="figure">
					<div class="image-container">
						<img src="<?php echo BASE_URL; ?>images/heidi-sheltie-dog-park-angelajholden.jpg" alt="Heidi the Sheltie at the dog park on a sunny day.">
					</div>
					<figcaption>Heidi the Sheltie at the dog park on a sunny day.</figcaption>
				</figure>
			</div>
		</section>
		<section class="three-content_section">
			<div class="heading-wrap">
				<h2 class="secondary-heading">Frontend Philosophy</h2>
				<p><strong>Need a Website?</strong> I'm available for select freelance web development projects. I build fast, accessible, and responsive sites using HTML, CSS and JavaScript.</p>
			</div>
			<div class="wrap">
				<article class="content-item animate__animated" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Design</h3>
					<p>My design approach begins with content, images and branding. I find the design process so much easier when I spend time on the messaging and branding before any code is written.</p>
				</article>
				<article class="content-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Develop</h3>
					<p>I love HTML, CSS and JavaScript. The development process is my favorite part of every project. At this point in my career, I think I can write CSS in my sleep, with both hands tied behind my back.</p>
				</article>
				<article class="content-item animate__animated" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Deploy</h3>
					<p>Often overlooked, DevOps is an important skill to have. Best practices must include version control and deployment, and an understanding of how to see one's own work in the broswer.</p>
				</article>
			</div>
			<p class="animate__animated" data-animation="animate__fadeInUp">
				<a class="cta-link blue-solid" href="<?php echo BASE_URL; ?>contact/">Get in Touch!</a>
			</p>
		</section>
		<div class="dots">
			<div class="wrap">
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
			</div>
		</div>
		<section class="featured-video_section">
			<div class="heading-wrap">
				<h2 class="secondary-heading">Latest Tutorial</h2>
			</div>
			<div class="wrap">
				<figure class="figure animate__animated" data-animation="animate__fadeInUp">
					<img src="<?php echo BASE_URL; ?>images/angelajholden-deploy-to-digital-ocean.jpg" alt="YouTube thumbnail for How to Deploy a Website (Rsync)">
				</figure>
				<div class="featured-content animate__animated animate__fast" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Deploy a Website to DigitalOcean 💧 LAMP + Rsync (MacOS) + DNS Setup</h3>
					<p>In this tutorial I'll show you how I setup a LAMP stack on DigitalOcean and deploy a static website using Rsync. I'll also configure the DNS settings for a custom domain and install an SSL certificate from Let's Encrypt.</p>
					<p>
						<a class="cta-link blue-solid" href="https://youtu.be/BORta0DWUIY" target="_blank">Watch on YouTube
						</a>
						<a class="cta-link blue-solid" href="https://github.com/angelajholden/devops" target="_blank">DevOps for Frontend
						</a>
					</p>
				</div>
			</div>
		</section>
	</main>
	<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>

</html>