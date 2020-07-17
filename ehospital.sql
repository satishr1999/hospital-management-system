-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 07:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `question` varchar(50) NOT NULL,
  `qans` varchar(35) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fname`, `lname`, `sex`, `question`, `qans`, `rollno`, `contact`, `email`, `image`) VALUES
(7, 'skrawat', '12345', 'Satish', 'Rawat', 'Male', 'My favorite sport game ?', 'cricket', '2016KUCP1009', '656545454', 'google@gmail.com', 'IMG_20160131_115057.jpg'),
(12, 'bhasker', '12345', 'Ajmeera', 'Bhasker', 'Male', 'Where was you born ?', 'hyderabad', '2015KUCP1033', '234245354', 'youtube@google.com', '20151003_163057.jpg'),
(13, 'akshat', '12345', 'Akshat', 'Sharma', 'Male', 'My favorite animal ?', 'dog', '2016KUCP1005', '234567876', 'akshat@gmail.com', 'IMG_20170807_131548.jpg'),
(14, 'mohan', '123', 'Mohan', 'Bhagwat', 'Male', 'My favorite high school teacher ?', 'parikshit', '2018KUEC1029', '1234567899', 'xyz@example.com', 'sk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_request`
--

CREATE TABLE `admin_request` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `edu_qulification` text NOT NULL,
  `reason` text NOT NULL,
  `city` varchar(40) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_request`
--

INSERT INTO `admin_request` (`id`, `name`, `father`, `sex`, `dob`, `edu_qulification`, `reason`, `city`, `contact`, `email`, `image`) VALUES
(5001, 'Neeraj', 'Omprakash', 'Male', '7887-07-08', '11 th pass', 'His Dream', 'Alwar', '1234567890', 'bhj@jhj.com', 'IMG_20170807_131127.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `father` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `mstatus` varchar(20) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`id`, `name`, `father`, `sex`, `mstatus`, `bgroup`, `age`, `address`, `contact`) VALUES
(70001, 'Satish Kumar', 'Narsi Ram', 'Male', 'Single', 'B+', 19, 'Alwar', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mstatus` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `consultant` varchar(25) NOT NULL,
  `bed_no` int(11) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `admit_date` date NOT NULL,
  `discharge_date` date NOT NULL,
  `city` varchar(35) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `mname`, `fname`, `mstatus`, `dob`, `age`, `sex`, `bgroup`, `occupation`, `disease`, `consultant`, `bed_no`, `ward_no`, `admit_date`, `discharge_date`, `city`, `contact_no`, `image`) VALUES
(1006, 'Himani', 'Hemant Sharma', 'Sushila', 'Single', '1994-12-08', 23, 'Femal', 'O-', 'Student', 'Burns', 'Dr. Sahil', 10, 3, '2017-11-07', '0000-00-00', 'Jaipur', '8756763432', '14.jpeg'),
(1007, 'Rohit', 'Sharmila', 'Mohan', 'Single', '2000-01-09', 17, 'Male', 'A+', 'Student', 'Body Pain', 'Ankit Swami', 11, 4, '2017-11-07', '0000-00-00', 'MohanjoDaro', '123457654654', '2.jpg'),
(1008, 'Priyanka Gupta', 'Geeta Gupta', 'Rajpal Gupta', 'Single', '1999-02-03', 18, 'Femal', 'A+', 'Student', 'Body Pain', 'Manoj Verma  Singh', 12, 5, '2017-11-07', '0000-00-00', 'Shrinagar', '1233223432', '9.jpg'),
(1009, 'Ashok Yogi', 'Sarjo Devi', 'Madan Mohan', 'Single', '2001-02-22', 16, 'Male', 'A+', 'Student', 'Asthma', 'Manoj Verma  Singh', 9, 5, '2017-11-07', '0000-00-00', 'Mohamdpur', '35423543465', '5.jpg'),
(1010, 'Ashok Yogi', 'Sarjo Devi', 'Madan Mohan', 'Single', '2001-02-22', 16, 'Male', 'A+', 'Student', 'Asthma', 'Manoj Verma  Singh', 9, 5, '2017-11-07', '0000-00-00', 'Mohamdpur', '35423543465', '5.jpg'),
(1011, 'Monika', 'Geeta Devi', 'Yashvant', 'Single', '1999-12-09', 18, 'Femal', 'O-', 'Student', 'Allergy', 'Madhubala', 13, 12, '2017-11-08', '0000-00-00', 'Alwar', '12321232123', '13.jpeg'),
(1012, 'Rohit Nagar', 'Santosh', 'Sushil', 'Widow', '1999-11-09', 18, 'Male', 'O-', 'Student', 'Asthma', 'Madhubala', 11, 11, '2017-11-08', '0000-00-00', 'Alwar', '11111111111', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE `patient_history` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `mstatus` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `disease` varchar(35) NOT NULL,
  `consultant` varchar(30) NOT NULL,
  `bed_no` int(11) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `admit_date` date NOT NULL,
  `discharge_date` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `current_status` varchar(25) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`id`, `name`, `mname`, `fname`, `mstatus`, `dob`, `age`, `sex`, `bgroup`, `occupation`, `disease`, `consultant`, `bed_no`, `ward_no`, `admit_date`, `discharge_date`, `city`, `contact_no`, `current_status`, `image`) VALUES
(1002, 'Satish Kumar', 'Sumitra Devi', 'Narsi Ram', 'Single', '2017-02-05', 67, 'Male', 'O-', 'Business', 'Asthma', 'Dr. Sohel Khan', 7, 678, '2017-11-06', '2017-11-07', 'Dubai', '3456432567', 'Discharged', 'IMG_20170807_131127.jpg'),
(1003, 'Ram Kumar', 'Sona Devi', 'Kamal Singh', 'Single', '1998-11-12', 19, 'Male', 'A+', 'Student', 'Asthma', 'Dr. Manoj', 12, 3, '2017-11-06', '2017-11-08', 'Jaipur', '1234567890', 'Discharged', '6.jpg'),
(1006, 'Himani', 'Sushila', 'Hemant', 'Single', '1994-12-08', 23, 'Female', 'O-', 'Student', 'Burns', 'Dr. Sahil', 10, 3, '2017-11-07', '0000-00-00', 'Jaipur', '8756763432', 'Admitted', '14.jpeg'),
(1007, 'Rohit', 'Sharmila', 'Mohan', 'Single', '2000-01-09', 17, 'Male', 'A+', 'Student', 'Body Pain', 'Ankit Swami', 11, 4, '2017-11-07', '0000-00-00', 'MohanjoDaro', '123457654654', 'Admitted', '2.jpg'),
(1008, 'Priyanka Gupta', 'Geeta Gupta', 'Rajpal Gupta', 'Single', '1999-02-03', 18, 'Female', 'A+', 'Student', 'Body Pain', 'Manoj Verma  Singh', 6, 5, '2017-11-07', '0000-00-00', 'Shrinagar', '1233223432', 'Admitted', '9.jpg'),
(1009, 'Ashok Yogi', 'Sarjo Devi', 'Madan Mohan', 'Single', '2001-02-22', 16, 'Male', 'A+', 'Student', 'Asthma', 'Manoj Verma  Singh', 9, 5, '2017-11-07', '0000-00-00', 'Mohamdpur', '35423543465', 'Admitted', '5.jpg'),
(1010, 'Ashok Yogi', 'Sarjo Devi', 'Madan Mohan', 'Single', '2001-02-22', 16, 'Male', 'A+', 'Student', 'Asthma', 'Manoj Verma  Singh', 9, 5, '2017-11-07', '0000-00-00', 'Mohamdpur', '35423543465', 'Admitted', '5.jpg'),
(1011, 'Monika', 'Geeta Devi', 'Yashvant', 'Single', '1999-12-09', 18, 'Female', 'O-', 'Student', 'Allergy', 'Madhubala', 13, 12, '2017-11-08', '0000-00-00', 'Alwar', '12321232123', 'Admitted', '13.jpeg'),
(1012, 'Rohit Nagar', 'Santosh', 'Sushil', 'Widow', '1999-11-09', 18, 'Male', 'O-', 'Student', 'Asthma', 'Madhubala', 11, 11, '2017-11-08', '0000-00-00', 'Alwar', '11111111111', 'Admitted', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `physician`
--

CREATE TABLE `physician` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `mstatus` varchar(20) NOT NULL,
  `bgroup` varchar(7) NOT NULL,
  `qualification` text NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `hname` text NOT NULL,
  `exp` int(11) NOT NULL,
  `achievement` text NOT NULL,
  `city` varchar(25) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physician`
--

INSERT INTO `physician` (`id`, `name`, `mother`, `father`, `dob`, `age`, `sex`, `mstatus`, `bgroup`, `qualification`, `specialization`, `hname`, `exp`, `achievement`, `city`, `contact`, `phone`, `email`, `image`) VALUES
(2002, 'Ankit Swami', 'Shanta Devi', 'Manu Ram', '1993-09-11', 20, 'Male', 'Single', 'A+', 'MBBS from AIIMS, Jodhpur', 'ENT Specialist', '', 0, 'Gold Medel in Operation', 'Mahanagar', '9876543210', '2345678987', 'theankitswami@gmail.com', 'IMG_20170807_131601.jpg'),
(2003, 'Madhubala', 'Rosy', 'David', '1987-12-12', 78, 'Female', 'Divorced', 'O-', '12th Biology Science Pass', 'Dentist', 'Fortis Healthcare, Delhi', 8, 'vghbj', 'Jaipur', '123456789', '987654321', 'xya@huh.com', '12.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mother` varchar(25) NOT NULL,
  `father` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `mstatus` varchar(20) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `qualification` text NOT NULL,
  `hname` varchar(50) NOT NULL,
  `exp` int(11) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `city` varchar(25) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `mother`, `father`, `dob`, `age`, `sex`, `mstatus`, `bgroup`, `qualification`, `hname`, `exp`, `designation`, `ward_no`, `city`, `contact`, `phone`, `email`, `image`) VALUES
(3002, 'Satish Kumar', 'Sumitra Devi', 'Narsi Ram', '1998-07-25', 19, 'Male', 'Single', 'B+', '12 th Fail', 'Rungta Hospital', 1, 'Sweaper', 12, 'Alwar', '987654321', '123456789', 's@fghj.com', '3.jpg'),
(3003, 'Manoj', 'Sushila Devi', 'Loha Singh', '2005-11-11', 12, 'Female', 'Divorced', 'A+', 'MBBS, B.Tech\r\n', 'Fortis Hospital\r\n', 1, 'Compounder', 10, 'Alwar', '98672345876', '1234567890', 'satish.krawat98@gmail.com', '4.jpg'),
(3004, 'Sunny Deol', 'Shakira Dey', 'Joseph', '1997-02-03', 20, 'Male', 'Single', 'A+', '12 th Pass', '', 0, 'Receptionist', 12, 'Shrinagar', '1234543234', '3456543476', 'shakira@gmail.com', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_request`
--
ALTER TABLE `admin_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physician`
--
ALTER TABLE `physician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_request`
--
ALTER TABLE `admin_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5002;

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70002;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `patient_history`
--
ALTER TABLE `patient_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `physician`
--
ALTER TABLE `physician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2004;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
