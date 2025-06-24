# Small demo project

## How to use
With git installed, open a command line and type
```
git clone https://github.com/tafedaniel/jims_dvds.git
```

## What database do you need?
Assumes your database is hosted locally on XAMPP with the database name `jimsdvds` - change the database connection details in `core/Database.php`

```
CREATE TABLE `dvds` (
  `dvd_id` int NOT NULL,
  `movie_id` int NOT NULL,
  `dvd_condition` enum('new','good','scratched','unplayable','missing') NOT NULL,
  `dvd_country_of_origin` varchar(100) DEFAULT NULL,
  `has_case` tinyint(1) NOT NULL
);

INSERT INTO `dvds` (`dvd_id`, `movie_id`, `dvd_condition`, `dvd_country_of_origin`, `has_case`) VALUES
(1, 1, 'good', 'USA', 1),
(2, 1, 'scratched', 'Canada', 1),
(3, 1, 'new', 'UK', 1),
(4, 2, 'good', 'USA', 1),
(5, 2, 'new', 'Australia', 1),
(6, 2, 'unplayable', 'Germany', 0),
(7, 3, 'new', 'USA', 1),
(8, 3, 'good', 'Canada', 1),
(9, 3, 'scratched', 'UK', 1),
(10, 4, 'good', 'USA', 1),
(11, 4, 'new', 'Japan', 1),
(12, 4, 'good', 'USA', 1),
(13, 5, 'new', 'USA', 1),
(14, 5, 'good', 'UK', 1),
(15, 6, 'good', 'USA', 1),
(16, 6, 'new', 'Australia', 1),
(17, 7, 'good', 'USA', 1),
(18, 7, 'scratched', 'Canada', 1),
(19, 7, 'new', 'UK', 1),
(20, 1, 'missing', 'USA', 0);

CREATE TABLE `dvd_languages` (
  `dvd_id` int NOT NULL,
  `language_id` int NOT NULL
);

INSERT INTO `dvd_languages` (`dvd_id`, `language_id`) VALUES
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
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(1, 2),
(5, 2),
(10, 2),
(13, 2),
(18, 2),
(1, 3),
(4, 3),
(8, 3),
(12, 3),
(15, 3),
(19, 3),
(3, 4),
(10, 4),
(17, 4),
(7, 5),
(11, 6);

CREATE TABLE `languages` (
  `language_id` int NOT NULL,
  `language_name` varchar(50) NOT NULL
);

INSERT INTO `languages` (`language_id`, `language_name`) VALUES
(1, 'English'),
(2, 'French'),
(4, 'German'),
(7, 'Italian'),
(6, 'Japanese'),
(5, 'Portuguese'),
(3, 'Spanish');

CREATE TABLE `movies` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` int NOT NULL,
  `description` text
);

INSERT INTO `movies` (`id`, `title`, `year`, `description`) VALUES
(1, 'Home Alone', 1990, 'A young boy is accidentally left behind when his family flies to France for Christmas and must defend his home from burglars.'),
(2, 'Beethoven', 1992, 'A St. Bernard puppy adopted by a suburban family grows into a giant dog that causes chaos and brings joy.'),
(3, 'Jumanji', 1995, 'When two kids find and play a magical board game, they release a man trapped for decades and a host of dangers.'),
(4, 'Space Jam', 1996, 'Basketball superstar Michael Jordan teams up with the Looney Tunes to win a basketball game against alien slavers.'),
(5, 'Free Willy', 1993, 'A delinquent boy befriends an orca whale and plots to release him back into the wild.'),
(6, 'Casper', 1995, 'A friendly ghost named Casper falls in love with a mortal girl who moves into his haunted mansion.'),
(7, 'The Parent Trap', 1998, 'Identical twins separated at birth meet at a summer camp and devise a plan to reunite their parents.');

ALTER TABLE `dvds`
  ADD PRIMARY KEY (`dvd_id`),
  ADD KEY `movie_id` (`movie_id`);

ALTER TABLE `dvd_languages`
  ADD PRIMARY KEY (`dvd_id`,`language_id`),
  ADD KEY `language_id` (`language_id`);

ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`),
  ADD UNIQUE KEY `language_name` (`language_name`);

ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dvds`
  MODIFY `dvd_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `languages`
  MODIFY `language_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `dvds`
  ADD CONSTRAINT `dvds_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `dvd_languages`
  ADD CONSTRAINT `dvd_languages_ibfk_1` FOREIGN KEY (`dvd_id`) REFERENCES `dvds` (`dvd_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dvd_languages_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE;
```
