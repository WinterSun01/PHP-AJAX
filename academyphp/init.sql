-- init.sql: Инициализация базы данных для приложения Photo App.
-- Назначение: Создаёт базу данных, таблицы пользователей и фотографий, если они ещё не существуют.

-- Создание базы данных (если не существует)
CREATE DATABASE IF NOT EXISTS photo_app CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Выбор базы данных
USE photo_app;

-- Создание таблицы пользователей
CREATE TABLE IF NOT EXISTS users 
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Таблица для хранения фотографий пользователей
CREATE TABLE IF NOT EXISTS user_images 
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (username) REFERENCES users(username)
);


-- Создание таблицы фотографий (если используется в приложении)
CREATE TABLE IF NOT EXISTS photos 
(
    id INT AUTO_INCREMENT PRIMARY KEY,                     -- Уникальный идентификатор фото
    user_id INT NOT NULL,                                  -- ID пользователя, загрузившего фото
    filename VARCHAR(255) NOT NULL,                        -- Имя файла изображения
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,       -- Дата загрузки
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

