-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 04:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collagedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission`
--

CREATE TABLE `addmission` (
  `admid` int(11) NOT NULL,
  `acadamic` text NOT NULL,
  `course` text NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `surname` text NOT NULL,
  `mno` text NOT NULL,
  `cast` text NOT NULL,
  `religion` text NOT NULL,
  `category` text NOT NULL,
  `nationality` text NOT NULL,
  `collagea` text NOT NULL,
  `mothert` text NOT NULL,
  `placebirth` text NOT NULL,
  `datebirth` text NOT NULL,
  `bankpassbook` text NOT NULL,
  `bankname` text NOT NULL,
  `branch` text NOT NULL,
  `accountno` text NOT NULL,
  `ifscode` text NOT NULL,
  `fathern` text NOT NULL,
  `mothern` text NOT NULL,
  `annualincome` text NOT NULL,
  `foccupation` text NOT NULL,
  `moccupation` text NOT NULL,
  `fno` text NOT NULL,
  `mno1` text NOT NULL,
  `localgurdain` text NOT NULL,
  `gurdainadd` text NOT NULL,
  `gurdainrelationship` text NOT NULL,
  `gurdaino` text NOT NULL,
  `peraddress` text NOT NULL,
  `percountry` text NOT NULL,
  `perstate` text NOT NULL,
  `percity` text NOT NULL,
  `perarea` text NOT NULL,
  `perpincode` text NOT NULL,
  `address` text NOT NULL,
  `examname` text NOT NULL,
  `university` text NOT NULL,
  `institutename1` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `precentage` text NOT NULL,
  `seatno` text NOT NULL,
  `marksystem` text NOT NULL,
  `prevcourse` text NOT NULL,
  `precoursename` text NOT NULL,
  `institutename` text NOT NULL,
  `university1` text NOT NULL,
  `passingmonth` text NOT NULL,
  `passingyear` text NOT NULL,
  `seatno1` text NOT NULL,
  `residance` text NOT NULL,
  `attempt` text NOT NULL,
  `marksystem1` text NOT NULL,
  `udias` text NOT NULL,
  `eligibility` text NOT NULL,
  `prnno` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmission`
--

INSERT INTO `addmission` (`admid`, `acadamic`, `course`, `name`, `fname`, `surname`, `mno`, `cast`, `religion`, `category`, `nationality`, `collagea`, `mothert`, `placebirth`, `datebirth`, `bankpassbook`, `bankname`, `branch`, `accountno`, `ifscode`, `fathern`, `mothern`, `annualincome`, `foccupation`, `moccupation`, `fno`, `mno1`, `localgurdain`, `gurdainadd`, `gurdainrelationship`, `gurdaino`, `peraddress`, `percountry`, `perstate`, `percity`, `perarea`, `perpincode`, `address`, `examname`, `university`, `institutename1`, `month`, `year`, `precentage`, `seatno`, `marksystem`, `prevcourse`, `precoursename`, `institutename`, `university1`, `passingmonth`, `passingyear`, `seatno1`, `residance`, `attempt`, `marksystem1`, `udias`, `eligibility`, `prnno`, `status`) VALUES
(28, '1999', 'BCA', 'sanika', 'dipak', 'bhambe', '3456783245', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'belgaon', '07/08/2003', 'state bank of india', 'state bank of india', 'mirjgaon', '90214410780', '23456', 'dipak bhambe', '', '500000', 'farmar', 'house wife', '9766559236', '9876543223', 'ashok bhambe', 'ghumri', 'grandfather', '', '', 'India', '12', 'belgaon', 'Rural', '41', ' belgaon', 'HSC', 'pune', 'savitribai phule,pune', 'April', '2021', '12th', 'P0414301', '1', 'HSC', 'science', 'new english school ', 'pune', 'April', '2021', 'C0414301', '1', '1', '1', '12345654567', '', '1204356784', 'Approved'),
(29, '1999', 'B.COM', 'ruruja', 'babasaheb', 'pawar', '9898785841', 'maratha', '1', '1', 'Indian', 'All', 'maratha', 'belwandi', '01/09/2003', 'central bank of india', 'central bank of india', 'shrigonda', '234567898765', '23456', 'babasaheb pawar', '', '30000', 'farmar', 'house wife', '4565654532', '4567876564', 'manisha', 'shrigonda', 'sister', '', '', 'India', '12', 'belwandi', 'Rural', '414201', 'nagar', 'HSC', 'pune', 'savitribai phule,pune', 'April', '2021', '12th commence ', 'P0123456', '1', 'HSC', '12th commerce ', 'belwandi Vidyalaya ', 'pune', 'April', '2021', 'P0123456', '1', '1', '1', '65787898765', '', '9876789870', 'Approved'),
(30, '1999', 'BCA', 'monika', 'shubhash', 'kuskar', '', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'jawla', '05/10/2003', 'state bank of india', 'state bank of india', 'karmala', '234567876543', '23456', 'shubham', '', '20000', 'farmar', 'house wife', '9876567896', '6785467898', 'shard pawar', 'jawala', 'brother ', '', '', 'India', '12', 'karmala', 'Rural', '414654', ' nagar', 'HSC', 'pune', 'savitribai phule,pune', 'June', '1980', '12th', 'P0167854', '1', 'HSC', '12th science', 'karmala Vidyalaya', 'pune', 'April', '2021', 'P0167854', '1', '1', '1', '678765568979', '', '1267876543', 'Approved'),
(31, '1999', 'B.COM', 'akash', 'govind', 'gore', '8765434567', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'kamargaon', '120/03/2003', 'state bank of india', 'state bank of india', 'kamargaon', '654378965434', '23456', 'govind gore', '', '170000', 'worker', 'house wife', '6785432456', '8987656654', 'vinod', 'nagar', 'brother ', '', '', 'India', '12', 'kamargaon', 'Rural', '414303', ' Nagar ', 'HSC', 'pune', 'Dadasaheb phalke Vidyalaya,pune', 'April', '2021', '12th commence', 'P0076738', '1', 'HSC', '12th commerce', ' new english school,kamargav ', 'pune', 'April', '2021', 'P0076738', '1', '1', '0', '12387654678', '', '1287654656', 'Approved'),
(32, '1999', 'BBA', 'prachi', 'jaysing', 'gawali', '9766559237', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'supa', '12/09/2003', 'central bank of india', 'central bank of india', 'supa', '234123454634', '23456', 'jaysing', '', '13000', 'professor ', 'teacher', '2345654567', '8767898767', 'saloni gawali', 'pune', 'sister', '', '', 'Other', '12', 'supa', 'Rural', '414308', ' nagar', 'HSC', 'pune', 'savitribai phule,pune', 'April', '2021', '12th ', 'P0021738', '0', 'HSC', '12th science', 'new engilsh school,supa', 'pune', 'April', '2021', 'P0021738', '1', '1', '1', '88767889876', '', '1134587694', 'Approved'),
(33, '1999', 'BCA', 'vinod', 'babasaheb', 'labde', '9887665890', 'maratha', '1', '1', 'Indian', 'All', 'marathi', '25/12/2003', 'shevgaon', 'state bank of india', 'state bank of india', 'shevgaon', '231232356765', '23456', 'babasaheb labde', '', '12000', 'teacher ', 'house wife', '9887676545', '9987898767', 'shatish labde', 'nagar', 'grandfather', '', '', 'Other', '12', 'shevgaon', 'Rural', '414305', ' tisgaon', 'HSC', 'pune', 'Dadasaheb phalke Vidyalaya,pune', 'April', '2021', '12th', 'P0026638', '1', 'HSC', '12th science', 'new college ,shevgaon', 'pune', 'April', '2021', 'P0026638', '1', '1', '0', '23412345678', '', '1887655435', 'Approved'),
(34, '1999', 'BSC', 'Rutuja', 'Namdev', 'mohite', '8769876789', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'Jamkhed', '18/03/2003', 'state bank of india', 'state bank of india', 'pune', '234567656786', '23456', 'Namdev', '', '400000', 'worker', 'teacher', '9856546545', '9787656787', 'shital gore', 'nagar', 'sister in law', '', '', 'India', '12', 'jamkhed', 'Rural', '414301', ' shiral', 'HSC', 'pune', 'savitribai phule,pune', 'March', '2021', '12th science', 'P0066748', '1', 'HSC', '12th science', 'jamkhed Vidyalaya', 'pune', 'March', '2011', 'P0066748', '1', '1', '1', '23456765434', '', '8787656545', 'Approved'),
(35, '1999', 'BA', 'vaishnavi ', 'shatish', 'chitale', '9696786780', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'parner', '21/3/2002', 'central bank of india', 'central bank of india', 'parner', '887676567656', '23456', 'shatish chitale', '', '29000', 'farmar', 'house wife', '9876767876', '9856345433', 'neha pawar', 'chichundi', 'sister in law', '', '', 'India', '12', 'parner', 'Rural', '41003', ' Nagar ', 'HSC', 'pune', 'savitribai phule,pune', 'April', '2020', '12th', 'P0025638', '1', 'SSC', '12th ', 'new engilsh school,parner', 'pune', 'March', '2020', 'P0025638', '1', '1', '1', '23458798765', '', '2378678954', 'Approved'),
(36, '1999', 'BBA', 'sarthk', 'pravin', 'wagh', '9655358601', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'shevgoan', '17/02/2002', 'state bank of india', 'state bank of india', 'tisgav', '234567876543', '23456', 'pravin wagh', '', '5000000', 'farmar', 'job', '9123467646', '9876789876', 'shrutika wagh', 'nagar', 'sister', '', '', 'India', '12', 'tisgoan', 'Rural', '414301', 'supa', 'HSC', 'pune', 'Dadasaheb phalke Vidyalaya,pune', 'January', '2021', '12th commence', 'P0033638', '2', 'HSC', '12th commerce', 'Morden college of tisgaon', 'pune', 'January', '2011', 'P0033638', '1', '1', '2', '12765845672', '', '2346754678', 'Approved'),
(37, '1999', 'BA', 'akanksha', 'shahaji', 'anbhule', '9876789876', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'ghumri', '07/05/2003', 'central bank of india', 'central bank of india', 'mirjgoan', '234598767854', '23456', '', '', '100000', 'farmar', 'house wife', '9435676567', '9234567654', 'dipali more', 'nagar', 'sister in law', '', '', 'India', '12', 'ghumri', 'Rural', '414305', ' nagar', 'HSC', 'pune', 'RK college of pune', 'April', '2021', '12th', 'P0034638', '2', 'SSC', '12th ', 'ghumri Vidyalaya', 'pune', 'April', '2021', 'P0034638', '1', '1', '2', '87876545654', '', '1276876787', 'Approved'),
(39, '1999', 'BSC', 'shreya ', 'sujit', 'more', '9980433440', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'Tisgoan', '21/03/2003', 'central bank of india', 'central bank of india', 'Tisgoan', '123458765612', '23456', 'sujit more', '', '1000000', 'professor ', 'teacher', '9645234565', '9834543543', 'shivam bhor', 'nagar', 'brother ', '', '', 'Other', '12', 'tisgoan', 'Rural', '414308', ' nagar', 'HSC', 'pune', 'Dadasaheb phalke Vidyalaya,pune', 'May', '2022', '12th science', 'P0064565', '0', 'HSC', '12th science', 'tisgoav Vidyalaya', 'pune', 'May', '2022', 'P0064565', '1', '1', '1', '234387651232', '', '9845654565', 'Approved'),
(40, '1999', 'B.COM', 'samiksha', 'vikas', 'kasar', '9021441578', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'shirur', '16/07/2003', 'state bank of india', 'state bank of india', 'shirur', '435467876756', '23456', 'vikas', '', '20000', 'worker', 'worker', '9123657865', '9256879876', 'lakshmi kasar', 'supa', 'grandmother ', '', '', 'India', '12', 'shirur', 'Rural', '414304', ' supa', 'HSC', 'pune', 'Dadasaheb phalke Vidyalaya,pune', 'May', '2021', '12th commence', 'P0044638', '2', 'HSC', '12th commerce', 'tisgoav Vidyalaya', 'pune', 'May', '2021', 'P0044638', '1', '1', '2', '45654238768', '', '9984565445', 'pending'),
(41, '1999', 'BA', 'sonakshi', 'sanjay', 'mohire', '9088991291', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'karmala', '02/05/2003', 'central bank of india', 'central bank of india', 'karmala', '234985674356', '23456', 'sanjay', '', '1000000', 'bank manager', 'house wife', '9348765678', '9834765834', 'sanket ghorpade', 'nagar', ' brother ', '', '', 'India', '12', 'karmala', 'Rural', '414206', ' nagar', 'HSC', 'pune', 'Dadasaheb phalke Vidyalaya,pune', 'April', '2021', '12th', 'P0023765', '2', 'HSC', '12th', 'karmala Vidyalaya', 'pune', 'April', '2021', 'P0023765', '1', '1', '2', '98675465456', '', '3456879878', 'Approved'),
(42, '1999', 'BBA', 'soham gore', 'balasaheb', 'gore', '9021441078', 'maratha', '1', '1', 'Indian', 'All', 'marathi', 'shevgaon', '12/03/2003', 'state bank of india', 'central bank of india', 'supa', '987645362312', '23456', 'balasaheb', '', '30000', 'farmar', 'house wife', '9876545678', '9766559236', 'prathmesh kale', 'Nagar ', 'brother', '', '', 'India', '12', 'supa', 'Rural', '414301', ' nagar', 'HSC', 'pune', 'savitribai phule,pune', 'April', '2021', '12th science', 'P0033438', '1', 'HSC', '12th science', 'new engilsh school,supa', 'savitribai phule,pune', 'April', '2021', 'P0033438', '1', '1', '1', '88754876523', '', '9856348765', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `addmissionform`
--

CREATE TABLE `addmissionform` (
  `addIId` int(11) NOT NULL,
  `academicyear` text NOT NULL,
  `course` text NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `surname` text NOT NULL,
  `mno` text NOT NULL,
  `cast` text NOT NULL,
  `religion` text NOT NULL,
  `category` text NOT NULL,
  `nationality` text NOT NULL,
  `collagea` text NOT NULL,
  `mothert` text NOT NULL,
  `placebirth` text NOT NULL,
  `datebirth` text NOT NULL,
  `bankpassbook` text NOT NULL,
  `bankname` text NOT NULL,
  `branch` text NOT NULL,
  `accountno` text NOT NULL,
  `ifscode` text NOT NULL,
  `fathern` text NOT NULL,
  `mothern` text NOT NULL,
  `annualincome` text NOT NULL,
  `foccuption` text NOT NULL,
  `moccuption` text NOT NULL,
  `fno` text NOT NULL,
  `mno1` text NOT NULL,
  `localgardain` text NOT NULL,
  `gardainadd` text NOT NULL,
  `gardainrelationship` text NOT NULL,
  `gurdainno` text NOT NULL,
  `peraddress` text NOT NULL,
  `percountry` text NOT NULL,
  `perstate` text NOT NULL,
  `percity` text NOT NULL,
  `perarea` text NOT NULL,
  `perpincode` text NOT NULL,
  `per_correspond_add` text NOT NULL,
  `address` text NOT NULL,
  `examname` text NOT NULL,
  `university` text NOT NULL,
  `institutename` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `percentage` text NOT NULL,
  `seatno` text NOT NULL,
  `marksystem` text NOT NULL,
  `prevcourse` text NOT NULL,
  `precoursrname` text NOT NULL,
  `institutname` text NOT NULL,
  `university1` text NOT NULL,
  `passingmonth` text NOT NULL,
  `passingyear` text NOT NULL,
  `seatno1` text NOT NULL,
  `residance` text NOT NULL,
  `attempt` text NOT NULL,
  `marksystem1` text NOT NULL,
  `udias` text NOT NULL,
  `eligibility` text NOT NULL,
  `prnno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmissionform`
--

INSERT INTO `addmissionform` (`addIId`, `academicyear`, `course`, `name`, `fname`, `surname`, `mno`, `cast`, `religion`, `category`, `nationality`, `collagea`, `mothert`, `placebirth`, `datebirth`, `bankpassbook`, `bankname`, `branch`, `accountno`, `ifscode`, `fathern`, `mothern`, `annualincome`, `foccuption`, `moccuption`, `fno`, `mno1`, `localgardain`, `gardainadd`, `gardainrelationship`, `gurdainno`, `peraddress`, `percountry`, `perstate`, `percity`, `perarea`, `perpincode`, `per_correspond_add`, `address`, `examname`, `university`, `institutename`, `month`, `year`, `percentage`, `seatno`, `marksystem`, `prevcourse`, `precoursrname`, `institutname`, `university1`, `passingmonth`, `passingyear`, `seatno1`, `residance`, `attempt`, `marksystem1`, `udias`, `eligibility`, `prnno`) VALUES
(1, '2023-24', '', 'akanksha', 'anbhule', 'anbhule', '9356766254', 'maratha', 'hindu', 'open', 'maharashrian', 'a.nage', 'marathi', 'karjat', '07-09-2003', 'sdf', 'asdf', 'asd', 'asdfg', 'asdfg', 'asdfg', 'asdfg', 'sdfg', 'asdf', 'zxcvb', 'asdf', 'asdfg', 'sdfgh', 'cvbn', 'asdfgh', 'asdfgh', 'asdfgh', 'asdfg', 'sdfgh', 'asdfgh', 'asdfgh', 'asdfgh', 'asdfgh', 'zxdfghj', 'asdfgh', 'asdfgh', 'dcfghm', 'asdfgh', 'asdfgh', 'asdfgh', 'asdfgh', 'sdfghj', 'asdfghj', 'asdfgh', 'asdfgh', 'asdfgh', 'asdfghj', 'zxcvbn', 'asdfghj', 'asdfgh', 'sdfgbh', 'asdfghj', 'qsdfgh', 'asdfg', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `coursename` text NOT NULL,
  `coursedescription` text NOT NULL,
  `coursefee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `coursename`, `coursedescription`, `coursefee`) VALUES
(13, 'bca', 'computer application', '29000'),
(20, 'bcom', 'account ', '6000'),
(21, 'bsc', 'science', '20400'),
(22, 'bba', 'computer', '21000'),
(23, 'B.A', 'arts ', '23000'),
(24, 'M.com', 'Accountant, cost accountant ', '140000');

-- --------------------------------------------------------

--
-- Table structure for table `coursename`
--

CREATE TABLE `coursename` (
  `course_id` int(11) NOT NULL,
  `Student_name` text NOT NULL,
  `Select_course` text NOT NULL,
  `Acadamic_year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursename`
--

INSERT INTO `coursename` (`course_id`, `Student_name`, `Select_course`, `Acadamic_year`) VALUES
(1, 'akanksha', 'bca', '2023'),
(2, 'rutuja', 'b.com', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `emailid` text NOT NULL,
  `feedback1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `fullname`, `emailid`, `feedback1`) VALUES
(13, 'sanika bhambe', 'sanika1@gmail.com', 'i like the faculty and i feel i had the best environment  for my studies.'),
(14, 'Rutuja  pawar', 'rutuja22@gmail.com', 'good college facilities.'),
(15, 'monika kuskar', 'monika33@gmail.com', 'facilities and teaching is very good.'),
(16, 'akash', 'akash22@gmail.com', 'The courses  helped to build confidence.'),
(17, 'prachi gawali', 'prachi11@gamil.com', 'the teacher student interaction was great.'),
(18, 'vinod labde', 'vinod12@gmail.com', 'college all course good.'),
(19, 'vaishanavi chitale', 'vaishanavi@gamil.com', 'best college in the city.'),
(20, 'sarthk wagh', 'sarthk@gmail.com', 'college all facilities,course are very nice.'),
(21, 'sarthk wagh', 'sarthk@gmail.com', 'college all facilities,course are very nice.'),
(22, 'mayuri mandhre', 'mayuri21@gmail.com', 'This college i had learnt many thing and have greatly improved my knowledge.');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `P_id` int(11) NOT NULL,
  `coursename` text NOT NULL,
  `coursefee` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `aadar` text NOT NULL,
  `card_type` text NOT NULL,
  `card_Number` text NOT NULL,
  `exp_date` text NOT NULL,
  `CVV` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`P_id`, `coursename`, `coursefee`, `name`, `email`, `aadar`, `card_type`, `card_Number`, `exp_date`, `CVV`) VALUES
(13, 'BCA', '29,000.00', 'sanika bhambe', 'sanika1@gmail.com', '123454654312', 'master card', 'card_Number', '2030-05-30', '123'),
(14, 'B.COM', '29,000.00', 'rutuja pawar', 'rutuja22@gmail.com', '234567878765', 'master card', 'card_Number', '2033-03-21', '456'),
(15, 'BCA', '29,000.00', 'monika kuskar', 'monika@gmail.com', '123456765454', 'master card', 'card_Number', '2044-04-21', '543'),
(17, 'B.COM', '3,500.00.00', 'akash gore', 'akash22@gamil.com', '887656778756', 'rupy', 'card_Number', '2030-07-02', '876'),
(18, 'BBA', '20,000.00', 'prachi gawali', 'prachi11@gmail.com', '187788564321', 'rupy', 'card_Number', '2034-03-12', '765'),
(19, 'BCA', '29,000.00', 'vinod labde', 'vinod12@gmail.com', '887678767856', 'rupy', 'card_Number', '2030-02-12', '199'),
(20, 'BSC', '12,000.00', 'rutuja mohite', 'rutuja10@gmail.com', '676545654567', 'master card', 'card_Number', '2033-06-09', '567'),
(21, 'BA', '2,000.00', 'vaishnavi chitale', 'vaishnavi@gmail.com', '887645676545', 'rupy', 'card_Number', '2034-03-12', '345'),
(22, 'BBA', '20,000.00', 'sarthk wagh', 'sarthk@gmail.com', '23487696547', 'rupy', 'card_Number', '2040-02-12', '333'),
(23, 'BA', '2,000.00', 'Akanksha anbhule', 'akanksha@gmail.com', '876987678923', 'master card', 'card_Number', '2031-02-02', '3434'),
(24, 'BCA', '29,000.00', 'Mayuri Mandhre', 'mayuri21@gmail.com', '27123458769', 'master card', 'card_Number', '2038-04-12', '545'),
(25, 'BSC', '29,000.00', 'shreya more', 'shreya33@gmail.com', '887645634523', 'master card', 'card_Number', '2034-03-12', '242'),
(26, 'BBA', '20,000.00', 'soham gore', 'soham123@gmail.com', '887622348785', 'master card', 'card_Number', '2030-12-31', '456');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `reg_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `number` text NOT NULL,
  `email` text NOT NULL,
  `city` text NOT NULL,
  `course` text NOT NULL,
  `password` text NOT NULL,
  `confirmpassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`reg_id`, `name`, `address`, `number`, `email`, `city`, `course`, `password`, `confirmpassword`) VALUES
(20, 'sanika bhambe', 'belgaon', '3456783245', 'sanika1@gmail.com', 'A.nagar', 'BCA', '5555', '5555'),
(21, 'rutuja', 'belwandi', '9898785841', 'rutuja22@gmail.com', 'A.nagar', 'B.COM', '4444', '4444'),
(22, 'monika kuskar', 'karmala', '9878967856', 'monika33@gmail.com', 'A.nagar', 'BCA', '6666', '6666'),
(23, 'akash', 'kamargaon', '8765434567', 'akash22@gmail.com', 'A.nagar', 'B.COM', '7777', '7777'),
(24, 'prachi gawali', 'supa', '9766559237', 'prachi11@gmail.com', 'A.nagar', 'BBA', '1234', '1234'),
(25, 'vinod labde', 'Shevgaon ', '9887665890', 'vinod12@gmail.com', 'A.nagar', 'BCA', '9898', '9898'),
(26, 'rutuja mohite', 'jamkhed', '8769876789', 'rutuja10@gmail.com', 'A.nagar', 'BSC', '3456', '3456'),
(28, 'vaishnavi', 'parner', '9696786780', 'vaishnavi@gamil.com', 'A.nagar', 'BA', '4545', '4545'),
(29, 'sarthk wagh', 'tisgoan', '9655358601', 'sarthk@gmail.com', 'A.nagar', 'BBA', '9876', '9876'),
(30, 'Akanksha anbhule', 'ghumri', '9899665801', 'akanksha@gmail.com', 'A.nagar', 'BA', '8787', '8787'),
(31, 'Mayuri Mandhre', 'waghuli', '9834567654', 'mayuri21@gmail.com', 'A.nagar', 'BCA', '8989', '8989'),
(32, 'shreya more', 'Tisgoan', '9980433440', 'shreya33@gmail.com', 'A.nagar', 'BSC', '1212', '1212'),
(33, 'samiksha kasar', 'shirur', '9021441578', 'samiksha19@gmail.com', 'A.nagar', 'B.COM', '5656', '5656'),
(34, 'sonakshi mohire', 'karmala', '9088991291', 'sonakshi@gmail.com', 'A.nagar', 'BA', '4567', '4567'),
(35, 'soham gore', 'supa', '9021441078', 'soham123@gmail.com', 'A.nagar', 'BBA', '2117', '2117');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmission`
--
ALTER TABLE `addmission`
  ADD PRIMARY KEY (`admid`),
  ADD UNIQUE KEY `admid` (`admid`),
  ADD UNIQUE KEY `admid_2` (`admid`);

--
-- Indexes for table `addmissionform`
--
ALTER TABLE `addmissionform`
  ADD PRIMARY KEY (`addIId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `coursename`
--
ALTER TABLE `coursename`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmission`
--
ALTER TABLE `addmission`
  MODIFY `admid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `addmissionform`
--
ALTER TABLE `addmissionform`
  MODIFY `addIId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `coursename`
--
ALTER TABLE `coursename`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
