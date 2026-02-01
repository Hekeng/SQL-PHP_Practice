CREATE DATABASE IF NOT EXISTS inflation_db;
USE inflation_db;

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE, 
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'manager', 'user') DEFAULT 'user', 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- временная метка
) ENGINE=InnoDB;



-- ALTER TABLE users MODIFY username VARCHAR(50) NULL;-- меняем данные в таблице
-- ALTER TABLE users ADD COLUMN last_name VARCHAR(50) NULL AFTER email;-- меняем данные и добавляем фамилию

-- INSERT INTO users (username, email, last_name, password_hash, role) 
-- VALUES ('hexen', 'koydano@gmail.com',, SHA2('1111', 256), 'admin');

DROP TABLE users; -- удалить таблицу

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE, 
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'manager', 'user') DEFAULT 'user', 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- временная метка
) ENGINE=InnoDB;

INSERT INTO users (username, email, password_hash, role)
VALUES ('hexen', 'koydano@gmail.com', SHA2('1111', 256), 'admin');


CREATE TABLE IF NOT EXISTS index_types (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(50) NOT NULL UNIQUE, -- Короткое имя для кода, например 'big_mac_index'
    display_name VARCHAR(100) NOT NULL, -- Красивое имя для сайта, например 'Индекс Биг-Мака'
    description TEXT, -- Описание, что это вообще такое
    source_url VARCHAR(255), -- Ссылка на источник данных
    is_active TINYINT(1) DEFAULT 1 -- Включен этот индекс или временно скрыт
) ENGINE=InnoDB;