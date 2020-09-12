let menuBar = document.querySelector(".hamburger");
let header = document.querySelector(".header");
let navbar = document.querySelector(".navbar");
let navbarLinks = document.querySelectorAll(".navbar a");
let show = false;
menuBar.addEventListener("click", function () {
	// display header and website links
	header.classList.toggle("show");
	if (show === false) {
		navbar.style.visibility = "visible";
		let arrayLength = navbarLinks;
		show = true;
	} else if (show === true) {
		navbar.style.visibility = "hidden";
		let arrayLength = navbarLinks;

		show = false;
	}
});
