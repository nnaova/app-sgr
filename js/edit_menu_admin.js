function validation(){
    const confirmation = confirm("Voulez-vous continuez la modification ?");
	// document.querySelector(".table_modif");

    if(confirmation == true){
		alert("Vous allez être redirigé vers la page de modification 😀");
        window.open(table_modif);

	}
	else{
		alert("Vous avez décidez de ne pas modifier les élément du menu😡");
        // window.open("https://www.google.fr");
	}
}