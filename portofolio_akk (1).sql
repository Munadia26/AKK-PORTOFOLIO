-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2026 at 06:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio_akk`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(100) DEFAULT NULL,
  `deskripsi_singkat` text,
  `foto_cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`, `deskripsi_singkat`, `foto_cover`) VALUES
(1, 'Sosial dan Lingkungan', 'Gerakan nyata merawat bumi dan sesama.\r\n', 'edukasi.jpg'),
(2, 'Media & Dialektika', 'Ruang untuk bersuara, berdebat, dan berpikir kritis.', 'media.jpg'),
(3, 'Riset & Kesehatan Mental', 'Pendekatan antropologis untuk memahami manusia.', 'riset.jpg'),
(4, 'Jejaring Ekonomi Kreatif\r\n', 'Simpul kolaborasi untuk kemandirian ekonomi.', 'tekno.jpg'),
(5, 'Edukasi & Perkembangan Karakter', 'Labolatorium Generasi Lingkar Kreatif', 'sosial.jpg'),
(6, 'Teknolog & Inovasi (MUKRAF STUDIO)', 'Menyambungkan kearifan lokal dengan percepatan digital.', 'ekonomi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_dokumentasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_upload` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dokumentasi`, `judul`, `kategori`, `deskripsi`, `foto`, `tgl_upload`) VALUES
(14, 'Permikomnas Jateng dan Diskusi BerisiX: Membangun Adab dan Etika dalam Unggah-Ungguh Digital', 'Diskusi Berisix', 'Diskusi BerisiX 21 Desember 2024 di Balai Desa Banyuwangi, Kecamatan Bandongan, Kabupaten Magelang sukses menjadi ajang berbagi gagasan dan solusi, terutama dalam membahas topik \"Unggah-Ungguh\" atau adab dan etika di era digital. Acara ini dipromotori oleh Komunitas Arti Kata Kita dilatar belakangi oleh maraknya persebaran informasi media sosial yang seringkali berasal dari sumber yang kurang kredibel dan ketidaksiapan masyarakat dalam menerima dan menyaring informasi. Berkolaborasi dengan Wayang Godhong esc dan Divisi Litbang Permikomnas Jawa Tengah, menghadirkan ruang diskusi yang penuh inspirasi.\r\nSebagaimana diungkapkan oleh Pandu, perwakilan Komunitas Arti Kata Kita, nama BerisiX melambangkan diskusi yang penuh makna (berisi) dan terbuka untuk berbagai kolaborasi (X). Peserta didorong untuk menyampaikan ide secara bebas, lugas, dan penuh keberanian, dengan harapan diskusi ini menghasilkan wawasan baru yang solutif.\r\nAcara ini dimoderatori oleh Dadun Tanggon Wisanggeni, dengan narasumber utama Prof. Dr. Agus Purwantoro, M.Sn., atau yang akrab disapa Prof. Goespoer. Dalam pengantarnya, Prof. Goespoer menegaskan bahwa adab dan etika manusia sangat dipengaruhi oleh asupan, baik dari makanan maupun lingkungan. Namun, di era digital ini, media sosial menjadi asupan yang tidak selalu sehat, bahkan seringkali memicu krisis amoral akibat kurangnya kontrol diri. Perspektif ini diperkuat oleh hasil kajian divisi litbang yang disampaikan oleh Ridho Agung, perwakilan dari Permikomnas Jawa Tengah, bahwa media sosial kini mampu membentuk pola pikir publik. \"Berita, opini, bahkan hoaks bisa viral dalam hitungan detik, dan banyak orang langsung menghakimi tanpa berpikir panjang,\" ujarnya. Hal ini menuntut kita untuk lebih bijak dalam menyerap dan menyebarkan informasi.\r\nLebih lanjut, Dr. Ir. Kanjeng Pangeran J. Eri Ratmanto Dwijonagoro dari Komunitas Pancasila Dasar NKRI Bukan Pilar menyoroti dampak hukum dari aktivitas digital. \"Rekam, posting, dan memviralkan sesuatu kini dapat memicu tindakan hukum. Oleh karena itu, kehati-hatian dalam bermedia sosial menjadi kebutuhan,\" pesannya.\r\nAcara ditutup dengan mengajak peserta untuk  merefleksikan pentingnya \"unggah-ungguh\" sebagai bagian dari identitas budaya yang tetap relevan di era digital. \r\nDiskusi BerisiX ini berhasil menciptakan suasana akrab dan inspiratif, mempertegas pentingnya harmoni antara nilai tradisional dan dinamika modern untuk menciptakan kehidupan digital yang lebih bermartabat. Diskusi BerisiX dapat menjadi langkah awal gerakan kolektif yang meningkatkan kesadaran akan pentingnya \"unggah-ungguh\" di era digital. Semoga acara ini menginspirasi lebih banyak pihak untuk mengutamakan adab dan etika dalam setiap aktivitas, baik di dunia nyata maupun di dunia maya. Kolaborasi yang terjalin diharapkan melahirkan inisiatif baru yang bermanfaat, memperkuat budaya lokal, dan menjawab tantangan global.\r\nKe depan, Diskusi BerisiX diharapkan menjadi agenda rutin dengan topik-topik relevan yang terus mendorong kolaborasi antar komunitas, menciptakan perubahan positif bagi masyarakat. \"Diskusi ini bukan sekadar berbagi ide, tetapi juga membangun langkah nyata untuk menjawab tantangan zaman,\" tutup Pandu penuh optimisme.', 'doc_1771390535.jpeg', '2026-02-18 11:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `sejarah` text,
  `foto_sejarah` varchar(255) DEFAULT 'default_akk.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `sejarah`, `foto_sejarah`) VALUES
(1, 'Lahir pada tahun 2016, ArtiKataKita (AKK) bermula dari embrio gerakan literasi dan budaya di sudut-sudut Magelang yang rindu akan ruang dialektika yang jujur dan membumi. Apa yang diawali sebagai inisiatif sederhana untuk merespons keresahan sosial, perlahan berevolusi menjadi simpul pergerakan kreatif yang solid. Sepanjang perjalanan satu dekade ini, AKK telah bertransformasi melewati berbagai fase \"tempaan\"—mulai dari aktivasi ruang seni, gerakan konservasi sungai, hingga inovasi digital—membuktikan ketangguhan kolektif (resiliensi) kami untuk terus relevan dan berdampak tanpa pernah mencabut akar idealisme dan semangat kekeluargaan yang telah ditanam sejak hari pertama.', 'sejarah_1769780934.png');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `nama_program` varchar(100) DEFAULT NULL,
  `deskripsi_lengkap` text,
  `foto_program` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `id_divisi`, `nama_program`, `deskripsi_lengkap`, `foto_program`) VALUES
(12, 1, 'WAYANG GODHONG ECO-SOCIETY & FESTIVAL JOGO KALI ', 'Gerakan konservasi sungai dan lingkungan berbasis seni budaya di bawah binaan Prof. Dr. Agus Purwantoro, M.Sn. Kami merawat alam bukan dengan slogan, tapi dengan pendekatan budaya yang menyentuh hati masyarakat.', 'wayang_godong.jpeg'),
(13, 4, 'JKM (JEJARING KREATIF MAGELANG)', 'Inkubator dan wadah kolaborasi bagi para pelaku industri kreatif di Magelang untuk saling bertukar sumber daya dan menciptakan karya bersama.\r\n', 'JKM.jpeg'),
(14, 6, 'DIGITAL DEVELOPMENT LAB', 'Unit pengembangan teknologi strategis yang mengerjakan solusi digital, termasuk project monitoring untuk program pemerintah dan aplikasi berbasis komunitas. Kami memastikan teknologi hadir sebagai alat bantu (enabler), bukan pengganti kemanusiaan.', 'DIVISI_MUKRAF.jpeg'),
(15, 2, 'NGOBROL AJA PODCAST & SEDIKIT BERISIX ', 'Kanal dokumentasi pemikiran dan konten digital edukatif. Kami mengemas isu berat menjadi obrolan renyah yang mudah dicerna oleh generasi digital tanpa kehilangan substansinya.', '0313(1)-Sampul.jpg'),
(16, 2, 'DISKUSI BERISIX ', 'Forum dialektika kritis yang membahas isu-isu sosial, budaya, dan kemanusiaan. Kami percaya bahwa \"berisik\" yang terarah adalah awal dari solusi.', 'Diskusi_Brisix.jpeg'),
(17, 3, 'ARTICERITAKITA', 'Layanan konsultasi dan \"curhat\" terintegrasi. Ruang aman bagi siapa saja untuk bercerita dan didengar, ditangani dengan pendekatan humanis yang memanusiakan.', 'mental_health.jpeg'),
(18, 3, 'ARTICOLOUR', ' Metode edukasi visual dan healing berbasis seni. Kami menggunakan pendekatan antropologi psikologi untuk membantu individu mengekspresikan emosi melalui warna dan rupa.', 'mental_health1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
