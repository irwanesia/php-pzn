-- TRANSACTION
-- kenapa butuh data transaction?
-- perinta transaction di mysql
-- start transaction, commit, rollbacks
start transaction;

insert into guestbooks(email, title, content)
values('contoh@gmail.com','contoh','contoh'),
	  ('contoh2@gmail.com','contoh','contoh'),
      ('contoh3@gmail.com','contoh','contoh');

select * from guestbooks;
commit;
rollback;