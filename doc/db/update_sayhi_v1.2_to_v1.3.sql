ALTER TABLE `setting` ADD `music_url` VARCHAR(256) NULL DEFAULT NULL AFTER `apple_app_store_url`;
ALTER TABLE `post` ADD `content_type_reference_id` INT NULL DEFAULT NULL AFTER `post_content_type`;
ALTER TABLE `post` ADD `event_id` INT NULL DEFAULT NULL AFTER `club_id`;
ALTER TABLE `post` ADD `campaign_id` INT NULL DEFAULT NULL AFTER `club_id`;
ALTER TABLE `user_favorite` ADD INDEX(`user_id`);
ALTER TABLE `follower` ADD INDEX(`user_id`);
ALTER TABLE `post_gallary` ADD INDEX(`post_id`);
ALTER TABLE `event_ticket_booking` ADD `is_check_in` INT NOT NULL DEFAULT '0' AFTER `image`, ADD `notes` TEXT NULL DEFAULT NULL AFTER `is_check_in`;
ALTER TABLE `event_ticket_booking` ADD `updated_at` INT NULL DEFAULT NULL AFTER `created_at`;
CREATE TABLE IF NOT EXISTS `module_auth` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `alias` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=264 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `module_auth`
--

INSERT INTO `module_auth` (`id`, `name`, `alias`) VALUES
(1, 'Administrator', 'administrator'),
(2, 'User', 'user'),
(3, 'Post', 'post'),
(4, 'Competition', 'competition'),
(5, 'Club', 'club'),
(6, 'Support Request', 'supportRequest'),
(7, 'Payment', 'payment'),
(8, 'Package', 'package'),
(9, 'Tv Channel', 'tvChannel'),
(10, 'Podcast', 'podcast'),
(11, 'Gift', 'gift'),
(12, 'Faq', 'faq'),
(13, 'Organization', 'organization'),
(14, 'Event', 'event'),
(15, 'Fund Raising', 'fundRaising'),
(16, 'Reel', 'reel'),
(17, 'Poll', 'poll'),
(18, 'Broadcast Notifications', 'broadcastNotifications'),
(19, 'Coupon', 'coupon'),
(20, 'Dating', 'dating'),
(21, 'Story', 'story'),
(22, 'Job', 'job'),
(23, 'Ad', 'ad'),
(24, 'Report', 'report'),
(25, 'Setting', 'setting'),
(26, 'Live History', 'liveHistory'),
(27, 'Post Promotion', 'promotion');
CREATE TABLE IF NOT EXISTS `module_auth_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `module_auth_id` int NOT NULL,
  `is_enabled` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb3;


