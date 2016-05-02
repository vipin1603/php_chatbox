function valid(){
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var fullname = document.getElementById('fullname').value;
	
	if(username == ''){
		alert('Please Enter your User Name!');
		document.getElementById('username').focus();
		return false;
	}
	if(password == ''){
		alert('Please Enter your User Name!');
		document.getElementById('password').focus();
		return false;
	}
	if(fullname == ''){
		alert('Please Enter your User Name!');
		document.getElementById('fullname').focus();
		return false;
	}
}