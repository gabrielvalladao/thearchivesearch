-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Ago-2022 às 13:28
-- Versão do servidor: 10.5.16-MariaDB-cll-lve
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u240802769_search`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_username` longtext NOT NULL,
  `admin_password` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bio`
--

CREATE TABLE `bio` (
  `id` int(11) NOT NULL,
  `pic` longtext NOT NULL,
  `pdf` longtext NOT NULL,
  `zip` longtext NOT NULL,
  `selo` longtext NOT NULL,
  `name` longtext NOT NULL,
  `cat` longtext NOT NULL,
  `des` longtext NOT NULL,
  `tag` longtext NOT NULL,
  `title1` longtext NOT NULL,
  `title2` longtext NOT NULL,
  `title3` longtext NOT NULL,
  `title4` longtext NOT NULL,
  `title5` longtext NOT NULL,
  `desc1` longtext NOT NULL,
  `desc2` longtext NOT NULL,
  `desc3` longtext NOT NULL,
  `desc4` longtext NOT NULL,
  `desc5` longtext NOT NULL,
  `wiki` longtext NOT NULL,
  `fb` longtext NOT NULL,
  `tw` longtext NOT NULL,
  `insta` longtext NOT NULL,
  `yt` longtext NOT NULL,
  `status` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bio`
--

INSERT INTO `bio` (`id`, `pic`, `pdf`, `zip`, `selo`, `name`, `cat`, `des`, `tag`, `title1`, `title2`, `title3`, `title4`, `title5`, `desc1`, `desc2`, `desc3`, `desc4`, `desc5`, `wiki`, `fb`, `tw`, `insta`, `yt`, `status`) VALUES
(1, '65797-diagrama-aluvial.png', '', '', '', 'Diagrama aluvial', '', 'Diagramas aluviais são um tipo de diagrama de fluxo originalmente desenvolvido para representar mudanças na estrutura da rede ao longo do tempo. É uma variante dos Conjuntos Paralelos, mas para variáveis categóricas e muitas vezes para exibir tendências ao longo do tempo e fases.', '', 'FAMÍLIA', 'FUNÇÃO', 'Nota:', '', '', 'Diagrama', 'Comparação, Correlação, Distribuição, Tendência ao longo do tempo', 'Um diagrama aluvial é uma subcategoria do diagrama de sankey onde os nós são agrupados em nós verticais (às vezes chamados passos). Em muitos casos, essas etapas representam carimbo de tempo diferente.', '', '', '', '', '', '', '', 'published'),
(2, '39335-graficos.png', '', '', '', 'grafico', '', 'Gráfico é a tentativa de se expressar visualmente dados ou valores numéricos, de maneiras diferentes, assim facilitando a sua compreensão. Existem vários tipos de gráficos e os mais utilizados são os de colunas, os de linhas e os circulares. Os principais elementos são: números, título, fonte, nota e chamada.', '', 'Tipos', 'Importancia', '', '', '', 'Existe uma grande variedade de tipos de gráficos, dentre os quais podemos destacar os de coluna, em barras, pizza, área, linha e rede.\r\nGráficos de coluna.\r\nGráficos em barra.\r\nGráficos em pizza.\r\nGráficos em linhas.\r\nGráfico de áreas.\r\nGráfico em rede.', 'A importância dos gráficos está ligada à facilidade e rapidez com que podemos interpretar as informações visuais. Os dados coletados e distribuídos em planilhas podem ser organizados em gráficos e apresentados de uma forma mais clara e objetiva, tornado mais fácil a compreensão da informação que se deseja passar.', '', '', '', '', '', '', '', '', 'published'),
(3, '57741-arc_diagram.png', 'arc-diagrams.pdf', '', '', 'Diagrama de Arco', '', 'Os diagramas de arco são uma maneira alternativa de representar diagramas de rede bidimensionais. Nos Diagramas arc, os nós são colocados ao longo de uma única linha (um eixo unidimensional) e arcos são usados para mostrar conexões entre esses nós.\r\n\r\nA espessura de cada linha de arco pode ser usada para representar a frequência entre a fonte e o nó alvo. Os diagramas de arco podem ser úteis para encontrar a co-ocorrência dentro dos dados.\r\n\r\nA desvantagem dos Diagramas arc é que eles não mostram estrutura e conexões entre nós, bem como gráficos 2D fazem e muitos links podem tornar o diagrama difícil de ler devido à desordem.', '', 'FAMÍLIA', 'FUNÇÃO', '', '', '', 'Diagrama', 'Comparação, Correlação', '', '', '', '', '', '', '', '', 'published'),
(4, '18854-saturno.webp', '', '', '', 'Saturno', '', 'Saturno é o sexto planeta a partir do Sol e o segundo maior do Sistema Solar atrás de Júpiter. Pertencente ao grupo dos gigantes gasosos, possui cerca de 95 massas terrestres e orbita a uma distância média de 9,5 unidades astronômicas.', '<p> </p><div aria-level=\"3\" class=\"co8aDb\" role=\"heading\" style=\"background-color: white; color: #202124; font-family: arial, sans-serif; font-size: 16px; margin-bottom: 12px;\"><b><b><br class=\"Apple-interchange-newline\" />Saturno</b>: 10 fatos e <b>curiosidades</b> para você conhecer melhor esse...</b></div><div class=\"RqBzHd\" style=\"background-color: white; color: #202124; font-family: arial, sans-serif; font-size: 16px; padding: 0px 20px;\"><ul class=\"i8Z77e\" style=\"margin: 0px; padding: 0px;\"><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\"><b>Saturno</b> poderia flutuar no oceano. ...</li><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\"><b>Saturno</b> gira tão rápido que ficou achatado. ...</li><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\">Os primeiros astrônomos pensaram que seus anéis eram luas. ...</li><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\">Você pode ver <b>Saturno</b> a olho-nu. ...</li><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\"><b>Saturno</b> tem 82 luas, e uma delas talvez possa abrigar vida.</li></ul></div>', 'Distância do Sol:', 'Área da superfície: ', 'Duração do dia:', 'Gravidade:', 'Massa:', '1,434 × 10^9 km', '4,27 × 10^10 km²', '0d 10h 34m', '10,44 m/s²', '5,683 × 10^26 kg (95,16 M?)', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwis-K778bj5AhXKQ7gEHRyqBlYQmhN6BAhgEAI&url=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FSaturno_(planeta)&usg=AOvVaw3OFpIiIs4p5M6jCXZUEr1e', '', '', '', '', 'published');

-- --------------------------------------------------------

--
-- Estrutura da tabela `crawl`
--

CREATE TABLE `crawl` (
  `id` int(11) NOT NULL,
  `urlink` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `crawl`
--

INSERT INTO `crawl` (`id`, `urlink`) VALUES
(1, 'https://g1.globo.com/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `words` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `keywords`
--

INSERT INTO `keywords` (`id`, `name`, `words`) VALUES
(1, 'Diagrama', 'sankey, aluvial, sunburst, osso de peixe, arco, acordes, matriz (em forma de telhado), matriz, processo linear, radar, ciclo, euler, gelo, fase, venn, destino, processo, taylor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `link_clicks`
--

CREATE TABLE `link_clicks` (
  `id` int(11) NOT NULL,
  `link_id` longtext NOT NULL,
  `status` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quick_know`
--

CREATE TABLE `quick_know` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `data` longtext NOT NULL,
  `embed` longtext NOT NULL,
  `slides` longtext NOT NULL,
  `youtube` longtext NOT NULL,
  `desc2` longtext NOT NULL,
  `title3` longtext NOT NULL,
  `desc3` longtext NOT NULL,
  `title4` longtext NOT NULL,
  `desc4` longtext NOT NULL,
  `title5` longtext NOT NULL,
  `desc5` longtext NOT NULL,
  `title6` longtext NOT NULL,
  `desc6` longtext NOT NULL,
  `title7` longtext CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `desc7` longtext NOT NULL,
  `title8` longtext NOT NULL,
  `desc8` longtext NOT NULL,
  `status` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quick_know`
--

INSERT INTO `quick_know` (`id`, `name`, `data`, `embed`, `slides`, `youtube`, `desc2`, `title3`, `desc3`, `title4`, `desc4`, `title5`, `desc5`, `title6`, `desc6`, `title7`, `desc7`, `title8`, `desc8`, `status`) VALUES
(1, 'Graficos', '', 'https://www.programmers.com.br/wp-content/uploads/2021/03/tipos-de-graficos.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'published'),
(2, 'Projeto Figma 1', '<iframe style=\"border: 1px solid rgba(0, 0, 0, 0.1);\" width=\"610\" height=\"450\" src=\"https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FN7fK0LX7SmQdgQG6er3JRX%2FSearch-The-Archive%3Fnode-id%3D0%253A1\" allowfullscreen></iframe>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'published'),
(3, 'Design System Looqbox', '<iframe style=\"border: 1px solid rgba(0, 0, 0, 0.1);\" width=\"610\" height=\"450\" src=\"https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FcMeOG0te2ynNQSewiwhtvV%2FLooq%2526Feel-2.0%3Fnode-id%3D178%253A26665\" allowfullscreen></iframe>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'published'),
(4, 'Melhores Praticas Looqbox', '<iframe style=\"border: 1px solid rgba(0, 0, 0, 0.1);\" width=\"610\" height=\"450\" src=\"https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FZpzFOJzaQ5siz34gUP7SEr%2FLooq%2526Feel-%257C-UI-Kit%253A-Best-Practices%3Fnode-id%3D19%253A4748\" allowfullscreen></iframe>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'published'),
(5, 'Saturno', 'A atmosfera de Saturno também é predominantemente composta por hidrogênio (97%), além de gás hélio (3%) e gás metano (0,05%).', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'published'),
(6, 'Saturno', 'Saturno Planeta Saturno é o sexto planeta a partir do Sol e o segundo maior do Sistema Solar atrás de Júpiter. Pertencente ao grupo dos gigantes gasosos, possui cerca de 95 massas terrestres e orbita a uma distância média de 9,5 unidades astronômicas. Wikipédia Distância do Sol: 1,434 × 10^9 km Área da superfície: 4,27 × 10^10 km² Duração do dia: 0d 10h 34m Gravidade: 10,44 m/s² Massa: 5,683 × 10^26 kg (95,16 M?)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'published');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quick_response`
--

CREATE TABLE `quick_response` (
  `id` int(11) NOT NULL,
  `rank` longtext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `img` longtext CHARACTER SET latin1 NOT NULL,
  `name` longtext CHARACTER SET latin1 NOT NULL,
  `country` longtext CHARACTER SET latin1 NOT NULL,
  `sales` longtext CHARACTER SET latin1 NOT NULL,
  `profit` longtext CHARACTER SET latin1 NOT NULL,
  `assets` longtext CHARACTER SET latin1 NOT NULL,
  `market_value` longtext CHARACTER SET latin1 NOT NULL,
  `status` longtext CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `url` longtext NOT NULL,
  `description` longtext NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `icons` longtext NOT NULL,
  `clicks` longtext NOT NULL,
  `status` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `search`
--

INSERT INTO `search` (`id`, `title`, `url`, `description`, `keywords`, `icons`, `clicks`, `status`) VALUES
(1, 'Example Domain', 'https://example.com', '', '', '', '', ''),
(2, 'SpaceView – SpaceHeel', 'https://spaceheel.com/index.php/spaceview/', '', '', '', '', ''),
(3, 'SpaceAcademy – SpaceHeel', 'https://spaceheel.com/index.php/spaceacademy/', '', '', '', '', ''),
(4, 'SpaceRead – SpaceHeel', 'https://spaceheel.com/index.php/spaceread/', '', '', '', '', ''),
(5, 'Saturno (planeta) – Wikipédia, a enciclopédia livre', 'https://pt.wikipedia.org/wiki/Saturno_(planeta)', 'Saturno é o sexto planeta a partir do Sol e o segundo maior do Sistema Solar atrás de Júpiter. Pertencente ao grupo dos gigantes gasosos, possui cerca de 95 massas terrestres e orbita a uma distância média de 9,5 unidades astronômicas.', 'Saturno, Planeta', '47371-', '3', 'published'),
(6, 'Gr', '', '', '', '60760-', '', 'published'),
(11, '						Site Admin	', 'https://gabrielvalladao.com/moments/administrator', '', 'social,socialnetwork', '', '', ''),
(10, '						Moments	', 'https://gabrielvalladao.com/moments', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(8, 'Saturno Video', 'https://www.youtube.com/watch?v=-Sc7ueEPFFM', '', 'Saturno', '79201-', '2', 'published'),
(9, 'Saturno - Twitter', 'https://twitter.com/lmagensfoda/status/1554281284037480448/photo/1', 'A Lua vestida de Saturno.', 'Saturno, Planeta', '50025-', '6', 'published'),
(12, '						Moments	', 'https://gabrielvalladao.com/moments/guest?auth=forgot_pass', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(13, '						Moments	', 'https://gabrielvalladao.com/moments/guest?auth=signup', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(14, '						Search	', 'https://gabrielvalladao.com/moments/search', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(15, '						Terms of Use	', 'https://gabrielvalladao.com/moments/terms_of_use', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(16, '						Privacy policy	', 'https://gabrielvalladao.com/moments/privacy_policy', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(17, '						Cookies policy	', 'https://gabrielvalladao.com/moments/cookies_policy', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(18, '						About us	', 'https://gabrielvalladao.com/moments/about_us', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(19, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(20, '						F.A.Qs	', 'https://gabrielvalladao.com/moments/faqs', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(21, '						Moments	', 'https://gabrielvalladao.com/moments/language/english', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(22, '						Moments	', 'https://gabrielvalladao.com/moments/language/french', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(23, '						Moments	', 'https://gabrielvalladao.com/moments/language/german', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(24, '						Moments	', 'https://gabrielvalladao.com/moments/language/italian', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(25, '						Moments	', 'https://gabrielvalladao.com/moments/language/russian', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(26, '						Moments	', 'https://gabrielvalladao.com/moments/language/portuguese', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(27, '						Moments	', 'https://gabrielvalladao.com/moments/language/spanish', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(28, '						Moments	', 'https://gabrielvalladao.com/moments/language/turkish', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(29, '						Moments	', 'https://gabrielvalladao.com/moments/language/dutch', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(30, '						Moments	', 'https://gabrielvalladao.com/moments/language/ukraine', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(31, '						Moments	', 'https://gabrielvalladao.com/moments/language/arabic', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(32, '						Site Admin	', 'https://gabrielvalladao.com/moments/administrator/following', '', 'social,socialnetwork', '', '', ''),
(33, '						Site Admin	', 'https://gabrielvalladao.com/moments/administrator/followers', '', 'social,socialnetwork', '', '', ''),
(34, '						Site Admin	', 'https://gabrielvalladao.com/moments/administrator/posts', '', 'social,socialnetwork', '', '', ''),
(35, '						Site Admin	', 'https://gabrielvalladao.com/moments/administrator/media', '', 'social,socialnetwork', '', '', ''),
(36, '						Site Admin	', 'https://gabrielvalladao.com/moments/administrator/likes', '', 'social,socialnetwork', '', '', ''),
(37, '						Site Admin on Moments	', 'https://gabrielvalladao.com/moments/thread/1', 'Olá, este é o meu primeiro #moment', 'social,socialnetwork', '', '', ''),
(38, '						moment	', 'https://gabrielvalladao.com/moments/search/posts?q=moment', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(39, 'Gabriel Valladão | Data Intelligence - Designer UI/UX', 'https://gabrielvalladao.com/', 'As the Webflow expert, Gabriel Valladão develops impressive websites for companies that want to grow with the help of a great Webflow website.', '', '', '', ''),
(40, '						Moments	', 'https://gabrielvalladao.com/moments/suggested', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(41, '						Hot topics	', 'https://gabrielvalladao.com/moments/trending', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(42, 'Error', 'https://www.facebook.com/sharer.php?u={0}', '', '', '', '', ''),
(43, 'LinkedIn Login, Sign in | LinkedIn', 'https://www.linkedin.com/shareArticle?mini=true&url={0}', 'Login to LinkedIn to keep in touch with people you know, share ideas, and build your career.', '', '', '', ''),
(44, 'Pinterest – ?????????', 'https://www.pinterest.ru/pin/create/button/?url={0}', 'Discover recipes, home ideas, style inspiration and other ideas to try.', '', '', '', ''),
(45, '                            reddit.com: Log in                    ', 'https://www.reddit.com/submit?url={0}', 'Donâ??t worry, we wonâ??t tell anyone your username. Log in to your Reddit account.', '', '', '', ''),
(46, 'Share on WhatsApp', 'https://api.whatsapp.com/send?text={0}', '', '', '', '', ''),
(47, 'Telegram: Share Web Page', 'https://telegram.me/share/url?url={0}', '', '', '', '', ''),
(48, '						Moments	', 'https://gabrielvalladao.com/moments/guest', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', 'social,socialnetwork', '', '', ''),
(49, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=login', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(50, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=oauth_login', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(51, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=signup', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(52, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=resetpassword', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(53, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=feeds', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(54, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=profile', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(55, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=report_profile', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(56, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=block_user', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(57, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=save_pnotif_token', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(58, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=change_password', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(59, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=refresh_access_token', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(60, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=logout', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(61, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=verify_user', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(62, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=create_post', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(63, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=vote_polls', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(64, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=create_swift', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(65, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=thread_data', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(66, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=like_post', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(67, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=report_post', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(68, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=publication_repost', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(69, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=bookmarks', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(70, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=fetch_likes', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(71, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=delete_post', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(72, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=search_hashtags', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(73, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=search_people', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(74, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=search_posts', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(75, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=pin_post', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(76, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=gen_settings', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(77, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=avatar_cover', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(78, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=priv_settings', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(79, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=follow', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(80, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=fetch_following', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(81, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=fetch_followers', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(82, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=follow_requests', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(83, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=get_notifications', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(84, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=delete_notifs', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(85, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=messaging', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(86, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=delete_account', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(87, 'ColibriSM API - Documentation', 'https://gabrielvalladao.com/moments/api_docs?page=language', 'ColibriSM - The Ultimate Modern Social Media Sharing Platform', '', '', '', ''),
(88, 'Blog | Gabriel Valladão – Design não é apenas beleza', 'https://blog.gabrielvalladao.com/', '', '', '', '', ''),
(89, 'Web Search', 'https://search.gabrielvalladao.com/', 'Search the world\'s information, webpages, problems and more. Find exactly what you\'re looking for easily without any ads and other distractions', '', '', '', ''),
(90, '8 Reasons for Webflow | Moritz Petersen', 'https://gabrielvalladao.com/en/reasons-for-webflow.html', 'Why should your website run on Webflow? With Webflow, marketing and design teams can manage websites themselves - without developers.', '', '', '', ''),
(91, 'home - Looqbox - BI simples, rápido e escalável', 'https://www.looqbox.com/', '', '', '', '', ''),
(92, 'Drop Instagram DM Automation', 'https://www.usedrop.io/', 'Drop connects Brands & Creators to their audience. Start engaging with your Followers via Instagram Direct Messages automations at scale.', '', '', '', ''),
(93, 'Paradox', 'https://www.paradox.inc/', '', '', '', '', ''),
(94, 'Bryant Dental | Dental Loupes, Software, Headlights, Composite Heaters, shop now', 'https://bryant.dental/', 'Extraordinary products for extraordinary dentists. Bringing you the world’s lightest dental loupes, headlights and more.', '', '', '', ''),
(95, 'Compound | Personal finance for tech employees', 'https://withcompound.com/', 'Build and optimize your wealth.', '', '', '', ''),
(96, 'Shang-Chi - Sanzo', 'https://drinksanzo.com/pages/marvelstudios-shangchi', '', '', '', '', ''),
(97, 'Extra | Build Your Credit With A Debit Card', 'https://extra.app/', 'Extra is the first debit card that builds credit and earns debit card points. 9 interest. No credit checks.', '', '', '', ''),
(98, 'Lose weight and gain energy with VIV', 'https://www.viv.co/', 'The world\'s first individually-optimized weight-loss system.', '', '', '', ''),
(99, 'Meetingbox - The Ultimate Event Platform', 'https://www.meetingbox.com', 'The all-in-one platform for your live, virtual and hybrid events. Meetingbox provides the perfect tool for each phase to manage events better and more efficiently.', '', '', '', ''),
(100, 'Dein neues Apple Watch Armband– Bluestein', 'https://www.bluestein.de/', 'QualitÃ¤t - aber preiswert. Seit 2015 bietet Bluestein ArmbÃ¤nder und ZubehÃ¶r fÃ¼r die Apple Watch. Entdecke jetzt dein Apple Watch Armband.', '', '', '', ''),
(101, 'Thomas Emde | Entrepreneur, Artist, Visionary', 'https://www.thomasemde.de/en', 'The artist, entrepreneur and visionary Thomas Emde has been active in lighting technology for over 25 years and is now working on the future of light.', '', '', '', ''),
(102, 'Design- und Innovationsagentur für digitale Produkte | HXD-Lab', 'https://www.hxd-lab.de/', 'Kostenlose Erstberatung für mehr Erfolg & glücklichere Nutzer mit digitalen Produkten. Für den Mittelstand • Konzerne • Öffentliche Hand: Wir machen anspruchsvolle Produkte erfolgreicher | HXD Lab GmbH', '', '', '', ''),
(103, 'EMDE development of light', 'https://www.emdegmbh.com/en', 'We want less, but better light. With technologies already available today, we are developing solutions for healthier, more sustainable and innovative light.', '', '', '', ''),
(104, 'Imprint | Moritz Petersen', 'https://gabrielvalladao.com/en/imprint.html', '', '', '', '', ''),
(105, 'Privacy | Moritz Petersen', 'https://gabrielvalladao.com/en/privacy.html', '', '', '', '', ''),
(106, 'LinkedIn: Log In or Sign Up', 'https://www.linkedin.com/', '750 million+ members | Manage your professional identity. Build and engage with your professional network. Access knowledge, insights and opportunities.', '', '', '', ''),
(107, 'Reset Password | LinkedIn', 'https://www.linkedin.com/checkpoint/rp/request-password-reset?session_redirect=https%3A%2F%2Fwww%2Elinkedin%2Ecom%2FshareArticle%3Fmini%3Dtrue%26url%3D%257B0%257D', '', '', '', '', ''),
(108, 'Sign Up | LinkedIn', 'https://www.linkedin.com/signup/cold-join?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3D%257B0%257D', '500 million+ members | Manage your professional identity. Build and engage with your professional network. Access knowledge, insights and opportunities.', '', '', '', ''),
(109, 'User Agreement | LinkedIn', 'https://www.linkedin.com/legal/user-agreement?trk=d_checkpoint_lg_consumerLogin_ft_user_agreement', '', '', '', '', ''),
(110, 'LinkedIn Privacy Policy', 'https://www.linkedin.com/legal/privacy-policy?trk=d_checkpoint_lg_consumerLogin_ft_privacy_policy', '', '', '', '', ''),
(111, 'LinkedIn Professional Community Policies | LinkedIn Help', 'https://www.linkedin.com/help/linkedin/answer/34593?lang=en&trk=d_checkpoint_lg_consumerLogin_ft_community_guidelines', 'LinkedIn Help - LinkedIn Professional Community Policies', '', '', '', ''),
(112, 'Cookie Policy | LinkedIn', 'https://www.linkedin.com/legal/cookie-policy?trk=d_checkpoint_lg_consumerLogin_ft_cookie_policy', '', '', '', '', ''),
(113, 'Copyright Policy', 'https://www.linkedin.com/legal/copyright-policy?trk=d_checkpoint_lg_consumerLogin_ft_copyright_policy', '', '', '', '', ''),
(114, 'Pinterest – ?????????', 'https://www.pinterest.ru/', 'Discover recipes, home ideas, style inspiration and other ideas to try.', '', '', '', ''),
(115, 'Explore the best of Pinterest', 'https://www.pinterest.ru/ideas/', 'Discover recipes, home ideas, style inspiration and other ideas to try.', '', '', '', ''),
(116, 'User Agreement - September 12, 2021 - Reddit', 'https://www.redditinc.com/policies/user-agreement', '', '', '', '', ''),
(117, 'Reddit - Dive into anything', 'https://www.redditinc.com/policies/privacy-policy', '', '', '', '', ''),
(118, '                            reddit.com:   Recover your username                    ', 'https://www.reddit.com/username?dest=https%3A%2F%2Fwww.reddit.com%2Fsubmit%3Furl%3D%257B0%257D', '', '', '', '', ''),
(119, '                            reddit.com:   Reset your password                    ', 'https://www.reddit.com/password?dest=https%3A%2F%2Fwww.reddit.com%2Fsubmit%3Furl%3D%257B0%257D', '', '', '', '', ''),
(120, '                            reddit.com: Join the worldwide conversation                    ', 'https://www.reddit.com/account/register/?dest=https%3A%2F%2Fwww.reddit.com%2Fsubmit%3Furl%3D%257B0%257D', 'Create an account on Reddit and become part of our community!', '', '', '', ''),
(121, 'What is two-factor authentication and how do I set it up? – Reddit Help', 'https://www.reddithelp.com/en/categories/using-reddit/your-reddit-account/how-set-two-factor-authentication', 'Two-factor authentication is a way to add an extra level of security when you log in to your Reddit account. First, you log in with your...', '', '', '', ''),
(122, 'WhatsApp', 'https://www.whatsapp.com/', '', '', '', '', ''),
(123, 'WhatsApp Web', 'https://web.whatsapp.com/', 'Quickly send and receive WhatsApp messages right from your computer.', '', '', '', ''),
(124, 'WhatsApp Features', 'https://www.whatsapp.com/features', '', '', '', '', ''),
(125, 'WhatsApp', 'https://www.whatsapp.com/download', '', '', '', '', ''),
(126, 'WhatsApp Security', 'https://www.whatsapp.com/security', '', '', '', '', ''),
(127, 'WhatsApp Help Center', 'https://faq.whatsapp.com/', 'Learn how to use WhatsApp, fix a problem, and get answers to your questions.', '', '', '', ''),
(128, 'WhatsApp', 'https://www.whatsapp.com/download/', '', '', '', '', ''),
(129, 'WhatsApp Features', 'https://www.whatsapp.com/features/', '', '', '', '', ''),
(130, 'WhatsApp Security', 'https://www.whatsapp.com/security/', '', '', '', '', ''),
(131, 'Contact WhatsApp', 'https://www.whatsapp.com/contact/', '', '', '', '', ''),
(132, 'WhatsApp Web', 'https://web.whatsapp.com/send?text=%7B0%7D', 'Quickly send and receive WhatsApp messages right from your computer.', '', '', '', ''),
(133, 'WhatsApp Business | Transform Your Business', 'https://www.whatsapp.com/business', 'Engage audiences, accelerate sales and drive better customer support outcomes on the platform with more than 2 billion users around the world. Learn more.', '', '', '', ''),
(134, 'WhatsApp', 'https://www.whatsapp.com/privacy', '', '', '', '', ''),
(135, 'About WhatsApp', 'https://www.whatsapp.com/about', '', '', '', '', ''),
(136, 'WhatsApp', 'https://www.whatsapp.com/join', '', '', '', '', ''),
(137, 'WhatsApp Brand | WhatsApp | Brand Portal', 'https://www.facebook.com/brand/resources/whatsapp/whatsapp-brand', '', '', '', '', ''),
(138, 'Contact WhatsApp', 'https://www.whatsapp.com/contact', '', '', '', '', ''),
(139, 'WhatsApp Blog', 'https://blog.whatsapp.com/', '', '', '', '', ''),
(140, 'WhatsApp Stories', 'https://www.whatsapp.com/stories', '', '', '', '', ''),
(141, 'WhatsApp', 'https://www.whatsapp.com/android', '', '', '', '', ''),
(142, '      ?WhatsApp Messenger on the App Store    ', 'https://apps.apple.com/us/app/whatsapp-messenger/id310633997', 'Read reviews, compare customer ratings, see screenshots, and learn more about WhatsApp Messenger. Download WhatsApp Messenger and enjoy it on your iPhone, iPad, and iPod touch.', 'WhatsApp Messenger, WhatsApp Inc., Social Networking,Utilities, ios apps, app, appstore, app store, iphone, ipad, ipod touch, itouch, itunes', '', '', ''),
(143, 'WhatsApp (@WhatsApp) / Twitter', 'https://twitter.com/whatsapp', '', '', '', '', ''),
(144, 'Facebook', 'https://www.facebook.com/WhatsApp', '', '', '', '', ''),
(145, 'Coronavirus', 'https://www.whatsapp.com/coronavirus', '', '', '', '', ''),
(146, 'WhatsApp', 'https://www.whatsapp.com/legal/', '', '', '', '', ''),
(147, 'Telegram Messenger', 'https://telegram.org/', '', '', '', '', ''),
(148, 'Telegram Applications', 'https://telegram.org/dl?tme=b57653c71d2fec2b2c_59331318137283937', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `url_set` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`id`, `url_set`) VALUES
(1, 'yes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `snippet`
--

CREATE TABLE `snippet` (
  `id` int(11) NOT NULL,
  `title_strong` longtext CHARACTER SET utf8mb4 NOT NULL,
  `desc_snippet` longtext CHARACTER SET utf8mb4 NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 NOT NULL,
  `url` longtext CHARACTER SET utf8mb4 NOT NULL,
  `keywords` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `status` longtext CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `snippet`
--

INSERT INTO `snippet` (`id`, `title_strong`, `desc_snippet`, `title`, `url`, `keywords`, `status`) VALUES
(1, 'Diagrama', 'Diagrama é uma representação gráfica usada para demonstrar um esquema simplificado ou um resumo sobre um assunto. Normalmente é formado por palavras-chave ou conceitos que são ligados por linhas e setas que definem o raciocínio a ser seguido para que seja possível entender o tema.', 'Definição de Diagrama', 'https://blog.gabrielvalladao.com/index.php/2022/06/04/diagrama/', '', 'published'),
(2, '', '<p>&nbsp;<b style=\"color: #202124; font-family: arial, sans-serif; font-size: 16px;\"><b>Saturno</b>: 10 fatos e&nbsp;<b>curiosidades</b>&nbsp;para você conhecer melhor esse...</b></p><div class=\"RqBzHd\" style=\"background-color: white; color: #202124; font-family: arial, sans-serif; font-size: 16px; padding: 0px 20px;\"><ul class=\"i8Z77e\" style=\"margin: 0px; padding: 0px;\"><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\"><b>Saturno</b>&nbsp;poderia flutuar no oceano. ...</li><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\"><b>Saturno</b>&nbsp;gira tão rápido que ficou achatado. ...</li><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\">Os primeiros astrônomos pensaram que seus anéis eram luas. ...</li><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\">Você pode ver&nbsp;<b>Saturno</b>&nbsp;a olho-nu. ...</li><li class=\"TrT0Xe\" style=\"list-style-type: disc; margin: 0px 0px 4px; padding: 0px;\"><b>Saturno</b>&nbsp;tem 82 luas, e uma delas talvez possa abrigar vida.</li></ul></div>', 'Saturno: 10 fatos e curiosidades para você conhecer melhor esse planeta', 'https://www.hipercultura.com/saturno-dados-fatos/', '', 'published');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `crawl`
--
ALTER TABLE `crawl`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `link_clicks`
--
ALTER TABLE `link_clicks`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quick_know`
--
ALTER TABLE `quick_know`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quick_response`
--
ALTER TABLE `quick_response`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `snippet`
--
ALTER TABLE `snippet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `crawl`
--
ALTER TABLE `crawl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `link_clicks`
--
ALTER TABLE `link_clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quick_know`
--
ALTER TABLE `quick_know`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `quick_response`
--
ALTER TABLE `quick_response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT de tabela `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `snippet`
--
ALTER TABLE `snippet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
