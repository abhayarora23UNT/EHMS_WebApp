

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `schedule_id` int(11) NOT NULL,
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
(1, 5, 6, 6, '28/01/2018', '01/02/18', 1, '', '', 'pending'),
(2, 5, 16, 6, '28/01/2018', '01/02/18', 2, '', '', 'pending'),
(3, 4, 16, 9, '02/02/2018', '01/02/18', 1, '', '', 'pending'),
(4, 4, 5, 9, '16/02/2018', '16/02/18', 1, '', '', 'pending'),
(5, 5, 5, 6, '25/02/2018', '16/02/18', 1, '', '', 'pending'),
(6, 5, 6, 6, '18/02/2018', '19/02/18', 1, '', '', 'pending'),
(7, 4, 6, 10, '21/02/2018', '19/02/18', 1, '', 'Prescription Details here', 'pending'),
(8, 4, 13, 9, '23/03/2018', '16/03/18', 1, '', '', 'pending'),
(9, 2, 13, 11, '25/03/2018', '16/03/18', 1, '', '', 'pending'),
(10, 4, 6, 10, '28/03/2018', '16/03/18', 1, '', 'Hello I am', 'pending'),
(11, 2, 6, 11, '11/03/2018', '16/03/18', 1, '', '', 'pending'),
(12, 5, 6, 6, '04/03/2018', '16/03/18', 1, '', '', 'pending'),
(13, 4, 6, 9, '09/03/2018', '16/03/18', 1, '', 'sdfdsfdsafds', 'pending'),
(14, 2, 6, 11, '18/03/2018', '16/03/18', 1, '', '', 'pending'),
(15, 5, 6, 7, '05/03/2018', '16/03/18', 1, '', '', 'pending'),
(16, 5, 6, 6, '25/02/2018', '16/03/18', 2, '', '', 'pending'),
(19, 4, 5, 9, '09/03/2018', '29/03/18', 2, '', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
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
(2, '123456789', 4, '0', '10/10/2011', '0', 'Email@email.com', '01733435951', 'BD', 'Dhaka', 'Mirpur, Dhaka, Bangladesh', ':)', 'Doctor 1', '', 0, 'http://localhost/hospital/uploads/doctor-3.jpg'),
(4, '2', 4, '0', '', '0', 'lipsha.com@gmail.com3', '', 'BD', '', '', '', 'Doctor 2', '', 0, 'http://localhost/hospital/uploads/doctor-2.jpg'),
(5, '45548 3', 4, '0', '10/10/2003', '1', 'lipsha.com@gmail.com3', '8017947545653', 'BD', 'Dhaka3', 'address filed3', 'dsfdsf3', 'Dr. Hamad Hosain', '', 0, 'http://localhost/hospital/uploads/doctor-1.jpg');

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
  `max_num_of_patients` int(11) NOT NULL,
  `fees` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_schedule`
--

INSERT INTO `doctors_schedule` (`id`, `doctor_id`, `day_of_week`, `start_time`, `end_time`, `max_num_of_patients`, `fees`, `status`, `comment`) VALUES
(6, 5, 'Sunday', '10 am', '11 am', 5, '200', '', ''),
(7, 5, 'Monday', '10 am', '11 am', 5, '200', '', ''),
(8, 5, 'Tuesday', '10 am', '11 am', 5, '200', '', ''),
(9, 4, 'Friday', '10 am', '12 am', 10, '399', '', '10 % discount'),
(10, 4, 'Wednesday', '10am', '1pm', 25, '250', '', 'dsf'),
(11, 2, 'Sunday', '10am', '1pm', 25, '250', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `created_by` int(11) NOT NULL,
  `patient` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `data` text NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `title`, `created_by`, `patient`, `date`, `data`, `total`) VALUES
(5, 'Invoice Name 568', 5, 16, '02/19/2018', '[{\"label\":\"Label 3\",\"price\":\"548\"},{\"label\":\"Lax\",\"price\":\"5\"}]', '553'),
(6, 'Test invoice', 5, 17, '03/16/2018', '[{\"label\":\"Medicine \",\"price\":\"230\"},{\"label\":\"Blood Test\",\"price\":\"120\"}]', '350'),
(7, 'ECG', 5, 17, '03/29/2018', '[{\"label\":\"ooo\",\"price\":\"1000\"}]', '1000');

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
(6, 'Nurse Name', '7706408552', 'lipsha.com@gmail.com', 'Islamapur-2020,jamalpur', 'http://localhost/hospital/uploads/04 News InsideSmall.jpg', 'dsfdsf', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
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
(2, 'Md Rukon Shekh', '01733435951', '1', 4, '01/01/2052', 25, '0', 'coder.rukon@gmail.com', 'BF', 'Dhaka', 'Mirpur, Dhaka, Bangladesh', 'About my Details', 'Guardian Name', '0173355', 'About Guardian ', 5, 4, '263', 'Desc'),
(3, 'Harun', '', '', 0, '', 0, '', 'Harun@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(4, 'Harun', '', '', 0, '', 0, '', 'Harun@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(5, 'Harun', '', '', 0, '', 0, '', 'Harun@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(6, 'Md.Faridul Islam', '01747022173', '3', 0, '', 0, '1', '', 'WF', '', '3502 Lakeland Park Drive', '', '', '', '', 5, 0, '25', ' Developed By Md Rukon Shekh '),
(7, 'Harun', '', '', 0, '', 0, '', 'Harun@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(8, 'Raju', '', '', 0, '', 0, '', 'raju34@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(9, 'Rafique', '', '', 0, '', 0, '', 'rafique34@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(10, 'Ali', '', '', 0, '', 0, '', 'ali34@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(11, 'Sumon Hasan', '', '', 0, '', 0, '', 'sumon@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(12, 'Dr. Imtiaz Uddin', '', '', 0, '', 0, '', 'imtiaz@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(13, 'Faruk Hasan', '0172', '0', 4, '10/10/2003', 15, '1', 'faruk@gmail.com', 'BE', 'Jamalpur', 'Dhaka', 'About Patient', 'Guardian', '0173343659', 'Guardian Details here', 202, 5, '25/201/15', 'sdfdsf'),
(14, 'Md Rukon Shekh Update', '', '', 0, '', 0, '', 'faridulislam172@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(15, 'sohel rana ', '', '', 0, '', 0, '', 'sohel@gmail.com', '', '', '', '', '', '', '', 0, 0, '', ''),
(16, 'Md Rukon Shekh', '', '', 0, '', 0, '', '01733435951@gmail.com', '', '', '', '', '', '', '', 0, 0, '', '');

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
  `user_id` int(11) UNSIGNED NOT NULL,
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
  `Appointment_id` int(11) UNSIGNED NOT NULL,
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
(1, 'ALEX MUTUA', 'mutuavictor801@gmail.com', 'Clinical Officer', '2021-01-21 10:53:02', '2021-01-22', '10:55', 'Approved'),
(2, 'ALEX MUTUA', 'mutuavictor801@gmail.com', 'Dermatologist', '2021-01-27 15:10:08', '2021-01-28', '15:12', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `table_basic_test`
--

CREATE TABLE `table_basic_test` (
  `visit_id` int(11) UNSIGNED NOT NULL,
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
(1, 'gifttom@gmail.com', '36.1', '99/120', '65', '3', '60', '2021-01-21 10:19:05'),
(2, 'cath@gmail.com', '36.1', '99/120', '65', '3', '60', '2021-01-21 21:08:58'),
(3, 'jane@gmail.com', '36.1', '99/120', '65', '3', '60', '2021-01-27 20:54:41'),
(4, 'mirriam@gmail.com', '36.1', '99/120', '65', '3', '60', '2021-01-28 07:43:22'),
(5, 'wilkester@gmail.com', '36.1', '99/120', '65', '3', '60', '2021-01-28 15:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `table_contactus`
--

CREATE TABLE `table_contactus` (
  `Msg_id` int(11) UNSIGNED NOT NULL,
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
(1, 'violet', '0721692107', 'violet@gmail.com', 'do you offer ambulance services?', 'Seen', '2021-01-21 10:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `table_doctor`
--

CREATE TABLE `table_doctor` (
  `user_id` int(11) UNSIGNED NOT NULL,
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
(7, '../../../../images/pic14.jpg', 'ALEX MUTUA', 'alexmutua@gmail.com', 'Dermatologist', '0728262277', '2021-01-21 10:20:07', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_feedback`
--

CREATE TABLE `table_feedback` (
  `feedback_id` int(11) UNSIGNED NOT NULL,
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
(2, 'Simple', 'Best', 'No', 'add more functionalities', '2021-01-21 11:05:48', 'mutuavictor801@gmail.com'),
(3, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:49:57', 'mutuavictor801@gmail.com'),
(4, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:52', 'mutuavictor801@gmail.com'),
(5, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:53', 'mutuavictor801@gmail.com'),
(6, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:54', 'mutuavictor801@gmail.com'),
(7, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:54', 'mutuavictor801@gmail.com'),
(8, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:54', 'mutuavictor801@gmail.com'),
(9, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:55', 'mutuavictor801@gmail.com'),
(10, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:55', 'mutuavictor801@gmail.com'),
(11, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:55', 'mutuavictor801@gmail.com'),
(12, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:55', 'mutuavictor801@gmail.com'),
(13, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:55', 'mutuavictor801@gmail.com'),
(14, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:56', 'mutuavictor801@gmail.com'),
(15, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:56', 'mutuavictor801@gmail.com'),
(16, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:56', 'mutuavictor801@gmail.com'),
(17, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:56', 'mutuavictor801@gmail.com'),
(18, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:56', 'mutuavictor801@gmail.com'),
(19, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:56', 'mutuavictor801@gmail.com'),
(20, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:57', 'mutuavictor801@gmail.com'),
(21, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:57', 'mutuavictor801@gmail.com'),
(22, 'Fair', 'Best', 'No', 'jnlk', '2021-06-17 15:50:57', 'mutuavictor801@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `table_finance`
--

CREATE TABLE `table_finance` (
  `user_id` int(11) UNSIGNED NOT NULL,
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
(2, 'MARTIN MUTUA', 'martin@gmail.com', '0797876336', '../../../../images/finance.jpg', '2021-01-21 10:27:27', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_images`
--

CREATE TABLE `table_images` (
  `Image_id` int(11) UNSIGNED NOT NULL,
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
  `Id` int(11) UNSIGNED NOT NULL,
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
(1, 'gift tom', 'gifttom@gmail.com', '0787654321', 'fever\r\ncough\r\nheadache', 'malaria', '', '2021-01-21 10:21:34', 'Tested'),
(2, 'catherine k', 'cath@gmail.com', '0711111111', 'fever\r\nheadache', 'malaria', '', '2021-01-21 21:09:29', 'Tested'),
(3, 'jane doe', 'jane@gmail.com', '0721692109', 'fever\r\ncough', 'cholera', '', '2021-01-27 20:55:50', 'Tested'),
(4, 'mirriam wanjiru', 'mirriam@gmail.com', '0712335678', 'severe headache\r\nfever\r\ndry stool\r\ncough', 'cholera\r\ntyphoid\r\nmalaria', '', '2021-01-28 07:44:45', 'Tested'),
(5, 'wilkister ndinda', 'wilkester@gmail.com', '0728124555', 'fever\r\nheadache', 'malaria', '', '2021-01-28 15:16:06', 'Tested'),
(6, 'aphonse', 'alpfo@gmail.com', '0711111114', 'fever', 'malaria', '', '2021-05-17 15:50:36', 'Tested');

-- --------------------------------------------------------

--
-- Table structure for table `table_lab_results`
--

CREATE TABLE `table_lab_results` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Results` varchar(255) NOT NULL,
  `Send_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_lab_results`
--

INSERT INTO `table_lab_results` (`Id`, `Name`, `Email`, `Phone`, `Results`, `Send_date`) VALUES
(1, 'victor', 'mutuavictor801@gmail.com', '0741030066 ', 'absent', '2021-01-20 18:02:09'),
(2, 'victor', 'mutuavictor801@gmail.com', '0741030066 ', 'present', '2021-01-20 18:03:09'),
(3, 'alex', 'alexmutua@gmail.com', '0728262277 ', 'plasmodium vivax present', '2021-01-20 19:25:27'),
(4, 'gift tom', 'gifttom@gmail.com', '0787654321 ', 'plasmodium vivax present', '2021-01-21 10:24:30'),
(5, 'catherine k', 'cath@gmail.com', '0711111111 ', 'positive', '2021-01-21 21:09:57'),
(6, 'jane doe', 'jane@gmail.com', '0721692109 ', 'vibrio cholerae present', '2021-01-27 20:56:56'),
(7, 'mirriam wanjiru', 'mirriam@gmail.com', '0712335678 ', 'vibrio cholerae present,,\r\nsalmonella typhi absent\r\nplasmodium vivax present', '2021-01-28 07:46:00'),
(8, 'wilkister ndinda', 'wilkester@gmail.com', '0728124555 ', 'present', '2021-01-28 15:16:26'),
(9, 'aphonse', 'alpfo@gmail.com', '0711111114 ', 'present', '2021-05-17 15:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `table_lab_technician`
--

CREATE TABLE `table_lab_technician` (
  `user_id` int(11) UNSIGNED NOT NULL,
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
(2, 'BRIAN MAUNDU', 'brian@gmail.com', '0734899242', '../../../../images/pic5.jpg', '2021-01-21 10:22:44', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_medical_history`
--

CREATE TABLE `table_medical_history` (
  `visit_id` int(11) UNSIGNED NOT NULL,
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
  `user_id` int(11) UNSIGNED NOT NULL,
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
(7, '../../../../images/pic9.jpg', 'ELIZABETH MULWA', 'eliza@gmail.com', 'Dermatologist', '0712345678', '2021-01-21 10:13:10', 'e10adc3949ba59abbe56e057f20f883e'),
(8, '', 'KADAFA', 'kadafa@gmail.com', 'Orthopaedic', '0787654321', '2021-01-27 15:05:08', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_patients`
--

CREATE TABLE `table_patients` (
  `user_id` int(11) UNSIGNED NOT NULL,
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
(1, 'GIFT TOM', '0787654321', 'gifttom@gmail.com', 'NAIROBI', '128-MACHINERY', '2013-01-21', '2021-01-21', 'Male'),
(2, 'CATHERINE K', '0711111111', 'cath@gmail.com', 'NAIROBI', '128-MACHINERY', '2014-07-21', '2021-01-21', 'Female'),
(3, 'VICTOR', '0721692107', 'sirvic@gmail.com', 'NAIROBI', '128-MACHINERY', '2021-01-26', '2021-01-26', 'Male'),
(6, 'JANE DOE', '0721692109', 'jane@gmail.com', 'NAIROBI', '128-MACHINERY', '2021-01-23', '2021-01-25', 'Female'),
(7, 'THOROJO', '0722222278', 'thorojo@gmail.com', 'NAIROBI', '128-MACHINERY', '2021-01-28', '2021-01-28', 'Male'),
(8, 'MIRRIAM WANJIRU', '0712335678', 'mirriam@gmail.com', 'NAIROBI', '128-MACHINERY', '1980-12-12', '2021-01-28', 'Female'),
(9, 'WILKISTER NDINDA', '0728124555', 'wilkester@gmail.com', 'NAIROBI', '128-MACHINERY', '2019-05-28', '2021-01-28', 'Female'),
(10, 'APHONSE', '0711111114', 'alpfo@gmail.com', 'NAIROBI', '128-MACHINERY', '2021-05-26', '2021-05-17', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `table_patients2`
--

CREATE TABLE `table_patients2` (
  `user_id` int(11) UNSIGNED NOT NULL,
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
(1, 'VICTOR MUTUA', 'mutuavictor801@gmail.com', '../../../../images/zurra4wforaf3pa5d2ffd36caab5.jpg', '128-machinery', 'Nairobi', 'Male', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-21 10:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `table_payments`
--

CREATE TABLE `table_payments` (
  `Id` int(11) UNSIGNED NOT NULL,
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
(1, 'gifttom@gmail.com', 'gift tom', '1000', '1200', '1500', '2000', '', '', 43, 5657, 'Paid', '2021-01-20', 0),
(2, 'cath@gmail.com', 'catherine k', '1000', '1200', '1500', '1000', '', '', 1000, 3700, 'Paid', '2021-01-21', 0),
(3, 'gifttom@gmail.com', 'gift tom', '1000', '1200', '1000', '2000', '', '5200', 4300, 900, 'Paid', '2021-01-26', 0),
(4, 'sirvic@gmail.com', 'victor', '1000', '500', '800', '700', '', '3000', 1500, 1500, 'Paid', '2021-01-27', 0),
(5, 'gifttom@gmail.com', 'gift tom', '1000', '1200', '890', '1000', '', '4090', 3000, 1090, 'Paid', '2021-01-27', 0),
(6, 'gifttom@gmail.com', 'gift tom', '1000', '1200', '800', '1000', '', '4000', 900, 0, 'Not Paid', '2021-01-27', 0),
(7, 'jane@gmail.com', 'jane doe', '1000', '1600', '2000', '700', '', '5300', 5000, 300, 'Paid', '2021-01-27', 0),
(10, 'mirriam@gmail.com', 'mirriam wanjiru', '1000', '1200', '2000', '3500', '', '7700', 900, 6000, 'Not Paid', '2021-01-28', 0),
(11, 'wilkester@gmail.com', 'wilkister ndinda', '1000', '1200', '1500', '1000', '', '4700', 4700, 0, 'Not Paid', '2021-01-28', 0),
(12, 'alpfo@gmail.com', 'aphonse', '1000', '1200', '1500', '2000', '', '5700', 5000, 700, 'Not Paid', '2021-05-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_pharmacist`
--

CREATE TABLE `table_pharmacist` (
  `user_id` int(11) UNSIGNED NOT NULL,
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
(2, 'MAUREEN PETER', 'maureen@gmail.com', '0721692107', '../../../../images/pic17.jpg', '2021-01-21 10:31:55', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `table_pharmacy`
--

CREATE TABLE `table_pharmacy` (
  `Id` int(11) UNSIGNED NOT NULL,
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
(1, 'gifttom@gmail.com', 'gift tom', '0787654321', 'abz tablets 1x3,,,,,Bruffen 1x3,,,,paracetamol 1 tea spoon (1x3)', 'Prescribed', '2021-01-21 10:30:30'),
(2, 'cath@gmail.com', 'catherine k', '0711111111', 'panadol', 'Prescribed', '2021-01-21 21:11:00'),
(3, 'mirriam@gmail.com', 'mirriam wanjiru', '0712335678', 'abz 1X2,,,,\r\nbruffen 1x3,,,\r\npanadol 1x3,,,', 'Prescribed', '2021-01-28 07:48:12'),
(4, 'wilkester@gmail.com', 'wilkister ndinda', '0728124555', 'panadol 1x3', 'Not Prescribed', '2021-01-28 15:17:09'),
(5, 'alpfo@gmail.com', 'aphonse', '0711111114', 'abz ', 'Prescribed', '2021-05-17 15:55:30');

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
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `full_name`, `email`, `last_login`, `role`, `picture`, `profile_id`) VALUES
(2, 'rukon', '202cb962ac59075b964b07152d234b70', 'Md Rukon Shekh', 'rukon.info@gmail.com', '0000-00-00 00:00:00', 'doctor', 'http://localhost/hospital/uploads/5.jpg', 0),
(3, 'rukon2', '202cb962ac59075b964b07152d234b70', 'Nurse Full Name', 'rukon.info2@gmail.com', '0000-00-00 00:00:00', 'nurse', 'http://localhost/hospital/uploads/5.jpg', 0),
(5, 'admin', '202cb962ac59075b964b07152d234b70', 'Md Rukon Shekh', 'hms@gmail.com', '0000-00-00 00:00:00', 'admin', 'http://localhost/hospital/uploads/36.jpg', 0),
(6, 'patient', '202cb962ac59075b964b07152d234b70', 'Patient Name DB', 'hello@patient.com', '0000-00-00 00:00:00', 'patient', 'http://localhost/hospital/uploads/Screenshot_2018-01-14-14-05-20.jpg', 0),
(8, 'patient2', '202cb962ac59075b964b07152d234b70', 'Hasan Masud', 'hasan@gmail.com', '2018-01-31 11:58:50', 'patient', '', 0),
(13, 'harun', '202cb962ac59075b964b07152d234b70', 'Harun', 'Harun@gmail.com', '2018-01-31 12:14:11', 'patient', '', 7),
(14, 'patient1', '202cb962ac59075b964b07152d234b70', 'Raju', 'raju34@gmail.com', '2018-02-01 12:41:33', 'patient', '', 8),
(15, 'patient3', '202cb962ac59075b964b07152d234b70', 'Rafique', 'rafique34@gmail.com', '2018-02-01 12:44:17', 'patient', '', 9),
(16, 'patient4', '202cb962ac59075b964b07152d234b70', 'Ali', 'ali34@gmail.com', '2018-02-01 12:46:05', 'patient', '', 10),
(17, 'patient5', '202cb962ac59075b964b07152d234b70', 'Sumon Hasan', 'sumon@gmail.com', '2018-02-01 01:00:55', 'patient', '', 11),
(18, 'patient6', '202cb962ac59075b964b07152d234b70', 'Dr. Imtiaz Uddin', 'imtiaz@gmail.com', '2018-02-01 01:01:20', 'patient', '', 12),
(19, 'patient7', '202cb962ac59075b964b07152d234b70', 'Faruk Hasan', 'faruk@gmail.com', '2018-02-01 01:01:56', 'patient', '', 13),
(20, '56ae85df6b86f', 'a39bb7bca298e5ea5b99e952a8b0b488', 'Md Rukon Shekh Update', 'faridulislam172@gmail.com', '2018-03-29 10:36:24', 'patient', '', 14),
(21, 'sohel rana', '827ccb0eea8a706c4c34a16891f84e7b', 'sohel rana ', 'sohel@gmail.com', '2018-03-29 10:47:44', 'patient', '', 15),
(22, 'Md Rukon Shekh', '202cb962ac59075b964b07152d234b70', 'Md Rukon Shekh', '01733435951@gmail.com', '2018-03-29 10:51:46', 'patient', '', 16);

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
ALTER TABLE `table_feedback`
  ADD PRIMARY KEY (`feedback_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_appointment_history`
--
ALTER TABLE `table_appointment_history`
  MODIFY `Appointment_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_basic_test`
--
ALTER TABLE `table_basic_test`
  MODIFY `visit_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_contactus`
--
ALTER TABLE `table_contactus`
  MODIFY `Msg_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_doctor`
--
ALTER TABLE `table_doctor`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_feedback`
--
ALTER TABLE `table_feedback`
  MODIFY `feedback_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `table_finance`
--
ALTER TABLE `table_finance`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_images`
--
ALTER TABLE `table_images`
  MODIFY `Image_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_lab_report`
--
ALTER TABLE `table_lab_report`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_lab_results`
--
ALTER TABLE `table_lab_results`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_lab_technician`
--
ALTER TABLE `table_lab_technician`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_medical_history`
--
ALTER TABLE `table_medical_history`
  MODIFY `visit_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_nurse`
--
ALTER TABLE `table_nurse`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_patients`
--
ALTER TABLE `table_patients`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_patients2`
--
ALTER TABLE `table_patients2`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_payments`
--
ALTER TABLE `table_payments`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_pharmacist`
--
ALTER TABLE `table_pharmacist`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_pharmacy`
--
ALTER TABLE `table_pharmacy`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
