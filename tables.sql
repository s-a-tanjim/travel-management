CREATE TABLE users( 
    user_id int(10) not null AUTO_INCREMENT PRIMARY KEY, 
    first_name varchar(256) not null, 
    last_name varchar(256) not null, 
    email varchar(256) not null, 
    password varchar(256) not null,
    mobile_no varchar(256) not null,
    role varchar(50) default 'user',
    address varchar(256) not null
  );


CREATE TABLE contact(
  name varchar(256) not null, 
  email varchar(256) not null, 
  subject varchar(256) not null,
  message varchar(256) not null,
  submit_time datetime DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE packages(
  city varchar(256) not null, 
  description varchar(256) not null, 
  days varchar(50) not null, 
  flight varchar(256) not null, 
  hotel varchar(256) not null, 
  cost varchar(50) not null, 
  img_url varchar(256) not null,
  page_url varchar(256) not null
);



CREATE TABLE hotel_book(
  first_name varchar(256) not null,
  last_name varchar(256) not null,
  phone_no varchar(256) not null,
  email varchar(256) not null,
  from_date varchar(50) not null,
  to_date varchar(50) not null,
  guest_no varchar(50) not null,
  room_type varchar(100) not null,
  status varchar(100) DEFAULT 'pending'
);


CREATE TABLE flight_book(
  name varchar(256) not null,
  email varchar(256) not null,
  flight_type varchar(256) not null,
  flying_from varchar(256) not null,
  flying_to varchar(256) not null,
  departing_date varchar(50) not null,
  returning_date varchar(50) not null,
  adult_count varchar(50) not null,
  child_count varchar(50) not null,
  travel_class varchar(100) not null,
  status varchar(100) DEFAULT 'pending'
);











DROP TABLE users;
