-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 06:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuri_art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblacrylics`
--

CREATE TABLE `tblacrylics` (
  `paintingid` int(11) NOT NULL,
  `acrylicpicture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblacrylics`
--

INSERT INTO `tblacrylics` (`paintingid`, `acrylicpicture`, `name`, `description`, `price`) VALUES
(1, 'C:xampphtdocszamuri artpictureszar2ac.jpeg', 'Acrylic Painting Name', 'Description of the acrylic painting', 50.00),
(2, 'pictures/boat.jpeg', 'Serene Waters', 'Serene Waters\" captures the tranquil beauty of a boat gently moored at a peaceful lake dock. The painting portrays the stillness of the water, reflecting the serene blue sky above. Soft ripples ripple outward from the boat, adding a sense of movement to the otherwise calm scene. The dock extends invitingly into the water, hinting at the peaceful moments spent by the lakeside. This artwork invites viewers to immerse themselves in the quietude of nature and appreciate the simple beauty of the world around us.', 50000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `adminname` varchar(255) DEFAULT NULL,
  `Adminusername` varchar(255) DEFAULT NULL,
  `mobilenumber` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `ID` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `paintingname` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `payments` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblencaustic`
--

CREATE TABLE `tblencaustic` (
  `paintingid` int(11) NOT NULL,
  `encausticpicture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblencaustic`
--

INSERT INTO `tblencaustic` (`paintingid`, `encausticpicture`, `name`, `description`, `price`) VALUES
(1, 'C:xampphtdocszamuri artpictureszar2ac.jpeg', 'Acrylic Painting Name', 'Description of the acrylic painting', 50.00),
(2, 'pictures/encaustic.jpg', ' Ethereal Encaustic Harmony', '\"Ethereal Encaustic Harmony\" is a mesmerizing encaustic painting that transports viewers to a realm of ethereal beauty and tranquility. Created using the ancient technique of encaustic art, this masterpiece is a symphony of color and texture. Layers of molten beeswax infused with pigments are meticulously applied to the surface, resulting in a luminous and multidimensional composition. Delicate wisps of translucent wax dance across the canvas, creating a sense of movement and fluidity. Soft hues of blues, greens, and purples blend seamlessly, evoking a serene atmosphere reminiscent of a dreamlike landscape. The tactile quality of the wax adds tactile depth, inviting viewers to explore the painting\'s intricate details with their senses. \"Ethereal Encaustic Harmony\" is a testament to the timeless allure of encaustic art, capturing the essence of beauty and harmony in a mesmerizing visual experience.', 70000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tblimpasto`
--

CREATE TABLE `tblimpasto` (
  `paintingid` int(11) NOT NULL,
  `impastopicture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblimpasto`
--

INSERT INTO `tblimpasto` (`paintingid`, `impastopicture`, `name`, `description`, `price`) VALUES
(1, 'C:xampphtdocszamuri artpictureszar2ac.jpeg', 'Acrylic Painting Name', 'Description of the acrylic painting', 50.00),
(2, 'pictures/addimpasto.jpeg', 'Serene Impasto Horizon', '\"Serene Impasto Horizon\" is a captivating landscape painting crafted with the dynamic technique of impasto. Bold and expressive brushstrokes create a rich texture that invites viewers to immerse themselves in the scene. Layers of thick paint are applied with fervor, building depth and dimension within the composition. The serene horizon stretches across the canvas, bathed in the warm glow of the setting sun. Vibrant hues of oranges, yellows, and reds dance harmoniously, capturing the beauty of a tranquil evening sky. Each brushstroke captures the essence of nature\'s majesty, from the gentle sway of the trees to the distant mountains silhouetted against the twilight sky. As light dances across the textured surface, \"Serene Impasto Horizon\" radiates a sense of peace and serenity, inviting viewers to escape into its captivating beauty.', 45000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbloilpainting`
--

CREATE TABLE `tbloilpainting` (
  `paintingid` int(11) NOT NULL,
  `oilpaintingpicture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbloilpainting`
--

INSERT INTO `tbloilpainting` (`paintingid`, `oilpaintingpicture`, `name`, `description`, `price`) VALUES
(1, 'C:xampphtdocszamuri artpictureszar2ac.jpeg', 'Acrylic Painting Name', 'Description of the acrylic painting', 50.00),
(2, 'pictures/woman.jpg', 'Captivating Contrasts', 'Captivating Contrasts\" depicts a woman holding a bottle, capturing the juxtaposition of strength and vulnerability. The painting showcases the woman\'s poised demeanor as she gazes into the distance, her expression a blend of mystery and introspection. Her graceful posture and confident stance contrast with the delicate curves of the bottle she holds, symbolizing fragility and transience. The interplay of light and shadow adds depth to the composition, emphasizing the complexity of human emotions and experiences. Through subtle brushstrokes and nuanced details, this artwork invites viewers to contemplate the intricacies of the human condition and the interplay between strength and fragility in our lives.', 50000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', 'Our University Admission Management system is a comprehensive and efficient solution designed to streamline and automate the university admission process. Our platform empowers universities to seamlessly manage and organize student applications, evaluate candidates, and facilitate communication with prospective students. With user-friendly interfaces and robust features, our system simplifies the complex tasks associated with admissions, ensuring a smooth and transparent experience for both applicants and university staff. By leveraging cutting-edge technology, we aim to revolutionize the admissions process, enabling universities to focus on their core mission of providing quality education while attracting the best-suited candidates', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', 'Street No. 6, Sector B, Vrindavan Colony, Lucknow', 'siddiquizaid213@gmail.com', 9795285894, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `emailaddress` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblwoodcarving`
--

CREATE TABLE `tblwoodcarving` (
  `paintingid` int(11) NOT NULL,
  `woodcarvingpicture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblwoodcarving`
--

INSERT INTO `tblwoodcarving` (`paintingid`, `woodcarvingpicture`, `name`, `description`, `price`) VALUES
(1, 'C:xampphtdocszamuri artpictureszar2ac.jpeg', 'Acrylic Painting Name', 'Description of the acrylic painting', 50.00),
(2, 'pictures/download.jpeg', 'koly', 'poop', 9000.00),
(3, 'pictures/download.jpeg', 'koly', 'poop', 9000.00),
(4, 'pictures/download (1).jpeg', 'koly', 'gop', 9000.00),
(5, 'pictures/download (1).jpeg', 'koly', 'gop', 9000.00),
(6, 'pictures/art.jpg', 'Sylvan Serenade', 'Sylvan Serenade captures the essence of nature\'s symphony, where abstract strokes blend harmoniously to depict the silhouette of a majestic tree against a vibrant sky. Delicate swirls and dashes evoke the fluttering of birds in flight, adding a sense of movement and life to the serene landscape. This painting invites viewers to immerse themselves in the tranquil beauty of the natural world, where every brushstroke whispers a tale of freedom and tranquility', 20000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblacrylics`
--
ALTER TABLE `tblacrylics`
  ADD PRIMARY KEY (`paintingid`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblencaustic`
--
ALTER TABLE `tblencaustic`
  ADD PRIMARY KEY (`paintingid`);

--
-- Indexes for table `tblimpasto`
--
ALTER TABLE `tblimpasto`
  ADD PRIMARY KEY (`paintingid`);

--
-- Indexes for table `tbloilpainting`
--
ALTER TABLE `tbloilpainting`
  ADD PRIMARY KEY (`paintingid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblwoodcarving`
--
ALTER TABLE `tblwoodcarving`
  ADD PRIMARY KEY (`paintingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblacrylics`
--
ALTER TABLE `tblacrylics`
  MODIFY `paintingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblencaustic`
--
ALTER TABLE `tblencaustic`
  MODIFY `paintingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblimpasto`
--
ALTER TABLE `tblimpasto`
  MODIFY `paintingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbloilpainting`
--
ALTER TABLE `tbloilpainting`
  MODIFY `paintingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblwoodcarving`
--
ALTER TABLE `tblwoodcarving`
  MODIFY `paintingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
