
/* Electronic Hospital Management System */

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

/* Create Database 'hospital' */
create database hospital;
use hospital;
--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(50) NOT NULL,
  `doctor_id` int(50) NOT NULL,
  `patient_id` int(50) NOT NULL,
  `schedule_id` int(22) NOT NULL,
  `date` varchar(50) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `serial_no` int(50) NOT NULL,
  `details` text NOT NULL,
  `prescription` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `doctor_id`, `patient_id`, `schedule_id`, `date`, `created_date`, `serial_no`, `details`, `prescription`, `status`) VALUES
 (1, 5, 6, 6, '29/03/2022', '02/04/22', 1, 'cough', 'Not Aplicable', 'pending'),
(2, 5, 16, 6, '03/04/2022', '03/04/22', 2, 'Cold', 'Not Aplicable', 'pending'),
(3, 4, 16, 9, '17/04/2022', '01/04/22', 1, 'Fever', 'Not Aplicable', 'pending'),
(4, 4, 5, 9, '26/04/2022', '16/04/22', 1, 'Lungs Problem', 'Not Aplicable', 'pending'),
(5, 5, 5, 6, '23/04/2022', '16/04/22', 1, 'Cold','Not Aplicable', 'pending'),
(6, 5, 6, 6, '22/04/2022', '19/04/22', 1, 'Cough', ' Not Aplicable', 'pending'),
(7, 4, 6, 10, '22/04/2022', '19/04/22', 1, 'Fever', 'Not Aplicable', 'pending'),
(8, 4, 13, 9, '24/04/2022', '16/04/22', 1, 'Heart Disease', 'Not Aplicable', 'pending'),
(9, 2, 13, 22, '27/04/2022', '16/03/22', 1, 'Stones In the kidneys', 'Not Aplicable', 'pending'),
(10, 4, 6, 10, '21/04/2022', '16/03/22', 1, 'Stomach Pain', 'Not Aplicable', 'pending'),
(22, 2, 6, 22, '03/04/2022', '16/03/22', 1, 'Fever', 'Not Aplicable', 'pending');
-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(22) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`) VALUES
(3, 'Orthopedic  ', 'Orthopedic   Descriptions'),
(4, 'Neuro Surgery   ', 'Neuro Surgery   department');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(22) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `department` int(10) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `meta` text NOT NULL,
  `user_id` int(15) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `nic`, `department`, `blood_group`, `birth_date`, `sex`, `email`, `phone`, `country`, `state`, `address`, `about`, `name`, `meta`, `user_id`, `picture`) VALUES
(2, '123456789', 4, '0', '10/04/2022', '0', 'vishnum@gmail.com', '01733435951', 'BD', 'labbipet', 'Goa, labbipet, India', ':)', 'Vishnu', '', 0, 'http://localhost/hospital/uploads/doctor-3.jpg'),
(4, '2', 4, '0', '', '0', 'manojch@gmail.com', '', 'BD', '', '', '', 'Manoj', '', 0, 'http://localhost/hospital/uploads/doctor-2.jpg'),
(5, '45548 3', 4, '0', '10/04/2022', '1', 'pavant@gmail.com', '8017947545653', 'BD', 'labbipet3', 'address filed', 'India', 'Pavan', '', 0, 'http://localhost/hospital/uploads/doctor-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_schedule`
--

CREATE TABLE `doctors_schedule` (
  `id` int(50) NOT NULL,
  `doctor_id` int(50) NOT NULL,
  `day_of_week` varchar(9) NOT NULL,
  `start_time` varchar(15) NOT NULL,
  `end_time` varchar(15) NOT NULL,
  `max_num_of_patients` int(22) NOT NULL,
  `fees` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_schedule`
--

INSERT INTO `doctors_schedule` (`id`, `doctor_id`, `day_of_week`, `start_time`, `end_time`, `max_num_of_patients`, `fees`, `status`, `comment`) VALUES
(6, 5, 'Sunday', '10 am', '21 pm', 5, '200', 'pending', '25 % discount'),
(7, 5, 'Monday', '9 am', '23 pm', 5, '200', 'In Progress', '30 % discount'),
(8, 5, 'Tuesday', '12 am', '23 pm', 5, '200', 'pending', '15 % discount'),
(9, 4, 'Friday', '11 am', '20 pm', 10, '399', 'In Progress', '10 % discount');
-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(22) NOT NULL,
  `title` varchar(150) NOT NULL,
  `created_by` int(22) NOT NULL,
  `patient` int(22) NOT NULL,
  `date` varchar(20) NOT NULL,
  `data` text NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `title`, `created_by`, `patient`, `date`, `data`, `total`) VALUES
(5, 'Invoice Name 568', 5, 16, '02/19/2022', '[{\"label\":\"Label 3\",\"price\":\"548\"},{\"label\":\"Lax\",\"price\":\"5\"}]', '553'),
(6, 'Test invoice', 5, 17, '03/16/2022', '[{\"label\":\"Medicine \",\"price\":\"230\"},{\"label\":\"Blood Test\",\"price\":\"120\"}]', '350'),
(7, 'ECG', 5, 17, '03/29/2022', '[{\"label\":\"ooo\",\"price\":\"1000\"}]', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `about` text NOT NULL,
  `user_id` int(10) NOT NULL,
  `meta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `name`, `phone`, `email`, `address`, `picture`, `about`, `user_id`, `meta`) VALUES
(6, 'Mounica', '7706408552', 'mounicap@gmail.com', 'Pahargunj,Delhi', 'http://localhost/hospital/uploads/04 News InsideSmall.jpg', 'Im Pediatric Nurse', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(22) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `department` int(10) NOT NULL,
  `birth_date` varchar(12) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `email` varchar(50) NOT NULL,
  `county` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `guardian_name` varchar(150) NOT NULL,
  `guardian_phone` varchar(20) NOT NULL,
  `guardian_details` varchar(50) NOT NULL,
  `bad_no` int(20) NOT NULL,
  `referred_by` int(10) NOT NULL,
  `reg_date` varchar(20) NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `phone`, `blood_group`, `department`, `birth_date`, `age`, `sex`, `email`, `county`, `city`, `address`, `about`, `guardian_name`, `guardian_phone`, `guardian_details`, `bad_no`, `referred_by`, `reg_date`, `descriptions`) VALUES
(2, 'Meghana', '01733435951', 'B+', 4, '01/01/1997', 25, 'fem', 'meghanag@gmail.com', 'india', 'labbipet', 'Goa, labbipet, India', 'fit', 'ram', '017335523', 'husband ', 5, 'anil','2/4/22', 'not applicable'),
(3, 'Paul', '7981075535', 'A-', 0, '02/03/1999', 23, 'male', 'paulk@gmail.com', 'india', 'goa', 'india,goa,sal', 'fit', 'sri', '14582758', 'bro', 24, 'ram', '2/7/22', 'not applicable'),
(4, 'Paul', '99087536', 'B+', 0, '03/12/1998', 24, 'male', 'paulk@gmail.com', 'france', 'khat', 'france,khat,par', 'fit', 'sri', '14586725', 'father', 2,'raju' , '02/04/22', 'not applicable'),
(5, 'Paul', '868840258', 'O+', 0, '21/04/1998', 24, 'male', 'paulk@gmail.com', 'inda', 'poori', 'india,poori,kaz', 'fit', 'sara', '4257681', 'mother', 14,'ramu', '22/03/22', 'not applicable'),
(6, 'Chandram', '1747022173', 'A', 0, '21/05/1997', 25, 'male', 'chandram@gmail.com', 'us', 'denton', '3502 Lakeland Park Drive', 'sick', 'anka', '14759382', 'mother', 5,'suguna',  '23/02/22', ' Developed By Meghana'),
(7, 'Paul', '145867136', 'AB+', 0, '22/04/1995', 27, 'male', 'paulk@gmail.com', 'paris', 'aus', 'paris, aus, kuv', 'weak', 'drag', '798546123', 'bro', 7, 'ravi', '24/04/22', 'not applicable'),
(8, 'Raju', '78546913', 'O', 0, '23/04/2000', 22, 'male', 'raju34@gmail.com', 'us', 'denton', 'us, dento,blvd', 'weak', 'drew', '145786945', 'bro', 24, 'sami', '25/04/22', 'not applicable'),
(9, 'Syam', '7899456123', 'B-', 0, '25/12/2001', 21, 'male', 'Syam34@gmail.com', 'us', 'frisco', 'us,frisco, maiden', 'fit', 'ram', '798456125', 'father', 47, 'John', '22/03/22', 'not applicable'),
(10, 'Mohan', '476812259', 'A+', 0, '02/07/1999', 23, 'male', 'Mohan34@gmail.com', 'us', 'frisco', 'us,frisco,maiden', 'fit', 'ram', '990845367', 'father', 50, 'Jai', '14/02/22', 'not applicable'),
(22, 'Sekhar', '145789354', 'AB', 0, '07/08/1999', 23, 'male', 'sekhar@gmail.com', 'us', 'plano', 'us,plano,blvd', 'fit', 'raj', '868459756', 'son', 49, 'chandu', '04/03/22', 'not applicable'),
(12, 'Subramanyam', '548946423', 'O', 0, '23/12/2000', 22, 'male', 'subramanyams@gmail.com', 'canada', 'furc', 'canada,furc, mel', 'fit', 'raj', '86854287', 'son', 25, 'rakesh', '14/02/22', 'not applicable'),
(13, 'Abhay', '017242538', 'B-', 4, '10/10/2000', 22, 'male', 'abhaya@gmail.com', 'india', 'Jamalpur', 'labbipet', 'fit', 'anil', '0173343659', 'father', 202, 'Ragunath', '25/01/22', 'Developed by Jai'),
(14, 'Meghana', '75864297', 'O-', 0, '10/09/2000', 22, 'female', 'meghanag2@gmail.com', 'canada', 'furc', 'canada,furc,mel', 'fit', 'anil', '758964256', 'father', 222, 'shekar', '17/03/22', 'not applicable'),
(15, 'rana', '145867236', 'A+', 0, '11/08/2000', 22, 'male', 'rana@gmail.com', 'india', 'vizag', 'india, vizag, chinta', 'fit', 'raju', '78945612', 'brother', 425, 'anil', '12/03/22', 'not applicable'),
(16, 'Meghana', '75864523', 'AB+', 0, '13/05/2001', 21, 'female', '01733435951@gmail.com', 'india', 'vizag', 'india,vizag, chinta', 'fit', 'rajesh', '125463415', 'bro', 458, 'kiran', '14/04/22', 'not applicable');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(50) NOT NULL,
  `apionment_id` int(50) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `user_id` int(22) UNSIGNED NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`user_id`, `Avatar`, `Name`, `password`) VALUES
(5, '../../../../images/pic17.jpg', 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(6, '', 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `table_appointment_history`
--

CREATE TABLE `table_appointment_history` (
  `Appointment_id` int(22) UNSIGNED NOT NULL,
  `Doctor_Name` varchar(30) NOT NULL,
  `Patient_Name` varchar(30) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Appointment_creation_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Appointment_date` varchar(255) NOT NULL,
  `Appointment_time` varchar(255) NOT NULL,
  `Action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_appointment_history`
--

INSERT INTO `table_appointment_history` (`Appointment_id`, `Doctor_Name`, `Patient_Name`, `Specialization`, `Appointment_creation_date`, `Appointment_date`, `Appointment_time`, `Action`) VALUES
(1, 'Jaisrinadh', 'jaisrinadh@gmail.com', 'Clinical Officer', '2022-04-21 10:53:02', '2022-04-22', '10:55', 'Approved'),
(2, 'Jaisrinadh', 'jaisrinadh@gmail.com', 'Dermatologist', '2022-03-27 15:10:08', '2022-03-28', '15:12', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `table_basic_test`
--

CREATE TABLE `table_basic_test` (
  `visit_id` int(22) UNSIGNED NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Temp` varchar(30) NOT NULL,
  `Pressure` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `Sugar` varchar(255) NOT NULL,
  `Visit_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_basic_test`
--

INSERT INTO `table_basic_test` (`visit_id`, `Email`, `Temp`, `Pressure`, `Weight`, `Height`, `Sugar`, `Visit_date`) VALUES
(1, 'syamg@gmail.com', '36.1', '99/120', '65', '3', '60', '2022-04-21 10:19:05'),
(2, 'meghanag@gmail.com', '36.1', '99/120', '65', '3', '60', '2022-04-22 21:08:58'),
(3, 'abhaya@gmail.com', '36.1', '99/120', '65', '3', '90', '2022-03-27 20:54:41'),
(4, 'mohan@gmail.com', '36.1', '99/120', '65', '3', '110', '2022-03-28 07:43:22'),
(5, 'subramanyams@gmail@gmail.com', '36.1', '99/120', '95', '3', '60', '2022-03-28 15:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `table_contactus`
--

CREATE TABLE `table_contactus` (
  `Msg_id` int(22) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Msg_status` varchar(20) NOT NULL,
  `Send_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_contactus`
--

INSERT INTO `table_contactus` (`Msg_id`, `Name`, `Phone`, `Email`, `Message`, `Msg_status`, `Send_date`) VALUES
(1, 'Swathi', '0721692107', 'swathis@gmail.com', 'do you offer ambulance services?', 'Seen', '2022-04-21 10:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `table_doctor`
--

CREATE TABLE `table_doctor` (
  `user_id` int(22) UNSIGNED NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Entry_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_doctor`
--

INSERT INTO `table_doctor` (`user_id`, `Avatar`, `Name`, `Email`, `Specialization`, `Phone`, `Entry_date`, `Password`) VALUES
(7, '../../../../images/pic14.jpg', 'Jaisrinadh', 'jaisrinadh@gmail.com', 'Dermatologist', '0728262277', '2022-04-19 10:20:07', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_feedback`
--

CREATE TABLE `table_feedback` (
  `feedback_id` int(22) UNSIGNED NOT NULL,
  `Rate` varchar(10) NOT NULL,
  `Services` varchar(10) NOT NULL,
  `Complain` varchar(10) NOT NULL,
  `Suggestion` varchar(255) NOT NULL,
  `Send_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `User` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_feedback`
--

INSERT INTO `table_feedback` (`feedback_id`, `Rate`, `Services`, `Complain`, `Suggestion`, `Send_date`, `User`) VALUES
(2, 'Simple', 'Best', 'No', 'add more facilities', '2022-01-21 22:05:48', 'meghanag2@gmail'),
(3, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-17 15:49:57', 'meghanag@gmail'),
(4, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-31 15:50:52', 'subramanyams@gmail'),
(5, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-19 15:50:53', 'mohan@gmail'),
(6, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-17 15:50:54', 'swathis@gmail'),
(7, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-22 15:50:54', 'sekhar@gmail'),
(8, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-07 15:50:54', 'syamg@gmail'),
(9, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-27 15:50:55', 'sekhar@gmail'),
(10, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-17 15:50:55', 'paulk@gmail.com'),
(22, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-31 15:50:55', 'rana@gmail.com'),
(12, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-22 15:50:55', 'chandram@gmail.com'),
(13, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-17 15:50:55', 'teenas@gmail.com'),
(14, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-28 15:50:56', 'tejach@gmail.com'),
(15, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-16 15:50:56', 'amulyach@gmail.com'),
(16, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-19 15:50:56', 'manojch@gmail.com'),
(17, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-18 15:50:56', 'naveeny@gmail.com'),
(22, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-27 15:50:56', 'abhaya@gmail.com'),
(19, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-26 15:50:56', 'vishnum@gmail.com'),
(20, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-28 15:50:57', 'bharath@gmail.com'),
(21, 'Fair', 'Best', 'No', 'Not applicable', '2022-03-29 15:50:57', 'hari@gmail.com'),
(22, 'Fair', 'Best', 'No', 'Not applicable', '2022-04-12 15:50:57', 'anurag@gmail.com');

-- --------------------------------------------------------

-- Table structure for `table_finance`
--

CREATE TABLE `table_finance` (
  `user_id` int(22) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,	
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `Entry_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_finance`
--

INSERT INTO `table_finance` (`user_id`, `Name`, `Email`, `Phone`, `Avatar`, `Entry_date`, `Password`) VALUES
(1, 'MELISSA', 'melissa@gmail.com', '0797876336', '../../../../images/finance.jpg', '2022-02-17 11:35:10', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_images`
--

CREATE TABLE `table_images` (
  `Image_id` int(22) UNSIGNED NOT NULL,
  `Avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_images`
--

INSERT INTO `table_images` (`Image_id`, `Avatar`) VALUES
(1, '../../../../images/championsleague-20190829-0002.jpg'),
(2, '../../../../images/zurra4wforaf3pa5d2ffd36caab5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_lab_report`
--

CREATE TABLE `table_lab_report` (
  `Id` int(22) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Symptoms` varchar(255) NOT NULL,
  `Test` varchar(255) NOT NULL,
  `Results` varchar(255) NOT NULL,
  `Send_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_lab_report`
--

INSERT INTO `table_lab_report` (`Id`, `Name`, `Email`, `Phone`, `Symptoms`, `Test`, `Results`, `Send_date`, `Status`) VALUES
(1, 'AnderCashew', 'andercashew@gmail.com', '09934517894', 'fever\r\vomitings\r\nheadache', 'Dengue', '', '2022-01-17 11:15:26', 'Tested'),
(2, 'Robin Albert', 'robin@gmail.com', '05735649871', 'fever\r\ndizziness', 'Typhoid', '', '2022-01-19 21:09:29', 'Tested'),
(3, 'Williams', 'williams@gmail.com', '09407864352', 'fever\r\ncough', 'cholera', '', '2022-02-13 19:17:56', 'Tested'),
(4, 'Joseph', 'joseph@gmail.com', '08976285354', 'severe headache\r\nfever\r\ndry stool\r\ncough', 'cholera\r\ntyphoid\r\nmalaria', '', '2022-02-17 19:43:45', 'Tested'),
(5, 'Asifa', 'asifa@gmail.com', '08971235397', 'fever\r\nheadache', 'malaria', '', '2022-02-16 13:15:06', 'Tested'),
(6, 'Renney', 'renney@gmail.com', '09083879241', 'fever', 'malaria', '', '2022-03-07 14:50:36', 'Tested');

-- --------------------------------------------------------

--
-- Table structure for table `table_lab_results`
--

CREATE TABLE `table_lab_results` (
  `Id` int(22) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Results` varchar(255) NOT NULL,
  `Send_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_lab_results`

INSERT INTO `table_lab_results` (`Id`, `Name`, `Email`, `Phone`, `Results`, `Send_date`) VALUES
(1, 'AnderCashew', 'andercashew@gmail.com', '09934517894', 'absent', '2022-01-20 22:02:09'),
(2, 'Robin Albert', 'robin@gmail.com', '05735649871', 'plasmodium vivax present', '2022-01-19 21:09:29'),
(3, 'Williams', 'williams@gmail.com', '09407864352', 'plasmodium vivax present', '2022-02-13 19:17:56'),
(4, 'Joseph', 'joseph@gmail.com', '08976285354', 'positive', '2022-02-17 19:43:45'),
(5, 'Asifa', 'asifa@gmail.com', '08971235397', 'vibrio cholerae present', '2022-02-16 13:15:06'),
(6, 'Renney', 'renney@gmail.com', '09083879241', 'present', '2022-03-07 14:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `table_lab_technician`
--

CREATE TABLE `table_lab_technician` (
  `user_id` int(22) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `Entry_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_lab_technician`
--

INSERT INTO `table_lab_technician` (`user_id`, `Name`, `Email`, `Phone`, `Avatar`, `Entry_date`, `Password`) VALUES
(1, 'Sam johnson', 'samjohnson@gmail.com', '09803428976', '../../../../images/pic5.jpg', '2022-01-15 10:22:45', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_medical_history`
--

CREATE TABLE `table_medical_history` (
  `visit_id` int(22) UNSIGNED NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Temp` varchar(30) NOT NULL,
  `Pressure` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Sugar` varchar(255) NOT NULL,
  `Prescription` varchar(255) NOT NULL,
  `Visit_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_nurse`
--

CREATE TABLE `table_nurse` (
  `user_id` int(22) UNSIGNED NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Entry_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_nurse`
--

INSERT INTO `table_nurse` (`user_id`, `Avatar`, `Name`, `Email`, `Specialization`, `Phone`, `Entry_date`, `Password`) VALUES
(1, '../../../../images/pic9.jpg', 'Liam', 'liam@gmail.com', 'Dermatologist', '09803428976', '2022-01-15 10:13:10', 'e10adc3949ba59abbe56e057f20f883e'),
(2, '../../../../images/pic10.jpg', 'Mario', 'mario@gmail.com', 'Orthopaedic', '09408974563', '2022-03-19 15:05:08', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_patients`
--

CREATE TABLE `table_patients` (
  `user_id` int(22) UNSIGNED NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Visit_date` date DEFAULT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_patients`
--

INSERT INTO `table_patients` (`user_id`, `FullName`, `Phone`, `Email`, `City`, `Address`, `DOB`, `Visit_date`, `Gender`) VALUES
(1, 'AnderCashew' , '09934517894', 'andercashew@gmail.com', 'DENTON', '665-BERNARD STREET', '2009-10-15', '2022-01-15', 'Female'),
(2, 'Robin Albert', '05735649871', 'robin@gmail.com', 'PLANO', '146-MCKINNEYSTREET', '2007-12-13', '2022-03-23', 'Male'),
(3, 'Williams','09407864352', 'williams@gmail.com', 'MCKINNEY', '204-WEST UNIVERSITY', '1999-03-15', '2022-04-15', 'Male'),
(6, 'Joseph', '08976285354', 'joseph@gmail.com', 'FRISCO', '209-ROBIN STREET', '2005-10-22', '2022-04-15', 'Male'),
(7, 'Asifa', '08971235397', 'asifa@gmail.com', 'DENTON', '101-AvenueA', '1996-02-17', '2022-02-15', 'Female'),
(8, 'Renney','09083879241', 'renney@gmail.com', 'DALLAS', '908-PARKER STREET', '1980-10-12', '2022-03-09', 'Female'),
(9, 'Marin', '04316785465', 'marin@gmail.com', 'IRVING', '506-SEPHIN STREET', '2020-05-27', '2022-03-25', 'Male'),
(10, 'Sedrick', '09087564389', 'sedrick@gmail.com', 'DENTON', '256-CHROMICK STREET', '1998-05-23', '2022-04-13', 'Male');

-- --------------------------------------------------------
--
-- Table structure for table `table_patients2`
--

CREATE TABLE `table_patients2` (
  `user_id` int(22) UNSIGNED NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Signup_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_patients2`
--

INSERT INTO `table_patients2` (`user_id`, `FullName`, `Email`, `Avatar`, `Address`, `City`, `Gender`, `Password`, `Signup_date`) VALUES
(1, 'Lucila Tiger', 'lucilatiger09@gmail.com', '../../../../images/zurra4wforaf3pa5d2ffd36caab5.jpg', '124-machinery', 'Nairobi', 'Male', 'e10adc3949ba59abbe56e057f20f883e', '2022-03-21 10:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `table_payments`
--

CREATE TABLE `table_payments` (
  `Id` int(22) UNSIGNED NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Consultation_fee` varchar(30) NOT NULL,
  `Lab_test_fee` varchar(30) NOT NULL,
  `Treatment_fee` varchar(30) NOT NULL,
  `Pharmacy_fee` varchar(30) NOT NULL,
  `Other_charges` varchar(30) NOT NULL,
  `Total_amount` varchar(255) NOT NULL,
  `Mpesa` int(255) NOT NULL,
  `Cash` int(255) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Send_date` date DEFAULT NULL,
  `Due` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_payments`
--

INSERT INTO `table_payments` (`Id`, `Email`, `Name`, `Consultation_fee`, `Lab_test_fee`, `Treatment_fee`, `Pharmacy_fee`, `Other_charges`, `Total_amount`, `Mpesa`, `Cash`, `Status`, `Send_date`, `Due`) VALUES
(1, 'sameer@gmail.com', 'Sameer Han', '1000', '1200', '1500', '2000', '', '', 43, 5657, 'Paid', '2022-03-20', 0),
(2, 'jollybabn@gmail.com', 'Jolly Babn', '1000', '1200', '1500', '1000', '', '', 1000, 3700, 'Paid', '2022-03-21', 0),
(3, 'saipathak@gmail.com', 'Sai Pathak', '1000', '1200', '1000', '2000', '', '5200', 4300, 900, 'Paid', '2022-03-26', 0),
(4, 'victoria@gmail.com', 'Victoria Jamin', '1000', '500', '800', '700', '', '3000', 1500, 1500, 'Paid', '2022-03-27', 0),
(5, 'kamusa12@gmail.com', 'Kamusa Sami', '1000', '1200', '890', '1000', '', '4090', 3000, 1090, 'Paid', '2022-03-27', 0),
(6, 'corettaharriss@gmail.com', 'Coretta Harriss', '1000', '1200', '800', '1000', '', '4000', 900, 0, 'Not Paid', '2022-03-27', 0),
(7, 'darienemund@gmail.com', 'dariene Mund', '1000', '1600', '2000', '700', '', '5300', 5000, 300, 'Paid', '2022-03-27', 0),
(10, 'roxiegalyean@gmail.com', 'Roxie Galyean', '1000', '1200', '2000', '3500', '', '7700', 900, 6000, 'Not Paid', '2022-03-28', 0),
(22, 'mintalofton@gmail.com', 'Minta Lofton', '1000', '1200', '1500', '1000', '', '4700', 4700, 0, 'Not Paid', '2022-03-28', 0),
(12, 'melidawaiters@gmail.com', 'Melida Waiters', '1000', '1200', '1500', '2000', '', '5700', 5000, 700, 'Not Paid', '2022-03-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_pharmacist`
--

CREATE TABLE `table_pharmacist` (
  `user_id` int(22) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `Entry_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_pharmacist`
--

INSERT INTO `table_pharmacist` (`user_id`, `Name`, `Email`, `Phone`, `Avatar`, `Entry_date`, `Password`) VALUES
(2, 'Navab Han', 'navabhan@gmail.com', '8563214795', '../../../../images/pic17.jpg', '2022-03-21 10:31:55', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_pharmacy`
--

CREATE TABLE `table_pharmacy` (
  `Id` int(22) UNSIGNED NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Prescription` varchar(250) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Send_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_pharmacy`
--

INSERT INTO `table_pharmacy` (`Id`, `Email`, `Name`, `Phone`, `Prescription`, `Status`, `Send_date`) VALUES
(1, 'jamalhasan@gmail.com', 'Jamal Hasan', '9874563215', 'abz tablets 1x3,,,,,Bruffen 1x3,,,,paracetamol 1 tea spoon (1x3)', 'Prescribed', '2022-03-21 10:30:30'),
(2, 'catherine@gmail.com', 'Catherine Kan', '9563248752', 'panadol', 'Prescribed', '2022-03-21 21:22:00'),
(3, 'miralurani@gmail.com', 'Miralu Rani', '5632178965', 'abz 1X2,,,,\r\nbruffen 1x3,,,\r\npanadol 1x3,,,', 'Prescribed', '2022-03-28 07:48:12'),
(4, 'prasadsai@gmail.com', 'Prasad Sai', '9632587415', 'panadol 1x3', 'Not Prescribed', '2022-03-28 15:17:09'),
(5, 'tinakalim@gmail.com', 'Tina Kalim', '8569321475', 'abz ', 'Prescribed', '2022-03-17 15:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `role` varchar(15) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `profile_id` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `full_name`, `email`, `last_login`, `role`, `picture`, `profile_id`) VALUES
(2, 'pal', '202cb962ac59075b964b07152d234b70', 'Prasad Sai', 'prasadsai@gmail.com', '0000-00-00 00:00:00', 'doctor', 'http://localhost/hospital/uploads/5.jpg', 0),
(3, 'kamil', '202cb962ac59075b964b07152d234b70', 'kamil Sailak', 'kamilsailak@gmail.com', '0000-00-00 00:00:00', 'nurse', 'http://localhost/hospital/uploads/5.jpg', 0),
(5, 'john', '202cb962ac59075b964b07152d234b70', 'John Roy', 'johnroy@gmail.com', '0000-00-00 00:00:00', 'admin', 'http://localhost/hospital/uploads/36.jpg', 0),
(6, 'samish', '202cb962ac59075b964b07152d234b70', 'Samish Manik', 'samishmanik@gmail.com', '0000-00-00 00:00:00', 'patient', 'http://localhost/hospital/uploads/Screenshot_2022-01-14-14-05-20.jpg', 0),
(8, 'chemin', '202cb962ac59075b964b07152d234b70', 'Chemin Kal', 'cheminkal09@gmail.com', '2022-01-31 22:58:50', 'patient', '', 0),
(13, 'minakshi', '202cb962ac59075b964b07152d234b70', 'Minakshi Ram', 'minakshiram098@gmail.com', '2022-01-31 12:14:22', 'patient', '', 7),
(14, 'samisha', '202cb962ac59075b964b07152d234b70', 'Samisha Raj', 'samisha65@gmail.com', '2022-02-01 12:41:33', 'patient', '', 8),
(15, 'samuktha', '202cb962ac59075b964b07152d234b70', 'samuktha', 'samuktha678@gmail.com', '2022-02-01 12:44:17', 'patient', '', 9),
(16, 'lallytami', '202cb962ac59075b964b07152d234b70', 'Lally tami', 'lallytami34@gmail.com', '2022-02-01 12:46:05', 'patient', '', 10),
(17, 'joshna', '202cb962ac59075b964b07152d234b70', 'Joshna Jon', 'joshnajon@gmail.com', '2022-02-01 01:00:55', 'patient', '', 22),
(22, 'pratish', '202cb962ac59075b964b07152d234b70', 'Pratish Hasan', 'pratishhasan@gmail.com', '2022-02-01 01:01:20', 'patient', '', 12),
(19, 'sabugani', '202cb962ac59075b964b07152d234b70', 'Sabuksha Gani', 'sabukshagani@gmail.com', '2022-02-01 01:01:56', 'patient', '', 13),
(20, 'ambir', 'a39bb7bca298e5ea5b99e952a8b0b488', 'Ambir Rana', 'ambirrana172@gmail.com', '2022-03-29 10:36:24', 'patient', '', 14),
(21, 'Kalikya', '827ccb0eea8a706c4c34a16891f84e7b', 'Kalikya Ram', 'kalikyaram11@gmail.com', '2022-03-29 10:47:44', 'patient', '', 15),
(22, 'somesh', '202cb962ac59075b964b07152d234b70', 'Somesh What', 'someshwhat@gmail.com', '2022-03-29 10:51:46', 'patient', '', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_appointment_history`
--
ALTER TABLE `table_appointment_history`
  ADD PRIMARY KEY (`Appointment_id`);

--
-- Indexes for table `table_basic_test`
--
ALTER TABLE `table_basic_test`
  ADD PRIMARY KEY (`visit_id`);

--
-- Indexes for table `table_contactus`
--
ALTER TABLE `table_contactus`
  ADD PRIMARY KEY (`Msg_id`);

--
-- Indexes for table `table_doctor`
--
ALTER TABLE `table_doctor`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_feedback`
--
 -- ALTER TABLE `table_feedback`
 --  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `table_finance`
--
ALTER TABLE `table_finance`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_images`
--
ALTER TABLE `table_images`
  ADD PRIMARY KEY (`Image_id`);

--
-- Indexes for table `table_lab_report`
--
ALTER TABLE `table_lab_report`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `table_lab_results`
--
ALTER TABLE `table_lab_results`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `table_lab_technician`
--
ALTER TABLE `table_lab_technician`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_medical_history`
--
ALTER TABLE `table_medical_history`
  ADD PRIMARY KEY (`visit_id`);

--
-- Indexes for table `table_nurse`
--
ALTER TABLE `table_nurse`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_patients`
--
ALTER TABLE `table_patients`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_patients2`
--
ALTER TABLE `table_patients2`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_payments`
--
ALTER TABLE `table_payments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `table_pharmacist`
--
ALTER TABLE `table_pharmacist`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_pharmacy`
--
ALTER TABLE `table_pharmacy`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `user_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_appointment_history`
--
ALTER TABLE `table_appointment_history`
  MODIFY `Appointment_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_basic_test`
--
ALTER TABLE `table_basic_test`
  MODIFY `visit_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_contactus`
--
ALTER TABLE `table_contactus`
  MODIFY `Msg_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_doctor`
--
ALTER TABLE `table_doctor`
  MODIFY `user_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_feedback`
--
ALTER TABLE `table_feedback`
  MODIFY `feedback_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `table_finance`
--
ALTER TABLE `table_finance`
  MODIFY `user_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_images`
--
ALTER TABLE `table_images`
  MODIFY `Image_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_lab_report`
--
ALTER TABLE `table_lab_report`
  MODIFY `Id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_lab_results`
--
ALTER TABLE `table_lab_results`
  MODIFY `Id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_lab_technician`
--
ALTER TABLE `table_lab_technician`
  MODIFY `user_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_medical_history`
--
ALTER TABLE `table_medical_history`
  MODIFY `visit_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_nurse`
--
ALTER TABLE `table_nurse`
  MODIFY `user_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_patients`
--
ALTER TABLE `table_patients`
  MODIFY `user_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `table_patients2`
--
ALTER TABLE `table_patients2`
  MODIFY `user_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_payments`
--
ALTER TABLE `table_payments`
  MODIFY `Id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_pharmacist`
--
ALTER TABLE `table_pharmacist`
  MODIFY `user_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_pharmacy`
--
ALTER TABLE `table_pharmacy`
  MODIFY `Id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

