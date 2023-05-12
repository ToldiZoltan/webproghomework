window.onload = function() {
	var send = document.getElementById("contactus");
	if (send)
	send.disabled = false;
};
function check() {
	var correct = true;
	var focus = null;

	var textarea = document.getElementById("textarea");
	if (textarea) {
		if (textarea.value.length==0) {
			correct = false;
			textarea.style.background = '#f99';
			focus = textarea;
		} else
			textarea.style.background = '#9f9';
	}

	var email = document.getElementById("emailad");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //online segítség: https://regex101.com/
		if (!checkPattern.test(email.value)) {
			correct = false;
			email.style.background = '#f99';
			focus = email;
		} else
			email.style.background = '#9f9';
	}

	if (focus)
		focus.focus();

	//var send = document.getElementById("contactus");
	//if (send)
	//send.disabled = !correct
	return correct;
}