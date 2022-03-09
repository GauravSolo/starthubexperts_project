-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2022 at 11:58 AM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u214928853_she`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`id`, `username`, `email`, `phone`, `category`, `message`) VALUES
(13378, 'Yash Patel', 'yashpatel.6564@yahoo.com', '9167126564', 'Financing', 'FINANCER DHUNDH K DE');

-- --------------------------------------------------------

--
-- Table structure for table `sitedata`
--

CREATE TABLE `sitedata` (
  `id` int(11) NOT NULL,
  `Tusers` int(11) NOT NULL,
  `Tenquiries` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitedata`
--

INSERT INTO `sitedata` (`id`, `Tusers`, `Tenquiries`) VALUES
(1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `category`, `message`) VALUES
(13378, 'Yash Patel', 'yashpatel.6564@yahoo.com', '9167126564', 'Financing', 'FINANCER DHUNDH K DE');

-- --------------------------------------------------------

--
-- Table structure for table `whatwedo`
--

CREATE TABLE `whatwedo` (
  `post_id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `para1` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `para2` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatwedo`
--

INSERT INTO `whatwedo` (`post_id`, `title`, `para1`, `para2`, `image`) VALUES
(5, 'Digital Marketing', 'Marketing is the backbone of any Start-up; it ensures that the product or service produced gets a proper reach out there in the market.', 'Whenever a product or service is introduced, a company makes sure that it’s uses and necessity is understood by mankind and thus various strategies are put into work and an active advertisement is done this entire process of introduction and making people understand the utility of the particular thing is termed as marketing.', '1643926393-digital.png'),
(6, 'Patent Filing', 'Patent filing acts as a fuel to start-ups, it is one of the most basic and integral steps for any new innovation to protect it from exploitation and give its inventor the real worth.', 'Patent filing brings along new ideas and way outs to develop an existing or even to build a completely new start up to provide service or products to the mankind. It is an elaborate official process which ensures that a particular innovation and its inventors are well acknowledged and the uniqueness is maintained. ', '1643926701-patent.png'),
(7, '3-D Modelling', '3-D modelling can take start-ups to a complete next level as it can produce demo models of the exact large project and help the clients to get a better understanding.', 'In this era of technicality 3-D modelling is a brilliant tool, it allows us to test or design ideas in 3-Dimension by developing models in a very easy way. It enables us to visualise functionalities and also the challenges which we will face while running a project or putting an idea into work.', '1643926777-3dmodeling.png'),
(8, 'Research and Development', 'It is a must for any start-up to go under continuous research and development for coming up with more innovatory ideas and actually putting them into place.', 'Research and Development is the most important part of any job, it helps a person or a team to understand the pre-requisites of the task and work upon the loop holes to make the existing work a better one or to develop a new idea. It also helps one to study the existing competition in the market and develop accordingly.', '1643926857-research.png'),
(9, 'Proto-typing', 'Prototypes helps a company to pitch their ideas to their clients, the structure helps the clients to understand the project in a much-detailed way.', 'Prototyping is the initial step in the journey of development, it is basically a rough experimental model which helps to understand the basic structure and functionalities of a particular project. The basic structure developed helps us to determine the probability of success of the ongoing project.', '1643926908-prototype.png'),
(10, 'ROC (Registrar of Companies)', 'Registrar of Companies provide a national security in terms of documentation and data privacy to companies registered with them and this feature is extremely beneficiary foor the budding start-ups.', 'Registrar of companies was founded in 1956, it comes under Indian Ministry of Corporate Affairs deals with the administration of the companies’ act passed in 2013. It generally functions for maintaining the required records of the companies associated with them. Additionally, some of the companies are also aided by the central government.', '1643926938-roc-removebg-preview.png'),
(11, 'Accounting and Compliance’s', 'For any start-up to grow into something big it requires a lot of effort in accounting and compliance as a strong financial edge is extremely required.', 'Accounting and Compliance is a major part while working on a particular project and idea, it ensures a clean and accurate financial reporting and helps in keeping a true record of the various expenses required during the process. It helps us to work within our budget and also produces a clear financial report of the entire project.', '1643926977-accounting.png'),
(12, 'Website/Application', 'In a start-up a website serves the purposes of informing people about the required information and applications helps the applicant to reach to the authorities in need.', 'A website is a source to get all the required information about a particular thing which we are not much aware of whereas an application helps us to apply for any vacancy or participate in any place in accordance to our interest and skillset.', '1643927061-website.jpg'),
(13, 'Legalities', 'Abiding by the law and maintaining all the legal procedures is very important to maintain in order to build a successful start-up.', 'It is very important that one maintains and follows the laws given in the jurisdiction and make sure that any work done should have valid legal documentaries supporting it, without legalities a particular start-up is simply valueless.', '1643927107-legalities.png'),
(14, 'Financing', 'Financing supports a start-up to get established in reality, it helps in executing and expanding the plan further.', 'Finance comes into play while executing the planning done for building a particular thing. A strong well managed financial plan is extremely required in order to execute a project successfully. One must make a proper financial planning keeping in mind the entire work and keeping in count every basic needs.', '1643927165-finance.png'),
(15, 'Recruitment', 'Recruiting employees in various domain in a start-up ensures upgrading the quality of work and thus benefits.', 'Recruitment basically means hiring an induvial to work it helps in expanding a team, it helps the team as well as the induvial to grow and earn expertise in a domain and thus in turn benefit both. A company or a project recruits an individual based on their skillset and productivity. ', '1643927202-recruitment.png'),
(16, 'INVESTOR', 'Investors are one of the major pillars in supporting any start-up to stand high and develop further.', 'The investment done by investors makes the development process practically feasible. It is the investors who brings the scope of smarter innovation by letting a company access the essential raw materials required for executing certain things.', '1643927312-investor.png'),
(17, 'CYBER SECURITY', 'Cyber security is the protection of every kind of data which is stored digitally in computers.', 'In this technological era where almost everything is digitalized cyber security is an important aspect it ensures protection of data from falling in wrong hands and thus provides it a security. It is very important that a budding start-up or an existing one must take cyber security into concern and carry on a legal project with all data under security.', '1643927348-cyber.png'),
(18, 'CO-WORKING SPACE', 'The physical space where an entire team sits together and work on different domains of a single project is co-working space.', 'It is very important that a company provides a comfortable and healthy co-working space to its employees. This ensures greater productivity and performance. A healthy and employee friendly co-working space also lets one think and innovate beyond what capability, it also produces a positive vibe throughout which is extremely important.', '1643927692-coworking.png'),
(19, 'MENTORING', 'The process of guiding a person technically or non-technically in a particular domain is known as mentoring.', 'Mentoring ensures that a person does smart work which is required in a specific field and lets one do a piece of task more efficiently by providing the required guidance. A mentor also monitors the work done by their mentees and suggests tips and tricks to improve their quality and content.', '1643927942-mentoring.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitedata`
--
ALTER TABLE `sitedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatwedo`
--
ALTER TABLE `whatwedo`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13379;

--
-- AUTO_INCREMENT for table `sitedata`
--
ALTER TABLE `sitedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13380;

--
-- AUTO_INCREMENT for table `whatwedo`
--
ALTER TABLE `whatwedo`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
