-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 05:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polling`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `vote_for` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `vote_for`, `user_id`, `email`) VALUES
('Rituparna', 'Chowdhury', 'Python', 4, 'rituparnachowdhury@ymail.com'),
('Debarghya', 'Chowdhury', 'Java', 5, 'debarghyachowdhury2k17@ymail.com'),
('Dilip Kumar', 'Chowdhury', 'Python', 6, 'dilipchowdhury34@gmail.com'),
('Debarghya', 'Chowdhury', 'C++', 7, 'dilipchowdhury345@gmail.com'),
('Rituparna', 'Chowdhury', 'Java', 8, 'rituparnachowdhury1234@ymail.com'),
('Rituparna', 'Chowdhury', 'Python', 9, 'rituparnachowdhury12345@ymail.com'),
('Rituparna', 'Chowdhury', 'C#', 10, 'rituparnachowdhury1999@ymail.com'),
('Rituparna', 'Chowdhury', 'Python', 11, 'rituparnachowdhury2000@ymail.com'),
('Andrew', 'Sahni', 'Python', 12, 'andrew.neil@gmail.com'),
('Rituparna', 'Chowdhury', 'Python', 13, 'rituparnachowdhuryftgyy@ymail.com'),
('Debarghya ', 'Chowdhury', 'Python', 14, '1831016@kiit.ac.in'),
('Rituparna', 'Chowdhury', 'C#', 15, 'rituparnachowdhuryvbgr@ymail.com'),
('Rituparna', 'Chowdhury', 'C++', 16, 'rituparnachowdhury12334567@ymail.com'),
('Rituparna', 'Chowdhury', 'Python', 17, 'rituparnachowdhury33344@ymail.com'),
('Shyam', 'Sinha', 'C++', 18, '123456@gmail.com'),
('Rituparna', 'Chowdhury', 'Python', 19, 'rituparnachowdhuryggwh@ymail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
