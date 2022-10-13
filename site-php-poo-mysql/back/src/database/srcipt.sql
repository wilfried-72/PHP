--
CREATE DATABASE IF NOT EXISTS `crud_tutorial` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE crud_tutorial;

-- --------------------------------------------------------
--
-- Table structure for table `articles`
--
-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: crud_tutorial
-- ------------------------------------------------------
-- Server version	8.0.30
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!50503 SET NAMES utf8 */
;

/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */
;

/*!40103 SET TIME_ZONE='+00:00' */
;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */
;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */
;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */
;

/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */
;

--
-- Table structure for table `articles`
--
DROP TABLE IF EXISTS `articles`;

/*!40101 SET @saved_cs_client     = @@character_set_client */
;

/*!50503 SET character_set_client = utf8mb4 */
;

CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 145 DEFAULT CHARSET = utf8mb3 COLLATE = utf8mb3_unicode_ci;

/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `articles`
--
LOCK TABLES `articles` WRITE;

/*!40000 ALTER TABLE `articles` DISABLE KEYS */
;

INSERT INTO
  `articles`
VALUES
  (
    122,
    'T.C',
    'L\'avantage de louer en toute tranquilité',
    'Et et autem non quibusdam et. Numquam aliquid aliquam aliquid sit cumque ea reprehenderit. At ea qui rerum qui impedit.',
    '<p>Et possimus veritatis quia maiores enim. Illum maiores aperiam nobis nam. Eligendi laborum sunt enim ratione aliquid praesentium. Ab nihil asperiores ea eaque.</p><p>Molestiae qui minima cum eligendi neque et aut. Sapiente expedita sunt natus sint neque qui. Dicta excepturi sit consequatur molestias.</p><p>Non hic nostrum qui sit est. Soluta doloribus dolor voluptate nisi. Molestias velit quia ad porro quo eos est illum. Esse officia alias est velit sunt.</p><p>Et aspernatur repellat placeat. Ex voluptatum dolores aut totam qui perferendis ut fugit. Voluptatibus mollitia ut minus magni. Placeat dolorem modi et architecto dolorem.</p><p>Ut quod excepturi et sapiente in expedita rerum. Ut sint voluptas labore blanditiis minima.</p>',
    '2022-10-13 15:29:43'
  ),
(
    124,
    'T.C',
    'L\'art d\'atteindre vos buts plus facilement',
    'Corrupti tenetur alias repellat eveniet. Voluptatibus ex praesentium doloremque. Qui repudiandae ipsum a eaque.',
    '<p>Voluptatem sunt quos voluptates odit cum. Fuga ea ut rem expedita sint esse voluptatibus. Ipsa sint enim eos et.</p><p>Impedit atque quo hic ea. Aspernatur iusto hic sint deserunt ea quas. Consequuntur impedit aut quibusdam est deleniti dolores.</p><p>Qui debitis voluptas quo. Eius qui nisi et minima labore qui officia. Assumenda ullam voluptate magnam repellendus.</p><p>Animi qui expedita et distinctio ut unde. Commodi fugit et molestias. Ut soluta quod quaerat. Quia facilis nemo aut voluptas ut.</p><p>Doloremque autem quos aut sapiente assumenda. At iure at aspernatur neque. Rerum eum assumenda quaerat culpa incidunt repellat atque.</p>',
    '2022-10-13 15:29:43'
  ),
(
    126,
    'T.C',
    'Le pouvoir d\'innover à l\'état pur',
    'Fugiat quis reprehenderit rerum velit reprehenderit. Voluptate ipsa eligendi numquam consectetur qui occaecati nulla debitis. Blanditiis tempore ducimus voluptatem est odio.',
    '<p>Qui enim nihil dolor temporibus impedit alias. Suscipit sit autem sapiente tempora.</p><p>Omnis sunt sapiente quia et dolorum omnis. Quasi neque deserunt quasi officia dolorem. Ducimus incidunt aut voluptatem nihil quas qui beatae. Possimus doloremque dolorem in veniam sunt maiores voluptatem.</p><p>Veniam labore aut sint suscipit inventore. Non iure fugit distinctio adipisci cupiditate. Voluptatum unde perspiciatis nihil accusantium nostrum.</p><p>At rem vel fugit numquam ut. Eos odit sint quae architecto. Illo atque ducimus excepturi ea adipisci et nesciunt.</p><p>Earum tenetur quo ut quasi dolorem. Et impedit officiis vitae accusamus. Dolores eius distinctio sunt cumque exercitationem nesciunt.</p>',
    '2022-10-13 15:29:43'
  ),
(
    127,
    'T.C',
    'Le confort de changer à sa source',
    'Molestiae cumque nostrum sit numquam quia voluptas molestias dolorem. Voluptatem delectus praesentium iure sed praesentium dolorum aut. Omnis corporis sint dolores sunt. Laborum ipsa dolor voluptatem incidunt.',
    '<p>Ipsa sapiente earum ea quasi et. Sit autem accusamus quia beatae cupiditate. Atque aut voluptatem enim ut et ratione esse.</p><p>Nihil illum et mollitia repellendus earum ipsam aut. Eos aut voluptatem quasi quibusdam commodi. Nihil voluptatem placeat fuga minus et. Quia impedit incidunt accusamus magni. Natus tempore consequuntur ea enim totam odio.</p><p>Sed exercitationem omnis recusandae corporis est. Reiciendis et quod vitae quod.</p><p>Tempora animi illum sed quia a. Iste exercitationem voluptatum nobis. Sequi modi dolores iure iusto. Veniam aut aut tempore nobis voluptas recusandae eligendi. Dolores qui et animi libero quisquam dolore.</p><p>Accusamus quam corrupti et tenetur qui pariatur. Repellat et delectus voluptates veniam facilis saepe. Qui aut aut soluta quia ut in numquam.</p>',
    '2022-10-13 15:29:43'
  ),
(
    128,
    'T.J',
    'Le droit de concrétiser vos projets plus facilement',
    'Vel est cum tempore aut provident quae explicabo animi. Est maiores ad quod aspernatur officiis velit est quas. At dolorem unde rerum. Voluptatem cupiditate quia necessitatibus non eum.',
    '<p>Est ea est tenetur ut voluptas facere cum consequatur. Impedit error explicabo qui officiis ratione tempora. Qui sint non vero in temporibus.</p><p>Et adipisci itaque sint odit animi perspiciatis ex cumque. Et quas atque culpa qui excepturi nobis. Consectetur ipsum sunt aliquid incidunt laudantium aspernatur non.</p><p>Iusto in nam et voluptas. Totam adipisci doloremque quis dolorem quae adipisci.</p><p>Id eos excepturi non molestiae sunt amet. Et optio itaque dolore autem. Beatae tenetur voluptatum laudantium qui ea autem. Eum earum non ratione.</p><p>Sint quas vitae earum. Porro omnis est est nostrum. Veniam cupiditate accusantium qui velit et quas. Consequatur enim sit quia molestiae saepe repudiandae.</p>',
    '2022-10-13 15:29:27'
  ),
(
    129,
    'T.J',
    'La simplicité d\'évoluer autrement',
    'Laborum optio corrupti id neque voluptatibus quia. Eligendi est quis quia eos ullam quis perferendis. Eligendi commodi incidunt non quo distinctio dicta. Et voluptatem est sint est vel doloremque. Quae nam animi sit sit illum vel quasi.',
    '<p>Qui aliquam eligendi aspernatur et quas et culpa. Quia porro deserunt non est. Minus est iste veritatis.</p><p>Tempora expedita non aut et impedit minima eos. Molestiae rerum explicabo aliquam nisi nihil recusandae tempore. Dolor ipsam voluptatem vero consequuntur doloremque id.</p><p>Tempore sit est ducimus ut libero. Aperiam aperiam praesentium illo error. Minima nemo distinctio atque voluptas fugiat ullam nihil. Deleniti natus quia laboriosam nemo aliquid tenetur.</p><p>Itaque omnis quos est magni consequatur. Dignissimos qui architecto excepturi molestiae praesentium ea sed. Corporis ab vitae aut id saepe.</p><p>Inventore dolor vitae molestias ut. Veritatis quia ratione delectus ab. Praesentium quos saepe harum aut. Maiores aliquid quia est delectus.</p>',
    '2022-10-13 15:29:27'
  ),
(
    130,
    'T.J',
    'Le confort de concrétiser vos projets de manière sûre',
    'Ea sint sunt eum voluptas molestias. Magni omnis maxime et assumenda qui. Eos quis corrupti numquam et velit ipsa quo.',
    '<p>Non doloremque quia placeat et deleniti atque molestiae. Eum tempora sed non sit eveniet. Animi vel rerum laudantium veniam voluptatem. Rerum ullam qui nisi nemo voluptatum minima molestiae. Similique est et ratione rerum omnis.</p><p>Laboriosam expedita consequatur aspernatur. Doloribus at repellendus ut eveniet autem officiis labore. Adipisci autem quis explicabo tempore ut debitis omnis recusandae. Adipisci ipsam incidunt eaque nihil ratione.</p><p>Corporis explicabo asperiores quia qui dignissimos. Dolor molestias itaque dolor aliquam. Fugiat alias est eos aliquid illo dolorem corporis molestias. Vero cupiditate neque quisquam sit. Velit iusto totam quisquam rerum.</p><p>Fugit qui est qui. Officiis quia nostrum et maxime expedita animi qui. Consequatur quia nulla facilis ipsam magni eius. Minima iste ipsam praesentium ut.</p><p>Dolor deserunt reiciendis aliquid. Non autem ut quis autem.</p>',
    '2022-10-13 15:29:27'
  ),
(
    131,
    'T.J',
    'Le plaisir de louer autrement',
    'Voluptatem itaque voluptatum totam aut dolor. Necessitatibus et quaerat qui neque sed tenetur. Labore deleniti et repellendus.',
    '<p>Voluptatum dolorem iste est iure. Repellendus fugiat asperiores incidunt vero laudantium rerum. Id veritatis et earum dolorem vel ut. Sapiente nulla sit natus et debitis quasi reprehenderit.</p><p>Debitis itaque tempore molestiae fuga autem. Quidem cum neque optio est ratione. Doloribus animi omnis qui provident et. Excepturi cum inventore libero veritatis sit et provident.</p><p>Dolores distinctio voluptates voluptatum repudiandae omnis. Magni ex non voluptas animi nemo quod. Et perspiciatis molestiae rem aliquid ut eius. Velit aliquam est eius pariatur nihil autem dolore.</p><p>Voluptatem culpa quibusdam aliquid quasi excepturi tenetur consectetur. Ipsa tempore nostrum ullam optio iure optio. Nisi beatae sit ratione enim ad ad quia.</p><p>Maxime sequi ducimus error consectetur non molestiae non voluptates. Quo perspiciatis accusantium accusantium blanditiis velit quae. Cum quis incidunt alias quia perspiciatis ut asperiores officia. Esse modi sit soluta ut cumque laboriosam.</p>',
    '2022-10-13 15:29:27'
  ),
(
    132,
    'T.J',
    'Le plaisir de concrétiser vos projets à sa source',
    'Accusantium at occaecati quas. Qui corporis earum quisquam sit fuga. Perspiciatis mollitia est ea veritatis exercitationem officia libero. Corrupti ipsum ipsum quam necessitatibus voluptatum sit et.',
    '<p>Eum aliquam non consequatur deleniti quidem magnam numquam. Ratione exercitationem qui ex doloribus harum voluptates. Dolores exercitationem provident voluptatem qui nihil cupiditate doloremque. Sit nobis cupiditate non neque.</p><p>Quasi soluta a impedit sequi. Quis eos aperiam et autem velit laborum molestiae ratione.</p><p>Aut harum vel libero rem eligendi error. Impedit beatae qui qui et nobis. Architecto illo consequatur distinctio atque quia et beatae fugit.</p><p>Tempora optio sit explicabo molestiae eum corporis aut. Doloribus est ipsum molestiae. Rem dolores molestiae tempore voluptatem.</p><p>Doloribus dolores repellendus quia vel veniam iusto. Voluptatem asperiores ducimus voluptas. Aut nam repellat necessitatibus pariatur est qui quis.</p>',
    '2022-10-13 15:29:27'
  ),
(
    133,
    'T.J',
    'La sécurité de louer de manière sûre',
    'Est repellendus et quam repellendus et sed tenetur eaque. Similique sint a sint et quibusdam. A repellendus excepturi quisquam nostrum aut atque. Dolores nostrum nam sapiente perspiciatis vel ut.',
    '<p>Perspiciatis corrupti et qui quis eligendi a ad. Est ut eos porro tempora illum. Sequi et velit velit dolorum adipisci nulla dolore.</p><p>Sit earum ducimus dicta iusto. Et in eius eius quia. Maiores nesciunt atque molestias dicta. Sequi corporis ut dolorum explicabo vel.</p><p>Nostrum blanditiis iste iste impedit voluptatem sit. Consequatur iure eos pariatur omnis consequatur illo. Quas sed eius qui est voluptatum et. Magni quas et et occaecati enim laudantium.</p><p>Eos fugit voluptatem magni vel in qui voluptatem. Officia repudiandae eligendi quia dolores. Dolores adipisci voluptas sit. Unde nobis aut ex atque tempore eos tenetur.</p><p>Aut debitis qui at quo rerum. Optio enim nobis quo quasi ut quaerat. Suscipit et voluptatum non magni a voluptatem architecto. Vitae et sed eos sunt quasi dolore non. Soluta minus dolor nisi quos recusandae.</p>',
    '2022-10-13 15:29:27'
  ),
(
    134,
    'T.J',
    'Le droit d\'atteindre vos buts plus facilement',
    'Dolore harum assumenda harum qui laudantium non sint dolor. Est odit iusto et sint aliquam reprehenderit. Qui sed velit nisi cumque. Qui non modi error quibusdam reiciendis.',
    '<p>Exercitationem labore officia quia ut quam nobis quasi odio. Consectetur aut sint occaecati cumque quae quia ut. Eligendi dolor officiis velit facere voluptatem. Magni ullam et quisquam exercitationem. Qui non aliquam mollitia quod.</p><p>Eum nihil aliquid officiis dolor. Quis iste voluptatem nihil ullam ullam totam. Quis vel impedit ab.</p><p>Non et odit eveniet fuga sit. Sit est dolorem consectetur veniam in voluptatem praesentium. Ut suscipit ex ullam et.</p><p>Incidunt cumque quo ullam non. Eos et accusamus sed. Laborum molestiae distinctio architecto qui est qui minima reprehenderit. Est doloremque enim delectus natus voluptatum ad.</p><p>Necessitatibus tempore similique eveniet minus. Error laborum mollitia sequi commodi. Doloremque et qui et optio incidunt.</p>',
    '2022-10-13 15:29:27'
  ),
(
    135,
    'T.J',
    'La simplicité de changer plus rapidement',
    'Sit qui itaque maxime quibusdam. Saepe aliquid exercitationem suscipit blanditiis sunt consequatur voluptatum. Velit repellat autem quos ut odio qui. Adipisci accusantium et assumenda.',
    '<p>Doloremque voluptatem cumque odit id. Consequuntur ipsum et occaecati culpa ipsam consectetur. Facere et saepe et omnis amet. Laudantium ipsa quia voluptate aut fuga iure qui.</p><p>Nulla molestiae quae voluptas neque. Dolor dolor nihil dolorem officia. Beatae qui nisi voluptas iste consequuntur libero.</p><p>Sed ut est quibusdam facilis. Dolore corporis recusandae dolores odit. Ipsam assumenda repellendus totam aliquid aliquam ullam laudantium.</p><p>Numquam a a quidem illum. Voluptatum cum aut animi distinctio et voluptatum. Aliquid quasi earum rerum quibusdam aut dolores accusantium. Et mollitia quis ratione et quia rem.</p><p>Recusandae amet eius facere at temporibus asperiores quasi autem. Necessitatibus aut culpa dolores rerum repellendus quam dolore. Aut est asperiores id qui consequatur ea nostrum. Eum expedita distinctio consequatur iure voluptas.</p>',
    '2022-10-13 15:29:27'
  ),
(
    136,
    'T.J',
    'La simplicité d\'évoluer en toute sécurité',
    'Et quae qui laborum. Perferendis odio consequatur officia modi velit mollitia. Vel id dolores earum qui eaque fugit id. In aperiam placeat eveniet id.',
    '<p>Consectetur nostrum nesciunt nobis repellat quo provident qui. Non omnis recusandae ipsum et nam. Suscipit voluptates quo voluptatem ut corrupti quos nostrum.</p><p>Iure suscipit vel ipsa id. Possimus impedit id officiis animi sequi reprehenderit. Expedita aut officia nulla non maiores qui. Assumenda debitis quidem odio nihil quia laudantium et.</p><p>Neque provident quasi et excepturi. Quia possimus libero blanditiis ducimus dolorem. Ea et nobis sit. Sunt alias blanditiis illo eos et omnis nesciunt.</p><p>Dolor exercitationem qui quos eligendi rerum iste ab. Voluptatem ut sit voluptas hic. Neque libero illum laboriosam eius quas atque modi.</p><p>Iste repudiandae repudiandae repellat vel autem reprehenderit. Nisi voluptas saepe optio omnis. Molestiae est incidunt a nobis dicta et quia. Ut sed libero atque ut voluptates eius quod rem.</p>',
    '2022-10-13 15:29:27'
  ),
(
    137,
    'T.J',
    'La possibilité d\'atteindre vos buts en toute sécurité',
    'Magnam nostrum ut enim cumque expedita provident ut. Aut eum ut omnis explicabo pariatur ut eius quas. Odio ex fugit natus similique sint libero. Consectetur ut fugit maxime voluptas ea.',
    '<p>Quasi quas saepe voluptatem debitis. Earum deleniti repellat ut tempore molestiae saepe necessitatibus. Est sunt numquam ea rerum quam.</p><p>Suscipit et molestiae deleniti eius beatae. Qui omnis corrupti quibusdam sint. Earum repellat quod quis ex alias quae. Eum est voluptatibus et vel.</p><p>Voluptas et culpa et. Enim iste non architecto modi voluptas. Eos corrupti provident et delectus. Aut nihil excepturi totam reprehenderit illum cum explicabo.</p><p>Sed voluptatem saepe pariatur. Necessitatibus tempora corporis aut dignissimos optio. Minus beatae pariatur voluptas sint est dolore.</p><p>Quasi tempora impedit omnis sed ut modi. Minus hic vel doloremque provident fuga quia facere. Soluta id et saepe quis autem autem velit est.</p>',
    '2022-10-13 15:29:27'
  ),
(
    138,
    'D.J',
    'La simplicité d\'atteindre vos buts en toute tranquilité',
    'Atque exercitationem tempora repellat non. Omnis delectus incidunt vitae labore. Quis ut soluta voluptatem nulla quia aut molestias illo. Aut dolor inventore doloribus suscipit aperiam. Perferendis dignissimos maiores mollitia illo.',
    '<p>Necessitatibus cumque molestiae odio. Quasi nihil minus beatae quia mollitia. Atque a officia fugiat aliquam. Voluptas aut consequatur repellat ut nihil quis. Quo nostrum architecto sed rem.</p><p>Quo est est sequi in accusamus asperiores. Tenetur dolorum deserunt amet quam cum. Et quod voluptas cum atque dicta aut aut. Et similique sunt placeat rem esse. Alias minus iure excepturi qui excepturi.</p><p>Vero ut natus quam fuga asperiores. Earum quia voluptates ullam. Aut cumque est enim quibusdam beatae quibusdam.</p><p>Dolor non recusandae optio quis culpa voluptas modi neque. Quia magnam ut quis eos illo magni exercitationem. Facere neque quaerat a quos exercitationem. Velit esse itaque est repudiandae ut.</p><p>Rerum temporibus distinctio et atque. Minima accusantium et quam officia qui. Rerum voluptas fugit deleniti assumenda voluptatibus accusantium quae. Praesentium ut quo aut velit.</p>',
    '2022-10-13 15:27:33'
  ),
(
    139,
    'D.J',
    'L\'art d\'évoluer à la pointe',
    'Aut soluta soluta ut asperiores. Eum saepe mollitia enim repellendus eos soluta. Est repudiandae voluptas ex. Molestiae nemo temporibus ut ea vel.',
    '<p>Aut nesciunt temporibus corrupti eius voluptatem velit. Rerum recusandae soluta necessitatibus. Velit ad aspernatur consequatur unde voluptatem minus.</p><p>Impedit repellendus nisi doloribus ad pariatur labore voluptas. Doloremque mollitia adipisci dicta atque omnis optio necessitatibus. Expedita rerum earum dolorum dolorum doloremque at velit.</p><p>Rerum dolores ipsam labore ipsa. Magni officia veritatis incidunt ullam minima. Error et dolorum fugiat architecto quo cumque dolorem vel.</p><p>Recusandae tenetur tempore consequatur non modi ut sit. Quia neque nobis quis autem et nostrum et debitis. Fugiat culpa aliquid temporibus accusamus voluptatem. Saepe aut aliquid iusto laborum quos eos perferendis.</p><p>Laudantium ipsa architecto voluptatibus qui pariatur sit corrupti. Voluptas voluptatem qui eveniet dolor. Amet omnis vel aut id quia.</p>',
    '2022-10-13 15:27:33'
  ),
(
    140,
    'D.J',
    'La possibilité d\'avancer plus facilement',
    'Praesentium dolores rerum officiis culpa alias. Doloribus consequatur in ipsum perferendis. Voluptatem dolores aut consequatur corporis dolores vel quod nemo. Quis quis id ratione. Id dolores ut consequatur quam.',
    '<p>Molestias voluptatem optio et laborum enim. Provident doloribus similique esse officia at sequi odio. Est et ut ea et sunt accusantium.</p><p>Qui assumenda nam minima totam debitis. Architecto nobis sit tenetur aliquam velit rerum voluptas quisquam. Voluptates aut qui placeat optio.</p><p>Maiores soluta odit exercitationem qui. Quia perferendis ipsam repellat est iste dolores aperiam quis. Voluptatem quos aliquid dolorum pariatur repellendus suscipit. Quas sit est quod quos non.</p><p>Qui quod in qui commodi voluptates suscipit. Officia qui vitae neque distinctio provident molestias fugiat corrupti. Quam deleniti vero rerum qui corporis et similique.</p><p>Quia officiis beatae et voluptatem soluta ut. Aut incidunt et veritatis tempore suscipit. Quam expedita excepturi aut culpa aut ab. Totam maxime voluptates beatae aut. Qui quam quisquam nostrum nihil beatae.</p>',
    '2022-10-13 15:27:33'
  ),
(
    141,
    'D.J',
    'L\'assurance de louer plus facilement',
    'Sit ullam sequi et similique cum provident molestias dolores. Ea et et consequatur rerum qui. Aut et architecto dolor hic. Minima consequatur eum qui pariatur blanditiis.',
    '<p>Voluptates quis magni veniam autem aut. Velit est minus illum totam. Eum qui voluptas quidem excepturi neque vero doloribus. Totam consequatur eligendi nisi eaque voluptatem alias.</p><p>In facilis consequatur in beatae iusto est quasi ipsum. Culpa quia rerum aliquam. Sapiente ea consequatur illum.</p><p>Laborum accusamus vel tempore ut modi facere. Veniam quisquam aut voluptatibus reprehenderit porro. Veritatis quasi hic aut saepe corporis vitae.</p><p>Incidunt repellat recusandae aliquam. Qui ut tenetur totam ratione. Autem velit et molestias consequatur provident. Sit necessitatibus quo qui cum vel.</p><p>Suscipit sapiente maiores illum debitis qui quos reiciendis. Similique est facere quia consequuntur eos ipsam. Voluptatem corrupti debitis quia soluta voluptatem nesciunt.</p>',
    '2022-10-13 15:27:33'
  );

/*!40000 ALTER TABLE `articles` ENABLE KEYS */
;

UNLOCK TABLES;

--
-- Table structure for table `comments`
--
DROP TABLE IF EXISTS `comments`;

/*!40101 SET @saved_cs_client     = @@character_set_client */
;

/*!50503 SET character_set_client = utf8mb4 */
;

CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `article_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ARTICLES` (`article_id`)
) ENGINE = MyISAM AUTO_INCREMENT = 225 DEFAULT CHARSET = latin1;

/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `comments`
--
LOCK TABLES `comments` WRITE;

/*!40000 ALTER TABLE `comments` DISABLE KEYS */
;

INSERT INTO
  `comments`
VALUES
  (
    106,
    'T.J',
    '<p>Est quod qui nisi consequatur voluptatem accusantium voluptate. Enim aut veniam dolor veritatis quis. Velit rerum aliquam dolorem aperiam enim debitis.</p><p>Inventore ducimus nisi omnis rerum nemo facere nihil neque. Consectetur est delectus natus dolor veniam voluptatem sit est. Laudantium sit totam unde dolor. Omnis rerum sapiente quia nihil aut. Corrupti molestiae nisi hic voluptatem repudiandae.</p><p>Labore eum ipsa quam asperiores molestiae pariatur. Sed at voluptas dignissimos sint ut assumenda. Labore deserunt deserunt quia iure facilis qui.</p><p>Sequi est id voluptate unde distinctio doloremque non sequi. Qui omnis temporibus non eum nesciunt. Sunt vel ipsam quisquam explicabo magni alias. Qui non ut et occaecati. Reiciendis excepturi minus aut qui beatae non soluta.</p><p>Pariatur aperiam dolore aut. Eos minima harum sed nobis placeat molestias dolor assumenda. Atque sed nisi sit ratione occaecati unde ad. Ad dolores corrupti sit quo consequatur qui.</p>',
    '2022-10-13 15:32:22',
    122
  ),
(
    107,
    'T.J',
    '<p>Et laborum ut ducimus eum odio est ut. Eos aspernatur aut sit id et sed. Rerum est molestiae pariatur deleniti sapiente rerum nesciunt.</p><p>Temporibus ullam quia expedita veritatis dolor in. Deserunt et corporis omnis quis autem reprehenderit. Doloribus et similique ea accusamus rerum nihil quo.</p><p>Repellendus aperiam ut in quaerat cum. Dolores exercitationem veniam adipisci qui. Non quia aut dolores a quae rerum. Consectetur ut laboriosam fuga minima harum. Et quia et rerum possimus veritatis voluptatum delectus omnis.</p><p>Praesentium et nam ad quis repudiandae ut. Cupiditate delectus qui modi aut. Iusto et facere voluptas ad.</p><p>Aperiam sit qui dolore qui et. Ut quo sit dolores consequuntur. Rerum animi mollitia nostrum qui. Voluptas dolorem aut placeat nisi.</p>',
    '2022-10-13 15:32:22',
    122
  ),
(
    128,
    'T.J',
    '<p>Repudiandae nihil eos voluptates. Tenetur sint consectetur quibusdam. Ipsa quasi porro omnis voluptas pariatur ab.</p><p>Doloribus id sit eius qui. Minima dolor atque omnis occaecati. Est veniam veniam molestias sed ex.</p><p>Alias sit aliquam ullam id veritatis. Repellendus nam ex et necessitatibus beatae reiciendis est. Rerum maiores molestiae beatae recusandae quae sed.</p><p>A magnam expedita rerum quia. Quia iste ut perferendis minima maxime quod quia. Repellendus tempora facilis enim dolore corporis. Nobis inventore qui nobis rem.</p><p>Id officiis error nulla magni velit et itaque. Natus repellat possimus dolores est quos suscipit. Cumque consequatur ab sint nemo saepe corrupti.</p>',
    '2022-10-13 15:32:22',
    127
  ),
(
    129,
    'T.J',
    '<p>Cum et id voluptatem hic nisi rerum nisi blanditiis. Nihil enim cum aut eligendi tenetur.</p><p>Maiores quia natus doloribus fugiat. Repellendus architecto qui enim quia ratione. Ad consequatur mollitia est eveniet. Quibusdam enim id qui sapiente qui voluptate id.</p><p>Et cum id sed. Ut pariatur est consectetur unde velit praesentium. Quaerat molestias incidunt et aliquid voluptatum expedita. Suscipit sint corrupti voluptatibus magnam.</p><p>Cum odit et eos ad sed dignissimos perspiciatis odit. Error aliquid eaque atque. Nesciunt inventore quia illo delectus animi impedit laboriosam. Voluptatum sed iste ex magnam consequuntur.</p><p>Quo quia sequi illo aut. Officia officiis optio nam earum laboriosam. Et numquam iure sunt nisi repudiandae corporis. Autem sit fugiat temporibus aut modi.</p>',
    '2022-10-13 15:32:22',
    127
  ),
(
    130,
    'T.J',
    '<p>Ut voluptas ab a non autem temporibus. Quis nesciunt et sint dolor odio praesentium. Nam enim amet sint odio. Occaecati debitis dicta maiores qui. Id porro eum et suscipit velit exercitationem assumenda.</p><p>Amet fugit officia quia. Neque nostrum facilis sunt recusandae. Cum nihil porro ducimus exercitationem.</p><p>Autem sequi numquam sint laboriosam sit facilis rerum. Eum quisquam quaerat sapiente aut inventore quibusdam maxime. Deserunt dicta molestias et aut sit.</p><p>Aut sunt ipsam velit nobis modi quod eius. Numquam fugiat consectetur harum sunt et blanditiis. Ad voluptates deleniti quam reprehenderit eum reprehenderit quia. Et iusto mollitia et quisquam omnis facilis.</p><p>Deserunt assumenda eos aut temporibus praesentium ut quas. Ut asperiores nihil ad culpa. Rerum eaque distinctio similique asperiores. Animi magni laudantium deserunt.</p>',
    '2022-10-13 15:32:22',
    127
  ),
(
    131,
    'T.J',
    '<p>Ut labore sunt odit minima magni qui tempora. Blanditiis corporis aut enim dolorum facere tempora totam corrupti. A corrupti et est doloremque et necessitatibus est voluptatem.</p><p>Voluptas aliquam magnam minima maxime. Nihil aut velit qui. Harum animi error quibusdam eos voluptatibus. Delectus sint dolor est nam voluptatum.</p><p>Consequatur dolores magni mollitia aut. Consequatur suscipit quo qui fugit amet ad et. Mollitia minus iure quam iure et.</p><p>Ullam quis hic est architecto accusamus. Quia molestiae tempora consequatur tempore at vel. Quidem provident omnis rerum eligendi. Debitis error voluptatem esse aut praesentium.</p><p>Sint quod ullam quisquam rem quos. Aperiam praesentium placeat unde atque minima. Et quod accusantium ipsum mollitia est nihil accusantium.</p>',
    '2022-10-13 15:32:22',
    127
  ),
(
    132,
    'T.J',
    '<p>Aut recusandae alias animi aut. Libero omnis illo sunt aliquam laudantium tempora. Ut voluptatibus voluptatum vel dignissimos.</p><p>Modi sit voluptas nulla nihil. Enim quae laudantium totam blanditiis necessitatibus ut aut. Qui dignissimos cupiditate corrupti aliquid deserunt voluptatem.</p><p>Doloremque voluptatem impedit iure et sit. Quidem aspernatur et ea alias deserunt placeat. Cum ut sed voluptas aut voluptatum atque id delectus.</p><p>Ex molestias consequatur rerum laudantium cupiditate eligendi. Qui tenetur quibusdam est dolor. Veritatis sed eius voluptas accusamus dolor rem. Dolores animi necessitatibus harum ea cum dignissimos qui.</p><p>Qui a perspiciatis minima libero minima. Eaque reiciendis cumque earum nam qui necessitatibus.</p>',
    '2022-10-13 15:32:22',
    127
  ),
(
    133,
    'T.J',
    '<p>Voluptas et fugit omnis adipisci illum cum. Magni minus ut rerum et non. Ea itaque adipisci eius sit et nihil. Nobis natus sed impedit provident et placeat officia molestiae.</p><p>Sint reprehenderit tempore rerum dolores consectetur deserunt commodi. Quis voluptas asperiores sapiente et assumenda nobis consequatur. Consequuntur dolores sapiente nesciunt rerum vel quis. Dolores sunt voluptatibus itaque repudiandae.</p><p>Enim harum laudantium quis. Adipisci suscipit dolor quam nisi ut voluptas. Aliquam aspernatur culpa deserunt exercitationem quam enim.</p><p>Dolor voluptates quia officia. Sed facere et eaque sunt aut illo non sapiente. Ad aliquid deserunt doloribus corrupti eaque enim temporibus pariatur. Perspiciatis asperiores omnis qui id consequatur.</p><p>Sunt qui id voluptatem itaque inventore dolores. Totam sed aut dolores voluptatum error.</p>',
    '2022-10-13 15:32:22',
    127
  ),
(
    134,
    'T.J',
    '<p>Sunt est eaque quasi deleniti repellat ex sunt iste. Quia expedita corrupti architecto nisi. Voluptatem consequatur velit velit dolor. Cupiditate praesentium iure aut nam tenetur aut hic nostrum. Non ab ea quia magnam.</p><p>Excepturi sunt et et rerum quia quia ab. Quo voluptas est aliquid sequi. Mollitia vel facilis odio rerum consequatur.</p><p>Ut sequi ad iste omnis eum molestiae. Debitis modi animi mollitia dolores et. Suscipit et ut maiores sed et perspiciatis. Facere qui aut est repudiandae dolorem magni ab.</p><p>Sit similique nobis omnis quos quidem rem. Ducimus nihil quisquam accusamus eos sit. Recusandae quae aut ad pariatur aut qui. Voluptatum dolor odit consequatur aut eos sunt sunt.</p><p>Ut natus molestiae ullam et quia rem nobis esse. Et accusantium cumque tenetur beatae officia quidem deserunt. Ex eaque corporis dolorem voluptatem aliquam dolores.</p>',
    '2022-10-13 15:32:22',
    128
  ),
(
    135,
    'T.J',
    '<p>Quam tempore aut dolores. Id delectus modi inventore. Omnis rem laboriosam et reiciendis quos consequuntur commodi.</p><p>Sed hic quia inventore rerum voluptatum tempore beatae doloribus. Recusandae suscipit iste magnam et doloribus. Et suscipit dignissimos iusto suscipit vitae. Officiis laboriosam nulla ullam vel sequi suscipit sint et. Dicta eos vitae in officiis fuga.</p><p>Et aspernatur necessitatibus impedit vel vitae aut. Impedit velit in quasi vel laboriosam in. Voluptate id earum pariatur quisquam omnis voluptatem aperiam. Consequatur animi laudantium nulla voluptatem.</p><p>In molestias aut enim voluptates deserunt temporibus. Tempora et temporibus et molestiae. Alias repellendus perspiciatis labore cumque quia. Natus atque velit cupiditate laboriosam.</p><p>Totam alias qui et facere quibusdam. Accusantium suscipit dolore est quae. Delectus voluptatem veniam sunt dignissimos eos non. Ducimus esse quia voluptatem ratione eius.</p>',
    '2022-10-13 15:32:22',
    128
  ),
(
    136,
    'T.J',
    '<p>Qui quaerat nesciunt possimus accusantium. Est iusto et dolores et quam quis. Et totam aliquam incidunt. Cupiditate qui sit distinctio eos dolorem natus ullam.</p><p>Vel non qui et voluptatibus saepe facere. Quae consequuntur incidunt quia similique nesciunt. Et dignissimos commodi illum.</p><p>Dolor ea necessitatibus qui corrupti laudantium. Illo suscipit sapiente ipsa. Tempora qui unde a id qui et voluptatem. Minima quidem similique doloribus neque quia.</p><p>Eaque et esse aliquid totam. Itaque sit cumque quo. Et omnis perspiciatis optio. Enim nulla reprehenderit ut debitis.</p><p>Temporibus ut aperiam tempora ut atque provident nihil eos. Vitae corrupti dolorem in quidem sit laborum. Consectetur labore aut voluptas unde et occaecati nam esse.</p>',
    '2022-10-13 15:32:22',
    128
  ),
(
    137,
    'T.J',
    '<p>Perspiciatis voluptatibus perspiciatis dolorum natus numquam aut. Sint illo cupiditate vero nisi fugit cum. Modi omnis nihil nulla accusamus numquam pariatur commodi ex. Fuga amet neque qui unde nemo.</p><p>Hic exercitationem optio quidem ratione eum rerum nemo commodi. Tempora animi in nam vero eligendi voluptatum pariatur. Non tenetur rerum nemo perferendis incidunt.</p><p>Dolorum nesciunt quos sed quis sed. Facilis deserunt aliquid ratione molestiae reiciendis eius. Sunt aut sit in. Ratione blanditiis velit consequatur.</p><p>Quia officia maiores expedita. Aut quam velit in odio nam sit dolor. Praesentium odio aliquam minima assumenda illum. Dicta aperiam laborum qui in.</p><p>Voluptatibus iste reprehenderit aut ut ratione. Quod molestiae dolores nostrum similique excepturi perspiciatis. Sed veniam omnis consequatur molestias. Autem ea ea fugit voluptates iure similique.</p>',
    '2022-10-13 15:32:22',
    128
  ),
(
    138,
    'D.J',
    '<p>Sed culpa est odio aut. Officiis labore et facilis.</p><p>Et totam nostrum natus. Qui voluptatibus voluptatem vel amet non quibusdam. Magnam ut temporibus ut ut consequatur ut. Ut laboriosam rerum nisi ut aperiam illum.</p><p>Et provident quasi qui eaque. Voluptatum sed ea dolores sint debitis voluptas. Sint repudiandae sit saepe ut est rem.</p><p>Illum delectus accusamus culpa earum aut beatae cum voluptatem. Officiis ut qui velit. Voluptatem qui qui optio. Quos dignissimos quis ut aliquam voluptatum ut.</p><p>Et voluptate id ut consequatur veritatis aut quis. Officia dolorem aliquam maiores quidem quia maxime esse. Velit et sint ipsum nulla. Atque quas voluptate sed aperiam magni id nihil.</p>',
    '2022-10-13 15:31:36',
    128
  ),
(
    139,
    'D.J',
    '<p>Ut autem fuga cumque. Voluptas non esse consequatur quasi libero laborum porro. Accusamus sunt architecto dicta est. Recusandae maiores eos consequatur placeat ex non molestiae.</p><p>Cupiditate nisi perspiciatis possimus quis et aspernatur voluptas magnam. Et quas maiores nemo doloremque. Dignissimos vel ut rem fugiat autem natus iure vitae.</p><p>Voluptates porro nemo est. Est et dicta blanditiis quidem. Dolorem ut tempora qui quia modi fugit id porro. Ratione ipsum qui et.</p><p>Sequi impedit ut ducimus harum occaecati dolores. Sed et consequatur et nihil. Nulla possimus numquam sed culpa dignissimos. Dolore porro consectetur libero expedita perferendis velit itaque. Adipisci molestias omnis eveniet nihil laborum velit ad.</p><p>Aut harum fuga debitis et. Nihil sit voluptate laborum suscipit accusantium harum similique. Neque ab voluptates est vel. Nulla perferendis maiores quam aspernatur. Exercitationem voluptatem fuga amet est voluptatibus.</p>',
    '2022-10-13 15:31:36',
    128
  ),
(
    140,
    'D.J',
    '<p>Officiis harum earum repellat quod aut excepturi tempore. Doloremque quasi autem ratione nihil aliquid. Autem enim et ut alias nesciunt quia ea ad. Iure cum iste quas recusandae natus.</p><p>Vero ipsam illum quo rerum harum quaerat aliquam id. Id dolor amet est impedit adipisci corrupti est. Et ipsa porro suscipit est.</p><p>Cumque at eveniet optio sint corrupti animi incidunt autem. A et aut error voluptatem amet ipsa.</p><p>Neque facilis in error soluta. Id saepe qui ad quod minima fuga. Qui qui et quia et dicta sed unde facilis.</p><p>Molestiae qui non vel aut vitae. Dolorem nemo fuga voluptatum minima sunt veniam. Harum veniam iste tenetur et enim non quod.</p>',
    '2022-10-13 15:31:36',
    128
  ),
(
    141,
    'D.J',
    'Qui saepe totam dolores voluptatem. Ea quia corrupti sed eaque quam neque. Placeat quis minima debitis et et. Ipsa voluptates cupiditate alias sunt accusantium quia qui.Eos et ut vel consequatur dolores et. Dolorem et magni esse. Et libero officia laudantium perferendis necessitatibus voluptas. Blanditiis occaecati quam ipsum pariatur quaerat ullam.Sed animi eius voluptates quia natus unde. Enim iste beatae dolor et. Aut nisi est soluta reiciendis. Quos dolorem quaerat possimus dolores rerum nobis sint qui.Rerum itaque ut non ut voluptas est. Fuga optio maiores officia in alias debitis qui. Harum sint quaerat cumque dolorum quibusdam repudiandae nesciunt.Consequatur vel est aliquid dolorum eaque nam dolores. Ratione et esse ea aut qui. Veritatis aspernatur explicabo assumenda consequatur. Aut quisquam ipsam in ducimus.\r\ntest',
    '2022-10-13 15:31:36',
    129
  ),
(
    142,
    'D.J',
    '<p>Magnam reprehenderit enim placeat doloribus ad. Dolores commodi voluptatem sit omnis voluptas. Voluptatibus autem quia quia ea et.</p><p>At voluptates voluptatem suscipit accusantium blanditiis aut temporibus. Consequuntur sunt accusantium accusantium architecto ut. Est tenetur autem distinctio fuga et deserunt aliquid.</p><p>Molestiae mollitia nulla aut commodi omnis officia qui. Ut sit ut non et. Non excepturi rerum distinctio pariatur. Ut qui beatae dolor.</p><p>Sint asperiores vero ut dolores vero quia. Vitae est veniam dolor provident illum. Rerum iure mollitia voluptatem voluptatem voluptas. Est sunt voluptatem delectus consequuntur eos saepe fugit.</p><p>Incidunt et saepe magnam cupiditate veniam. Voluptatem voluptatem alias laudantium ut quo consequuntur. Eos dolorem voluptatem nihil doloribus reprehenderit. Architecto ipsa reprehenderit omnis vero deserunt qui nesciunt.</p>',
    '2022-10-13 15:31:36',
    129
  ),
(
    147,
    'D.J',
    '<p>Velit dicta sit voluptates adipisci eius est possimus. Incidunt necessitatibus commodi velit corrupti. Repellat non ipsam molestiae dolores voluptates.</p><p>Excepturi possimus est nemo quas quisquam. Dolorem non dicta quia. Officiis modi et beatae nesciunt.</p><p>Aliquam aut in voluptatem atque. Officiis consectetur ipsa nihil eaque reiciendis neque praesentium.</p><p>Itaque voluptates eius quis voluptas. Nisi omnis dolorem incidunt in et.</p><p>Aut rerum dolore neque veritatis sunt quasi eveniet. In aut tempore enim cupiditate. Nobis minus et quisquam commodi nam quod beatae est. Et tempora suscipit non architecto voluptas. Quae sint qui non iusto rem consequatur.</p>',
    '2022-10-13 15:31:36',
    131
  ),
(
    148,
    'D.J',
    '<p>Explicabo ullam ea et fuga blanditiis. Quam ratione hic sed nemo. Laborum enim aut fugit at commodi illo.</p><p>Sequi necessitatibus molestiae consequatur eos. Officiis inventore in tempora. Repellendus quis omnis non provident ipsa provident. Eius atque magni cum voluptate voluptatem enim.</p><p>Reiciendis consequatur aut fugiat ut qui voluptatem. Et dolore eum ex voluptatem ut est et voluptas. Architecto autem accusamus qui quibusdam eligendi enim et.</p><p>Fugiat pariatur ducimus distinctio saepe corporis. Totam aut architecto perspiciatis beatae ea. Quaerat expedita et sunt quia earum quia omnis. Aut nisi voluptate est officia praesentium suscipit quidem.</p><p>Autem consequatur dolores ea corrupti. Aperiam accusamus officiis impedit natus.</p>',
    '2022-10-13 15:31:36',
    131
  ),
(
    149,
    'D.J',
    '<p>Consequuntur dignissimos a iusto. Saepe praesentium sit quo unde nam modi magnam. A soluta quisquam inventore voluptatem quas exercitationem vitae. Iusto corrupti aliquid earum a consequuntur. Qui voluptates non minima ea ipsam delectus vero.</p><p>Ut quae magni tempora et deserunt repellat. Rerum iste aliquam molestiae molestiae cum ratione et. Tenetur asperiores laudantium minima et eos vitae.</p><p>Debitis rem cum et blanditiis. Saepe nesciunt ea et dolore tempora.</p><p>Enim non minima officia hic sit voluptatem modi. Qui deserunt unde est amet quasi. Voluptatem officiis dolore et sed recusandae nam.</p><p>Mollitia porro officiis cumque consequatur quidem quidem eos. Ut porro soluta enim sint nobis consequatur. Maxime perspiciatis vitae nobis esse sapiente est et. Molestias ut velit dicta corporis.</p>',
    '2022-10-13 15:31:36',
    131
  ),
(
    150,
    'D.J',
    '<p>Officia voluptate voluptas qui. Itaque qui nulla veniam facilis modi pariatur ut assumenda. Nam sed praesentium quis voluptatum. Ab rem asperiores quaerat aut quo tempora.</p><p>Nulla id distinctio sint esse ab sapiente. Velit aperiam aliquid in quasi. Repellat occaecati debitis sapiente sit. Adipisci placeat est dolor eos et et.</p><p>Qui et dolorem quis accusantium. Nisi voluptatem est ut quia mollitia sunt. Dolorum eos aut modi nihil.</p><p>Et aut inventore dolorem a. Impedit voluptatem dolorum deserunt saepe eos dolorem.</p><p>Dicta deleniti et at totam. Incidunt ut nesciunt neque vel et quia doloribus. Molestiae quisquam amet ea consequatur suscipit. Quia sed ea dolores cupiditate provident nihil vel. Sed eaque eligendi inventore quibusdam.</p>',
    '2022-10-13 15:31:36',
    131
  ),
(
    151,
    'D.J',
    '<p>Et nihil est voluptas sunt et natus. Harum vero voluptates facere facere. Voluptas quidem itaque molestias veniam dolore laboriosam.</p><p>Culpa magni eum ut saepe dolore maiores. Recusandae et omnis rerum optio quia in.</p><p>Quia quisquam et doloribus eos ab aperiam. Dolor eaque voluptates recusandae laboriosam delectus quos. Quis dicta corporis facilis excepturi quia dicta. Quia eum quo eveniet reiciendis eum quia.</p><p>Eum aperiam autem laboriosam cum quo unde ad. Debitis tenetur occaecati fuga sint. Molestiae quis repudiandae et voluptatem beatae. Non qui ratione porro odit ut reiciendis aut.</p><p>Aut optio officia ex adipisci molestiae quidem modi laudantium. Qui quae laboriosam necessitatibus unde. Quis expedita amet omnis ea. Fugiat qui ad ipsa repellendus ad sit libero.</p>',
    '2022-10-13 15:31:36',
    131
  ),
(
    152,
    'D.J',
    '<p>Molestiae est mollitia quia consectetur perferendis. Ullam aut id deleniti sint dolor cupiditate nulla. Sed laudantium doloribus praesentium sed officiis. Quibusdam voluptatum qui aliquam.</p><p>Ut repellendus ab harum maiores. Quibusdam fugit quasi velit necessitatibus commodi voluptatem doloremque. Doloribus et quibusdam officiis in occaecati molestiae. Accusantium ipsum voluptatem vero.</p><p>Vel odio quod error rerum ut officia. Accusantium voluptate deleniti cupiditate libero facilis eius ut. Unde ut praesentium illum aut et. Ex eos non nemo eos culpa enim.</p><p>Necessitatibus aut sequi nihil quaerat quidem nostrum. Ipsam id temporibus consequatur velit eligendi earum porro. Et enim consectetur est et.</p><p>Eius itaque eaque sunt ab aliquid doloribus vero. Pariatur voluptatum consequatur et officiis rerum. Consectetur tenetur sed sit quo. Veniam fugiat quia officiis quo. Fugit quam consequatur tenetur sit et.</p>',
    '2022-10-13 15:31:36',
    132
  ),
(
    153,
    'D.J',
    '<p>Velit voluptates et molestiae voluptates vel. Eum repellendus cum voluptatibus quae dolor officiis quod. Aliquam molestias exercitationem a consectetur nostrum eum.</p><p>Doloribus consequatur omnis omnis ut perferendis repudiandae. Consequatur iure nobis magnam exercitationem eos. Quis magnam eos iure omnis vel dicta autem voluptas.</p><p>Incidunt nisi harum aut dolores ratione quia. Iure quia odio dolor necessitatibus ea repudiandae. Ipsum ullam nobis sed et maiores est.</p><p>Aut quo deserunt nisi perspiciatis laboriosam ipsa voluptas. Autem aperiam illo rerum minus. Quisquam repellat et officiis et.</p><p>Numquam quos neque quam. Qui ipsam sint aut quia ex mollitia. Exercitationem fuga est et qui dolores accusantium. Error esse veniam deserunt et reprehenderit.</p>',
    '2022-10-13 15:31:36',
    132
  ),
(
    154,
    'D.J',
    '<p>Consequuntur qui illum suscipit laborum et deleniti quas tempora. Blanditiis eligendi ipsam reprehenderit fuga quod aut sit enim. Cumque vel quis et voluptatibus. Ea libero et accusamus dicta natus maxime.</p><p>Voluptas dolorum quia qui voluptatem corrupti aperiam fugiat quam. Sapiente incidunt velit aut aut voluptatem. Excepturi doloribus recusandae omnis et.</p><p>Reiciendis ratione ducimus labore nisi. Ut ut iste molestias. Sint soluta quisquam minus unde esse placeat eum consequuntur.</p><p>Aliquid alias maxime recusandae. Sed exercitationem alias dolor sit omnis et eos. Nihil non ut vitae molestiae ipsam harum.</p><p>Repellendus voluptatem et aut voluptas incidunt rem eius nihil. Sunt laborum dolores odit voluptatem debitis veniam.</p>',
    '2022-10-13 15:31:36',
    132
  ),
(
    155,
    'D.J',
    '<p>Blanditiis id consequatur numquam tenetur suscipit officiis numquam. Tenetur ex maiores ipsum modi possimus quia quod. Consequuntur nisi voluptas occaecati vel.</p><p>Eius maiores incidunt earum quia. Et voluptatem et cumque error facilis delectus. Voluptas eum dolores distinctio earum optio quisquam. Vitae et nesciunt consequatur sit vel in.</p><p>At tempora sit est qui labore. Molestiae dolor et corrupti laborum quia. Illum sit consequuntur autem est eaque sunt cupiditate voluptas.</p><p>Optio explicabo inventore facere aperiam rerum id enim aspernatur. Suscipit nihil occaecati iste quia inventore dolor mollitia nihil. Dolorem enim nam reprehenderit ipsum eaque id autem. Expedita sequi repellat sit est officiis pariatur.</p><p>Esse et autem dolorum officiis voluptatum culpa natus. Eius voluptas voluptas tenetur cum voluptatem dolore. Laborum dolores neque eos quaerat dignissimos ipsa.</p>',
    '2022-10-13 15:31:36',
    132
  ),
(
    156,
    'D.J',
    '<p>Ut possimus libero commodi modi ipsam. Id rerum quia omnis velit fugiat. Sequi quia ipsum placeat. Nulla iusto ut cumque accusantium nihil.</p><p>Quod eos ut qui. Libero et eius earum dolores aut in. Quod iste libero harum ab cum asperiores. Et ipsam velit nobis.</p><p>Aut vitae exercitationem et dolor error quis quo odit. Atque beatae porro nesciunt non quaerat laudantium id. Eligendi enim mollitia accusantium facilis et magni est.</p><p>Cum in non est qui omnis nobis. Porro id qui omnis impedit itaque cumque aperiam eveniet. Deleniti delectus sit suscipit.</p><p>Ut nihil dolore et voluptatibus et repellat. Vel quo quos dolorem suscipit aliquam. Quibusdam vel expedita at maxime distinctio et ut. Consequatur est expedita ratione perferendis molestias odio atque. Et est voluptas architecto culpa sed eaque.</p>',
    '2022-10-13 15:31:36',
    132
  ),
(
    164,
    'D.J',
    '<p>Ut et consequatur culpa rerum quis voluptates. Tenetur maiores et incidunt inventore. Est quibusdam voluptatum quisquam in ipsam ex qui. Expedita reprehenderit eaque magnam neque.</p><p>Adipisci omnis qui adipisci voluptatibus consequuntur. Officiis nesciunt doloremque quia dolorem rem. Cupiditate consectetur dolor velit eius ea minus ut consequatur. Soluta adipisci fuga vitae impedit voluptatum qui. Molestiae sapiente quaerat omnis molestias iure et sed.</p><p>Ea deleniti et et aut voluptatem tempora tempora. Veritatis ad voluptas saepe aut non enim. Vero quia alias ut praesentium sit sint. Rerum expedita maiores itaque laborum.</p><p>Velit ex debitis nemo libero quo mollitia voluptatem. Laborum nisi dolores consequuntur et qui a iure. Placeat quisquam qui ipsum laborum.</p><p>Corporis voluptates sed quia iure doloribus. Dolorum aspernatur sed dolorum sequi in ipsa veritatis. Atque distinctio sed eum tempore nulla fugit ipsam.</p>',
    '2022-10-13 15:31:36',
    134
  ),
(
    165,
    'D.J',
    '<p>Culpa modi voluptates quasi. Eveniet expedita molestiae nihil mollitia iste. Culpa similique ullam incidunt aut occaecati sed illo.</p><p>Et qui accusantium fugit. Magni saepe dolorum rem qui labore. Ut fugit laborum in aspernatur eum nemo quia.</p><p>Nemo dolorem voluptatem atque natus odit. Quis et velit quam. Repudiandae assumenda eveniet atque animi doloremque ab ipsa. Sunt ea explicabo nihil vero debitis.</p><p>Iure omnis mollitia eveniet corporis omnis. Aut dicta neque eos quas rerum tempora. Laboriosam itaque in possimus a nulla. Excepturi aspernatur dolores ratione itaque.</p><p>Autem ipsa quis autem voluptatem labore voluptas. Sunt ea minus exercitationem fugit dolorum. Tempore unde non est iure ut nihil. Quidem possimus est eum.</p>',
    '2022-10-13 15:31:36',
    134
  ),
(
    166,
    'D.J',
    '<p>Non corporis non ea voluptate. Officiis optio dolor et voluptate delectus asperiores. Consequatur mollitia repellendus quia qui.</p><p>Qui autem pariatur perspiciatis vel totam. Ut quisquam odio rerum sit nostrum et. Porro deserunt cum sequi dolores non asperiores consequatur fugiat.</p><p>Rerum odio sint cumque. Accusamus aliquid et eum quasi. Exercitationem earum nihil fugit. Debitis ipsam ea blanditiis saepe perspiciatis harum sed esse.</p><p>Aspernatur enim quidem ipsum amet ea. Optio accusantium praesentium rerum facilis assumenda. In et iure nulla.</p><p>Quaerat laborum dolor quo perspiciatis. Deserunt quod ullam iusto ab quidem vel.</p>',
    '2022-10-13 15:31:36',
    134
  ),
(
    167,
    'D.J',
    '<p>Nam quibusdam reprehenderit in dignissimos et ipsam eligendi. Numquam aperiam et qui. Dolorum consequuntur aut vero eius aut vel. Quasi consequatur ut suscipit.</p><p>Sit cupiditate quod optio qui. Iure repudiandae et corrupti voluptatem. Cumque dignissimos non odit veniam. Delectus et placeat harum repellat illo eveniet quisquam.</p><p>Recusandae quia quos voluptas ea ut quia in. Aperiam rerum omnis laborum voluptas. Officia quidem est consequatur et voluptatem. Est molestiae sed quia magni qui non.</p><p>Atque doloremque vitae repudiandae earum sint cum deleniti. Laboriosam vero eum quas sequi aut provident nihil. Laudantium omnis harum ea qui. Rerum non distinctio suscipit quibusdam eius.</p><p>Quia sit vitae expedita enim ratione non. Officiis eos sed maxime totam. Quasi nam perspiciatis expedita aut asperiores error praesentium. Quia ipsum veniam ut qui fuga et.</p>',
    '2022-10-13 15:31:36',
    134
  ),
(
    168,
    'D.J',
    '<p>Sit et ea nemo ea quaerat repellendus. Omnis magni voluptas aspernatur qui ad reiciendis sapiente. Ad facere cupiditate sit consequatur. Labore ut ratione eos distinctio.</p><p>Perferendis quia sunt expedita aut dolor eos. Sed debitis minus sequi dolores. Autem laboriosam suscipit est magnam voluptas est suscipit. Incidunt rem quibusdam enim ullam soluta vel.</p><p>Et rerum sint odio tenetur numquam neque natus placeat. Id eum ipsum delectus unde occaecati. Vel sit voluptatibus quas quasi.</p><p>Aliquam aliquam ab nisi non voluptas. Beatae aut nihil et doloremque soluta quo. Occaecati aut in voluptas sed. Esse aspernatur repellendus sed nam ut et.</p><p>Dolores tempore sint tempora velit voluptas. Dolor laudantium ex nihil est. Ad error vel et eius eius facere rerum.</p>',
    '2022-10-13 15:31:36',
    134
  ),
(
    169,
    'D.J',
    '<p>Dolorum id dolorum et est distinctio. Ipsa quo placeat quia modi.</p><p>Laborum dicta et eius qui in cum ut nobis. Dolorem velit recusandae et hic eaque id. Consectetur id fuga quia quibusdam. Ea quia saepe repellendus vero. Nulla ullam qui molestiae exercitationem esse suscipit.</p><p>Consequatur sit ex excepturi aspernatur laborum quos. Earum quisquam dolorem quos praesentium qui. Iste sint minima unde.</p><p>Consequatur architecto cupiditate suscipit veniam ipsum iste. Fugiat est fugit qui hic voluptas porro. Illum earum corporis illum asperiores. Non voluptatem qui est.</p><p>Quibusdam provident cum maiores sunt nam. Cum sit excepturi quas corrupti. Assumenda excepturi modi dolores unde. Nihil et ipsa et ducimus.</p>',
    '2022-10-13 15:31:36',
    135
  ),
(
    170,
    'T.C',
    '<p>Nesciunt ad modi ut aliquid odio quia. Omnis a delectus labore dolor. Harum harum qui animi enim id quia deleniti.</p><p>Libero temporibus laborum eum delectus nostrum vel. Nihil ducimus et pariatur suscipit totam. Cupiditate in alias saepe perferendis et. Nobis impedit aut molestiae vero ut in laboriosam. Sit omnis molestias vel aut provident.</p><p>Autem debitis commodi fuga aliquam alias sit ipsam. Et ut qui fugiat dolore est. Quo qui quas est rerum non nesciunt tenetur.</p><p>Atque ut possimus et ut omnis rerum. Quas vel sit sapiente excepturi ex sint. In et inventore pariatur ut voluptas et.</p><p>Dicta nemo accusamus repellendus error dolor. Impedit quis aspernatur delectus voluptatem aut quia et. Repudiandae sit voluptatem in quasi voluptatem cumque suscipit aliquam.</p>',
    '2022-10-13 15:30:58',
    135
  ),
(
    171,
    'T.C',
    '<p>Quasi a et placeat. Provident aut illo et et quis officia enim. Sint quos sed aut dolorem aliquid quas doloribus.</p><p>Itaque eligendi est veniam voluptas maiores. Odio exercitationem molestias repellendus. Et provident pariatur deleniti accusantium natus et numquam recusandae. Sint dolor consequatur non.</p><p>Quo quibusdam ea ea consequatur officia aperiam sequi. Molestiae facere beatae eum aliquid iste dolores. Consequatur dolorem eos sunt totam et cumque possimus.</p><p>Maxime delectus a molestias quia provident. Ratione repellat numquam ipsam laborum. Eius reprehenderit voluptatum vitae iusto unde aut. Sunt architecto eligendi qui eius facilis perspiciatis.</p><p>Voluptas eum asperiores assumenda. Est consequatur ex adipisci itaque. Quia sint veniam voluptatibus qui asperiores ut. Natus quia incidunt beatae enim porro sunt asperiores. Enim similique autem aut.</p>',
    '2022-10-13 15:30:58',
    135
  ),
(
    178,
    'T.C',
    '<p>Sapiente id optio consequatur perspiciatis accusamus rerum expedita. Laborum veniam delectus illum. Quibusdam dignissimos veniam modi nemo quaerat voluptatem voluptas quia.</p><p>Rerum ea reprehenderit quia expedita magnam vero. Aut blanditiis perspiciatis sequi reprehenderit. Saepe iste magnam commodi qui. At libero sunt facere enim quam blanditiis excepturi perferendis.</p><p>Beatae inventore quod architecto dolore. Facilis et ducimus vitae. Quo a voluptatem eligendi velit quae minus. Voluptates earum ut quia aliquam exercitationem eligendi eligendi.</p><p>Culpa sit id sit dolor maiores distinctio. Quae quo id similique. Error dicta optio accusantium sed est velit illum. Autem est architecto qui.</p><p>Et vitae aliquid odio odit omnis. Est et magni modi non. Quis in rerum nesciunt qui est rem qui.</p>',
    '2022-10-13 15:30:58',
    137
  ),
(
    179,
    'T.C',
    '<p>Delectus et voluptatem aut nesciunt sed numquam repellendus. Voluptate aliquam non est inventore sequi consequatur vero sit. Ut accusantium quis ipsa sint in molestiae. Et totam temporibus perferendis rem.</p><p>Qui sit numquam minima ad repellat tempore in. Eaque labore corporis quas quaerat autem animi blanditiis. Voluptas dolores a sed. Architecto et eum aut enim magni ea sed eos.</p><p>Cupiditate adipisci nihil quos rerum. Eveniet maxime praesentium ut officiis dolorum. Animi id debitis laboriosam eligendi sunt voluptate. Quidem at voluptatem aut nesciunt incidunt eius.</p><p>Voluptates autem illum tenetur repellat officiis et eveniet. Hic aspernatur et error qui quam. In nulla tempora fugit reprehenderit laudantium in fugit. Et quo officiis perferendis aperiam nemo perferendis veniam.</p><p>Reiciendis minus quo impedit. Possimus soluta beatae magnam assumenda delectus voluptatem aut eos. Fuga ea minus omnis nam. Quam ut quasi beatae dolore minus itaque ad numquam. Quasi ut nihil repudiandae nam omnis aperiam non.</p>',
    '2022-10-13 15:30:58',
    137
  ),
(
    180,
    'T.C',
    '<p>Nobis vitae natus qui atque est eos corrupti quam. Incidunt modi nesciunt et unde minima. Blanditiis omnis consequatur veritatis repellendus et sint et. Est recusandae aut nobis sint reprehenderit dolor rerum.</p><p>Doloremque fugiat minima alias dolorem vel. Sint quos neque repellat molestiae vel ipsum beatae. Et rerum ut omnis quis quia ducimus accusantium. Officiis dignissimos molestiae eos officia et impedit praesentium.</p><p>Illum non qui iure qui est quos. Ut occaecati sunt ducimus odit recusandae ex occaecati hic. Numquam eum vero animi qui qui soluta omnis. Minima in animi sed eos quia et nihil ullam.</p><p>Aut in aut quia sit sit eveniet nam. Qui omnis perspiciatis et. Numquam dolores voluptas aut aut.</p><p>Qui autem porro et ipsum repellat consequuntur. Ut maxime mollitia nisi error ut consequuntur et. Laudantium aspernatur ipsa alias et praesentium optio eveniet. Perferendis facilis amet temporibus ex ducimus omnis est.</p>',
    '2022-10-13 15:30:58',
    137
  ),
(
    224,
    'T.J',
    'Test \r\ndfzefez',
    '2022-10-13 15:40:39',
    126
  );

/*!40000 ALTER TABLE `comments` ENABLE KEYS */
;

UNLOCK TABLES;

--
-- Table structure for table `customers`
--
DROP TABLE IF EXISTS `customers`;

/*!40101 SET @saved_cs_client     = @@character_set_client */
;

/*!50503 SET character_set_client = utf8mb4 */
;

CREATE TABLE `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 11 DEFAULT CHARSET = utf8mb3;

/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `customers`
--
LOCK TABLES `customers` WRITE;

/*!40000 ALTER TABLE `customers` DISABLE KEYS */
;

INSERT INTO
  `customers`
VALUES
  (1, 'titi', 'titi@gmail.com', '0202020202'),
(2, 'toto', 'toto@gmail.com', '0606060606'),
(3, 'wil', 'wil@gmail.com', '0203020302'),
(6, 'tutu', 'tutu@orange.fr', '02 00 00 00 00 000'),
(7, '\"toto\"', 'effz@gmail.com', '0000000000'),
(8, '\'toto\'', '\'toto\'@gmail.com', '00000000'),
(9, '\"b\"\"ibi\'\'', 'bib@gmail.com', '000000000'),
(
    10,
    '\"Good\'\"\"Brother\"\"and \'jojo\'\"',
    'jojo@gmail.com',
    '00000055555555'
  );

/*!40000 ALTER TABLE `customers` ENABLE KEYS */
;

UNLOCK TABLES;

--
-- Table structure for table `users`
--
DROP TABLE IF EXISTS `users`;

/*!40101 SET @saved_cs_client     = @@character_set_client */
;

/*!50503 SET character_set_client = utf8mb4 */
;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 4 DEFAULT CHARSET = utf8mb3 COLLATE = utf8mb3_unicode_ci;

/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `users`
--
LOCK TABLES `users` WRITE;

/*!40000 ALTER TABLE `users` DISABLE KEYS */
;

INSERT INTO
  `users`
VALUES
  (
    1,
    'Test',
    'CII',
    'test.cii@gmail.com',
    '$2y$10$GryOriMmryJKtqWmny8Qb.69hKD61Xlnq9WrlJ2jancHp1Amd4xve',
    '2022-10-13 09:07:03'
  ),
(
    2,
    'Doe',
    'Jean',
    'jean.doe@orange.fr',
    '$2y$10$7ha7B4IYI2CaPM6a.AQFw.18QxJc0r8DUDJ3Z5HtTuChbJ.Ozgp9e',
    '2022-10-13 15:26:10'
  ),
(
    3,
    'Tassin',
    'Jean',
    'jean.tassin@free.fr',
    '$2y$10$CvsKhDoOwanwSYiVj3owQOHgaBc8H542.tOvDduAV8Hu8TaFolI0O',
    '2022-10-13 15:28:45'
  );

/*!40000 ALTER TABLE `users` ENABLE KEYS */
;

UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */
;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */
;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */
;

/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */
;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */
;

-- Dump completed on 2022-10-13 16:26:32