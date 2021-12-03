CREATE DATABASE IF NOT EXISTS scout_mexico;

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    last_name varchar(255) NOT NULL,
    first_name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    age int NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO users (last_name, first_name, email, password, age)
VALUES ("josue", "varela", "josue.varela@uabc.edu.mx", "password",8),
("rodrigo", "leal", "rodrigo.leal@uabc.edu.mx", "password",9),
("alan", "robledo", "alan.robledo@uabc.edu.mx", "password",9),
("arturo", "viruete", "arturo.viruete@uabc.edu.mx", "password",10),
("user", "administrador", "administrador@uabc.edu.mx", "password",40),
("user", "scout", "scout@uabc.edu.mx", "password",40);

CREATE TABLE roles (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO roles (name, description)
VALUES ("Administrador", "Administrador de sistema"),
("Control parental", "Control para los novatos"),
("Scout", "Miembro de los scouts");

CREATE TABLE user_role (
    id int NOT NULL AUTO_INCREMENT,
    id_user int NOT NULL,
    id_role int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES users(id),
    FOREIGN KEY (id_role) REFERENCES roles(id)
);

INSERT INTO `user_role` (`id_user`, `id_role`) VALUES (5, 1),
(6, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3);

CREATE TABLE groups (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE groups_user_role (
    id int NOT NULL AUTO_INCREMENT,
    id_group int NOT NULL,
    id_user_role int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_group) REFERENCES groups(id),
    FOREIGN KEY (id_user_role) REFERENCES user_role(id)
);