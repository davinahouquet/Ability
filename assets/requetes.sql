-- Les catégories de jeu
INSERT INTO categorie (id_categorie, nom_categorie) VALUES ("1", "Assemblage");
INSERT INTO categorie (id_categorie, nom_categorie) VALUES ("2", "Calcul");
INSERT INTO categorie (id_categorie, nom_categorie) VALUES ("3", "Ecriture|Lecture");
INSERT INTO categorie (id_categorie, nom_categorie) VALUES ("4", "Emotions");
INSERT INTO categorie (id_categorie, nom_categorie) VALUES ("5", "Logique");
INSERT INTO categorie (id_categorie, nom_categorie) VALUES ("6", "Mémoire");
INSERT INTO categorie (id_categorie, nom_categorie) VALUES ("7", "Recherche");

-- Les jeux

-- Calcul
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("1", "Addition", "Additionne les valeurs");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("2", "Soustraction", "Soustrait les valeurs");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("3", "Multiplication", "Multiplie les valeurs");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("4", "Division", "Divise les valeurs");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("5", "Calculs", "Additionne, soustrait, multiplie et divise les valeurs");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("6", "Compte l'argent", "Compte le montant total");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("7", "Compte dans l'ordre", "Compte du plus petit au plus grand");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("8", "Compte dans l'ordre décroissant", "Compte du plus grand au plus petit");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("9", "Tangram", "Assemble les pièces dans la forme");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("10", "La Tour", "Empile tous les morceaux sans faire tomber la tour");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("11", "Alphabet", "Appuie sur les lettres dans l'ordre alphabétique");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("12", "Mots Mêlés", "Trouve le mot dans la grille");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("13", "Devine l'émotion", "Clique sur l’émotion corresponsante");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("14", "Analyse la situation", "Appuie sur la première de l’objet");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("15", "D’accord ou pas d’accord?", "Devine si la personne est d’accord ou pas");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("16", "Tic Tac Toe", "Aligne trois même symboles");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("17", "Trouve l’intrus", "Trouve l’élément différent");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("18", "Tangram", "Entre tous les morceaux dans la forme");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("19", "Memory", "Trouves les paires");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("20", "Courses", "Souviens toi des courses");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("21", "N° téléphone", "Mémorise le numéro et restitue le");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("22", "Différences", "Trouve les différences");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("23", "Trouve l’intrus", "Trouve l’élément différent");
INSERT INTO jeu (id_jeu, nom_jeu, consigne) VALUES ("24", "Puzzle", "Assemble les pièces et reconstitue l'image");


-- Categoriser
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("1", "2");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("2", "2");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("3", "2");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("4", "2");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("5", "2");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("6", "2");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("7", "2");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("8", "2");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("9", "1");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("10", "1");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("11", "3");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("12", "3");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("13", "4");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("14", "4");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("15", "4");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("16", "5");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("17", "5");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("18", "5");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("19", "6");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("20", "6");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("21", "6");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("22", "7");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("23", "7");
INSERT INTO categoriser (id_jeu, id_categorie) VALUES ("24", "7");
