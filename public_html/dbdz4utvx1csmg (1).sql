-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2023 at 06:08 PM
-- Server version: 5.7.39-42-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdz4utvx1csmg`
--

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_enable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `name`, `address`, `is_enable`, `created_at`, `updated_at`) VALUES
(1, 'O \'Hare International Airport', 'O \'Hare International Airport, Chicago, IL 60666', 1, NULL, NULL),
(2, 'Midway International Airport', 'Midway International Airport ,Chicago, IL 60638', 1, NULL, NULL),
(3, 'Milwaukee Mitchell Airport', 'Milwaukee Mitchell Airport, Milwaukee WI 53207', 1, NULL, NULL),
(4, 'Gary International Airport', 'Gary International Airport, 5789 Industrial Hwy, Gary, IN 46406', 1, NULL, NULL),
(5, 'Dupage Airport', 'DuPage Airport Authority, 2700 International Dr, West Chicago, IL 60185', 1, NULL, NULL),
(6, 'Chicago Executive Airport', 'Chicago Executive Airport-PWK, 1020 Plant Rd, Wheeling, IL 60090', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_image_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_image_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_image_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `slug`, `title`, `introduction`, `content`, `first_image_url`, `first_image_caption`, `first_image_alt`, `second_image_url`, `second_image_caption`, `second_image_alt`, `third_image_url`, `third_image_caption`, `third_image_alt`, `views`, `created_at`, `updated_at`) VALUES
(6, 'why-get-a-limo-service-in-chicago-tips-for-hiring-professionals', 'Why Get a Limo Service in Chicago? Tips For Hiring Professionals', 'A limo service is an excellent choice when it comes to getting around the bustling city of Chicago in style and comfort. Whether you\'re a local or a visitor, opting for a limo service can make your journey exciting and interesting.', '<p>It provides the luxury, convenience, and professionalism that other transportation options may lack. In this article, we will explore why hiring a limo service in Chicago is a wise decision for various occasions and how you can hire professional limo service providers in Chicago.</p>\r\n<h2>Benefits of Using a Limo Service in Chicago</h2>\r\n<p>Some of the few benefits of hiring a limo service in Chicago are mentioned below.&nbsp;</p>\r\n<h3>Comfort and Luxury</h3>\r\n<p><span style=\"color: #0e101a;\">One of the primary reasons to choose a limo service is the unparalleled comfort and luxury it offers.&nbsp;</span></p>\r\n<p><span style=\"color: #0e101a;\">Limousines are well-known for their plush interiors, spacious seating, and amenities that ensure a smooth and relaxing ride.&nbsp;</span></p>\r\n<p><span style=\"color: #0e101a;\">Whether heading to a special event or just wanting to explore the city in style, a limo can turn an ordinary journey into a memorable experience.</span></p>\r\n<h3>Professional Chauffeurs</h3>\r\n<p><span style=\"color: #0e101a;\">A limo service comes with a professional chauffeur who is skilled at driving and knowledgeable about the city.&nbsp;</span></p>\r\n<p><span style=\"color: #0e101a;\">Having a chauffeur ensures you don\'t have to worry about navigation, traffic, or parking, allowing you to focus on enjoying the ride and arriving at your destination promptly.</span></p>\r\n<h3>Time Efficiency</h3>\r\n<p><span style=\"color: #0e101a;\">In a bustling city like Chicago, time is of the essence. Limo services are well-versed in navigating through traffic and finding the most efficient routes to get you to your destination on time. Whether it\'s a business meeting or a flight to catch, a limo service can help you manage your schedule effectively.</span></p>\r\n<h3>Safety and Reliability</h3>\r\n<p><span style=\"color: #0e101a;\">Safety should always be a top priority when choosing transportation. Reputable limo services maintain their fleet meticulously and hire experienced drivers with clean records.&nbsp;</span></p>\r\n<p><span style=\"color: #0e101a;\">Additionally, you can rely on a professional limo service in Chicago to be punctual and provide a safe journey.</span></p>\r\n<h2>Occasions to Hire a Limo Service in Chicago</h2>\r\n<p>Hiring a limo in Chicago for various occasions can add a touch of elegance and luxury to your experience. You can hire a limo service provider for multiple occasions like, weddings, anniversaries celebrations, corporate events, prom, graduation, and so on.&nbsp;</p>\r\n<p>Additionally, limos are perfect for airport transfers, providing a stress-free and comfortable journey. You can also explore the city in full style and luxury. Below we have jotted down a few important occasions on which you must consider hiring Chicago&rsquo;s professional limo service provider.</p>\r\n<h3>Weddings and Anniversaries</h3>\r\n<p><span style=\"color: #0e101a;\">Weddings and anniversaries are special occasions that call for exceptional transportation. A luxurious limo can add a touch of elegance and romance to these cherished moments, making them even more memorable.</span></p>\r\n<h3>Corporate Events and Business Meetings</h3>\r\n<p><span style=\"color: #0e101a;\">For corporate events and business meetings, a limo service can create a lasting impression on clients and business partners. Arriving in a sophisticated limousine portrays professionalism and attention to detail.</span></p>\r\n<h3>Airport Transfers</h3>\r\n<p><span style=\"color: #0e101a;\">Navigating the rush to and from the airport can be stressful, especially with luggage. A limo service can provide a hassle-free airport transfer, ensuring a smooth and comfortable journey.</span></p>\r\n<h3>Proms and Graduations</h3>\r\n<p><span style=\"color: #0e101a;\">Proms and graduations are milestones in a young person\'s life. Renting a limo for these occasions adds a touch of glamour and ensures a safe and enjoyable experience.</span></p>\r\n<h3>Sightseeing and Tours</h3>\r\n<p><span style=\"color: #0e101a;\">For tourists and locals alike, a limo service can be an excellent choice for sightseeing and exploring Chicago\'s landmarks. It lets you sit back and enjoy the city\'s beauty without worrying about directions or parking.</span></p>\r\n<h2>Tips for Choosing the Right Limo Service in Chicago</h2>\r\n<p>Choosing the right limo service involves careful consideration and attention to key factors. Especially it becomes 10x more important to opt for the right limo service in this busy city of America - <a href=\"https://www.chicago.gov/city/en.html\" target=\"_blank\" rel=\"noopener\">Chicago</a>.&nbsp;</p>\r\n<p>Whether it is for a special occasion, airport transfer, or city tour, there are several key factors to consider. Here are a few tips that you need to follow while booking the right limo service in Chicago.&nbsp;</p>\r\n<h3>Check Reviews and Reputation</h3>\r\n<p><span style=\"color: #0e101a;\">Before booking a limo service, read reviews and check their reputation online. Choose a company with positive feedback and a history of satisfied customers.</span></p>\r\n<h3>Fleet Options</h3>\r\n<p><span style=\"color: #0e101a;\">Ensure the limo service offers a diverse fleet based on your needs and preferences. Whether you need a classic stretch limo or a party bus, having options is essential.</span></p>\r\n<h3>Pricing and Hidden Charges</h3>\r\n<p><span style=\"color: #0e101a;\">Transparent pricing is crucial. Request a detailed cost breakdown and inquire about hidden charges to avoid surprises later.</span></p>\r\n<h3>Insurance and Licensing</h3>\r\n<p><span style=\"color: #0e101a;\">Always verify that the limo service has proper insurance and all necessary licenses to operate legally and safely.</span></p>\r\n<h3>Quality of Service</h3>\r\n<p><span style=\"color: #0e101a;\">Customer service matters. Opt for a limo service that is responsive, accommodating, and attentive to your needs.</span></p>\r\n<h2>How to Make Your Limo Experience Exceptional?</h2>\r\n<p>Making your limo experience exceptional requires a combination of planning, communication, and appreciation for the luxury and comfort that a limo service offers. Here are some key tips to make the most of your limo ride:</p>\r\n<ul>\r\n<li><strong>Plan Ahead -</strong> <span style=\"color: #0e101a;\">Book your limo service to ensure availability, especially during peak seasons.</span></li>\r\n<li><strong>Communicate Your Needs - </strong><span style=\"color: #0e101a;\">Let the limo service know about any special requests or requirements you have to tailor the experience to your liking.</span></li>\r\n<li><strong>Consider Special Add-ons -</strong> <span style=\"color: #0e101a;\">Some limo services offer additional amenities, such as champagne or red carpet service, to enhance your experience.</span></li>\r\n<li><strong>Respect the Limo Rules -</strong> <span style=\"color: #0e101a;\">Limos are luxurious vehicles, and treating them with respect is essential. Follow the guidelines set by the limo service to ensure a pleasant journey.&nbsp;</span></li>\r\n<li><span style=\"color: #0e101a;\"><strong>Engage with Your Chauffeur -</strong></span><span style=\"color: #0e101a;\"> Engage in friendly conversation with your chauffeur, but also respect their professionalism. They are there to ensure your safety and provide a pleasant experience, so a courteous and friendly interaction can go a long way.</span></li>\r\n</ul>\r\n<h2>Frequently Asked Questions&nbsp;</h2>\r\n<p><span style=\"color: #0e101a;\"><strong>Is hiring a limo service in Chicago expensive?</strong></span></p>\r\n<p><span style=\"color: #0e101a;\">Hiring a limo service can be affordable, especially when splitting the cost among several passengers. It provides excellent value for special occasions and group travel.</span></p>\r\n<p><span style=\"color: #0e101a;\"><strong>Can I book a limo service for just a few hours?</strong></span></p>\r\n<p><span style=\"color: #0e101a;\">Yes, you can book a professional limo service at </span><a href=\"https://www.spotlimo.com/\" target=\"_blank\" rel=\"noopener\"><strong><em>Spotlimo</em></strong></a><span style=\"color: #0e101a;\"><strong><em> </em></strong></span><span style=\"color: #0e101a;\">at hourly rates.&nbsp;</span></p>\r\n<p><span style=\"color: #0e101a;\"><strong>Are limo services only for weddings and proms?</strong></span></p>\r\n<p><span style=\"color: #0e101a;\">While weddings and proms are popular for hiring limos, you can use them for various events, including corporate functions, airport transfers, and city tours.</span></p>\r\n<p><span style=\"color: #0e101a;\"><strong>How do I choose the exemplary limo service?</strong></span></p>\r\n<p><span style=\"color: #0e101a;\">Look for a limo service with positive reviews, a diverse fleet, transparent pricing, and excellent customer service.</span></p>\r\n<p><span style=\"color: #0e101a;\"><strong>Is it customary to tip the chauffeur?</strong></span></p>\r\n<p><span style=\"color: #0e101a;\">Yes, it is customary to tip the chauffeur as a gesture of appreciation for their superb service.</span></p>\r\n<h3>Takeaway&nbsp;</h3>\r\n<p><span style=\"color: #0e101a;\">To conclude, choosing a limo service in Chicago can make your travel experience exceptional. A limo service offers comfort, luxury, and professionalism from weddings to business meetings.</span></p>\r\n<p><span style=\"color: #0e101a;\">By planning, communicating your needs, and choosing exemplary service, you can make the most of your limo experience and create lasting memories.</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/v1691596994/samples/images/mkemvedd2rymkfgkv0t8.jpg', 'Get professional limo service in chicago', 'Get professional limo service in chicago', 'https://res.cloudinary.com/dujfebpju/image/upload/v1690835975/samples/images/sgapnlycdqqz0ujo95mi.png', 'Professional limo service in chicago For all occasions', 'Professional limo service in chicago For all occasions', 'https://images.pexels.com/photos/2504936/pexels-photo-2504936.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Follow the crucial tips while hiring a limo service in Chicago', 'Follow the crucial tips while hiring a limo service in Chicago', 196, '2023-07-31 13:51:59', '2023-11-30 20:28:22'),
(7, '7-things-to-look-for-in-a-chicago-limo-service-ultimate-guide-2023', '7 Things To Look For In A Chicago Limo Service | Ultimate Guide 2023', 'Who would not want to explore the city of the amazing skyline and twisting streets of Chicago in full style and grandeur?', '<p>Like, this <a href=\"https://theskydeck.com/why-is-chicago-called-the-windy-city/\" target=\"_blank\"\r\n            rel=\"noopener\">Windy City</a> urges tourists to explore the city in proper glamour and style to have a truly\r\n        remarkable experience. And it is no secret that nothing elevates the traveling experience quite like the comfort\r\n        and luxury of a Chicago limo service.&nbsp;</p>\r\n    <p>Whether you are roaming into the heart of downtown for a special event, aiming to make a statement at a business\r\n        engagement, or simply planning a night out on the town, the right limo service can transform your journey into\r\n        an unforgettable experience.</p>\r\n    <p>But, the problem lies in selecting the right <a href=\"https://www.lawinsider.com/dictionary/limousine-services\"\r\n            target=\"_blank\" rel=\"noopener\">limousine service </a>in Chicago. Just know that it does not involve any\r\n        rocket science. Instead, you just need to be a little more conscious while booking a limo service. All you need\r\n        to do is follow a checklist we share below.&nbsp;</p>\r\n    <p>Below we have compiled this comprehensive guide to help you identify the 7 key elements that are crucial for an\r\n        exceptional Chicago limo service experience.</p>\r\n    <ol>\r\n        \r\n            <h2><li>Fleet Variety</li></h2>\r\n      \r\n   \r\n    <p>First thing first; the available fleet variety is one of the most crucial aspects that should be considered when\r\n        choosing a Chicago limo service. A reputable Chicago limo service should offer an extensive fleet of vehicles to\r\n        cater to different preferences and occasions.&nbsp;</p>\r\n    <p>Whether you\'re planning a luxurious wedding, a corporate event, a spacious SUV for a&nbsp; family trip, or a\r\n        night out on the town, having a range of vehicles to choose from is essential. Therefore, you need to look for a\r\n        company that offers a variety of fleets that make a great match for all events.&nbsp;</p>\r\n    <p>Be it sleek sedans or spacious SUVs and elegant stretch limousines, a legit Limo service provider company offers\r\n        all as it demonstrates the company\'s commitment to meeting diverse customer needs.</p>\r\n    <p><a href=\"https://www.spotlimo.com/vehicles\" target=\"_blank\" rel=\"noopener\">Check out the possible fleet\r\n            options</a>!&nbsp;</p>\r\n\r\n        \r\n            <h2><li>Clean and Well-Maintained Vehicles</li></h2>\r\n        \r\n\r\n        <p>The fleet condition is another pivotal criterion when selecting a limo service provider in Chicago. It is\r\n            because\r\n            the fleet condition impacts safety, comfort, professionalism, and overall satisfaction.&nbsp;</p>\r\n        <p>Opting for a provider that offers clean and well-maintained vehicles can significantly improve your overall\r\n            experience and ensure an enjoyable journey. Here\'s why this factor is of utmost importance:</p>\r\n        <ul>\r\n            <li><strong>Safety and Reliability - </strong>Clean and well-maintained vehicles reflect a commitment to\r\n                safety\r\n                and reliability. When a limo service provider invests in keeping their fleet in top condition, it\r\n                demonstrates their dedication to providing safe transportation. Regular maintenance checks, including\r\n                inspections of brakes, tires, lights, and engine components, minimize the risk of unexpected breakdowns\r\n                and\r\n                ensure that you reach your destination without any hitches.</li>\r\n            <li><strong>Comfort and Enjoyment - </strong>The state of the vehicle\'s interior greatly influences your\r\n                travel\r\n                experience. A clean and well-kept interior provides a comfortable and pleasant environment during your\r\n                journey. Stains, odors, and wear and tear can diminish the enjoyment of your ride. Reputable limo\r\n                service\r\n                providers prioritize cleanliness, ensuring that you travel in a space that is both comfortable and\r\n                visually\r\n                appealing.</li>\r\n            <li><strong>Hygiene and Health - </strong>In today\'s health-conscious environment, maintaining a clean and\r\n                hygienic vehicle interior is essential. A limo service provider that places emphasis on cleanliness is\r\n                proactive in ensuring that the interior is regularly sanitized, promoting a healthy environment for\r\n                passengers.</li>\r\n            <li><strong>Attention to Detail - </strong>Choosing a limo service with clean and well-maintained vehicles\r\n                showcases the provider\'s attention to detail and professionalism. It reflects their commitment to\r\n                delivering\r\n                a seamless and impressive experience from start to finish, demonstrating that they value your\r\n                satisfaction\r\n                as a customer.</li>\r\n        </ul>\r\n        <p>Also Read: <a href=\"https://www.spotlimo.com/show-blog/why-get-a-limo-service-in-chicago-tips-for-hiring-professionals\" target=\"_blank\" rel=\"noopener\">Why Get a Limo\r\n                Service\r\n                in Chicago?</a></p>\r\n\r\n       \r\n            <h2> <li> Professional Chauffeurs </li></h2>\r\n     \r\n\r\n        <p>The heart of any outstanding limo service is its team of professional chauffeurs.&nbsp;</p>\r\n        <p>A top-tier Chicago limo service only hires experienced and well-trained drivers who prioritize your safety,\r\n            comfort, and punctuality. These chauffeurs are not just skilled drivers but also knowledgeable guides who\r\n            are\r\n            familiar with the city\'s routes and attractions.&nbsp;</p>\r\n        <p>Moreover, they provide a seamless and enjoyable experience, ensuring that you arrive at your destination on\r\n            time\r\n            and in style.</p>\r\n        <p>Read About WizSpeed&rsquo;s professional chauffeur services that also include <a\r\n                href=\"https://www.spotlimo.com/multilingual-chauffeurs-services\" target=\"_blank\"\r\n                rel=\"noopener\">multi-lingual chauffeur service</a>.&nbsp;</p>\r\n\r\n      \r\n            <h2><li>Exceptional Customer Service</li></h2>\r\n    \r\n\r\n        <p>Exceptional customer service is one of the few hallmarks of a Chicago limo service that stands out from the\r\n            rest.\r\n            From your initial inquiry to the moment you step out of the limousine, the company should provide attentive\r\n            and\r\n            personalized support.&nbsp;</p>\r\n        <p>Therefore, you need to opt for a limo service that is responsive to your questions, transparent about\r\n            pricing,\r\n            and willing to accommodate any special requests you might have. A customer-centric approach reflects the\r\n            company\'s commitment to making your experience unforgettable.</p>\r\n\r\n   \r\n            <h2><li>Pricing Transparency</li></h2>\r\n       \r\n\r\n        <p>When searching for a Chicago limo service, it is essential to find one that is upfront and transparent about\r\n            its\r\n            pricing.&nbsp;</p>\r\n        <p>Hidden fees and unexpected charges can sour the experience, so choose a service that provides a clear\r\n            breakdown\r\n            of costs. Whether you are looking for an airport transfer, a special event, or an hourly rental, knowing the\r\n            exact price beforehand helps you make an informed decision and avoid any unpleasant surprises.</p>\r\n        <p>Also, Please note that transparent pricing plays a pivotal role in establishing trust and credibility between\r\n            the\r\n            limo service provider and the customer. By clearly presenting all costs associated with the service upfront,\r\n            customers can confidently evaluate whether the service aligns with their budget and needs.</p>\r\n\r\n     \r\n            <h2><li>Positive Reviews and Reputation</li></h2>\r\n      \r\n\r\n        <p>In today\'s advanced world, it is easier than ever to gauge the reputation of a Chicago limo service. So,\r\n            before\r\n            making your decision, take the time to read reviews and testimonials from previous clients.&nbsp;</p>\r\n        <p>Notably, a service with consistently positive feedback demonstrates its commitment to providing excellent\r\n            service\r\n            and customer satisfaction. All you need to do is look for reviews that highlight punctuality,\r\n            professionalism,\r\n            and overall experience.&nbsp;</p>\r\n        <p>Please take these indicators seriously as they can guide you toward a limo service that aligns with your\r\n            expectations.</p>\r\n\r\n     \r\n            <h2><li>Extra Amenities and Services</li></h2>\r\n        \r\n    </ol>\r\n    <p>To truly make your experience memorable, it is better to inquire about any additional amenities or services\r\n        that\r\n        the limo company offers. This could include complimentary drinks, entertainment systems, Wi-Fi, and more.\r\n        Notably, these extra touches can elevate your journey from ordinary to extraordinary.</p>\r\n    <h3>The Final Take</h3>\r\n    <p>To conclude, finding the ideal Chicago limo service does not need any complex decisions; rather, it merely\r\n        involves a conscious approach during booking. We have already provided a comprehensive checklist in this\r\n        article\r\n        that will help you identify the key elements for an exceptional limo service experience.</p>\r\n    <p>By focusing on these aspects, you are well on your way to finding the perfect Chicago limo service for your\r\n        next\r\n        event or outing.</p>', 'https://res.cloudinary.com/dujfebpju/image/upload/v1691596007/samples/images/vpgr602vrjucgdrcqtcz.jpg', 'Must Consider 7 Things To Look For In A Chicago Limo Service', 'Must Consider 7 Things To Look For In A Chicago Limo Service', 'https://res.cloudinary.com/dujfebpju/image/upload/v1691595646/samples/images/srxuxwoa8pzs9f0jpg0u.jpg', 'Professional Limo Service In Chicago', 'Professional Limo Service In Chicago', 'https://res.cloudinary.com/dujfebpju/image/upload/v1691595482/samples/images/kcu8noeakv92lg4yyaay.jpg', 'Get professional Chicago Limo Service', 'Get professional Chicago Limo Service', 117, '2023-08-09 15:44:03', '2023-11-30 20:21:19'),
(8, 'want-to-relieve-traffic-stress-in-chicago', 'Want to Relieve Traffic Stress in Chicago? Rent a Limo Bus From WizSpeed', '<p>Dealing with traffic stress in a bustling city like Chicago can be overwhelming. It may cause unnecessary stress. As the constant congestion, unpredictable delays, and the endless search for parking spaces can quickly turn a simple commute into a nerve-wracking experience.&nbsp;</p>\r\n<p>However, effective solutions are available to get rid of this stress and make your Chicago travel experience more enjoyable. This article will explore the benefits of renting a limo bus or using a car service to navigate the city easily.</p>', '<p>Let’s dig into it! </p>  \r\n  <h2>Understanding the Chicago Traffic Challenge</h2>\r\n    <p><span style=\"color: #0e101a;\">Chicago, known for its vibrant culture and thriving business scene, also needs to\r\n            improve its reputation of having some of the most congested roads in the United States. Navigating through\r\n            this urban jungle can be daunting, causing stress and frustration for residents and visitors alike.</span>\r\n    </p>\r\n    <p><span style=\"color: #0e101a;\">In response to the traffic dilemma, alternative transportation options have gained\r\n            popularity. People are looking for ways to make their journeys more efficient and enjoyable. This is where\r\n            limo bus rentals and car services come into play.</span></p>\r\n    <p><span style=\"color: #0e101a;\">And when it comes to professional limo service providers, no one can beat the\r\n            exceptional services of WizSpeed. Here are nine reasons why you should choose WizSpeed Limousine\r\n            Services.&nbsp;</span></p>\r\n    <h3>Luxury and Comfort: Renting a Limo Bus</h3>\r\n    <p><span style=\"color: #0e101a;\">Limousines or party buses offer a unique blend of luxury, comfort, and convenience.\r\n            Imagine traveling through the city in a spacious and well-appointed vehicle with plush seating,\r\n            entertainment systems, and even mini-bars. This is a stress-free way to travel and a memorable\r\n            experience.</span></p>\r\n    <h3>Convenience and Efficiency: Opting for a Car Service</h3>\r\n    <p><span style=\"color: #0e101a;\">For those seeking a more low-key but equally effective option, car services provide\r\n            the convenience of being chauffeured in a comfortable sedan or </span><a\r\n            href=\"https://cars.usnews.com/cars-trucks/rankings/suvs\" target=\"_blank\" rel=\"noopener\">SUV</a><span\r\n            style=\"color: #0e101a;\">. Moreover, our professional drivers who are well-versed in navigating Chicago\'s\r\n            streets will ensure you reach your destination promptly without the stress of driving yourself.</span></p>\r\n    <h3>Professional Chauffeurs: Your Stress-Free Journey</h3>\r\n    <p><span style=\"color: #0e101a;\">The presence of WizSpeed&rsquo;s professional chauffeur not only adds a touch of\r\n            elegance to your travel but also removes the burden of dealing with traffic. Instead of focusing on the\r\n            road, you can concentrate on other tasks or enjoy the view.</span></p>\r\n    <h3>Group Travel Made Easy with Limo Buses</h3>\r\n    <p><span style=\"color: #0e101a;\">Traveling with a group can amplify the challenges of traffic. WizSpeed Limo buses\r\n            provide an excellent solution by accommodating larger parties comfortably. This is particularly advantageous\r\n            for corporate events, family gatherings, or a night out with friends.</span></p>\r\n    <h3>Corporate Travel: Impressions Matter</h3>\r\n    <p><span style=\"color: #0e101a;\">In the corporate world, impressions matter the most and we just cannot deny this\r\n            fact. Arriving at a business meeting or corporate event in a stylish limo bus or a sleek car service vehicle\r\n            can leave a lasting positive impression on clients and colleagues.</span></p>\r\n    <h3>Special Occasions Elevated with WizSpeed Limo Buses</h3>\r\n    <p><span style=\"color: #0e101a;\">Whether it is a wedding, prom night, or a milestone birthday celebration, special\r\n            occasions become even more memorable when you arrive in a luxurious vehicle. Limo buses offer a touch of\r\n            glamour and sophistication to any event.</span></p>\r\n    <h3>Eco-Friendly Travel: The Green Aspect</h3>\r\n    <p><span style=\"color: #0e101a;\">If you are conscious of your environmental footprint, you will be pleased to know\r\n            that many WizSpeed fleets are embracing eco-friendly practices. They are incorporated with hybrid or\r\n            electric options, allowing you to travel in style while minimizing environmental impact.</span></p>\r\n    <h3>Choosing the Right Service Provider</h3>\r\n    <p><span style=\"color: #0e101a;\">Selecting a reliable and reputable service provider ensures a smooth and\r\n            stress-free experience. Look for companies with positive reviews, a diverse fleet of vehicles, and a\r\n            commitment to customer satisfaction.</span></p>\r\n    <h3>Booking in Advance: Ensuring Availability</h3>\r\n    <p><span style=\"color: #0e101a;\">To avoid disappointment, especially during peak travel seasons, it is advisable to\r\n            book your limo bus or car service well in advance. This guarantees that your chosen vehicle will be\r\n            available when you need it. You can always book or make a reservation online at </span><a\r\n            href=\"https://www.spotlimo.com/\" target=\"_blank\" rel=\"noopener\">https://www.spotlimo.com/</a><span\r\n            style=\"color: #0e101a;\">.&nbsp;</span></p>\r\n    <h3>Frequently Asked Questions&nbsp;</h3>\r\n    <ol>\r\n        <span style=\"color: #0e101a;\"><strong><li>Is renting a limo bus cost-effective for small groups?</li></strong></span>\r\n        \r\n \r\n    <p><span style=\"color: #0e101a;\">Yes, our limo buses can accommodate varying group sizes, making them cost-effective\r\n            for small and large groups.</span></p>\r\n   \r\n        <span style=\"color: #0e101a;\"><strong><li>Can I choose a specific car model for the car service?</li></strong></span>\r\n        \r\n     <p><span style=\"color: #0e101a;\">Many car service providers offer a selection of vehicle models, allowing you to\r\n            find one that suits your preferences. VIsit our fleet range at </span><a\r\n            href=\"https://www.spotlimo.com/vehicles\" target=\"_blank\"\r\n            rel=\"noopener\">https://www.spotlimo.com/vehicles</a><span style=\"color: #0e101a;\">.&nbsp;</span></p>\r\n\r\n        <span style=\"color: #0e101a;\"><strong><li>Are the chauffeurs knowledgeable about Chicago\'s\r\n            attractions?</li></strong></span>\r\n    </ol>\r\n    <p><span style=\"color: #0e101a;\">Yes, Our professional chauffeurs are familiar with the city and can provide\r\n            recommendations and insights about the top attractions.</span></p>\r\n    <h3>Takeaway&nbsp;</h3>\r\n    <p><span style=\"color: #0e101a;\">Navigating the traffic of Chicago can be a smooth experience. Whether you prefer\r\n            the luxurious experience of a limo bus or the efficiency of a car service, these alternative transportation\r\n            options offer a gateway to a more relaxing and enjoyable journey through the city.</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/v1691769210/samples/images/ryxu39cif9l1l5rbqmmq.jpg', 'Get the professional limo services for navigating through stressful traffic of Chicago', NULL, 'https://res.cloudinary.com/dujfebpju/image/upload/v1691769695/samples/images/k92iwntotqwhvrclvbsm.png', 'WizSpeed Limo Service to rescue congested traffic of Chicago', NULL, 'https://res.cloudinary.com/dujfebpju/image/upload/v1691769777/samples/images/x98ntlpjdot0qrub3rxq.png', 'WizSpeed limo service for Chicago\'s stressful traffic', NULL, 102, '2023-08-29 15:23:15', '2023-11-30 20:29:06'),
(9, 'discover-why-limousine-maintenance-is-so-important', 'Discover Why Limousine Maintenance Is So Important', '<p>In the world of luxury transportation, few vehicles exude as much class and elegance as a limousine. As it is no secret that Limousines are synonymous with luxury, elegance, and sophistication. They are not just vehicles; they represent a statement of style and status. </p>\r\n\r\n<p>These extended luxury cars have become a symbol of sophistication and style, making them popular for special occasions, corporate events, and high-profile individuals. However, behind the allure of these stunning vehicles lies a crucial aspect that often goes unnoticed - their regular maintenance. </p>', '<p><span style=\"color: #0e101a;\">Please note that regular maintenance is crucial to ensure that they continue to\r\n                        exude this charm. In this article, we will explore the main reasons why limousine maintenance is\r\n                        so important.</span></p>\r\n        <ol>\r\n                <li>\r\n                        <h2>Subdue Costly Consequences</h2>\r\n                </li>\r\n \r\n        <p><span style=\"color: #0e101a;\">Limousines represent a significant investment for individuals and businesses\r\n                        alike. Protecting this investment involves more than just routine care; it requires a proactive\r\n                        approach to maintenance.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Here are the two costly consequences that regular maintenance can\r\n                        subdue.&nbsp;</span></p>\r\n        <ul>\r\n                <li>\r\n                        <h3>Avoiding Expensive Repairs</h3>\r\n                </li>\r\n\r\n        <p>Limousines require consistent care to prevent minor issues from snowballing into significant repair bills\r\n                like any other vehicle. Neglecting maintenance can lead to engine problems, transmission issues, and\r\n                more. Regular check-ups and servicing can catch these problems early on, saving you from expensive\r\n                repairs.</P>\r\n\r\n                <li>\r\n                        <h3>Extending the Lifespan</h3>\r\n                </li>\r\n                <p>Proper maintenance can significantly extend the lifespan of your limousine. A well-maintained vehicle can\r\n                        easily serve you for many years. It ultimately provides a higher return on your investment. Routine\r\n                        tasks like oil changes, tire rotations, and fluid checks contribute to the longevity of your luxury\r\n                        ride.</p>\r\n                </ul>\r\n            \r\n                        <h2><li>Optimizing Performance</li></h2>\r\n                    <p><span style=\"color: #0e101a;\">A well-maintained limousine ensures safety and delivers optimal performance on\r\n                        the road. Limousines are equipped with powerful engines and advanced suspension systems to\r\n                        provide a smooth and comfortable ride.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Therefore, regular maintenance, including oil changes, engine tune-ups, and\r\n                        tire rotations, helps to keep these complex systems in check. This, in turn, results in\r\n                        consistent and reliable performance and allows passengers to experience the luxury and comfort\r\n                        they expect from a limousine.</span></p>\r\n        <p><span style=\"color: #0e101a;\"><strong><em>Must Read: </em></strong></span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/7-things-to-look-for-in-a-chicago-limo-service-ultimate-guide-2023\" target=\"_blank\" rel=\"noopener\"><strong><em>7 Things\r\n                                        To Look For In A Chicago Limo Service</em></strong></a></p>\r\n   \r\n               \r\n                        <h2><li>Safety First</li></h2>\r\n               \r\n\r\n        <p><span style=\"color: #0e101a;\">Safety should always be the top priority when it comes to any mode of\r\n                        transportation, and limousines are no exception. Limousines are designed to carry a larger\r\n                        number of passengers than regular cars. It means that their safety systems and components are\r\n                        even more critical.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Therefore, regular maintenance checks are essential to ensure that all safety\r\n                        features, such as </span><a href=\"https://www.iihs.org/topics/airbags\" target=\"_blank\"\r\n                        rel=\"noopener\">airbags</a><span style=\"color: #0e101a;\">, seatbelts, and anti-lock braking\r\n                        systems, are in perfect working condition. This guarantees the well-being of every passenger on\r\n                        board, providing them with peace of mind as they enjoy the luxurious journey.</span></p>\r\n   \r\n                        <h2><li>Upholding Reputation</li></h2>\r\n             \r\n   \r\n        <p><span style=\"color: #0e101a;\">Clients who hire limousines have high expectations for their experience, and\r\n                        any inconvenience caused by vehicle issues can tarnish their impression of the\r\n                        service.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">By prioritizing maintenance, limousine companies can ensure that their fleet\r\n                        remains in impeccable condition. It also improves the overall customer experience because a\r\n                        smooth, comfortable ride in a pristine limousine positively impacts clients.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">In addition, it mainly offers three key benefits which are;&nbsp;</span></p>\r\n        <ul>\r\n                <li>\r\n                        <h3>Roadworthiness</h3>\r\n                </li>\r\n    \r\n        <p><span style=\"color: #0e101a;\">Maintaining a limousine in top-notch condition guarantees its roadworthiness.\r\n                        Breakdowns or malfunctions during an event can be embarrassing and jeopardize the safety of the\r\n                        passengers. Regular maintenance checks help prevent such situations and ensure a smooth,\r\n                        glitch-free ride.</span></p>\r\n      \r\n                <li>\r\n                        <h3>Professional Image</h3>\r\n                </li>\r\n       \r\n        <p><span style=\"color: #0e101a;\">Limousines are often associated with high-end events and VIP transportation. A\r\n                        well-maintained limousine reflects positively on your business or personal image. Whether it\'s a\r\n                        corporate event or a special occasion, arriving in a sparkling clean and well-maintained\r\n                        limousine leaves a lasting impression.</span></p>\r\n  \r\n                <li>\r\n                        <h3>Client Satisfaction</h3>\r\n                </li>\r\n                <p><span style=\"color: #0e101a;\">For limousine rental businesses, customer satisfaction is crucial. Regular\r\n                        maintenance ensures that your clients experience a seamless and comfortable ride. Every aspect\r\n                        contributes to a satisfied clientele, from the cleanliness of the vehicle\'s interior to its\r\n                        mechanical reliability.</span></p>\r\n                </ul>\r\n      \r\n              \r\n                        <h2><li>Preserving Comfort and Aesthetics</li></h2>\r\n           \r\n  \r\n        <p><span style=\"color: #0e101a;\">The sheer elegance of a limousine lies not just in its performance but also in\r\n                        its appearance. Whether it\'s a classic stretch limousine or a modern SUV limousine, these\r\n                        vehicles boast a unique and captivating exterior that leaves a lasting impression.&nbsp;</span>\r\n        </p>\r\n        <p><span style=\"color: #0e101a;\">However, without proper maintenance, the once-gleaming exterior can start to\r\n                        show signs of wear and tear. Additionally, regular cleaning, detailing, and protective coatings\r\n                        are essential to preserve the paint, chrome accents, and other exterior elements, ensuring that\r\n                        the limousine continues to turn heads wherever it goes.</span></p>\r\n        <p><span style=\"color: #0e101a;\">We can precisely say that it preserves the class and aesthetics of limos in two\r\n                        ways.&nbsp;</span></p>\r\n        <ul>\r\n                <li>\r\n                        <h3>Interior Comfort</h3>\r\n                </li>\r\n    \r\n        <p><span style=\"color: #0e101a;\">A well-maintained limousine ensures the comfort of passengers. Regular\r\n                        cleaning, upholstery upkeep, and HVAC system maintenance contribute to a pleasant and enjoyable\r\n                        journey. After all, the luxurious experience is not just about the exterior; the interior\r\n                        ambiance matters too.</span></p>\r\n  \r\n                <li>\r\n                        <h3>Exterior Elegance</h3>\r\n                </li>\r\n                \r\n                <p><span style=\"color: #0e101a;\">The exterior of a limousine is its visual identity. Regular maintenance,\r\n                        including washing, waxing, and addressing any dents or scratches, preserves its elegant look.\r\n                        This attention to detail showcases your commitment to excellence.</span></p>\r\n                </ul>\r\n        </ol>\r\n                <h3>The Final Take</h3>\r\n        <p><span style=\"color: #0e101a;\">To conclude, the importance of limousine maintenance must be\r\n                        balanced.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">From avoiding costly repairs to ensuring passenger safety and maintaining a\r\n                        professional image, and so on, regular upkeep is essential.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">In addition, when you hire a limo service provider, check whether they maintain\r\n                        their limousines or not.&nbsp;</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/v1691595482/samples/images/kcu8noeakv92lg4yyaay.jpg', '<a href=\"https://www.spotlimo.com/\"> Limousine maintenance is important for customer\'s good experience  </a>', 'Limousine maintenance is important for customer\'s good experience', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/n5qky4va6lijpnqajdfg', '<a href=\"https://www.spotlimo.com/\"> Get rid of expensive repairs by timely maintenance </a>', 'Get rid of expensive repairs by timely maintenance', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/cknrkslbahlniebviy9d', '<a href=\"https://www.spotlimo.com/\"> Ensure safety of customers through Limo maintenance  </a>', 'Ensure safety of customers through Limo maintenance', 176, '2023-08-29 18:03:12', '2023-12-01 09:22:23');
INSERT INTO `blog_posts` (`id`, `slug`, `title`, `introduction`, `content`, `first_image_url`, `first_image_caption`, `first_image_alt`, `second_image_url`, `second_image_caption`, `second_image_alt`, `third_image_url`, `third_image_caption`, `third_image_alt`, `views`, `created_at`, `updated_at`) VALUES
(10, 'are-chicago-limo-services-better-than-uber-and-lyft', 'Are Chicago Limo Services Better Than Uber & Lyft?', '<p>Heavy traffic in Chicago is a common phenomenon due to various factors that contribute to congestion on the roads. We all know that Chicago is a major metropolitan area and a well-recognised hub for business, tourism, and transportation. As a result, the city experiences significant traffic challenges, and it remains a persistent issue in Chicago. </p>', '<p><span style=\"color: #0e101a;\">Despite all these challenges, transportation options in Chicago are still\r\n                        abound. The rise of ridesharing services like Uber and Lyft has transformed the way people\r\n                        travel within the city. However, Chicago limo services still hold a significant place amidst\r\n                        these traditional transportation choices.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">The question that arises is whether Chicago limo services offer a better\r\n                        experience compared to the convenience and accessibility of Uber and Lyft. In this article, we\r\n                        will explore the various aspects of each mode of transportation to determine which one stands\r\n                        out in the Windy City.</span></p>\r\n        <ol>\r\n\r\n                <h2>\r\n                        <li>Unmatched Comfort and Luxury</li>\r\n                </h2>\r\n\r\n\r\n                <p><span style=\"color: #0e101a;\">Chicago limo services excel in providing a level of comfort and style\r\n                                that\'s\r\n                                hard to match. Their spacious interiors and luxurious amenities, limos create a unique\r\n                                and\r\n                                upscale experience.&nbsp;</span></p>\r\n                <p><span style=\"color: #0e101a;\">While Uber and Lyft vehicles offer convenience, they may lack the\r\n                                elegance and\r\n                                refinement that limo services bring to the table. Also, when it comes to experiencing\r\n                                the Windy\r\n                                City in style, Spotlimo Chicago limo services offer an unparalleled level of comfort and\r\n                                luxury.&nbsp;</span></p>\r\n                <p><span style=\"color: #0e101a;\">So, in short, limousines are a clear winner for those seeking an\r\n                                elevated\r\n                                travel experience in Chicago.</span></p>\r\n\r\n\r\n                <h2>\r\n                        <li>The Reliability Factor\r\n\r\n                        </li>\r\n                </h2>\r\n\r\n\r\n                <p><span style=\"color: #0e101a;\">Reliability is crucial, especially in a city like Chicago, where\r\n                                traffic and\r\n                                weather conditions can vary dramatically. Spotlimo Limo Services prides itself on\r\n                                punctuality\r\n                                and professionalism.&nbsp;</span></p>\r\n                <p><span style=\"color: #0e101a;\">When you book a limo, you can expect the vehicle to arrive on time,\r\n                                even during\r\n                                peak hours or inclement weather. Whereas Uber and Lyft provide on-demand rides, which\r\n                                can be\r\n                                convenient for spontaneous travel.&nbsp;</span></p>\r\n                <p><span style=\"color: #0e101a;\">However, during peak hours or special events, this availability can\r\n                                lead to\r\n                                longer wait times. Limo services offer quicker service, especially during high-demand\r\n                                periods.</span></p>\r\n                <p><span style=\"color: #0e101a; text-decoration: underline;\"><strong><em>Learn </em></strong></span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/why-get-a-limo-service-in-chicago-tips-for-hiring-professionals\" target=\"_blank\"\r\n                                rel=\"noopener\"><strong><em>Tips For\r\n                                                Hiring Professionals</em></strong></a><span\r\n                                style=\"color: #0e101a; text-decoration: underline;\"><strong><em>!&nbsp;</em></strong></span>\r\n                </p>\r\n\r\n\r\n                <h2>\r\n                        <li>Chauffeurs: The Human Touch</li>\r\n                </h2>\r\n\r\n\r\n                <p><span style=\"color: #0e101a;\">One of the distinct advantages of choosing limo services in Chicago is\r\n                                the\r\n                                presence of professional chauffeurs. These trained professionals not only drive you to\r\n                                your\r\n                                destination but also ensure that your journey is safe, comfortable, and\r\n                                enjoyable.</span></p>\r\n                <p><span style=\"color: #0e101a;\">Chauffeurs add a human touch to your travel experience. They are\r\n                                knowledgeable\r\n                                about the city\'s attractions and can provide insider tips, enhancing your\r\n                                trip.&nbsp;</span></p>\r\n                <p><span style=\"color: #0e101a;\">While Uber and Lyft drivers offer convenience, they may not always\r\n                                engage on\r\n                                the same level as dedicated chauffeurs.</span></p>\r\n\r\n\r\n                <h2>\r\n                        <li>The Chicago Experience</li>\r\n                </h2>\r\n\r\n\r\n                <p><span style=\"color: #0e101a;\">Exploring Chicago goes beyond just reaching your destination. It is\r\n                                about\r\n                                soaking in the city\'s essence and incredible beauty. Limousines offer panoramic views of\r\n                                the\r\n                                city\'s iconic skyline, allowing you to take in the beauty and energy of Chicago\'s\r\n                                streets.</span></p>\r\n                <p><span style=\"color: #0e101a;\">Whether it is cruising down Lake Shore Drive or making a grand entrance\r\n                                at a\r\n                                renowned restaurant, the experience of Chicago from a limousine is\r\n                                unparalleled.&nbsp;</span>\r\n                </p>\r\n                <p><span style=\"color: #0e101a;\">While Uber and Lyft focus on efficiency, they may not capture the\r\n                                spirit of the\r\n                                city quite like a luxurious limo ride can.</span></p>\r\n\r\n\r\n                <h2>\r\n                        <li>Tailored Services for Special Occasions:</li>\r\n                </h2>\r\n\r\n\r\n                <p><span style=\"color: #0e101a;\">Chicago is known for its vibrant cultural scene and a host of special\r\n                                events\r\n                                year-round.&nbsp;</span></p>\r\n                <p><span style=\"color: #0e101a;\">For occasions like prom nights, anniversaries, and corporate galas,\r\n                                limo\r\n                                services offer more than just transportation. They provide an entire experience that\r\n                                starts from\r\n                                the moment you step into the vehicle.</span></p>\r\n                <p><span style=\"color: #0e101a;\">Limo services in Chicago often offer tailored packages to suit various\r\n                                events.\r\n                                From red-carpet entrances to personalized decorations, these services create memories\r\n                                that last\r\n                                a lifetime. While Uber and Lyft are great for daily commuting, they may not capture the\r\n                                essence\r\n                                of a significant event like a limousine can.</span></p>\r\n\r\n\r\n                <h2>\r\n                        <li>Group Travel and Special Occasions</li>\r\n                </h2>\r\n\r\n                <p><span style=\"color: #0e101a;\">For group travel and special occasions, limo services hold a clear\r\n                                advantage.\r\n                                With their spacious interiors, limos can accommodate larger groups comfortably, making\r\n                                them a\r\n                                popular choice for weddings, parties,</span><span style=\"color: #0e101a;\"><strong>\r\n                                </strong></span><a href=\"https://www.spotlimo.com/prom-nights\" target=\"_blank\"\r\n                                rel=\"noopener\"><strong>prom nights</strong></a><span\r\n                                style=\"color: #0e101a;\"><strong>,</strong></span><span style=\"color: #0e101a;\"> and\r\n                                corporate\r\n                                events.&nbsp;</span></p>\r\n                <p><span style=\"color: #0e101a;\">Uber and Lyft, while offering options for larger groups, might not\r\n                                provide the\r\n                                same level of comfort and sophistication.</span></p>\r\n\r\n\r\n                <h2>\r\n                        <li>Customized Amenities</li>\r\n                </h2>\r\n\r\n\r\n                <p><span style=\"color: #0e101a;\">In addition to the overall comfort, Chicago limo services often offer\r\n                                customized amenities that cater to passengers\' specific needs. These amenities can range\r\n                                from\r\n                                entertainment systems and Wi-Fi connectivity to privacy partitions and\r\n                                refreshments.</span></p>\r\n                <p><span style=\"color: #0e101a;\">Whether you are preparing for an important meeting or simply want to\r\n                                unwind\r\n                                during your journey, these additional amenities enhance the travel experience. While\r\n                                Uber and\r\n                                Lyft offer basic in-car amenities, limo services go the extra mile to ensure that your\r\n                                ride is\r\n                                tailored to your preferences.</span></p>\r\n\r\n\r\n                <h2>\r\n                        <li>Technology and Convenience</li>\r\n                </h2>\r\n\r\n\r\n                <p><span style=\"color: #0e101a;\">Limousine services leverage technology to provide convenient and\r\n                                efficient\r\n                                online pre-booking. It also provides real-time tracking and ensures a seamless\r\n                                experience for\r\n                                passengers who value both luxury and efficiency.</span></p>\r\n                <p><span style=\"color: #0e101a;\">While Uber and Lyft are lauded for their user-friendly apps that\r\n                                streamline the\r\n                                booking process, however, some individuals prefer the personalized touch of calling a\r\n                                Chicago\r\n                                limo service and discussing their requirements directly with a representative. This\r\n                                direct\r\n                                communication can lead to more tailored experiences.</span></p>\r\n\r\n\r\n                <h2>\r\n                        <li>Better Privacy</li>\r\n                </h2>\r\n\r\n\r\n                <p><span style=\"color: #0e101a;\">Privacy is a vital consideration for many travellers, especially when\r\n                                discussing business matters or personal conversations. Limousines in Chicago come\r\n                                equipped with\r\n                                privacy partitions that allow you to have confidential discussions without any\r\n                                concerns.</span>\r\n                </p>\r\n                <p><span style=\"color: #0e101a;\">Uber and Lyft vehicles, while convenient, lack the same level of\r\n                                privacy.\r\n                                However, in limos, you can conduct business calls, hold meetings, or have personal\r\n                                conversations\r\n                                without worrying about who might overhear.</span></p>\r\n\r\n        </ol>\r\n        <h3>The Final Take</h3>\r\n        <p><span style=\"color: #0e101a;\">To conclude, the comparison between Chicago limo services, Uber, and Lyft\r\n                        reveals a nuanced dynamic.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">While ridesharing platforms offer convenience and accessibility, limo services\r\n                        bring a unique blend of unmatched comfort, reliability, personalized chauffeur service, and the\r\n                        ability to capture the true essence of the city.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">And, </span><a href=\"https://www.spotlimo.com/\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong>SpotLimo Limousine services</strong></a><span\r\n                        style=\"color: #0e101a;\"><strong> </strong></span><span style=\"color: #0e101a;\">stand out as a\r\n                        symbol of elegance, making them the preferred choice for those seeking a refined and memorable\r\n                        travel experience in the bustling city of Chicago.</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/t1njkt8itct9k8zi1isy', '<a href=\"https://www.spotlimo.com/\"> WizSpeed Chicago Limo Service is the top-rated transportation service in all Illinois.</a>', 'WizSpeed Chicago Limo Service is the top-rated transportation service in all Illinois.', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/jq0xnuwaqi1km9mol4gl', '<a href=\"https://www.spotlimo.com/\"> Never miss the chance of experience ultimate luxury through Chicago Limo service.</a>', 'Never miss the chance of experience ultimate luxury through Chicago Limo service.', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/f8yqsilcjvjbtzdteeg2', '<a href=\"https://www.spotlimo.com/\"> Our Customer\'s satisfaction is the key motive of Spotlimo</a>', 'Our Customer\'s satisfaction is the key motive of Spotlimo', 95, '2023-08-29 18:14:49', '2023-11-30 20:28:00'),
(11, 'why-choose-a-spotlimo-limousine-for-airport-travel', 'Why Choose a SpotLimo Limousine For Airport Travel?', '<p>In a world that\'s constantly on the move, where every second counts, and where seamless travel experiences are paramount, choosing the right transportation can make all the difference. Imagine stepping off a long flight, weary from your journey, and being greeted by the epitome of luxury and comfort—the SpotLimo Limousine. It\'s not just about getting from point A to point B; it\'s about elevating your airport travel experience to new heights.</p>', '<p><span style=\"color: #0e101a;\">An American author </span><a\r\n                        href=\"https://www.goodreads.com/author/show/147.Henry_Miller\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong>Henry Miller</strong></a><span style=\"color: #0e101a;\"> once said,\r\n                        \"</span><span style=\"color: #0e101a;\"><em>One\'s destination is never a place, but rather a new\r\n                                way of seeing things.</em></span><span style=\"color: #0e101a;\">\" Airport travel is not\r\n                        merely a means to an end. Instead, it is the beginning of an adventure, a business opportunity,\r\n                        a reunion with loved ones, or several other reasons.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">In addition to this, </span><a href=\"https://www.spotlimo.com/ohare-airport\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong>O\'Hare International Airport,</strong></a><span\r\n                        style=\"color: #0e101a;\"> located in the heart of the Windy City, serves as a major gateway for\r\n                        millions of travelers annually. In fact, as of 2021, O\'Hare consistently ranked as one of the\r\n                        busiest airports in the United States, facilitating over 83 million passengers each\r\n                        year.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Please note that this statistic underscores the immense importance of air\r\n                        travel in the Chicago city and the significance of making the right choice for your airport\r\n                        transportation. Considering these facts and details, choosing a SpotLimo Limousine for your\r\n                        Chicago airport travel is crucial for timely arrivals and safe execution from the busiest\r\n                        airports of Chicago.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">This article will provide a detailed analysis of why choosing Spotlimo\r\n                        limousine is an important and much-needed decision.&nbsp;</span></p>\r\n        <h2>Unmatched Punctuality and Reliability</h2>\r\n        <p><span style=\"color: #0e101a;\">At SpotLimo Limousine, we understand the undeniable importance of timely\r\n                        arrivals at the airport. Late arrival can often result in missing a flight. Moreover, the\r\n                        congested traffic of Chicago is not hidden from anyone. Due to transportation delays, you can be\r\n                        stuck in the traffic.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Presevily speaking, while traveling to chicago airport, stucking in the traffic\r\n                        could be a traveler\'s worst nightmare. That\'s why we take pride in our impeccable track record\r\n                        of being consistently punctual and reliable.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">We have a team of dedicated chauffeurs who are well-versed in the nuances of\r\n                        airport logistics. Our professional chauffeurs ensure you reach your destination on time and do\r\n                        not miss your flights or do not wait for your ride after a hectic, long flight.&nbsp;</span></p>\r\n        <h2>Luxurious Comfort and Style</h2>\r\n        <p><span style=\"color: #0e101a;\">Traveling through airports can be a stressful experience, but a luxurious and\r\n                        comfortable ride can make your airport travel stress free. So whether you come from a hectic\r\n                        flight or going to catch a long flight, you do not need to stress when you choose SpotLimo\r\n                        Limousine services in Chicago.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">When you choose SpotLimo Limousine for your airport transportation, you are not\r\n                        just selecting a ride. Instead, you are opting for a luxurious experience. Our </span><a\r\n                        href=\"https://www.spotlimo.com/vehicles\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong>fleets</strong></a><span style=\"color: #0e101a;\"> are well-maintained,\r\n                        well-decorated, and driven by professional and trained chauffeurs.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">They not only ensure your safety but also offer a high level of service,\r\n                        including assisting with luggage and navigation. While you carry your style, our trained\r\n                        chauffeurs will carry your luggage. It is because traveling in style is a hallmark of SpotLimo\r\n                        Limousine.&nbsp;</span></p>\r\n        <h2>Stress-Free Travel</h2>\r\n        <p><span style=\"color: #0e101a;\">Airport travel can often be stressful, especially with the hassle of traffic,\r\n                        parking, and navigating through</span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/want-to-relieve-traffic-stress-in-chicago\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong> crowded terminals of the Chicago city</strong></a><span\r\n                        style=\"color: #0e101a;\">. SpotLimo Limousine takes the stress out of your travel experience.\r\n                        Spotlimo\'s commitment to your comfort is unwavering.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Our wide range of fleets are equipped with plush seating, ample legroom, and\r\n                        modern amenities, making your journey to or from the airport a relaxing experience. Our\r\n                        chauffeurs are experts in handling all aspects of airport transportation. They make sure that\r\n                        you have a smooth and hassle-free journey.&nbsp;</span></p>\r\n        <h2>Safety First</h2>\r\n        <p><span style=\"color: #0e101a;\">Navigating through busy airports can be overwhelming, especially if you are\r\n                        unfamiliar with the layout. Spotlimo\'s professional chauffeurs are well-versed in the airport\r\n                        layout and procedures, providing you with a seamless transfer from the moment you step off the\r\n                        plane. In addition, you will be swiftly guided to your waiting limousine, ready to whisk you\r\n                        away.</span></p>\r\n        <p><span style=\"color: #0e101a;\">Your safety is our top priority at SpotLimo Limousine. We maintain our vehicles\r\n                        to the highest safety standards, undergo regular inspections, and adhere to all safety\r\n                        regulations. Our experienced chauffeurs are trained to prioritize passenger safety, making your\r\n                        ride with us not only comfortable but secure.</span></p>\r\n        <h2>Personalized Service</h2>\r\n        <p><span style=\"color: #0e101a;\">SpotLimo Limousine takes pride in offering personalized service tailored to\r\n                        your needs. Whether you require assistance with luggage, have specific travel preferences, or\r\n                        need recommendations for local attractions, our well-trained staff is at your\r\n                        service.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Additionally, we understand that one size does not fit all, and we also\r\n                        understand that every traveler has unique needs. SpotLimo Limousine offers personalized services\r\n                        to cater to your specific requirements. Our fleet offers a range of options to suit your\r\n                        preferences and group size. Whether you\'re a solo traveler or part of a larger group, we have a\r\n                        perfect vehicle for you, ensuring a comfortable and luxurious ride.</span></p>\r\n        <p><span style=\"color: #0e101a;\">Addition to this, whether you need assistance with luggage, have special\r\n                        requests, or require additional stops along the way, we are here to accommodate your needs and\r\n                        make your journey exceptional.</span></p>\r\n        <h2>Cost-Effective Luxury</h2>\r\n        <p><span style=\"color: #0e101a;\">Contrary to popular belief, luxury doesn\'t have to come at an exorbitant price.\r\n                        SpotLimo Limousine offers competitive rates for our premium services. You can enjoy the luxury\r\n                        and comfort of a limousine without breaking the bank. We believe that every traveler deserves\r\n                        the best, and we make it accessible to all.</span></p>\r\n        <h2>Convenience at Your Fingertips</h2>\r\n        <p>Booking a <a href=\"https://www.spotlimo.com/airport-services\" target=\"_blank\" rel=\"noopener\">SpotLimo\r\n                        Limousine for your airport travel</a> is incredibly convenient. With our user-friendly online\r\n                booking system, you can reserve your limousine with just a few clicks.&nbsp;</p>\r\n        <p>We offer transparent pricing, and you will receive instant confirmation of your booking. Our commitment to\r\n                convenience extends to our seamless airport pick-up and drop-off services, ensuring a hassle-free\r\n                experience from start to finish.</p>\r\n        <h2>The SpotLimo Limousine Advantage</h2>\r\n        <p><span style=\"color: #0e101a;\">SpotLimo Limousine has been a leader in the luxury airport transportation\r\n                        industry. We provide airport transportation services for almost all the airports located near\r\n                        Chicago.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Additionally, when you choose </span><a href=\"https://www.spotlimo.com/\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong>SpotLimo Limousine</strong></a><span\r\n                        style=\"color: #0e101a;\"> for your airport travel needs, you are not just selecting a mode of\r\n                        transportation, instead, you are opting for an incredible travel experience. Our commitment to\r\n                        punctuality, luxury, safety, personalized service, affordability, and convenience sets us apart\r\n                        as the premier choice for airport transportation.</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/sspofa6cinthqdpzxwua', '<a href=\"https://www.spotlimo.com/\"> Explore the 7 reasons of Choosing A SpotLimo Limousine For Airport Travel   </a>', 'Explore the 7 reasons of Choosing A SpotLimo Limousine For Airport Travel', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/ltjcgfiof4s8zqsry868', '<a href=\"https://www.spotlimo.com/\"> Hire SpotLimo Limousines For tension-free airport travels           </a>', 'Hire SpotLimo Limousines For tension-free airport travels', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/k92iwntotqwhvrclvbsm', '<a href=\"https://www.spotlimo.com/\"> Spotlimo provides professional airport travel service in Chicago  </a>', 'Spotlimo provides professional airport travel service in Chicago', 109, '2023-09-06 15:14:03', '2023-11-30 20:28:44'),
(12, '14-top-adventures-in-chicago-with-spotlimo-limousine', '14 Top Adventures in Chicago with SpotLimo Limousine', '<p>Chicago, with its irresistible charm, stands as a magnetic beacon for tourists from around the globe. The city\'s beauty lies in its vibrant tapestry of culture, history, and innovation. From the architectural marvels that grace the city\'s skyline to the soul-stirring beauty of nature, Chicago offers an eclectic blend of amazing adventures.</p>\r\n<p><span style=\"color: #0e101a;\">No doubt, the city is full of adventures and thrills. However, the congested, busiest, and confusing streets of Chicago can make these adventures out of access from tourists. But the good news is that this problem has the best solution: hiring a professional limousine service provider - </span><a href=\"https://www.spotlimo.com/\" target=\"_blank\" rel=\"noopener\"><strong>SpotLimo</strong></a><span style=\"color: #0e101a;\">. </span></p>', '<p><span style=\"color: #0e101a;\">Spotlimo Chicago Limousine service can make your Chicago adventures pleasant\r\n                        experiences and unforgettable memories. This article will help you shortlist the 14 amazing\r\n                        adventures in Chicago that you can enjoy with Spotlimo Limousine service.&nbsp;</span></p>\r\n        <h2><a href=\"https://www.spotlimo.com/\" target=\"_blank\" rel=\"noopener\"><strong>Why Hire SpotLimo\r\n                                Company?</strong></a></h2>\r\n        <p><span style=\"color: #0e101a;\">Before pinpointing the exciting adventures waiting for you in Chicago, let\'s\r\n                        briefly talk about why you should opt for Spotlimo Limousine service.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Spotlimo company is the leading limousine service provider company in Chicago.\r\n                        The company is well-reputed for several genuine reasons, such as providing a wide range of\r\n                        well-maintained fleets, </span><a href=\"https://www.spotlimo.com/chauffeur-services-chicago\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong>professional chauffeurs</strong></a><span\r\n                        style=\"color: #0e101a;\">, flexible services, etc.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">In addition, hiring Spotlimo will provide exceptional services and benefits,\r\n                        some of which are listed below.&nbsp;</span></p>\r\n        <ol>\r\n                <li><span style=\"color: #0e101a;\">SpotLimo offers a fleet of well-maintained limousines that ensures\r\n                                your safety throughout your exciting journey.</span></li>\r\n                <li><span style=\"color: #0e101a;\">Our drivers are professionally trained and well-versed in Chicago\'s\r\n                                traffic and road conditions.</span></li>\r\n                <li><span style=\"color: #0e101a;\">No need to worry about parking or navigating public transportation; we\r\n                                handle all the logistics so you can focus on your Chicago adventure.</span></li>\r\n                <li><span style=\"color: #0e101a;\">We tailor our services to your needs.&nbsp;</span></li>\r\n                <li><span style=\"color: #0e101a;\">Chicago is a vast city with much to offer. And our chauffeurs are\r\n                                knowledgeable drivers who are aware of short yet safe routes.&nbsp;</span></li>\r\n                <li><span style=\"color: #0e101a;\">We provide a door-to-door experience with the flexibility to make\r\n                                last-minute changes in the plan.</span></li>\r\n                <li><span style=\"color: #0e101a;\">SpotLimo simplifies the process by taking care of transportation,\r\n                                leaving you free to focus on the fun and excitement of your Chicago\r\n                                adventures.&nbsp;</span></li>\r\n        </ol>\r\n        <h2>14 Top Adventures in Chicago with SpotLimo Limousine&nbsp;</h2>\r\n        <p><span style=\"color: #0e101a;\">Chicago is a city brimming with excitement and culture. It offers many\r\n                        activities for residents and tourists. Some of the most exciting adventures are outlined\r\n                        below.</span></p>\r\n        <h3>Discover the Magnificent Mile</h3>\r\n        <p><span style=\"color: #0e101a;\">Begin your Chicago adventure with a stroll down the famous Magnificent Mile.\r\n                        Stretching along Michigan Avenue, this bustling shopping district is home to high-end boutiques,\r\n                        department stores, and many restaurants.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">In short, it is no less than a shopping paradise with luxury boutiques,\r\n                        department stores, and chic restaurants. Moreover, the Magnificent Mile extends beyond shopping.\r\n                        It serves as a cultural center as well. You can explore esteemed establishments like the Museum\r\n                        of Contemporary Art or the Driehaus Museum, providing insights into Chicago\'s Gilded Age.</span>\r\n        </p>\r\n        <h3>Touch the Sky Via Skydeck Chicago</h3>\r\n        <p><span style=\"color: #0e101a;\">Having been to Chicago and missed the opportunity to get a bird\'s-eye view of\r\n                        Chicago would definitely be unjust. Yes, you heard it right. You can get vibes of touching the\r\n                        sky or getting a bird\'s eye view by visiting Skydeck Chicago.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">When you opt for the Spotlimo service, you arrive at Skydeck Chicago refreshed\r\n                        and ready for your adventure. Also, we can better guide you about the best time to avoid crowds\r\n                        at this public place and enjoy it to the fullest. Plus, after your visit, our limousine service\r\n                        will be readily available to transport you to your next Chicago adventure.&nbsp;</span></p>\r\n        <h3>Explore Millennium Park</h3>\r\n        <p><span style=\"color: #0e101a;\">Another exciting adventure in Chicago could be visiting Millennium Park. It is\r\n                        truly a masterpiece of modern landscape design and artistry. Every year, many tourists come to\r\n                        explore the famous Cloud Gate sculpture, affectionately known as \"</span><span\r\n                        style=\"color: #0e101a;\"><em>The Bean</em></span><span style=\"color: #0e101a;\">,\" which is placed\r\n                        in this park. Due to the historic significance of the place, it often becomes a challenge to\r\n                        reach the place. However, Spotlimo limo service ensures a hassle-free visit to this iconic\r\n                        park.</span></p>\r\n        <h3>Navy Pier | Fun for All Ages</h3>\r\n        <p><span style=\"color: #0e101a;\">Navy Pier is the ultimate family destination in Chicago. From the iconic Ferris\r\n                        wheel to the Children\'s Museum, it is a place where fun never ends. SpotLimo Limousine can make\r\n                        your journey here comfortable, and you can enjoy the stunning views of Lake Michigan. While\r\n                        visiting this iconic lake, do not forget to get some picturesque photographs for your mobile\r\n                        wallpaper.&nbsp;</span></p>\r\n        <h3>Cultural Exploration at the Art Institute</h3>\r\n        <p><span style=\"color: #0e101a;\">Chicago\'s Art Institute is a haven for art enthusiasts. Anyone can spend hours\r\n                        exploring the galleries due to this art institute\'s impressive collection of various eras and\r\n                        styles. This place is no less than a treasure trove for art fanatics as it exhibits cultural art\r\n                        masterpieces.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\"><strong>Also Read: </strong></span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/are-chicago-limo-services-better-than-uber-and-lyft\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong>Are Chicago Limo Services Better Than Uber &amp;\r\n                                Lyft?</strong></a></p>\r\n        <h3>Taste Chicago\'s Culinary Delights</h3>\r\n        <p><span style=\"color: #0e101a;\">Chicago is famous for its diverse culinary scene, and your adventure would not\r\n                        be complete without trying some deep-dish pizza and Chicago-style hot dogs. SpotLimo Limousine\r\n                        can take you to the city\'s best eateries. Our drivers know the routes and the best eateries at\r\n                        their fingertips. They ensure you to take you to the best place and ensure you savor every\r\n                        bite.</span></p>\r\n\r\n        <h3>Shedd Aquarium - Aquatic Wonders</h3>\r\n        <p><span style=\"color: #0e101a;\">Imagine if you get the chance to witness the marine life. The Shedd Aquarium\r\n                        offers the delight of witnessing aquatic wonders with your naked eye. This aquatic wonderland is\r\n                        perfect for a family outing, from beluga whales to sea otters. SpotLimo Limousine\'s\r\n                        transportation services ensure you reach the aquarium without any hassle, as the route to this\r\n                        place is always congested with heavy traffic.&nbsp;</span></p>\r\n        <h3>Wrigley Field - Catch a Game</h3>\r\n        <p><span style=\"color: #0e101a;\">Sports fans, rejoice! </span><a href=\"https://www.mlb.com/cubs/ballpark\"\r\n                        target=\"_blank\" rel=\"noopener\">Wrigley Field</a><span style=\"color: #0e101a;\"> is home to the\r\n                        Chicago Cubs, and catching a game here is a quintessential Chicago experience. Let SpotLimo\r\n                        Limousine take you to the ballpark so you can enjoy America\'s favorite pastime. This is one of\r\n                        the finest adventures a sports lover could ever ask for!</span></p>\r\n        <h3>River Cruise - The Architectural Gem</h3>\r\n        <p><span style=\"color: #0e101a;\">Another great idea for adventuring in Chicago is to glide along the Chicago\r\n                        River in a luxurious limo ride. It will surely be one of Chicago\'s remarkable architecture on an\r\n                        enchanting river cruise. Also, you can learn about the city\'s history and iconic buildings.\r\n                        SpotLimo Limousine can arrange a pickup and drop-off for this exciting tour and can guide you\r\n                        through the river cruise.&nbsp;</span></p>\r\n        <h3>A Limo Tour to Lincoln Park Zoo&nbsp;</h3>\r\n        <p><span style=\"color: #0e101a;\">Lincoln Park Zoo is one of the oldest zoos in the country and offers free\r\n                        admission. It is a fantastic place for families to spend an afternoon. SpotLimo Limousine can\r\n                        make your journey comfortable so you can focus on enjoying the animals.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Moreover, please note that this free zoo is home to various animals and offers\r\n                        a serene setting for a stroll. Also, it is an ideal spot for a family outing, especially for\r\n                        kids.&nbsp;</span></p>\r\n        <h3>A Limousine Tour of Film Locations</h3>\r\n        <p><span style=\"color: #0e101a;\">&nbsp;If you are looking for an extraordinary adventure in the Windy City, look\r\n                        no further than the tour of Chicago\'s Film Locations. This remarkable experience ranks among the\r\n                        top 14 limousine adventures for those eager to discover the charm of Chicago.</span></p>\r\n        <p><span style=\"color: #0e101a;\">You can hire </span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/why-get-a-limo-service-in-chicago-tips-for-hiring-professionals\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong>SpotLimo professional chauffeurs</strong></a><span\r\n                        style=\"color: #0e101a;\"> who will take you to some of the city\'s most iconic film locations. As\r\n                        you cruise through the streets, you will encounter scenes straight from cinematic classics like\r\n                        \"</span><a href=\"https://www.imdb.com/title/tt0468569/\" target=\"_blank\" rel=\"noopener\"><em>The\r\n                                Dark Knight</em></a><span style=\"color: #0e101a;\">\" and \"</span><a\r\n                        href=\"https://www.imdb.com/title/tt0091042/\" target=\"_blank\" rel=\"noopener\"><em>Ferris Bueller\'s\r\n                                Day Off</em></a><span style=\"color: #0e101a;\"><em>.</em></span><span\r\n                        style=\"color: #0e101a;\">\"</span></p>\r\n        <h3>Garfield Park Conservatory - A Green Oasis</h3>\r\n        <p><span style=\"color: #0e101a;\">Another exciting adventure is an escape from the crowded streets of this\r\n                        busiest city and getting shelter in the green oasis of Garfield Park\r\n                        Conservatory.&nbsp;&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">It is an ideal spot for peace lovers and nature fanatics. The lush greenery of\r\n                        the place adds a distinct aroma to the place. However, the only problem is to get to this place\r\n                        as it is not located on the main highway. Only a professional driver can take you to this\r\n                        tranquil retreat away from the bustling city. SpotLimo Limousine can transport you to this oasis\r\n                        of calm.</span></p>\r\n        <h3>Adler Planetarium - Reach for the Stars</h3>\r\n        <p><span style=\"color: #0e101a;\">What if we tell you that Chicago not only offers a remarkable skyline to\r\n                        witness but a great opportunity to reach the stars? Sounds crazy? Well,</span></p>\r\n        <p><span style=\"color: #0e101a;\">Adler Planetarium lets you explore the universe through captivating exhibits\r\n                        and state-of-the-art telescopes.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">So, you can discover the cosmos, enjoy breathtaking sky shows, expand your\r\n                        horizons, and gaze at the countless stars. SpotLimo Limousine ensures a smooth ride to this\r\n                        astronomical wonderland.</span></p>\r\n        <h3>Party Like a Rockstar&nbsp;</h3>\r\n        <p><a href=\"https://www.spotlimo.com/vehicles\" target=\"_blank\" rel=\"noopener\"><strong>Limousine Party\r\n                                Bus</strong></a><span style=\"color: #0e101a;\"> is one of the most exciting adventures\r\n                        one can have in Chicago. Please note that this exciting adventure allows you and your friends or\r\n                        family to dance, drink, and relish the luxurious side of Chicago while cruising around the city\r\n                        on a party bus.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">And, the best part is SpotLimo Limousines are equipped with neon lights, disco\r\n                        balls, surround sound systems, and plush leather seats, so you can kick back and create lasting\r\n                        memories.</span></p>\r\n        <p><span style=\"color: #0e101a;\">Moreover, this idea is also ideal for special occasions like birthdays,\r\n                </span><a href=\"https://www.spotlimo.com/concerts\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong>concerts</strong></a><span style=\"color: #0e101a;\">, </span><a\r\n                        href=\"https://www.spotlimo.com/prom-nights\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong>bachelor/bachelorette parties</strong></a><span style=\"color: #0e101a;\">,\r\n                </span><a href=\"https://www.spotlimo.com/newyear-nights\" target=\"_blank\" rel=\"noopener\"><strong>New\r\n                                Year\'s Eve</strong></a><span style=\"color: #0e101a;\">, or simply a great idea to spend\r\n                        quality time with friends and loved ones.</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/ljjz4wzhcsn338ozywje', 'Enjoy 14 top adventures in Chicago with SpotLimo Limousine Service', NULL, 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/t1njkt8itct9k8zi1isy', 'Get the professional services of Spotlimo', NULL, 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/bqnawjlipecujbe0ocop', 'Get Limo party bus for the best party nights', NULL, 89, '2023-09-07 15:30:03', '2023-11-30 20:28:33');
INSERT INTO `blog_posts` (`id`, `slug`, `title`, `introduction`, `content`, `first_image_url`, `first_image_caption`, `first_image_alt`, `second_image_url`, `second_image_caption`, `second_image_alt`, `third_image_url`, `third_image_caption`, `third_image_alt`, `views`, `created_at`, `updated_at`) VALUES
(13, 'why-is-chauffeurs-training-important-in-chicago-chauffeurs-training-guide', 'Why is Chauffeurs Training Important in Chicago? Chauffeurs Training Guide', '<p>Chauffeur is an ideal career for people who love driving and have exceptional customer service skills.\r\n                However, chauffeur training is crucial no matter how good you are at these two skills. Especially, if\r\n                you are planning to serve in Chicago, you need to get a chauffeur\'s training.&nbsp;</p>\r\n        <p>It is important because working as a chauffeur allows you to visit new locations, meet new people including\r\n                big tycoons, and have the opportunity to drive luxury fleets. Therefore, chauffeur training plays a\r\n                pivotal role in meeting the criterion of a <a href=\"https://www.spotlimo.com/chauffeur-services-chicago\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong>professional chauffeur</strong></a>.&nbsp;</p>\r\n        <p>But how? Don&rsquo;t worry. This article will provide a detailed chauffeur training guide for everyone who is\r\n                looking to build one&rsquo;s career in this field.&nbsp;</p>', '<h2>Importance of Chauffeur Training in Chicago</h2>\r\n        <p><span style=\"color: #0e101a;\">Chicago, with its towering skyscrapers, rich cultural diversity, and a pace of\r\n                        life that rivals the best, is a city of grandeur and sophistication. In addition, the city has\r\n                        been a major hub for business conferences and corporate events. Considering this fact, it\r\n                        becomes 10x more important to hire a professionally trained and well-conducted\r\n                        chauffeur.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">But what makes a chauffeur in Chicago truly exceptional? It\'s not just the\r\n                        knowledge of city routes or the ability to handle a vehicle with finesse. However, it is a\r\n                        combination of skills, expertise, and unwavering commitment to service. Also, in this vibrant\r\n                        city, where time is of the essence, and expectations run high, chauffeur training becomes not\r\n                        just important but indispensable.</span></p>\r\n        <h2>Chauffeurs Training Guide | Key Points&nbsp;</h2>\r\n        <ol>\r\n                <li><span style=\"color: #0e101a;\"><strong><em>Elevated Client Expectations</em></strong></span><span\r\n                                style=\"color: #0e101a;\"><strong> -</strong></span><span style=\"color: #0e101a;\">\r\n                                Chicago\'s clientele, from corporate executives to socialites, have discerning tastes.\r\n                                They expect nothing short of perfection when it comes to their transportation\r\n                                experience. Chauffeurs must be trained to meet and exceed these high standards.</span>\r\n                </li>\r\n                <li><span style=\"color: #0e101a;\"><strong><em>Navigating a Complex Urban\r\n                                                Landscape</em></strong></span><span style=\"color: #0e101a;\"><strong> -\r\n                                </strong></span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/why-get-a-limo-service-in-chicago-tips-for-hiring-professionals\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>Chicago\'s streets are a labyrinthine\r\n                                                network</em></strong></a><span style=\"color: #0e101a;\">, subject to\r\n                                traffic congestion and unpredictable weather. Chauffeurs need the training to navigate\r\n                                efficiently and safely through these challenges.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong><em>Cultural Sensitivity</em></strong></span><span\r\n                                style=\"color: #0e101a;\"><strong> - </strong></span><span style=\"color: #0e101a;\">Chicago\r\n                                is a melting pot of cultures and backgrounds. Chauffeurs must be culturally sensitive\r\n                                and attuned to the diverse needs and preferences of their clients.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong><em>Safety First</em></strong></span><span\r\n                                style=\"color: #0e101a;\"><strong> - </strong></span><span style=\"color: #0e101a;\">The\r\n                                safety of passengers is paramount. Chauffeurs should be trained to handle various\r\n                                driving conditions and emergencies with grace and confidence.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong><em>Professionalism</em></strong></span><span\r\n                                style=\"color: #0e101a;\"><strong> -</strong></span><span style=\"color: #0e101a;\">&nbsp;\r\n                                In a city that exudes professionalism, chauffeurs must be the epitome of it. This\r\n                                includes impeccable presentation, communication skills, and a commitment to\r\n                                confidentiality.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong><em>Technology in Chauffeur Services -\r\n                                        </em></strong></span><span style=\"color: #0e101a;\">Clients appreciate chauffeurs\r\n                                who are well-versed in GPS technology, as it not only saves time but also enhances the\r\n                                overall travel experience. The ability to provide accurate arrival times and offer\r\n                                alternative routes in the event of traffic congestion showcases a commitment to\r\n                                exceptional service.</span></li>\r\n        </ol>\r\n        <h2>Licensing and Permit Requirements for Chauffeurs in Chicago</h2>\r\n        <p>Becoming a chauffeur in the Windy City is not just about mastering the art of driving and customer service;\r\n                it also involves <a\r\n                        href=\"https://www.spotlimo.com/show-blog/are-chicago-limo-services-better-than-uber-and-lyft\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong><em>navigating a regulatory landscape</em></strong></a>\r\n                designed to ensure safety and professionalism. We have mentioned below the essential licensing and\r\n                permit requirements that every aspiring chauffeur in Chicago must understand and comply with.</p>\r\n        <ol>\r\n                <li><span style=\"color: #0e101a;\"><strong>Chauffeur\'s License:</strong></span><span\r\n                                style=\"color: #0e101a;\"> To operate as a </span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/why-get-a-limo-service-in-chicago-tips-for-hiring-professionals\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>chauffeur in Chicago</em></strong></a><span\r\n                                style=\"color: #0e101a;\">, you must obtain a </span><a\r\n                                href=\"https://www.chicago.gov/city/en/depts/bacp/provdrs/vehic/svcs/publicchauffeur.html\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>Chauffeur\'s License</em></strong></a><span\r\n                                style=\"color: #0e101a;\"> from the BACP. This license is distinct from a regular driver\'s\r\n                                license and is specifically tailored for professional chauffeurs.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Age Requirement:</strong></span><span style=\"color: #0e101a;\">\r\n                                Applicants must be at least 21 years old to be eligible for a Chauffeur\'s\r\n                                License.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Driving Record:</strong></span><span style=\"color: #0e101a;\">\r\n                                The BACP conducts a thorough review of your driving record, including any past\r\n                                violations or convictions. A clean driving record is typically a prerequisite for\r\n                                obtaining a license.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Background Check:</strong></span><span\r\n                                style=\"color: #0e101a;\"> A comprehensive background check, including criminal history,\r\n                                is part of the application process. Certain convictions may disqualify an applicant from\r\n                                receiving a license.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Medical Examination:</strong></span><span\r\n                                style=\"color: #0e101a;\"> Applicants must undergo a medical examination to ensure they\r\n                                are physically fit to operate a vehicle safely. This may include vision and hearing\r\n                                tests.</span></li>\r\n        </ol>\r\n        <h2>Key Qualities of a Good Chauffeur</h2>\r\n        <p><span style=\"color: #0e101a;\">A chauffeur is not merely a driver but a symbol of professionalism,\r\n                        sophistication, and impeccable service. To excel in this role, one must possess a unique set of\r\n                        qualities that go beyond simply knowing </span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/Discover-Why-Limousine-Maintenance-Is-So-Important\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong><em>how to operate a fleet</em></strong></a><span\r\n                        style=\"color: #0e101a;\">. Here are some of the </span><a\r\n                        href=\"https://www.spotlimo.com/chauffeur-services-major\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong><em>key qualities of an exceptional chauffeur</em></strong></a><span\r\n                        style=\"color: #0e101a;\">:</span></p>\r\n        <ol>\r\n                <li><span style=\"color: #0e101a;\"><strong>Exceptional Driving Skills:</strong></span><span\r\n                                style=\"color: #0e101a;\"> A chauffeur must be an expert driver with an impeccable driving\r\n                                record. They should have a deep</span><a href=\"https://www.spotlimo.com/vehicles\"\r\n                                target=\"_blank\" rel=\"noopener\"> <strong><em>understanding of various vehicle\r\n                                                types</em></strong></a><span style=\"color: #0e101a;\"> and models and the\r\n                                ability to handle them with grace and precision.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Safety Consciousness:</strong></span><span\r\n                                style=\"color: #0e101a;\"> Safety is paramount. A top-notch chauffeur prioritizes the\r\n                                safety of passengers and other road users at all times. They are well-versed in\r\n                                defensive driving techniques and remain calm and composed under pressure.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Professional Appearance:</strong></span><span\r\n                                style=\"color: #0e101a;\"> Chauffeurs represent elegance and professionalism. They are\r\n                                always impeccably groomed, dressed in a smart uniform, and maintain a neat and tidy\r\n                                vehicle interior.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Excellent Communication:</strong></span><span\r\n                                style=\"color: #0e101a;\"> Effective communication is crucial. Chauffeurs must have\r\n                                excellent interpersonal skills, listening carefully to clients\' preferences and\r\n                                providing polite, clear, and concise responses.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Local Knowledge:</strong></span><span style=\"color: #0e101a;\">\r\n                                A good chauffeur is familiar with the local area and its traffic patterns. They should\r\n                                have an in-depth understanding of the city\'s streets, landmarks, and alternate routes to\r\n                                avoid traffic congestion.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Punctuality:</strong></span><span style=\"color: #0e101a;\">\r\n                                Being on time is non-negotiable for a chauffeur. They should have excellent time\r\n                                management skills, ensuring that clients reach their destinations promptly, whether it\'s\r\n                                for</span><a href=\"https://www.spotlimo.com/business-trip\" target=\"_blank\"\r\n                                rel=\"noopener\"><strong><em> business meetings</em></strong></a><span\r\n                                style=\"color: #0e101a;\">, </span><a href=\"https://www.spotlimo.com/local-attraction\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>social events</em></strong></a><span\r\n                                style=\"color: #0e101a;\">, or </span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/Why-Choose-a-SpotLimo-Limousine-For-Airport-Travel%3F\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>airport transfers</em></strong></a><span\r\n                                style=\"color: #0e101a;\">.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Discretion and Privacy:</strong></span><span\r\n                                style=\"color: #0e101a;\"> Chauffeurs often serve high-profile clients who value their\r\n                                privacy. Respecting confidentiality and maintaining discretion is vital.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Customer Service:</strong></span><span\r\n                                style=\"color: #0e101a;\"> Exceptional customer service is at the core of chauffeuring.\r\n                                Chauffeurs are courteous and attentive and go above and beyond to meet client needs,\r\n                                such as opening doors, assisting with luggage, and offering amenities.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Adaptability:</strong></span><span style=\"color: #0e101a;\">\r\n                                Chauffeurs must be adaptable and flexible, as client needs can vary greatly. They should\r\n                                be able to adjust to different personalities, preferences, and schedules.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Problem Solving:</strong></span><span style=\"color: #0e101a;\">\r\n                                Unexpected situations can arise, from traffic delays to vehicle issues. A chauffeur\r\n                                should remain composed and resourceful in resolving challenges while keeping the\r\n                                client\'s comfort and safety in mind.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Maintenance Knowledge:</strong></span><span\r\n                                style=\"color: #0e101a;\"> Chauffeurs should have a </span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/Discover-Why-Limousine-Maintenance-Is-So-Important\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>basic understanding of vehicle\r\n                                                maintenance</em></strong></a><span style=\"color: #0e101a;\"> and be able\r\n                                to address minor issues or know when to seek professional help to ensure the vehicle is\r\n                                in excellent condition.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Multilingual: </strong></span><span style=\"color: #0e101a;\">As\r\n                                we said above, Chicago is a hub of world&rsquo;s business conferences and events, there\r\n                                are chances that your client cannot speak or understand the English language. Therefore,\r\n                        </span><a href=\"https://www.spotlimo.com/multilingual-chauffeurs-services\" target=\"_blank\"\r\n                                rel=\"noopener\"><strong><em>professional chauffeurs must be\r\n                                                multilinguals</em></strong></a><span style=\"color: #0e101a;\"> to meet\r\n                                the language diversity of their clients.&nbsp;</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Continuous Improvement:</strong></span><span\r\n                                style=\"color: #0e101a;\"> A commitment to ongoing training and self-improvement is\r\n                                crucial for staying current with industry trends, technology, and customer service best\r\n                                practices.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Stress Management:</strong></span><span\r\n                                style=\"color: #0e101a;\"> </span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/Want-to-Relieve-Traffic-Stress-in-Chicago%3F-Rent-a-Limo-Bus-From-WizSpeed\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>Chauffeurs often work in high-pressure\r\n                                                environments</em></strong></a><span style=\"color: #0e101a;\">. The\r\n                                ability to manage stress and maintain composure is essential for providing a seamless\r\n                                experience.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Passion for Service:</strong></span><span\r\n                                style=\"color: #0e101a;\"> Above all, an exceptional chauffeur has a genuine passion for\r\n                                service. They take pride in their role and are dedicated to exceeding client\r\n                                expectations, making every journey a memorable one.</span></li>\r\n        </ol>\r\n        <h3>The Bottomline&nbsp;</h3>\r\n        <p><span style=\"color: #0e101a;\">To conclude, chauffeur training is not merely a formality. It is the\r\n                        cornerstone upon which the entire chauffeur profession is built. Its importance cannot be\r\n                        overstated, especially in an industry where passengers entrust their safety, comfort, and\r\n                        overall experience to the skill and professionalism of the chauffeur. This article has provided\r\n                        detailed information about chauffeur training. However, if you are looking to</span><span\r\n                        style=\"color: #0e101a;\"><strong><em> </em></strong></span><a href=\"https://www.spotlimo.com/\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong><em>hire any professional chauffeur in\r\n                                        Chicago</em></strong></a><span style=\"color: #0e101a;\">, do not look elsewhere\r\n                        than </span><a href=\"https://www.spotlimo.com/chauffeur-services-chicago\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong><em>Spotlimo Chauffeur Services</em></strong></a><span\r\n                        style=\"color: #0e101a;\">.&nbsp;</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/oxv69he4ug2jbgqrzvqb', 'Learn everything about the chauffeurs training guide and why it is important.', 'Learn everything about the chauffeurs training guide and why it is important.', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/efgepoezdccogflwaowz', 'Hire Spotlimo multilingual chauffeurs for exceptional services    like 1', 'Hire Spotlimo multilingual chauffeurs for exceptional services    like 1', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/bepq5tjdjgwuvl412j4s', 'Hire a professional Chauffeur instead of Uber drivers', 'Hire a professional Chauffeur instead of Uber drivers', 85, '2023-09-15 20:59:57', '2023-11-30 20:21:30'),
(14, 'planning-a-party', 'Planning A Party? Here’s Why You Should Hire A Party Bus in Chicago', '<p><span style=\"color: #0e101a;\">If you are planning a bachelor party, opting for a </span><a\r\n                        href=\"https://www.spotlimo.com/\" target=\"_blank\" rel=\"noopener\"><strong><em>SpotLimo Party Bus\r\n                                        service</em></strong></a><span style=\"color: #0e101a;\"> would be one of the\r\n                        rational decisions. It is because the party bus will make your party 10x more exciting and\r\n                        joyous. However, hiring a party bus service provider does not solely matter here, but hiring a\r\n                        professional service provider matters the most.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Survey says that many people find it difficult to get reliable and professional\r\n                        limousine service providers in Chicago due to the multiple options available in the market these\r\n                        days. If you are also one who finds it tough to find a professional service provider among so\r\n                        many options available, this article is for you.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Also, many people overlook the benefits of hiring a party bus in Chicago due to\r\n                        multiple reasons. So, this article will also help in identifying the reason why hiring a\r\n                        professional party bus service provider in Chicago is important and how you can find the best\r\n                        service providers. So, let&rsquo;s get right into it!&nbsp;</span></p>', '<h2>Why You Should Hire A Party Bus Service in Chicago?</h2>\r\n        <p><span style=\"color: #0e101a;\">Hiring a party bus service in Chicago offers many benefits that will make your\r\n                        party even more exciting. Especially if you are looking for a party bus for a bachelor party,\r\n                        hiring a professional party bus in Chicago would be a life-saving decision. In addition, it will\r\n                        make sure your party remains exciting throughout the time. Moreover, the benefits of party buses\r\n                        from trusty-worthy service providers are worth investing.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">Some of these benefits are outlined below.&nbsp;</span></p>\r\n        <h3>Convenience and Mobility</h3>\r\n        <p><span style=\"color: #0e101a;\">A party bus provides both transportation and a party venue in one. You can\r\n                        easily move from one location to another without the hassle of </span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/are-chicago-limo-services-better-than-uber-and-lyft\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong><em>coordinating multiple cars</em></strong></a><span\r\n                        style=\"color: #0e101a;\"> or worrying about designated drivers. This mobility allows you to visit\r\n                        various destinations, such as bars, clubs, and restaurants, in a single night.</span></p>\r\n        <h3>Space and Comfort</h3>\r\n        <p><span style=\"color: #0e101a;\">Party buses come in various sizes, accommodating different group sizes. They\r\n                        typically offer comfortable seating, ample space for dancing, and various entertainment options,\r\n                        like music systems, TVs, and even dance floors. This creates a lively atmosphere, ensuring\r\n                        everyone has a great time.</span></p>\r\n        <h3>Safety</h3>\r\n        <p><span style=\"color: #0e101a;\">Safety should always be a top priority, especially when alcohol is involved. A\r\n                        party bus can ensure that everyone has a safe ride home. In addition, </span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/why-is-chauffeurs-training-important-in-chicago-chauffeurs-training-guide\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong><em>professional drivers</em></strong></a><span\r\n                        style=\"color: #0e101a;\"> are responsible for getting you and your friends safely to your\r\n                        destinations, eliminating the risk of DUIs or accidents.</span></p>\r\n        <h3>Party Atmosphere</h3>\r\n        <p><span style=\"color: #0e101a;\">Party buses are designed to create a festive atmosphere. They often have LED\r\n                        lighting, high-quality sound systems, and other amenities like bars and coolers. These features\r\n                        enhance the party experience and set the mood for celebration.</span></p>\r\n        <h3>Flexibility</h3>\r\n        <p><span style=\"color: #0e101a;\">You have the flexibility to customize your bachelor party experience. You can\r\n                        plan your own route, choose your music playlist, and even decorate the bus to match the theme of\r\n                        the party. This level of personalization ensures that the event aligns with the groom\'s\r\n                        preferences.</span></p>\r\n        <h3>No Worries About Parking</h3>\r\n        <p><span style=\"color: #0e101a;\">Finding parking in busy nightlife areas can be a nightmare, especially for\r\n                        larger groups. With a party bus, you won\'t have to worry about parking at all. You can be\r\n                        dropped off and picked up right at the doorstep of your chosen venues.</span></p>\r\n        <h3>All-Inclusive Experience</h3>\r\n        <p><span style=\"color: #0e101a;\">Many party bus rental packages include perks such as complimentary drinks or\r\n                        entry to certain clubs or bars. This can help you save money while ensuring that everyone in the\r\n                        group has a fantastic time.</span></p>\r\n        <h3>Memorable Experience</h3>\r\n        <p><span style=\"color: #0e101a;\">Bachelor parties are meant to </span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/want-to-relieve-traffic-stress-in-chicago-rent-a-limo-bus-from-wizspeed\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong><em>create lasting memories</em></strong></a><span\r\n                        style=\"color: #0e101a;\">. Renting a party bus adds a unique and unforgettable element to the\r\n                        celebration. It is not every day that you get to party on a bus with your closest\r\n                        friends.</span></p>\r\n        <h3>VIP Treatment</h3>\r\n        <p><span style=\"color: #0e101a;\">Riding in a party bus often gives you a VIP experience, as you will receive\r\n                        priority access and treatment at various venues. This can make the groom and the whole group\r\n                        feel special and pampered.</span></p>\r\n        <h3>No Cleanup</h3>\r\n        <p><span style=\"color: #0e101a;\">Hosting a party at home or a rented venue comes with the responsibility of\r\n                        cleaning up afterward. Moreover, a party bus can leave the cleanup to the rental company,\r\n                        allowing you to focus on enjoying the party.</span></p>\r\n        <h2>How to Find a Professional Party Bus Service Provider in Chicago?</h2>\r\n        <p><span style=\"color: #0e101a;\">Finding a professional </span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/14-top-adventures-in-chicago-with-spotlimo-limousine\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong><em>party bus provider in Chicago</em></strong></a><span\r\n                        style=\"color: #0e101a;\"> is crucial because it will define your party&rsquo;s success. The\r\n                        party&rsquo;s success means the joy and excitement it brings. Therefore, it is one of the most\r\n                        crucial aspects. Unfortunately, Chicago&rsquo;s market is replete with many scammers who try to\r\n                        entrap people just for the sake of a few bucks. They offer low rates to entrap people and\r\n                        provide unprofessional services.&nbsp;</span></p>\r\n        <p><span style=\"color: #0e101a;\">However, people need to understand that hiring an unprofessional service\r\n                        provider is equivalent to turning your fun or bachelor&rsquo;s party into a sheer headache. We\r\n                        have pointed out some factors that will help you to identify a professional party bus service\r\n                        provider in Chicago. Follow this checklist, and you will never get entrapped by any scammer -\r\n                        that&rsquo;s our promise!&nbsp;</span></p>\r\n        <ul>\r\n                <li><span style=\"color: #0e101a;\"><strong>Research Online - </strong></span><span\r\n                                style=\"color: #0e101a;\">Start your search by using search engines, social media, and\r\n                                online directories to find party bus service providers in Chicago. Websites like\r\n                        </span><a href=\"https://www.yelp.com/\" target=\"_blank\" rel=\"noopener\"><span\r\n                                        style=\"color: #0e101a;\">Yelp</span></a><span style=\"color: #0e101a;\">, </span><a\r\n                                href=\"https://www.google.com/maps\" target=\"_blank\" rel=\"noopener\"><span\r\n                                        style=\"color: #0e101a;\">Google Maps</span></a><span style=\"color: #0e101a;\">,\r\n                                and </span><a href=\"https://www.tripadvisor.com/\" target=\"_blank\" rel=\"noopener\"><span\r\n                                        style=\"color: #0e101a;\">TripAdvisor</span></a><span style=\"color: #0e101a;\">\r\n                                often have customer reviews and ratings that can provide valuable insights.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Ask for Recommendations - </strong></span><span\r\n                                style=\"color: #0e101a;\">Seek recommendations from friends, family members, colleagues,\r\n                                or acquaintances who have used party bus services in Chicago. Personal recommendations\r\n                                can be a trustworthy source of information.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Check Online Reviews and Ratings -</strong></span><span\r\n                                style=\"color: #0e101a;\"> Read online reviews and ratings from previous customers. Look\r\n                                for consistent positive feedback and check if there are any recurring issues or\r\n                                complaints. This can help you gauge the reputation of the service provider.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Verify Licensing and Insurance - </strong></span><span\r\n                                style=\"color: #0e101a;\">Make sure that the party bus service provider is licensed,\r\n                                properly insured, and keeps the buses well-maintained. This is crucial for your safety\r\n                                and protection in case of any unforeseen circumstances.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Review the Fleet -</strong></span><span\r\n                                style=\"color: #0e101a;\"> Analyze the company\'s </span><a\r\n                                href=\"https://www.spotlimo.com/vehicles\" target=\"_blank\"\r\n                                rel=\"noopener\"><strong><em>fleet of party buses</em></strong></a><span\r\n                                style=\"color: #0e101a;\">. Consider the size and amenities of the buses to ensure they\r\n                                meet your specific needs and preferences. Some party buses offer different features,\r\n                                such as sound systems, lighting, and seating arrangements, so choose one that suits your\r\n                                event.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Ask About Services and Packages - </strong></span><span\r\n                                style=\"color: #0e101a;\">Contact potential service providers and inquire about their\r\n                                services, packages, and pricing. Be clear about your event details, such as the date,\r\n                                time, duration, and any specific requests or requirements you may have.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Ask About Safety Measures - </strong></span><span\r\n                                style=\"color: #0e101a;\">Inquire about the safety measures and precautions taken by the\r\n                                party bus provider. This includes information about their drivers, maintenance\r\n                                procedures, and adherence to safety regulations.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Clarify Terms and Conditions - </strong></span><span\r\n                                style=\"color: #0e101a;\">Review the terms and conditions of the service agreement,\r\n                                including payment policies, cancellation policies, and any additional fees. Make sure\r\n                                that everything is clearly outlined and understood.</span></li>\r\n                <li><span style=\"color: #0e101a;\"><strong>Book in Advance - </strong></span><span\r\n                                style=\"color: #0e101a;\">Once you have selected a reputable party bus service provider\r\n                                that meets your criteria, book their services well in advance to secure your\r\n                                reservation, especially if your event is during a busy season.</span></li>\r\n        </ul>\r\n        <h2>Hire SpotLimo Party Bus Service Provider in Chicago and lock Indefinite Fun for Your Party!</h2>\r\n        <p><span style=\"color: #0e101a;\">To conclude, hiring a party bus for a party can make the event more convenient,\r\n                        enjoyable, and memorable for everyone involved. It is because the party bus comes with </span><a\r\n                        href=\"https://www.spotlimo.com/chauffeur-services-chicago\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong>professional chauffeurs</strong></a><span style=\"color: #0e101a;\"> who\r\n                        ensure safety and take good care of you and your loved ones throughout the party. Just be sure\r\n                        to plan ahead to </span><a href=\"https://www.spotlimo.com/\" target=\"_blank\"\r\n                        rel=\"noopener\"><strong><em>book a professional and customer-trusted party bus\r\n                                        company</em></strong></a><span style=\"color: #0e101a;\"> for an unforgettable\r\n                        celebration.</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/ycq9wceu6euwdcq6je6s', 'SpotLimo provides the best party bus service in Chicago', 'SpotLimo provides the best party bus service in Chicago', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/lshstco6noejt8whg81n', 'Hire a professional party limo service provider in Chicago', 'Hire a professional party limo service provider in Chicago', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/szrcevnyxrrcfozyk7ps', 'Enjoy the parties to their fullest with our professional party bus service', 'Enjoy the parties to their fullest with our professional party bus service', 36, '2023-09-19 21:33:17', '2023-11-30 20:28:11');
INSERT INTO `blog_posts` (`id`, `slug`, `title`, `introduction`, `content`, `first_image_url`, `first_image_caption`, `first_image_alt`, `second_image_url`, `second_image_caption`, `second_image_alt`, `third_image_url`, `third_image_caption`, `third_image_alt`, `views`, `created_at`, `updated_at`) VALUES
(15, 'exciting-limousine-birthday-ideas-in-chicago', '9 Exciting Limousine Birthday Ideas in Chicago', '<p>Limousine birthday ideas can be the most exciting ways of celebrating birthdays in Chicago. We all know that birthdays are special occasions that call for unique and memorable celebrations. While there are countless ways to celebrate this life’s milestone, limousine birthday celebration in Chicago is one of the most promising ways. </p>\r\n<p>Please note that Chicago offers a great array of scenic landscapes and pleasant picnic spots that makes celebrating birthdays on four wheels worth-experiencing. In addition, renting a limousine in Chicago for your birthday not only adds an element of luxury but also creates lasting memories for those looking to make their special day unforgettable.</p>\r\n<p>In this article, we will discuss the 9 best limousine birthday ideas in Chicago to help you plan a memorable and most extravagant birthday celebration for your loved ones.\r\n</p>', '<ol>\r\n                <h2>\r\n                             <li>Chicago Lights Tour</li>   \r\n                </h2>\r\n\r\n\r\n                <p><span >If you ever get a chance of celebrating your birthday in Chicago, never\r\n                                miss\r\n                                the opportunity of exploring Chicago\'s mesmerizing skyline and lights on your special\r\n                                day.\r\n                                Roaming around the city, blowing candles on four wheels, and witnessing the\r\n                                world&rsquo;s best\r\n                                skyline is going to be the most exciting and heart-pounding birthday celebration\r\n                                idea.</span></p>\r\n                <p><span >Also, it gives you the opportunity to explore your city like never\r\n                                before with\r\n                                a limousine city lights tour. Also, please note that whether it is your hometown or a\r\n                                new city\r\n                                you have always wanted to explore, a night tour in a limousine offers a unique\r\n                                perspective. You\r\n                                will cruise through Chicago\'s iconic landmarks and enjoy the day to its fullest. This is\r\n                                a\r\n                                fantastic way to celebrate your birthday while feeling like a VIP.</span></p>\r\n\r\n                <h2>\r\n                        <li>Casino Night</li>\r\n\r\n                </h2>\r\n\r\n                <p><span >If you are feeling lucky on your birthday, why not plan a limousine\r\n                                casino\r\n                                night?</span></p>\r\n                <p><span >Start with a luxurious limousine ride to a local casino in Chicago, and\r\n                                then\r\n                                spend the evening trying your hand at various games of chance. Whether you prefer\r\n                                blackjack,\r\n                                poker, or roulette, a casino night in a limousine adds a touch of glamour to your\r\n                                birthday\r\n                                celebration. Plus, you would not have to worry about the driving because our </span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/why-is-chauffeurs-training-important-in-chicago-chauffeurs-training-guide/\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>professional and certified\r\n                                                chauffeur</em></strong></a><span > will take care\r\n                                of that\r\n                                for you.</span></p>\r\n                <h2>\r\n                        <li>Spa Day on Wheels</li>\r\n                </h2>\r\n                <p><span >Birthdays are all about celebrating yourself, aren\'t they? Of course,\r\n                                they are.\r\n                                And that&rsquo;s why we got you the outstanding celebration idea for your or your\r\n                                beloved&rsquo;s next birthday - that is to plan a spay day on four wheels amid the\r\n                                beauty of\r\n                                Chicago.</span></p>\r\n                <p><span >You can plan it with your friends or loved ones and energy a &ldquo;me\r\n                                day.\r\n                                &rdquo; Pampering yourself and your friends with a spa day on wheels will be the best\r\n                                way to get\r\n                                ready for the new and energetic start of your next year.</span></p>\r\n                <p><span >Your limousine can be transformed into a mobile spa, complete with\r\n                                massage\r\n                                tables, aromatherapy, and a soothing atmosphere. In addition, you can travel to your\r\n                                favorite\r\n                                spa destinations or have a licensed masseuse come on board. And the best part is you\r\n                                will have\r\n                                plenty of opportunities, like enjoy facials, massages, and other spa treatments while\r\n                                sipping\r\n                                champagne and reveling in the comfort of your luxurious Chicago limousine ride.</span>\r\n                </p>\r\n                <h2>\r\n                        <li>Wine Tasting Tour</li>\r\n                </h2>\r\n                <p><span >It is no secret that Chicago is surrounded by picturesque suburbs that\r\n                                are home\r\n                                to some exceptional wineries. Renting a limousine for a suburban wine tasting tour is an\r\n                                excellent way to celebrate your birthday. Gather your wine-loving friends, and let your\r\n                                chauffeur take you to the best wineries in the area. Also, you can savor a variety of\r\n                                fine\r\n                                wines, all while traveling in comfort and luxury.</span></p>\r\n                <h2>\r\n                        <li>Chicago River Cruise</li>\r\n                </h2>\r\n                <p><span >Celebrating your or your beloved&rsquo;s next birthday in a happy\r\n                                limousine\r\n                                would definitely be an exciting idea especially when you get the </span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/7-things-to-look-for-in-a-chicago-limo-service-ultimate-guide-2023/\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>opportunity to explore Chicago&rsquo;s\r\n                                                beautiful\r\n                                                landscape</em></strong></a><span >.</span>\r\n                </p>\r\n                <p><span >If you are planning an exciting and joyous birthday celebration with a\r\n                                touch of\r\n                                elegance, consider a visiting Chicago River Cruise in a limousine. You and your guests\r\n                                can enjoy\r\n                                breathtaking views of the city\'s iconic architecture while sipping on champagne and\r\n                                indulging in\r\n                                delicious hors d\'oeuvres.</span></p>\r\n                <p><span >Moreover, this scenic tour along the Chicago River offers a unique\r\n                                perspective\r\n                                of the city and is perfect for those who appreciate history and stunning\r\n                                skylines.</span></p>\r\n                <h2>\r\n                        <li>Chicago Foodie Tour</li>\r\n                </h2>\r\n                <p><span >If you are a foodie, this idea will definitely be a divine idea to\r\n                                celebrate\r\n                                your birthday the way you love. It is because our next limousine birthday in Chicago is\r\n                                to plan\r\n                                a foodie tour. Also, we all know that Chicago is renowned for its culinary scene, and\r\n                                what\r\n                                better way to experience it than on a foodie tour in a limousine?</span></p>\r\n                <p><span >Also, you can customize your birthday celebration by creating an\r\n                                itinerary that\r\n                                includes visits to some of the city\'s top restaurants, food festivals, and hidden\r\n                                culinary gems.\r\n                                With a limousine at your disposal, you can sample a diverse range of dishes without\r\n                                worrying\r\n                                about transportation. Or you can enjoy your food while roaming around the </span><a\r\n                                href=\"https://www.spotlimo.com/show-blog/14-top-adventures-in-chicago-with-spotlimo-limousine\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>colorful streets of\r\n                                                Chicago</em></strong></a><span >.</span>\r\n                </p>\r\n\r\n                <h2>\r\n                        <li>Concert or Theater Night</li>\r\n                </h2>\r\n                <p><span >It is an open secret that Chicago is a hub for live entertainment, from\r\n                                Broadway-style shows to top-tier concerts. So, it is time to cash this Chicago fact and\r\n                                make\r\n                                your birthday extra special by attending a performance in style. You can arrive at the\r\n                                theater\r\n                                or concert venue in a sleek limousine, and enjoy the show without the hassle of parking\r\n                                or\r\n                                traffic. This option guarantees a night of joy and countless laughter.</span></p>\r\n\r\n                <h2>\r\n                        <li>Chicago Sports Game</li>\r\n                </h2>\r\n\r\n                <p><span >For sports enthusiasts, a birthday spent at a Chicago sports game is a\r\n                                dream\r\n                                come true. Whether you are a Cubs, White Sox, Bulls, or Bears fan, Chicago offers a\r\n                                variety of\r\n                                sporting events year-round. You can rent a </span><a href=\"https://www.spotlimo.com/\"\r\n                                target=\"_blank\" rel=\"noopener\"><strong><em>Chicago limousine\r\n                                                service</em></strong></a><span > to transport you\r\n                                and your friends to the game, tailgate in style, and\r\n                                cheer for your favorite team. It is the perfect way to combine your love for sports with\r\n                                a\r\n                                luxurious birthday celebration.</span></p>\r\n\r\n                <h2>\r\n                        <li>Museum and Gallery Hop</li>\r\n                </h2>\r\n        </ol>\r\n        <p><span >Last but not least, Chicago is home to world-class museums and art galleries,\r\n                        making it an ideal destination for art and culture aficionados. Therefore, it is one of exciting\r\n                        birthday ideas to plan a birthday limousine tour that takes you to renowned institutions like\r\n                        the </span><a href=\"https://www.artic.edu/\" target=\"_blank\" rel=\"noopener\">Art Institute of\r\n                        Chicago</a><span >, the Museum of Science and Industry, and the </span><a\r\n                        href=\"https://mcachicago.org/\" target=\"_blank\" rel=\"noopener\">Museum of Contemporary\r\n                        Art</a><span >. Explore the city\'s rich cultural heritage while traveling\r\n                        in comfort and luxury.</span></p>\r\n        <h3><a href=\"https://www.spotlimo.com/\" target=\"_blank\" rel=\"noopener\"><strong>Make Your Birthday Unforgettable\r\n                                with SpotLimo Limousine Service!</strong></a></h3>\r\n        <p><span >To conclude, Chicago offers an array of options for those seeking to celebrate\r\n                        their birthdays in a grand and memorable way. Whether you are planning an intimate gathering\r\n                        with close friends or a grand party, our </span><a\r\n                        href=\"https://www.spotlimo.com/show-blog/discover-why-limousine-maintenance-is-so-important/\"\r\n                        target=\"_blank\" rel=\"noopener\"><strong><em>well-maintained and happy\r\n                                        limousines</em></strong></a><span > will add that extra\r\n                        touch of sophistication and excitement to your birthday celebration. Our experienced and\r\n                        professional chauffeurs will take care of you and your loved ones while you can relax, enjoy\r\n                        your birthday to the fullest.</span></p>', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/jlcgynw47todooltsdeb', 'Explore 9 Exciting Limousine Birthday Ideas in Chicago', 'Explore 9 Exciting Limousine Birthday Ideas in Chicago', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/xbwcb8tfvvj7frzv66gw', 'Celebrate your Birthday While Roaming Around the Chicago', 'Celebrate your Birthday While Roaming Around the Chicago', 'https://res.cloudinary.com/dujfebpju/image/upload/f_auto,q_auto/v1/samples/images/cbqfltfje2hhe13ynr1a', 'Enjoy quality time on your birthday with our Spotlimo limousine service', 'Enjoy quality time on your birthday with our Spotlimo limousine service', 29, '2023-09-28 16:45:01', '2023-11-30 20:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `booking_contacts`
--

CREATE TABLE `booking_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone_no`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(3, 'Armando Abitbol', 'armando.a@inkas.ca', NULL, 'Hello,\r\nIts Armando from INKAS Armored, Would you be interested in our luxury bulletproof cars?', 0, '2023-07-17 23:30:26', '2023-07-17 23:30:26'),
(4, 'Mark Felix', 'mfelix123@gmail.com', NULL, 'Good Morning, \r\n\r\nWould you kindly provide a quote for us for any all vehicles within your fleet that can accommodate 9 passengers for a wedding on 9.22.23. \r\n\r\nPick-up at 2:30 PM : 2456 W Superior Chicago, IL 60612 \r\n\r\n1st stop (3PM): First Saint Paul\'s 1301 N LaSalle Chicago, IL 60610\r\n - Depart at 4:30PM\r\n\r\nDrop-off at 5PM: Lytle House 5517N Broadway Chicago, IL 60640. \r\n\r\n2.5 hours total service time.\r\n\r\nthanks in advance', 0, '2023-07-21 16:38:18', '2023-07-21 16:38:18'),
(15, 'hassan', 'hassannadeem.dev@gmail.com', '', 'Hiiiiiiiiiiiii', 0, '2023-08-27 13:57:42', '2023-08-27 13:57:42'),
(16, 'Terry Estes', 'terrydestes6@gmail.com', '', 'Hey there,\r\n\r\nHope you and your business are doing well. We&#039;ve all been through so much this year!\r\n\r\nI&#039;m really sorry to bother you, and I know you are super busy, but I have been checking your website, and it seems that you are not ranking well for your ad words and key phrases. I actually help businesses like yours get a better ranking in google by using 10 proven techniques below.\r\n\r\nI would really love the opportunity to work with you and your business, and bring your website to the top of Google’s list - the sweet spot where you get clicks and more business!\r\n\r\nPlease let me tell you some of the techniques that I can use below to help you get a better ranking in google search:\r\n\r\n1. Title Tag Optimizations are missing, I can add these to your site.\r\n2. Meta Tag Optimization descriptions are absent, I can add them too.\r\n3. Heading Tags Optimization - No problem getting those put in there.\r\n4. Targeted keywords are not placed into tags correctly.\r\n5. Alt / Image tags Optimization is not present - it would take me seconds to write these.\r\n6. Google Publisher is missing; I can set this up for you\r\n7. Custom 404 Page is missing and I can create this for you.\r\n8. The Products are not following Structured mark-up data, let me edit that in google webmaster tools.\r\n9. Website Speed Development (Both Mobile and Desktop) I can make some tweaks and show you a speed performance using GTMetrics or Pingdom.\r\n10.Content Creation SEO work-As a native English speaker, I can create fantastic articles that people will want to read and share, these will bring business to you by word of mouth rather than expensive promotion via google paid search.\r\n\r\nI&#039;m sorry if this sounds a little technical, but rest assured, these techniques will certainly improve you ranking in search.\r\n\r\nWe&#039;ve got lots to do together to make you stand out!Please give us the chance to work with you. You can see our rates on our website.\r\n\r\nIf this email has reached you by mistake, or if you do not wish to take advantage of this opportunity, please accept my apologies for any inconvenience caused. We are a small business and we are just trying to get some customers. I&#039;m sure you were in our position once too. Rest assured that we will not contact you again should you reply to this email with the word &#039;unsubscribe&#039;\r\n\r\nThank you kindly for your time and consideration,\r\n\r\nLooking forward to working with you.\r\n\r\nKindest regards,\r\n\r\nTerry Estes', 0, '2023-08-30 07:48:48', '2023-08-30 07:48:48'),
(17, 'Hassan Nadeem', 'hassannadeem.dev@gmail.com', '', 'hiiiiiiiiiiiii', 0, '2023-09-14 18:11:14', '2023-09-14 18:11:14'),
(18, 'Syed Salman Rashid', 'info@graspsolutions.net', '', 'Hello,\r\n\r\nI&#039;m Syed, Director at Grasp Solutions. We specialize in Dispatch and Call Center services for Taxi and Limousine Companies.\r\n\r\nOur Expertise:\r\nWe&#039;re proficient in using dispatch software like LimoAnyWhere, TaxiCaller, and iCabbi.\r\n\r\nWhy Choose Us?\r\nBy opting for our services, you can trim in-house expenses and let our professional team manage your business more efficiently. Focus on business growth, while we handle potential operational complexities. We ensure 100% uptime with robust backup systems in place.\r\n\r\nWhat We Offer:\r\nOur team handles your complete dispatch operations: answering calls, bookings, driver dispatch, driver support, and more.\r\n\r\nInterested?\r\nIf you or anyone you know is interested, let&#039;s schedule a Google or Zoom meeting for further discussion.\r\n\r\nVideo Intro Of Our Team:\r\nhttps://www.youtube.com/watch?v=RzL1zO2Zr7U\r\n\r\nWe&#039;re here to address your questions and provide more insights into our services.\r\n\r\nThanks &amp; Best Regards', 0, '2023-09-20 23:18:15', '2023-09-20 23:18:15'),
(19, 'Anna Wilson', 'annawilson.mkt@gmail.com', '', 'Hi team spotlimo.com,\r\n\r\nYour website&#039;s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I&#039;ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you&#039;ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results.\r\n\r\nWould you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt&#039;s become an effective SEO strategy/ SEO setting to defeat your competitors.\r\n\r\nAllow me to send you a No Obligation Audit Report with our monthly plan for your review. We will fix those errors with no extra cost if you choose any one of our monthly marketing plans.\r\n\r\nWell Wishes!\r\nAnna Wilson Your - Web Marketing Expert', 0, '2023-10-24 10:24:10', '2023-10-24 10:24:10'),
(20, 'Grace Flowers', 'gflow419@yahoo.com', '', 'Good morning, \r\nI am looking to sell a limo if you take them for sale?', 0, '2023-11-15 14:41:56', '2023-11-15 14:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `contact_replies`
--

CREATE TABLE `contact_replies` (
  `id` int(11) NOT NULL,
  `contact_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_passengers`
--

CREATE TABLE `main_passengers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_passengers`
--

INSERT INTO `main_passengers` (`id`, `reservation_id`, `name`, `email`, `phone`, `company`, `created_at`, `updated_at`) VALUES
(85, 85, 'Stevan ckrebo', 'doodie031002@gmail.com', '2243984962', NULL, '2023-07-17 10:38:02', '2023-07-17 10:38:02'),
(87, 87, 'Lizbeth Martinez', 'cynthia9283@gmail.com', '2243226661', NULL, '2023-07-20 05:53:46', '2023-07-20 05:53:46'),
(88, 88, 'Michael Powers', 'Wilpowers1@aol.com', '8479026225', NULL, '2023-07-21 22:22:15', '2023-07-21 22:22:15'),
(91, 91, 'Aniya Barton', 'aniyajb1@gmail.com', '7084659568', NULL, '2023-07-27 00:15:01', '2023-07-27 00:15:01'),
(97, 97, 'Mahmoud Nemrat', 'm.alsaher25@yahoo.com', '773-510-0006', NULL, '2023-07-30 19:14:15', '2023-07-30 19:14:15'),
(98, 98, 'Leticia garcia', 'lg080378@gmail.com', '2244251154', NULL, '2023-08-01 22:40:49', '2023-08-01 22:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_17_044943_create_permission_tables', 1),
(6, '2022_12_20_030549_create_vehicle_types_table', 1),
(7, '2022_12_20_031415_create_service_types_table', 1),
(14, '2023_01_04_033923_create_contact_replies_table', 3),
(15, '2023_01_05_020542_create_airports_table', 4),
(16, '2023_01_11_054924_create_settings_table', 5),
(19, '2022_12_20_031459_create_reservations_table', 6),
(20, '2022_12_20_032248_create_main_passengers_table', 6),
(21, '2022_12_20_032450_create_booking_contacts_table', 6),
(22, '2022_12_21_031458_create_payments_table', 6),
(23, '2023_01_25_071739_create_reservation_details_table', 6),
(24, '2023_01_26_043238_add_code_coloum_to_reservation_table', 6),
(25, '2023_01_03_011031_create_contacts_table', 7),
(26, '2023_01_27_045551_add_square_order_id_to_payments_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('husnain.pasha@wizspeed.com', '$2y$10$laXv7ufJvR2T3aNjkbokZeG6mS3FQd8ViFUiqQcOd5ZCmfnbzwXx.', '2023-08-14 20:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `square_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `charge_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_channel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refunded_amount` double DEFAULT NULL,
  `refund_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `reservation_id`, `square_order_id`, `currency`, `amount`, `charge_id`, `payment_channel`, `refunded_amount`, `refund_note`, `status`, `created_at`, `updated_at`) VALUES
(85, 85, NULL, 'USD', 238.17, NULL, NULL, NULL, NULL, 'PENDING', '2023-07-17 10:38:02', '2023-07-17 10:38:02'),
(87, 87, NULL, 'USD', 1050, NULL, NULL, NULL, NULL, 'PENDING', '2023-07-20 05:53:46', '2023-07-20 05:53:46'),
(88, 88, NULL, 'USD', 18.98, NULL, NULL, NULL, NULL, 'PENDING', '2023-07-21 22:22:15', '2023-07-21 22:22:15'),
(91, 91, NULL, 'USD', 42.32, NULL, NULL, NULL, NULL, 'PENDING', '2023-07-27 00:15:01', '2023-07-27 00:15:01'),
(97, 97, '59H385968Y012153H', 'USD', 97.75, NULL, NULL, NULL, NULL, 'PENDING', '2023-07-30 19:14:15', '2023-07-30 19:14:16'),
(98, 98, NULL, 'USD', 1050, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-01 22:40:49', '2023-08-01 22:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'list-users', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(2, 'create-users', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(3, 'delete-users', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(4, 'change-role', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(5, 'list-role', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(6, 'create-role', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(7, 'edit-role', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(8, 'delete-role', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(9, 'list-permission', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(10, 'create-permission', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(11, 'edit-permission', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(12, 'delete-permission', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vehicle_type_id` bigint(20) UNSIGNED NOT NULL,
  `service_type_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_stop` longtext COLLATE utf8mb4_unicode_ci,
  `hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passengers` int(11) NOT NULL,
  `bags` int(11) DEFAULT NULL,
  `vehicle_detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `airline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructions` mediumtext COLLATE utf8mb4_unicode_ci,
  `meet_and_greet` tinyint(1) NOT NULL DEFAULT '0',
  `miles` double NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `code`, `user_id`, `vehicle_type_id`, `service_type_id`, `date`, `time`, `from`, `to`, `to_stop`, `hours`, `passengers`, `bags`, `vehicle_detail`, `airline`, `flight_number`, `instructions`, `meet_and_greet`, `miles`, `status`, `created_at`, `updated_at`) VALUES
(85, 'SL00000085', NULL, 3, 3, '2023-09-26', '08:30', '1098 1350th Street, Lincoln, IL, USA', '37074 Shirley Drive, Gurnee, IL, USA', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 207.1, 'pending', '2023-07-17 10:38:02', '2023-07-17 10:38:02'),
(87, 'SL00000087', NULL, 4, 4, '2023-07-22', '12:30', 'Cicero Avenue, Chicago, IL 60804, USA', 'Cicero Avenue, Chicago, IL, USA', NULL, '3', 10, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 5.7, 'pending', '2023-07-20 05:53:46', '2023-07-20 05:53:46'),
(88, 'SL00000088', NULL, 3, 3, '2023-08-11', '18:00', '1524 Walnut Avenue, Wilmette, IL, USA', 'Wrigley Field Chicago', NULL, NULL, 6, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, 'Return trip pivv c j up around 11pm', 0, 16.5, 'pending', '2023-07-21 22:22:15', '2023-07-21 22:22:15'),
(91, 'SL00000091', NULL, 4, 3, '2023-08-19', '18:30', '19900 Oakwood Court, Lynwood, IL, USA', '3660 North Clark Street, Chicago, IL, USA', NULL, NULL, 12, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 36.8, 'pending', '2023-07-27 00:15:01', '2023-07-27 00:15:01'),
(97, 'SL00000097', NULL, 2, 1, '2023-07-31', '14:13', 'Kinzie hotel', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 3, 2, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 7.7, 'pending', '2023-07-30 19:14:15', '2023-07-30 19:14:15'),
(98, 'SL00000098', NULL, 4, 4, '2023-08-05', '15:00', '1627 Monroe St, Evanston, Illinois, USA', '3719 St Charles Pl, Bellwood, IL, USA', 'a:1:{i:0;s:45:\"600 East Grand Avenue, Chicago, Illinois, USA\";}', '3', 12, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 29.3, 'pending', '2023-08-01 22:40:49', '2023-08-01 22:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_details`
--

CREATE TABLE `reservation_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `gratuity` double DEFAULT NULL,
  `rush_hour_charge` double DEFAULT NULL,
  `per_mile_charge` double DEFAULT NULL,
  `hours_charge` double DEFAULT NULL,
  `car_seat` double DEFAULT NULL,
  `booster_seat` double DEFAULT NULL,
  `meet_greet` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_details`
--

INSERT INTO `reservation_details` (`id`, `reservation_id`, `price`, `gratuity`, `rush_hour_charge`, `per_mile_charge`, `hours_charge`, `car_seat`, `booster_seat`, `meet_greet`, `created_at`, `updated_at`) VALUES
(85, 85, 238.17, 31.07, 207.1, 0, NULL, NULL, NULL, NULL, '2023-07-17 10:38:02', '2023-07-17 10:38:02'),
(87, 87, 1050, 0, 0, 0, 1050, NULL, NULL, NULL, '2023-07-20 05:53:46', '2023-07-20 05:53:46'),
(88, 88, 18.98, 2.48, 16.5, 0, NULL, NULL, NULL, NULL, '2023-07-21 22:22:15', '2023-07-21 22:22:15'),
(91, 91, 42.32, 5.52, 36.8, 0, NULL, NULL, NULL, NULL, '2023-07-27 00:15:01', '2023-07-27 00:15:01'),
(97, 97, 97.75, 12.75, 0, 85, NULL, NULL, NULL, NULL, '2023-07-30 19:14:15', '2023-07-30 19:14:15'),
(98, 98, 1050, 0, 0, 0, 1050, NULL, NULL, NULL, '2023-08-01 22:40:49', '2023-08-01 22:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(2, 'admin', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(3, 'user', 'web', '2023-01-14 03:20:18', '2023-01-14 03:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'To Airport', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(2, 'From Airport', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(3, 'Point to Point', '2023-01-14 03:20:18', '2023-01-14 03:20:18'),
(4, 'Hourly Charter', '2023-01-14 03:20:18', '2023-01-14 03:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Hotline', 'hotline', '224-372-3723', NULL, '2023-01-27 03:54:08'),
(2, 'Address', 'address', '1016 W Jackson Blvd Chicago,IL 60607', NULL, '2023-01-27 03:54:08'),
(3, 'Email', 'email', 'contact@spotlimo.com', NULL, '2023-01-27 03:54:08'),
(4, 'Facebook Url', 'social-facebook-url', 'https://www.facebook.com/spotlimo', NULL, '2023-01-27 03:54:08'),
(5, 'Linkedin Url', 'social-linkedin-url', 'https://www.linkedin.com/company/spotlimo', NULL, '2023-01-27 03:54:08'),
(6, 'Twitter Url', 'social-twitter-url', 'https://twitter.com/home', NULL, '2023-01-27 03:54:08'),
(7, 'Youtube Url', 'social-youtube-url', 'https://www.youtube.com/@spotlimo/', NULL, '2023-01-27 03:54:08'),
(8, 'Social Instagaram Url', 'social-instagaram-url', 'https://www.youtube.com/@spotlimo/', '2023-01-27 03:52:25', '2023-01-27 03:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `temp_booking_contacts`
--

CREATE TABLE `temp_booking_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_main_passengers`
--

CREATE TABLE `temp_main_passengers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_main_passengers`
--

INSERT INTO `temp_main_passengers` (`id`, `reservation_id`, `name`, `email`, `phone`, `company`, `created_at`, `updated_at`) VALUES
(1, 3, 'Hassan', 'hassannadeem.dev@gmail.com', '224-344-5454', NULL, '2023-08-07 13:30:07', '2023-08-07 13:30:07'),
(2, 4, 'Hassan', 'hassannadeem.dev@gmail.com', '224-344-5454', NULL, '2023-08-07 13:32:18', '2023-08-07 13:32:18'),
(3, 5, 'Hassan', 'hassannadeem.dev@gmail.com', '224-344-5454', NULL, '2023-08-07 13:34:32', '2023-08-07 13:34:32'),
(4, 6, 'abc', 'abc@gmzil.com', '224-312-1211', NULL, '2023-08-07 13:35:14', '2023-08-07 13:35:14'),
(5, 7, 'Hassan', 'hassannadeem.dev@gmail.com', '224-322-2222', NULL, '2023-08-07 15:08:14', '2023-08-07 15:08:14'),
(6, 8, 'Hassan', 'hassannadeem.dev@gmail.com', '224-321-2112', NULL, '2023-08-07 15:19:12', '2023-08-07 15:19:12'),
(7, 9, 'Hassan', 'hassannadeem.dev@gmail.com', '224-311-2111', NULL, '2023-08-07 16:30:47', '2023-08-07 16:30:47'),
(8, 10, 'Hassan', 'hassannadeem.dev@gmail.com', '224-312-1212', NULL, '2023-08-07 16:53:11', '2023-08-07 16:53:11'),
(9, 11, 'Hassan', 'hassannadeem.dev@gmail.com', '224-312-1211', NULL, '2023-08-07 17:01:45', '2023-08-07 17:01:45'),
(10, 12, 'hassan', 'hassannadeem.dev@gmail.com', '224-331-2121', NULL, '2023-08-07 17:12:30', '2023-08-07 17:12:30'),
(11, 13, 'Hassan', 'hassannadeem.dev@gmail.com', '224-345-1111', NULL, '2023-08-08 10:34:55', '2023-08-08 10:34:55'),
(12, 14, 'Hassan Nadeem', 'hassannadeem.dev@gmail.com', '224-312-1212', NULL, '2023-08-08 17:49:10', '2023-08-08 17:49:10'),
(13, 15, 'Hassan Nadeem', 'hassannadeem.dev@gmail.com', '224-334-3443', NULL, '2023-08-08 21:50:28', '2023-08-08 21:50:28'),
(14, 16, 'Hassan Nadeem', 'hassannadeem.dev@gmail.com', '224-311-2121', NULL, '2023-08-08 21:55:18', '2023-08-08 21:55:18'),
(15, 17, 'Hassan Nadeem', 'hassannadeem.dev@gmail.com', '224-343-4343', NULL, '2023-08-09 08:33:21', '2023-08-09 08:33:21'),
(16, 18, 'Hassan Nadeem', 'hassannadeem.dev@gmail.com', '224-323-2322', NULL, '2023-08-09 08:36:02', '2023-08-09 08:36:02'),
(17, 19, 'Hassan', 'hassannadeem.dev@gmail.com', '224-312-1211', NULL, '2023-08-09 14:22:19', '2023-08-09 14:22:19'),
(18, 20, 'aaa', 'aaa@gmail.com', '224-312-1211', NULL, '2023-08-09 14:23:22', '2023-08-09 14:23:22'),
(19, 21, 'Hassan Nadeem', 'hassannadeem.dev@gmail.com', '224-343-4343', NULL, '2023-08-09 18:59:35', '2023-08-09 18:59:35'),
(20, 22, 'Husnain', 'hpasha100@outlook.com', '3123303737', NULL, '2023-08-09 20:42:09', '2023-08-09 20:42:09'),
(21, 23, 'Husnain', 'husnain.pasha@wizspeed.com', '312-330-3737', NULL, '2023-08-09 20:44:16', '2023-08-09 20:44:16'),
(22, 24, 'test', 'test@test', '323-232-3222', 'test.com', '2023-08-14 20:57:47', '2023-08-14 20:57:47'),
(23, 25, 'test', 'test@test', '323-232-3222', 'test.com', '2023-08-14 21:01:08', '2023-08-14 21:01:08'),
(24, 26, 'test', 'test@gmail.com', '201-343-2423', 'test.com', '2023-08-14 21:14:04', '2023-08-14 21:14:04'),
(25, 27, 'Hassan', 'hassannadeem@gmail.com', '224-312-1212', NULL, '2023-08-25 19:28:13', '2023-08-25 19:28:13'),
(26, 28, 'William walsh', 'billypaints429@yahoo.com', '216-644-1661', NULL, '2023-09-05 17:21:24', '2023-09-05 17:21:24'),
(27, 29, 'john', 'john@email.com', '88-882-44112', 'Bahria', '2023-09-11 09:57:55', '2023-09-11 09:57:55'),
(28, 30, 'Hassan Nadeem', 'hassannadeem.dev@gmail.com', '224-344-4322', NULL, '2023-09-21 16:04:34', '2023-09-21 16:04:34'),
(29, 31, 'Joae', 'hsbsbsb@gmail.com', '7373791914', 'Lufthansa', '2023-09-25 16:00:59', '2023-09-25 16:00:59'),
(30, 32, 'rr2r2r', 'test@sss.com', '201-555-5555', NULL, '2023-10-23 15:12:12', '2023-10-23 15:12:12'),
(31, 33, 'Demo', 'test@gmail.com', '201-555-5555', NULL, '2023-11-03 03:14:38', '2023-11-03 03:14:38'),
(32, 34, 'Asad', 'hpasha100@outlook.com', '312-330-3737', NULL, '2023-11-19 03:46:20', '2023-11-19 03:46:20'),
(33, 35, 'Husnain', 'hpasha100@outlook.com', '3123303737', NULL, '2023-11-21 22:28:03', '2023-11-21 22:28:03'),
(34, 36, 'Husnain', 'kistaninc@gmail.com', '312-330-3737', NULL, '2023-11-21 22:29:09', '2023-11-21 22:29:09'),
(35, 37, 'Husnain', 'kistaninc@gmail.com', '312-330-3737', NULL, '2023-11-21 22:29:41', '2023-11-21 22:29:41'),
(36, 38, 'Kathleen Pagel', 'pagel.kathleen@gmail.com', '5636507875', NULL, '2023-11-30 15:10:26', '2023-11-30 15:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `temp_payments`
--

CREATE TABLE `temp_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `square_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `charge_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_channel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refunded_amount` double DEFAULT NULL,
  `refund_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_payments`
--

INSERT INTO `temp_payments` (`id`, `reservation_id`, `square_order_id`, `currency`, `amount`, `charge_id`, `payment_channel`, `refunded_amount`, `refund_note`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, 'USD', 6520.91, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-07 13:34:32', '2023-08-07 13:34:32'),
(2, 6, '465194561Y8062631', 'USD', 103.28, '465194561Y8062631', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-07 13:35:14', '2023-08-07 14:20:32'),
(3, 7, '8GS47821HG622801M', 'USD', 2866.79, '8GS47821HG622801M', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-07 15:08:14', '2023-08-07 15:08:51'),
(4, 8, '9D230798F13930600', 'USD', 103.28, '9D230798F13930600', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-07 15:19:12', '2023-08-07 15:19:36'),
(5, 9, '0CH782022R855802A', 'USD', 2613.25, '0CH782022R855802A', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-07 16:30:47', '2023-08-07 16:31:36'),
(6, 10, '03H7973153885684D', 'USD', 3627.68, '03H7973153885684D', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-07 16:53:11', '2023-08-07 16:53:40'),
(7, 11, '0RC76854SY067740G', 'USD', 158.1, '0RC76854SY067740G', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-07 17:01:45', '2023-08-07 17:01:56'),
(8, 12, '2TU06776SW730300J', 'USD', 103.28, '2TU06776SW730300J', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-07 17:12:30', '2023-08-07 17:12:53'),
(9, 13, '3YH58897PN5037123', 'USD', 2606.18, '3YH58897PN5037123', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-08 10:34:55', '2023-08-08 10:35:39'),
(10, 14, NULL, 'USD', 104.15, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-08 17:49:10', '2023-08-08 17:49:10'),
(11, 15, NULL, 'USD', 3479.33, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-08 21:50:28', '2023-08-08 21:50:28'),
(12, 16, '4U937272F7773040M', 'USD', 8773.35, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-08 21:55:18', '2023-08-08 21:55:48'),
(13, 17, '3MN24004J00018328', 'USD', 104.15, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-09 08:33:21', '2023-08-09 08:33:22'),
(14, 18, '57W069377T131050A', 'USD', 417.02, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-09 08:36:02', '2023-08-09 08:36:02'),
(15, 19, '214570226G5600512', 'USD', 2698.27, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-09 14:22:19', '2023-08-09 14:22:21'),
(16, 20, '2FH69760341329253', 'USD', 90.75, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-09 14:23:22', '2023-08-09 14:23:23'),
(17, 21, '22X700702L7550423', 'USD', 3459.49, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-09 18:59:35', '2023-08-09 18:59:36'),
(18, 22, '9LD16184KT6487014', 'USD', 149.66, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-09 20:42:09', '2023-08-09 20:42:10'),
(19, 23, '86X95837DY3954613', 'USD', 13.73, '86X95837DY3954613', 'PayPal', NULL, NULL, 'COMPLETE', '2023-08-09 20:44:16', '2023-08-09 20:46:34'),
(20, 24, '1E949670EP7698407', 'USD', 2626.22, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-14 20:57:47', '2023-08-14 20:57:48'),
(21, 25, '0U3221169B316053E', 'USD', 29.01, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-14 21:01:08', '2023-08-14 21:01:09'),
(22, 26, '1KY31500BD525612W', 'USD', 4, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-14 21:14:04', '2023-08-14 21:14:05'),
(23, 27, '2AP36534U1910442D', 'USD', 2967.36, NULL, NULL, NULL, NULL, 'PENDING', '2023-08-25 19:28:13', '2023-08-25 19:28:14'),
(24, 28, NULL, 'USD', 0, NULL, NULL, NULL, NULL, 'PENDING', '2023-09-05 17:21:24', '2023-09-05 17:21:24'),
(25, 29, '0AF46636YC263241W', 'USD', 3462.51, NULL, NULL, NULL, NULL, 'PENDING', '2023-09-11 09:57:55', '2023-09-11 09:57:56'),
(26, 30, '49289217DM514852C', 'USD', 122.04, NULL, NULL, NULL, NULL, 'PENDING', '2023-09-21 16:04:34', '2023-09-21 16:04:35'),
(27, 31, '6EH085415G018914P', 'USD', 3458.53, NULL, NULL, NULL, NULL, 'PENDING', '2023-09-25 16:00:59', '2023-09-25 16:01:00'),
(28, 32, '7AK543198R019060L', 'USD', 7189.7, NULL, NULL, NULL, NULL, 'PENDING', '2023-10-23 15:12:12', '2023-10-23 15:12:13'),
(29, 33, '7X007600AG446233N', 'USD', 5024.24, NULL, NULL, NULL, NULL, 'PENDING', '2023-11-03 03:14:38', '2023-11-03 03:14:39'),
(30, 34, '2G958116W9680114U', 'USD', 109.26, NULL, NULL, NULL, NULL, 'PENDING', '2023-11-19 03:46:20', '2023-11-19 03:46:21'),
(31, 35, '4W872216U7794011G', 'USD', 334.79, NULL, NULL, NULL, NULL, 'PENDING', '2023-11-21 22:28:03', '2023-11-21 22:28:04'),
(32, 36, '91U22652YV646354E', 'USD', 414.86, NULL, NULL, NULL, NULL, 'PENDING', '2023-11-21 22:29:09', '2023-11-21 22:29:10'),
(33, 37, '2E199062EW108942S', 'USD', 414.86, NULL, NULL, NULL, NULL, 'PENDING', '2023-11-21 22:29:41', '2023-11-21 22:29:42'),
(34, 38, NULL, 'USD', 23, NULL, NULL, NULL, NULL, 'PENDING', '2023-11-30 15:10:26', '2023-11-30 15:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `temp_reservations`
--

CREATE TABLE `temp_reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vehicle_type_id` bigint(20) UNSIGNED NOT NULL,
  `service_type_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_stop` longtext COLLATE utf8mb4_unicode_ci,
  `hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passengers` int(11) NOT NULL,
  `bags` int(11) DEFAULT NULL,
  `vehicle_detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `airline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructions` mediumtext COLLATE utf8mb4_unicode_ci,
  `meet_and_greet` tinyint(1) NOT NULL DEFAULT '0',
  `miles` double NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_reservations`
--

INSERT INTO `temp_reservations` (`id`, `code`, `user_id`, `vehicle_type_id`, `service_type_id`, `date`, `time`, `from`, `to`, `to_stop`, `hours`, `passengers`, `bags`, `vehicle_detail`, `airline`, `flight_number`, `instructions`, `meet_and_greet`, `miles`, `status`, `created_at`, `updated_at`) VALUES
(1, '', NULL, 1, 1, '2023-08-08', '22:23', '111 North Hill Street, Los Angeles, CA, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 2, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 2011.7, 'pending', '2023-08-07 13:19:31', '2023-08-07 13:19:31'),
(2, 'SL00000002', NULL, 1, 1, '2023-08-08', '22:23', '111 North Hill Street, Los Angeles, CA, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 2011.7, 'pending', '2023-08-07 13:28:19', '2023-08-07 13:28:19'),
(3, 'SL00000003', NULL, 1, 1, '2023-08-08', '22:23', '111 North Hill Street, Los Angeles, CA, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 2011.7, 'pending', '2023-08-07 13:30:07', '2023-08-07 13:30:07'),
(4, 'SL00000004', NULL, 1, 1, '2023-08-08', '22:23', '111 North Hill Street, Los Angeles, CA, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 2011.7, 'pending', '2023-08-07 13:32:18', '2023-08-07 13:32:18'),
(5, 'SL00000005', NULL, 1, 1, '2023-08-08', '22:23', '111 North Hill Street, Los Angeles, CA, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 2011.7, 'pending', '2023-08-07 13:34:32', '2023-08-07 13:34:32'),
(6, 'SL00000006', NULL, 1, 1, '2023-08-08', '22:23', '111 East Wacker Drive, Chicago, IL, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 17.1, 'pending', '2023-08-07 13:35:14', '2023-08-07 13:35:14'),
(7, 'SL00000007', NULL, 1, 1, '2023-08-15', '01:12', '111 8th Avenue, New York, NY, USA', 'Milwaukee Mitchell Airport, Milwaukee WI 53207', NULL, NULL, 2, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 876, 'pending', '2023-08-07 15:08:14', '2023-08-07 15:08:14'),
(8, 'SL00000008', NULL, 1, 1, '2023-08-24', '01:22', '111 East Wacker Drive, Chicago, IL, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 17.1, 'pending', '2023-08-07 15:19:12', '2023-08-07 15:19:12'),
(9, 'SL00000009', NULL, 1, 1, '2023-08-08', '05:30', '111 8th Avenue, New York, NY, USA', 'Midway International Airport ,Chicago, IL 60638', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 797.2, 'pending', '2023-08-07 16:30:47', '2023-08-07 16:30:47'),
(10, 'SL00000010', NULL, 1, 1, '2023-08-24', '06:52', '111 8th Avenue, New York, NY, USA', 'DuPage Airport Authority, 2700 International Dr, West Chicago, IL 60185', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 830.2, 'pending', '2023-08-07 16:53:11', '2023-08-07 16:53:11'),
(11, 'SL00000011', NULL, 2, 1, '2023-08-30', '03:03', '111 East Wacker Drive, Chicago, IL, USA', 'Gary International Airport, 5789 Industrial Hwy, Gary, IN 46406', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 27.3, 'pending', '2023-08-07 17:01:45', '2023-08-07 17:01:45'),
(12, 'SL00000012', NULL, 1, 1, '2023-08-09', '05:12', '111 East Wacker Drive, Chicago, IL, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 17.1, 'pending', '2023-08-07 17:12:30', '2023-08-07 17:12:30'),
(13, 'SL00000013', NULL, 1, 1, '2023-08-18', '20:35', '111 8th Avenue, New York, NY, USA', 'Midway International Airport ,Chicago, IL 60638', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 795, 'pending', '2023-08-08 10:34:55', '2023-08-08 10:34:55'),
(14, 'SL00000014', 6, 1, 1, '2023-08-09', '12:48', '111 West Wacker Drive, Chicago, IL, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 16.3, 'pending', '2023-08-08 17:49:10', '2023-08-08 17:49:10'),
(15, 'SL00000015', 6, 1, 1, '2023-08-23', '06:50', '111 Broadway, New York, NY, USA', 'Midway International Airport ,Chicago, IL 60638', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 795.8, 'pending', '2023-08-08 21:50:28', '2023-08-08 21:50:28'),
(16, 'SL00000016', 6, 1, 1, '2023-08-23', '06:50', '111 North Hill Street, Los Angeles, CA, USA', 'Midway International Airport ,Chicago, IL 60638', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 2023.4, 'pending', '2023-08-08 21:55:18', '2023-08-08 21:55:18'),
(17, 'SL00000017', 6, 1, 1, '2023-08-22', '14:32', '111 West Wacker Drive, Chicago, IL, USA', 'Midway International Airport ,Chicago, IL 60638', NULL, NULL, 2, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 16.3, 'pending', '2023-08-09 08:33:21', '2023-08-09 08:33:21'),
(18, 'SL00000018', 6, 1, 1, '2023-08-10', '15:35', '111 East Wacker Drive, Chicago, IL, USA', 'Midway International Airport ,Chicago, IL 60638', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 85.7, 'pending', '2023-08-09 08:36:02', '2023-08-09 08:36:02'),
(19, 'SL00000019', NULL, 1, 2, '2023-08-10', '20:19', 'Midway International Airport ,Chicago, IL 60638', '111 East Wacker Drive, Chicago, IL, USA', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', '1111', '121211', NULL, 0, 795.9, 'pending', '2023-08-09 14:22:19', '2023-08-09 14:22:19'),
(20, 'SL00000020', NULL, 1, 3, '2023-08-10', '20:19', '111 East Wacker Drive, Chicago, IL, USA', '111 West Wacker Drive, Chicago, IL, USA', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 1, 'pending', '2023-08-09 14:23:22', '2023-08-09 14:23:22'),
(21, 'SL00000021', 6, 1, 3, '2023-08-11', '23:59', '111 East Wacker Drive, Chicago, IL, USA', '123 William Street, New York, NY, USA', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 791.2, 'pending', '2023-08-09 18:59:35', '2023-08-09 18:59:35'),
(22, 'SL00000022', NULL, 2, 3, '2023-08-10', '20:44', '2125 Dempster Street, Evanston, IL, USA', 'Illinois 390, Itasca, IL, USA', NULL, NULL, 2, 3, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 22.9, 'pending', '2023-08-09 20:42:09', '2023-08-09 20:42:09'),
(23, 'SL00000023', NULL, 1, 1, '2023-08-10', '19:47', '4800 Carol Street, Skokie, IL, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 2, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 11.3, 'pending', '2023-08-09 20:44:16', '2023-08-09 20:44:16'),
(24, 'SL00000024', NULL, 1, 1, '2023-08-17', '14:59', 'Newkirk Plaza, Brooklyn, NY, USA', 'Gary International Airport, 5789 Industrial Hwy, Gary, IN 46406', NULL, NULL, 2, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 771, 'pending', '2023-08-14 20:57:47', '2023-08-14 20:57:47'),
(25, 'SL00000025', NULL, 1, 1, '2023-08-17', '14:59', 'Newark International Airport Street, Newark, NJ, USA', 'Milwaukee Mitchell Airport, Milwaukee WI 53207', NULL, NULL, 2, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 870.3, 'pending', '2023-08-14 21:01:08', '2023-08-14 21:01:08'),
(26, 'SL00000026', NULL, 1, 3, '2023-08-16', '17:12', 'Newton Street, Tulsa, OK, USA', 'Terra Vista Drive, Independence, KS, USA', NULL, NULL, 3, 2, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 12.1, 'pending', '2023-08-14 21:14:04', '2023-08-14 21:14:04'),
(27, 'SL00000027', NULL, 1, 1, '2023-09-06', '01:26', '111 Centre Street, New York, NY, USA', 'Milwaukee Mitchell Airport, Milwaukee WI 53207', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 873.1, 'pending', '2023-08-25 19:28:13', '2023-08-25 19:28:13'),
(28, 'SL00000028', NULL, 5, 2, '2023-09-28', '12:30', 'O \'Hare International Airport, Chicago, IL 60666', '909 north Michigan ave.chicago', NULL, NULL, 6, 6, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', 'United', '609', NULL, 0, 17.7, 'pending', '2023-09-05 17:21:24', '2023-09-05 17:21:24'),
(29, 'SL00000029', NULL, 1, 2, '2023-09-12', '06:02', 'Milwaukee Mitchell Airport, Milwaukee WI 53207', 'Washington D.C., DC, USA', NULL, NULL, 3, 3, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', 'Pakistan Ari lines', 'PK979', NULL, 0, 791.9, 'pending', '2023-09-11 09:57:55', '2023-09-11 09:57:55'),
(30, 'SL00000030', 6, 1, 1, '2023-09-22', '23:04', 'Wrigley Field, West Addison Street, Chicago, IL, USA', 'Midway International Airport ,Chicago, IL 60638', NULL, NULL, 1, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 17.3, 'pending', '2023-09-21 16:04:34', '2023-09-21 16:04:34'),
(31, 'SL00000031', NULL, 1, 2, '2023-09-26', '13:00', 'Gary International Airport, 5789 Industrial Hwy, Gary, IN 46406', 'Gainesville, Florida, EE. UU.', NULL, NULL, 1, 2, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', 'Lufthansa', 'L472', NULL, 0, 1020.1, 'pending', '2023-09-25 16:00:59', '2023-09-25 16:00:59'),
(32, 'SL00000032', NULL, 1, 1, '2023-10-25', '20:44', 'Golden Gate Bridge, Golden Gate Bridge, San Francisco, CA, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 2136.8, 'pending', '2023-10-23 15:12:12', '2023-10-23 15:12:12'),
(33, 'SL00000033', NULL, 1, 1, '2023-11-07', '10:44', 'El Paso, TX, USA', 'Gary International Airport, 5789 Industrial Hwy, Gary, IN 46406', NULL, NULL, 2, 1, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 1488.7, 'pending', '2023-11-03 03:14:38', '2023-11-03 03:14:38'),
(34, 'SL00000034', NULL, 1, 1, '2023-11-23', '00:45', '111 North Wabash Avenue, Chicago, IL, USA', 'O \'Hare International Airport, Chicago, IL 60666', NULL, NULL, 1, 2, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 17.7, 'pending', '2023-11-19 03:46:20', '2023-11-19 03:46:20'),
(35, 'SL00000035', NULL, 1, 1, '2023-11-23', '19:30', '111 North Wabash Avenue, Chicago, IL, USA', 'Milwaukee Mitchell Airport, Milwaukee WI 53207', NULL, NULL, 2, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 85.2, 'pending', '2023-11-21 22:28:03', '2023-11-21 22:28:03'),
(36, 'SL00000036', NULL, 1, 1, '2023-11-25', '22:34', '111 North Wabash Avenue, Chicago, IL, USA', 'Milwaukee Mitchell Airport, Milwaukee WI 53207', NULL, NULL, 1, 2, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 85.2, 'pending', '2023-11-21 22:29:09', '2023-11-21 22:29:09'),
(37, 'SL00000037', NULL, 1, 1, '2023-11-25', '22:34', '111 North Wabash Avenue, Chicago, IL, USA', 'Milwaukee Mitchell Airport, Milwaukee WI 53207', NULL, NULL, 1, 2, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 85.2, 'pending', '2023-11-21 22:29:41', '2023-11-21 22:29:41'),
(38, 'SL00000038', NULL, 3, 3, '2024-04-12', '18:30', '600 N State St, Chicago, IL 60654, USA', 'United Center, West Madison Street, Chicago, IL, USA', NULL, NULL, 5, NULL, 'a:3:{s:16:\"forward_car_seat\";s:1:\"0\";s:13:\"rear_car_seat\";s:1:\"0\";s:16:\"booster_car_seat\";s:1:\"0\";}', NULL, NULL, NULL, 0, 4.9, 'pending', '2023-11-30 15:10:26', '2023-11-30 15:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `temp_reservation_details`
--

CREATE TABLE `temp_reservation_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `gratuity` double DEFAULT NULL,
  `rush_hour_charge` double DEFAULT NULL,
  `per_mile_charge` double DEFAULT NULL,
  `hours_charge` double DEFAULT NULL,
  `car_seat` double DEFAULT NULL,
  `booster_seat` double DEFAULT NULL,
  `meet_greet` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_reservation_details`
--

INSERT INTO `temp_reservation_details` (`id`, `reservation_id`, `price`, `gratuity`, `rush_hour_charge`, `per_mile_charge`, `hours_charge`, `car_seat`, `booster_seat`, `meet_greet`, `created_at`, `updated_at`) VALUES
(1, 4, 6520.91, 836.01, 0, 5573.43, NULL, NULL, NULL, NULL, '2023-08-07 13:32:18', '2023-08-07 13:32:18'),
(2, 5, 6520.91, 836.01, 0, 5573.43, NULL, NULL, NULL, NULL, '2023-08-07 13:34:32', '2023-08-07 13:34:32'),
(3, 6, 103.28, 13.24, 0, 88.28, NULL, NULL, NULL, NULL, '2023-08-07 13:35:14', '2023-08-07 13:35:14'),
(4, 7, 2866.79, 367.54, 0, 2450.25, NULL, NULL, NULL, NULL, '2023-08-07 15:08:14', '2023-08-07 15:08:14'),
(5, 8, 103.28, 13.24, 0, 88.28, NULL, NULL, NULL, NULL, '2023-08-07 15:19:12', '2023-08-07 15:19:12'),
(6, 9, 2613.25, 335.03, 0, 2233.55, NULL, NULL, NULL, NULL, '2023-08-07 16:30:47', '2023-08-07 16:30:47'),
(7, 10, 3627.68, 473.18, 3154.5, 0, NULL, NULL, NULL, NULL, '2023-08-07 16:53:11', '2023-08-07 16:53:11'),
(8, 11, 158.1, 20.62, 0, 137.48, NULL, NULL, NULL, NULL, '2023-08-07 17:01:45', '2023-08-07 17:01:45'),
(9, 12, 103.28, 13.24, 0, 88.28, NULL, NULL, NULL, NULL, '2023-08-07 17:12:30', '2023-08-07 17:12:30'),
(10, 13, 2606.18, 334.13, 0, 2227.5, NULL, NULL, NULL, NULL, '2023-08-08 10:34:55', '2023-08-08 10:34:55'),
(11, 14, 104.15, 12.91, 0, 86.08, NULL, NULL, NULL, NULL, '2023-08-08 17:49:10', '2023-08-08 17:49:10'),
(12, 15, 3479.33, 453.83, 3025.5, 0, NULL, NULL, NULL, NULL, '2023-08-08 21:50:28', '2023-08-08 21:50:28'),
(13, 16, 8773.35, 1144.35, 7629, 0, NULL, NULL, NULL, NULL, '2023-08-08 21:55:18', '2023-08-08 21:55:18'),
(14, 17, 104.15, 12.91, 0, 86.08, NULL, NULL, NULL, NULL, '2023-08-09 08:33:21', '2023-08-09 08:33:21'),
(15, 18, 417.02, 54.39, 362.63, 0, NULL, NULL, NULL, NULL, '2023-08-09 08:36:02', '2023-08-09 08:36:02'),
(16, 19, 2698.27, 334.5, 0, 2229.98, NULL, NULL, NULL, NULL, '2023-08-09 14:22:19', '2023-08-09 14:22:19'),
(17, 20, 90.75, 11.25, 0, 75, NULL, NULL, NULL, NULL, '2023-08-09 14:23:22', '2023-08-09 14:23:22'),
(18, 21, 3459.49, 451.24, 3008.25, 0, NULL, NULL, NULL, NULL, '2023-08-09 18:59:35', '2023-08-09 18:59:35'),
(19, 22, 149.66, 18.48, 0, 123.18, NULL, NULL, NULL, NULL, '2023-08-09 20:42:09', '2023-08-09 20:42:09'),
(20, 23, 13.73, 1.7, 0, 11.3, NULL, NULL, NULL, NULL, '2023-08-09 20:44:16', '2023-08-09 20:44:16'),
(21, 24, 2626.22, 324.23, 0, 2161.5, NULL, NULL, NULL, NULL, '2023-08-14 20:57:47', '2023-08-14 20:57:47'),
(22, 25, 29.01, 365.19, 0, 2434.58, NULL, NULL, NULL, NULL, '2023-08-14 21:01:08', '2023-08-14 21:01:08'),
(23, 26, 4, 57.99, 386.63, 0, 0, NULL, NULL, NULL, '2023-08-14 21:14:04', '2023-08-14 21:14:04'),
(24, 27, 2967.36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25 19:28:13', '2023-08-25 19:28:13'),
(25, 28, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-05 17:21:24', '2023-09-05 17:21:24'),
(26, 29, 3462.51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11 09:57:55', '2023-09-11 09:57:55'),
(27, 30, 122.04, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-21 16:04:34', '2023-09-21 16:04:34'),
(28, 31, 3458.53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-25 16:00:59', '2023-09-25 16:00:59'),
(29, 32, 7189.7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 15:12:12', '2023-10-23 15:12:12'),
(30, 33, 5024.24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:14:38', '2023-11-03 03:14:38'),
(31, 34, 109.26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-19 03:46:20', '2023-11-19 03:46:20'),
(32, 35, 334.79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-21 22:28:03', '2023-11-21 22:28:03'),
(33, 36, 414.86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-21 22:29:09', '2023-11-21 22:29:09'),
(34, 37, 414.86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-21 22:29:41', '2023-11-21 22:29:41'),
(35, 38, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-30 15:10:26', '2023-11-30 15:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Husnain Pasha', '3123303737', 'husnain.pasha@wizspeed.com', NULL, '$2y$10$mlugm4cmiQa.3r950mkDuerh6L.iLsteGCqI9l0NUlmaOr8/3gqCW', NULL, '2023-07-05 19:16:39', '2023-07-05 19:16:39'),
(5, 'junaid siddiqui', '6304017064', 'siddiquij1111@gmail.com', NULL, '$2y$10$ukDMWcfMf192fI.Yf1lgHO.cPb8YeXTesMBPiNbbU2kD8OaZ6fhhq', NULL, '2023-07-19 18:58:37', '2023-07-19 18:58:37'),
(6, 'Hassan Nadeem', '2243451111', 'hassannadeem.dev@gmail.com', NULL, '$2y$10$8Hg.5ROqF6DobkVCeDZ0neGyRooQpa7UVV44.h8GQLg8P8/V5zapS', 'SZKI8bt53ourFLZOzgUlUmKI5996QE3sftXCavtt0UPLTWPYs4vhzTeSE9qp', '2023-07-27 19:19:17', '2023-07-27 19:19:17'),
(7, 'shahzad ahmed', '2243723723', 'S.Ahmed@Wizspeed.com', NULL, '$2y$10$lD8yQGtBbw0G1gWDXJoCXO7/S6j87HUHyaMZZkpuFriAQUrPNUdnO', NULL, '2023-08-24 17:10:56', '2023-08-24 17:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity_of_passenger` int(11) NOT NULL,
  `max_allowed_seats` int(11) NOT NULL,
  `no_of_luggage` int(11) NOT NULL,
  `miles_under_10` float NOT NULL,
  `first_15_miles` float NOT NULL,
  `after_15_miles` float NOT NULL,
  `per_mile_charge` double NOT NULL,
  `rush_hour_charge` double NOT NULL,
  `hourly_charge` double NOT NULL,
  `tax` float NOT NULL DEFAULT '0',
  `minimum_hours` int(11) NOT NULL DEFAULT '2',
  `allowed_online_booking` tinyint(1) NOT NULL DEFAULT '1',
  `allowed_booking` tinyint(1) NOT NULL DEFAULT '1',
  `is_enable` tinyint(1) NOT NULL DEFAULT '1',
  `remark` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `name`, `image`, `capacity_of_passenger`, `max_allowed_seats`, `no_of_luggage`, `miles_under_10`, `first_15_miles`, `after_15_miles`, `per_mile_charge`, `rush_hour_charge`, `hourly_charge`, `tax`, `minimum_hours`, `allowed_online_booking`, `allowed_booking`, `is_enable`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Sedan', 'vehicle-type/ntUxaX8pU33a096aqz1ywGF3krrLFocwcLQtOSha.png', 3, 3, 3, 75, 5.5, 2.75, 7, 8.5, 99, 6.5, 2, 1, 1, 1, NULL, '2023-01-02 22:46:36', '2023-08-09 21:21:30'),
(2, 'Suv', 'vehicle-type/6fjujA8RGuRCGYXC3VpeurdEE9oNhUtETWCAYlGo.png', 7, 7, 6, 85, 6.5, 3.25, 7.45, 10, 120, 6.5, 2, 1, 1, 1, NULL, '2023-01-02 22:47:02', '2023-08-09 18:53:11'),
(3, 'Stretch Limo', 'vehicle-type/j6dreIv12PtshC8AmRbiSQj6Hk8FRlnBn9hamTLo.png', 8, 8, 6, 0, 0, 0, 18.8, 20, 310, 0, 4, 1, 1, 1, NULL, '2023-01-02 22:47:22', '2023-07-28 17:56:29'),
(4, 'Stretch SUV', 'vehicle-type/w3ocfUDkHIFsnYO1aFRWN3dmppV4mmm6aR7U9mDG.png', 14, 14, 6, 0, 0, 0, 20, 30, 350, 0, 2, 1, 1, 1, NULL, '2023-01-02 22:48:11', '2023-01-30 01:41:33'),
(5, 'Executive Van', 'vehicle-type/WGraSCISeRPW99UPo5j3p1Mb4B3yrCVMCJwJ8Sj3.png', 14, 14, 14, 0, 0, 0, 20, 30, 260, 0, 2, 1, 1, 1, NULL, '2023-01-02 22:48:31', '2023-01-30 14:18:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_contacts`
--
ALTER TABLE `booking_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_contacts_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_replies`
--
ALTER TABLE `contact_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `main_passengers`
--
ALTER TABLE `main_passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_passengers_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_vehicle_type_id_foreign` (`vehicle_type_id`),
  ADD KEY `reservations_service_type_id_foreign` (`service_type_id`);

--
-- Indexes for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_details_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_booking_contacts`
--
ALTER TABLE `temp_booking_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temp_booking_contacts_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `temp_main_passengers`
--
ALTER TABLE `temp_main_passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temp_main_passengers_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `temp_payments`
--
ALTER TABLE `temp_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temp_payments_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `temp_reservations`
--
ALTER TABLE `temp_reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temp_reservations_user_id_foreign` (`user_id`),
  ADD KEY `temp_reservations_vehicle_type_id_foreign` (`vehicle_type_id`),
  ADD KEY `temp_reservations_service_type_id_foreign` (`service_type_id`);

--
-- Indexes for table `temp_reservation_details`
--
ALTER TABLE `temp_reservation_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temp_reservation_details_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `booking_contacts`
--
ALTER TABLE `booking_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact_replies`
--
ALTER TABLE `contact_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_passengers`
--
ALTER TABLE `main_passengers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `reservation_details`
--
ALTER TABLE `reservation_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `temp_booking_contacts`
--
ALTER TABLE `temp_booking_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_main_passengers`
--
ALTER TABLE `temp_main_passengers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `temp_payments`
--
ALTER TABLE `temp_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `temp_reservations`
--
ALTER TABLE `temp_reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `temp_reservation_details`
--
ALTER TABLE `temp_reservation_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_contacts`
--
ALTER TABLE `booking_contacts`
  ADD CONSTRAINT `booking_contacts_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_replies`
--
ALTER TABLE `contact_replies`
  ADD CONSTRAINT `contact_replies_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `main_passengers`
--
ALTER TABLE `main_passengers`
  ADD CONSTRAINT `main_passengers_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_vehicle_type_id_foreign` FOREIGN KEY (`vehicle_type_id`) REFERENCES `vehicle_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD CONSTRAINT `reservation_details_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `temp_booking_contacts`
--
ALTER TABLE `temp_booking_contacts`
  ADD CONSTRAINT `temp_booking_contacts_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `temp_reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `temp_main_passengers`
--
ALTER TABLE `temp_main_passengers`
  ADD CONSTRAINT `temp_main_passengers_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `temp_reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `temp_payments`
--
ALTER TABLE `temp_payments`
  ADD CONSTRAINT `temp_payments_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `temp_reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `temp_reservations`
--
ALTER TABLE `temp_reservations`
  ADD CONSTRAINT `temp_reservations_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `temp_reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `temp_reservations_vehicle_type_id_foreign` FOREIGN KEY (`vehicle_type_id`) REFERENCES `vehicle_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `temp_reservation_details`
--
ALTER TABLE `temp_reservation_details`
  ADD CONSTRAINT `temp_reservation_details_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `temp_reservations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
