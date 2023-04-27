
window.addEventListener("load", function () {
	const loading = document.getElementById("loading");
	loading.style.display = "none";
});

function scrollToBottom() {
	window.scrollTo({
		top: document.body.scrollHeight,
		behavior: 'smooth'
	});
}
function open_left() {
	if (document.getElementById("info-box-left").style.transform == "translateX(90%)") {
		document.getElementById("info-box-left").style.transform = "translateX(0%)";
		document.getElementById("fa-caret-right").style.transform = "rotateY(0deg)";
	} else {
		document.getElementById("info-box-left").style.transform = "translateX(90%)";
		document.getElementById("fa-caret-right").style.transform = "rotateY(-180deg)";
	}
}

function open_right() {
	if (document.getElementById("info-box-right").style.transform == "translateX(-90%)") {

		document.getElementById("info-box-right").style.transform = "translateX(0%)";
		document.getElementById("fa-caret-left").style.transform = "rotateY(0deg)";

	} else {

		document.getElementById("info-box-right").style.transform = "translateX(-90%)";
		document.getElementById("fa-caret-left").style.transform = "rotateY(-180deg)";

	}
}

function close_alert() {
	document.getElementById("alert-success").style.display = "none";
}

function dropList() {
	var droplist = document.getElementById("drop-list");

	if (droplist.style.display == "none") {
		droplist.style.display = "flex";
	}

	else {
		droplist.style.display = "none";

	}
}
function _logout() {
	// var logout_btn = document.getElementById("logout-btn");
	document.logout_btn.submit();

} 