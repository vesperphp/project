function toggleMobile(ID){

	var element = document.getElementById(ID);
    
	if(element){
        element.classList.toggle("mobile-hidden");
        element.classList.toggle("mobile-visible");
	}

}


function toggle(ID){

	var element = document.getElementById(ID);
    
	if(element){
        element.classList.toggle("hidden");
        element.classList.toggle("visible");
	}

}
