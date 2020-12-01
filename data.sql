create database trainning;

use trainning;

CREATE TABLE products (
id INT AUTO_INCREMENT PRIMARY KEY,
title varchar(50),
description varchar(255),
image varchar(255),
status int,
create_at datetime,
update_at datetime
);