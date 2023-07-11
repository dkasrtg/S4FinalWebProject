drop database S4FinalWebProject;
create database S4FinalWebProject;
use S4FinalWebProject;


create table categorie_repas(
    id_categorie_repas int primary key auto_increment,
    nom_categorie varchar(50),
    time_ TIME,
    ordre int
);
insert into categorie_repas(nom_categorie,time_,ordre) values('petit dejeuner','07:00:00',10);
insert into categorie_repas(nom_categorie,time_,ordre) values('dejeuner','11:00:00',20);
insert into categorie_repas(nom_categorie,time_,ordre) values('collation','16:00:00',30);
insert into categorie_repas(nom_categorie,time_,ordre) values('diner','20:00:00',40);


create table repas(
    id_repas int primary key auto_increment,
    id_categorie_repas int,
    description varchar(255),
    prix decimal,
    objectif int,
    affectation_poids decimal(11,2),
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
    nom varchar(255),
    objectif int,
    affectation_poids decimal(11,2)
);

INSERT INTO activite_sportive (nom, objectif, affectation_poids)
VALUES ('Course à pied', -1, 0.5),
       ('Natation', -1, 0.5),
       ('Entraînement en circuit', -1, 0.5),
       ('Yoga', -1, 0.5),
       ('Aérobic', -1, 0.5);

INSERT INTO activite_sportive (nom, objectif, affectation_poids)
VALUES ('Musculation', 1, 0.5),
       ('Haltérophilie', 1, 0.5),
       ('CrossFit', 1, 0.5),
       ('Rugby', 1, 0.5),
       ('Basketball', 1, 0.5);


create table code_argent(
    id_code_argent int primary key auto_increment,
    code varchar(30),
    argent decimal,
    etat int
);


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
    taille decimal(11,2),
    poids decimal(11,2),
    date_donnees date,
    foreign key(id_client) references client(id_client)
);

INSERT INTO donnees_client (id_client, genre, taille, poids, date_donnees)
VALUES (1, 1, 1.75, 55.00, '2023-07-10');


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

create table proposition(
    id_proposition int primary key auto_increment,
    min decimal(11,2),
    max decimal(11,2),
    position varchar(255),
    conseil text
);

INSERT INTO proposition (min, max,position, conseil)
VALUES  (0,18.5, 'Insuffisance pondérale (maigreur)', 'Il est recommandé de faire  une alimentation équilibrée pour augmenter votre poids de manière saine. Consultez un nutritionniste pour obtenir des conseils personnalisés.Vue que Vous êtes en situation ,insuffisance pondérale, ce qui peut avoir des conséquences sur votre santé. Il est important de consulter un diététicien ou un professionnel de la santé pour obtenir un plan alimentaire adapté et équilibré. Un diététicien pourra vous aider à augmenter votre apport calorique de manière saine en choisissant des aliments riches en nutriments et en vous proposant des stratégies pour favoriser une prise de poids progressive. Demander conseil à un spécialiste afin de bénéficier un suivi personnalisé et atteindre un poids santé.');
 
INSERT INTO proposition (max, min, position, conseil)
VALUES  (19, 25, 'Corpulence normale ou poids normal', 'Félicitations, votre IMC se situe dans la plage de poids normal. Un bon indicateur de votre santé. Pour maintenir votre poids idéal, il est important de continuer à adopter une alimentation équilibrée et une activité physique régulière. Veillez à consommer une variété ,aliments nutritifs, notamment des fruits, des légumes, des protéines maigres et des grains entiers. Évitez les excès de sucre, de sel et de matières grasses. Buvez suffisamment ,eau, et  rester actif tout au long de la journée. Un mode de vie sain contribuera à maintenir votre poids et votre bien-être général.Ainsi un oids normal : Continuez à maintenir une alimentation équilibrée et une activité physique régulière pour préserver votre poids idéal.');


INSERT INTO proposition (max, min, position, conseil)
VALUES (26, 30, 'Surpoids', 'Votre IMC indique que vous êtes en surpoids. Il est important de prendre des mesures pour améliorer votre santé et réduire votre poids. Un plan alimentaire équilibré et une activité physique régulière seront essentiels: Contrôlez vos portions et évitez les excès alimentaires,Augmentez votre activité physique en pratiquant régulièrement des exercices cardiovasculaires et des exercices de renforcement musculaire.En adoptant ces conseils et en apportant des changements progressifs à votre mode de vie, vous pourrez atteindre un poids plus sain et améliorer votre bien-être général.Sinon,Consultez un professionnel de la santé ou un diététicien pour obtenir un plan personnalisé et un suivi régulier de votre progression');
  
INSERT INTO proposition (max, min, position, conseil)
VALUES  (31,32, ' Obésité sévère', 'Votre IMC indique que vous êtes en situation ,obésité. Il est essentiel de prendre des mesures pour améliorer votre santé et réduire votre poids. Voici quelques conseils du diététicien pour vous aider :Adoptez une alimentation saine et équilibrée en privilégiant les aliments riches en nutriments et en fibres, tels que les fruits, les légumes, les grains entiers et les protéines maigres.,Évitez les aliments transformés, les boissons sucrées et les aliments riches en matières grasses.,Contrôlez vos portions et évitez les excès alimentaires.,Augmentez votre activité physique en pratiquant régulièrement des exercices cardiovasculaires et des exercices de renforcement musculaire.,Consultez un professionnel de la santé ou un diététicien pour obtenir un plan alimentaire personnalisé et un suivi régulier de votre progression.,Cherchez un soutien auprès de groupes de soutien ou de programmes de gestion du poids.');
