﻿set search_path = "CSI2132 Project";

insert into Role(role_id, name, actor_id)
--Shawshank Redemption
values (100, 'Andy Dufresne', 100),
       (101, 'Ellis Boyd ''Red'' Redding', 101),
       (102, 'Warden Norton', 102),
       (103, 'Heywood', 103),
       (104, 'Captain Hadley', 104),
       (105, 'Tommy', 105),
       (106, 'Bogs Diamond', 106),
       (107, 'Brooks Hatlen', 107),
       (108, '1946 D.A.', 108),
       (109, 'Skeet', 109),
       (110, 'Jigger', 110),
       (111, 'Floyd', 111),
       (112, 'Snooze', 112),
       (113, 'Ernie', 113),
       (114, 'Guard Mert', 114),
       --Godfather
       (115, 'Don Vito Corleone', 115),
       (116, 'Michael Corleone', 116),
       (117, 'Sonny Corleone', 117),
       (118, 'Clemenza', 118),
       (119, 'Tom Hagen', 119),
       (120, 'Capt. McCluskey', 120),
       (121, 'Jack Woltz', 121),
       (122, 'Barzini', 122),
       (123, 'Sollozzo', 123),
       (124, 'Kay Adams', 124),
       (125, 'Tessio', 125),
       (126, 'Connie', 126),
       (127, 'Carlo', 127),
       (128, 'Fredo', 128),
       (129, 'Cuneo', 129),
       --Godfather II
       (115, 'Vito Corleone', 130),
       (130, 'Hyman Roth', 131),
       (131, 'Frankie Pentangeli', 132),
       (132, 'Senator Pat Geary', 133),
       (133, 'Al Neri', 134),
       (134, 'Fanucci', 135),
       (135, 'Rocco Lampone', 136),
       (136, 'Young Clemenza', 137),
       (137, 'Genco', 138),
       (138, 'Young Mama Corleone', 139),
       --The Dark Knight
       (139, 'Bruce Wayne', 140),
       (140, 'Joker', 141),
       (141, 'Harvey Dent', 142),
       (142, 'Alfred', 143),
       (143, 'Rachel', 144),
       (144, 'Gordon', 145),
       (145, 'Lucius Fox', 101),
       (146, 'Ramirez', 146),
       (147, 'Wuertz', 147),
       (148, 'Scarecrow', 148),
       (149, 'Lau', 149),
       (150, 'Mayor', 150),
       (151, 'Maroni', 151),
       (152, 'Chechen', 152),
       (153, 'Mike Engel', 153),
       --Schindler's List
       (154, 'Oskar Schindler', 154),
       (155, 'Itzhak Stern', 155),
       (156, 'Amon Goeth', 156),
       (157, 'Emilie Schindler', 157),
       (158, 'Poldek Pfefferberg', 158),
       (159, 'Helen Hirsch', 159),
       (160, 'Wiktoria Klonowska', 160),
       (161, 'Wilek Chilowicz', 161),
       (162, 'Marcel Goldberg', 162),
       (163, 'Ingrid', 163),
       (164, 'Julian Scherner', 164),
       (165, 'Rolf Czurda', 165),
       (166, 'Herman Toffel', 166),
       (167, 'Leo John', 167),
       (168, 'Albert Hujar', 168),
       --12 Angry Men (1957)
       (169, 'Juror 1', 169),
       (170, 'Juror 2', 170),
       (171, 'Juror 3', 171),
       (172, 'Juror 4', 172),
       (173, 'Juror 5', 173),
       (174, 'Juror 6', 174),
       (175, 'Juror 7', 175),
       (176, 'Juror 8', 176),
       (177, 'Juror 9', 177),
       (178, 'Juror 10', 178),
       (179, 'Juror 11', 179),
       (180, 'Juror 12', 180),
       --Pulp Fiction
       (181, 'Pumpkin/Ringo', 181),
       (182, 'Honey Bunny/Yolanda', 182),
       (183, 'Waitress', 183),
       (184, 'Vincent Vega', 184),
       (185, 'Jules Winnfield', 185),
       (186, 'Marvin', 186),
       (187, 'Brett', 187),
       (188, 'Roger', 188),
       (189, 'Butch Coolidge', 189),
       (190, 'Marsellus Wallace', 190),
       (191, 'Paul/English Bob', 191),
       (192, 'Trudi', 192),
       (193, 'Jody', 193),
       (194, 'Lance', 194),
       (195, 'Mia Wallace', 195),
       --LOTR: Return of the King
       (196, 'Everard Proudfoot', 196),
       (197, 'Elanor Gamgee', 197),
       (198, 'Sam', 198),
       (199, 'Gondorian Soldier 3', 199),
       (200, 'Madril', 200),
       (201, 'Boromir', 201),
       (202, 'Galadriel', 202),
       (203, 'Legolas', 203),
       (204, 'Pippin', 204),
       (205, 'Eldarion', 205),
       (206, 'Damrod', 206),
       (207, 'Celeborn', 207),
       (208, 'Theoden', 208),
       (209, 'Bilbo', 209),
       (210, 'Gamling', 210),
       (211, 'Irolas', 211),
       (212, 'Witchking/Gothmog', 212),
       (213, 'Gandalf', 213),
       (214, 'Rosie Cotton', 214),
       (215, 'Baby Gamgee', 215),
       (216, 'Merry', 216),
       (217, 'Aragorn', 217),
       (218, 'Denethor', 218),
       (219, 'King of the Dead', 219),
       (220, 'Eowyn', 220),
       (221, 'Grimbold', 221),
       (222, 'Gimli', 222),
       (223, 'Deagol', 223),
       (224, 'Gollum/Smeagol', 224),
       (225, 'Isildur', 225),
       (226, 'Shagrat', 226),
       (227, 'Arwen', 227),
       (228, 'Eomer', 228),
       (229, 'Gorbag', 229),
       (230, 'Elrond', 230),
       (231, 'Faramir', 231),
       (232, 'Frodo', 232),
       (233, 'Voice of the Ring', 233),
       (234, 'Wormtongue', 234),
       (235, 'Saruman', 235),
       --The Good, the Bad and the Ugly
       (236, 'Tuco', 236),
       (237, 'Blondie', 237),
       (238, 'Sentenza/Angel Eyes', 238),
       (239, 'Alcoholic Union Captain', 239),
       (240, 'Father Pablo Ramirez', 240),
       (241, 'Maria', 241),
       (242, 'Storekeeper', 242),
       (243, 'Sheriff', 243),
       (244, 'Baker', 244),
       (245, 'Jackson/Bill Carson', 245),
       (246, 'Stevens', 246),
       (247, 'Capt. Harper', 247),
       (248, 'Cpl Wallace', 248),
       --Fight Club
       (249, 'The Narrator', 249),
       (250, 'Tyler Durden', 250),
       (251, 'Robert ''Bob'' Paulsen', 251),
       (252, 'Richard Chesler', 252),
       (253, 'Intern', 253),
       (254, 'Thomas', 254),
       (255, 'Group Leader', 255),
       (256, 'Weeping Woman', 256),
       (257, 'Marla Singer', 257),
       (255, 'Group Leader', 258),
       (258, 'Speaker', 259),
       (259, 'Chloe', 260),
       (260, 'Airline Attendant', 261),
       (261, 'Inspector Bird', 262),
       (262, 'Inspector Dent', 263),
       --LOTR: Fellowship of the Ring
       (263, 'Sauron', 264),
       (264, 'Mrs. Proudfoot', 265),
       (265, 'Gondorian Archivist', 266),
       (266, 'Gil-galad', 267),
       (267, 'Lurtz', 212),
       --Star Wars: Empire Strikes Back
       (268, 'Luke Skywalker', 268),
       (269, 'Han Solo', 269),
       (270, 'Princess Leia', 270),
       (271, 'Lando Calrissian', 271),
       (272, 'C-3PO', 272),
       (273, 'Darth Vader', 273),
       (274, 'Chewbacca', 274),
       (275, 'R2-D2', 275),
       (276, 'Yoda (voice)', 276),
       (277, 'Admiral Piett', 277),
       (278, 'Ben (Obi-Wan) Kenobi', 278),
       (279, 'Boba Fett', 279),
       (280, 'Lando''s Aide', 280),
       (281, 'Chief Ugnaught', 281),
       (282, 'Snow Creature', 282),
       (283, 'Emperor (voice)', 283),
       --Forrest Gump
       (284, 'Forrest Gump', 284),
       (285, 'Mrs. Gump', 285),
       (286, 'Young Forrest', 286),
       (287, 'Young Elvis Presley', 287),
       (288, 'Young Jenny Curran', 288),
       (289, 'Jenny Curran', 289),
       (290, 'Bubba Blue', 290),
       (291, 'Lieutenant Dan Taylor', 291),
       --Inception
       (292, 'Cobb', 292),
       (293, 'Arthur', 293),
       (294, 'Ariadne', 294),
       (295, 'Eames', 295),
       (296, 'Saito', 296),
       (297, 'Yusuf', 297),
       (298, 'Robert Fischer', 148),
       (299, 'Browning', 298),
       (300, 'Mal', 299),
       (301, 'Maurice Fischer', 300),
       (302, 'Miles', 143),
       (303, 'Nash', 301),
       (304, 'Tadashi', 302),
       --LOTR: The Two Towers
       (305, 'Eothain', 303),
       (306, 'Haleth', 304),
       (307, 'Theodred', 305),
       --One Flew Over the Cuckoo's Nest
       (308, 'Ellis', 306),
       (309, 'Col. Matterson', 307),
       (310, 'Dr. Spivey', 308),
       (311, 'Miller', 309),
       (312, 'Turkle', 310),
       (313, 'Warren', 311),
       (314, 'Nurse Ratched', 312),
       (315, 'R.P. McMurphy', 313),
       (316, 'Chief Bromden', 314),
       (317, 'Billy Bibbit', 315),
       --Goodfellas
       (318, 'James Conway', 130),
       (319, 'Henry Hill', 316),
       (320, 'Tommy DeVito', 317),
       (321, 'Karen Hill', 318),
       (322, 'Paul Cicero', 319),
       (323, 'Frankie Carbone', 138),
       (324, 'Sonny Bunz', 320),
       (325, 'Frenchy', 321),
       (326, 'Billy Batts', 322),
       (327, 'Morris Kessler', 323),
       (328, 'Tuddy Cicero', 324),
       (329, 'Henny Youngman', 325),
       (330, 'Janice Rossi', 326),
       (331, 'Tommy''s Mother', 327),
       (332, 'Vinnie', 328),
       --The Matrix
       (333, 'Neo', 329),
       (334, 'Morpheus', 330),
       (335, 'Trinity', 331),
       (336, 'Agent Smith', 332),
       (337, 'Oracle', 333),
       (338, 'Cypher', 334),
       (339, 'Tank', 335),
       (340, 'Apoc', 336),
       (341, 'Mouse', 337),
       (342, 'Switch', 338),
       (343, 'Dozer', 339),
       (344, 'Agent Brown', 340),
       (345, 'Agent Jones', 341),
       (346, 'Rhineheart', 199),
       (347, 'Choi', 342),
       --Seven Samurai
       (348, 'Kikuchiyo', 343),
       (349, 'Kambei Shimada', 344),
       (350, 'Shino', 345),
       (351, 'Wife', 346),
       (352, 'Farmer Manzo', 347),
       (353, 'Shichiroji', 348),
       (354, 'Katsushiro', 349),
       (355, 'Heihachi', 350),
       (356, 'Kyuzo', 351),
       (357, 'Farmer Mosuke', 352),
       (358, 'Farmer Yohei', 353),
       (359, 'Gorobei Katayama', 354),
       (360, 'Farmer Rikichi', 355),
       (361, 'Old Man Gisaku', 356),
       (362, 'Thief', 357),
       --Star Wars: A New Hope
       (363, 'Grand Moff Tarkin', 358),
       (364, 'Uncle Owen', 359),
       (365, 'Aunt Beru', 360),
       (366, 'Chief Jawa', 281),
       (367, 'General Dodonna', 361),
       (368, 'General Willard', 362),
       (369, 'Red Leader', 363),
       --City of God
       (370, 'Buscapé - Rocket', 364),
       (371, 'Zé Pequeno - Li''l Zé', 365),
       (372, 'Bené - Benny', 366),
       (373, 'Dadinho - Li''l Dice', 367),
       (374, 'Cabeleira - Shaggy', 368),
       (375, 'Sandro Cenoura - Carrot', 369),
       (376, 'Mané Galinha - Knockout Ned', 370),
       (377, 'Alicate - Clipper', 371),
       (378, 'Angélica', 372),
       (379, 'Barbantinho - Stringy', 373),
       (380, 'Barbantinho Adulto - Older Stringy', 374),
       (381, 'Bené Criança - Young Benny', 375),
       (382, 'Berenice - Bernice', 376),
       (383, 'Buscapé Criança - Young Rocket', 377),
       (384, 'Cabeção - Melonhead', 378),
       --Se7en
       (385, 'Somerset', 101),
       (386, 'Dead Man at 1st Crime Scene', 379),
       (387, 'Detective Taylor', 380),
       (388, 'Mills', 250),
       (389, 'Tracy', 381),
       (390, 'Officer Davis', 382),
       (391, 'Gluttony Victim', 383),
       (392, 'Dr. O''Neill', 384),
       (393, 'Dr. Santiago', 385),
       (394, 'Police Captain', 386),
       (395, 'Workman at Door of Somerset''s Office', 387),
       (396, 'Cab Driver', 388),
       (397, 'George the Night Guard at the Library', 389),
       (398, 'First Guard at the Library', 390),
       (399, 'Second Guard at the Library', 391),
       --Silence of the Lambs
       (400, 'Clarice Starling', 392),
       (401, 'FBI Instructor', 393),
       (402, 'Ardelia Mapp', 394),
       (403, 'Agent Burroughs', 395),
       (404, 'Jack Crawford', 396),
       (405, 'Dr. Frederick Chilton', 397),
       (406, 'Barney', 398),
       (407, 'Friendly Psychopath', 399),
       (408, 'Brooding Psychopath', 400),
       (409, 'Miggs', 401),
       (410, 'Dr. Hannibal Lector', 402),
       (411, 'Young Clarice', 403),
       (412, 'Clarice''s Father', 404),
       (413, 'Mr. Lang', 405),
       (414, 'Mr. Lang''s Driver', 406),
       --It's a Wonderful Life
       (415, 'George Bailey', 407),
       (416, 'Mary Hatch', 408),
       (417, 'Mr. Potter', 409),
       (418, 'Uncle Billy', 410),
       (419, 'Clarence', 411),
       (420, 'Mrs. Bailey', 412),
       (421, 'Ernie', 413),
       (422, 'Bert', 414),
       (423, 'Violet', 415),
       (424, 'Mr. Gower', 416),
       (425, 'Harry Bailey', 417),
       (426, 'Pa Bailey', 418),
       (427, 'Cousin Tilly', 419),
       (428, 'Sam Wainwright', 420),
       (429, 'Ruth Dakin', 421),
       --The Usual Suspects
       (430, 'McManus', 422),
       (431, 'Keaton', 423),
       (432, 'Fenster', 424),
       (433, 'Hockney', 425),
       (434, 'Verbal', 426),
       (435, 'Dave Kujan', 427),
       (436, 'Kobayashi', 300),
       (437, 'Edie Finneran', 428),
       (438, 'Jack Baer', 429),
       (439, 'Jeff Rabin', 430),
       (440, 'Smuggler', 431),
       (441, 'Saul Berg', 432),
       (442, 'Fortier', 433),
       (443, 'Renault', 434),
       (444, 'Dr. Plummer', 435),
       --Life is Beautiful
       (445, 'Guido', 436),
       (446, 'Dora', 437),
       (447, 'Joshua', 438),
       (448, 'Uncle Eliseo', 439),
       (449, 'Ferruccio', 440), 
       (450, 'Dora''s Mother', 441),
       (451, 'Doctor Lessing', 442),
       (452, 'School Principal', 443),
       (453, 'Rodolfo', 444),
       (454, 'Bartolomeo', 445),
       (455, 'Vittorino', 446),
       (456, 'Elena', 447),
       (457, 'Rodolfo''s Friend', 448),
       (458, 'Prefect', 449),
       (459, 'Man with Key', 450),
       --Léon: The Professional
       (460, 'Léon', 451),
       (461, 'Stansfield', 145),
       (462, 'Mathilda', 452),
       (463, 'Tony', 453),
       (464, 'Malky', 454),
       (465, '1st Stansfield Man', 455),
       (466, '2nd Stansfield Man', 456),
       (467, '3rd Stansfield Man', 457),
       (468, '4th Stansfield Man', 458),
       (469, 'Mathilda''s Father', 459),
       (470, 'Mathilda''s Mother', 460),
       (471, 'Mathilda''s Sister', 461),
       (472, 'Mathilda''s Brother', 462),
       (473, 'Fatman', 463),
       (474, 'Tonto', 464),
       --Once Upon a Time in the West
       (475, 'Jill McBain', 465),
       (476, 'Frank', 176),
       (477, 'Cheyenne', 466),
       (478, 'Harmonica', 467),
       (479, 'Morton - Railroad Baron', 468),
       (480, 'Sam', 469),
       (481, 'Stony - Member of Frank''s Gang', 470),
       (482, 'Snaky - Member of Frank''s Gang', 471),
       (483, 'Sheriff - Auctioneer', 472),
       (484, 'Brett McBain', 473),
       (485, 'Barman', 474),
       --Spirited Away
       (486, 'Chihiro Ogino/Sen (voice)', 475),
       (487, 'Haku (voice)', 476),
       (488, 'Yubaba/Zeniba (voice)', 477),
       (489, 'Akio Ogino (voice)', 478),
       (490, 'Yuko Ogino (voice)', 479),
       (491, 'Aogaeru (voice)', 480),
       (492, 'Bo (voice)', 481),
       (493, 'Rin (voice)', 482),
       (494, 'Bandai-gaeru (voice)', 483),
       (495, 'Kawa no Kami (voice)', 484),
       (496, 'Chichiyaku (voice)', 485),
       (497, 'Aniyaku (voice)', 486),
       (498, 'Kamaji (voice)', 487),
       --Saving Private Ryan
       (499, 'Captain Miller', 284),
       (500, 'Sergeant Horvath', 488),
       (501, 'Private Reiben', 489),
       (502, 'Private Jackson', 490),
       (503, 'Private Mellish', 491),
       (504, 'Private Caparzo', 492),
       (505, 'T-4 Medic Wade', 493),
       (506, 'Corporal Upham', 494),
       (507, 'Private Ryan', 495),
       (508, 'Captain Hamill', 496),
       (509, 'Sergeant Hill', 497),
       (510, 'Lieutenant Colonel Anderson', 498),
       (511, 'Steamboat Willie', 499),
       (512, 'Corporal Henderson', 500),
       (513, 'Toynbe', 501),
       --Interstellar
       (514, 'Murph (older)', 502),
       (515, 'Cooper', 503),
       (516, 'Murph (10 Yrs.)', 504),
       (517, 'Donald', 505),
       (518, 'Tom (15 Yrs.)', 506),
       (519, 'School Principal', 507),
       (520, 'Ms. Hanley', 508),
       (521, 'Boots', 509),
       (522, 'TARS (voice)', 510),
       (523, 'Brand', 511),
       (524, 'Smith', 512),
       (525, 'Doyle', 513),
       (526, 'Williams', 514),
       (527, 'Professor Brand', 143),
       (528, 'Romilly', 515),
       --Casablanca
       (529, 'Rick Blaine', 516),
       (530, 'Ilsa Lund', 517),
       (531, 'Victor Laszlo', 518),
       (532, 'Captain Louis Renault', 519),
       (533, 'Major Heinrich Strasser', 520),
       (534, 'Signor Ferrari', 521),
       (535, 'Ugarte', 522),
       (536, 'Carl', 523),
       (537, 'Yvonne', 524),
       (538, 'Sam', 525),
       (539, 'Annina Brandel', 526),
       (540, 'Berger', 527),
       (541, 'Sascha', 528),
       (542, 'Pickpocket', 529),
       --American History X
       (543, 'Derek Vinyard', 249),
       (544, 'Danny Vinyard', 530),
       (545, 'Doris Vinyard', 531),
       (546, 'Davina Vinyard', 532),
       (547, 'Seth Ryan', 533),
       (548, 'Stacey', 534),
       (549, 'Dr. Bob Sweeney', 535),
       (550, 'Murray', 536),
       (551, 'Cameron Alexander', 537),
       (552, 'Dennis Vinyard', 538),
       (553, 'Lamont', 539),
       (554, 'Rasmussen', 540),
       (555, 'Little Henry', 541),
       (556, 'Lawrence', 542),
       (557, 'Mitch McCormick', 543),
       --City Lights
       (558, 'A Blind Girl', 544),
       (559, 'The Blind Girl''s Grandmother', 545),
       (560, 'An Eccentric Millionaire', 546),
       (561, 'James - the Millionaire''s Butler', 547),
       (562, 'A Prizefighter', 548),
       (563, 'A Tramp', 549),
       --Psycho (1960)
       (564, 'Norman Bates', 550),
       (565, 'Lila Crane', 551),
       (566, 'Sam Loomis', 552),
       (567, 'Marion Crane', 553),
       (568, 'Det. Milton Arbogast', 554),
       (569, 'Sheriff Al Chambers', 555),
       (570, 'Dr. Fred Richman', 556),
       (571, 'Tom Cassidy', 557),
       (572, 'Caroline', 558),
       (573, 'George Lowery', 559),
       (574, 'Mrs. Chambers', 560),
       (575, 'California Charlie', 561),
       (576, 'Highway Patrol Officer', 562),
       --Raiders of the Lost Ark
       (577, 'Indy', 269),
       (578, 'Marion Ravenwood', 563),
       (579, 'Dr. René Belloq', 564),
       (580, 'Major Arnold Toht', 565),
       (581, 'Sallah', 222),
       (582, 'Dr. Marcus Brody', 566),
       (583, 'Satipo', 567),
       (584, 'Colonel Dietrich', 568),
       (585, 'Gobler', 569),
       (586, 'Barranca/Monkey Man', 570),
       (587, 'Col. Musgrove', 571),
       (588, 'Major Eaton', 572),
       (589, 'Bureaucrat', 573),
       (590, 'Jock', 574),
       (591, 'Australian Climber', 575),
       --Rear Window (1954)
       (592, 'L.B. ''Jeff'' Jefferies', 407),
       (593, 'Lisa Carol Fremont', 576),
       (594, 'Det. Lt. Thomas J. Doyle', 577),
       (595, 'Stella', 578),
       (596, 'Lars Thorwald', 579),
       (597, 'Miss Lonelyhearts', 580),
       (598, 'Songwriter', 581),
       (599, 'Miss Torso', 582),
       (600, 'Woman on Fire Escape', 583),
       (601, 'Man on Fire Escape', 584),
       (602, 'Miss Hearing Aid', 585),
       (603, 'Newlywed Man', 586),
       (604, 'Mrs. Emma Thorwald', 587),
       (605, 'Newlywed Woman', 588),
       --The Intouchables
       (606, 'Philippe', 589),
       (607, 'Driss', 590),
       (608, 'Yvonne', 591),
       (609, 'Magalie', 592),
       (610, 'La DRH société de courses', 593),
       (611, 'Marcelle', 594),
       (612, 'Elisa', 595),
       (613, 'Adama', 596),
       (614, 'Fatou', 597),
       (615, 'Mina', 598),
       (616, 'Antoine', 599),
       (617, 'Amie de Philippe', 600),
       (618, 'Ami de Philippe', 601),
       (619, 'Albert', 602),
       (620, 'Bastien - dit le Plumeau', 603),
       --Modern Times
       (621, 'A Factory Worker', 549),
       (622, 'A Gamin', 604),
       (623, 'Cafe Proprietor', 605),
       (624, 'Big Bill', 606),
       (625, 'Mechanic', 607),
       (626, 'Burglar', 548),
       (627, 'Gamin''s Father', 608),
       (628, 'President of the Electro Steel Corp.', 547),
       (629, 'Prison Cellmate', 609),
       (630, 'Minister', 610),
       (631, 'Minister''s Wife', 611),
       (632, 'J. Widdecombe Billows', 612),
       (633, 'Juvenile Officer', 613),
       (634, 'Sheriff Couler', 614),
       (635, 'Cafe Head Waiter', 615),
       --The Green Mile
       (636, 'Paul Edgecomb', 284),
       (637, 'Brutus ''Brutal'' Howell', 616),
       (638, 'John Coffey', 617),
       (639, 'Jan Edgecomb', 618),
       (640, 'Warden Hal Moores', 619),
       (641, 'Eduard Delacroix', 620),
       (642, 'Arlen Bitterbuck', 621),
       (643, 'Percy Wetmore', 622),
       (644, '''Wild Bill'' Wharton', 623),
       (645, 'Dean Stanton', 490),
       (646, 'Harry Terwilliger', 108),
       (647, 'Melinda Moores', 624),
       (648, 'Toot-Toot', 625),
       (649, 'Old Paul Edgecomb', 626),
       (650, 'Elaine Connelly', 627);