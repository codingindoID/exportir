/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : exportir

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 25/05/2022 15:00:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` bigint NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori_created` datetime NULL DEFAULT current_timestamp,
  `icon_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'fashion', '2022-05-25 13:20:37', NULL);
INSERT INTO `kategori` VALUES (2, 'hobi', '2022-05-25 14:51:45', NULL);
INSERT INTO `kategori` VALUES (3, 'elektronik', '2022-05-25 14:52:00', NULL);
INSERT INTO `kategori` VALUES (4, 'gadget', '2022-05-25 14:52:04', NULL);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id_sub_kategori` bigint NOT NULL AUTO_INCREMENT,
  `id_kategori` bigint NULL DEFAULT NULL,
  `nama_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `menu_created` datetime NULL DEFAULT current_timestamp,
  `icon_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_sub_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 1, 'fahion pria', 'fashion_pria', '2022-05-25 13:21:13', NULL);
INSERT INTO `menu` VALUES (2, 2, 'peralatan olah raga', NULL, '2022-05-25 14:52:26', NULL);
INSERT INTO `menu` VALUES (3, 2, 'musik', NULL, '2022-05-25 14:52:28', NULL);
INSERT INTO `menu` VALUES (4, 3, 'TV', NULL, '2022-05-25 14:52:36', NULL);
INSERT INTO `menu` VALUES (5, 3, 'Kulkas', NULL, '2022-05-25 14:52:40', NULL);
INSERT INTO `menu` VALUES (6, 4, 'HP', NULL, '2022-05-25 14:52:52', NULL);

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `id_produk` bigint NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_penjual` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi_produk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `harga` int NULL DEFAULT NULL,
  `promo` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'N',
  `id_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (1, 'tes produk', '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aliquid placeat mollitia? Doloremque provident autem sint, dolorem hic corrupti iure.', 100000, 'N', '1', 'produk1.PNG');
INSERT INTO `produk` VALUES (2, 'Baju Pria', '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aliquid placeat mollitia? Doloremque provident autem sint, dolorem hic corrupti iure.', 250000, 'N', '1', 'istockphoto-1361827616-170667a.jpg');

SET FOREIGN_KEY_CHECKS = 1;
