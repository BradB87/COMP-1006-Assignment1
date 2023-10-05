CREATE TABLE Assignment1 (
  id int not null auto_increment,
  fname VARCHAR(10) NOT NULL,
  lname VARCHAR(10) NOT NULL,
  address VARCHAR(50) NOT NULL,
  mobile VARCHAR(15) NOT NULL,
  email VARCHAR(255) NOT NULL,
  payment VARCHAR(20) NOT NULL,
  primary key (id)
);
INSERT into Assignment1(fname, lname, address, mobile, email, payment)
VALUES
('Buddy', 'Holly', '  123 Golden rock Lane','705-549-2685', 'buddyholly@mail.com', 'Visa'),
('Elvis', 'Presley', '136 Rock st','705-543-5463', 'Epresley@mail.com', 'Mastercard'),
('Freddy', 'Mercury', ' 50 Queen st','705-549-2786', 'queen_1@mail.com', 'American Express'),
('Rodger', 'Keith', ' 54  Wallstreet st','705-543-6925', 'pfloyd@mail.com', 'Visa');


