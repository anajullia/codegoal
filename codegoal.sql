-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para codegoal
CREATE DATABASE IF NOT EXISTS `codegoal` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `codegoal`;

-- Copiando estrutura para tabela codegoal.camisas
CREATE TABLE IF NOT EXISTS `camisas` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_camisa` varchar(250) DEFAULT NULL,
  `preco_camisa` float(5,2) DEFAULT NULL,
  `imagem_camisa` varchar(250) DEFAULT NULL,
  `tipo_camisa` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela codegoal.camisas: ~6 rows (aproximadamente)
INSERT INTO `camisas` (`id_produto`, `nome_camisa`, `preco_camisa`, `imagem_camisa`, `tipo_camisa`) VALUES
	(1, 'Camisa Retrô - Rogério Ceni 2000', 599.99, 'camisarogerio.png', 'São Paulo'),
	(2, 'Flamengo - 81', 99.99, 'flamengo81.png', 'Flamengo'),
	(3, 'Botafogo - Maurício', 499.99, 'mauricio.png', 'Botafogo'),
	(4, 'Camisa ESPECIAL - Nestor final da CDB', 999.99, 'camisanestor.png', 'São Paulo'),
	(5, 'Cruzeiro - Comemorativa', 195.30, 'cruzeiro.png', 'Cruzeiro'),
	(6, 'Internacional & Grêmio - Apoio RS', 215.00, 'apoiors.png', 'Especial');

-- Copiando estrutura para tabela codegoal.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(250) DEFAULT NULL,
  `senha_usuario` varchar(32) DEFAULT NULL,
  `nome_usuario` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela codegoal.usuario: ~2 rows (aproximadamente)
INSERT INTO `usuario` (`id_usuario`, `email_usuario`, `senha_usuario`, `nome_usuario`) VALUES
	(1, 'anajullia@gmail.com', '202cb962ac59075b964b07152d234b70', 'aninhapoggers'),
	(2, 'amauri@gmail.com', '202cb962ac59075b964b07152d234b70', 'amauri');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
