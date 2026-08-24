<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Contact Angela J. Holden';
$description = 'Contact Angela J. Holden about frontend consulting, freelance web development, collaborations, questions, or other professional opportunities.';
$noindex = false; // or true, if you want to block this specific page
$canonicalPath = 'contact/';
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="contact animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Contact Me</h1>
					<p>Got a question, idea or opportunity? Send me a message using the form below, I check my inbox regularly and respond as soon as I can. Or reach out on <a href="https://www.instagram.com/angelajholden" target="_blank">Instagram</a>.
					</p>
				</header>
				<form class="form" action="https://formspree.io/f/xyzyqyve" method="POST" target="_blank" novalidate>
					<input type="hidden" name="origin" value="">
					<input type="hidden" name="path" value="">

					<div class="form-inputs">
						<label for="name">Name <span>*</span></label>
						<input id="name" name="name" type="text" autocomplete="name">
						<p class="error_message" id="name-error" hidden>Please enter your name.</p>

						<label for="email">Email <span>*</span></label>
						<input id="email" type="email" name="email" autocomplete="email">
						<p class="error_message" id="email-error" hidden>Please enter your email.</p>

						<label for="phone">Phone</label>
						<input id="phone" name="phone" type="tel" autocomplete="tel">

						<fieldset class="form_fieldset">
							<legend>What are you interested in? <span>*</span></legend>
							<label>
								<input type="radio" name="inquiry_type" value="website" data-show="website-fields">
								Website project
							</label>
							<label>
								<input type="radio" name="inquiry_type" value="consulting" data-show="consulting-fields">
								Consulting session
							</label>
							<label>
								<input type="radio" name="inquiry_type" value="code-review" data-show="code-review-fields">
								Code review
							</label>
						</fieldset>
						<p class="error_message" id="interest-error" hidden>Please select your interest.</p>

						<div class="conditional_group" id="website-fields" hidden>
							<label for="website-type">What kind of website do you need?</label>
							<div class="form_field">
								<select id="website-type" name="website_type">
									<option value="">Choose one</option>
									<option value="landing-page">Landing page</option>
									<option value="portfolio">Portfolio site</option>
									<option value="business-site">Business site</option>
									<option value="existing-site-updates">Updates to an existing site</option>
								</select>
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"/></svg>
							</div>

							<label for="website-timeline">What is your ideal timeline?</label>
							<div class="form_field">
								<select id="website-timeline" name="website_timeline">
									<option value="">Choose one</option>
									<option value="asap">As soon as possible</option>
									<option value="1-month">Within 1 month</option>
									<option value="2-3-months">2-3 months</option>
									<option value="flexible">Flexible</option>
								</select>
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"/></svg>
							</div>
						</div>

						<div class="conditional_group" id="consulting-fields" hidden>
							<label for="consulting-topic">What do you want help with?</label>
							<div class="form_field">
								<select id="consulting-topic" name="consulting_topic">
									<option value="">Choose one</option>
									<option value="html-css">HTML/CSS</option>
									<option value="javascript">JavaScript</option>
									<option value="accessibility">Accessibility</option>
									<option value="career">Frontend career direction</option>
								</select>
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"/></svg>
							</div>

							<label for="session-length">Preferred session length</label>
							<div class="form_field">
								<select id="session-length" name="session_length">
									<option value="">Choose one</option>
									<option value="30">30 minutes</option>
									<option value="60">60 minutes</option>
									<option value="90">90 minutes</option>
								</select>
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"/></svg>
							</div>
						</div>

						<div class="conditional_group" id="code-review-fields" hidden>

							<label for="repo-url">GitHub repo or project URL</label>
							<input type="url" id="repo-url" name="repo_url">

							<label for="review-focus">What should I focus on?</label>
							<div class="form_field">
								<select id="review-focus" name="review_focus">
									<option value="">Choose one</option>
									<option value="html-structure">HTML structure</option>
									<option value="css-layout">CSS/layout</option>
									<option value="javascript">JavaScript</option>
									<option value="accessibility">Accessibility</option>
								</select>
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"/></svg>
							</div>
						</div>

					</div>
					<label for="message">Message</label>
					<textarea id="message" name="message" rows="7"></textarea>

					<div class="button_container">
						<button class="button teal-solid" type="submit">Submit</button>
						<button class="reset_button" type="reset">Reset</button>
					</div>
				</form>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>
