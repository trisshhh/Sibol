-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 01:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibol`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id`, `email`, `name`, `address`, `contact_no`) VALUES
(1, 'bboww@gmail.com', 'ABC ', 'albert partk', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skills`) VALUES
(1, 'Customer Service\r\nRetail'),
(2, 'Carpentry\r\nWelder\r\n'),
(3, 'Dishwasher'),
(4, 'business process');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--

CREATE TABLE `sponsorship` (
  `id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `sponsor_id` int(11) NOT NULL,
  `date_placed` datetime NOT NULL,
  `amount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainees`
--

CREATE TABLE `trainees` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainees`
--

INSERT INTO `trainees` (`id`, `email`, `fname`, `lname`, `password`, `contact_no`) VALUES
(1, 'loriF@gmail.com', 'Lori ', 'Ferguson', 'BvJYAukNGry96Gy', '+639562381333'),
(2, 'biwwu@gmail.com', 'Bowwi', 'Katigbak', 'wYgFmiQzC9idR3s', '+639567353877'),
(3, 'Bowwi@gmail.com', 'Boww', 'Katigbak', 'BvJYAukNGry96Gy', '+639567353877'),
(4, 'madiloy@national-u.edu.ph', 'Marlon', 'Diloy', 'BvJYAukNGry96Gy', '+639563742322');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_skills`
--

CREATE TABLE `trainee_skills` (
  `id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `training_programs`
--

CREATE TABLE `training_programs` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `jobposition_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `program_name` varchar(255) NOT NULL,
  `ratings` varchar(20) NOT NULL,
  `lecture` varchar(20) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `slots` int(11) NOT NULL,
  `trainees` int(11) NOT NULL,
  `Hours` int(11) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_programs`
--

INSERT INTO `training_programs` (`id`, `company_id`, `jobposition_id`, `company_name`, `description`, `program_name`, `ratings`, `lecture`, `instructor`, `slots`, `trainees`, `Hours`, `Photo`, `location`, `category`) VALUES
(1, 0, 0, '7/11 Philippines', ' assembling pieces of metal together or repairing damage in metal components using heavy machinery that emits high heat, melting the metal into shape', 'Shielded metal arc welding (course II)', '5.0', '4', 'Edmon Manggagawa', 0, 0, 268, '7-eleven.webp', '', 'Construction'),
(4, 0, 0, 'Bowheels', 'perform comprehensive auto repairs. Whether you drive a foreign or domestic car, truck or van, we can service every inch, bumper to bumper.', 'Mechanic Helper', '5.0', '7', 'Bowwi', 0, 0, 70, 'icons8-engine-oil-100.webp', '', 'Customer Service'),
(5, 0, 0, '7/11 Philippines', ' takes orders and answers questions on meal items,  takes orders and answers questions on meal items, prepares the bill that itemizes total meal costs and sales taxes.', 'Service Crew', '5.0', '5', 'bowwi', 0, 0, 50, '7-eleven.webp', '', 'IT'),
(6, 0, 0, 'PayaMansion', 'cleaning and reporting any safety hazards to the homeowner or manager in charge', 'Housekeeping', '5.0', '10', 'Bowwi', 0, 0, 40, '7-eleven.webp', '', 'Housekeeping'),
(10, 0, 0, 'Bowheels', ' provide companies with guidance in matters relating to law', 'Legal Advisor', '5.0', '34', 'Bowwi', 0, 0, 4, 'tires.png', '', 'Legal'),
(11, 0, 0, 'Bowheels', 'operate the POS Machine', 'Cashier', '5.0', '2', 'Bowwi', 0, 0, 40, 'tires.png', '', 'Accounting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainee_id` (`trainee_id`);

--
-- Indexes for table `trainees`
--
ALTER TABLE `trainees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee_skills`
--
ALTER TABLE `trainee_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainee_id` (`trainee_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `training_programs`
--
ALTER TABLE `training_programs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponsorship`
--
ALTER TABLE `sponsorship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainees`
--
ALTER TABLE `trainees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainee_skills`
--
ALTER TABLE `trainee_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_programs`
--
ALTER TABLE `training_programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD CONSTRAINT `sponsorship_ibfk_1` FOREIGN KEY (`trainee_id`) REFERENCES `trainees` (`id`);

--
-- Constraints for table `trainee_skills`
--
ALTER TABLE `trainee_skills`
  ADD CONSTRAINT `trainee_skills_ibfk_1` FOREIGN KEY (`trainee_id`) REFERENCES `trainees` (`id`),
  ADD CONSTRAINT `trainee_skills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
