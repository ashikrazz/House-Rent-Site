-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 10:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_rent_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(13) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_password`, `admin_address`) VALUES
(1, 'Abu Noman Shikhon', 'abunoman@gmail.com', '01795738105', '123456', 'Dhanmondi,Dhaka-1202');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_id` int(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(355) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_id`, `name`, `phone`, `email`, `password`, `image`) VALUES
(9, 'Philip Smith', '01725789634', 'philipsmith@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Philip Smith.png'),
(10, 'Alex Smith', '01873689001', 'AlexSmith@gmail.com', '83b4ef5ae4bb360c96628aecda974200', 'Alex Smith.png'),
(11, 'Amanda Walker', '01936789463', 'Amanda068@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Amanda Walker.png'),
(13, 'Katie Smith', '01873689463', 'KatieSmith@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Katie Smith.png'),
(14, 'Adam Barney', '01725789463', 'AdamBarney@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adam Barney.png'),
(15, 'Aka Danny', '01310402719', 'akadanny@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Aka Danny.png');

-- --------------------------------------------------------

--
-- Table structure for table `create_post`
--

CREATE TABLE `create_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_description` text DEFAULT NULL,
  `post_image` varchar(355) DEFAULT NULL,
  `post_category` varchar(255) DEFAULT NULL,
  `post_type` varchar(255) DEFAULT NULL,
  `sublet` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `area_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `negotiable` varchar(255) DEFAULT NULL,
  `agent_id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_post`
--

INSERT INTO `create_post` (`post_id`, `post_title`, `post_description`, `post_image`, `post_category`, `post_type`, `sublet`, `month`, `district`, `area_name`, `address`, `price`, `negotiable`, `agent_id`) VALUES
(4, 'Apartment Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.', 'Apartment Title.jpg', 'family', 'flat', 'no', 'june', 'Dhaka', 'Mohammadpur Kadirabad Housing', 'Road No: 02, House No: 15, Mohammadpur Kadirabad Housing, Dhaka', 35000, 'no', 9),
(5, 'Apartment Title 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.', 'Apartment Title 1.jpg', 'employee', 'flat', 'yes', 'june', 'Dhaka', 'Chad Mia Housing', 'Road No: 02, House No: 15, Chad Mia Housing, Dhaka', 11000, 'no', 10),
(6, 'Apartment Title 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.', 'Apartment Title 2.jpg', 'family', 'flat', 'no', 'june', 'Dhaka', 'Dhanmondi', 'Road No: 04, House No: 25, Dhanmondi 15, Dhaka', 25000, 'no', 11),
(7, 'Apartment Title 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.', 'Apartment Title 3.jpg', 'bachelor', 'room', 'no', 'july', 'Dhaka', 'Dhanmondi', 'Road No: 02, House No: 20, Dhanmondi 32, Dhaka', 8000, 'no', 13),
(8, 'Apartment Title 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.', 'Apartment Title 4.jpg', 'female_student', 'room', 'yes', 'august', 'Dhaka', 'Dhanmondi', 'Road No: 04, House No: 25, Dhanmondi 27, Dhaka', 9000, 'no', 14),
(9, 'Apartment Title 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.', 'Apartment Title 5.jpg', 'family', 'flat', 'no', 'september', 'Dhaka', 'Gulshan', 'Road No: 04, House No: 25, Gulshan 01, Dhaka', 40000, 'no', 15);

-- --------------------------------------------------------

--
-- Table structure for table `create_user_post`
--

CREATE TABLE `create_user_post` (
  `user_post_id` int(11) NOT NULL,
  `user_post_title` varchar(255) NOT NULL,
  `user_post_description` text NOT NULL,
  `user_post_image` varchar(355) NOT NULL,
  `user_post_category` varchar(255) NOT NULL,
  `user_post_type` varchar(255) NOT NULL,
  `sublet` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `negotiable` varchar(255) NOT NULL,
  `user_id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_user_post`
--

INSERT INTO `create_user_post` (`user_post_id`, `user_post_title`, `user_post_description`, `user_post_image`, `user_post_category`, `user_post_type`, `sublet`, `month`, `district`, `area_name`, `address`, `price`, `negotiable`, `user_id`) VALUES
(1, 'White Concrete Temple', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'White Concrete Temple.jpg', 'family', 'flat', 'no', 'june', 'Kushtia', 'Mirpur', 'Mirpur, Kushtia - 7049', 45000, 'yes', 1),
(2, 'Brown Apartment', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Brown Apartment.jpg', 'employee', 'floor', 'no', 'august', 'Kushtia', 'Kumarkhali', 'Kumarkhali, Kushtia - 7021', 30000, 'no', 2),
(3, 'Blue Linen Sectional', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Blue Linen Sectional.jpg', 'female_student', 'room', 'yes', 'august', 'Dhaka', 'Mohammadpur', 'Mohammadpur Housing', 8000, 'no', 3),
(4, 'White and Black Apartment', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'White and Black Apartment.jpg', 'bachelor', 'seat', 'no', 'july', 'Dhaka', 'Mohammadpur', 'Kadirabad Housing Ltd', 6000, 'no', 4),
(5, ' Gray Concrete Building', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', ' Gray Concrete Building.jpg', 'employee', 'flat', 'no', 'august', 'Dhaka', 'Farmgate', 'farmgate, road No-2, Dhaka 1202', 31500, 'yes', 5),
(6, 'White and Blue  Building', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'White and Blue High-rise Building.jpg', 'bachelor', 'seat', 'no', 'july', 'Dhaka', 'Mohammadpur', 'Kadirabad Housing Ltd', 28500, 'yes', 6);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `method_number` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `p_t_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `name`, `email`, `phone`, `type`, `method`, `method_number`, `amount`, `p_t_id`, `date`, `image`) VALUES
(1, 'Rj Farhan', 'rjfarhan@gmail.com', '01785643210', 'user', 'bkash', '01785643210', 6000, '7IRWCMOUO', '2022-05-26T13:05', '7IRWCMOUO.jpg'),
(2, 'Aka Danny', 'akadanny@gmail.com', '01310402719', 'agent', 'rocket', '01310402719', 11000, '82RWCMOCD', '2022-05-26T13:11', '82RWCMOCD.jpg'),
(3, 'Md. Rohan Talukdar', 'mdrohantalukdar@gmail.com', '01785469217', 'user', 'nagad', '01785469217', 9000, '000045MU', '2022-05-25T13:16', '000045MU.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(13) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_nid_number` varchar(255) NOT NULL,
  `user_image` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_password`, `user_nid_number`, `user_image`) VALUES
(1, 'Rj Farhan', '01785643210', 'rjfarhan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '5246190341', 'Rj Farhan.png'),
(2, 'Md. Rohan Talukdar', '01785469217', 'mdrohantalukdar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '4759862147', 'Md. Rohan Talukdar.png'),
(3, 'Mst. Israt Jahan', '01687520147', 'mstisratjahan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '4571023698', 'Mst. Israt Jahan.png'),
(4, 'Fahmida Mumu', '01889745203', 'fahmidamumu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '40247896310', 'Fahmida Mumu.png'),
(5, 'Mst. Roksana Khan', '01685215937', 'mstroksanakhan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '7854123687', 'Mst. Roksana Khan.png'),
(6, 'Mst. Jesmin Akhter', '01745695104', 'mstjesminakhter@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '4257896310', 'Mst. Jesmin Akhter.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `create_post`
--
ALTER TABLE `create_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk` (`agent_id`);

--
-- Indexes for table `create_user_post`
--
ALTER TABLE `create_user_post`
  ADD PRIMARY KEY (`user_post_id`),
  ADD KEY `cup_FK` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `create_post`
--
ALTER TABLE `create_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `create_user_post`
--
ALTER TABLE `create_user_post`
  MODIFY `user_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `create_post`
--
ALTER TABLE `create_post`
  ADD CONSTRAINT `fk` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`agent_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `create_user_post`
--
ALTER TABLE `create_user_post`
  ADD CONSTRAINT `cup_FK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
