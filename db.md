DB_name: dog_shelter

Cosa ha un sito di un canile:
- Cani
- Impiegati
- Visitatori/utenti

## table_name: dogs
- id | BIGINT | INDEX | AI | UNIQUE | PK | NOTNULL
- name | VARCHAR(30) | NOTNULL
- age | TINYINT | NULL
- breed | VARCHAR(50) | NOTNULL | DEFAULT("meticcio")
- gender | VARCHAR(7) | NOTNULL
- weight | TINYINT | NULL
- description | TEXT | NULL
- image | VARCHAR(255) | NULL

## table_name: employees
- id | BIGINT | INDEX | AI | UNIQUE | PK | NOTNULL
- name | VARCHAR(50) | NOTNULL
- lastname | VARCHAR(50) | NOTNULL
- email | VARCHAR(255) | NOTNULL
- password | VARCHAR(50) | NOTNULL
- address | VARCHAR(255) | NULL
- phone | VARCHAR(15) | NULL

## table_name: users
- id | BIGINT | INDEX | AI | UNIQUE | PK | NOTNULL
- name | VARCHAR(50) | NOTNULL
- lastname | VARCHAR(50) | NOTNULL
- email | VARCHAR(255) | NOTNULL
- password | VARCHAR(50) | NOTNULL
- address | VARCHAR(255) | NULL
- phone | VARCHAR(15) | NULL
