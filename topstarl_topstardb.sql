-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2019 at 08:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topstarl_topstar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblabout`
--

CREATE TABLE `tblabout` (
  `AboutId` int(11) NOT NULL,
  `AboutDescriotion` text NOT NULL,
  `AboutImage` varchar(100) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblabout`
--

INSERT INTO `tblabout` (`AboutId`, `AboutDescriotion`, `AboutImage`, `IsActive`, `CreatedOn`) VALUES
(2, '<p>For carriers we are proud to let you know that our roots stem from a trucking background. At Top Star Logistics Inc, we feel that this is an essential ingredient for a great working relationship with our carrier-partners. We know what it&rsquo;s like to be in your shoes! As a result we understand your needs and are committed to a positive experience for your greatest asset - your drivers. Our company was built on honesty.</p>\r\n\r\n<p>We look forward to working with you! You can be confident that we will provide the best solutions for your shipping needs - no matter how big or small. When you place your shipment in our hands you will have a single point of contact that is solely responsible for personally managing the entire process from pick-up to delivery. We are anxious to show you what we can do!&nbsp;&nbsp;</p>\r\n', '1933485929_about-us.png', 1, '2019-06-05 13:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `AdminId` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminId`, `UserName`, `Password`) VALUES
(1, 'Topstarlogistics', '0e7517141fb53f21ee439b355b5a1d0a');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `ContactNumber` varchar(13) NOT NULL,
  `Website` varchar(250) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tblemail_template`
--

CREATE TABLE `tblemail_template` (
  `email_template_id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `from_address` varchar(255) NOT NULL,
  `reply_address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemail_template`
--

INSERT INTO `tblemail_template` (`email_template_id`, `task`, `from_address`, `reply_address`, `subject`, `message`) VALUES
(1, 'User registration', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'User registration', '\r\n   <html>\r\n    <head>\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #49ab48;\"><img src=\"{image_url}/images/logo-wide.png\" alt=\"Chem Sam Logo\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;\">\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n                \r\n            </tr>\r\n            <tr >\r\n               <td><p>Thanks you for joining with us!</p></td>\r\n            </tr>\r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Chem Sam Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #000;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Chemshem Virtual Classes. All Rights Reserved</p></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n        \r\n    </body>\r\n</html>'),
(2, 'Forgot Password by admin', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Forgot Password by admin', '\r\n   <html>\r\n    <head>\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #49ab48;\"><img src=\"{image_url}/images/logo-wide.png\" alt=\"Chem Sam Logo\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;\">\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n            </tr>\r\n            <tr >\r\n               <td><p>We were told that you forgot your password on {username}.</p>\r\n                \r\n                <p>To reeset your password,please click this link: <a>{reset_link}</a></p>\r\n                \r\n               </td>\r\n            </tr>\r\n            <tr>\r\n               <td><p>Regard,</p>\r\n               <p>Chem Sam Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #000;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Chem sam Virtual Classes. All Rights Reserved</p></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n        \r\n    </body>\r\n</html>'),
(3, 'Inquery by User', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Inquery by User', '\r\n   <html>\r\n    <head>\r\n        <title>Welcome to {site_name}</title>\r\n        <style type=\"text/css\">\r\n            tbody{\r\n                background: aliceblue;\r\n            }\r\n            td{\r\n                padding: 0px 20px;\r\n            }\r\n        </style>\r\n    </head>\r\n    <body>\r\n        <center>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 100px;\">\r\n            <tr>\r\n                <td style=\"border-bottom: solid 3px #fe0000;text-align: center;\"><img src=\"{image_url}/images/logo.png\" alt=\"Topstar logistics Logo\" style=\"\r\n    height: 90px;\r\n\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;\">\r\n            <tr>\r\n                <td>Hello Authority,</td>\r\n            </tr>\r\n            <tr >\r\n\r\n               <td> \r\n                <P>Please find below details for user visited your site.</P><br>\r\n                <p><b>User Name:</b> {username}.</p>\r\n                <p><b>Contact Number:</b> {userphone}.</p>   \r\n                <p><b>Email :</b> {useremail}.</p>   \r\n                <p><b>Message :</b> {usermsg}.</p>             \r\n\r\n                \r\n               </td>\r\n            </tr>\r\n            <tr>\r\n               <td><p>Regard,</p>\r\n               <p>Topstar Logistics Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #000;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Topstar logistics. All Rights Reserved</p></td>\r\n            </tr>\r\n           \r\n        </table>\r\n    </center>\r\n    </body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `tblourclient`
--

CREATE TABLE `tblourclient` (
  `ourclient_id` int(11) NOT NULL,
  `ourclient_image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `Createddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblourclient`
--

INSERT INTO `tblourclient` (`ourclient_id`, `ourclient_image`, `status`, `Createddate`) VALUES
(4, '3783491768_partner1.png', '1', '2019-07-18 00:00:00'),
(5, '3044891111_partner2.png', '1', '2019-07-18 00:00:00'),
(6, '2922144563_partner3.png', '1', '2019-07-18 00:00:00'),
(7, '8386445256_partner4.png', '1', '2019-07-18 00:00:00'),
(8, '2541036689_partner5.png', '1', '2019-07-18 00:00:00'),
(9, '1889489047_partner6.png', '1', '2019-07-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpaps`
--

CREATE TABLE `tblpaps` (
  `PapsId` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `LinkTitle` varchar(100) NOT NULL,
  `Status` enum('0','1') NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpaps`
--

INSERT INTO `tblpaps` (`PapsId`, `Title`, `LinkTitle`, `Status`, `CreatedOn`) VALUES
(1, 'Affiliated PAPS', 'http://www.affiliatedcb.ca/PAPS/PAPSSearch.aspx', '1', '2019-06-07 00:00:00'),
(2, 'A&A Contract Customs', 'http://www.borderdocs.com/', '1', '2019-06-07 00:00:00'),
(3, 'Axxess PARS', 'http://pars.axxessintl.com/', '1', '2019-07-18 00:00:00'),
(4, 'Cole PAPS', 'https://sb.smartborder.com/newsb/WebTracking.aspx', '1', '2019-07-18 00:00:00'),
(5, 'EDI', 'https://rnsonline.ecustoms.com/Common/Login.aspx?ReturnUrl=%2fUser%2fPARSVerifier.aspx', '1', '2019-07-18 00:00:00'),
(6, 'GH Younge PAPS', 'https://www.ghy.com/paps-tracking/?/paps-track.html/', '1', '2019-07-18 00:00:00'),
(7, 'Livingston PAPS', 'http://www.livingstontracker.com/track/default.aspx', '1', '2019-07-18 00:00:00'),
(8, 'Livingston PARS', 'https://parstracker.livingstonintl.com/parstracker/Search.aspx', '1', '2019-07-18 00:00:00'),
(9, 'Metro', 'https://sb.smartborder.com/shipper/bollookup.aspx?filercode=WFN%20', '1', '2019-07-18 00:00:00'),
(10, 'Omnitrans PARS', 'https://omnitrans.itm.descartes.com/parstracker/', '1', '2019-07-18 00:00:00'),
(11, 'Panalpina', 'http://www.panalpina.imanet.net/parstracker/', '1', '2019-07-18 00:00:00'),
(12, 'Ussel A Farrow PAPS', 'http://tracking.farrow.com/paps.html', '1', '2019-07-18 00:00:00'),
(13, 'Schenker', 'https://www.dbschenker.com/ca-en/', '1', '2019-07-18 00:00:00'),
(14, 'Trans American PAPS', 'https://apps.tacustoms.com/clearborder/', '1', '2019-07-18 00:00:00'),
(15, 'AN Derringer', 'https://www.anderinger.com/track/', '1', '2019-07-18 00:00:00'),
(17, 'Bay Customs', 'https://baybrokerageus.com/resources/paps-status/', '1', '2019-07-18 00:00:00'),
(18, 'Cole PARS', 'https://www1.cole.ca/pars/controller/CCNumberTracking', '1', '2019-07-18 00:00:00'),
(19, 'Delmar PARS', 'http://www.delmarcargo.com/mobile/pars', '1', '2019-07-18 00:00:00'),
(20, 'Expeditors', 'https://www.expeditors.com', '1', '2019-07-18 00:00:00'),
(21, 'J.W. Smith Customs Brokers', 'https://jwsmith.com/log-in-1', '1', '2019-07-18 00:00:00'),
(22, 'FedEx Trade Networks', 'https://www.fedex.com/global/choose-location.html', '1', '2019-07-18 00:00:00'),
(23, 'PCB Customs Pars', 'https://www.pcb.ca/', '1', '2019-07-18 00:00:00'),
(24, 'LM Clark PARS', 'http://www.lmclark.com/pars_status.asp', '1', '2019-07-18 00:00:00'),
(25, 'Norman G Jensen PARS', 'https://www.livingstonintl.com/', '1', '2019-07-18 00:00:00'),
(26, 'Pacific Customs', 'https://www.pcb.ca/', '1', '2019-07-18 00:00:00'),
(27, 'Russel A Farrow PARS', 'http://tracking.farrow.com/pars.html', '1', '2019-07-18 00:00:00'),
(28, 'Rutherford', 'http://www.rutherfordglobal.com/', '1', '2019-07-18 00:00:00'),
(29, 'Tahoco PAPS', 'http://taco.ca/en/', '1', '2019-07-18 00:00:00'),
(30, 'Trans American PARS', 'https://apps.tacustoms.com/clearborder/', '1', '2019-07-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpars`
--

CREATE TABLE `tblpars` (
  `ParsId` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Links` varchar(100) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `UpdatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpars`
--

INSERT INTO `tblpars` (`ParsId`, `Title`, `Links`, `CreatedOn`, `UpdatedOn`) VALUES
(1, 'United States Department of Transportation', 'http://www.dot.gov/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(2, 'Transport Canada', 'http://www.tc.gc.ca/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(3, 'Statistics Canada', 'https://www.statcan.gc.ca/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(4, 'Ontario Thaw Restrictions (MTO)', 'http://www.mto.gov.on.ca/english/new/index.shtml', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(5, 'Ontario Ministry of Transportation', 'http://www.mto.gov.on.ca/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(6, 'Ministry of Education and Training', 'https://www.ontario.ca', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(7, 'Industry Canada - Automotive & Transportation', 'http://strategis.ic.gc.ca/sc_indps/sectors/engdoc/tran_hpg.html', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(8, ' Fleet Smart Program', 'https://www.areacodelocations.info/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(9, 'Compass Traffic Camera', 'https://511on.ca/cctv', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(10, 'Ontario Trucking Association', 'http://ontruck.org/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(11, 'Council of Supply Chain Management Professionals', 'https://cscmp.org//', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(12, 'Canadian Association of Chemical Distributors', 'http://www.cacd.ca/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(13, 'American Trucking Associations', 'http://www.truckline.com/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(14, 'US border wait times', 'http://apps.cbp.gov/bwt/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(15, 'US Customs and Border Protection', 'https://bwt.cbp.gov/index.html', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(16, 'Canadian border wait times', 'http://www.cbsa-asfc.gc.ca/bwt-taf/menu-eng.html', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(17, 'Canada Border Services Agency', 'http://www.cbsa-asfc.gc.ca/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(18, ' Area Code Locations', 'https://www.areacodelocations.info/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(19, 'Find a U.S. Zip Code', 'https://tools.usps.com/go/ZipLookupAction!input.action', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(20, 'Find a Canadian Postal Code', 'http://www.canadapost.ca/personal/tools/pcl/bin/popup-e.asp', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(21, 'MapQuest', 'http://www.mapquest.com/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(22, 'The Weather Channel', 'http://www.weather.com/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(23, 'U.S. Government Exporting Portal', 'https://www.export.gov/welcome', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(24, 'U.S. Department of Commerce', 'https://www.commerce.gov/', '2019-06-05 00:00:00', '0000-00-00 00:00:00'),
(25, 'Currency Exchange Rates', 'https://www.xe.com/', '2019-06-05 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ServiceId` int(11) NOT NULL,
  `ServicesTitle` varchar(100) NOT NULL,
  `ServicesDescription` text NOT NULL,
  `ServicesImage` varchar(100) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ServiceId`, `ServicesTitle`, `ServicesDescription`, `ServicesImage`, `IsActive`, `CreatedOn`) VALUES
(1, 'Frozen Shipments', '<p>Cargo that needs to be transported frozen mainly consists of meat and seafood, frozen shipments are much more easily transported. Temperature differences may be slightly greater as the cargo needs to be maintained in a frozen state.</p>\r\n<h4>Commonly frozen shipments:</h4>\r\n<ul>\r\n										<li>Meats</li>\r\n										<li>Medical Supplies</li>\r\n										<li>Paintballs</li>\r\n										<li>Pharmaceuticals</li>\r\n										<li>Plasma</li>\r\n										<li>Poultry</li>\r\n										<li>Powder Coating</li>\r\n										<li>Produce</li>\r\n										<li>Seafood</li>\r\n									</ul>\r\n', '', 1, '2019-06-06 13:01:01'),
(2, 'Chilled Shipments', '<p>Cargo that needs to be transported chilled is generally: fruits, vegetables, and dairy products. These products have to maintain the required temperature to preserve the product until it delivers to the market. These products require sophisticated, expensive monitoring devices to maintain the required temperature, since minute temperature adjustments are necessary to maintain the correct temperature. If the temperature is too low, the product will freeze and spoil. If the temperature is too high, the product will ripen and spoil. Therefore, the controlled temperature technology prolongs shelf life of products or significantly extends them.</p>\r\n<h4>Commonly chilled shipments:</h4>\r\n<ul>\r\n										<li>Fruits</li>\r\n										<li>Vegetables</li>\r\n										<li>Dairy Products</li>\r\n									</ul>\r\n', '', 1, '2019-06-07 06:26:25'),
(3, 'Warehouse Service', '<p>With a huge warehouse, we can handle all of your logistic warehousing and distribution needs. We can de-consolidate or segregate your merchandise in a quick and effective manner without any unnecessary delays. These storage services are characterised with reasonable pricing for both short-term and long-term periods.</p>', '', 1, '2019-07-18 04:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices_gallery`
--

CREATE TABLE `tblservices_gallery` (
  `sgallery_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `services_image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `Createddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices_gallery`
--

INSERT INTO `tblservices_gallery` (`sgallery_id`, `services_id`, `services_image`, `status`, `Createddate`) VALUES
(10, 1, '1925286641_poultry.jpg', '1', '2019-07-18 00:00:00'),
(11, 1, '2446994028_seafood.jpg', '1', '2019-07-18 00:00:00'),
(12, 1, '1847250952_meat.jpg', '1', '2019-07-18 00:00:00'),
(13, 1, '2492333543_power-coating.jpg', '1', '2019-07-18 00:00:00'),
(14, 2, '1380710947_fruits.jpg', '1', '2019-07-18 00:00:00'),
(15, 2, '2915979048_vegitable.jpg', '1', '2019-07-18 00:00:00'),
(16, 2, '6439099653_dairy-product.jpg', '1', '2019-07-18 00:00:00'),
(17, 3, '9131279657_warehouse.jpg', '1', '2019-07-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsitesetting`
--

CREATE TABLE `tblsitesetting` (
  `Siteid` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Timeing` varchar(100) NOT NULL,
  `Timeing2` varchar(255) NOT NULL,
  `Docks_hours` text NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsitesetting`
--

INSERT INTO `tblsitesetting` (`Siteid`, `Email`, `Phone`, `Timeing`, `Timeing2`, `Docks_hours`, `Address`) VALUES
(1, 'info@topstarlogistics.com', '+1 (866)-858-0001', 'Mon - Fri: 8:00 am to 6:00 pm', 'Sat: 9:00 am to 3:00 pm', 'Mon - Fri: 8:00 am to 8:00 pm', '70 Ward Rd Brampton, On Canada L6S 4L5');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `TestimonialId` int(11) NOT NULL,
  `TitleName` varchar(100) NOT NULL,
  `TestimonialDescription` text NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `TestimonialImage` varchar(200) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdatedOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`TestimonialId`, `TitleName`, `TestimonialDescription`, `Designation`, `TestimonialImage`, `IsActive`, `CreatedOn`, `UpdatedOn`) VALUES
(1, 'TUV', '<p>&nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat</p>\r\n', 'Accountant', '2717546891_Baby-New-Pics-1.jpg', 1, '2019-07-25 07:27:19', '2019-07-25 07:27:19'),
(3, 'DEF', '<p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n', 'Director, AKT', '1708764287_pic2.jpg', 1, '2019-07-25 10:20:56', '2019-07-25 10:20:56'),
(4, 'XYZ', '<p>&nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi aliquip consequat.</p>\r\n', 'CFO, First Choice', '7281597038_pic1.png', 1, '2019-07-25 10:23:10', '2019-07-25 10:23:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblabout`
--
ALTER TABLE `tblabout`
  ADD PRIMARY KEY (`AboutId`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `tblemail_template`
--
ALTER TABLE `tblemail_template`
  ADD PRIMARY KEY (`email_template_id`);

--
-- Indexes for table `tblourclient`
--
ALTER TABLE `tblourclient`
  ADD PRIMARY KEY (`ourclient_id`);

--
-- Indexes for table `tblpaps`
--
ALTER TABLE `tblpaps`
  ADD PRIMARY KEY (`PapsId`);

--
-- Indexes for table `tblpars`
--
ALTER TABLE `tblpars`
  ADD PRIMARY KEY (`ParsId`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ServiceId`);

--
-- Indexes for table `tblservices_gallery`
--
ALTER TABLE `tblservices_gallery`
  ADD PRIMARY KEY (`sgallery_id`);

--
-- Indexes for table `tblsitesetting`
--
ALTER TABLE `tblsitesetting`
  ADD PRIMARY KEY (`Siteid`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`TestimonialId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblabout`
--
ALTER TABLE `tblabout`
  MODIFY `AboutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemail_template`
--
ALTER TABLE `tblemail_template`
  MODIFY `email_template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblourclient`
--
ALTER TABLE `tblourclient`
  MODIFY `ourclient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblpaps`
--
ALTER TABLE `tblpaps`
  MODIFY `PapsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblpars`
--
ALTER TABLE `tblpars`
  MODIFY `ParsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ServiceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblservices_gallery`
--
ALTER TABLE `tblservices_gallery`
  MODIFY `sgallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblsitesetting`
--
ALTER TABLE `tblsitesetting`
  MODIFY `Siteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `TestimonialId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
