
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
function toggleVisibility() {
	var element = document.getElementById("drop-zone");
	if (element.style.display = "block") {
		element.style.display = "none";

	}
	else {
		element.style.display = "block";
	}


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