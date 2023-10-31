<html>

<head>

    <title>Berita Acara Serah Terima</title>
    <style type= "text/css">

    body {background-color : #ccc }

    .rangkasurat {width : 930px;margin:0 auto;background-color : #fff;padding: 20px;}

    table {border-bottom : 5px solid # 000; padding: 2px}

    .tengah {text-align : center;line-height: 5px;}

    .table1 {
    color: #232323;
    border-collapse: collapse;
    }
 
    .table1, td {
    border: 2px solid #050505;
    padding: 8px 14px;
    }

     </style >

</head>

<body>

<div class = "rangkasurat">

    <table  align="center">
    <br><br>
    <th class = "tengah">
        <h3><u>BERITA ACARA SERAH TERIMA</u></h3>
        <h3>TANAMAN JENIS TOGA</h3>
    </th>
    </table>

    <table style="margin-left: 70px;">
        <tr>
            <p style="margin-left: 70px;">Pihak Pertama yang Menyerahkan Tanaman :</p>
        </tr>
    </table>
    @foreach ($pgw as $item)
    <table style="margin-left: 70px; border: none;">
        <tr>
            <td style="border: none;">Nama</td>
            <td style="border: none;">:</td>
            <td style="border: none;">{{ $item-> nama_pegawai}}</td>
        </tr>
        <tr>
            <td style="border: none;">NIP</td>
            <td style="border: none;">:</td>
            <td style="border: none;">{{ $item-> nip_pegawai}}</td>
        </tr>
        <tr>
            <td style="border: none;">Jabatan</td>
            <td style="border: none;">:</td>
            <td style="border: none;">{{ $item-> jabatan->nama_jabatan}}</td>
        </tr>
        <tr>
            <td style="border: none;">Alamat</td>
            <td style="border: none;">:</td>
            <td style="border: none;">{{ $item-> alamat_pegawai}}</td>
        </tr>
    </table>
    @endforeach
    <table style="margin-left: 70px;">
            <tr>
                <p style="margin-left: 70px;">Pihak Kedua yang Menerima :</p>
            </tr>
        </table>

        <table style="margin-left: 70px; border: none;">
        <tr>
            <td style="border: none;">Nama</td>
            <td style="border: none;">:</td>
            <td style="border: none;">{{ $single->nama }}</td>
        </tr>
        <tr>
            <td style="border: none;">NIP</td>
            <td style="border: none;">:</td>
            <td style="border: none;">{{ $single->nip }}</td>
        </tr>
        <tr>
            <td style="border: none;">Alamat</td>
            <td style="border: none;">:</td>
            <td style="border: none;">{{ $single->alamat_pemohon }}</td>
        </tr>
        <tr>
            <td style="border: none;">No. HP</td>
            <td style="border: none;">:</td>
            <td style="border: none;">{{ $single->no_telepon }}</td>
        </tr>
    </table>
    <table style="margin-left: 70px;">
        <tr>
            <p style="margin-left: 70px;">Selanjutnya disebut pihak kedua yang menerima</p>
            <p style="margin-left: 70px;">Tanaman Jenis :</p>
        </tr>
    </table>
    <body style="center;">
    <div class="table-container" style="margin-left: 80px;">
        <table class="table1" style="width: 100%; max-width: 785px; text-align: center;">
            <thead>
                <tr>
                    <th style="width: 5%; text-align: center;">No</th>
                    <th style="width: 50%; text-align: center;">Nama Tanaman</th>
                    <th style="width: 50%; text-align: center;">Jumlah Tanaman</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tmn as $item)
                <tr>
                    <td style="width: 5%; text-align: center;">{{ $item->id }}</td>
                    <td style="width: 50%; text-align: center;">{{ $item->nama_tanaman }}</td>
                    <td style="width: 50%; text-align: center;">{{ $item->jumlah }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td style="width: 5%; text-align: center;" colspan="2"><strong>Total</strong></td>
                    <td style="width: 50%; text-align: center;">
                        <?php
                        $total = 0;
                        foreach ($tmn as $item) {
                            $total += $item->jumlah;
                        }
                        echo $total;
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    </body>

    <br><br><br><br>

    <body style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
    <div class="table-container" style="margin-left: 100px; margin-right: 120px;">
        <table class="table1" style="width: 100%; max-width: 785px; text-align: center;">
            <!-- konten tabel di sini -->
        </table>
    </div>
    <div style="display: flex; justify-content: space-between; width: 800px; max-width: 100%; margin-top: 20px;">
        <div style="width: 45%; text-align: left; margin-left: 115px;">Pihak Kedua</div>
        <div style="width: 50%; text-align: right;">Pihak Pertama</div>
    </div>
    </body>

    <br><br><br><br><br><br>

    <body style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
    <div class="table-container" style="margin-left: 100px; margin-right: 120px;">
        <table class="table1" style="width: 100%; max-width: 785px; text-align: center;">
            <!-- konten tabel di sini -->
        </table>
    </div>
    <div style="display: flex; justify-content: space-between; width: 825px; max-width: 100%; margin-top: 20px;">
        <div style="width: 45%; text-align: left; margin-left: 100px;">
            <span style="border-bottom: 1px solid black; padding-bottom: 5px; font-weight: bold;">{{ $single->nama }}</span>
        </div>
        @foreach ($pgw as $item)
        <div style="width: 50%; text-align: right;">
            <span style="border-bottom: 1px solid black; padding-bottom: 5px; font-weight: bold;">{{ $item->nama_pegawai }}</span>
        </div>
        @endforeach
    </div>
    </body>


    <body style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
    <div class="table-container" style="margin-left: 100px; margin-right: 120px;">
        <table class="table1" style="width: 100%; max-width: 785px; text-align: center;">
            <!-- konten tabel di sini -->
        </table>
    </div>
    <div style="display: flex; justify-content: space-between; width: 825px; max-width: 100%; margin-top: 20px;">
        <div style="width: 45%; text-align: left; margin-left: 100px;">NIP. {{ $single->nip }}</div>
        @foreach ($pgw as $item)
        <div style="width: 50%; text-align: right;">NIP. {{ $item-> nip_pegawai}}</div>
        @endforeach
    </div>
    </body>









                 

</div>

</body>
</html>