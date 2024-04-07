-- Set the SQL mode and start a transaction
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Roles Table
CREATE TABLE `Roles` (
  `role_id` INT NOT NULL AUTO_INCREMENT,
  `role_name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Users Table
CREATE TABLE `Users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(50) NOT NULL,
  `last_name` VARCHAR(50) NOT NULL,
  `gender` int(11) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `password_hash` VARCHAR(255) NOT NULL,
  `date_of_birth` DATE,
  `role_id` INT NOT NULL,
  PRIMARY KEY (`user_id`),
  FOREIGN KEY (`role_id`) REFERENCES `Roles`(`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Status Table
CREATE TABLE `Status` (
  `status_id` INT NOT NULL AUTO_INCREMENT,
  `status_name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Projects Table
CREATE TABLE `Projects` (
  `project_id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT NOT NULL,
  `category` VARCHAR(50),
  `difficulty_level` VARCHAR(50),
  `overview` TEXT,
  `materials_needed` TEXT,
  `creator_id` INT NOT NULL,
  `status_id` INT,
  PRIMARY KEY (`project_id`),
  FOREIGN KEY (`creator_id`) REFERENCES `Users`(`user_id`),
  FOREIGN KEY (`status_id`) REFERENCES `Status`(`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Comments Table
CREATE TABLE `Comments` (
  `comment_id` INT NOT NULL AUTO_INCREMENT,
  `project_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `comment` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  FOREIGN KEY (`project_id`) REFERENCES `Projects`(`project_id`),
  FOREIGN KEY (`user_id`) REFERENCES `Users`(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Ratings Table
CREATE TABLE `Ratings` (
  `rating_id` INT NOT NULL AUTO_INCREMENT,
  `project_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `rating` INT NOT NULL,
  `comment` TEXT,
  PRIMARY KEY (`rating_id`),
  FOREIGN KEY (`project_id`) REFERENCES `Projects`(`project_id`),
  FOREIGN KEY (`user_id`) REFERENCES `Users`(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Project Images Table
CREATE TABLE `Project_Images` (
  `image_id` INT NOT NULL AUTO_INCREMENT,
  `project_id` INT NOT NULL,
  `image_path` VARCHAR(255) NOT NULL,
  `uploaded_by` INT NOT NULL,
  `upload_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`image_id`),
  FOREIGN KEY (`project_id`) REFERENCES `Projects`(`project_id`),
  FOREIGN KEY (`uploaded_by`) REFERENCES `Users`(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Project Materials Table (for alternative materials suggestions)
CREATE TABLE `Project_Materials` (
  `material_id` INT NOT NULL AUTO_INCREMENT,
  `project_id` INT NOT NULL,
  `material_name` VARCHAR(255) NOT NULL,
  `alternative_suggested_by` INT,
  `approved` BOOLEAN DEFAULT FALSE,
  PRIMARY KEY (`material_id`),
  FOREIGN KEY (`project_id`) REFERENCES `Projects`(`project_id`),
  FOREIGN KEY (`alternative_suggested_by`) REFERENCES `Users`(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Dumping data for table `Role`
--

INSERT INTO `Roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------
-- Commit the transaction to finalize changes
COMMIT;
