CREATE TABLE Survey
(
    "id" serial primary key,
    "name" VARCHAR(80),
    "location" VARCHAR(10),
    "fav_language" VARCHAR(120),
    "comments" VARCHAR(1000)
);