
--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `ATIVO`;
CREATE TABLE `ATIVO` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `CODIGO` INT NOT NULL,
  `NUMERO_SERIE` VARCHAR(50),
  `DESCRICAO` VARCHAR(100) NOT NULL,
  `VALOR` DECIMAL NOT NULL,
  PRIMARY KEY (`ID`)
);
--
-- Dumping data for table `autor`
--
INSERT INTO `ATIVO` VALUES (1, 1, 'ABC1234', 'Meu Modelo Vermelho', 35500),(2, 2, 'AAA1234', 'Minha Moto', 24000);
