drop table article;
drop table categorie;
drop table caracteristique;
drop table membres;


CREATE TABLE caracteristique (
    id INTEGER PRIMARY KEY,
    intitule TEXT,
    unite TEXT,
    valeur REAL,
    refArticle INTEGER
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
  texteDescriptif TEXT,
  prix REAL,
  visuel TEXT,
  categorie INTEGER,
  FOREIGN KEY(categorie) REFERENCES categorie(idCat),
  FOREIGN KEY(categorie) REFERENCES caracteristique(idCarac)
  );

CREATE TABLE membres (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  nom TEXT,
  prenom TEXT,
  pseudo TEXT,
  pass TEXT,
  email TEXT,
  date_inscription date
);
