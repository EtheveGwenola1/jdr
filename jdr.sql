#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS jdr;
CREATE DATABASE jdr;
USE jdr;

#------------------------------------------------------------
# Table: player
#------------------------------------------------------------

CREATE TABLE player(
        id_player     int (11) Auto_increment  NOT NULL ,
        pseudo_player Varchar (255) ,
        mail_player   Varchar (255) ,
        mdp_player    Varchar (255) ,
        score_player  Int ,
        PRIMARY KEY (id_player )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: perso
#------------------------------------------------------------

CREATE TABLE perso(
        id_perso    int (11) Auto_increment  NOT NULL ,
        vie_perso   Int ,
        or_perso    Float ,
        xp_perso    Int ,
        pts_perso   Int ,
        score_perso Int ,
        id_player   Int ,
        id_race     Int ,
        PRIMARY KEY (id_perso )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: race
#------------------------------------------------------------

CREATE TABLE race(
        id_race           int (11) Auto_increment  NOT NULL ,
        nom_race          Varchar (255) ,
        pts_vie_race      Int ,
        attaque_race      Int ,
        def_relative_race Float ,
        def_absolue_race  Int ,
        esquive_race      Int ,
        PRIMARY KEY (id_race )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: item
#------------------------------------------------------------

CREATE TABLE item(
        id_item          int (11) Auto_increment  NOT NULL ,
        nom_item         Varchar (255) ,
        valeur_item      Int ,
        activite_item    Int ,
        description_item Varchar (255) ,
        PRIMARY KEY (id_item )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: stuff
#------------------------------------------------------------

CREATE TABLE stuff(
        id_stuff          int (11) Auto_increment  NOT NULL ,
        nom_stuff         Varchar (255) ,
        valeur_stuff      Int ,
        description_stuff Varchar (255) ,
        id_zone           Int ,
        PRIMARY KEY (id_stuff )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mob
#------------------------------------------------------------

CREATE TABLE mob(
        id_mob           int (11) Auto_increment  NOT NULL ,
        nom_mob          Varchar (255) ,
        pts_vie_mob      Int ,
        attaque_mob      Int ,
        def_relative_mob Int ,
        def_absolue      Int ,
        esquive_mob      Int ,
        xp_mob           Int ,
        level_mob        Int ,
        id_race          Int ,
        PRIMARY KEY (id_mob )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: zone
#------------------------------------------------------------

CREATE TABLE zone(
        id_zone  int (11) Auto_increment  NOT NULL ,
        nom_zone Varchar (255) ,
        id_stuff Int ,
        PRIMARY KEY (id_zone )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: action
#------------------------------------------------------------

CREATE TABLE action(
        id_action    int (11) Auto_increment  NOT NULL ,
        heal_action  Int ,
        attaque      Int ,
        def_relative Int ,
        def_absolu   Int ,
        esquive      Int ,
        PRIMARY KEY (id_action )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisable
#------------------------------------------------------------

CREATE TABLE utilisable(
        id_item Int NOT NULL ,
        id_mob  Int NOT NULL ,
        PRIMARY KEY (id_item ,id_mob )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilise
#------------------------------------------------------------

CREATE TABLE utilise(
        id_perso Int NOT NULL ,
        id_item  Int NOT NULL ,
        PRIMARY KEY (id_perso ,id_item )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: porte
#------------------------------------------------------------

CREATE TABLE porte(
        id_stuff Int NOT NULL ,
        id_mob   Int NOT NULL ,
        PRIMARY KEY (id_stuff ,id_mob )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: equipe
#------------------------------------------------------------

CREATE TABLE equipe(
        id_stuff Int NOT NULL ,
        id_perso Int NOT NULL ,
        PRIMARY KEY (id_stuff ,id_perso )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fait
#------------------------------------------------------------

CREATE TABLE fait(
        id_action Int NOT NULL ,
        id_stuff  Int NOT NULL ,
        PRIMARY KEY (id_action ,id_stuff )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realise
#------------------------------------------------------------

CREATE TABLE realise(
        id_action Int NOT NULL ,
        id_item   Int NOT NULL ,
        PRIMARY KEY (id_action ,id_item )
)ENGINE=InnoDB;

ALTER TABLE perso ADD CONSTRAINT FK_perso_id_player FOREIGN KEY (id_player) REFERENCES player(id_player);
ALTER TABLE perso ADD CONSTRAINT FK_perso_id_race FOREIGN KEY (id_race) REFERENCES race(id_race);
ALTER TABLE stuff ADD CONSTRAINT FK_stuff_id_zone FOREIGN KEY (id_zone) REFERENCES zone(id_zone);
ALTER TABLE mob ADD CONSTRAINT FK_mob_id_race FOREIGN KEY (id_race) REFERENCES race(id_race);
ALTER TABLE zone ADD CONSTRAINT FK_zone_id_stuff FOREIGN KEY (id_stuff) REFERENCES stuff(id_stuff);
ALTER TABLE utilisable ADD CONSTRAINT FK_utilisable_id_item FOREIGN KEY (id_item) REFERENCES item(id_item);
ALTER TABLE utilisable ADD CONSTRAINT FK_utilisable_id_mob FOREIGN KEY (id_mob) REFERENCES mob(id_mob);
ALTER TABLE utilise ADD CONSTRAINT FK_utilise_id_perso FOREIGN KEY (id_perso) REFERENCES perso(id_perso);
ALTER TABLE utilise ADD CONSTRAINT FK_utilise_id_item FOREIGN KEY (id_item) REFERENCES item(id_item);
ALTER TABLE porte ADD CONSTRAINT FK_porte_id_stuff FOREIGN KEY (id_stuff) REFERENCES stuff(id_stuff);
ALTER TABLE porte ADD CONSTRAINT FK_porte_id_mob FOREIGN KEY (id_mob) REFERENCES mob(id_mob);
ALTER TABLE equipe ADD CONSTRAINT FK_equipe_id_stuff FOREIGN KEY (id_stuff) REFERENCES stuff(id_stuff);
ALTER TABLE equipe ADD CONSTRAINT FK_equipe_id_perso FOREIGN KEY (id_perso) REFERENCES perso(id_perso);
ALTER TABLE fait ADD CONSTRAINT FK_fait_id_action FOREIGN KEY (id_action) REFERENCES action(id_action);
ALTER TABLE fait ADD CONSTRAINT FK_fait_id_stuff FOREIGN KEY (id_stuff) REFERENCES stuff(id_stuff);
ALTER TABLE realise ADD CONSTRAINT FK_realise_id_action FOREIGN KEY (id_action) REFERENCES action(id_action);
ALTER TABLE realise ADD CONSTRAINT FK_realise_id_item FOREIGN KEY (id_item) REFERENCES item(id_item);

INSERT INTO race VALUES
(null, kitsune, 70, 20, 0.05, 40, 4),
(null, ifrits, 60, 12, 0.42, 10, 9),
(null, gnomes, 90, 6, 0.01, 7);


INSERT INTO item VALUES
(null, tête, null),
(null, torse, null),
(null, jambe, null),
(null, botte, null),
(null, main D, null),
(null, main G, null);


INSERT INTO mob VALUES
(null, tête, null),
(null, torse, null),
(null, jambe, null),
(null, botte, null),
(null, main D, null),
(null, main G, null);


INSERT INTO stuff VALUES
(null, épée, null)

INSERT INTO zone VALUES
(null, tête, null),
(null, torse, null),
(null, jambe, null),
(null, botte, null),
(null, main D, null),
(null, main G, null);