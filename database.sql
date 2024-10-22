CREATE TABLE users (
  id INT,
  first_name VARCHAR(20),
  email VARCHAR(32),
  username VARCHAR(32),
PRIMARY KEY (id)
);

CREATE TABLE passwords (
  id INT,
  passes VARCHAR(25),
FOREIGN KEY (id) REFERENCES users(id)
);

INSERT INTO users
VALUES (1,'Darleen', 'darleenfairy33@myyahoo.com', 'DarleenFairy33')
;

INSERT INTO passwords
VALUES(1, 'TestPassword12345')
;

SELECT username
FROM users
WHERE id=1;