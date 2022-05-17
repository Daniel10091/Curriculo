SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `curriculo` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `personal_profile` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `curriculo`
  ADD PRIMARY KEY (`email`);
COMMIT;