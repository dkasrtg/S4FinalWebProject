drop database S4FinalWebProject;
create database S4FinalWebProject;
use S4FinalWebProject;



create table categorie_repas(
    id_categorie_repas int primary key auto_increment,
    nom_categorie varchar,
    ordre int
);
insert into categorie_repas values('petit dejeuner',10);
insert into categorie_repas values('collation matinee',20);
insert into categorie_repas values('dejeuner',30);
insert into categorie_repas values('collation apres midi',40);
insert into categorie_repas values('diner',50);
insert into categorie_repas values('collation soiree',60);


create table repas(
    id_repas int primary key auto_increment,
    id_categorie_repas int,
    description varchar,
    prix decimal,
    objectif int,
    affectation_poids decimal,
    foreign key(id_categorie_repas) references categorie_repas(id_categorie_repas)
);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Smoothie aux fruits + tranche de pain complet avec beurre d''amande', 5.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (2, 'Yaourt grec avec baies', 2.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de quinoa aux légumes avec poulet grillé', 9.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (4, 'Poignée d''amandes', 1.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Filet de saumon cuit au four avec légumes vapeur et riz brun', 12.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Omelette aux légumes + tranche de pain complet', 6.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (2, 'Pomme avec cuillerée de beurre d''arachide', 1.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de poulet avec légumes et vinaigrette légère', 8.99, 1);


INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Poitrine de poulet grillée avec asperges rôties et patates douces au four', 11.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (6, 'Yaourt grec avec graines de chia', 2.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Flocons d''avoine avec lait entier, fruits secs et noix', 4.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (2, 'Smoothie aux fruits (banane, mangue, lait de coco) avec noix de cajou', 3.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de poulet avec légumes, haricots et vinaigrette à l''huile d''olive', 9.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Poisson grillé avec sauce à la crème, légumes cuits à la vapeur et pommes de terre au four', 13.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (6, 'Smoothie protéiné (lait d''amande, banane, protéine en poudre)', 4.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Smoothie protéiné aux fruits (banane, baies, yaourt grec, lait d''amande) avec beurre d''amande', 5.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (2, 'Barre de céréales aux noix et aux fruits', 2.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de quinoa avec légumes rôtis (aubergine, courgette) et tofu', 8.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (4, 'Yaourt grec avec amandes', 2.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Steak de bœuf grillé avec légumes rôtis et riz complet', 12.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Tartine de pain complet avec beurre d''amande, tranches de banane et verre de lait entier', 5.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (2, 'Smoothie aux fruits (mangue, ananas, lait de coco) avec noix de cajou', 4.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de poulet avec légumes, avocats et vinaigrette légère', 9.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (6, 'Smoothie protéiné (lait d''amande, banane, beurre d''amande, protéine en poudre)', 4.99, 1);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Smoothie aux fruits (banane, épinards, lait d''amande)', 6.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de quinoa aux légumes avec poulet grillé', 9.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (4, 'Pomme avec une cuillerée de beurre d''amande', 1.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Filet de saumon cuit au four avec légumes vapeur et riz brun', 12.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Omelette aux légumes (poivrons, épinards) avec une tranche de pain complet', 6.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (2, 'Poignée de baies mélangées', 2.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de poulet avec légumes variés et vinaigrette légère', 8.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (4, 'Bâtonnets de légumes (carottes, céleri) avec houmous', 3.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Poitrine de poulet grillée avec asperges rôties et patates douces au four', 11.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (6, 'Yaourt grec nature avec amandes', 2.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Flocons d''avoine avec fruits frais et noix', 5.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (2, 'Poignée de noix mélangées', 1.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de quinoa avec légumes (poivrons, concombres) et vinaigrette légère', 9.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (4, 'Poire avec une cuillerée de beurre d''amande', 1.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Filet de saumon cuit au four avec légumes vapeur et riz brun', 12.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Smoothie protéiné (lait d''amande, banane, protéine en poudre) avec une tranche de pain complet et beurre d''arachide', 7.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (2, 'Poignée de baies mélangées', 2.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Salade de poulet avec légumes (poivrons, carottes) et vinaigrette légère', 8.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (4, 'Bâtonnets de légumes avec guacamole', 4.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Poisson blanc cuit au four avec haricots verts et quinoa', 11.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (6, 'Yaourt grec nature avec graines de chia', 2.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (1, 'Smoothie aux épinards, banane, beurre d''amande et lait d''amande', 6.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (3, 'Soupe aux légumes avec salade verte et quinoa', 8.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (4, 'Yaourt grec nature avec baies', 2.99, 0);

INSERT INTO repas (id_categorie_repas, description, prix, objectif)
VALUES (5, 'Poisson grillé avec légumes vapeur et patates douces', 11.99, 0);

create table activite_sportive(
    id_activite_sportive int primary key auto_increment,
    nom varchar,
    objectif int
);

INSERT INTO activite_sportive (nom, objectif)
VALUES ('Course à pied', 0),
       ('Natation', 0),
       ('Entraînement en circuit', 0),
       ('Yoga', 0),
       ('Aérobic', 0);

INSERT INTO activite_sportive (nom, objectif)
VALUES ('Musculation', 1),
       ('Haltérophilie', 1),
       ('CrossFit', 1),
       ('Rugby', 1),
       ('Basketball', 1);

