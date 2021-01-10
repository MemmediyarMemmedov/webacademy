-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 05:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `135blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `adsoyad` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sekil` varchar(500) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `email_tesdiq` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adsoyad`, `email`, `pass`, `sekil`, `status`, `email_tesdiq`) VALUES
(1, 'Məmmədov Məmmədiyar', 'mammadovvv1@gmail.com', 'edf6b29f9277c6a690c3bf7539573fb6', 'img/profil/1598869553-1597583196-MM.png', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basliq` varchar(256) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `oxunmasayi` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `tarix` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `basliq`, `mezmun`, `sekil`, `oxunmasayi`, `status`, `tarix`) VALUES
(25, 'Kotlin', '<p><strong>Kotlin</strong> — (JVM) ilə işləyən və JavaScript mənbəyinə daxil edilə bilən bir statik tipli bir proqramlaşdırma dilidir. Rusiyanın Sankt-Peterburq şəhərində yerləşən JetBrains proqramçıları tərəfindən hazırlanmışdır.<sup id=\"cite_ref-oracle_interview_2-0\" class=\"reference\"><a href=\"https://az.wikipedia.org/wiki/Kotlin_(proqramla%C5%9Fd%C4%B1rma_dili)#cite_note-oracle_interview-2\">[2]</a></sup> Adı Kotlin adasından gəlir. Java ilə uyğun bir sintaksis olmasa da, Kotlin Java kodu ilə işləmək üçün hazırlanmışdır.Həmçinin Kotlin, Apple\'ın <a title=\"Swift\" href=\"https://az.wikipedia.org/wiki/Swift\">Swift</a> dilinə bənzəyir. </p>\r\n<p>C, C ++, Java və Go kimi, Kotlin proqramına giriş nöqtəsi hər hansı bir əmr sətiri arqumentlərini ehtiva edən bir sıra ötürülə bilən \"ana\" adlı bir funksiyadır. (Kotlin 1.3-dən bəri bütün versiyalar bu istəyə bağlıdır). Kotlin sənədinin ən üst səviyyəsində yalnız idxal və bəyannamələr mövcud ola bilər. Buna görə fərdi bir faylın \"işlədilməsi\" yalnız bir giriş nöqtəsi olduqda məna kəsb edir, hansı ki, \"array strings\" tipli args adlı bir dəlil ilə əsas deyilən bir funksiya olmalıdır. args, proqramın Python-da sys.argv-a bənzər şəkildə çağırıldığı əmr satırı arqumentlərini ehtiva edəcəkdir; Proqramınızın əmr sətiri dəlillərini qəbul etməsi lazım deyilsə və Kotlin 1.3 istifadə edirsinizsə onda, buraxıla bilər.</p>', 'img/blogs/1610293968-1_c-dfNp_RM7MLP95LhnAwWA.png', 0, '1', '2021-01-10 15:52:48'),
(26, 'WhatsApp yeni güncəlləməsi nədir?', '<pre id=\"tw-target-text\" class=\"tw-data-text tw-text-large XcVN5d tw-ta\" dir=\"ltr\" data-placeholder=\"Tərcümə\"><span lang=\"az\">WhatsApp, 8 Fevral 2021-də qüvvəyə minəcək yeni məxfilik siyasətini elan etdi. WhatsApp istifadəçiləri bu şərtləri o günə qədər<br /> telefonlarında olacaq tətbiqdaxili bildirişlə təsdiqləməlidirlər. Əks təqdirdə tətbiqə girişin mümkün olmayacağı düşünülür.\r\n\r\nWhatsApp 8 Fevral yeniləməsinə nələr daxildir?\r\nWhatsApp tərəfindən edilən şərhlərə görə, ani mesajlaşma tətbiqinin yeni şərtləri və məxfilik prinsipləri<br /> 8 Fevral 2021 tarixindən etibarən qüvvəyə minəcəkdir. Şirkətin bu tarixdən etibarən verdiyi rəsmi açıqlamalara görə WhatsApp <br />istifadəçilərinin məlumatları artıq Facebook ilə paylaşılacaq.\r\n\r\nWhastApp müqaviləsi nədir, qəbul etmək məcburidirmi?\r\nWhatsApp-ın \"məcburi yeniləməsi\" AB ölkələrindəki istifadəçiləri təsir etməyəcək. Türkiyədəki istifadəçilərin WhatsApp <br />tətbiqetməsini istifadə etməyə davam etmələri üçün 8 Fevrala qədər güncellenmiş şərtləri qəbul etmələri lazımdır. <br />8 fevral tarixinədək yenilənmiş şərtləri və məxfilik siyasətini təsdiqləməyən istifadəçilərin tətbiqetmədən istifadə <br />edə bilməyəcəyini bildirən WhatsApp, Avropa Birliyi (AB) ölkələrindəki istifadəçilərin bu vəziyyətdən təsirlənməyəcəyini açıqladı.\r\n\r\n\"Qəbul et\" sekmesini tıklayaraq, istifadəçilərə 8 Fevralda qüvvəyə minəcək yeni şərtləri və məxfilik siyasətini qəbul etdikləri<br /> bildiriləcək, \"Bu tarixdən sonra WhatsApp istifadə etməyə davam etmək üçün bu yeniləmələri qəbul etməlisiniz. <br />Hesabınızı silməyi seçsəniz və s. Məlumat almaq istəyirsinizsə, Yardım Mərkəzini də ziyarət edə bilərsiniz.<br /> \" ifadələr daxil edildi.</span></pre>', 'img/blogs/1610294294-hqdefault.jpg', 0, '1', '2021-01-10 16:05:59'),
(27, 'Javacsript ', '<p><strong>JavaScript</strong> – internet səhifələrin yaradılmasında geniş istifadə olunan <a title=\"Proqramlaşdırma dilləri\" href=\"https://az.wikipedia.org/wiki/Proqramla%C5%9Fd%C4%B1rma_dill%C9%99ri\">proqramlaşdırma dilidir</a>. JavaScript müxtəlif dilllərdən ilhamlanaraq yaradılmışdır. 1995-ci ilə <a title=\"Brendan Eyx\" href=\"https://az.wikipedia.org/wiki/Brendan_Eyx\">Brendan Eyx</a> tərəfindən yazılmışdır. JavaScript <a class=\"new\" title=\"Obyekt Yönümlü Proqramlaşdırma (səhifə mövcud deyil)\" href=\"https://az.wikipedia.org/w/index.php?title=Obyekt_Y%C3%B6n%C3%BCml%C3%BC_Proqramla%C5%9Fd%C4%B1rma&amp;action=edit&amp;redlink=1\">Obyekt Yönümlü Proqramlaşdırma</a> (OYP) dilidir. Obyektə Yönümlü Proqramlaşdırma mövzusu kifayət qədər mürəkkəb proqramlaşdırmadır. JavaScript Netscape Navigator 2.0 ilə birlikdə Brendan Eich tərəfindən inkişaf etdirilən və əvvəllər Mocha sonralar LiveScript olaraq adlandırılan və sonda bu anki adını alan JavaScript dili başlanğıcda sadəcə müştəri tərəfindən (client-side) şərh edilən bir proqramlaşdırma dilidir.</p>\r\n<p>Günümüzdə NodeJS texnologiyası ilə server tərəfli də (server-side) şərh edilən proqramlama dili halına gəldi.</p>', 'img/blogs/1609343877-download (1).png', 0, '1', '2020-12-30 15:58:15'),
(28, 'Swift ', '<p>SWIFT— Apple tərəfindən WWDC 14 də təqdim edilmiş proqramlaşdırma dilidir. Objective C-ə alternativ olaraq yaradılıb.</p>\r\n<pre><span class=\"n\">println</span><span class=\"p\">(</span><span class=\"s\">\"Hello, world\"</span><span class=\"p\">)</span>\r\n<span class=\"n\">let</span> <span class=\"n\">people</span> <span class=\"o\">=</span> <span class=\"p\">[</span><span class=\"s\">\"Anna\"</span><span class=\"o\">:</span> <span class=\"mi\">67</span><span class=\"p\">,</span> <span class=\"s\">\"Beto\"</span><span class=\"o\">:</span> <span class=\"mi\">8</span><span class=\"p\">,</span> <span class=\"s\">\"Jack\"</span><span class=\"o\">:</span> <span class=\"mi\">33</span><span class=\"p\">,</span> <span class=\"s\">\"Sam\"</span><span class=\"o\">:</span> <span class=\"mi\">25</span><span class=\"p\">]</span>\r\n<span class=\"k\">for</span> <span class=\"p\">(</span><span class=\"n\">name</span><span class=\"p\">,</span> <span class=\"n\">age</span><span class=\"p\">)</span> <span class=\"k\">in</span> <span class=\"n\">people</span> <span class=\"p\">{</span>\r\n <span class=\"n\">println</span><span class=\"p\">(</span><span class=\"s\">\"\\(name) is \\(age) years old.\"</span><span class=\"p\">)</span>\r\n<span class=\"p\">}</span></pre>', 'img/blogs/1610294666-images.png', 0, '1', '2021-01-10 16:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `nizamlamalar`
--

CREATE TABLE `nizamlamalar` (
  `id` int(2) UNSIGNED NOT NULL,
  `basliq` varchar(256) NOT NULL,
  `aciqlama` varchar(256) NOT NULL,
  `robots` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `unvan` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `mobil` varchar(25) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `haqqinda` text NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `slide1` varchar(250) NOT NULL,
  `slide2` varchar(250) NOT NULL,
  `slide3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nizamlamalar`
--

INSERT INTO `nizamlamalar` (`id`, `basliq`, `aciqlama`, `robots`, `logo`, `unvan`, `email`, `tel`, `mobil`, `facebook`, `instagram`, `haqqinda`, `sekil`, `slide1`, `slide2`, `slide3`) VALUES
(1, 'Web Academy | Veb səhifələrin hazırlanması 2020', 'Veb saytların hazırlanması', 'robots.txt', 'img/logo.png', 'Bakı Yasamal Mətbuat 42', 'mammadovvv1@gmail.com', '050-211-21-11', '(055) - 455 - 35 - 45', 'https://www.facebook.com/Mamedov', 'https://www.instagram.com', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy</p>', 'img/84wtfFd1JEjWZQ.jpg', 'img/slide/1609858772-markus-spiske-MI9-PY5cyNs-unsplash.jpg', 'img/slide/1609859764-markus-spiske-Skf7HxARcoc-unsplash.jpg', 'img/slide/1609780952-back.png');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kateqoriya` varchar(250) NOT NULL,
  `adi` varchar(150) NOT NULL,
  `info` varchar(500) DEFAULT NULL,
  `link` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `sekil` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `kateqoriya`, `adi`, `info`, `link`, `status`, `sekil`) VALUES
(73, 'SEO', 'test1', 'test444', '#0', '1', 'img/portfolio/1599305307-045-hacker.png'),
(74, 'Veb Layihələr', 'Food', '', '#0', '0', 'img/portfolio/1599398275-1.jpg'),
(75, 'Veb Layihələr', 'test1', '', '#0', '1', 'img/portfolio/1599478335-3.jpg'),
(76, 'Veb Layihələr', 'veb', '', '#0', '1', 'img/portfolio/1599479485-slide1.jpg'),
(77, 'Mobil Layihələr', 'Food', '', 'http://localhost:1337/kurs/Blog/admin/cuda/', '1', 'img/portfolio/1599305307-045-hacker.png');

-- --------------------------------------------------------

--
-- Table structure for table `qeydiyyat`
--

CREATE TABLE `qeydiyyat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adsoyad` varchar(100) NOT NULL,
  `tevellud` varchar(100) NOT NULL,
  `cinsi` varchar(250) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kurs` varchar(250) NOT NULL,
  `qeydtarix` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qeydiyyat`
--

INSERT INTO `qeydiyyat` (`id`, `adsoyad`, `tevellud`, `cinsi`, `tel`, `email`, `kurs`, `qeydtarix`) VALUES
(69, 'Mammadiyar Mammadov', '2008-02-29', 'Kişi', '(050) - 690 - 73 - 56', 'mammadovvv1@gmail.com', 'C#', '2021-01-08 19:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `telimler`
--

CREATE TABLE `telimler` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kateqoriya` varchar(250) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `mezmun` text NOT NULL,
  `mezmun1` text NOT NULL,
  `vaxt` varchar(50) NOT NULL,
  `qiymet` varchar(50) NOT NULL,
  `link` varchar(250) NOT NULL,
  `sekil` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telimler`
--

INSERT INTO `telimler` (`id`, `kateqoriya`, `adi`, `mezmun`, `mezmun1`, `vaxt`, `qiymet`, `link`, `sekil`) VALUES
(1, 'Proqramlaşdırma', 'Front end Developer', '', '', '3 Ay', '280 Azn', '', 'img/services/1609342166-front.png'),
(3, 'Ofis Proqramları', 'Word', '<p>Word</p>', '<p>Word</p>', '1 Ay', '50', '', 'img/services/1610290900-download (2).png'),
(4, 'Proqramlaşdırma', 'Java SE', '<p><strong>Core Java Developer kimdir?</strong></p>\r\n<p> Core Java (Java SE) Developer, Java platformasının standart versiyasında proqram təminatı (proqramlar və appletlər) hazırlaya bilən proqram mühəndisidir. Bir mühəndis kimi Core Java Developerin işi: araşdırma, proqramın dizayn və kod hissəsini işləmə, və proqram məhsulunu reallaşdırma və test etməkdən ibarətdir. </p>\r\n<p><strong>Core Java Developerlər harda işləyə bilər?</strong></p>\r\n<p> Core Java Developerlər, bir sıra dövlət və özəl müəssisələrdə, o cümlədən nazirlik və komitələrin, özəl şirkətlərin və eləcə də GSM operator və bankların İT departamentlərinin proqramlaşdırma şöbələrində proqramçı vəzifələrində çalışa bilər.</p>\r\n<p><strong>Kimlər dərs deyəcək?</strong></p>\r\n<p>  MilliByte-ın təhsil mərkəzində Java SE dərsləri, öz ixtisasları üzrə çalışan təcrübəli kadrlar və pedaqoji savada malik mütəxəssislər tərəfindən keçirilir. Yalnız onlar texniki ixtisasları ən başa düşülən tərzdə tədris edə bilərlər. Java SE təlimi də məhz bu cür praktiki təcrübəyə malik mütəxəssislər tərəfindən tədris edilir.</p>\r\n<p><strong>Dərslər necə keçiriləcək?</strong></p>\r\n<p> Ən yaxşı tədris metodikası nəzəriyyə və təcrübənin vəhdətindən ibarətdir. Bununla belə, bizim təlimçilər daha çox praktiki yönə ağırlıq verirlər. Dərslərdə qısa nəzəri biliklər verildikdən sonra praktiki məşğələlərə diqqət yönəlir. Həm sinif otaqlarımız və laboratoriyalarımızda, həm də evə verilən tapşırıqlarda praktiki vərdəşlərin daha dərindən yiyələnməsi qarşıya məqsəd qoyulur.</p>\r\n<p><strong>Nəticədə nələr əldə edəcəksiniz?</strong></p>\r\n<p> Siz, Java SE təlimini bitirdikdən sonra obyektyönümlü proqramlaşdırmanın əsaslarını öyrənmiş olacaq və Java dilində sərbəst şəkildə proqramlar yazmağı bacaracaqsınız. Bununla da Java EE versiyasını öyrənmək üçün baza biliklərinə də yiyələnmiş olacaqsınız.</p>\r\n<p><strong>Təcrübə Proqramları</strong></p>\r\n<p> Tədris kurslarının sonunda dinləyicilərdən ən yaxşı göstəricilərə malik olanlardan layihə qrupları təşkil edilir. Belə layihə qrupları həm bilik və bacarıqlarını daha da təkmilləşdirmə imkanı qazanır, həm də kommersiya layihələrindən qazanc əldə edirlər.</p>', '<p><strong>Java SE təlimində nələr öyrənəcəksiniz?</strong></p>\r\n<p>- Java dili və onun imkanları; <br />- Java dilinin əsasları;<br />- Obyektyönümlü proqramlaşdırma: əsas anlayışlar;<br />- İdarəetmə instruksiyaları;<br />- String və Array tipləri;<br />- Paketlər;<br />- Kompozisiya və vərəsəlik;<br />- İnterfeyslər;<br />- İstisnalar;<br />- JDBC;<br />- Kolleksiyalar və ümumiləşdirmə;<br />- Java dilinin əlavə imkanları.</p>', '4 Ay', '250', '', 'img/services/1609343337-java.png'),
(5, 'Proqramlaşdırma', 'Python', '', '<p>Proqramlaşdırmaya ən son texnologiya olaraq və asan bir formada başlamaq istəyənlər üçün.</p>', '4 Ay', '250', '', 'img/services/1609342756-python.jpg'),
(6, 'Sistem və Şəbəkə', 'Unix Server', '<p><strong>Unix Server Administratoru kimdir?</strong></p>\r\n<p> Unix Server Administratoru, şirkətlərin Unix Server platforması üzərində qurulmuş serverlərinin infrastrukturunu idarə edən mütəxəssisdir. Bu mütəxəssis mühəndis layihələrinin texniki dəstəyini təmin edir; serverlərin inşası və konfiqurasiyası işlərindən məsuliyyət daşıyır. Ümumiyyətlə isə Unix Server Administratorunun gördüyü işlərin 60%-i əməliyyat, 20%-i mühəndislik və 20%-i də texniki dəstəkdən ibarətdir.</p>\r\n<div>\r\n<p><strong>Unix Server Administratorları harda işləyə bilər?</strong></p>\r\n<p> Unix Server Administratorları, bir sıra dövlət və özəl müəssisələrdə, o cümlədən nazirlik və komitələrin, özəl şirkətlərin və eləcə də bankların İT departamentlərində sistem inzibatçısı vəzifəsində çalışa bilər.</p>\r\n<p><strong>Dərslər necə keçiriləcək?</strong></p>\r\n<p> Ən yaxşı tədris metodikası nəzəriyyə və təcrübənin vəhdətindən ibarətdir. Bununla belə, bizim təlimçilər daha çox praktiki yönə ağırlıq verirlər. Dərslərdə qısa nəzəri biliklər verildikdən sonra praktiki məşğələlərə diqqət yönəlir. Həm sinif otaqlarımız və laboratoriyalarımızda, həm də evə verilən tapşırıqlarda praktiki vərdəşlərin daha dərindən yiyələnməsi qarşıya məqsəd qoyulur.</p>\r\n<p><strong>Nəticədə nələr əldə edəcəksiniz?</strong></p>\r\n<p> Siz, Unix Server təlimini bitirdikdən sonra Unix Server platformalı serverləri idarə etməyi bacaracaqsınız. Bununla da Siz aşağıdakı bilik və bacarıqlara yiyələnmiş olacaqsınız:</p>\r\n<p>- Server əməliyyat sisteminin, və eləcə də fayl və qovluq xidmətlərinin idarə olunması;<br />- Proqram təminatlarının distributivasiya və yenilənmələri;<br />- Təyin olunmuş serverlərin profillənməsi və monitorinqi;<br />- Mərkəzi idarəetmə sisteminin qurulması;<br />- Nasazlıqların aşkarlanması və aradan qaldırılması.</p>\r\n</div>', '<p><strong>Unix Server təlimində nələr öyrənəcəksiniz?</strong></p>\r\n<p> Siz, 2 aylıq Unix Server təlimində aşağıdakı mövzuları öyrənəcəksiniz:</p>\r\n<div>\r\n<p>- Server əməliyyat sistemi: əsas anlayışlar;<br />- Unix Server idarəetmə mühiti;<br />- Fayl sistemi;<br />- Sistem xarakteristikalarının quraşdırılması;<br />- Portların idarə olunması;<br />- Şəbəkə konfiqurasiyasının quraşdırılması;<br />- İstifadəçi hesabları və qrupları;<br />- Avtomatik tapşırıqların planlaşdırılması;<br />- Yaddaş qurğuları ilə iş;<br />- Çap qurğuları ilə iş;<br />- Verilənlərin arxivlənməsi və bərpası;<br />- Verilənlərin təhlükəsizliyi;<br />- Əlavə imkanlar.</p>\r\n</div>', '3 Ay', '280 Azn', '', 'img/services/1610291211-images.jpg'),
(7, 'Proqramlaşdırma', 'C#', '<p><strong>C# Developer kimdir?</strong></p>\r\n<div>\r\n<p> C# Developer, C#-da proqram təminatı hazırlaya bilən proqram mühəndisidir. Bir mühəndis kimi C# Developerin işi: araşdırma, proqramın dizayn və kod hissəsini işləmə, və proqram məhsulunu reallaşdırma və test etməkdən ibarətdir. Bununla yanaşı C# üzrə mütəxəssis proqram təminatı layihələrini də idarə edə bilər.</p>\r\n<p><strong>C# Developerlər harda işləyə bilər?</strong></p>\r\n<p> C# Developerlər, bir sıra dövlət və özəl müəssisələrdə, o cümlədən nazirlik və komitələrin, özəl şirkətlərin və eləcə də bankların İT departamentlərinin proqramlaşdırma şöbələrində proqramçı və ya layihə meneceri vəzifələrində çalışa bilər.</p>\r\n<p><strong>Kimlər dərs deyəcək?</strong></p>\r\n<p>  MilliByte-ın təhsil mərkəzində C# dərsləri, öz ixtisasları üzrə çalışan təcrübəli kadrlar və pedaqoji savada malik mütəxəssislər tərəfindən keçirilir. Yalnız onlar texniki ixtisasları ən başa düşülən tərzdə tədris edə bilərlər. C# təlimi də məhz bu cür praktiki təcrübəyə malik mütəxəssislər tərəfindən tədris edilir.</p>\r\n<p><strong>Dərslər necə keçiriləcək?</strong></p>\r\n<p> Ən yaxşı tədris metodikası nəzəriyyə və təcrübənin vəhdətindən ibarətdir. Bununla belə, bizim təlimçilər daha çox praktiki yönə ağırlıq verirlər. Dərslərdə qısa nəzəri biliklər verildikdən sonra praktiki məşğələlərə diqqət yönəlir. Həm sinif otaqlarımız və laboratoriyalarımızda, həm də evə verilən tapşırıqlarda praktiki vərdəşlərin daha dərindən yiyələnməsi qarşıya məqsəd qoyulur.</p>\r\n<p><strong>Nəticədə nələr əldə edəcəksiniz?</strong></p>\r\n<p> Siz, C# təlimini bitirdikdən sonra obyektyönümlü proqramlaşdırmanın əsaslarını öyrənmiş olacaq və C# mühitində sərbəst şəkildə proqramlar yazmağı bacaracaqsınız. Bundan başqa C# ilə verilənlər bazası proqramları hazırlamaq üçün əsas anlayışlarla da tanış olacaqsınız.</p>\r\n<p><strong>Təcrübə Proqramları</strong></p>\r\n<p> Tədris kurslarının sonunda dinləyicilərdən ən yaxşı göstəricilərə malik olanlardan layihə qrupları təşkil edilir. Belə layihə qrupları həm bilik və bacarıqlarını daha da təkmilləşdirmə imkanı qazanır, həm də kommersiya layihələrindən qazanc əldə edirlər.</p>\r\n</div>', '<p><strong>C# təlimində nələr öyrənəcəksiniz?</strong></p>\r\n<p>Siz, 4 aylıq C# təlimində aşağıdakı mövzuları öyrənəcəksiniz:<br />- Microsoft .NET mühiti;<br />- C# dilinin imkanları;<br />- C# ilə proqramlaşdırmanın əsas prinsipləri;<br />- Tətbiqi proqramların hazırlanma metodikası;<br />- Vizual və qeyri-vizual komponentlərin istifadəsi;<br />- Sistem dialoqları;<br />- Dialoq pəncərələri;<br />- C# və API Windows funksiyaları;<br />- C#\'da kodların təkrar istifadəsi (code reuse);<br />- Yeni komponent və DLL-lərin hazırlanması;<br />- C# ilə verilənlər bazası (əsas anlayışlar)</p>', '4 Ay', '220 Azn', '', 'img/services/1609259851-download.png'),
(10, 'Web Marketing ', 'SMM', '<p>SMM</p>', '<p>SMM</p>', '2 Ay', '250 Azn', '', 'img/services/1610291362-smm_nədir.png'),
(11, 'Dizayn Kursları', 'Adebo Photoshop', '<p><strong>Adobe Photoshop nə üçündür?</strong></p>\r\n<p> Adobe Photoshop - ən geniş yayılmış çox funksiyalı qrafik redaktor proqramıdır. Bu proqram müxtəlif rastr qrafikası (fotolar, fotorealistik təsvirlər və s.) ilə işləməyə imkan verir.</p>\r\n<div><strong>Adobe Photoshop\'u kimlər bilməlidir? <br /></strong></div>\r\n<div> Adobe Photoshop proqramını nəşriyyat və poliqrafiya işçiləri, foto və web studiya mütəxəssisləri və eləcə də təsvirlərlə işləyən həvəskarlar bilməlidir.</div>\r\n<div> </div>\r\n<div><strong>Dərslər necə keçiriləcək?<br /></strong></div>\r\n<div> Ən yaxşı tədris metodikası nəzəriyyə və təcrübənin vəhdətindən ibarətdir. Bununla belə, bizim təlimçilər daha çox praktiki yönə ağırlıq verirlər. Dərslərdə qısa nəzəri biliklər verildikdən sonra praktiki məşğələlərə diqqət yönəlir. Həm sinif otaqlarımız və laboratoriyalarımızda, həm də evə verilən tapşırıqlarda praktiki vərdəşlərin daha dərindən yiyələnməsi qarşıya məqsəd qoyulur.</div>\r\n<div><strong>Nəticədə nələr əldə edəcəksiniz?<br /></strong></div>\r\n<div> Siz, Adobe Photoshop təlimini bitirdikdən sonra təsvirlərlə işləməyi, onları istənilən səviyyədə emal etməyi bacaracaqsınız. Bundan əlavə müxtəlif illustrasiyalar və kollajlar hazırlamağı, və eləcə də təsvirlərin bədii tərtibatını da öyrənmiş olacaqsınız.</div>', '<p><strong>Adobe Photoshop təlimində nələr öyrənəcəksiniz?</strong></p>\r\n<p> Siz, 2 aylıq Adobe Photoshop təlimində aşağıdakı mövzuları öyrənəcəksiniz:</p>\r\n<div>- Rastr qrafikası: əsasları və emaletmə prinsipləri; </div>\r\n<div>- Rəng modelləri: xarakteristika və təyinatları;</div>\r\n<div>- Qrafik faylların formatları və xüsusiyyətləri;</div>\r\n<div>- Təsvirlərin hazırlanması və redaktəsi;</div>\r\n<div>- Təsvirlərin seçilməsi, retuş və montaj edilməsi;</div>\r\n<div>- Xüsusi effektlərin hazırlanması;</div>\r\n<div>- Təsvirlərin çapa hazırlanması, rəng və ton korreksiyası;</div>\r\n<div>- Təsvirlərin maket və düzmə proqramlarına eksportu;</div>\r\n<div>- Əlavə imkanlar.</div>', '2 Ay', '250 Azn', '', 'img/services/1610291622-download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `xidmetler`
--

CREATE TABLE `xidmetler` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basliq` varchar(255) NOT NULL,
  `aciqlama` text NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xidmetler`
--

INSERT INTO `xidmetler` (`id`, `basliq`, `aciqlama`, `sekil`, `icon`) VALUES
(17, 'Müasir saytların yaradılması', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>', 'img/services/1599305240-img6.png', 'img/icon/1599305208-024-server.png'),
(18, 'Proqramlaşdırma Kursları', '<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.</p>', 'img/services/1599305258-blog-details.png', 'img/icon/1599305278-033-rocket.png'),
(19, 'Hosting Xidməti', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English</p>', 'img/services/1607184260-1599135182-033-rocket.png', 'img/icon/1607184260-1599134704-045-hacker.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nizamlamalar`
--
ALTER TABLE `nizamlamalar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qeydiyyat`
--
ALTER TABLE `qeydiyyat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telimler`
--
ALTER TABLE `telimler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xidmetler`
--
ALTER TABLE `xidmetler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `nizamlamalar`
--
ALTER TABLE `nizamlamalar`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `qeydiyyat`
--
ALTER TABLE `qeydiyyat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `telimler`
--
ALTER TABLE `telimler`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `xidmetler`
--
ALTER TABLE `xidmetler`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
