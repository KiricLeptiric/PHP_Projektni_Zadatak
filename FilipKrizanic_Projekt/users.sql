SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archive` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `country`, `date`, `archive`) VALUES
(10, 'Filip', 'Krizanic', '', 'fkriza3@vvg.hr', 'Filip', '$2y$12$icXntL0Bf71yoqdgUStNOuV10GYNvngck61vsna5GuOJja2KRt64.', 'HR', '2025-01-17 19:25:07', 'Y'),
(11, 'Marko', 'Markic', 'marko@markic.com', 'marko', '$2y$12$HUj3yY2dL/HcG38Hoj6et.8Q1xzcniR6QA8tTjHLkRxagM5lrPgHO', 'HR', '2025-01-17 19:26:26', 'Y');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;