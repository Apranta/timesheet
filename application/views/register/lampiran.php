<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
        #bigWrapper {
            width: 100%;
            margin-top: -100px;
        }

        .header {
            text-align: center;
            font-size: 26px;
            margin-bottom: 50px;
            border-bottom: 5px double black;
            padding-bottom: 15px;
        }

        #logoo {
            margin-top: -10000px;
            width: 100px;
            height: 220px;
            margin-left: 5px;
            margin-right: 40px;
        }

        #logooo {
            margin-top: -10000px;
            width: 100px;
            height: 220px;
        }

        #logoo img {
            width: 130px;
            height: 80px;
        }

        .title {
            margin-left: 100px;
            margin-right: 100px;
            margin-top: -190px;
        }

        .kontak {
            margin-top: 5px;
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="bigWrapper">
        <table width="100%" style="
            font-size: 24px;
            margin-bottom: 50px;
            border-bottom: 5px double black;
            padding-bottom: 15px;">
            <tr>
                <td width="25" align="center"><img src="<?= base_url('assets/home/assets/icon/logo1.png') ?>" style="width: 80;margin-left: 0px;"></td>
                <td width="50" align="center">
                <strong>
                    BUJANG GADIS PALEMBANG 2020
                </strong><br><br>
                <div style="font-size: 12px;text-align: center;">
                    Dinas Pariwisata Kota Palembang, Jln. Dr. Wahidin, No.3, Kelurahan Talang Semut, Kecamatan Bukit Kecil, Palembang, Sumatera Selatan
                </div>
                </td>
                <td width="25" align="center"><img src="<?= base_url('assets/ybgp.png') ?>" style="width: 80px;margin-right: 0px;"></td>
            </tr>
        </table>
        <!-- <div class="header">
            <div id="logoo">
                <img src="<?= base_url('assets/ybgp.png') ?>">
            </div>
            <div class="title">
                <strong>
                    BUJANG GADIS PALEMBANG 2020
                </strong>
                <div class="kontak">
                    Dinas Pariwisata Kota Palembang, Jln. Dr. Wahidin, No.3, Kelurahan Talang Semut, Kecamatan Bukit Kecil, Palembang, Sumatera Selatan
                </div>
            </div>
            <div id="logooo">
                <img src="<?= base_url('assets/ybgp.png') ?>">
            </div>
        </div> -->
        <div class="content" style="margin: 0 auto; width:80%;">
            <p style="margin-top: -30px; width: 100%; font-weight: bold; font-size: 14px; text-align: center; margin-bottom: 30px;">FORMULIR PENDAFTARAN <br>
                PEMILIHAN BUJANG GADIS PALEMBANG 2020</p>
            <table style="width: 100%;">
                <tr>
                    <th align="left">Nomor Peserta</th>
                    <td>:</td>
                    <td><?= $peserta->id ?></td>
                </tr>
                <tr>
                    <th align="left">Nama Lengkap</th>
                    <td>:</td>
                    <td><?= $peserta->nama_lengkap ?></td>
                </tr>
                <tr>
                    <th align="left">Email</th>
                    <td>:</td>
                    <td><?= $peserta->email ?></td>
                </tr>
            </table>
            <br>
            <div style="text-align: center; margin-left: 60%; line-height: .1;">
                <p>Pendaftar,</p>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <p><u><?= $peserta->nama_lengkap ?></u></p>
            </div>
        </div><br><br><br>
        <hr>
        <div style="font-size: 11px;">
            <h4 style="text-align: center;">ALUR PENDAFTARAN PEMILIHAN BUJANG GADIS PALEMBANG 2020</h4>
            <ul>
                <li>
                    <b>Registrasi</b>
                    <p>Lakukan registrasi akun pada website www.bgp-palembang.com dan log in pada akun anda</p>
                </li>
                <li>
                    <b>Lengkapi Formulir</b>
                    <p>Lengkapi formulir pendaftaran Pemilihan Bujang Gadis Palembang Tahun 2020 dan unggah dokumen yang dibutuhkan seperti pas foto</p>
                </li>
                <li>
                    <b>Download dan Cetak Formulir</b>
                    <p>Formulir pendaftaran Pemilihan Bujang Gadis Palembang Tahun 2020 dapat didownload setelah dilengkapi dan kemudian dicetak untuk dikumpulkan bersama berkas pendaftaran lainnya</p>
                </li>
                <li>
                    <b>Download lampiran</b>
                    <p>Cek email anda untuk mendapatkan lampiran berupa Bukti Pendaftaran Peserta. Pada lampiran tersebut terdapat nomor urut pendaftaran yang nantinya akan berfungsi sebagai nomor urut photoshoot. Surat Izin Orang Tua dan Surat Perjanjian Aktif dapat didownload pada website www.bgp-palembang.com.
                    </p>
                </li>
                <li>
                    <b>Kumpulkan Berkas Pendaftaran</b>
                    <p>Berkas pendaftaran yang sudah lengkap dapat dikumpulkan pada tanggal 28 Mei – 4 Juni 2020 di Kantor Dinas Pariwisata Kota Palembang (Jl. Dr. Wahidin No. 3 Kelurahan Talang Semut, Kecamatan Bukit Kecil Kota Palembang) Pukul 09.00 s/d 16.00 WIB.</p>
                </li>
            </ul>
        </div>
        <hr><br>
        <h6 style="text-align: center;">Powered by PudingLab</h6>
    </div>
</body>

</html>