-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2025 at 08:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `category` enum('Medical','Education','Food','Housing','Emergency','Elderly Care','General') NOT NULL,
  `donation_type` enum('Money','Goods','Services','Volunteer Time') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`id`, `name`, `phone`, `email`, `address`, `category`, `donation_type`) VALUES
(1, 'Priya Sharma', '9876543211', 'priya.s@example.com', '123 MG Road, Bengaluru, Karnataka', 'Education', 'Goods'),
(2, 'Amit Patel', '9876543212', 'amit.p@example.com', '45 Gandhi Marg, Pune, Maharashtra', 'Food', 'Services'),
(3, 'Sunita Reddy', '9876543213', 'sunita.r@example.com', '789 Link Road, Chennai, Tamil Nadu', 'General', 'Volunteer Time'),
(4, 'Rajesh Kumar', '9876543210', 'rajesh.k@example.com', '10 Park Street, Kolkata, West Bengal', 'Medical', 'Money'),
(5, 'Meena Devi', '9876543214', 'meena.d@example.com', '50 Civil Lines, New Delhi, Delhi', 'Elderly Care', 'Volunteer Time'),
(11, 'suba', '987654321', 'suba2025@gmail.com', 'VIT Chennai, Tamil Nadu.', 'Education', 'Goods');

-- --------------------------------------------------------

--
-- Table structure for table `girl_child_requests`
--

CREATE TABLE `girl_child_requests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `girl_name` varchar(255) DEFAULT NULL,
  `girl_age` int(11) NOT NULL,
  `help_category` varchar(100) NOT NULL,
  `query_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `helpee`
--

CREATE TABLE `helpee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `category` enum('Medical','Education','Food','Housing','Emergency','Elderly Care','General') NOT NULL,
  `amount_needed` decimal(10,2) DEFAULT NULL,
  `querry` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `helpee`
--

INSERT INTO `helpee` (`id`, `name`, `phone`, `email`, `address`, `category`, `amount_needed`, `querry`) VALUES
(25, 'Sara Khan', '9876543220', 'sara.k@example.com', '123 ABC Street, New Delhi, Delhi', 'Medical', 75000.00, 'Need funds for urgent heart surgery.'),
(26, 'S. Meenakumari', '9876543221', 'meena.s@example.com', '456 DEF Road, Kanniyakumari, Tamil Nadu', 'Education', 25000.00, 'Seeking aid for school supplies and tuition fees.'),
(27, 'Sarabjeet', '9876543222', 'sara.j@example.com', '789 GHI Lane, Ludhiyana, Punjab', 'Food', 15000.00, 'Requesting grocery assistance for my family.'),
(28, 'Jessi Punawala', '9876543223', 'jessi.p@example.com', '101 JKL Avenue, Amritsar, Punjab', 'Elderly Care', 5000.00, 'Need help with daily care for an elderly parent.'),
(29, 'Radha Devi', '9876543224', 'radha.d@example.com', '202 MNO Colony, Sonipat, Haryana', 'Housing', 40000.00, 'Seeking emergency shelter'),
(30, 'Dev Kumar', '9876543225', 'dev.k@example.com', '303 PQR Complex, Surat, Gujarat', 'General', 10000.00, 'Need general support for starting a business.'),
(31, 'maitri', '987654321', 'suba2025@gmail.com', 'vit chennai, TN', 'Education', 5000.00, 'need books for engineering.');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `type` enum('NGO','Food Bank','Donation Center','Old Age Home','Hospital','Shelter') NOT NULL,
  `address` text DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `name`, `type`, `address`, `latitude`, `longitude`) VALUES
(1, 'Akshaya Patra Foundation', 'NGO', 'Bengaluru, Karnataka', 12.97000000, 77.59000000),
(2, 'Child Rights and You (CRY)', 'NGO', 'Mumbai, Maharashtra', 19.07050000, 72.87050000),
(3, 'Goonj', 'NGO', 'New Delhi, Delhi', 28.61050000, 77.20050000),
(4, 'Pratham', 'NGO', 'Mumbai, Maharashtra', 19.06950000, 72.86950000),
(5, 'HelpAge India', 'NGO', 'New Delhi, Delhi', 28.61100000, 77.20100000),
(6, 'Nanhi Kali', 'NGO', 'Mumbai, Maharashtra', 19.07100000, 72.87100000),
(7, 'Smile Foundation', 'NGO', 'New Delhi, Delhi', 28.60950000, 77.19950000),
(8, 'Sankara Eye Foundation', 'NGO', 'Coimbatore, Tamil Nadu', 11.00000000, 76.96000000),
(9, 'Salaam Baalak Trust', 'NGO', 'New Delhi, Delhi', 28.60900000, 77.19900000),
(10, 'Deepalaya', 'NGO', 'Delhi', 28.61150000, 77.20150000),
(11, 'Akshaya Patra Foundation', 'NGO', 'Bengaluru, Karnataka', 12.97000000, 77.59000000),
(12, 'Child Rights and You (CRY)', 'NGO', 'Mumbai, Maharashtra', 19.07050000, 72.87050000),
(13, 'Goonj', 'NGO', 'New Delhi, Delhi', 28.61050000, 77.20050000),
(14, 'Pratham', 'NGO', 'Mumbai, Maharashtra', 19.06950000, 72.86950000),
(15, 'HelpAge India', 'NGO', 'New Delhi, Delhi', 28.61100000, 77.20100000),
(16, 'Nanhi Kali', 'NGO', 'Mumbai, Maharashtra', 19.07100000, 72.87100000),
(17, 'Smile Foundation', 'NGO', 'New Delhi, Delhi', 28.60950000, 77.19950000),
(18, 'Sankara Eye Foundation', 'NGO', 'Coimbatore, Tamil Nadu', 11.00000000, 76.96000000),
(19, 'Salaam Baalak Trust', 'NGO', 'New Delhi, Delhi', 28.60900000, 77.19900000),
(20, 'Deepalaya', 'NGO', 'Delhi', 28.61150000, 77.20150000),
(21, 'Akshaya Patra Foundation (Bengaluru HO)', 'Food Bank', 'Hare Krishna Hill, West of Chord Road, Rajajinagar, Bengaluru, Karnataka, 560010', 13.00690000, 77.54570000),
(22, 'Akshaya Patra Foundation (Jaipur Kitchen)', 'Food Bank', 'Jaipur, Rajasthan', 26.86240000, 75.82390000),
(23, 'Akshaya Patra Foundation (Ahmedabad Kitchen)', 'Food Bank', 'Ahmedabad, Gujarat', 23.21630000, 72.64120000),
(24, 'Akshaya Patra Foundation (Mumbai Kitchen)', 'Food Bank', 'Mumbai, Maharashtra', 19.07600000, 72.87770000),
(25, 'Akshaya Patra Foundation (Guwahati Kitchen)', 'Food Bank', 'Guwahati, Assam', 26.18240000, 91.73710000),
(26, 'Feeding India by Zomato (Gurugram HO)', 'Food Bank', 'Gurugram, Haryana', 28.45950000, 77.02660000),
(27, 'Feeding India by Zomato (Delhi Ops)', 'Food Bank', 'Delhi', 28.61390000, 77.20900000),
(28, 'Feeding India by Zomato (Mumbai Ops)', 'Food Bank', 'Mumbai', 19.07600000, 72.87770000),
(29, 'Feeding India by Zomato (Kolkata Ops)', 'Food Bank', 'Kolkata', 22.57260000, 88.36390000),
(30, 'Feeding India by Zomato (Bengaluru Ops)', 'Food Bank', 'Bengaluru', 12.97160000, 77.59460000),
(31, 'Feeding India by Zomato (Chennai Ops)', 'Food Bank', 'Chennai', 13.08270000, 80.27070000),
(32, 'Feeding India by Zomato (Hyderabad Ops)', 'Food Bank', 'Hyderabad', 17.38500000, 78.48670000),
(33, 'India FoodBanking Network (New Delhi HO)', 'Food Bank', 'New Delhi', 28.61390000, 77.20900000),
(34, 'Akshaya Trust', 'Old Age Home', 'No. 3/59A, Panchayat Road, Bheemeswar Nagar, Mudichur, Chennai - 600048, Tamil Nadu', 12.91000000, 80.09000000),
(35, 'Anbagam CSI Home for Aged', 'Old Age Home', 'Besant Avenue, Adyar, Chennai - 600020, Tamil Nadu', 12.99000000, 80.25000000),
(36, 'Sree Vidya Trust', 'Old Age Home', 'West Mambalam, Chennai, Tamil Nadu', 13.04000000, 80.22000000),
(37, 'Little Sisters of the Poor', 'Old Age Home', 'Mahakali Caves Road, Andheri East, Mumbai - 400093, Maharashtra', 19.11000000, 72.86000000),
(38, 'Sir Jamshetjee Jeejeebhoy Dharamshala', 'Old Age Home', 'Jehangir Boman Behram Road, Nagpada Junction, Mumbai - 400008, Maharashtra', 18.96000000, 72.82000000),
(39, 'HelpAge India (Head Office)', 'Old Age Home', 'C-14 Qutab Institutional Area, New Delhi - 110016', 28.54000000, 77.19000000),
(40, 'Sandhya Home For Senior Citizens', 'Old Age Home', 'Netaji Nagar, Opposite Hyatt Regency Hotel, New Delhi', 28.57000000, 77.19000000),
(41, 'SWaCH (Solid Waste Collection and Handling) Pune', 'Donation Center', '12, Tara Niwas, Co-op Housing Society, Sinhagad Rd, Vadgaon Budruk, Pune, Maharashtra 411051', 18.49960000, 73.80740000),
(42, 'Give for Pune', 'Donation Center', '205, Amar Avinash, Bajirao Road, Pune, Maharashtra 411030', 18.52040000, 73.85670000),
(43, 'Desire Society, Goregaon', 'Donation Center', '203, Siddharth Tower, Goregaon East, Mumbai, Maharashtra 400063', 19.15800000, 72.86460000),
(44, 'Asha Daan, Byculla', 'Donation Center', 'R. C. Marg, Byculla East, Mumbai, Maharashtra 400027', 18.97900000, 72.83590000),
(45, 'RK Foundation', 'Donation Center', '12, Shanti Niketan, New Delhi, 110021', 28.55080000, 77.18590000),
(46, 'Uday Foundation', 'Donation Center', '16, Pusa Road, New Delhi, 110005', 28.64230000, 77.18990000),
(47, 'HappieeSouls', 'Donation Center', '34, MG Road, Kolkata, West Bengal 700087', 22.57260000, 88.36390000),
(48, 'Clothes Box Foundation', 'Donation Center', '56, Park Street, Kolkata, West Bengal 700016', 22.55160000, 88.35100000),
(49, 'Swanthana', 'Donation Center', '45, 3rd Cross, Gandhinagar, Bangalore, Karnataka 560009', 12.97730000, 77.59460000),
(50, 'Karunashraya', 'Donation Center', 'Marathahalli-Sarjapur Road, Bangalore, Karnataka 560037', 12.94190000, 77.67690000);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `helpee_id` int(11) DEFAULT NULL,
  `donator_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` >= 1 and `rating` <= 5),
  `photo_path` varchar(500) DEFAULT NULL,
  `video_path` varchar(500) DEFAULT NULL,
  `receipt_path` varchar(500) DEFAULT NULL,
  `proof_type` enum('Photo','Video','Receipt','Document','Multiple') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `helpee_id`, `donator_id`, `title`, `description`, `rating`, `photo_path`, `video_path`, `receipt_path`, `proof_type`) VALUES
(25, 25, 1, 'Life-changing Medical Support', 'My family received crucial financial aid for an urgent medical procedure. The process was transparent, and the support from Sahyog and the donor was incredible!', 5, 'uploads/medical_proof1.jpg', NULL, NULL, 'Photo'),
(26, 26, 2, 'Books for Bright Futures', 'The donated school supplies and books made a huge difference for our students. We are so grateful for the education support. The video shows the kids using the new books!', 5, NULL, 'uploads/school_video1.mp4', NULL, 'Video'),
(27, 27, 3, 'Timely Food Assistance', 'Received essential groceries for the month. The food bank connection was quick and very helpful. Attached receipt for the groceries.', 4, NULL, NULL, 'uploads/grocery_receipt1.pdf', 'Receipt'),
(28, 28, 4, 'Quick Emergency Shelter', 'During a sudden crisis, Sahyog helped us find emergency housing quickly. The volunteers were amazing and very responsive!', 5, NULL, NULL, NULL, 'Document'),
(29, 29, 5, 'Compassionate Elderly Care', 'Our elderly residents received much-needed volunteer time and care. The service was excellent and very compassionate. Sharing a photo of the happy residents!', 5, 'uploads/elderly_care_photo.jpg', NULL, NULL, 'Photo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donator`
--
ALTER TABLE `donator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `girl_child_requests`
--
ALTER TABLE `girl_child_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpee`
--
ALTER TABLE `helpee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `helpee_id` (`helpee_id`),
  ADD KEY `donator_id` (`donator_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donator`
--
ALTER TABLE `donator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `girl_child_requests`
--
ALTER TABLE `girl_child_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `helpee`
--
ALTER TABLE `helpee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`helpee_id`) REFERENCES `helpee` (`id`),
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
