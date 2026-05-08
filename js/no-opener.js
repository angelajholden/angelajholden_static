export default function initNoOpener() {
	const target = document.querySelectorAll('a[target="_blank"]');
	if (!target.length) return;
	target.forEach((link) => {
		const rel = link.getAttribute("rel") || "";
		if (!rel.includes("noopener")) {
			link.setAttribute("rel", `${rel} noopener`.trim());
		}
	});
}
