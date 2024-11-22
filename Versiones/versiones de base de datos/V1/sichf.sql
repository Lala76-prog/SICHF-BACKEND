-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2023 a las 21:31:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sichf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Id_Administrador` int(11) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Contraseña` varchar(70) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calzado`
--

CREATE TABLE `calzado` (
  `Id_calzado` int(11) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Talla` varchar(10) NOT NULL,
  `Tipo` varchar(15) NOT NULL,
  `Color` varchar(15) NOT NULL,
  `Composicion` varchar(50) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Detalles_Producto` varchar(100) NOT NULL,
  `Disponibilidad` varchar(15) NOT NULL,
  `Id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Id_carrito` int(11) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Fecha_Añadido` date NOT NULL,
  `Id_calzado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_Cliente` int(11) NOT NULL,
  `Nombre_cliente` varchar(70) NOT NULL,
  `Contraseña` varchar(70) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_Empleado` int(11) NOT NULL,
  `Nombre_empleado` varchar(70) NOT NULL,
  `Contraseña` varchar(70) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Id_factura` int(11) NOT NULL,
  `Id_pedido` int(11) NOT NULL,
  `Nombre_cliente` varchar(70) NOT NULL,
  `Nombre_empleado` varchar(70) NOT NULL,
  `fecha` date NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Metodo_Pago` varchar(20) NOT NULL,
  `Sub_total` int(10) NOT NULL,
  `Total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Id_pedido` int(11) NOT NULL,
  `Id_calzado` int(11) NOT NULL,
  `Id_Cliente` int(11) NOT NULL,
  `Nombre_cliente` varchar(70) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `fecha_max` date NOT NULL,
  `Metodo_Pago` varchar(20) NOT NULL,
  `Sub_total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_proveedor` int(11) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Telefono` int(15) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tipo_servicio` varchar(50) NOT NULL,
  `Detalles_Producto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Id_Administrador`);

--
-- Indices de la tabla `calzado`
--
ALTER TABLE `calzado`
  ADD PRIMARY KEY (`Id_calzado`),
  ADD KEY `Id_proveedor` (`Id_proveedor`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`Id_carrito`),
  ADD KEY `Id_calzado` (`Id_calzado`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Id_factura`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Id_pedido`),
  ADD KEY `Id_calzado` (`Id_calzado`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `Nombre_cliente` (`Nombre_cliente`),
  ADD KEY `cantidad` (`cantidad`),
  ADD KEY `Direccion` (`Direccion`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `Id_Administrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calzado`
--
ALTER TABLE `calzado`
  MODIFY `Id_calzado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `Id_carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_Empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_proveedor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
