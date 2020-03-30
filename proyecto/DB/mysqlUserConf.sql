-- configuración de usuarios correcta.

create user 'luis'@'localhost' IDENTIFIED by 'newborn';

GRANT ALL PRIVILEGES ON * . * TO 'luis'@'localhost';
flush privileges;
