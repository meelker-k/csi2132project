set search_path = "CSI2132 Project";

create or replace function insert_join_date() returns trigger as
$body$
begin
	update Account set join_date = current_date
	where user_id = new.user_id;
	return new;
end;
$body$ language plpgsql;

create trigger insert_join_date
after insert on Account
for each row
execute procedure insert_join_date();

create or replace function insert_rating_date() returns trigger as
$body$
begin
	update Watches set date = current_date
	where user_id = new.user_id and movie_id = new.movie_id;
	return new;
end;
$body$ language plpgsql;

create trigger insert_rating_date
after insert on Watches
for each row
execute procedure insert_rating_date();