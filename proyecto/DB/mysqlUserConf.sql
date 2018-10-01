-- esos comandos deberían funcionar, si no, dejen comentarios de que no.

create user 'test'@'%' IDENTIFIED by '';

GRANT all PRIVILEGES on *.* to 'test';

flush PRIVILEGES;
