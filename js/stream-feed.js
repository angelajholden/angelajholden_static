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
		root.innerHTML = "";
		const reverseData = data.toReversed();
		reverseData.forEach((video) => {
			// article, figure, img, div, div, h2, a, p
			const article = document.createElement("article");
			article.classList.add("article-item");
			article.classList.add("video-item");
			article.classList.add("animate__animated");
			if (Math.random() < 1 / 3) {
				article.classList.add("animate__fast");
			}
			article.setAttribute("data-animation", "animate__fadeInUp");

			const figure = document.createElement("figure");
			figure.classList.add("image");

			const img = document.createElement("img");
			img.loading = "lazy";
			img.src = video.thumbnail_url;
			img.alt = createAlt(video.title);

			const articleWrap = document.createElement("div");
			articleWrap.classList.add("article-wrap");

			const articleCategory = document.createElement("div");
			articleCategory.classList.add("article-category");
			articleCategory.textContent = "Live Stream";

			const h2 = document.createElement("h2");
			h2.classList.add("secondary-heading");

			const link = document.createElement("a");
			// link.href = `${url}/${createSlug(video.title)}`;
			link.href = video.url;
			link.target = `_blank`;
			link.textContent = createAlt(video.title);

			const desc = normalizeDescription(video.description.slice(0, 110));
			const p = document.createElement("p");
			p.textContent = `${desc}...`;

			figure.append(img);
			h2.append(link);
			articleWrap.append(articleCategory, h2, p);
			article.append(figure, articleWrap);
			root.append(article);
		});
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
