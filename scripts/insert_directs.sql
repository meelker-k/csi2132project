﻿set search_path = "CSI2132 Project";

insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the shawshank redemption' and lower(d.first_name) = 'frank' and lower(d.last_name) = 'darabont';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the godfather' and lower(d.first_name) = 'francis' and lower(d.last_name) = 'coppola';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the godfather: part ii' and lower(d.first_name) = 'francis' and lower(d.last_name) = 'coppola';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the dark knight' and lower(d.first_name) = 'christopher' and lower(d.last_name) = 'nolan';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'schindler''s list' and lower(d.first_name) = 'steven' and lower(d.last_name) = 'spielberg';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = '12 angry men' and lower(d.first_name) = 'sidney' and lower(d.last_name) = 'lumet';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'pulp fiction' and lower(d.first_name) = 'quentin' and lower(d.last_name) = 'tarantino';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the lord of the rings: the return of the king' and lower(d.first_name) = 'peter' and lower(d.last_name) = 'jackson';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the good, the bad, the ugly' and lower(d.first_name) = 'sergio' and lower(d.last_name) = 'leone';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'fight club' and lower(d.first_name) = 'david' and lower(d.last_name) = 'fincher';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the lord of the rings: the fellowship of the ring' and lower(d.first_name) = 'peter' and lower(d.last_name) = 'jackson';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'star wars: episode v - the empire strikes back' and lower(d.first_name) = 'irvin' and lower(d.last_name) = 'kershner';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'forrest gump' and lower(d.first_name) = 'robert' and lower(d.last_name) = 'zemeckis';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'inception' and lower(d.first_name) = 'christopher' and lower(d.last_name) = 'nolan';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the lord of the rings: the two towers' and lower(d.first_name) = 'peter' and lower(d.last_name) = 'jackson';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'one flew over the cuckoo''s nest' and lower(d.first_name) = 'milos' and lower(d.last_name) = 'forman';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'goodfellas' and lower(d.first_name) = 'martin' and lower(d.last_name) = 'scorsese';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the matrix' and lower(d.first_name) = 'lilly' and lower(d.last_name) = 'wachowski';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the matrix' and lower(d.first_name) = 'lana' and lower(d.last_name) = 'wachowski';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'seven samurai' and lower(d.first_name) = 'akira' and lower(d.last_name) = 'kurosawa';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'star wars: episode iv - a new hope' and lower(d.first_name) = 'george' and lower(d.last_name) = 'lucas';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'city of god' and lower(d.first_name) = 'fernando' and lower(d.last_name) = 'meirelles';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'city of god' and lower(d.first_name) = 'katia' and lower(d.last_name) = 'lund';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'se7en' and lower(d.first_name) = 'david' and lower(d.last_name) = 'fincher';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the silence of the lambs' and lower(d.first_name) = 'jonathan' and lower(d.last_name) = 'demme';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'it''s a wonderful life' and lower(d.first_name) = 'frank' and lower(d.last_name) = 'capra';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the usual suspects' and lower(d.first_name) = 'bryan' and lower(d.last_name) = 'singer';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'life is beautiful' and lower(d.first_name) = 'roberto' and lower(d.last_name) = 'benigni';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'léon: the professional' and lower(d.first_name) = 'luc' and lower(d.last_name) = 'besson';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'once upon a time in the west' and lower(d.first_name) = 'sergio' and lower(d.last_name) = 'leone';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'spirited away' and lower(d.first_name) = 'hayao' and lower(d.last_name) = 'miyazaki';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'saving private ryan' and lower(d.first_name) = 'steven' and lower(d.last_name) = 'spielberg';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'interstallar' and lower(d.first_name) = 'christopher' and lower(d.last_name) = 'nolan';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'casablanca' and lower(d.first_name) = 'michael' and lower(d.last_name) = 'curtiz';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'american history x' and lower(d.first_name) = 'tony' and lower(d.last_name) = 'kaye';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'city lights' and lower(d.first_name) = 'charles' and lower(d.last_name) = 'chaplin';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'psycho' and lower(d.first_name) = 'alfred' and lower(d.last_name) = 'hitchcock';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'raiders of the lost ark' and lower(d.first_name) = 'steven' and lower(d.last_name) = 'spielberg';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'rear window' and lower(d.first_name) = 'alfred' and lower(d.last_name) = 'hitchcock';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the intouchables' and lower(d.first_name) = 'olivier' and lower(d.last_name) = 'nakache';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the intouchables' and lower(d.first_name) = 'eric' and lower(d.last_name) = 'toledano';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'modern times' and lower(d.first_name) = 'charles' and lower(d.last_name) = 'chaplin';
insert into Directs(director_id, movie_id) select d.director_id, m.movie_id from Director d, Movie m where lower(m.name) = 'the green mile' and lower(d.first_name) = 'frank' and lower(d.last_name) = 'darabont';