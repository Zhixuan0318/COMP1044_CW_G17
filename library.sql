-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 09:34 AM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `book_copies` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `publisher_name` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `copyright_year` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `borrow_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `category`, `author`, `book_copies`, `publisher`, `publisher_name`, `isbn`, `copyright_year`, `date_added`, `status`, `borrow_id`) VALUES
(1, 'Natural Resources', 'General', 'Robin Kerrod\r\n', 15, 'Heinemann Library', 'Marshall\r\n', '978-0431078427', 1995, '2013-12-11 06:34:27', 'New\r\n', 1),
(2, 'Encyclopedia Americana\r\n', 'Encyclopedia', 'Grolier\r\n', 20, 'Grolier Educational', 'Grolier Incorporation\r\n', '978-0717201358', 2002, '2013-12-11 06:36:23', 'Archive\r\n', NULL),
(3, 'Algebra 1\r\n', 'Mathematics', 'Prentice Hall Mathematics', 35, 'Pearson Education, Inc\r\n', 'Prentice Hall, New Jersey\r\n', '978-0133659467', 2004, '2013-12-11 06:39:17', 'Damage\r\n', 7),
(4, 'The Philippine Daily Inquirer\r\n', 'Newspaper', 'Rudyard Arbolado\r\n', 3, 'Pasay City\r\n', '\r\nRaul Pangalanan', '9789718935002\r\n', 2013, '2013-12-11 06:41:53', 'New\r\n', 5),
(5, 'Science in our World\r\n', 'Science', 'Brian Knapp\r\n', 25, 'Grolier Educational Corporation', 'Prentice Hall, Inc\r\n', '978-0717271702', 1991, '2013-12-11 06:44:44', 'Lost\r\n', NULL),
(6, 'Literature\r\n', 'References', 'Greg Glowka\r\n', 20, 'Regency Publishing Group\r\n', 'Prentice Hall, Inc\r\n', '0-13-050841-1\r\n', 2001, '2013-12-11 06:47:44', 'Old\r\n', 9),
(7, 'Lexicon Universal Encyclopedia\r\n', 'Encyclopedia', 'Lexicon\r\n', 10, 'Lexicon Publication\r\n', 'Pulication Inc., Lexicon\r\n', '978-0717220250', 1983, '2013-12-11 06:49:53', 'Old\r\n', 8),
(8, 'Science and Invention Encyclopedia\r\n', 'Encyclopedia', 'Dartford Mark\r\n', 16, 'H.S. Stuttman inc. Publishing\r\n', 'Publisher , Westport Connecticut\r\n', '978-0863074912', 1987, '2013-12-11 06:52:58', 'New\r\n', 6),
(9, 'Integrated Science Textbook \r\n', 'Science', 'Merde C. Tan\r\n', 15, 'Vibal Publishing House Inc.\r\n', '12536. Araneta Avenue Corner Ma. Clara St., Quezon City\r\n', '971-570-124-8\r\n', 2009, '2013-12-11 06:55:27', 'New\r\n', NULL),
(10, 'Algebra 2\r\n', 'Math', 'Glencoe McGraw Hill\r\n', 15, 'The McGrawHill Companies Inc.\r\n', 'McGrawhill\r\n', '978-0-07-873830-2\r\n', 2008, '2013-12-11 06:57:35', 'New\r\n', NULL),
(11, 'Wiki at Panitikan \r\n', 'Newspaper', 'Lorenza P. Avera\r\n', 28, 'JGM & S Corporation\r\n', 'JGM & S Corporation\r\n', '971-07-1574-7\r\n', 2000, '2013-12-11 06:59:24', 'Damage\r\n', 4),
(12, 'English Expressways TextBook for 4th year\r\n', 'References', 'Virginia Bermudez Ed. O. et al\r\n', 23, 'SD Publications, Inc.\r\n', 'Gregorio Araneta Avenue, Quezon City\r\n', '978-971-0315-33-8\r\n', 2007, '2013-12-11 07:01:25', 'New\r\n', NULL),
(13, 'Asya Pag-usbong Ng Kabihasnan \r\n', 'General', 'Ricardo T. Jose, Ph . D.\r\n', 21, 'Vibal Publishing House Inc.\r\n', 'Araneta Avenue . Cor. Maria Clara St., Quezon City\r\n', '971-07-2324-3\r\n', 2008, '2013-12-11 07:02:56', 'New\r\n', NULL),
(14, 'Literature (the readers choice)\r\n', 'References', 'Glencoe McGraw Hill\r\n', 20, 'the McGrawHill Companies Inc\r\n', '\r\nBeverly Ann Chin', '978-0026354349\r\n', 2001, '2013-12-11 07:05:25', 'Damage\r\n', NULL),
(15, 'Beloved a Novel\r\n', 'References', 'Toni Morrison\r\n', 13, 'Knopf Doubleday Publishing Group\r\n', 'Alfred A. Knoff, Inc\r\n', '0-394-53597-9\r\n', 1987, '2013-12-11 07:07:02', 'Old\r\n', NULL),
(16, 'Silver Burdett Engish\r\n', 'English', 'Judy Brim\r\n', 12, 'Silver Burdett Company\r\n', 'Silver\r\n', '0-382-03575-5\r\n', 1985, '2013-12-11 09:22:50', 'Old\r\n', 3),
(17, 'The Corporate Warriors (Six Classic Cases in American Business)\r\n', 'General', 'Douglas K. Ramsey\r\n', 8, 'Houghton Miffin Company\r\n', '\r\nRamsey, Douglas K', '0-395-35487-0\r\n', 1987, '2013-12-11 09:25:32', 'Old\r\n', 2),
(18, 'Introduction to Information System\r\n', 'References', 'R. Kelly Rainer. \r\nBrad Prince\r\n', 10, 'Wiley; 9th edition\r\n', 'International Adaption\r\n', ' 978-1119859932\r\n', 2022, '2022-02-11 19:00:10', 'New\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `date_borrowed` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `date_returned` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `date_borrowed`, `due_date`, `book_id`, `date_returned`) VALUES
(1, 1, '2014-03-20 23:38:22', '2014-04-03 09:00:00', 1, '2014-04-03 08:30:25'),
(2, 4, '2014-03-20 23:49:34', '2014-04-02 09:00:00', 17, '2014-04-02 06:30:15'),
(3, 5, '2014-03-20 23:50:27', '2014-03-28 09:00:00', 16, '2014-03-27 23:00:07'),
(4, 6, '2014-03-21 15:37:00', '2014-04-03 09:00:00', 11, '2014-04-03 08:49:00'),
(5, 8, '2014-03-20 16:20:07', '2014-04-02 09:00:00', 4, '2014-04-02 09:00:00'),
(6, 12, '2014-03-19 19:16:00', '2014-04-01 09:00:00', 8, '2014-04-01 07:30:12'),
(7, 11, '2014-03-15 10:11:12', '2014-03-29 09:00:00', 3, '2014-03-29 09:00:00'),
(8, 9, '2014-03-10 09:35:17', '2014-03-24 09:00:00', 7, '2014-03-24 08:59:00'),
(9, 7, '2014-03-09 11:40:18', '2014-03-23 09:00:00', 6, '2014-03-22 21:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `year_level` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `type_id`, `year_level`, `status`, `user_id`, `book_id`) VALUES
(1, 'Mark', 'Sanchez', 'Male', 'Talisay', 984563421, 1, 'Faculty', 'Active', 1, 1),
(2, 'April Joy', 'Aguilar', 'Female', 'E.B Magalona', 147336780, 4, 'Second Year', 'Banned', 2, 14),
(3, 'Alfonso', 'Pancho', 'Male', 'E.B Magalona', 817814514, 4, 'First Year', 'Active', 3, 12),
(4, 'Jonathan', 'Antanilla', 'Male', 'E.B Magalona', 289634560, 4, 'Fourth Year', 'Active', 1, 18),
(5, 'Renzo Bryan', 'Pedroso', 'Male', 'Silay City', 432897523, 4, 'Third Year', 'Active', 3, 16),
(6, 'Eleazar', 'Duterte', 'Male', 'E.B Magalona', 239985560, 4, 'Second Year', 'Active', 2, 11),
(7, 'Ellen Mae', 'Espino', 'Female', 'E.B Magalona', 224876591, 4, 'First Year', 'Active', 3, 6),
(8, 'Ruth', 'Magbanua', 'Female', 'E.B Magalona', 433677432, 4, 'Second Year', 'Active', 2, 4),
(9, 'Shaina Marie', 'Gabino', 'Female', 'Silay City', 765446784, 4, 'Second Year', 'Active', 2, 7),
(10, 'Charity Joy', 'Punzalan', 'Female', 'E.B Magalona', 157564035, 1, 'Faculty', 'Active', 1, 9),
(11, 'Kristine May', 'Dela Rose', 'Female', 'Silay City', 394857398, 4, 'Second Year', 'Active', 1, 3),
(12, 'Chinie Marie', 'Laborosa', 'Female', 'E.B Magalona', 344766821, 4, 'Second Year', 'Active', 1, 2),
(13, 'Ruby', 'Morante', 'Female', 'E.B Magalona', 769784322, 1, 'Faculty', 'Active', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `borrower_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `borrower_type`) VALUES
(1, 'Teacher'),
(2, 'Employee'),
(3, 'Non-Teaching'),
(4, 'Student'),
(5, 'Construction');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'Ella', 'Lucy420', 'Ella', 'Marcus'),
(2, 'admin', 'admin', 'John', 'Smith'),
(3, 'Jeff2', 'Poker909', 'Jeff', 'Gordan'),
(4, 'Josh', 'Lower23', 'Josh', 'Geen'),
(5, 'Lyn', 'Steph30', 'Lyn', 'Kold'),
(6, 'Kay', 'Pole1', 'Kay', 'Hue'),
(7, 'Heller', 'Gel54', 'Heller', 'Green'),
(8, 'William', 'Yay5', 'William', 'Forest'),
(9, 'Mary', 'Food6', 'Mary', 'Lowe'),
(10, 'Gary', 'Work12', 'Gary', 'Hill');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `borrow_id` (`borrow_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`borrow_id`) REFERENCES `borrow` (`borrow_id`) ON DELETE CASCADE;

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE SET NULL;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `member_ibfk_3` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
