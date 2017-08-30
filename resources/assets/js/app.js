import "./bootstrap";

// new Vue({
//     el: "#app"
// });


let message = document.querySelector('.flash-message');

if (message) {
	setTimeout(function() {
		message.style.display = 'none';
	}, 5000);
}
