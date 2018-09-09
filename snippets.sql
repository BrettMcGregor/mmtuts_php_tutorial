CREATE TABLE posts (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    subject VARCHAR(140) NOT NULL,
    content VARCHAR(1000) NOT NULL,
    date DATETIME NOT NULL    
);

INSERT INTO posts (subject, content, date) VALUES (
    'this is the subject',
    'this is the post content',
    '2018-09-09 10:09:01'
);


UPDATE posts
SET subject='this is a new subject', content='Updated content of post'
WHERE id=1;

DELETE FROM posts
WHERE id > 1;

CREATE TABLE users (
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_first VARCHAR(256) NOT NULL,
    user_last VARCHAR(256) NOT NULL,
    user_email VARCHAR(256) NOT NULL,
    user_uid VARCHAR(256) NOT NULL,
    user_pwd VARCHAR(256) NOT NULL
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (
    'Brett', 'McGregor', 'brett@brettmcgregor.com', 'Brett', 'brett1234'
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (
    'Andrea', 'Pepper', 'andrea@brettmcgregor.com', 'Andrea', 'andrea1234'
);