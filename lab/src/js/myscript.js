function loadData(data){
if (data=="btn1"){
	document.getElementById("Para").innerHTML ="The iPhone is a line of smartphones produced by Apple Inc. which uses Apple's own iOS mobile operating system. The first-generation iPhone was announced by then-Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has annually released new iPhone models and iOS updates. As of November 1, 2018, more than 2.2 billion iPhones had been sold. As of 2022, the iPhone accounts for 15.6% of global smartphone market share.[3]":
	document.getElementById("image1").src="E:\Y1 S2\SLIIT 2nd Sem\IWT\New folder\New folder\src\images\iphone.jpeg":
}

else if(data =="btn2"){
	document.getElementById("Para").innerHTML ="aaa";


}
}

function checkPassword(){
	if(document.getElimentById("pwd").value != document.getElementById("repwd").value){
	alert("Password Mismatch!");
	return false;
	}
	else{
	alert("success!");
	return true;
	}
}

function enableButton(){
if(document.getElimentById("checkbox").checked{
	document.getElimentById("submitbtn").disabled=false;
}
else{
document.getElimentById("submitbtn").disabled=true;
}
}