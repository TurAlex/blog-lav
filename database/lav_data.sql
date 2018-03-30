/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50720
Source Host           : localhost:3306
Source Database       : lav_data

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2018-03-30 15:03:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Шоу-биз', 'show1', '<p>Nesciunt necessitatibus placeat quae quo.</p>', '1', '2018-03-22 18:56:34', '2018-03-28 21:57:44');
INSERT INTO `categories` VALUES ('2', 'Музыка', 'music', '<p>Praesentium facere quia earum fugit.</p>', '1', '2018-03-22 18:56:34', '2018-03-29 06:24:33');
INSERT INTO `categories` VALUES ('3', 'Политика', 'politics', '<p>Aut qui error neque qui ipsum ut dolores quam.</p>', '1', '2018-03-22 18:56:34', '2018-03-29 07:09:30');
INSERT INTO `categories` VALUES ('7', 'ыва', 'yva', '<p>ыва</p>', '0', '2018-03-28 14:40:34', '2018-03-28 18:07:43');
INSERT INTO `categories` VALUES ('8', 'Кино', 'kino', '<p>ыва ыва ыва ыва</p>', '1', '2018-03-28 21:12:01', '2018-03-28 21:12:28');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1', '1', '4', '<p>xfgsdfgaeg</p>', '2018-03-23 01:06:57', '2018-03-28 18:17:05', '1');
INSERT INTO `comments` VALUES ('2', '2', '4', 'xfgsdfgaeg', '2018-03-23 01:07:05', '2018-03-23 02:42:43', '1');
INSERT INTO `comments` VALUES ('3', '3', '4', 'sdrtjh trh trh ws ht', '2018-03-23 01:07:51', '2018-03-28 18:17:07', '1');
INSERT INTO `comments` VALUES ('4', '4', '2', '<p>sdfsdfsdfdgdfs</p>', '2018-03-23 01:13:31', '2018-03-29 10:11:10', '1');
INSERT INTO `comments` VALUES ('5', '2', '4', 'xgadsgsdga', '2018-03-23 01:14:46', '2018-03-28 18:17:10', '1');
INSERT INTO `comments` VALUES ('6', '1', '4', 'sgdfgdfg', '2018-03-23 01:57:26', '2018-03-23 02:59:10', '1');
INSERT INTO `comments` VALUES ('7', '1', '4', 'sgdfgdfg', '2018-03-23 02:04:48', '2018-03-29 10:11:13', '1');
INSERT INTO `comments` VALUES ('8', '1', '4', 'afg sd', '2018-03-23 02:23:57', '2018-03-29 10:11:16', '1');
INSERT INTO `comments` VALUES ('9', '1', '4', 'afg sd', '2018-03-23 02:23:57', '2018-03-23 02:23:57', null);
INSERT INTO `comments` VALUES ('10', '9', '6', 'sdfsdfsaf', '2018-03-29 09:56:12', '2018-03-29 09:56:12', null);
INSERT INTO `comments` VALUES ('11', '9', '6', 'sdgfsdfg', '2018-03-29 10:09:49', '2018-03-29 10:09:49', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('65', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('66', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('67', '2018_03_14_070236_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('68', '2018_03_14_071634_create_posts_table', '1');
INSERT INTO `migrations` VALUES ('69', '2018_03_14_071655_create_tags_table', '1');
INSERT INTO `migrations` VALUES ('71', '2018_03_14_074855_create_post_tags_table', '1');
INSERT INTO `migrations` VALUES ('72', '2018_03_19_135428_create_comments_table', '1');
INSERT INTO `migrations` VALUES ('74', '2018_03_23_011704_add_status_to_comments', '2');
INSERT INTO `migrations` VALUES ('75', '2018_03_14_071723_create_pages_table', '3');
INSERT INTO `migrations` VALUES ('81', '2018_03_28_151011_add_status_to_tags', '5');
INSERT INTO `migrations` VALUES ('84', '2018_03_23_065440_create_send_mails_table', '6');
INSERT INTO `migrations` VALUES ('85', '2018_03_29_194604_change_user_email_unique', '7');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('4', 'О нас', 'about', '<h1>Learn More About Us.</h1>\r\n<!-- end s-content__header -->\r\n\r\n<p><img alt=\"\" src=\"images/thumbs/about/about-1000.jpg\" /></p>\r\n<!-- end s-content__media -->\r\n\r\n<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint.</p>\r\n\r\n<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>\r\n\r\n<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco.</p>\r\n\r\n<h3>Who We Are.</h3>\r\n\r\n<p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>\r\n\r\n<h3>Our Mission.</h3>\r\n\r\n<p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>\r\n\r\n<h3>Our Vision.</h3>\r\n\r\n<p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>\r\n\r\n<h3>Our Values.</h3>\r\n\r\n<p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>\r\n<!-- end s-content__main --><!-- end row -->', '1', '2018-03-23 03:40:55', '2018-03-29 07:09:57');
INSERT INTO `pages` VALUES ('5', 'Контакты', 'contact', '<h1>Feel Free To Contact Us.</h1>\r\n\r\n<p>Lorem ipsum Deserunt est dolore Ut Excepteur nulla occaecat magna occaecat Excepteur nisi esse veniam dolor consectetur minim qui nisi esse deserunt commodo ea enim ullamco non voluptate consectetur minim aliquip Ut incididunt amet ut cupidatat.</p>\r\n\r\n<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>\r\n\r\n<h3>Where to Find Us</h3>\r\n\r\n<p>1600 Amphitheatre Parkway<br />\r\nMountain View, CA<br />\r\n94043 US</p>\r\n\r\n<h3>Contact Info</h3>\r\n\r\n<p>contact@philosophywebsite.com<br />\r\ninfo@philosophywebsite.com<br />\r\nPhone: (+1) 123 456</p>\r\n<!-- end row -->\r\n\r\n<h3>Say Hello.</h3>\r\n<!-- end s-content__main -->', '1', '2018-03-23 03:43:13', '2018-03-29 10:19:43');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('6', 'Netflix назвал ТОП-10 самых страшных фильмов', 'netflix-nazval-top', 'Лидером рейтинга оказалась лента &quot;Лихорадка&quot; 2016 года. Как отмечается сервис, пользователи назвали эти фильмы настолько страшными, что их невозможно досмотреть до конца.', '<p>Лидером рейтинга оказалась лента &quot;Лихорадка&quot; 2016 года. Как отмечается сервис, пользователи назвали эти фильмы настолько страшными, что их невозможно досмотреть до конца. Стриминговый сервис Netflix назвал ТОП-10 самых страшных фильмов. Ленты, по словам пользователей, являются настолько страшными, что их сложно досмотреть до конца. Об этом пишет Comicbook. Лидером рейтинга оказалась лента Лихорадка 2016 года. В основу фильма положена история о пяти выпускниках. Молодые люди арендовали удаленный домик в лесу, после чего стали жертвами страшного вируса. На второй позиции оказались Парк резни 2016 года. А замыкает тройку лидеров Заклятие 2013 года. Также в ТОП-10 вошли фильмы Человеческая многоножка, Иерусалим, Варварская Мексика, Пираньи 3D, Сырое, Зубы и Пустота. Ранее сообщалось, что эксперты назвали самые страшные фильмы в истории. Лидером рейтинга оказалась лента Уиджи: Проклятие Вероники.</p>', 'KlqJtyTgfm.jpeg', '1', '1', '1', null, '2018-03-28 06:52:05', '2018-03-29 10:07:32');
INSERT INTO `posts` VALUES ('7', 'Актриса укусила Бейонсе за лицо из-за ее мужа', 'aktrisanetflix', 'Перепалка между двумя женщинами разгорелась на одной из вечеринок. Бейонсе была шокирована поведением незнакомки, открыто флиртовавшей с ее супругом.&nbsp;', '<p>Перепалка между двумя женщинами разгорелась на одной из вечеринок. Бейонсе была шокирована поведением незнакомки, открыто флиртовавшей с ее супругом. Американскую певицу Бейонсе укусила за лицо женщина во время вечеринки. Причиной инцидента стал открытый флирт незнакомки с мужем артистки. Бейонсе возмутилась и высказалась в лицо женщине, которая неожиданно решила ей отомстить. Об этом пишет GO. Издание ссылается на свидетельницу произошедшего, актрису Тиффани Хеддиш. По ее словам, инцидент произошел в декабре прошлого года. &quot;Там была одна актриса, которая очень выпендривалась. И она укусила Бейонсе в лицо. Бейонсе вылетела оттуда... бросилась к Джей Зи: &quot;Джей! Иди сюда! Эта с*ка...&quot;, и ухватилась за него. Они вернулись в зал. Я спросила: &quot;Что случилось?&quot; Мимо проходила подруга Бейонсе и сказала: &quot;Та с*ка только что укусила Бейонсе, можешь в такое поверить?&quot;, - сказала Хеддиш. Ранее сообщалось, что Бейонсе показала снимки с публичного мероприятия, на которых красуется в золотом платье.</p>', 'BGw6zl0MtF.jpeg', '1', '1', '0', null, '2018-03-28 06:55:09', '2018-03-29 06:20:23');
INSERT INTO `posts` VALUES ('8', 'Звезда Сплетницы находится под следствием за изнасилование 11', 'zvezda-spletnicy-nahoditsya-pod-sledstviem-za-iznasilovanie', 'Актер Эд Вествик был обвинен актрисой Кристиной Коэн в принуждении к половому акту. В настоящее время дело рассматривается представителями прокуратуры. 11', '<p>Актер Эд Вествик был обвинен актрисой Кристиной Коэн в принуждении к половому акту. В настоящее время дело рассматривается представителями прокуратуры. Американский актер Эд Вествик, который прославился ролью в сериале Сплетница, находится под следствием за обвинения в изнасиловании. Об этом пишет DeadLine, ссылаясь на представителя офиса окружного прокурора Лос-Анджелеса. &quot;Я подтверждаю, что дело Эда Вествика было передано в наш офис и сейчас рассматривается. Окружная прокуратура не разглашает имена жертв и, соответственно, не может предоставлять никакой информации относительно пострадавших&quot;, - отметил представитель прокуратуры. Известно, что изначально актера обвинила в изнасиловании актриса Кристина Коэн. Вслед за ней такие же обвинения высказала Орелли Винн. Стилист Хейли Камилла Фридман позднее заявила, что Вествик насиловал ее неоднократно, при этом продержав взаперти в течение двух дней. Четвертая женщина, Рэйчел Эк, заявила, что Вествик напал на нее в гостинице, однако ей удалось оттолкнуть актера. Ранее сообщалось, что в изнасиловании обвинили экс-солиста популярного бойз-бенда Backstreet Boys.11</p>', 'fejGuAsDse.jpeg', '3', '1', '1', null, '2018-03-28 06:57:57', '2018-03-28 13:16:29');
INSERT INTO `posts` VALUES ('9', 'Северная Корея отказалась от концертов PSY - СМИ', 'severnaya-koreya-otkazalas-ot-koncertov-psy-smi', 'С предложением гастролей певца из Южной Корее выступило правительство страны. PSY получил известность после выпуска всемирного хита Gangnam Style.', 'С предложением гастролей певца из Южной Корее выступило правительство страны. PSY получил известность после выпуска всемирного хита Gangnam Style.\r\nКНДР отказалась от гастролей южнокорейского рэпера PSY, получившего признание после выпуска хита Gangnam Style. Об этом пишет The Korea Times.\r\n\r\nСообщается, что инициатором идеи гастролей артиста в Пхеньяне выступило правительство Южной Кореи. \r\n\r\nПредполагалось, что исполнитель сможет выступить в числе артистов, которые будут принимать участие в мероприятиях в столице КНДР в ближайшие дни.\r\n\r\nОднако противницей приезда рэпера оказалась местная певица Хён Сон Воль. В то же время пресс-секретарь министерства объединения Республики Корея, со своей стороны, сказал, что подтверждения такой информации у них нет.\r\n\r\nРанее сообщалось, что клип на композицию Gangnam Style собрал свыше трех миллиардов просмотров на YouTube.', 'o0tDm76uaZ.jpeg', '1', '1', '1', null, '2018-03-28 07:02:24', '2018-03-28 07:02:24');
INSERT INTO `posts` VALUES ('10', 'Бритни Спирс показала безупречную фигуру', 'britni-spirs-pokazala-bezuprechnuyu-figuru', 'Певица Бритни Спирс показала снимок из тренажерного зала. На фото она запечатлена в мини-шортах и топе, демонстрируя подтянутую фигуру.', '<h2>Певица Бритни Спирс показала снимок из тренажерного зала. На фото она запечатлена в мини-шортах и топе, демонстрируя подтянутую фигуру.</h2>\r\n\r\n<p>Американская певица Бритни Спирс продемонстрировала снимок из тренажерного зала. На фото она запечатлена в мини-шортах и топе, которые подчеркивают ее безупречное тело. Фото было опубликовано на Instagram-странице артистки.</p>\r\n\r\n<p>Фотография за два дня собрала в соцсети почти миллион лайков и тысячи комментариев.</p>', 'agV6ESnQ6b.jpeg', '1', '1', '0', null, '2018-03-28 07:04:33', '2018-03-28 07:46:42');
INSERT INTO `posts` VALUES ('11', 'Видео с танцующим сальсу Уиллом Смитом стало хитом', 'video-s-tancuyushchim-salsu-uillom-smitom-stalo-hitom', 'Голливудский актер реализовал давнюю мечту взять урок сальсы. Ролик собрал менее чем за сутки 2,3 миллиона лайков на Instagram-странице.', 'Голливудский актер реализовал давнюю мечту взять урок сальсы. Ролик собрал менее чем за сутки 2,3 миллиона лайков на Instagram-странице.\r\nАмериканский актер Уилл Смит станцевал сальсу. Ролик с ним менее чем за сутки собрал 2,3 миллиона лайков на его Instagram-странице.\r\n\r\nВ видео показано, как Смита учит танцевать популярный латиноамериканский певец Марк Энтони.\r\nМарк Энтони - певец стиля \"сальса\", а также музыкант, композитор и актер. Кроме того, он является бывшим мужем Дженнифер Лопес.\r\n\r\nРанее сообщалось, что актер Уилл Смит высмеял рэп-композицию своего сына Джейдана. Видео стало хитом Сети.', 'MBM9UpG1Sx.jpeg', '1', '1', '0', null, '2018-03-28 07:06:36', '2018-03-28 17:42:25');
INSERT INTO `posts` VALUES ('12', 'Автор хита Gangnam Style отправится на гастроли в Северную Корею', 'avtor-hita-gangnam-style-otpravitsya-na-gastroli-v-severnuyu-koreyu', 'Концерты исполнителя пожелало организовать правительство Южной Кореи. Ожидается, что музыкант PSY выступит на мероприятиях в столице КНДР Пхеньяне.', '<p>Концерты исполнителя пожелало организовать правительство Южной Кореи. Ожидается, что музыкант PSY выступит на мероприятиях в столице КНДР Пхеньяне. Автор нашумевшего хита Gangnam Style PSY отправится гастролировать по Северной Корее. Выступления музыканта в КНДР пожелало организовать правительство Южной Кореи. Об этом пишет The Guardian. По информации издания, музыкант может выступить на мероприятиях в столице КНДР Пхеньяне с 31 марта по 3 апреля этого года. Известно, что PSY выпустил два новых музыкальных видео в мае прошлого года на песни I LUV IT и New Face. Его хит Gangnam Style вошел в историю, как один из самых просматриваемых на YouTube. В 2014 году видео с клипом сломало счетчик просмотров видеохостинга, собрав более трех миллиардов просмотров. Ранее сообщалось, что новый клип рэпера Эминема с Эдом Шираном стал интернет-хитом.</p>', 'zig8xFtQ96.jpeg', '2', '1', '0', null, '2018-03-28 07:08:24', '2018-03-28 13:02:48');
INSERT INTO `posts` VALUES ('13', 'Эпизод Симпсонов озвучили на закарпатском диалекте', 'epizod-simpsonov-ozvuchili-na-zakarpatskom-dialekte', 'Ролик назвали Симпсоны из Чинадиево. По сюжету, главная героиня Морика (Мардж) посылает своего супруга Золика (Гомера) на заработки в Чехию.', 'Ролик назвали Симпсоны из Чинадиево. По сюжету, главная героиня Морика (Мардж) посылает своего супруга Золика (Гомера) на заработки в Чехию.\r\nВ Сети был опубликован эпизод Симпсонов, озвученный на закарпатском диалекте. В видео главный герой Гомер получил имя Золик, а Мардж переименовали в Морику. Эпизод был опубликован на YouTube-канале Munkach Bloggers.\r\n\r\n\r\n\r\nПо сюжету серии, Морика посылает своего супруга Золика на заработки в Чехию. Он отправляется в пивную, где принимается жаловаться своим друзьям.\r\n\r\nРанее сообщалось, что полиция задержала водителя с правами, оформленными на имя Гомера Симпсона.', '0wnjczfFoZ.jpeg', '3', '1', '1', null, '2018-03-28 07:12:27', '2018-03-28 07:12:27');
INSERT INTO `posts` VALUES ('14', 'Миле Кунис приписали третью беременность', 'mile-kunis-pripisali-tretyu-beremennost', 'Слухи о грядущем пополнении в звездном семействе подтвердил инсайдер. Также сама Мила Кунис якобы поведала о беременности подруге.', 'Слухи о грядущем пополнении в звездном семействе подтвердил инсайдер. Также сама Мила Кунис якобы поведала о беременности подруге.\r\nГолливудская актриса Мила Кунис по слухам третий раз беременна. Об этом пишет Gossip Cop.\r\n\r\nПо информации издания, в последнее время актриса стала появляться в нарядах бесформенного свободного кроя. Кроме того, предположения о беременности подтвердил инсайдер.\r\n\r\nСообщается, что радостную новость о грядущем пополнении актриса якобы поведала своей подруге.\r\n\r\nОднако от официальных заявлений Мила Кунис и ее супруг Эштон Кутчер пока воздерживаются.\r\n\r\nРанее сообщалось, что Эштон Кутчер и Мила Кунис заявили намерении лишить детей наследства.', 'h3YH20jh81.jpeg', '3', '1', '0', null, '2018-03-28 07:13:24', '2018-03-28 18:33:14');
INSERT INTO `posts` VALUES ('15', 'Фильм Черная пантера вышел на пятое место в истории кинопроката США', 'film-chernaya-pantera-vyshel-na-pyatoe-mesto-v-istorii-kinoprokata-ssha', 'За последнюю неделю Черная пантера обошла по сборам такие блокбастеры, как первая часть Мстителей, а также Звездные войны: Последний джедай.', 'За последнюю неделю Черная пантера обошла по сборам такие блокбастеры, как первая часть Мстителей, а также Звездные войны: Последний джедай.\r\nФильм Marvel Черная пантера о приключениях одноименного супергероя заработал почти 631 млн долларов и вышел на пятое место в кинопрокате США за всю историю. Об этом сообщает Boxofficemojo в понедельник, 26 марта.\r\n\r\nЗа последнюю неделю Черная пантера обошла по сборам первую часть Мстителей, а также Звездные войны: Последний джедай.\r\n\r\nВыше блокбастера от Marvel только Звездные войны: Пробуждение силы с результатом 936 млн долларов, Аватар (760 долларов), Титаник (659 долларов) и Парк Юрского периода (652 млн долларов). Черной пантере вполне по силам подняться на третью позицию.\r\n\r\nОтметим, что общемировые сборы Черной пантеры достигли 1,237 млрд долларов – 12 место в истории кино.\r\n\r\nНапомним, за первый уик-энд Черная пантера заработала в прокате $192 млн. Супергеройский боевик обогнал по показателям Дэдпула (132,4 млн долларов) и потеснил  с пятой позиции в номинации Лучший уикэнд за всю историю картину \"Мстители: Эра Альтрона\" (191,2 млн долларов).', 'SkZkxPGvff.jpeg', '2', '1', '1', null, '2018-03-28 07:14:26', '2018-03-28 07:14:26');
INSERT INTO `posts` VALUES ('16', 'В Симпсонах высмеяли фобии Трампа', 'v-simpsonah-vysmeyali-fobii-trampa', 'В новом короткометражном эпизоде мультсериала американский лидер раскаивается в своих поступках и призывает Путина оставить США в покое.', 'В новом короткометражном эпизоде мультсериала американский лидер раскаивается в своих поступках и призывает Путина оставить США в покое.\r\nВ популярном мультипликационном сериале Симпсоны высмеяли предполагаемые фобии президента США Дональда Трампа. \r\n\r\nЭпизод под названием История о двух Трампах представляет собой кошмарный сон американского лидера.\r\n\r\nТрехминутный ролик начинается с массового ухода сотрудников Белого дома, среди которых госсекретарь Рекс Тиллерсон. Также показана первая леди Мелания за чтением скандальной книги Огонь и ярость, рассказывающей неприятные подробности о ее супруге.\r\n\r\nМежду тем Трампу снится, что он пробуждается среди газет, заголовки которых гласят: \"Путин назначил себя госсекретарем США\", \"Трамп критикует оружейное лобби, поддерживает детей нелегальных иммигрантов\".\r\n \r\nОн отправляется к зеркалу и убеждает себя признаться в собственных ошибках. \r\n\"Я последователен не на 100%. Ты винишь во всем других. Ты уволил главу ФБР только потому, что он выше\", − следует поток самокритики.\r\n\r\nТакже он раскаивается в своих поступках, в том числе махинациях с налогами и изменах жене. Потом звонит Путину и говорит, что тот \"крошечный, лысый фашист\" и требует оставить США в покое.\r\n\r\nОднако пробудившись от страшного сна, все, что приходит ему в голову, это написать в Twitter: \"Алек Болдуин носит парик\".', 'RPm6ignoUN.jpeg', '1', '1', '1', null, '2018-03-28 07:15:21', '2018-03-28 07:15:21');
INSERT INTO `posts` VALUES ('17', 'Ди-джей превратил в музыку голоса животных', 'di-dzhey-prevratil-v-muzyku-golosa-zhivotnyh', 'В эфир будет запущена серия DJ-миксов с голосами редких животных и птиц, внесенных в Красную книгу Украины. Четыре композиции станут своего рода криками о помощи.', 'В эфир будет запущена серия DJ-миксов с голосами редких животных и птиц, внесенных в Красную книгу Украины. Четыре композиции станут своего рода криками о помощи.\r\nВсемирный фонд дикой природы (WWF) 24 марта 2018 года запустит в эфир радиостанций  серию DJ-миксов с голосами животных и птиц, которые внесены в Красную книгу Украины. В композициях появятся голоса евразийской рыси, бурого медведя, розового пеликана и речной выдры.\r\n\r\nОригинальные миксы будут представлены слушателю в рамках инициативы Час Земли. Главной задачей проекта является призыв к бережному отношению к природе и ее ресурсам.\r\n\r\n\"Дерзкая форма подачи призвана привлечь внимание именно молодой аудитории\", - отмечено в официальном сообщении пресс-службы проекта.\r\n\r\nПо мнению его организаторов, с помощью музыки можно будет ненавязчиво вызвать  интерес молодого поколения к актуальной экологической проблеме.\r\n\r\nМузыкальные треки должны стать четырьмя криками о помощи. К примеру, на сегодняшний день в Украине осталось приблизительно 400 особей евразийской рыси, и этот вид нуждается в том, чтобы о его выживании позаботились.\r\n\r\n\r\n\r\nАкция пройдет 24 марта в 20:30. Ее инициаторы призывают всех небезразличных - от частных лиц до коммерческих учреждений – на один час выключить свет. Таким образом, все желающие продемонстрируют свое небезразличие к проблеме климатических изменений и критической ситуации с загрязнением окружающей среды.', 'BuCsfyAPLH.jpeg', '2', '1', '1', null, '2018-03-28 07:16:36', '2018-03-28 07:16:36');
INSERT INTO `posts` VALUES ('18', 'Актриса укусила Бейонсе за лицо из-за ее мужа1', 'required-rule-unique-posts-ignore-post-id', 'sdfg', '<p>sdf</p>', null, '1', '6', '0', null, '2018-03-29 06:08:25', '2018-03-29 06:19:35');

-- ----------------------------
-- Table structure for post_tags
-- ----------------------------
DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE `post_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of post_tags
-- ----------------------------
INSERT INTO `post_tags` VALUES ('1', '2', '1', null, null);
INSERT INTO `post_tags` VALUES ('3', '2', '2', null, null);
INSERT INTO `post_tags` VALUES ('4', '5', '2', null, null);
INSERT INTO `post_tags` VALUES ('5', '1', '4', null, null);
INSERT INTO `post_tags` VALUES ('6', '3', '4', null, null);
INSERT INTO `post_tags` VALUES ('7', '1', '5', null, null);
INSERT INTO `post_tags` VALUES ('8', '3', '5', null, null);
INSERT INTO `post_tags` VALUES ('9', '5', '5', null, null);
INSERT INTO `post_tags` VALUES ('10', '1', '3', null, null);
INSERT INTO `post_tags` VALUES ('11', '3', '3', null, null);
INSERT INTO `post_tags` VALUES ('12', '5', '3', null, null);
INSERT INTO `post_tags` VALUES ('13', '1', '1', null, null);
INSERT INTO `post_tags` VALUES ('14', '1', '6', null, null);
INSERT INTO `post_tags` VALUES ('15', '2', '6', null, null);
INSERT INTO `post_tags` VALUES ('16', '6', '7', null, null);
INSERT INTO `post_tags` VALUES ('17', '7', '7', null, null);
INSERT INTO `post_tags` VALUES ('18', '10', '7', null, null);
INSERT INTO `post_tags` VALUES ('19', '10', '8', null, null);
INSERT INTO `post_tags` VALUES ('20', '11', '8', null, null);
INSERT INTO `post_tags` VALUES ('21', '13', '9', null, null);
INSERT INTO `post_tags` VALUES ('22', '16', '9', null, null);
INSERT INTO `post_tags` VALUES ('23', '1', '10', null, null);
INSERT INTO `post_tags` VALUES ('24', '12', '10', null, null);
INSERT INTO `post_tags` VALUES ('25', '15', '10', null, null);
INSERT INTO `post_tags` VALUES ('26', '2', '11', null, null);
INSERT INTO `post_tags` VALUES ('27', '10', '11', null, null);
INSERT INTO `post_tags` VALUES ('28', '12', '11', null, null);
INSERT INTO `post_tags` VALUES ('29', '1', '12', null, null);
INSERT INTO `post_tags` VALUES ('30', '2', '12', null, null);
INSERT INTO `post_tags` VALUES ('31', '7', '12', null, null);
INSERT INTO `post_tags` VALUES ('32', '11', '12', null, null);
INSERT INTO `post_tags` VALUES ('33', '6', '13', null, null);
INSERT INTO `post_tags` VALUES ('34', '12', '13', null, null);
INSERT INTO `post_tags` VALUES ('35', '13', '13', null, null);
INSERT INTO `post_tags` VALUES ('36', '14', '13', null, null);
INSERT INTO `post_tags` VALUES ('37', '7', '14', null, null);
INSERT INTO `post_tags` VALUES ('38', '12', '14', null, null);
INSERT INTO `post_tags` VALUES ('39', '13', '14', null, null);
INSERT INTO `post_tags` VALUES ('40', '15', '14', null, null);
INSERT INTO `post_tags` VALUES ('41', '1', '15', null, null);
INSERT INTO `post_tags` VALUES ('42', '2', '15', null, null);
INSERT INTO `post_tags` VALUES ('43', '10', '15', null, null);
INSERT INTO `post_tags` VALUES ('44', '13', '15', null, null);
INSERT INTO `post_tags` VALUES ('45', '1', '16', null, null);
INSERT INTO `post_tags` VALUES ('46', '2', '16', null, null);
INSERT INTO `post_tags` VALUES ('47', '10', '16', null, null);
INSERT INTO `post_tags` VALUES ('48', '12', '16', null, null);
INSERT INTO `post_tags` VALUES ('49', '1', '17', null, null);
INSERT INTO `post_tags` VALUES ('50', '6', '17', null, null);
INSERT INTO `post_tags` VALUES ('51', '12', '17', null, null);
INSERT INTO `post_tags` VALUES ('52', '15', '17', null, null);
INSERT INTO `post_tags` VALUES ('53', '2', '20', null, null);
INSERT INTO `post_tags` VALUES ('54', '6', '23', null, null);
INSERT INTO `post_tags` VALUES ('55', '10', '18', null, null);

-- ----------------------------
-- Table structure for send_mails
-- ----------------------------
DROP TABLE IF EXISTS `send_mails`;
CREATE TABLE `send_mails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of send_mails
-- ----------------------------
INSERT INTO `send_mails` VALUES ('1', 'Alexey Tur', '3023655055', 'turalex67@gmail.com', 'hello there', 'FhUnJT5l9BjKDHHM7RCJBQM6BJqTHbKbPrR9riRMvtWNpdgLwUBtk6Fr1Cr7BCCyCCLkpv8SRuwPDqnV9xngFZhxRL7K9wLx9bai', '2018-03-29 11:16:46', '2018-03-29 11:16:46');
INSERT INTO `send_mails` VALUES ('2', 'rfhx', '663681681', 'turalex67@gmail.com', 'fdgdfg', 'jqbHTBgrSveTJ7FQ5AbSlTlv4o7HVzHJ3MG6cXW0vdBIwO3CDPYz79a0EXbrc173sPQe7ChZsaiFVJg01VjNYdY2Dt9iQQK07RNB', '2018-03-29 11:31:13', '2018-03-29 11:31:13');
INSERT INTO `send_mails` VALUES ('3', 'rfhx', '663681681', 'turalex67@gmail.com', 'fdgdfg', '8xUhwb4ffOsbzOeUABR9z1DXac0s8W2P4n4XOfAHPK4tOP1xU4HjcFMBbQTHm6B0rdh3W0x8MVg1YhdI6XkKZP2wriqwem9T3Zqp', '2018-03-29 11:37:20', '2018-03-29 11:37:20');
INSERT INTO `send_mails` VALUES ('4', 'ываываыва', '663681681', 'turalex67@gmail.com', 'выаыва', 'uJs2b9FzCuU678Hdvmn7uAcppxeQMmyxbfYvg6PiQphyM2oRGiI8pvlteJKVKpKvTeCqCoDbnwrVkKNREPci2A3fZepYPW2PccY7', '2018-03-29 12:25:39', '2018-03-29 12:25:39');
INSERT INTO `send_mails` VALUES ('5', 'Алексей Тур', '663681681', 'atur@i.ua', 'dfgdfg', 'wbbibovCbWOEjZ8odKJ7GEG2RLe2u2AGO2FQxSdRw3X0R4zIChUV2FAkouWus4pWA6Sci5E9AyVsdFvqELnrfAIwPuDvynzUpXHn', '2018-03-29 12:31:43', '2018-03-29 12:31:43');
INSERT INTO `send_mails` VALUES ('6', 'xhgh', 'dhjgh', 'hghgxfh@shftrh.gfjhgj', 'hfghgfh', 'T0Anc8PUuXndi9nYuvj15THDLJ9S2iJONLpg3s0WCzuoKCJLVo1TSz4bjVbASunZcDD1PR4eCPFWD1arcVjP6HuqpUtOuBhCfPDU', '2018-03-29 13:00:06', '2018-03-29 13:00:06');
INSERT INTO `send_mails` VALUES ('7', 'Алексей Тур', '663681681', 'turalex67@gmail.com', 'sdgdsf', 'NfuQyzD3MCfbgQ701L2Tnnxxe3clfo7wFNg0uUDxAwUodABrj0HhNhUJwo8YpR79kJ13cxGS9iiS4Og98IejZtCuC3LiJlhxoyZ4', '2018-03-29 13:03:03', '2018-03-29 13:03:03');
INSERT INTO `send_mails` VALUES ('8', 'sdfsd', '345345', 'dsf@zfgfg.sdgdg', 'dsfgfdgb', 'tBOOqKs75DQybqeNXLNTTeHoStIomGInfXm5PhbcPHMOOAL5VmkP2DpMoJ1wu0gEU1z2Mr4SbXur5BmHqdtVWz10bPtz89aKU5Wy', '2018-03-29 13:14:03', '2018-03-29 13:14:03');
INSERT INTO `send_mails` VALUES ('9', 'аврва', '663681681', 'turalex67@gmail.com', 'asfdsadfsdf', 'sPdNaQCyfYkzo50wlmK9AuCbtR6TOB0y8UnFOCCdAoJHbq2ZgG6Cp8Z2CXalHQrD8zi2RwQ9elHFUCJKNIGitXNgJzlQ4ftLQjml', '2018-03-29 14:45:44', '2018-03-29 14:45:44');
INSERT INTO `send_mails` VALUES ('10', 'Alexey Tur', '3023655055', 'turalex67@gmail.com', 'sdfsdf', '3UDiMARVg6KsyqoWKDmTH9d1TzJE54kuH3ahUqVcQ5GJ0KqV8WeSSeNfw0Snpfy5oJEi5HzPF8Dog7BkKa0Yr6rqoDkEMN2x4HRZ', '2018-03-29 15:04:35', '2018-03-29 15:04:35');
INSERT INTO `send_mails` VALUES ('11', 'Alexey Tur', '3023655055', 'turalex67@gmail.com', 'sdfsdf', 'UNzGZFwGj8dJuNim3cyw5nobF1gsUjoK5yRLOsptShwg50dx8zE6CfD8uU3uz3Vy1EeUBDu1392V8HKtxRaWyIUsz3X1Kr28hwGi', '2018-03-29 15:07:29', '2018-03-29 15:07:29');
INSERT INTO `send_mails` VALUES ('12', 'fgdfg', 'dfsbddfg', 'atur@i.ua', 'dsgdfgdf', 'T5W461sjhHrVAYywBZifhtTOxcRTkanSflSCjLtbSUSvnBqb81ahoLGVKD2VXNmsKci6TgCcrvlBFhfIpuCUTH0I2vXiGEc1nqte', '2018-03-29 15:17:44', '2018-03-29 15:17:44');
INSERT INTO `send_mails` VALUES ('13', 'Алексей Тур', '663681681', 'turalex67@gmail.com', 'Привет тест письма', 'FoTtd7W52a7UYW9m6EKMSfEPJjTQmz65IiBeznjGQYG3HXalno2B5aINfVt0H1wEZheOTqSZIBKVCmWIEOFYqlQfiq0AzvHGK01R', '2018-03-29 15:35:44', '2018-03-29 15:35:44');
INSERT INTO `send_mails` VALUES ('14', 'dsfsdf', '+380950628321', 'sdfsa@dfsgdf.fdh', 'sfdgsdfg', 'MkGLR6dMTDBWPOPv3Sm411T4XVWcthFrUcty3MfCW0eJ0olnWtxTUl0W7x1AqcdZv7WtTVNaeKyyvZ9cxFWVj6asjPfeG9NtcHR7', '2018-03-29 16:01:46', '2018-03-29 16:01:46');
INSERT INTO `send_mails` VALUES ('15', 'Алексей Тур', '+380663681681', 'turalex67@gmail.com', 'ываыв', 'R13kSVtV7jxbBfF0ie8GHAcnfZNGSbkBM2oU7mWeKiTT3bLIALlIUeC6qyVmF8eLnhYfQoSfdgrWWZXWM56cUcCjp7pHAjBf4tJF', '2018-03-29 17:38:19', '2018-03-29 17:38:20');
INSERT INTO `send_mails` VALUES ('16', 'Alex Terds', '+38(066)-368-16-81', 'awsdf@xdfs.sdf', 'sefsfgew', 'ax5ilhHVtNybDKGZ8TfRz1MCKDjeTwhYMetwD5nqdTKf62p8pOXpmgWOgKybwKoPOOWV9n6HjCt81H8ps0sMu8LHKqPtKrGEkBYq', '2018-03-29 18:27:33', '2018-03-29 18:27:33');
INSERT INTO `send_mails` VALUES ('17', 'Алексей Тур', '+38(066)-368-16-81', 'turalex67@gmail.com', 'wreyweryweryerb ewb  w w', 'rerVnur5RIdzVckI10ZXV9XTPOwRhC5WgEZr2a6fBkKX3XR6zH0TxFjd44zhKaOnFFU3l9IT6XyOFA5AtnxXysEv17wh288ExmCS', '2018-03-29 19:09:03', '2018-03-29 19:09:03');
INSERT INTO `send_mails` VALUES ('18', 'Алексей Тур', '+38(663)-681-68-11', 'turalex67@gmail.com', 'gfhfghfghf', 'cJZqfFIWYSgGv7oPLQTlojuNKlml51l5CdqutIbCYk3Ru1MK8n5Y2OTbKBKSbW7hnDxGn9pLf3197TZHIM4qlqP8esPakPkWVMCf', '2018-03-29 20:37:00', '2018-03-29 20:37:00');
INSERT INTO `send_mails` VALUES ('19', 'Алексей Тур', '+38(663)-681-68-12', 'turalex67@gmail.com', 'ывафыва', 't3GoiWk1dVJrK4FXajTjxUvwDOjS5NfICEDeZGGdYKsFtJspqGhy5QOVId2Gfeyx2jTGhAPZ7SKX36ucpKhvFaeH1EHxf8aXpLjB', '2018-03-29 20:54:11', '2018-03-29 20:54:11');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', 'УЖАСЫ', 'thrill', '0', '2018-03-22 18:56:42', '2018-03-29 07:01:08', '0');
INSERT INTO `tags` VALUES ('2', 'ФИЛЬМЫ', 'perspiciatis', '0', '2018-03-22 18:56:42', '2018-03-28 18:12:54', '1');
INSERT INTO `tags` VALUES ('6', 'JAY-Z', 'jay-z', '0', '2018-03-28 06:52:55', '2018-03-28 06:52:55', '1');
INSERT INTO `tags` VALUES ('7', 'БЕЙОНСЕ', 'beyonse', '0', '2018-03-28 06:53:26', '2018-03-28 18:16:51', '0');
INSERT INTO `tags` VALUES ('10', 'ИНЦИДЕНТ', 'incident', '0', '2018-03-28 06:53:58', '2018-03-28 18:15:42', '1');
INSERT INTO `tags` VALUES ('11', 'СЕКС-СКАНДАЛЫ', 'seks-skandaly-gollivuda', '0', '2018-03-28 06:55:48', '2018-03-28 18:13:03', '1');
INSERT INTO `tags` VALUES ('12', 'ЗВЕЗДЫ КИНО', 'zvezdy-kino', '0', '2018-03-28 06:56:27', '2018-03-28 06:56:27', '0');
INSERT INTO `tags` VALUES ('13', 'АКТЕР', 'akter', '0', '2018-03-28 06:56:45', '2018-03-28 06:56:45', '1');
INSERT INTO `tags` VALUES ('14', 'ЗВЕЗДЫ ШОУ-БИЗНЕСА', 'zvezdy-shou-biznesa', '0', '2018-03-28 06:58:49', '2018-03-28 06:58:49', '1');
INSERT INTO `tags` VALUES ('15', 'МУЗЫКА', 'muzyka', '0', '2018-03-28 06:59:06', '2018-03-28 18:54:26', '0');
INSERT INTO `tags` VALUES ('16', 'sd', 'sd', '0', '2018-03-29 10:13:43', '2018-03-29 10:13:43', '1');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Vasya', 'sgasdgf@xfgsd.dfh', '$2y$10$MoOI/raT48qSeioCYE/USOnCTFGtDBXFgDD6qWnQ4QBZZNeDiV5LC', '0', 'ZQExzIv63n.jpeg', null, '2018-03-22 21:53:52', '2018-03-22 23:50:46');
INSERT INTO `users` VALUES ('2', 'dsfgdsfg', 'sgasdgf@xfgsd.dfdfdh', '$2y$10$Y.yXS2MzkGT1REQIitmbi.D4JydcGvSwzTBNCHsJP9YRJq8tNIT92', '0', null, null, '2018-03-22 21:54:44', '2018-03-22 21:54:44');
INSERT INTO `users` VALUES ('3', 'gsdfg', 'sadf@sda.yt', '$2y$10$dSUT3DlEiBFkEoaP1lsGi.SQblU8gaktM3p9zfnYvBjpFBGefrtx2', '0', null, null, '2018-03-22 21:56:31', '2018-03-22 21:56:31');
INSERT INTO `users` VALUES ('4', 'alex2', '111@qwe.rty', '$2y$10$srp4H8YP42jwNP4.gUm2/e8aduYbguHZrlogLyZOGBYytYSXpTgs6', '1', '7BQbgo0R9G.jpeg', '3Z6gniINSfR6pvZXawXbs6DQl00aPknNAeaHEaL44MVKKVHkBH6nHXbA0NCi', '2018-03-22 21:57:25', '2018-03-22 23:45:21');
INSERT INTO `users` VALUES ('5', 'Alex', '1234@qw.er', '$2y$10$WlOPkIk2lyUC/t4cuSD55Ohx6AMMGq0RGOrLZ/2LDE7.BI0Vy9EaC', '0', null, null, '2018-03-27 16:00:57', '2018-03-27 16:00:57');
INSERT INTO `users` VALUES ('6', 'xzgdg', '12@er.er', '$2y$10$nKyv5Z4XgniO4PILsDYFMOH2Rqq4lF0ZtkBze6P/iTQO7IeOR.Wva', '1', null, 'a6PflAFLW9JFa7MNVBocP4qREh5kQIKfOaeyzihDxIdKrs2fJWoqlKmmXz1I', '2018-03-27 18:38:47', '2018-03-27 18:38:47');
INSERT INTO `users` VALUES ('7', 'aqws', 'wer@wer.wer', '$2y$10$hT13fLKwPhhMHIF.z/ixwes37ZDmItgUq8dsqRNeaEGL0nb6jQJFm', '0', null, 'Td98UZs1zdAo77FtzQCgI6yGQf9iF3toQI3KmJhyR3b7ttSxv5IGHFuxfM87', '2018-03-29 09:52:19', '2018-03-29 09:52:19');
