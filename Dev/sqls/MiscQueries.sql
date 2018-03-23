USE blog_db;
SHOW tables WHERE 1;

SELECT * FROM migrations WHERE 1;

SELECT * FROM users WHERE 1;
SELECT count(*) FROM users where 1;

SELECT * FROM posts WHERE 1 LIMIT 300;

SELECT * FROM `items`
 WHERE 1
 ORDER BY `id` DESC
 LIMIT 50;

SELECT COUNT(*) FROM `items` WHERE 1;

