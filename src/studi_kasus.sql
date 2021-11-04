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

INSERT INTO contribution (student, contribution) VALUES('harry', 10),('maddy', 20), ('andy', 25), ('pandy', 10);

INSERT INTO browser(renderer, name, platform, engine_version, css_grade) VALUES ('Gecko', 'Firefox 1.1', 'Win 98+/OSX.2+', '1.1', 'A');
INSERT INTO browser(renderer, name, platform, engine_version, css_grade) VALUES ('Gecko', 'Firefox 1.2', 'Win 98+/OSX.2+', '1.2', 'AB');
INSERT INTO browser(renderer, name, platform, engine_version, css_grade) VALUES ('V8 JavaScript engine', 'Mozilla 1.0', 'Win 10', '1.3', 'A');
INSERT INTO browser(renderer, name, platform, engine_version, css_grade) VALUES ('V8 JavaScript engine', 'Mozilla 1.0', 'Win 10', '1.4', 'BC');

CREATE TABLE activity (
  id SERIAL NOT NULL PRIMARY KEY,
  time_on TIMESTAMP,
	time_off TIMESTAMP,
	ack_by varchar(255),
  reason_id INT,
  reason text
);




-- Interlock Hose Reel Front 
-- Interlock Hose Reel Rear 
-- Interlock Input Coupler Stow 
-- Interlock Input Hose Boom Stow 
-- Interlock Platform Stow
-- Interlock Platform Nozzle Left
-- Interlock Platform Nozzle Right
-- Interlock Boom Stow
-- Interlock Bonding Static Reel Front

-- Interlock Bonding Static Reel Rear
-- Interlock Bottom Loading
-- Interlock Handrail
-- PTO
-- Preventive Maintenance
-- Interlock System Fault
-- Breakdown

INSERT INTO activity (time_on, time_off, ack_by, reason_id, reason) VALUES
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulan A', 1, 'Interlock Hose Reel Front'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulan B', 1, 'Interlock Hose Reel Front'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulan C', 1, 'Interlock Hose Reel Front'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulan D', 1, 'Interlock Hose Reel Front'),
('2021-09-29 07:43:52', '2021-09-28 08:43:52', 'Mhs A', 2, 'Interlock Hose Reel Rear'),
('2021-09-29 07:43:52', '2021-09-28 08:43:52', 'Mhs B', 2, 'Interlock Hose Reel Rear'),
('2021-09-29 07:43:52', '2021-09-28 08:43:52', 'Mhs C', 2, 'Interlock Hose Reel Rear'),
('2021-09-29 07:43:52', '2021-09-28 08:43:52', 'Mhs D', 2, 'Interlock Hose Reel Rear'),
('2021-09-29 07:43:52', '2021-09-28 08:43:52', 'Mhs E', 2, 'Interlock Hose Reel Rear'),
('2021-09-29 07:43:52', '2021-09-28 08:43:52', 'Mhs F', 2, 'Interlock Hose Reel Rear'),
('2021-09-29 07:43:52', '2021-09-28 08:43:52', 'Mhs G', 2, 'Interlock Hose Reel Rear'),
('2021-09-29 07:43:52', '2021-09-28 08:43:52', 'Mhs H', 2, 'Interlock Hose Reel Rear'),
('2021-09-27 07:43:52', '2021-09-28 08:43:52', 'Mas A', 3, 'Interlock Input Coupler Stow'),
('2021-09-27 07:43:52', '2021-09-28 08:43:52', 'Mas B', 3, 'Interlock Input Coupler Stow'),
('2021-09-27 07:43:52', '2021-09-28 08:43:52', 'Mas C', 3, 'Interlock Input Coupler Stow'),
('2021-09-27 07:43:52', '2021-09-28 08:43:52', 'Mas D', 3, 'Interlock Input Coupler Stow'),
('2021-09-27 07:43:52', '2021-09-28 08:43:52', 'Mas E', 3, 'Interlock Input Coupler Stow'),
('2021-09-1 07:43:52', '2021-09-28 08:43:52', 'Kak A', 4, 'Interlock Input Hose Boom Stow'),
('2021-09-1 07:43:52', '2021-09-28 08:43:52', 'Kak B', 4, 'Interlock Input Hose Boom Stow'),
('2021-09-2 07:43:52', '2021-09-28 08:43:52', 'Mbak A', 5, 'Interlock Platform Stow'),
('2021-09-2 07:43:52', '2021-09-28 08:43:52', 'Mbak B', 5, 'Interlock Platform Stow'),
('2021-09-3 07:43:52', '2021-09-28 08:43:52', 'Nona A', 6, 'Interlock Platform Nozzle Left'),
('2021-09-3 07:43:52', '2021-09-28 08:43:52', 'Nona B', 6, 'Interlock Platform Nozzle Left'),
('2021-09-3 07:43:52', '2021-09-28 08:43:52', 'Nona C', 6, 'Interlock Platform Nozzle Left'),
('2021-09-3 07:43:52', '2021-09-28 08:43:52', 'Nona D', 6, 'Interlock Platform Nozzle Left'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Hyung A', 7, 'Interlock Platform Nozzle Right'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Hyung B', 7, 'Interlock Platform Nozzle Right'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Hyung C', 7, 'Interlock Platform Nozzle Right'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Hyung D', 7, 'Interlock Platform Nozzle Right'),
('2021-09-2; 07:43:52', '2021-09-28 08:43:52', 'Bang A', 8, 'Interlock Boom Stow'),
('2021-09-2; 07:43:52', '2021-09-28 08:43:52', 'Bang A', 8, 'Interlock Boom Stow'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulanah A', 9, 'Interlock Bonding Static Reel Front'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulanah B', 9, 'Interlock Bonding Static Reel Front'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Bro A', 10, 'Interlock Bonding Static Reel Rear'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Bro B', 10, 'Interlock Bonding Static Reel Rear'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Papoy A', 11, 'Interlock Bottom Loading'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Papoy B', 11, 'Interlock Bottom Loading'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Papoy C', 11, 'Interlock Bottom Loading'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Irfan', 12, 'Interlock Handrail'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Jiji A', 13, 'PTO'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Jiji B', 13, 'PTO'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Bruh', 14, 'Preventive Maintenance'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Adek A', 15, 'Interlock System Fault'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Adek B', 15, 'Interlock System Fault'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulani A', 16, 'Breakdown'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulani B', 16, 'Breakdown'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulani C', 16, 'Breakdown'),
('2021-09-28 07:43:52', '2021-09-28 08:43:52', 'Fulani D', 16, 'Breakdown');