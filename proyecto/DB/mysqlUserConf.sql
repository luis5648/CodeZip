-- configuración de usuarios correcta.

create user 'test'@'localhost' IDENTIFIED by '123';

GRANT ALL PRIVILEGES ON * . * TO 'test'@'localhost';
flush privileges;
