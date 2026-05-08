export default function initMainNav() {
	const body = document.body;
	const href = window.location.href;

	const navItems = document.querySelectorAll(".nav_item");
	if (navItems.length) {
		navItems.forEach((link) => {
			if (link.href === href) {
				link.classList.add("active");
			}
		});
	}

	const mobileButton = document.querySelector(".mobile-button");
	if (mobileButton) {
		mobileButton.addEventListener("click", () => {
			const isOpen = body.classList.toggle("menu_active");
			mobileButton.setAttribute("aria-expanded", isOpen ? "true" : "false");
			mobileButton.setAttribute("aria-label", isOpen ? "Close Menu" : "Open Menu");
		});
	}

	document.addEventListener("keydown", (e) => {
		if (e.key !== "Escape") return;
		if (body.classList.contains("menu_active")) {
			body.classList.remove("menu_active");
			mobileButton.setAttribute("aria-expanded", "false");
			mobileButton.setAttribute("aria-label", "Open Menu");
		}
	});
}
