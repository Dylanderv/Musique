
CREATE TABLE Musique(
        IdMusique integer PRIMARY KEY AUTOINCREMENT,
        Artiste          Varchar (255) ,
        Titre       Varchar (255) ,
        Genre       Varchar(255)
);

CREATE TABLE Utilisateur(
        Nom Varchar(255) PRIMARY KEY AUTOINCREMENT
);

CREATE TABLE Favoris(
        IdFavoris integer PRIMARY KEY AUTOINCREMENT,
        NomUtil          Varchar (255) ,
        IdMusique       Integer
);
