-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2018 às 02:29
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE projeto;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS "produtos" (
"id" int(11) NOT NULL,
  "nome" varchar(255) NOT NULL,
  "marca" varchar(255) NOT NULL,
  "descricao" varchar(255) NOT NULL,
  "categoria" varchar(255) NOT NULL,
  "preco" decimal(11,2) NOT NULL,
  "imagem" varchar(255) NOT NULL
);

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `marca`, `descricao`, `categoria`, `preco`, `imagem`) VALUES
(1, 'Galaxy J7', 'Samsung', 'Smartphone Samsung Galaxy J7 Metal Dual Chip Android 6.0 Tela 5.5'' 16GB 4G Câmera 13MP - Dourado', 'Celulares', '679.00', 'produto1.png'),
(2, 'Moto G5S', 'Motorola', 'Smartphone Motorola Moto G 5S Dual Chip Android 7.1.1 Nougat Tela 5.2'' Snapdragon 430 32GB 4G Câmera 16MP - Platinum', 'Celulares', '877.00', 'produto2.png'),
(3, 'iPhone 7 Plus', 'Apple', 'iPhone 7 Plus 32GB Ouro Rosa Tela Retina HD 5,5'' 3D Touch Câmera Dupla de 12MP - Apple', 'Celulares', '3147.00', 'produto3.png'),
(4, 'Teclado Gamer BK-152C', 'Exbom', 'Teclado USB Gamer Semi Mecanico Iluminado Bk-152c', 'Informática', '43.00', 'produto4.png'),
(5, 'Monitor LED 19.5''', 'LG', 'Monitor LED 19,5'' LG 20M37AA-B.AWZ', 'Informática', '370.00', 'produto5.png'),
(6, 'Mouse Wireless', 'Dell', 'Mouse Wireless WM126 Preto - Dell', 'Informática', '59.00', 'produto6.png'),
(7, 'Smart TV 32''', 'Samsung', 'Smart TV LED 32'' Samsung 32J4300 HD com Conversor Digital 2 HDMI 1 USB Wi-Fi 120Hz', 'TVs, Áudio e Home Theaters', '1080.00', 'produto7.png'),
(8, 'Home Theater HT-12', 'Mondial', 'Home Theater HT-12 Subwoofer, 5.1 Canais, USB, 75W RMS - Mondial', 'TVs, Áudio e Home Theaters', '249.00', 'produto8.png'),
(9, 'Caixa de Som JBL', 'JBL', 'Caixa de Som Portátil JBL Flip 4 Conexão Bluetooth à Prova Dágua - 16W Original', 'TVs, Áudio e Home Theaters', '379.00', 'produto9.png'),
(10, 'Geladeira/Refrigerador', 'Electrolux', 'Geladeira/ Refrigerador Electrolux Frost Free DW42X 380L Inox', 'Eletrodomésticos e Split', '2108.51', 'produto10.png'),
(11, 'Lavadora de Roupas', 'Brastemp', 'Lavadora de Roupas Brastemp 11kg BWS11 Cesto Smart Wave - Branco', 'Eletrodomésticos e Split', '1419.78', 'produto11.png'),
(12, 'Ar Condicionado Split', 'Springer', 'Ar Condicionado Split Hi-Wall Springer Midea 12.000 BTUs Frio 220V', 'Eletrodomésticos e Split', '1248.71', 'produto12.png'),
(13, 'Batedeira Mix Pro', 'Tramontina', 'Batedeira Mix Pro 127V Eletroportáteis Vermelho - Tramontina', 'Eletroportáteis', '3828.90', 'produto13.png'),
(14, 'Liquidificador Smart Gourmet', 'Tramontina', 'Liquidificador Smart Gourmet 127V Eletroportáteis Vermelho - Tramontina', 'Eletroportáteis', '2117.90', 'produto14.png'),
(15, 'Torradeira Smart', 'Tramontina', 'Torradeira Smart 220V Eletroportáteis - Tramontina', 'Eletroportáteis', '1050.90', 'produto15.png'),
(16, 'Mesa Olímpia', 'Leifer', 'Mesa Olímpia New 1,60x0,80m Canela - Leifer', 'Móveis e Decoração', '424.99', 'produto16.png'),
(17, 'Armário p/ Cozinha', 'Poquema', 'Armário P/ Cozinha 8 Portas 2 Gavetas - Poquema Kit Manu 8p - Branco/Preto', 'Móveis e Decoração', '219.00', 'produto17.png'),
(18, 'Guarda Roupa Casal', 'Quarta Divisao Moveis', 'Guarda Roupa Casal Sevilha Mdp 3 Portas Correr 6 Gavetas Com Espelho Nevada', 'Móveis e Decoração', '1099.00', 'produto18.png'),
(19, 'God of War', 'Playstation', 'Game God Of War - PS4', 'Games, Livros e Filmes', '199.00', 'produto19.png'),
(20, 'Coleção Bluray Harry Potter', 'Warner', 'Coleção Completa Blu-ray Harry Potter: Anos 1-7B (8 Discos)', 'Games, Livros e Filmes', '149.90', 'produto20.png'),
(22, 'As Crônicas de Gelo e Fogo - A Guerra dos Tronos', 'LeYa', 'Livro - As Crônicas de Gelo e Fogo - A Guerra dos Tronos Livro Um [Edição Comemorativa]', 'Games, Livros e Filmes', '43.90', 'produto21.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS "usuarios" (
"id" int(11) NOT NULL,
  "nome" varchar(255) NOT NULL,
  "login" varchar(255) NOT NULL,
  "senha" varchar(255) NOT NULL,
  "email" varchar(255) NOT NULL,
  "cpf" varchar(255) NOT NULL,
  "endereco" varchar(255) NOT NULL,
  "complemento" varchar(255) NOT NULL,
  "cep" int(11) NOT NULL,
  "bairro" varchar(255) NOT NULL,
  "cidade" varchar(255) NOT NULL,
  "estado" varchar(255) NOT NULL,
  "tipo" varchar(255) NOT NULL
);

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `email`, `cpf`, `endereco`, `complemento`, `cep`, `bairro`, `cidade`, `estado`, `tipo`) VALUES
(1, 'vendedor', 'vendedor', 'YWRtaW4=', 'vendedor@gmail.com', '2147483647', 'rua 12', 'casa 1', 11111111, 'borel', 'rio de janeiro', 'RJ', 'vendedor'),
(2, 'Derek', 'derek', 'MTIz', 'derek@gmail.com', '2147483647', 'Rua 123', '204', 1231231, 'Barra', 'Rio de Janeiro', 'RJ', 'usuario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY ("id");

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY ("id");

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY "id" int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY "id" int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
