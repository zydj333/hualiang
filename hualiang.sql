-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-10-27 07:59:18
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hualiang`
--

-- --------------------------------------------------------

--
-- 表的结构 `db_adminuser`
--

CREATE TABLE IF NOT EXISTS `db_adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `account` varchar(64) NOT NULL COMMENT '登录账户',
  `password` varchar(64) NOT NULL COMMENT '账户密码',
  `username` varchar(32) NOT NULL COMMENT '用户名字',
  `email` varchar(32) NOT NULL COMMENT '联系邮箱',
  `telephone` varchar(64) NOT NULL COMMENT '联系电话',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '添加时间',
  `adder` varchar(32) NOT NULL COMMENT '添加人员',
  `power` int(11) NOT NULL COMMENT '权限',
  `is_del` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理员' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `db_adminuser`
--

INSERT INTO `db_adminuser` (`id`, `account`, `password`, `username`, `email`, `telephone`, `addtime`, `adder`, `power`, `is_del`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', '(づ￣ 3￣)づ', '', '', '2015-10-22 08:37:55', 'admin', 1, 1),
(2, 'admin2', '96e79218965eb72c92a549dd5a330112', '测试账户', '123@163.com', '110', '2015-10-22 08:37:01', '(づ￣ 3￣)づ', 0, 1),
(3, 'zydj333', '0c6c9026531cc152229c492317d0a472', '(づ￣ 3￣)づ', '286923698@qq.com', '18667016030', '2015-10-22 08:37:50', '(づ￣ 3￣)づ', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `db_article`
--

CREATE TABLE IF NOT EXISTS `db_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '索引id',
  `ac_id` int(11) DEFAULT NULL COMMENT '分类id',
  `search_name` varchar(32) DEFAULT NULL COMMENT '查询别名',
  `discription` varchar(256) NOT NULL COMMENT '描述',
  `articleurl` varchar(100) DEFAULT NULL COMMENT '跳转链接',
  `imageurl` varchar(100) DEFAULT NULL COMMENT '图片路径',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '热门',
  `is_recom` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '推荐',
  `seo_title` varchar(100) DEFAULT NULL COMMENT 'seo',
  `seo_keyword` varchar(32) NOT NULL COMMENT 'seo',
  `seo_discription` varchar(256) NOT NULL COMMENT 'seo',
  `views` int(11) DEFAULT '0' COMMENT '浏览量',
  `replay` int(11) DEFAULT '0' COMMENT '回复数',
  `listorder` int(10) unsigned DEFAULT '255' COMMENT '排序',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `article_time` varchar(32) NOT NULL COMMENT '发布时间',
  `sts` tinyint(1) DEFAULT '0' COMMENT '逻辑删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `db_article`
--

INSERT INTO `db_article` (`id`, `ac_id`, `search_name`, `discription`, `articleurl`, `imageurl`, `is_hot`, `is_recom`, `seo_title`, `seo_keyword`, `seo_discription`, `views`, `replay`, `listorder`, `title`, `content`, `article_time`, `sts`) VALUES
(1, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(2, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(3, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(4, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(5, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(6, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(7, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(8, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(9, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(10, 1, '华良集团', '华良集团', NULL, NULL, 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '华良集团', '华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团华良集团', '1438325699', 1),
(11, 1, '华良集团', '华良集团', NULL, '', 0, 0, '华良集团', '华良集团', '华良集团', 0, 0, 255, '财来电', '<h2>\r\n	<div class="sq_news_d_text">\r\n		<span style="font-size:18px;font-family:SimSun;"><strong>关于<span style="color:#FF9900;">财来电</span></strong></span> \r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;"><strong>财来电</strong>（www.cailaidian.cn），是以互联网及移动互联网为基础的创新型第三方财富管理机构，定位于“金融理财的一站式云服务平台”，创新型地构建互联网金融O2O模式，以连锁财富管理机构落地支撑，于2013年在浙江杭州创立。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;"><strong>财来电</strong>的战略体系为“一个定位+六大策略”，定位于打造中国最专业最广大金融理财师的一站式B2C服务平台，通过六大策略满足理财师六大需求，即产品优选、安全保障、收益丰厚、运营高效、增值服务、现结之王。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">公司是由大型民营集团华良集团和几家风险投资基金合资成立的专业性高端理财服务平台, 公司引进国内外先进风控管理理念，专业为广大中高层客户提供全方位的理财规划与财富管理服务。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">公司拥有一批富有活力的金融专家和理财团队，以客户的理财需求为基础，根据客户的风险偏好、财务状况、家庭结构等因素量身定制理财规划，帮助他们实现稳定、安全的财富增值。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;"><span style="font-size:18px;">选择</span><strong><span style="font-size:18px;">财来电</span></strong><span style="font-size:18px;">的三大理由</span></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;"><strong>One：</strong>同收益期限，付息方式，类型，地域，100余款产品满足客户多样化需求</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;"><strong>Two：</strong>高出市场价千8以上的佣金使理财师及客户的利益最大化</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;"><strong>Three：</strong>数千万资金储备，成立24小时内快速现结保障理财师及客户的切身利益</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:18px;font-family:SimSun;color:#FF9900;"><strong>公司使命</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">1、对客户负责，服务至上，诚信保障；</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">2、对员工负责，职业规划，同步成长；</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">3、对股东负责，资产增值，稳定回报；</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">4、对社会负责，回馈社会，服务民生。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">5、通过“诚信、专业、创新、共赢”来创造价值、完成使命。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:18px;font-family:SimSun;color:#FF9900;"><strong>公司愿景</strong></span> \r\n		</p>\r\n		<p>\r\n			<img src="/kindeditor/attached/image/20151020/20151020073008_51610.png" alt="" />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">打造中国最大、最专业的理财一站式云服务平台，创新型的行业O2O模式引领者，成为理财者最贴心的工作伙伴。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:18px;font-family:SimSun;color:#FF9900;"><strong>公司文化</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">个人价值观----诚信、正直、责任、感恩、分享！</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">公司价值观----团结、务实、激情、创新、回报！</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">公司行为准则----理念至上、全力以赴、尽职尽责、惠爱天下！</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:18px;font-family:SimSun;color:#FF9900;"><strong>公司价值</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">财来电九字诀：产品多、收益丰、结款快！</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">优选金融理财，首选财来电；财来电，值得您托付；</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">选择财来电的六大理由：产品优选、安全保障、收益丰厚、运营高效、增值服务、现结之王。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;"><strong>财来电</strong>，智慧金融创造财富，普惠金融服务民生。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:18px;font-family:SimSun;color:#FF9900;"><strong>发展历程</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">公司努力探索中国私人财富管理事业的发展新路\r\n径，深入研究财富管理行业的新趋势，在独立理财师队伍不断成长和成熟的背景下，通过蓬勃发展的互联网及移动互 \r\n联网的工具来满足独立理财师及高净值客户多样化、个性化的需求。财来电正是基于此应运而生，打造全国最专业最健全的理财一站式云服务平台，并落地连锁财富\r\n 管理机构进行支撑，云服务平台即将上线运营。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:18px;font-family:SimSun;color:#FF9900;"><strong>产品与服务</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">公司的主营业务专注于固定收益信托及证券基金、\r\n资管计划等领域，依托强大的综合运营能力，与国内一百多家优质信托公司及基金子公司形成稳定的战略合作伙伴 \r\n关系，合作的信托及资管投资领域涵盖房地产、矿产能源、金融股权质押、流动资金贷款、债权、文化艺术另类投资等多个门类；致力于打造固定收益类产品规模、\r\n 期限、收益、类型最为丰富和齐全的理财平台,并落地连锁金融管理机构进行支撑，为投资双方提供多终端、智能化、贴近式无缝服务。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">作为独立的创新型第三方理财机构，我们始终坚持以“独立、公正、客观、专业”的视角为广大投资者甄别和筛选安全、稳健的理财产品，并通过业内领先、独树一帜的“多级风控体系”为投资者优中选优，产品采集与推荐严格，以此确保投资者的资金安全增值</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:18px;font-family:SimSun;color:#FF9900;"><strong>加入我们</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">岗位：理财师（兼职、合作）</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">1、全职理财师（工作区域：杭州）：面向不在职人员，在公司全天上班，接受公司培训。签全职合同，享受全职薪酬福利。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">2、兼职理财师（工作区域：不限）：面向在职人员，也就是有一定客户资源的人员，无需在公司上班，业余时间接受公司培训，签兼职合同。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">3、顾问理财师（工作区域：不限）：也就是业务合作伙伴，拥有高端客户资源，有项目引进能力。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">工作描述</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">为希望在金融业创业的人士提供分析、咨询产品信息的服务业务平台，应聘人员必须具备金融产品的解读、分析以及金融顾问式营销能力。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">工作方式</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">与高端客户沟通后，充分了解客户在理财方面的需求，挑选适合客户需求的理财产品（基金、信托）给客户以达到销售的目的。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">要求</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">1、热爱金融营销行业，对金融行业有相关了解，具备一定的金融基础知识以及持续学习金融相关知识的愿望与能力。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">2、认同公司经营理念，诚实守信，有协作精神。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">3、有较强的中高端客户市场开拓能力以及良好的客户沟通能力，掌握丰富的销售技巧。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">4、有一定的抗压能力与工作激情。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">5、在本行业有市场销售经验者优先，有高端客户源者优先。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">有意者发送简历至 <strong>lidan@hualiangcaifu.com</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;color:#FF9900;"><strong>法律声明</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;color:#FF9900;"><strong>免责条款</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">一、本网提供的信息仅供参考，本网对各类信息的来源、出处作明确描述。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">二、本网信息大部份来自权威媒体机构和作者本人，但本网不保证信息的可靠信、真实性与正确性，请读者依此进行投资决策时务必注意阅读信息原版原文。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">三、对于部分非权威媒体的信息内容本网将特别注明类似“未证实消息，仅供参考”字样，请投资者务必注意核实。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">四、本网所提供的信托产品统计数据及其相关分析仅供参考，不作为投资使用的依据，据此使用，风险自负。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">五、本网所转载的信息观点以投资者教育的内容主张并不代表本网站的观点或主张。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">六、引用本网的研究报告等须注明来源“财来电”，同时，引用的报告仅能作为自身的学术参考用，不能用于商业目的，否则我们有权追究版权责任。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;color:#FF9900;"><strong>隐私条款</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">隐私权是您的重要权利。向我们提供您的个人信息是基于对我们的信任，相信我们会负责的态度对待您的个人信息。我们认为您提供的信息只能用于帮助我们为您提供更好的服务。请您认真阅读以下条款，以了解我们的政策。本条款可能在必要时会不定时更改，请注意定期查阅。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">1、我们需要收集哪些个人资料</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">一般情况下，您不需要提交个人资料就能够访问我们的网站。但是当您需要使用我们的服务时（会员），则必须注册个人资料后才能使用。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">收集个人资料是为了便于我们向您提供优质高效的服务，例如发送新产品及相关信息。当然，即使您已经注册个人资料，您仍可随时拒绝我们发送的任何信息。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">2、 我们为个人资料保密</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">我们将采取一定的措施来保护您的个人资料。在未经访问者授权同意的情况下，本网站不会将访问者的个人资料泄露给第三方。但以下情况除外：</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">(1) 根据执法单位之要求或为公共之目的向相关单位提供个人资料；</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">(2) 由于您将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露；</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">(3) 由于黑客攻击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等；</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">(4) 由于与本网站链接的其它网站所造成之个人资料泄露及由此而导致的任何法律争议和后果；对于因为您自己的原因造成您的个人资料被他人知晓的，我们不承担任何责任。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">3、查阅个人资料</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">已在网站注册的您有权查核我们是否保存您的个人资料，并且查阅您个人的资料，并且要求我们更正您的个人资料或由您自行更正。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">4、对其他网站的友情链接\r\n财来电含有其他网站的链接，我们不对这些网站的内容及他们关于隐私权的行为负责，建议您仔细阅读这些网站的个人资料保密制度。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">5、任何时候如果您认为我们没有遵守这些条款时，请致电或email到通知我们，我们会认真处理您的要求并回复。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:18px;font-family:SimSun;color:#FF9900;"><strong>联系我们</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">财来电官方平台</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">官方网站：www.cailaidian.cn</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">企业热线：4008-313-668</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">微信服务号：财来电</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">财来电（杭州总部）</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">企业热线：0571-88333288</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;"><strong>地址：浙江省杭州市拱墅区湖州街168号美好国际大厦12楼</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;color:#FF9900;"><strong>快速登录与注册</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">在官网首页就可以快速的登录进入系统，十秒就可以快速注册，一切让您尽享快速体验。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;color:#FF9900;"><strong>募集进度</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">进入系统后可以实时查看进度，这样可以及时了解项目进展情况，让您每时每刻掌握募集进度，从而根据募集进度及时调整工作计划。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;color:#FF9900;"><strong>查看费用</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">系统可以查看到每一个项目的费用状况，费用的更改变动都会及时反馈到系统，云系统能够让您更清晰的了解到每一个项目的详细费用。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;color:#FF9900;"><strong>下载资料包</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">系统为了理财师的方便，提供了下载资料包功能，这样可以把一些资料下载到自己电脑上面，有利于工作的自由进行。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;color:#FF9900;"><strong>搜索</strong></span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<span style="font-size:16px;font-family:SimSun;">系统搜索功能可以更加快速的帮助您找到您想要的项目，快速，高效地位您服务。</span> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n<strong>更多精彩的理财师资讯，敬请关注<a href="http://www.cailaidian.cn/" class="c_f1070a">财来电</a>！</strong> \r\n	</div>\r\n</h2>\r\n<h3>\r\n	<span style="color:#E53333;"></span> \r\n</h3>\r\n<p>\r\n	<br />\r\n</p>', '1445319012', 0),
(12, 1, 'search', '测试第一版测试第一版测试第一版', NULL, '', 0, 0, 'search', 'search', 'search', 12, 23, 255, '测试第一版', 'searchsearchsearch是范德萨发短信三等功分析称vbxcvbxcvbxcv <br />', '1438325699', 0),
(13, 2, 'search', '测试第2版测试第2版测试第2版', NULL, 'upload/new/201508/1439432490.png', 0, 0, 'search', 'search', 'search', 12, 23, 255, '测试第2版', '<h1>\r\n	<span style="background-color:#E53333;">fgdgbxcvbxcvbzdrfwa4rttysuyfcjncvbxzcvzvccxzvxcvz</span> \r\n</h1>\r\n<p>\r\n	<span style="color:#E53333;">buzhidao</span> \r\n</p>\r\n<p>\r\n	<span style="color:#E53333;"> <strong>dfgdfgd</strong></span> \r\n</p>\r\n<p>\r\n	<span style="color:#E53333;"><strong> </strong>fghgfhgfh<em>gfhgfhgf</em></span> \r\n</p>\r\n<p>\r\n	<u>dfgdfgdfg </u> \r\n</p>', '1445307214', 0),
(14, 1, '', 'Contact Us', NULL, '', 0, 0, '', '', '', 0, 0, 255, '联系我们', '<p style="font-size:16px;color:#666666;text-indent:2em;">\r\n	<span style="color:#E53333;font-size:18px;">联系电话</span> \r\n</p>\r\n<p style="font-size:16px;color:#666666;text-indent:2em;">\r\n	<span style="color:#E53333;"><br />\r\n</span> \r\n</p>\r\n<h2 style="text-indent:2em;">\r\n</h2>\r\n<h5 style="text-indent:2em;">\r\n	<span style="font-size:18px;font-family:SimSun;"> 0571-88333288</span> \r\n</h5>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<h5 style="text-indent:2em;">\r\n	<span style="font-size:18px;font-family:SimSun;"> 4008-313-668</span><br />\r\n</h5>\r\n<p style="font-size:16px;color:#666666;text-indent:2em;">\r\n	<span style="color:#E53333;font-size:18px;">公司地址</span> \r\n</p>\r\n<p style="font-size:16px;color:#666666;text-indent:2em;">\r\n	<span style="color:#E53333;"><br />\r\n</span> \r\n</p>\r\n<h3 style="text-indent:2em;">\r\n	<span style="font-size:18px;"> 杭州市拱墅区湖州街168号美好国际大厦12楼</span> \r\n</h3>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p>\r\n	<iframe src="http://hl.com/kindeditor/plugins/baidumap/index.html?center=120.150674%2C30.331198&zoom=19&width=558&height=360&markers=120.150674%2C30.331198&markerStyles=l%2CA" style="width:560px;height:362px;" frameborder="0">\r\n	</iframe>\r\n</p>', '1445324630', 1),
(15, 1, '', 'dis', NULL, '', 0, 0, '', '', '', 0, 0, 255, '企业文化', '<span style="font-size:16px;"> 华良是一家互联网金融O2O模式的第三方财富管理机构，业务范围涵盖个人借贷理财、银行居间业务、信托产品居间业务、私募股权投资基金、资产管理、项目融\r\n资等金融服务及投资策划咨询服务等。是集合了金融科研、地面金融管理连锁、金融电子商务等多重功能于一体的立体金融服务体系。</span><br />\r\n<img title="" src="/kindeditor/attached/image/20151020/20151020090026_57175.jpg" alt="" align="" height="525" width="700" /><br />\r\n<span style="font-size:16px;"> 未来，华良在中国不断发展金融服务业，竭诚为各地企业、政府机关、事业机构和个人投资者提供服务。华良在华东地区是重要的金融服务商之一，希望通过不断探索成为中国地区的顶尖金融服务商。</span><br />\r\n<br />\r\n<br />\r\n<br />\r\n<span style="font-size:16px;"> 华良投资集团旗下公司：</span><br />\r\n<br />\r\n<span style="font-size:16px;"> 浙江爱贷金融服务外包股份有限公司（爱贷网），<img src="/kindeditor/attached/image/20151020/20151020085714_46010.png" alt="" />针对个人、企业P2B/P2P投融资服务。</span><br />\r\n<br />\r\n<span style="font-size:16px;"> 浙江融牛投资管理有限公司（融牛网），股市的投资管理，股票配资服务。</span><br />\r\n<br />\r\n<span style="font-size:16px;"> 浙江爱投网络科技有限公司（泛丁众筹），<img src="/kindeditor/attached/image/20151020/20151020085743_55450.png" alt="" />通过互联网平台连结起赞助者与提案者，为项目筹集资金。</span><br />\r\n<br />\r\n<span style="font-size:16px;"> 浙江爱财网络科技有限公司（爱财网），是金融机构用O2O模式提供咨询服务。</span><br />\r\n<br />\r\n<span style="font-size:16px;"> 浙江投友网络科技有限公司，互联网科技服务商，是5大金融业务模块的提供者。</span><br />\r\n<br />\r\n<p>\r\n	<span style="font-size:16px;"> 杭州君邦贸易有限公司、浙江东邦机械设备租赁有限公司、江苏华亚基金管理有限公司、江苏爱尚汽车销售服务有限公司</span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><img title="" src="/kindeditor/attached/image/20151020/20151020090525_16676.jpg" alt="" align="" height="549" width="800" /><br />\r\n</span>\r\n</p>', '1445324733', 1);

-- --------------------------------------------------------

--
-- 表的结构 `db_article_category`
--

CREATE TABLE IF NOT EXISTS `db_article_category` (
  `ac_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '索引ID',
  `code` varchar(255) DEFAULT NULL COMMENT '分类标识码',
  `name` varchar(100) NOT NULL COMMENT '分类名称',
  `url` varchar(100) DEFAULT NULL COMMENT '分类链接地址',
  `parent_id` int(10) unsigned DEFAULT '0' COMMENT '父ID',
  `listorder` tinyint(1) unsigned NOT NULL DEFAULT '255' COMMENT '排序',
  PRIMARY KEY (`ac_id`),
  KEY `ac_parent_id` (`parent_id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文章分类表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `db_article_category`
--

INSERT INTO `db_article_category` (`ac_id`, `code`, `name`, `url`, `parent_id`, `listorder`) VALUES
(1, 'news', '热点新闻', NULL, 0, 255),
(2, NULL, '测试项目', NULL, 0, 254);

-- --------------------------------------------------------

--
-- 表的结构 `db_banner`
--

CREATE TABLE IF NOT EXISTS `db_banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告自增标识编号',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `url` varchar(100) NOT NULL COMMENT '链接地址',
  `imageurl` varchar(100) NOT NULL COMMENT '图片地址',
  `color` varchar(32) DEFAULT NULL COMMENT '颜色快',
  `listorder` int(3) NOT NULL DEFAULT '255' COMMENT '排序',
  `type` varchar(20) NOT NULL COMMENT '分类',
  `is_del` tinyint(1) DEFAULT '0' COMMENT '删除,0正常，1删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='广告表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `db_banner`
--

INSERT INTO `db_banner` (`id`, `title`, `url`, `imageurl`, `color`, `listorder`, `type`, `is_del`) VALUES
(1, '湖水', 'https://www.baidu.com', 'upload/banner/201508/1439444043.png', '#FFFFFF', 255, 'news_banner', 1),
(2, '西湖潜水', 'https://www.baidu.com', 'upload/banner/201508/1439444957.gif', '#AAAAAA', 253, 'news_banner', 0);

-- --------------------------------------------------------

--
-- 表的结构 `db_image`
--

CREATE TABLE IF NOT EXISTS `db_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `imagetype` varchar(64) NOT NULL COMMENT '图片分类',
  `imageurl` varchar(128) NOT NULL COMMENT '图片路径',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='图片上传记录表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `db_image`
--

INSERT INTO `db_image` (`id`, `imagetype`, `imageurl`, `addtime`) VALUES
(1, 'new', 'upload/new/201508/1439430413.png', '2015-08-13 09:47:55'),
(2, 'new', 'upload/new/201508/1439430492.png', '2015-08-13 09:49:13'),
(3, 'new', 'upload/new/201508/1439432490.png', '2015-08-13 10:22:20'),
(4, 'banner', 'upload/banner/201508/1439444043.png', '2015-08-13 13:34:53'),
(5, 'banner', 'upload/banner/201508/1439444153.gif', '2015-08-13 13:36:43'),
(6, 'banner', 'upload/banner/201508/1439444781.png', '2015-08-13 13:47:11'),
(7, 'banner', 'upload/banner/201508/1439444853.gif', '2015-08-13 13:48:23'),
(8, 'banner', 'upload/banner/201508/1439444957.gif', '2015-08-13 13:50:07'),
(9, 'link', 'upload/link/201508/1439445724.png', '2015-08-13 14:02:54'),
(10, 'link', 'upload/link/201508/1439445775.png', '2015-08-13 14:03:44'),
(11, 'new', 'upload/new/201508/1439446783.jpg', '2015-08-13 14:20:33'),
(12, 'link', 'upload/link/201508/1439447266.jpg', '2015-08-13 14:28:36'),
(13, 'link', 'upload/link/201508/1439447331.jpg', '2015-08-13 14:29:41');

-- --------------------------------------------------------

--
-- 表的结构 `db_link`
--

CREATE TABLE IF NOT EXISTS `db_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '索引id',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `url` varchar(100) DEFAULT NULL COMMENT '链接',
  `imageurl` varchar(100) DEFAULT NULL COMMENT '图片',
  `user` varchar(50) NOT NULL DEFAULT 'admin' COMMENT '申请人',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '255' COMMENT '排序',
  `addtime` varchar(32) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `db_link`
--

INSERT INTO `db_link` (`id`, `title`, `url`, `imageurl`, `user`, `listorder`, `addtime`) VALUES
(1, '爱贷网', 'http://www.cnaidai.com/', 'upload/link/201508/1439445724.png', 'admin', 253, '2015-08-13 14:09:15'),
(2, '泛丁网', 'http://www.fandingwang.com/', 'upload/link/201508/1439445775.png', 'admin', 254, '2015-08-13 14:02:56'),
(3, '财来电', 'http://cailaidian.cn', 'upload/link/201508/1439447331.jpg', 'admin', 255, '2015-08-13 14:54:36');

-- --------------------------------------------------------

--
-- 表的结构 `db_power`
--

CREATE TABLE IF NOT EXISTS `db_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `powername` varchar(40) NOT NULL COMMENT '权限名称',
  `power` varchar(512) NOT NULL COMMENT '权限项目',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台用户角色权限' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `db_power`
--

INSERT INTO `db_power` (`id`, `powername`, `power`, `addtime`) VALUES
(1, '超级管理员', '1,2,59,60,61,62,11,12,39,13,14,41,43,40,17,3,4', '2015-08-07 17:22:32');

-- --------------------------------------------------------

--
-- 表的结构 `db_product`
--

CREATE TABLE IF NOT EXISTS `db_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `url` varchar(100) NOT NULL COMMENT '地址',
  `time` int(11) NOT NULL COMMENT '期限',
  `rate` decimal(10,2) NOT NULL COMMENT '年化利率',
  `total` decimal(10,2) NOT NULL COMMENT '总额',
  `Interest` varchar(30) NOT NULL COMMENT '付息方式',
  `order` int(11) NOT NULL COMMENT '排序',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品列表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `db_setting`
--

CREATE TABLE IF NOT EXISTS `db_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `title` varchar(32) NOT NULL COMMENT '标题',
  `select_title` varchar(32) NOT NULL COMMENT '查询标题',
  `select_values` varchar(512) NOT NULL COMMENT '查询值',
  `select_group` varchar(32) NOT NULL COMMENT '查询所在分组',
  `discription` varchar(512) NOT NULL COMMENT '描述',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `select_group` (`select_group`),
  KEY `select_title` (`select_title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网站设置信息表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `db_system`
--

CREATE TABLE IF NOT EXISTS `db_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) DEFAULT NULL COMMENT '模块名称',
  `controllers` varchar(32) DEFAULT NULL COMMENT '控制器名称',
  `actions` varchar(32) DEFAULT NULL COMMENT '方法名称',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级id',
  `salt` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='左侧栏目' AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `db_system`
--

INSERT INTO `db_system` (`id`, `title`, `controllers`, `actions`, `pid`, `salt`, `addtime`) VALUES
(1, '后台首页', 'admin_index', 'index', 0, 100, 1434445382),
(2, '首页', 'admin_index', 'index', 1, 0, 1434505726),
(3, '开发者中心', 'admin_system', 'index', 0, 1, 1434448700),
(4, '模块管理', 'admin_system', 'index', 3, 3, 1434448737),
(11, '资讯管理', 'admin_new', 'index', 0, 50, 1434527073),
(12, '资讯列表', 'admin_new', 'index', 11, 3, 1434527129),
(13, '分类管理', 'admin_newcate', 'index', 0, 49, 1434532954),
(14, '资讯分类', 'admin_newcate', 'index', 13, 3, 1434534546),
(39, '资讯回收站', 'admin_new_recycle', 'index', 11, 1, 1434534518),
(40, '友情链接', 'admin_link', 'index', 41, 3, 1435041505),
(41, '其他管理', 'admin_link', 'index', 0, 2, 1435125124),
(43, '广告管理', 'admin_banner', 'index', 41, 4, 1435827680),
(59, '后台用户管理', 'admin_user', 'index', 0, 99, 1438928821),
(60, '后台用户列表', 'admin_user', 'index', 59, 3, 1438928860),
(61, '权限设置', 'admin_power', 'index', 59, 2, 1438928888),
(62, '权限分配', 'admin_setpower', 'index', 59, 1, 1438928925);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
