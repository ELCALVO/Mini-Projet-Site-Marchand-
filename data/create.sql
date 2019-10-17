

CREATE TABLE caracteristique (
    idCarac INTEGER PRIMARY KEY,
    intitule TEXT,
    unite TEXT,
    valeur REAL
    );

CREATE TABLE categorie (
  idCat INTEGER PRIMARY KEY,
  intitule TEXT,
  pere INTEGER,
  taxe REAL DEFAULT 0.2,
  FOREIGN KEY(pere) REFERENCES categorie(idCat)
  );


CREATE TABLE article (
  ref INTEGER PRIMARY KEY,
  intitule TEXT,
  categorie INTEGER,
  caracteristique INTEGER,
  texteDescriptif TEXT,
  prixU_HT REAL,
  image TEXT,
  FOREIGN KEY(categorie) REFERENCES categorie(idCat),
  FOREIGN KEY(categorie) REFERENCES caracteristique(idCarac)
  );
