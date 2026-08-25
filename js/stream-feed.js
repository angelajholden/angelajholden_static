import initAnimateOnScroll from "./animate-on-scroll.js";
import initYtLoadVideo from "./click-to-load-yt.js";

export function initStreamFeed(data) {
	// console.log(data);
	const root = document.querySelector(".video-wrap");
	if (!root) return;

	let url = window.location.origin;
	if (url === "http://localhost") {
		url = `${url}/portfolio`;
	}

	function createSlug(title) {
		return title
			.normalize("NFKD") // normalize accented characters
			.replace(/^LIVE\b[\s|:–—-]*/i, "") // remove leading "LIVE |"
			.replace(/\bw\/\b/gi, "with") // w/ -> with
			.replace(/&/g, " and ") // & -> and
			.replace(/['’]/g, "") // remove apostrophes
			.replace(/[^a-zA-Z0-9\s-]/g, " ") // remove emoji/punctuation/pipes/etc.
			.trim()
			.toLowerCase()
			.replace(/\s+/g, "-") // spaces -> dashes
			.replace(/-+/g, "-"); // collapse repeated dashes
	}

	function createAlt(title) {
		return title
			.normalize("NFKD")
			.replace(/^LIVE\b[\s|:–—-]*/i, "") // remove leading LIVE + separator if present
			.replace(/\bw\/\b/gi, "with")
			.replace(/&/g, "and")
			.replace(/[|]/g, " ")
			.replace(/[^\p{L}\p{N}\s.,!?'-]/gu, "")
			.replace(/\s+/g, " ")
			.trim();
	}

	function normalizeDescription(description) {
		return description
			.normalize("NFKD")
			.replace(/\p{Extended_Pictographic}/gu, "")
			.replace(/\uFE0F/gu, "")
			.replace(/\s+/g, " ")
			.trim();
	}

	function renderVideos(data) {
		let message;
		if (data.length === 0) {
			message = "There are no videos";
		} else if (data.length === 1) {
			message = "There is 1 video";
		} else {
			message = `There are ${data.length} videos`;
		}

		const videoStatus = document.querySelector(".video-status");
		videoStatus.textContent = message;

		root.innerHTML = "";
		const reverseData = data.toReversed();
		reverseData.forEach((video) => {
			const article = document.createElement("article");
			article.classList.add("article-item");
			article.classList.add("video-item");
			article.classList.add("animate__animated");
			if (Math.random() < 1 / 3) {
				article.classList.add("animate__fast");
			}
			article.setAttribute("data-animation", "animate__fadeInUp");

			const figure = document.createElement("figure");
			figure.classList.add("image", "yt_video");
			figure.dataset.videoId = video.video_id;

			const videoWrap = document.createElement("div");
			videoWrap.classList.add("yt_video-wrap");

			const playButton = document.createElement("button");
			playButton.type = "button";
			playButton.classList.add("play_button");
			playButton.setAttribute("aria-label", `Play ${createAlt(video.title)}`);

			const playSvg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
			playSvg.setAttribute("aria-hidden", "true");
			playSvg.setAttribute("viewBox", "0 0 512 512");

			const playPath = document.createElementNS("http://www.w3.org/2000/svg", "path");
			playPath.setAttribute(
				"d",
				"M133 440a35.37 35.37 0 01-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37 7.46-27.53 19.46-34.33a35.13 35.13 0 0135.77.45l247.85 148.36a36 36 0 010 61l-247.89 148.4A35.5 35.5 0 01133 440z",
			);

			const img = document.createElement("img");
			img.classList.add("yt_thumb");
			img.loading = "lazy";
			img.src = video.thumbnail_url;
			img.alt = createAlt(video.title);

			const figcaption = document.createElement("figcaption");
			figcaption.classList.add("access-hidden");
			figcaption.textContent = createAlt(video.title);

			const articleWrap = document.createElement("div");
			articleWrap.classList.add("article-wrap");

			let dateStyle = new Date(video.actual_start_time);
			dateStyle = dateStyle.toLocaleString("en-US", {
				dateStyle: "medium",
			});

			const videoDate = document.createElement("time");
			videoDate.classList.add("article-date");
			videoDate.dateTime = video.actual_start_time.slice(0, 10);
			videoDate.textContent = dateStyle;

			const h2 = document.createElement("h2");
			h2.classList.add("secondary-heading");

			const ns = "http://www.w3.org/2000/svg";
			const svg = document.createElementNS(ns, "svg");
			svg.setAttribute("aria-hidden", "true");
			svg.setAttribute("viewBox", "0 0 512 512");

			const path = document.createElementNS(ns, "path");
			path.setAttribute(
				"d",
				"M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48M336 64h112v112M224 288L440 72",
			);
			path.setAttribute("fill", "none");
			path.setAttribute("stroke", "currentColor");
			path.setAttribute("stroke-linecap", "round");
			path.setAttribute("stroke-linejoin", "round");
			path.setAttribute("stroke-width", "32");

			const link = document.createElement("a");
			// link.href = `${url}/${createSlug(video.title)}`;
			link.href = video.url;
			link.target = `_blank`;
			link.textContent = createAlt(video.title);

			const desc = normalizeDescription(video.description.slice(0, 125));
			const p = document.createElement("p");
			p.textContent = `${desc}...`;

			playSvg.append(playPath);
			playButton.append(playSvg);
			videoWrap.append(playButton, img);
			figure.append(videoWrap, figcaption);
			svg.append(path);
			link.append(svg);
			h2.append(link);
			articleWrap.append(videoDate, h2, p);
			article.append(figure, articleWrap);
			root.append(article);
		});
		initYtLoadVideo(root);
		initAnimateOnScroll(root);
	}
	renderVideos(data);

	const form = document.querySelector(".filter_form");
	const input = document.querySelector(".video_filter");

	let timer;
	input.addEventListener("input", (e) => {
		clearTimeout(timer);
		timer = setTimeout(() => {
			const search = e.target.value.toLowerCase().trim();
			console.log(search);
			const matchVideos = data.filter((video) => {
				const match = video.title.toLowerCase().includes(search);
				return match;
			});
			renderVideos(matchVideos);
		}, 500);
	});

	form.addEventListener("keydown", (e) => {
		if (e.key === "Enter") {
			e.preventDefault();
		}
	});
}
