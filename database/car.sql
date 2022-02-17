-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 06:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `brand` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `capability` varchar(100) NOT NULL,
  `mileage` varchar(100) NOT NULL,
  `engine` varchar(100) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `num_of_door` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `reviews` int(100) NOT NULL,
  `pcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `image`, `brand`, `color`, `capability`, `mileage`, `engine`, `transmission`, `num_of_door`, `category`, `price`, `tags`, `reviews`, `pcode`) VALUES
(1, 'BMW 3 Series', 'car_1.jpg', 'BMW ', 'White', '4', '11.86 kmpl to 20.37 kmpl', '1998cc', 'Automatic', '4', 'Sedan', '720', 'BMW, Luxury, white', 2, 'c101'),
(4, 'Audi RS 7', 'car_3.jpg', 'Audi', 'Black', '4', '15 MPG City/22 MPG Highway', '591 HP', 'Eight-speed Tiptronic® automatic transmission', '4', 'Sedan', '680', 'Audi, Family', 2, 'c104'),
(5, 'Toyota Crown 2014 Athlete S', 'car_4.jpg', 'Toyota', 'White', '4', 'City 13.00 and Highway 18.00', '2500 cc', 'Automatic', '4', 'Sedan', '410', 'Family, Budget, Toyota', 1, 'c105'),
(6, 'Honda-CR-V-2018 Ex', 'car_5.jpg', 'Hundai', 'Pearl', '7', '28 city / 34 highway', '1500cc ', 'Automatic', '4', 'Suv', '490', 'Large, Honda, Mileage', 3, 'c106'),
(7, '2014 Chrysler Town & Country', 'car_7.jpg', 'Chrysler', 'Gray', '7', '17 city / 25 highway', '260Hp @ 4400rpm', '6-Speed Automatic 62TE', '4', 'Mini-van', '400', 'Mini-van, large', 4, 'c107'),
(8, 'Eicher Pro 2110', 'car_8.jpg', 'Eicher', 'White', '11990 kg', '7.25 kmpl to 10.32 kmpl', '160 hp @ 3800rpm', 'Manual', '2', 'Truck', '500', 'Truck, Covered Van, heavy, Delivery', 3, 'c108'),
(9, '2018 Mercedes-AMG G65', 'car_9.jpg', 'Mercedes', 'yellow', '6 person', 'MPG 11 city MPG 13 highway', '6.0L Twin-Turbo V12 Gas', '7-Speed Automatic', '5', 'Suv', '680', 'off-road, 4 wheeler, Mercedes', 3, 'c109'),
(10, 'Tata Osage Ambulance', 'car_10.jpg', 'Tata', 'white', '6 person', '28 kmpl @ 34 kmpl ', '100 hp with 2200rpm', 'Automatic', '3', 'Ambulance', '380', 'Ambulance, Emergency', 2, 'c110');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `hours` int(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `pcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `hours`, `total_price`, `pcode`) VALUES
(62, 2, 'Honda-CR-V-2018 Ex', '490', 36, 17640, 'c106'),
(63, 2, 'Jeremy Levin', '100', 48, 4800, 'd104'),
(72, 5, 'BMW 3 Series', '720', 24, 17280, 'c101'),
(73, 5, 'Jeremy Levin', '100', 48, 4800, 'd104'),
(101, 4, 'Nissan GT-R R35', '680', 1, 680, 'c102'),
(109, 3, 'Honda-CR-V-2018 Ex', '490', 36, 17640, 'c106'),
(110, 3, 'Shubh Lingwal', '92', 36, 3312, 'd105'),
(111, 6, 'Eicher Pro 2110', '500', 36, 18000, 'c108'),
(112, 6, 'David Besh', '120', 36, 4320, 'd106'),
(113, 2, 'Toyota Crown 2014 Athlete S', '410', 1, 410, 'c105'),
(114, 7, '2018 Mercedes-AMG G65', '680', 60, 40800, 'c109'),
(122, 8, 'Michael Soft', '120', 36, 4320, 'd103'),
(123, 8, '2014 Chrysler Town & Country', '400', 36, 14400, 'c107');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Araf', 'araf@mail.com', 'hi', 'Hello there'),
(2, 'Faisal', 'faisal@amir.com', 'Need Help', 'I need to talk'),
(3, 'Faisal', 'faisal@amir.com', 'Need Help', 'I need to talk'),
(5, 'amir', 'hey@gmail.com', 'asa', 'sdasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `image` text NOT NULL,
  `experiance` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `pcode` varchar(100) NOT NULL,
  `reviews` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `phone`, `image`, `experiance`, `price`, `pcode`, `reviews`) VALUES
(1, 'Johnny William', 1816151111, 'driver_1.jpg', 6, 120, 'd101', 2),
(2, 'George Walker', 1816152222, 'driver_2.jpg', 3, 60, 'd102', 2),
(3, 'Michael Soft', 1816153333, 'driver_3.jpg', 11, 120, 'd103', 3),
(4, 'Jeremy Levin', 1632233333, 'driver_4.jpg', 8, 100, 'd104', 1),
(5, 'Shubh Lingwal', 1632233344, 'driver_5.jpg', 7, 92, 'd105', 2),
(6, 'David Besh', 1816158888, 'driver_6.jpg', 12, 120, 'd106', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` int(100) NOT NULL,
  `exp_date` date NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `pick_date` date NOT NULL,
  `pick_time` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `order_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `card_name`, `card_number`, `exp_date`, `pickup`, `pick_date`, `pick_time`, `status`, `order_time`) VALUES
(2, 2, 'Afrime Araf', 99887766, '2022-01-30', 'Chittagong', '2021-11-06', '12:00:00', 'delivered', '0000-00-00'),
(25, 5, 'Shabbir Ahmed', 33434232, '2022-03-30', 'Chittagong', '2021-11-14', '16:08:00', 'delivered', '0000-00-00'),
(35, 3, 'user', 2147483647, '2022-03-24', 'Shylet', '2022-01-06', '22:00:00', 'delivered', '0000-00-00'),
(36, 3, 'User', 435345345, '2022-04-22', 'Coxs Bazar', '2022-01-20', '21:25:00', 'delivered', '0000-00-00'),
(37, 6, 'faisal', 837478934, '2022-01-27', 'Shylet', '2022-01-12', '10:10:00', 'delivered', '0000-00-00'),
(38, 7, 'somir', 2147483647, '2022-05-19', 'Chittagong', '2022-02-08', '08:40:00', 'undelivered', '0000-00-00'),
(48, 8, 'sabuj', 23423423, '2022-03-31', 'Dhaka', '2022-02-12', '12:15:00', 'canceled', '2022-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(100) NOT NULL,
  `review_pcode` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `review` varchar(400) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_pcode`, `user_id`, `username`, `rating`, `review`, `time`) VALUES
(2, 'c104', 5, 'nibir', 4, 'I wish I could know everything ever, like that would be my wish - that\'s what I hope heaven is, that they tell you who shot JFK and all that stuff.\r\n\r\n', '2021-11-10 16:16:31'),
(4, 'c102', 5, 'nibir', 5, 'I love driving cars, looking at them, cleaning and washing and shining them. I clean \'em inside and outside. I\'m very touchy about cars. I don\'t want anybody leaning on them or closing the door too hard, know what I mean?\r\n\r\n', '2021-11-10 16:20:27'),
(5, 'd103', 5, 'nibir', 5, 'People spend so much time in their cars, and it\'s a legal way to have fun by speeding a little bit or testing yourself a little bit, and you get to invest in your car. For some people, it becomes their baby.\r\n\r\n', '2021-11-10 16:26:55'),
(6, 'c106', 3, 'user', 4, 'I am a big car enthusiast. I totally understand guys like Jay Leno who have a thousand cars. But asking me my favorite car would be like asking my favorite song or favorite food - it changes everyday.\r\n\r\n', '2021-11-10 16:29:15'),
(7, 'd104', 3, 'user', 5, 'nice skills', '2021-11-10 16:29:31'),
(8, 'd101', 3, 'user', 4, 'He is skilled, But his behave could be a bit better', '2021-11-10 16:31:13'),
(9, 'd101', 3, 'user', 4, 'Perfect Driving', '2021-11-10 16:31:44'),
(10, 'c105', 3, 'user', 5, 'Nice car with perfect mileage.', '2021-11-10 16:33:06'),
(14, 'd103', 4, 'amir', 5, 'nice guys with skill', '2021-11-10 16:38:24'),
(15, 'c101', 4, 'amir', 3, 'If you want to go fast then this car is for you. I just loved the service of the car.', '2021-11-10 16:49:31'),
(16, 'c107', 3, 'user', 1, 'bad car', '2021-11-17 05:16:58'),
(17, 'c102', 4, 'amir', 3, 'price should be reduced a bit ', '2021-11-17 18:39:00'),
(18, 'c107', 4, 'amir', 4, 'In comparison to milage price is good for 7 people', '2021-11-17 18:43:03'),
(19, 'c104', 4, 'amir', 2, 'overpriced', '2021-11-17 18:44:06'),
(20, 'c107', 4, 'amir', 5, 'Old car but still quite enough good', '2021-11-17 18:45:49'),
(21, 'c107', 4, 'amir', 1, 'Not good for the speed', '2021-11-17 18:46:18'),
(22, 'd102', 2, 'afrimearaf', 4, 'He is skilled, But his behave could be a bit better', '2021-11-17 21:31:16'),
(23, 'd102', 2, 'afrimearaf', 3, 'Communication is more important when you are traveling for a while together and he is just quite and calm all the time', '2021-11-17 21:33:09'),
(24, 'd103', 3, 'user', 2, 'Bad behavior', '2021-11-17 21:42:04'),
(25, 'd106', 3, 'user', 5, 'Driving skill is awesome', '2021-11-17 21:49:05'),
(26, 'c108', 3, 'user', 5, 'Perfect pricing with its capability and price', '2021-11-17 22:26:07'),
(27, 'c109', 2, 'afrimearaf', 5, 'Monstar', '2021-11-17 23:10:36'),
(28, 'c110', 2, 'afrimearaf', 5, 'It is one of the best vehicles for emergencies. Thank you', '2021-11-17 23:11:33'),
(29, 'c109', 3, 'user', 5, 'One of the best car for off road tracking', '2021-11-18 00:33:58'),
(30, 'c109', 3, 'user', 4, 'wonderful car', '2021-11-18 00:34:47'),
(31, 'c106', 2, 'afrimearaf', 3, 'Milage is good but not good on the side of comfortability', '2021-11-18 00:43:04'),
(32, 'c106', 2, 'afrimearaf', 3, 'Milage is good but not good on the side of comfortability', '2021-11-18 00:43:16'),
(33, 'c108', 2, 'afrimearaf', 3, 'Its height is low could not fit my showcase', '2021-11-18 00:46:38'),
(34, 'd105', 3, 'user', 4, 'nice skills', '2021-11-22 20:17:50'),
(35, 'd106', 4, 'amir', 5, 'Nice Skills. Smooth Driving', '2021-12-12 00:20:37'),
(36, 'c110', 3, 'user', 4, 'This ambulance helped me to save my friends life', '2022-01-04 16:02:45'),
(37, 'c108', 6, 'faisal', 4, 'nice heavy truck', '2022-01-09 20:49:53'),
(38, 'd106', 6, 'faisal', 5, 'Nice driving skills', '2022-01-09 20:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nid` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `firstname`, `lastname`, `phone`, `email`, `nid`, `address`, `position`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '01632237646', 'admin@admin.com', 2147483647, 'Halishahar, Chittagong', 'admin', 'admin', 'assigned'),
(2, 'afrimearaf', 'Afrime', 'Araf', '01752003618', 'afrimectg@gmail.com', 2147483647, 'Khulshi, Chittagong', 'user', '1234', 'assigned'),
(3, 'user', 'user', 'user', '01752003618', 'user@user.com', 2147483647, 'Agrabad, Chittagong', 'user', 'user', 'assigned'),
(4, 'amir', 'Amir', 'Faisal', '111111111', 'amir@faisal.com', 1122334456, 'Agrabad, Chittagong', 'user', 'amir', 'assigned'),
(5, 'nibir', 'Shabbir', 'Ahmed', '01752003618', 'sahbbir@ahmed.com', 2147483647, 'AK Khan, Chittagong', 'user', '1234', 'assigned'),
(6, 'faisal', 'faisal', 'faisal', '01752003618', 'faisal@gmail.com', 2147483647, 'Halishahar, Chittagong', 'user', '1234', 'assigned'),
(7, 'somir', 'somir', 'somir', '1816151112', 'somir@user.com', 49784772, 'CDA 16, Agrabad', 'user', '1234', 'unassigned'),
(8, 'sabuj', 'sabuj', 'sabuj', '231231', 'sabuj@user.com', 2432423, 'agrabad', 'user', '123', 'unassigned');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
