-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2014 pada 09.50
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar_cicilan`
--

CREATE TABLE IF NOT EXISTS `bayar_cicilan` (
  `cicilan_kode` char(10) NOT NULL,
  `kridit_kode` char(10) NOT NULL,
  `cicilan_tanggal` date NOT NULL,
  `cicilan_jumlah` double NOT NULL,
  `cicilan_ke` decimal(8,0) NOT NULL,
  `cicilan_sisa_ke` decimal(8,0) NOT NULL,
  `cicilan_sisa_harga` double NOT NULL,
  PRIMARY KEY (`cicilan_kode`,`kridit_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bayar_cicilan`
--

INSERT INTO `bayar_cicilan` (`cicilan_kode`, `kridit_kode`, `cicilan_tanggal`, `cicilan_jumlah`, `cicilan_ke`, `cicilan_sisa_ke`, `cicilan_sisa_harga`) VALUES
('', 'Data belum', '0000-00-00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli_cash`
--

CREATE TABLE IF NOT EXISTS `beli_cash` (
  `cash_kode` char(10) NOT NULL,
  `pembeli_no_ktp` varchar(17) NOT NULL,
  `motor_kode` char(10) NOT NULL,
  `cash_tanggal` date NOT NULL,
  `cash_bayar` double NOT NULL,
  PRIMARY KEY (`cash_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli_cash`
--

INSERT INTO `beli_cash` (`cash_kode`, `pembeli_no_ktp`, `motor_kode`, `cash_tanggal`, `cash_bayar`) VALUES
('001', '12312321', '001', '2014-02-28', 123213);

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli_kridit`
--

CREATE TABLE IF NOT EXISTS `beli_kridit` (
  `kridit_kode` char(10) NOT NULL,
  `pembeli_no_ktp` varchar(17) NOT NULL,
  `paket_kode` char(10) NOT NULL,
  `motor_kode` char(10) NOT NULL,
  `kridit_tanggal` date NOT NULL,
  `fotokopi_ktp` tinyint(1) NOT NULL,
  `fotokopi_kk` tinyint(1) NOT NULL,
  `fotokopi_slip_gaji` tinyint(1) NOT NULL,
  PRIMARY KEY (`kridit_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kridit_paket`
--

CREATE TABLE IF NOT EXISTS `kridit_paket` (
  `paket_kode` char(10) NOT NULL,
  `paket_harga_cash` double NOT NULL,
  `paket_uang_muka` double NOT NULL,
  `cicilan_jumlah` decimal(2,0) NOT NULL,
  `paket_bunga` double NOT NULL,
  `paket_nilai_cicilan` double NOT NULL,
  PRIMARY KEY (`paket_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kridit_paket`
--

INSERT INTO `kridit_paket` (`paket_kode`, `paket_harga_cash`, `paket_uang_muka`, `cicilan_jumlah`, `paket_bunga`, `paket_nilai_cicilan`) VALUES
('001', 10000000, 500000, 24, 0, 400000),
('002', 10000000, 1000000, 12, 0, 750000),
('003', 10000000, 500000, 12, 0, 800000),
('004', 10000000, 1000000, 24, 0, 375000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE IF NOT EXISTS `motor` (
  `motor_kode` char(10) NOT NULL,
  `motor_merk` varchar(15) NOT NULL,
  `motor_type` varchar(15) NOT NULL,
  `motor_warna_pilihan` varchar(70) NOT NULL,
  `motor_harga` double NOT NULL,
  `motor_gambar` varchar(255) NOT NULL,
  `desk` longtext NOT NULL,
  PRIMARY KEY (`motor_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`motor_kode`, `motor_merk`, `motor_type`, `motor_warna_pilihan`, `motor_harga`, `motor_gambar`, `desk`) VALUES
('001', 'Ryno', 'Single wheel', 'abu-abu', 51000000, 'ryno.jpg', 'Sepeda motor dengan roda tunggal ini menggunakan energi listrik untuk menggerakkan mesinnya. Teknik pengendalian dan mengendarainya dilakukan secara geometris, sementara kecepatan dan rem diatur menggunakan accelerometer dan gyros.\n\nSepeda motor yang memiliki desain futuristik ini mulai diluncurkan secara komersial pada 2013, dengan bandrol USD 4,500 atau sekitar Rp 51 juta. Ryno memiliki kecepatan maksimal 32 km/jam, kapasitas baterai lithium yang cukup untuk berkendara hingga jarak 32 kilometer.'),
('002', 'BRP', 'Can-Am Spyder R', 'Hitam', 189000000, 'can am.jpg', 'Sepeda motor canggih dan futuristik yang masuk kedalam kategori tricycle, dibuat oleh perusahaan mobil salju, Ski-Doo. BRP Can-Am memiliki sepasang roda di bagian depan, secara keseluruhan desainnya menyerupai kendaraan salju.\r\n\r\nMeski demikian, Can-Am diluncurkan untuk menjelajahi jalanan aspal dan tanah. BRP Can-Am meiliki suspensi Fox Racing yang cocok untuk sistem pengereman ABS.\r\n\r\nUntuk kenyamanan dan keseimbangan, BRP Can-Am dilengkapi power steering dan sistem kendali komputerisasi. Ber-cc cukup besar, 998 C dengan mesin rotax V-Twin bertenaga 106 PK. Di Kanada BRP Can-Am Spyder RS-S dibanderol Rp 189 juta.'),
('003', 'uno', 'cycle', 'oranye', 50000000, 'uno.jpg', 'Berbeda dengan sepeda roda tunggal, Uno memiliki dua roda yang dipasang berdampingan. Uno kemudian dipamerkan juga di Toronto Spring Motorcycle Show 2008.'),
('004', 'Peraves', 'Monotracer MTE-', 'Biru', 80000000, 'peraves.jpg', 'Perusahaan sepeda motor Swiss, kali pertama mengeluarkan sepeda motor kabin pada 1982 dengan nama Ecomobile.\r\n\r\nDilanjutkan dengan Monotracer edisi perdana pada 2007, hingga akhirnya di tahun yang sama lehir generasi selanjutnya yang lebih rama lingkungan. Monotracer menggunakan energi listrik, memiliki 4 silinder adaptasi dari sepeda motor BMW, dengan kecepatan konstan 88 km/jam.\r\n\r\nSepeda motor yang sepintas terlihat seperti mobil ini, memiliki bodi berbahan dasar carbon dan kevlar monocoque, sehingga lebih ringan dan aerodinamis.'),
('005', 'Campagna', 'T-Rex 14RR', 'Putih', 180000000, 'campagna.JPG', 'Motor futuristik ini berasal dari pabrikan Kanada, meski menggunakan mesin Kawasaki, Jepang. Campagna T-Rex 14RR merupakan tricycle yang memiliki mesin 4 silinder dengan 197 tenaga kuda. Akselerasinya cukup cepat, mampu mencapai 96 km/jam dalam 3,9 detik. Sesuai namanya, T-Rex, Campagna memiliki tampilan garang.\r\n\r\nBerkapasitas dua penumpang, memiliki sabuk pengaman, dengan kursi yang bisa diatur jarak dan sudutnya, sesuai kenyamanan penumpangnya.'),
('006', 'Minerva', 'Megelli 250 RE ', 'Merah', 32300000, 'minerva.jpg', 'Minerva Megelli adalah motor andalan Minerva. Motor berjenis sport fairing ini bisa menjadi pesaingnya Kawasaki Ninja 250 untuk pasar motor lokal 250cc di Indonesia. Motor berteknologi SOHC 4-valve 247cc berpendingin radiator air ini mampu memuntahkan tenaga hingga 27 Hp pada putaran 7.000rpm serta torsi maksimum 22 Nm (7.000rpm). Untuk sektor kaki-kaki, Megelli 250 didesain dengan cakram lebar model wave disc serta double piston untuk cakram depan dan belakang. Desain Megelli 250 boleh diacungi jempol dengan lekukan bodi runcing dan futuristik. Harga motor Minerva ini tersedia dalam 3 warna, yaitu: kuning, merah, dan hitam. Megelli 250 dibanderol dengan harga Rp.32.300.000,- untuk tipe RE dan Rp.35.300.000,- untuk tipe RV. Tergolong murah untuk motor kelas 250cc bila dibandingkan dengan Kawasaki Ninja 250 misalnya.'),
('007', 'Minerva', 'X-Road 150S', 'Merah', 15900000, 'minerva2.jpg', 'Dalam situs resminya tertulis pembeli Minerva X-Road 150S akan mendapatkan garansi hingga 3 tahun ataun 30 ribu km untuk motor ini. Motor berjenis sport touring ini tampil dengan desain yang kekar, dengan speedometer digital yang lengkap. Untuk desain bodi belakang, bentuk spakbor lebar serta undertail muffer menjadi daya tarik tersendiri pada motor berkapasitas 150cc berpendingin oli ini. \r\n\r\nUntuk sektor dapur pacu, X-Road150S mampu menghasilkan tenaga hingga 9,5Hp pada putaran 9.500rpm serta torsi maksimal 10,5 Nm pada putaran 7.000rpm. Motor yang satu ini juga termasuk salah satu produk unggulan keluaran Minerva. Bicara soal harga, Minerva X-Road 150 terbilang murah. Dengan segala fitur dan kelengkapan yang ditawarkan, X-Road 150S dibanderol dengan harga Rp.15.900.000,- OTR.'),
('008', 'Yamaha', 'GT125', 'campuran', 18000000, 'yamaha.jpg', 'Awal tahun 2014 ini pabrikan Yamaha langsung tancap gas dengan diluncurkannya motor skutik anyar mereka yaitu Yamaha GT125. Motor matic yang dipersiapkan selama satu tahun ini nampaknya menjadi produk pembuka motor Yamaha pada tahun ini. Berbagai penyempurnaan teknologi diterapkan pada motor anyar ini, diantaranya di sektor dapur pacu dan sistem pembakaran. GT125 diciptakan dengan perpaduan teknologi Yamaha Jepang dan Indonesia. Selain itu, desain Yamaha GT125 juga tak luput dari perhatian tentunya. Pada bagian batok lampu misalnya, sesuai namanya, Yamaha GT125 hadir dengan konsep Eagle Eye yang tampil dengan desain runcing khas burung elang nan futuristik. yang dilengkapi dengan reflektor lensa berwarna biru. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `pembeli_no_ktp` varchar(17) NOT NULL,
  `pembeli_nama` varchar(25) NOT NULL,
  `pembeli_alamat` varchar(60) NOT NULL,
  `pembeli_telpon` varchar(15) NOT NULL,
  `pembeli_hp` varchar(15) NOT NULL,
  PRIMARY KEY (`pembeli_no_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`pembeli_no_ktp`, `pembeli_nama`, `pembeli_alamat`, `pembeli_telpon`, `pembeli_hp`) VALUES
('', '', '', '', ''),
('098', 'uy', 'iuy', 'iuy', 'iuy'),
('1122334455667788', 'irvan', 'marbella', '077843215', '083187778'),
('12312321', 'andi', 'bengkong', '7059180', '0812121212'),
('12321', 'aasdas', 'qwde', '123123', '12312'),
('1234123123444444', 'aak', 'baloi', '077845666', '089678253787373'),
('976', '98798', '7897', '987', '987');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `username` char(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`) VALUES
('asd', 'qwe'),
('qwe', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
