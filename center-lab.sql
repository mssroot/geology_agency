-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 28 2016 г., 20:48
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `center-lab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ans_desc` text NOT NULL,
  `answer_active` int(11) NOT NULL,
  `answer_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `answer`
--

INSERT INTO `answer` (`answer_id`, `permission`, `title`, `ans_desc`, `answer_active`, `answer_time`) VALUES
(1, 'userka2', 'your answer', 'welcome userka2 its your answer', 1, '2016-09-28 15:07:26'),
(2, 'userka', 'answer title to userka', 'answer desc to userka', 1, '2016-09-28 17:42:45');

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `permission` varchar(55) NOT NULL,
  `info` text NOT NULL,
  `info_active` int(11) NOT NULL,
  `client_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`client_id`, `permission`, `info`, `info_active`, `client_time`) VALUES
(1, 'userka2', 'hellow every userka2', 1, '2016-09-28 14:51:21'),
(2, 'userka', 'userka senbi>>??', 1, '2016-09-28 14:52:23');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `contact_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`, `contact_time`) VALUES
(1, 'name new', 'email@new', 'message new', '2016-09-28 15:17:02');

-- --------------------------------------------------------

--
-- Структура таблицы `form_beef`
--

CREATE TABLE `form_beef` (
  `form_beef_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `form_beef_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `form_beef`
--

INSERT INTO `form_beef` (`form_beef_id`, `name`, `email`, `message`, `form_beef_time`) VALUES
(1, 'beef new', 'email@beef', 'message beef new', '2016-09-28 15:17:22');

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

CREATE TABLE `home` (
  `home_id` int(10) NOT NULL,
  `slider_file` varchar(100) NOT NULL,
  `slider_type` varchar(10) NOT NULL,
  `slider_size` int(11) NOT NULL,
  `img_file` varchar(100) NOT NULL,
  `img_type` varchar(10) NOT NULL,
  `img_size` int(11) NOT NULL,
  `home_info_active` int(11) DEFAULT NULL,
  `home_title` varchar(255) DEFAULT NULL,
  `home_desc` text,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `home`
--

INSERT INTO `home` (`home_id`, `slider_file`, `slider_type`, `slider_size`, `img_file`, `img_type`, `img_size`, `home_info_active`, `home_title`, `home_desc`, `insert_time`) VALUES
(1, '27892-1.jpg', 'image/jpeg', 19, '', '', 0, NULL, NULL, NULL, '2016-09-28 14:54:20'),
(2, '4172-2.jpg', 'image/jpeg', 26, '', '', 0, NULL, NULL, NULL, '2016-09-28 14:54:24'),
(3, '71610-3.jpg', 'image/jpeg', 29, '', '', 0, NULL, NULL, NULL, '2016-09-28 14:54:28'),
(4, '', '', 0, '10547-7.jpg', 'image/jpeg', 24, NULL, NULL, NULL, '2016-09-28 14:54:34'),
(5, '', '', 0, '51808-8.jpg', 'image/jpeg', 53, NULL, NULL, NULL, '2016-09-28 14:54:37'),
(6, '', '', 0, '18468-9.jpg', 'image/jpeg', 43, NULL, NULL, NULL, '2016-09-28 14:54:40'),
(7, '', '', 0, '2616-10.jpg', 'image/jpeg', 30, NULL, NULL, NULL, '2016-09-28 14:54:44'),
(8, '', '', 0, '', '', 0, 1, 'title 1 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu libero eu nibh vehicula vehicula eu eget nibh. Maecenas a neque a quam bibendum eleifend quis et ipsum. Ut mauris metus, tincidunt in rutrum eu, interdum quis metus. Vestibulum ut auctor augue, consectetur congue turpis. Duis quis dictum felis, in dignissim diam. In pellentesque commodo massa, non volutpat arcu rhoncus et. Donec iaculis quis odio quis euismod. Cras ac porttitor ex, in aliquet augue.', '2016-09-28 14:55:00'),
(9, '', '', 0, '', '', 0, 1, 'title 2', 'Mauris hendrerit sapien eu sapien mattis, eget hendrerit nunc volutpat. Ut faucibus interdum enim sed fermentum. Nullam facilisis consectetur placerat. Morbi mi erat, imperdiet lacinia pretium sit amet, lobortis id sem. Etiam non aliquam urna. Fusce pulvinar eleifend ante, eu hendrerit massa egestas eget. Donec eu sapien at felis ultrices dignissim ut non diam.', '2016-09-28 14:55:10'),
(10, '', '', 0, '', '', 0, 1, 'title 3', 'Nunc sollicitudin erat at ligula vehicula, vel cursus arcu ornare. Quisque gravida eros eu sapien rutrum pellentesque. Aliquam nec posuere leo. Integer fringilla massa vulputate tincidunt ullamcorper. Vestibulum et blandit massa. Mauris iaculis tincidunt urna a feugiat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec eget nunc vel tellus auctor accumsan. Donec volutpat, risus vel efficitur finibus, augue neque consectetur nibh, vel tempus nulla nisi sed lorem. Etiam in est nec arcu placerat dapibus. Integer sed venenatis quam. Maecenas viverra orci vel molestie vehicula. Fusce mattis turpis ac sem facilisis egestas. Suspendisse sodales sapien eu leo eleifend, ornare tempus nibh efficitur.', '2016-09-28 14:55:24'),
(11, '', '', 0, '', '', 0, 1, 'title 4', 'Fusce iaculis dictum sem sit amet tempus. Etiam a urna vel nunc tempor tristique a in ex. Cras non nisl augue. Nullam nec ex massa. Quisque pulvinar lacus condimentum, condimentum ligula a, ornare ligula. Maecenas eget nunc nec leo dictum rutrum. In tempus nisi ut libero sollicitudin accumsan a eget tellus. Praesent accumsan blandit pulvinar. Aliquam sed molestie tortor, at auctor ex. Vestibulum fermentum mollis pretium. Maecenas imperdiet fermentum imperdiet.', '2016-09-28 14:55:38'),
(12, '', '', 0, '', '', 0, 1, 'title 5', 'Duis nunc enim, mattis ac lectus quis, sodales volutpat turpis. Sed elementum nunc turpis, eu aliquet leo maximus scelerisque. Duis urna lorem, posuere eget metus quis, viverra rutrum neque. Phasellus orci enim, viverra eu consectetur a, egestas volutpat tortor. Sed mi ligula, sagittis ac diam sit amet, fermentum porta magna. Mauris dictum ante vitae libero scelerisque, sed accumsan dolor accumsan. Vivamus justo tortor, bibendum sit amet vestibulum sed, commodo a lacus. Fusce finibus maximus rhoncus. Sed at diam sit amet orci mollis ultrices ut sit amet felis. Donec ac justo at lectus ornare dictum et eu tellus. Curabitur sollicitudin finibus orci, ac placerat arcu lacinia et. Donec vulputate tempor magna, quis sollicitudin felis.', '2016-09-28 14:55:50');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `news_file` varchar(100) NOT NULL,
  `news_type` varchar(10) NOT NULL,
  `news_size` int(11) NOT NULL,
  `news_info_active` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_desc` text NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`news_id`, `news_file`, `news_type`, `news_size`, `news_info_active`, `news_title`, `news_desc`, `insert_time`) VALUES
(2, '57654-11.jpg', 'image/jpeg', 15, 1, 'title news 2 ', 'Maecenas rhoncus finibus bibendum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dui eros, dapibus vel nibh non, dignissim feugiat erat. Aenean eget libero congue, iaculis diam eu, viverra arcu. Nullam vitae est ultrices, varius eros ut, lobortis massa. Nullam scelerisque maximus commodo. Donec eget semper enim. Aliquam dictum gravida sapien, et luctus nibh semper nec. Vivamus eros leo, blandit nec cursus vel, hendrerit in nisl. Vestibulum interdum porttitor eros, a lacinia libero blandit a. Donec facilisis non ligula et elementum. Suspendisse fringilla, est eget tristique faucibus, eros magna molestie libero, ut eleifend urna sapien eget felis. Curabitur vestibulum ut nisl sed tempor. Quisque mattis velit a est pharetra, ut ultricies orci cursus. Cras non ex nulla.', '2016-09-28 14:57:57'),
(3, '29430-4.jpg', 'image/jpeg', 27, 1, 'news 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at porta sapien. Mauris massa tortor, euismod ac volutpat interdum, viverra quis enim. Nunc ut finibus enim, et pretium nibh. Sed pharetra est nec mauris convallis, vitae vehicula erat gravida. Aliquam sit amet bibendum ligula. In fringilla ex ut eros consectetur, eget rhoncus ligula porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nSuspendisse eleifend id tellus ut consectetur. Aenean ornare dolor in purus tempus, porta fringilla sem accumsan. Sed ac fermentum nulla. Nullam auctor, quam ut accumsan facilisis, velit nisl commodo leo, quis porta tellus ante id mi. Nunc ornare non ante et ullamcorper. Etiam venenatis felis magna, sed finibus arcu gravida eu. Sed quis porta leo. Vivamus maximus sit amet dolor at finibus. Nam eleifend lectus rutrum quam cursus, eu tincidunt nunc bibendum.', '2016-09-28 15:04:58');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `time_work_title` varchar(255) NOT NULL,
  `time_work_desc` text NOT NULL,
  `time_work_active` int(11) NOT NULL,
  `need_co_title` varchar(255) NOT NULL,
  `need_co_desc` text NOT NULL,
  `need_co_active` int(11) NOT NULL,
  `price_title` varchar(255) NOT NULL,
  `price_desc` text NOT NULL,
  `price_active` int(11) NOT NULL,
  `catalog_info_title` varchar(255) NOT NULL,
  `catalog_info_desc` text NOT NULL,
  `catalog_info_active` int(11) NOT NULL,
  `about_us_title` varchar(255) NOT NULL,
  `about_us_desc` text NOT NULL,
  `about_us_active` int(11) NOT NULL,
  `history_our_title` varchar(255) NOT NULL,
  `history_our_desc` text NOT NULL,
  `history_our_active` int(11) NOT NULL,
  `vacancy_title` varchar(255) NOT NULL,
  `vacancy_desc` text NOT NULL,
  `vacancy_active` int(11) NOT NULL,
  `legal_address_title` varchar(255) NOT NULL,
  `legal_address_desc` text NOT NULL,
  `legal_address_active` int(11) NOT NULL,
  `mail_address_title` varchar(255) NOT NULL,
  `mail_address_desc` text NOT NULL,
  `mail_address_active` int(11) NOT NULL,
  `plan_transit_title` varchar(255) NOT NULL,
  `plan_transit_desc` text NOT NULL,
  `plan_transit_active` int(11) NOT NULL,
  `contact_info_title` varchar(255) NOT NULL,
  `contact_info_desc` text NOT NULL,
  `contact_info_active` int(11) NOT NULL,
  `bank_props_title` varchar(255) NOT NULL,
  `bank_props_desc` text NOT NULL,
  `bank_props_active` int(11) NOT NULL,
  `pages_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`pages_id`, `time_work_title`, `time_work_desc`, `time_work_active`, `need_co_title`, `need_co_desc`, `need_co_active`, `price_title`, `price_desc`, `price_active`, `catalog_info_title`, `catalog_info_desc`, `catalog_info_active`, `about_us_title`, `about_us_desc`, `about_us_active`, `history_our_title`, `history_our_desc`, `history_our_active`, `vacancy_title`, `vacancy_desc`, `vacancy_active`, `legal_address_title`, `legal_address_desc`, `legal_address_active`, `mail_address_title`, `mail_address_desc`, `mail_address_active`, `plan_transit_title`, `plan_transit_desc`, `plan_transit_active`, `contact_info_title`, `contact_info_desc`, `contact_info_active`, `bank_props_title`, `bank_props_desc`, `bank_props_active`, `pages_time`) VALUES
(1, 'time work title', 'Donec a lobortis nunc, in convallis nunc. Suspendisse potenti. In sagittis ante eget mi placerat, sed hendrerit justo aliquet. Morbi varius sit amet quam aliquet consectetur. Phasellus venenatis euismod pulvinar. Integer odio justo, semper sit amet molestie et, vulputate auctor massa. Quisque rutrum magna odio. In et malesuada ipsum. Vivamus mollis aliquam mi id accumsan. Aliquam interdum lacus et odio sagittis facilisis. Nam non tincidunt arcu. Praesent ac ante mattis diam semper finibus. Nunc molestie laoreet libero et vestibulum. Nullam nec pulvinar elit, non ornare nisl.', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 14:58:13'),
(2, '', '', 0, 'need co title', 'Nullam non placerat mi. Integer venenatis urna at nunc imperdiet volutpat. Quisque ultricies malesuada metus. Mauris vitae augue vitae diam porta tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum volutpat ullamcorper massa sed mollis. Sed rutrum arcu in nisi semper, et lacinia nisi aliquet. Duis ac ante scelerisque, condimentum odio at, faucibus dolor. Mauris a elit eu ex porta bibendum et et dolor.\r\n\r\nInteger venenatis leo convallis sollicitudin ornare. Sed ligula dolor, elementum id nisi sit amet, faucibus maximus orci. Donec vel augue vel felis feugiat efficitur vitae a tortor. Quisque eu risus enim. Vivamus semper at est pulvinar bibendum. Quisque sit amet molestie enim. Fusce sem diam, ornare sed est in, eleifend luctus enim. Cras at egestas leo, eu congue lacus. Curabitur a efficitur libero.', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 14:58:27'),
(3, '', '', 0, '', '', 0, 'price title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar ultrices augue vitae elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam blandit dictum. Nunc aliquam leo id dui sagittis, quis pretium ex interdum. Praesent mattis sagittis justo. Sed malesuada erat a eros pharetra, nec cursus justo elementum. Maecenas nec tincidunt mauris, id hendrerit lectus. Aliquam non eros consectetur risus dictum iaculis et ac magna. Suspendisse sapien felis, lobortis at fringilla nec, eleifend sit amet sem. Fusce cursus volutpat elit, in dapibus purus sollicitudin quis. Curabitur tempor nibh elit, a hendrerit ante mattis sed. Curabitur dolor ante, dapibus sit amet porta vitae, pretium vitae augue. Donec accumsan ut ligula ut ullamcorper.', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 14:58:48'),
(4, '', '', 0, '', '', 0, '', '', 0, 'catalog info title', 'Maecenas rhoncus finibus bibendum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dui eros, dapibus vel nibh non, dignissim feugiat erat. Aenean eget libero congue, iaculis diam eu, viverra arcu. Nullam vitae est ultrices, varius eros ut, lobortis massa. Nullam scelerisque maximus commodo. Donec eget semper enim. Aliquam dictum gravida sapien, et luctus nibh semper nec. Vivamus eros leo, blandit nec cursus vel, hendrerit in nisl. Vestibulum interdum porttitor eros, a lacinia libero blandit a. Donec facilisis non ligula et elementum. Suspendisse fringilla, est eget tristique faucibus, eros magna molestie libero, ut eleifend urna sapien eget felis. Curabitur vestibulum ut nisl sed tempor. Quisque mattis velit a est pharetra, ut ultricies orci cursus. Cras non ex nulla.', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 14:59:03'),
(5, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'about us title', 'Donec a lobortis nunc, in convallis nunc. Suspendisse potenti. In sagittis ante eget mi placerat, sed hendrerit justo aliquet. Morbi varius sit amet quam aliquet consectetur. Phasellus venenatis euismod pulvinar. Integer odio justo, semper sit amet molestie et, vulputate auctor massa. Quisque rutrum magna odio. In et malesuada ipsum. Vivamus mollis aliquam mi id accumsan. Aliquam interdum lacus et odio sagittis facilisis. Nam non tincidunt arcu. Praesent ac ante mattis diam semper finibus. Nunc molestie laoreet libero et vestibulum. Nullam nec pulvinar elit, non ornare nisl.', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 14:59:17'),
(6, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'history our', 'Nullam non placerat mi. Integer venenatis urna at nunc imperdiet volutpat. Quisque ultricies malesuada metus. Mauris vitae augue vitae diam porta tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum volutpat ullamcorper massa sed mollis. Sed rutrum arcu in nisi semper, et lacinia nisi aliquet. Duis ac ante scelerisque, condimentum odio at, faucibus dolor. Mauris a elit eu ex porta bibendum et et dolor.\r\n\r\nInteger venenatis leo convallis sollicitudin ornare. Sed ligula dolor, elementum id nisi sit amet, faucibus maximus orci. Donec vel augue vel felis feugiat efficitur vitae a tortor. Quisque eu risus enim. Vivamus semper at est pulvinar bibendum. Quisque sit amet molestie enim. Fusce sem diam, ornare sed est in, eleifend luctus enim. Cras at egestas leo, eu congue lacus. Curabitur a efficitur libero.', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 14:59:31'),
(7, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'vacancy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur non odio dignissim ultrices. Nunc dolor dolor, aliquet ac tortor at, iaculis porta elit. Proin ut velit eu nunc dignissim ultrices. In nec orci tempus, sodales nisi vel, accumsan justo. Nulla sit amet lectus fringilla, tincidunt nulla a, molestie dui. Suspendisse hendrerit consequat fringilla. Etiam vitae dapibus dolor. Nam rutrum accumsan posuere.', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 14:59:52'),
(8, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'legal address titile', 'Morbi a accumsan sem. Quisque odio erat, tempor sit amet dolor in, congue fermentum velit. Praesent sed erat mollis, malesuada augue at, pellentesque urna. Proin quis efficitur tortor. Aenean rhoncus eros et nibh tristique mattis. Nam porttitor pellentesque tincidunt. Maecenas at cursus ex. Praesent consectetur eros sed accumsan congue. Sed dictum sodales vulputate. Etiam ut laoreet mi. Maecenas ultrices, ipsum ac commodo pulvinar, felis sapien rutrum erat, consequat tempus nisi nunc vel velit. Aliquam turpis ipsum, elementum vel sapien in, ullamcorper ultrices urna. Fusce hendrerit turpis mi, tristique congue turpis sollicitudin id. Maecenas vestibulum et erat ac pulvinar. Integer congue vehicula interdum. Nam in mauris in sapien dignissim volutpat vitae ac velit.', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 15:00:07'),
(9, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'mail address', 'Suspendisse at nisi eu massa consectetur lobortis eu id felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam at magna a orci euismod tempor. Fusce eget odio quis odio convallis efficitur ut gravida leo. Aliquam in justo id nunc malesuada mollis id eu dui. Pellentesque dignissim, erat in viverra congue, metus leo aliquam tortor, sit amet dictum magna elit ac dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed quis elit et lectus viverra lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus sed auctor est, nec maximus metus. Integer at ultricies ipsum, sit amet sodales purus.', 1, '', '', 0, '', '', 0, '', '', 0, '2016-09-28 15:00:19'),
(10, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'plan transit title', 'Aliquam vel porta massa. Integer a aliquam tellus. Duis fringilla dui eu urna fringilla elementum. Praesent varius semper ipsum vitae posuere. Cras auctor nulla turpis. Vestibulum ornare, orci eu cursus auctor, purus nunc ornare nisl, sit amet tincidunt justo sem eu eros. Nulla viverra condimentum est, ut placerat sem faucibus non. Cras a nisi nibh. Morbi fermentum et nulla nec consectetur. Quisque non auctor purus. Integer consequat ex risus, sit amet faucibus dui rutrum eget. In et accumsan odio. Vestibulum blandit suscipit tellus, in fringilla mi molestie vitae. In auctor purus non est lacinia, ac dictum eros luctus. Mauris facilisis molestie lacus, facilisis convallis diam porta ac.', 1, '', '', 0, '', '', 0, '2016-09-28 15:00:36'),
(11, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'contact info', 'Fusce non interdum quam. Pellentesque fringilla, mauris id hendrerit finibus, tortor enim lacinia metus, id facilisis nulla lectus sit amet elit. Nulla finibus metus eget nisi commodo sagittis sit amet vitae quam. Suspendisse placerat nec magna non accumsan. Integer eu nisl eget augue viverra ultrices id vitae nisl. Sed varius, lectus eget maximus blandit, justo nibh volutpat tortor, porta suscipit ante eros a justo. Mauris accumsan massa nec ultricies mollis. Vestibulum imperdiet, lorem nec posuere ullamcorper, ante nibh congue dui, ut vehicula mi odio et velit.', 1, '', '', 0, '2016-09-28 15:00:49'),
(12, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'bank props title', 'Morbi a accumsan sem. Quisque odio erat, tempor sit amet dolor in, congue fermentum velit. Praesent sed erat mollis, malesuada augue at, pellentesque urna. Proin quis efficitur tortor. Aenean rhoncus eros et nibh tristique mattis. Nam porttitor pellentesque tincidunt. Maecenas at cursus ex. Praesent consectetur eros sed accumsan congue. Sed dictum sodales vulputate. Etiam ut laoreet mi. Maecenas ultrices, ipsum ac commodo pulvinar, felis sapien rutrum erat, consequat tempus nisi nunc vel velit. Aliquam turpis ipsum, elementum vel sapien in, ullamcorper ultrices urna. Fusce hendrerit turpis mi, tristique congue turpis sollicitudin id. Maecenas vestibulum et erat ac pulvinar. Integer congue vehicula interdum. Nam in mauris in sapien dignissim volutpat vitae ac velit.\r\n\r\nSuspendisse at nisi eu massa consectetur lobortis eu id felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam at magna a orci euismod tempor. Fusce eget odio quis odio convallis efficitur ut gravida leo. Aliquam in justo id nunc malesuada mollis id eu dui. Pellentesque dignissim, erat in viverra congue, metus leo aliquam tortor, sit amet dictum magna elit ac dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed quis elit et lectus viverra lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus sed auctor est, nec maximus metus. Integer at ultricies ipsum, sit amet sodales purus.', 1, '2016-09-28 15:01:03');

-- --------------------------------------------------------

--
-- Структура таблицы `pages_info`
--

CREATE TABLE `pages_info` (
  `pages_info_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `page_desc` text NOT NULL,
  `page_info_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pages_info`
--

INSERT INTO `pages_info` (`pages_info_id`, `title`, `page_desc`, `page_info_time`) VALUES
(1, 'tablo one to admins', 'this is the tablo description', '2016-09-28 15:33:04'),
(2, 'tablo two and with description', 'welcome to admins dashboard', '2016-09-28 15:35:17');

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL DEFAULT 'admin.png',
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `name_active` int(11) NOT NULL,
  `surname` varchar(55) NOT NULL,
  `surname_active` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `email_active` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info_desc` text NOT NULL,
  `profile_active` int(11) NOT NULL,
  `profile_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`profile_id`, `file`, `type`, `size`, `name`, `name_active`, `surname`, `surname_active`, `email`, `email_active`, `title`, `info_desc`, `profile_active`, `profile_time`) VALUES
(1, '78486-36037-admin.png', 'image/png', 56, '', 0, '', 0, '', 0, '', '', 0, '2016-09-28 14:42:11'),
(2, 'admin.png', '', 0, 'super user', 1, '', 0, '', 0, '', '', 0, '2016-09-28 14:52:57'),
(3, 'admin.png', '', 0, '', 0, 'super user surname', 1, '', 0, '', '', 0, '2016-09-28 14:53:08'),
(4, 'admin.png', '', 0, '', 0, '', 0, 'super user email', 1, '', '', 0, '2016-09-28 14:53:17'),
(5, 'admin.png', '', 0, '', 0, '', 0, '', 0, 'about super user to other admins', 'some information about super users and permissions', 1, '2016-09-28 14:53:56');

-- --------------------------------------------------------

--
-- Структура таблицы `profile_img`
--

CREATE TABLE `profile_img` (
  `profile_img_id` int(11) NOT NULL,
  `user_img` varchar(55) NOT NULL,
  `file` varchar(100) NOT NULL DEFAULT 'admin.png',
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `name_active` int(11) NOT NULL,
  `user_surname` varchar(55) NOT NULL,
  `surname` varchar(55) NOT NULL,
  `surname_active` int(11) NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `email_active` int(11) NOT NULL,
  `user_company` varchar(55) NOT NULL,
  `company` varchar(55) NOT NULL,
  `company_active` int(11) NOT NULL,
  `user_about` varchar(55) NOT NULL,
  `about_you` text NOT NULL,
  `info_active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `profile_img`
--

INSERT INTO `profile_img` (`profile_img_id`, `user_img`, `file`, `type`, `size`, `user_name`, `name`, `name_active`, `user_surname`, `surname`, `surname_active`, `user_email`, `email`, `email_active`, `user_company`, `company`, `company_active`, `user_about`, `about_you`, `info_active`) VALUES
(1, 'userka', '33665-36037-admin.png', 'image/png', 56, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
(2, '', 'admin.png', '', 0, 'userka', 'userka', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
(3, '', 'admin.png', '', 0, '', '', 0, 'userka', 'userka', 1, '', '', 0, '', '', 0, '', '', 0),
(4, '', 'admin.png', '', 0, '', '', 0, '', '', 0, 'userka', 'userka@userka', 1, '', '', 0, '', '', 0),
(5, '', 'admin.png', '', 0, '', '', 0, '', '', 0, '', '', 0, 'userka', 'userka co inc', 1, '', '', 0),
(6, '', 'admin.png', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'userka', 'hello everybody and im userka :)', 1),
(7, '', 'admin.png', '', 0, 'userka2', 'userka 2', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
(8, '', 'admin.png', '', 0, '', '', 0, 'userka2', 'userka 2 sur', 1, '', '', 0, '', '', 0, '', '', 0),
(9, '', 'admin.png', '', 0, '', '', 0, '', '', 0, 'userka2', 'userka2@userka2 ', 1, '', '', 0, '', '', 0),
(10, '', 'admin.png', '', 0, '', '', 0, '', '', 0, '', '', 0, 'userka2', 'userka2 com inc', 1, '', '', 0),
(11, '', 'admin.png', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 'userka2', 'userka2 its im', 1),
(12, 'userka2', '60733-android.jpg', 'image/jpeg', 3, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
(13, 'userka3', '75616-bg.jpg', 'image/jpeg', 2, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_database`
--

CREATE TABLE `user_database` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user_database`
--

INSERT INTO `user_database` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'adminka1', 'adminka1'),
(2, 'adminka2', 'adminka2'),
(3, 'adminka3', 'adminka3'),
(4, 'userka', 'userka'),
(5, 'userka2', 'userka2'),
(6, 'userka3', 'userka3'),
(7, 'userka4', 'userka4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Индексы таблицы `form_beef`
--
ALTER TABLE `form_beef`
  ADD PRIMARY KEY (`form_beef_id`);

--
-- Индексы таблицы `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Индексы таблицы `pages_info`
--
ALTER TABLE `pages_info`
  ADD PRIMARY KEY (`pages_info_id`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Индексы таблицы `profile_img`
--
ALTER TABLE `profile_img`
  ADD PRIMARY KEY (`profile_img_id`);

--
-- Индексы таблицы `user_database`
--
ALTER TABLE `user_database`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `form_beef`
--
ALTER TABLE `form_beef`
  MODIFY `form_beef_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `pages_info`
--
ALTER TABLE `pages_info`
  MODIFY `pages_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `profile_img`
--
ALTER TABLE `profile_img`
  MODIFY `profile_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `user_database`
--
ALTER TABLE `user_database`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
