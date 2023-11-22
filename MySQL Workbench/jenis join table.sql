use latihan;
show tables;
select * from categories;
select * from produk;
insert into categories(id, name)
values('C004','Oleh-oleh'),('C005','Gadget');
insert into produk (id, nama, price, quantity) values('X01','X satu',25000, 200),('X02','X dua',20000, 300),('X03','X tiga',15000, 500);


-- jenis-jenis join tabel
-- inner join
select * from categories
inner join produk on (produk.id_category = categories.id);
-- join biasa
select * from categories
join produk on (produk.id_category = categories.id);

-- left join
select * from categories
left join produk on (produk.id_category = categories.id);

-- right join
select * from categories
right join produk on (produk.id_category = categories.id);

-- cross join jarang digunakan