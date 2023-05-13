create schema bmicalc collate = utf8_general_ci;
use bmicalc;

--
-- Database: `bmicalc`
--

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `SignInID` int(5) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `PhoneNumber` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`SignInID`, `FirstName`, `LastName`, `UserName`, `Password`, `PhoneNumber`, `Email`) VALUES
(1, 'admin', '', 'admin', '1234', 0741412525, 'admin@gmail.com'),
(2, 'Selena', 'Gomez', 'SGomez', '1234', 0789641254, 'sgomez@gmail.com'),
(3, 'Jon', 'Snow', 'JSnow', '1234', 0745780054, 'jsnow@gmail.com'),
(4, 'Peter', 'Griffin', 'PGriffin', '1234', 0700011125, 'pgriffin@gmail.com'),
(5, 'Robert', 'Kiyosaki', 'RKiyosaki', '1234', 0788549621, 'rkiyosaki@gmail.com'),
(6, 'Tony', 'Stark', 'TStark', '1234', 0781000057, 'tstark@gmail.com'),
(7, 'Rick', 'Riordan', 'RRiordan', '1234', 0754565698, 'rickriordan@gmail.com'),
(13, 'Barry', 'Allen', 'BAllen', '1234', 0785486861, ''),
(18, 'Ben', 'Affleck', 'BAffleck', '1234', 0000000000, 'batfleck@billionairesclub.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`SignInID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `SignInID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;
