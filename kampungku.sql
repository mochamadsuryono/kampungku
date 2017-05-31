-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mei 2017 pada 14.27
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampungku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcements`
--

CREATE TABLE `announcements` (
  `id_announcement` int(11) NOT NULL,
  `author` text NOT NULL,
  `announcement_title` text NOT NULL,
  `content` text NOT NULL,
  `pic_announcement` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_announcement` varchar(5) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `announcements`
--

INSERT INTO `announcements` (`id_announcement`, `author`, `announcement_title`, `content`, `pic_announcement`, `timestamp`, `status_announcement`, `active`) VALUES
(1, 'Admin', 'Read! Realize! & Make a Better Changing!', 'Hai, teman-teman! Apa kabar? Semoga terbitan kali ini lebih bisa memberi manfaat. Benarkah diri kita memiliki banyak kebiasaan buruk dalam belajar? Wah, yang ini pertanyaan yang hanya perlu dijawab oleh diri sendiri, dan mungkin menjelang tidur.\r\n\r\nDari sebuah tulisan Anies Baswedan, Rektor Universitas Para Madina Jakarta, dalam memperingati Hari Guru Indonesia, beliau membeberkan banyak fakta tentang dunia pendidikan Indonesia. Dalam tulisannya, dia memaparkan bahwa dari sisi kualitas, pendidikan penduduk Indonesia berada di urutan ke-124 dari 187 negara. Sementara penduduk bekerja 53% hanya tamatan SD atau dibawahnya. Sedangkan yang berpendidikan tinggi hanya 9%. Nah, mestinya kita bersyukur karena dapat menikmati pendidikan menengah ditambah dapat keringan membayarnya karena ada Dana BOS. Akan tetapi, sudahkah kita berperilaku baik dalam belajar? Ataukah kita masih melakukan hal-hal buruk? Jawabannya, tanyakan pada diri kalian masing-masing.\r\n\r\n<b>1)	Mencontek atau Cheating </b>\r\n\r\nDuh..duh.. kenapa ya cheating ada di nomor 1? Well, sebagai pelajar yang â€œtidakâ€ baik, mencontek itu udah ga asing lagi. Hayooooâ€¦ ngaku! Kalian pasti pernah atau malah sering nyontek kan? Sekarang, renungkan baik-baik. Puaskah kalian dengan nilai hasil mencontek? Banggakah kalian dengan nilai hasil mencontek yang kalian persembahkan ke orang tua? Well, jawabannya ada di hati kecil kalian. In this case, Iâ€™d like to give a fact. Korea, negara super cool yang digandrungi pupils all over the world. Di Korea, mencontek itu tabu dan memalukan. Korean has said that â€œWE HAVE MUCH TIME TO STUDY, SO WE DONâ€™T NEED TO CHEATâ€ Kesindir ga tuh? Kesibukan apa sih yang bikin kalian â€œga sempetâ€ belajar dan akhirnya â€œkepepetâ€ mencontek? wkwkwkwkâ€¦\r\n\r\n<b>2)	Buang-buang waktu atau Wasting Time</b>\r\n\r\nHm.. time is money!! Wasting time = wasting money. Kebanyakan dari kita selalu buang-buang waktu buat something USELESS & UNIMPORTANT. Sadar ga sih kalau kalian banyak buang waktu buat hal-hal berikut:\r\na)	NgGOSIP\r\nCukup pantaskah kalian membicarakan â€œkeburukanâ€ orang lain tanpa melihat â€œkekuranganâ€ dirimu sendiri? Well, bukankah lebih baik kita introspeksi & becermin pada diri sendiri?\r\nb)	GALAU\r\nWah..wah.. galau itu apa sih? Sempet jadi â€œpenyakitâ€ atau â€œtrendâ€ nih? Galu sih oke-oke aja, tapi kalau kebablasan bisa fatal akibatnya. Kalian bisa expresikan â€œkegalauanâ€ kalian melalui puisi atau cerpen, terus kalian bisa kirim dee ke redaksi. Bisa dapat penghasilan kan? Hehe.. In the other hand, kalian bisa â€œngusirâ€ penyakit atau trend galau itu dengan mencari hobi baru atau sekedar hang out sama teman yang banyak mendatangkan kesenangan. Take a positive way aja dee guys!\r\nDO SOMETHING IMPORTANT & PRECIOUS BEFORE GOD STOPS YOUR HEART BEAT!\r\n\r\n<b>3)	Kurang Minat Baca atau Less of Reading Habit</b>\r\n\r\nApa yang kalian lakukan saat clasmeet, naik bus, atau liburan? Have you start your reading habit? Well, reading is POOR among Indonesians because most people havenâ€™t REALIZE the IMPORTANCE OF READING. Yeah, banyak dari kita yang tidak suka membaca. Membaca itu golden way untuk mengisi waktu luang. Sebagai contoh, Jepang. Minat baca di negara maju yang satu ini sangatlah tinggi. Kita kan menemukan banyak orang yang membaca buku di densha (kereta listrik), halte bus, dll. Sebagian besar penumpang public transportations di Jepang baik dewasa maupun anak-anak mengisi waktu luang dengan membaca. Tidak peduli duduk atau berdiri. Penerbit di Jepang juga banyak membuat man-ga (komik bergambar) untuk meningkatkan minat baca. So? READING HABIT? WHY NOT?\r\n\r\n<b>4)	Kebersihan dan Kerapian Lingkungan</b>\r\n\r\nSampah? Yeah, itu masalah kebersihan kita. â€œBuanglah sampah pada tempatnyaâ€, slogan itu mungkin hanya sebatas slogan karena faktanya Indonesia punya banyak tempat sampah sehingga sampah ada di mana-mana, ya? Kesadaran terhadap kebersihan lingkungan nampaknya tak kunjung membaik. Kebiasaan membuang sampah sembarangan seakan menjadi jati diri. Becerminlah pada negara tetangga, mereka begitu cinta kebersihan. Begitu mereka melihat sampah, otomatis mereka akan membuang ke tempat yang semestinya agar tidak mengganggu mata. SO, KEEP CLEAN & DONâ€™T DROP LITTER IN IMPROPER PLACE!\r\n\r\n<b>5)	Nasionalisme</b>\r\n\r\nABITA! Aku Bangga Indonesia Tanah Airku! Yeah, begitu semangatnya kita saat menyerukan ABITA! Tapi apa yang terjadi pada bangsa ini? Budaya bangsa seakan terkikis seiring berjalannya waktu. Tersisih..terlupakan. Sebuah ironi untuk bangsa sejuta budaya ini. Sadarkah kalian? Lunturnya nasionalisme mengiringi kemunduran bangsa ini. Banyak diantara kita yang melupakan budaya leluhur kita, memilih melestarikan budaya negeri lain yang mereka anggap â€œkerenâ€. Kenapa Korea bisa membius dunia? Yeah, itu karena tingginya rasa nasionalisme mereka. Mereka lebih cinta produk sendiri, budaya sendiri. Hasilnya, rasa nasionalisme mereka membuat dunia terpana dan larut di dalamnya. Mengapa kita tidak meniru Korea? Kita punya banyak budaya â€œkerenâ€ yang akan membius dunia. Mengapa kita tidak berusaha melestarikan, mempromosikan, dan membuatnya jauh melambung tinggi di udara? Kalau kita tak cinta pada budaya dan melestarikannya, bagaimana masyarakat luar akan mengenal dan larut di dalamnya? Sebagai contoh, BALI. Tak ada satupun orang di dunia yang tidak tahu Bali. Bahkan, Bali merupakan tujuan wisata populer dan favorit di Jepang, Korea dan beberapa negara lainnya. Kesimpulannya? Warga Bali menjunjung tinggi & melestarikan budaya dan tradisi mereka, alhasil dunia mengenal dan memilih Bali sebagai tujuan wisata mereka. So? LETâ€™S SHOW THE BEAUTY OF OUR CULTURE! LET THE WORLD KNOW & LOVE OUR CULTURE.\r\n\r\n<b>6)	Pendidikan</b>\r\n\r\nWell, back to school nie guys. Hm.. bicara pendidikan itu tak lepas dari kita-kita para pelajar kan? Kualitas pendidikan di Indonesia bisa dibilang rendah bila dibandingkan dengan kebanyakan negara di dunia. Sebagai contoh, Korea. Bunuh diri atau suicide mungkin hal biasa yang banyak terjadi di Korea. Sebagian dari mereka yang bunuh diri alasannya karena tidak lulus ujian dan mendapat nilai buruk yang menjadi momok mengerikan dan nightmare di masa depan mereka. Pendidikan merupakan tolak ukur utama dan penentu kesuksesan mereka di masa depan. Faktanya, orang berpendidikan rendah akan mendapat pekerjaan yang bisa dibilang â€œGGA BANGETâ€ di Korea. Mereka benar-benar menjunjung tinggi pendidikan dan mempersiapkan UJIAN SEMAKSIMAL MUNGKIN. Tapi bagaimana dengan Indonesia? Letâ€™s see around guys! Banyak anak jalanan dan pengamen yang tidak bisa mengenyam pendidikan. Kalian yang beruntung seharusnya bisa memberikan yang terbaik. Belajar bukan karena paksaan. Belajar itu kebutuhan dan kewajiban. Tapi faktanya, banyak dari kita para pelajar yang justru menyia-nyiakan kesempatan emas untuk mengenyam bangku pendidikan di sekolah. Bukan tanpa alasan sebagian dari kita melakukannya, banyak faktor-faktor lingkungan yang sangat berperan pada kualitas sikap kita terhadap pendidikan. Menurut saya, mereka yang tak pernah menyadari betapa orang tua mereka berusaha menyekolahkan mereka adalah hal terironis untuk orang tua mereka.\r\n\r\nSo, kalau kalian diberi kesempatan untuk menuntut ilmu di sekolah favorit, buktikan juga kalau kalian adalah calon orang favorit! (cha)\r\n', 'images/post/aaa.jpg', '2017-05-28 00:33:06', 'yes', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `letters`
--

CREATE TABLE `letters` (
  `id_letter` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category_letter` varchar(100) NOT NULL,
  `status_letter` varchar(5) NOT NULL,
  `content_letter` text NOT NULL,
  `due_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `villagers`
--

CREATE TABLE `villagers` (
  `id_villagers` int(20) NOT NULL,
  `name_villager` text NOT NULL,
  `email_villager` varchar(50) NOT NULL,
  `password_villager` varchar(50) NOT NULL,
  `phone_villager` varchar(12) NOT NULL,
  `birth_place_villager` text NOT NULL,
  `birth_date_villager` date NOT NULL,
  `no_ktp_villager` varchar(20) NOT NULL,
  `sex_villager` text NOT NULL,
  `address_villager` text NOT NULL,
  `religion_villager` text NOT NULL,
  `job` text NOT NULL,
  `photo_villager` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `villagers`
--

INSERT INTO `villagers` (`id_villagers`, `name_villager`, `email_villager`, `password_villager`, `phone_villager`, `birth_place_villager`, `birth_date_villager`, `no_ktp_villager`, `sex_villager`, `address_villager`, `religion_villager`, `job`, `photo_villager`, `active`) VALUES
(1, 'Admin', 'kampungku@gmail.com', '7a25b0bc04e77a2f7453dd021168cdc2', '085712163208', '', '1997-08-10', '3306021008970002', 'Laki-Laki', 'Bandung', 'Islam', '', 'images/member/11.jpg', 0),
(10, 'Muhammad Ilham Ramadhan', 'm.ilhamramadhanca@gmail.com', '5620c278a6e17fad763529aff97b7feb', '085810279923', '', '1997-12-31', '11111111111111111110', 'Laki-Laki', 'Kali Licin', 'Islam', '', 'images/member/ç¤ºä¾‹å›¾ç‰‡_01.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id_visitor` int(20) NOT NULL,
  `author` text NOT NULL,
  `name_visitor` text NOT NULL,
  `no_ktp_visitor` text NOT NULL,
  `address_visitor` text NOT NULL,
  `status_visitor` varchar(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id_announcement`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id_letter`);

--
-- Indexes for table `villagers`
--
ALTER TABLE `villagers`
  ADD PRIMARY KEY (`id_villagers`),
  ADD UNIQUE KEY `email_villager` (`email_villager`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id_visitor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id_announcement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id_letter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `villagers`
--
ALTER TABLE `villagers`
  MODIFY `id_villagers` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id_visitor` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
