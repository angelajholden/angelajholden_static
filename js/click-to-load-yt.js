export default function initYtLoadVideo() {
	const videos = document.querySelectorAll(".yt_video");
	if (videos.length === 0) return;

	videos.forEach((video) => {
		const wrap = video.querySelector(".yt_video-wrap");
		const id = video.dataset.videoId;
		const play = video.querySelector(".play_button");
		const thumb = video.querySelector(".yt_thumb");
		const figCap = video.querySelector("figcaption");
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
	});
}
