-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2024 a las 01:00:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Id_Administrador`, `Nombre`, `Contraseña`, `Email`, `Telefono`) VALUES
(1, 'Juan Pérez', 'admin123', 'juanperez@correo.com', 123456789),
(2, 'Laura Gómez', 'admin456', 'lauragomez@correo.com', 987654321),
(3, 'Pedro Martínez', 'admin789', 'pedromartinez@correo.com', 1122334455),
(4, 'Sofía Ramírez', 'admin654', 'sofiaramirez@correo.com', 2147483647),
(5, 'Carlos López', 'admin852', 'carloslopez@correo.com', 2147483647),
(6, 'Luis Torres', 'admin963', 'luistorres@correo.com', 2147483647),
(7, 'Ana Gutiérrez', 'admin741', 'anagutierrez@correo.com', 2147483647),
(8, 'José Hernández', 'admin369', 'josehernandez@correo.com', 1112223344),
(9, 'Gabriela Sánchez', 'admin159', 'gabrielasanchez@correo.com', 2147483647),
(10, 'Mariana Silva', 'admin753', 'marianasilva@correo.com', 2147483647),
(11, 'Felipe Ortega', 'admin951', 'felipeortega@correo.com', 2147483647),
(12, 'Nicolás Castillo', 'admin4567', 'nicolascastillo@correo.com', 2147483647),
(13, 'Patricia Núñez', 'admin2345', 'patricianunez@correo.com', 2147483647),
(14, 'Jorge Arias', 'admin876', 'jorgearias@correo.com', 2147483647),
(15, 'Claudia Ríos', 'admin129', 'claudiarios@correo.com', 2147483647),
(16, 'Elena Castillo', 'admin9632', 'elenacastillo@correo.com', 2147483647),
(17, 'Tomás Pérez', 'admin7534', 'tomasperez@correo.com', 2147483647),
(18, 'Andrés Molina', 'admin4321', 'andresmolina@correo.com', 2147483647),
(19, 'Camila Moreno', 'admin5678', 'camilamoreno@correo.com', 2147483647),
(20, 'Valeria Roldán', 'admin890', 'valeriaroldan@correo.com', 1119998888),
(21, 'Santiago Bravo', 'admin3210', 'santiago.bravo@correo.com', 2147483647);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calzado`
--

INSERT INTO `calzado` (`Id_calzado`, `Marca`, `Talla`, `Tipo`, `Color`, `Composicion`, `Precio`, `Detalles_Producto`, `Disponibilidad`, `Id_proveedor`) VALUES
(1, 'Nike', '42', 'Deportivo', 'Negro', 'Cuero sintético', 150000, 'Zapatillas deportivas negras', 'Disponible', 1),
(2, 'Adidas', '40', 'Deportivo', 'Blanco', 'Textil', 130000, 'Zapatillas blancas con rayas', 'Disponible', 2),
(3, 'Puma', '39', 'Casual', 'Azul', 'Cuero', 120000, 'Zapatos casuales azules', 'Disponible', 3),
(4, 'Reebok', '41', 'Running', 'Rojo', 'Textil', 110000, 'Zapatillas para correr rojas', 'Disponible', 4),
(5, 'Under Armour', '38', 'Deportivo', 'Gris', 'Sintético', 140000, 'Zapatillas grises', 'Disponible', 5),
(6, 'New Balance', '43', 'Deportivo', 'Negro', 'Malla', 125000, 'Zapatillas para entrenamiento', 'Disponible', 6),
(7, 'Converse', '42', 'Casual', 'Blanco', 'Lona', 90000, 'Zapatillas de lona blanca', 'Disponible', 7),
(8, 'Vans', '39', 'Skate', 'Negro', 'Gamuza', 110000, 'Zapatos de skate negros', 'Disponible', 8),
(9, 'Skechers', '40', 'Casual', 'Azul', 'Malla', 100000, 'Zapatillas casuales azul marino', 'Disponible', 9),
(10, 'Asics', '41', 'Running', 'Verde', 'Textil', 135000, 'Zapatillas para correr verdes', 'Disponible', 10),
(11, 'Fila', '42', 'Casual', 'Negro', 'Sintético', 80000, 'Zapatos casuales negros', 'Disponible', 11),
(12, 'Timberland', '44', 'Botas', 'Marrón', 'Cuero', 180000, 'Botas marrones de cuero', 'Disponible', 12),
(13, 'Dr. Martens', '43', 'Botas', 'Negro', 'Cuero', 190000, 'Botas negras de cuero', 'Disponible', 13),
(14, 'Jordan', '42', 'Deportivo', 'Rojo', 'Cuero', 250000, 'Zapatillas Jordan rojas', 'Disponible', 14),
(15, 'Salomon', '40', 'Montaña', 'Gris', 'Textil', 200000, 'Zapatos para montaña grises', 'Disponible', 15),
(16, 'Merrell', '41', 'Senderismo', 'Marrón', 'Textil', 175000, 'Zapatas de senderismo marrón', 'Disponible', 16),
(17, 'Crocs', '38', 'Casual', 'Verde', 'Sintético', 70000, 'Zapatillas Crocs verdes', 'Disponible', 17),
(18, 'Birkenstock', '39', 'Sandalias', 'Marrón', 'Sintético', 85000, 'Sandalias marrón', 'Disponible', 18),
(19, 'Toms', '40', 'Alpargatas', 'Beige', 'Lona', 60000, 'Alpargatas beige', 'Disponible', 19),
(20, 'North Face', '41', 'Montaña', 'Negro', 'Textil', 210000, 'Botas para montaña negras', 'Disponible', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Id_carrito` int(11) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Fecha_Añadido` date NOT NULL,
  `Id_calzado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`Id_carrito`, `Cantidad`, `Fecha_Añadido`, `Id_calzado`) VALUES
(12, 112, '2024-10-02', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `Nombre_cliente`, `Contraseña`, `Direccion`, `Email`, `Telefono`) VALUES
(1, 'Carlos Muñoz', 'cliente123', 'Calle 1 #10-20', 'carlosmunoz@correo.com', 1234567890),
(2, 'Daniela Ruiz', 'cliente456', 'Calle 2 #20-30', 'danielaruiz@correo.com', 2147483647),
(3, 'Andrés Suárez', 'cliente789', 'Calle 3 #30-40', 'andressuarez@correo.com', 1122334455),
(4, 'Laura Vera', 'cliente654', 'Calle 4 #40-50', 'lauravera@correo.com', 2147483647),
(5, 'Luis Fernández', 'cliente852', 'Calle 5 #50-60', 'luisfernandez@correo.com', 2147483647),
(6, 'Marcela Díaz', 'cliente963', 'Calle 6 #60-70', 'marceladiaz@correo.com', 2147483647),
(7, 'Camila Ortiz', 'cliente741', 'Calle 7 #70-80', 'camilaortiz@correo.com', 2147483647),
(8, 'José Rojas', 'cliente369', 'Calle 8 #80-90', 'joserojas@correo.com', 1112223344),
(9, 'Ana Castillo', 'cliente159', 'Calle 9 #90-100', 'anacastillo@correo.com', 2147483647),
(10, 'Miguel Gutiérrez', 'cliente753', 'Calle 10 #100-110', 'miguelgutierrez@correo.com', 2147483647),
(11, 'Gabriela Montoya', 'cliente951', 'Calle 11 #110-120', 'gabrielamontoya@correo.com', 2147483647),
(12, 'Tomás Gil', 'cliente4567', 'Calle 12 #120-130', 'tomasgil@correo.com', 2147483647),
(13, 'Jorge Rodríguez', 'cliente2345', 'Calle 13 #130-140', 'jorgerodriguez@correo.com', 2147483647),
(14, 'Sofía Álvarez', 'cliente876', 'Calle 14 #140-150', 'sofiaalvarez@correo.com', 2147483647),
(15, 'Valentina Gómez', 'cliente129', 'Calle 15 #150-160', 'valentinagomez@correo.com', 2147483647),
(16, 'Esteban Salazar', 'cliente9632', 'Calle 16 #160-170', 'estebansalazar@correo.com', 2147483647),
(17, 'María Ramos', 'cliente7534', 'Calle 17 #170-180', 'mariaramos@correo.com', 2147483647),
(18, 'Ricardo Torres', 'cliente4321', 'Calle 18 #180-190', 'ricardotorres@correo.com', 2147483647),
(19, 'Natalia Vargas', 'cliente5678', 'Calle 19 #190-200', 'nataliavargas@correo.com', 2147483647),
(20, 'Felipe Moreno', 'cliente890', 'Calle 20 #200-210', 'felipemoreno@correo.com', 1119998888),
(21, 'Paula Torres', 'cliente6543', 'Calle 21 #210-220', 'paulatorres@correo.com', 2147483647);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `Nombre_empleado`, `Contraseña`, `Email`, `Direccion`, `Telefono`) VALUES
(1, 'Marta Cruz', 'empleado123', 'martac@example.com', 'Calle 8 #34-22', 2147483647),
(2, 'Jorge Silva', 'empleado456', 'jorges@example.com', 'Carrera 21 #13-10', 2147483647),
(3, 'Luis Herrera', 'empleado789', 'luish@example.com', 'Calle 60 #10-19', 2147483647),
(4, 'Camila Ríos', 'empleado321', 'camilari@example.com', 'Carrera 40 #30-45', 2147483647),
(5, 'Andrés García', 'empleado654', 'andresg@example.com', 'Avenida 15 #15-10', 2147483647),
(6, 'Natalia Pérez', 'empleado852', 'nataliap@example.com', 'Calle 22 #25-35', 2147483647),
(7, 'Sergio López', 'empleado963', 'sergiol@example.com', 'Carrera 33 #35-45', 2147483647),
(8, 'Lucía Martínez', 'empleado741', 'luciam@example.com', 'Calle 44 #45-55', 2147483647),
(9, 'Diego Fernández', 'empleado369', 'diegof@example.com', 'Avenida 55 #55-65', 2147483647),
(10, 'Valeria Gómez', 'empleado159', 'valeriag@example.com', 'Calle 66 #65-75', 2147483647),
(11, 'Fernando Ruiz', 'empleado753', 'fernandor@example.com', 'Carrera 77 #75-85', 2147483647),
(12, 'Carla Díaz', 'empleado951', 'carlad@example.com', 'Calle 88 #85-95', 2147483647),
(13, 'Óscar Morales', 'empleado4567', 'oscarm@example.com', 'Avenida 99 #95-105', 2147483647),
(14, 'Elena Torres', 'empleado2345', 'elenat@example.com', 'Calle 100 #105-115', 2147483647),
(15, 'Ricardo Soto', 'empleado876', 'ricardos@example.com', 'Carrera 111 #115-125', 2147483647),
(16, 'Paola Vargas', 'empleado129', 'paolav@example.com', 'Calle 122 #125-135', 2147483647),
(17, 'Gustavo Ramírez', 'empleado9632', 'gustavor@example.com', 'Avenida 133 #135-145', 2147483647),
(18, 'Mónica Herrera', 'empleado7534', 'monicah@example.com', 'Calle 144 #145-155', 2147483647),
(19, 'Andrés López', 'empleado4321', 'andresl@example.com', 'Carrera 155 #155-165', 2147483647),
(20, 'Silvia Martínez', 'empleado5678', 'silviam@example.com', 'Calle 166 #165-175', 2147483647),
(21, 'Héctor González', 'empleado890', 'hectorg@example.com', 'Avenida 177 #175-185', 2147483647);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`Id_pedido`, `Id_calzado`, `Id_Cliente`, `Nombre_cliente`, `cantidad`, `Direccion`, `fecha_max`, `Metodo_Pago`, `Sub_total`) VALUES
(1, 1, 1, 'Carlos Muñoz', 2, 'Calle 1 #10-20', '2024-02-15', 'Tarjeta de crédito', 300000),
(2, 2, 2, 'Daniela Ruiz', 1, 'Calle 2 #20-30', '2024-02-16', 'Efectivo', 130000),
(3, 3, 3, 'Andrés Suárez', 3, 'Calle 3 #30-40', '2024-02-17', 'Transferencia', 360000),
(4, 4, 4, 'Laura Vera', 1, 'Calle 4 #40-50', '2024-02-18', 'Tarjeta de crédito', 110000),
(5, 5, 5, 'Luis Fernández', 4, 'Calle 5 #50-60', '2024-02-19', 'Efectivo', 560000),
(6, 6, 6, 'Marcela Díaz', 2, 'Calle 6 #60-70', '2024-02-20', 'Transferencia', 350000),
(7, 7, 7, 'Camila Ortiz', 3, 'Calle 7 #70-80', '2024-02-21', 'Tarjeta de crédito', 270000),
(8, 8, 8, 'José Rojas', 1, 'Calle 8 #80-90', '2024-02-22', 'Efectivo', 110000),
(9, 9, 9, 'Ana Castillo', 2, 'Calle 9 #90-100', '2024-02-23', 'Transferencia', 140000),
(10, 10, 10, 'Miguel Gutiérrez', 4, 'Calle 10 #100-110', '2024-02-24', 'Tarjeta de crédito', 500000),
(11, 11, 11, 'Gabriela Montoya', 1, 'Calle 11 #110-120', '2024-02-25', 'Efectivo', 90000),
(12, 12, 12, 'Tomás Gil', 3, 'Calle 12 #120-130', '2024-02-26', 'Transferencia', 270000),
(13, 13, 13, 'Jorge Rodríguez', 2, 'Calle 13 #130-140', '2024-02-27', 'Tarjeta de crédito', 240000),
(14, 14, 14, 'Sofía Álvarez', 4, 'Calle 14 #140-150', '2024-02-28', 'Efectivo', 440000),
(15, 15, 15, 'Valentina Gómez', 1, 'Calle 15 #150-160', '2024-02-29', 'Transferencia', 85000),
(16, 16, 16, 'Esteban Salazar', 2, 'Calle 16 #160-170', '2024-03-01', 'Tarjeta de crédito', 140000),
(17, 17, 17, 'María Ramos', 3, 'Calle 17 #170-180', '2024-03-02', 'Efectivo', 270000),
(18, 18, 18, 'Ricardo Torres', 1, 'Calle 18 #180-190', '2024-03-03', 'Transferencia', 190000),
(19, 19, 19, 'Natalia Vargas', 4, 'Calle 19 #190-200', '2024-03-04', 'Tarjeta de crédito', 280000),
(20, 20, 20, 'Felipe Moreno', 2, 'Calle 20 #200-210', '2024-03-05', 'Efectivo', 220000),
(21, 21, 21, 'Paula Torres', 3, 'Calle 21 #210-220', '2024-03-06', 'Transferencia', 330000),
(22, 22, 1, 'Carlos Muñoz', 1, 'Calle 1 #10-20', '2024-03-07', 'Tarjeta de crédito', 150000);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id_proveedor`, `Nombre`, `Telefono`, `Direccion`, `Email`, `Tipo_servicio`, `Detalles_Producto`) VALUES
(1, 'Proveedor A', 2147483647, 'Calle 3 #15-67', 'proveedora@example.com', 'Calzado deportivo', 'Zapatillas Nike'),
(2, 'Proveedor B', 2147483647, 'Carrera 10 #12-34', 'proveedorb@example.com', 'Calzado casual', 'Zapatos casuales Adidas'),
(3, 'Proveedor C', 2147483647, 'Avenida 8 #30-25', 'proveedorc@example.com', 'Calzado de cuero', 'Zapatos de cuero Puma'),
(4, 'Proveedor D', 2147483647, 'Calle 5 #22-13', 'proveedord@example.com', 'Calzado sintético', 'Zapatillas sintéticas Reebok'),
(5, 'Proveedor E', 2147483647, 'Carrera 9 #45-50', 'proveedore@example.com', 'Calzado formal', 'Zapatos formales New Balance'),
(6, 'Proveedor F', 2147483647, 'Avenida 12 #50-60', 'proveedorf@example.com', 'Calzado deportivo', 'Zapatillas Under Armour'),
(7, 'Proveedor G', 2147483647, 'Calle 7 #14-28', 'proveedorg@example.com', 'Calzado casual', 'Zapatos Converse blancos'),
(8, 'Proveedor H', 2147483647, 'Carrera 18 #33-44', 'proveedorh@example.com', 'Calzado skate', 'Zapatos Vans negros'),
(9, 'Proveedor I', 2147483647, 'Avenida 25 #60-70', 'proveedori@example.com', 'Calzado casual', 'Zapatillas Skechers azul marino'),
(10, 'Proveedor J', 2147483647, 'Calle 20 #25-35', 'proveedorj@example.com', 'Calzado running', 'Zapatillas Asics verdes'),
(11, 'Proveedor K', 2147483647, 'Carrera 5 #10-20', 'proveedork@example.com', 'Calzado casual', 'Zapatos Fila negros'),
(12, 'Proveedor L', 2147483647, 'Avenida 30 #40-50', 'proveedorl@example.com', 'Calzado botas', 'Botas Timberland marrones'),
(13, 'Proveedor M', 2147483647, 'Calle 12 #22-32', 'proveedorm@example.com', 'Calzado botas', 'Botas Dr. Martens negras'),
(14, 'Proveedor N', 2147483647, 'Carrera 22 #35-45', 'proveedorn@example.com', 'Calzado deportivo', 'Zapatillas Jordan rojas'),
(15, 'Proveedor O', 2147483647, 'Avenida 40 #50-60', 'proveedoro@example.com', 'Calzado montaña', 'Zapatos Salomon grises'),
(16, 'Proveedor P', 2147483647, 'Calle 25 #30-40', 'proveedorp@example.com', 'Calzado senderismo', 'Zapatos Merrell marrones'),
(17, 'Proveedor Q', 2147483647, 'Carrera 35 #45-55', 'proveedorq@example.com', 'Calzado casual', 'Crocs verdes'),
(18, 'Proveedor R', 2147483647, 'Avenida 50 #60-70', 'proveedorr@example.com', 'Calzado sandalias', 'Sandalias Birkenstock marrón'),
(19, 'Proveedor S', 2147483647, 'Calle 40 #50-60', 'proveedors@example.com', 'Calzado alpargatas', 'Alpargatas Toms beige'),
(20, 'Proveedor T', 2147483647, 'Carrera 60 #70-80', 'proveedort@example.com', 'Calzado montaña', 'Botas North Face negras');

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
  MODIFY `Id_Administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `calzado`
--
ALTER TABLE `calzado`
  MODIFY `Id_calzado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `Id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
