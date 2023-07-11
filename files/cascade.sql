CREATE SCHEMA `S4FinalWebProject`;

CREATE  TABLE `S4FinalWebProject`.activite_sportive ( 
	id_activite_sportive INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(255)       ,
	objectif             INT       ,
	affectation_poids    DECIMAL(11,2)       
 ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.admin ( 
	id_admin             INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(100)  NOT NULL     ,
	prenom               VARCHAR(100)  NOT NULL     ,
	email                VARCHAR(100)  NOT NULL     ,
	mdp                  VARCHAR(100)  NOT NULL     
 ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.but ( 
	id_but               INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(100)       
 ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.categorie_repas ( 
	id_categorie_repas   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom_categorie        VARCHAR(50)       ,
	time_                TIME       ,
	ordre                INT       
 ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.client ( 
	id_client            INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(30)       ,
	prenom               VARCHAR(30)       ,
	date_de_naissance    DATE       ,
	mail                 VARCHAR(30)       ,
	tel                  VARCHAR(30)       ,
	mot_de_passe         VARCHAR(30)       
 ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.code_argent ( 
	id_code_argent       INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	code                 VARCHAR(30)       ,
	argent               DECIMAL(10,0)       ,
	etat                 INT       
 ) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.commande_activite_sportive ( 
	id_commande_sport    INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_activite_sportive INT       
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_activite_sportive ON `S4FinalWebProject`.commande_activite_sportive ( id_activite_sportive );

CREATE  TABLE `S4FinalWebProject`.commande_client ( 
	id_commande_client   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_client            INT       ,
	prix_total           DECIMAL(7,2)       ,
	date_commande        DATE       ,
	etat                 INT       
 ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_client ON `S4FinalWebProject`.commande_client ( id_client );

CREATE  TABLE `S4FinalWebProject`.composition ( 
	id_comp              INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	viande               DECIMAL(11,2)       ,
	poisson              DECIMAL(11,2)       ,
	volaille             DECIMAL(11,2)       
 ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.compte_client ( 
	id_compte_client     INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_client            INT       ,
	montant              DECIMAL(10,2)       
 ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_client ON `S4FinalWebProject`.compte_client ( id_client );

CREATE  TABLE `S4FinalWebProject`.donnees_client ( 
	id_donnees_client    INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_client            INT       ,
	genre                INT       ,
	taille               DECIMAL(11,2)       ,
	poids                DECIMAL(11,2)       ,
	date_donnees         DATE       
 ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_client ON `S4FinalWebProject`.donnees_client ( id_client );

CREATE  TABLE `S4FinalWebProject`.option_ ( 
	id_option            INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(30)       ,
	remise               DECIMAL(11,2)       
 ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.option_client ( 
	id_option_client     INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_client            INT       ,
	id_option            INT       
 ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_client ON `S4FinalWebProject`.option_client ( id_client );

CREATE INDEX id_option ON `S4FinalWebProject`.option_client ( id_option );

CREATE  TABLE `S4FinalWebProject`.proposition ( 
	id_proposition       INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	min                  DECIMAL(11,2)       ,
	max                  DECIMAL(11,2)       ,
	position             VARCHAR(255)       ,
	conseil              TEXT       
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE  TABLE `S4FinalWebProject`.recharge_client ( 
	id_recharge_client   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_client            INT       ,
	id_code_argent       INT       ,
	date_demande         DATE       ,
	date_acceptation     DATE       
 ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_client ON `S4FinalWebProject`.recharge_client ( id_client );

CREATE INDEX id_code_argent ON `S4FinalWebProject`.recharge_client ( id_code_argent );

CREATE  TABLE `S4FinalWebProject`.repas ( 
	id_repas             INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_categorie_repas   INT       ,
	description          VARCHAR(255)       ,
	prix                 DECIMAL(10,0)       ,
	objectif             INT       ,
	affectation_poids    DECIMAL(11,2)       
 ) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_categorie_repas ON `S4FinalWebProject`.repas ( id_categorie_repas );

CREATE  TABLE `S4FinalWebProject`.transactions_client ( 
	id_transactions_client INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_client            INT       ,
	description          VARCHAR(40)       ,
	date_transaction     DATE       ,
	montant              DECIMAL(10,2)       
 ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_client ON `S4FinalWebProject`.transactions_client ( id_client );

CREATE  TABLE `S4FinalWebProject`.but_client ( 
	id_but_client        INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_client            INT       ,
	id_but               INT       
 ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_client ON `S4FinalWebProject`.but_client ( id_client );

CREATE INDEX id_but ON `S4FinalWebProject`.but_client ( id_but );

CREATE  TABLE `S4FinalWebProject`.commande_repas ( 
	id_commande_repas    INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_repas             INT       ,
	id_client            INT       ,
	prix_total           DECIMAL(7,2)       ,
	remise               DECIMAL(7,2)       ,
	date_commande        DATE       ,
	etat                 INT       
 ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_repas ON `S4FinalWebProject`.commande_repas ( id_repas );

CREATE INDEX id_client ON `S4FinalWebProject`.commande_repas ( id_client );

CREATE  TABLE `S4FinalWebProject`.regime_composition ( 
	`idRC`               INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_comp              INT       ,
	id_repas             INT       ,
	date_insertion       DATETIME       
 ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE INDEX id_comp ON `S4FinalWebProject`.regime_composition ( id_comp );

CREATE INDEX id_repas ON `S4FinalWebProject`.regime_composition ( id_repas );

--------------------------- CASCADE ---------------------------------
--------------------------- CASCADE ---------------------------------
--------------------------- CASCADE ---------------------------------


ALTER TABLE `S4FinalWebProject`.but_client ADD CONSTRAINT but_client_ibfk_1 FOREIGN KEY ( id_client ) REFERENCES `S4FinalWebProject`.client( id_client ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `S4FinalWebProject`.but_client ADD CONSTRAINT but_client_ibfk_2 FOREIGN KEY ( id_but ) REFERENCES `S4FinalWebProject`.but( id_but ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `S4FinalWebProject`.commande_activite_sportive ADD CONSTRAINT commande_activite_sportive_ibfk_1 FOREIGN KEY ( id_activite_sportive ) REFERENCES `S4FinalWebProject`.activite_sportive( id_activite_sportive ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.commande_client ADD CONSTRAINT commande_client_ibfk_1 FOREIGN KEY ( id_client ) REFERENCES `S4FinalWebProject`.client( id_client ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.commande_repas ADD CONSTRAINT commande_repas_ibfk_1 FOREIGN KEY ( id_repas ) REFERENCES `S4FinalWebProject`.repas( id_repas ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.commande_repas ADD CONSTRAINT commande_repas_ibfk_2 FOREIGN KEY ( id_client ) REFERENCES `S4FinalWebProject`.client( id_client ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.compte_client ADD CONSTRAINT compte_client_ibfk_1 FOREIGN KEY ( id_client ) REFERENCES `S4FinalWebProject`.client( id_client ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.donnees_client ADD CONSTRAINT donnees_client_ibfk_1 FOREIGN KEY ( id_client ) REFERENCES `S4FinalWebProject`.client( id_client ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.option_client ADD CONSTRAINT option_client_ibfk_1 FOREIGN KEY ( id_client ) REFERENCES `S4FinalWebProject`.client( id_client ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.option_client ADD CONSTRAINT option_client_ibfk_2 FOREIGN KEY ( id_option ) REFERENCES `S4FinalWebProject`.option_( id_option ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `S4FinalWebProject`.recharge_client ADD CONSTRAINT recharge_client_ibfk_1 FOREIGN KEY ( id_client ) REFERENCES `S4FinalWebProject`.client( id_client ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.recharge_client ADD CONSTRAINT recharge_client_ibfk_2 FOREIGN KEY ( id_code_argent ) REFERENCES `S4FinalWebProject`.code_argent( id_code_argent ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.regime_composition ADD CONSTRAINT regime_composition_ibfk_1 FOREIGN KEY ( id_comp ) REFERENCES `S4FinalWebProject`.composition( id_comp ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.regime_composition ADD CONSTRAINT regime_composition_ibfk_2 FOREIGN KEY ( id_repas ) REFERENCES `S4FinalWebProject`.repas( id_repas ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.repas ADD CONSTRAINT repas_ibfk_1 FOREIGN KEY ( id_categorie_repas ) REFERENCES `S4FinalWebProject`.categorie_repas( id_categorie_repas ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `S4FinalWebProject`.transactions_client ADD CONSTRAINT transactions_client_ibfk_1 FOREIGN KEY ( id_client ) REFERENCES `S4FinalWebProject`.client( id_client ) ON DELETE NO ACTION ON UPDATE NO ACTION;
