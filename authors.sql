

CREATE TABLE `authors` (
  `author_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `nationality` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `authors` (`author_id`, `name`, `nationality`) VALUES
(1, 'Juan Rulfo', 'MEX'),
(2, 'Gabriel García Márquez', 'COL'),
(3, 'Juan Gabriel Vásquez', 'COL'),
(4, 'Julio Cortázar', 'ARG'),
(5, 'Isabel Allende', 'CHI'),
(6, 'Octavio Paz', 'MEX'),
(7, 'Juan Carlos Onetti', 'URU');



ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);



ALTER TABLE `authors`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;



