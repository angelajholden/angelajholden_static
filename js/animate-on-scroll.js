const observerOptions = {
	root: null,
	rootMargin: "0px",
	threshold: 0.25,
};

function animateOnScroll(entries, observer) {
	entries.forEach((entry) => {
		if (!entry.isIntersecting) return;

		const target = entry.target;
		const animation = target.getAttribute("data-animation");

		if (animation) {
			target.classList.add(animation);
		}

		observer.unobserve(target);
	});
}

const observer = new IntersectionObserver(animateOnScroll, observerOptions);

export default function initAnimateOnScroll(root = document) {
	const elements = root.querySelectorAll(".animate__animated");

	elements.forEach((el) => {
		observer.observe(el);
	});
}
