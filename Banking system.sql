CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Bhuvi', 'kk', 100),
('Raja', 'Hari', 50),
('surya', 'Mohith', 200),
('Chandra', 'Raja', 100),
('Hari', 'Bhuvi', 110),
('BB', 'Ben', 110);



CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users`(`name`, `email`, `amount`) VALUES
('Chandra', 'chandra@gmail.com', 1010),
('Raju', 'raja@gmail.com', 990),
('Hari', 'hari@gmail.com', 1000),
('Bhuvi', 'bhuvi@gmail.com', 950),
('kk', 'kk@gmail.com', 1000),
('BB', 'bb@gmail.com', 1000),
('Surya', 'surya@gmail.com', 1000),
('Ben', 'ben@gmail.com', 1050),
('Mohith', 'mohith@gmail.com', 800),
('Sri', 'sri@gmail.com', 1200);

COMMIT;
