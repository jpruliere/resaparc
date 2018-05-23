CREATE TABLE manege (
    id SERIAL,
    nom varchar(50),
    nb_place int,
    duree TIME,
    horaire_ouverture TIME,
    horaire_fermeture TIME,
    num_plan int,
    consignes TEXT,
    PRIMARY KEY (id)
);

CREATE TABLE reservation (
    id SERIAL,
    num_billet int,
    horaire TIME,
    id_manege int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_manege) REFERENCES manege(id),
    UNIQUE (num_billet, horaire, id_manege)
);
