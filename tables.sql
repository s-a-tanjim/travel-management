CREATE TABLE users( 
    user_id int(10) not null AUTO_INCREMENT PRIMARY KEY, 
    first_name varchar(256) not null, 
    last_name varchar(256) not null, 
    email varchar(256) not null, 
    password varchar(256) not null,
    mobile_no varchar(256) not null, 
    address varchar(256) not null
  );