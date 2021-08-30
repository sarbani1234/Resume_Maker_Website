-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 04:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `AdminLoginDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `UserName`, `Email`, `MobileNumber`, `Password`, `AdminLoginDate`) VALUES
(1, 'Sarbani', 'sarbanichatterjee1234@gmail.com', 9988774455, '123456', '2021-08-30 01:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblawards`
--

CREATE TABLE `tblawards` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `AwardName` varchar(120) NOT NULL,
  `Position` varchar(120) NOT NULL,
  `Date` date NOT NULL,
  `Associated_with` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `AwardsUploadDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblawards`
--

INSERT INTO `tblawards` (`ID`, `FullName`, `AwardName`, `Position`, `Date`, `Associated_with`, `Description`, `AwardsUploadDate`) VALUES
(1, 'Rahul', 'coding', '1st position', '2020-06-11', 'BCI', 'I stood first.', '2021-08-29 15:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Course` varchar(120) NOT NULL,
  `Institution` varchar(120) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Description` mediumtext NOT NULL,
  `CourseUpdationDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`ID`, `FullName`, `Course`, `Institution`, `StartDate`, `EndDate`, `Description`, `CourseUpdationDate`) VALUES
(1, 'Rahul', 'php', 'ipeg', '2018-06-06', '2019-06-15', 'phpjigbtuututuuuuuuuuuuuutytttt', '2021-08-29 02:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblfamily`
--

CREATE TABLE `tblfamily` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `FatherName` varchar(120) NOT NULL,
  `FatherProfession` varchar(120) NOT NULL,
  `FatherPhone` bigint(10) NOT NULL,
  `FatherEmail` varchar(120) NOT NULL,
  `MotherName` varchar(120) NOT NULL,
  `MotherProfession` varchar(120) NOT NULL,
  `MotherPhone` bigint(10) NOT NULL,
  `MotherEmail` varchar(120) NOT NULL,
  `SiblingName` varchar(120) NOT NULL,
  `SiblingProfession` varchar(120) NOT NULL,
  `SiblingPhone` bigint(10) NOT NULL,
  `SiblingEmail` varchar(120) NOT NULL,
  `FamilyDetailsUpdateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfamily`
--

INSERT INTO `tblfamily` (`ID`, `FullName`, `FatherName`, `FatherProfession`, `FatherPhone`, `FatherEmail`, `MotherName`, `MotherProfession`, `MotherPhone`, `MotherEmail`, `SiblingName`, `SiblingProfession`, `SiblingPhone`, `SiblingEmail`, `FamilyDetailsUpdateDate`) VALUES
(1, 'Rahul', 'Pintu', 'Service man', 8855471028, 'pintu@gmail.com', 'Kaberi', 'Housewife', 7789025870, 'kaberi@gmail.com', 'Sayoni', 'Student', 9874102587, 'sayoni@gmail.com', '2021-08-30 00:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblinternship`
--

CREATE TABLE `tblinternship` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `JobTitle` varchar(120) NOT NULL,
  `JobLocation` varchar(120) NOT NULL,
  `CompanyName` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `InternshipUpdationDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinternship`
--

INSERT INTO `tblinternship` (`ID`, `FullName`, `JobTitle`, `JobLocation`, `CompanyName`, `Description`, `StartDate`, `EndDate`, `InternshipUpdationDate`) VALUES
(1, 'Rahul', 'Sales', 'Kolkata', 'IPEG Solution', '<b><font size=\"5\">I have done a full-fledged web development project.</font></b>', '0000-00-00', '0000-00-00', '2021-08-28 23:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(120) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<div><span style=\"color: rgb(117, 117, 117); font-family: &quot;Euclid Circular B&quot;, sans-serif; font-size: 16px; letter-spacing: normal;\">We offer free resume templates, so whatever your budget might be, you can still take advantage of our resume builder.</span><br></div>', 'SZSinfo@gmail.com', 9382226949, '2021-08-29 20:49:58'),
(2, 'contactus', 'Contact Us', '20/21 Newton Avenue<div>B Zone</div>', 'sarbanichatterjee@gmail.com', 9382226949, '2021-08-29 20:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `tblprojects`
--

CREATE TABLE `tblprojects` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `ProjectName` varchar(200) NOT NULL,
  `Description` mediumtext NOT NULL,
  `ProjectUploadDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprojects`
--

INSERT INTO `tblprojects` (`ID`, `FullName`, `ProjectName`, `Description`, `ProjectUploadDate`) VALUES
(1, 'Rahul', 'Sarbani_Project', 'php projects', '2021-08-29 16:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblresume`
--

CREATE TABLE `tblresume` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Gender` varchar(120) NOT NULL,
  `Nationality` varchar(120) NOT NULL,
  `Religion` varchar(120) NOT NULL,
  `MStatus` varchar(120) NOT NULL,
  `PlaceOfBirth` varchar(120) NOT NULL,
  `PhoneNumber` bigint(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ZipCode` varchar(100) NOT NULL,
  `City` varchar(120) NOT NULL,
  `State` varchar(120) NOT NULL,
  `Country` varchar(120) NOT NULL,
  `DrivingLicense` varchar(120) NOT NULL,
  `Linkedln` varchar(200) NOT NULL,
  `GitHub` varchar(120) NOT NULL,
  `Website` varchar(200) NOT NULL,
  `SecondaryBoard` varchar(120) NOT NULL,
  `SecondaryBoardName` varchar(255) NOT NULL,
  `SecondaryBoardyop` varchar(120) NOT NULL,
  `SecondaryBoardper` int(200) NOT NULL,
  `SecondaryBoardcgpa` varchar(120) NOT NULL,
  `SSecondaryBoard` varchar(120) NOT NULL,
  `SSecondaryBoardName` varchar(255) NOT NULL,
  `SSecondaryBoardyop` varchar(200) NOT NULL,
  `SSecondaryBoardper` int(200) NOT NULL,
  `SSecondaryBoardcgpa` varchar(120) NOT NULL,
  `GraUni` varchar(120) NOT NULL,
  `GraUniName` varchar(255) NOT NULL,
  `GraUniyop` varchar(120) NOT NULL,
  `GraUnidper` int(200) NOT NULL,
  `GraUnicgpa` varchar(120) NOT NULL,
  `PGUni` varchar(120) NOT NULL,
  `PGUniName` varchar(255) NOT NULL,
  `PGUniyop` varchar(120) NOT NULL,
  `PGUniper` int(200) NOT NULL,
  `PGUnicgpa` varchar(120) NOT NULL,
  `ExtraCurriculars` varchar(120) NOT NULL,
  `OtherAchivement` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `Resume_Objective` mediumtext DEFAULT NULL,
  `ResumeGenDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresume`
--

INSERT INTO `tblresume` (`ID`, `FullName`, `Email`, `Age`, `Gender`, `Nationality`, `Religion`, `MStatus`, `PlaceOfBirth`, `PhoneNumber`, `Address`, `ZipCode`, `City`, `State`, `Country`, `DrivingLicense`, `Linkedln`, `GitHub`, `Website`, `SecondaryBoard`, `SecondaryBoardName`, `SecondaryBoardyop`, `SecondaryBoardper`, `SecondaryBoardcgpa`, `SSecondaryBoard`, `SSecondaryBoardName`, `SSecondaryBoardyop`, `SSecondaryBoardper`, `SSecondaryBoardcgpa`, `GraUni`, `GraUniName`, `GraUniyop`, `GraUnidper`, `GraUnicgpa`, `PGUni`, `PGUniName`, `PGUniyop`, `PGUniper`, `PGUnicgpa`, `ExtraCurriculars`, `OtherAchivement`, `Images`, `Resume_Objective`, `ResumeGenDate`) VALUES
(1, 'Sarbani Chatterjee', 'sarbanichatterjee1234@gmail.com', '21', '', '', '', '', 'Durgapur', 0, '20th Street Quater no 21', '713205', 'Durgapur', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', 'f3e3e8348ea00ea848b642bbc60aa59d1630124400.jpg', '', '2021-08-28 09:50:00'),
(2, 'Sarbani Chatterjee', 'sarbanichatterjee1234@gmail.com', '21', '', '', '', '', 'Durgapur', 7047719127, '20th Street Quater no 21', '713205', 'Durgapur', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', 'f3e3e8348ea00ea848b642bbc60aa59d1630124576.jpg', '', '2021-08-28 09:52:56'),
(3, 'Sunil', 'sunil@gmail.com', '21', '', '', '', '', 'Durgapur', 9874569685, 'Kalikapur', '70001', 'Kolkata', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', 'f04eca437340f033b08a6620a15a6b051630124624.jpg', '', '2021-08-28 09:53:44'),
(4, 'Rita', 'rita@gmail.com', '21', '', '', '', '', 'Durgapur', 9988774455, 'City centre', '713216', 'Durgapur', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '3d6e4a11f425595c323ad3590a8677181630124816jpeg', '', '2021-08-28 09:56:56'),
(5, 'Sayoni', 'sayoni@gmail.com', '21', '', '', '', '', 'Durgapur', 2584613791, 'Bidhannagar', '713209', 'Durgapur', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '350e2b566e0e3f5d120762c4a2082dcc1630128860.jpg', '', '2021-08-28 11:04:20'),
(6, 'Kaberi Chatterjee', 'kaberi@gmail.com', '34', 'Female', 'Indian', '', 'Married', 'Durgapur', 7047719127, '20/21 Newton Avenue', '713205', 'Durgapur', '', '', 'NA', 'www.linkedln.com', '', 'https://www.kaggle.com/abcd/account', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '9c12fe0da4d75e6a16c888ba317605281630130095.jpg', 'abcdefghijklmnopqrstuvwxyz', '2021-08-28 14:19:27'),
(7, 'Rahul', 'rahul@gmail.com', '27', 'Male', 'Indian', 'Hindu', 'Single', 'Durgapur', 913698521478, 'Newtown', '71320005', 'Kolkata', 'West Bengal', 'India', 'NA', 'www.linkedln.com', 'www.git.com', 'www.website.com', 'ICSE', 'PVM', '2015', 71, '7.06', 'WBCHSE', 'BCI', '2017', 72, '7.16', 'MAKAUT', 'UEM', '2020', 74, '7.37', 'UEM', 'UEM', '2022', 91, '9.055', 'Singing', 'NA', 'b9e5a6aff2904302f2ea40916842e9631630166627.jpg', 'I want to learn and code more.', '2021-08-29 01:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblskills`
--

CREATE TABLE `tblskills` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Skills` varchar(200) NOT NULL,
  `Level` varchar(200) NOT NULL,
  `SkillsUploadDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblskills`
--

INSERT INTO `tblskills` (`ID`, `FullName`, `Skills`, `Level`, `SkillsUploadDate`) VALUES
(1, 'Rahul', 'C/C++', 'Skilfull', '2021-08-29 01:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(120) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `StudentRegDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `FullName`, `MobileNumber`, `Email`, `DOB`, `Gender`, `Password`, `StudentRegDate`) VALUES
(1, 'Sayoni Chatterjee', 9874563214, 'sayoni@gmail.com', '2000-02-16', 'Female', '81dc9bdb52d04dc20036dbd8313ed055', '2021-08-27 22:19:04'),
(2, 'Kaberi Chatterjee', 7014780258, 'kaberi@gmail.com', '1987-06-06', 'Female', '81dc9bdb52d04dc20036dbd8313ed055', '2021-08-28 11:22:57'),
(3, 'Rahul', 3698521478, 'qwer@gmail.com', '1994-05-09', 'Female', '81dc9bdb52d04dc20036dbd8313ed055', '2021-08-28 20:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE `tbl_languages` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Languages` varchar(120) NOT NULL,
  `Level` varchar(120) NOT NULL,
  `LanguagesUploadDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`ID`, `FullName`, `Languages`, `Level`, `LanguagesUploadDate`) VALUES
(1, 'Rahul', 'English', 'Highly proficient in speaking and writing', '2021-08-29 01:57:54'),
(2, 'Rahul', 'Hindi', 'Good working knowledge', '2021-08-29 02:01:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblawards`
--
ALTER TABLE `tblawards`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfamily`
--
ALTER TABLE `tblfamily`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinternship`
--
ALTER TABLE `tblinternship`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblprojects`
--
ALTER TABLE `tblprojects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblresume`
--
ALTER TABLE `tblresume`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblskills`
--
ALTER TABLE `tblskills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_languages`
--
ALTER TABLE `tbl_languages`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblawards`
--
ALTER TABLE `tblawards`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblfamily`
--
ALTER TABLE `tblfamily`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblinternship`
--
ALTER TABLE `tblinternship`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblprojects`
--
ALTER TABLE `tblprojects`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblresume`
--
ALTER TABLE `tblresume`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblskills`
--
ALTER TABLE `tblskills`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_languages`
--
ALTER TABLE `tbl_languages`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
