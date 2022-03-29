// Validation du formulaire
document.getElementById("ValidationDuFormulaire").addEventListener("submit", function(e){
    // e.preventDefault();
    
    var erreur;
    var nomMenu = document.getElementById("nom_menu");
    var description = document.getElementById("description");
    var PU = document.getElementById("PU");
    
    
    // if(nomMenu == "") ou !nomMenu.value
        if (!PU.value) {
            erreur = "Veuillez renseigner un prix";
        }
        if (!description.value) {
            erreur = "Veuillez renseigner une description";
        }
        if (!nomMenu.value) {
            erreur = "Veuillez renseigner un nom de menu";
        }
        
    
        if (erreur) {
            e.preventDefault();
            alert(erreur);
            return false;
        }
    
        var validation = confirm("Êtes-vous sûr de vouloir ajouter cet élément ?");
        if(validation == true){
            alert("Vous avez décidé d'ajouter 😀");
        }else{
            e.preventDefault();
            alert("Vous avez décidé d'annuler 😡");
            document.getElementById('nom_menu').value="";
            document.getElementById('description').value="";
            document.getElementById('PU').value="";
            return false;
        }
    });