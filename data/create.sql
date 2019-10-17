drop table article;
drop table categorie;
drop table caracteristique;


CREATE TABLE caracteristique (
    idCarac INTEGER PRIMARY KEY,
    intitule TEXT,
    unite TEXT,
    valeur REAL
    );

CREATE TABLE categorie (
  id INTEGER PRIMARY KEY,
  intitule TEXT,
  categorieMere INTEGER,
  taxe REAL DEFAULT 0.2,
  FOREIGN KEY(categorieMere) REFERENCES categorie(id)
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
