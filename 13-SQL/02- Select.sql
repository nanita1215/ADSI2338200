-- Show all pokemons
SELECT * FROM pokemons;

-- Show a column of pokemon 
SELECT name FROM pokemons;

-- Consultar varios campos * show many columns
SELECT name, speed FROM pokemons;

-- Consultar valores distintos * Show values distincts
SELECT DISTINCT type FROM pokemons;

-- Consultar registsros con un criterio especifico * Show only type registers 
SELECT *
FROM pokemons
WHERE type = 'Water';



-- More than (>)
SELECT *
FROM pokemons
WHERE strength > 1000;

-- Different <>
SELECT *
FROM pokemons
WHERE type <> 'water';

-- AND 
SELECT *
FROM pokemons
WHERE type = 'water'
AND speed > 80;

-- BETWEEN
SELECT *
FROM pokemons
WHERE stamina
BETWEEN 200
AND 300;

-- ORDRE BY: Ascendant 
SELECT *
FROM pokemons
ORDER BY strength;

SELECT * 
FROM pokemons 
ORDER BY strength 
ASC;

-- ORDER BY: Descendant 
SELECT *
FROM pokemons
ORDER BY strength
DESC;

SELECT * 
FROM pokemons 
WHERE speed > 100
ORDER BY speed DESC;

-- Limit 
SELECT *
FROM pokemons
LIMIT 10;

-- OFFSET
SELECT *
FROM pokemons
LIMIT 5
OFFSET 10;

SELECT * 
FROM pokemons 
LIMIT 10, 5;

 -- LIKE: Search
 -- Show all record init with 'A'
 SELECT *
 FROM pokemons
 WHERE type 
 LIKE "W%";

 -- Show all results that end with 'C'
SELECT *
FROM pokemons
WHERE type 
LIKE "%C";

-- Show all results that contains 'ma'
SELECT *
FROM pokemons
WHERE type 
LIKE "%ma%";

-- Show result 'pikachu'
SELECT *
FROM pokemons
WHERE name 
LIKE "P_k_c_u";

-- Show all results that not contains 'ma'
SELECT *
FROM pokemons
WHERE name 
NOT LIKE "%ma%";

-- Show results with many values using 'IN'
SELECT *
FROM pokemons
WHERE type 
IN ('Fire', 'Electric');

-- Show results with many values using 'IN'
SELECT *
FROM pokemons
WHERE type 
IN ('Fire', 'Electric');

-- ALIAS
SELECT  t.name AS name_trainer,
        p.name AS name_pokemon,
        p.type AS type_pokemon
FROM    trainers AS t,
        pokemons AS p
WHERE   p.trainer_id = t.id;


SELECT  t.name AS name_trainer,
        p.name AS name_pokemon,
        g.id AS name_gym
FROM    trainers AS t,
        pokemons AS p,
        gym AS g
WHERE   p.trainer_id = t.id;


SELECT  t.name AS name_trainer,
        p.name AS name_pokemon,
        p.type AS type_pokemon
FROM    trainers AS t,
        pokemons AS p
WHERE   p.trainer_id = t.id
AND p.type = 'water' OR p.type = "fire"
ORDER BY t.name DESC


SELECT  COUNT (p.id) AS number_pokemons
FROM    pokemons AS p, trainers AS t    
WHERE   p.trainer_id = t.id;
AND t.id = 1;


SELECT  t.name AS name_trainer, COUNT(p.id) AS number_pokemons
FROM    trainers AS t,
        pokemons AS p
WHERE   p.trainer_id = t.id
GROUP BY t.name;

-- inner join 
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
INNER JOIN gyms
ON trainers.gym_id = gyms.id
INNER JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;


--left join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

-- right join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

-- join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

-- Union
SELECT name FROM trainers
UNION
SELECT name FROM gyms
UNION
SELECT name FROM pokemons;
 
 -- Views
CREATE VIEW view_pokemons AS
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

-- Show view
SELECT * FROM view_pokemons;



-- Insert Long 
INSERT INTO trainers (id, name, level, gym_id) 
VALUES (
DEFAULT, "Serena, 4, 2");

INSERT INTO trainers (id, name, level, gym_id)
VALUES (
DEFAULT, "Oak", 9, 1);


 








