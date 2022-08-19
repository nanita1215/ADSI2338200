-- To access local Data Base (Mysql) in a web browser;
-- Acceder a una base de datos por navegador;
-- http://localhost/phpmyadmin

-- To acces local Data Base (Mysql) in command line ():
-- cd/ Aplication/XAMP/bin
-- ./mysql --version
-- ./mysqlq -u root -p

-- To access local Data Base (MySQL) in command line
-- Open Control Panel XAMPP / Click on "Shell"

-- Show version MySQL:
SELECT version();

-- Show All Data Bases:
SHOW databases;

-- Create a Data Base
CREATE DATABASE adsi2338200;

-- Borrar a Data Base
DROP DATABASE adsi2338200;

-- Connect a Data Base
CONNECT adsi2338200;

-- Use a Data Base
USE adsi2338200;

-- Show All tables
SHOW tables;

-- Create Table
 CREATE TABLE gyms (
    -> id INT AUTO_INCREMENT,
    -> name VARCHAR(32) NOT NULL UNIQUE,
    -> PRIMARY KEY(id)
    );

-- Create Table
CREATE TABLE trainers (
    -> id INT AUTO_INCREMENT,
    -> name VARCHAR(32) NOT NULL,
    -> level INT NOT NULL DEFAULT 1,
    -> gym_id INT NOT NULL,
    -> FOREIGN KEY(gym_id) REFERENCES gyms(id),
    -> PRIMARY KEY(id)
    ->     );

    -- Create Table
CREATE TABLE pokemons (
    -> id INT AUTO_INCREMENT,
    -> name VARCHAR(32) NOT NULL,
    -> level INT NOT NULL DEFAULT 1,
    -> gym_id INT NOT NULL,
    -> FOREIGN KEY(gym_id) REFERENCES gyms(id),
    -> PRIMARY KEY(id)
    ->     );

-- Describe table
DESCRIBE pokemons;

-- Another way (Create table missing a field)


-- Add column 
ALTER TABLE pokemons
ADD COLUMN traider_id INT NOT NULL
AFTER accuracy;

-- Delete column 
ALTER TABLE pokemons
DROP COLUMN trainer_id;

-- Describe Tabla
DESCRIBE pokemons;

-- Delete a Table
DROP TABLE pokemons;

-- Delete all data storaged in a Table
TRUNCATE TABLE pokemons;

-- Another way 
DELETE * FROM pokemons;

-- Fill Data (Tables)
INSERT INTO gyms VALUES (     DEFAULT, 'palette');
INSERT INTO trainers VALUES (DEFAULT, 'Ash Ketchum', DEFAULT, 1 );

INSERT INTO pokemons VALUES ( DEFAULT, 'pikachu', 'Electrico', 90, 80, 96, 79);
INSERT INTO pokemons VALUES ( DEFAULT, 'charmander', 'Fuego', 95, 78, 80, 82);
INSERT INTO pokemons VALUES ( DEFAULT, 'bulbasaour', 'Planta', 80, 88, 70, 75);
INSERT INTO pokemons VALUES ( DEFAULT, 'squirtle', 'Agua', 70, 90, 75, 90);
INSERT INTO pokemons VALUES ( DEFAULT, 'Snorlax', 'Normal', 180, 320, 50, 180);
INSERT INTO pokemons VALUES ( DEFAULT, 'Vaporeon', 'Agua', 186, 260, 90, 168);
INSERT INTO pokemons VALUES ( DEFAULT, 'Lapras', 'Agua', 111, 255, 100, 168);
INSERT INTO pokemons VALUES ( DEFAULT, 'Blastoise', 'Agua', 720, 158, 70, 222);
INSERT INTO pokemons VALUES ( DEFAULT, 'Golem', 'Agua', 500, 160, 80, 198);
INSERT INTO pokemons VALUES ( DEFAULT, 'Dragonite', 'Dragon', 900, 250, 120, 182);
INSERT INTO pokemons VALUES ( DEFAULT, 'Exeggutor', 'Planta', 596, 190, 90, 232);
INSERT INTO pokemons VALUES ( DEFAULT, 'Omaster', 'Roca', 1500, 140, 112, 202);
INSERT INTO pokemons VALUES ( DEFAULT, 'Muk', 'Veneno', 1070, 210, 112, 180);
INSERT INTO pokemons VALUES ( DEFAULT, 'Onix', 'Roca', 662, 70, 80, 90);
INSERT INTO pokemons VALUES ( DEFAULT, 'Poliwag', 'Agua', 815, 80, 70, 108);
INSERT INTO pokemons VALUES ( DEFAULT, 'Mankey', 'Agua', 563, 80, 70, 122);
INSERT INTO pokemons VALUES ( DEFAULT, 'Magnemite', 'Electrico', 750, 50, 40, 128);
INSERT INTO pokemons VALUES ( DEFAULT, 'Pidgey', 'Normal', 818, 80, 95, 90);
INSERT INTO pokemons VALUES ( DEFAULT, 'Gastly', 'Fantasma', 750, 60, 60, 82);
INSERT INTO pokemons VALUES ( DEFAULT, 'Rattata', 'Normal', 810, 60, 65, 22);

-- Create security copy (Backup):
./mysqldump -u root -p adsi2338200 > /Users

-- Recuperar copia de seguridad (Backup) de la BD:
CREATE DATABASE adsi2338200;
mysqldump -u root -p adsi2338200> /Users/autocad/desktop/backup.sql

-- Insertar datos de una tabla a otra 
INSERT INTO pokemons_bk SELECT * FROM pokemons;

