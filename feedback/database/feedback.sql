-- Création de la table `users` pour les informations des utilisateurs
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `email` TEXT NOT NULL,
  `phone` TEXT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Création de la table `reviews` pour les feedbacks des utilisateurs
CREATE TABLE `reviews` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `feedback` TEXT NOT NULL,
  `suggestions` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Création de la table `admins` pour les informations des administrateurs
CREATE TABLE `admins` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `email` TEXT NOT NULL,
  `password` TEXT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insérer un administrateur par défaut
INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');


