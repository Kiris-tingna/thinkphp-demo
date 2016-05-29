-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 12 月 01 日 11:49
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- 表的结构 `think_access`
--

CREATE TABLE IF NOT EXISTS `think_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_access`
--

INSERT INTO `think_access` (`role_id`, `node_id`, `level`, `module`) VALUES
(2, 5, 3, NULL),
(2, 6, 3, NULL),
(2, 3, 2, NULL),
(2, 1, 1, NULL),
(1, 7, 3, NULL),
(1, 8, 3, NULL),
(1, 9, 3, NULL),
(1, 4, 2, NULL),
(1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `think_animate`
--

CREATE TABLE IF NOT EXISTS `think_animate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `vactor` text NOT NULL,
  `pic` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `company` varchar(32) NOT NULL,
  `tid` int(11) NOT NULL,
  `click` int(11) NOT NULL DEFAULT '0',
  `rate` smallint(6) NOT NULL DEFAULT '0',
  `reply` int(11) NOT NULL DEFAULT '0',
  `state` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `think_animate`
--

INSERT INTO `think_animate` (`id`, `name`, `content`, `vactor`, `pic`, `time`, `company`, `tid`, `click`, `rate`, `reply`, `state`) VALUES
(1, '测试111', '这是动漫介绍', '11,111,1111', '/Tp_group/Uploads/201410/54451474c3b31.jpg', 1413813482, '3333333', 2, 0, 10, 0, 0),
(2, '魔弹之王与战姬', '布琉努王国里有块位于边境的弹丸之地亚尔萨斯，而这里的领导人是个随遇而安的贵族少年堤格尔维尔穆德·冯伦。因为王国的征招，堤格尔被迫上到战场上，双方人数相差快5倍，原本以为这场是必胜的战争，然而对手是吉斯塔特中的“七战姬”之一、拥有“银闪的风姬”名号的艾蕾欧诺拉·维尔塔利亚，在她出奇不意的战略下，击破了布琉努大军。战乱中堤格尔虽然尝试利用最擅长的弓击杀敌人主将，但却反而被她高超的剑技打败。就在堤格尔绝望的做好受死准备之时……', '321321', '/Tp_group/Uploads/201410/544e284e61074.jpg', 1417000487, '2321', 2, 0, 22222, 0, 0),
(3, '飙速宅男', '12321', '略', '/Tp_group/Uploads/201410/544e32b5058c2.jpg', 1417001619, '。。。', 2, 0, 12312, 0, 0),
(4, '心理测量者', '改革若干', 'qweq', '/Tp_group/Uploads/201410/544e35c688e0c.jpg', 1417001631, '2个呵呵呵', 2, 0, 0, 0, 0),
(5, '四月是你的谎言', '3123', '2132', '/Tp_group/Uploads/201410/544e35f3a6128.jpg', 1417001640, '21312', 2, 0, 1321, 0, 0),
(6, '天体运行时', '1232', '321321', '/Tp_group/Uploads/201410/544e36271315c.jpg', 1417001684, '2321', 6, 0, 31, 0, 0),
(7, '境界触发者', '12312', '1231', '/Tp_group/Uploads/201410/544e365b64235.jpg', 1414411867, '213', 1, 0, 3213, 0, 0),
(8, '甘城辉煌乐园救世主', '213', '3123', '/Tp_group/Uploads/201410/543f60445b964.jpg', 1417001735, '312', 2, 0, 2312, 0, 0),
(9, '测试用例', '这是测试用例', 'japan', '/Tp_group/Uploads/201410/544248b4adcdb.jpg', 1413968904, '略', 1, 0, 10, 0, 0),
(10, '少女漫', '这是测试用例', '女性声优', '/Tp_group/Uploads/201410/5442493ca5efc.jpeg', 1417001726, '略...', 1, 0, 10, 0, 0),
(11, '测试用例', 'ACSA车', '略', '/Tp_group/Uploads/201410/5442496d41c8f.jpg', 1417002405, '略', 1, 0, 0, 0, 0),
(12, '2123', '3213', '3123213', '/Tp_group/Uploads/201410/54424afe6cbd9.jpg', 1417001715, '312', 2, 0, 12321, 0, 0),
(13, '123', '2312', '3213', '/Tp_group/Uploads/201410/5448d169ea370.png', 1414058345, '3123', 6, 0, 3123, 0, 0),
(14, '天使与龙的轮舞', 'zheshijieshao', 'lue', '/Tp_group/Uploads/201410/54449ed3dfecf.jpg', 1414404810, '123213', 6, 0, 10, 0, 0),
(15, '美少女死神还我H之魂', '人类与死神定下契约，以获取更好的生活；死神与人类定下契约，以获取灵力以及契约者死后的生命宝石。身为死神的女主角莉萨菈从表妹裘儿口中得知有关未签约的特异者情报后，因而私自来到人间找寻特异者；身为人类的主角加贺良介，则是除了极端好色外，一无是处的高中生。两人在因缘际会下定下了暂定契约，但代价却是良介看得比生命还重的“色欲”…… 良介看着面前只穿了一件衬衫的美少女死神莉萨菈，不禁放声哀嚎： 「见到这幅画面，我却没有半点冲动？把我的、我的色心还来啊啊啊啊啊！」 「看样子，我似乎替这世界上的女孩子做了件好事。」', '远藤绫/下野紘/西口杏里沙', '/Tp_group/Uploads/201410/54475d1c106cd.jpg', 1417001749, 'XXX', 1, 0, 10, 0, 0),
(16, '东京喰种', '在纷乱嘈杂的现代化城市——东京，蔓延着一种吞食死尸的怪人，人们称之为喰种。那一日，金木研——上井大学的一名普通学生——遇上了某位神秘女子（实为喰种），进而卷入了一场精心策划的事故。自此，充满波折的命运齿轮开始转动了', '略', '/Tp_group/Uploads/201410/54476df76d667.jpg', 1413967351, '略', 1, 0, 10, 0, 0),
(17, '大图书馆的牧羊人', '男主角笕京太郎是位具有能预测马上会发生的事件能力的高中生，作为图书社的成员过着随波逐流的人生。但是因为有樱庭玉藻、御园千莉、铃木佳奈、高峰一景，再加上不知为何经常来凑热闹的小太刀凪，本来是最棒的读书空间的社团室变成了午休时间的教室一般喧闹。故事便围绕着这样一群人的日常展开，不过在某些特定的关键时刻，大家会收到以牧羊人之名义发送的短信。男主小时候曾收到编号第771号牧羊人的书签，内容是牧羊人的人生纪录。那么牧羊人究竟是谁呢？', '米泽圆', '/Tp_group/Uploads/201410/54476f9d01076.jpg', 1413967773, '略', 6, 0, 9, 0, 0),
(18, '关于完全听不懂老公在说什么的事', '有个宅男老公也许也是一件挺有趣的事吧？热心于工作的OL“薰”是个普通人，而她的老公这是沉迷于某大型网路留言版的阿宅，故事就围绕着这样的2人的夫妻日常展开', '论文全文', '/Tp_group/Uploads/201410/5447705b35bbe.jpg', 1416968543, '请二位', 2, 0, 8, 0, 0),
(19, '黑子的篮球第二季', '日本人气动画《黑子的篮球》的续作，黑子的篮球全集动画改编自改编自藤卷忠俊创作的同名漫画，讲述的是帝光中学中学篮球部，部员一百余人全国联赛三年冕的超级豪门，在其光辉历史中有五个十年难遇的天才，他们被称为“奇迹的世代”，但有一个奇妙的传说，谁都未知晓也没有上场记录，即使如此，仍让五个天才也不敢小看的一个人，他就是幻之第六人，本作的男主角黑子哲也', '小野贤章，小野友树', '/Tp_group/Uploads/201410/544770e2d2e6c.jpg', 1413968634, 'Production I.G', 6, 0, 8, 0, 0),
(20, '晨曦公主', '从小备受父王及哈克宝贝呵护的高华国公主‧优娜，在她16岁生日的当天，她的心上人蘇芳来到宫殿，并送她漂亮的发簪。不过优娜的父亲并不允许她跟蘇芳的交往，依旧对蘇芳无法死心的优娜决定向父王表明她的心意时，却意外地撞见父亲被刺杀的惊人场面。不肯面对事实的优娜从此便与护卫哈克展开一连串的逃亡生活', '斋藤千和，前野智昭，小林裕介', '/Tp_group/Uploads/201410/544772761b915.jpg', 1414058384, 'Studio Pierrot', 6, 0, 10, 0, 0),
(21, '棺姬嘉依卡', '托鲁一行在航天要塞事件结束後，旅程还要继续下去。一行人揣著未解的无数谜团，前去皇帝遗体所沉眠的海域。\r\n　　他们和红色嘉依卡意外重逢，并突然惨遭来历不明的亚人士兵及大海魔的猛烈攻击！激战过後，他们漂流到一座远海上的孤岛。托鲁一行人在岛上的牢狱之中，遇上了一位阴阳妖瞳的少女。', '安济知佳，间岛淳司，原优子，斋藤千和', '/Tp_group/Uploads/201410/544e32405f78b.jpg', 1416968561, 'BONES', 2, 0, 10, 0, 0),
(22, '寄生兽生命的准则', '某天于地球上空出现许多孢子，其中诞生的幼虫侵入人体后，可以吞噬掉宿主的头部取而代之，从而管理这个“死掉的身体”，它们能任意变形，其食物便是与寄生体相同的物种。男主角泉新一就是被寄生生物寄生的人类之一，但是由于某种意外，寄生在他体内的生物并没有吃掉他的大脑，而只是取代了他的右手。本性善良正直的泉新一没有被这突如其来的残酷命运击倒，为了被寄生兽杀死的亲友，以及所有人类的未来，他决心与其他完全体寄生兽进行殊死搏斗', '略', '/Tp_group/Uploads/201410/544775af1aa30.jpg', 1413969327, 'MADHOUSE', 6, 0, 10, 0, 0),
(23, '我，要成为双马尾', '某天，当来自异世界的美少女‧朵艾儿现身在他面前的同时，总二居住的城镇竟冒出许多怪物！', '内田真礼，上坂堇', '/Tp_group/Uploads/201410/544e327d77079.jpg', 1414410877, 'Production IMS', 6, 0, 10, 0, 0),
(24, '结城友奈是勇者', '故事发生在神世纪300年，主要讲述结城友奈是初中2年级学生，她天天在学校里过着与很多朋友一同听课、进行社团活动、玩耍的平稳生活。不管怎么看这都是非常普通的女孩的生活日程，但是只有一点与其他孩子决定性不同的地方，那就是她所属的名为“勇者部”的社团活动。以部长犬吠埼风为中心的该社团的活动内容与被谜团包围的叫做Vertex的不可思议的存在有关系，本作正是以描写友奈等人的“勇者部”的活动为主', '内山夕实，黑泽知叶', '/Tp_group/Uploads/201410/5447770f2f6c2.jpg', 1416968576, 'Studio 五组', 2, 0, 10, 0, 0),
(25, 'Fate stay night之无限剑制', ' 圣杯是传说中可实现持有者一切愿望的宝物.而为了得到圣杯的仪式就被称为圣杯战争.参加圣杯战争的7名由圣杯选出的魔术师被称为Master,与7名被称为Servant的使魔订定契约.他们是由圣杯选择的七位英灵,被分为七个职阶,以使魔的身份被召唤出来.能获得圣杯的只有一组,这7组人马各自为了成为最后的那一组而互相残杀.卫宫切嗣的养子卫宫士郎,偶然地与servant中的剑士Saber订定契约,被卷入圣杯战争当中', '杉山纪彰，植田佳奈，川澄绫子，诹访部顺一，下屋则子，门胁舞以', '/Tp_group/Uploads/201410/544e36bf5a0f3.jpg', 1414411967, '略', 1, 0, 10, 0, 3),
(26, '三坪房间的侵略者', '以高中入学为契机为开始一个人生活的里见孝太郎，幸运的他找到了只要三坪只要五千日圆的便宜房间可乐娜庄的106号房，而他也以此展开了全新的生活。只不过刚搬进房间的他居然被抢先幽灵抢先入住！甚至地底人、宇宙人、魔法少女也出来抢这间房间！主张有着所有权的孝太郎更是一步也无所退让！以三坪大小为战场，侵略者们将展开行动', '中村悠一，悠木碧，竹达彩奈，铃木絵理', '/Tp_group/Uploads/201410/5448eacf10e42.jpg', 1414064847, 'SILVER LINK.', 3, 0, 9, 0, 0),
(27, '临时女友', '内容是一款专门收集校园女孩的卡牌RPG游戏。玩家是圣樱学园高中二年级的男学生，在上学时有机会可以认识女孩子，每张卡片的等级，属性都不相同，玩家需透过战斗，强化提升卡片的能力素质。卡片依稀有度分成N，HN，R，HR，SR，SSR，UR七个等级。N，HN的卡片容易取得但素质普通，R级以上的卡片需要透过游戏中活动来取得，每张卡片都有声优的配音，随著卡片等级的不同，女生的说话内容也有所变动，当卡片等级最高，好感度全满时，也有机会出现额外的隐藏配音。', '略', '/Tp_group/Uploads/201410/544e2d4a10358.jpg', 1414409546, '略', 4, 0, 7, 0, 0),
(28, '日常系的异能战斗', '以总是憧憬能去使用异能力战斗的世界的高中生安藤寿为原点,没想到某天真正的超能力在他身上觉醒,于是他便有机会成为了学园异能战斗的主角.——虽然可以这么想,但生活在和平的每一天里,既没有毁灭世界的秘密机关,异能战争之类的设定,也没有勇者,魔王等角色的存在.当包括主角在内的 文艺部全员都成为了最强异能持有者,围绕着他们荒谬绝伦的超能力的故事就此上演.', '略', '/Tp_group/Uploads/201410/5448ec1367f0a.jpg', 1414065171, '略', 6, 0, 10, 0, 0),
(29, '七人魔法使', '天，春日新所熟知的世界突然毁灭了。在名为「崩坏现象」的事件发生之后，出现了黑色的太阳，人们都化作光的粒子被黑暗吞噬，他与表妹春日圣一同消失在了异界之中。为了拯救因「崩坏现象」而消失的表妹，春日新进入了王立比布利亚学园就读。然而意想不到的是，在那里等待他的是各具魅力的七名美少女魔道士「TRINITY SEVEN」。', '略', '/Tp_group/Uploads/201410/5448ee5e21c38.jpg', 1414065758, '略', 1, 0, 8, 0, 0),
(30, '东京ESP', '“在我遇见他之前，我是不相信（奇迹）那种东西存在的。”带着这样的想法，漆叶凛华在回家路上发现了“飞在空中的企鹅”为了一夜暴富的凛华追踪企鹅的时候遇到了发光的鱼群，在追寻“飞在空中的企鹅”时，与空中飞过的光之鱼接触后失去了意识。第二天醒来，身体竟然穿过了地板！？同时东京出现了大量的超能力觉醒者', '木户衣吹，河本启佑', '/Tp_group/Uploads/201410/5448eef6e5804.jpg', 1414065910, 'XEBEC', 6, 0, 10, 0, 0),
(31, 'ceshi', '54253', '2222', '/Tp_group/Uploads/201411/5475b270d36c3.jpg', 1417000258, '33', 2, 0, 44, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `think_animate_tag`
--

CREATE TABLE IF NOT EXISTS `think_animate_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=165 ;

--
-- 转存表中的数据 `think_animate_tag`
--

INSERT INTO `think_animate_tag` (`id`, `aid`, `tid`) VALUES
(53, 1, 7),
(54, 1, 4),
(55, 1, 6),
(61, 16, 1),
(62, 19, 1),
(63, 19, 3),
(64, 9, 2),
(65, 9, 5),
(69, 22, 3),
(85, 13, 1),
(86, 13, 5),
(87, 13, 10),
(88, 20, 9),
(89, 20, 7),
(96, 26, 9),
(98, 29, 9),
(99, 30, 9),
(100, 30, 7),
(101, 30, 3),
(102, 14, 2),
(103, 14, 9),
(116, 27, 9),
(120, 23, 9),
(121, 23, 7),
(122, 23, 3),
(134, 7, 1),
(135, 7, 2),
(136, 7, 9),
(137, 7, 4),
(139, 25, 3),
(146, 21, 7),
(147, 21, 9),
(148, 21, 3),
(149, 24, 9),
(151, 2, 9),
(152, 4, 9),
(153, 5, 1),
(154, 5, 4),
(155, 5, 7),
(156, 6, 4),
(157, 6, 9),
(158, 6, 3),
(159, 12, 4),
(160, 12, 7),
(161, 10, 9),
(162, 8, 1),
(163, 15, 9),
(164, 11, 6);

-- --------------------------------------------------------

--
-- 表的结构 `think_attr`
--

CREATE TABLE IF NOT EXISTS `think_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL DEFAULT '',
  `color` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `think_attr`
--

INSERT INTO `think_attr` (`id`, `name`, `color`) VALUES
(1, '置顶', '#ff00ff'),
(2, '推荐', 'limegreen'),
(3, '精华', 'blue');

-- --------------------------------------------------------

--
-- 表的结构 `think_blog`
--

CREATE TABLE IF NOT EXISTS `think_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `pic` varchar(50) NOT NULL DEFAULT '',
  `summary` varchar(255) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `cid` int(10) unsigned NOT NULL,
  `del` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `click` smallint(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `think_blog`
--

INSERT INTO `think_blog` (`id`, `title`, `content`, `pic`, `summary`, `time`, `cid`, `del`, `click`) VALUES
(1, '测试', '测试', '', '', 1412070541, 1, 0, 5),
(2, 'div层知识', '地区为地区为大旗网带我分身乏术31231去1111111111', '', '', 1412084127, 2, 0, 8),
(3, '测试用例', '阿萨达十大撒旦撒打算打22132131', '', '', 1412170755, 10, 0, 8),
(5, '峨眉山环卫工冒险捡游客垃圾 脚下宽不足一米', '<p style="vertical-align:baseline;">\r\n	一名年逾四旬的环卫工人站在悬崖边手握着一根木质长钩，把栏杆外侧的垃圾钩起。 澎湃新闻记者 王嘉赓 图\r\n</p>\r\n<p style="vertical-align:baseline;">\r\n	澎 湃新闻黄金周直播进行中。10月1日9时40分许，峨眉山金顶的东侧台阶，这里是游客观赏日出和云海的最佳点，游客如潮水般一波波地更替。但游客们都在享 受着假期快乐时，在金顶西侧台阶边的一个角落，澎湃新闻(www.thepaper.cn)记者发现一名年过四旬的中年环卫工人，站在安全栏杆外的悬崖 边，冒着随时会坠崖的危险，清理着游人落下的各式垃圾。\r\n</p>\r\n<p style="vertical-align:baseline;">\r\n	当时，这名“悬崖”边的环卫工人口戴白色口罩，头顶白色鸭舌帽，身着红色羽绒服、黑色长裤，戴着一双环卫白手套，手握着一根木质长钩，走在栏杆外宽不足1m的小崖道上。\r\n</p>\r\n<p style="vertical-align:baseline;">\r\n	在清扫垃圾时，这名环卫工人拿起长钩，轻轻一挑，就把栏杆外侧的垃圾钩起。\r\n</p>', '', '峨眉山环卫工冒险捡游客垃圾 脚下宽不足一米', 1412234653, 13, 0, 1039),
(6, '1321321', '312312321321', '', '213231', 1412237133, 11, 0, 9),
(7, '213123', '12321321', '', '1232131', 1412237149, 11, 0, 8),
(9, '代码测试', '<pre class="prettyprint lang-php">&lt;?php\r\n	/**\r\n	* 展示控制器\r\n	*/\r\n	class ShowAction extends Action{\r\n		/**\r\n		 * 方法\r\n		 * @return [type] [description]\r\n		 */\r\n		public function index()\r\n		{\r\n			$id =I(''id'','''',''intval'');\r\n			// 条件\r\n			$field=array(''title'',''time'',''click'',''content'');\r\n			// 查询\r\n			$this-&gt;blog=M(''blog'')-&gt;field($field)-&gt;find($id);\r\n			$this-&gt;display();\r\n		}\r\n	}\r\n?&gt;</pre>', '', '代码', 1412241547, 10, 0, 9),
(10, '代码测试2', '<pre class="prettyprint lang-php">&lt;?php\r\n	/**\r\n	* 展示控制器\r\n	*/\r\n	class ShowAction extends Action{\r\n		/**\r\n		 * 方法\r\n		 * @return [type] [description]\r\n		 */\r\n		public function index()\r\n		{\r\n			$id =I(''id'','''',''intval'');\r\n			// 条件\r\n			$field=array(''title'',''time'',''click'',''content'');\r\n			// 查询\r\n			$this-&gt;blog=M(''blog'')-&gt;field($field)-&gt;find($id);\r\n			$this-&gt;display();\r\n		}\r\n	}\r\n?&gt;</pre>', '', '2', 1412241867, 10, 0, 39),
(11, '', '', '/Tp_group/Uploads/201411/547550d04f8bf.jpg', '', 1416974544, 0, 0, 6),
(12, '命运守护夜 2014/Fate/stay night 201', '<p style="text-indent:2em;">\r\n	<strong><span style="color:#E53333;">【内容介绍】</span></strong>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	圣杯是传说中可实现持有者一切愿望的宝物。而为了得到圣杯的仪式就被称为圣杯战争。参加圣杯战争的<span>7</span>名由圣杯选出的魔术师被称为<span>Master</span>，与<span>7</span>名被称为<span>Servant</span>的使魔订定契约。他们是由圣杯选择的七位英灵，被分为七个职阶，以使魔的身份被召唤出来。能获得圣杯的只有一组，这<span>7</span>组人马各自为了成为最后的那一组而互相残杀。<span class="apple-converted-space">&nbsp;</span>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<!--[if !supportLineBreakNewLine]--><br />\r\n<!--[endif]-->\r\n</p>', '/Tp_group/Uploads/201411/547983be5978f.jpg', '《Fate/stay night》是由动画制作公司ufotable重新制作的，改编自原作的Unlimited Blade Works（无限剑制）路线。动画将分割为2季播放，2014年10月4日播放第一季，2015年4月播放第二季。 ', 1417249726, 0, 0, 43);

-- --------------------------------------------------------

--
-- 表的结构 `think_blog_attr`
--

CREATE TABLE IF NOT EXISTS `think_blog_attr` (
  `bid` int(10) unsigned NOT NULL,
  `aid` int(10) unsigned NOT NULL,
  KEY `bid` (`bid`,`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_blog_attr`
--

INSERT INTO `think_blog_attr` (`bid`, `aid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(3, 2),
(3, 3),
(6, 2),
(7, 2),
(12, 2);

-- --------------------------------------------------------

--
-- 表的结构 `think_cate`
--

CREATE TABLE IF NOT EXISTS `think_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(15) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `sort` smallint(6) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `think_cate`
--

INSERT INTO `think_cate` (`id`, `name`, `pid`, `sort`) VALUES
(20, '动漫资讯', 0, 100),
(22, 'Comic', 0, 100),
(23, '子分类1', 20, 100),
(24, '子分类2', 20, 100),
(25, '字字字在1', 22, 100),
(26, '字字字I帧子2', 22, 100);

-- --------------------------------------------------------

--
-- 表的结构 `think_comment`
--

CREATE TABLE IF NOT EXISTS `think_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `think_comment`
--

INSERT INTO `think_comment` (`id`, `aid`, `uid`, `content`, `time`, `status`) VALUES
(1, 1, 1, '231231412412', 1414220315, 0),
(2, 1, 1, '131231231232321', 1414220528, 0),
(3, 1, 1, '2312321412412', 1414222043, 0),
(4, 1, 1, '414124214214', 1414222048, 0),
(5, 1, 1, '1', 1414238119, 0),
(6, 1, 1, '1', 1414238162, 0),
(7, 1, 1, '测试一下', 1414238573, 0),
(8, 1, 1, '没啥呀', 1414238623, 0);

-- --------------------------------------------------------

--
-- 表的结构 `think_diversity`
--

CREATE TABLE IF NOT EXISTS `think_diversity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `title` varchar(32) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `think_diversity`
--

INSERT INTO `think_diversity` (`id`, `pid`, `order`, `sid`, `title`, `pic`, `time`, `click`, `type`) VALUES
(3, 1, 1323, 'XODAxNTA2OTE2', '3213', '/Tp_group/Uploads/201410/54451474c3b31.jpg', 3123, 0, 'youku'),
(4, 1, 2, 'qew', '132', '/Tp_group/Uploads/201410/54451474c3b31.jpg', 3123, 0, 'youku'),
(5, 14, 1, 'XNzk2NjIyMjMy', '被流放的皇女', '/Tp_group/Uploads/201410/54449ed3dfecf.jpg', 0, 0, 'youku'),
(6, 14, 2, 'XODAxNTA2OTE2', '不顺从的灵魂', '/Tp_group/Uploads/201410/54449ed3dfecf.jpg', 20, 0, 'youku'),
(7, 14, 3, 'XODA2MDQ3NDUy', '维尔维尔奇斯的觉醒', '/Tp_group/Uploads/201410/54449ed3dfecf.jpg', 20, 0, 'youku'),
(8, 14, 4, 'XODExMjc1MTc2', '孤身一人的反叛', '/Tp_group/Uploads/201410/54449ed3dfecf.jpg', 20, 0, 'youku'),
(9, 23, 1, 'XODAwOTkwMjYw', '地球是双马尾的星球', '/Tp_group/Uploads/201410/54477675e889d.jpg', 20, 0, 'youku'),
(10, 23, 2, 'XODA1MzkxMDgw', '双马尾之谜', '/Tp_group/Uploads/201410/54477675e889d.jpg', 20, 0, 'youku'),
(11, 23, 3, 'XODEwNDQzOTQ4', '蓝色怒涛 蓝马尾', '/Tp_group/Uploads/201410/54477675e889d.jpg', 20, 0, 'youku'),
(12, 2, 1, 'XNzk3MTIyNDA4 ', '战场的风姬', '/Tp_group/Uploads/201410/544e284e61074.jpg', 20, 0, 'youku'),
(13, 2, 2, 'XODAxNjk2Nzk2 ', '归来', '/Tp_group/Uploads/201410/544e284e61074.jpg', 20, 0, 'youku'),
(14, 2, 3, 'XODA3MjA5NjQw', '觉醒的魔弹', '/Tp_group/Uploads/201410/544e284e61074.jpg', 20, 0, 'youku'),
(15, 2, 4, 'XODExNTY4OTQw ', '冻涟的雪姬', '/Tp_group/Uploads/201410/544e284e61074.jpg', 20, 0, 'youku');

-- --------------------------------------------------------

--
-- 表的结构 `think_news`
--

CREATE TABLE IF NOT EXISTS `think_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `think_news`
--

INSERT INTO `think_news` (`id`, `form_id`, `content`, `time`, `to_id`) VALUES
(1, 0, '[123]', 1410007736, 0),
(2, 0, '[2]', 1410007746, 0),
(3, 0, '[1]', 1410007816, 0),
(4, 0, '[2]', 1410007818, 0),
(5, 0, '[3]', 1410007821, 0),
(6, 0, '多写一些', 1410162660, 0),
(7, 1, '这是测试数据', 1410162671, 1),
(8, 1, '这是测试数据2', 1410162675, 1),
(9, 1, '这是测试数据3', 1410162677, 1),
(10, 1, '这是测试数据4', 1410162679, 1),
(11, 1, '这是测试数据5', 1410162681, 1),
(12, 1, '这是测试数据6', 1410162683, 1),
(13, 1, '其味无穷', 1411915078, 1),
(14, 1, '这是擦拭', 1413692032, 56),
(15, 1, '知道了', 1413693669, 1),
(29, 56, '现在终于好了啊.....╮(╯▽╰)╭', 1413697100, 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_node`
--

CREATE TABLE IF NOT EXISTS `think_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `think_node`
--

INSERT INTO `think_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(1, 'Admin', '后台应用', 1, NULL, 1, 0, 1),
(2, 'Home', '前台应用', 1, NULL, 1, 0, 1),
(3, 'MsgManage', '帖子管理', 1, NULL, 1, 1, 2),
(4, 'Rbac', 'RBAC权限控制', 1, NULL, 1, 1, 2),
(5, 'index', '帖子列表', 1, NULL, 1, 3, 3),
(6, 'delete', '删除帖子', 1, NULL, 1, 3, 3),
(7, 'index', '用户列表', 1, NULL, 1, 4, 3),
(8, 'role', '角色列表', 1, NULL, 1, 4, 3),
(9, 'node', '节点列表', 1, NULL, 1, 4, 3),
(10, 'addUser', '添加用户', 1, NULL, 1, 4, 3),
(11, 'addRole', '添加角色', 1, NULL, 1, 4, 3),
(12, 'addNode', '添加节点', 1, NULL, 1, 4, 3),
(13, 'Index', '后台首页', 1, NULL, 1, 1, 2),
(14, 'index', '后台首页', 1, NULL, 1, 13, 3);

-- --------------------------------------------------------

--
-- 表的结构 `think_ppt`
--

CREATE TABLE IF NOT EXISTS `think_ppt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `pic` varchar(32) NOT NULL DEFAULT '',
  `state` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `think_ppt`
--

INSERT INTO `think_ppt` (`id`, `aid`, `title`, `pic`, `state`) VALUES
(1, 2, 'zheshiceshi', './Uploads/Ppt/54426010391b4.jpg', 1),
(2, 3, '这是第二章', './Uploads/Ppt/544359c88060e.jpg', 1),
(3, 5, '这是第三张', './Uploads/Ppt/544359f4d8668.jpg', 1),
(4, 16, '东京喰种', './Uploads/Ppt/54476e6f65cc4.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_role`
--

CREATE TABLE IF NOT EXISTS `think_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `think_role`
--

INSERT INTO `think_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(1, 'admin', NULL, 1, '管理员'),
(2, 'Editor', NULL, 1, '编辑者');

-- --------------------------------------------------------

--
-- 表的结构 `think_role_user`
--

CREATE TABLE IF NOT EXISTS `think_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_role_user`
--

INSERT INTO `think_role_user` (`role_id`, `user_id`) VALUES
(1, '56'),
(2, '57'),
(1, '58'),
(2, '58');

-- --------------------------------------------------------

--
-- 表的结构 `think_session`
--

CREATE TABLE IF NOT EXISTS `think_session` (
  `session_id` varchar(255) NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `think_tag`
--

CREATE TABLE IF NOT EXISTS `think_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `think_tag`
--

INSERT INTO `think_tag` (`id`, `pid`, `name`, `sort`) VALUES
(1, 0, '搞笑', 100),
(3, 0, '魔幻', 103),
(4, 0, '冒险', 100),
(6, 0, '科幻', 300),
(7, 0, '战斗', 100),
(8, 0, '机战', 400),
(9, 0, '轻松', 100),
(13, 0, '童话', 100),
(14, 0, '青春', 100),
(15, 0, '励志', 100),
(16, 0, '体育', 100),
(17, 0, '悬疑', 100),
(18, 0, '真人', 100),
(19, 0, '历史', 100),
(20, 0, '竞技', 100),
(21, 0, '校园', 100),
(22, 0, '恋爱', 100),
(23, 0, '日常', 100),
(24, 0, '治愈', 100),
(25, 0, '神话', 100),
(26, 0, '神魔', 100),
(27, 0, '美少女', 100),
(28, 0, '百合', 100),
(29, 0, '耽美', 100),
(30, 0, '后宫', 100),
(31, 0, '其他', 100);

-- --------------------------------------------------------

--
-- 表的结构 `think_type`
--

CREATE TABLE IF NOT EXISTS `think_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `think_type`
--

INSERT INTO `think_type` (`id`, `name`, `sort`) VALUES
(1, '动漫音乐', 100),
(2, '动漫新番', 100),
(6, '动漫资讯', 66);

-- --------------------------------------------------------

--
-- 表的结构 `think_update`
--

CREATE TABLE IF NOT EXISTS `think_update` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `aid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `think_update`
--

INSERT INTO `think_update` (`id`, `title`, `aid`, `time`) VALUES
(1, 'ceshi', 31, 3),
(2, '魔弹之王与战姬', 2, 1),
(3, '飙速宅男', 3, 2),
(4, '心理测量者', 4, 2),
(5, '四月是你的谎言', 5, 1),
(6, '天体运行时', 6, 3),
(7, '2123', 12, 5),
(8, '少女漫', 10, 6),
(9, '甘城辉煌乐园救世主', 8, 4),
(10, '美少女死神还我H之魂', 15, 7),
(11, '测试用例', 11, 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `date` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`uid`, `uname`, `upass`, `pic`, `email`, `active`, `date`, `ip`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', './Uploads/avatar/201410/5448d747eaecd.jpg', '', 0, 1417339674, '0.0.0.0'),
(56, 'lisi', 'dc3a8f1670d65bea69b7b65048a0ac40', './Uploads/avatar/201410/543d0820d4b51.jpg', '', 1, 1413295314, '0.0.0.0'),
(57, 'wangwu', '9f001e4166cf26bfbdd3b4f67d9ef617', './Uploads/avatar/201410/543d0820d4b51.jpg', '', 1, 1411487090, '0.0.0.0'),
(58, 'zhaoliu', '27311020efc4ce2806feca0aab933fbd', './Uploads/avatar/201410/543d0820d4b51.jpg', '', 0, 1411487123, '0.0.0.0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
