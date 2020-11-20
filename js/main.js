window.onload = function() {

	function mainNav() {
		// mobile menu functionality
		let open = document.getElementById('open')
		let close = document.getElementById('close');
		let nav = document.getElementById('nav');
		open.onclick = function addActive() {
			nav.classList.add('active');
		};
		close.onclick = function removeActive() {
			nav.classList.remove('active');
		};
	}
	mainNav();

	function currentItem() {
		// you are here navigation
		var navList = document.getElementById('nav__items');
		var items = navList.getElementsByClassName('nav_item');
		for (var i = 0; i < items.length; i++) {
			var navItem = items[i];
			var navLink = navItem.getElementsByTagName('a');
			for (var x = 0; x < navLink.length; x++) {
				var linkPath = navLink[x].href;
				var docPath = document.location.href;
				if (linkPath === docPath) {
					navItem.classList.add('current');
				}
			}
		}
	}
	currentItem();

}

function skillsApi() {
	// get the content from wordpress rest api
	let request = new XMLHttpRequest();
	request.open('GET', 'https://angelajholden.com/wp-json/wp/v2/ajhskill');
	request.onload = function() {
		let response = request.response;
		let parsedData = JSON.parse(response);
		//console.log(parsedData);
		let output = "";
		// for (item in parsedData) {
			let title = parsedData[0].title.rendered;
			let excerpt = parsedData[0].excerpt.rendered;
			output += '<aside class="skill">' + '<h2>' + title + '</h2>' + excerpt + '</aside>';
		// }
		let update = document.getElementById('skills__items');
		if (update) {
			update.innerHTML = output;
			// console.log(output);
		}
	};
	request.send();
}
skillsApi();
