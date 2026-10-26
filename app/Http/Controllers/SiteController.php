<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function about()
    {
        return view('public.about');
    }

    public function features()
    {
        return view('public.features');
    }


    /* =====================================================
    FEATURE DETAIL
    ===================================================== */

    public function featureDetail($slug)
    {
        $features = [

            'dashboard' => [
                'name' => 'Dashboard',
                'title' => 'Pantau Bisnis dalam Satu Tampilan',
                'description' => 'Pantau ringkasan informasi penting bisnis melalui dashboard yang informatif, ringkas, dan mudah dipahami.',
                'image' => 'ft-1.webp',
                'icon' => 'bi-house-door-fill',
                'color' => 'orange',

                'bullets' => [
                    'Ringkasan keuangan real-time',
                    'Grafik dan laporan interaktif',
                    'Akses cepat ke fitur utama',
                    'Notifikasi aktivitas penting',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-pie-chart-fill',
                        'title' => 'Ringkasan Bisnis',
                        'text' => 'Lihat informasi utama bisnis dalam satu tampilan.',
                    ],
                    [
                        'icon' => 'bi-bar-chart-fill',
                        'title' => 'Grafik Pendapatan',
                        'text' => 'Pantau perkembangan pendapatan secara visual.',
                    ],
                    [
                        'icon' => 'bi-receipt',
                        'title' => 'Transaksi Terbaru',
                        'text' => 'Lihat aktivitas transaksi terbaru dengan cepat.',
                    ],
                    [
                        'icon' => 'bi-bell-fill',
                        'title' => 'Notifikasi',
                        'text' => 'Dapatkan informasi aktivitas penting bisnis.',
                    ],
                ],
            ],


            'buku-besar' => [
                'name' => 'Buku Besar',
                'title' => 'Pencatatan Keuangan Lebih Terstruktur',
                'description' => 'Kelola akun, jurnal, dan histori transaksi bisnis secara lebih terstruktur dalam satu sistem.',
                'image' => 'ft-2.webp',
                'icon' => 'bi-journal-bookmark-fill',
                'color' => 'blue',

                'bullets' => [
                    'Kelola akun perkiraan',
                    'Pencatatan jurnal umum',
                    'Pantau histori transaksi',
                    'Informasi saldo lebih terstruktur',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-list-ul',
                        'title' => 'Akun Perkiraan',
                        'text' => 'Kelola daftar akun perusahaan.',
                    ],
                    [
                        'icon' => 'bi-journal-text',
                        'title' => 'Jurnal Umum',
                        'text' => 'Catat transaksi jurnal perusahaan.',
                    ],
                    [
                        'icon' => 'bi-clock-history',
                        'title' => 'Histori Akun',
                        'text' => 'Pantau riwayat transaksi setiap akun.',
                    ],
                    [
                        'icon' => 'bi-activity',
                        'title' => 'Aktivitas Jurnal',
                        'text' => 'Lihat aktivitas pencatatan jurnal.',
                    ],
                ],
            ],


            'kas-bank' => [
                'name' => 'Kas & Bank',
                'title' => 'Kelola Arus Kas dengan Lebih Mudah',
                'description' => 'Kelola transaksi kas dan rekening bank perusahaan secara lebih teratur dan terintegrasi.',
                'image' => 'ft-3.webp',
                'icon' => 'bi-wallet-fill',
                'color' => 'green',

                'bullets' => [
                    'Pantau kas dan rekening bank',
                    'Catat penerimaan dan pembayaran',
                    'Transfer antar rekening',
                    'Rekonsiliasi transaksi bank',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-arrow-up-right-circle',
                        'title' => 'Pembayaran',
                        'text' => 'Kelola transaksi pembayaran perusahaan.',
                    ],
                    [
                        'icon' => 'bi-arrow-down-left-circle',
                        'title' => 'Penerimaan',
                        'text' => 'Catat penerimaan dana bisnis.',
                    ],
                    [
                        'icon' => 'bi-arrow-left-right',
                        'title' => 'Transfer Bank',
                        'text' => 'Kelola transfer dana antar rekening.',
                    ],
                    [
                        'icon' => 'bi-clock-history',
                        'title' => 'Histori Bank',
                        'text' => 'Lihat riwayat transaksi rekening bank.',
                    ],
                    [
                        'icon' => 'bi-check-circle',
                        'title' => 'Rekonsiliasi Bank',
                        'text' => 'Cocokkan transaksi dengan data rekening.',
                    ],
                ],
            ],


            'persediaan' => [
                'name' => 'Persediaan',
                'title' => 'Pantau Persediaan Secara Real-time',
                'description' => 'Kelola barang, stok, gudang, dan pergerakan persediaan dalam satu sistem.',
                'image' => 'ft-4.webp',
                'icon' => 'bi-box-seam-fill',
                'color' => 'yellow',

                'bullets' => [
                    'Pantau stok barang',
                    'Kelola gudang',
                    'Catat pergerakan barang',
                    'Pantau stok minimum',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-box',
                        'title' => 'Barang & Jasa',
                        'text' => 'Kelola data barang dan jasa perusahaan.',
                    ],
                    [
                        'icon' => 'bi-building',
                        'title' => 'Gudang',
                        'text' => 'Kelola lokasi penyimpanan persediaan.',
                    ],
                    [
                        'icon' => 'bi-arrow-left-right',
                        'title' => 'Pemindahan Barang',
                        'text' => 'Kelola perpindahan barang antar lokasi.',
                    ],
                    [
                        'icon' => 'bi-clipboard-check',
                        'title' => 'Stok Opname',
                        'text' => 'Lakukan pengecekan stok aktual.',
                    ],
                ],
            ],


            'pembelian' => [
                'name' => 'Pembelian',
                'title' => 'Kelola Proses Pembelian Lebih Terstruktur',
                'description' => 'Kelola proses pembelian mulai dari pemasok, pesanan, penerimaan barang hingga pembayaran.',
                'image' => 'ft-5.webp',
                'icon' => 'bi-cart-fill',
                'color' => 'purple',

                'bullets' => [
                    'Kelola informasi pemasok',
                    'Pantau pesanan pembelian',
                    'Catat penerimaan barang',
                    'Kelola faktur dan pembayaran',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-person-badge',
                        'title' => 'Pemasok',
                        'text' => 'Kelola informasi pemasok bisnis.',
                    ],
                    [
                        'icon' => 'bi-cart-check',
                        'title' => 'Pesanan Pembelian',
                        'text' => 'Kelola pesanan kepada pemasok.',
                    ],
                    [
                        'icon' => 'bi-box-arrow-in-down',
                        'title' => 'Penerimaan Barang',
                        'text' => 'Catat barang yang diterima perusahaan.',
                    ],
                    [
                        'icon' => 'bi-file-earmark-text',
                        'title' => 'Faktur Pembelian',
                        'text' => 'Kelola faktur transaksi pembelian.',
                    ],
                    [
                        'icon' => 'bi-credit-card',
                        'title' => 'Pembayaran',
                        'text' => 'Pantau pembayaran kepada pemasok.',
                    ],
                    [
                        'icon' => 'bi-arrow-return-left',
                        'title' => 'Retur Pembelian',
                        'text' => 'Kelola pengembalian barang pembelian.',
                    ],
                ],
            ],


            'penjualan' => [
                'name' => 'Penjualan',
                'title' => 'Kelola Penjualan dalam Satu Sistem',
                'description' => 'Kelola pelanggan, pesanan, pengiriman, faktur, dan penerimaan pembayaran dalam satu sistem.',
                'image' => 'ft-6.webp',
                'icon' => 'bi-tag-fill',
                'color' => 'red',

                'bullets' => [
                    'Kelola data pelanggan',
                    'Pantau pesanan penjualan',
                    'Kelola faktur',
                    'Pantau pembayaran pelanggan',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-people',
                        'title' => 'Pelanggan',
                        'text' => 'Kelola informasi pelanggan.',
                    ],
                    [
                        'icon' => 'bi-cart-check',
                        'title' => 'Pesanan Penjualan',
                        'text' => 'Kelola pesanan dari pelanggan.',
                    ],
                    [
                        'icon' => 'bi-truck',
                        'title' => 'Pengiriman',
                        'text' => 'Pantau proses pengiriman pesanan.',
                    ],
                    [
                        'icon' => 'bi-receipt',
                        'title' => 'Faktur Penjualan',
                        'text' => 'Kelola faktur transaksi penjualan.',
                    ],
                    [
                        'icon' => 'bi-cash-coin',
                        'title' => 'Penerimaan',
                        'text' => 'Catat pembayaran dari pelanggan.',
                    ],
                    [
                        'icon' => 'bi-arrow-return-left',
                        'title' => 'Retur Penjualan',
                        'text' => 'Kelola retur transaksi penjualan.',
                    ],
                ],
            ],


            'aset-tetap' => [
                'name' => 'Aset Tetap',
                'title' => 'Kelola Aset Perusahaan dengan Lebih Rapi',
                'description' => 'Kelola aset tetap, nilai perolehan, penyusutan, perubahan, dan lokasi aset perusahaan.',
                'image' => 'ft-7.webp',
                'icon' => 'bi-building-fill',
                'color' => 'blue',

                'bullets' => [
                    'Kelola informasi aset',
                    'Pantau nilai dan penyusutan',
                    'Kelola lokasi aset',
                    'Catat perubahan aset',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-tags',
                        'title' => 'Kategori Aset',
                        'text' => 'Kelompokkan aset berdasarkan kategori.',
                    ],
                    [
                        'icon' => 'bi-building',
                        'title' => 'Aset Tetap',
                        'text' => 'Kelola seluruh data aset perusahaan.',
                    ],
                    [
                        'icon' => 'bi-graph-down',
                        'title' => 'Penyusutan',
                        'text' => 'Pantau nilai penyusutan aset.',
                    ],
                    [
                        'icon' => 'bi-geo-alt',
                        'title' => 'Lokasi Aset',
                        'text' => 'Pantau aset berdasarkan lokasi.',
                    ],
                ],
            ],


            'manajemen-perusahaan' => [
                'name' => 'Manajemen Perusahaan',
                'title' => 'Kelola Operasional Perusahaan Lebih Efisien',
                'description' => 'Kelola profil, pengguna, hak akses, serta berbagai kebutuhan administrasi perusahaan.',
                'image' => 'ft-8.webp',
                'icon' => 'bi-people-fill',
                'color' => 'violet',

                'bullets' => [
                    'Kelola profil perusahaan',
                    'Kelola pengguna',
                    'Atur hak akses',
                    'Pengaturan bisnis lebih fleksibel',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-building',
                        'title' => 'Profil Perusahaan',
                        'text' => 'Kelola informasi perusahaan.',
                    ],
                    [
                        'icon' => 'bi-people',
                        'title' => 'Pengguna',
                        'text' => 'Kelola pengguna sistem.',
                    ],
                    [
                        'icon' => 'bi-shield-check',
                        'title' => 'Hak Akses',
                        'text' => 'Atur role dan permission pengguna.',
                    ],
                    [
                        'icon' => 'bi-gear-fill',
                        'title' => 'Pengaturan',
                        'text' => 'Sesuaikan pengaturan bisnis.',
                    ],
                ],
            ],


            'laporan' => [
                'name' => 'Laporan',
                'title' => 'Informasi Bisnis dalam Laporan yang Lengkap',
                'description' => 'Akses berbagai laporan bisnis untuk membantu proses evaluasi dan pengambilan keputusan.',
                'image' => 'ft-9.webp',
                'icon' => 'bi-bar-chart-fill',
                'color' => 'green',

                'bullets' => [
                    'Laporan keuangan terstruktur',
                    'Laporan penjualan',
                    'Informasi utang dan piutang',
                    'Laporan persediaan',
                ],

                'modules' => [
                    [
                        'icon' => 'bi-graph-up',
                        'title' => 'Laporan Keuangan',
                        'text' => 'Pantau kondisi keuangan perusahaan.',
                    ],
                    [
                        'icon' => 'bi-cart3',
                        'title' => 'Laporan Penjualan',
                        'text' => 'Evaluasi aktivitas penjualan.',
                    ],
                    [
                        'icon' => 'bi-wallet2',
                        'title' => 'Laporan Utang',
                        'text' => 'Pantau kewajiban bisnis.',
                    ],
                    [
                        'icon' => 'bi-cash-stack',
                        'title' => 'Laporan Piutang',
                        'text' => 'Pantau piutang pelanggan.',
                    ],
                    [
                        'icon' => 'bi-box-seam',
                        'title' => 'Laporan Persediaan',
                        'text' => 'Pantau kondisi persediaan.',
                    ],
                    [
                        'icon' => 'bi-journal-text',
                        'title' => 'Laporan Buku Besar',
                        'text' => 'Lihat informasi buku besar.',
                    ],
                ],
            ],

        ];


        if (!isset($features[$slug])) {
            abort(404);
        }


        $feature = $features[$slug];


        $relatedFeatures = collect($features)
            ->except($slug)
            ->take(4)
            ->all();


        return view('public.feature-detail', [
            'feature' => $feature,
            'relatedFeatures' => $relatedFeatures,
            'slug' => $slug,
        ]);
    }


    public function pricing()
    {
        return view('public.pricing');
    }

    public function portfolio()
    {
        return view('public.portfolio');
    }

    public function blog()
    {
        return view('public.blog');
    }


    /* =====================================================
       BLOG DETAIL
    ===================================================== */

    public function blogDetail($slug)
    {
        $articles = [

            '5-tips-mengelola-keuangan-bisnis-di-era-digital' => [
                'title' => '5 Tips Mengelola Keuangan Bisnis di Era Digital',
                'category' => 'Akuntansi',
                'date' => '12 Apr 2024',
                'views' => '1.2K',
                'image' => 'artikel 1.png',
                'excerpt' => 'Pelajari insight praktis untuk membantu bisnis berkembang lebih terstruktur di era digital.',

                'content' => [
                    [
                        'heading' => 'Pentingnya Mengelola Keuangan Bisnis',
                        'text' => 'Pengelolaan keuangan yang baik membantu pemilik bisnis memahami kondisi keuangan perusahaan, mengontrol arus kas, dan mengambil keputusan dengan lebih tepat.'
                    ],
                    [
                        'heading' => '1. Pisahkan Keuangan Pribadi dan Bisnis',
                        'text' => 'Gunakan rekening yang berbeda untuk kebutuhan pribadi dan aktivitas bisnis agar pencatatan transaksi menjadi lebih jelas dan terstruktur.'
                    ],
                    [
                        'heading' => '2. Catat Setiap Transaksi',
                        'text' => 'Pastikan setiap pemasukan dan pengeluaran dicatat secara rutin sehingga laporan keuangan dapat memberikan informasi yang akurat.'
                    ],
                    [
                        'heading' => '3. Pantau Arus Kas',
                        'text' => 'Pantau pergerakan uang masuk dan keluar untuk memastikan bisnis memiliki dana yang cukup untuk menjalankan operasional.'
                    ],
                    [
                        'heading' => '4. Buat Anggaran Bisnis',
                        'text' => 'Anggaran membantu bisnis menentukan prioritas pengeluaran dan merencanakan penggunaan dana dengan lebih efektif.'
                    ],
                    [
                        'heading' => '5. Gunakan Sistem Pembukuan Digital',
                        'text' => 'Pemanfaatan sistem pembukuan digital dapat membantu proses pencatatan menjadi lebih cepat, rapi, dan mudah dipantau.'
                    ],
                ],
            ],


            'cara-meningkatkan-cash-flow-untuk-pertumbuhan-bisnis' => [
                'title' => 'Cara Meningkatkan Cash Flow untuk Pertumbuhan Bisnis',
                'category' => 'Keuangan',
                'date' => '12 Apr 2024',
                'views' => '1.2K',
                'image' => 'artikel 2.png',
                'excerpt' => 'Pelajari strategi efektif untuk menjaga arus kas bisnis tetap sehat dan mendukung pertumbuhan bisnis.',

                'content' => [
                    [
                        'heading' => 'Memahami Pentingnya Cash Flow',
                        'text' => 'Cash flow menunjukkan pergerakan uang yang masuk dan keluar dari bisnis dalam suatu periode. Arus kas yang sehat membantu perusahaan menjaga kelancaran operasional, memenuhi kewajiban, dan menyediakan dana yang cukup untuk mendukung rencana pertumbuhan.'
                    ],
                    [
                        'heading' => 'Pantau Arus Kas Secara Berkala',
                        'text' => 'Lakukan pencatatan dan evaluasi terhadap seluruh pemasukan serta pengeluaran secara rutin. Pemantauan yang konsisten membantu bisnis mengetahui posisi kas saat ini dan mendeteksi lebih awal apabila terjadi ketidakseimbangan antara penerimaan dan pengeluaran.'
                    ],
                    [
                        'heading' => 'Percepat Proses Penagihan',
                        'text' => 'Pastikan invoice dikirim kepada pelanggan tepat waktu dan memiliki informasi jatuh tempo yang jelas. Lakukan pemantauan terhadap pembayaran yang belum diterima agar piutang tidak menumpuk dan dana dapat kembali digunakan untuk kegiatan operasional.'
                    ],
                    [
                        'heading' => 'Kelola Pengeluaran dengan Bijak',
                        'text' => 'Evaluasi setiap pengeluaran dan prioritaskan biaya yang benar-benar mendukung aktivitas utama bisnis. Pengeluaran yang kurang memberikan manfaat dapat dikurangi sehingga dana dapat dialokasikan untuk kebutuhan yang memiliki dampak lebih besar terhadap perkembangan usaha.'
                    ],
                    [
                        'heading' => 'Kelola Persediaan Secara Efisien',
                        'text' => 'Persediaan yang terlalu banyak dapat menyebabkan dana bisnis tertahan dalam stok. Pantau jumlah barang dan pola penjualan agar pembelian persediaan dapat disesuaikan dengan kebutuhan sehingga penggunaan modal kerja menjadi lebih efisien.'
                    ],
                    [
                        'heading' => 'Buat Proyeksi Arus Kas',
                        'text' => 'Susun perkiraan penerimaan dan pengeluaran untuk beberapa periode ke depan. Proyeksi arus kas membantu bisnis mengantisipasi kebutuhan dana, mempersiapkan pembayaran kewajiban, serta menentukan waktu yang tepat untuk melakukan investasi atau ekspansi.'
                    ],
                ],
            ],


            'panduan-lengkap-lapor-pajak-untuk-umkm-2024' => [
                'title' => 'Panduan Lengkap Lapor Pajak untuk UMKM di 2024',
                'category' => 'Pajak',
                'date' => '10 Apr 2024',
                'views' => '950',
                'image' => 'artikel 3.png',
                'excerpt' => 'Pelajari langkah praktis pelaporan pajak untuk membantu UMKM memenuhi kewajiban perpajakan.',

                'content' => [
                    [
                        'heading' => 'Pentingnya Administrasi Pajak bagi UMKM',
                        'text' => 'Pengelolaan pajak merupakan bagian penting dalam administrasi usaha. Pencatatan yang tertib membantu pemilik UMKM memahami aktivitas bisnis, mempersiapkan dokumen yang diperlukan, serta menjalankan kewajiban perpajakan secara lebih terorganisir.'
                    ],
                    [
                        'heading' => 'Siapkan Data dan Catatan Keuangan',
                        'text' => 'Pastikan seluruh transaksi pemasukan dan pengeluaran telah tercatat dengan baik. Data penjualan, pembelian, biaya operasional, dan informasi keuangan lainnya menjadi dasar penting dalam mempersiapkan proses administrasi dan pelaporan pajak.'
                    ],
                    [
                        'heading' => 'Pisahkan Transaksi Pribadi dan Usaha',
                        'text' => 'Gunakan pencatatan yang berbeda antara transaksi pribadi dan transaksi bisnis. Pemisahan ini membantu membuat informasi keuangan lebih jelas dan mengurangi kemungkinan kesalahan ketika data dibutuhkan untuk proses administrasi usaha.'
                    ],
                    [
                        'heading' => 'Lengkapi Dokumen Pendukung',
                        'text' => 'Simpan dokumen seperti invoice, nota pembelian, bukti pembayaran, dan dokumen transaksi lainnya secara teratur. Dokumen yang tersusun dengan baik akan mempermudah proses pengecekan dan pencocokan dengan catatan keuangan perusahaan.'
                    ],
                    [
                        'heading' => 'Periksa Kembali Data Sebelum Pelaporan',
                        'text' => 'Sebelum melakukan pelaporan, lakukan pemeriksaan kembali terhadap informasi yang telah disiapkan. Pastikan data transaksi, dokumen pendukung, serta informasi usaha telah sesuai agar proses administrasi dapat dilakukan dengan lebih tertib.'
                    ],
                    [
                        'heading' => 'Gunakan Sistem Pencatatan yang Terstruktur',
                        'text' => 'Sistem pencatatan digital dapat membantu UMKM menyimpan dan mengelola data transaksi secara lebih teratur. Dengan informasi yang tersusun dengan baik, pemilik usaha dapat lebih mudah mencari data ketika dibutuhkan untuk evaluasi maupun administrasi.'
                    ],
                ],
            ],


            'strategi-mengembangkan-bisnis-di-tengah-persaingan' => [
                'title' => '7 Strategi Mengembangkan Bisnis di Tengah Persaingan',
                'category' => 'Tips Bisnis',
                'date' => '08 Apr 2024',
                'views' => '870',
                'image' => 'artikel 4.png',
                'excerpt' => 'Temukan strategi yang dapat membantu bisnis tetap berkembang di tengah persaingan.',

                'content' => [
                    [
                        'heading' => 'Pentingnya Administrasi Pajak bagi UMKM',
                        'text' => 'Pengelolaan pajak merupakan bagian penting dalam administrasi usaha. Pencatatan yang tertib membantu pemilik UMKM memahami aktivitas bisnis, mempersiapkan dokumen yang diperlukan, serta menjalankan kewajiban perpajakan secara lebih terorganisir.'
                    ],
                    [
                        'heading' => 'Siapkan Data dan Catatan Keuangan',
                        'text' => 'Pastikan seluruh transaksi pemasukan dan pengeluaran telah tercatat dengan baik. Data penjualan, pembelian, biaya operasional, dan informasi keuangan lainnya menjadi dasar penting dalam mempersiapkan proses administrasi dan pelaporan pajak.'
                    ],
                    [
                        'heading' => 'Pisahkan Transaksi Pribadi dan Usaha',
                        'text' => 'Gunakan pencatatan yang berbeda antara transaksi pribadi dan transaksi bisnis. Pemisahan ini membantu membuat informasi keuangan lebih jelas dan mengurangi kemungkinan kesalahan ketika data dibutuhkan untuk proses administrasi usaha.'
                    ],
                    [
                        'heading' => 'Lengkapi Dokumen Pendukung',
                        'text' => 'Simpan dokumen seperti invoice, nota pembelian, bukti pembayaran, dan dokumen transaksi lainnya secara teratur. Dokumen yang tersusun dengan baik akan mempermudah proses pengecekan dan pencocokan dengan catatan keuangan perusahaan.'
                    ],
                    [
                        'heading' => 'Periksa Kembali Data Sebelum Pelaporan',
                        'text' => 'Sebelum melakukan pelaporan, lakukan pemeriksaan kembali terhadap informasi yang telah disiapkan. Pastikan data transaksi, dokumen pendukung, serta informasi usaha telah sesuai agar proses administrasi dapat dilakukan dengan lebih tertib.'
                    ],
                    [
                        'heading' => 'Gunakan Sistem Pencatatan yang Terstruktur',
                        'text' => 'Sistem pencatatan digital dapat membantu UMKM menyimpan dan mengelola data transaksi secara lebih teratur. Dengan informasi yang tersusun dengan baik, pemilik usaha dapat lebih mudah mencari data ketika dibutuhkan untuk evaluasi maupun administrasi.'
                    ],
                ],
            ],


            'mengenal-fitur-akunta-yang-memudahkan-bisnis' => [
                'title' => 'Mengenal Fitur Akunta yang Memudahkan Bisnis Anda',
                'category' => 'Produk',
                'date' => '06 Apr 2024',
                'views' => '825',
                'image' => 'artikel 5.png',
                'excerpt' => 'Kenali berbagai fitur Akunta yang membantu pengelolaan bisnis menjadi lebih praktis dan terstruktur.',

                'content' => [
                    [
                        'heading' => 'Kelola Bisnis dalam Satu Platform',
                        'text' => 'Akunta dirancang untuk membantu berbagai aktivitas keuangan dan operasional bisnis dalam satu sistem yang terintegrasi. Informasi dari berbagai aktivitas dapat dikelola dengan lebih terstruktur sehingga pemilik bisnis lebih mudah memantau kondisi usahanya.'
                    ],
                    [
                        'heading' => 'Dashboard Bisnis',
                        'text' => 'Dashboard memberikan ringkasan informasi penting mengenai aktivitas bisnis dalam satu tampilan. Pengguna dapat melihat informasi transaksi, perkembangan pendapatan, kondisi keuangan, serta berbagai aktivitas penting tanpa harus membuka banyak halaman.'
                    ],
                    [
                        'heading' => 'Buku Besar dan Pencatatan Keuangan',
                        'text' => 'Fitur Buku Besar membantu proses pengelolaan akun, jurnal, saldo, dan histori transaksi. Data yang tersusun secara terstruktur mempermudah pengguna dalam menelusuri aktivitas keuangan dan memahami perubahan pada setiap akun.'
                    ],
                    [
                        'heading' => 'Kas, Bank, dan Transaksi',
                        'text' => 'Melalui fitur Kas & Bank, pengguna dapat mengelola penerimaan, pembayaran, transfer, dan aktivitas rekening bisnis. Semua transaksi dapat dicatat dalam satu sistem sehingga pemantauan arus kas menjadi lebih praktis.'
                    ],
                    [
                        'heading' => 'Persediaan, Pembelian, dan Penjualan',
                        'text' => 'Akunta juga membantu pengelolaan stok, pemasok, proses pembelian, pelanggan, hingga transaksi penjualan. Integrasi antarfitur membuat informasi operasional lebih mudah dipantau tanpa perlu melakukan pencatatan berulang pada sistem yang berbeda.'
                    ],
                    [
                        'heading' => 'Laporan untuk Mendukung Evaluasi Bisnis',
                        'text' => 'Berbagai laporan dapat digunakan untuk membantu pemilik bisnis mengevaluasi kondisi usaha. Informasi mengenai keuangan, penjualan, persediaan, utang, piutang, dan aktivitas lainnya dapat menjadi dasar dalam mengambil keputusan bisnis.'
                    ],
                ],
            ],


            'cara-membuat-rencana-bisnis-yang-efektif' => [
                'title' => 'Cara Membuat Rencana Bisnis yang Efektif',
                'category' => 'Panduan',
                'date' => '04 Apr 2024',
                'views' => '790',
                'image' => 'artikel 6.png',
                'excerpt' => 'Panduan membuat rencana bisnis yang lebih terarah dan terukur.',

                'content' => [
                    [
                        'heading' => 'Mengapa Rencana Bisnis Dibutuhkan?',
                        'text' => 'Rencana bisnis membantu pemilik usaha menentukan arah pengembangan dan memahami langkah yang perlu dilakukan untuk mencapai tujuan. Perencanaan yang baik juga dapat menjadi acuan ketika bisnis melakukan evaluasi terhadap perkembangan usahanya.'
                    ],
                    [
                        'heading' => 'Tentukan Tujuan Bisnis',
                        'text' => 'Mulailah dengan menentukan tujuan yang ingin dicapai dalam jangka pendek maupun jangka panjang. Tujuan sebaiknya dibuat secara jelas dan terukur agar perkembangan bisnis dapat dipantau dan dievaluasi secara berkala.'
                    ],
                    [
                        'heading' => 'Kenali Target Pasar',
                        'text' => 'Pahami karakteristik pelanggan yang ingin dijangkau, mulai dari kebutuhan, kebiasaan, hingga masalah yang mereka hadapi. Informasi ini membantu bisnis menentukan produk, pelayanan, harga, dan strategi komunikasi yang lebih sesuai.'
                    ],
                    [
                        'heading' => 'Analisis Kondisi Persaingan',
                        'text' => 'Pelajari bisnis lain yang menawarkan produk atau layanan sejenis. Identifikasi keunggulan, kekurangan, serta peluang yang masih tersedia agar bisnis dapat menentukan posisi dan nilai yang membedakannya dari pesaing.'
                    ],
                    [
                        'heading' => 'Susun Strategi Operasional dan Pemasaran',
                        'text' => 'Tentukan bagaimana bisnis akan menjalankan aktivitas sehari-hari dan menjangkau pelanggan. Strategi dapat mencakup proses pelayanan, pengelolaan stok, promosi, penggunaan media digital, hingga cara menjaga hubungan dengan pelanggan.'
                    ],
                    [
                        'heading' => 'Buat Perencanaan Keuangan',
                        'text' => 'Perkirakan kebutuhan modal, biaya operasional, target penjualan, serta arus kas bisnis. Perencanaan keuangan membantu pemilik usaha memahami kebutuhan dana dan menentukan langkah yang realistis untuk mendukung pertumbuhan bisnis.'
                    ],
                    [
                        'heading' => 'Evaluasi Rencana Secara Berkala',
                        'text' => 'Rencana bisnis tidak harus bersifat tetap. Lakukan evaluasi secara rutin dan sesuaikan strategi ketika terjadi perubahan kondisi pasar, kebutuhan pelanggan, maupun perkembangan internal perusahaan agar bisnis tetap relevan.'
                    ],
                ],
            ],


            'kesalahan-umum-dalam-pembukuan' => [
                'title' => 'Kesalahan Umum dalam Pembukuan dan Cara Menghindarinya',
                'category' => 'Akuntansi',
                'date' => '02 Apr 2024',
                'views' => '760',
                'image' => 'artikel 1.png',
                'excerpt' => 'Kenali kesalahan umum dalam pembukuan dan langkah sederhana untuk menghindarinya.',

                'content' => [
                    [
                        'heading' => 'Pentingnya Pembukuan yang Teratur',
                        'text' => 'Pembukuan membantu bisnis mengetahui kondisi keuangan berdasarkan transaksi yang benar-benar terjadi. Ketika pencatatan dilakukan secara tidak konsisten, pemilik usaha akan lebih sulit mengevaluasi pendapatan, pengeluaran, keuntungan, maupun kondisi arus kas.'
                    ],
                    [
                        'heading' => 'Tidak Mencatat Transaksi Secara Rutin',
                        'text' => 'Menunda pencatatan dapat menyebabkan transaksi terlupakan atau informasi menjadi tidak lengkap. Biasakan mencatat pemasukan dan pengeluaran segera setelah transaksi terjadi agar data keuangan tetap akurat dan mudah ditelusuri.'
                    ],
                    [
                        'heading' => 'Mencampur Keuangan Pribadi dan Bisnis',
                        'text' => 'Penggunaan dana pribadi dan bisnis dalam satu pencatatan membuat kondisi usaha sulit dianalisis. Pisahkan rekening dan transaksi agar laporan keuangan dapat menunjukkan performa bisnis secara lebih jelas.'
                    ],
                    [
                        'heading' => 'Tidak Menyimpan Bukti Transaksi',
                        'text' => 'Invoice, nota, bukti pembayaran, dan dokumen transaksi lainnya sebaiknya disimpan dengan baik. Dokumen tersebut diperlukan untuk melakukan pengecekan ketika terdapat perbedaan antara catatan dan transaksi yang sebenarnya.'
                    ],
                    [
                        'heading' => 'Tidak Melakukan Rekonsiliasi',
                        'text' => 'Catatan transaksi perlu dibandingkan secara berkala dengan saldo kas maupun rekening bank. Rekonsiliasi membantu menemukan transaksi yang belum tercatat, kesalahan nominal, atau perbedaan lain sebelum masalah menjadi lebih besar.'
                    ],
                    [
                        'heading' => 'Jarang Mengevaluasi Laporan Keuangan',
                        'text' => 'Laporan keuangan bukan hanya dibuat untuk disimpan. Informasi tersebut perlu dianalisis secara rutin untuk melihat perubahan pendapatan, biaya, arus kas, serta kondisi keuangan sehingga pemilik bisnis dapat mengambil keputusan yang lebih tepat.'
                    ],
                    [
                        'heading' => 'Masih Mengandalkan Pencatatan Manual',
                        'text' => 'Ketika jumlah transaksi semakin banyak, pencatatan manual berpotensi memakan waktu dan meningkatkan risiko kesalahan. Sistem pembukuan digital dapat membantu menyimpan transaksi secara lebih terstruktur serta mempercepat proses pembuatan laporan.'
                    ],
                ],
            ],

        ];


        if (!isset($articles[$slug])) {
            abort(404);
        }

        $article = $articles[$slug];

        $relatedArticles = collect($articles)
            ->except($slug)
            ->take(3)
            ->all();

        return view('public.blog-detail', [
            'article' => $article,
            'slug' => $slug,
            'relatedArticles' => $relatedArticles,
        ]);
    }


    public function faq()
    {
        return view('public.faq');
    }


    public function contact()
    {
        return view('public.contact');
    }


    /* =====================================================
       CONTACT
    ===================================================== */

    public function contactSubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'business_type' => 'nullable|in:umkm,retail,jasa,lainnya',
            'phone' => 'required|string|max:30',
            'message' => 'required|string|max:1500',
        ]);

        $messages = session('contact_messages', []);

        $data['created_at'] = now()->format('d M Y H:i');

        $messages[] = $data;

        session([
            'contact_messages' => $messages
        ]);

        return back()->with(
            'success',
            'Pesan berhasil dikirim.'
        );
    }


    /* =====================================================
       DEMO
    ===================================================== */

    public function demoSubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'company' => 'required|string|max:120',
            'package' => 'required|string|max:60',
            'phone' => 'required|string|max:30',
        ]);


        $demos = session('demo_requests', []);


        $data['status'] = 'Menunggu';

        $data['created_at'] = now()->format('d M Y H:i');


        $demos[] = $data;


        session([
            'demo_requests' => $demos
        ]);


        return back()->with(
            'success',
            'Pengajuan demo berhasil dikirim. Data hanya tersimpan di session, bukan database.'
        );
    }
}