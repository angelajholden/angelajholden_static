export default function initYtLoadVideo() {
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
