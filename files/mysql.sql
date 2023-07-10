drop database S4FinalWebProject;
create database S4FinalWebProject;
use S4FinalWebProject;



create table categorie_repas(
    id_categorie_repas int primary key auto_increment,
    nom_categorie varchar,
    ordre int
);
insert into categorie_repas(nom_categorie,ordre) values('petit dejeuner',10);
insert into categorie_repas(nom_categorie,ordre) values('dejeuner',20);
insert into categorie_repas(nom_categorie,ordre) values('collation',30);
insert into categorie_repas(nom_categorie,ordre) values('diner',40);


create table repas(
    id_repas int primary key auto_increment,
    id_categorie_repas int,
    description varchar,
    prix decimal,
    objectif int,
    affectation_poids decimal,
    foreign key(id_categorie_repas) references categorie_repas(id_categorie_repas)
);


insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Smoothie protéiné', 5.99, -1, 0.2);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Salade de lentilles avec légumes', 7.99, -1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Yaourt grec nature avec amandes', 3.49, -1, 0.1);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Poisson blanc cuit au four avec haricots verts et quinoa', 9.99, -1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Smoothie aux épinards, avocat et lait d''amande', 6.99, -1, 0.2);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Salade de poulet grillé avec légumes verts', 8.99, -1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Poignée de baies mixtes', 2.99, -1, 0.2);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Poulet rôti avec légumes rôtis', 10.99, -1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Omelette aux légumes', 6.49, -1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Salade de thon avec légumes', 7.49, -1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Smoothie à base de lait d''amande, banane et protéine en poudre', 4.99, -1, 0.1);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Pâtes de blé entier avec sauce tomate et légumes', 9.49, -1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Smoothie aux fruits avec avoine et yaourt', 6.99, 1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Burger de bœuf avec fromage et frites', 10.99, 1, 0.5);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Mélange de noix et fruits séchés', 4.49, 1, 0.2);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Steak de saumon avec pommes de terre au four et légumes grillés', 12.99, 1, 0.6);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Pancakes aux pépites de chocolat avec sirop d''érable', 8.99, 1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Pâtes à la carbonara avec bacon et fromage', 9.99, 1, 0.5);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Smoothie protéiné aux amandes et banane', 5.49, 1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Riz frit aux légumes et crevettes', 11.99, 1, 0.6);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Œufs brouillés avec fromage et toasts', 7.49, 1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Wrap au poulet avec avocat et mayonnaise', 8.99, 1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Smoothie aux noix et beurre d''arachide', 5.99, 1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Lasagnes à la viande avec salade verte', 11.49, 1, 0.5);


create table activite_sportive(
    id_activite_sportive int primary key auto_increment,
    nom varchar,
    objectif int
);

INSERT INTO activite_sportive (nom, objectif)
VALUES ('Course à pied', -1),
       ('Natation', -1),
       ('Entraînement en circuit', -1),
       ('Yoga', -1),
       ('Aérobic', -1);

INSERT INTO activite_sportive (nom, objectif)
VALUES ('Musculation', 1),
       ('Haltérophilie', 1),
       ('CrossFit', 1),
       ('Rugby', 1),
       ('Basketball', 1);


create table code_argent(
    id_code_argent int primary key auto_increment,
    code varchar,
    argent decimal,
    etat int
);