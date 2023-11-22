-- sub query di WHERE
select * from produk where price > (select avg(price) from produk);

-- sub query di FROM
select max(price) from produk; -- output max = 100000
select max(cp.price)
from (select price
		from categories join produk on (produk.id_category = categories.id)) as cp; -- output max = 35000
	
