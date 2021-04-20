-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 07:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(11) NOT NULL,
  `bgroup` varchar(500) NOT NULL,
  `amount` int(11) NOT NULL,
  `hospid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `hospid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `campdetails`
--

CREATE TABLE `campdetails` (
  `campid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `campreg`
--

CREATE TABLE `campreg` (
  `campid` int(11) NOT NULL,
  `campname` varchar(100) NOT NULL,
  `orgname` varchar(100) NOT NULL,
  `campdes` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `docdetails`
--

CREATE TABLE `docdetails` (
  `docid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `special` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `docid` int(100) NOT NULL,
  `drname` varchar(200) NOT NULL,
  `contact` int(100) NOT NULL,
  `spec` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `conpassword` varchar(100) NOT NULL,
  `location1` varchar(250) NOT NULL,
  `location2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donordetails`
--

CREATE TABLE `donordetails` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `contact` int(20) NOT NULL,
  `bgroup` varchar(500) NOT NULL,
  `hospid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldetails`
--

CREATE TABLE `hospitaldetails` (
  `hospid` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitaldetails`
--

INSERT INTO `hospitaldetails` (`hospid`, `name`, `location`, `contact`, `email`, `password`) VALUES
(1, 'G.B.Pant hospital', 'Andaman & Nicobar Islands', '913192232102', '', ''),
(2, 'Guwahati Medical College &  hospital', 'Assam ', '913612529457', 'gmch-asm@nic.in', ''),
(4, 'Apollo Hospitals', 'Guawahati Assam', '913612347715', 'info@apollohospitalsguwahati.com', ''),
(5, 'Ford Hospital & Research Centre', 'Patna, Bihar', '919798215882', 'info@fordhospital.org', ''),
(6, 'Patna Medical College & Hospital (PMCH)', 'Patna, Bihar', '916122300343', 'http://patnamedicalcollege.com/pmch/', ''),
(7, 'Udayan Hospital', 'Patna, Bihar', '91612557550', 'info@udayanhospital.com', ''),
(8, 'Hill View Hospital & Research Centre', 'Ranchi, Jharkhand', '916512542363', 'info@hillviewhospital.in', ''),
(9, 'Ranchi Institute of Neuro-Psychiatry & Allied Sciences (RINPAS)', 'Jharkhand', '916512450813', 'directorrinpas@gmail.com', ''),
(10, 'Tata Main Hospital (TMH)', 'Jamshdepur, Jharkhand ', '916576641233', 'http://www.tatamainhospital.com/', ''),
(11, 'Haryana Multispecialty Hospital', 'Haryana 131001', '919034591513', 'hmedicarecenter@gmail.com', ''),
(12, 'Civil Hospital', 'Shillong, Meghalaya 793001', '913642223889', '', ''),
(13, 'Nazareth Hospital', 'Meghalaya-793003', '913642210188', 'nazarethshillong@gmail.com', ''),
(14, 'Apollo Hospitals', 'Bhubaneswar-751005, Odisha', '916746661016', 'https://www.apollohospitals.com/locations/india/bhubaneshwar', ''),
(15, 'BR Life Kalinga Hospital', 'Bhubaneswar - 751023, Odisha', '916746665200', 'info@kalingahospital.com', ''),
(16, 'Doors & Darjeeling Medical Association (DDMA) Hospital', 'Darjeeling West Bengal', '913542253219', '', ''),
(17, 'North Bengal Medical College & Hospital', 'West Bengal-734012', '919093186828', 'msvpnbmch@gmail.com', ''),
(18, 'Yuma Nursing Home & Diagnostic Centre', '7A Ballen Villa Road, Darjeeling - 734101 West Bengal', '913542257651', 'yumanurshome@gmail.com ', ''),
(19, 'Apollo Gleneagles Hospital', '58 Canal Circular Road Kolkata – 700 054', '913323203040', 'ips_aghl@apollohospitals.com', ''),
(20, 'Belle Vue Clinic', 'Kolkata – 700 071', '913322872321', 'info@bellevueclinic.com', ''),
(21, 'Bhagirathi Neotia Woman & Child Care Centre', 'Kolkata – 700 0017', '913340405000', 'info.bnwcc@neotiahealthcare.com', ''),
(22, 'B.M.Birla Heart Research Centre', 'Kolkata – 700 027', '913330403040', 'helpdesk@birlaheart.org', ''),
(23, 'Calcutta National Medical College & Hospital', 'Kolkata – 700 014', '913322897424', 'msvp_cnmc@wbhealth.gov.in', ''),
(24, 'Columbia Asia Hospital', 'Salt Lake City Kolkata-700091', '913366003300', 'http://india.columbiaasia.com/hospitals/kolkata', ''),
(25, 'Kothari Medical Centre', 'Alipore Road Kolkata – 700 027', '913340127000', 'kmc@kotharimedical.com', ''),
(26, 'Medica Superspeciality Hospital ', 'E.M.Bypass, Kolkata-700 099', '913366520000', 'contactus@medicahospitals.in', ''),
(27, 'Mission of Mercy Hospital & Research Centre', 'Kolkata - 700 017', '913366352002', 'www.momhospital.in', ''),
(28, 'Peerless Hospital & B.K. Roy Research Centre', 'Garia, Kolkata – 700 094', '913340111222', 'ph.enquiry@peerlesshospital.com', ''),
(29, 'SSKM Hospital (Seth Sukhlal Karnani Memorial Hospital)', '244 AJC Bose Road, Kolkata – 700 020', '913322041100', 'director@ipgmer.gov.in', ''),
(30, 'The Calcutta Medical Research Institute (CMRI)', 'Ekbalpore, Kolkata – 700 027', '913330903090', 'intlhelpdesk@cmri.in', ''),
(31, 'NH Narayana Multispecialty Hospital', 'Andul Road, Howrah – 711109 ', '9118602080208', 'info.nmhhowrah@narayanahealth.org', ''),
(32, 'Woodlands Multispecialty Hospital', 'Alipore Road, Kolkata – 700 027', '913324567075', 'enquiry@woodlandshospital.in', ''),
(33, 'Tibetan Delek Hospital', 'Kangra, Himalchal Pradesh - 176215', '911892222053', 'delek@bsnl.in', ''),
(34, 'Kullu Valley Hospital', 'Kullu, Himachal Pradesh - 17510', '911902226397', 'bangahospital@gmail.com', ''),
(35, 'Lady Willingdon Hospital', 'Manali, kullu, himachal Pradesh - 175131', '911902252379', 'ranjit.christopher@gmail.com', ''),
(36, 'Indus Hospital', 'Shimla, Himachal Pradesh - 171002', '911772841401', 'indus@indushospital.org', ''),
(37, 'Sher - i - Kashmir Institute of Medical Sciences (SKIMS)', 'Srinagar, Jammu & Kashmir - 190011', '911942401013', 'contactus@skims.ac.in', ''),
(38, 'All India Institute of Medical Sciences (AIIMS)', 'ansari Nagar, New Delhi - 110029', '911126588500', 'ms@aiims.ac.in', ''),
(39, 'Fortis La Femme (Centre for Women)', 'New Delhi - 110048', '911140579400', 'enquiries@fortishealthcare.com', ''),
(40, 'Fortis Flt. Lt. Rajan Dhall Hospital', 'Vasant Kunj, New Delhi – 110070', '911142776222', 'enquiries@fortishealthcare.com', ''),
(41, 'Indraprastha Apollo Hospitals ', 'Delhi Mathura Road, New Delhi - 110076 ', '911126925858', 'assistance@apollohospitalsdelhi.com', ''),
(42, 'Kubba Skin Clinic', 'Ring Road, New Delhi - 110066', '911124196666', 'info@kubbaskinclinic.com', ''),
(43, 'Max Super Speciality Hospital Saket', 'Press Enclave Road, Saket, New Delhi – 110017', '911126515050', 'ips.query@maxhealthcare.com', ''),
(44, 'Moolchand Hospital', 'Near Moolchand Metro Station, New Delhi 110 024', '911142000000', 'intl@moolchandhealthcare.com', ''),
(45, 'Sir Ganga Ram Hospital', 'Rajinder Nagar, New Delhi 110060 ', '911125750000', 'gangaram@sgrh.com', ''),
(46, 'Fortis Escorts Hospital', 'Verka Bypass Road, Amritsar - 143004, Punjab', '911833012222', 'enquiries@fortishealthcare.com', ''),
(47, 'Randhawa Hospital', 'amritsar, panjab - 143001', '911832226660', 'dr.randhawa@gmail.com', ''),
(48, 'Civil Hospital', 'Islam Ganj, Jalandhar - 144001', '911812227560', 'www.civilhospitaljalandhar.com', ''),
(49, 'SGL Super Speciality Hospital', 'Jalandhar - 144022', '911815043300', 'info@sglhealthcare.org', ''),
(50, 'Post Graduate Institute of Medical Education and Research', 'chandigarh, panjab - 160012', '911722746018', 'pgimer-chd@nic.in', ''),
(51, 'Government Multi Specialty Hospital', 'Chandigarh - 160 016', '911722752042', 'gmsh.ms@gmail.com', ''),
(52, 'Government Medical College and Hospital ', 'Chandigarh - 160 032', '911722601023', 'dpgmch-chd@gmch.gov.in', ''),
(53, 'S.A.S Grewal Multi Speciality Hospital', 'Gurdev Nagar, Ludhiana, Punjab', '911612402444', 'grewalg34@yahoo.com', ''),
(54, 'SPS Apollo Hospitals', 'G.T. Road Ludhiana, punjab -141 003', '911616617111', 'info@spsapollo.com', ''),
(55, 'Fortis Hospital', 'Mohali - 160062, Punjab ', '911724692222', 'enquiries@fortishealthcare.com', ''),
(56, 'Fortis Escorts Hospital', 'Malviya Nagar, Jaipur - 302017, Rajasthan', '911412547000', 'contactus.jaipur@fortishealthcare.com', ''),
(57, 'Goyal Hospital & Research Center Pvt Ltd', 'Rotary Hall, Jodhpur - 342003, Rajasthan', '912912434144', 'info@goyalhospital.org', ''),
(58, 'GBH American Hospital', 'Meera Girls College Road, Udaipur-313001, Rajasthan ', '912943056000', 'contact@gbhamerican.com', ''),
(59, 'Maharana Bhupal Government Hospital', 'Chetak Circle City, Udaipur – 313001 Rajasthan', '912942528811', '', ''),
(60, 'Combined (P.G.) Institute of Medical Sciences & Research', 'Haridwar Road, Dehradun – 248160', '911352657673', 'director@cimsrdoon.com', ''),
(61, 'Himalayan Hospital', 'PO Doiwala, Dehradun - 248140 Uttarakhand', '911352471200', 'pb@hihtindia.org', ''),
(62, 'Pareek Hospital and Research Centre', 'Agra-282 003 Uttar Pradesh', '915622520071', 'alokpsr@gmail.com', ''),
(63, 'S N Medical College', 'Moti Katra, Agra - 282002 Utter Pradesh', '915622260353', 'deansnmc@yahoo.in', ''),
(64, 'Heritage Hospital', 'Lanka, Varanasi-05 Uttar Pradesh', '915422368888', 'ms@heritagehospitals.in', ''),
(65, 'Apollo Health City', 'Jubilee Hills, Hyderabad', '4023607777', 'ips_hyd@apollohospitals.com', ''),
(66, 'KIMS Hospital', 'Minister Road, Hyderabad ', '919100024926', 'assistance@kimshospitals.com; raunak.j@kimshospitals.com', ''),
(67, 'Nizam’s Institute of Medical Sciences (NIMS)', 'Punjagutta, Hyderabad', '4023390933', 'nims@nic.in', ''),
(68, 'Apollo Hospitals', 'Bangalore -560078 ', '918040304050', 'customercare_bangalore@apollohospitals.com', ''),
(69, 'Lakeside Medical Centre & Hospital', 'Near Ulsoor Lake, Bangalore – 560 042', '918025366723', 'lakesidemedicalcentre1980@gmail.com', ''),
(70, 'National Institute of Mental Health & Neuro Sciences', 'Hosur Road, Bangalore - 560029', '9108026995001', 'dirstaff@nimhans.ac.in', ''),
(71, 'A J Hospitals', 'Mangalore – 575004, Karnataka ', '919483545247', 'mailbox@ajhospital.in', ''),
(72, 'Father Muller Hospital', 'Kankanady, Mangalore - 575 002, Karnataka', '8242238000', 'muller@fathermuller.in', ''),
(73, 'B G S Apollo Hospital', 'Kuvempunagar, Mysore – 570 023', '8212568888', 'apollo_bgs@apollohospitals.com', ''),
(74, 'Gopala Gowda Shantaveri Memorial Hospitals', 'Nazarbad, Mysore–570010', '919845126036', 'ggsmh@gmail.com', ''),
(75, 'T.D. Medical College Hospital', 'Alappuzha, Kerala', '4772282015', 'tdmcalappuzha@gmail.com', ''),
(76, 'Century Hospital', 'Chengannur Alappuzha 689505 Kerala', '4792469469', 'ctshl@dataone.in', ''),
(77, 'Pushpagiri Hospital', '0469 2700755', '4692700755', 'tech@pushpagiri.in', ''),
(78, 'Amrita Institute of Medical Sciences and Research Centre', 'AIMS Ponekkara, Kochi-682026', '4842851234', 'aimsinternational@aims.amrita.edu', ''),
(79, 'Lake Shore Hospital and Research Centre', 'Nettoor P.O, Kochi - 682 040', '4842701033', 'info@lakeshorehospital.com', ''),
(80, 'Medical Trust Hospital', 'MG Road, Kochi- 682 016 ', '4842358001', 'info@medicaltrusthospital.org', ''),
(81, 'Medivision scan and Research Centre', 'Ravipuram, Ravipuram, Ernakulam – 682016 ', '4844112000', 'info@medvision.in', ''),
(82, 'Indo- American Hospital', 'Vaikom, Kottayam, Kerala - 686 143', '4829217800', 'info@indoamercianhospital.in', ''),
(83, 'S.H. Medical Centre', 'Near railway station Kottayam, Kerala', '48125620773', 'shmedicalcentre@yahoo.com', ''),
(84, 'Elite Mission Hospital', 'Thrissur, Kerala – 680 007', '4872423322', 'info@elitemissionhospital.com', ''),
(85, 'Trichur Metropolitan Healthcare Pvt. Ltd', 'Thrissur, Kerala – 680 007', '4872425123', 'metropolitanh@gmail.com', ''),
(86, 'West Fort HighTech Hospital', 'Punkunnam Thrissur, Kerala – 680 002', '4872388999', 'info@wfhightech.in', ''),
(87, 'Ananthapuri Hospitals and Research Institute', 'Chakki NH Bypass, Thiruvananthapuram – 695024', '4712579900', 'ananthapurihri@vsnl.net', ''),
(89, 'Kerala Institute of Medical Sciences', 'Anayara P.O., Trivandrum - 695 029 ', '4712447575', 'gihcml@satyam.net.in', ''),
(90, 'Apollo Clinic', 'Pondy Bazaar, Chennai, 600 017', '4428155318', 'tnagar@apolloclinic.com', ''),
(91, 'Apollo Hospitals', 'Off Greams Road, Chennai 600 006', '914428290200', 'enquiry@apollohospitals.com', ''),
(92, 'Frontier Lifeline', 'Mogappiar, Chennai 600 101', '4442017575', 'info@frontierlifeline.com', ''),
(93, 'M.V. Hospital for Diabetes', 'Royapuram, Chennai - 600 013 ', '4425954913', 'drvijay@mvdiabetes.com', ''),
(94, 'MIOT Hospitals', 'Manapakkam, Chennai - 600 089', '4422492288', 'chairman@miothospitals.com', ''),
(95, 'KG Hospital', 'Gopalapuram, Coimbatore, Tamil Nadu 641018', '4222212121', 'drgb@kggroup.com', ''),
(96, 'Andrews Hospital', 'Madurai, Tamil Nadu 625002', '4522531415', 'poornimarobin@gmail.com', ''),
(97, 'Apollo Hospitals', 'Madurai, Tamil Nadu -625 020', '4524341066', 'Apollo_madurai@apollohospitals.com', ''),
(98, 'Meenakshi Mission Hopsital', 'Lake Area Melur Road, Madurai, Tamil Nadu 625007', '4524263000', 'info@mmhrc.in', ''),
(99, 'JIPMER', 'Gorimedu, Puducherry – 605 006', '4132272380', 'jipmer@jipmer.edu.in', ''),
(100, 'Nallam Clinic', ', Eswaran Koil Street, Pondicherry - 605001 ', '4132338100', 'clinicnallam@gmail.com', ''),
(101, 'Pondicherry Institute of Medical Sciences', 'Kalapet, Pondicherry-605014', '4132656271', 'mmmpims@gmail.com', ''),
(102, 'Victor Hospital, Margao, South Goa', 'Margao, Goa 403601', '918326728888', 'info@victorhospital.com', ''),
(103, 'Classic Hospital, Margao, South Goa', 'Malbhat, Margao, Goa 403 601', '918322711013', 'hospitalclassic@gmail.com', ''),
(104, 'Galaxy Hospital, Mapusa, North Goa', 'Xelpem, Duler, Mapusa, Goa, 403 507', '918322266666', 'contact@galaxyhospitalgoa.com', ''),
(105, 'Healthway Hospital, Panaji, North Goa', 'Mala, Panaji, Goa 403001', '918322224966', 'info@healthwayhospitals.com', ''),
(106, 'Healthway Hospital, North Goa', 'Tiswadi, North Goa', '918322467666', 'info@healthwayhospitals.com', ''),
(107, 'Manipal Hospital, Dona Paula, North Goa', 'Dona Paula, Goa 403004', '918326632500', 'info@manipalhospitals.com', ''),
(108, 'Royal Hospital, Margao, South Goa', 'Aquem, Margao, Goa 403601', '918322737722', 'royalhospitalmargao@gmail.com', ''),
(109, 'Salgaocar Medical Research Centre', 'Vasco, Goa', '918326691919', 'smrc@smrcgoa.org', ''),
(110, 'Trinity Healthcare Hospital, Panaji, North Goa', 'Miramar Panaji, Goa 403001', '918322462444', 'Trinity.healthcarehospital@gmail.com', ''),
(111, 'Aarogyam Speciality Hospital', 'Navrang School Circle, Ahmedabad–380014', '917926463535', 'ketanshukla1968@gmail.com', ''),
(112, 'Civil Hospital Ahmedabad', 'Asarwa, Ahmedabad–380016', '917922683721', 'info@civilhospitalamdavad.org', ''),
(113, 'Devasya Kidney & Multi Speciality Hospital', 'Vadaj Road, Ahmedabad – 380013', '917927642100', 'marketing@devasyahospital.com', ''),
(114, 'Lallubhai Gordhanbhai Municipal General Hospital', 'Maninagar, Ahmedabad – 380008', '9107925461380', '', ''),
(115, 'Mayflower Women’s Hospital', 'Memnagar, Ahmedabad–380052', '9107927495001', 'drsatish@mayflowerhospital.com', ''),
(116, 'Shalby Hospitals', 'S G Road, Ahmedabad – 380015', '917940203000', 'info@shalby.org', ''),
(117, 'Sheth Vadilal Sarabhai Hospital', 'Ellis Bridge, Ahmedabad – 380006', '917926577621', '', ''),
(118, 'The Gujarat Research & Medical Insitiute', 'Shahibaug, Ahmedabad – 380004', '917922866311', 'curewithcare@grmi.org.in', ''),
(119, 'Adventist Wockhardt Heart Hospital', 'Athwalines, Surat – 395001', '912616694444', ': treatment@wockhardthospitals.com', ''),
(120, 'Bankers Heart Institute', 'Old Padra Road, Vadodara – 390015', '912652324004', 'info@bankersheart.com', ''),
(121, 'Baroda Heart Institute & Research Center', 'Old Padra Road, Vadodara – 390007', '912652325444', 'info@bhirc.com', ''),
(122, 'Bhailal Amin General Hospital', 'Gorwa Road, Vadodara – 390003', '912653956222', 'contact@baghospital.com', ''),
(123, 'Jamnabai General Hospital', 'Mandvi, Vadodara – 390017', '9102652518134', '', ''),
(124, 'Shree Sayaji General Hospital', 'Raopura, Vadodara – 390001', '9102652426799', '', ''),
(125, 'Shubhechha Multispeciality Hospital', 'Akota, Vadodara – 390020', '912652341062', 'mruprem@gmail.com', ''),
(126, 'Sterling Hospital', 'Vadodara, Gujarat – 390007', '912652323500', 'info@sterlinghospitals.com', ''),
(127, 'Sunderam Arthritis & Joint Replacement Institute', 'R.C. Dutt Road, Vadodara – 390007', '912652353034', 'shitalvaidya@gmail.com', ''),
(128, 'Jabalpur Hospital & Research Centre', 'Napier Town Jabalpur, Jabalpur – 482001', '917612450761', 'jhrc_hrd@yahoo.co.in', ''),
(129, 'Breach Candy Hospital Trust', 'Mumbai – 400026', '912223667949', 'info@breachcandyhospital.org', ''),
(130, 'Holy Spirit Hospital', 'Andheri East, Mumbai – 400093', '912228248500', 'www.holyspirithospital.org', ''),
(131, 'Jaslok Hospital', 'Pedder Road, Mumbai, Maharashtra – 400026', '912266573333', 'online@jaslokhospital.net', ''),
(132, 'Lilavati Hospital & Research Centre', 'Bandra West, Mumbai – 400050', '912226751000', 'lilaweb@lilavatihospital.com', ''),
(133, 'Masina Hospital', 'Byculla East, Mumbai – 400027', '912261841200', 'contact@masinahospital.com', ''),
(134, 'Nanavati Super Speciality Hospital', 'Vile Parle West, Mumbai – 400056', '912226267500', 'info@nanavatihospital.org', ''),
(135, 'P D Hinduja National Hospital & Medical Research Centre (PDHNH)', 'Mahim, Mumbai – 400016', '912224447405', 'info@hindujahospital.com', ''),
(136, 'Seven Hills Hospital', 'Andheri East, Mumbai – 400059', '912267676767', 'response@sevenhillshospital.com', ''),
(137, 'Smile Care India', 'S.V.Road, Bandra West, Mumbai – 400050', '912226431670', '', ''),
(138, 'Bhabha Hospital', 'Bandra West, Mumbai 400050', '912226422541', '', ''),
(139, 'Bombay Hospital', 'Marine Lines Mumbai 400020', '912222067676', 'helpdesk@bombayhospital.com', ''),
(140, 'Byl Nair Charitable Hospital', 'Nair Road, Mumbai 400008', '12223027000', 'deannt@vsnl.net', ''),
(141, 'Cama & Albless Hospital', 'Mahapalika Marg, Fort, Mumbai – 400001', '912222611871', '', ''),
(142, 'Dr. Rustomji Narsi Municipal General (Cooper) Hospital', 'Juhu Scheme, Juhu, Mumbai – 400056', '912226207254', 'cooperhospitaljuhu@hotmail.com', ''),
(143, 'Gokuldas Tejpal Hospital', 'Dhobitalao, Mumbai – 400001', '912222621464', 'drjagdishbhawani@gmail.com', ''),
(144, 'Holy Family Hospital', 'Bandra (W), Mumbai – 400050', '912230610555', 'pro@holyfamilyhospital.in', ''),
(145, 'J J Hospital', 'Off Jijabhoy Road, Mumbai – 400008', '912223735555', 'www.gmcjjh.org', ''),
(146, 'King Edward Memorial Hospital', 'Parel, Mumbai – 400012', '912224107000', 'websitecontact@kem.edu', ''),
(147, 'St George Hospital', 'P Dmello Road, Fort, Mumbai – 400001', '912222620242', '', ''),
(148, 'Apollo Hospitals Pune Jehangir Hospital', 'Sassoon Road, Pune – 411001', '912066819999', 'enquiry@apollohospitals.com', ''),
(149, 'Grant Medical Foundation, Ruby Hall Clinic', 'Pune 411001', '919422310505', 'prm5349@yahoo.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `shopdetails`
--

CREATE TABLE `shopdetails` (
  `shopid` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopdetails`
--

INSERT INTO `shopdetails` (`shopid`, `name`, `location`, `contact`, `email`, `password`) VALUES
(1, 'Apollo Pharmacy', 'No 3/1/6/13/8, Mahalaxmi Colony, Armur, Telangana 503224', '8463222939', '', ''),
(2, 'MedPlus Pharmacy and General Store', 'Sircilla Road, Kamareddy, Telangana 503111', '846821016', '', ''),
(3, 'Apollo Pharmacy', 'Nirmal Opposite RTC Bus Stand, Adilabad, Telangana 504106', '9908161207', '', ''),
(4, 'Madina medical & General Store', 'Golconda Fort, Hyderabad, Telangana 500008', '9885748224', '', ''),
(5, 'Venkateshwara Medical & General Stores', 'Vijaya Nagar Colony, Kukatpally, Hyderabad, Telangana 500072', '9989285131', '', ''),
(6, 'My Time Pharmacy', 'MBD Complex, HMT Nagar, Nacharam, Hyderabad, Telangana 500007', '4065445599', '', ''),
(7, 'Asha Medical Hall', 'Nampally, near Market, Hyderabad, Telangana 500001', '4023326966', '', ''),
(8, 'Madan Medical Stores', '10-3-12/4/1, Mehdipatnam, opposite Mehdi Gate, Hyderabad, Telangana 500028', '4023531807', '', ''),
(9, 'Apollo Pharmacy', 'Chanda Nagar, Hyderabad, Telangana 500050', '9177228004', '', ''),
(10, 'CITY Chemist', 'Ahmedabad, Gujarat 382475', '9898202204', '', ''),
(11, 'Sarvodaya Medical Stores', 'A/14 Doctor House, near Parimal Under Bridge, Ellisbridge, Ahmedabad, Gujarat 380006', '9925551321', '', ''),
(12, 'Laxmi Medical & Provision Store', 'Khodiar Nagar, Ahmedabad, Gujarat 382415', '9879237065', '', ''),
(13, 'Anand Medical And Genral Stores', 'Diggi Bazaar, Ajmer, Rajasthan 305001', '1452423421', '', ''),
(14, 'Sethi Medical Stores', 'Opposite Jawaharlal Nehru Hospital, Ajmer, Rajasthan 305001', '1452623951', '', ''),
(15, 'Kishan General & Medical Store', 'JNL Hospital Road Opposite Jawaharlal Nehru Hospital, Rajasthan 305001', '1452972387', '', ''),
(16, 'Ashu Medical Stores', 'Arya Nagar, Ajmer, Rajasthan 305001', '9461386025', '', ''),
(17, 'K.D.M. Medical & General Store', 'Asha Ganj Road, Ajmer, Rajasthan 305001', '9610021884', '', ''),
(18, 'Chandra Medical Store', 'Vaishali Nagar, Ajmer, Rajasthan 305004', '1452641320', '', ''),
(19, 'Mahak Medical Hall', 'Madanganj, Kishangarh, Rajasthan 305801', '9928077077', '', ''),
(20, 'Mahalaxmi Medicos', 'Kishangarh, Rajasthan 305801', '9509201827', '', ''),
(21, 'S.J.Medical Store', 'Sector 3, Malviya Nagar, Jaipur, Rajasthan 302017', '9351261569', '', ''),
(22, 'Shiv Medical & General Store', ' Vaishali Nagar, Jaipur, Rajasthan 302021', '1412355171', '', ''),
(23, 'Heera Medical Stores', 'Kailash Puri Colony, Milap Nagar, Jaipur, Rajasthan 302018', '1412553517', '', ''),
(24, 'Aradhana Medical & General Store', 'Jhotwara, Jaipur, Rajasthan 302013', '9887378258', '', ''),
(25, 'Bhandari Medical & Prov Store', 'Chandi Ki Taksal, Jaipur, Rajasthan 302002', '1412611717', '', ''),
(26, 'Mehta Medical Store', 'Ghaziabad, Uttar Pradesh 201001', '9910319600', '', ''),
(27, 'Chemist House', 'Kapoor Gali, Baba Gangnath Market, Munirka, New Delhi, Delhi 110067', '1146025243', '', ''),
(28, 'Deep Medical Store', ' Mukhram Garden, Block 16, Tilak Nagar, New Delhi, Delhi 110018', '8800525496', '', ''),
(29, 'Ajay Medical Store', 'Noida Sector 18, Atta Market, Pocket E, Sector 27, Noida, Uttar Pradesh 201301', '9911966355', '', ''),
(30, 'Kamal Chemist', 'E-11, Lajpat Nagar-I, New Delhi, Delhi 110024', '1129813588', '', ''),
(31, 'Sk Medicos Pvt Ltd pharmacy / chemist', 'E-51/3, Hauz Khas Market, Block E, Hauz Khas, New Delhi, Delhi 110016', '8700725313', '', ''),
(32, 'Chaturbhuj & Brothers', 'G-45, Connaught Cir, Block G, Connaught Place, New Delhi, Delhi 110001', '1143592755', '', ''),
(34, 'Rajdhani Medical Store', 'Guneet Kashyap Marg Rd, South Extension II, New Delhi, Delhi 110049', '1126255637', '', ''),
(35, 'Nikhil Arogya Pharmacy', '4, 47, C Block Rd, Pocket 4, Sector 6, Rohini, Delhi, 110085', '9350480068', '', ''),
(36, 'The Medicine Shoppe Pharmacy', 'Chander Nagar Rd, New Tagore Nagar, Haibowal Kalan, Ludhiana, Punjab 141001', '9815311333', '', ''),
(37, 'Alamgir Medical Store', 'Atam Nagar, Chet Singh Nagar, Ludhiana, Punjab 141002', '8146203460', '', ''),
(38, 'VIVA - Your Family Chemist', 'Booth No. 81-82, Duggri, Ludhiana, Punjab 141003', '1614673454', '', ''),
(39, 'Punjab Medical Store', 'New Prem Nagar, Krishna Nagar, Ludhiana, Punjab 141002', '1612413834', '', ''),
(40, 'Barewal Medical Store', 'New Professor Colony, Ludhiana, Punjab 141012', '9815046572', '', ''),
(41, 'Aashirwad Chemists', 'Pritm Nagar, Model Town, Ludhiana, Punjab 141002', '1615014676', '', ''),
(42, 'Life Chemist And General Store', 'Sarojini Nagar, Darshan Purwa, Kanpur, Uttar Pradesh 208012', '9336708438', '', ''),
(43, 'Maa Chemist Store', 'Sisamau Bazar, Nehru Nagar, Ram Bagh, Kanpur, Uttar Pradesh 208001', '8960745378', '', ''),
(44, 'Shri Bala Ji Medical Store', 'Kalyandeci Road, Moti Nagar, Civil Lines, Kalyani, Unnao, Uttar Pradesh 209801', '9956605213', '', ''),
(45, 'Kiran Medical Store', 'Adarsh Nagar, Hiran Nagar, Gadan Khera, Uttar Pradesh 209801', '9838614415', '', ''),
(46, 'National Medical Store', 'Tulsimarg, Chowk, Lucknow, Uttar Pradesh 226003', '8562960786', '', ''),
(47, 'Abhishek Medical Store', 'In Front of Haz House, Lucknow, Uttar Pradesh 226008', '9794000095', '', ''),
(48, 'Shakun Medical Store', 'Gole Market, Mahanagar, Lucknow, Uttar Pradesh 226006', '9335025309', '', ''),
(49, 'Anshu Medical Store', 'Gautam Buddha Marg, Lucknow, Uttar Pradesh 226018', '9307078165', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campdetails`
--
ALTER TABLE `campdetails`
  ADD PRIMARY KEY (`campid`);

--
-- Indexes for table `campreg`
--
ALTER TABLE `campreg`
  ADD PRIMARY KEY (`campid`);

--
-- Indexes for table `docdetails`
--
ALTER TABLE `docdetails`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `donordetails`
--
ALTER TABLE `donordetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitaldetails`
--
ALTER TABLE `hospitaldetails`
  ADD PRIMARY KEY (`hospid`);

--
-- Indexes for table `shopdetails`
--
ALTER TABLE `shopdetails`
  ADD PRIMARY KEY (`shopid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
