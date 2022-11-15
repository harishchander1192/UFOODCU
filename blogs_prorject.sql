-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 08:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs_prorject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addblog`
--

CREATE TABLE `addblog` (
  `id` int(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Categories` varchar(30) NOT NULL,
  `blog` longtext NOT NULL,
  `fullblog` longtext NOT NULL,
  `image` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL,
  `uidblog` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addblog`
--

INSERT INTO `addblog` (`id`, `Title`, `Categories`, `blog`, `fullblog`, `image`, `time`, `status`, `uidblog`) VALUES
(28, ' A First Timer’s Guide to Goa, India', 'Travel', ' Even though Goa is the smallest state on the Western coast of India, it is one of the most popular due to its rich heritage,', ' warm and friendly people, tropical climate, scenic beaches and exotic handicraft.\r\n\r\nBack in the 60’s & 70’s, the North of the island became a hippy-haven, a place to escape everyday life and quickly became somewhere for backpackers to hang out and party.\r\n\r\nFor people travelling India alone, it was the perfect introduction. Naturally, the more popular a place becomes, the more it changes and over time.\r\n\r\nThe North now seems to be associated with high-rise hotels, watersports, street markets and cultural buildings but it also still retains its party-vibe.\r\n\r\nGoa was recommended to us by someone when we were holidaying in Morocco, so we carried out some research on which was the best resort to stay – North or South?\r\nWe tapped Goa onto the end of a week touring the Golden Triangle and were looking for something quieter, relaxing and less developed – with all this in mind, we were advised to head South and chose Cavelossim Beach at the Dona Sylvia Beach Resort.\r\n\r\nTo ensure the area doesn’t become monopolised with high-rise hotels in the North, the resorts around Cavelossim are not allowed to be more than two storeys high.\r\nThey attempted to coax us into their beach shacks but after all the haggling in Rajasthan we simply wanted to relax and walk – shopping would come later.\r\n\r\nWhilst we were in Goa, we celebrated our 2nd wedding anniversary so we headed to the beach for sunset with a bottle of champagne. The sky turned from pastel peach to oranges then pink – it was the perfect end to our special day.\r\nhe Goan’s are renowned for their fine multi-cultural cuisine and we both absolutely loved the culinary masterpieces served up at the resort every single time we dined.\r\n\r\nThey whip up everything possible with various types of veg and we piled this high onto our plates – this is unusual for us, we love our meat!!\r\n\r\nOutside the resort was a small road with shops and a few bars. We always had fun talking and joking with the locals, they really made us feel part of the community and quickly recognised our faces.\r\n\r\nOne night we stopped for a beer and cocktail at the Jazz Inn which, bizarrely, had a big frangipani tree growing through the middle of it! We grooved to the cool tunes played by the DJ who was also a Bob Marley impersonator from Birmingham, England.\r\n\r\nWe had a great chat with him and discovered he spends 6 months a year in Goa.\r\n\r\nOn one occasion we caught an auto-rickshaw as a taster of true India, it was hilarious! We laughed the entire journey!\r\n\r\nThe night sky was pitch black and our vehicle barely lit the way with its tiny headlamps – goodness knows how he could see! It was loud, crazy and filthy dirty, my hair looked like a scarecrow when we finished! The driver was so proud at how quickly we had reached our destination!\r\n\r\nWe had to shower when we were back to our hotel as we felt so disgusting – but the journey was well worth it!', 'images/goa.jpg', '2022-10-13 13:32:52', 'Approved', 6),
(29, ' GOLDEN TEMPLE OF AMRITSAR – INDIA’S SHINING STAR', 'Temple', ' Amritsar is located in Punjab and is 460 km from Delhi. We spent 12 hours on a slow train in general class where locals welcomed us offering food and even', ' their seats to make us more comfortable. We knew this trip was going to be special before we even arrived.\r\n\r\nMen and Women must cover their heads out of respect before entering the Golden Temple. Long pants and shoulders should also be covered.\r\n\r\nLike many other holy places around, shoes are not allowed in the temple complex. But this temple has a little twist to walking barefoot. Before entering you walk through a foot bath to ensure your feet are clean.\r\n\r\nThe Golden Temple temple is free to enter. In my humble opinion, I think the Sikh Religion is probably one of the least understood religions on the planet. We learned quite a bit during our time at the Golden Temple. And we’d like to share what we learned about Sikhism there.\r\n\r\nFounded in the 15th century by Guru Nanak’s frustration with the caste system and rituals of other religions, Sikhism was formed to be all-inclusive. Much of the religion is also based on science.\r\n\r\nUnlike The Pope of Catholicism or The Dalai Lama of Buddhism, a woman can lead the Sikhs if she is elected. Women have complete equality and can even be the head of the religion. The Sikh religion is a democracy and anyone can rule it. You don’t have to be born or ordained as the head of the religion, you are elected to a committee. If people are not happy with your work, you can be replaced in the next election.\r\n\r\nThe Sikhs are all-inclusive and that is evident at The Golden Temple. The people at the Golden Temple were happy to share their views and to explain their religion to us. As more people explained Sikhism to us, we began to understand its meaning. One of the holi sites at the Golden Temple is the Holy Tree. One of the most revered Sikh Gurus, Baba Budha Ji laid the foundation of the Golden Temple after sleeping under a shrub.\r\n\r\nIn 1506 he camped under this exact tree that is still standing today. And many people stop to pay their respects. He also constructed the moat, known as the holy tank that surrounds the temple. It is filled with holy water and people bath in the tank to wash away sins and keep illness away.\r\n\r\nMen bathe in the open, but women have a private area where they bathe in private. Once people have bathed, they then walk across the most to enter the central temple, the Harmandir Sahib e golden temple itself – Harmandir Sahib, is surrounded by other milky white temples and the moat. It is not a large temple, but it is stunning, t has lasted through the ages, but only because the Sikhs continued to rebuild it after it was destroyed by Afghan armies and the Mughal Empire. It was in 1809 that it was finally rebuilt by Maharaja Ranjit Singh and covered with gold foil which gave it its name The Golden Temple.\r\n\r\nA marble walkway surrounds the temple protecting it on all four sides. Many people were happy to have us visit their shrine to Sikkhism and to experience their way of life. They stopped to take photos with us. They stopped to talk to us and to tell us the history of Sikhism and they stopped to simply welcome us to their home.', 'images/323.jpg', '2022-10-13 13:38:57', 'Approved', 6),
(30, ' Early Cricket (Pre 1799)', 'Sports', ' Cricket history is particularly murky and vague as to the exact origins of the game, it is believed to have been born in England in the late middle ages.\r\n\r\n', ' Edward III banned a game similar to cricket in 1369, ‘pila baculorea’ or ‘club ball’ as it was known, as he saw it as being a distraction to his war effort.\r\n\r\nDerek Birley in his wonderful book, ‘A Social History of English Cricket’ suggests the game came to England with the French during the time of the Norman Invasion, that their word ‘criquet’ was the dialect name for a variation of club ball, the game Edward the III had sought to eradicate.\r\n\r\nThere is record of the word ‘creag’ as a derivative of the word creaget in 1299-1300 in the Royal Wardrobe Accounts, for the then Prince Edward the II to play ‘creag’ and other games.\r\n\r\nThere is no evidence that creag was the same as criquet, the links are too tenuous and games rarely appear in any records of this time unless the aristocracy were playing them or trying to have them eradicated as being morally degenerate.\r\n\r\nCricket is first recorded as a game played by schoolboys in Guildford in the sixteenth century and is found recorded in an Italian -English dictionary in 1598. The game by 1611 was being played by adults, it is recorded that two men were prosecuted for playing cricket instead of attending church.\r\n\r\nOn a similar theme, in 1628 ten men were fined for playing cricket rather than attending church service, they also had to make a confession to the congregation as way of penance.\r\n\r\nAs the game continued to evolve amongst the working classes and the aristocracy, gambling became central to its growth.\r\n\r\nThe aristocracy in particular, had seen in it, a game with the obvious attributes to bet on its outcomes. Teams were assembled under the patronage of Aristocrats and purses were put up for ‘great matches’.\r\n\r\nIn 1696, ‘ a great match at Cricket was played in Sussex, they were eleven of a side, and they played for fifty guineas apiece’.\r\n\r\nThe game had been growing both within the english upper classes and as a genuine recreational past time for rural workers in the southern counties of England.\r\n\r\nThe composite teams that were beginning to be assembled for ‘great matches’ during this period of the early 1700’s, were crossing the class divides; as the purses played for encouraged the nobility that were patronizing the teams, to employ the best players that could be found.\r\n\r\nThus, rural workers who had become adept at the game were being employed to play as ‘hands’ for the aristocracy and were travelling for their employ.\r\n\r\nAt this time London, particularly North London, can lay claim to being the cradle of the game as matches staged in Islington at White Conduit Field had a ‘field keeper’ for cricket and the Angel Inn as part of its amenities.\r\n\r\nIn 1718 a match at White Conduit Field brought cricket into the law courts after a dispute between the two teams.\r\n\r\nThe other area to lay claim to the ‘Cradle of Cricket’ was Hambledon in Hampshire, where the matches staged at the Broad Down of Halfpenny were where cricket began to ‘ assume that truly skilful and scientific character which it now possesses.’\r\n\r\nThe men of Hambledon were immortalised in the writing of John Nyren, who captured the spirit of the club, its segregation between the classes and its rich and varied club life.\r\n\r\nThe game continued to spread through England as the provincial towns grew with industrialization, with the first recorded game in Yorkshire played in the 1750’s. By 1744 the Laws of Cricket had been codified and in 1788 the laws were revised by the Marylebone Cricket Club, they covered the length of the pitch, the distance between creases, wicket size, and ball weight.\r\n\r\nAfter 1760 the game saw the evolution of over arm bowling, replacing under arm bowling as the main way to deliver the ball. The game began to see the use of various lengths utilised by bowlers and the development of the craft of batting, as batters sought to respond to new bowling techniques.\r\n\r\nThe ‘Straight Bat’ was introduced as part of this counter to new bowling techniques, the old bent ‘hockey stick’ style of bat went out of fashion.\r\n\r\nSee the pictures here from a display at the Lords Museum that show the bats evolution', 'images/cricket.jpg', '2022-10-13 13:49:01', 'Approved', 5),
(31, ' PUBG Game ', 'Games', ' PUBG Game is known multiplayer unknown’s battle ground is online multiplayer battle royale games developed and publish by PUBG Corporation,', ' a subsidiary of South Korean video game company Bluehole. The founder of PUBG game is Brendan Greene. He designed the astounding game ever, PUBG is the lead director editor, Cinematographer of the game. With this game, he has gained massive popularity among gaming Personnel.Game play battleground is a player versus player shooter game in which up to one hundred player fight in a battle royale, a type of large- scale last man standing death match. Where players fight to remain the last alive. Players can choose to enter the match solo, duo or with a small team of up to four people. The main strategy was double dip digital marketing. It means they give the game to lots of streamers for playing on their twitch and YouTube channel. Since, streamers loved that game a lot, it. Spread among them and then made the other gamers and viewers buy that. This was the best move that made PUBG this successful. PUBG was banned in certain cities of Gujarat after the police commissioner notified the citizen of these developments. The ban was sustained on these grounds. Players of PUBG mobile of Pubg addiction has caused students to fail due to peer pressure.\r\n\r\nRead More Blog:- Taj Mahal Night Tour Information ubg has been under scrutiny for being a violent game. Excessive violence can trigger aggressive thoughts, emotions, and behavior that ultimately affect the mental health of the player.ubg fever is in the air the delirium has reached to levels where teenage has even committed suicide when this might be extreme, people prioritizing playing the game over other daily stuff is commonplace. he report also started that a mental imbalance triggered because of a gaming addiction was not new, as this now marks the sixth time such a case has occurred. Pubg mobile is one of the most popular games in India. So it no surprise if there are cases of Players who have gotten addicted to the gameAlready around 87% of Americans are online and the world will be connected by so many more devices. Analysts believe that while in 2009 around one billion were connected this figure will explode to more than 25 billion in 2020. Gaming/ gambling laws in India prohibit betting or wagering and any act which is intended to aid or facilitate the father, playing certain gaming including “Poka” both online and ofline is permitted under the law of west Bengal, Nagaland and Sikkim subject to license from the appropriate state authorities.', 'images/pubg.jpg', '2022-10-13 13:52:47', 'Approved', 6),
(33, ' Ancient History', 'Army', ' he distinguished history of Indian Army dates back more than ten thousand years. ', ' The two grand epics of ‘Ramayana’ and ‘Mahabharata’ The Sino-Indian War of 1962 and the national humiliation was the result of the policy of appeasement of the Chinese and the bias against the military. The military also failed by acquiescing to a policy they knew to be militarily and politically unsound. Strength of the Indian Army in August 1947 was 4,00,000 but the political leadership was keen to reduce the strength to save defence expenditure and hence it was decided to bring down the strength of the Army to 2,00,000 after the Jammu and Kashmir (J&K) Operations which would involve the disbandment of many units. A new Territorial Army Act was passed in 1948 and infantry and artillery units with a nucleous of regular officers were raised in 1949. Many other changes occurred during the period from 1948 to 1960. The designation of Commander-in-Chief ceased to be in use from 1955 and the three Chiefs (Army, Navy and the Air Force) were made equal and independently responsible for their respective service. Every function of the Defence Services was duplicated in the Ministry of Defence where civilian bureaucrats not only ensured financial and administrative control but also gradually took over the decision making powers of the defence services. The standing of the military reached an all time low during the time of Krishna Menon as defence minister when decisions concerning matters of major military importance were taken without consultation of the concerned service. Nehru’s bias against the military was well known in the Services. The clearest example of this is when Cariappa outlined his plan for the security of NEFA, after China had occupied Tibet, Nehru flared up and thumping the table said “It is not the business of the C-in-C to tell the Prime Minister who is going to attack us where. You mind only Kashmir and Pakistan.” Nehru continued to appease the Chinese and the untimely death of Sardar Patel took away all opposition to Nehru’s views. The Sino-Indian War of 1962 and the national humiliation was the result of this policy and the bias against the military. The military also failed by acquiescing to a policy they knew to be militarily and politically unsound. From Trauma to Victory - Period 1961 to 1971 The period 1961 to 1971 was one of the most traumatic periods of the Indian Army. The defeat in 1962 shook the foundation of the nation and the armed forces. The army began to introspect to overcome its weaknesses. The 1965 war helped the army to redeem itself but revealed embarrassing weaknesses in its equipment and its training and even leadership at various levels. These two wars spurred the political leadership to modernize and expand the services. As 1970 came to a close, the Indian Army was now ready to face new challenges emerging on the horizon. 1971 War resulted in creation of a new nation - Bangladesh and a decisive military victory in which 93,000 prisoners of war were taken. While many books have been written to describe each battle in detail, it is the spirit of the soldiery during this campaign that deserves mention. In the words of Sydney Schanberg of New York Times, who accompanied Indian troops in two sectors – ‘I don’t like sitting around praising armies. I don’t like armies because armies mean wars – and I don’t like wars. But this (the Indian) army was something..... They were great all the way. There was never a black mark…. I lived with the officers and I walked, rode with the jawans – and they were all great ... And they were the most perfect gentlemen- I have never seen them do a wrong thing – not even when they just saw how bestial.', 'images/63.jpg', '2022-10-13 14:00:18', 'Approved', 6),
(45, ' secret trend', 'Games', '  this is my shopthis is my shopthis is my shopthis is my shop', ' i love my shop this is my shopthis is my shopthis is my shopthis is my shopthis is my shopthis is my shopthis is my shop', 'images/SECRE.png', '2022-11-04 13:20:41', 'Draft', 6);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `firstN` varchar(50) NOT NULL,
  `lastN` varchar(50) NOT NULL,
  `cmtStatus` varchar(50) NOT NULL,
  `uids` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `firstN`, `lastN`, `cmtStatus`, `uids`) VALUES
(42, 'Goa is best place for me....', 'rahul', 'kumar', 'Accpet', 28),
(43, 'I want to visit goa', 'rahul', 'kumar', 'Accpet', 28),
(44, 'Best game ever i seen ', 'harish', 'chander', 'Accpet', 31),
(45, 'love this game ', 'harish', 'kumar', 'Reject', 31),
(46, 'teatinngg', 'rahul', 'chander', 'Accpet', 31),
(79, 'hye there', 'rahul', ' kumar', 'Accpet', 28),
(80, 'hye there 1', 'test', ' testingb', 'Accpet', 28),
(81, 'love this game ', 'rahul', 'kumar', 'Accpet', 31),
(82, 'I love Goa ', 'sonalika ', ' sagar', 'Accpet', 28),
(83, 'I love Goa ', 'sonalika ', ' sagar', 'Accpet', 28),
(84, 'Cricket is love ', 'test', ' testingb', 'Accpet', 30),
(85, 'Cricket is love ', 'test', ' testingb', 'Reject', 30),
(86, 'hey test', 'demoq', ' demo', 'Reject', 28);

-- --------------------------------------------------------

--
-- Table structure for table `singupacc`
--

CREATE TABLE `singupacc` (
  `id` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `accStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singupacc`
--

INSERT INTO `singupacc` (`id`, `fname`, `lname`, `uname`, `email`, `pass`, `rol`, `accStatus`) VALUES
(6, 'rahul', 'kumar', 'rahul123', 'rahul12@gmail.com', 'Rahul@123', 'Author', 'Accpet'),
(12, 'demoq', 'demo', 'demo', 'demo@demo.com', 'Demo@12345', 'Admin', 'Accpet'),
(13, 'sonalika ', 'sagar', 'sr9802', 'sonalikasharrot@gmail.com', 'Sonalika9802@', 'User', 'Accpet'),
(15, 'test', 'testingb', 'test123', 'demo@demo12.com', 'Harish@7051', 'Author', 'Reject'),
(16, 'shivam', 'sharma', 'shivam123', 'shivam@gmail.com', 'Shivam@123', 'User', 'Reject'),
(17, 'Ankit ', 'sharma', 'ankit121', 'ankitchitkara121@gmail.com', 'Ankit@123', 'Admin', 'Reject'),
(18, 'Saurabh', 'Banga', 'Saurabh143', 'saurabh143@gmail.com', 'Saurabh@123', 'Author', 'Reject');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addblog`
--
ALTER TABLE `addblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singupacc`
--
ALTER TABLE `singupacc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addblog`
--
ALTER TABLE `addblog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `singupacc`
--
ALTER TABLE `singupacc`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
