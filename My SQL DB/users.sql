-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

DROP DATABASE users;
CREATE DATABASE users;
-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `massege` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `phone`, `email`, `subject`, `massege`) VALUES
('ahmed', 1125733734, 'ahmedxmohammed12@goo', 'nlj', 'ojbjhibupb'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', 'kknon', 'm;mplml'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', 'kknon', 'm;mplml'),
('ragb', 1125733734, 'ragb@gmail.com', 'nlj', 'qwedcoqeyixrffoi2QEAHSOI'),
('1234', 1223, 'jknjkn@jjjj', 'mkjnkj ', 'kkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `car_num` int(11) NOT NULL,
  `name` text NOT NULL,
  `model` text NOT NULL,
  `caption` text NOT NULL,
  `img` text NOT NULL,
  `price` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`car_num`, `name`, `model`, `caption`, `img`, `price`, `views`) VALUES
(1, 'Toyota', 'GR Supra', "Toyota strives to build vehicles to match customer interest and thus they typically are built with popular options and option packages. Not all options/packages are available separately and some may not be available in all regions of the country. If you would prefer a vehicle with no or different options, contact your dealer to check for current availability or the possibility of placing a special order. Some vehicles are shown with available equipment. Seatbelts should be worn at all times. For details on vehicle specifications, standard features and available equipment in your area, contact your Toyota dealer. A vehicle with particular equipment may not be available at the dealership. Ask your Toyota dealer to help locate a specifically equipped vehicle. All information presented herein is based on data available at the time of posting, is subject to change without notice and pertains specifically to mainland U.S.A. vehicles only (may differ in the state of Hawaii, Puerto Rico, the U.S. Virgin Islands and in other regions).", 'carimgs/1.png', 4404000, 5),
(4, 'Bugatti', 'Veyron EB 16.4', "The Bugatti Veyron EB 16.4 is a mid-engine sports car, designed and developed in Germany by the Volkswagen Group and Bugatti and manufactured in Molsheim, France, by French automobile manufacturer Bugatti. It was named after the racing driver Pierre Veyron.<br />\r\n<br />\r\nThe original version has a top speed of 407 km/h (253 mph).[6][7] It was named the 2000s Car of the Decade by the BBC television programme Top Gear. The standard Veyron also won Top Gear\'s Best Car Driven All Year award in 2005.<br />\r\n<br />\r\nThe Super Sport version of the Veyron is one of the fastest street-legal production cars in the world, with a top speed of 431.072 km/h (267.856 mph).[8] The Veyron Grand Sport Vitesse was the fastest roadster in the world, reaching an averaged top speed of 408.84 km/h (254.04 mph) in a test on 6 April 2013.[9][10]<br />\r\n<br />\r\nThe Veyron\'s chief designer was Hartmut Warkuß, with the exterior being designed by Jozef Kabaň of Volkswagen. Much of the engineering work was conducted under the guidance of chief technical officer Wolfgang Schreiber. The Veyron includes a sound system designed and built by Burmester Audiosysteme.[11]<br />\r\n<br />\r\nSeveral special variants have been produced. In December 2010, Bugatti began offering prospective buyers the ability to customise exterior and interior colours by using the Veyron 16.4 Configurator application on the marque\'s official website.[12][13] The Bugatti Veyron was discontinued in late 2014, but special edition models continued to be produced until 2015.", 'carimgs/4.jpg', 3300000, 1),
(5, 'lamborghini', 'AVENTADOR LP 780-4 ULTIMAE', 'The latest version of Aventador is not only powerful, it is the most powerful Aventador ever made. With the highest-performing standard-production naturally aspirated V12 engine in Lamborghini history, it incorporates advanced technological solutions and unparalleled design. This gem, to be produced in only 350 units, is the final—and greatest—expression of a family of super sports cars that has left its mark on the last decade.<br />\r\nAventador LP 780-4 Ultimae is already a classic transformed into an icon.<br />\r\n<br />\r\nAvailability of the Lamborghini models may vary depending on the country. For more information, contact your local dealer.', 'carimgs/5.jpg', 1099996, 16),
(6, 'Mercedes-Benz', 'G-Class', "There are plenty of ways to get dirty, but the Mercedes-Benz G-class is truly the fanciest way to crawl through the muck. Built like a champagne-sipping Ford Bronco or Jeep Wrangler, the Geländewagen has a lavish interior with massaging seats and a six-figure starting price to match. Every G550 is powered by a 416-hp twin-turbo V-8 with a nine-speed automatic transmission. Four-wheel drive is standard. For more power, there's the 577-hp AMG-badged G63, reviewed separately. The G Wagen is capable of wilder adventures than its occupants would likely volunteer for. Its 9.5 inches of ground clearance and three locking differentials make it feel as if it\'s unable to ever get stuck. Its boxy shape results in a spacious cabin with plenty of legroom for every passenger, but at the cost of highway fuel economy. That said, the cost of fuel isn't likely to burden the likes of the Kardashians, Sylvester Stallone, or other Hollywood stars often found behind the wheel of this elite off-roader.", 'carimgs/6.jpg', 139900, 2),
(7, 'Rolls-Royce', 'Black Badge Ghost', "With the Black Badge test vehicle provided to Hagerty last week, Rolls-Royce has managed to do the nearly impossible; it’s made the plain-Jane Ghost that I drove a year and a half ago seem like a cracking value. Don’t believe me? Well, that 2021 Ghost, sans the black badge, had a base price of $332,500 and an as-tested ticket of $361,125. That’s serious money, but this 2022 Black Badge eclipses it by the price of a well-equipped S-Class Benz, with a base of $393,500 and a post-options damage report of $484,950.<br />\r\n<br />\r\nAs a potential Ghost customer, you’re probably an exceptionally important person whose time is money, so let me end this review for you right now: Just get the regular Ghost, the Black Badge isn’t worth the money.<br />\r\n<br />\r\nThanks for reading. Wait—you’re still here? Okay, we can continue. And perhaps we should continue, because when it comes to Rolls-Royces it’s not always as simple as “save yourself $123K and buy a normal one.” Many potential Black Badge owners already own a standard Ghost. They’re looking to fill a driveway at a second home, or park a car at a cherished private airport, or maybe just have a spare car around for when the au pair needs to make a Whole Foods run. Conventional notions of value and return-on-investment don’t necessarily apply.", 'carimgs/7.jpg', 492250, 1),
(8, 'Dodge', 'Challenger Shakedown Revealed', "Dodge is revealing the first of the brand\'s \"Last Call\" lineup of seven special-edition 2023 models, drawing a line back to 2016 to celebrate an iconic Dodge concept vehicle with the special-edition 2023 Dodge Challenger Shakedown.<br />\r\n<br />\r\nThe 2023 Dodge Challenger Shakedown pays tribute the original Dodge Shakedown Challenger concept, which shook up the display floor when unveiled at the 2016 Specialty Equipment Market Association (SEMA) Show in Las Vegas. The special-edition 2023 Dodge Challenger Shakedown follows the original\'s theme of a black-and-red interior and exterior that fuses a modern and vintage feel.<br />\r\n<br />\r\nDodge Last Call special-edition models celebrate the Dodge Challenger and Dodge Charger, which in their current form are coming to an end. Six special-edition Challenger and Charger models will be revealed through September 21, 2022. The seventh and final 2023 Dodge model — the very last of its kind — will be revealed at the 2022 SEMA Show in Las Vegas, scheduled for Nov. 1-4, 2022.<br />\r\n<br />\r\nDodge Speed Week may be over, but our brand is far from finished in shaking up the muscle car world, said Tim Kuniskis, Dodge brand chief executive officer – Stellantis. We\'re following up Speed Week reveals of the future of electrified muscle in the Dodge Charger Daytona SRT Concept and our first electrified vehicle in the 2023 Dodge Hornet R/T by announcing six special, commemorative-edition models in a little over a month.", 'carimgs/8.jpg', 70000, 2),
(9, 'Tesla', 'Model 3', "The Model S Plaid has a tri-motor all-wheel-drive electric powertrain with 1,020 horsepower -- meaning that it can get you from 0-60 in less than two seconds. That\'s high-powered acceleration! Tesla boasts on their site that the Model S Plaid has the quickest acceleration of any vehicle in production and a drag coefficient of 0.208 Cd, the lowest on the planet.If you\'re all about speed, power, and endurance, this is the car for you. However, keep in mind that the Model S Plaid can only reach the top speed of 200 mph with paid hardware upgrades, so make sure to factor that in when budgeting.<br />\r\n<br />\r\nOne feature of the Model S that stands out is its adaptive suspension. The car reacts to road conditions and driver actions to optimize ride quality, automatically adjust ride height, and maximize range. Cool extra feature: The back seats fold down, giving you enough space to fit a bike or two inside the car. ", 'carimgs/9.jpg', 41990, 4),
(10, 'Hummer', 'ev', "GMC\'s electric Hummer is a whole new kind of electric vehicle. It isn\'t sleek and sporty like a Tesla, nor is it compact and cost-effective like a Chevy Bolt. And even though it\'s a pickup truck, it isn\'t built for the job site like a Ford F-150 Lightning. <br />\r\n<br />\r\nThe Hummer EV is more like the electric equivalent of a boxy Mercedes G-Wagen or a lifted diesel truck. It\'s big, brash, and extreme just for the hell of it. <br />\r\n<br />\r\nA weekend with the $113,000 behemoth proved it\'s one of the silliest vehicles on the market — electric or otherwise. But I\'d be lying if I said I didn\'t have a blast. ", 'carimgs/10.jpeg', 113000, 1),
(11, 'Jeep', 'Wrangler', "The Wrangler picks up a mild visual and tech update for 2024, with an updated grille and no fewer than 10 new wheel designs. Inside, a new 12.3-inch infotainment display is standard across the board and replaces the smaller 5.0- and 7.0-inch screens from last year\'s Wranglers. The new display also features Jeep\'s latest infotainment software, as well as wireless Apple CarPlay and Android Auto. The onboard navigation system includes mapping for over 2000 trails, with the ability to download even more. Jeep has integrated a more robust active noise-cancellation feature to help quiet the cabin for phone calls. The plug-in hybrid 4xe powertrain can now be had on Sport and Rubicon X trims; hybrid models also gain a 3.6-kilowatt auxiliary battery to run accessories.", 'carimgs/11.jpg', 58947, 4),
(12, 'BMW', 'XM', "The 2024 BMW XM SUV is on an ambitious mission to target the pinnacles of performance and luxury simultaneously. Behind its overwrought snout lies a twin-turbocharged V-8 that\'s enhanced by a plug-in hybrid system, which combine to produce up to 738 horsepower. The result is a rocket, capable of hitting 60 mph in as little as 3.7 seconds. It can also motor itself around on electric power alone if you only need to run a few errands. And you might just choose the XM for such tasks since its cabin is richly trimmed, comfortable, and spacious. BMW has added all of its most desirable tech features too, including a curved dashboard display and the latest driver-assistance systems. While it\'s quick in a straight line, the XM isn\'t as joyful to drive as the company\'s vaunted M3 and M5 sports sedans. But if corner-carving isn\'t on your driving menu, the XM\'s got panache and power out the wazoo and we\'ll be damned if we can find fault with that.", 'carimgs/12.jpg', 159000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `name`, `password`, `email`, `admin`, `profile`) VALUES
('123', '', '123456', '', 0, 'img/blank-profile.png'),
('ahmed', 'ahmed', 'no', 'no@no', 1, 'img/ahmed.jpg'),
('hamed', 'hi', 'kk', 'uuujj', 0, 'img/blank-profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`car_num`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `car_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
