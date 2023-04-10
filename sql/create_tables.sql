Terminal close -- exit!
 TABLE contacts(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `number` INT NOT NULL,
    `email` TEXT,
    PRIMARY KEY (`id`)
)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;