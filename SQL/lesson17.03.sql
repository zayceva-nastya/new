--добавление новой строки в табл
Insert Into (name)
VALUES ('болгарка');

--добавление нескольких строк в табл
Insert Into tab (name,price)
VALUES ('болгарка','730');

--поменять данные в табл
update tab set price=2;

--меняем только в строке с id=5
update tab set price=22
where id=5;

--меняет в нескольких строках,по указанным id
update tab set price=22
where id=5 or id=3;

--удаляет строку из столбца
delete from tab
where id=7;

--цена для лобзика -20руб
update tab set=price
where name='лобзик';

--с зп между 600 и 800 руб через оператор between
SELECT *
FROM people
where zp between 600 and 800

--находит людей из отдела рекламы и бухгалтерии
SELECT *
FROM people
where dep in('реклама,бухгалтерия');

--находит сотрудника
SELECT *
FROM people
where name  like ('Ива%');

--функции агрегирования
SELECT max(zp), min(zp), avg(zp), sum(zp)
FROM people;

SELECT count(name);
FROM people;

SELECT count(zp)
FROM people;

--считает сколько строк в табл всего
SELECT count(*)
FROM people;

--считает всех у кого зп выше средней
SELECT *
FROM people
where zp>(SELECT avg(zp)from people)



