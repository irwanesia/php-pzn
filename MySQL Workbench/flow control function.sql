
-- menambah kolom timestamp
select id, 
	extract(YEAR FROM created_at) as 'Year',
	extract(MONTH FROM created_at) as 'Month'
from produk;
select id, year(created_at), month(created_at) from produk;

-- flow control function
select id, category,
	case category
		when 'Makanan' then 'Enak'
        when 'Minuman' then 'Segar'
        else 'Apa itu?'
        end as 'keterangan'
from produk;

-- control flow if/if function
select id, price from produk;
select id, price,
	if(price <= 15000, 'Murah','Mahal') as 'Keterangan'
from produk;

select id, price,
	if(price <= 15000, 'Murah',if(price <= 20000, 'Mahal','Mahal Banget')) as 'Keterangan'
from produk;

-- Aggregate funtion (cth : mencari harga paling mahal, paling murah, rata2 harga, dan total, harga)
select count(id) as 'Total Produk' from produk;
select avg(quantity) as 'Rata-rata Stok' from produk;
select avg(price) as 'Rata-rata Harga' from produk;
select max(price) as 'Maximal Harga' from produk;
select min(price) as 'Minimal Harga' from produk;

