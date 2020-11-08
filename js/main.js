window.onload = function() {

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

	// you are here navigation
	// get the unordered list container
	var navList = document.getElementById('nav__items');
	// get each list item with a class of nav_item
	var items = navList.getElementsByClassName('nav_item');
	// loop through each list item
	for (var i = 0; i < items.length; i++) {
		var navItem = items[i];
		var navLink = navItem.getElementsByTagName('a');
		// then loop through each 'a' tag in the list item
		for (var x = 0; x < navLink.length; x++) {
			var linkPath = navLink[x].href;
			var docPath = document.location.href;
			// if the 'a' tag link matches the current page link, add 'current' class
			if (linkPath === docPath) {
				navItem.classList.add('current');
			}
		}
	}

}

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
