function menu(){
	var slider = document.getElementById('minhadiv');
	slider.style.height = window.innerHeight - 60 + "px";

	if(slider.style.left == "0px"){
		slider.style.left = "-350px";
	}else{
		slider.style.left = "0px";
	}
}