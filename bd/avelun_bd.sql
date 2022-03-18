-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2020 a las 09:17:47
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `avelun_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre_marca` text COLLATE utf8_bin NOT NULL,
  `pais` text COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `visited` int(11) NOT NULL,
  `tienda_asociada` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre_marca`, `pais`, `fecha`, `descripcion`, `visited`, `tienda_asociada`) VALUES
(1, 'Tu si puedes', 'Colombia', '2010-11-12', 'Agendas y Bolsos', 36, 'Avelun'),
(2, 'Fenix', 'Venezuela', '2010-11-12', 'Fabricacion y distribucion de Calzado', 54, 'Avelun'),
(3, 'Samara Cosmetics', 'Colombia', '2010-11-12', 'Venta y distribucion de cosmeticos', 141, 'Avelun'),
(4, 'Paradise', 'Venezuela', '2010-11-12', 'Shores playeros', 28, 'Avelun'),
(5, 'libretasdpb', 'Venezuela', '2010-11-12', 'venta de portadas para libretas', 42, 'Avelun'),
(6, 'ebach', 'Madrid', '2010-11-12', 'cursos y ebach', 48, 'Avelun'),
(7, 'dreams', 'Venezuela', '2010-11-12', 'distribucion y venta de accesorios', 30, 'Avelun'),
(8, 'sensaciones', 'Madrid', '2010-11-12', 'Crecimiento y superacion personal, Mentorias y libros', 22, 'Avelun'),
(9, '4life', 'Estados Unidos', '2010-11-12', 'Venta y distribuciÃ³n de proteinas', 50, 'Avelun'),
(10, 'marykay', 'Estados Unidos', '2010-11-12', 'Venta y distribuciÃ³n de maquillaje', 77, 'Avelun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `marca` text COLLATE utf8_bin NOT NULL,
  `modelo` text COLLATE utf8_bin NOT NULL,
  `tipo` text COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `precio` int(11) NOT NULL,
  `visited` int(11) NOT NULL,
  `foto` varchar(200) COLLATE utf8_bin NOT NULL,
  `pais` text COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `disponible` varchar(100) COLLATE utf8_bin NOT NULL,
  `comprado` int(11) NOT NULL,
  `foto_secundaria` text COLLATE utf8_bin NOT NULL,
  `Tienda` text COLLATE utf8_bin NOT NULL,
  `talla` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `marca`, `modelo`, `tipo`, `descripcion`, `precio`, `visited`, `foto`, `pais`, `fecha`, `disponible`, `comprado`, `foto_secundaria`, `Tienda`, `talla`) VALUES
(1, 'Naturaleza, Dios Tecnolgia', 'Tu si puedes', 'Ndt1', 'Agendas', 'Agendas Naturaleza, Dios Tecnolgia', 9, 16, 'Naturaleza, Dios Tecnolgiap4qEvGg8gC.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(2, 'Tecnolgia, Zorrito ', 'Tu si puedes', 'Tz1', 'Agendas', 'Agendas Tecnolgia, Zorrito', 9, 4, 'Tecnolgia, Zorrito O3EtLJ7km2.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(3, 'Naturaleza, Dios, Tecnolgia, Zorrito', 'Tu si puedes', 'Ndtz1', 'Agendas', 'Agendas Naturaleza, Dios, Tecnolgia, Zorrito', 9, 1, 'Naturaleza, Dios, Tecnolgia, ZorritokiIVRmgmGz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(4, 'Fenix Shoes', 'Fenix', 'Modelo1', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 30, 'Modelo15X0wr2iBYl.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo1RqAtjijPn5.jpg,Modelo1fGLSHC030Q.jpg', '', ''),
(5, 'Fenix Shoes', 'Fenix', 'Modelo2', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 7, 'Modelo2hNZV34hMS4.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo26b6jzmzIf0.jpg,Modelo2VgRkfhfOO1.jpg', '', ''),
(6, 'Fenix Shoes', 'Fenix', 'Modelo3', 'Calzado-Casual', 'Calzado Fenix casual', 20, 6, 'Modelo39sIjEThNZV.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo334hMS46b6j.jpg,Modelo3k2nQy48BTv.jpg', '', ''),
(7, 'Fenix Shoes', 'Fenix', 'Modelo4', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 1, 'Modelo4zmzIf0CMfm.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo45ta8lg5xc6.jpg', '', ''),
(8, 'Fenix Shoes', 'Fenix', 'Modelo5', 'Calzado-Casual', 'Calzado Fenix casual', 20, 2, 'Modelo5Bj1tOEElji.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(9, 'Fenix Shoes', 'Fenix', 'Modelo6', 'Calzado-Casual', 'Calzado Fenix casual', 20, 0, 'Modelo6pbbrbX2Ph8.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo6XFxGyGl5T4.jpg,Modelo6vhzzmLIpNu.jpg', '', ''),
(10, 'Fenix Shoes', 'Fenix', 'Modelo7', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo7Sh6Wbpa4dx.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo7jm3RnMj6IM.jpg,Modelo7FdVoDJcMxc.jpg', '', ''),
(11, 'Fenix Shoes', 'Fenix', 'Modelo8', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo8IvPKGovXOO.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo84talVI5VZ1.jpg,Modelo81VkBmfX5X0.jpg,Modelo8U8ONU5oIaL.jpg', '', ''),
(12, 'Fenix Shoes', 'Fenix', 'Modelo9', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo9Enqx3QReAI.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo9jwP8azygw4.jpg,Modelo9K7IswVAJro.jpg,Modelo9tlDLegFJbY.jpg,Modelo9Dwcp9SC5iY.jpg,Modelo9ecI6JhpB6O.jpg,Modelo97hxFQKL915.jpg,Modelo918DUZWajVr.jpg,Modelo9yRwWiF1klk.jpg', '', ''),
(13, 'Fenix Shoes', 'Fenix', 'Modelo10', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 1, 'Modelo10gWFzvrmRaz.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo10XzBNyUE4LC.jpg,Modelo107UaV2yJ4vA.jpg,Modelo10wPJRvPrJ89.jpg,Modelo10m5ta8lg5xc.jpg,Modelo106Bj1tOEElj.jpg,Modelo10ipbbrbX2Ph.jpg,Modelo10R1omH4JBaK.jpg,Modelo108q0n4XpPvL.jpg', '', ''),
(14, 'Fenix Shoes', 'Fenix', 'Modelo11', 'Calzado-Deportivo', 'Calzado Fenix deportivo disponible en diferentes colores', 20, 5, 'Modelo116pUXkYf7MT.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo11ZmFY6fKz3U.jpg,Modelo11cyOULeRmEs.jpg,Modelo119QABasNtRN.jpg,Modelo11yTxrqbuN86.jpg,Modelo11YqIWmiGwFs.jpg,Modelo11fA6JnLpsw8.jpg,Modelo11aEcx1CoWhm.jpg,Modelo11DVOPQO07rV.jpg,Modelo11Q9hdTGH9hU.jpg,Modelo11yIyyanRQp6.jpg,Modelo11KuBlkIB5cd.jpg,Modelo11KOsfTsGvmv.jpg,Modelo11Ze0VW6bcFn.jpg,Modelo11IhJKXDesKe.jpg,Modelo11McrysdSzRd.jpg', '', ''),
(15, 'Fenix Shoes', 'Fenix', 'Modelo12', 'Calzado-Deportivo', 'Calzado Fenix deportivo disponible en diferentes colores', 20, 7, 'Modelo128XFxGyGl5T.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo12J4pQ1HwyTQ.jpg,Modelo12q20RjrZSxe.jpg,Modelo12Mok5TGNv5g.jpg,Modelo12gJ4vcP4eyo.jpg,Modelo12NNPxt2YQPj.jpg,Modelo12sp3rgOUMPa.jpg,Modelo12Aa93NWHzMY.jpg,Modelo122kVpKXQqdZ.jpg,Modelo128g177mhzFI.jpg', '', ''),
(16, 'Fenix Shoes', 'Fenix', 'Modelo13', 'Calzado-Deportivo', 'Calzado Fenix deportivo disponible en diferentes colores', 20, 5, 'Modelo13z47N0Piy9z.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo13z47N0Piy9z.jpg,Modelo13qjfAOnpCOm.jpg', '', ''),
(17, 'Fenix Shoes', 'Fenix', 'Modelo14', 'Calzado-Deportivo', 'Calzado Fenix deportivo', 20, 2, 'Modelo14KbXqVKpL5G.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo14zs7wLvvoe8.jpg,Modelo14ooOjnfQxyc.jpg', '', ''),
(18, 'Fenix Shoes', 'Fenix', 'Modelo15', 'Calzado-Deportivo', 'Calzado Fenix deporitvo', 20, 1, 'Modelo154vhzzmLIpN.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo15uSh6Wbpa4d.jpg,Modelo15bKwVbqnFFx.jpg', '', ''),
(19, 'Fenix Shoes', 'Fenix', 'Modelo16', 'Calzado-Deportivo', 'Calzado Fenix deportivo disponible en diferentes colores', 20, 8, 'Modelo16MuGhXaik8k.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo16MuGhXaik8k.jpg,Modelo16mP3kjUV099.jpg', '', ''),
(20, 'Fenix Shoes', 'Fenix', 'Modelo17', 'Calzado-Deportivo', 'Calzado Fenix deportivo', 20, 1, 'Modelo174hMS46b6jz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(21, 'Fenix Shoes', 'Fenix', 'Modelo18', 'Calzado-Deportivo', 'Calzado Fenix deportivo disponible en diferentes colores', 20, 5, 'Modelo18SFTtbQtqsq.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo18znGXTFizF7.jpg,Modelo18n5aBzKEAdA.jpg', '', ''),
(22, 'Fenix Shoes', 'Fenix', 'Modelo19', 'Calzado-Deportivo', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo19hQB66RWrKf.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo19nvF497QVXC.jpg,Modelo19IU2RiC5c19.jpg', '', ''),
(23, 'Fenix Shoes', 'Fenix', 'Modelo20', 'Calzado-Deportivo', 'Calzado Fenix deportivo disponible en diferentes colores', 20, 1, 'Modelo20we2WeDfFKo.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo20lsR6xYiyQC.jpg,Modelo20i61JkQh8mn.jpg,Modelo20z5xAc4APTX.jpg', '', ''),
(24, 'Fenix Shoes', 'Fenix', 'Modelo21', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 1, 'Modelo21lbQzMhMhnb.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo21FmcJ0nt3S5.jpg,Modelo21RPZixfk4Bk.jpg,Modelo21jbRMnJMFa6.jpg,Modelo21PnuaJ2bmJo.jpg,Modelo21aZ3jpFr8ls.jpg,Modelo214HZZGlLkvU.jpg,Modelo21G5fKbl8HfI.jpg,Modelo21S7kgGQqBic.jpg,Modelo21m3RnMj6IM4.jpg', '', ''),
(25, 'Fenix Shoes', 'Fenix', 'Modelo22', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 2, 'Modelo22talVI5VZ1j.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo22ZPU3YxgKSN.jpg,Modelo22z7DeyvKUpK.jpg,Modelo22wP8azygw4K.jpg,Modelo22arTdnVbJkW.jpg,Modelo221EuzDNQrIx.jpg', '', ''),
(26, 'Fenix Shoes', 'Fenix', 'Modelo23', 'Calzado-Casual', 'Calzado Fenix casual', 20, 0, 'Modelo23H9YzAAXsDG.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(27, 'Fenix Shoes', 'Fenix', 'Modelo24', 'Calzado-Casual', 'Calzado Fenix casual', 20, 0, 'Modelo24YHWFRf6gWz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(28, 'Fenix Shoes', 'Fenix', 'Modelo25', 'Calzado-Casual', 'Calzado Fenix casual', 20, 0, 'Modelo25dG5EQECW7o.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo25opCBLxqwyi.jpg,Modelo259R68SPh3d9.jpg', '', ''),
(29, 'Fenix Shoes', 'Fenix', 'Modelo26', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 1, 'Modelo267IswVAJrot.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo26yMGhWy06DD.jpg,Modelo26sSHeUAK3GH.jpg,Modelo26QkEbCL8w9B.jpg,Modelo26ue4lpxgrje.jpg,Modelo26Zv9UVUoDkv.jpg,Modelo2602TBsbR5JG.jpg,Modelo26C7U9kJkenB.jpg,Modelo26VggDjZ4CKC.jpg', '', ''),
(30, 'Fenix Shoes', 'Fenix', 'Modelo27', 'Calzado-Casual', 'Calzado Fenix casual', 20, 0, 'Modelo27zJsZLz8s7e.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo271PAiOuESLg.jpg,Modelo27DaJkxkSZhw.jpg', '', ''),
(31, 'Fenix Shoes', 'Fenix', 'Modelo28', 'Calzado-Casual', 'Calzado Fenix casual', 20, 1, 'Modelo28mzIf0CMfm5.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo28Lcy7R1BX95.jpg,Modelo287o5sleEKZR.jpg', '', ''),
(32, 'Fenix Shoes', 'Fenix', 'Modelo29', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo29thG8MzqN5m.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo29lDLegFJbYD.jpg,Modelo29wcp9SC5iYg.jpg,Modelo29WFzvrmRazX.jpg,Modelo29CW7ZHD7iEv.jpg,Modelo29MCXCkOyBud.jpg,Modelo29WvtF5X0wr2.jpg,Modelo29zBNyUE4LCE.jpg,Modelo29SFTtbQtqsq.jpg,Modelo29znGXTFizF7.jpg,Modelo29iBYl4haYyn.jpg,Modelo29ZvsfT3ZJRc.jpg', '', ''),
(33, 'Fenix Shoes', 'Fenix', 'Modelo30', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo30Sbm2lrma7P.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo30hQB66RWrKf.jpg,Modelo30nvF497QVXC.jpg,Modelo308940x9AaLl.jpg,Modelo301sosKkxIzL.jpg,Modelo30LPRec1sHp0.jpg,Modelo30IU2RiC5c19.jpg,Modelo30lsR6xYiyQC.jpg,Modelo30i61JkQh8mn.jpg,Modelo30HDv0qZ5JZg.jpg', '', ''),
(34, 'Fenix Shoes', 'Fenix', 'Modelo31', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo31epepwLuT50.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo31jbRMnJMFa6.jpg,Modelo31CHuQXhQwlB.jpg', '', ''),
(35, 'Fenix Shoes', 'Fenix', 'Modelo32', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo32C7U9kJkenB.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo32DaJkxkSZhw.jpg,Modelo32JJ88gIaR0b.jpg', '', ''),
(36, 'Fenix Shoes', 'Fenix', 'Modelo33', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 1, 'Modelo33Lcy7R1BX95.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo337o5sleEKZR.jpg,Modelo33j2h62WVihw.jpg,Modelo33Mf4lOf2VCl.jpg,Modelo33193vBJqbST.jpg,Modelo33CnrlXwnjhB.jpg,Modelo33jFodd8UWwG.jpg,Modelo33RPcTZfIRw2.jpg,Modelo33ivV6h9LXVY.jpg,Modelo337FkbQb5vhY.jpg,Modelo33h8g1vP8MSM.jpg,Modelo332b9xEW6zvJ.jpg,Modelo33LdXItPRQ6x.jpg,Modelo33bT0R051JW8.jpg,Modelo336w4EmckjBY.jpg,Modelo33KM3FhFqDp3.jpg,Modelo33vD3ghxXbHU.jpg,Modelo33VI6xhfOdI6.jpg,Modelo33K7CI0MnqPp.jpg,Modelo33O0PHfV4Sza.jpg', '', ''),
(37, 'Fenix Shoes', 'Fenix', 'Modelo34', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo34aE6acgFWMq.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo34wGXAI1czkQ.jpg,Modelo34bnQf7SfNIn.jpg,Modelo34YBcL1gilQR.jpg,Modelo34EUZlR5qKFT.jpg,Modelo34aQTlPmSSvw.jpg,Modelo34usL24AJ8rd.jpg', '', ''),
(38, 'Fenix Shoes', 'Fenix', 'Modelo35', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 1, 'Modelo35dZq0G1dMVi.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo35cLDaP53s4j.jpg', '', ''),
(39, 'Fenix Shoes', 'Fenix', 'Modelo36', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo36SvqxmbPmbP.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo36LTBgcHiQBT.jpg,Modelo36vpV3XkFiRp.jpg,Modelo36YwXNBqtjdz.jpg,Modelo36jfS9lydUTG.jpg,Modelo36McV1KQoZvQ.jpg', '', ''),
(40, 'Fenix Shoes', 'Fenix', 'Modelo37', 'Calzado-Casual', 'Calzado Fenix casual disponible en diferentes colores', 20, 0, 'Modelo37j3NEKjpSDT.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo37AmyvEyBosr.jpg', '', ''),
(41, 'Paradise Shorts', 'Paradise', 'Modelo1', 'Short', 'Disponible en diferentes colores', 10, 9, 'Modelo1ndPEJTeYC7.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(42, 'Paradise', 'Paradise', 'Modelo2', 'Short', 'Disponible en diferentes colores', 10, 3, 'Modelo2ta8lg5xc6B.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(43, 'Paradise', 'Paradise', 'Modelo3', 'Short', 'Disponible en diferentes colores', 10, 2, 'Modelo30v852eSyEC.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(44, 'Paradise', 'Paradise', 'Modelo4', 'Short', 'Disponible en diferentes colores', 10, 0, 'Modelo4j1tOEEljip.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(45, 'Paradise', 'Paradise', 'Modelo5', 'Short', 'Disponible en diferentes colores', 10, 1, 'Modelo5bbrbX2Ph8X.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo5bbrbX2Ph8X.jpg', '', ''),
(46, 'Paradise', 'Paradise', 'Modelo6', 'Short', 'Disponible en diferentes colores', 10, 1, 'Modelo6WIGCUjuITw.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(47, 'Paradise Shorts', 'Paradise', 'Modelo7', 'Short', 'Disponible en diferentes colores', 10, 1, 'Modelo7XFyiQUQMM2.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(48, 'Mawie Acondicionador Hidratacion Produnda', 'Samara Cosmetics', 'Modelo1', 'Cosmeticos', '', 0, 20, 'Modelo1h62WVihw9i.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(49, 'Mawie Acondicionador Nutricion Gusado de Seda  ', 'Samara Cosmetics', 'Modelo1', 'Cosmeticos', '', 0, 2, 'Modelo1sCtnfWh4ko.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(50, 'Mawie Acondicionador Nutricion x1.000', 'Samara Cosmetics', 'Modelo3', 'Cosmeticos', '', 0, 0, 'Modelo338UQLbJDSh.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(51, 'Mawie Acondicionador Reparacion Total', 'Samara Cosmetics', 'Modelo4', 'Cosmeticos', '', 0, 1, 'Modelo40An3s4HAhV.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(52, 'Mawie Calengel', 'Samara Cosmetics', 'Modelo5', 'Cosmeticos', '', 0, 0, 'Modelo5QsetgMuAV8.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(53, 'Mawie Cera Moldeadora y Fijadora 150ml', 'Samara Cosmetics', 'Modelo6', 'Cosmeticos', '', 0, 3, 'Modelo6OAjDnkoQWa.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(54, 'Mawie Cera Moldeadora y Fijadora 80ml', 'Samara Cosmetics', 'Modelo7', 'Cosmeticos', '', 0, 0, 'Modelo7nvhmnCxOVY.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(55, 'Mawie Crema Manos 1.000ml', 'Samara Cosmetics', 'Modelo8', 'Cosmeticos', '', 0, 0, 'Modelo8Pjm2f5yNpP.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(56, 'Lorhan Aceite Bronceador', 'Samara Cosmetics', 'Modelo9', 'Cosmeticos', '', 0, 0, 'Modelo9KQnndCrYEk.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(57, 'Lorhan Autobronceador Crema', 'Samara Cosmetics', 'Modelo10', 'Cosmeticos', '', 0, 0, 'Modelo10YqIyEwbdyp.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(58, 'Lorhan Crema Bronceadora', 'Samara Cosmetics', 'Modelo11', 'Cosmeticos', '', 0, 0, 'Modelo11uNrrB4oWnw.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(59, 'Lorhan Filtro Solar spf 30', 'Samara Cosmetics', 'Modelo12', 'Cosmeticos', '', 0, 0, 'Modelo12SgTlJpMihP.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(60, 'Lorhan Filtro Solar spf 50', 'Samara Cosmetics', 'Modelo13', 'Cosmeticos', '', 0, 0, 'Modelo136yousRoSWr.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(61, 'Lorhan Kit Tratamiento Alisado Intensivo x1.000', 'Samara Cosmetics', 'Modelo14', 'Cosmeticos', '', 0, 1, 'Modelo14BHv3yJRU8w.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(62, 'Lorhan Tratamiento Alisado Intensivo 2 x 1.000', 'Samara Cosmetics', 'Modelo15', 'Cosmeticos', '', 0, 0, 'Modelo159W90YabLJw.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(63, 'Lorhan Tratamiento Antivolumen', 'Samara Cosmetics', 'Modelo16', 'Cosmeticos', '', 0, 0, 'Modelo16rWWNCD4MdX.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(64, 'Isabely Aceite de Argan', 'Samara Cosmetics', 'Modelo17', 'Cosmeticos', '', 0, 0, 'Modelo17DrLsAfUXDV.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(65, 'Isabely Cocktail Capilar individual', 'Samara Cosmetics', 'Modelo18', 'Cosmeticos', '', 0, 0, 'Modelo18vuSGp1UeX0.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(66, 'Isabely Cocktail Capilar x 12', 'Samara Cosmetics', 'Modelo19', 'Cosmeticos', '', 0, 0, 'Modelo196aBm9cAPNB.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(67, 'Isabely Kit regreso a clases', 'Samara Cosmetics', 'Modelo20', 'Cosmeticos', '', 0, 1, 'Modelo20wP8zhkKPaN.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(68, 'Isabely Paquete Ultra Crecimiento', 'Samara Cosmetics', 'Modelo21', 'Cosmeticos', '', 0, 0, 'Modelo21OM0rc4SM9j.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(69, 'Isabely Shampoo Teens', 'Samara Cosmetics', 'Modelo22', 'Cosmeticos', '', 0, 0, 'Modelo22rYge0wD2so.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(70, 'Isabely Shampoo Regenerador', 'Samara Cosmetics', 'Modelo23', 'Cosmeticos', '', 0, 1, 'Modelo23Rr611GOpJs.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(71, 'Isabely Te capilar anticaida', 'Samara Cosmetics', 'Modelo24', 'Cosmeticos', '', 0, 0, 'Modelo24LC3bJChZM5.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(72, 'Libretas DPB', 'libretasdpb', 'Modelo1', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo1OInL0KKDtn.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(73, 'Libretas DPB', 'libretasdpb', 'Modelo2', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo2DD3zDv6MOr.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(74, 'Libretas DPB', 'libretasdpb', 'Modelo3', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo3rZMaqGCVUN.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(75, 'Libretas DPB', 'libretasdpb', 'Modelo4', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo4WpeOPPdITV.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(76, 'Libretas DPB', 'libretasdpb', 'Modelo5', 'Libretas', 'Tu Eliges tu Portada', 4, 1, 'Modelo5eWcV6umwcO.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(77, 'Libretas DPB', 'libretasdpb', 'Modelo6', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo6sWkT6USbmD.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(78, 'Libretas DPB', 'libretasdpb', 'Modelo7', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo7EFRR0NFLNx.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(79, 'Libretas DPB', 'libretasdpb', 'Modelo8', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo8o6mo84xisp.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(80, 'Libretas DPB', 'libretasdpb', 'Modelo9', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo9FJujBFNwGz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(81, 'Libretas DPB', 'libretasdpb', 'Modelo10', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo10ueLp9baDTA.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(82, 'Libretas DPB', 'libretasdpb', 'Modelo11', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo11Kfh9RIr6kY.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(83, 'Libretas DPB', 'libretasdpb', 'Modelo12', 'Libretas', 'Tu Eliges tu Portada', 4, 0, 'Modelo12WavwTzfjS0.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(84, 'Libretas DPB', 'libretasdpb', 'Modelo13', 'Libretas', 'Tu Eliges tu Portada', 4, 1, 'Modelo14tg5Qy4JU70.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo13SPZHf1PnHm.jpg', '', ''),
(85, 'Baby Argollas', 'dreams', 'Modelo1', 'Zarcillos', 'Dreams Art', 4, 0, 'Modelo1iKWJczkstB.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(86, 'Dogs', 'dreams', 'Modelo2', 'Collares', 'Dreams Art', 8, 1, 'Modelo21fb7ddxd0f.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(87, 'Duo Nudos', 'dreams', 'Modelo3', 'Pulseras', 'Dreams Art', 5, 0, 'Modelo3FLN9HkR512.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(88, 'Duo Nudos + Venezuela (par)', 'dreams', 'Modelo4', 'Pulseras', 'Dreams Art', 8, 0, 'Modelo4YcUTTUvO2x.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(89, 'El Protagonista', 'dreams', 'Modelo5', 'Collares', 'Dreams Art', 20, 1, 'Modelo5e75rxWhsqS.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(90, 'Nudo Infinito Cuero (par)', 'dreams', 'Modelo6', 'Pulseras', 'Dreams Art', 12, 0, 'Modelo6lW0PBT7Iaz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(91, 'Super Mama', 'dreams', 'Modelo7', 'Collares', 'Dreams Art', 6, 0, 'Modelo7YEJczWKH72.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(92, 'Tricolor', 'dreams', 'Modelo8', 'Collares', 'Dreams Art', 8, 0, 'Modelo8TpRJQHWLd3.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(93, 'Heart Gold', 'dreams', 'Modelo9', 'Zarcillos', 'Dreams Art', 7, 0, 'Modelo9sYX49IxQeO.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(94, 'Cubos', 'dreams', 'Modelo10', 'Collares', 'Dreams Art', 8, 7, 'Modelo10EdDEYO7nTt.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(95, 'Rosa', 'dreams', 'Modelo11', 'Zarcillos', 'Dreams Art', 5, 1, 'Modelo11VYqCAyWYv9.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(96, 'Aura', 'dreams', 'Modelo12', 'Zarcillos', 'Dreams Art', 8, 2, 'Modelo12csMEY7sl24.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(97, 'Heart', 'dreams', 'Modelo13', 'Zarcillos', 'Dreams Art', 10, 0, 'Modelo13ve9Tkdsm8i.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(98, 'Punto Peruano', 'dreams', 'Modelo14', 'Zarcillos', 'Dreams Art', 10, 0, 'Modelo14WD9jxk4AJx.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(99, 'Venezuela Alamb', 'dreams', 'Modelo15', 'Collares', 'Dreams Art', 12, 0, 'Modelo159ZtP4Pfk4Z.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(100, 'Sensaciones: El Poder de tu Deseo', 'sensaciones', 'Modelo1', 'Libros', 'Cuando tocas fondo, cuando tu vida es un laberinto y no encuentras cÃ³mo salir de Ã©l. Solo te queda hacer una cosa.', 21, 14, 'Modelo1WkZsIeTn9B.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(101, 'Sensaciones: El Arte de Tomar las Riendas de tu Vida', 'sensaciones', 'Modelo2', 'Libros', 'Cuando tocas fondo, cuando tu vida es un laberinto y no encuentras cÃ³mo salir de Ã©l. Solo te queda hacer una cosa.', 21, 7, 'Modelo2hjfTLDMJBM.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo2cteuJ5dbkz.jpg', '', ''),
(102, 'Sensaciones: El Arte de disfrutar tu vida', 'sensaciones', 'Modelo3', 'Libros', 'Cuando ya has decidido VIVIR TU VIDA, solo tienes que saber disfrutarla. Vivir cada instante conscientemente en el AHORA. Estando en el momento y ser tÃº en toda tu ESENCIA. AtrÃ©vete a CREER que es posible y CREA la historia de tu vida en el dÃ­a a dÃ­a, como un paseo divertido, lleno de momentos inolvidables. Mezcla de motivaciÃ³n y poesÃ­a, con cartas y conversaciones hacen de este libro un manual de fÃ¡cil lectura para ayudarte a transformar tu vida a un nivel superior. Tener Fe y trazar un plan de ACCIÃ“N adecuado para poder VIVIR la vida de tus sueÃ±os es un hecho.', 21, 2, 'Modelo3Gj3oWYO6LA.jpg', 'Venezuela', '2010-11-12', 'si', 0, 'Modelo3hE2xLiRfhd.jpg', '', ''),
(103, 'Set de Orquidias', 'ebach', 'Modelo1', 'Escencias', 'Curso Online', 388, 1, 'Modelo1asNtRNYqIW.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(104, 'FormaciÃ³n Flores de Bach Online', 'ebach', 'Modelo2', 'Cursos', 'TODOS nuestros cursos en este formato ', 277, 4, 'Modelo2miGwFsfA6J.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(105, 'FormaciÃ³n Flores de Bach Nivel 1', 'ebach', 'Modelo3', 'Cursos', 'Programa de Terapeuta de Flores de Bach â€“ Terapia Esencial : El comienzo. Ha llegado el momento de alcanzar tu ilusiÃ³n o de comenzar tu nuevo periplo profesional en el sitio adecuado: el Centro Dr. Edward Bach. El Conocimiento es Poder: aprende a gestionar tu propia salud, la de tus seres queridos y la de tus clientes/pacientes. TEMARIO BASICO<br><br>-ReseÃ±a HistÃ³rica<br>-SituaciÃ³n de las Flores de Bach en el contexto de la Medicina, la PsicologÃ­a y otras VÃ­as de Conocimiento.<br>-Fundamentos de su sistema de ayuda a la salud.<br>-Estudio de los 38 preparados esenciales y del famoso Rescue ( Rescue Remedy )<br>-IntroducciÃ³n a la teorÃ­a del dolor<br>-El autodiagnÃ³stico<br>-La priorizaciÃ³n de las emociones', 277, 1, 'Modelo32BRNhLG5Xp.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(106, 'FormaciÃ³n Flores de Bach Nivel 2 ', 'ebach', 'Modelo4', 'Cursos', 'Programa de Terapeuta de Flores de Bach de Nivel 2 â€“ Terapia Esencial : La Primera AmpliaciÃ³n. Ha llegado el momento comenzar a practicar todo el potencial de las flores de bach. TEMARIO BASICO<br><br>-Las 38 esencias: revisiÃ³n y nuevas aplicaciones<br>-El lenguaje del sÃ­ntoma. Su expresiÃ³n floral<br>-La relaciÃ³n Paciente â€“ Terapeuta Esencial<br>-HomeopatÃ­a. La importancia del vÃ­nculo terapÃ©utico PsicopatologÃ­a aplicada a la terapia 1 y 2<br>-El cuerpo como expresiÃ³n de los conflictos internos<br>-TÃ©cnica de la entrevista 1 y 2<br>-La intuiciÃ³n, la dimensiÃ³n espiritual de las esencias<br>-Ã‰tica de la esencia Floral.', 277, 0, 'Modelo46QxR8s7CIB.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(107, 'FormaciÃ³n Flores de Bach Nivel 3', 'ebach', 'Modelo5', 'Cursos', 'Programa Terapeuta Esencial<br><br>-IntroducciÃ³n histÃ³rica<br>-TeorÃ­a de la elaboraciÃ³n de esencias<br>-El factor humano. Cualidades del elaborador<br>-El factor astrolÃ³gico: dÃ­as, su significado subjetivo<br>-Influencias solares y lunares, esencias solares y lunares<br>-El factor mineral: trabajo con cristales y otras piedras. MeditaciÃ³n y visualizaciÃ³n creativa<br>-El factor planta: que es una planta desde el punto de vista floral<br>-Plantas y humanos: la sÃ­ntesis y asimilaciÃ³n de contenidos sutiles (energÃ­as)', 277, 1, 'Modelo5MkvinRK3ho.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(108, 'FormaciÃ³n Flores de Bach Master', 'ebach', 'Modelo6', 'Cursos', 'Ahora que ya te has perfeccionado durante los 3 niveles anteriores puedes asumir un nuevo reto formativo. Es estupendo poder seguir adelante con la base que ya tienes ya que te capacita para acceder a aspectos mÃ¡s profundos y es muy recomendable para aprender a desarrollar bien todo lo que llevas dentro como terapeuta.<br><br>Periplo de 6 meses que te va a permitir contactar directamente con el Dr. Edward Bach de una manera que no hubieras imaginado, conocer mucho mÃ¡s profundamente tus emociones y obtener una gran seguridad para ayudar a tus pacientes. Una gran aventura para aventureros del conocimiento que buscan convertirse en â€œVerdaderos Maestros de las Flores de Bachâ€.<br><br>Aprendiendo a encontrar los fundamentos de este trabajo y a focalizarte, algo imprescindible. TendrÃ¡s que pasar pruebas â€œ iniciÃ¡ticas â€œ en webs especiales que te abrirÃ¡n puertas a conocimientos nuevos: el reto es de ti hacia ti mismo y hacia el servicio a los demÃ¡s.<br><br>El Diploma que recibirÃ¡ una vez finalizada su formaciÃ³n en MASTER, realizado el Accesit y superadas las evaluaciones pertinente viene expedido por nuestro Centro.', 1087, 1, 'Modelo6irT716P1jq.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(109, 'Nivel 1 â€“ FormaciÃ³n intensiva en la Sierra de Guadarrama', 'ebach', 'Modelo7', 'Cursos', 'Curso presencial Open Bach en Matalpino situado en el parque nacional de la sierra del Guadarrama. PodrÃ¡s sintonizar con las plantas de nuestro Centro que te arroparÃ¡n amorosamente durante tu aprendizaje. PodrÃ¡s aprender a conectar con ellas tambiÃ©n.<br><br>Todo el material que necesitas incluido en el precio.<br><br>-Ejercicio Fin de Curso, para perfeccionarte lo pondrÃ¡ JosÃ© SalmerÃ³n al finalizar tu formacion presencial.<br>-SesiÃ³n One to One online con tu formador, que valorarÃ¡ el ejercicio de Fin de Curso y despejarÃ¡ tus dudas.<br>-Certificado de estudios de Terapeuta Esencial de Nivel 1 que te capacita como Experto en Terapia personal y familiar con Flores de Bach. (primera etapa para llegar a un nivel profesional).<br>-Al ser un curso muy personalizado, la enseÃ±anza se adaptarÃ¡ a tus necesidades<br><br>Revisa nuestros descuentos y contÃ¡ctanos en persona para conocer nuestras formas de pago.', 277, 0, 'Modelo74C2neExppj.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(110, 'Nivel 1 â€“ FormaciÃ³n intensiva en la Sierra de Guadarrama cuotas', 'ebach', 'Modelo8', 'Cursos', 'Dos pagos de 125â‚¬<br><br>Curso presencial Open Bach en Matalpino situado en el parque nacional de la sierra del Guadarrama. PodrÃ¡s sintonizar con las plantas de nuestro Centro que te arroparÃ¡n amorosamente durante tu aprendizaje. PodrÃ¡s aprender a conectar con ellas tambiÃ©n.<br><br>Todo el material que necesitas incluido en el precio.<br><br>-Ejercicio Fin de Curso, para perfeccionarte lo pondrÃ¡ JosÃ© SalmerÃ³n al finalizar tu formacion presencial.<br>-SesiÃ³n One to One online con tu formador, que valorarÃ¡ el ejercicio de Fin de Curso y despejarÃ¡ tus dudas.<br>-Certificado de estudios de Terapeuta Esencial de Nivel 1 que te capacita como Experto en Terapia personal y familiar con Flores de Bach. (primera etapa para llegar a un nivel profesional).<br>-Al ser un curso muy personalizado, la enseÃ±anza se adaptarÃ¡ a tus necesidades<br><br>Revisa nuestros descuentos y contÃ¡ctanos en persona para conocer nuestras formas de pago.', 138, 0, 'Modelo8EubkJ7DVBf.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(111, 'Kit Original de Flores de Bach', 'ebach', 'Modelo9', 'Escencias', 'â€œGotas de Floresâ€ Artesanales en Caja de Madera con sus 38 Flores de Bach y sus 2 Rescue de 15 ml', 355, 0, 'Modelo9MBQnGaSO4s.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(112, 'Kit Original de Flores de Bach ', 'ebach', 'Modelo10', 'Escencias', 'Artesanales Gotas de Flores de 38 Flores de Bach y 2 Rescue de 15 ml ', 310, 0, 'Modelo10ddxBI1ZYSQ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(113, 'Greenternet - JosÃ© SalmerÃ³n', 'ebach', 'Modelo11', 'Libros', 'Libro imprescindible para aprender a conectar con la naturaleza. Â¡Si percibes el cambio climÃ¡tico este es tu libro!', 13, 1, 'Modelo11nLpsw8MuGh.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(114, 'Tratado Completo de Flores de Bach - JosÃ© SalmerÃ³n', 'ebach', 'Modelo12', 'Libros', 'Libro de referencia para aprenderte las flores de Bach de manera profunda y poÃ©tica.', 13, 0, 'Modelo12oOCkwdDlCQ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(115, 'Fundamentos PsicologÃ­a EcolÃ³gica 1', 'ebach', 'Modelo13', 'Libros', 'Autor: JosÃ© SalmerÃ³n Pascual NÂº de pÃ¡ginas: 157 pÃ¡gs. Disponible en: Libro electrÃ³nico ISBN: 978-84-8696180-0 El estilo sencillo y directo de JosÃ© SalmerÃ³n hace fÃ¡cil su lectura a la vez que se trata el tema de manera directa y profunda a la vez.', 22, 0, 'Modelo13YMNWvACcxd.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(116, 'Fundamentos PsicologÃ­a EcolÃ³gica 2', 'ebach', 'Modelo14', 'Libros', 'Autor: JosÃ© SalmerÃ³n Pascual<br> NÂº de pÃ¡ginas: 157 pÃ¡gs.<br> Disponible en: Libro electrÃ³nico<br> ISBN: 978-84-8696180-0<br><br>El estilo sencillo y directo de JosÃ© SalmerÃ³n hace fÃ¡cil su lectura a la vez que se trata el tema de manera directa y profunda a la vez.', 22, 0, 'Modelo14dQXF9A4pxF.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(117, 'IntroducciÃ³n a las esencias florales', 'ebach', 'Modelo15', 'Libros', 'Autor: JosÃ© SalmerÃ³n Pascual<br> NÂº de pÃ¡ginas: 188 pÃ¡gs.<br> Disponible en: Libro electrÃ³nico<br> ISBN: 84-7560-029-8<br><br>El estilo sencillo y directo de JosÃ© SalmerÃ³n hace fÃ¡cil su lectura de descarga gratuita', 0, 0, 'Modelo15NAVxU4AqNt.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(118, 'Acebo ( HOLLY )', 'ebach', 'bach1', 'Escencias', 'Para transformar el Odio en Amor', 10, 0, 'bach15BVwiLmV6A.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(119, 'Achicoria ( CHICORY )', 'ebach', 'bach2', 'Escencias', 'Para transformar la manipulaciÃ³n en ayuda respetuosa', 10, 1, 'bach261k1LykyrI.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(120, 'Agrimonia (AGRIMONY ) ', 'ebach', 'bach3', 'Escencias', 'Para expresar lo que uno siente y disminuir la ansiedad', 10, 0, 'bach3W9HevhFkST.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(121, 'Agua de Roca ( ROCK WATER ) ', 'ebach', 'bach4', 'Escencias', 'Para disfrutar y ser menos exigente consigo mismo ', 10, 0, 'bach4UIouyCU09K.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(122, 'Alamo TemblÃ³n ( ASPEN )', 'ebach', 'bach5', 'Escencias', 'Desarrolla la confianza y disminuye los temores inexplicables', 10, 0, 'bach5LWPlMe96kn.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(123, 'Alerce ( LARCH )  ', 'ebach', 'bach6', 'Escencias', 'Da confianza sin necesidad de compararse internamente', 10, 0, 'bach6ffekGuQzz4.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(124, 'Avena Silvestre ( WILD OAT )', 'ebach', 'bach7', 'Escencias', 'Para elegir entre muchas opciones', 10, 0, 'bach712uH5fxAT7.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(125, 'Brezo ( HEATHER )', 'ebach', 'bach8', 'Escencias', 'Para aprender a escuchar y conectar consigo mismo', 10, 0, 'bach8jsNaUwCkVw.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(126, 'Aulaga ( GORSE )', 'ebach', 'bach9', 'Escencias', 'Para tener fe en una mejorÃ­a cuando se ha perdido la esperanza', 10, 0, 'bach94nqq6Jh0Tk.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(127, 'CastaÃ±o Blanco (WHITE CHESNUT ) ', 'ebach', 'bach10', 'Escencias', 'Para tener paz mental y descansar', 10, 0, 'Modelo10L91Hjm9BTU.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(128, 'CastaÃ±o Dulce (SWEET CHESNUT )  ', 'ebach', 'bach11', 'Escencias', 'Para seguir luchando tras un largo periodo de dolor', 10, 0, 'Modelo11KoXNj5vbCt.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(129, 'Brote de CastaÃ±o (CHESNUT BUD )', 'ebach', 'bach12', 'Escencias', 'Para extraer lecciones de la vida y no repetir errores', 10, 0, 'Modelo12My00S7kFoC.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(130, 'CastaÃ±o Rojo (RED CHESNUT )', 'ebach', 'bach13', 'Escencias', 'Para confiar mÃ¡s en el prÃ³jimo y no preocuparse tanto', 10, 0, 'Modelo13VUofDJvJNz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(131, 'CerasÃ­fera ( CHERRY PLUM )', 'ebach', 'bach14', 'Escencias', 'Relaja la mente y el cuerpo en momentos de descontrol', 10, 0, 'Modelo14wpkLJOYpT3.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(132, 'Centaura ( CENTAURY )', 'ebach', 'bach15', 'Escencias', 'Para liberarse de relaciones de dominaciÃ³n y saber decir No ', 10, 0, 'Modelo15OigpUEnIS1.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(133, 'Ceratostigma ( CERATO )', 'ebach', 'bach16', 'Escencias', ' Para escucharse a si mismo sin necesidad de pedir consejos', 10, 0, 'bach16k8q6lbxCwU.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(134, 'Clematide ( CLEMATIS )', 'ebach', 'bach17', 'Escencias', 'Para desarrollar la atenciÃ³n y conectar con la realidad ', 10, 0, 'bach17FuXwGEeKTB.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(135, 'Estrella de BelÃ©n ( STAR OF BETHLEHEM ) ', 'ebach', 'bach18', 'Escencias', 'Da fuerza para superar los golpes de la vida', 10, 0, 'bach18GMBPMoWn7b.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(136, 'Genciana ( GENTIAN )  ', 'ebach', 'bach19', 'Escencias', 'Nos anima cuando flaqueamos por pequeÃ±os contratiempos', 10, 0, 'bach19Xaik8kmP3k.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(137, 'Haya ( BEECH ) ', 'ebach', 'bach20', 'Escencias', 'Para confiar mÃ¡s en el otro sin necesidad de criticarle ', 10, 0, 'bach20jUV099sIjE.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(138, 'Heliantemo ( ROCK ROSE) ', 'ebach', 'bach21', 'Escencias', 'Da valor en momentos de pÃ¡nico, descontrol o bloqueos', 10, 0, 'bach21up2Cm8oG9h.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(139, 'Hojarazo (HORNBEAM) ', 'ebach', 'bach22', 'Escencias', 'Aumenta la vitalidad e ilusiones en Ã©pocas de cansancio mental ', 10, 0, 'bach22wQW4f4ldXO.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(140, 'Impaciencia ( IMPATIENS )', 'ebach', 'bach23', 'Escencias', 'Desarrolla la paciencia con los demÃ¡s y la reflexiÃ³n ', 10, 0, 'bach23qVs3NW6hyt.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(141, 'Madreselva (HONEYSUCKLE) ', 'ebach', 'bach24', 'Escencias', 'Para superar el pasado y vivir el Ahora', 10, 0, 'bach24kOau1W96kZ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(142, 'Manzano Silvestre ( CRAB APPLE ) ', 'ebach', 'bach25', 'Escencias', 'Libera de la sensaciÃ³n de suciedad interna. Purificador ', 10, 0, 'bach25H4qEUn2DzJ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(143, 'MÃ­mulo (MIMULUS)', 'ebach', 'bach26', 'Escencias', ' Para ser Valiente frente a miedos cotidianos ', 10, 0, 'bach26QHx4ry9SUq.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(144, 'Mostaza ( MUSTARD ) ', 'ebach', 'bach27', 'Escencias', ' Permite salir de la DepresiÃ³n SÃºbita y recuperar la AlegrÃ­a', 10, 0, 'bach27g7R2cgnAOh.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(145, 'Nogal ( WALNUT ) ', 'ebach', 'bach28', 'Escencias', 'Permite aceptar nuevas situaciones en momentos de Cambio', 10, 0, 'bach28JqheHY5rQT.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(146, 'Olivo ( OLIVE )  ', 'ebach', 'bach29', 'Escencias', 'Para recuperar fuerzas en Ã©pocas de Agotamiento FÃ­sico y Mental', 10, 0, 'bach29xPwFKByfjt.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(147, 'Olmo (ELM)', 'ebach', 'bach30', 'Escencias', ' Genera Fuerzas en momentos de mÃ¡xima Responsabilidad ', 10, 0, 'bach30i6kGAdnVM1.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(148, 'Pino ( PINE ) ', 'ebach', 'bach31', 'Escencias', 'Para Perdonarse y eliminar los sentimientos de Culpa que torturan la mente', 10, 0, 'bach31yrIxsWJcaD.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(149, 'Roble ( OAK )', 'ebach', 'bach32', 'Escencias', ' Para consederse una tregua sin necesidad de enfermar ', 10, 0, 'bach32GZifTmW0ei.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(150, 'Rosa Silvestre (WILD ROSE) ', 'ebach', 'bach33', 'Escencias', 'Para recuperar la IlusiÃ³n en Ã©pocas de ApatÃ­a y Desgana ', 10, 0, 'bach33FC1gBi7ekM.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(151, 'Sauce (WILLOW) ', 'ebach', 'bach34', 'Escencias', 'Para sentir Paz y aceptar los reveses de la vida sin Resentimientos ni Quejas', 10, 0, 'bach34QFVh5wZv9i.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(152, 'Scleranthus ( SCLERANTUS ) ', 'ebach', 'bach35', 'Escencias', 'Facilita la ElecciÃ³n entre Dos Opciones ', 10, 0, 'bach35DGTWrxEVuh.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(153, 'Verbena ( VERVAIN ) ', 'ebach', 'bach36', 'Escencias', 'Para confiar mÃ¡s en si mismo sin necesidad de Convencer a los demÃ¡s ', 10, 0, 'bach36hepD7ifN08.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(154, 'Violeta de Agua ( WATER VIOLET ) ', 'ebach', 'bach37', 'Escencias', 'Facilita la integraciÃ³n social en lugar de Aislarse ', 10, 0, 'bach37EwiaF0OoUX.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(155, 'Vid ( VINE )', 'ebach', 'bach38', 'Escencias', 'Para ser mÃ¡s Flexible y dejar de Imponerse ', 10, 0, 'bach38VhtDtMWIMn.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(156, 'Remedio de Rescate (RESCUE REMEDY)', 'ebach', 'bach39', 'Escencias', ' Necesario para cualquier situaciÃ³n de Urgencia ', 10, 0, 'bach39qrH2vwAdha.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(157, 'Immune IQ Starter Pack', '4life', 'life1', 'Proteinas', 'Gran paquete para cualquiera que comience su viaje de apoyo inmunolÃ³gico 4Life', 148, 2, 'life1YqCAyWYv9v.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(158, 'March Product Special', '4life', 'life2', 'Proteinas', 'Cuide sus riÃ±ones y su salud.', 90, 3, 'life2H9YzAAXsDG.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(159, 'Transfer Factor Plus', '4life', 'life3', 'Proteinas', ' El producto nÃºmero uno del sistema inmunitario de 4Life, con 4Life Transfer FactorÂ® e ingredientes bien investigados para equilibrar y respaldar la respuesta del sistema inmunitario *', 58, 0, 'life3YHWFRf6gWz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(160, 'RioVida', '4life', 'life4', 'Proteinas', 'El primer y Ãºnico suplemento lÃ­quido de factor de transferencia en el mundo, con energizantes antioxidantes adicionales', 61, 0, 'life4ALLez0HkzJ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(161, 'Transfer Factor Collagen', '4life', 'life5', 'Proteinas', 'FÃ³rmula que presenta cinco tipos de colÃ¡geno, FÃ³rmula 4LifeÂ® Tri-FactorÂ®, vitaminas A, C y E, biotina y nuestro complejo de plantas anti-edad.', 33, 0, 'life53Tiik2Yxtl.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(162, 'Transfer Factor Tri-Factor', '4life', 'life6', 'Proteinas', 'FÃ³rmula que ayuda a educar a las cÃ©lulas inmunitarias y a promover la capacidad del sistema inmunitario para reconocer, responder y recordar de manera mÃ¡s efectiva las posibles amenazas para la salud', 43, 0, 'life6dG5EQECW7o.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(163, 'RiteStartÂ® Women', '4life', 'life7', 'Proteinas', 'Paquete nutricional todo en uno con 4LifeÂ® Transfer Factor PlusÂ® Tri-FactorÂ® Formula, vitaminas, minerales, antioxidantes y Ã¡cidos grasos esenciales para proporcionar lo que las mujeres necesitan para un rendimiento, resistencia y salud fenomenales', 62, 0, 'life7Jk8C6vYqIy.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(164, 'Transfer Factor Classic', '4life', 'life8', 'Proteinas', 'Nuestro UltraFactor XFÂ® original para un respaldo seguro y comprobado del sistema inmunitario', 40, 0, 'life8TjOSKl23HG.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(165, 'Cardio', '4life', 'life9', 'Proteinas', 'TecnologÃ­a exclusiva Targeted Transfer FactorÂ® y otros ingredientes desarrollados especÃ­ficamente para mantener y apoyar un sistema cardiovascular saludable', 52, 3, 'life9opCBLxqwyi.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(166, 'Renuvo', '4life', 'life10', 'Proteinas', 'Soporte patentado para el envejecimiento saludable y el manejo diario del estrÃ©s para ayudarlo a sentirse de 22', 50, 0, 'life10wbdypBHv3y.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(167, 'GluCoach', '4life', 'life11', 'Proteinas', 'Formulated to promote healthy glucose levels, the bodyâ€™s ability to metabolize glucose, and the metabolic and endocrine systems', 52, 0, 'life11e9Tkdsm8iW.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(168, 'Pre-o BioticsÂ®', '4life', 'life12', 'Proteinas', 'El Ãºnico producto prebiÃ³tico / probiÃ³tico en el mundo que funciona con 4Life Transfer Factor', 40, 0, 'life12D9jxk4AJx9.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(169, 'Transfer Factor Chewable', '4life', 'life13', 'Proteinas', 'Una versiÃ³n masticable de gran sabor de 4Life Transfer FactorÂ® Tri-FactorÂ® Formula de 4Life', 45, 0, 'life13JRU8wrWWNC.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(170, 'RioVida Stix', '4life', 'life14', 'Proteinas', '4Life Transfer FactorÂ®, antioxidantes y electrolitos en convenientes paquetes de polvo de una sola porciÃ³n', 28, 0, 'life14D4MdX6aBm9.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(171, '4LifeÂ® Transfer FactorÂ® Tri-FactorÂ® Formulaâ€”5 Pack', '4life', 'life15', 'Proteinas', 'FÃ³rmula que ayuda a educar a las cÃ©lulas inmunitarias y a promover la capacidad del sistema inmunitario para reconocer, responder y recordar con mayor eficacia las posibles amenazas para la salud.', 197, 0, 'life15cAPNBwP8zh.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(172, 'Womenâ€™s Digest4LifeÂ® Activate Pack', '4life', 'life16', 'Proteinas', 'Productos para limpiar, desintoxicar y reponer su sistema digestivo y apoyar la salud en general', 277, 0, 'life16A82dR4w6tf.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(173, '4LifeTransformÂ® 30-Day Accelerator System for Women', '4life', 'life17', 'Proteinas', 'Sistema completo y fÃ¡cil de seguir que combina productos patentados y cientÃ­ficamente probados con una guÃ­a diaria para ayudarlo a lograr una transformaciÃ³n corporal real y duradera', 217, 0, 'life17SQohRO5gEP.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(174, 'Energy Go StixÂ® Berry', '4life', 'life18', 'Proteinas', 'Paquetes para llevar con 4Life Transfer FactorÂ® y una mezcla de ingredientes que aumentan la energÃ­a', 44, 0, 'life18ZtP4Pfk4Z2.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(175, 'KBU', '4life', 'life19', 'Proteinas', 'ArÃ¡ndano, arÃ¡ndano, hoja de diente de leÃ³n y bayas de enebro para apoyar el sistema urinario tanto en hombres como en mujeres', 47, 0, 'life19xMZedV6T3i.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(176, 'Belle Vie', '4life', 'life20', 'Proteinas', 'Una potente mezcla de fitoestrÃ³genos, desintoxicaciÃ³n e ingredientes antioxidantes para ayudar a mantener el equilibrio hormonal saludable y la funciÃ³n del sistema inmune en las mujeres.', 48, 0, 'life20kKPaNLC3bJ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(177, 'ReCall', '4life', 'life21', 'Proteinas', 'Soporte exclusivo de Targeted Transfer FactorÂ®, antioxidantes y una mezcla de nutrientes herbales para apoyar la funciÃ³n cerebral', 48, 0, 'life21ChZM5GauIB.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(178, '4Life Transfer FactorÂ® ClÃ¡sicoâ€” Paquete de 5', '4life', 'life22', 'Proteinas', 'FÃ³rmula que ayuda a educar a las cÃ©lulas inmunitarias y a promover la habilidad del sistema inmunitario para reconocer, responder y recordar efectivamente amenazas potenciales a la salud', 187, 0, 'life221qGVSaa2cE.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(179, 'Vista', '4life', 'life23', 'Proteinas', 'Respaldo especÃ­fico con la marca de luteÃ­na mÃ¡s recomendada por los doctores para ayudar al funcionamiento visual, la agudeza visual saludable y la salud de los ojos', 48, 2, 'life23t455sX8btc.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(180, 'Pro-TFÂ® Vainilla', '4life', 'life24', 'Proteinas', 'Una de las proteÃ­nas mÃ¡s avanzadas y efectivas disponibles para ayudarte a transformar tu cuerpo, optimizar tu rendimiento y respaldar tu sistema inmunitario', 54, 0, 'life24bXJS0MRS72.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(181, 'Ã¤KwÃ¤ Sistema de Cuidado de la Piel', '4life', 'life25', 'Proteinas', 'Este sistema incluye cada una de las fÃ³rmulas, ademÃ¡s de una sencilla guÃ­a de los productos para ayudarte a disfrutar la verdadera experiencia bÃ¡sica y ritual que Ã¤KwÃ¤ puede ofrecerle a tu cutis. Disponible en un conveniente paquete con un suministro para 30 dÃ­as, este sistema es una opciÃ³n perfecta para tus Ã³rdenes del Programa de Lealtad, para que asÃ­ puedas mantener constante tu ritual de belleza y cuidado de la piel', 182, 0, 'life25jqtkORxKA3.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(182, 'MalePro', '4life', 'life26', 'Proteinas', 'Producto Targeted Transfer FactorÂ® formulado especÃ­ficamente para respaldar la salud de la prÃ³stata con palma enana americana, licopeno e isoflavonas', 47, 0, 'life26iUkjdSgvff.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(183, 'Glutamine Prime', '4life', 'life27', 'Proteinas', 'FÃ³rmula que provee glutamina para respaldar la funciÃ³n saludable de las cÃ©lulas inmunitarias, especialmente durante los momentos de mayor estrÃ©s', 33, 0, '8YS88y480B.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(184, 'BioEFA', '4life', 'life28', 'Proteinas', 'Fuente superior de 4Life de los Ã¡cidos grasos esenciales como omega-3 y omega-6 derivados de aceite de linaza, aceite de cÃ¡rtamo, aceite de semilla de borraja y aceite de pescado', 22, 0, 'life28hjWWuhFVb7.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(185, 'Super Detox', '4life', 'life29', 'Proteinas', 'FÃ³rmula que combina cardo de leche, trÃ©bol rojo, alcachofa y calcio d-glutarato para respaldar las funciones saludables del hÃ­gado y el proceso de desintoxicaciÃ³n natural', 27, 0, '29qpirUJjkkI.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(186, 'Spray Inmunitario Menta', '4life', 'life30', 'Proteinas', 'Spray para la boca y la garganta con 4Life Transfer FactorÂ®, lactoferrina y zinc para respaldar al sistema inmunitario', 28, 0, 'life29doqJrHqBZR.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(187, 'Sistema Flex4Lifeâ„¢', '4life', 'life31', 'Proteinas', 'Sistema que incluye Flex4LifeÂ® cÃ¡psulas y Flex4Lifeâ„¢ crema para respaldar los mÃºsculos y las articulaciones', 48, 0, 'life31jXrPoBpnGR.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(188, 'Mascarilla de Barro', '4life', 'life32', 'Proteinas', 'Un tratamiento de transformaciÃ³n mineral para el cutis', 25, 0, 'life3289ammviagi.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(189, 'Acondicionador', '4life', 'life33', 'Proteinas', 'Acondicionador libre de siliconas, que ayuda a equilibrar la humedad y es adecuado para todo tipo de cabello. Contiene vitaminas esenciales, proteÃ­nas, aminoÃ¡cidos, antioxidantes e ingredientes nutritivos naturales derivados de plantas y frutas', 17, 0, 'life332TBRTDz2NX.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(190, 'Limon', '4life', 'life34', 'Proteinas', 'Aceite esencial 100% puro que le da energÃ­a a tu perspectiva mental', 18, 0, 'life34UaeZO6ai1b.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(191, 'CoolTouch', '4life', 'life35', 'Proteinas', 'Mezcla de aceite esencial 100% puro que es maravillosa para usar en masajes', 42, 0, 'life35G7zYYNHAGd.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(192, 'Menta', '4life', 'life26', 'Proteinas', 'Aceite esencial 100% puro que evoca frescura y tranquilidad', 25, 0, 'life26Ub2hcoKh0i.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(193, 'Mezcla Digestiva', '4life', 'life37', 'Proteinas', 'Mezcla de aceite esencial 100% puro que respalda una digestiÃ³n saludable', 27, 0, 'life3716jtB3A2H0.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(194, 'Brisa', '4life', 'life38', 'Proteinas', 'Mezcla de aceite esencial 100% puro que provee un tÃ³nico estimulante para tus pulmones', 25, 0, 'life38NA1hpcNKps.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(195, 'CalmaVida', '4life', 'life39', 'Proteinas', 'Mezcla de aceite esencial 100% puro que calma y estabiliza', 27, 0, 'life394ZJgUEGF8o.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(196, 'Flex4Life', '4life', 'life40', 'Proteinas', 'Una mezcla tópica calmante que contiene mentol, vitamina E y más', 20, 0, 'life40phkF5FEyir.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', '');
INSERT INTO `productos` (`id`, `nombre`, `marca`, `modelo`, `tipo`, `descripcion`, `precio`, `visited`, `foto`, `pais`, `fecha`, `disponible`, `comprado`, `foto_secundaria`, `Tienda`, `talla`) VALUES
(197, 'LavaPure', '4life', 'life41', 'Proteinas', 'Al igual que las aguas geotÃ©rmicas que surgen de los lechos volcÃ¡nicos, nuestra mascarilla volcÃ¡nica renueva, refresca y energiza la apariencia de tu piel. Las propiedades volcÃ¡nicas limpian la superficie de la piel para obtener una experiencia purificadora.  El agua de tÃ© verde fermentado y el extracto de semilla de soya negra se entremezclan con la ceniza volcÃ¡nica excavada de la tierra, creando una experiencia embellecedora y colmada de naturaleza.', 25, 0, 'life41c4htVOK5jS.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(198, 'FemRite', '4life', 'life42', 'Proteinas', 'Una crema Ãºnica formulada para la mujer que contiene una mezcla rica de extracto de Ã±ame silvestre, aloe, jojoba y extracto de aguacate', 22, 0, 'life42rCTTU76g2V.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(199, 'Exfoliante Corporal', '4life', 'life43', 'Proteinas', 'Un exfoliante corporal completo con un toque suave y natural', 12, 0, 'life4313NEmBDnkM.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(200, 'Gel Refrescante para Masaje', '4life', 'life44', 'Proteinas', 'Una explosiÃ³n de ingredientes refrescantes y relajantes para usar en un masaje', 28, 0, 'life445fKMEmdWBP.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(201, 'Crema de Tratamiento para Pies', '4life', 'life45', 'Proteinas', 'Una terapia vigorizante para los pies', 18, 0, 'life45trF01o4KOn.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(202, 'Juego Milagroso 3Dâ„¢ TimeWiseÂ® Combinada/Grasa', 'marykay', 'mary1', 'Mquillaje', 'El Juego Milagroso 3Dâ„¢ TimeWiseÂ® defiende, demora y demuestra resultados para una piel que luce mÃ¡s joven. Esta estrategia tridimensional totalmente abarcadora ayuda a minimizar la apariencia del envejecimiento de la piel.', 112, 3, 'mary168SPh3d9pu.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(203, 'TimeWiseÂ® Age Minimize 3DÂ® 4-in-1 Cleanser Normal/Reseca', 'marykay', 'mary2', 'Mquillaje', 'Esta limpiadora multifuncional elimina las impurezas que opacan el cutis y deja la piel sintiÃ©ndose limpia, exfoliada y con una apariencia mÃ¡s clara.', 26, 2, 'mary2e4lpxgrjeZ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(204, 'Set TimeWise RepairÂ®', 'marykay', 'mary3', 'Mquillaje', 'Impulsado por el Volu-FirmÂ® complex, TimeWise RepairÂ®, es el tratamiento que se dirige a personas con signos de edad avanzados como nunca antes lo habÃ­an visto.', 262, 0, 'mary3u44SSv8NGh.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(205, 'Crema Hidratante Intensiva Mary KayÂ®', 'marykay', 'mary4', 'Mquillaje', '  Facebook  0   Twitter   Cantidad 1 AÃ±adir a la cesta Guardar en la lista de deseos Ver mÃ¡s Â¿Por quÃ© la piel necesita hidrataciÃ³n? Descubre algunos consejos para proteger la piel Orden de aplicaciÃ³n â€‹Esta lujosa crema para piel seca proporciona una sensaciÃ³n inmediata de suavidad, dando a la piel un aspecto terso y radiante.', 40, 0, 'mary4JXy5fQxaup.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(206, 'Gel Reparador para Contorno de Ojos Indulgeâ„¢', 'marykay', 'mary5', 'Mquillaje', 'Contiene extractos botÃ¡nicos reconocidos por sus propiedades para tonificar, reafirmar y reducir la hinchazÃ³n existente en la delicada zona de alrededor de los ojos.', 30, 0, 'mary5fdO8Mt4ZJE.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(207, 'Hidratante sin Aceites para Pieles Propensas al acnÃ© Clear Proof', 'marykay', 'mary6', 'Mquillaje', 'Calma la piel a la vez que repone la hidrataciÃ³n.', 24, 0, 'mary6vnkucKwkSc.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(208, 'Colorete Chromafusionâ„¢', 'marykay', 'mary7', 'Mquillaje', 'Para un rubor natural mate o luminoso, escoge entre los 6 nuevos tonos de Coloretes Chromafusionâ„¢. AplÃ­calo en los pÃ³mulos o en las mejillas para un toque de color ligero pero radiante desde cualquier luz.', 15, 1, 'mary7RYLAl3zepC.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(209, 'Polvos Chromafusionâ„¢ Iluminador', 'marykay', 'mary8', 'Mquillaje', 'Aporta luz al rostro con estos polvos iluminadores, un tono que darÃ¡ un impulso de luminosidad a tu rostro. Aplica en los pÃ³mulos para dar una apariencia sutil y \"levantada\" a las mejillas donde la luz se refleja normalmente en la cara.', 15, 0, 'mary8yIEUZJzQU2.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(210, 'Delineador de Ojos Mary KayÂ®', 'marykay', 'mary9', 'Mquillaje', 'Mirada intensa y ojos perfectamente definidos con los Delineadores de Ojos Mary KayÂ®.', 15, 0, 'mary9LWOJu0Epqp.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(211, 'LÃ¡piz de Labios Gel Semi-Mate Mary KayÂ®', 'marykay', 'mary10', 'Mquillaje', 'Color duradero. Efecto aterciopelado. Â¡Lo que tus labios estaban esperando!', 23, 2, 'mary10ELvp2pLGni.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(212, 'Set Manos de Seda Satin HandsÂ® TÃ© Blanco & CÃ­tricos', 'marykay', 'mary11', 'Mquillaje', 'Este tratamiento spa en casa revitaliza y rejuvenece el aspecto de tus manos, llevando tus cuidados al siguiente nivel.', 52, 0, 'mary11mmOD8pT9ri.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(213, 'Pantalla Solar FPS 50 Mary KayÂ® ProtecciÃ³n Alta', 'marykay', 'mary12', 'Mquillaje', 'Para una protecciÃ³n avanzada contra las quemaduras solares y el envejecimiento prematuro de la piel, la Pantalla Solar FPS 50 ProtecciÃ³n Alta estÃ¡ indicada para su uso en situaciones de exposiciÃ³n prolongada al sol y en zonas de montaÃ±a.', 28, 0, 'mary12J250V2sZyn.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(214, 'Gel de Cuerpo de KaritÃ© TÃ© Blanco y CÃ­tricos Satin BodyÂ®', 'marykay', 'mary13', 'Mquillaje', 'El Gel de Cuerpo de KaritÃ© TÃ© Blanco y CÃ­tricos Satin BodyÂ® te envuelve instantÃ¡neamente en abundante espuma dejando tu piel suave y fresca.', 19, 0, 'mary137jRuWpPImz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(215, 'Gel Reparador para despuÃ©s del Sol Mary KayÂ®*', 'marykay', 'mary14', 'Mquillaje', '  Facebook  0   Twitter   Cantidad 1 AÃ±adir a la cesta Guardar en la lista de deseos El Gel Reparador para despuÃ©s del Sol es un fresco y ligero gel azul que contiene extractos botÃ¡nicos calmantes ricos en antioxidantes que ayudan a reponer la hidrataciÃ³n necesaria despuÃ©s de la exposiciÃ³n solar. Consigue una agradable sensaciÃ³n de frescor y deja la piel suave e hidratada.', 20, 0, 'mary14piKfGsVqfU.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(216, 'Cityscapeâ„¢ Colonia en Spray', 'marykay', 'mary15', 'Mquillaje', 'Cityscapeâ„¢ Colonia en Spray', 54, 0, 'mary15gAbSAF64f9.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(217, 'MK High Intensityâ„¢ Sport Colonia en Spray', 'marykay', 'mary16', 'Mquillaje', '  Facebook  0   Twitter   Cantidad 1 AÃ±adir a la cesta Guardar en la lista de deseos Ver mÃ¡s Fragancias Mary Kay: No olvides...el toque final Esta fragancia fresca y vigorizante estimula tus sentidos con un aroma que inspira tu lado mÃ¡s aventurero.', 42, 0, 'mary16ndeKca1nLN.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(218, 'Fragancia CityscapeÂ® formato viaje', 'marykay', 'mary17', 'Mquillaje', 'Lleva la elegancia y la sofisticaciÃ³n allÃ­ donde vayas con esta fragancia en tamaÃ±o viaje. RegÃ¡latela a ti misma o regala esta fragancia a alguien. Â¡Su tamaÃ±o es perfecto!', 20, 0, 'mary175I51JxrJ8K.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(219, 'Thinking of YouÂ® Eau de Parfum', 'marykay', 'mary18', 'Mquillaje', 'Convierte un instante en un recuerdo inolvidable con un aroma que captura las emociones que nos conectan a todos, y que tambiÃ©n brinda el regalo perfecto.', 38, 6, 'mary18y0oATPYuEz.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(220, 'BelaraÂ® Eau de Parfum', 'marykay', 'mary21', 'Mquillaje', 'Floral y cremosa, la fragancia BelaraÂ® Eau de Parfum ofrece el equilibrio perfecto de una fragancia translÃºcida con una mezcla exuberante de aromas florales luminosos y notas cremosas y cÃ¡lidas.', 40, 0, 'mary21MSGppB0sjV.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(221, 'TimeWiseÂ® Firming Eye Cream', 'marykay', 'mary22', 'Mquillaje', 'Esta suntuosa y rica crema de ojos es tan avanzada que reafirma, ilumina y brinda una humectaciÃ³n intensa, ademÃ¡s de minimizar la apariencia de lÃ­neas finas y arrugas.', 34, 0, 'mary22T8P0vxo6XG.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(222, 'TimeWise RepairÂ® Volu-FirmÂ® Advanced Lifting Serum', 'marykay', 'mary23', 'Mquillaje', 'Â¡Recupera tu triÃ¡ngulo de la juventud! Ya estÃ¡ aquÃ­ la nueva generaciÃ³n del cuidado de la piel que desafÃ­a el envejecimiento avanzado. El TimeWise RepairÂ® Volu-FirmÂ® Advanced Lifting Serum es nuestro suero mÃ¡s preciso y poderoso. Es preciso gracias a su innovadora defensa que se centra en tu triÃ¡ngulo de la juventud. Poderoso, gracias a la sinergia de ingredientes Ãºnica diseÃ±ada para mejorar los beneficios reafirmantes visibles del suero.', 72, 0, 'mary23BqbYfqJ9ls.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(223, 'Mary KayÂ® Oil-Free Hydrating Gel (Normal/Oily)', 'marykay', 'mary24', 'Mquillaje', 'Este gel libre de aceites se absorbe inmediatamente, dejando la piel con una sensaciÃ³n de frescura mientras que la hidrata por 10 horas.', 34, 0, 'mary24kORWsmxB0m.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(224, 'Mary KayÂ® Extra Emollient Night Cream', 'marykay', 'mary25', 'Mquillaje', 'â€‹Ayuda a mantener la humectaciÃ³n natural de la cara y restaura la hidrataciÃ³n en Ã¡reas extremadamente resecas.', 17, 0, 'mary25mAebqLL8Ou.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(225, 'Aceite nutriente Mary Kay Naturallyâ„¢', 'marykay', 'mary26', 'Mquillaje', 'Este aceite de rÃ¡pida absorciÃ³n deja la piel hidratada y con un aspecto revitalizado.', 50, 0, 'mary26X6tWkiNGmu.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(226, 'Live FearlesslyÂ® Eau de Parfum', 'marykay', 'mary27', 'Mquillaje', 'Emana confianza con notas de jengibre energizante, rosa audaz y cÃ¡lidas semillas asadas de sarrapia. Cuenta tu historia.', 45, 0, 'mary27z7f74eXug4.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(227, 'Mary KayÂ® Undereye Corrector', 'marykay', 'mary28', 'Mquillaje', 'Neutraliza los cÃ­rculos oscuros e ilumina el Ã¡rea debajo de los ojos ayudando a lucir un aspecto despierto y revitalizado.', 18, 0, 'life28OZUrL3hbb9.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(228, 'Lash IntensityÂ® Mascara', 'marykay', 'mary29', 'Mquillaje', 'Magnifica + Maximiza + Multiplica el look de tus pestaÃ±as. Â¡Intensidad total!', 20, 0, 'life29PZUeaBgNoe.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(229, 'Lash LoveÂ® Mascara', 'marykay', 'mary30', 'Mquillaje', 'Ama a tus pestaÃ±as con un rÃ­mel que define, defiende y brinda cuatro veces mÃ¡s volumen mientras se ven naturalmente impecables, suaves y saludables. La forma especial del cepillo lo hace flexible separa y cubre las pestaÃ±as.', 17, 0, 'mary30tGiyswPPdj.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(230, 'Mary KayÂ® Ultimate Mascaraâ„¢', 'marykay', 'mary31', 'Mquillaje', 'Esta exclusiva fÃ³rmula para pestaÃ±as gruesas y volumen mÃ¡ximo crea una imagen de pestaÃ±as largas, audaces y separadas que dura todo el dÃ­a.', 17, 0, 'mary317M5AOGmTbs.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(231, 'Mary KayÂ® Eyeliner', 'marykay', 'mary32', 'Mquillaje', 'Luce un hermoso maquillaje de ojos y bien definido con el delineador de ojos Mary KayÂ®.', 14, 0, 'mary32MRzztJOZ0c.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(232, 'Brocha para difuminar Mary KayÂ®', 'marykay', 'mary33', 'Mquillaje', 'Nuestra brocha mÃ¡s densa ayuda a aplicar la base de manera uniforme en un solo aplicaciÃ³n.', 18, 0, 'mary33b9JD5SsBLQ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(233, 'Brocha para mejillas Mary KayÂ®', 'marykay', 'mary34', 'Mquillaje', 'Esta brocha multiusos estÃ¡ diseÃ±ada con tres lados para ayudarte a resaltar, esculpir y destacar tus pÃ³mulos sin dejar lÃ­neas demarcadas.', 15, 0, 'mary34DXCJwk5NjZ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(234, 'Brocha compacta para polvo', 'marykay', 'mary35', 'Mquillaje', 'La brocha perfecta para una cobertura ligera del polvo compacto translÃºcido con minerales Mary KayÂ®.', 5, 0, 'mary359ngLM23ZrU.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(235, 'Brocha compacta para mejillas', 'marykay', 'mary36', 'Mquillaje', 'La brocha perfecta para aplicar el rubor Mary Kay Chromafusionâ„¢, el contorno Mary Kay Chromafusionâ„¢ y el iluminador Mary Kay Chromafusionâ„¢.', 3, 0, 'mary36Ww5zBHc6im.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(236, 'ColecciÃ³n esencial de brochas y pinceles Mary KayÂ®', 'marykay', 'mary37', 'Mquillaje', 'La ColecciÃ³n esencial de brochas y pinceles Mary KayÂ® incluye cinco herramientas de alta calidad, con estructura precisa que las hace ideales para crear una amplia gama de looks, viene en un prÃ¡ctico y elegante estuche.', 57, 0, 'mary37toLuZrOYpv.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(237, 'Mary KayÂ® Precision Brow Liner', 'marykay', 'mary38', 'Mquillaje', 'El delineador para cejas Mary KayÂ® presenta una micropunta retractable (no es necesario sacarle punta) para delinear, definir y rellenar las cejas con precisiÃ³n y aÃ±adir pigmento a la perfecciÃ³n.', 15, 0, 'mary37lUiiJKK2Mr.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(238, 'Mary KayÂ® Brow Definer Pencil', 'marykay', 'mary39', 'Mquillaje', 'Las cejas bien arregladas le dan una imagen refinada al rostro y te hacen lucir mÃ¡s joven. Los lÃ¡pices definidores de cejas Mary KayÂ® son perfectos para rellenar y definir la cejas, y crean un efecto de elevaciÃ³n del ojo al instante.', 12, 0, 'mary38L7IRdH42yq.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(239, 'Mary Kay Lash & Brow Building SerumÂ®', 'marykay', 'mary40', 'Mquillaje', 'Mejora la apariencia general de las pestaÃ±as y deja las cejas con un aspecto mÃ¡s saludable. Observa resultados en sÃ³lo 30 dÃ­as.', 38, 0, 'mary40v9UVUoDkv0.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(240, 'Mary KayÂ® Mineral Powder Foundation', 'marykay', 'mary41', 'Mquillaje', 'Este polvo ligero que perfecciona la piel da la apariencia de que las lÃ­neas, arrugas y otras imperfecciones desaparecen. Ofrece la cobertura de una base con la comodidad de un polvo.', 22, 0, 'mary41uMkcXqJ9XK.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(241, 'Mary KayÂ® Translucent Loose Powder', 'marykay', 'mary42', 'Mquillaje', 'Translúcido. Ligero. Es el tono perfecto de cada mujer.', 18, 0, 'mary42ZLS5IukOgf.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(242, 'Mary KayÂ® Foundation Primer Sunscreen Broad Spectrum SPF 15*', 'marykay', 'mary43', 'Mquillaje', 'Este gel ligero se desliza fÃ¡cilmente, rellena las imperfecciones y se seca rÃ¡pidamente con un acabado mate para crear el lienzo perfecto para una aplicaciÃ³n de base de maquillaje impecable que intensifica sus beneficios y prolonga la duraciÃ³n del maquillaje.', 22, 0, 'mary43nXNUnJGjmK.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(243, 'Mary KayÂ® Liquid Eye Shadow', 'marykay', 'mary44', 'Mquillaje', ' Estas sombras lÃ­quidas, cremosas pero ligeras, saturan los pÃ¡rpados con tonos llenos de pigmento en una sola aplicaciÃ³n. Â¡Ilumina tu mirada con una aplicaciÃ³n de color estelar con estas sombras que incluyen un aplicador fÃ¡cil de usar para crear preciosos looks de ojos en un guiÃ±o!', 15, 0, 'mary44chbSczDNrK.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(244, 'Mary KayÂ® Eye Primer', 'marykay', 'mary45', 'Mquillaje', 'La base para sombras Mary KayÂ® es una fÃ³rmula a prueba de agua que se desliza suavemente para extender la vida de las sombras y prevenir que se agrieten o se emborronen.', 14, 0, 'mary45W2xwt3A83O.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(245, 'Tula Naturaleza', 'Tu si puedes', 'bolsos1', 'Bolsos', 'Bolsos Tu si puedes en diversos modelos', 17, 0, 'bolsos1sDnDJO4LIp.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(246, 'Tula Tecnologia', 'Tu si puedes', 'bolsos2', 'Bolsos', 'Bolsos Tu si puedes en diversos modelos', 17, 0, 'bolsos2jje5RXgDVT.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(247, 'Tula Zorrito', 'Tu si puedes', 'bolsos3', 'Bolsos', 'Bolsos Tu si puedes en diversos modelos', 17, 0, 'bolsos3AlWdq3Uvv5.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(248, 'Tula Dios', 'Tu si puedes', 'bolsos4', 'Bolsos', 'Bolsos Tu si puedes en diversos modelos', 17, 0, 'bolsos4hR1i0TI1AF.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(249, 'Agendas Dios', 'Tu si puedes', 'agendastsp1', 'Agendas', 'Agendas de diferentes modelos a tu disposicon', 9, 0, 'agendastsp1BhjWWuhFVb.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(250, 'Agendas Flores', 'Tu si puedes', 'agendastsp2', 'Agendas', 'Agendas de diferentes modelos a tu disposicon', 9, 0, 'agendastsp2I93INuF5mI.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(251, 'Agendas Naturaleza', 'Tu si puedes', 'agendastsp3', 'Agendas', 'Agendas de diferentes modelos a tu disposicon', 9, 0, 'agendastsp37qpirUJjkk.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(252, 'Agendas Osito', 'Tu si puedes', 'agendastsp4', 'Agendas', 'Bolsos Tu si puedes en diversos modelos', 9, 1, 'agendastsp4iWlpECfFWZ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(253, 'Agendas Tecnologia', 'Tu si puedes', 'agendastsp5', 'Agendas', 'Agendas de diferentes modelos a tu disposicon', 9, 0, 'agendastsp5IdoqJrHqBZ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(254, 'Agendas Zorrito', 'Tu si puedes', 'agendastsp6', 'Agendas', 'Agendas de diferentes modelos a tu disposicon', 9, 0, 'agendastsp6oN6MNQ8Lgt.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(255, 'Pin DÃ©jate Querer Es Gratis', 'Tu si puedes', 'pin1', 'Bolsos', 'Pines con diversas frases', 4, 0, 'pin16Vn7MNDyjg.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(256, 'Pin Dios Es Luz (MetÃ¡lico)', 'Tu si puedes', 'pin2', 'Bolsos', '', 4, 1, 'pin2xIgOvtLrLm.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(257, 'Polvo Exfoliante Mary Kay Naturally', 'marykay', 'naturally2', 'Mquillaje', 'Disfruta de una piel que se siente mas suave y tersa. Exfolia suavemente la piel y deja una apariencia saludable y sin que se sienta restragada<br><br><b>Los Productos de Mary Kay Naturally no contienen:</b><br><br>Parabenos<br>Ftalatos<br>Fragancias Sintenitas<br>Tintes Sinteticos<br>SLS/SLES<br><br>Este Exfoliante tampoco contiene silicona, aceite mineral o alcohol, ni cualquier ingrediente que haya sido modificado geneticamente.<br><br> 100% de origen natural', 0, 0, 'naturally2SfZHxLuiNM.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(258, 'Barra Humectante Mary Kay Naturally', 'marykay', 'naturally3', 'Mquillaje', 'Obten alivio inmediato para la resequedad con este balsamo totalmente portatil. Despues de usar este producto, la piel se siente nutrida, tersa y mas suave<br><br><b>Los Productos de Mary Kay Naturally no contienen:</b><br><br>Parabenos<br>Ftalatos<br>Fragancias Sintenitas<br>Tintes Sinteticos<br>SLS/SLES<br><br>Esta barra humectante tampoco contiene silicona, aceite mineral o alcohol, ni cualquier ingrediente que haya sido modificado geneticamente.<br><br> 100% de origen natural', 0, 0, 'naturally370BTBarbaD.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(259, 'Limpiador Purificante Mary Kay Naturally', 'marykay', 'naturally4', 'Mquillaje', 'Este cremoso limpiador ayuda a eliminar la mugre, deja la piel con una sensacion de frescura, hidratacion y comodidad despues de usarlo, la piel se ve saludable y se siente nutrida y tersa<br><br><b>Los Productos de Mary Kay Naturally no contienen:</b><br><br>Parabenos<br>Ftalatos<br>Fragancias Sintenitas<br>Tintes Sinteticos<br>SLS/SLES<br><br>Este Limpiador Purificante tampoco contiene silicona, aceite mineral o alcohol, ni cualquier ingrediente que haya sido modificado geneticamente.<br><br> 100% de origen natural', 0, 0, 'naturally4hhwKAfTmkH.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(260, 'Nombre Producto 1', 'marykay', 'undefined1', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined1uxpjy8mY07.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(261, 'Nombre Producto 2', 'marykay', 'undefined2', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined39twB1aQNZ1.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(262, 'Nombre Producto 3', 'marykay', 'undefined3', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined3RZzt1yEVhG.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(263, 'Nombre Producto 4', 'marykay', 'undefined4', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined4bOgytkIvJo.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(264, 'Nombre Producto 5', 'marykay', 'undefined5', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined5Pd1QcA2ZlL.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(265, 'Nombre Producto 6', 'marykay', 'undefined6', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined6R2NXiR0t7d.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(266, 'Nombre Producto 7', 'marykay', 'undefined7', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined7cWUMJOLOr2.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(267, 'Nombre Producto 8', 'marykay', 'undefined8', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined8i0G7zAh1ch.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(268, 'Nombre Producto 9', 'marykay', 'undefined9', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined9AbgirBnlcJ.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(269, 'Nombre Producto 10', 'marykay', 'undefined10', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined10JudfRrOG3x.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(270, 'Nombre Producto 11', 'marykay', 'undefined11', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined11djcL2RBzmy.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', ''),
(271, 'Nombre Producto 12', 'marykay', 'undefined12', 'Mquillaje', 'Descripcion de prueba', 0, 0, 'undefined127XM65moJnL.jpg', 'Venezuela', '2010-11-12', 'si', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `gerente` text COLLATE utf8_bin NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono_1` int(100) NOT NULL,
  `telefono_2` int(100) NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `direccion` varchar(300) COLLATE utf8_bin NOT NULL,
  `pais` text COLLATE utf8_bin NOT NULL,
  `link` varchar(100) COLLATE utf8_bin NOT NULL,
  `marcas_creadas` text COLLATE utf8_bin NOT NULL,
  `marcas_agregadas` text COLLATE utf8_bin NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_admin_tienda`
--

CREATE TABLE `usuarios_admin_tienda` (
  `id_usuario` int(11) NOT NULL,
  `tienda` text COLLATE utf8_bin NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `telefono` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_admin_tienda`
--
ALTER TABLE `usuarios_admin_tienda`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_admin_tienda`
--
ALTER TABLE `usuarios_admin_tienda`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
