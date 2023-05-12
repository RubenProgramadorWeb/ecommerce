-- ======================================================================
-- Creamos la tabla user
-- ======================================================================
CREATE TABLE `user` (
  `user_id` INT(11) NOT NULL,
  `user_name` varchar(50) NULL,
  `user_lastname` varchar(100) NULL,
  `user_photo` varchar(255) NULL,
  `user_email` varchar(255) NULL,
  `user_password` varchar(255) NULL,
  `user_type` INT(10) NULL
);

--
-- Ponemos como clave primaria el campo User_id
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Para la tabla user en el campo User_id le aplicamos AUTO_INCREMENT
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT;

-- ======================================================================
-- Creamos la tabla user_type
-- ======================================================================
CREATE TABLE `user_type` (
  `user_type_id` INT(11) NOT NULL,
  `user_type_name` varchar(255) NULL
);

--
-- Indicamos a Usr_type_id como clave primaria
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT en el campo User_type_id
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(8) NOT NULL AUTO_INCREMENT;