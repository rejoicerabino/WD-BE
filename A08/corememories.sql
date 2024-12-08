-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 03:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(400) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'among1.jpeg', 'Reji found her best circle of friends in high school, where they played a big role in shaping her personality. She treasures every moment with them—the laughter, jokes, and even the hardships. These memories remain close to her heart, reminding her of the bonds that helped her grow. ', '#3A6D8C'),
(2, 1, 'among2.jpg', 'In 8th grade, she met her besties, who remain her closest friends to this day. This picture brings back a wave of nostalgia, reminding her of their shared laughter, secrets, and unforgettable memories. Through all the years, their bond has stayed strong and unbreakable. ', '#384B70'),
(3, 1, 'among3.jpeg', 'On their senior high school graduation, Reji couldn\'t help but reflect on the journey with her friends, whom she had cherished since grade 7. Once strangers, they grew into a family through countless laughs, tears, and milestones. Their bond made every moment, including this day, unforgettable.', '#4A628A'),
(4, 2, 'gfo1.jpg', 'The picture titled \"Sintang Paaralan\" was the first Reji posted on her film account. It holds deep meaning for her, symbolizing the start of her four-year stay at PUP. A transition she believes will significantly change her life. It marks the beginning of a transformative chapter.', '#FFDB5C'),
(5, 2, 'gfo2.jpg', 'Taken on January 29, 2024, this was Reji\'s first trip to Aurora with her family. This snapshot holds a special place in her heart, a frozen memory she believes brought them closer together. She often reminisces about it, hoping to relive this cherished experience someday.', '#FEB941'),
(6, 2, 'gfo3.jpg', 'After 16 years, Reji finally returned to her mom\'s hometown in Maydolong, Samar. The serene scenery brought her an overwhelming sense of calm, leading her to wonder if death could feel this peaceful. To her, this picture captured what felt like paradise on earth.', '#DD761C'),
(7, 3, 'goblin.jpg', 'Goblin was the first K-drama Reji watched, and it still holds a special place in her heart. It makes her nostalgic for her teenage years, staying up until dawn, captivated by its incredible plot. Even now, she misses those nights, reliving the emotions that made it unforgettable.', '#62825D'),
(8, 3, 'wf.jpg', 'If comfort had a series, it would be Weightlifting Fairy. This K-drama remains Reji\'s ultimate comfort show. Whenever she\'s feeling down, she turns to it for warmth and familiarity, finding solace in its uplifting story, relatable characters, and heartwarming moments.', '#3C552D'),
(9, 3, 'dp.jpg', 'D.P. is one of Reji\'s favorite action series. It portrays the harsh realities of life in a military camp, highlighting the mental health struggles soldiers face. Despite the challenges, it also emphasizes the power of friendship, showing how bonds formed in adversity provide strength.', '#1F4529'),
(10, 4, 'kpopgroup.jpg', 'EXO was the first K-pop group Reji ever stanned, and it holds a special place in her heart. They were the ones who sparked her interest in other groups, like NCT and Seventeen, which also became her favorites. Their music and choreography deepened her love for both music and dance.', '#E195AB'),
(11, 4, 'album.jpg', 'Reji\'s favorite album is EXO\'s Universe. Filled with rock ballads, it evokes the feeling of curling up with a warm blanket and hot chocolate. This album is the perfect soundtrack for the  christmas season, capturing a cozy, reflective mood.', '#A64D79'),
(12, 4, 'ff.jpg', 'Seventeen\'s Falling Flower is Reji\'s favorite dance choreography. The performance is like a work of art, sparkling with emotions that resonate deeply. Watching it, she feels as though she\'s a child in her mother\'s arms, comforted and soothed, as if it could lull her to sleep with its beauty and grace.', '#6A1E55');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(400) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Among Us Island', 'Welcome to Among Us Island! Let\'s take a scroll down memory lane of her highschool circle.', NULL, '#A9D6E5', 'amongus.png', NULL),
(2, 'Goodfilms Only Island', 'Take a trip through Goodfilms Only Island! This is where Reji’s love for capturing little moments and details started. What was once just curiosity soon turned into a deep love for storytelling, and freezing memories in time.', NULL, '#A59D84', 'gfoisland.png', NULL),
(3, 'Reji\'s K-Drama Haven', 'Let\'s enter Reji\'s Kdrama Haven. Her love for kdrama began in high school. K-dramas became more than just an entertainment. They became a comfort, a way to escape reality, and a source of motivation to see the world differently', NULL, '#C1CFA1', 'kdramaisland.png', NULL),
(4, 'Stan Island', 'Welcome to Stan Island! Here lies the core memory of how Reji became a multi-fan of K-pop. It all started with a YouTube recommendation. A music video with dazzling visuals and a catchy beat. One clip turned into hours of binge-watching, learning idol names, and exploring a world where every performance tells a story.', NULL, '#E7CCCC', 'stanisland.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
