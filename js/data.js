export async function fetchData() {
	let url = window.location.origin;
	if (url === "http://localhost") {
		url = `${url}/portfolio`;
	}

	try {
		const response = await fetch(`${url}/data/youtube-livestreams.json`);
		if (!response.ok) {
			throw new Error(`HTTP error! status: ${response.status}`);
		}
		const data = await response.json();
		return data;
	} catch (error) {
		console.error("There was a problem: ", error);
	}
}
