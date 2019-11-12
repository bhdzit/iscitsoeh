function navbarChange(item) {
	var prev=document.getElementsByClassName("active");
	const posanterior=prev[0].parentNode.id-1;
	prev[0].classList.remove("active");

	
	item.getElementsByTagName("A")[0].className="nav-link active";

	var card=document.getElementsByClassName("card-body");
	card[posanterior].classList.add("card-hide")
	card[item.id-1].classList.remove("card-hide");

}