function openCloseMenu() {
	const icon = document.getElementById("menu_icon");
	const menu = document.getElementById("nav");

	icon.addEventListener("click", (e) => {
		const clicked = e.target.classList.contains("clicked");

		if (clicked) {
			icon.classList.remove("clicked");
			menu.classList.remove("active");
		} else {
			icon.classList.add("clicked");
			menu.classList.add("active");
		}
	});
}

function currentItem() {
	const navList = document.getElementById("nav__items");
	const items = navList.getElementsByClassName("nav_item");

	for (let i = 0; i < items.length; i++) {
		const navItem = items[i];
		const navLink = navItem.getElementsByTagName("a");

		for (let x = 0; x < navLink.length; x++) {
			const linkPath = navLink[x].href;
			const docPath = document.location.href;

			if (linkPath === docPath) {
				navItem.classList.add("current");
			}
		}
	}
}

function copyrightYear() {
	const copyright = document.getElementById("date");
	const year = new Date();
	copyright.innerHTML = year.getFullYear();
}

let map;
function initMap() {
	let saintPaul = { lat: 44.9537, lng: -93.09 };
	map = new google.maps.Map(document.getElementById("map"), {
		center: saintPaul,
		zoom: 13,
		gestureHandling: "cooperative",
	});
	let contentString = `
    <div id=info_window>
        <figure>
            <img src=../images/angelajholden-heidi-looking-out-window.jpg alt=Heidi looking out the window./>
        </figure>
        <div class=info_text>
            <h2>Hello World</h2>
            <p>I live in St. Paul, Minnesota<br>with my dog Heidi.</p>
        </div>
    </div>`;
	let infowindow = new google.maps.InfoWindow({
		content: contentString,
	});
	let marker = new google.maps.Marker({
		position: saintPaul,
		map,
		title: "Hello World",
	});
	marker.addListener("click", () => {
		infowindow.open(map, marker);
	});
}

function skillsApi() {
	let request = new XMLHttpRequest();
	request.open("GET", "https://angelajholden.com/wp-json/wp/v2/ajhskill");
	request.onload = () => {
		let response = request.response;
		let parsedData = JSON.parse(response);

		let output = "";
		for (let i = 0; i < parsedData.length; i++) {
			let title = parsedData[i].title.rendered;
			let excerpt = parsedData[i].excerpt.rendered;
			output += `<aside class="skill"><h2>${title}</h2>${excerpt}</aside>`;
		}

		let update = document.getElementById("skills__items");
		if (update) {
			update.innerHTML = output;
		}
	};
	request.send();
}

window.onload = () => {
	openCloseMenu();
	currentItem();
	copyrightYear();
	skillsApi();
};
