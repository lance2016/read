﻿# Host: localhost  (Version 5.7.14)
# Date: 2016-10-09 22:03:26
# Generator: MySQL-Front 5.4  (Build 1.21)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` varchar(11) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `session_id` varchar(255) DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES ('zzb','a','zzb13:25:23:0923');

#
# Structure for table "img"
#

DROP TABLE IF EXISTS `img`;
CREATE TABLE `img` (
  `src` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `press` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `intro` varchar(1000) DEFAULT '暂无简介',
  `content` varchar(10000) DEFAULT '暂无',
  `catalog` varchar(10000) DEFAULT '暂无目录',
  `shunxu` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "img"
#

INSERT INTO `img` VALUES ('images/2016-06-08-14-19-55.jpg','论语','孔子弟子及再传弟子','中华书局','2006-12-01','《论语》是一部语录体思想散文集。早在春秋后期孔子设坛讲学时期，其主体内容就已初始创成；孔子去世以后，他的辫子和再传弟子代代传授他的言论，并逐渐将这些口头记诵的语录言行记录下来，集腋成裘，最终在战国初年汇辑论纂成书，因此称“论”。《论语》主要记载孔子及其弟子的言行，因此称为“语”。','<p>&nbsp; 《论语》是一部语录体思想散文集。早在春秋后期孔子设坛讲学时期，其主体内容就已初始创成；孔子去世以后，他的辫子和再传弟子代代传授他的言论，并逐渐将这些口头记诵的语录言行记录下来，集腋成裘，最终在战国初年汇辑论纂成书，因此称&ldquo;论&rdquo;。《论语》主要记载孔子及其弟子的言行，因此称为&ldquo;语&rdquo;。</p>\n\n<p>&nbsp; 孔子思想以立身为出发点，而人能立身于世的首要条件就是具有&ldquo;君子&rdquo;人格。君子具备仁爱之心，自重自律；表里如一，言行一致；积极进取，德才兼备；孜孜于学，注重实践；安贫乐道，谨守正义等等；始终坚守人之间的相处之道，遵从不同的伦理关系，构建着和谐友爱的人际关系和社会环境。</p>\n\n<p>&nbsp; 这本书以权威版本为底本，约请张燕婴作了晓畅通俗的白话翻译。文白对照，并以对开的方式排版，以为读者提供阅读最方便的文本。</p>\n','<p>《论语》的篇名通常取开篇前两个字作为篇名；若开篇前两个字是&ldquo;子曰&rdquo;，则跳过取句中的前两个字；若开篇三个字是一个词，则取前三个字。篇名与其中的各章没有意义上的逻辑关系，仅可当作页码看待。</p>\n\n<ul>\n\t<li>学而第一</li>\n\t<li><a href=\"http://baike.baidu.com/view/882638.htm\" target=\"_blank\">为政</a>第二</li>\n\t<li><a href=\"http://baike.baidu.com/subview/153135/9363131.htm\" target=\"_blank\">八佾</a>第三</li>\n\t<li><a href=\"http://baike.baidu.com/view/853522.htm\" target=\"_blank\">里仁</a>第四</li>\n\t<li><a href=\"http://baike.baidu.com/view/79585.htm\" target=\"_blank\">公冶长</a>第五</li>\n\t<li><a href=\"http://baike.baidu.com/view/1728986.htm\" target=\"_blank\">雍也</a>第六</li>\n\t<li><a href=\"http://baike.baidu.com/view/2154584.htm\" target=\"_blank\">述而</a>第七</li>\n\t<li><a href=\"http://baike.baidu.com/view/50354.htm\" target=\"_blank\">泰伯</a>第八</li>\n\t<li><a href=\"http://baike.baidu.com/view/1193362.htm\" target=\"_blank\">子罕</a>第九</li>\n\t<li><a href=\"http://baike.baidu.com/view/332431.htm\" target=\"_blank\">乡党</a>第十</li>\n\t<li><a href=\"http://baike.baidu.com/view/713565.htm\" target=\"_blank\">先进</a>第十一</li>\n\t<li><a href=\"http://baike.baidu.com/view/346742.htm\" target=\"_blank\">颜渊</a>第十二</li>\n\t<li><a href=\"http://baike.baidu.com/view/72781.htm\" target=\"_blank\">子路</a>第十三</li>\n\t<li><a href=\"http://baike.baidu.com/view/3570950.htm\" target=\"_blank\">宪问</a>第十四</li>\n\t<li><a href=\"http://baike.baidu.com/view/1154279.htm\" target=\"_blank\">卫灵公</a>第十五</li>\n\t<li>季氏第十六</li>\n\t<li><a href=\"http://baike.baidu.com/view/256603.htm\" target=\"_blank\">阳货</a>第十七</li>\n\t<li><a href=\"http://baike.baidu.com/subview/144816/10031621.htm\" target=\"_blank\">微子</a>第十八</li>\n\t<li><a href=\"http://baike.baidu.com/view/1583543.htm\" target=\"_blank\">子张</a>第十九</li>\n\t<li>尧曰第二十</li>\n</ul>\n\n<p>&nbsp;</p>\n',1),('images/2016-06-27-09-28-27.jpg','习近平总书记系列重要讲话读本（2016年版）','中共中央宣传部','学习出版社 人民出版社','2016-04-05','《习近平总书记系列重要讲话读本（2016年版）》，围绕实现中华民族伟大复兴的中国梦、坚持和发展中国特色社会主义，围绕协调推进全面建成小康社会、全面深化改革、全面依法治国、全面从严治党“四个全面”战略布局，围绕牢固树立创新、协调、绿色、开放、共享的发展理念，统筹推进经济、政治、文化、社会、生态文明五位一体建设，围绕加强国防和军队建设，推动构建以合作共赢为核心的新型国际关系，学习掌握科学的思想方法和工作方法等十六个专题，全面准确深入阐释了以习近平同志为总书记的党中央治国理政新理念新思想新战略。','<p>&nbsp; &nbsp; 《习近平总书记系列重要讲话读本（2016年版）》，围绕实现中华民族伟大复兴的中国梦、坚持和发展中国特色社会主义，围绕协调推进全面建成小康社会、全面深化改革、全面依法治国、全面从严治党&ldquo;四个全面&rdquo;战略布局，围绕牢固树立创新、协调、绿色、开放、共享的发展理念，统筹推进经济、政治、文化、社会、生态文明五位一体建设，围绕加强国防和军队建设，推动构建以合作共赢为核心的新型国际关系，学习掌握科学的思想方法和工作方法等十六个专题，全面准确深入阐释了以习近平同志为总书记的党中央治国理政新理念新思想新战略。</p>\n','<p><strong>&nbsp; &nbsp; &nbsp; 实现&ldquo;两个一百年&rdquo;奋斗目标和中华民族伟大复兴的科学理论指导和行动指南</strong></p>\n\n<p>　　一、中华民族近代以来最伟大的梦想&mdash;&mdash;关于实现中华民族伟大复兴的中国梦</p>\n\n<p>　　二、实现中华民族伟大复兴的必由之路&mdash;&mdash;关于坚持和发展中国特色社会主义</p>\n\n<p>　　三、新的历史条件下治国理政总方略&mdash;&mdash;关于协调推进&ldquo;四个全面&rdquo;战略布局</p>\n\n<p>　　四、奋力实现第一个百年奋斗目标&mdash;&mdash;关于全面建成小康社会</p>\n\n<p>　　五、决定当代中国命运的关键一招&mdash;&mdash;关于全面深化改革</p>\n\n<p>　　六、全力推进法治中国建设&mdash;&mdash;关于全面依法治国</p>\n\n<p>　　七、打铁还需自身硬&mdash;&mdash;关于全面从严治党</p>\n\n<p>　　八、以新发展理念引领发展&mdash;&mdash;关于树立创新、协调、绿色、开放、共享的发展理念</p>\n\n<p>　　九、主动适应、把握、引领经济发展新常态&mdash;&mdash;关于促进经济持续健康发展</p>\n\n<p>　　十、充分发挥我国社会主义政治制度优越性&mdash;&mdash;关于发展社会主义民主政治</p>\n\n<p>　　十一、用社会主义核心价值观凝心聚力&mdash;&mdash;关于建设社会主义文化强国</p>\n\n<p>　　十二、让老百姓过上好日子&mdash;&mdash;关于改善民生和创新社会治理</p>\n\n<p>　　十三、绿水青山就是金山银山&mdash;&mdash;关于大力推进生态文明建设</p>\n\n<p>　　十四、建设一支听党指挥能打胜仗作风优良的人民军队&mdash;&mdash;关于全面推进国防和军队建设</p>\n\n<p>　　十五、推动构建以合作共赢为核心的新型国际关系&mdash;&mdash;关于国际关系和我国外交战略</p>\n\n<p>　　十六、提高解决改革发展基本问题的本领&mdash;&mdash;关于科学的思想方法和工作方法</p>\n\n<p><strong>　　深入学习贯彻习近平总书记系列重要讲话精神，协调推进&ldquo;四个全面&rdquo;战略布局，为实现&ldquo;两个一百年&rdquo;奋斗目标和中华民族伟大复兴的中国梦而奋斗</strong></p>\n\n<div>&nbsp;</div>\n',2),('images/2016-07-01-03-53-31.jpg','中华传统美德壹百句','国务院参事室 中央文史研究馆 编','人民出版社','2014-09-01','中国是有着悠久历史与传统的国家，优秀的传统文化滋养着中华文明走过了五千多年的历程，从未间断，它是中国民族精神的根基，也坚定了我们的民族走向未来的信心。中华传统美德培养的是身为一个中国人的骨气和底气。人民出版社推出了《中华传统美德壹百句》，希望与读者共同重温和品读中国传统文化中的经典智慧，并用它们指导我们的现实人生。','<p>&nbsp; &nbsp; &nbsp; &nbsp;中国是有着悠久历史与传统的国家，优秀的传统文化滋养着中华文明走过了五千多年的历程，从未间断，它是中国民族精神的根基，也坚定了我们的民族走向未来的信心。中华传统美德培养的是身为一个中国人的骨气和底气。人民出版社推出了《中华传统美德壹百句》，希望与读者共同重温和品读中国传统文化中的经典智慧，并用它们指导我们的现实人生。</p>\n\n<p>　　《中华传统美德壹百句》由饶宗颐、戴逸、汤一介、程毅中、傅璇琮、王蒙、袁行霈等国学大师担任编写顾问。他们使该书的品质有了可靠的保障，使读者能够准确体会书中美德箴言的魅力。</p>\n\n<p>　　《中华传统美德壹百句》精选了上自先秦下迄晚清，涵盖文、史、哲、政等多个领域的经典名句，按自强、诚信、仁义、智勇、正气、孝慈、廉耻、礼敬、勤俭、中和十个修身德目分类。全书坚持古为今用，在中国传统文化中精心选摘，为读者呈现出中华传统美德中最为精华的部分。书中的一百句美德箴言都用书法作品来表现，文字深刻的内涵，由逸动的书法作艺术的演绎，使其更具神韵。这些书法有的来自学术名家，如袁行霈、霍松林、薛永年、刘大钧，有的来自书画家，如韩美林、孙晓云、刘小晴，有的来自著名作家如王蒙、贾平凹。在这部书中，读者都可领略他们书法作品的风采。</p>\n','<p>　一、自强</p>\n\n<p>　　二、诚信</p>\n\n<p>　　三、仁义</p>\n\n<p>　　四、智勇</p>\n\n<p>　　五、正气</p>\n\n<p>　　六、孝慈</p>\n\n<p>　　七、廉耻</p>\n\n<p>　　八、礼敬</p>\n\n<p>　　九、勤俭</p>\n\n<p>　　十、中和</p>\n\n<p>&nbsp;</p>\n',3),('images/2016-07-01-03-56-39.jpg','学习的力量——跟总书记读历史','路大虎','中共中央党校出版社','2014-01-05','本书选取了习近平总书记历次谈话及文章中引用的典故、古文30篇，将其分作“修身”、“立志”、“为官”、“治国”四部分，解读了每一典故、古文的历史背景，融合相关的历史文化传统和思想进行深刻阐释，帮助党政干部从古人的思想中汲取智慧，从历史中寻找殷鉴。','<p>　 &nbsp; &nbsp; 本书选取了习近平总书记历次谈话及文章中引用的典故、古文30篇，将其分作&ldquo;修身&rdquo;、&ldquo;立志&rdquo;、&ldquo;为官&rdquo;、&ldquo;治国&rdquo;四部分，解读了每一典故、古文的历史背景，融合相关的历史文化传统和思想进行深刻阐释，帮助党政干部从古人的思想中汲取智慧，从历史中寻找殷鉴。</p>\n','<p>　<strong>第一篇　修　身</strong></p>\n\n<p>　　　　　　一、子帅以正，孰敢不正</p>\n\n<p>　　　　　　二、满招损，谦受益</p>\n\n<p>　　　　　　三、从善如登，从恶如崩</p>\n\n<p>　　　　　　四、君子一言，驷马难追</p>\n\n<p>　　　　　　五、莫见乎隐，莫显乎微，故君子慎其独也</p>\n\n<p>　　　　　　六、己所不欲，勿施于人</p>\n\n<p>　　　　　　七、堤溃蚁穴，气泄针芒</p>\n\n<p>　　　　　　八、善禁者，先禁其身而后人</p>\n\n<p>　　　　　　九、物必先腐，而后虫生</p>\n\n<p>　　　　　　十、历览前贤国与家，成由勤俭破由奢</p>\n\n<p>&nbsp;&nbsp;<strong>第二篇　立　志</strong></p>\n\n<p>　　　　　　一、功崇惟志，业广惟勤</p>\n\n<p>　　　　　　二、志合者，不以山海为远</p>\n\n<p>　　　　　　三、得其大者可以兼其小</p>\n\n<p>　　　　　　四、学如弓弩，才如箭镞</p>\n\n<p>　　　　　　五、长江后浪推前浪</p>\n\n<p>　　　　　　六、以其昏昏，使人昭昭</p>\n\n<p>　<strong>第三篇　为　官</strong></p>\n\n<p>　　　　　　一、大风起兮云飞扬，威加海内兮归故乡，安得猛士兮守四方</p>\n\n<p>　　　　　　二、位卑未敢忘忧国</p>\n\n<p>　　　　　　三、知屋漏者在宇下</p>\n\n<p>　　　　　　四、莫道昆明池水浅</p>\n\n<p>　　　　　　五、非淡泊无以明志，非宁静无以致远</p>\n\n<p>　　　　　　六、夙夜在公</p>\n\n<p>　　　　　　七、先天下之忧而忧，后天下之乐而乐</p>\n\n<p>　<strong>第四篇　治　国</strong></p>\n\n<p>　　　　　　一、宰相必起于州部，猛将必发于卒伍</p>\n\n<p>　　　　　　二、明者因时而变，知者随事而制</p>\n\n<p>　　　　　　三、治大国如烹小鲜</p>\n\n<p>　　　　　　四、盲人骑瞎马，夜半临深池</p>\n\n<p>　　　　　　五、不畏浮云遮望眼</p>\n\n<p>　　　　　　六、水之积也不厚，则其负大舟也无力</p>\n\n<p>　　　　　　七、如履薄冰，如临深渊</p>\n\n<p>&nbsp;</p>\n',4),('images/2016-07-01-07-22-09.jpg','抗日战争','王树增','人民文学出版社','2015-06-01','《抗日战争》站在全民族抗战的立场上，在世界反法西斯战争的大背景下，以重大战役战斗为轴，以重大历史事件及相关人物为经纬，突出反映并全景式地记叙1937—1945年这八年抗战中的主要战役战斗。对敌我双方的计划，兵力部署，作战行动和战役经过，都做了详尽的记叙，特别是对战役战斗结局及其经验教训，从军事学术的高度给以分析、总结与点评。','<p>&nbsp; &nbsp; &nbsp; 《抗日战争》站在全民族抗战的立场上，在世界反法西斯战争的大背景下，以重大战役战斗为轴，以重大历史事件及相关人物为经纬，突出反映并全景式地记叙1937&mdash;1945年这八年抗战中的主要战役战斗。对敌我双方的计划，兵力部署，作战行动和战役经过，都做了详尽的记叙，特别是对战役战斗结局及其经验教训，从军事学术的高度给以分析、总结与点评。</p>\n\n<p>&nbsp; &nbsp; &nbsp; &nbsp;这部作品以波澜壮阔的文学叙述向最广大的读者解读中日之间为什么会发生如此持久的战争。记录了中华民族在山河破碎、艰难困苦、牺牲巨大的历史现实下如何同仇敌忾浴血奋战，最终赢得了这场伟大的民族战争。对于这场残酷的战争所揭示的历史经验和教训，对于广大读者认识战争的本质，在实践民族复兴伟业的今日中国，都有着巨大的认知意义和价值。</p>\n','<p>&nbsp; &nbsp; 序章 世界上还有另外一种逻辑？</p>\n\n<p>　　第一章 最后关头</p>\n\n<p>　　第二章 中国决不放弃领土之任何部分</p>\n\n<p>　　第三章 寇深矣！祸急矣！</p>\n\n<p>　　第四章 丧师失地未有如是之速者</p>\n\n<p>　　第五章 八路军上来了</p>\n\n<p>　　第六章 从滑稽故事的迷雾中脱颖而出</p>\n\n<p>　　第七章 使中华民族永存世上</p>\n\n<p>　　第八章 舍抗战外无生存</p>\n\n<p>　　第九章 用精神和血肉争取一个像样的结局</p>\n\n<p>　　第十章 台儿庄是吾人光荣所在</p>\n\n<p>　　第十一章 不让鬼子过黄河</p>\n\n<p>　　第十二章 保卫&ldquo;东方马德里&rdquo;</p>\n\n<p>　　第十三章 日军没有后方</p>\n\n<p>&nbsp;</p>\n',5),('images/2016-07-01-07-32-35.jpg','习近平用典','人民日报评论部','人民日报社','2015-02-01','古典名句，是中华文化长河中历经砥砺的智慧结晶，是传承中华民族优秀传统文化的经典载体。在习近平总书记系列重要讲话文章中多处引经据典，生动传神，寓意深邃，极具启迪意义。据此，人民日报社特别组织编写《习近平用典》一书，全书由敬民篇、为政篇、立德篇、修身篇、笃行篇、劝学篇、任贤篇、天下篇、廉政篇、信念篇、创新篇、法治篇、辩证篇共13个篇章组成，旨在对习近平总书记重要讲话（文章）引用典故追根溯源的同时，并究其现实意义进行解读，以期帮助广大党员干部深入学习习近平总书记的重要讲话（文章）精神，准确理解习近平总书记的思想精髓。','<div>&nbsp; &nbsp; 古典名句，是中华文化长河中历经砥砺的智慧结晶，是传承中华民族优秀传统文化的经典载体。在习近平总书记系列重要讲话文章中多处引经据典，生动传神，寓意深邃，极具启迪意义。据此，人民日报社特别组织编写《习近平用典》一书，全书由敬民篇、为政篇、立德篇、修身篇、笃行篇、劝学篇、任贤篇、天下篇、廉政篇、信念篇、创新篇、法治篇、辩证篇共13个篇章组成，旨在对习近平总书记重要讲话（文章）引用典故追根溯源的同时，并究其现实意义进行解读，以期帮助广大党员干部深入学习习近平总书记的重要讲话（文章）精神，准确理解习近平总书记的思想精髓。</div>\n\n<div>&nbsp; &nbsp; 由人民日报社社长杨振武主持编写并作序，人民日报社副总编辑卢新宁组织撰写解读文字，约26万字。</div>\n\n<div>&nbsp; &nbsp; 本书从总书记的讲话和文章中遴选出他使用频率高、影响深远、最能体现他治国理政理念的典故135则，分敬民、为政、修身、任贤、天下、法治等13个篇章；每则典故，采用解读、释义结合，解读部分阐述总书记用典的现实意义，释义部分解说古典名句的出处和义理。</div>\n','<p><strong>敬民篇</strong></p>\n\n<p>人视水见形，视民知治不。</p>\n\n<p>&mdash;&mdash;《在党的群众路线教育实践活动第一批总结暨第二批部署会议上的讲话》等文中引用</p>\n\n<p>但愿苍生俱饱暖，不辞辛苦出山林。</p>\n\n<p>&mdash;&mdash;《干在实处 走在前列?在检查节日市场供应和物价情况时的讲话》等文中引用</p>\n\n<p>衙斋卧听萧萧竹，疑是民间疾苦声。些小吾曹州县吏，一枝一叶总关情。</p>\n\n<p>&mdash;&mdash;《在参加兰考县委常委班子专题民主生活会时的讲话》等文中引用</p>\n\n<p><strong>为政篇</strong></p>\n\n<p>政者，正也。其身正，不令而行；其身不正，虽令不从。</p>\n\n<p>&mdash;&mdash;《之江新语?要用人格魅力管好自己》等文中引用</p>\n\n<p>为国不可以生事，亦不可以畏事。</p>\n\n<p>&mdash;&mdash;《在省部级主要领导干部学习贯彻十八届三中全会精神全面深化改革专题研讨班上的讲话》等文中引用</p>\n\n<p>安而不忘危，存而不忘亡，治而不忘乱。</p>\n\n<p>&mdash;&mdash;《在中央新疆工作座谈会上的讲话》等文中引用</p>\n\n<p>天下之患，最不可为者，名为治平无事，而其实有不测之忧。坐观其变而不为之所，则恐至于不可救。</p>\n\n<p>&mdash;&mdash;《在新疆考察工作结束时的讲话》等文中引用</p>\n\n<p>治国犹如栽树，本根不摇则枝叶茂荣。</p>\n\n<p>&mdash;&mdash;《在省部级主要领导干部学习贯彻十八届三中全会精神 全面深化改革专题研讨班上的讲话》等文中引用</p>\n\n<p><strong>立德篇</strong></p>\n\n<p>当官之法，惟有三事，曰清、曰慎、曰勤。</p>\n\n<p>&mdash;&mdash;《干在实处 走在前列?在浙江省委十一届四次全会上作报告时的插话》等文中引用</p>\n\n<p>取法于上，仅得为中；取法于中，故为其下。</p>\n\n<p>&mdash;&mdash;《在河南省兰考县委常委扩大会议上的讲话》等文中引用</p>\n\n<p>一心可以丧邦，一心可以兴邦，只在公私之间尔。</p>\n\n<p>&mdash;&mdash;《在十八届中央纪委第三次全体会议上的讲话》等文中引用</p>\n\n<p>修其心治其身，而后可以为政于天下。</p>\n\n<p>&mdash;&mdash;《之江新语?做人与做官》等文中引用</p>\n\n<p><strong>修身篇</strong></p>\n\n<p>与人不求备，检身若不及。</p>\n\n<p>&mdash;&mdash;《在全国组织工作会议上的讲话》等文中引用</p>\n\n<p>祸莫大于不知足，咎莫大于欲得。</p>\n\n<p>&mdash;&mdash;《领导干部要认认真真学习 老老实实做人 干干净净干事》等文中引用</p>\n\n<p>从善如登，从恶如崩。</p>\n\n<p>&mdash;&mdash;《在同各界优秀青年代表座谈时的讲话》等文中引用</p>\n\n<p>见善如不及，见不善如探汤。</p>\n\n<p>&mdash;&mdash;《在十八届中央纪委第三次全体会议上的讲话》等文中引用</p>\n\n<p><strong>笃行篇</strong></p>\n\n<p>功崇惟志，业广惟勤。</p>\n\n<p>&mdash;&mdash;《在十二届全国人民代表大会第一次会议上的讲话》等文中引用</p>\n\n<p>一勤天下无难事。</p>\n\n<p>&mdash;&mdash;《在同全国劳动模范代表座谈时的讲话》等文中引用</p>\n\n<p>合抱之木，生于毫末；九层之台，起于累土。</p>\n\n<p>&mdash;&mdash;《在全国宣传思想工作会议上的讲话》等文中引用</p>\n\n<p><strong>劝学篇</strong></p>\n\n<p>吾生也有涯，而知也无涯。</p>\n\n<p>&mdash;&mdash;《干在实处 走在前列?在浙江省委办公厅系统总结表彰大会上的讲话》等文中引用</p>\n\n<p>腹有诗书气自华。</p>\n\n<p>&mdash;&mdash;《领导干部要爱读书读好书善读书&mdash;&mdash;在中央党校2009年春季学期第二批进修班暨专题研讨班开学典礼上的讲话》等文中引用</p>\n\n<p>昨夜西风凋碧树，独上高楼，望尽天涯路。 衣带渐宽终不悔，为伊消得人憔悴。 众里寻他千百度，蓦然回首，那人却在灯火阑珊处。</p>\n\n<p>&mdash;&mdash;《在全国宣传思想工作会议上的讲话》等文中引用</p>\n\n<p>学而不思则罔，思而不学则殆。</p>\n\n<p>&mdash;&mdash;《领导干部要爱读书读好书善读书&mdash;&mdash;在中央党校2009年春季学期第二批进修班暨专题研讨班开学典礼上的讲话》等文中引用</p>\n\n<p>知之者不如好之者，好之者不如乐之者。</p>\n\n<p>&mdash;&mdash;《在中央党校建校80周年庆祝大会暨2013年春季学期开学典礼上的讲话》等文中引用</p>\n\n<p><strong>任贤篇</strong></p>\n\n<p>宰相必起于州部，猛将必发于卒伍。</p>\n\n<p>&mdash;&mdash;《在参加兰考县委常委班子专题民主生活会时的讲话》等文中引用</p>\n\n<p>盖有非常之功，必待非常之人。</p>\n\n<p>&mdash;&mdash;《在中国科学院第十七次院士大会、中国工程院第十二次院士大会上的讲话》等文中引用</p>\n\n<p>邦之兴，由得人也；邦之亡，由失人也。得其人，失其人，非一朝一夕之故，其所由来者渐矣。</p>\n\n<p>&mdash;&mdash;《在河北参加省委班子专题民主生活会时的讲话》等文中引用</p>\n\n<p><strong>天下篇</strong></p>\n\n<p>计利当计天下利。</p>\n\n<p>&mdash;&mdash;《携手建设中国&mdash;东盟命运共同体&mdash;&mdash;在印度尼西亚国会的演讲》等文中引用</p>\n\n<p>浩渺行无极，扬帆但信风。</p>\n\n<p>&mdash;&mdash;《深化改革开放 共创美好亚太&mdash;&mdash;在亚太经合组织工商领导人峰会上的演讲》等文中引用</p>\n\n<p>一花独放不是春，百花齐放春满园。</p>\n\n<p>&mdash;&mdash;《在联合国教科文组织总部的演讲》等文中引用</p>\n\n<p>物之不齐，物之情也。</p>\n\n<p>&mdash;&mdash;《在省部级主要领导干部学习贯彻十八届三中全会精神 全面深化改革专题研讨班上的讲话》等文中引用</p>\n\n<p><strong>廉政篇</strong></p>\n\n<p>一丝一粒，我之名节；一厘一毫，民之脂膏。宽一分，民受赐不止一分；取一文，我为人不值一文。谁云交际之常，廉耻实伤；倘非不义之财，此物何来？</p>\n\n<p>&mdash;&mdash;《在河南省兰考县委常委扩大会议上的讲话》等文中引用</p>\n\n<p>祸患常积于忽微，而智勇多困于所溺。</p>\n\n<p>&mdash;&mdash;《在党的群众路线教育实践活动工作会议上的讲话》等文中引用</p>\n\n<p>善禁者，先禁其身而后人。</p>\n\n<p>&mdash;&mdash;《在十八届中央纪委第二次全体会议上的讲话》等文中引用</p>\n\n<p>公生明，廉生威。</p>\n\n<p>&mdash;&mdash;《在中央政法工作会议上的讲话》等文中引用</p>\n\n<p><strong>信念篇</strong></p>\n\n<p>位卑未敢忘忧国。</p>\n\n<p>&mdash;&mdash;《在中央党校建校80周年庆祝大会暨2013年春季学期开学典礼上的讲话》等文中引用</p>\n\n<p>千磨万击还坚劲，任尔东西南北风。</p>\n\n<p>&mdash;&mdash;《青年要自觉践行社会主义核心价值观 &mdash;&mdash;在北京大学师生座谈会上的讲话》等文中引用</p>\n\n<p><strong>创新篇</strong></p>\n\n<p>苟日新，日日新，又日新。</p>\n\n<p>&mdash;&mdash;《在中国科学院第十七次院士大会、中国工程院第十二次院士大会上的讲话》等文中引用</p>\n\n<p>不日新者必日退。</p>\n\n<p>&mdash;&mdash;《在全国宣传思想工作会议上的讲话》等文中引用</p>\n\n<p><strong>法治篇</strong></p>\n\n<p>国无常强，无常弱。奉法者强则国强，奉法者弱则国弱。</p>\n\n<p>&mdash;&mdash;《在新疆考察工作结束时的讲话》等文中引用</p>\n\n<p>立善法于天下，则天下治；立善法于一国，则一国治。</p>\n\n<p>&mdash;&mdash;《在省部级主要领导干部学习贯彻十八届三中全会精神 全面深化改革专题研讨班上的讲话》等文中引用</p>\n\n<p><strong>辩证篇</strong></p>\n\n<p>泾溪石险人兢慎，终岁不闻倾覆人。却是平流无石处，时时闻说有沉沦。</p>\n\n<p>&mdash;&mdash;《干在实处 走在前列?在浙江省委贯彻胡锦涛总书记重要讲话精神专题学习会上的讲话》等文中引用</p>\n\n<p>多言数穷，不如守中。</p>\n\n<p>&mdash;&mdash;《在中央经济工作会议上的讲话》等文中引用</p>\n\n<p>兵无常势，水无常形。</p>\n\n<p>&mdash;&mdash;《干在实处 走在前列?在浙江省富阳市调研时的讲话》等文中引用</p>\n',6);
