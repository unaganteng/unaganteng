{{-- @extends('layout/cetak')

@section('title','Surat Keterangan')

@section('container') --}}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- <title>@yield('title')</title> --}}

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">


</head>

<body>
<div style="overflow-x:auto;">
    <table style="align=center">
        <tr>
        <td><center>
            <b style="font-size:5pt;">UNIVERSITAS 17 AGUSTUS 1945 SURABAYA</b><br>
            <i style="font-size:5pt;">Jl. Semolowaru No.45, Menur Pumpungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118</i><br>
        </td>
        </tr>
        <tr>
            <td colspan="2"><hr> </td>
        </tr>
        <tr>
            <td colspan="2"><center><B style="font-size:5pt;">SURAT KETERANGAN</b><br> </center></td>
        </tr>
    </table>
    <br>
    <table style="text-align:center">
        <tr>
            <td style="width: 50"></td>
            <td style="width: 50"></td>
            <td style="width: 50"></td>
            <td style="width: 300"></td>    
        </tr>
        {{-- @dd($mahasiswa->id) --}}
        <tr>
            <td style="height: 50" colspan="3">Yang bertanda tangan dibawah ini:</td>
            <td style="width: 400"></td>
    
        </tr>
        <tr>
            <td style="height: 50" colspan="2">Nama</td>
            <td style="width: 400">:  Teknik Informatika</td></tr>
        </tr>
        <tr>
            <td style="height: 50" colspan="2">Jabatan</td>
            <td style="width: 400">:  Kepala Desa</td></tr>
        </tr>
        <tr>
            <td style="height: 50" colspan="3">Menyatakan dengan sebenarnya bahwa:</td>
            <td style="width: 400"></td></tr>
        </tr>
        <tr>
            <td style="height: 50" colspan="2">NIK</td> 
            <td style="width: 400">:  {{$mahasiswa->id}}</td></tr>
        </tr>
        <tr>
            <td style="height: 50" colspan="2">Nama</td>
            <td style="width: 400">:  {{$mahasiswa->nama}}</td><tr></tr>
        </tr>
        <tr>
            <td style="height: 50" colspan="2">Tempat/Tanggal Lahir</td>
            <td style="width: 400">:  {{$mahasiswa->tmp_tgl}}</td></tr>
        </tr>
        <tr>
            <td style="height: 50" colspan="3">Adalah benar merupakan warga desa UNTAG.</td>
            <td style="width: 400"></td></tr>
        </tr>
    </table>
    <table style="align=right">
        <tr>
            <td style="height: 50"><center>UNTAG, <?php echo date('d F Y');  ?></center></td>
            <td style="width: 700"></td></tr>
        </tr>
        <tr>
           <td style="height: 5"> <center>Kepala Desa</center></td>
           <td style="width: 400"></td></tr>
        </tr>
        <tr>
            <td style="font-size:5pt;height:300;"><center>Teknik Informatika</center></td>
           <td style="width: 400"></td></tr>
        </tr>
        <tr>
           <td style="height: 5"></td>
           <td style="width: 400"></td></tr>
        </tr>
     </table>
</div>


{{-- @endsection --}}

</body>

</html>