-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Jul 2023 pada 07.47
-- Versi server: 5.7.33
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razen_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_penulis`
--

CREATE TABLE `akun_penulis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penulis_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun_penulis`
--

INSERT INTO `akun_penulis` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `remember_token`, `penulis_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Maria Caroline Samodra 1', 'tes_penulis_1@email.com', NULL, '$2y$10$tKBU2E0ZJOe5PXGiBdMRXu5sCnL8gzP/pEBOxn5TPP3YNRJ2yG2Ge', 'light-purple', 'default', 'vertical', 'pinned', 'fluid', 'standard', NULL, 1, '2023-06-25 19:28:26', '2023-06-26 01:10:02', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontens`
--

CREATE TABLE `kontens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penulis_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_admin` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_konten_id` bigint(20) UNSIGNED DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_judul` longtext COLLATE utf8mb4_unicode_ci,
  `deskripsi_overview` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar_mini` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontens`
--

INSERT INTO `kontens` (`id`, `penulis_id`, `is_admin`, `kategori_konten_id`, `judul`, `deskripsi_judul`, `deskripsi_overview`, `created_at`, `updated_at`, `gambar_mini`, `tgl`) VALUES
(1, 1, '0', 1, 'Contoh Back End Developer Resume dan Tips Membuatnya', 'Kamu perlu membuat back end developer resume yang keren jika kamu tertarik meniti karir di bidang ini.', '<p style=\"text-align: left;\">Apakah kamu seorang calon&nbsp;<a href=\"https://revou.co/panduan-karir/apa-itu-back-end-developer\" target=\"_blank\"><em>back end developer</em></a>&nbsp;yang ingin mendapatkan&nbsp;<em>dream job</em>-mu? Jika iya, kamu harus membuat resume yang keren, yang bisa menunjukkan<em>&nbsp;skills</em>&nbsp;dan keahlianmu!&nbsp;</p>\r\n\r\n<p>Seperti yang kamu tahu,&nbsp;<em>back end</em>&nbsp;merupakan kunci jalannya&nbsp;<em>software</em>&nbsp;apa pun, jadi penting sekali untuk menonjolkan keahlianmu di bidang ini.&nbsp;</p>\r\n\r\n<p>Yuk, pelajari contoh resume&nbsp;<em>back end developer</em>&nbsp;dan<em>&nbsp;tips</em>&nbsp;membuatnya, sehingga memaksimalkan peluangmu dilirik oleh&nbsp;<em>recruiter</em>!</p>', '2023-06-27 23:25:00', '2023-07-02 12:25:02', '649bd23c70a60-230628.png', '2023-07-02 19:25:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_berandas`
--

CREATE TABLE `landing_page_berandas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_berandas`
--

INSERT INTO `landing_page_berandas` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Belajar lebih ekstra dengan RevoUpedia!\", \"deskripsi\": \"<p><span style=\\\"color:#ffffff;\\\">Dapatkan informasi seluk-beluk profesi kekinian dan pengetahuan teknis&nbsp;<em>skill</em>&nbsp;digital, untuk kamu para calon profesional </span>🚀</p>\", \"gambar_background\": \"6490a9f4b549f-230619.png\"}', '{\"judul\": \"Mulai Belajarmu dengan Panduan Karir\", \"konten\": [{\"id\": \"6490b35947585\", \"link\": \"https://revou.co/panduan-karir/data-analyst-adalah\", \"judul\": \"Data Analyst\", \"gambar\": \"6490b3593e367-230619.png\", \"deskripsi\": \"Pahami tentang role dan cara menjadi data analyst, termasuk tugas, skills wajib, contoh CV data analyst, rekomendasi course, dan banyak lagi.\"}, {\"id\": \"6490b41736919\", \"link\": \"https://revou.co/panduan-karir/apa-itu-product-manager\", \"judul\": \"Product Manager\", \"gambar\": \"6490b41730325-230619.png\", \"deskripsi\": \"Kenali peran product manager luar dalam dari definisi, tugas, contoh CV dan portofolio, hingga daftar pertanyaan interview.\"}, {\"id\": \"6490b514ec1f1\", \"link\": \"https://revou.co/panduan-karir/apa-itu-digital-marketer\", \"judul\": \"Digital Marketer\", \"gambar\": \"6490b514e58ee-230619.png\", \"deskripsi\": \"Pelajari segala hal tentang dunia digital marketing, skills penting untuk menjadi digital marketer, cara menjadi digital marketer, contoh CV dan portofolio, dan banyak lagi.\"}], \"warna_background\": \"#000333\"}', '{\"judul\": \"Praktik Langsung dengan Panduan Teknis\", \"konten\": [{\"id\": \"6490b915113b5\", \"link\": \"https://revou.co/panduan-teknis/cara-melakukan-riset-untuk-facebook-ads-menggunakan-facebook-ad-library\", \"judul\": \"Facebook Ads\", \"gambar\": \"6490b91506282-230619.png\", \"deskripsi\": \"Panduan Facebook Ads ini mencakup semua konsep penting dalam beriklan di Facebook, seperti Business Manager, Pixel, dan lainnya.\"}, {\"id\": \"6490b9151a4a5\", \"link\": \"https://revou.co/panduan-teknis/bahasa-pemrograman\", \"judul\": \"Data Analytics\", \"gambar\": \"6490b91511699-230619.png\", \"deskripsi\": \"Panduan Data Analytics ini mencakup semua konsep penting berkaitan dengan data, termasuk SQL, visualisasi data, jenis data, dan banyak lainnya.\"}, {\"id\": \"6490b9b75e908\", \"link\": \"https://revou.co/panduan-teknis/sql-date-format\", \"judul\": \"SQL\", \"gambar\": \"6490b9b757338-230619.png\", \"deskripsi\": \"Panduan SQL ini mencakup semua konsep penting berkaitan dengan SQL, termasuk pengertian, istilah penting, dan banyak lainnya.\"}]}', '{\"judul\": \"Kuasai berbagai istilah teknologi dengan Kosakata\", \"gambar\": \"6490bb88e3c20-230619.png\", \"deskripsi\": \"<p>Temukan penjelasan yang mudah dipahami beserta contohnya disini!</p>\", \"gambar_background\": \"64a642104d97f-230706.png\"}', '2023-06-19 12:18:12', '2023-07-06 04:24:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_beritas`
--

CREATE TABLE `landing_page_beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_beritas`
--

INSERT INTO `landing_page_beritas` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Berita\", \"deskripsi\": \"Panduan Karir ini menyediakan semua informasi yang kamu butuhkan untuk bantu pahami lebih detail karir impianmu!\", \"gambar_background\": \"64a66a0e259dc-230706.png\"}', '2023-06-19 15:10:32', '2023-07-06 07:15:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_kosakatas`
--

CREATE TABLE `landing_page_kosakatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_kosakatas`
--

INSERT INTO `landing_page_kosakatas` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Kosakata\", \"deskripsi\": \"Kuasai definisi dan contoh dari istilah-istilah digital marketing, data analytics, product management, dan software engineering di sini!\", \"gambar_background\": \"64a66c4c8ca8f-230706.png\"}', '2023-06-19 19:55:53', '2023-07-06 07:25:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_panduans`
--

CREATE TABLE `landing_page_panduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_panduans`
--

INSERT INTO `landing_page_panduans` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"link\": \"https://revou.co/important-links\", \"judul\": \"Siap maksimalkan potensimu?\", \"warna\": \"#fede3e\", \"deskripsi\": \"Gabung di RevoU untuk belajar skills, asah dengan mengerjakan studi kasus, dan tingkatkan pengetahuanmu. Naik level hanya dalam 5 hari belajar bareng instruktur berpengalaman, bebas biaya, dan dapat sertifikat!\", \"judul_tombol\": \"Ikut Digital Course Gratis + Sertifikat\"}', '2023-06-20 04:13:06', '2023-06-20 04:13:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_profesis`
--

CREATE TABLE `landing_page_profesis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_profesis`
--

INSERT INTO `landing_page_profesis` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Profesi\", \"deskripsi\": \"Panduan Karir ini menyediakan semua informasi yang kamu butuhkan untuk bantu pahami lebih detail karir impianmu!\", \"gambar_background\": \"64a66b00b3771-230706.png\"}', '2023-06-19 19:15:00', '2023-07-06 07:19:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_teknis`
--

CREATE TABLE `landing_page_teknis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_teknis`
--

INSERT INTO `landing_page_teknis` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Teknis\", \"deskripsi\": \"Panduan Karir ini menyediakan semua informasi yang kamu butuhkan untuk bantu pahami lebih detail karir impianmu!\", \"gambar_background\": \"64a66be606661-230706.png\"}', '2023-06-19 19:20:57', '2023-07-06 07:23:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kategori_kontens`
--

CREATE TABLE `master_kategori_kontens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe_konten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_kategori_kontens`
--

INSERT INTO `master_kategori_kontens` (`id`, `tipe_konten`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'berita', 'News', '2023-06-24 18:53:45', '2023-06-24 18:53:45'),
(2, 'berita', 'Finance', '2023-06-24 18:54:00', '2023-06-24 18:54:00'),
(3, 'berita', 'LifeStyle', '2023-06-24 18:54:08', '2023-06-24 18:54:08'),
(4, 'berita', 'Celebrity', '2023-06-24 18:54:17', '2023-06-24 18:54:17'),
(5, 'profesi', 'Back End Developer', '2023-06-24 18:54:36', '2023-06-24 18:54:36'),
(6, 'profesi', 'Front End Developer', '2023-06-24 18:54:43', '2023-06-24 18:54:43'),
(7, 'profesi', 'Web Developer', '2023-06-24 18:54:50', '2023-06-24 18:54:50'),
(8, 'profesi', 'Software Engineer', '2023-06-24 18:56:54', '2023-06-24 18:56:54'),
(9, 'profesi', 'Programmer', '2023-06-24 18:57:03', '2023-06-24 18:57:03'),
(10, 'profesi', 'Content Creator', '2023-06-24 18:57:09', '2023-06-24 18:57:09'),
(11, 'profesi', 'Content Writer', '2023-06-24 18:57:15', '2023-06-24 18:57:15'),
(12, 'profesi', 'Business Analyst', '2023-06-24 18:57:22', '2023-06-24 18:57:22'),
(13, 'profesi', 'Data Scientist', '2023-06-24 18:57:28', '2023-06-24 18:57:28'),
(14, 'profesi', 'Data Analyst', '2023-06-24 18:57:33', '2023-06-24 18:57:33'),
(15, 'profesi', 'Project Manager', '2023-06-24 18:57:38', '2023-06-24 18:57:38'),
(16, 'profesi', 'Product Manager', '2023-06-24 18:57:43', '2023-06-24 18:57:43'),
(17, 'profesi', 'Social Media Specialist', '2023-06-24 18:57:49', '2023-06-24 18:57:49'),
(18, 'profesi', 'Digital Marketer', '2023-06-24 18:57:55', '2023-06-24 18:57:55'),
(19, 'profesi', 'SEO Specialist', '2023-06-24 18:58:00', '2023-06-24 18:58:00'),
(20, 'teknis', 'DBMS', '2023-06-24 18:59:13', '2023-06-24 18:59:13'),
(21, 'teknis', 'TikTok Ads', '2023-06-24 18:59:20', '2023-06-24 18:59:20'),
(22, 'teknis', 'Google Analytics', '2023-06-24 18:59:27', '2023-06-24 18:59:27'),
(23, 'teknis', 'YouTube Ads', '2023-06-24 18:59:39', '2023-06-24 18:59:39'),
(24, 'teknis', 'Instagram Ads', '2023-06-24 18:59:51', '2023-06-24 18:59:51'),
(25, 'teknis', 'Landing Page', '2023-06-24 18:59:57', '2023-06-24 18:59:57'),
(26, 'teknis', 'Google Ads', '2023-06-24 19:00:01', '2023-06-24 19:00:01'),
(27, 'teknis', 'Google Keyword Planner', '2023-06-24 19:00:07', '2023-06-24 19:00:07'),
(28, 'teknis', 'Google AdSense', '2023-06-24 19:00:13', '2023-06-24 19:00:13'),
(29, 'teknis', 'Visualisasi Data', '2023-06-24 19:00:18', '2023-06-24 19:00:18'),
(30, 'teknis', 'Python', '2023-06-24 19:00:29', '2023-06-24 19:00:29'),
(31, 'teknis', 'SQL', '2023-06-24 19:00:36', '2023-06-24 19:00:36'),
(32, 'teknis', 'Data Analytics', '2023-06-24 19:00:41', '2023-06-24 19:00:41'),
(33, 'teknis', 'SEO', '2023-06-24 19:00:47', '2023-06-24 19:00:47'),
(34, 'teknis', 'Facebook Ads', '2023-06-24 19:00:59', '2023-06-24 19:00:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_media_sosials`
--

CREATE TABLE `master_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_ikon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_media_sosials`
--

INSERT INTO `master_media_sosials` (`id`, `nama`, `kode_ikon`, `created_at`, `updated_at`) VALUES
(1, 'Instagram', '649190929479c-230620.png', '2023-06-20 04:42:10', '2023-06-20 04:42:10'),
(2, 'LinkedIn', '649190ba16dc7-230620.png', '2023-06-20 04:42:50', '2023-06-20 04:42:50'),
(3, 'Twitter', '649190c65b535-230620.png', '2023-06-20 04:43:02', '2023-06-20 04:43:02'),
(4, 'Tik Tok', '64919103a4590-230620.png', '2023-06-20 04:44:03', '2023-06-20 04:44:03'),
(5, 'Youtube', '6491912504dc2-230620.png', '2023-06-20 04:44:37', '2023-06-20 04:44:37'),
(6, 'Spotify', '6491917c4320c-230620.png', '2023-06-20 04:46:04', '2023-06-20 04:46:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_10_033110_create_profils_table', 1),
(6, '2023_06_10_065221_add_logo_kecil_to_profils', 2),
(7, '2023_06_19_024608_add_deskripsi_to_profils', 3),
(8, '2023_06_19_073711_create_landing_page_berandas_table', 4),
(9, '2023_06_19_220204_create_landing_page_beritas_table', 5),
(11, '2023_06_20_020943_create_landing_page_profesis_table', 6),
(12, '2023_06_20_021907_create_landing_page_teknis_table', 7),
(13, '2023_06_20_024114_create_landing_page_kosakatas_table', 8),
(14, '2023_06_20_110640_create_landing_page_panduans_table', 9),
(15, '2023_06_20_112758_create_master_media_sosials_table', 10),
(16, '2023_06_21_031819_create_pivot_profil_media_sosials_table', 11),
(22, '2023_06_25_015043_create_master_kategori_kontens_table', 12),
(23, '2023_06_25_021120_create_penulis_table', 13),
(24, '2023_06_25_021135_create_akun_penulis_table', 13),
(25, '2023_06_25_064601_add_is_active_to_akun_penulis', 14),
(26, '2023_06_26_215405_create_pivot_penulis_media_sosials_table', 15),
(27, '2023_06_26_224222_create_kontens_table', 16),
(28, '2023_06_26_224846_create_pivot_konten_terkaits_table', 16),
(29, '2023_06_26_225415_create_pivot_sub_judul_kontens_table', 16),
(30, '2023_06_27_064028_drop_sinopsi_from_kontens', 17),
(31, '2023_06_28_013521_drop_gambar_from_kontens', 18),
(32, '2023_06_28_013648_add_gambar_mini_to_kontens', 18),
(33, '2023_06_28_061613_drop_tgl_from_kontens', 19),
(34, '2023_06_28_061736_add_tgl_to_kontens', 19),
(35, '2023_06_28_062006_drop_judul_from_pivot_sub_judul_kontens', 20),
(36, '2023_06_28_062123_add_judul_to_pivot_sub_judul_kontens', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id`, `nama`, `no_hp`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Maria Caroline Samodra 1', '123456789013', '6498f7ca96764-230626.png', '2023-06-25 19:28:26', '2023-06-26 00:55:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_konten_terkaits`
--

CREATE TABLE `pivot_konten_terkaits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_konten_terkaits`
--

INSERT INTO `pivot_konten_terkaits` (`id`, `parent_id`, `child_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '2023-07-02 12:25:02', '2023-07-02 12:25:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_penulis_media_sosials`
--

CREATE TABLE `pivot_penulis_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_sosial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `penulis_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tautan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_penulis_media_sosials`
--

INSERT INTO `pivot_penulis_media_sosials` (`id`, `media_sosial_id`, `penulis_id`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '#', '2023-06-26 15:12:24', '2023-06-26 15:12:24'),
(3, 2, 1, '#', '2023-06-26 15:13:14', '2023-06-26 15:13:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_profil_media_sosials`
--

CREATE TABLE `pivot_profil_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_sosial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profil_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tautan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_profil_media_sosials`
--

INSERT INTO `pivot_profil_media_sosials` (`id`, `media_sosial_id`, `profil_id`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'https://www.instagram.com/revou_id/', '2023-06-20 20:21:41', '2023-06-20 20:21:41'),
(2, 2, 1, 'https://www.linkedin.com/school/revou/', '2023-06-20 20:24:32', '2023-06-20 20:24:32'),
(3, 3, 1, 'https://twitter.com/revoudotco', '2023-06-20 20:24:32', '2023-06-20 20:24:32'),
(4, 4, 1, 'https://www.tiktok.com/@revoudotco', '2023-06-20 20:24:32', '2023-06-20 20:24:32'),
(5, 5, 1, 'https://www.youtube.com/c/revoudotco', '2023-06-20 20:24:32', '2023-06-20 20:24:32'),
(6, 6, 1, 'https://open.spotify.com/show/1T7wA2tbMfXgLUMQpO0wdQ?si=7616c8c4ef644ea6', '2023-06-20 20:24:32', '2023-06-20 20:24:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_sub_judul_kontens`
--

CREATE TABLE `pivot_sub_judul_kontens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_sub_judul_kontens`
--

INSERT INTO `pivot_sub_judul_kontens` (`id`, `konten_id`, `deskripsi`, `created_at`, `updated_at`, `judul`) VALUES
(1, 1, '<p>Berikut ini adalah alasan pentingnya membuat&nbsp;<em>back end developer resume</em>:</p>\r\n\r\n<h3><strong>#1 Membuat kesan pertama yang baik</strong></h3>\r\n\r\n<p>Seringnya, resume yang kamu buat merupakan kesan pertama bagi perekrut kerja. Karena itu, resume yang kuat bisa membuatmu lebih menonjol dibandingkan dengan pelamar kerja lainnya, sehingga dapat meningkatkan peluangmu untuk mendapatkan&nbsp;<em>interview</em>.</p>\r\n\r\n<h3><strong>#2 Menunjukkan skills relevan&nbsp;</strong></h3>\r\n\r\n<p><em>Back end development&nbsp;</em>adalah dasar dari aplikasi&nbsp;<em>software</em>&nbsp;apapun, dan<em>&nbsp;back end developer&nbsp;</em>yang terampil sangat dibutuhkan untuk keberhasilan&nbsp;<em>project</em>. Karena itu, resume yang dibuat dengan baik dapat menunjukkan keahlianmu di berbagai skills&nbsp;<em>back end&nbsp;</em>seperti bahasa pemrograman sisi&nbsp;<a href=\"https://revou.co/kosakata/server\" target=\"_blank\"><em>server</em></a>, manajemen&nbsp;<a href=\"https://revou.co/kosakata/database\" target=\"_blank\">database</a>, dan integrasi API.</p>\r\n\r\n<h3><strong>#3 Menonjol di&nbsp;<em>job market</em></strong></h3>\r\n\r\n<p>Selalu ada kandidat lain yang berjuang meraih karir impianmu, sehingga kamu harus semaksimal mungkin menonjol diri di antara mereka. Buatlah resume yang memuat hal-hal krusial terkait keterampilan dan pengalamanmu. Lebih baik lagi jika kamu punya sertifikasi khusus yang memvalidasi kemampuanmu dalam bidang&nbsp;<a href=\"https://revou.co/kosakata/backend\" target=\"_blank\"><em>back end</em></a><em>&nbsp;development.</em></p>\r\n\r\n<h3><strong>#4 Menyorot pencapaian</strong>&nbsp;</h3>\r\n\r\n<p>Resume adalah cara yang bagus untuk meng-<em>highlight</em>&nbsp;pencapaian dan kontribusimu pada proyek-proyek yang pernah kamu kerjakan sebelumnya. Hal ini dapat menunjukkan&nbsp;<em>value&nbsp;</em>kamu sebagai<em>&nbsp;back end developer</em>&nbsp;kepada&nbsp;<em>recruiter</em>.</p>', '2023-06-27 23:25:00', '2023-06-29 01:46:25', 'Mengapa Back End Developer Resume Penting?'),
(3, 1, '<p>Mengutip dari Indeed.com, berikut ini adalah beberapa komponen penting yang perlu kamu cantumkan dalam&nbsp;<em>back end developer resume</em>:&nbsp;</p>\r\n\r\n<h3><strong>#1 Header</strong></h3>\r\n\r\n<p><em>Header</em>&nbsp;adalah hal pertama yang akan dilihat calon pemberi kerja, jadi penting untuk membuatnya.&nbsp;<em>Header</em>&nbsp;yang dibuat harus menyertakan nama kamu, informasi kontak, dan&nbsp;<em>link</em>&nbsp;ke portofolio atau profil LinkedIn kamu.&nbsp;</p>\r\n\r\n<p>Pastikan namamu mudah dibaca dan sertakan alamat&nbsp;<em>e-mail</em>&nbsp;serta nomor telepon yang aktif&nbsp;</p>\r\n\r\n<h3><strong>#2 Profil diri</strong></h3>\r\n\r\n<p>Profil diri adalah pernyataan singkat profesional yang dapat memberi perekrut kerja gambaran tentang siapa kamu dan apa yang dapat kamu tawarkan ke<em>&nbsp;</em>perusahaan.&nbsp;</p>\r\n\r\n<p>Ringkasan ini harus spesifik dan disesuaikan dengan pekerjaan yang kamu lamar, serta dapat&nbsp; menyorot pengalaman dan keterampilan kamu yang relevan. Dengan demikian,&nbsp;<em>recruiter&nbsp;</em>dapat semakin yakin dengan kemampuanmu.&nbsp;</p>\r\n\r\n<h3><strong>#3 Pengalaman kerja</strong></h3>\r\n\r\n<p>Kamu perlu menyertakan riwayat pekerjaanmu sebelumnya, dimulai dengan posisi terakhirmu. Pada bagian ini, kamu harus menyertakan jabatan, nama perusahaan, dan masa kerjamu agar lebih mudah&nbsp;<em>di-crosscheck</em>.&nbsp;</p>\r\n\r\n<p>Selain itu, kamu juga perlu memberikan deskripsi singkat tentang tanggung jawab dan pencapaian kamu untuk menunjukkan kontribusimu terhadap perusahaan.&nbsp;</p>\r\n\r\n<p>Fokuslah untuk menuliskan pengalamanmu dalam&nbsp;<em>back end development</em>&nbsp;dan peranmu dalam membangun dan memelihara aplikasi&nbsp;<em>software</em>.</p>\r\n\r\n<h3><strong>#4&nbsp;<em>Skills</em>&nbsp;yang relevan</strong></h3>\r\n\r\n<p>Pada bagian ini, kamu perlu mencantumkan keterampilan yang relevan dengan pekerjaan yang kamu lamar.<em>&nbsp;Skills</em>&nbsp;ini dapat mencakup&nbsp;<a href=\"https://revou.co/panduan-teknis/bahasa-pemrograman\" target=\"_blank\">bahasa pemrograman</a>,<em>&nbsp;</em><a href=\"https://revou.co/kosakata/framework\" target=\"_blank\"><em>framework</em></a>, atau&nbsp;<em>tools back end</em>&nbsp;yang kamu kuasai, misal untuk manajemen&nbsp;<em>database</em>&nbsp;atau integrasi API.&nbsp;</p>\r\n\r\n<p>Gunakan poin-poin untuk membuat bagian ini mudah dibaca.</p>\r\n\r\n<h3><strong>#5 Pendidikan</strong></h3>\r\n\r\n<p>Dalam resumemu, kamu juga perlu mencantumkan latar belakang pendidikanmu, seperti nama universitas atau badan pendidikan tempat kamu belajar, gelar yang kamu punya, dan tanggal kelulusannya.&nbsp;</p>\r\n\r\n<p>Terlebih, jika kamu memiliki gelar yang relevan seperti gelar ilmu komputer, pastikan untuk menyorotnya di sini. Selain itu, di bagian ini, kamu juga dapat memasukkan proyek terkait&nbsp;<em>back end development</em>&nbsp;yang pernah kamu kerjakan selama studi kamu.</p>\r\n\r\n<h3><strong>#6 Sertifikasi</strong></h3>\r\n\r\n<p>Jika kamu memiliki sertifikasi yang relevan seperti bahasa pemrograman, tuliskanlah di bagian ini. Sertifikasi yang kamu peroleh dapat membantu menunjukkan<em>&nbsp;skills</em>&nbsp;kamu di bidang&nbsp;<em>back end development&nbsp;</em>dan membuat kamu menonjol dari kandidat lainnya.&nbsp;</p>\r\n\r\n<p>Sertakan nama sertifikasi, organisasi yang menerbitkan sertifikat, dan tanggal kamu menerimanya.</p>', '2023-06-29 01:47:12', '2023-06-29 01:47:12', 'Komponen Penting Back End Developer Resume');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo_kecil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `nama`, `pt`, `no_hp`, `email`, `logo`, `alamat`, `created_at`, `updated_at`, `logo_kecil`, `deskripsi`) VALUES
(1, 'Razen Teknologi', 'PT Razen Teknologi Indonesia', '082299449494', 'hello@razen.co.id', '642b9aa063e73-230404.png', 'Yogyakarta', NULL, '2023-06-18 19:54:31', '6453110958d3f-230504.png', 'Razen Blog');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Razen Teknologi', 'razen_blog@razen.co.id', NULL, '$2y$10$vUlaHLsUBySNV17OB4bA0OgYjwnU1ThdLwFcLlbghO900K8Jz.1f.', 'dark-blue', 'default', 'vertical', 'pinned', 'fluid', 'standard', NULL, NULL, '2023-07-06 07:15:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_penulis`
--
ALTER TABLE `akun_penulis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akun_penulis_email_unique` (`email`),
  ADD KEY `akun_penulis_penulis_id_foreign` (`penulis_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kontens`
--
ALTER TABLE `kontens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kontens_penulis_id_foreign` (`penulis_id`),
  ADD KEY `kontens_kategori_konten_id_foreign` (`kategori_konten_id`);

--
-- Indeks untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_beritas`
--
ALTER TABLE `landing_page_beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_kosakatas`
--
ALTER TABLE `landing_page_kosakatas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_panduans`
--
ALTER TABLE `landing_page_panduans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_profesis`
--
ALTER TABLE `landing_page_profesis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_teknis`
--
ALTER TABLE `landing_page_teknis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kategori_kontens`
--
ALTER TABLE `master_kategori_kontens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pivot_konten_terkaits`
--
ALTER TABLE `pivot_konten_terkaits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_konten_terkaits_parent_id_foreign` (`parent_id`),
  ADD KEY `pivot_konten_terkaits_child_id_foreign` (`child_id`);

--
-- Indeks untuk tabel `pivot_penulis_media_sosials`
--
ALTER TABLE `pivot_penulis_media_sosials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_penulis_media_sosials_media_sosial_id_foreign` (`media_sosial_id`),
  ADD KEY `pivot_penulis_media_sosials_penulis_id_foreign` (`penulis_id`);

--
-- Indeks untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_profil_media_sosials_media_sosial_id_foreign` (`media_sosial_id`),
  ADD KEY `pivot_profil_media_sosials_profil_id_foreign` (`profil_id`);

--
-- Indeks untuk tabel `pivot_sub_judul_kontens`
--
ALTER TABLE `pivot_sub_judul_kontens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_sub_judul_kontens_konten_id_foreign` (`konten_id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun_penulis`
--
ALTER TABLE `akun_penulis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontens`
--
ALTER TABLE `kontens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_beritas`
--
ALTER TABLE `landing_page_beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_kosakatas`
--
ALTER TABLE `landing_page_kosakatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_panduans`
--
ALTER TABLE `landing_page_panduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_profesis`
--
ALTER TABLE `landing_page_profesis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_teknis`
--
ALTER TABLE `landing_page_teknis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_kategori_kontens`
--
ALTER TABLE `master_kategori_kontens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pivot_konten_terkaits`
--
ALTER TABLE `pivot_konten_terkaits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pivot_penulis_media_sosials`
--
ALTER TABLE `pivot_penulis_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pivot_sub_judul_kontens`
--
ALTER TABLE `pivot_sub_judul_kontens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun_penulis`
--
ALTER TABLE `akun_penulis`
  ADD CONSTRAINT `akun_penulis_penulis_id_foreign` FOREIGN KEY (`penulis_id`) REFERENCES `penulis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kontens`
--
ALTER TABLE `kontens`
  ADD CONSTRAINT `kontens_kategori_konten_id_foreign` FOREIGN KEY (`kategori_konten_id`) REFERENCES `master_kategori_kontens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kontens_penulis_id_foreign` FOREIGN KEY (`penulis_id`) REFERENCES `penulis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_konten_terkaits`
--
ALTER TABLE `pivot_konten_terkaits`
  ADD CONSTRAINT `pivot_konten_terkaits_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `kontens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_konten_terkaits_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `kontens` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_penulis_media_sosials`
--
ALTER TABLE `pivot_penulis_media_sosials`
  ADD CONSTRAINT `pivot_penulis_media_sosials_media_sosial_id_foreign` FOREIGN KEY (`media_sosial_id`) REFERENCES `master_media_sosials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_penulis_media_sosials_penulis_id_foreign` FOREIGN KEY (`penulis_id`) REFERENCES `penulis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD CONSTRAINT `pivot_profil_media_sosials_media_sosial_id_foreign` FOREIGN KEY (`media_sosial_id`) REFERENCES `master_media_sosials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_profil_media_sosials_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_sub_judul_kontens`
--
ALTER TABLE `pivot_sub_judul_kontens`
  ADD CONSTRAINT `pivot_sub_judul_kontens_konten_id_foreign` FOREIGN KEY (`konten_id`) REFERENCES `kontens` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
