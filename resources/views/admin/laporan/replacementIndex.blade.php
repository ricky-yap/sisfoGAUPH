<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Pengajuan Replacement Class {{ $replace->id }}</title>

    <style>
        body{
            padding-left: 30px;
            font-family: 'Times New Roman', Times, serif;
        }
        
        .w-200 {
            width: 200px;
        }

        table{
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <img style="width:794px; height:auto;" src="{{ url('pengajuan-replacement/pengajuan-replacement-header.png') }}" alt="Pengajuan Replacement-Header">

    <p>Hal: Permohonan pengganti waktu kuliah, kuliah tambahan dan perubahan jadwal kelas</p>
    <br>
    <p>Kepada Yth.</p>
    <p>Kaprodi Sistem Informasi (Kampus Kota Medan)</p>
    <p>Fakultas Ilmu Komputer</p>
    <p>Universitas Pelita Harapan Medan <i>Campus</i></p>
    <br>
    <p>Dengan ini memberitahukan bahwa</p>

    <table>
        <tr>
            <td class="w-200">Nama Dosen</td>
            <td>: {{ $replace->nama_lengkap }}</td>
        </tr>

        <tr>
            <td>Mata Kuliah</td>
            <td>: {{ $replace->nama_mata_kuliah }}</td>
        </tr>

        <tr>
            <td>Prodi</td>
            <td>: Sistem Informasi</td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>: {{ $replace->kelas }}</td>
        </tr>

        <tr>
            <td>Semester</td>
            <td>: Ganjil</td>
        </tr>

        <tr>
            <td>Tahun Akademik</td>
            <td>: 2022/2023</td>
        </tr>

        <tr>
            <td>Bermasuk untuk</td>
            <td>: Mengganti jadwal kelas</td>
        </tr>
    </table>

    <br>
    <h4>Syarat: Dosen bertanggung-jawab memastikan semua mahasiswa dapat menghadiri kelas pengganti</h4>
    
    <table>
        <tr>
            <td class="w-200">Yang semula pada:</td>
            <td>Tanggal</td>
            <td>: {{ date('d M Y', strtotime($replace->jadwal_tanggal_yang_akan_direplace)) }}</td>
        </tr>

        <tr>
            <td></td>
            <td>Waktu</td>
            <td>: {{ $replace->jadwal_jam_kuliah }}</td>
        </tr>

        <tr>
            <td>Menjadi:</td>
            <td>Tanggal</td>
            <td>: {{ date('d M Y', strtotime($replace->tanggal_replacement))}}</td>
        </tr>

        <tr>
            <td></td>
            <td>Waktu</td>
            <td>: {{$replace->jam_replacement}}</td>
        </tr>
    </table>

    <br>
    <br>

    <img style="width:794px; height:auto;" src="{{ url('pengajuan-replacement/pengajuan-replacement-footer.png') }}" alt="Pengajuan Replacement-Footer">
</body>
</html>