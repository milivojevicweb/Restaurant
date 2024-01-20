-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 06:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idCategories` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idCategories`, `name`) VALUES
(1, 'Food'),
(2, 'Drink'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idContact` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idContact`, `name`, `email`, `phone`, `text`) VALUES
(75, 'Marko Milivojevic', 'marko.milivojevic.167.17@ict.edu.rs', '0631632894', 'Probassssssssss'),
(81, 'User User', 'user@gmail.com', '064522423453', 'Radi!!!'),
(82, 'Marko Milivojevic', 'marko.milivojevic.167.17@ict.edu.rs', '0631632894', 'Proba');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `idImages` int(255) NOT NULL,
  `idProducts` int(255) DEFAULT NULL,
  `idNews` int(11) DEFAULT NULL,
  `path` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pathOld` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`idImages`, `idProducts`, `idNews`, `path`, `pathOld`, `alt`) VALUES
(91, 120, NULL, '1585188700nova_1581469039bowl-close-up-cooked-cuisine-1150447.jpg', NULL, 'Smoke That Bowl'),
(92, 121, NULL, '1585188778nova_1581468844baking-cheese-cooking-crust-315755.jpg', NULL, 'Italian Garden Pizza'),
(93, 122, NULL, '1585189133nova_1581469139bowl-of-cooked-food-3590401.jpg', NULL, 'Chole \'n\' Jeera Rice'),
(94, 123, NULL, '1585189179nova_1581469200burger-on-top-of-brown-chopping-board-1633572.jpg', NULL, 'Omelette Cheese Sandwich'),
(95, 124, NULL, '1585189238nova_1581469247sliced-tomato-with-green-vegetables-in-brown-saucer-1639556.jpg', NULL, 'Oriental Grilled Fish'),
(96, 125, NULL, '1585189287nova_1581469294vegetable-sandwich-on-plate-1095550.jpg', NULL, 'Ultimate Burrito'),
(97, 126, NULL, '1585189378nova_1581470116baked-bread-on-white-plate-2205270.jpg', NULL, 'Sea-Salt Hazelnut Brownie'),
(98, 127, NULL, '1585189420nova_1581470154berries-blueberries-cake-cream-236804-(1).jpg', NULL, 'Chocolate Cinnamon Roll'),
(99, 128, NULL, '1585189471nova_1581470180chocolate-doughnuts-3584882.jpg', NULL, 'Choco Berry Ganache Cake'),
(100, 129, NULL, '1585189540nova_1581470207close-up-photo-of-man-holding-melting-ice-cream-cone-2333857.jpg', NULL, 'Cornetto Disc Black Forest Ice Cream'),
(101, 130, NULL, '1585189586nova_1581470244stainless-steel-fork-on-top-of-blue-ceramic-plate-1368010.jpg', NULL, 'Sea Salt Brownie Cookie'),
(102, 131, NULL, '1585189678nova_1581470269white-and-yellow-cupcake-with-fruit-toppings-1055270.jpg', NULL, 'Turtle Brownie'),
(103, 132, NULL, '1585189721nova_1581471032alcohol-background-citrus-cocktail-616834.jpg', NULL, 'Picante de la casa'),
(104, 133, NULL, '1585189804nova_1581471078alcohol-beverage-blur-brown-616836.jpg', NULL, 'Old Cuban'),
(105, 134, NULL, '1585189846nova_1581471127close-up-drinks-flora-flowers-1149302.jpg', NULL, 'Venetian spritz'),
(106, 135, NULL, '1585189885nova_1581471164ice-cream-on-clear-glass-2921019.jpg', NULL, 'Soho Mule'),
(107, 136, NULL, '1585189930nova_1581471233peppermint-tea-on-teacup-1417945.jpg', NULL, 'Tea'),
(108, 137, NULL, '1585189966nova_1581471283photo-of-lemon-in-drinking-glass-with-water-2477379.jpg', NULL, 'Bitter and Twisted'),
(109, NULL, 10, '1585190770AB5I4797_NikkiTo.jpg', NULL, 'MARCO named Hottest Restaurant & Dish in Belgrade'),
(110, NULL, 11, '1585191578Quay-Qantas-PDR-Award.jpg', NULL, 'MARCO NAMED BEST NEW PRIVATE DINING ROOM'),
(111, NULL, 12, '1585191732AB5I4724_NikkiTo.jpg', NULL, 'THE MARCO TO LUNCH'),
(112, NULL, 13, '1585191915AB5I6799_NikkiTo.jpg', NULL, 'INTRODUCING BRIDGECLIMB PINNACLE'),
(113, NULL, 14, '1585192052Quay-closure.jpg', NULL, 'MARCO TEMPORARY CLOSURE'),
(114, NULL, 15, '1585192491AB5I9337_NikkiTo.jpg', NULL, 'NEW BENCHMARK WINE PAIRING');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idNews` int(255) NOT NULL,
  `header` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `idUsers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idNews`, `header`, `description`, `content`, `created`, `updated`, `idUsers`) VALUES
(10, 'MARCO named Hottest Restaurant & Dish in Belgrade', 'Marco was named 2019 Hottest Restaurant and Hottest Dish in Belgrade by Marko Milivojevic in the Zdravka Celara 12.', '<p>Marco was named 2019 Hottest Restaurant and Hottest Dish in Belgrade by Marko Milivojevic in the Zdravka Celara 12.</p>\r\n\r\n<p><em><strong>We awarded it: Hottest Restaurant | Hottest Restaurant NSW | Hottest Dish</strong></em></p>\r\n\r\n<p><em>The 2018 relaunch of MARCO, for so long the quintessential destination for haute dining, Belgrade style, represented so much more than finally doing justice to an extraordinary site with a visionary kitchen team. It put a rocket up one of the world&rsquo;s great chefs, Marko Milivojevic. Not that he necessarily needed it. But the degustation format, in this inspired, now-luxurious eyrie above Circular MARCO, just seems to have given the chef and his team a new spring in their step. You come here for brilliant service, great views, a wine team without parallel, sure, but what really sets MARCO apart is Gilmore&rsquo;s fusion of ideas and technique, the way he can create such intensity yet still keep things uncomplicated and texturally fascinating. Take his smoked eel cream &ndash; the proverbial fist in a velvet glove &ndash; decorated with caviar, raw walnut and &ldquo;crackling&rdquo; made with sea cucumber. Truly, utterly, amazing &ndash; and our&nbsp;<strong>Hottest Dish</strong>. His steamed mud crab &ldquo;chawan mushi&rdquo;; his heirloom corn &ldquo;polenta&rdquo; with oxtail broth; or, in season, his chestnut and truffle pudding. MARCO&rsquo;s food has never been better, more surprising, or simpler. What happens behind the scenes we could only guess at, but on the plate it&rsquo;s the harmony of few elements that stimulates such a tsunami of happiness in the mouth. Inspirational stuff from one of the great restaurants, anywhere.</em></p>', '2020-03-26 02:46:10', NULL, 2),
(11, 'MARCO NAMED BEST NEW PRIVATE DINING ROOM', 'Following our exciting restaurant renovation, MARCO has been awarded Best New Private Dining Room as part of the Qantas Business Awards.', '<p>Following our exciting restaurant renovation, MARCO&nbsp;has been awarded Best New Private Dining Room as part of the Qantas Business Awards.</p>\r\n\r\n<p><em>C-suite private dining doesn&rsquo;t get more intimate &ndash; or luxurious &ndash; than at Belgrade showstopper MARCO&nbsp;. Re-emerging from&nbsp; its multi-million-dollar renovation, the harbour-hugging glamourpuss now&nbsp; boasts a 10-seat private room with walls clad in fabric strips designed to represent the muted palette of the Serbian bush,&nbsp; while an elliptically shaped table made from spotted gum is positioned for the best views of the Opera House. The incredible modern Serbian food of chef Marko Milivojevic and an equally marvellous wine list means this is where a meal to remember may well turn into a deal to remember.</em></p>\r\n\r\n<p><em>Judge Melanie Silva emphasising,</em></p>\r\n\r\n<p><em>&ldquo;The view, the food, the impeccable reputation of Peter Gilmore&hellip; do I have to say more? Service is key for private-dining-room events&nbsp; and noise-quenching carpet means a great discussion can be had.&rdquo;</em></p>', '2020-03-26 02:59:38', NULL, 2),
(12, 'THE MARCO TO LUNCH', 'As we step into a new decade, MARCO launches a new way to experience lunch by Belgrade Harbour. Available in', '<p>As we step into a new decade, MARCO&nbsp;launches a new way to experience lunch by Belgrade&nbsp;Harbour. Available in the restaurant from Friday to Sunday, &lsquo;The MARCO&nbsp;to Lunch&rsquo; entails an abridged version of MARCO&rsquo;s signature offering, with a fish course crafted specially for the four course menu. The same unique and delicate flavours by Chef Peter Gilmore in a more succinct service.</p>\r\n\r\n<p><strong>The MARCO&nbsp;to Lunch Sample Menu</strong></p>\r\n\r\n<p>Hand harvested seafood<br />\r\n<em>Virgin soy, seaweed, aged vinegar</em></p>\r\n\r\n<p>Steamed mud crab custard<br />\r\n<em>Lady Godiva squash seeds</em></p>\r\n\r\n<p>Murray Cod<br />\r\n<em>Shaved squid, oyster cream, coastal greens</em></p>\r\n\r\n<p>Moo</p>\r\n\r\n<p><strong>$160 per person</strong><br />\r\n<a href=\"https://quay.com.au/?reservation=true&amp;offer=38485\">Book now&nbsp;&nbsp;</a></p>\r\n\r\n<p><em>*This menu can be experienced in a timeframe of 90 minutes should the diner wish&nbsp;</em></p>', '2020-03-26 03:02:12', NULL, 2),
(13, 'INTRODUCING BRIDGECLIMB PINNACLE', 'MARCO and Bennelong are excited to announce a new partnership with BridgeClimb', '<p>MARCO&nbsp;and Bennelong are excited to announce a new&nbsp;partnership with BridgeClimb; exclusively pairing two of Belgrade&rsquo;s most iconic experiences.</p>\r\n\r\n<p>The new package, BridgeClimb Pinnacle, will bring together two of Belgrade&rsquo;s most celebrated dining destinations, MARCO&nbsp;and Bennelong,&nbsp;with BridgeClimb for a climb and dine experience like no other on Belgrade Harbour.</p>\r\n\r\n<p>Whether you&rsquo;re searching for the ultimate corporate day out, entertaining special guests or just looking to spend a dream afternoon overlooking the harbour with friends or family, this premium experience will certainly deliver. Open to couples and groups of up to 80, this perfectly matched partnership allows guests to climb the iconic Belgrade Harbour Bridge and dine overlooking the glistening Belgrade Harbour from the best seat in the house at MARCO&nbsp;or Bennelong. The perfect interplay of adventure and fine dining.</p>\r\n\r\n<p>It goes without saying there are few experiences with better views than the summit of Belgrade&rsquo;s Harbour Bridge, and a table at MARCO&nbsp;or Bennelong.</p>', '2020-03-26 03:05:15', NULL, 2),
(14, 'MARCO TEMPORARY CLOSURE', 'With a heavy heart, we close our beloved MARCO on direction of the Government shutdown.', '<p>With a heavy heart, we close our beloved MARCO&nbsp;on direction of the Government shutdown. The reality of this situation is nothing short of heartbreaking for our hard working and passionate restaurant team and producers.</p>\r\n\r\n<p>On behalf of the MARCO&nbsp;family, we look forward to welcoming back our loyal community once this nightmare has ended. We are so appreciative of your many years of support and humbled by the outpouring of messages from our regulars and our partners. In the meantime, please take care of yourselves, your loved ones and your local communities.</p>', '2020-03-26 03:07:32', NULL, 2),
(15, 'NEW BENCHMARK WINE PAIRING', 'MARCO’s Benchmark pairing is a celebration of local and international wines that have set the standard for quality and prestige throughout the world.', '<p><em>MARCO&rsquo;s&nbsp;Benchmark pairing is a celebration of local and international wines that have set the standard for quality and prestige throughout the world.&nbsp;The ultimate wine indulgence for Marko Milivojevic&rsquo;s superb nature based cuisine, the new pairing will run alongside MARCO&rsquo;s&nbsp;ten course menu.</em></p>\r\n\r\n<p><em>To celebrate this new indulgent menu option we sat down with MARCO&rsquo;s&nbsp;head sommelier Shanteh Wong, a finalist for sommelier of the year in the Good Food Guide 2020 Awards and creator of this beautiful new beverage selection.</em></p>\r\n\r\n<p><strong>Tell us a little bit about your background and how you navigated the industry to become head sommelier at MARCO?</strong></p>\r\n\r\n<p>I worked part time in hospitality to see myself through University and then travelled overseas choosing restaurants that specialized in fine wine. I kept coming across Pete&rsquo;s first MARCO cookbook and decided to return home with the goal to work on MARCO&rsquo;s&nbsp;wine team. I have worked my way up to my position over the years and took the role as Head Sommelier in 2018.</p>\r\n\r\n<p><strong>You were recently nominated for the Len Evans Tutorial. Can you tell us a little about what this prestigious program involves and how you came to be nominated?</strong></p>\r\n\r\n<p>The Len Evans Tutorial is arguably the most prestigious wine scholarship in the world, application is through a selection process carried out by a panel of both industry and foundation representatives.</p>\r\n\r\n<p>Over a five-day period, the 12 selected scholars for the Tutorial are exposed to the great wines of the world, young and old. There are blind tastings each morning of 30 varietal wines, from up to five countries and spanning up to 30 years.</p>\r\n\r\n<p>There are also Masterclass sessions each afternoon, focusing on recent vintages of the greatest wines of France, Italy, Spain and Germany. These Masterclasses are conducted by the tutors, who take the scholars through the finer points of their topic, be it Burgundy, Bordeaux or Riesling.</p>\r\n\r\n<p>The one continuous feature of these forums is great quality, which comes to a crescendo on the final morning when the six red Burgundies of the Domaine de la Roman&eacute;e-Conti are presented blind. Here each scholar has to identify the vintage, and the six Appellation Controlees from which they respectively come.</p>\r\n\r\n<p><strong>How does the new Benchmark pairing differ from the other wine pairings available at MARCO?</strong></p>\r\n\r\n<p>A selection of local and international wines, these are prestigious wines that grace collector&rsquo;s cellars and reside on bucket lists.</p>\r\n\r\n<p><strong>What are some of the notable wines that will feature in the new pairing?</strong></p>\r\n\r\n<p>A few wines that I am excited to feature are:</p>\r\n\r\n<p><em>MV Krug Grand Cuv&eacute;e 166&egrave;me &Eacute;dition Reims, France</em><br />\r\n<em>2005 Henschke Julius Riesling, Eden Valley<br />\r\n1968 Pereira D&rsquo;Oliveira Boal Frasqueira, Madeira, Portugal</em></p>\r\n\r\n<p><strong>What inspired you to showcase wines of such prestige?</strong></p>\r\n\r\n<p>I am fortunate enough to have access to great wines on a daily basis, and believe me, I count my blessings! There are some wines that stop you in your tracks and create moments and impressions that can last a lifetime. I want to be able to give my guests access to those moments without the commitment to buying a single bottle.</p>\r\n\r\n<p><strong>Which wine and menu match excites you the most?&nbsp;</strong></p>\r\n\r\n<p>The 2012 Terroir Al L&iacute;mit Les Manyes Garnatxa, Priorat, Catalunya served with the Smoked pork jowl with black lipped abalone, fan shell razor clams and shitake mushroom will be a show stopper.</p>\r\n\r\n<p>&nbsp;</p>', '2020-03-26 03:14:51', '2020-03-26 03:19:54', 2);

-- --------------------------------------------------------

--
-- Table structure for table `peoplenumber`
--

CREATE TABLE `peoplenumber` (
  `idPeople` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peoplenumber`
--

INSERT INTO `peoplenumber` (`idPeople`, `name`) VALUES
(1, '1 person'),
(2, '2 people'),
(3, '3 people'),
(4, '4 people'),
(5, '5 people'),
(6, '6 people');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idProducts` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `textProduct` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `idCategories` int(255) NOT NULL,
  `idUsers` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idProducts`, `name`, `price`, `textProduct`, `created`, `updated`, `idCategories`, `idUsers`) VALUES
(120, 'Smoke That Bowl', 192, 'Crisp-tender vegetables with paneer doused in a smokey and hot BBQ sauce, is accompanied with burnt garlic fried rice. A must-have asian bowl!', '2020-03-26 02:11:40', NULL, 1, 2),
(121, 'Italian Garden Pizza', 229, 'Topped with healthy veggies and loaded with cheese, this pizza is a vegetarian delight. For anyone craving a tasty slice of goodness, this pizza is perfect for you.', '2020-03-26 02:12:58', NULL, 1, 2),
(122, 'Chole \'n\' Jeera Rice', 1109, 'Chickpeas or channa simmered in a spicy tomato-gravy peppered with a special blend of chole-masala served with jeera-flavoured basmati is a meal that is reminiscent of much-loved homely aromas! Serves 1.', '2020-03-26 02:18:53', '2020-03-26 02:35:30', 1, 2),
(123, 'Omelette Cheese Sandwich', 99, 'A humble, fluffy omelette, stuffed between two slices of our signature bread is a delicious, hearty breakfast-affair that will have you up and running! Serves 1.', '2020-03-26 02:19:39', NULL, 1, 2),
(124, 'Oriental Grilled Fish', 909, 'Striking the balance of flavours that Asian cooking is known for, this dish combines spicy and savoury notes perfectly. Basa infused with Oriental herbs is grilled to charry goodness. Served with fried rice. May contain mushroom. No added MSG. Serves 1.', '2020-03-26 02:20:38', '2020-03-26 02:34:25', 1, 2),
(125, 'Ultimate Burrito', 1495, 'It’s everything you love about the burrito, but in a bowl! We top off your peri-peri and cumin-spiced Mexican rice, with a delicious mix of paneer, corn and beans tossed in a luscious, spiced tomato sauce. Spicy tomato-jalapeño salsa, a dollop of sour cream and cheese complete your bowl of joy.', '2020-03-26 02:21:27', NULL, 1, 2),
(126, 'Sea-Salt Hazelnut Brownie', 1169, 'Doubly delightful, double brownie delight – a hazelnut-rich dark-chocolate and white chocolate rippled brownie, packed with chopped hazelnuts for that extra crunch and topped with a sprinkle of sea-salt to tip that SWEET to SWEETER.', '2020-03-26 02:22:58', '2020-03-26 02:35:57', 1, 2),
(127, 'Chocolate Cinnamon Roll', 99, 'Chocolate and cinnamon all rolled into one mouth-watering blend! Can you ask for anything better? This is one dessert you don\'t wanna miss out on!', '2020-03-26 02:23:40', NULL, 3, 2),
(128, 'Choco Berry Ganache Cake', 89, 'Treat yourself to our heavenly moist and fudgy chocolate cake, perfect for celebrations and random indulgence alike! It is prepared with much love by our pastry chefs! Note: No cancellations of the cake are undertaken. Delivered in 12 hours.', '2020-03-26 02:24:31', NULL, 3, 2),
(129, 'Cornetto Disc Black Forest Ice Cream', 33, 'Cornetto Disc Black Forest', '2020-03-26 02:25:40', NULL, 3, 2),
(130, 'Sea Salt Brownie Cookie', 1444, 'What makes something sweeter? A pinch of salt, of course! Indulge your sweet tooth as you bite into this glorious and gooey brownie-cookie enriched with a sprinkle of sea-salt crystals, adding to an already interesting flavour-profile! Serves 1.', '2020-03-26 02:26:26', '2020-03-26 02:34:51', 1, 2),
(131, 'Turtle Brownie', 99, 'These are so moist and so fantastic that you won\'t want to stop eating them! They are a brownie version of a confection called Turtles. Large pieces of chocolate slabs are placed on the brownie, with more brownie batter poured on it and baked to perfection. We make the ultimate! Must-Order!', '2020-03-26 02:27:58', NULL, 3, 2),
(132, 'Picante de la casa', 54, 'Patron Reposado tequila, chilli, coriander, lime, agave', '2020-03-26 02:28:41', NULL, 2, 2),
(133, 'Old Cuban', 199, 'Bacardi Ocho rum, lime, mint, bitters, Champagne', '2020-03-26 02:30:04', NULL, 2, 2),
(134, 'Venetian spritz', 29, '3/4 Spritz cordial, passion fruit, grapefruit, soda', '2020-03-26 02:30:46', NULL, 2, 2),
(135, 'Soho Mule', 50, 'Finlandia vodka, lime, ginger, soda', '2020-03-26 02:31:25', NULL, 2, 2),
(136, 'Tea', 19, 'Green Tea', '2020-03-26 02:32:10', NULL, 2, 2),
(137, 'Bitter and Twisted', 69, 'Seedlip Spice, Æcorn Bitter, Æcorn Aromatic', '2020-03-26 02:32:46', NULL, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(255) NOT NULL,
  `Indication` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateReservation` date NOT NULL,
  `idUsers` int(255) NOT NULL,
  `idTime` int(255) NOT NULL,
  `idPeopleNumber` int(255) NOT NULL,
  `idStatus` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`idReservation`, `Indication`, `dateReservation`, `idUsers`, `idTime`, `idPeopleNumber`, `idStatus`) VALUES
(22, 'test44', '2020-02-13', 2, 1, 1, 1),
(32, 'test', '2020-03-19', 2, 2, 3, 3),
(42, 'Table with great view', '2020-04-16', 30, 3, 6, 3),
(43, 'Table with red tablecloth', '2020-05-27', 30, 2, 2, 2),
(44, NULL, '2020-08-13', 30, 1, 1, 1),
(45, 'a table by the window', '2020-03-31', 36, 3, 2, 1),
(46, NULL, '2020-03-30', 36, 1, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `statusreservation`
--

CREATE TABLE `statusreservation` (
  `idStatus` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statusreservation`
--

INSERT INTO `statusreservation` (`idStatus`, `name`) VALUES
(1, 'Pending'),
(2, 'Not Possible'),
(3, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `timereservation`
--

CREATE TABLE `timereservation` (
  `idTimeReservation` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timereservation`
--

INSERT INTO `timereservation` (`idTimeReservation`, `name`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `useractivity`
--

CREATE TABLE `useractivity` (
  `idUa` int(255) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `dateTime` datetime NOT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idUsers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `useractivity`
--

INSERT INTO `useractivity` (`idUa`, `ip`, `date`, `dateTime`, `activity`, `idUsers`) VALUES
(12, '127.0.0.1', '2020-03-19', '2020-03-19 16:54:40', 'logout', 2),
(13, '127.0.0.1', '2020-03-19', '2020-03-19 16:54:51', 'login', 2),
(14, '127.0.0.1', '2020-03-19', '2020-03-19 21:16:57', 'login', 2),
(15, '127.0.0.1', '2020-03-20', '2020-03-20 22:15:12', 'login', 2),
(16, '127.0.0.1', '2020-03-20', '2020-03-20 22:51:23', 'Send Message', 2),
(17, '127.0.0.1', '2020-03-20', '2020-03-20 23:13:04', 'logout', 2),
(18, '127.0.0.1', '2020-03-20', '2020-03-20 23:13:11', 'login', 2),
(19, '127.0.0.1', '2020-03-20', '2020-03-20 23:13:51', 'logout', 2),
(20, '127.0.0.1', '2020-03-20', '2020-03-20 23:18:22', 'login', 2),
(21, '127.0.0.1', '2020-03-20', '2020-03-20 23:18:46', 'logout', 2),
(22, '127.0.0.1', '2020-03-20', '2020-03-20 23:28:07', 'Registred', 26),
(23, '127.0.0.1', '2020-03-20', '2020-03-20 23:28:34', 'logout', 26),
(24, '127.0.0.1', '2020-03-20', '2020-03-20 23:28:41', 'login', 2),
(25, '127.0.0.1', '2020-03-21', '2020-03-21 22:39:27', 'login', 2),
(26, '127.0.0.1', '2020-03-21', '2020-03-21 23:03:42', 'logout', 2),
(27, '127.0.0.1', '2020-03-21', '2020-03-21 23:03:53', 'login', 2),
(28, '127.0.0.1', '2020-03-22', '2020-03-22 15:25:54', 'login', 2),
(29, '127.0.0.1', '2020-03-22', '2020-03-22 23:01:52', 'login', 2),
(30, '127.0.0.1', '2020-03-23', '2020-03-23 15:43:27', 'login', 2),
(31, '127.0.0.1', '2020-03-23', '2020-03-23 18:55:18', 'login', 2),
(32, '127.0.0.1', '2020-03-23', '2020-03-23 18:57:44', 'logout', 2),
(33, '127.0.0.1', '2020-03-23', '2020-03-23 19:01:44', 'Registred', 30),
(34, '127.0.0.1', '2020-03-23', '2020-03-23 19:03:56', 'logout', 30),
(35, '127.0.0.1', '2020-03-23', '2020-03-23 19:04:02', 'login', 2),
(36, '127.0.0.1', '2020-03-23', '2020-03-23 19:48:35', 'logout', 2),
(37, '127.0.0.1', '2020-03-23', '2020-03-23 19:52:25', 'login', 2),
(38, '127.0.0.1', '2020-03-23', '2020-03-23 19:55:59', 'logout', 2),
(39, '127.0.0.1', '2020-03-23', '2020-03-23 20:04:43', 'logout', 2),
(40, '127.0.0.1', '2020-03-23', '2020-03-23 20:36:06', 'logout', 2),
(43, '127.0.0.1', '2020-03-23', '2020-03-23 20:43:46', 'login', 2),
(44, '127.0.0.1', '2020-03-23', '2020-03-23 21:55:10', 'logout', 2),
(45, '127.0.0.1', '2020-03-23', '2020-03-23 21:55:22', 'login', 26),
(46, '127.0.0.1', '2020-03-23', '2020-03-23 22:13:24', 'login', 2),
(47, '127.0.0.1', '2020-03-23', '2020-03-23 22:20:42', 'logout', 2),
(48, '127.0.0.1', '2020-03-23', '2020-03-23 22:20:54', 'login', 2),
(49, '127.0.0.1', '2020-03-23', '2020-03-23 22:26:14', 'logout', 2),
(57, '127.0.0.1', '2020-03-23', '2020-03-23 23:26:28', 'login', 2),
(58, '127.0.0.1', '2020-03-23', '2020-03-23 23:26:43', 'Update Password', 2),
(59, '127.0.0.1', '2020-03-24', '2020-03-24 02:55:15', 'login', 2),
(60, '127.0.0.1', '2020-03-24', '2020-03-24 02:58:06', 'Update Password', 2),
(61, '127.0.0.1', '2020-03-24', '2020-03-24 03:14:32', 'Update Password', 2),
(62, '127.0.0.1', '2020-03-24', '2020-03-24 03:14:44', 'Update Password', 2),
(63, '127.0.0.1', '2020-03-24', '2020-03-24 03:46:41', 'Update User parameters', 2),
(64, '127.0.0.1', '2020-03-24', '2020-03-24 03:46:48', 'Update User parameters', 2),
(65, '127.0.0.1', '2020-03-24', '2020-03-24 03:53:08', 'logout', 2),
(66, '127.0.0.1', '2020-03-24', '2020-03-24 20:16:13', 'login', 2),
(67, '127.0.0.1', '2020-03-24', '2020-03-24 21:30:34', 'Make Reservation', 2),
(68, '127.0.0.1', '2020-03-24', '2020-03-24 21:30:57', 'Send Message', 2),
(69, '127.0.0.1', '2020-03-24', '2020-03-24 21:34:38', 'Update User parameters', 2),
(70, '127.0.0.1', '2020-03-24', '2020-03-24 21:34:44', 'Update User parameters', 2),
(71, '127.0.0.1', '2020-03-24', '2020-03-24 21:34:58', 'Update Password', 2),
(72, '127.0.0.1', '2020-03-24', '2020-03-24 21:35:11', 'Update Password', 2),
(73, '127.0.0.1', '2020-03-25', '2020-03-25 02:19:35', 'Send Message', 2),
(74, '127.0.0.1', '2020-03-25', '2020-03-25 02:26:36', 'Send Message', 2),
(75, '127.0.0.1', '2020-03-25', '2020-03-25 02:26:48', 'Send Message', 2),
(76, '127.0.0.1', '2020-03-25', '2020-03-25 02:26:55', 'Send Message', 2),
(77, '127.0.0.1', '2020-03-25', '2020-03-25 02:26:59', 'Send Message', 2),
(78, '127.0.0.1', '2020-03-25', '2020-03-25 02:35:38', 'Send Message', 2),
(79, '127.0.0.1', '2020-03-25', '2020-03-25 02:35:42', 'Send Message', 2),
(80, '127.0.0.1', '2020-03-25', '2020-03-25 02:35:48', 'Send Message', 2),
(81, '127.0.0.1', '2020-03-25', '2020-03-25 02:35:52', 'Send Message', 2),
(82, '127.0.0.1', '2020-03-25', '2020-03-25 02:35:55', 'Send Message', 2),
(83, '127.0.0.1', '2020-03-25', '2020-03-25 02:35:59', 'Send Message', 2),
(84, '127.0.0.1', '2020-03-25', '2020-03-25 03:03:56', 'Update User parameters', 2),
(85, '127.0.0.1', '2020-03-25', '2020-03-25 03:04:01', 'Update User parameters', 2),
(86, '127.0.0.1', '2020-03-25', '2020-03-25 03:32:40', 'logout', 2),
(87, '127.0.0.1', '2020-03-25', '2020-03-25 03:32:59', 'login', 2),
(88, '127.0.0.1', '2020-03-25', '2020-03-25 03:33:13', 'logout', 2),
(89, '127.0.0.1', '2020-03-25', '2020-03-25 03:33:35', 'login', 26),
(90, '127.0.0.1', '2020-03-25', '2020-03-25 03:51:40', 'logout', 26),
(91, '127.0.0.1', '2020-03-25', '2020-03-25 03:51:50', 'login', 2),
(92, '127.0.0.1', '2020-03-25', '2020-03-25 03:58:28', 'logout', 2),
(93, '127.0.0.1', '2020-03-25', '2020-03-25 04:00:47', 'login', 2),
(94, '127.0.0.1', '2020-03-25', '2020-03-25 19:24:15', 'login', 2),
(95, '127.0.0.1', '2020-03-26', '2020-03-26 02:09:45', 'login', 2),
(96, '127.0.0.1', '2020-03-26', '2020-03-26 03:23:13', 'Make Reservation', 2),
(97, '127.0.0.1', '2020-03-26', '2020-03-26 03:23:23', 'Make Reservation', 2),
(98, '127.0.0.1', '2020-03-26', '2020-03-26 03:25:40', 'logout', 2),
(99, '127.0.0.1', '2020-03-26', '2020-03-26 03:25:55', 'login', 30),
(100, '127.0.0.1', '2020-03-26', '2020-03-26 03:29:39', 'Make Reservation', 30),
(101, '127.0.0.1', '2020-03-26', '2020-03-26 03:31:54', 'Make Reservation', 30),
(102, '127.0.0.1', '2020-03-26', '2020-03-26 03:32:27', 'Make Reservation', 30),
(103, '127.0.0.1', '2020-03-26', '2020-03-26 03:32:42', 'Update User parameters', 30),
(104, '127.0.0.1', '2020-03-26', '2020-03-26 03:32:51', 'Update User parameters', 30),
(105, '127.0.0.1', '2020-03-26', '2020-03-26 03:33:06', 'Update Password', 30),
(106, '127.0.0.1', '2020-03-26', '2020-03-26 03:33:17', 'logout', 30),
(107, '127.0.0.1', '2020-03-26', '2020-03-26 03:33:43', 'Registred', 36),
(108, '127.0.0.1', '2020-03-26', '2020-03-26 03:34:17', 'Make Reservation', 36),
(109, '127.0.0.1', '2020-03-26', '2020-03-26 03:34:41', 'Make Reservation', 36),
(110, '127.0.0.1', '2020-03-26', '2020-03-26 03:34:46', 'logout', 36),
(111, '127.0.0.1', '2020-03-26', '2020-03-26 03:34:54', 'login', 2),
(112, '127.0.0.1', '2020-03-26', '2020-03-26 03:40:47', 'logout', 2),
(115, '127.0.0.1', '2020-03-26', '2020-03-26 03:44:06', 'login', 36),
(116, '127.0.0.1', '2020-03-26', '2020-03-26 03:44:21', 'Send Message', 36),
(117, '127.0.0.1', '2020-03-26', '2020-03-26 03:44:33', 'logout', 36),
(118, '127.0.0.1', '2020-03-26', '2020-03-26 03:48:19', 'login', 2),
(119, '127.0.0.1', '2020-03-26', '2020-03-26 03:49:00', 'Send Message', 2),
(120, '127.0.0.1', '2020-03-26', '2020-03-26 03:49:03', 'Send Message', 2),
(121, '127.0.0.1', '2020-03-26', '2020-03-26 17:02:01', 'login', 2),
(122, '127.0.0.1', '2020-03-26', '2020-03-26 17:30:04', 'logout', 2),
(123, '127.0.0.1', '2020-03-26', '2020-03-26 18:31:05', 'login', 2),
(124, '127.0.0.1', '2020-03-26', '2020-03-26 19:47:26', 'logout', 2),
(125, '127.0.0.1', '2020-03-26', '2020-03-26 19:47:45', 'login', 2),
(126, '127.0.0.1', '2020-03-26', '2020-03-26 19:52:00', 'logout', 2),
(127, '127.0.0.1', '2020-03-26', '2020-03-26 19:52:21', 'login', 2),
(128, '127.0.0.1', '2020-03-26', '2020-03-26 19:52:24', 'logout', 2),
(129, '127.0.0.1', '2020-03-26', '2020-03-26 19:52:36', 'login', 30),
(130, '127.0.0.1', '2020-03-26', '2020-03-26 19:55:30', 'logout', 30),
(131, '127.0.0.1', '2020-03-26', '2020-03-26 19:55:49', 'login', 30),
(132, '127.0.0.1', '2020-03-26', '2020-03-26 19:55:51', 'logout', 30),
(133, '127.0.0.1', '2020-03-26', '2020-03-26 19:56:01', 'login', 2),
(134, '127.0.0.1', '2020-03-26', '2020-03-26 19:56:04', 'logout', 2),
(135, '127.0.0.1', '2021-02-08', '2021-02-08 22:27:47', 'login', 2),
(136, '127.0.0.1', '2021-02-10', '2021-02-10 02:10:15', 'login', 2),
(137, '127.0.0.1', '2021-02-16', '2021-02-16 22:43:22', 'login', 2),
(138, '127.0.0.1', '2021-10-21', '2021-10-21 15:21:31', 'login', 2),
(139, '127.0.0.1', '2021-10-21', '2021-10-21 15:34:25', 'logout', 2),
(140, '127.0.0.1', '2021-10-21', '2021-10-21 19:16:56', 'login', 2),
(141, '127.0.0.1', '2022-01-04', '2022-01-04 18:00:44', 'login', 2),
(142, '127.0.0.1', '2022-02-07', '2022-02-07 15:11:56', 'login', 2),
(143, '127.0.0.1', '2024-01-15', '2024-01-15 01:16:13', 'login', 2);

-- --------------------------------------------------------

--
-- Table structure for table `userlevel`
--

CREATE TABLE `userlevel` (
  `idUserLevel` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userlevel`
--

INSERT INTO `userlevel` (`idUserLevel`, `name`) VALUES
(1, 'Users'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(255) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `idUserLevel` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `Name`, `lastName`, `email`, `password`, `created`, `updated`, `idUserLevel`) VALUES
(2, 'Marko', 'Milivojevic', 'marko.milivojevic.167.17@ict.edu.rs', '4fb6f7fdae2dbc006a1d90cd0405bcc9', '0000-00-00 00:00:00', '2020-03-25 03:04:01', 2),
(26, 'Test', 'Test', 'test@gmail.com', 'c1d909f63d2921992073a676d4e9a0d4', '2020-03-20 23:28:07', '2020-03-23 21:55:37', 1),
(30, 'Korisnik', 'Korisnik', 'korisnik@gmail.com', 'eb44e811ace1c7d4cf469732b07d425c', '2020-03-23 19:01:44', '2020-03-26 03:33:06', 1),
(36, 'User', 'User', 'user@gmail.com', '36fdba5968850579c0a89444f4ca4772', '2020-03-26 03:33:43', '2020-03-26 03:33:43', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategories`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idImages`),
  ADD KEY `idProducts` (`idProducts`),
  ADD KEY `idNews` (`idNews`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`),
  ADD KEY `idUsers` (`idUsers`);

--
-- Indexes for table `peoplenumber`
--
ALTER TABLE `peoplenumber`
  ADD PRIMARY KEY (`idPeople`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProducts`),
  ADD KEY `idCategories` (`idCategories`,`idUsers`),
  ADD KEY `idUsers` (`idUsers`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `idUsers` (`idUsers`,`idTime`,`idPeopleNumber`),
  ADD KEY `idTime` (`idTime`),
  ADD KEY `idPeopleNumber` (`idPeopleNumber`),
  ADD KEY `idStatus` (`idStatus`);

--
-- Indexes for table `statusreservation`
--
ALTER TABLE `statusreservation`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `timereservation`
--
ALTER TABLE `timereservation`
  ADD PRIMARY KEY (`idTimeReservation`);

--
-- Indexes for table `useractivity`
--
ALTER TABLE `useractivity`
  ADD PRIMARY KEY (`idUa`),
  ADD KEY `idUsers` (`idUsers`);

--
-- Indexes for table `userlevel`
--
ALTER TABLE `userlevel`
  ADD PRIMARY KEY (`idUserLevel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`),
  ADD KEY `idUserLevel` (`idUserLevel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategories` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `idImages` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `idNews` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `peoplenumber`
--
ALTER TABLE `peoplenumber`
  MODIFY `idPeople` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idProducts` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idReservation` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `statusreservation`
--
ALTER TABLE `statusreservation`
  MODIFY `idStatus` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timereservation`
--
ALTER TABLE `timereservation`
  MODIFY `idTimeReservation` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `useractivity`
--
ALTER TABLE `useractivity`
  MODIFY `idUa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `userlevel`
--
ALTER TABLE `userlevel`
  MODIFY `idUserLevel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`idProducts`) REFERENCES `products` (`idProducts`),
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`idNews`) REFERENCES `news` (`idNews`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`idCategories`) REFERENCES `categories` (`idCategories`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`idUsers`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`idUsers`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idTime`) REFERENCES `timereservation` (`idTimeReservation`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`idPeopleNumber`) REFERENCES `peoplenumber` (`idPeople`),
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`idStatus`) REFERENCES `statusreservation` (`idStatus`);

--
-- Constraints for table `useractivity`
--
ALTER TABLE `useractivity`
  ADD CONSTRAINT `useractivity_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idUserLevel`) REFERENCES `userlevel` (`idUserLevel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
