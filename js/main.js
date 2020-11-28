function mainNav() {
  // mobile menu functionality
  let open = document.getElementById("open");
  let close = document.getElementById("close");
  let nav = document.getElementById("nav");
  open.onclick = function addActive() {
    nav.classList.add("active");
  };
  close.onclick = function removeActive() {
    nav.classList.remove("active");
  };
}

function currentItem() {
  // you are here navigation
  let navList = document.getElementById("nav__items");
  let items = navList.getElementsByClassName("nav_item");
  for (let i = 0; i < items.length; i++) {
    let navItem = items[i];
    let navLink = navItem.getElementsByTagName("a");
    for (let x = 0; x < navLink.length; x++) {
      let linkPath = navLink[x].href;
      let docPath = document.location.href;
      if (linkPath === docPath) {
        navItem.classList.add("current");
      }
    }
  }
}

function copyrightYear() {
  let c = document.getElementById("date");
  let d = new Date();
  c.innerHTML = d.getFullYear();
}

let map;
function initMap() {
  //let apiKey = AIzaSyAPF1RV4l66ov2BkOl9OjhFmbdrnIETdhc;
  let saintPaul = { lat: 44.9537, lng: -93.09 };

  map = new google.maps.Map(document.getElementById("map"), {
    center: saintPaul,
    zoom: 13,
    gestureHandling: "cooperative",
  });
}

function skillsApi() {
  // get skills content from wordpress rest api
  let request = new XMLHttpRequest();
  request.open("GET", "https://angelajholden.com/wp-json/wp/v2/ajhskill");
  request.onload = () => {
    let response = request.response;
    let parsedData = JSON.parse(response);
    //console.log(parsedData);

    let output = "";
    for (i = 0; i < parsedData.length; i++) {
      let title = parsedData[i].title.rendered;
      let excerpt = parsedData[i].excerpt.rendered;
      output += `<aside class="skill"><h2>${title}</h2>${excerpt}</aside>`;
    }

    let update = document.getElementById("skills__items");
    if (update) {
      update.innerHTML = output;
      // console.log(output);
    }
  };
  request.send();
}

window.onload = () => {
  mainNav();
  currentItem();
  copyrightYear();
  // googleMap();
  skillsApi();
};
