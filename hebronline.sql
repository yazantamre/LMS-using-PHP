-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 11:44 AM
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
-- Database: `hebronline`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisementscomments`
--

CREATE TABLE `advertisementscomments` (
  `id` int(11) NOT NULL,
  `advertisementsId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `Comment` text NOT NULL,
  `DateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `advertisementscomments`
--

INSERT INTO `advertisementscomments` (`id`, `advertisementsId`, `userId`, `Comment`, `DateAdded`) VALUES
(9, 9, 40, 'Awesome!', '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `assigment`
--

CREATE TABLE `assigment` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `mark` int(5) NOT NULL,
  `DateAdded` date NOT NULL,
  `DataSubmit` date NOT NULL,
  `File` varchar(200) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `assigment`
--

INSERT INTO `assigment` (`id`, `name`, `description`, `mark`, `DateAdded`, `DataSubmit`, `File`, `courseId`) VALUES
(7, 'HW 1', 'This is an example homework', 15, '2023-12-12', '2023-12-29', 'http://localhost/Online Lms/assets/files/Assignment/HW 1 2023-12-12.jpg', 33),
(8, 'Late HW', 'this is a late HW', 15, '2023-12-12', '2023-12-04', 'http://localhost/Online Lms/assets/files/Assignment/Late HW 2023-12-12.jpg', 33);

-- --------------------------------------------------------

--
-- Table structure for table `assigmentcomment`
--

CREATE TABLE `assigmentcomment` (
  `id` int(10) NOT NULL,
  `assigmentId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `comment` text NOT NULL,
  `DateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Dumping data for table `assigmentcomment`
--

INSERT INTO `assigmentcomment` (`id`, `assigmentId`, `userId`, `comment`, `DateAdded`) VALUES
(18, 7, 34, 'do your best!', '2023-12-12'),
(19, 7, 40, 'Will do!', '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `assignmentssolutions`
--

CREATE TABLE `assignmentssolutions` (
  `id` int(11) NOT NULL,
  `assigmentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `DateAdded` date DEFAULT NULL,
  `timeAdded` time DEFAULT NULL,
  `type` int(2) NOT NULL,
  `solutionFile` varchar(200) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL,
  `markDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `assignmentssolutions`
--

INSERT INTO `assignmentssolutions` (`id`, `assigmentId`, `userId`, `DateAdded`, `timeAdded`, `type`, `solutionFile`, `mark`, `markDate`) VALUES
(7, 7, 40, '2023-12-12', '11:41:54', 1, 'http://localhost/Online Lms/assets/files/AssignmentsSolutionss/14434f1fa697a80ec697 2023-12-12.docx', NULL, NULL),
(8, 8, 40, '2023-12-12', '11:43:46', 2, 'http://localhost/Online Lms/assets/files/AssignmentsSolutionss/2f092959c046637cfbfb 2023-12-12.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classroomadvertisements`
--

CREATE TABLE `classroomadvertisements` (
  `id` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `content` text NOT NULL,
  `DateAdded` date NOT NULL,
  `file` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `classroomadvertisements`
--

INSERT INTO `classroomadvertisements` (`id`, `courseId`, `content`, `DateAdded`, `file`) VALUES
(9, 33, 'Hello everyone. hope you enjoy this course with me!', '2023-12-12', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `outline` text NOT NULL,
  `requirements` text NOT NULL,
  `outcome` text NOT NULL,
  `imagePath` varchar(150) NOT NULL,
  `teachersId` int(10) NOT NULL,
  `price` int(11) NOT NULL,
  `RegistrationExpirationDate` date NOT NULL,
  `startDate` date DEFAULT NULL,
  `DateAdded` date NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `enrolledNumber` int(11) NOT NULL DEFAULT 0,
  `classroom` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `outline`, `requirements`, `outcome`, `imagePath`, `teachersId`, `price`, `RegistrationExpirationDate`, `startDate`, `DateAdded`, `status`, `enrolledNumber`, `classroom`) VALUES
(32, 'Java (2)', 'Master core concepts Rapidly advance skills Engaging hands on projects Real world applications Boost your career Hebronlines dynamic Java course awaits.', '<ol><li><b>Master core concepts</b></li><li><b>Rapidly advance skills</b></li><li><b>Engaging hands-on projects</b></li><li><b>Real-world applications</b></li></ol>', '<ol><li><b>Basic understanding of programming concepts</b></li><li><b>Familiarity with fundamental data types</b></li><li><b>Knowledge of control flow structures (if, else, loops)</b></li><li><b>Previous experience with any programming language is beneficial but not mandatory</b></li></ol>', '<ol><li><b>Proficient understanding of Java fundamentals</b></li><li><b>Ability to write and debug Java code</b></li><li><b>Skill in developing real-world applications</b></li><li><b>Mastery of object-oriented programming principles</b></li></ol>', 'http://localhost/Online Lms/assets/images/course/Java (2) 2023-12-12.jpg', 36, 600, '2023-12-24', '2024-01-05', '2023-12-12', 2, 0, 1),
(33, 'Java (1)', ' Java basics, including syntax and data types. Learn control flow structures, Object-Oriented Programming (OOP) fundamentals, and exception handling. Explore file handling, Java libraries, and engage in hands-on projects. Culminate with a final project for Hebronline Certification.', '<ol><li><b>Practical exercises</b></li><li><b>Building simple Java applications</b></li></ol>', '<ol><li><b>Basic understanding of computer operations</b></li><li><b>Familiarity with fundamental programming concepts</b></li><li><b>Eagerness to learn Java programming</b></li><li><b>No prior Java experience required</b></li></ol>', '<ol><li><b>Proficient understanding of Java syntax and fundamentals</b></li><li><b>Competence in implementing control flow structures</b></li><li><b>Application of Object-Oriented Programming (OOP) principles</b></li><li><b>Skill in handling exceptions and errors effectively</b></li></ol>', 'http://localhost/Online Lms/assets/images/course/Java (1) 2023-12-12.jpg', 34, 500, '2023-12-15', '2024-01-04', '2023-12-12', 1, 1, 1),
(34, 'Calculus (1)', 'Discover calculus essentials, including limits, derivatives, and integrals. Explore applications in rate of change, optimization, and area under curves. Learn elementary differential equations and basics of multivariable calculus. Engage in hands-on problem-solving with real-world applications. Culminate with a final project for Hebronline Certification.', '<ol><li><b>Introduction to Limits</b></li><li><b>Understanding Derivatives</b></li><li><b>Basics of Integrals</b></li></ol>', '<ul><li><b>A. Practical Applications</b></li><li><b>B. Real-world Problem Solving</b></li></ul>', '<ul><li><b>A. Rate of Change and Tangent Lines</b></li><li><b>B. Optimization Problems</b></li><li><b>C. Area under Curves</b></li></ul>', 'http://localhost/Online Lms/assets/images/course/Calculus (1) 2023-12-12.jpg', 35, 400, '2023-12-20', '2024-01-26', '2023-12-12', 1, 3, 1),
(35, 'Science', 'Discover calculus essentials, including limits, derivatives, and integrals. Explore applications in rate of change, optimization, and area under curves. Learn elementary differential equations and basics of multivariable calculus. Engage in hands-on problem-solving with real-world applications. Culminate with a final project for Hebronline Certification.<br>', '<ul><li>A. Rate of Change and Tangent Lines</li><li>B. Optimization Problems</li><li>C. Area under Curves</li></ul>', '<ul><li>A. Practical Applications</li><li>B. Real-world Problem Solving</li></ul>', '<ol><li>Introduction to Limits</li><li>Understanding Derivatives</li><li>Basics of Integrals</li></ol>', 'http://localhost/Online Lms/assets/images/course/Science 2023-12-12.jpg', 36, 500, '2023-12-10', '2023-12-20', '2023-12-12', 3, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `coursesapp`
--

CREATE TABLE `coursesapp` (
  `id` int(10) NOT NULL,
  `courseId` int(10) NOT NULL,
  `StudentId` int(10) NOT NULL,
  `DateAdded` date NOT NULL,
  `status` int(2) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `coursesapp`
--

INSERT INTO `coursesapp` (`id`, `courseId`, `StudentId`, `DateAdded`, `status`) VALUES
(11, 34, 44, '2023-12-12', 1),
(12, 33, 45, '2023-12-12', 3),
(13, 33, 48, '2023-12-12', 3),
(14, 33, 40, '2023-12-12', 1),
(15, 34, 40, '2023-12-12', 3),
(16, 34, 45, '2023-12-12', 1),
(17, 33, 39, '2023-12-12', 3),
(18, 34, 39, '2023-12-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coursesevaluation`
--

CREATE TABLE `coursesevaluation` (
  `id` int(10) NOT NULL,
  `courseId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `rate` int(2) NOT NULL,
  `Comment` text NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `dateAdded` date NOT NULL,
  `timeAdded` time NOT NULL,
  `imagePath` varchar(400) NOT NULL,
  `addedBy` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `dateAdded`, `timeAdded`, `imagePath`, `addedBy`) VALUES
(11, 'Welcome to HebrOnline', 'Welcome to Hebronline where learning meets innovation Our learning management system is not just a platform its your personalized gateway to a world of educational possibilities Whether youre an educator looking to inspire and engage your students or a learner eager to embark on a journey of knowledge Hebronline is here to make your experience seamless and enjoyable Our user friendly interface invites you to explore a wealth of interactive features collaborate with peers and access resources effortlessly Embrace a new era of education with Hebronline where we believe that learning should be as inspiring and dynamic as the minds it shapes Join us and lets make the pursuit of knowledge an exciting and rewarding adventure together', '2023-12-12', '10:59:41', 'http://localhost/Online Lms/assets/images/post/Welcome to HebrOnlin 2023-12-12.jpg', 1),
(12, 'with HebrOnline you are the leader', 'Hebronline the ultimate learning hub Explore endless educational horizons Seamless intuitive interface Collaborate engage with peers Access resources effortlessly Join us for an exciting knowledge journey Embrace dynamic inspiring education with Hebronline', '2023-12-12', '11:01:43', 'http://localhost/Online Lms/assets/images/post/with HebrOnline you  2023-12-12.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `imagePath` varchar(159) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `type` int(4) NOT NULL,
  `status` int(4) NOT NULL,
  `registrationDate` date NOT NULL,
  `approvalDate` date DEFAULT NULL,
  `passwordReset` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='users';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `address`, `imagePath`, `phone`, `type`, `status`, `registrationDate`, `approvalDate`, `passwordReset`) VALUES
(1, 'Ali', 'Admin', 'pallmsacademy@gmail.com', 'EdVYcHpe4bw=', 'hebron university', 'http://localhost/Online Lms/assets/images/users/admin.png', '0599123123', 1, 1, '2023-10-02', '2023-10-03', NULL),
(34, 'Areen', 'Shalaldeh', 'areenstd@gmail.com', 'EdVYcHpe4bw=', 'hebron - sair', 'http://localhost/Online Lms/assets/images/users/teacher.png', '972599123421', 2, 1, '2023-12-12', NULL, NULL),
(35, 'Ahmad', 'Ali', 'yazanatamrea@gmail.com', 'EdVYcHpe4bw=', 'Hebron', 'http://localhost/Online Lms/assets/images/users/teacher.png', 'areenteacher3@gmail.com', 2, 1, '2023-12-12', NULL, NULL),
(36, 'Yazan', 'Mohammad', 'yazantamreuk@gmail.com', 'EdVYcHpe4bw=', 'Dura', 'http://localhost/Online Lms/assets/images/users/teacher.png', '972598830894', 2, 1, '2023-12-12', NULL, NULL),
(37, 'Abbas', 'Samir', 'yazanta2001@gmail.com', 'EdVYcHpe4bw=', 'Hebron', 'http://localhost/Online Lms/assets/images/users/teacher.png', '972598830894', 2, 2, '2023-12-12', NULL, NULL),
(38, 'Osama', 'Amro', 'Osama@gmail.com', 'EdVYcHpe4bw=', 'Hebron', 'http://localhost/Online Lms/assets/images/users/student.png', '972598830894', 3, 2, '2023-12-12', NULL, NULL),
(39, 'Amro', 'Salah', 'salah@gmail.com', 'EdVYcHpe4bw=', 'Hebron', 'http://localhost/Online Lms/assets/images/users/student.png', '972598830894', 3, 1, '2023-12-12', NULL, NULL),
(40, 'Amer', 'Mahmod', 'yazan2000a@hotmail.com', 'EdVYcHpe4bw=', 'Hebron', 'http://localhost/Online Lms/assets/images/users/student.png', '972598830894', 3, 1, '2023-12-12', NULL, NULL),
(44, 'Motasem', 'Dayah', 'motasem@gmail.com', 'EdVYcHpe4bw=', 'Hebron', 'http://localhost/Online Lms/assets/images/users/student.png', '972598830894', 3, 1, '2023-12-12', NULL, NULL),
(45, 'Ansam', 'darwish', 'ansam@gmail.com', 'EdVYcHpe4bw=', 'Hebron', 'http://localhost/Online Lms/assets/images/users/student.png', '972598830894', 3, 1, '2023-12-12', NULL, NULL),
(46, 'Walaa', 'sharawi', 'walaa@gmail.com', 'EdVYcHpe4bw=', 'hebron - sair', 'http://localhost/Online Lms/assets/images/users/teacher.png', '972599123421', 2, 1, '2023-12-12', NULL, NULL),
(47, 'Samah', 'Badawi', 'samahb@hebron.edu', 'EdVYcHpe4bw=', 'hebron', 'http://localhost/Online Lms/assets/images/users/teacher.png', '972599123421', 2, 1, '2023-12-12', NULL, NULL),
(48, 'Khalil', 'Almasri', 'al_masri@hebron.edu', 'EdVYcHpe4bw=', 'Hebron', 'http://localhost/Online Lms/assets/images/users/student.png', '972598830894', 3, 1, '2023-12-12', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisementscomments`
--
ALTER TABLE `advertisementscomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertisementsId` (`advertisementsId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `assigment`
--
ALTER TABLE `assigment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `assigmentcomment`
--
ALTER TABLE `assigmentcomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigmentId` (`assigmentId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `assignmentssolutions`
--
ALTER TABLE `assignmentssolutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigmentId` (`assigmentId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `classroomadvertisements`
--
ALTER TABLE `classroomadvertisements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_thacherId` (`teachersId`);

--
-- Indexes for table `coursesapp`
--
ALTER TABLE `coursesapp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courseId` (`courseId`),
  ADD KEY `StudentId` (`StudentId`);

--
-- Indexes for table `coursesevaluation`
--
ALTER TABLE `coursesevaluation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_addedBy` (`addedBy`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisementscomments`
--
ALTER TABLE `advertisementscomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `assigment`
--
ALTER TABLE `assigment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `assigmentcomment`
--
ALTER TABLE `assigmentcomment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `assignmentssolutions`
--
ALTER TABLE `assignmentssolutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `classroomadvertisements`
--
ALTER TABLE `classroomadvertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `coursesapp`
--
ALTER TABLE `coursesapp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `coursesevaluation`
--
ALTER TABLE `coursesevaluation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisementscomments`
--
ALTER TABLE `advertisementscomments`
  ADD CONSTRAINT `advertisementscomments_ibfk_1` FOREIGN KEY (`advertisementsId`) REFERENCES `classroomadvertisements` (`id`),
  ADD CONSTRAINT `advertisementscomments_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `assigment`
--
ALTER TABLE `assigment`
  ADD CONSTRAINT `assigment_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`);

--
-- Constraints for table `assigmentcomment`
--
ALTER TABLE `assigmentcomment`
  ADD CONSTRAINT `assigmentcomment_ibfk_1` FOREIGN KEY (`assigmentId`) REFERENCES `assigment` (`id`),
  ADD CONSTRAINT `assigmentcomment_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `assignmentssolutions`
--
ALTER TABLE `assignmentssolutions`
  ADD CONSTRAINT `assignmentssolutions_ibfk_1` FOREIGN KEY (`assigmentId`) REFERENCES `assigment` (`id`),
  ADD CONSTRAINT `assignmentssolutions_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `classroomadvertisements`
--
ALTER TABLE `classroomadvertisements`
  ADD CONSTRAINT `classroomadvertisements_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `classroomadvertisements_ibfk_2` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `FK_thacherId` FOREIGN KEY (`teachersId`) REFERENCES `users` (`id`);

--
-- Constraints for table `coursesapp`
--
ALTER TABLE `coursesapp`
  ADD CONSTRAINT `coursesapp_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `coursesapp_ibfk_2` FOREIGN KEY (`StudentId`) REFERENCES `users` (`id`);

--
-- Constraints for table `coursesevaluation`
--
ALTER TABLE `coursesevaluation`
  ADD CONSTRAINT `coursesevaluation_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `coursesevaluation_ibfk_2` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_addedBy` FOREIGN KEY (`addedBy`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
