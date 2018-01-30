# Codeigniter 3 migration example
Migrations are a fantastic way to manage database schema changes across multiple development environments, as well as provide a way to roll back poorly executed schema changes without having to manually run MySQL table alters, creations, etc. Database migrations also provide a simple way to spin up new development servers that can run a local database while ensuring all development databases are in sync.

## Database
Database name: projname_db

## Execute
- Go to the root directory
- php index.php migrate
  (C:\xampp\php\php.exe index.php migrate)

## Access DB from browser
- <BASE PROJ URL>/db_adminer.php
  (http://localhost/myproj/db_adminer.php)
