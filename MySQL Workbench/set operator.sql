-- SET OPERATOR
-- UNIION, UNION ALL, INTERSET, DAN MINUS

-- buat tabel terlebih dahulu
create table guestbooks (
	id int not null auto_increment,
    email varchar(100) not null,
    title varchar(200) not null,
    content text,
    primary key(id)
)engine=InnoDB;
desc guestbooks;
insert into guestbooks(email, title, content)
values('guest1@gmail.com','Hello 1','Hello'),
	('guest2gmail.com','Hello 1','Hello'),
    ('guest3@gmail.com','Hello 1','Hello'),
    ('codeir1@gmail.com','Hello 1','Hello'),
    ('codeir2@gmail.com','Hello 1','Hello'),
    ('codeir3@gmail.com','Hello 1','Hello');
insert into guestbooks(email, title, content)
values('batari.dza@gmail.com','Hello 1','Hello'),
	('irwan.codeir@gmail.com','Hello 1','Hello'),
    ('guest3@gmail.com','Hello 1','Hello');
select * from guestbooks;

-- union
select distinct email from customers
union
select distinct email from guestbooks;

-- union All
select distinct email from customers
union all
select distinct email from guestbooks;
-- contoh laon pengguanaan union all
select emails.email, count(emails.email) 
from(select email from customers 
union all 
select email from guestbooks) as emails
group by emails.email;

-- intersect 
-- (untuk menampilkan data yang hanya ada di table 1 dan tabel 2
select distinct email from customers
where email in(select distinct email from guestbooks);

-- minus
select distinct customers.email, guestbooks.email from customers
left join guestbooks on (guestbooks.email = customers.email)
where guestbooks.email is null;
