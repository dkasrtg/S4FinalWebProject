drop database S4FinalWebProject;
create database S4FinalWebProject;
use S4FinalWebProject;



create table categorie_repas(
    id_categorie_repas int primary key auto_increment,
    nom_categorie varchar(50),
    ordre int
);
insert into categorie_repas(nom_categorie,ordre) values('petit dejeuner',10);
insert into categorie_repas(nom_categorie,ordre) values('dejeuner',20);
insert into categorie_repas(nom_categorie,ordre) values('collation',30);
insert into categorie_repas(nom_categorie,ordre) values('diner',40);


create table repas(
    id_repas int primary key auto_increment,
    id_categorie_repas int,
    description varchar(255),
    prix decimal(10,2),
    objectif int,
    affectation_poids decimal(2,2),
    foreign key(id_categorie_repas) references categorie_repas(id_categorie_repas)
);


insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Smoothie proteine', 5.99, -1, 0.2);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Salade de lentilles avec legumes', 7.99, -1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Yaourt grec nature avec amandes', 3.49, -1, 0.1);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Poisson blanc cuit au four avec haricots verts et quinoa', 9.99, -1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Smoothie aux epinards, avocat et lait d''amande', 6.99, -1, 0.2);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Salade de poulet grille avec legumes verts', 8.99, -1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Poignee de baies mixtes', 2.99, -1, 0.2);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Poulet rôti avec legumes rôtis', 10.99, -1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Omelette aux legumes', 6.49, -1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Salade de thon avec legumes', 7.49, -1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Smoothie à base de lait d''amande, banane et proteine en poudre', 4.99, -1, 0.1);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Pâtes de ble entier avec sauce tomate et legumes', 9.49, -1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Smoothie aux fruits avec avoine et yaourt', 6.99, 1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Burger de bœuf avec fromage et frites', 10.99, 1, 0.5);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Melange de noix et fruits seches', 4.49, 1, 0.2);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Steak de saumon avec pommes de terre au four et legumes grilles', 12.99, 1, 0.6);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Pancakes aux pepites de chocolat avec sirop d''erable', 8.99, 1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Pâtes à la carbonara avec bacon et fromage', 9.99, 1, 0.5);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Smoothie proteine aux amandes et banane', 5.49, 1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Riz frit aux legumes et crevettes', 11.99, 1, 0.6);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (1, 'Œufs brouilles avec fromage et toasts', 7.49, 1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (2, 'Wrap au poulet avec avocat et mayonnaise', 8.99, 1, 0.4);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (3, 'Smoothie aux noix et beurre d''arachide', 5.99, 1, 0.3);

insert into repas (id_categorie_repas, description, prix, objectif, affectation_poids)
values (4, 'Lasagnes à la viande avec salade verte', 11.49, 1, 0.5);


create table activite_sportive(
    id_activite_sportive int primary key auto_increment,
    nom varchar(255),
    objectif int,
    affectation_poids decimal
);

INSERT INTO activite_sportive (nom, objectif, affectation_poids)
VALUES ('Course à pied', -1, 0.5),
       ('Natation', -1, 0.5),
       ('Entraînement en circuit', -1, 0.5),
       ('Yoga', -1, 0.5),
       ('Aerobic', -1, 0.5);

INSERT INTO activite_sportive (nom, objectif, affectation_poids)
VALUES ('Musculation', 1, 0.5),
       ('Halterophilie', 1, 0.5),
       ('CrossFit', 1, 0.5),
       ('Rugby', 1, 0.5),
       ('Basketball', 1, 0.5);


CREATE TABLE admin (
    id_admin int primary key auto_increment,
    nom varchar(100) NOT NULL,
    prenom varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    mdp varchar(100) NOT NULL
);


create table code_argent(
    id_code_argent int primary key auto_increment,
    code varchar(30),
    argent decimal(10,2),
    etat int
);

insert into code_argent(code,argent,etat) values('ed3e2',10,1);
insert into code_argent(code,argent,etat) values('ed3a2',20,1);

-- clients


create table client(
    id_client int primary key auto_increment,
    nom varchar(30),
    prenom varchar(30),
    date_de_naissance date,
    mail varchar(30),
    tel varchar(30),
    mot_de_passe varchar(30)
);

INSERT INTO client (nom, prenom, date_de_naissance, mail, tel, mot_de_passe)
VALUES ('Doe', 'John', '1990-05-15', 'johndoe@example.com', '123456789', 'password123');
INSERT INTO client (nom, prenom, date_de_naissance, mail, tel, mot_de_passe)
VALUES ('Smith', 'Alice', '1985-09-20', 'alice.smith@example.com', '987654321', 'secret123');

create table donnees_client(
    id_donnees_client int primary key auto_increment,
    id_client int,
    genre int,
    taille decimal(3,2),
    poids decimal(3,2),
    date_donnees date,
    foreign key(id_client) references client(id_client)
);


create table compte_client(
    id_compte_client int primary key auto_increment,
    id_client int,
    montant decimal(10,2),
    foreign key(id_client) references client(id_client)
);
INSERT INTO compte_client (id_client, montant)
VALUES (1, 0);
INSERT INTO compte_client (id_client, montant)
VALUES (2, 0);


create table transactions_client(
    id_transactions_client int primary key auto_increment,
    id_client int,
    description varchar(40),
    date_transaction date,
    montant decimal(10,2),
    foreign key(id_client) references client(id_client)
);

create table recharge_client(
    id_recharge_client int primary key auto_increment,
    id_client int,
    id_code_argent int,
    date_demande date,
    date_acceptation date,
    foreign key(id_client) references client(id_client),
    foreign key(id_code_argent) references code_argent(id_code_argent) ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO recharge_client (id_client, id_code_argent, date_demande)
VALUES (1, 1, '2023-07-01');
INSERT INTO recharge_client (id_client, id_code_argent, date_demande)
VALUES (2, 2, '2023-07-03');


INSERT INTO admin (nom, prenom, email, mdp)
VALUES  ('ANDRIANAIVOSOA', 'Johan', 'johan@gmail.com', 'johan'),
        ('ANDRIANAIVOSOA', 'Gael', 'gael@gmail.com', 'gael'),
        ('ANDRIANAIVOSOA', 'Christel', 'christel@gmail.com', 'christel');