-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jan 2019 pada 14.11
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fifotoba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `artikel` mediumtext NOT NULL,
  `post_on` varchar(100) NOT NULL,
  `status_saran_artikel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `id_user`, `gambar`, `artikel`, `post_on`, `status_saran_artikel`) VALUES
(78, 'Pesona Kuliner Batak', 4, 'kidu-kidu.jpg', '<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><span style=\"font-size:20px\">Pengalaman Pertama Memakan Kuliner Unik nan Ekstrim dari Tanah Karo, Kidu-Kidu</span></div>\r\n\r\n<p><img alt=\"\" src=\"http://2.bp.blogspot.com/_C1wEawrFCdo/SLab34BCjfI/AAAAAAAAAFI/BpU9ewbmay8/s320/20080828122331.jpg\" /></p>\r\n\r\n<p><span style=\"color:#000000\">Rumah makan Khas Batak ini terletak di jalan Pabrik Tenun no.45 sudah cukup terkenal .dan khususnya makanan Batak Toba bukan Batak Karo . tetapi memiliki kesamaan yang hampir mirip ,contohnya dalam Batak toba istilah yang mirip dengan saus cabe dibilang &quot;Darah&quot; (kedengaran cukup sadis karena memang kenyataan nya adalah campuran dari sedikit darah babi segar / mentah dengan bumbu2 nya sehingga bewarna kecoklatan dan terasa agak pedas di mulut) sedangkan istilahnya pada suku Batak Karo adalah &quot;Getah&quot; (kedengaran lebih halus :) padahal sebenarnya sama saja pembuatannya) dan menu yg utama adalah Babi goreng pada makanan Khas Batak Toba,sedangkan pada suku Batak Karo adalah BPK(Babi Panggang Karo)</span><span style=\"color:#000000\">.yang saya sukai dari salah satu makanan khas Karo adalah &quot;Kidu - Kidu&quot; (usus yang diisi dengan daging cincang yang diberi bumbu2 an ) ini gbrnya (bawah ) yang dibeli dari tempat lain yaitu di RM ALMERI (jln jamin ginting ) yg terkenal akan masakan Kidu Kidunya :)</span></p>', '2019-01-10 02:18:22', 'Accepted'),
(79, 'mie gomak, sphagetti a la batak!', 5, 'mie-gomak_20160425_153622.jpg', '<div class=\"tribun-mark\"><span style=\"font-size:36px\">Mie Gomak, Kuliner Khas Toba Samosir yang Kaya Rempah, Harganya? Cuma Rp 5 Ribu!</span></div>  <div class=\"tribun-mark\">&nbsp;</div>  <div class=\"tribun-mark\"><span style=\"font-size:16px\"><img alt=\"\" src=\"http://cdn2.tstatic.net/tribunnews/foto/bank/images/mie-gomak_20160425_153622.jpg\" style=\"height:393px; width:700px\" /></span></div>  <div class=\"tribun-mark\"> <hr /></div>  <div class=\"tribun-mark\"> <div class=\"tribun-mark\"> <p><span style=\"font-size:16px\">Tak lengkap rasanya mengunjungi kota dengan penduduk mayoritas Batak Toba di <a class=\"blue\" href=\"http://www.tribunnews.com/tag/toba-samosir\">Toba Samosir</a> jika tidak mencicipi kuliner khas kota tersebut.</span></p>  <p><span style=\"font-size:16px\">Ya, kuliner khasnya adalah Mie Gomak masakan khas Batak Toba.</span></p>  <p>&nbsp;</p> </div> </div>  <div class=\"tribun-mark\"><span style=\"font-size:16px\"><img alt=\"\" src=\"http://cdn-2.tstatic.net/tribunnews/foto/bank/images/mie-gomak_20160425_153656.jpg\" style=\"height:393px; width:753px\" /></span></div>  <div class=\"tribun-mark\"> <div class=\"tribun-mark\"> <p><span style=\"font-size:16px\">Makanan ini menjadi andalan provinsi Sumatera Utara, karena mulai dari Siantar, Parapat, Balige, Labuhan Batu, Sibolga hingga Tapanuli.</span></p>  <p><span style=\"font-size:16px\">Mie gomak sangat mudah didapatkan di warung pinggir jalan dan menjadi menu makanan khas dengan bumbu resep turun menurun menggunakan andaliman.</span></p>  <p><span style=\"font-size:16px\">Bumbu masak khas suku Bayak alias mericanya suku Batak.</span></p>  <p><span style=\"font-size:16px\">Arti <a class=\"blue\" href=\"http://www.tribunnews.com/tag/mie-gomak\">mie gomak</a> sendiri adalah mie yang diaduk (gomak) dengan tangan saat menyatukan bumbu.</span></p>  <p><span style=\"font-size:16px\">Proses pemasakannya pun kebanyakan pedagang masih menggunakan tungku tradisional, katanya untuk menjaga rasa dan penyerapan bumbu lebih terasa pada mie serta menjaga aroma bumbu andalimannya tetap wangi.</span></p>  <p><span style=\"font-size:16px\">Lina, seorang pemilik warung <a class=\"blue\" href=\"http://www.tribunnews.com/tag/mie-gomak\">mie gomak</a> di pasar Balige menuturkan memasak <a class=\"blue\" href=\"http://www.tribunnews.com/tag/mie-gomak\">mie gomak</a> tidak bisa sembarang.</span></p> </div> </div>', '2019-01-10 05:40:31', 'Accepted'),
(81, 'Naniura, sashimi dari Tano Batak', 2, 'dali ni horbo.jpeg', '<p><img alt=\"\" src=\"https://media.beritagar.id/2017-02/15e1fa38930ff0e7a259d7bab791a2fd.jpg\" style=\"height:800px; width:1200px\" /></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Biasanya pelancong yang berwisata ke Danau Toba melalui jalur darat dari Medan ke Parapat atau Brastagi. Padahal, jika melalui <a href=\"http://www.tobatabo.com/1171+menikmati-sisi-lain-alam-danau-toba-dari-kota-balige.htm\" target=\"_blank\">rute </a><a href=\"http://www.tobatabo.com/1171+menikmati-sisi-lain-alam-danau-toba-dari-kota-balige.htm\" target=\"_blank\">Balige</a>, pelancong dapat menikmati Danau Toba dari sisi berbeda.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Balige adalah ibu kota<a href=\"https://id.wikipedia.org/wiki/Balige,_Toba_Samosir#Sarana_.26_Prasarana\" target=\"_blank\"> </a><a href=\"https://id.wikipedia.org/wiki/Balige,_Toba_Samosir#Sarana_.26_Prasarana\" target=\"_blank\">Toba</a><a href=\"https://id.wikipedia.org/wiki/Balige,_Toba_Samosir#Sarana_.26_Prasarana\" target=\"_blank\"> </a><a href=\"https://id.wikipedia.org/wiki/Balige,_Toba_Samosir#Sarana_.26_Prasarana\" target=\"_blank\">Samosir</a>. Kotanya sejuk dan memiliki cukup banyak obyek wisata menarik, termasuk wisata kuliner. Di Balige, Anda dapat mencoba sashimi ala Tanah Batak. Rasanya sudah barang tentu lezat dan kaya rempah.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Anda yang gemar masakan Jepang pasti familier dengan sashimi. Sajian ikan segar yang dimakan mentah. Karena kesegaran ikan, meski tanpa dimasak pun, rasanya lezat.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Sajian ini juga mirip dengan masakan khas Peru, ceviche. Menurut juru masak tersohor <a href=\"http://www.jamieoliver.com/recipes/seafood-recipes/peruvian-ceviche/\" target=\"_blank\">Jamie Oliver</a>, ceviche pun akan terasa lezat jika ikan yang digunakan benar-benar segar.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Nah, di Balige, Anda dapat mencoba masakan serupa. Namanya naniura.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Salah satu rumah makan yang menyajikan naniura lezat adalah RM Nauli. Lokasinya di Jalan Bukit Barisan nomor 2R, tepat di depan pelabuhan.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Sepintas, Anda bisa salah mengira ini rumah makan Padang. Sebab, sajian dipajang dalam bufet. Baru ketika sajian dihidangkan, Anda tahu bedanya.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Naniura dibuat langsung saat dipesan. &quot;Kita menyajikannya pun langsung satu ekor,&quot; ujar <a href=\"http://www.medanbisnisdaily.com/news/read/2016/06/12/239589/sensasi-naniura-shasimi-nya-batak/\" target=\"_blank\">Sita </a><a href=\"http://www.medanbisnisdaily.com/news/read/2016/06/12/239589/sensasi-naniura-shasimi-nya-batak/\" target=\"_blank\">Boru</a><a href=\"http://www.medanbisnisdaily.com/news/read/2016/06/12/239589/sensasi-naniura-shasimi-nya-batak/\" target=\"_blank\"> </a><a href=\"http://www.medanbisnisdaily.com/news/read/2016/06/12/239589/sensasi-naniura-shasimi-nya-batak/\" target=\"_blank\">Siahaan</a><a href=\"http://www.medanbisnisdaily.com/news/read/2016/06/12/239589/sensasi-naniura-shasimi-nya-batak/\" target=\"_blank\"> pemilik </a><a href=\"http://www.medanbisnisdaily.com/news/read/2016/06/12/239589/sensasi-naniura-shasimi-nya-batak/\" target=\"_blank\">RM</a><a href=\"http://www.medanbisnisdaily.com/news/read/2016/06/12/239589/sensasi-naniura-shasimi-nya-batak/\" target=\"_blank\"> </a><a href=\"http://www.medanbisnisdaily.com/news/read/2016/06/12/239589/sensasi-naniura-shasimi-nya-batak/\" target=\"_blank\">Nauli</a>. Sajian yang satu ini tergolong makanan mewah, biasa dipesan untuk momen spesial, atau oleh orang-orang yang sedang menjamu tamu.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Untuk sajian naniura, biasanya ikan yang digunakan adalah ikan mas, gurami, atau ikan ihan. &quot;Kalau khasnya ikan ihan, tapi sekarang ihan sudah langka. Biasanya tamu lebih senang ikan mas,&quot; Sita menjelaskan.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Meski tak ubahnya sashimi, menyajikan naniura tak semudah itu. Dikutip tabloid Saji edisi 346, pertama tulang-tulang ikan dan lendir dibersihkan, lalu ikan digantung satu jam lamanya guna meniriskan air.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Setelah itu ikan dibalur air perasan dari empat jeruk jungga--yang lebih asam dari jeruk biasa. Kata Sita, air jeruk inilah yang membuat ikan matang. <a href=\"http://travel.detik.com/read/2016/08/22/212049/3281006/1357/batak-punya-naniura-sajian-kuliner-ikan-mas-tanpa-dimasak\" target=\"_blank\"><em>detikTravel</em></a> melansir, merendam ikan dalam jeruk jungga atau jeruk purut menjaga kualitas protein ikan.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Setelah itu baru ikan diberi bumbu. Bumbu yang digunakan cukup lengkap. Bawang merah, cabai rawit, kunyit bakar, kemiri disangrai, jahe, kecombrang, dan andaliman.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Semua digiling halus lalu dilumuri pada badan ikan sambil ditekan agar meresap. Setelah itu kacang tanah ditaburkan. Ikan yang sudah dibumbui lalu didiamkan satu jam agar bumbu lebih meresap.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Baru kemudian naniura siap disajikan. Biasanya, ada sambal khusus yang sudah disiapkan sebagai teman menyantap naniura.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Saat dimakan, naniura memiliki tekstur kenyal namun mudah dikunyah. Rasanya pedas dan segar karena penggunaan jeruk dan andaliman di dalamnya. Walau tanpa dimasak dengan api, tak ada sisa darah yang muncul saat dimakan.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Untuk menikmati sajian spesial ini, siapkan bujet sekitar Rp100 ribu. Pastikan juga Anda memesan di awal. Selain naniura, cicip juga sajian khas seperti sup daging kerbau dan arsik ikan mas.</span></span></p>', '2019-01-10 12:26:07', 'Accepted');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarkometars`
--

CREATE TABLE `daftarkometars` (
  `id` int(11) NOT NULL,
  `id_tempatmakan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentars`
--

CREATE TABLE `komentars` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tempatmakan` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentars`
--

INSERT INTO `komentars` (`id_komentar`, `id_user`, `id_tempatmakan`, `komentar`, `tanggal`) VALUES
(1, 1, 4, 'Ini merupaan salah satu rumah makan terbaik di area balige.', '2019-01-10'),
(2, 4, 4, 'Tempat ini recommended bangat buat semua pengunjung', '2019-01-10'),
(3, 5, 4, 'Tempat makan ini menyediakan menu yamg sangat ezat', '2019-01-10'),
(4, 5, 4, 'hello', '2019-01-10'),
(5, 4, 5, 'mantap sekale!', '2019-01-10'),
(6, 4, 1, 'Nice, sangat fantastik!', '2019-01-10'),
(7, 2, 5, 'cvb', '2019-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanans`
--

CREATE TABLE `makanans` (
  `id_makanan` int(11) NOT NULL,
  `id_tempatmakan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanans`
--

INSERT INTO `makanans` (`id_makanan`, `id_tempatmakan`, `nama`, `harga`, `gambar`, `deskripsi`) VALUES
(7, 5, 'Babi Panggang Karo', '10000/porsi', 'babi_panggang_karo.jpg', 'BPK terbuat dari daging babi yang diolah dengan cara dipanggang ataupun dibakar. BPK biasanya disajikan bersama dengan darah babi, kidu kidu, dan daun ubi singkong tumbuk.'),
(8, 5, 'Kidu-Kidu', '15000/porsi', 'kidu-kidu.jpg', 'Makanan khas karo yang dikukus dan dicampur dengan rempah-rempah. Sangat berguna untuk meningkatkan stamina dan vitalitas.'),
(9, 1, 'Dali ni Horbo', '25000/porsi', 'dali ni horbo.jpeg', 'Bahan utama susu kerbau yang dibekukan. Proses memasaknya hampir sama dengan memasak Arsik yaitu dengan mencampurkan susu yang sudah dibekukan dengan bumbu khas daerah Sumatera Utara dan salah satunya'),
(10, 1, 'Ayam Napinadar', '45000/porsi', 'ayam_napinadar.jpg', 'Ayam yang di masak dengan memakai rempah-rempah dan darah segar.'),
(11, 6, 'Tanggo-tanggo', '30000/porsi', 'tanggo_tanggo.jpg', 'Makanan berbahan dasar daging anjing, sangat khas dengan lidah orang batak. Rempah-rempah menambah cita rasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id_tag` int(11) NOT NULL,
  `name_tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id_tag`, `name_tag`) VALUES
(1, ''),
(2, ''),
(92, ''),
(93, ''),
(94, ''),
(95, ''),
(96, ''),
(97, ''),
(98, ''),
(99, ''),
(100, ''),
(101, ''),
(102, ''),
(103, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag_artikel`
--

CREATE TABLE `tag_artikel` (
  `id_tag` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempatmakans`
--

CREATE TABLE `tempatmakans` (
  `id_tempatmakan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `notelprumahmakan` varchar(13) NOT NULL,
  `jambuka` varchar(50) NOT NULL,
  `jamtutup` varchar(50) NOT NULL,
  `haribuka` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `status_saran_tempatmakan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempatmakans`
--

INSERT INTO `tempatmakans` (`id_tempatmakan`, `id_user`, `nama`, `alamat`, `contact`, `notelprumahmakan`, `jambuka`, `jamtutup`, `haribuka`, `gambar`, `deskripsi`, `status_saran_tempatmakan`) VALUES
(1, 1, 'Rumah Makan Khas Batak Mak Robema', 'Jl. Patuan Nagari No.45, Lumban Dolok Haume Bange, Balige, Kabupaten Toba Samosir, Sumatera Utara', 'Robema', '(0632) 21152', '8:00 AM', '11:30 PM', 'Setiap Hari', 'robema.jpg', 'Rumah Makan Khas Batak Mak Robema adalah rumah makan khas batak yang sudah sangat dikenal, cita rasa dan pelayanan merupakan nilain unggulan dari rumah makan ini', 'Accepted'),
(2, 1, 'RM BPK Karismatik SukaMakmur', 'Jalan Bahagia', 'Pak Makmur', '081370433726', '10:00 AM', '11:00 PM', 'Setiap Hari', 'index.jpg', 'Ini adalah deskripsi tempat makan karismatik suka makmur', 'request'),
(4, 4, 'Rumah Makan Khas Batak Lamhot', 'Jalan Patuan Nagari Kelurahan Sangkarnihuta Kecamatan Balige Tobasa Sumatera Utara 22313 Indonesia', 'Pak Lamhot', '0852-6299-489', '9:00 AM', '10:00 PM', 'Setiap Hari', 'rm khas batak lamhot.jpg', 'Rumah makan khas batak lamhot sudah berdiri sejak lama dan yang beralamat di jalan patuan nagari kelurahan sangkar nihuta kecamatan balige kabupaten toba samosir provinsi sumatera  utara.  Kami mengutamakan kualitas dalam penyajian', 'Accepted'),
(5, 4, 'Rumah Makan BPK Zaman', 'Jalan Sigura-gura, Kecamatan Siantar Narumonda', 'Pak Marpaung', '08137043245', '9:30 AM', '5:30 PM', 'Senin-Jumat', 'BPK Zama.PNG', 'Rumah Makan BPK ini mempunyai kekhasan tersendiri dalam menghadirkan cita rasa masakannya. Sekali anda mencobanya, anda dijamin akan ketagihan.', 'Accepted'),
(6, 6, 'Rumah Makan Khas Batak Lapo Hasian', 'Jalan Patuan Nagari Kelurahan Sangkarnihuta Kecamatan Balige Tobasa', 'Pak Josua', '0822-2524-069', '10:30 AM', '10:30 PM', 'Setiap Hari', 'unnamed.jpg', 'Cita rasa Menyakinkan dari sebuah gaya klasik dari kuliner Batak. Bangso Batak wajib ke sini, Lapo Tuak hasian.', 'Accepted');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_user` varchar(200) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `notelp`, `password`, `img_user`, `role`) VALUES
(1, 'Josua', 'joifarjosuajosua@gmail.com', '081370433726', 'justme123', 'power-hd-png-minimal-power-button-logos-hd-wallpaper-my-image-1600.png', 2),
(2, 'admin', 'admin@gmail.com', '081397807999', 'admin', 'logo.png', 1),
(3, 'Owner', 'Owner@gmail.com', '081370433726', 'owner', 'lazy-girl-doing-homework.jpg', 3),
(4, 'Josua Marpaung', 'joifarjosuajosua@gmail.com', '081370433726', 'justme123', 'Charger2.png', 2),
(5, 'friska', 'friska@gmail.com', '082272228978', 'friska', 'Untitled.png', 2),
(6, 'Pak Josua', 'Marpaung@gmail.com', '08137043726', 'justme123', 'index.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `daftarkometars`
--
ALTER TABLE `daftarkometars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tempatmakan` (`id_tempatmakan`);

--
-- Indexes for table `makanans`
--
ALTER TABLE `makanans`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `idtempatmakansFK` (`id_tempatmakan`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tag_artikel`
--
ALTER TABLE `tag_artikel`
  ADD KEY `id_tag` (`id_tag`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `tempatmakans`
--
ALTER TABLE `tempatmakans`
  ADD PRIMARY KEY (`id_tempatmakan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `daftarkometars`
--
ALTER TABLE `daftarkometars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentars`
--
ALTER TABLE `komentars`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `makanans`
--
ALTER TABLE `makanans`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tempatmakans`
--
ALTER TABLE `tempatmakans`
  MODIFY `id_tempatmakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `komentars`
--
ALTER TABLE `komentars`
  ADD CONSTRAINT `komentars_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `komentars_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `komentars_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `komentars_ibfk_4` FOREIGN KEY (`id_tempatmakan`) REFERENCES `tempatmakans` (`id_tempatmakan`);

--
-- Ketidakleluasaan untuk tabel `makanans`
--
ALTER TABLE `makanans`
  ADD CONSTRAINT `idtempatmakansFK` FOREIGN KEY (`id_tempatmakan`) REFERENCES `tempatmakans` (`id_tempatmakan`);

--
-- Ketidakleluasaan untuk tabel `tag_artikel`
--
ALTER TABLE `tag_artikel`
  ADD CONSTRAINT `tag_artikel_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id_tag`),
  ADD CONSTRAINT `tag_artikel_ibfk_2` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`);

--
-- Ketidakleluasaan untuk tabel `tempatmakans`
--
ALTER TABLE `tempatmakans`
  ADD CONSTRAINT `tempatmakans_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
