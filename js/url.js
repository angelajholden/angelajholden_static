export function initUrl() {
	let url = window.location.origin;
	if (url === "http://localhost") {
		url = `${url}/portfolio`;
	}
}
