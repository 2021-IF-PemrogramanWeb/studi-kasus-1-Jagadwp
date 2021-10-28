CREATE TABLE browser (
    id SERIAL NOT NULL PRIMARY KEY,
    renderer varchar(255),
    name varchar(255),
    platform varchar(255),
    engine_version varchar(255) ,
    css_grade char(2)
)

CREATE TABLE contribution (
  student text NOT NULL,
  contribution int NOT NULL
)
--
-- Dumping data for table contribution
--

INSERT INTO contribution (student, contribution) VALUES('harry', 10),('maddy', 20), ('andy', 25), ('pandy', 10);

INSERT INTO browser(renderer, name, platform, engine_version, css_grade) VALUES ('Gecko', 'Firefox 1.1', 'Win 98+/OSX.2+', '1.1', 'A');
INSERT INTO browser(renderer, name, platform, engine_version, css_grade) VALUES ('Gecko', 'Firefox 1.2', 'Win 98+/OSX.2+', '1.2', 'AB');
INSERT INTO browser(renderer, name, platform, engine_version, css_grade) VALUES ('V8 JavaScript engine', 'Mozilla 1.0', 'Win 10', '1.3', 'A');
INSERT INTO browser(renderer, name, platform, engine_version, css_grade) VALUES ('V8 JavaScript engine', 'Mozilla 1.0', 'Win 10', '1.4', 'BC');