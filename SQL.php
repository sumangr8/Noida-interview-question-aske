In:-
Select multiple record.
SELECT * FROM `login` WHERE id in(70,79);

IN Operater allowes to specify multiple value in a where clouse;
SELECT * FROM table WHERE id IN (4,7);

NOT IN:-
SELECT * FROM table WHERE id NOT IN (4,7);
----------------------------------------

Like:-
SELECT * FROM `login` WHERE name like "S%";

SELECT * FROM table WHERE name LIKE '%man';

Show_= Shows
_eek= Geek
A_p_e=Apple


NOT LIKE:-
SELECT * FROM table WHERE name NOT LIKE '%man';
----------------------------------------

Distinct:-
Remove duplicate row
SELECT distinct name,password  FROM `login`

SELECT DISTINCT column1, column2, ...
FROM table_name;
------------------------------------------

IS NULL:-
For empty record
SELECT * FROM `login` WHERE password IS NULL

NULL !=0;
Becouse 0 ia a number;

IS NULL:-
SELECT * FROM table WHERE city IS NULL

IS NOT NULL:-
SELECT * FROM table WHERE city IS NOT NULL;
-------------------------------------------

IS NOT NULL:-
SELECT * FROM `login` WHERE password IS NOT NULL
---------------------------------------------

LIMIT:-
Select * from login limit 3
Select * from login where age>=10 LIMIT 10;
---------------------------------------------
Count
SELECT count(name) FROM `login`

Sum
SELECT sum(salary) FROM `login`

Min
SELECT min(age) FROM `login`

Max
SELECT max(age) FROM `login`

Avg
SELECT avg(age) FROM `login`
-----------------------------------------------
UPDATe:-
UPDATE login SET name='suman' where id=1
-----------------------------------------------
Primary key:-
(1)	Primary key always unique data
(2)	Primary key cannot have null value
(3)	A table contain only one primary key
------------------------------------------------
Foreign key:-
(1)	A foreign key is used to link two tables together
(2)	A foreign key in one table used to point primary key in another table
--------------------------------------------------
Group by
Select city count(city) from table1 group by city
---------------------------------------------------
Union :-
Select * from table1 union select * from table2


Union all :-
Duplicate record v show hota hai
Select * from table1 union all select * from table2
--------------------------------------------------
How to use if in mysql
Select id,name,percentage, if(percentage >=33, “pass”, “fail”) as result from student
---------------------------------------------------
CREATE TABLE Persons (
    id int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);
------------------------------------------------
Find Heighest value : 
SELECT * FROM table1 e1 WHERE N-1 = (SELECT COUNT(DISTINCT slot_no) FROM table1 e2 WHERE e2.slot_no > e1.slot_no);

select * from login t1 where 2-1=(select count(id) from login t2 where t2.id > t1.id)

2nd heighest using sub-query:-
select max(salary) from emp where salary < (select max(salary) from emp);

3rd heighest using sub-query:-
select max(salary) from emp where salary < 
(select max(salary) from emp where salary < 
(select max(salary) from emp));

Using Limit:-
select salary from emp order by salaray desc LIMIT n-1,1

------------------------------------------------

Copy Table Record:-
First create new table like old table with same stracture
Syntex :- CREATE TABLE login2 LIKE login;
Now Record Copy :-
INSERT login2 SELECT * FROM login
-------------------------------------------------
Round :-
Mysql record ko round figure me karne ke liye use karte hai.
Syntex:- SELECT * ,round(columnName, decimal) FROM table_name;
SELECT * , round(price, 1) FROM table_name;
Notes :- here 1 indicate, how many decimal show after dot(.);

-------------------------------------------------
UPPER:-
I Want to show record in upper case
Syntex :- SELECT UPPER(columnName) FROM tabelName;
SELECT UPPER(name),email,password FROM login;
--------------------------------------------------
MID :-
I want to show only 2 or 3 character in column record then you use MID(columnName,start,end) function.
Syntex :- SELECT MID(columnName,start,end) FROM login;
SELECT MID(name,1,3) FROM login
--------------------------------------------------
LENGTH :-
I want to find any column character length
Syntex :- SELECT LENGTH(columnName) FROM tabelNme
SELECT name,LENGTH(name) FROM login
--------------------------------------------------
CONCAT :-
Concat is used to join two column.
Syntex :- SELECT CONCAT(name,email) FROM tableName;
SELECT name, CONCAT(email,password) FROM login
If you want to give space between email and password then 
SELECT name, CONCAT(email,' ',password) FROM login;
---------------------------------------------------
REVERSE:-
Reverse is used to reverse column character. Like delhi to ihled
Syntex :- SELECT REVERSE(columnName) FROM tableName;
SELECT REVERSE(name) FROM login
----------------------------------------------------
Data Type:-
Int:- It Contain Positive or Negative Both

Decimal:- It Contain Positive or Negative Both. Max Size 65; 
ex:- dec(4,2)
12.34
2 Indicate How many Decimal number show

CHAR:- It Contain letters,numbers,and special character. size : 255

VARCHAR:- It Contain letters,numbers,and special character. size : 255
note:- if varchar ka size 255 se jyada rakhte hai to ye automatic convert into TEXT Type

TEXT:- Its Length 65,535.
table create time size nahi dete hai
------------------------------------------------------
DATE:- It display date value in yyyy-mm-dd formate

DATETIME:- It dispaly date and time value in yyyy-mm-dd hh:mm:ss formate

TIMESTAMP:- It also dispaly date and time
--------------------------------------------------------
Multiple Insert:-
Insert INTO table (col1,col2)
value(val1,val2),
(val3,val4)
---------------------------------------------------------
LIMIT:-
select * from table LIMIT 3;

SELECT * FROM table LIMIT 2,5;
2 Indicate start position and 5 limit
---------------------------------------------------------
NOT EQUIAL:-
SELECT * FROM table WHERE name !='suman';
--------------------------------------------------------
GREATER THEN:-
SELECT * FROM TABLE WHERE name > 'R';
--------------------------------------------------------
AND & OR Combination:-
SELECT * FROM table WHERE name='Anu' AND
(id=5 OR address='Patna');
--------------------------------------------------------
BETWEEN:-
The BETWEEn operater select values within a range; The value can be number, text, date

SELECT * FROM table WHERE name BETWEEN 'suman'AND 'rahul'; 
SELECT * FROM table WHERE id BETWEEN 2 AND 5; 


NOT BETWEEN:-
SELECT * FROM table WHERE id NOT BETWEEN 2 AND 5; 


BETWEEN & IN COMBINATION:-
SELECT * FROM table WHERE 
(salary BETWEEN 5000 AND 10000) 
AND dept IN('it','hr');
--------------------------------------------------------
Arthmatic Operation In SQL:-
SELECT *,id+100 as aid FROM `login2`
--------------------------------------------------------
Add Column :-
ALTER TABLE table_name ADD COLUMN C_name datatype (size) NOT NULL AUTO_INCREMENT,PRIMARY KEY (roll);

Add column on Specific Position:-
ALTER TABLE login ADD COLUMN L_name varchar (255) FIRST;
ALTER TABLE login ADD COLUMN L_name varchar (255) AFTER name;
ALTER TABLE login ADD COLUMN L_name varchar (255);

------------------------------------------------------------

HOW To Create Table:-
CREATE TABLE login3(id int NOT NULL AUTO_INCREMENT PRIMARY KEY,name varchar(255))

CREATE TABLE login3(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	age int NOT NULL CHECK (age>=18),
	gender VARCHAR(10) NOT NULL,
	phone VARCHAR(10) NOT NULL UNIQUE,
	city VARCHAR(10) NOT NULL DEFAULT 'Patna'
);

---------------------------------------------------------------
Delete:-
Delete Table record;
delete from login;

Drop:-
Table Delete
drop table login;

Truncate:-
All table record delete.
TRUNCATE login2;

-------------------------------------------------------------------
Cross Join:-
Dono table ke har column aapas me join hota hai
select * from employee cross join department;
select * from employee,department;

-------------------------------------------------------------------
Inner Join:-
EQUIJOIN:-
Jo condition match karta hai wo record show karta hai
select * from employee inner join department on employee.empid=department.empid;


NON-EQUIJOIN:-
Jo match nahi hota hai wo record show hota hai.
mana ki rahul hr me kam karta hai. to rahul or hr ka relation show naho hoga.
rahul or admin, rahul or it show hoga

select * from employee inner join department on employee.empid<>department.empid;

NATURAL JOIN:-
Note:- Primary key or foreign key ka name same hona chahiye.
select * from employee natural join department;
--------------------------------------------------------------------------------
OUTER JOIN:-
left join:-
Match nahi hone par NULL show karega
select * from employee left join department on employee.empid=department.empid;

right join:-
select * from employee right join department on employee.empid=department.empid;

full join:-
MYSQL Not support
combination of left or right join. dono table ka full record show hoga. jo match nahi hoga waha null show hoga.

select * from employee full join department on employee.empid=department.empid;
---------------------------------------------------------------------------------
self join:-
Single table join.
Harakey record ke liye
column name:-empid,name,manager_id
select t1.name as name,t2.name as manager from self t1 inner join self t2 on t1.manager_id=t2.empid;
----------------------------------------------------------------------------------
TRIGGER:-

DELIMITER //
CREATE TRIGGER tr_name
AFTER INSERT on student
FOR EACH ROW
BEGIN
INSERT INTO change_test VALUES(null,concat('Data Insert At ',date_format(now(),'%d-%m-%y')));
END //
DELIMITER ;


Second Trigger Ex:-
new keyword:-

DELIMITER //
CREATE TRIGGER tr_name
AFTER INSERT ON student
FOR EACH ROW
BEGIN
DECLARE s_id int;
SET s_id=new.id;
INSERT INTO change_test VALUES (null,concat('Data Insert ',s_id));
END //
DELIMITER ;


Third Trigger Ex:-
old Keyword:-

DELIMITER //
CREATE TRIGGER td_trigger
AFTER DELETE ON student
FOR EACH ROW
BEGIN
DECLARE s_id int;
set s_id=old.id;
INSERT INTO change_test VALUES(null,concat('data delete ',s_id));
END //
DELIMITER ;


Fourth Trigger Ex:-
new and old both use:-

DELIMITER //
CREATE TRIGGER tu_name
AFTER UPDATE ON student
FOR EACH ROW
BEGIN
DECLARE new_name varchar(255);
DECLARE old_name varchar(255);
set new_name=new.name;
set old_name=old.name;
INSERT INTO change_test VALUES(null,concat(new_name,old_name));
END //
DELIMITER ;


Fifth Trigger Ex:-
condition check:-

DELIMITER //
CREATE TRIGGER tr_before
BEFORE INSERT ON student
FOR EACH ROW
BEGIN
DECLARE s_age int;
SET s_age=new.age;
if s_age < 18
THEN SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT='You age not valid';
END if;
END //
DELIMITER ;

-----------------------------------------------------------------

transaction:-
transaction only innodb me support karta hai.
transaction ke help se ek sath multiple query ek sath run kar sakte hai. 
agar ek v query run nahi huaa to baki query v run nahi hoga;
isko undo v kar sakte hai.
For Ex:- let mai netbanking ke through apne account se kisi dusre 
ke account me paise vej raha hu. but mere account se paise kat gya
or uske bad server me kuchh issue aa gya to uske pas paise nahi gya.
to us case me transaction rollback ho jayega. or paise wapas aa jyega pahle wala account me.
transaction me commit/rollback dono kar sakte hai;

start transaction;
insert into login values(null,'suman','123');
update login set name='Rahul' where id=10;
delete from login where id=11;
select * from login;
rollback;

----------------------------------------------------------------

Index:-
Jab hamlog bahut sare data me record search karte hai to query ko result fetch karne me bahut time lag jata hai. Isko dur karne ke liye index ka use karte hai.

Ex:- ek table hai jisme name,email,pass,dob…..or bahut sare column hai.
Ab mai chehta hu ki waise record search karu jiska dob 1990 se jyada hai. to us case me dob ka index bana lenge.

index data ko sort kar deta hai. wo sort physaly show nahi hota hai.
ek table me 64 index laga sakte hai
jab kavi kisi column ko primary key or unique key define karte hai tab uspar index automatic lag jata hai
index hamesa unque column par lagana chahiye
syntex:-
create index index_name on table_name(column1,column..);

CREATE INDEX std_dob ON login (dob)

Now I want To see how many index applay on a table 
Synatex:-
SHOW INDEX FROM login;

Now I Want to delete index :-
Syntax:-
DROP INDEX std_dob ON login;

---------------------------------------------------------------------

SQL View :-
Sql view ke through hamlog complex query ko single query me create karke view me rakhte hai or use karte hai.

How to Create A view
CREATE VIEW neharecord AS SELECT * FROM `login` WHERE id=1;

How to show view record :-
Select * from neha;

How to Rename  View :-
RENAME TABLE neharecord TO neha;

How To edit view :-
ALTER VIEW neha AS SELECT * FROM `login` WHERE id=2;

How to Drop View :-
DROP VIEW neha;





