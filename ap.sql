-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 12:09 AM
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
  `bullTopic` varchar(500) DEFAULT NULL,
  `bullDate` date DEFAULT NULL,
  `bullOther` varchar(1000) DEFAULT NULL,
  `bullContent` longtext,
  `bullReadMore` varchar(1000) DEFAULT NULL,
  `bullImage` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulletin`
--

INSERT INTO `bulletin` (`bullId`, `bullTopic`, `bullDate`, `bullOther`, `bullContent`, `bullReadMore`, `bullImage`) VALUES
(16, 'Emerge in Yarra', '2018-07-24', 'June 29 â€“ July 8', 'Emerge in Yarra 2017 presents a week long festival from June 29 - July 8, presenting a range of exhibitions, art installations, cooking demonstrations, live music, storytelling, spoken word, dance and conversations. The full program and ticket information will be available via the MAV website over the next week.  Founded in 2004 as a platform for artists in MAVâ€™s Visible Music Mentoring Program, the festival has since grown to encompass talented artists from refugee and emerging communities across the city, diverse art forms, new collaborations and commissioned works. ', '', 'images/bulletin/4.jpg'),
(20, 'Emerald Hill Cultural Precinct Sound & Colour Series', '2018-05-26', 'Friday 26 May, 7pm, FREE  Australian Tapestry Workshop  262-266 Park St, South Melbourne ', 'Multicultural Arts Victoria invites you to join us at the Australian Tapestry Workshop for the Sound & Colour Series #4. Listen to music by artists from Multicultural Art Victoria & students from Australian National Academy of Music amongst the colourful ATW tapestries. A collaborative piece curated by Peter Knight performed by: \r\n\r\n \r\n\r\nLaura Barton, Violin, ANAM \r\n\r\nAlexander MacDonald, Viola, ANAM \r\n\r\nEliza Shephard, Flute, ANAM \r\n\r\nPeter Knight, Trumpet, MAV \r\n\r\nBrandon Lee, KOTO MAV. ', 'https://www.austapestry.com.au/whats-on/whats-on', 'images/bulletin/unnamed.jpg'),
(22, 'AACC forms Partnership with Invest Africa', '2018-10-03', 'AACC President Duncan Harris is delighted to announce a formal Partnership Agreement with the London based Invest Africa (IA). ', 'AACC President Duncan Harris is delighted to announce a formal Partnership Agreement with the London based Invest Africa (IA). The object is to improve and deepen collaboration between the AACC and IA.\r\n\r\n \r\n\r\nThis follows on from the recent merger of IA with the Business Council for Africa .\r\n\r\n \r\n\r\nEach party has undertaken to promote key events as Partner Events on their respective websites, to provide concessional rates to attend such events and to co-host events or webinars as they occur.\r\n\r\n \r\n\r\nIt is intended that AACC members will now be able to access key contacts and representatives from within IA to aid and abet trade and investment opportunities across Africa.   \r\nIn July 2018, the AACC hosted a roundtable exchange with the Governor of Kano, Dr Abdullahi Umar Ganduji, OFR and his delegation at the Pan Pacific Hotel in Melbourne. \r\n\r\n \r\n\r\nIt was a stimulating and constructive exchange with the Governor underscoring the importance of the Agriculture, Education, Health, Mining and Resources and Renewable Energy.\r\n\r\n\r\nNoting that Renewables play an all important role in facilitating each of these sectors much discussion took place on the scope and opportunity for developing a resource for Kano State. \r\n\r\n ', 'https://www.australiaafrica.com/', 'images/bulletin/bulletin .jpg'),
(23, 'The Australian companies mining $40 billion out of Africa', '2018-04-07', 'Francina Nkosi chose to live in Lephalale because of the farmland. There was enough space to raise her daughter and as many women as there were men, a rarity in parts of the Limpopo province of South Afr', 'Resgen is one of more than 140 Australian companies that have landed on African shores, 44 in South Africa alone, documents obtained by tax transparency network Publish What You Pay Australia show.', 'https://www.smh.com.au/politics/federal/the-australian-companies-mining-40-billion-out-of-africa-20170906-gyc6t0.html', 'images/bulletin/mining.jpg'),
(24, 'dstdrfg', '2018-10-12', '', 'safdfgfd', '', NULL);

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
(2, 3, 'Shippit', '7 WASLEY', 'Bakery', '', 'Shippit.melbourne@gmail.com.au', 1234567899, 'Rob Hango Zada', '', '', 'Medium'),
(4, 3, 'Australian mining companies ', 'Lephalale ', 'Mining', '3454326567', '', 393501777, 'Eryk Bagshaw', 'contractor', '', 'Medium'),
(5, 3, 'Unlockd', 'Melbourne ', 'Network and Communication', '7865643790', 'unlocked23@yahoo.com', 476855342, 'Matt Berriman', 'CEO', '', 'Medium'),
(6, 3, 'Henery Graphics Design', '7 wesely st.', 'IT', '3454326567', 'Henery44@gmail.com', 476855342, 'Henery', 'Owner and Designer', 'http://HenDesign.com.au', 'Medium'),
(7, 21, 'IT Support Rajesh', '44, wests road', 'Carpentery', '', 'T.Truss@gmail.com', 38976533, 'Nick', 'Owner', '', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comId` int(11) NOT NULL,
  `bullId` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `comDescrip` text NOT NULL,
  `ComDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comId`, `bullId`, `fullname`, `email`, `comDescrip`, `ComDate`) VALUES
(46, 16, 'Jasmel', 'jass@jass.com', 'Yes, I am going to attend this at any cost.!', '2018-09-05 07:52:51'),
(49, 16, 'Berhan', 'br@gmail.com', 'Good One', '2018-09-14 01:19:52'),
(51, 22, 'RAJESH GADHVI', 'RGRGADHVI6@GMAIL.COM', 'THis is good, I look forward to come to this event.', '2018-10-04 23:27:00'),
(52, 16, 'Gemma', 'gemma@gmail.com', 'Blown away by this awesome presentation!', '2018-10-05 00:08:41'),
(53, 22, 'darshan vaghela', 'dvaghela@atmc.edu.au', 'great.', '2018-10-05 00:29:24'),
(54, 16, 'shub', 'shubjohal@gmail.com', 'great', '2018-10-05 01:08:41'),
(55, 20, 'Rajesh Gadhvi', 'rgrgadhvi6@gmail.com', 'I look forward to come!..', '2018-10-05 01:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `conId` int(11) NOT NULL,
  `topId` int(11) NOT NULL,
  `ConHeadline` varchar(100) NOT NULL,
  `conDescrip` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`conId`, `topId`, `ConHeadline`, `conDescrip`) VALUES
(7, 15, 'Tax file number', '<p style="margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; overflow-wrap: break-word;">Your tax file number (TFN) is your personal reference number in the tax and super systems.</p><p style="margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; overflow-wrap: break-word;">Your TFN is an important part of your tax and super records as well as your identity, so keep it secure.</p><p style="margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; overflow-wrap: break-word;">Your TFN is yours for life. You keep the same TFN even if you change your name, change jobs, move interstate or go overseas.</p><p style="margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; overflow-wrap: break-word;">You don\'t have to have a TFN, but without one you pay more tax. You also won\'t be able to apply for government benefits, lodge your tax return electronically or get an Australian business number (ABN).</p><h2 style="font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; line-height: 28px; color: rgb(0, 35, 65); margin: 15px 0px 22px; font-size: 26px;">Apply for a TFN</h2><p style="margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; overflow-wrap: break-word;">How you apply for a TFN will depend on your circumstances:</p><ul style="padding-left: 1.5em; list-style: none; color: rgb(102, 102, 102); font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; font-size: 18px;"><li style="margin-top: 1.5em; margin-bottom: 0.3em; position: relative;"><a href="https://www.ato.gov.au/individuals/tax-file-number/apply-for-a-tfn/australian-residents---tfn-application" style="color: rgb(152, 0, 152); text-decoration-line: underline;">Australian residents</a></li><li style="margin-top: 0.3em; margin-bottom: 0.3em; position: relative;"><a href="https://www.ato.gov.au/individuals/tax-file-number/apply-for-a-tfn/foreign-passport-holders,-permanent-migrants-and-temporary-visitors---tfn-application" style="color: rgb(152, 0, 152); text-decoration-line: underline;">Foreign passport holders, permanent migrants and temporary visitors</a></li><li style="margin-top: 0.3em; margin-bottom: 1.5em; position: relative;"><a href="https://www.ato.gov.au/individuals/tax-file-number/apply-for-a-tfn/people-living-outside-australia---tfn-application" style="color: rgb(152, 0, 152); text-decoration-line: underline;">People living outside Australia</a></li></ul><h2 style="font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; line-height: 28px; color: rgb(0, 35, 65); margin: 15px 0px 22px; font-size: 26px;">Can\'t find your TFN?</h2><ul style="padding-left: 1.5em; list-style: none; color: rgb(102, 102, 102); font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; font-size: 18px;"><li style="margin-top: 1.5em; margin-bottom: 0.3em; position: relative;">Look on your income tax notice of assessment or other letters from us</li><li style="margin-top: 0.3em; margin-bottom: 0.3em; position: relative;">Look on a payment summary (provided by your employer) or your super statement</li><li style="margin-top: 0.3em; margin-bottom: 0.3em; position: relative;">If you have a myGov account linked to the ATO, you can access your TFN online</li><li style="margin-top: 0.3em; margin-bottom: 1.5em; position: relative;">Ask your tax agent (if you use one)</li></ul><p style="margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Swiss721BT-Light, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; overflow-wrap: break-word;">If you still can\'t find it, phone us on&nbsp;<span style="font-family: Swiss721BT-Bold, Arial, Helvetica, sans-serif;">13&nbsp;28&nbsp;61,</span>&nbsp;8.00am to 6.00pm, Monday to Friday.</p> '),
(8, 16, 'Australian Business Number', '<div class="tip" style="color: rgb(51, 51, 51); font-family: DroidSansRegular, helvetica, arial, sans-serif; font-size: 16px;"><p style="line-height: 1.4em; padding-left: 35px;">The&nbsp;<a href="https://abr.business.gov.au/Tools/AbnLookup" style="color: rgb(0, 102, 153);">ABN Lookup tools</a>&nbsp;may assist with multiple searches.</p></div><div class="tip" style="color: rgb(51, 51, 51); font-family: DroidSansRegular, helvetica, arial, sans-serif; font-size: 16px;"><h2 style="clear: both; font-size: 20.8px; margin: 1.5em 0px 1em; background: url(&quot;../images/ico-tip.png&quot;) 0px 0px no-repeat; min-height: 34px; padding-bottom: 0.25em; padding-left: 35px; padding-top: 0.2em;">Did you know?</h2><p style="line-height: 1.4em; padding-left: 35px;">ABN Lookup served more than 1 Billion searches in the last financial year and 85% of those searches used the&nbsp;<a href="https://abr.business.gov.au/Tools/WebServices" style="color: rgb(0, 102, 153);">ABN Lookup web services</a>.</p></div><div class="tip" style="color: rgb(51, 51, 51); font-family: DroidSansRegular, helvetica, arial, sans-serif; font-size: 16px;"><h2 style="clear: both; font-size: 20.8px; margin: 1.5em 0px 1em; background: url(&quot;../images/ico-tip.png&quot;) 0px 0px no-repeat; min-height: 34px; padding-bottom: 0.25em; padding-left: 35px; padding-top: 0.2em;">Update your ABN details</h2><p style="line-height: 1.4em; padding-left: 35px;">It is essential your ABN details are kept up-to-date. Many agencies across all levels of government rely on ABN information to target and provide important community services.</p><p style="line-height: 1.4em; padding-left: 35px;">Tell us within 28 days if your business operation ceases or if your details change. Your ABN may be cancelled if information shows you are no longer carrying on a business.</p><p style="line-height: 1.4em; padding-left: 35px;">To update your ABN details go to&nbsp;<a href="https://abr.gov.au/" style="color: rgb(0, 102, 153);">abr.gov.au&nbsp;<img alt="External site" width="10" height="10" class="external" src="https://abr.business.gov.au/Images/ico-external.png" style="border: 0px; float: none; margin-left: 0.25em;"></a>.</p></div><div class="tip" style="color: rgb(51, 51, 51); font-family: DroidSansRegular, helvetica, arial, sans-serif; font-size: 16px;"><h2 style="clear: both; font-size: 20.8px; margin: 1.5em 0px 1em; background: url(&quot;../images/ico-tip.png&quot;) 0px 0px no-repeat; min-height: 34px; padding-bottom: 0.25em; padding-left: 35px; padding-top: 0.2em;">Trading names are being retired</h2><p style="line-height: 1.4em; padding-left: 35px;">From November 2018, ABN Lookup will cease displaying all trading names and only display registered business names. If you wish to operate under a different name to your legal/entity name, you will need to&nbsp;<a href="http://www.asic.gov.au/for-business/registering-a-business-name/" style="color: rgb(0, 102, 153);">register your business name&nbsp;<img alt="External site" width="10" height="10" class="external" src="https://abr.business.gov.au/Images/ico-external.png" style="border: 0px; float: none; margin-left: 0.25em;"></a>&nbsp;with the Australian Securities and Investments Commission.</p><p style="line-height: 1.4em; padding-left: 35px;">For more information see&nbsp;<a href="https://abr.business.gov.au/Help/Glossary#tradingname" style="color: rgb(0, 102, 153);">our help section</a>.</p></div> '),
(9, 20, 'CBA', '<p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;">The Commonwealth Bank of Australia was established by the&nbsp;<i>Commonwealth Bank Act 1911</i>, introduced by the&nbsp;<a href="https://en.wikipedia.org/wiki/Andrew_Fisher" title="Andrew Fisher" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Andrew Fisher</a>&nbsp;<a href="https://en.wikipedia.org/wiki/Australian_Labor_Party" title="Australian Labor Party" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Labor</a>&nbsp;Government, which favoured bank&nbsp;<a href="https://en.wikipedia.org/wiki/Nationalisation" class="mw-redirect" title="Nationalisation" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">nationalisation</a>, with effect on 22 December 1911.<sup id="cite_ref-FOOTNOTECommonwealth_Bank_Act1911_6-0" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/Commonwealth_Bank#cite_note-FOOTNOTECommonwealth_Bank_Act1911-6" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">[6]</a></sup>&nbsp;In a rare move for the time, the bank was to have both savings and general bank business. The bank was also the first bank in Australia to receive a federal government guarantee. The bank\'s earliest and most strenuous proponent was the flamboyant American-Australian Labor politician,&nbsp;<a href="https://en.wikipedia.org/wiki/King_O%27Malley" title="King O\'Malley" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">King O\'Malley</a>, and its first Governor was Sir&nbsp;<a href="https://en.wikipedia.org/wiki/Denison_Miller" title="Denison Miller" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Denison Miller</a>.</p><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;"><br></p><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;"><a href="https://en.wikipedia.org/wiki/File:1_Commonwealth_Bank.JPG" class="image" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 13.16px; text-align: center;"><img alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/1_Commonwealth_Bank.JPG/250px-1_Commonwealth_Bank.JPG" width="250" height="167" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/04/1_Commonwealth_Bank.JPG/375px-1_Commonwealth_Bank.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/04/1_Commonwealth_Bank.JPG/500px-1_Commonwealth_Bank.JPG 2x" data-file-width="2304" data-file-height="1536" style="border: 1px solid rgb(200, 204, 209);"></a><span style="font-size: 13.16px; text-align: center; background-color: rgb(248, 249, 250);"></span></p><div class="thumbcaption" style="border: 0px; line-height: 1.4em; padding: 3px; font-size: 12.3704px; color: rgb(34, 34, 34); font-family: sans-serif;"><div class="magnify" style="float: right; margin-left: 3px; margin-right: 0px;"><a href="https://en.wikipedia.org/wiki/File:1_Commonwealth_Bank.JPG" class="internal" title="Enlarge" style="color: rgb(11, 0, 128); background-image: linear-gradient(transparent, transparent), url(&quot;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 11 15%22 width=%2215%22 height=%2211%22%3E %3Cg id=%22magnify-clip%22 fill=%22%23fff%22 stroke=%22%23000%22%3E %3Cpath id=%22bigbox%22 d=%22M1.509 1.865h10.99v7.919h-10.99z%22/%3E %3Cpath id=%22smallbox%22 d=%22M-1.499 6.868h5.943v4.904h-5.943z%22/%3E %3C/g%3E %3C/svg%3E&quot;); background-position-x: initial, initial; background-position-y: initial, initial; background-size: initial, initial; background-repeat: repeat, repeat; background-attachment: initial, initial; background-origin: initial, initial; background-clip: initial, initial; display: block; text-indent: 15px; white-space: nowrap; overflow: hidden; width: 15px; height: 11px; user-select: none;"></a></div>The&nbsp;<a href="https://en.wikipedia.org/wiki/State_Savings_Bank_building" class="mw-redirect" title="State Savings Bank building" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">State Savings Bank building</a>&nbsp;in&nbsp;<a href="https://en.wikipedia.org/wiki/Martin_Place" title="Martin Place" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Martin Place</a>, Sydney, built in 1928 and currently home to the Commonwealth Bank\'s Martin Place branch, and the headquarters of Macquarie Group</div><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;"><br></p><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;">The bank opened its first branch in&nbsp;<a href="https://en.wikipedia.org/wiki/Melbourne" title="Melbourne" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Melbourne</a>&nbsp;on 15 July 1912.<sup id="cite_ref-7" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/Commonwealth_Bank#cite_note-7" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">[7]</a></sup>&nbsp;In an agreement with&nbsp;<a href="https://en.wikipedia.org/wiki/Australia_Post" title="Australia Post" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Australia Post</a>&nbsp;that exists to this day, the bank also traded through post office agencies. In 1912, it took over the&nbsp;<a href="https://en.wikipedia.org/w/index.php?title=State_Savings_Bank_of_Tasmania&amp;action=edit&amp;redlink=1" class="new" title="State Savings Bank of Tasmania (page does not exist)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">State Savings Bank of Tasmania</a>, and by 1913 it had branches in all six states.</p><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;"><br></p><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;">In 1916, the bank moved its head office to&nbsp;<a href="https://en.wikipedia.org/wiki/Sydney" title="Sydney" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Sydney</a>. It also followed the Australian army into&nbsp;<a href="https://en.wikipedia.org/wiki/New_Guinea" title="New Guinea" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">New Guinea</a>, where it opened a branch in&nbsp;<a href="https://en.wikipedia.org/wiki/Rabaul" title="Rabaul" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Rabaul</a>&nbsp;and agencies elsewhere.</p><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;">In 1920, the bank began acquiring&nbsp;<a href="https://en.wikipedia.org/wiki/Central_bank" title="Central bank" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">central bank</a>&nbsp;powers when it took over the responsibility for the issue of Australian bank notes from the Department of the Treasury.<sup id="cite_ref-8" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/Commonwealth_Bank#cite_note-8" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">[8]</a></sup></p><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;">In 1920, the Commonwealth Bank took over the&nbsp;<a href="https://en.wikipedia.org/wiki/Queensland_Government_Savings_Bank" title="Queensland Government Savings Bank" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Queensland Government Savings Bank</a>.</p><p style="margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;">In 1931, the New South Wales government transferred to the bank the savings bank business of the Government Savings Bank of New South Wales (est. 1871), and the current account and fixed deposit business of the Rural Bank Department. The bank also acquired the State Savings Bank of Western Australia (est. 1863).</p> ');

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
(4, 'Australian Banks'),
(5, 'Australian Law');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mesId` int(11) NOT NULL,
  `senId` int(11) NOT NULL,
  `recId` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mesId`, `senId`, `recId`, `message`, `time`) VALUES
(7, 3, 21, 'hello', '2018-09-27 02:02:42'),
(8, 3, 21, 'hello', '2018-09-27 02:05:47'),
(9, 3, 21, 'rajesh', '2018-09-27 03:01:24'),
(10, 3, 21, 'rajesh', '2018-09-27 03:40:16'),
(11, 3, 21, 'rajeshsdrgdfh', '2018-09-27 04:17:49');

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuId`, `UId`, `stuFirstName`, `stuLastName`, `parentName`, `email`, `contact`, `stuContact`, `age`, `schoolName`, `courseLevel`, `courseName`, `schoolContact`, `schoolLocation`, `reasonOfDropout`, `flagged`) VALUES
(1, 21, 'Akinlabi	', 'Akano', 'Akinlabi	', '', '0404265363', '', '22', 'Wesely college', 'Year 7', 'primary', '', 'ALBION', '', 'No'),
(2, 3, 'Jasmel', 'Singh', 'Raj', 'RGRGADHVI6@GMAIL.COM', '0404265363', '', '12', 'RAJESH', 'Year 7', 'Year', '', 'Maribyrnong', '', 'No'),
(3, 3, 'Abdalla', 'Abam', 'Abeo Abam', '', '0410335643', '', '19', 'St Leonard\'s College', 'sescondary', 'Year 11', '0454326543', 'Brighton East', 'Bad company', 'Yes');

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
(15, 'Tax File Number (TFN)', 3, NULL),
(16, 'Australian business number (ABN)', 3, NULL),
(17, 'Statute law', 5, NULL),
(18, 'Common law', 5, NULL),
(19, 'Constitutional law', 5, NULL),
(20, 'Commonwealth Bank of Australia (CBA)', 4, NULL),
(23, 'Westpac Banking Corporation (Westpac)', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userType` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `userType`) VALUES
(3, 'Anand', 'anand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(21, 'Rajesh Gadhvi', 'rgrgadhvi6@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(22, 'prince', 'gadhvir1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1);

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
  ADD KEY `ownId` (`UId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comId`),
  ADD KEY `bullId` (`bullId`);

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
  ADD KEY `recd` (`recId`);

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
  MODIFY `bullId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `busId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `conId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `business`
--
ALTER TABLE `business`
  ADD CONSTRAINT `UsersId` FOREIGN KEY (`UId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK` FOREIGN KEY (`bullId`) REFERENCES `bulletin` (`bullId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`topId`) REFERENCES `topic` (`topId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `recid` FOREIGN KEY (`recId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
