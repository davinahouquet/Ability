-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour ability
CREATE DATABASE IF NOT EXISTS `ability` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ability`;

-- Listage de la structure de table ability. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) NOT NULL,
  `image_categorie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table ability.categorie : ~7 rows (environ)
INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `image_categorie`) VALUES
	(1, 'Assemblage', NULL),
	(2, 'Calcul', 'calcul.png'),
	(3, 'Ecriture|Lecture', NULL),
	(4, 'Emotions', NULL),
	(5, 'Logique', 'logique.png'),
	(6, 'Mémoire', NULL),
	(7, 'Recherche', 'recherche.png');

-- Listage de la structure de table ability. categoriser
CREATE TABLE IF NOT EXISTS `categoriser` (
  `id_jeu` int NOT NULL,
  `id_categorie` int NOT NULL,
  PRIMARY KEY (`id_jeu`,`id_categorie`),
  KEY `FK_categoriser_categorie` (`id_categorie`),
  CONSTRAINT `FK_categoriser_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  CONSTRAINT `FK_categoriser_jeu` FOREIGN KEY (`id_jeu`) REFERENCES `jeu` (`id_jeu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table ability.categoriser : ~24 rows (environ)
INSERT INTO `categoriser` (`id_jeu`, `id_categorie`) VALUES
	(9, 1),
	(10, 1),
	(1, 2),
	(2, 2),
	(3, 2),
	(4, 2),
	(5, 2),
	(6, 2),
	(7, 2),
	(8, 2),
	(11, 3),
	(12, 3),
	(25, 3),
	(13, 4),
	(14, 4),
	(15, 4),
	(16, 5),
	(17, 5),
	(19, 6),
	(20, 6),
	(21, 6),
	(22, 7),
	(23, 7),
	(24, 7);

-- Listage de la structure de table ability. jeu
CREATE TABLE IF NOT EXISTS `jeu` (
  `id_jeu` int NOT NULL AUTO_INCREMENT,
  `nom_jeu` varchar(50) NOT NULL,
  `consigne` text NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jeu`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table ability.jeu : ~24 rows (environ)
INSERT INTO `jeu` (`id_jeu`, `nom_jeu`, `consigne`, `image`, `code`) VALUES
	(1, 'Addition', 'Additionne les valeurs', 'addition.png', NULL),
	(2, 'Soustraction', 'Soustrait les valeurs', 'soustraction.png', NULL),
	(3, 'Multiplication', 'Multiplie les valeurs', 'multiplication.png', NULL),
	(4, 'Division', 'Divise les valeurs', 'division.png', NULL),
	(5, 'Calculs', 'Additionne, soustrait, multiplie et divise les valeurs', '(NULL)', NULL),
	(6, 'Compte l\'argent', 'Compte le montant total', 'comptelargent.png', NULL),
	(7, 'Compte dans l\'ordre', 'Compte du plus petit au plus grand', 'comptedanslordre.png', NULL),
	(8, 'Compte dans l\'ordre décroissant', 'Compte du plus grand au plus petit', 'comptdanslordredecroissant.png', NULL),
	(9, 'Tangram', 'Assemble les pièces dans la forme', 'tangram.png', NULL),
	(10, 'La Tour', 'Empile tous les morceaux sans faire tomber la tour', 'latour.png', NULL),
	(11, 'Alphabet', 'Appuie sur les lettres dans l\'ordre alphabétique', 'alphabet.png', NULL),
	(12, 'Mots Mêlés', 'Trouve le mot dans la grille', 'motsmeles.png', NULL),
	(13, 'Devine l\'émotion', 'Clique sur l’émotion corresponsante', 'devinelemotion.png', NULL),
	(14, 'Analyse la situation', 'Appuie sur la première de l’objet', 'analyselasituation.png', NULL),
	(15, 'D’accord ou pas d’accord?', 'Devine si la personne est d’accord ou pas', 'daccordoupasdaccord.png', NULL),
	(16, 'Tic Tac Toe', 'Aligne trois même symboles', 'tictactoe.png', NULL),
	(17, 'Trouve l’intrus', 'Trouve l’élément différent', 'trouvelintrus.png', NULL),
	(19, 'Memory', 'Trouves les paires', 'memory.png', NULL),
	(20, 'Courses', 'Souviens toi des courses', 'courses.png', NULL),
	(21, 'N° téléphone', 'Mémorise le numéro et restitue le', 'ntelephone.png', NULL),
	(22, 'Différences', 'Trouve les différences', 'differences.png', NULL),
	(23, 'Trouve l’intrus', 'Trouve l’élément différent', 'trouvelintrus.png', NULL),
	(24, 'Puzzle', 'Assemble les pièces et reconstitue l\'image', 'puzzle.png', NULL),
	(25, 'Test', 'Test', 'test.png', 'Test');

-- Listage de la structure de table ability. niveau
CREATE TABLE IF NOT EXISTS `niveau` (
  `id_niveau` int NOT NULL,
  `numero_niveau` int NOT NULL,
  `solution` varchar(255) NOT NULL,
  `id_jeu` int NOT NULL,
  PRIMARY KEY (`id_niveau`),
  KEY `id_jeu` (`id_jeu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table ability.niveau : ~0 rows (environ)

-- Listage de la structure de table ability. progresser
CREATE TABLE IF NOT EXISTS `progresser` (
  `id_niveau` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `temps` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id_niveau`,`id_utilisateur`) USING BTREE,
  KEY `FK_progresser_utilisateur` (`id_utilisateur`),
  CONSTRAINT `FK_progresser_niveau` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`),
  CONSTRAINT `FK_progresser_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table ability.progresser : ~0 rows (environ)

-- Listage de la structure de table ability. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `couleur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table ability.utilisateur : ~20 rows (environ)
INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo`, `couleur`, `email`, `password`, `role`) VALUES
	(1, 'Groupe Vert', 'Vert', 'groupevert@gmail.com', 'hello', 'admin'),
	(2, 'groupe jaune', NULL, 'groupejaune@outlook.fr', 'groupejaune', 'admin'),
	(3, 'glycines', 'rgb(10,10,10)', 'glycines@hotmail.fr', 'hello', 'admin'),
	(4, 'Groupe Test 1', '#fbff00', 'groupetest@hotmail.com', '$2y$10$R7aY7a6i0CbldSRXxvzo6uZy286JNhBI.xLDd0eNpJZO1nmFybQAm', 'admin'),
	(5, 'Groupe Orange', '#ff941a', 'groupeorange@hotmail.fr', '$2y$10$B/4OKjlMKvLOCj4jrHO1q.9z8PqwLcjWP50VxbrvrzXrlfVejGDce', 'admin'),
	(6, 'Taupes', '#9a5e18', 'lestaupes@hotmail.fr', '$2y$10$zYxTS/X7mgFdn9n4ZXVI4uykz3gkPtCtN7UxKNo8qfuUXRM2dpWvO', 'admin'),
	(7, 'Papillons', '#d82ae5', 'papillons@hotmail.fr', '$2y$10$4Wcmo2/Z.ylShi35GYe06.vOd14cHoO53xRXft0J6jlYAcg2J1tnK', 'admin'),
	(8, 'Jardin', '#1dcd7b', 'jardin@hotmail.fr', '$2y$10$RW1Kc1CAwPSxTBQuGn2RdeQVpp1YQObg9jrVJeNOPBghRu6eNhT.S', 'admin'),
	(9, 'Abbaye', '#2cff29', 'abbaye@hotmail.fr', '$2y$10$VkZb9YXYgABeNTDbINBSbuF7cRlOziD..jxww/YGOVTNGz.bS1S.K', 'admin'),
	(10, 'superadmin', NULL, 'superadmin@ability.fr', 'superadmin123', 'superadmin'),
	(11, 'Groupe Jasemin', '#8e499c', 'groupejasmin@gmail.fr', '$2y$10$I8Ov/cw24u0o7G570KeLzeMD3MqXgixyCCCGMiBjtB0gvHyuMblxK', 'admin'),
	(12, 'Utilisateur Test', '#84522d', 'jardin@hotmail.fr', NULL, 'utilisateur'),
	(13, 'Utilisateur Test 1', '#84524d', 'jardin@hotmail.fr', NULL, 'utilisateur'),
	(14, 'Utilisateur Test 2', '#ffff', 'jardin@hotmail.fr', NULL, 'utilisateur'),
	(15, 'Nathalie', '#ee45ef', 'jardin@hotmail.fr', NULL, 'utilisateur'),
	(16, 'Simon', '#5D13BD', 'jardin@hotmail.fr', NULL, 'utilisateur'),
	(18, 'HPI', '#ff0000', 'hpi.strasbourg@outlook.fr', '$2y$10$kX957GlrRSFUw2968xDiG.nKB9qGU7VBajQknIMxhrJOx7I0Kd/ai', 'admin'),
	(19, 'Casa', '#1d6836', 'casa@gmail.com', '$2y$10$VWbp4apvRsV3OvsBCJwC0uK5llkuELJpyhrXa5SPfIYEn5k3kAp2O', 'admin'),
	(20, 'Utilisateur1', '1d6836', 'casa@gmail.com', NULL, 'utilisateur'),
	(21, 'jardin1@hotmail.fr', '#892a85', 'jardin1@hotmail.fr', '$2y$10$aWykxZdDHUbEDKaBYvqnPugv5YlbQke9MCF9WqGlbMRdgycGv.BIC', 'admin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
