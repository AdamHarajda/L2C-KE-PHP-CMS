CREATE TABLE IF NOT EXISTS Users(
    Users(
            id int AUTO_INCREMENT,
            email varchar(256),
            password varchar(64),
            nick varchar(128),
            PRIMARY KEY (id) 
        )
);

CREATE TABLE IF NOT EXISTS Pages(
    Users(
            id int AUTO_INCREMENT,
            title varchar(188),
            content text(),
            user_id int,
            menu_label varchar(128),
            menu_order int,
            PRIMARY KEY (id),
            FOREIGN KEY (user_id) REFERENCES user (id)
        )
);

INSERT INTO Users (email, password, nick) VALUES ('adamharajda@gmail.com', 'admin', 'admin');