set search_path = "CSI2132 Project";

--A
select *
from Movie m
where m.name = 'Schindler''s List';

--B
select a.*, r.name
from Movie m, MovieRoles mr, Role r, Actor a
where m.name = 'Forrest Gump' and m.movie_id = mr.movie_id
      and mr.role_id = r.role_id and r.actor_id = a.actor_id;

--C
select d.*, s.*, m.date_released
from Topics t, MovieTopics mt, Movie m, Director d, Directs dir, Studio s, Sponsors sp
where t.description = 'Fantasy' and t.topic_id = mt.topic_id
      and mt.movie_id = dir.movie_id and dir.director_id = d.director_id
      and mt.movie_id = sp.movie_id and sp.studio_id = s.studio_id
      and mt.movie_id = m.movie_id;

--D
select a.*, d.*, s.*, count(r.*) as num_roles
from Role r, Actor a, MovieRoles mr, Directs dir, Director d, Sponsors sp, Studio s
where r.actor_id = a.actor_id and r.role_id = mr.role_id
      and mr.movie_id = dir.movie_id and dir.director_id = d.director_id
      and mr.movie_id = sp.movie_id and sp.studio_id = s.studio_id
group by r.actor_id, a.actor_id, a.last_name, a.first_name, a.date_of_birth,
	 d.director_id, d.last_name, d.first_name, d.country,
	 s.studio_id, s.name, s.country
having count(r.*) = (select max(num_roles)
		     from (select count(r2.*) as num_roles
			   from Role r2
			   group by r2.actor_id) as temp);

--E


--NEEDS TESTING
--F
select m.name, avg(w.rating) as rating
from Movie m, Watches w
where m.movie_id = w.movie_id
group by m.name
order by rating desc
limit 10;

--G
select m.*, t.description, avg(w.rating) as rating
from Movie m, Topics t, MovieTopics mt, Watches w
where m.movie_id = w.movie_id and m.movie_id = mt.movie_id
      and mt.topic_id = t.topic_id
group by m.movie_id, m.name, m.date_released, m.language, m.country, t.description
having avg(w.rating) = (select max(rating)
			from (select avg(w2.rating) as rating
			      from Watches w2
			      group by w2.movie_id) as temp);

--H
select m.name, w.user_id, w.rating
from Movie m, Watches w
where m.movie_id = w.movie_id;

--I
select m.*
from Movie m, Watches w
where m.movie_id = w.movie_id and w.date >= '2016-02-01';

--J
select m.name, m.date_released, d.name, w.date, avg(w.rating) as rating
from Movie m, Director d, Directs dir, Watches w
where m.movie_id = dir.movie_id and d.director_id = dir.director_id
      and m.movie_id = w.movie_id
group by m.name, m.date_released, d.name, w.date
having avg(w.rating) < any (select w2.rating
			    from Watches w2
			    where w2.user_id = 'matte');

--K
select m.name, a.last_name, a.first_name, max(w.rating) as highest_rating
from Movie m, Account a, Watches w, MovieTopics mt, Topics t
where t.description = 'Drama' and t.topic_id = mt.topic_id and mt.movie_id = m.movie_id
      and m.movie_id = w.movie_id and w.user_id = a.user_id
      and w.rating = (select max(w2.rating) as highest_rating
		      from Watches w2, MovieTopics mt2, Topics t2
		      where t2.description = 'Drama' and t2.topic_id = mt2.topic_id
			    and mt2.movie_id = w2.movie_id)
group by m.name, a.last_name, a.first_name;

--L
select t.description, count(w.*) as num_viewers
from Watches w, Topics t, MovieTopics mt
where t.description = 'Drama' and t.topic_id = mt.topic_id and mt.movie_id = w.movie_id
group by t.description
having count(w.*) >= all (select count(w2.*)
			    from Watches w2, Topics t2, MovieTopics mt2
			    where t2.description <> 'Drama' and t2.topic_id = mt2.topic_id
				  and mt2.movie_id = w2.movie_id
			    group by t2.description);

--M
select a.last_name, a.first_name, a.join_date, p.*, m.name, w.date
from Account a, Profile p, Movie m, Watches w
where w.rating >= all (select w2.rating
		      from Watches w2)
      and w.movie_id = m.movie_id and w.user_id = p.user_id and p.user_id = a.user_id;

--N: doesn't apply to our database; only one rating per user

--O
select a.user_id, a.last_name, a.first_name, a.email
from Account a, Watches w
where w.rating < any (select w2.rating
		      from Watches w2, Account a2
		      where a2.last_name = 'Smith' and a2.first_name = 'John'
		            and a2.user_id = w2.user_id);

--P
select t.description, a.user_id, a.last_name, a.first_name, a.email, m.name, w.rating
from Account a, Watches w, Movie m, MovieTopics mt, Topics t
where a.user_id = w.user_id and w.movie_id = m.movie_id
      and m.movie_id = mt.movie_id and mt.topic_id = t.topic_id
group by t.description, a.user_id, a.last_name, a.first_name, a.email, m.name, w.rating
having min(w.rating) = 1 and max(w.rating) = 10;