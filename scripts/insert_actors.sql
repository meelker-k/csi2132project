﻿set search_path = "CSI2132 Project";

insert into Actor(actor_id, last_name, first_name, date_of_birth)
--Shawshank Redemption
values (100, 'Robbins', 'Tim', '1958-10-16'),
       (101, 'Freeman', 'Morgan', '1937-06-01'),
       (102, 'Gunton', 'Bob', '1945-11-15'),
       (103, 'Sadler', 'William', '1950-04-13'),
       (104, 'Brown', 'Clancy', '1959-01-05'),
       (105, 'Bellows', 'Gil', '1967-06-28'),
       (106, 'Rolston', 'Mark', '1956-12-07'),
       (107, 'Whitmore', 'James', '1921-10-01'),
       (108, 'Jeffrey', 'DeMunn', '1947-04-25'),
       (109, 'Brandenburg', 'Larry', '1948-05-03'),
       (110, 'Giuntoli', 'Neil', '1959-12-20'),
       (111, 'Libby', 'Brian', null),
       (112, 'Proval', 'David', '1942-05-20'),
       (113, 'Ragno', 'Joseph', '1936-03-11'),
       (114, 'Ciccolella', 'Jude', '1947-11-30'),
       (115, 'Brando', 'Marlon', '1924-04-03'),
       --Godfather
       (116, 'Pacino', 'Al', '1940-04-25'),
       (117, 'Caan', 'James', '1940-03-26'),
       (118, 'Castellano', 'Richard S.', '1933-09-04'),
       (119, 'Duvall', 'Robert', '1931-01-05'),
       (120, 'Hayden', 'Sterling', '1916-03-26'),
       (121, 'Marley', 'John', '1907-10-17'),
       (122, 'Conte', 'Richard', '1910-03-24'),
       (123, 'Lettieri', 'Al', '1928-02-24'),
       (124, 'Keaton', 'Diane', '1946-01-05'),
       (125, 'Vigoda', 'Abe', '1921-02-24'),
       (126, 'Shire', 'Talia', '1946-04-25'),
       (127, 'Russo', 'Gianni', '1943-12-12'),
       (128, 'Cazale', 'John', '1978-03-12'),
       (129, 'Bond', 'Rudy', '1912-10-01'),
       --Godfather II
       (130, 'De Niro', 'Robert', '1943-08-17'),
       (131, 'Strasberg', 'Lee', '1901-11-17'),
       (132, 'Gazzo', 'Michael V.', '1923-04-05'),
       (133, 'Spradlin', 'G.D.', '1920-08-31'),
       (134, 'Bright', 'Richard', '1937-06-28'),
       (135, 'Moschin', 'Gastone', '1929-06-08'),
       (136, 'Rosqui', 'Tom', '1928-06-12'),
       (137, 'Kirby', 'Bruno', '1949-04-28'),
       (138, 'Sivero', 'Frank', '1952-01-06'),
       (139, 'De Sapio', 'Francesca', '1945-08-16'),
       --The Dark Knight
       (140, 'Bale', 'Christian', '1974-01-30'),
       (141, 'Ledger', 'Heath', '1979-04-04'),
       (142, 'Eckhart', 'Aaron', '1968-03-12'),
       (143, 'Caine', 'Michael', '1933-03-14'),
       (144, 'Gyllenhaal', 'Maggie', '1977-11-16'),
       (145, 'Oldman', 'Gary', '1958-03-21'),
       (146, 'Curnen', 'Monique Gabriela', '1970-09-07'),
       (147, 'Dean', 'Ron', null),
       (148, 'Murphy', 'Cillian', '1976-05-25'),
       (149, 'Han', 'Chin', '1969-11-27'),
       (150, 'Carbonell', 'Nestor', '1967-12-01'),
       (151, 'Roberts', 'Eric', '1956-04-18'),
       (152, 'Coster', 'Ritchie', '1967-07-01'),
       (153, 'Hall', 'Anthony Michael', '1968-04-14'),
       --Schindler's List
       (154, 'Neeson', 'Liam', '1952-06-07'),
       (155, 'Kingsley', 'Ben', '1943-12-31'),
       (156, 'Fiennes', 'Ralph', '1962-12-22'),
       (157, 'Goodall', 'Caroline', '1959-11-13'),
       (158, 'Sagall', 'Jonathan', '1959-04-23'), 
       (159, 'Davidtz', 'Embeth', '1965-08-11'),
       (160, 'Gebel', 'Malgorzata', '1955-11-30'),
       (161, 'Levy', 'Shmuel', null),
       (162, 'Ivanir', 'Mark', '1968-09-06'),
       (163, 'Macola', 'Béatrice', '1965-12-02'),
       (164, 'Seweryn', 'Andrzej', '1946-04-25'),
       (165, 'von Thun', 'Friedrich', '1942-06-30'),
       (166, 'Luft', 'Krzysztof', '1958-01-05'),
       (167, 'Nehring', 'Harry', null),
       (168, 'Weisser', 'Norbert', '1946-07-09'),
       --12 Angry Men (1957)
       (169, 'Balsam', 'Martin', '1919-11-04'),
       (170, 'Fiedler', 'John', '1925-02-03'),
       (171, 'Cobb', 'Lee J.', '1911-12-08'),
       (172, 'Marshall', 'E.G.', '1914-06-18'),
       (173, 'Klugman', 'Jack', '1922-04-27'),
       (174, 'Binns', 'Edward', '1916-09-12'),
       (175, 'Warden', 'Jack', '1920-09-18'),
       (176, 'Fonda', 'Henry', '1905-05-16'),
       (177, 'Sweeney', 'Joseph', '1882-07-26'),
       (178, 'Begley', 'Ed', '1901-03-25'),
       (179, 'Voskovec', 'George', '1905-06-19'),
       (180, 'Webber', 'Robert', '1924-10-14'),
       --Pulp Fiction
       (181, 'Roth', 'Tim', '1961-05-14'),
       (182, 'Plummer', 'Amanda', '1957-03-23'),
       (183, 'Lovelace', 'Laura', null),
       (184, 'Travolta', 'John', '1954-02-18'),
       (185, 'Jackson', 'Samuel L.', '1948-12-21'),
       (186, 'LaMarr', 'Phil', '1967-01-24'),
       (187, 'Whaley', 'Frank', '1963-07-03'),
       (188, 'Steers', 'Burr', '1965-10-08'),
       (189, 'Willis', 'Bruce', '1955-03-19'),
       (190, 'Rhames', 'Ving', '1959-05-12'),
       (191, 'Calderon', 'Paul', null),
       (192, 'Gallagher', 'Bronagh', null),
       (193, 'Arquette', 'Rosanna', '1959-08-10'),
       (194, 'Stoltz', 'Eric', '1961-09-30'),
       (195, 'Thurman', 'Uma', '1970-04-29'),
       --LOTR: Return of the King
       (196, 'Appleby', 'Noel', null),
       (197, 'Astin', 'Ali', '1996-11-27'),
       (198, 'Astin', 'Sean', '1971-02-25'),
       (199, 'Aston', 'David', null),
       (200, 'Bach', 'John', '1946-06-05'),
       (201, 'Bean', 'Sean', '1959-04-17'),
       (202, 'Blanchett', 'Cate', '1969-05-14'),
       (203, 'Bloom', 'Orlando', '1977-01-13'),
       (204, 'Boyd', 'Billy', '1968-08-28'),
       (205, 'Brophy', 'Sadwyn', null),
       (206, 'Browning', 'Alistair', null),
       (207, 'Csokas', 'Marton', '1966-06-30'),
       (208, 'Hill', 'Bernard', '1944-12-17'),
       (209, 'Holm', 'Ian', '1931-09-12'),
       (210, 'Hopkins', 'Bruce', '1955-11-25'),
       (211, 'Hughes', 'Ian', '1969-04-08'),
       (212, 'Makoare', 'Lawrence', '1968-03-20'),
       (213, 'McKellen', 'Ian', '1939-05-25'),
       (214, 'McLeod', 'Sarah', '1971-07-18'),
       (215, 'McLeod-Riera', 'Maisy', '1999-05-25'),
       (216, 'Monaghan', 'Dominic', '1976-12-08'),
       (217, 'Mortenson', 'Viggo', '1958-10-20'),
       (218, 'Noble', 'John', '1948-08-20'),
       (219, 'Norell', 'Paul', '1952-02-11'),
       (220, 'Otto', 'Miranda', '1967-12-16'),
       (221, 'Phillips', 'Bruce', '1951-09-13'),
       (222, 'Rhys-Davies', 'John', '1944-05-05'),
       (223, 'Robins', 'Thomas', null),
       (224, 'Serkis', 'Andy', '1964-04-20'),
       (225, 'Sinclair', 'Harry', null),
       (226, 'Tait', 'Peter', null),
       (227, 'Tyler', 'Liv', '1977-07-01'),
       (228, 'Urban', 'Karl', '1972-06-07'),
       (229, 'Ure', 'Stephen', '1958-03-28'),
       (230, 'Weaving', 'Hugo', '1960-04-04'),
       (231, 'Wenham', 'David', '1965-09-21'),
       (232, 'Wood', 'Elijah', '1981-01-28'),
       (233, 'Howard', 'Alan', '1937-08-05'),
       (234, 'Dourif', 'Brad', '1950-03-18'),
       (235, 'Lee', 'Christopher', '1922-05-27'),
       --The Good, the Bad and the Ugly
       (236, 'Wallach', 'Eli', '1915-12-07'),
       (237, 'Eastwood', 'Clint', '1930-05-31'),
       (238, 'Van Cleef', 'Lee', '1989-12-16'),
       (239, 'Giuffrè', 'Aldo', '1924-04-10'),
       (240, 'Pistilli', 'Luigi', '1929-07-19'),
       (241, 'Rassimov', 'Rada', null),
       (242, 'Petito', 'Enzo', '1897-07-24'),
       (243, 'Bartha', 'John', null),
       (244, 'Lorenzon', 'Livio', '1923-05-06'),
       (245, 'Casale', 'Antonio', null),
       (246, 'Casas', 'Antonio', '1911-11-11'),
       (247, 'Rojo', 'Antonio Molino', '1926-09-14'),
       (248, 'Brega', 'Mario', '1923-03-05'),
       --Fight Club
       (249, 'Norton', 'Edward', '1969-08-18'),
       (250, 'Pitt', 'Brad', '1963-12-18'),
       (251, 'Loaf', 'Meat', '1947-09-27'),
       (252, 'Grenier', 'Zach', '1954-02-12'),
       (253, 'Arquette', 'Richmond', '1963-08-21'),
       (254, 'Andrews', 'David', '1952-11-02'),
       (255, 'Maguire', 'George', '1946-12-04'),
       (256, 'Bondurant', 'Eugenie', '1961-04-27'),
       (257, 'Carter', 'Helena Bonham', '1966-05-26'),
       (258, 'Cabot', 'Christina', '1969-12-16'),
       (259, 'Colston', 'Sydney', null),
       (260, 'Singer', 'Rachel', null),
       (261, 'Cronenweth', 'Christie', '1968-08-01'),
       (262, 'DeZarn', 'Tim', '1952-07-11'),
       (263, 'Buzzington', 'Ezra', null),
       --LOTR: Fellowship of the Ring
       (264, 'Baker', 'Sala', '1976-09-22'),
       (265, 'Edwards', 'Megan', '1963-06-09'),
       (266, 'Elsworth', 'Michael', '1932-06-12'),
       (267, 'Ferguson', 'Mark', '1961-02-28'),
       --Star Wars: Empire Strikes Back
       (268, 'Hamill', 'Mark', '1951-09-25'),
       (269, 'Ford', 'Harrison', '1942-07-13'),
       (270, 'Fisher', 'Carrie', '1956-10-21'),
       (271, 'Williams', 'Billy Dee', '1937-04-06'),
       (272, 'Daniels', 'Anthony', '1946-02-21'),
       (273, 'Prowse', 'David', '1935-07-01'),
       (274, 'Mayhew', 'Peter', '1944-05-19'),
       (275, 'Baker', 'Kenny', '1934-08-24'),
       (276, 'Oz', 'Frank', '1944-05-25'),
       (278, 'Guinness', 'Alec', '1914-04-02'),
       (279, 'Bulloch', 'Jeremy', '1945-02-16'),
       (280, 'Hollis', 'John', '1931-01-24'),
       (281, 'Purvis', 'Jack', null),
       (282, 'Webb', 'Des', null),
       (283, 'Revill', 'Clive', '1930-04-18'),
       --Forrest Gump
       (284, 'Hanks', 'Tom', '1956-07-09'),
       (285, 'Field', 'Sally', '1946-11-06'),
       (286, 'Humphreys', 'Michael Conner', null),
       (287, 'Dobson', 'Peter', '1964-07-19'),
       (288, 'Hall', 'Hanna', '1984-07-09'),
       (289, 'Wright', 'Robin', '1966-04-08'),
       (290, 'Williamson', 'Mykelti', '1957-03-04'),
       (291, 'Sinise', 'Gary', '1955-03-17'),
       --Inception
       (292, 'DiCaprio', 'Leonardo', '1974-11-11'),
       (293, 'Gordon-Levitt', 'Joseph', '1981-02-17'),
       (294, 'Page', 'Ellen', '1987-02-21'),
       (295, 'Hardy', 'Tom', '1977-09-15'),
       (296, 'Watanabe', 'Ken', '1959-10-21'),
       (297, 'Rao', 'Dileep', '1973-07-29'),
       (298, 'Berenger', 'Tom', '1949-05-31'),
       (299, 'Cotillard', 'Marion', '1975-09-30'),
       (300, 'Postlethwaite', 'Pete', '1946-02-07'),
       (301, 'Haas', 'Lukas', '1976-04-16'),
       (302, 'Lee', 'Tai-Li', null),
       --LOTR: The Two Towers
       (303, 'Comery', 'Sam', null),
       (304, 'Gittins', 'Calum', '1986-07-16'),
       (305, 'Strewe', 'Paris Howe', null),
       --One Flew Over the Cuckoo's Nest
       (306, 'Berryman', 'Michael', '1948-09-04'),
       (307, 'Brocco', 'Peter', '1903-01-16'),
       (308, 'Brooks', 'Dean R.', '1916-07-22'),
       (309, 'Brown', 'Alonzo', null),
       (310, 'Crothers', 'Scatman', '1910-05-23'),
       (311, 'Cumbuka', 'Mwako', '1950-09-01'),
       (312, 'Fletcher', 'Louise', '1934-07-22'),
       (313, 'Nicholson', 'Jack', '1937-04-22'),
       (314, 'Sampson', 'Will', '1933-09-27'),
       (315, 'Dourif', 'Brad', '1950-03-18'),
       --Goodfellas
       (316, 'Liotta', 'Ray', '1954-12-18'),
       (317, 'Pesci', 'Joe', '1943-02-09'),
       (318, 'Bracco', 'Lorraine', '1954-10-02'),
       (319, 'Sorvino', 'Paul', '1939-04-13'),
       (320, 'Darrow', 'Tony', '1938-10-01'),
       (321, 'Starr', 'Mike', '1950-07-29'),
       (322, 'Vincent', 'Frank', '1939-08-04'),
       (323, 'Low', 'Chuck', '1937-12-01'),
       (324, 'DiLeo', 'Frank', '1947-10-23'),
       (325, 'Youngman', 'Henny', '1906-03-16'),
       (326, 'Mastrogiacomo', 'Gino', '1961-11-05'),
       (327, 'Scorsese', 'Catherine', '1912-04-16'),
       (328, 'Scorsese', 'Charles', '1913-05-08'),
       --The Matrix
       (329, 'Reeves', 'Keanu', '1964-09-02'),
       (330, 'Fishburne', 'Laurence', '1961-07-30'),
       (331, 'Moss', 'Carrie-Anne', '1967-08-21'),
       (332, 'Weaving', 'Hugo', '1960-04-04'),
       (333, 'Foster', 'Gloria', '1933-11-15'),
       (334, 'Pantoliano', 'Joe', '1951-09-12'),
       (335, 'Chong', 'Marcus', '1967-07-08'),
       (336, 'Arahanga', 'Julian', '1972-12-18'),
       (337, 'Doran', 'Matt', '1976-03-30'),
       (338, 'McClory', 'Belinda', null),
       (339, 'Parker', 'Anthony Ray', '1958-05-13'),
       (340, 'Goddard', 'Paul', null),
       (341, 'Taylor', 'Robert', null),
       (342, 'Gray', 'Marc Aden', null),
       --Seven Samurai
       (343, 'Mifune', 'Toshiro', '1920-04-01'),
       (344, 'Shimura', 'Takashi', '1905-03-12'),
       (345, 'Tsushima', 'Keiko', '1926-02-07'),
       (346, 'Shimazaki', 'Yukiko', '1931-02-25'),
       (347, 'Fujiwara', 'Kamatari', '1905-01-15'),
       (348, 'Kato', 'Daisuke', '1910-02-18'),
       (349, 'Kimura', 'Isao', '1923-06-22'),
       (350, 'Chiaki', 'Minoru', '1917-07-30'),
       (351, 'Miyaguchi', 'Seiji', '1913-11-15'),
       (352, 'Kosugi', 'Yoshio', '1903-09-15'),
       (353, 'Hidari', 'Bokuzen', '1894-02-20'),
       (354, 'Inabi', 'Yoshio', '1920-07-15'),
       (355, 'Tsuchiya', 'Yoshio', '1927-05-18'),
       (356, 'Kodo', 'Kokuten', '1887-01-29'),
       (357, 'Tono', 'Eijiro', '1907-09-17'),
       --Star Wars: A New Hope
       (358, 'Cushing', 'Peter', '1913-05-26'),
       (359, 'Brown', 'Phil', '1916-04-30'),
       (360, 'Fraser', 'Shelagh', '1920-11-25'),
       (361, 'McCrindle', 'Alex', '1911-08-03'),
       (362, 'Byrne', 'Eddie', '1911-01-31'),
       (363, 'Henley', 'Drewe', null),
       --City of God
       (364, 'Rodrigues', 'Alexandre', '1983-05-21'),
       (365, 'Firmino', 'Leandro', '1978-06-23'),
       (366, 'Haagenson', 'Phellipe', null),
       (367, 'Silva', 'Douglas', null),
       (368, 'Haagensen', 'Jonathan', '1983-02-23'),
       (369, 'Nachtergaele', 'Matheus', '1969-01-03'),
       (370, 'Jorge', 'Seu', '1970-06-08'),
       (371, 'Suplino', 'Jefechander', null),
       (372, 'Braga', 'Alice', '1983-04-15'),
       (373, 'Gomes', 'Emerson', null),
       (374, 'Oliveira', 'Edson', null),
       (375, 'de Souza', 'Michel', null),
       (376, 'Rodrigues', 'Roberta', '1982-10-20'),
       (377, 'Otávio', 'Luis', null),
       (378, 'Marques', 'Maurício', null),
       --Se7en
       (379, 'Walker', 'Andrew Kevin', '1964-08-14'),
       (380, 'Zacapa', 'Daniel', '1951-07-19'),
       (381, 'Paltrow', 'Gwyneth', '1972-09-27'),
       (382, 'Cassini', 'John', null),
       (383, 'Mack', 'Bob', null),
       (384, 'Crombie', 'Peter', null),
       (385, 'Cathey', 'Reg E.', '1958-08-18'),
       (386, 'Ermey', 'R. Lee', '1944-03-24'),
       (387, 'Christy', 'George', null),
       (388, 'Hules', 'Endre', null),
       (389, 'James', 'Hawthorne', null),
       (390, 'Davidson', 'William', null),
       (391, 'Collins', 'Bob', null),
       --Silence of the Lambs
       (392, 'Foster', 'Jodie', '1962-11-19'),
       (393, 'Bonney', 'Lawrence A.', null),
       (394, 'Lemmons', 'Kasi', '1961-02-24'),
       (395, 'Wrentz', 'Lawrence T.', '1954-02-09'),
       (396, 'Glenn', 'Scott', '1941-01-26'),
       (397, 'Heald', 'Anthony', '1944-08-25'),
       (398, 'Faison', 'Frankie', '1949-06-10'),
       (399, 'Brockett', 'Don', '1930-01-30'),
       (400, 'Seals, Jr.', 'Frank', null),
       (401, 'Rudin', 'Stuart', '1941-12-16'),
       (402, 'Hopkins', 'Anthony', '1937-12-31'),
       (403, 'Skorobogatov', 'Maria', null),
       (404, 'Lane', 'Jeffrie', null),
       (405, 'Lensky', 'Leib', '1903-12-15'),
       (406, 'Schwartz', 'George', null),
       --It's a Wonderful Life
       (407, 'Stewart', 'James', '1908-05-20'),
       (408, 'Reed', 'Donna', '1921-01-27'),
       (409, 'Barrymore', 'Lionel', '1878-04-28'),
       (410, 'Mitchell', 'Thomas', '1892-07-11'),
       (411, 'Travers', 'Henry', '1874-03-05'),
       (412, 'Bondi', 'Beulah', '1889-05-03'),
       (413, 'Faylen', 'Frank', '1905-12-08'),
       (414, 'Bond', 'Ward', '1903-04-09'),
       (415, 'Grahame', 'Gloria', '1923-11-28'),
       (416, 'Warner', 'H.B.', '1875-10-26'),
       (417, 'Karns', 'Todd', '1921-01-15'),
       (418, 'Hinds', 'Samuel S.', '1875-04-04'),
       (419, 'Treen', 'Mary', '1907-03-27'),
       (420, 'Albertson', 'Frank', '1909-02-02'),
       (421, 'Patton', 'Virginia', '1926-06-25'),
       --The Usual Suspects
       (422, 'Baldwin', 'Stephen', '1966-05-12'),
       (423, 'Byrne', 'Gabriel', '1950-05-12'),
       (424, 'Del Toro', 'Benicio', '1967-02-19'),
       (425, 'Pollak', 'Kevin', '1957-10-30'),
       (426, 'Spacey', 'Kevin', '1959-07-26'),
       (427, 'Palminteri', 'Chazz', '1952-05-12'),
       (428, 'Amis', 'Suzy', '1962-01-05'),
       (429, 'Esposito', 'Giancarlo', '1958-04-26'),
       (430, 'Hedaya', 'Dan', '1940-07-24'),
       (431, 'Bartel', 'Paul', '1938-08-06'),
       (432, 'Bressler', 'Carl', null),
       (433, 'Simon', 'Phillipe', null),
       (434, 'Shearer', 'Jack', null),
       (435, 'Estabrook', 'Christine', '1952-09-13'),
       --Life is Beautiful
       (436, 'Benigni', 'Roberto', '1952-10-27'),
       (437, 'Braschi', 'Nicoletta', '1960-04-19'),
       (438, 'Cantarini', 'Giorgio', '1992-04-12'),
       (439, 'Durano', 'Giustino', '1923-05-05'),
       (440, 'Bustric', 'Sergio Bini', null),
       (441, 'Paredes', 'Marisa', '1946-04-03'),
       (442, 'Buchholz', 'Horst', '1933-12-04'),
       (443, 'Lojodice', 'Giuliana', '1940-08-12'),
       (444, 'Fontani', 'Amerigo', '1955-06-15'),
       (445, 'De Silva', 'Pietro', '1964-12-28'),
       (446, 'Guzzo', 'Francesco', null),
       (447, 'Lebboroni', 'Raffaella', null),
       (448, 'Alfonsi', 'Claudio', null),
       (449, 'Baroni', 'Gil', '1937-03-13'),
       (450, 'Bianchi', 'Massimo', '1955-05-08'),
       --Léon: The Professional
       (451, 'Reno', 'Jean', '1948-07-30'),
       (452, 'Portman', 'Natalie', '1981-06-09'),
       (453, 'Aiello', 'Danny', '1933-06-20'),
       (454, 'Appel', 'Peter', '1959-10-19'),
       (455, 'One Blood', 'Willi', null),
       (456, 'Creech', 'Don', null),
       (457, 'Glascoe', 'Keith A.', '1962-12-09'),
       (458, 'Scott', 'Randolph', null),
       (459, 'Badalucco', 'Michael', '1954-12-20'),
       (460, 'Greene', 'Ellen', '1951-02-22'),
       (461, 'Regen', 'Elizabeth', '1975-03-12'),
       (462, 'Matusovich', 'Carl J.', null),
       (463, 'Senger', 'Frank', '1954-12-10'),
       (464, 'Cherokee', 'Lucius Wyatt', null),
       --Once Upon a Time in the West
       (465, 'Cardinale', 'Claudia', '1938-04-15'),
       (466, 'Robards', 'Jason', '1922-07-26'),
       (467, 'Bronson', 'Charles', '1921-11-03'),
       (468, 'Ferzetti', 'Gabriele', '1925-03-17'),
       (469, 'Stoppa', 'Paolo', '1906-06-06'),
       (470, 'Strode', 'Woody', '1914-07-25'),
       (471, 'Elam', 'Jack', '1920-11-13'),
       (472, 'Wynn', 'Keenan', '1916-07-27'),
       (473, 'Wolff', 'Frank', '1928-05-11'),
       (474, 'Stander', 'Lionel', '1908-01-11'),
       --Spirited Away
       (475, 'Hiiragi', 'Rumi', '1987-08-01'),
       (476, 'Irino', 'Miyu', '1988-02-19'),
       (477, 'Natsuki', 'Mari', '1952-05-02'),
       (478, 'Naito', 'Takashi', '1955-05-27'),
       (479, 'Sawaguchi', 'Yasuko', '1965-06-11'),
       (480, 'Gashuin', 'Tatsuya', '1950-12-10'),
       (481, 'Kamiki', 'Ryunosuke', '1993-05-19'),
       (482, 'Tamai', 'Yumi', null),
       (483, 'Oizumi', 'Yo', '1973-04-03'),
       (484, 'Hayashi', 'Koba', '1935-07-27'),
       (485, 'Kamijo', 'Tsunehiko', '1940-03-07'),
       (486, 'Ono', 'Takehiko', '1942-08-01'),
       (487, 'Sugawara', 'Bunta', '1933-08-16'),
       --Saving Private Ryan
       (488, 'Sizemore', 'Tom', '1961-11-29'),
       (489, 'Burns', 'Edward', '1968-01-29'),
       (490, 'Pepper', 'Barry', '1970-04-04'),
       (491, 'Goldberg', 'Adam', '1970-10-25'),
       (492, 'Diesel', 'Vin', '1967-07-18'),
       (493, 'Ribisi', 'Giovanni', '1974-12-17'),
       (494, 'Davies', 'Jeremy', '1969-10-08'),
       (495, 'Damon', 'Matt', '1970-10-08'),
       (496, 'Danson', 'Ted', '1947-12-29'),
       (497, 'Giamatti', 'Paul', '1967-06-06'),
       (498, 'Farina', 'Dennis', '1944-02-29'),
       (499, 'Stadler', 'Joerg', null),
       (500, 'Martini', 'Max', '1969-12-11'),
       (501, 'Bruno', 'Dylan', '1972-09-06'),
       --Interstellar
       (502, 'Burstyn', 'Ellen', '1932-12-07'),
       (503, 'McConaughey', 'Matthew', '1969-11-04'),
       (504, 'Foy', 'Mackenzie', '2000-11-10'),
       (505, 'Lithgow', 'John', '1945-10-19'),
       (506, 'Chalamet', 'Timothée', null),
       (507, 'Oyelowo', 'David', '1976-04-01'),
       (508, 'Wolfe', 'Collette', '1980-04-04'),
       (509, 'McCarthy', 'Francis X.', '1942-02-15'),
       (510, 'Irwin', 'Bill', '1950-04-11'),
       (511, 'Hathaway', 'Anne', '1982-11-12'),
       (512, 'Borba', 'Andrew', null),
       (513, 'Bentley', 'Wes', '1978-09-04'),
       (514, 'Devane', 'William', '1939-09-05'),
       (515, 'Gyasi', 'David', '1980-01-02'),
       --Casablanca
       (516, 'Bogart', 'Humphrey', '1899-12-25'),
       (517, 'Bergman', 'Ingrid', '1915-08-29'),
       (518, 'Henreid', 'Paul', '1908-01-10'),
       (519, 'Rains', 'Claude', '1889-11-10'),
       (520, 'Veidt', 'Conrad', '1893-01-22'),
       (521, 'Greenstreet', 'Sydney', '1879-12-27'),
       (522, 'Lorre', 'Peter', '1904-06-26'),
       (523, 'Sakall', 'S.Z.', '1883-02-02'),
       (524, 'Madeleine', 'Lebeau', '1923-06-10'),
       (525, 'Wilson', 'Dooley', '1886-04-03'),
       (526, 'Page', 'Joy', '1924-11-09'),
       (527, 'Qualen', 'John', '1899-12-08'),
       (528, 'Kinskey', 'Leonid', '1903-04-18'),
       (529, 'Bois', 'Curt', '1901-04-05'),
       --American History X
       (530, 'Furlong', 'Edward', '1977-08-02'),
       (531, 'D''Angelo', 'Beverly', '1951-11-15'),
       (532, 'Lien', 'Jennifer', '1974-08-24'),
       (533, 'Suplee', 'Ethan', '1976-05-25'),
       (534, 'Balk', 'Fairuza', '1974-05-21'),
       (535, 'Brooks', 'Avery', '1948-10-02'),
       (536, 'Gould', 'Elliott', '1938-08-29'),
       (537, 'Keach', 'Stacy', '1941-06-02'),
       (538, 'Russ', 'William', '1950-10-20'),
       (539, 'Torry', 'Guy', '1969-01-05'),
       (540, 'Cortese', 'Joe', '1948-02-22'),
       (541, 'Smith', 'Jason Bose', null),
       (542, 'Lyons', 'Antonio David', null),
       (543, 'Sol', 'Alex', null),
       --City Lights
       (544, 'Cherrill', 'Virginia', '1908-04-12'),
       (545, 'Lee', 'Florence', null),
       (546, 'Myers', 'Harry', '1882-09-05'),
       (547, 'Garcia', 'Al Ernest', '1887-03-11'),
       (548, 'Mann', 'Hank', '1887-05-28'),
       (549, 'Chaplin', 'Charles', '1889-04-16'),
       --Psycho(1960)
       (550, 'Perkins', 'Anthony', '1932-04-04'),
       (551, 'Miles', 'Vera', '1929-08-23'),
       (552, 'Gavin', 'John', '1931-04-08'),
       (553, 'Leigh', 'Janet', '1927-07-06'),
       (554, 'Balsam', 'Martin', '1919-11-04'),
       (555, 'McIntire', 'John', '1907-06-27'),
       (556, 'Oakland', 'Simon', '1915-08-28'),
       (557, 'Albertson', 'Frank', '1909-02-02'),
       (558, 'Hitchcock', 'Patricia', '1928-07-07'),
       (559, 'Taylor', 'Vaughn', '1911-02-22'),
       (560, 'Tuttle', 'Lurene', '1907-08-29'),
       (561, 'Anderson', 'John', '1922-10-20'),
       (562, 'Mills', 'Mort', '1919-01-11'),
       --Raiders of the Lost Ark
       (563, 'Allen', 'Karen', '1951-10-05'),
       (564, 'Freeman', 'Paul', '1943-01-18'),
       (565, 'Lacey', 'Ronald', '1935-09-28'),
       (566, 'Elliott', 'Denholm', '1922-05-31'),
       (567, 'Molina', 'Alfred', '1953-05-24'),
       (568, 'Kahler', 'Wolf', '1940-04-03'),
       (569, 'Higgins', 'Anthony', '1947-05-09'),
       (570, 'Tablian', 'Vic', null),
       (571, 'Fellows', 'Don', '1922-12-02'),
       (572, 'Hootkins', 'William', '1948-07-05'),
       (573, 'Reimbold', 'Bill', null),
       (574, 'Sorenson', 'Fred', null),
       (575, 'Durkin', 'Patrick', '1936-06-09'),
       --Rear Window(1954)
       (576, 'Kelly', 'Grace', '1929-11-12'),
       (577, 'Corey', 'Wendell', '1914-03-20'),
       (578, 'Ritter', 'Thelma', '1902-02-14'),
       (579, 'Burr', 'Raymond', '1917-05-21'),
       (580, 'Evelyn', 'Judith', '1913-03-20'),
       (581, 'Bagdasarian', 'Ross', '1919-01-27'),
       (582, 'Darcy', 'Georgine', '1931-01-14'),
       (583, 'Berner', 'Sara', '1912-01-12'),
       (584, 'Cady', 'Frank', '1915-09-08'),
       (585, 'Fax', 'Jesslyn', '1893-01-02'),
       (586, 'Harper', 'Rand', '1929-08-07'),
       (587, 'Winston', 'Irene', '1916-07-18'),
       (588, 'Davenport', 'Havis', '1933-04-25'),
       --The Intouchables
       (589, 'Cluzet', 'François', '1955-09-21'),
       (590, 'Sy', 'Omar', '1978-01-20'),
       (591, 'Le Ny', 'Anne', null),
       (592, 'Fleurot', 'Audrey', '1977-07-06'),
       (593, 'de Meaux', 'Joséphine', '1977-01-23'),
       (594, 'Mollet', 'Clotilde', null),
       (595, 'Bellugi', 'Alba Gaïa Kraghede', null),
       (596, 'Mendy', 'Cyril', null),
       (597, 'Kamate', 'Salimata', null),
       (598, 'Toure', 'Absa Diatou', null),
       (599, 'Oestermann', 'Grégoire', null),
       (600, 'Daguier', 'Dominique', null),
       (601, 'Caron', 'François', null),
       (602, 'Ameri', 'Christian', null),
       (603, 'Solivéres', 'Thomas', null),
       --Modern Times
       (604, 'Goddard', 'Paulette', '1910-06-03'),
       (605, 'Bergman', 'Henry', '1868-02-23'),
       (606, 'Sandford', 'Tiny', '1894-02-26'),
       (607, 'Conklin', 'Chester', '1886-01-11'),
       (608, 'Blystone', 'Stanley', '1894-08-01'),
       (609, 'Alexander', 'Richard', '1902-11-19'),
       (610, 'Reynolds', 'Cecil', '1880-11-24'),
       (611, 'McKinney', 'Mira', '1892-10-23'),
       (612, 'MacQuarrie', 'Murdock', '1878-08-25'),
       (613, 'Lucas', 'Wilfred', '1871-01-30'),
       (614, 'LeSaint', 'Edward', '1870-12-13'),
       (615, 'Malatesta', 'Fred', '1889-04-18'),
       --The Green Mile
       (616, 'Morse', 'David', '1953-10-11'),
       (617, 'Duncan', 'Michael Clarke', '1957-12-10'),
       (618, 'Hunt', 'Bonnie', '1961-09-22'),
       (619, 'Cromwell', 'James', '1940-01-27'),
       (620, 'Jeter', 'Michael', '1952-08-26'),
       (621, 'Greene', 'Graham', '1952-06-22'),
       (622, 'Hutchison', 'Doug', '1960-05-26'),
       (623, 'Rockwell', 'Sam', '1968-11-05'),
       (624, 'Clarkson', 'Patricia', '1959-12-29'),
       (625, 'Stanton', 'Harry Dean', '1926-07-14'),
       (626, 'Greer', 'Dabbs', '1917-04-02'),
       (627, 'Brent', 'Eve', '1929-09-11');