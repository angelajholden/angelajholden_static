const body = document.body;
const href = window.location.href;
const mobileButton = document.querySelector(".mobile-button");

function youAreHere() {
	const navItems = document.querySelectorAll(".nav_item");
	if (!navItems.length) return;
	navItems.forEach((link) => {
		if (link.href === href) {
			link.classList.add("active");
		}
	});
}

function toggleMenu() {
	if (!mobileButton) return;
	mobileButton.addEventListener("click", () => {
		const isOpen = body.classList.toggle("menu_active");
		mobileButton.setAttribute("aria-expanded", isOpen ? "true" : "false");
		mobileButton.setAttribute("aria-label", isOpen ? "Close Menu" : "Open Menu");
	});
}

function escapeKey() {
	document.addEventListener("keydown", (e) => {
		if (e.key !== "Escape") return;
		if (body.classList.contains("menu_active")) {
			body.classList.remove("menu_active");
			mobileButton.setAttribute("aria-expanded", "false");
			mobileButton.setAttribute("aria-label", "Open Menu");
		}
	});
}

function noOpener() {
	const target = document.querySelectorAll('a[target="_blank"]');
	if (!target.length) return;
	target.forEach((link) => {
		const rel = link.getAttribute("rel") || "";
		if (!rel.includes("noopener")) {
			link.setAttribute("rel", `${rel} noopener`.trim());
		}
	});
}

function animateOnScroll() {
	const observerOptions = {
		root: null, // Use the viewport as the container
		rootMargin: "0px",
		threshold: 0.25, // Trigger when 25% of the element is visible
	};
	const animateOnScroll = (entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				const target = entry.target;
				const animation = target.getAttribute("data-animation");
				if (animation) {
					target.classList.add(animation);
				}
				// Optional: Remove the observer after the animation is triggered
				observer.unobserve(target);
			}
		});
	};
	const observer = new IntersectionObserver(animateOnScroll, observerOptions);
	// Attach observer to each element
	const elements = document.querySelectorAll(".animate__animated");
	elements.forEach((el) => observer.observe(el));
}

function ytLoadVideo() {
	const root = document.querySelector(".yt_video");
	if (!root) return;

	const wrap = root.querySelector(".yt_video-wrap");
	const id = root.dataset.videoId;
	const play = root.querySelector(".play_button");
	const thumb = root.querySelector(".yt_thumb");
	const figCap = root.querySelector("figcaption");
	const figCapText = figCap.textContent;

	play.addEventListener("click", () => {
		const iframe = document.createElement("iframe");
		iframe.classList.add("yt_video-iframe");
		iframe.src = `https://www.youtube.com/embed/${id}?autoplay=1`;
		iframe.title = figCapText;
		iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share";
		iframe.referrerPolicy = "strict-origin-when-cross-origin";
		iframe.allowFullscreen = true;

		play.remove();
		thumb.classList.add("yt_fade");
		wrap.append(iframe);

		setTimeout(() => {
			thumb.remove();
		}, 1250);
	});
}

function copyright() {
	const date = document.getElementById("date");
	const year = new Date().getFullYear();
	if (!date) return;
	date.textContent = year;
}

document.addEventListener("DOMContentLoaded", () => {
	youAreHere();
	toggleMenu();
	escapeKey();
	noOpener();
	animateOnScroll();
	ytLoadVideo();
	copyright();
});
