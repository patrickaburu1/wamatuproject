-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `contributions`;
CREATE TABLE `contributions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tranaction_id` int(11) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `shares_contribution_type` bigint(20) DEFAULT '0',
  `loan_payment_contribution_type` varchar(255) NOT NULL DEFAULT '0',
  `Miscellaneous_contribution_type` varchar(255) NOT NULL DEFAULT '0',
  `merry_go_round_contribution_type` varchar(255) NOT NULL DEFAULT '0',
  `benevolent_contribution_type` varchar(255) NOT NULL DEFAULT '0',
  `recept_number` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL DEFAULT '0',
  `recept_meme` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0' COMMENT '0 pending, 1 approved, regected',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `tranaction_id` (`tranaction_id`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `contributions_ibfk_1` FOREIGN KEY (`tranaction_id`) REFERENCES `transactions_logs` (`id`) ON DELETE NO ACTION,
  CONSTRAINT `contributions_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION,
  CONSTRAINT `contributions_ibfk_3` FOREIGN KEY (`tranaction_id`) REFERENCES `transactions_logs` (`id`) ON DELETE NO ACTION,
  CONSTRAINT `contributions_ibfk_4` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `contributions` (`id`, `tranaction_id`, `member_id`, `shares_contribution_type`, `loan_payment_contribution_type`, `Miscellaneous_contribution_type`, `merry_go_round_contribution_type`, `benevolent_contribution_type`, `recept_number`, `amount`, `recept_meme`, `status`, `date`) VALUES
(20,	1,	1,	200,	'25000',	'2500',	'055521',	'458458',	'test',	'450000',	'test',	'1',	'2018-07-16 14:49:32'),
(21,	1,	1,	887,	'877',	'878',	'878',	'878',	'test',	'2323',	'test',	'0',	'2018-07-16 14:57:28'),
(22,	1,	1,	23232,	'1232',	'3232',	'3232',	'323',	'test',	'600',	'test',	'2',	'2018-07-17 15:45:27'),
(23,	1,	1,	232,	'313',	'3232',	'323',	'332',	'test',	'13131',	'test',	'0',	'2018-07-18 13:27:52'),
(24,	1,	1,	200,	'200',	'200',	'200',	'200',	'test',	'1000',	'test',	'0',	'2018-07-18 13:28:50'),
(25,	1,	1,	1000,	'1000',	'1000',	'1000',	'1000',	'test',	'5000',	'test',	'0',	'2018-07-18 13:35:41'),
(26,	1,	1,	88,	'88',	'66',	'99',	'56',	'test',	'500',	'test',	'1',	'2018-07-19 19:10:11'),
(27,	1,	1,	878,	'787',	'87',	'78',	'78',	'test',	'87',	'test',	'0',	'2018-08-07 19:11:48'),
(28,	1,	1,	343,	'34',	'323',	'43',	'322',	'test',	'3343',	'1533669336.jpg',	'0',	'2018-08-07 19:15:36'),
(29,	1,	1,	878,	'78',	'787',	'87',	'87',	'test',	'87',	'http://localhost/laravel/wamatu1533669788.png',	'0',	'2018-08-07 19:23:08'),
(30,	1,	1,	98,	'89',	'89',	'898',	'89',	'test',	'9',	'http://localhost/laravel/wamatu/public/1533669866.jpg',	'0',	'2018-08-07 19:24:26'),
(31,	1,	1,	878,	'787',	'87',	'87',	'87',	'test',	'87',	'http://localhost/laravel/wamatu/public/images/1533669985.pdf',	'0',	'2018-08-07 19:26:25'),
(32,	1,	1,	878,	'787',	'8',	'787',	'87',	'test',	'87',	'http://localhost/laravel/wamatu/public/images/1533670501.pdf',	'0',	'2018-08-07 19:35:01');

DROP TABLE IF EXISTS `contribution_types`;
CREATE TABLE `contribution_types` (
  `contibution_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `contibution_type_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contibution_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `loans`;
CREATE TABLE `loans` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `loan_amount` double NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `loan_type` varchar(50) NOT NULL COMMENT 'emergency, lonterm',
  `repayments_period` int(11) DEFAULT NULL COMMENT 'months',
  `pay_date` varchar(255) DEFAULT NULL COMMENT 'pay by this date',
  `monthly_installment` int(11) DEFAULT NULL COMMENT 'monthly installment',
  `interest_rate` double DEFAULT '12' COMMENT 'in %',
  `approval_status` int(11) DEFAULT '0' COMMENT '0 pending, 1 approved, 2 rejected',
  `repayment_status` int(11) NOT NULL DEFAULT '0' COMMENT '0 unpaid,  1 paid fully',
  `gurantors` text,
  `note` varchar(255) DEFAULT NULL COMMENT 'note if rejected',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `loans` (`id`, `loan_amount`, `member_id`, `loan_type`, `repayments_period`, `pay_date`, `monthly_installment`, `interest_rate`, `approval_status`, `repayment_status`, `gurantors`, `note`, `created`) VALUES
(1,	2000,	1,	'Emergency',	12,	'21/07/2019',	100,	10,	0,	0,	'',	NULL,	'2018-08-04 11:00:00'),
(2,	200000,	1,	'loan',	12,	'2019/07/23',	2000,	12,	1,	0,	'21',	NULL,	'2018-08-04 12:10:04'),
(3,	12,	1,	'loan',	12,	'2019/07/23',	21,	12,	0,	0,	'212',	NULL,	'2018-08-04 12:19:28'),
(4,	87,	1,	'loan',	12,	'2019/07/23',	87,	12,	0,	0,	'87',	NULL,	'2018-08-04 12:48:38'),
(5,	9898,	1,	'loan',	12,	'2019/07/23',	898,	12,	0,	0,	'989',	NULL,	'2018-08-04 12:49:01'),
(6,	900,	1,	'loan',	12,	'2019/07/23',	0,	12,	0,	0,	'00',	NULL,	'2018-08-06 11:47:35'),
(7,	2000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	NULL,	NULL,	'2018-08-07 07:40:03'),
(8,	2000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	NULL,	NULL,	'2018-08-07 07:40:27'),
(9,	2000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	NULL,	NULL,	'2018-08-07 07:41:23'),
(10,	232,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	NULL,	NULL,	'2018-08-07 07:41:33'),
(11,	23,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	NULL,	NULL,	'2018-08-07 07:42:10'),
(12,	32,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	NULL,	NULL,	'2018-08-07 07:43:11'),
(13,	400000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	'34,66',	NULL,	'2018-08-07 18:27:39'),
(14,	400000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	'{\"id\":2,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"e\",\"phone_number\":\"098765\",\"email_address\":\"maureen@wajeemaracamp.co.ke\",\"dob\":\"2018-06-28\",\"next_of_kin_name\":\"maureen murrey d\",\"next_of_kin_id\":\"6789\",\"next_of_kin_phone\":\"0712121212\",\"next_of_kin_email\":\"maureen@wajeemaracamp.co.ke\",\"Role\":0,\"password\":\"joshua\",\"available_amount\":0,\"loan_balance\":0,\"active\":\"1\",\"registered_by\":\"\",\"date_created\":\"2018-06-19 17:46:45\"}',	NULL,	'2018-08-09 05:37:01'),
(15,	400000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	'{\"id\":2,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"e\",\"phone_number\":\"098765\",\"email_address\":\"maureen@wajeemaracamp.co.ke\",\"dob\":\"2018-06-28\",\"next_of_kin_name\":\"maureen murrey d\",\"next_of_kin_id\":\"6789\",\"next_of_kin_phone\":\"0712121212\",\"next_of_kin_email\":\"maureen@wajeemaracamp.co.ke\",\"Role\":0,\"password\":\"joshua\",\"available_amount\":0,\"loan_balance\":0,\"active\":\"1\",\"registered_by\":\"\",\"date_created\":\"2018-06-19 17:46:45\"}',	NULL,	'2018-08-09 05:45:16'),
(16,	400000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	'[{\"id\":2,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"e\",\"phone_number\":\"098765\",\"email_address\":\"maureen@wajeemaracamp.co.ke\",\"dob\":\"2018-06-28\",\"next_of_kin_name\":\"maureen murrey d\",\"next_of_kin_id\":\"6789\",\"next_of_kin_phone\":\"0712121212\",\"next_of_kin_email\":\"maureen@wajeemaracamp.co.ke\",\"Role\":0,\"password\":\"joshua\",\"available_amount\":0,\"loan_balance\":0,\"active\":\"1\",\"registered_by\":\"\",\"date_created\":\"2018-06-19 17:46:45\"}{\"id\":1,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"30030969\",\"phone_number\":\"098765\",\"email_address\":\"maureen@wajeemaracamp.co.ke\",\"dob\":\"2018-06-28\",\"next_of_kin_name\":\"maureen murrey d\",\"next_of_kin_id\":\"6789\",\"next_of_kin_phone\":\"0712121212\",\"next_of_kin_email\":\"maureen@wajeemaracamp.co.ke\",\"Role\":1,\"password\":\"joshua\",\"available_amount\":300000,\"loan_balance\":0,\"active\":\"1\",\"registered_by\":\"\",\"date_created\":\"2018-06-19 17:40:09\"}{\"id\":3,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"e\",\"phone_number\":\"098765\",\"email_address\":\"maureen@wajeemaracamp.co.ke\",\"dob\":\"2018-06-28\",\"next_of_kin_name\":\"maureen murrey d\",\"next_of_kin_id\":\"6789\",\"next_of_kin_phone\":\"0712121212\",\"next_of_kin_email\":\"maureen@wajeemaracamp.co.ke\",\"Role\":0,\"password\":\"joshua\",\"available_amount\":0,\"loan_balance\":0,\"active\":\"\",\"registered_by\":\"\",\"date_created\":\"2018-06-19 17:49:12\"}]',	NULL,	'2018-08-09 05:47:22'),
(17,	400000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	'[{\"id\":2,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"e\",\"phone_number\":\"098765\",\"email_address\":\"maureen@wajeemaracamp.co.ke\",\"dob\":\"2018-06-28\",\"next_of_kin_name\":\"maureen murrey d\",\"next_of_kin_id\":\"6789\",\"next_of_kin_phone\":\"0712121212\",\"next_of_kin_email\":\"maureen@wajeemaracamp.co.ke\",\"Role\":0,\"password\":\"joshua\",\"available_amount\":0,\"loan_balance\":0,\"active\":\"1\",\"registered_by\":\"\",\"date_created\":\"2018-06-19 17:46:45\"}{\"id\":3,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"e\",\"phone_number\":\"098765\",\"email_address\":\"maureen@wajeemaracamp.co.ke\",\"dob\":\"2018-06-28\",\"next_of_kin_name\":\"maureen murrey d\",\"next_of_kin_id\":\"6789\",\"next_of_kin_phone\":\"0712121212\",\"next_of_kin_email\":\"maureen@wajeemaracamp.co.ke\",\"Role\":0,\"password\":\"joshua\",\"available_amount\":0,\"loan_balance\":0,\"active\":\"\",\"registered_by\":\"\",\"date_created\":\"2018-06-19 17:49:12\"}]',	NULL,	'2018-08-09 05:48:11'),
(18,	400000,	1,	'loan',	NULL,	NULL,	NULL,	12,	0,	0,	'[{\"id\":2,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"e\",\"phone_number\":\"098765\",\"email_address\":\"maureen@wajeemaracamp.co.ke\",\"dob\":\"2018-06-28\",\"next_of_kin_name\":\"maureen murrey d\",\"next_of_kin_id\":\"6789\",\"next_of_kin_phone\":\"0712121212\",\"next_of_kin_email\":\"maureen@wajeemaracamp.co.ke\",\"Role\":0,\"password\":\"joshua\",\"available_amount\":0,\"loan_balance\":0,\"active\":\"1\",\"registered_by\":\"\",\"date_created\":\"2018-06-19 17:46:45\"},{\"id\":3,\"full_name\":\"joshua joshua muoki\",\"id_number\":\"e\",\"phone_number\":\"098765\",\"available_amount\":0,\"status\":\"\",\"loan_balance\":0,\"amount_guaranteed\":\"2\"},]',	NULL,	'2018-08-09 06:08:32');

DROP TABLE IF EXISTS `loan_repayments`;
CREATE TABLE `loan_repayments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `loan_id` bigint(20) NOT NULL,
  `transaction_id` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `balance_before` int(11) NOT NULL,
  `balance_after` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `loan_id` (`loan_id`),
  CONSTRAINT `loan_repayments_ibfk_1` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `loan_repayments` (`id`, `member_id`, `loan_id`, `transaction_id`, `amount`, `balance_before`, `balance_after`, `created`) VALUES
(1,	1,	1,	1,	2000,	6000,	4000,	'2018-08-04 11:22:05');

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `next_of_kin_name` varchar(255) NOT NULL,
  `next_of_kin_id` varchar(255) NOT NULL,
  `next_of_kin_phone` varchar(255) NOT NULL,
  `next_of_kin_email` varchar(255) NOT NULL,
  `Role` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `available_amount` double NOT NULL,
  `loan_balance` double NOT NULL,
  `active` varchar(255) NOT NULL COMMENT '0 deactivated 1 active',
  `registered_by` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `members` (`id`, `full_name`, `id_number`, `phone_number`, `email_address`, `dob`, `next_of_kin_name`, `next_of_kin_id`, `next_of_kin_phone`, `next_of_kin_email`, `Role`, `password`, `available_amount`, `loan_balance`, `active`, `registered_by`, `date_created`) VALUES
(1,	'joshua joshua muoki',	'30030',	'098765',	'maureen@wajeemaracamp.co.ke',	'2018-06-28',	'maureen murrey d',	'6789',	'0712121212',	'maureen@wajeemaracamp.co.ke',	1,	'joshua',	300000,	0,	'1',	'',	'2018-06-19 14:40:09'),
(2,	'joshua joshua muoki',	'3010',	'098765',	'maureen@wajeemaracamp.co.ke',	'2018-06-28',	'maureen murrey d',	'6789',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'joshua',	0,	0,	'1',	'',	'2018-06-19 14:46:45'),
(3,	'joshua joshua muoki',	'1234',	'0710446176',	'maureen@wajeemaracamp.co.ke',	'2018-06-28',	'maureen murrey d',	'6789',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'joshua',	0,	0,	'1',	'',	'2018-06-19 14:49:12'),
(4,	'joshua joshua muoki',	'e',	'098765',	'kiseej@gmail.com',	'2018-06-28',	'maureen murrey d',	'6789',	'0712121212',	'kiseej@gmail.com',	0,	'joshua',	0,	0,	'',	'',	'2018-06-19 14:52:45'),
(5,	'maureen maureen f',	'e',	'712121212',	'maureen@wajeemaracamp.co.ke',	'2018-06-30',	'maureen murrey d',	'd',	'0712121212',	'maureen@wajeemaracamp.co.ke',	2,	'joshua',	0,	0,	'',	'',	'2018-06-19 14:53:39'),
(6,	'  ',	'',	'',	'',	'',	'  ',	'',	'',	'',	0,	'joshua',	0,	0,	'',	'',	'2018-06-19 14:57:30'),
(7,	'  ',	'',	'',	'',	'',	'  ',	'',	'',	'',	0,	'joshua',	0,	0,	'1',	'',	'2018-06-20 12:15:55'),
(8,	'mar mar mar',	'34567890',	'0710446176',	'kiseej@gmail.com',	'2018-06-11',	'mar mar kisee',	'96345678',	'0876543',	'kisee@gmail.com',	0,	'joshua',	0,	0,	'1',	'',	'2018-06-24 06:07:39'),
(9,	'  ',	'',	'',	'',	'',	'  ',	'',	'',	'',	0,	'joshua',	0,	0,	'1',	'',	'2018-06-26 12:46:54'),
(10,	'gjhk gjhk ghjk',	'45678',	'45678',	'maureen@wajeemaracamp.co.ke',	'2018-06-07',	'fghjk fghjk nm',	'3456',	'2',	'maureen@wajeemaracamp.co.ke',	0,	'joshua',	0,	0,	'1',	'',	'2018-06-26 12:59:32'),
(11,	'jos  jos  muoki',	'456789',	'07876543',	'maureen@wajeemaracamp.co.ke',	'2018-06-26',	'muoki kisee paul',	'3456789',	'075432',	'maureen@wajeemaracamp.co.ke',	0,	'joshua',	0,	0,	'1',	'',	'2018-06-26 13:33:50'),
(12,	'last last my name',	'30030960',	'0705123456',	'maureen@wajeemaracamp.co.ke',	'2018-06-30',	'maureen murrey kisee',	'098765432',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'98bd1c45684cf587ac2347a92dd7bb51',	0,	0,	'1',	'',	'2018-06-30 09:06:41'),
(13,	'test test last',	'3456789',	'0876543',	'kiseej@gmail.com',	'2018-06-30',	'maureen murrey kisee',	'3456789',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'098f6bcd4621d373cade4e832627b4f6',	0,	0,	'1',	'12',	'2018-06-30 09:55:58'),
(14,	'test test last',	'3456789',	'0876543',	'kiseej@gmail.com',	'2018-06-30',	'maureen murrey kisee',	'3456789',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'098f6bcd4621d373cade4e832627b4f6',	0,	0,	'1',	'12',	'2018-06-30 09:57:13'),
(15,	'test test last',	'3456789',	'0876543',	'kiseej@gmail.com',	'2018-06-30',	'maureen murrey kisee',	'3456789',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'098f6bcd4621d373cade4e832627b4f6',	0,	0,	'1',	'12',	'2018-06-30 09:57:48'),
(16,	'test test last',	'3456789',	'0876543',	'kiseej@gmail.com',	'2018-06-30',	'maureen murrey kisee',	'3456789',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'098f6bcd4621d373cade4e832627b4f6',	0,	0,	'1',	'12',	'2018-06-30 09:59:57'),
(17,	'joshua  joshua  last test',	'30030969',	'0712121212',	'maureen@wajeemaracamp.co.ke',	'2018-06-29',	'maureen murrey hjk',	'8765432',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'b21426a7aeba9cc7d53a482d3f056455',	0,	0,	'1',	'12',	'2018-06-30 10:02:50'),
(18,	'chriss chriss chriss',	'0987654321',	'0712121212',	'maureen@wajeemaracamp.co.ke',	'2018-07-05',	'maureen murrey d',	'9876543',	'0712121212',	'maureen@wajeemaracamp.co.ke',	0,	'96b470a948b019cfbc6282f46ec68fc3',	0,	0,	'1',	'12',	'2018-07-05 12:41:38');

DROP TABLE IF EXISTS `penalties`;
CREATE TABLE `penalties` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `reason` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 deducted , 1  pending',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `transactions_logs`;
CREATE TABLE `transactions_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_code` varchar(255) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `contribution_type` varchar(500) NOT NULL,
  `amount_before` varchar(255) NOT NULL,
  `amount_after` varchar(255) NOT NULL,
  `transaction_amount` varchar(255) NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `transactions_logs_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transactions_logs` (`id`, `transaction_code`, `member_id`, `contribution_type`, `amount_before`, `amount_after`, `transaction_amount`, `transaction_date`) VALUES
(1,	'bd51477ed4bc53dbb797d329fd6dfbbf',	12,	'{\"shares_contribution_type\":\"12\",\"loan_payment_contribution_type\":\"0\",\"Miscellaneous_contribution_type\":\"0\",\"merry_go_round_contribution_type\":\"0\",\"benevolent_contribution_type\":\"0\",\"recept_number\":\"1234567\",\"amount\":\"12\",\"recept_meme\":\"180710075552am12.p',	'0',	'12',	'12',	'2018-07-10 02:55:52'),
(2,	'813ea835b89c2b7bf60a2c5a4a174e7e',	12,	'{\"shares_contribution_type\":\"0\",\"loan_payment_contribution_type\":\"045\",\"Miscellaneous_contribution_type\":\"0\",\"merry_go_round_contribution_type\":\"0\",\"benevolent_contribution_type\":\"0\",\"recept_number\":\"45678\",\"amount\":\"45\",\"recept_meme\":\"180710075717am12.pdf\"}',	'0',	'45',	'45',	'2018-07-10 02:57:17');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0' COMMENT '0 inactive, 1 active',
  `activation_code` int(11) DEFAULT NULL,
  `activation_code_status` int(11) DEFAULT '0' COMMENT '0 new, 1 used',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `member_id`, `password`, `active`, `activation_code`, `activation_code_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Brain O',	'30030',	1,	'$2y$10$aYCWZpD02GqV8jYLjgWIae8cYqo4GxQzzQwO2PQAMGAUNf.XgvyhS',	0,	NULL,	0,	'Ga2bGswI3CuPoxo5D8gd7oYe7uF7LJz9rtFvpCnZCK4NwVhUy72Lt8iqmrsH',	'2018-07-09 09:42:35',	'2018-07-09 09:42:35'),
(2,	'gjhk gjhk ghjk',	'45678',	10,	'$2y$10$Iz79HMYLUUlJrD0Xw1WuWOieoL52ZOHe1xWcB8L0qI7bqIGyOOxk2',	1,	4569,	1,	NULL,	'2018-08-10 06:11:26',	'2018-08-10 06:13:22'),
(3,	'joshua joshua muoki',	'3010',	2,	'$2y$10$2P9ymbFCYP6LINGFuKrVAeBGOvA4oVHeujOi5u8E21XDGAO1IeN0u',	1,	9770,	1,	NULL,	'2018-08-10 06:50:55',	'2018-08-10 06:51:06'),
(4,	'mar mar mar',	'34567890',	8,	'$2y$10$5k4y4ghfeh5uDNRJbAW4guWpALK2iE9ivELC5S4w4uNgaRMtxAEvK',	1,	5576,	1,	NULL,	'2018-08-10 06:58:24',	'2018-08-10 06:58:35'),
(5,	'joshua joshua muoki',	'1234',	3,	'$2y$10$AVe9FCkC6ZbU8oQno/RtyOUQyhwKjii5q0Izr9eamlnSAixA03uAi',	1,	4483,	1,	'q443WftFbhKXHPexf1bmdgoP8z7L5KJCLnPwYqmbmFrK31MuRc2xpqE2DzUc',	'2018-08-10 08:04:16',	'2018-08-10 08:04:41');

-- 2018-08-10 11:23:35
