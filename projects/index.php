<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Projects | Angela J Holden';
$description = 'These are frontend projects I built during live streams, with links to full access to source code, working demos, and YouTube playlists.';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="grid-projects animate__animated animate__fadeIn">
			<header class="content-header">
				<h1 class="primary-heading">Projects</h1>
				<p>These are frontend projects built during live streams, with links to the source code, working demos, and YouTube playlists or videos. Most projects are made with HTML, vanilla CSS and JavaScript; three things a broswer renders natively. Examples of my client work are available upon request.</p>
			</header>
			<div class="wrap">
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-scenic.jpg" alt="Screenshot of Scenic demo website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Scenic (HTML CSS JavaScript Website)</h2>
						<p>Designed in 2015, and meant to be a WordPress theme, I found this PSD when I was browsing old files. I decided instead to build it as a static website using HTML, vanilla CSS and JavaScript. It also has a working contact form using a <a href="https://formspree.io" target="_blank">Form Spree</a> endpoint.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://github.com/angelajholden/scenic" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://scenic.practicelayouts.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-coffee-no-tea.jpg" alt="Screenshot of Coffee, but no Tea demo website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Coffee, But No Tea (4 Page Static Website)</h2>
						<p>Designed in 2014 as a one page landing site, I found this PSD when I was browsing old files. I decided to build it as a static website using HTML, vanilla CSS and JavaScript. It also has a working contact form using a <a href="https://formspree.io" target="_blank">Form Spree</a> endpoint.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://github.com/angelajholden/coffee-but-no-tea" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://coffee.practicelayouts.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-responsive-video-gallery.jpg" alt="Screenshot of Responsive Video Gallery production website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Responsive Video Gallery (Vanilla JS)</h2>
						<p>Responsive Video Gallery was my first open source project, originally built in December 2013 using jQuery. After more than a decade, I rebuilt the UI with only vanilla JavaScript to remove all dependencies. I also included a toggle for light and dark mode.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://github.com/angelajholden/responsive-video-gallery" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://responsivevideogallery.com/" target="_blank">Production Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-italia-ink-grid.jpg" alt="Screenshot of Italia, a CSS Grid demo website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Italia (CSS Grid Layout)</h2>
						<p>This is CSS Grid landing page built with HTML, vanilla CSS and JavaScript. It's based on a Photoshop mockup called INK - Elegant Magazine Blog PSD Template, purchased from Envato/ThemeForest.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://github.com/angelajholden/ink-grid-layout" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://italia.practicelayouts.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-responsive-navbar.jpg" alt="Screenshot of Responsive Navbar demo navigation">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Responsive Navbar Build (UI Snacks)</h2>
						<p>This demo page is an example of a responsive and accessible navbar. After years fine tuning my process for building navigation, this system ensures navigation is both mobile responsive and accessible for screen readers and keyboard navigation.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/qy_ctSLSuf4" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/ui-snacks/tree/main/navbar-timelapse" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/ui-snacks/navbar-timelapse/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-fiber-and-kraft.jpg" alt="Screenshot of Fiber & Kraft production website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Fiber &amp; Kraft (Homepage Clone)</h2>
						<p>This landing page is a clone of the <a href="https://knitpicks.com/" target="_blank">KnitPicks.com</a> homepage. Using my own assets, color scheme, images and content; and I copied the layout. Fiber & Kraft is a personal project for my my knitting, crocheting, spinning and yarn dyeing hobbies.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/tYhZKDEosnA" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/homepage-clone" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://fiberandkraft.com/" target="_blank">Production Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-instagram-grid-profile-1.jpg" alt="Screenshot of Instagram Profile demo website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Instagram Profile (HTML + Vanilla CSS)</h2>
						<p>Using HTML and vanilla CSS, this is a clone of the Instagram profile from the iOS mobile app in November 2025. It's a UI only, I didn't try to recreate the full functionality of the Instagram mobile app.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/oFFR4zx1Uss" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/ig-grid-profile" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/ig-grid-profile/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-solo-masonry.jpg" alt="Screenshot of Solo Masonry CSS Columns Layout demo website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Solo Masonry (CSS Grid Columns)</h2>
						<p>This is a landing page with a sticky, on-scroll header, built with HTML, CSS and vanilla JavaScript. It's based on a Photoshop mockup called Solo - Modern Personal Blog PSD Template, purchased from Envato/ThemeForest.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/32XwCadbGrQ" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/solo-masonry" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://solo-masonry.practicelayouts.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-category-filter.jpg" alt="Screenshot of LaBelle Category Filter demo website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">LaBelle (JavaScript Category Filter)</h2>
						<p>This is a simple, clean category filter page built with HTML, CSS, and vanilla JavaScript. It's based on a Photoshop mockup called LaBelle - Fashion PSD Templates, purchased from Envato/ThemeForest.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/aQsARcmmX4g" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/category-filter" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/category-filter/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-san-mari.jpg" alt="Screenshot of San Mari Products demo website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">San Mari (HTML, Vanilla CSS + JS)</h2>
						<p>This landing page is built with HTML, vanilla CSS and JavaScript. It's a product page with a filter for sorting. It's based on a Photoshop mockup called San Mari - Blog PSD Template, purchased from Envato/ThemeForest.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/0i4eJ6VUqwQ" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/san-mari-products" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/san-mari-products/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-resume-website.jpg" alt="Screenshot of project portfolio website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Printable Resume Website (HTML CSS JS)</h2>
						<p>This resume website is printable, accessible, responsive, and powered by vanilla HTML, CSS and JavaScript. It's part of a Photoshop mockup called Hilltop - PSD Template for Creative Professionals, purchased from Envato/ThemeForest.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/QoT0m1zvROM" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/resume-layout" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/resume-layout/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-hilltop-landing-page.jpg" alt="Screenshot of project portfolio website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Hilltop: Landing Page Website with HTML, Vanilla CSS + JavaScript</h2>
						<p>This is a landing page website built with HTML, vanilla CSS and JavaScript. It's based on a Photoshop mockup called Hilltop - PSD Template for Creative Professionals, purchased from Envato/ThemeForest.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/5lY5vTEuuHE" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/hilltop-landing-page" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/hilltop-landing-page" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-portfolio-website.jpg" alt="Screenshot of project portfolio website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Personal Portfolio Website: PHP, HTML, SCSS & JavaScript</h2>
						<p>Follow along as I build my new website from the ground up using PHP, semantic HTML, SCSS, and vanilla JavaScript. There's plenty of project planning, QA, and real-time problem solving along the way—just like a real dev workflow.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVunuR44h5ey8rmOsldfRQhLO" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/portfolio" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.com" target="_blank">Production Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-ocean-blog-static-website.jpg" alt="Screenshot of The Ocean static website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">The Ocean: Blog website with HTML, SCSS & JavaScript</h2>
						<p>This is a simple, clean blog site built with HTML, SCSS, and vanilla JavaScript. It's based on a Photoshop mockup called Ocean - Personal Blog Template for Travelers and Dreamers, purchased from Envato/ThemeForest.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVumb3GPMVk2JYG687ysA3vN9" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/blog" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://ocean.practicelayouts.com/" target="_blank">Demo Site</a></span>

						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-style-guide.jpg" alt="Screenshot of style guide for project planning">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Style Guide & Project Planning</h2>
						<p>In this project, we dive into the early stages of front-end project planning. Watch as we write user stories to define project goals and build a custom style guide using Affinity Photo. These videos lay the groundwork for strong, focused UI development.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVukAKceS2BLcQa11-zHuXbg4" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/style-guide" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/style-guide/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-frontend-mentor-product-cart-with-list.jpg" alt="Screenshot of Frontend Mentor with Product Cart demo site">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Frontend Mentor: Product List with Cart</h2>
						<p>Join me as I tackle a fun Frontend Mentor challenge where I'll build a product list with an interactive shopping cart from scratch! We'll dive into HTML, CSS, and JavaScript to create a clean, responsive layout, and I'll walk you through adding key features like item quantities, total pricing, and cart updates.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://youtu.be/DSoZbY6c3_8" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/product-list-with-cart" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/product-list-with-cart/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-blog-layout-with-category-filter.jpg" alt="Screenshot of blog layout with a category filter">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Blog Layout with Category Filter | Photoshop to Finish</h2>
						<p>Follow along as I build a responsive blog-style layout from a Photoshop mockup using HTML, SCSS, and JavaScript. In this series, I cover key steps from design setup to clean, accessible code, perfect for anyone looking to sharpen their front-end skills.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVunx37nAsnwD4k8TM_MmUcWN" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/delta-layout" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/delta-layout/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-masonry-layout.jpg" alt="Screenshot of a masonry layout">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Build a Pinterest Masonry Layout</h2>
						<p>In this 2-part live stream series, watch as I walk through the step-by-step process of building a responsive masonry layout using HTML, SCSS, and JavaScript. From setting up the structure to creating a dynamic, Pinterest-style grid, you'll learn how to create a beautiful and functional layout that adapts to different screen sizes.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVumRhxEce2kz82XR-aa9FIGD" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/masonry" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/masonry/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-modal-window-project.jpg" alt="Screenshot of modal window demo site">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Build a Modal Window with HTML, SCSS &amp; JavaScript</h2>
						<p>In this live stream series, we'll break down building a modal window step by step using HTML, SCSS, and JavaScript. From the basic structure to styling and adding interactive features, you'll have everything you need to create your own custom modals.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVumXKmJ96pB18ytpBHQtyAcr" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/modal-window" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/modal-window/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/projects/angelajholden-landing-page-html-css.jpg" alt="Screenshot of a landing page website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Building a Landing Page | HTML, CSS & JavaScript</h2>
						<p>In this project, we're turning a Photoshop mockup into a fully functional landing page called Soho using HTML, vanilla CSS, and JavaScript. Over the course of eight live streams, we dive deep into creating a page that's responsive, accessible, and packed with smooth navigation and submenus (we spent 4 videos perfecting them).</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVumTx-jL21z8rgjdQ-JKQNs7" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/soho-layout" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://angelajholden.github.io/soho-layout/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
			</div>
		</section>
		<div class="dot-bg"></div>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>