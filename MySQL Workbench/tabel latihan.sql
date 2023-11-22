drop database latihan;
show databases;
create database latihan;
use latihan;
show tables;

-- buat tabel produk
create table produk (
id int(11) not null auto_increment,
nama_produk varchar(50) not null,
harga int(11) not null,
stok int(11) not null,
primary key(id)
)engine=InnoDB;

show create table produk;
desc produk;
select * from produk;
truncate table produk;
alter table produk change column nama_produk nama varchar(100) not null;
alter table produk add column category enum('Makanan','Minuman','Lain-lain') after nama;
alter table produk add column description text after category;
alter table produk change column harga price int not null;
alter table produk change column stok quantity int not null;
alter table produk add column created_at timestamp after quantity;
-- unsigned int digunakan untuk mendeklarasikan tipe data bilangan bulat positif atau bernilai 0 hingga 65535. -- 
alter table produk modify quantity int unsigned not null default 0;
alter table produk modify price int unsigned not null;
alter table produk modify created_at timestamp not null default current_timestamp;
alter table produk modify id varchar(10) not null;
alter table produk
	add constraint fk_product_categories
		foreign key (id_category) references categories(id);

insert into produk (id, nama, category, price, quantity) values('P10','Gado-gado','Makanan',12000, 100);
-- ('P07','Capcai','Makanan',16000, 30),
-- ('P08','Jus Mangga','Minuman',10000, 200),
-- ('P09','Ayam Penyet','Makanan',20000, 50),
-- ('P010','Gado-gado','Makanan',12000, 100);
delete from produk
where id = 'P010';

select count(id) as total,
	category
from produk group by category having total > 1;

--  buat table admin
create table admin (
	id int not null auto_increment,
    first_name varchar(100) not null,
    last_name varchar(100) not null,
    primary key(id)
) engine=InnoDB;

desc admin;

insert into admin(first_name, last_name)
values('Batari','Dzaqira'),('Dika','Saputra'),('Aira','Zarra'),('Asya','Nabilla');
-- values('Syabil','Azazil');
select * from admin order by id;
-- melihat id yang terakhir --
select last_insert_id();

--  buat table customers
create table customers (
	id int not null auto_increment,
    email varchar(100) not null,
    first_name varchar(100) not null,
    last_name varchar(100),
    primary key(id),
    unique key email_unique (email)
) engine=InnoDB;
show create table customers;

-- menambah dan menghapus unique constraint
alter table customers add constraint email_unique unique (email);
alter table customers drop constraint email_unique;

--  buat table wishlist dengan foreign key (FK)
create table wishlist (
	id int not null auto_increment,
    id_product varchar(10) not null,
    description text,
    primary key(id),
    constraint fk_wishlist_product
		foreign key (id_product) references produk (id)
)engine=InnoDB;
show create table wishlist;
