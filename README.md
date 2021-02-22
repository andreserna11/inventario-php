# SCRIPT DE LA BASE DE DATOS

CREATE DATABASE inventario DEFAULT CHARACTER SET UTF8;
SET default_storage_engine = INNODB;

USE inventario;

Estructura de tabla para la tabla `dbo_categoria`

CREATE TABLE `dbo_categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

Estructura de tabla para la tabla `dbo_producto`

CREATE TABLE `dbo_producto` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `referencia` varchar(10) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_ultima_venta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `dbo_categoria`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dbo_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

ALTER TABLE `dbo_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `dbo_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `dbo_producto`
  ADD CONSTRAINT `dbo_producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `dbo_categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

INSERT INTO `dbo_categoria` (`id`, `categoria`) VALUES
(1, 'adulto'),
(2, 'niño');

INSERT INTO `dbo_producto` (`id`, `nombre_producto`, `referencia`, `precio`, `peso`, `id_categoria`, `stock`, `fecha_creacion`, `fecha_ultima_venta`) VALUES
(1, 'Termo', 'k11', 10000, 1, 1, 10, '2021-02-22', '2021-02-22 11:05:14'),
(2, 'Vaso', 's1', 2500, 100, 1, 10, '2021-02-22', '2021-02-22 11:47:14');
