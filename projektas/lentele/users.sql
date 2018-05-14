-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 09:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `user_info` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_pwd`, `user_info`) VALUES
(1, 'Marjan', 'Peciukonis', 'aaa@aaa.lt', '$2y$10$qy.K4t4zx5bGKqdre0vSa./9AZPBaCYdc1e/3IDzW2vHrXRb5i4mO', 'Darbuojuos su medziu ir metalu, gaminu tautodailes gaminius'),
(2, 'Marjan', 'Peciukonis', 'bbb@bbb.lt', '$2y$10$6CQ4YNs8KrHhDp58F/g/DOlop7Mr/9Kb9iRV5CGDatghYafMU6PHW', NULL),
(3, 'asd', 'asd', 'ccc@ccc.lt', '$2y$10$yaATK1TtDeyRW1hK.GJax.MB6/.vr33Vi6LcusiOF6VOjOAOgGuDq', NULL),
(4, 'Marjan', 'Peciukonis', 'punchas19@gmail.com', '$2y$10$gJve6FrgRH0MychaanEAoOuXcEHiaeE1v4xwaQJJ5R.OnihCwrQJ2', NULL),
(5, 'ddd', 'ddd', 'ddd@ddd.lt', '$2y$10$5ihnpZJSoaVo9T4iLKz3.ujXVsnB5jLBRhnD8OkOnlZ16txNPor0y', NULL),
(6, 'eee', 'eee', 'eee@eee.lt', '$2y$10$n42yGfux8g1UyUSPtetrOuGM7pBzJeKF4AV9Sm0vy9GZ4eHa6GcBS', NULL),
(8, 'Testuoju', 'Testininka', 'test@test.lt', '$2y$10$9tDHZwHSk8RonRHT14Ye.e6HORSlskMXsrf3Zcpae2tDfjiM36i6m', 'Busiu plastmases meistras - gaminu ir perdirbu buitine plastmase, is jos gaminu viska, kas tik imanoma'),
(9, 'Petras', 'Petraitis', 'petras@petraitis.com', '$2y$10$6Wid15de0Zmlj4bryKeJxOhzR8FF8n0RzTfRboHZzrgsRSrqhYNNW', 'aaa'),
(10, 'Antanas', 'Antanaitis', 'antanas@antanaitis.lt', '$2y$10$V9XZE18kUn9RRam4sHShVuBpbrrEKlWnw3Ax4qM2UJVZKFMAFTrty', 'Dirbu su medziu ir stiklu. Dirbu stiklo putejo padejeju.'),
(11, 'Saulius', 'Pranaitis', 'saulius@saulius.lt', '$2y$10$W2ONdT0wjqe7ak4WWgED4eTaKYklvR7nqZ28iEsYc0ZKMEt58QYuO', 'Dirbu su medziu, stiklu. Dirbu staliaus padejeju.');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
