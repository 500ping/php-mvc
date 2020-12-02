create database IF NOT EXISTS trainning;

use trainning;

drop table products;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title varchar(50),
    description varchar(255),
    image varchar(255),
    status int,
    create_at datetime,
    update_at datetime
);

insert into products (title, description, image, status, create_at) values ("test1", "ahihi!", "107507096_281995369776823_2440536306683297256_n.jpg.png", 1, now());
insert into products (title, description, image, status, create_at) values ("test1", "ahihi!", "107507096_281995369776823_2440536306683297256_n.jpg.png", 1, now());
insert into products (title, description, image, status, create_at) values ("test1", "ahihi!", "107507096_281995369776823_2440536306683297256_n.jpg.png", 1, now());
insert into products (title, description, image, status, create_at) values ("test1", "ahihi!", "107507096_281995369776823_2440536306683297256_n.jpg.png", 1, now());
insert into products (title, description, image, status, create_at) values ("test1", "ahihi!", "107507096_281995369776823_2440536306683297256_n.jpg.png", 1, now());
insert into products (title, description, image, status, create_at) values ("test1", "ahihi!", "107507096_281995369776823_2440536306683297256_n.jpg.png", 1, now());
insert into products (title, description, image, status, create_at) values ("test1", "ahihi!", "107507096_281995369776823_2440536306683297256_n.jpg.png", 1, now());
insert into products (title, description, image, status, create_at) values ("test1", "ahihi!", "107507096_281995369776823_2440536306683297256_n.jpg.png", 1, now());
