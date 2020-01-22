#!/bin/sh
sqlite3 database.db <<EOF
.read create.sql
.separator |
.import caracteristique.txt caracteristique
.import categorie.txt categorie
.import article.txt article
EOF
