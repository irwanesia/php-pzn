-- locking dan transaction
-- user 1 di mysqlworkbench, dan user 2 menggunakan terminal
start transaction;

select * from guestbooks;

update guestbooks
set title = "diubah oleh user 1 pada id 7"
where id = 7;

commit;

-- locking manual
start transaction;
select * from produk where id = 'P01' for update;
-- for update digunakan untuk lock record manual
update produk
set category = 'Minuman'
where id in ('P04','P05','P08');

update produk
set quantity = quantity - 100
where id = 'P01';