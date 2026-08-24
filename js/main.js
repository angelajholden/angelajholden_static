import initMainNav from "./navigation.js";
import initNoOpener from "./no-opener.js";
import initAnimateOnScroll from "./animate-on-scroll.js";
import initYtLoadVideo from "./click-to-load-yt.js";
import initCopyright from "./copyright.js";
import initContactForm from "./contact-form.js";

import { fetchData } from "./data.js";
import { initStreamFeed } from "./stream-feed.js";

initMainNav();
initNoOpener();
initYtLoadVideo();
initCopyright();
initContactForm();

async function init() {
	const data = await fetchData();
	if (data) {
		initStreamFeed(data);
	}
	initAnimateOnScroll();
}
init();
