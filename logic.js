document.querySelector('.login-but').addEventListener('click',()=>{
	document.getElementsByClassName('newform')[0].classList.toggle('hide');
	document.getElementsByClassName('loginform')[0].classList.toggle('visible');
});
document.querySelector('.new-but').addEventListener('click',()=>{
	document.getElementsByClassName('newform')[0].classList.toggle('hide');
	document.getElementsByClassName('loginform')[0].classList.toggle('visible');
});

var input=document.getElementsByClassName("password");
const checkpassword=()=>{
	console.log(input[0].value==input[1].value && input[1].value.length>3)
	if (input[0].value==input[1].value && input[1].value.length>3) {
		const button = document.getElementsByClassName('signup');
		button[0].disabled = false;
		input[0].style.color='#fff';
		input[1].style.color='#fff';
	}
	else{
		input[0].style.color='red';
		input[1].style.color='red';
	}
}

