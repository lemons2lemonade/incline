function validateData(){
	if(document.getElementById("inputUsername").value.length<5){
		var error = "Note: Username must be at least 5 characters long";
		var errorStr = error.fontcolor("red");
		document.getElementById("usernameDirections").innerHTML=errorStr;
	}

}

function switchInToUp(x){
	var x = document.getElementById('page1');
	var y = document.getElementById("page2");
	x.style.display = 'block';
	y.style.display = 'none';
	
}

function switchUpToIn(x){
	var x = document.getElementById('page1');
	var y = document.getElementById("page2");
	/*y.style.-webkit-transition = 'width 2s';*/
	y.style.display = 'block';
	x.style.display = 'none';
}

function switchButton(){
	var z = document.getElementById("signInSwitchButton");
	var t = document.getElementById("b2");
	z.style.display='';
	t.style.display='';
}