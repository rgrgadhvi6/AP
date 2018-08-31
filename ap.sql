-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 08:18 PM
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
(1, 'Multicultural Arts Victoria AGM', '2018-06-01', '', '', '', 'Our Annual General Meeting was held on Monday 22nd May. We thank the Minister for Creative Industries Mr Martin Foley and Patron Hon John Cain and wife Nancye for attending along with over 80 of our members and supporters. MAV achievements are outlined in our Annual Report', 'https://www.google.com/url?q=http://app.streamsend.com/c/29002395/34833/EqbCxRF/kws9ugutlh?redirect_to%3Dhttps%253A%252F%252Fissuu.com%252Fmulticulturalarts%252Fdocs%252F2017_annual_report&source=gmail&ust=1527727970901000&usg=AFQjCNG25w7pdPVVBJ3Ltai1KZc6jHp3eQ', 'images/bulletin/booking.png'),
(14, 'Emerald Hill Cultural Precinct Sound & Colour Series', '2018-05-26', 'Australian Tapestry Workshop  262-266 Park St, South Melbourne ', '7pm', 'Free Entry', 'Multicultural Arts Victoria invites you to join us at the Australian Tapestry Workshop for the Sound & Colour Series #4. Listen to music by artists from Multicultural Art Victoria & students from Australian National Academy of Music amongst the colourful ATW tapestries. A collaborative piece curated by Peter Knight performed by:      Laura Barton, Violin, ANAM   Alexander MacDonald, Viola, ANAM   Eliza Shephard, Flute, ANAM   Peter Knight, Trumpet, MAV   Brandon Lee, KOTO MAV.', 'https://www.austapestry.com.au/whats-on/whats-on', 'images/bulletin/2.jpg'),
(15, 'We are Pasefika!', '2018-06-02', 'South Melbourne Town Hall', '7.30pm', 'Director: Asalemo Tofete   Producer: Pacific Island Creative Arts Australia Inc. & Multicultural Arts Victoria  Composer: Rita Seumanutafa ', 'A musical that highlights the search for \'belonging\' within the Pacific Island community of Australia, giving hope and encouragement to those who are navigating their own cultural identities within their families, churches and community groups. The musical will showcase actors, musicians and dancers from the Melbourne Pacific Island community, including craftsmen and costume designers. Performers include: Pasefika Vitoria Choir and PICAA SKOOL Performing Arts students. ', '', 'images/bulletin/3.jpg'),
(16, 'Emerge in Yarra', '2018-06-29', '', '', 'June 29 â€“ July 8', 'Emerge in Yarra 2017 presents a week long festival from June 29 - July 8, presenting a range of exhibitions, art installations, cooking demonstrations, live music, storytelling, spoken word, dance and conversations. The full program and ticket information will be available via the MAV website over the next week.  Founded in 2004 as a platform for artists in MAVâ€™s Visible Music Mentoring Program, the festival has since grown to encompass talented artists from refugee and emerging communities across the city, diverse art forms, new collaborations and commissioned works. ', '', 'images/bulletin/4.jpg'),
(17, 'Emerge in the North', '2018-07-01', '', '', ' Emerge in the North - Volunteers call-out!', 'Emerge in the North Festival Concert Saturday 1 July 12noon â€“ 4pm. Come and celebrate the emerging refugee and Indigenous communities of Melbourneâ€™s outer north at our first Emerge in the North Festival. Featuring artists from diverse backgrounds including local Indigenous, Iranian, Syrian, Sudanese, Indian, Kurdish, Cook Islands and more. Cultural stalls, dance & music, with MC Sami Shah and headlined by Lamine Sonko and the African Intelligence. At Plenty Ranges Arts & Convention Centre, Ferres Boulevard South Morang. ', 'http://multiculturalarts.com.au/event/einn/', 'images/bulletin/5.jpg'),
(19, 'Project 2 Demo', '2018-06-08', '399 lonsdale st', '10am', '', 'The presentation for the project 2 will be done in provided location', '', 'images/bulletin/seat.png');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `busId` int(11) NOT NULL,
  `UId` int(11) NOT NULL,
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

INSERT INTO `business` (`busId`, `UId`, `busName`, `busAddress`, `busType`, `busABN`, `busEmail`, `busContact`, `busContactPerson`, `busContactPersonRole`, `busWebsite`, `busSize`) VALUES
(26, 1, 'Rajesh IT Solutions', '44 wests road', 'Hospitality', '1475858', 'rgrgadhvi6@gmail.com', 1457894, 'rajesh', 'owner', 'www.rajroc.blogspot.com', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `bustype`
--

CREATE TABLE `bustype` (
  `busType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bustype`
--

INSERT INTO `bustype` (`busType`) VALUES
('Hospitality');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comId` int(11) NOT NULL,
  `bullId` int(11) NOT NULL,
  `UId` int(11) NOT NULL,
  `comDescrip` text NOT NULL,
  `ComDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comId`, `bullId`, `UId`, `comDescrip`, `ComDate`) VALUES
(1, 1, 1, '1', '2018-08-24 02:28:42'),
(21, 1, 1, '2', '2018-08-24 02:28:51'),
(38, 1, 3, 'rajesh', '2018-08-24 02:55:03'),
(39, 14, 3, 'hello', '2018-08-24 04:56:17'),
(40, 1, 5, 'Hello, I am happy that you are rajesh', '2018-08-24 05:10:14'),
(41, 17, 3, 'This bulletin seems good for the event.', '2018-08-27 05:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `conId` int(11) NOT NULL,
  `topId` int(11) NOT NULL,
  `conDescrip` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`conId`, `topId`, `conDescrip`) VALUES
(1, 7, 'raj'),
(3, 10, '<img src="https://i.imgur.com/xjoIxE9.jpg" width="600"> '),
(4, 7, '<p class="MsoNormal" align="right" style="margin-top:0cm;margin-right:1.85pt;\r\nmargin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right;\r\ntext-indent:0cm;line-height:107%"><b><span style="font-size:14.0pt;mso-bidi-font-size:11.0pt;line-height:107%">Rajesh G. Gadhvi</span> </b>&nbsp;&nbsp;<o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="right" style="margin-top:0cm;margin-right:-.5pt;\r\nmargin-bottom:0cm;margin-left:.5pt;margin-bottom:.0001pt;text-align:right;\r\nline-height:107%"><b>Email: </b>rgrgadhvi6@gmail.com&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="right" style="margin-top:0cm;margin-right:-.5pt;\r\nmargin-bottom:11.15pt;margin-left:.5pt;text-align:right;line-height:107%"><b>Mobile: </b>0404265363&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm -0.5pt 0.0001pt 0.5pt; line-height: 107%;">18<sup>th</sup> July 2018&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:0cm;margin-left:1.45pt;margin-bottom:.0001pt;text-align:center;\r\ntext-indent:0cm;line-height:107%"><b><u><span style="font-size:14.0pt;mso-bidi-font-size:11.0pt;line-height:107%">Action Plan</span></u></b><u><span style="font-size:14.0pt;mso-bidi-font-size:11.0pt;line-height:107%"><o:p></o:p></span></u></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 1.45pt; text-indent: 0cm; line-height: 107%;">&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">Respected Sir/Mam,&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 1.45pt; text-indent: 0cm; line-height: 107%;">&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">As a highly motivated and dedicated student and employee at HJâ€™s with strong professional ethics and interpersonal skills, I would like to apply for the position of Shift Manager.<o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 1.45pt; text-indent: 0cm; line-height: 107%;">&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">As a student, I have been extensively involved in my school and college community, which has allowed me to develop strong interpersonal skills. My involvement was and is always best up to the mark, including mid-term test, finals and ongoing class activities which lead to become a member of <b>Golden-Key International Society</b>. Nevertheless, achievement of having 2 High Distinctions, 11 Distinctions, shows my managing skills of work-life with the studies. These experiences have allowed me to develop strong time management and organisational skills, which I believe as being very important when seeking to employment while continuing to study.&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">Taking a further step towards bridging the gap between a responsible team leader to becoming a shift manager, following talks about what I know and what I need to know. With the experience of almost 6 months for cleaning broiler machine when the special cleaning hand for our store was on annual leave, I think Iâ€™m the most proficient crew after any manager from my store. On every Wednesday overnight, I was the one who not only stabilize the shift in kitchen but also do job for SKH (special kitchen hand). Having such experience of handling the shift, gives me courage to take a step further towards team leader and today for being a manager. Being kitchen crew for almost 2 years, I am expert with cleaning and maintaining of almost all the equipment within the store. Nevertheless, it also comes with the food quality and quantity, how much for what time, in order to control the waste and quality is what the core responsibility as being a crew member in the kitchen I felt.<o:p></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">In the above para, a clear vision for my persistence for HJâ€™s can be easily guessed. Now, what I am not capable of handling right now and need bit more help with, is the paperwork, computer-based end of day and redbook, speed of service in front counter and finally the cleaning of sundae machine. To bridge the gap between, I have already started learning computer and sundae thrice within last month. Even though I am still not confident enough and look forward to learning it till I expertise. <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">I believe that I have a lot to offer your organisation. I am keen to develop my professional skills and look forward to discussing my application with you. I can be contacted always on the details provided above.&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 0.7pt; text-indent: 0cm; line-height: 107%;">&nbsp;&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 1.45pt; text-indent: 0cm; line-height: 107%;"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">Thanking you for your time,&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt">Rajesh Gadhvi&nbsp; Team Leader- 78431, Hungry Jackâ€™s Flemington.&nbsp;<o:p></o:p></p> '),
(5, 7, '<img src="https://i.imgur.com/pyRXoQV.jpg" width="600"> '),
(6, 11, '<div style="text-align: center;"><b style="font-size: 1rem;"><u>Rajesh</u></b></div><div style="text-align: left;"><p class="MsoNormal" align="right" style="margin-top:0cm;margin-right:1.85pt;\r\nmargin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right;\r\ntext-indent:0cm;line-height:107%"><b><span style="font-size:14.0pt;mso-bidi-font-size:11.0pt;line-height:107%">Rajesh G. Gadhvi</span> </b>&nbsp;&nbsp;<o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="right" style="margin-top:0cm;margin-right:-.5pt;\r\nmargin-bottom:0cm;margin-left:.5pt;margin-bottom:.0001pt;text-align:right;\r\nline-height:107%"><b>Email: </b>rgrgadhvi6@gmail.com&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="right" style="margin-top:0cm;margin-right:-.5pt;\r\nmargin-bottom:11.15pt;margin-left:.5pt;text-align:right;line-height:107%"><b>Mobile: </b>0404265363&nbsp;&nbsp; <o:p></o:p></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm -0.5pt 0.0001pt 0.5pt; line-height: 107%;"><font face="impact">18<sup>th</sup> July 2018&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:0cm;margin-left:1.45pt;margin-bottom:.0001pt;text-align:center;\r\ntext-indent:0cm;line-height:107%"><font face="impact"><b><u><span style="font-size:14.0pt;mso-bidi-font-size:11.0pt;line-height:107%">Action Plan</span></u></b><u><span style="font-size:14.0pt;mso-bidi-font-size:11.0pt;line-height:107%"><o:p></o:p></span></u></font></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 1.45pt; text-indent: 0cm; line-height: 107%;"><font face="impact">&nbsp;&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">Respected Sir/Mam,&nbsp;&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 1.45pt; text-indent: 0cm; line-height: 107%;"><font face="impact">&nbsp;&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">As a highly motivated and dedicated student and employee at HJâ€™s with strong professional ethics and interpersonal skills, I would like to apply for the position of Shift Manager.<o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 1.45pt; text-indent: 0cm; line-height: 107%;"><font face="impact">&nbsp;&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">As a student, I have been extensively involved in my school and college community, which has allowed me to develop strong interpersonal skills. My involvement was and is always best up to the mark, including mid-term test, finals and ongoing class activities which lead to become a member of <b>Golden-Key International Society</b>. Nevertheless, achievement of having 2 High Distinctions, 11 Distinctions, shows my managing skills of work-life with the studies. These experiences have allowed me to develop strong time management and organisational skills, which I believe as being very important when seeking to employment while continuing to study.&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><o:p><font face="impact">&nbsp;</font></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">Taking a further step towards bridging the gap between a responsible team leader to becoming a shift manager, following talks about what I know and what I need to know. With the experience of almost 6 months for cleaning broiler machine when the special cleaning hand for our store was on annual leave, I think Iâ€™m the most proficient crew after any manager from my store. On every Wednesday overnight, I was the one who not only stabilize the shift in kitchen but also do job for SKH (special kitchen hand). Having such experience of handling the shift, gives me courage to take a step further towards team leader and today for being a manager. Being kitchen crew for almost 2 years, I am expert with cleaning and maintaining of almost all the equipment within the store. Nevertheless, it also comes with the food quality and quantity, how much for what time, in order to control the waste and quality is what the core responsibility as being a crew member in the kitchen I felt.<o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><o:p><font face="impact">&nbsp;</font></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">In the above para, a clear vision for my persistence for HJâ€™s can be easily guessed. Now, what I am not capable of handling right now and need bit more help with, is the paper work, computer-based end of day and redbook, speed of service in front counter and finally the cleaning of sundae machine. To bridge the gap between, I have already started learning computer and sundae thrice within last month. Even though I am still not confident enough and look forward to learning it till I expertise. <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">I believe that I have a lot to offer your organisation. I am keen to develop my professional skills and look forward to discussing my application with you. I can be contacted always on the details provided above.&nbsp;&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 0.7pt; text-indent: 0cm; line-height: 107%;"><font face="impact">&nbsp;&nbsp;&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" align="left" style="margin: 0cm 0cm 0.0001pt 1.45pt; text-indent: 0cm; line-height: 107%;"><o:p><font face="impact">&nbsp;</font></o:p></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">Thanking you for your time,&nbsp;&nbsp; <o:p></o:p></font></p>\r\n\r\n<p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact">Rajesh Gadhvi&nbsp; Team Leader- 78431, Hungry Jackâ€™s Flemington.&nbsp;</font><o:p></o:p></p><p class="MsoNormal" style="margin-top:0cm;margin-right:.15pt;margin-bottom:.25pt;\r\nmargin-left:-.25pt"><font face="impact"><br></font></p><p class="MsoNormal" style="text-align: center; margin: 0cm 0.15pt 0.25pt -0.25pt;"><img src="https://i.imgur.com/xvXBAUa.jpg" width="600"><font face="impact"><br></font></p></div>'),
(7, 7, 'aeifpjergjdsjof');

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
(3, 'Australian Taxation'),
(4, 'Overseas Transfer'),
(5, 'Project 2');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mesId` int(11) NOT NULL,
  `senId` int(11) NOT NULL,
  `recd` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuId` int(200) NOT NULL,
  `UId` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topId` int(11) NOT NULL,
  `topName` varchar(500) NOT NULL,
  `courId` int(11) NOT NULL,
  `topDescrip` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topId`, `topName`, `courId`, `topDescrip`) VALUES
(7, 'Australian Law', 3, 'Australian Law'),
(9, 'Tax File Number (TFN)', 4, NULL),
(10, 'Australian business number (ABN)', 4, NULL),
(11, 'Sprint 3', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uFirstName` varchar(100) NOT NULL,
  `uLastName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userType` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uFirstName`, `uLastName`, `username`, `email`, `password`, `userType`) VALUES
(1, '', '', 'rajesh', 'rgrgadhvi6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, '', '', 'jasmel', 'jass123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(3, 'Anand', 'Kamant', 'anand', 'anand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(4, '', '', 'rajesh123', 'gadhvir1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(5, 'Berhan', 'Ahmed', 'berhan', 'harmony@aameys.com.au', '3c0f4d25e8ab99620326b8adc4a75d71', 0);

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
  ADD PRIMARY KEY (`busId`),
  ADD KEY `ownId` (`UId`),
  ADD KEY `busType` (`busType`);

--
-- Indexes for table `bustype`
--
ALTER TABLE `bustype`
  ADD PRIMARY KEY (`busType`),
  ADD KEY `busType` (`busType`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comId`),
  ADD KEY `bullId` (`bullId`),
  ADD KEY `UId` (`UId`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`conId`),
  ADD KEY `topId` (`topId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mesId`),
  ADD KEY `senId` (`senId`),
  ADD KEY `recd` (`recd`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuId`),
  ADD KEY `UId` (`UId`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topId`),
  ADD KEY `topCourse` (`courId`);

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
  MODIFY `busId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `conId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mesId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `business`
--
ALTER TABLE `business`
  ADD CONSTRAINT `UsersId` FOREIGN KEY (`UId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `busType` FOREIGN KEY (`busType`) REFERENCES `bustype` (`busType`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK` FOREIGN KEY (`bullId`) REFERENCES `bulletin` (`bullId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK1` FOREIGN KEY (`UId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`topId`) REFERENCES `topic` (`topId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `recid` FOREIGN KEY (`recd`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `senid` FOREIGN KEY (`senId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `UId` FOREIGN KEY (`UId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`courId`) REFERENCES `course` (`courId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
