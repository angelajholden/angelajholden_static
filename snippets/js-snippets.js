function videoBanner() {
	const supportsVideo = !!document.createElement("video").canPlayType;
	if (supportsVideo) {
		const video = document.getElementById("video");
		const playPause = document.getElementById("play-pause");
		const play = document.querySelector(".play-button");
		const pause = document.querySelector(".pause-button");

		if (video) {
			// Hide the default controls
			video.controls = false;

			// Set the initial button state for autoplay
			play.classList.remove("active");
			pause.classList.add("active");

			playPause.addEventListener("click", (e) => {
				if (video.paused || video.ended) {
					video.play();
					// add paused button svg
					play.classList.remove("active");
					pause.classList.add("active");
				} else {
					video.pause();
					// add the play button svg
					play.classList.add("active");
					pause.classList.remove("active");
				}
			});
		}
	}
}

function articleFilter() {
	const buttons = document.querySelectorAll(".article-buttons button");
	const articles = document.querySelectorAll(".article-item");

	buttons.forEach((button) => {
		button.addEventListener("click", () => {
			const category = button.getAttribute("data-category");

			// Update active button
			buttons.forEach((btn) => btn.classList.remove("active"));
			button.classList.add("active");

			// Filter articles
			articles.forEach((article) => {
				const articleCategory = article.getAttribute("data-category");

				if (category === "all" || category === articleCategory) {
					article.style.display = "";
				} else {
					article.style.display = "none";
				}
			});
		});
	});
}
