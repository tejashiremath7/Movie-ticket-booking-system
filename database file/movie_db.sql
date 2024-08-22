-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 11:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booked_seats` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_name` varchar(250) NOT NULL,
  `show_time` varchar(250) NOT NULL,
  `booking_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_cancel` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booked_seats`, `user_id`, `movie_name`, `show_time`, `booking_time`, `is_cancel`) VALUES
(8, 'a:2:{i:0;s:2:\"B2\";i:1;s:2:\"B4\";}', 2, 'PK Full Movie', '03:30 PM', '2022-06-26 08:10:29', 0),
(13, 'a:1:{i:0;s:2:\"F2\";}', 2, 'Runway 34', '10:30 AM', '2022-07-15 07:31:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `link`, `logo`, `time`) VALUES
(1, 'Sooryavanshi Movie', 'Sooryavanshi is a 2021 Indian Hindi-language action film written and directed by Rohit Shetty and produced by Reliance Entertainment, Rohit Shetty Picturez, Dharma Productions and Cape Of Good Films, based on a screenplay by Yunus Sajawal and an original story by Shetty. The fourth installment of Shetty\'s Cop Universe, it stars Akshay Kumar as the main protagonist, playing the role of ATS chief DCP Veer Sooryavanshi opposite Katrina Kaif and Jackie Shroff with supporting cast of Jaaved Jaaferi, Vivan Bhatena, Niharica Raizada, Gulshan Grover, Abhimanyu Singh, Sikandar Kher and Nikitin Dheer. Ajay Devgn and Ranveer Singh appear in extended cameos, reprising their roles of Singham and Simmba from the franchise\'s previous films, while Jackie Shroff portrays the main antagonist, playing the role of Omar Hafeez, a terrorist.', 'https://www.youtube.com/watch?v=u5r77-OQwa8', 'movie1.jpg', '7:30 PM'),
(2, 'Runway 34', 'Runway 34 is a 2022 Indian Hindi-language thriller film directed by Ajay Devgn and produced by himself under his banner Ajay Devgn FFilms, the film stars Ajay Devgn, Amitabh Bachchan and Rakul Preet Singh with Boman Irani, Angira Dhar and Aakanksha Singh playing pivotal roles.[5]\r\n\r\nRunway 34 was released theatrically on 29 April 2022, coinciding with Eid.', 'https://www.youtube.com/watch?v=Lb8mQCpZHco', 'movie2.jpg', '10:30 AM'),
(3, 'Scam 1992: The Harshad Mehta Story', 'Scam 1992: The Harshad Mehta Story is an Indian Hindi-language financial thriller streaming television series on SonyLIV directed by Hansal Mehta, with Jai Mehta serving as the co-director.[1] Based on 1992 Indian stock market scam committed by many stockbrokers including Harshad Mehta, the series is adapted from journalist Sucheta Dalal and Debashish Basu\'s 1992 book The Scam: Who Won, Who Lost, Who Got Away.[2] The screenplay and dialogues were written by Sumit Purohit, Saurabh Dey, Vaibhav Vishal and Karan Vyas.\r\n\r\nIt stars Pratik Gandhi as the protagonist Harshad Mehta, with Shreya Dhanwanthary appearing in a parallel lead role, as Sucheta Dalal. The series also features Satish Kaushik, Anant Mahadevan, Rajat Kapoor, K K Raina, Lalit Parimoo, Hemant Kher and Nikhil Dwivedi in pivotal roles. The series focuses on Harshad Mehta\'s life story, his meteoric rise and the subsequent downfall.', 'https://www.youtube.com/watch?v=BLeOcCeqsfI', 'movie3.jpg', '10:00 PM'),
(4, 'Taare Zameen Par', 'Taare Zameen Par (transl. Stars on earth), also known as Like Stars on Earth in English, is a 2007 Indian Hindi-language drama film produced and directed by Aamir Khan. The film stars Khan himself, along with Darsheel Safary, Tanay Chheda, Sachet Engineer, Vipin Sharma and Tisca Chopra. The film explores the life and imagination of Ishaan (Safary), an 8-year-old dyslexic child. Although he excels in art, his poor academic performance leads his parents to send him to a boarding school. Ishaan\'s new art teacher Nikumbh suspects that he is dyslexic and helps him to overcome his reading disorder.\r\n\r\nCreative director and writer Amole Gupte initially developed the idea with his wife Deepa Bhatia, who served as the film\'s editor. Shankar–Ehsaan–Loy composed the film\'s score, and Prasoon Joshi wrote the lyrics for many of the songs. Principal photography took place in Mumbai and in Panchgani\'s New Era High School, and some of the school\'s students make appearances.', 'https://www.youtube.com/watch?v=F-PAI2HnQUo', 'movie4.jpg', '12:30 PM'),
(5, 'Dilwale Dulhania Le Jayenge', 'Dilwale Dulhania Le Jayenge (transl. \"The Big-Hearted Will Take the Bride\"), also known by the initialism DDLJ, is a 1995 Indian Hindi-language musical romance film written and directed by Aditya Chopra in his directorial debut and produced by his father Yash Chopra. Released on 20 October 1995, the film stars Shah Rukh Khan and Kajol. The plot revolves around Raj and Simran, two young non-resident Indians, who fall in love during a vacation through Europe with their friends. Raj tries to win over Simran\'s family so the couple can marry, but Simran\'s father has long since promised her hand to his friend\'s son. The film was shot in India, London, and Switzerland, from September 1994 to August 1995.\r\n\r\nWith an estimated total gross of ₹2 billion[4][5] ($60 million) worldwide,[6] Dilwale Dulhania Le Jayenge was the highest-grossing Indian film of 1995 and one of the most successful Indian films in history. It won 10 Filmfare Awards—the most for a single film at that time—and the National Film Award for Best Popular Film Providing Wholesome Entertainment. ', 'https://www.youtube.com/watch?v=cmax1C1p660', 'movie5.jpg', '12:30 AM'),
(6, 'PK Full Movie', 'PK (transl. Tipsy) is a 2014 Indian Hindi-language comedy-drama film[a] edited and directed by Rajkumar Hirani and written by Hirani and Abhijat Joshi, and jointly produced by Hirani and Vidhu Vinod Chopra under the banners Rajkumar Hirani Films and Vinod Chopra Films respectively. The story follows an alien who comes to Earth on a research mission, only for the remote control for his spaceship to be stolen and sold to a godman; he befriends a television journalist and in his quest to retrieve the remote, questions religious dogmas and superstitions. The film stars Aamir Khan in the titular role with Anushka Sharma, Sushant Singh Rajput, Sanjay Dutt, Boman Irani and Saurabh Shukla in pivotal roles.\r\n\r\nAfter the success of 3 Idiots (2009), Hirani and Joshi began scripting their next project; finding similarities with the plot of Inception (2010), they scrapped the film. It was later rewritten with a different angle and tone. During production, the film was initially titled Talli and later Ek Tha Talli before being changed to PK as the latter title was found to be too similar to', 'https://www.youtube.com/watch?v=SOXWc32k4zA', 'movie6.jpg', '3:30 PM'),
(7, 'Dangal Full Movie', 'Dangal (transl. \"Wrestling Competition\") is a 2016 Indian Hindi-language biographical sports drama film directed by Nitesh Tiwari and produced by Aamir Khan and Kiran Rao under Aamir Khan Productions with Siddharth Roy Kapur under The Walt Disney Company India. The film stars Khan as Mahavir Singh Phogat, a pehlwani amateur wrestler who trains his daughters Geeta Phogat and Babita Kumari to become India\'s first world-class female wrestlers.[9] Fatima Sana Shaikh and Sanya Malhotra portray the adult versions of the two Phogat sisters, Zaira Wasim and Suhani Bhatnagar their younger versions, Sakshi Tanwar their mother, and Aparshakti Khurana their cousin, all of them except Tanwar in their film debuts.\r\n\r\nDevelopment on the film began in early 2013 when Tiwari began writing the script. Khan had interviewed the Phogat sisters in 2014 on his talk show Satyamev Jayate, before Tiwari approached him with the script months later, after which Khan became the lead actor and producer. Set primarily in the Indian state of Haryana,', 'https://www.youtube.com/watch?v=x_7YlGv9u1g', 'movie7.jpg', ''),
(8, 'Ek Tha Tiger', 'Ek Tha Tiger (transl. Once There was a Tiger) is a 2012 Indian Hindi-language action thriller spy film directed and co-written by Kabir Khan from a story by and produced by Aditya Chopra. It is the first installment in the Tiger franchise and the first film in the YRF Spy Universe, and stars Salman Khan, Katrina Kaif, Ranvir Shorey, Girish Karnad, Roshan Seth, and Gavie Chahal.[4] In Ek Tha Tiger, Tiger (Khan), an Indian spy, is tasked with recovering information before it is gained by Pakistan, but is sidetracked after falling in love with Zoya (Kaif), a girl with a dark secret.\r\n\r\nEk Tha Tiger is the third collaboration between Kabir Khan and Yash Raj Films, after he directed Kabul Express (2006) and New York (2009). The film\'s production was extensive; the script underwent several re-writes, and production was delayed for a number of years prior to commencing in 2011.[5] Ek Tha Tiger was filmed mostly in India, Cuba, Turkey, Ireland and Thailand,', 'https://www.youtube.com/watch?v=SmUl0l8qBXw', 'movie8.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `show_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `show_time`) VALUES
(1, '10:30 AM'),
(2, '12:30 PM'),
(3, '03:30 PM'),
(4, '07:30 PM'),
(5, '10:00 PM'),
(6, '12:30 AM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(2, 'test user', 'test@gmail.com', 'test@123', 8888888889),
(4, 'Ajay', 'ajay@gmail.com', 'ajay@123', 48787878787);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
