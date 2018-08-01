-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 04:57 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ap`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE `bulletin` (
  `bullId` int(11) NOT NULL,
  `bullTopic` varchar(500) NOT NULL,
  `bullDate` date NOT NULL,
  `bullLocation` varchar(1000) DEFAULT NULL,
  `bullTime` varchar(50) DEFAULT NULL,
  `bullOther` varchar(1000) DEFAULT NULL,
  `bullContent` varchar(1000) NOT NULL,
  `bullReadMore` varchar(1000) DEFAULT NULL,
  `bullImage` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulletin`
--

INSERT INTO `bulletin` (`bullId`, `bullTopic`, `bullDate`, `bullLocation`, `bullTime`, `bullOther`, `bullContent`, `bullReadMore`, `bullImage`) VALUES
(1, 'Multicultural Arts Victoria AGM', '2018-06-01', '', '', '', 'Our Annual General Meeting was held on Monday 22nd May. We thank the Minister for Creative Industries Mr Martin Foley and Patron Hon John Cain and wife Nancye for attending along with over 80 of our members and supporters. MAV achievements are outlined in our Annual Report', 'https://www.google.com/url?q=http://app.streamsend.com/c/29002395/34833/EqbCxRF/kws9ugutlh?redirect_to%3Dhttps%253A%252F%252Fissuu.com%252Fmulticulturalarts%252Fdocs%252F2017_annual_report&source=gmail&ust=1527727970901000&usg=AFQjCNG25w7pdPVVBJ3Ltai1KZc6jHp3eQ', 'images/bulletin/1.jpg'),
(14, 'Emerald Hill Cultural Precinct Sound & Colour Series', '2018-05-26', 'Australian Tapestry Workshop  262-266 Park St, South Melbourne ', '7pm', 'Free Entry', 'Multicultural Arts Victoria invites you to join us at the Australian Tapestry Workshop for the Sound & Colour Series #4. Listen to music by artists from Multicultural Art Victoria & students from Australian National Academy of Music amongst the colourful ATW tapestries. A collaborative piece curated by Peter Knight performed by:      Laura Barton, Violin, ANAM   Alexander MacDonald, Viola, ANAM   Eliza Shephard, Flute, ANAM   Peter Knight, Trumpet, MAV   Brandon Lee, KOTO MAV.', 'https://www.austapestry.com.au/whats-on/whats-on', 'images/bulletin/2.jpg'),
(15, 'We are Pasefika!', '2018-06-02', 'South Melbourne Town Hall', '7.30pm', 'Director: Asalemo Tofete   Producer: Pacific Island Creative Arts Australia Inc. & Multicultural Arts Victoria  Composer: Rita Seumanutafa ', 'A musical that highlights the search for \'belonging\' within the Pacific Island community of Australia, giving hope and encouragement to those who are navigating their own cultural identities within their families, churches and community groups. The musical will showcase actors, musicians and dancers from the Melbourne Pacific Island community, including craftsmen and costume designers. Performers include: Pasefika Vitoria Choir and PICAA SKOOL Performing Arts students. ', '', 'images/bulletin/3.jpg'),
(16, 'Emerge in Yarra', '2018-06-29', '', '', 'June 29 â€“ July 8', 'Emerge in Yarra 2017 presents a week long festival from June 29 - July 8, presenting a range of exhibitions, art installations, cooking demonstrations, live music, storytelling, spoken word, dance and conversations. The full program and ticket information will be available via the MAV website over the next week.  Founded in 2004 as a platform for artists in MAVâ€™s Visible Music Mentoring Program, the festival has since grown to encompass talented artists from refugee and emerging communities across the city, diverse art forms, new collaborations and commissioned works. ', '', 'images/bulletin/4.jpg'),
(17, 'Emerge in the North', '2018-07-01', '', '', ' Emerge in the North - Volunteers call-out!', 'Emerge in the North Festival Concert Saturday 1 July 12noon â€“ 4pm. Come and celebrate the emerging refugee and Indigenous communities of Melbourneâ€™s outer north at our first Emerge in the North Festival. Featuring artists from diverse backgrounds including local Indigenous, Iranian, Syrian, Sudanese, Indian, Kurdish, Cook Islands and more. Cultural stalls, dance & music, with MC Sami Shah and headlined by Lamine Sonko and the African Intelligence. At Plenty Ranges Arts & Convention Centre, Ferres Boulevard South Morang. ', 'http://multiculturalarts.com.au/event/einn/', 'images/bulletin/5.jpg'),
(19, 'Project 2 Demo', '2018-06-08', '399 lonsdale st', '10am', '', 'The presentation for the project 2 will be done in provided location', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `busId` int(11) NOT NULL,
  `busName` varchar(60) NOT NULL,
  `busAddress` varchar(120) NOT NULL,
  `busType` varchar(80) NOT NULL,
  `busABN` varchar(60) DEFAULT NULL,
  `busEmail` varchar(80) DEFAULT NULL,
  `busContact` int(11) DEFAULT NULL,
  `busContactPerson` varchar(90) DEFAULT NULL,
  `busContactPersonRole` varchar(30) DEFAULT NULL,
  `busWebsite` varchar(90) DEFAULT NULL,
  `busSize` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`busId`, `busName`, `busAddress`, `busType`, `busABN`, `busEmail`, `busContact`, `busContactPerson`, `busContactPersonRole`, `busWebsite`, `busSize`) VALUES
(14, 'Jasmel Bakery Shop', '7 WASLEY', 'Baker', '3456777544', 'jass@gmail.com', 12457678, 'Jasmel ', 'Customer Relationship', '', 'Small'),
(19, 'Rajesh IT Solutions', 'D/48 pooja park society NEW VIP road near Snehal press Vadodara', 'Bakery', '1475858', 'rgrgadhvi6@gmail.com', 1457894, 'Navdeep', 'Customer Relationship Officer', 'http://khush.com', 'Small'),
(22, 'Anand Poster Design', '7 WASLEY ST', 'Hair Care Products', '752242452452', 'rgrgadhvi6@gmail.com', 4045252, 'Rajesh Gadhvi', 'Sales Person', 'http://rajitservices.com', ''),
(23, 'Gurpreet', 'D/48 pooja park society NEW VIP road near Snehal press Vadodara', 'Bakery', '', 'rgrgadhvi6@gmail.com', 1457894, '', '', '', 'Small'),
(24, 'rajesh IT', '7 WASLEY ST', 'IT service', '1475858', 'RGRGADHVI6@GMAIL.COM', 12457678, 'Jasmel ', 'admin', 'http://rajitservices.com', 'Big');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `conId` int(11) NOT NULL,
  `conTypeA` text,
  `conTypeB` text,
  `conTypeC` text,
  `conLinkA` varchar(1000) DEFAULT NULL,
  `conLinkB` varchar(1000) DEFAULT NULL,
  `conDes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`conId`, `conTypeA`, `conTypeB`, `conTypeC`, `conLinkA`, `conLinkB`, `conDes`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'A tax file number (TFN) is a unique identifier issued by the Australian Taxation Office (ATO) to each taxpaying entity — an individual, company, superannuation fund, partnership, or trust.[1] Not all individuals have a TFN, and a business has both a TFN and an Australian Business Number (ABN).[1] If a business earns income as part of carrying on its business, it may quote its ABN instead of its TFN.\r\n\r\nThe TFN was introduced initially to facilitate file tracking at the ATO, but has since been expanded to encompass income and other data matching. The TFN consists of a nine digit number, usually presented in the format nnn nnn nnn. Strict laws require that TFNs may be recorded or used only for specifically authorised tax-related purposes.[2][3]\r\n\r\nThe TFN serves a purpose similar to the American Social Security number, but its use is strictly limited by law to avoid the functionality creep which has affected the US counterpart. It also serves a similar function as national insurance in the UK.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courId` int(11) NOT NULL,
  `courName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courId`, `courName`) VALUES
(1, 'Australian Business Taxation');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuId` int(200) NOT NULL,
  `stuFirstName` varchar(100) NOT NULL,
  `stuLastName` varchar(100) NOT NULL,
  `parentName` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) NOT NULL,
  `stuContact` varchar(100) DEFAULT NULL,
  `age` varchar(100) NOT NULL,
  `schoolName` varchar(100) NOT NULL,
  `courseLevel` varchar(100) NOT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  `schoolContact` varchar(100) DEFAULT NULL,
  `schoolLocation` varchar(400) DEFAULT NULL,
  `reasonOfDropout` varchar(500) DEFAULT NULL,
  `flagged` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuId`, `stuFirstName`, `stuLastName`, `parentName`, `email`, `contact`, `stuContact`, `age`, `schoolName`, `courseLevel`, `courseName`, `schoolContact`, `schoolLocation`, `reasonOfDropout`, `flagged`) VALUES
(5, 'Jasme', 'Dhir', 'Jass', 'jass@jass.com', '888757858', '7857878', '18', 'Gurukul Vidhyalaya', 'Bachelors Degree', 'IT', '5434524', 'ALBION', 'He was doing good in studies but eventually got busy in jobs', 'No'),
(7, 'Khushdeep', 'Kaur', 'Khush', 'khus@khush.com', '178658757', '45453454', '12', 'Kendriya Vidhyalaya', 'Bachelors Degree', 'IT', '45454545', 'Maribyrnong', '', 'No'),
(9, 'Rajesh', 'Gadhv', 'Rajesh Gadhvi', 'rgrgadhvi6@gmail.com', '12345678', '45453454', '21', 'RAJESH', 'Bachelors Degree', 'IT', '5434524', 'Maribyrnong', 'He was doing good in studies but eventually got busy in jobs', 'Yes'),
(10, 'Jugal', 'Singh', 'Manjeet', 'jugalsingh867@yahoo.com', '0404526396', '5252525252', '22', 'Australian College of Trade', 'Certificate 3', 'Hospitality', '5252525255', 'Thornbury', 'Was working hard in job rather than in the school.', 'No'),
(12, 'Kaustubh', 'Wade', 'Sachin', 'RGRGADHVI6@GMAIL.COM', '12345678', '45453454', '22', 'RAJESH GADHVI', 'Bachelors Degree', 'IT', '5434524', 'ALBION', 'could not able to cop-up ', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topId` int(11) NOT NULL,
  `topName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topId`, `topName`) VALUES
(1, 'Tax File Number');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'rajesh', 'rgrgadhvi6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'jasmel', 'jass123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'anand', 'anand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'rajesh123', 'gadhvir1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`bullId`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`busId`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`conId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuId`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `bullId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `busId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `conId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
