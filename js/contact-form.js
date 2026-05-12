export default function initContactForm() {
	const root = document.querySelector(".form");
	if (!root) return;

	const origin = root.querySelector('input[name="origin"]');
	const path = root.querySelector('input[name="path"]');

	origin.value = window.location.origin;
	path.value = window.location.pathname;

	const name = root.querySelector('input[name="name"]');
	const email = root.querySelector('input[name="email"]');
	const inquiryType = root.querySelectorAll('input[name="inquiry_type"]');
	const groups = root.querySelectorAll(".conditional_group");
	const reset = root.querySelector(".reset_button");

	const nameError = root.querySelector("#name-error");
	const emailError = root.querySelector("#email-error");
	const interestError = root.querySelector("#interest-error");

	// conditional groups
	inquiryType.forEach((type) => {
		type.addEventListener("change", (e) => {
			interestError.hidden = true;
			const show = type.dataset.show;

			groups.forEach((group) => {
				group.hidden = true;
				const id = group.getAttribute("id");
				if (id === show) {
					group.hidden = false;
				}
			});
		});
	});

	// on submit light form validation
	root.addEventListener("submit", (e) => {
		if (name.value === null || name.value === "") {
			e.preventDefault();
			nameError.hidden = false;
			return;
		} else {
			nameError.hidden = true;
		}

		if (email.value === null || email.value === "") {
			e.preventDefault();
			emailError.hidden = false;
			return;
		} else {
			emailError.hidden = true;
		}

		const checked = root.querySelector('input[name="inquiry_type"]:checked');
		if (!checked) {
			e.preventDefault();
			interestError.hidden = false;
			return;
		} else {
			interestError.hidden = true;
		}
	});

	// clear inputs when typing
	name.addEventListener("input", () => {
		nameError.hidden = true;
	});

	email.addEventListener("input", () => {
		emailError.hidden = true;
	});

	// remove errors when resetting
	reset.addEventListener("click", () => {
		groups.forEach((group) => {
			group.hidden = true;
		});
		interestError.hidden = true;
		nameError.hidden = true;
		emailError.hidden = true;
	});
}
