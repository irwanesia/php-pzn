-- locking table
-- loacikng terhadap seluruh tabel
-- ada 2 jenis lock table, yaitu READ dan WRITE
-- cara melakukan locking table dgn perintah Lock tables nama_table READ dan lock table nama_table WRITE
-- setelah selesai melakukan lock table, kita bisa melakukan unlock dengan perintah : UNLOCK TABLES;
-- behavior lock table dapat diliat dalam buku catatan

-- lock tables READ, hanya bisa baca data saja, tidak bisa write data(update, delete, insert)
lock tables produk READ;

select * from produk;
update produk
set price = '24000'
where id = 'P03'; -- ini gagal eksekusi dikarenakan lock tablenya READ
insert into produk(id, nama, category, price, quantity)values('P11','Soto Ayam','Makanan','18000',200);-- ini gagal eksekusi dikarenakan lock table
unlock tables;
-- setelah di unlock table, proses write baru bisa dieksekusi
insert into produk(id, nama, category, price, quantity)values('P11','Soto Ayam','Makanan','18000',200);

-- lock tables WRITE bisa melakukan write, tidak bisa read
lock tables produk WRITE;
desc produk;
select * from produk;
update produk
set price = '24000'
where id = 'P03'; -- ini berhasil eksekusi dikarenakan lock tablenya write
insert into produk(id, nama, category, price, quantity)values('P11','Soto Ayam','Makanan','18000',200);-- ini berhasil eksekusi dikarenakan lock tablenya write
unlock tables;