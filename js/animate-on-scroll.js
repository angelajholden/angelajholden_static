export default function initAnimateOnScroll() {
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
