-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 06:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `showtime_id` int(11) DEFAULT NULL,
  `Booking_date` datetime DEFAULT NULL,
  `Number_of_Tickets` int(11) DEFAULT NULL,
  `ticket_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `Genre` varchar(200) DEFAULT NULL,
  `Poster` varchar(200) DEFAULT NULL,
  `Release_Date` date DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Trailer` varchar(200) DEFAULT NULL,
  `Rating` decimal(5,1) DEFAULT NULL,
  `runtime` varchar(50) DEFAULT NULL,
  `director` varchar(100) DEFAULT NULL,
  `cast` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `Genre`, `Poster`, `Release_Date`, `Description`, `Trailer`, `Rating`, `runtime`, `director`, `cast`) VALUES
(4, 'Interstellar', 'Sci-fi/Adventure', 'int.jpg', '2014-11-26', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 'https://www.youtube.com/watch?v=zSWdZVtXT7E', '8.7', '2h 49m', 'Christopher Nolan', '	Matthew McConaughey,Mackenzie Foy'),
(5, 'The Batman (2022)', 'Action/Crime', 'batman.jpg', '2022-03-04', 'When a sadistic serial killer begins murdering key political figures in Gotham, Batman is forced to investigate the citys hidden corruption and question his familys involvement.', 'https://www.youtube.com/watch?v=mqqft2x_Aa4', '7.8', '2h 56m', 'Matt Reeves', 'Robert Pattinson,Zoë Kravitz'),
(6, 'John Wick: Chapter 4', 'Action/Thriller', 'j.jpg', '2023-03-24', 'With the price on his head ever increasing, legendary hit man John Wick takes his fight against the High Table global as he seeks out the most powerful players in the underworld, from New York to Paris to Japan to Berlin.', 'https://www.youtube.com/watch?v=qEVUtrk8_B4', '7.7', '2h 49m', 'Chad Stahelski', '	Keanu Reeves,Laurence Fishburne'),
(7, 'Ford v Ferrari', 'Sport/Action', 'fvf.jpg', '2019-08-30', 'Carroll Shelby, an automotive designer, and Ken Miles, a race car driver, join hands to build a trailblazing vehicle and compete against the Ferrari race cars.', 'https://www.youtube.com/watch?v=zyYgDtY2AMY', '8.1', '2h 32m', 'James Mangold', 'Matt Damon,Christian Bale'),
(9, 'Nobody', 'Action/Thriller', 'nobody.jpg', '2021-03-26', 'Hutch Mansell finds his life changed when a few thieves break into his house. While trying to punish the thieves, he ends up earning the wrath of a crime lord, Yulian, after he attacks his brother.', 'https://www.youtube.com/watch?v=wZti8QKBWPo', '7.4', '1h 32m', 'Ilya Naishuller', 'Bob Odenkirk,Aleksey Serebryakov');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `cast` varchar(200) DEFAULT NULL,
  `newsdate` date DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `poster` varchar(500) DEFAULT NULL,
  `trailer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `cast`, `newsdate`, `description`, `poster`, `trailer`) VALUES
(1, 'Godzilla x Kong: The New Empire', 'TBA', '2024-04-12', 'Godzilla and the almighty Kong face a colossal threat hidden deep within the planet, challenging their very existence and the survival of the human race.', 'godzilla.jpg', 'https://www.youtube.com/watch?v=9jiUbfEtwcY'),
(2, 'Deadpool 3', 'TBA', '2024-07-26', 'Wolverine is recovering from his injuries when he crosses paths with the loudmouth, Deadpool. They team up to defeat a common enemy.', 'd3.jpg', 'https://www.imdb.com/title/tt6263850/'),
(4, 'Kraven the Hunter', 'TBA', '2024-08-30', 'Russian immigrant Sergei Kravinoff sets out on a mission to prove himself as the greatest hunter in the world.', 'kraven.jpg', 'https://www.youtube.com/watch?v=rze8QYwWGMs');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `Rating` datetime DEFAULT NULL,
  `Comment` varchar(200) DEFAULT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE `screens` (
  `id` int(11) NOT NULL,
  `theater_id` int(11) DEFAULT NULL,
  `screen_name` varchar(100) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `charge` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`id`, `theater_id`, `screen_name`, `seats`, `charge`) VALUES
(1, 1, 'Screen 1', 159, 1600);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `Theater_id` int(11) DEFAULT NULL,
  `Class` varchar(50) DEFAULT NULL,
  `Seat_number` int(11) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `Theater_id` int(11) DEFAULT NULL,
  `showdatetime` datetime DEFAULT NULL,
  `Class` varchar(50) DEFAULT NULL,
  `Rates` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`id`, `movie_id`, `Theater_id`, `showdatetime`, `Class`, `Rates`, `name`) VALUES
(1, 4, 1, '2024-01-12 17:00:00', 'Platinum', 1600, 'Noon'),
(2, 5, 2, '2024-01-15 17:00:00', 'Gold', 1200, 'Noon'),
(3, 6, 4, '2024-01-15 17:00:00', 'Box', 800, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(11) NOT NULL,
  `Theater_Name` varchar(200) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL,
  `Class` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `Theater_Name`, `Location`, `Capacity`, `Class`) VALUES
(1, 'Nueplex Cinema', 'The Place, Khayaban-e-Shaheen, D.H.A. Phase 8 Zone B Phase 8 Defence Housing Authority, Karachi, Sindh', 150, 'Platinum'),
(2, 'Cinepax Cinema', '5 Khayaban-e-Roomi, Block 9 Clifton, Karachi City, Sindh', 200, 'Platinum'),
(3, 'Mega Multiplex Cinema – Millenium Mall', 'Millennium Mall, Rashid Minhas Rd, Gulistan-e-Johar, Karachi, Karachi City, Sindh', 120, 'Gold'),
(4, 'Atrium Cinema', 'MBL Panorama Karachi Cantonment, Karachi City, Sindh', 64, 'Box');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `user_password` varchar(250) DEFAULT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `user_name`, `user_password`, `user_email`, `age`) VALUES
(1, 1, 'admin', 'admin123', 'admin@gmail.com', NULL),
(2, 2, 'user', 'user123', 'user@gmail.com', NULL),
(3, 2, 'Aghakhan', 'agha123', 'aghakhan@gmail.com', NULL),
(4, 2, '312413', '$2y$10$rGTGmdqE6YqvYjjIxH4iMeYbTSXSkmZwKwvHBauQB2IF/GWLkBEfS', 'qsdqwsd@sa.com', NULL),
(5, 2, 'Talha Faiz', '6932562', '22talhafaiz@gmail.com', 0),
(6, 2, 'Test', 'test', 'Test@gmail.com', 20),
(7, 2, 'nawazhassan', 'test', 'nawazhassan@gmail.com', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `showtime_id` (`showtime_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theater_id` (`theater_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Theater_id` (`Theater_id`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `Theater_id` (`Theater_id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`user_email`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`showtime_id`) REFERENCES `showtime` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `screens`
--
ALTER TABLE `screens`
  ADD CONSTRAINT `screens_ibfk_1` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`id`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`Theater_id`) REFERENCES `theater` (`id`);

--
-- Constraints for table `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `showtime_ibfk_2` FOREIGN KEY (`Theater_id`) REFERENCES `theater` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
