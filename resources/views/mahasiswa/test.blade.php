<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div>    
    <table style="text-align:center;width: 100%">
      <tbody>
        <tr>
          <td>
            <center>
            <b style="font-size: 1.875em;">UNIVERSITAS 17 AGUSTUS 1945 SURABAYA</b><br>
            <i>Jl. Semolowaru No.45, Menur Pumpungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118</i><br>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><hr></td>
        </tr>
        <tr>
          <td colspan="2"><center><b>SURAT KETERANGAN</b><br></center></td>
        </tr>
      </tbody>
    </table>
    <br>
    <table style="width: auto">
      <tbody>
      <tr>
          <td style="width: 30px"></td>
          <td style="width: auto"></td> 
      </tr>      
      <tr>
          <td style="width: 175px" colspan="2">Yang bertanda tangan dibawah ini:</td>      
      </tr>
      <tr>
          <td style="width: 175px;" >Nama</td>
          <td style="width: auto">:  Teknik Informatika</td>
      </tr>
      <tr>
          <td style="width: 175px" >Jabatan</td>
          <td style="width: auto">:  Kepala Desa</td>
      </tr>
      <tr>
          <td style="width: 175px" colspan="3">Menyatakan dengan sebenarnya bahwa:</td>
          <td style="width: auto"></td>
      </tr>
      <tr>
          <td style="width: 175px" >NIK</td> 
          <td style="width: auto">:  {{$mahasiswa->id}}</td>
      </tr>
      <tr>
          <td style="width: 175px" >Nama</td>
          <td style="width: auto">:  {{$mahasiswa->nama}}</td>
      </tr>
      <tr>
          <td style="width: 175px" >Tempat / Tanggal Lahir</td>
          <td style="width: auto">:  {{$mahasiswa->tmp_tgl}}</td>
        
      </tr>
      <tr>
          <td style="width: 175px" colspan="3">Adalah benar merupakan warga desa UNTAG.</td>
          <td style="width: auto"></td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
  <table style="margin-right: 100px; margin-left: auto; text-align: center;">
      <tr>
        <td>UNTAG, <?php echo date('d F Y');  ?></td>        
      </tr> 
      <tr>
        <td>Kepala Desa</td>       
      </tr>
      <tr>
        <td style="height:150px;"><center>Teknik Informatika</center></td>        
      </tr>    
 </table>  
  </div>
</body>
</html>