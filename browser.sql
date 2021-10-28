CREATE TABLE browser (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    platform varchar(255),
    engine_version varchar(255) ,
    css_grade char(2)
)


INSERT INTO browser VALUES ('Gecko', 'Firefox 1.0', 'Win 98+/OSX.2+', '1.3', 'A');
INSERT INTO browser VALUES ('Gecko', 'Firefox 1.5', 'Win 98+/OSX.2+', '1.4', 'AB');
INSERT INTO browser VALUES ('V8 JavaScript engine', 'Mozilla 1.0', 'Win 10', '1.4', 'A');
INSERT INTO browser VALUES ('V8 JavaScript engine', 'Mozilla 1.0', 'Win 10', '1.1', 'B');