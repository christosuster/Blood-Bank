-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 09:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `pName` text NOT NULL,
  `hName` text NOT NULL,
  `haddress` text NOT NULL,
  `city` text NOT NULL,
  `dName` text NOT NULL,
  `bgroup` text NOT NULL,
  `cName` text NOT NULL,
  `cNumber` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `pName`, `hName`, `haddress`, `city`, `dName`, `bgroup`, `cName`, `cNumber`) VALUES
(13, 'John Doe', 'Square Hospital', 'Dhanmondi 32', 'Dhaka', 'Dr Hossain', 'A+', 'Jane', '01826482656');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `attempt` int(11) NOT NULL,
  `locked` tinyint(1) NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `division` text DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `country` text DEFAULT NULL,
  `bgroup` text DEFAULT NULL,
  `active` text DEFAULT NULL,
  `contact` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `attempt`, `locked`, `fname`, `lname`, `address`, `city`, `division`, `gender`, `country`, `bgroup`, `active`, `contact`) VALUES
(21, 'onorledgek@scribd.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Oliviero', 'Norledge', '773 Bunting Way', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'A+', 'YES', '01369222987'),
(17, 'vbrettorg@time.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Valerye', 'Brettor', '16715 Lukken Junction', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'A+', 'YES', '01298894799'),
(22, 'nmorcombel@usatoday.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Nancy', 'Morcombe', '2 Fallview Junction', 'Dhaka', 'Dhaka', 'Agender', 'Bangladesh', 'A+', 'YES', '01386805034'),
(23, 'tbenfordm@goo.ne.jp', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Trula', 'Benford', '90 Sachs Place', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'A-', 'YES', '01404387081'),
(28, 'pfrankenr@ucla.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Pepita', 'Franken', '612 Talmadge Hill', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'A-', 'YES', '01492297316'),
(32, 'nvongladbachv@cloudflare.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Niels', 'Von Gladbach', '58435 Tony Street', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'A-', 'YES', '01562625504'),
(33, 'hcoyettw@blogs.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Halsey', 'Coyett', '36 Drewry Avenue', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'AB+', 'YES', '01580207551'),
(37, 'gcourtonne10@umn.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Germayne', 'Courtonne', '7389 Northwestern Plaza', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'AB+', 'YES', '01650535739'),
(41, 'lhumberston14@wix.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Lacee', 'Humberston', '061 Lighthouse Bay Pass', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'AB+', 'YES', '01720863927'),
(47, 'oentres1a@about.me', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Orren', 'Entres', '845 Old Gate Place', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'AB+', 'YES', '01826356209'),
(50, 'mtrengove1d@blogtalkradio.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Madella', 'Trengove', '4976 Meadow Vale Circle', 'Dhaka', 'Dhaka', 'Polygen', 'Bangladesh', 'AB-', 'YES', '01879102350'),
(49, 'rspencers1c@ted.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Rhodia', 'Spencers', '642 Crowley Center', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'AB-', 'YES', '01861520303'),
(48, 'dhalksworth1b@miibeian.gov.cn', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Dehlia', 'Halksworth', '372 Redwing Point', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'AB-', 'YES', '01843938256'),
(46, 'wdullard19@fotki.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Wilhelm', 'Dullard', '97 Haas Trail', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'AB-', 'YES', '01808774162'),
(45, 'chelix18@biblegateway.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Cassy', 'Helix', '1 Novick Center', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'AB-', 'YES', '01791192115'),
(42, 'nromanet15@theguardian.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Nye', 'Romanet', '028 Jay Crossing', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'AB-', 'YES', '01738445974'),
(43, 'masbrey16@telegraph.co.uk', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Moina', 'Asbrey', '7 Leroy Lane', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'B+', 'YES', '01756028021'),
(44, 'vfranzotto17@a8.net', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Valentino', 'Franzotto', '6125 Portage Circle', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'B+', 'YES', '01773610068'),
(39, 'jberr12@buzzfeed.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Jinny', 'Berr', '9884 Burrows Crossing', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'B-', 'YES', '01685699833'),
(40, 'jasgodby13@furl.net', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Jayme', 'Asgodby', '0800 Redwing Junction', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'AB-', 'YES', '01703281880'),
(38, 'dpinchen11@google.es', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Duff', 'Pinchen', '02 American Ash Trail', 'Dhaka', 'Dhaka', 'Polygen', 'Bangladesh', 'B-', 'YES', '01668117786'),
(36, 'gmaidesz@vimeo.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Gayler', 'Maides', '97 Hayes Avenue', 'Dhaka', 'Dhaka', 'Non-bin', 'Bangladesh', 'B-', 'YES', '01632953692'),
(35, 'janfossiy@ucsd.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Joseito', 'Anfossi', '44 Pearson Parkway', 'Dhaka', 'Dhaka', 'Genderf', 'Bangladesh', 'B-', 'YES', '01615371645'),
(30, 'bknightsbridget@webmd.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Benjamen', 'Knightsbridge', '57 Jenna Junction', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'B+', 'YES', '01527461410'),
(34, 'lbortoluttix@engadget.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Leslie', 'Bortolutti', '0073 Acker Trail', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'B+', 'YES', '01597789598'),
(31, 'gwhebleu@paginegialle.it', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Gillie', 'Wheble', '60 Mayfield Lane', 'Dhaka', 'Dhaka', 'Non-bin', 'Bangladesh', 'B+', 'YES', '01545043457'),
(29, 'bscreachs@domainmarket.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Bald', 'Screach', '55883 Delladonna Alley', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'B+', 'YES', '01509879363'),
(27, 'mlightningq@tripod.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Morten', 'Lightning', '6896 Michigan Point', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'B+', 'YES', '01474715269'),
(24, 'ijeschnern@whitehouse.gov', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Itch', 'Jeschner', '42 Thompson Court', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'O+', 'YES', '01421969128'),
(25, 'tgotecliffeo@stanford.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Tate', 'Gotecliffe', '0328 Mariners Cove Trail', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'O+', 'YES', '01439551175'),
(26, 'esibbetp@reuters.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Elvin', 'Sibbet', '612 Di Loreto Place', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'O+', 'YES', '01457133222'),
(18, 'sgoffordh@nydailynews.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Sharon', 'Gofford', '3 Browning Center', 'Dhaka', 'Dhaka', 'Non-bin', 'Bangladesh', 'O+', 'YES', '01316476846'),
(19, 'bairdriei@forbes.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Barry', 'Airdrie', '7774 Bellgrove Way', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'O+', 'YES', '01334058893'),
(20, 'danticj@tinyurl.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Doria', 'Antic', '884 Lyons Street', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'O+', 'YES', '01351640940'),
(16, 'dcoardf@mtv.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Dedie', 'Coard', '19 Spenser Point', 'Dhaka', 'Dhaka', 'Bigende', 'Bangladesh', 'O+', 'YES', '01281312752'),
(15, 'owoolise@hp.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Oran', 'Woolis', '945 Manitowish Circle', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'B-', 'YES', '01263730705'),
(11, 'brivelesa@bigcartel.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Bartholemy', 'Riveles', '28573 Hoffman Point', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'B-', 'YES', '01193402517'),
(10, 'dmuddicliffe9@bloomberg.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Donalt', 'Muddicliffe', '34002 Everett Lane', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'B-', 'YES', '01175820470'),
(9, 'apackwood8@twitpic.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Anthiathia', 'Packwood', '883 Thompson Way', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'O-', 'YES', '01158238423'),
(8, 'kmeale7@elegantthemes.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Kippie', 'Meale', '854 Hoffman Park', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'O-', 'YES', '01140656376'),
(7, 'dsharper6@123-reg.co.uk', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Dinah', 'Sharper', '5 Manitowish Parkway', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'O-', 'YES', '01123074329'),
(6, 'ncressor5@spotify.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Nate', 'Cressor', '82789 Alpine Way', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'O-', 'YES', '01105492282'),
(5, 'gcollicott4@umich.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Gwynne', 'Collicott', '62 Canary Junction', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'O-', 'YES', '0187910235'),
(4, 'wmcmains3@infoseek.co.jp', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Winna', 'McMains', '273 Kedzie Place', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'O-', 'YES', '0170328188'),
(2, 'speatman1@mozilla.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Sullivan', 'Peatman', '96 Quincy Crossing', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'O-', 'YES', '0135164094'),
(14, 'gadamikd@cisco.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Gilles', 'Adamik', '6 Nelson Place', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'A+', 'YES', '01246148658'),
(13, 'gbisphamc@bizjournals.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Germaine', 'Bispham', '6 Norway Maple Street', 'Dhaka', 'Dhaka', 'Non-bin', 'Bangladesh', 'A+', 'YES', '01228566611'),
(12, 'zmowlesb@businesswire.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Zarah', 'Mowles', '625 Westridge Hill', 'Dhaka', 'Dhaka', 'Female', 'Bangladesh', 'A+', 'YES', '01210984564'),
(3, 'rdalessio2@deliciousdays.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Randa', 'D\'Alessio', '19 Dapin Avenue', 'Dhaka', 'Dhaka', 'Agender', 'Bangladesh', 'A+', 'YES', '0152746141'),
(1, 'njarratt0@tmall.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Nathaniel', 'Jarratt', '933 Dovetail Point', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'A+', 'YES', '0117582047'),
(51, 'chris@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Christos', 'Uster', '123 Street', 'Dhaka', 'Dhaka', 'Male', 'Bangladesh', 'AB+', 'YES', '01896684397');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
