show create table wishlist;
select * from produk;
-- menambahkan dan menghapus constrain foreign key (FK) dari table wishlist ke table produk
alter table wishlist add constraint fk_wishlist_product foreign key (id_product) references produk (id);
alter table wishlist drop constraint fk_wishlist_product ;

insert into produk (id, nama, category, price, quantity) values('Pxx','Nasi Jamblang','Makanan', 15000, 50);
insert into wishlist(id_product, description) values('Pxx','Makanan Kesukaan');
alter table wishlist add column id_customer int;
alter table wishlist add constraint fk_wishlist_customer foreign key(id_customer) references customers(id);
alter table wishlist drop constraint fk_wishlist_customer;
desc wishlist;
select * from wishlist;
insert into customers(email, first_name, last_name) values('irwan.codeir@gmail.com','irwan','dza'),('batari.dza@gmail.com','batari','dza');
update wishlist set id_customer = 1 where id = 1;
select * from customers;
-- test hapus fk pada tbl produk (harusnya akan ditolak, karena ada id P01 pada tbl wishlist)
delete from produk where id = 'P01';

-- menghapus data berelasi
-- behaviornya (Restrict, cascade, no action, set null(kolomnyaharus bukan not null)
alter table wishlist
	add constraint fk_wishlist_produk
		foreign key(id_product) references produk(id)
			on delete cascade on update cascade;
alter table wishlist drop constraint fk_wishlist_produk;
-- test hapus salah satu produk berdasarkan id produk yang ada di id wishlist
delete from produk where id = 'Pxx';
delete from wishlist where id_product = 'Pxx';

-- join table
-- join 2 table
select * from wishlist join produk on (wishlist.id_product = produk.id);
--  join table dgn penggunaan alias
select w.id, p.id, p.nama, w.description 
from wishlist as w
	join produk as p on (w.id_product = p.id);
    
-- join multiple table
select c.email, p.id, p.nama, w.description
from wishlist as w
	join produk as p on (p.id = w.id_product)
    join customers as c on (c.id = w.id_customer);
-- bisa ditambahkan where pada join

-- one to one relationship table
-- relasi antar tabel yang apling sederhana
-- tidak boleh ada elasi lebih dari 1 data
-- cara membuat one to one, set kolom menjadi FK dan unique atau dengan set primary key yg sama
create table wallet (
	id int not null auto_increment,
    id_customer int not null,
    balance int not null default 0,
    primary key (id),
    unique key id_customer_unique (id_customer),
    foreign key fk_wallet_customer (id_customer) references customers(id)
)engine=innoDB;
show create table wallet;
insert into wallet(id_customer) values(2);
select * from wallet;
select * from customers;
select customers.id, customers.email, wallet.balance
from wallet join customers on (wallet.id_customer = customers.id);


-- one to many relationship table
-- tidak ada batasan berapa banyak data digunakan
-- cth: tabel categories dan products, dimana 1 kategori bisa digunakan oleh lebih dari 1 produk, 
-- yg artinya relasinya one category to many product
-- cara membuat one to many tidak perlu menggunakan unique key, 
-- karena data nya bisa berkali-kali ditambahkan ditabel relasi
-- buat tabel category
create table categories (
	id varchar(10) not null,
    name varchar(100) not null,
    primary key(id)
)engine=InnoDB;
desc categories;
-- drop table category;
-- drop column category pada produk dahulu
alter table produk
	drop column category;
show create table produk;
-- menambahkan id_category ke table produk
alter table produk
    drop column id_category;
-- add column id_category varchar(100);
select * from produk;
-- jadikan id_category pada tabel produk sebagai FK
alter table produk
	add constraint fk_product_categories
		foreign key (id_category) references categories(id);

-- insert data categories
select * from produk;
select * from categories;
show create table categories;
insert into categories(id, name) values('C001','Makanan'),('C004','Oleh-oleh');
-- update data produk UNTUK KATEGORI MAKANAN
update produk
set id_category = 'C001'
where id in ('P01','P03','P06');
-- update data produk UNTUK KATEGORI MINUMAN
update produk
set id_category = 'C002'
where id in ('P04','P05');
-- update data produk UNTUK KATEGORI LAIN-LAIN
update produk
set id_category = 'C003'
where id = 'P02';
-- lakukan join/relasi one to many
select produk.id, produk.nama, categories.name
from produk
	join categories on (categories.id = produk.id_category);
    
-- many to many merupakan relationship table yang paling kompleks, dan kadang bingung untuk pemula
-- relasi dimana ada relasi antara 2 tabel dimana table pertama bisa punya banyak relasi ditable kedua, dan sebaliknya
-- cth: relasi antara produk dan penjualan, dimana setiap produk bisa dijual berkali-kali, 
-- dan setiap penjualan bisa untuk lebih dari 1 produk 
-- bagaimana implementasinya relasi many to many?
-- apakah harus menambahkan id_order ditable produk? atau id_product di table orders? jawabanya tidak solving
-- solusinya yaitu membuat table relasi, dengan menambah 1 tabel ditengah, untuk dijadikan sebagai jembatan antara tbl produk dan tbl order
-- isi table tersebut sederhana yaitu id_product dan id_order dengan nama tabel order detail
-- buat table order
create table orders(
	id int not null auto_increment,
    total int not null,
    order_date datetime not null default current_timestamp,
    primary key(id)
)engine=innoDB;
desc orders;
-- membuat table relasi
create table orders_detail(
	id_product varchar(10) not null,
    id_order int not null,
    price int not null,
    quantity int not null,
    primary key(id_product, id_order)
)engine=innoDB;
desc orders_detail;
-- membuat foreign key pada table produk dan tbl order
alter table orders_detail
	add constraint fk_orders_detail_product
		foreign key (id_product) references produk(id);
alter table orders_detail
	add constraint fk_orders_detail_orders
		foreign key (id_order) references orders(id);

show create table orders_detail;
--  masukan data orders
insert into orders(total) values(50000);
select * from orders;
-- masukan order detail
insert into orders_detail(id_product, id_order, price, quantity) values('P01',1, 25000,1),('P02',1, 25000,1);
insert into orders_detail(id_product, id_order, price, quantity) values('P03',2, 25000,1),('P04',2, 25000,1);
insert into orders_detail(id_product, id_order, price, quantity) values('P01',3, 25000,1),('P03',3, 25000,1);
select * from orders_detail;
-- cara melihat detail penjualan, detail order, nama produk barang dll dgn melakukan join
select * from orders
	join orders_detail on (orders_detail.id_order = orders.id)
    join produk on (produk.id = orders_detail.id_product);