-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2023 at 04:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruverlacami`
--

-- --------------------------------------------------------

--
-- Table structure for table `adquicicion`
--

CREATE TABLE `adquicicion` (
  `ID_Clien_Adq` int NOT NULL,
  `N_Venta_Adq` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `N_Categoria` int NOT NULL,
  `Nombre_catg` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `N_Producto_Categ` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `ID_Clien` int NOT NULL,
  `Nombre_Clien` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Apellido_Clien` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `ID_Emp_Clien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactocliente`
--

CREATE TABLE `contactocliente` (
  `Telefono_Clien` int NOT NULL,
  `ID_Clien_Cont` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactoempleados`
--

CREATE TABLE `contactoempleados` (
  `Correo_Emp` char(1) COLLATE utf8mb4_general_ci NOT NULL,
  `Telefono1_Emp` int NOT NULL,
  `Telefono2_Emp` int NOT NULL,
  `ID_Emp_Cont` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactoprovedor`
--

CREATE TABLE `contactoprovedor` (
  `Telefono_Prov` int NOT NULL,
  `Id_prov_Contact` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cuentabancariaempleado`
--

CREATE TABLE `cuentabancariaempleado` (
  `CuentaBan_Emp` int NOT NULL,
  `NombreBanc_Emp` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ID_Emp_Cuentban` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `descripcion`
--

CREATE TABLE `descripcion` (
  `Cantidad` int NOT NULL,
  `N_Factu_Des` int NOT NULL,
  `N_Produ_Des` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `direcionprovedor`
--

CREATE TABLE `direcionprovedor` (
  `N_iddireccion` int NOT NULL,
  `Calle_prov` int NOT NULL,
  `Carrera_Prov` int NOT NULL,
  `Barrio_Prov` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Id_prov_direc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `ID_Emp` int NOT NULL,
  `Nombre_Emp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Apellido_Emp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Correo_Emp` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `Contra_Emp` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `Cargo_Emp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Id_Usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`ID_Emp`, `Nombre_Emp`, `Apellido_Emp`, `Correo_Emp`, `Contra_Emp`, `Cargo_Emp`, `Id_Usuario`) VALUES
(326322, 'juan', 'restrepo', 'jua@gmai.com', '673922', 'empleado', 2211),
(546556, 'rodrigo', 'puentes', 'rpuet@gmail.com', '2728793', 'administrador', 1122);

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `N_Factura` int NOT NULL,
  `Fecha_Factura` date NOT NULL,
  `N_Venta_Fac` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gestioproducto`
--

CREATE TABLE `gestioproducto` (
  `Cantidad_Produ` int NOT NULL,
  `FechaEntre_Produ` date NOT NULL,
  `N_Produ_gestPro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidofactura`
--

CREATE TABLE `pedidofactura` (
  `N_Pedido_Factu` int NOT NULL,
  `Fecha_Pedido_Factu` date NOT NULL,
  `N_Factura_PediFac` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `N_Produ` int NOT NULL,
  `Nombre_Produ` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `PrecioUni_produ` int NOT NULL,
  `cantpro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`N_Produ`, `Nombre_Produ`, `PrecioUni_produ`, `cantpro`) VALUES
(36232, 'cebollaxkilo', 1800, 50),
(234543, 'zanahorias', 900, 80);

-- --------------------------------------------------------

--
-- Table structure for table `provedor`
--

CREATE TABLE `provedor` (
  `Id_prov` int NOT NULL,
  `Compañia_prov` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `N_Produ_Prove` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL,
  `tipos_usuario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `tipos_usuario`) VALUES
(1122, 'administrador '),
(2211, 'empleado');

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `NVenta` int NOT NULL,
  `NomProducto` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `CanProduct` int NOT NULL,
  `ValorVenta` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`NVenta`, `NomProducto`, `CanProduct`, `ValorVenta`) VALUES
(1313, 'chocolate', 10, 3242),
(14313, 'yuca', 40, 20000),
(23212, 'arroz', 323, 40000),
(121321, 'MANZANA', 10, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adquicicion`
--
ALTER TABLE `adquicicion`
  ADD KEY `ID_Clien_Adq` (`ID_Clien_Adq`),
  ADD KEY `N_Venta_Adq` (`N_Venta_Adq`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`N_Categoria`),
  ADD KEY `N_Producto_Categ` (`N_Producto_Categ`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Clien`),
  ADD KEY `ID_Emp_Clien` (`ID_Emp_Clien`);

--
-- Indexes for table `contactocliente`
--
ALTER TABLE `contactocliente`
  ADD KEY `ID_Clien_Cont` (`ID_Clien_Cont`);

--
-- Indexes for table `contactoempleados`
--
ALTER TABLE `contactoempleados`
  ADD PRIMARY KEY (`Correo_Emp`),
  ADD KEY `ID_Emp_Cont` (`ID_Emp_Cont`);

--
-- Indexes for table `contactoprovedor`
--
ALTER TABLE `contactoprovedor`
  ADD KEY `Id_prov_Contact` (`Id_prov_Contact`);

--
-- Indexes for table `cuentabancariaempleado`
--
ALTER TABLE `cuentabancariaempleado`
  ADD KEY `ID_Emp_Cuentban` (`ID_Emp_Cuentban`);

--
-- Indexes for table `descripcion`
--
ALTER TABLE `descripcion`
  ADD KEY `N_Factu_Des` (`N_Factu_Des`),
  ADD KEY `N_Produ_Des` (`N_Produ_Des`);

--
-- Indexes for table `direcionprovedor`
--
ALTER TABLE `direcionprovedor`
  ADD PRIMARY KEY (`N_iddireccion`),
  ADD KEY `Id_prov_direc` (`Id_prov_direc`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_Emp`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`N_Factura`),
  ADD KEY `N_Venta_Fac` (`N_Venta_Fac`);

--
-- Indexes for table `gestioproducto`
--
ALTER TABLE `gestioproducto`
  ADD KEY `N_Produ_gestPro` (`N_Produ_gestPro`);

--
-- Indexes for table `pedidofactura`
--
ALTER TABLE `pedidofactura`
  ADD PRIMARY KEY (`N_Pedido_Factu`),
  ADD KEY `N_Factura_PediFac` (`N_Factura_PediFac`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`N_Produ`);

--
-- Indexes for table `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`Id_prov`),
  ADD KEY `N_Produ_Prove` (`N_Produ_Prove`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`NVenta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12332782;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adquicicion`
--
ALTER TABLE `adquicicion`
  ADD CONSTRAINT `adquicicion_ibfk_1` FOREIGN KEY (`ID_Clien_Adq`) REFERENCES `cliente` (`ID_Clien`),
  ADD CONSTRAINT `adquicicion_ibfk_2` FOREIGN KEY (`N_Venta_Adq`) REFERENCES `venta` (`NVenta`);

--
-- Constraints for table `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`N_Producto_Categ`) REFERENCES `producto` (`N_Produ`);

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`ID_Emp_Clien`) REFERENCES `empleado` (`ID_Emp`);

--
-- Constraints for table `contactocliente`
--
ALTER TABLE `contactocliente`
  ADD CONSTRAINT `contactocliente_ibfk_1` FOREIGN KEY (`ID_Clien_Cont`) REFERENCES `cliente` (`ID_Clien`);

--
-- Constraints for table `contactoempleados`
--
ALTER TABLE `contactoempleados`
  ADD CONSTRAINT `contactoempleados_ibfk_1` FOREIGN KEY (`ID_Emp_Cont`) REFERENCES `empleado` (`ID_Emp`);

--
-- Constraints for table `contactoprovedor`
--
ALTER TABLE `contactoprovedor`
  ADD CONSTRAINT `contactoprovedor_ibfk_1` FOREIGN KEY (`Id_prov_Contact`) REFERENCES `provedor` (`Id_prov`);

--
-- Constraints for table `cuentabancariaempleado`
--
ALTER TABLE `cuentabancariaempleado`
  ADD CONSTRAINT `cuentabancariaempleado_ibfk_1` FOREIGN KEY (`ID_Emp_Cuentban`) REFERENCES `empleado` (`ID_Emp`);

--
-- Constraints for table `descripcion`
--
ALTER TABLE `descripcion`
  ADD CONSTRAINT `descripcion_ibfk_1` FOREIGN KEY (`N_Factu_Des`) REFERENCES `factura` (`N_Factura`),
  ADD CONSTRAINT `descripcion_ibfk_2` FOREIGN KEY (`N_Produ_Des`) REFERENCES `producto` (`N_Produ`);

--
-- Constraints for table `direcionprovedor`
--
ALTER TABLE `direcionprovedor`
  ADD CONSTRAINT `direcionprovedor_ibfk_1` FOREIGN KEY (`Id_prov_direc`) REFERENCES `provedor` (`Id_prov`);

--
-- Constraints for table `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`N_Venta_Fac`) REFERENCES `venta` (`NVenta`);

--
-- Constraints for table `gestioproducto`
--
ALTER TABLE `gestioproducto`
  ADD CONSTRAINT `gestioproducto_ibfk_1` FOREIGN KEY (`N_Produ_gestPro`) REFERENCES `producto` (`N_Produ`);

--
-- Constraints for table `pedidofactura`
--
ALTER TABLE `pedidofactura`
  ADD CONSTRAINT `pedidofactura_ibfk_1` FOREIGN KEY (`N_Factura_PediFac`) REFERENCES `factura` (`N_Factura`);

--
-- Constraints for table `provedor`
--
ALTER TABLE `provedor`
  ADD CONSTRAINT `provedor_ibfk_1` FOREIGN KEY (`N_Produ_Prove`) REFERENCES `producto` (`N_Produ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
