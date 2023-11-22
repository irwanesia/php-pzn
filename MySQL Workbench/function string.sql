-- menggunakan string function
show databases;
use latihan;
select * from admin;
select id, lower(first_name) as nama from admin;
select id, first_name, length(first_name) as panjang_string_nama from admin;