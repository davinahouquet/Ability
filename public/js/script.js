function ajouterUtilisateur() {
    // Récupérer tous les champs d'entrée de nom d'utilisateur et d'âge
    var champsNom = document.getElementsByClassName('nom');
    var champsAge = document.getElementsByClassName('age');

    // Vérifier que tous les champs ne sont pas vides
    for (var i = 0; i < champsNom.length; i++) {
        var nom = champsNom[i].value;
        var age = champsAge[i].value;

        if (nom.trim() === "" || age.trim() === "") {
            alert("Veuillez remplir tous les champs d'entrée.");
            return;
        }

        // Créer un nouvel élément de liste (li) avec les valeurs entrées
        var nouvelUtilisateur = document.createElement('li');
        nouvelUtilisateur.textContent = nom + ", âge : " + age;

        // Ajouter le nouvel utilisateur à la liste existante
        var listeUtilisateurs = document.getElementById('listeUtilisateurs');
        listeUtilisateurs.appendChild(nouvelUtilisateur);

        // Effacer les valeurs des champs après l'ajout
        champsNom[i].value = "";
        champsAge[i].value = "";
    }
}