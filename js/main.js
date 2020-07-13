function registration_validation(){
	var password = document.getElementById("pwd").value
	password = hex_sha1(password);
	console.log(password);
	document.getElementById("pwd").value = password
}

function login_validation(){
	var password = document.getElementById("pwd").value
	password = hex_sha1(password);
	console.log(password);
	document.getElementById("pwd").value = password
}
