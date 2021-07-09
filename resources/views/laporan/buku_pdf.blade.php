<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Laporan Penambahan Buku</title>
  <link rel="stylesheet" href="">
	
</head>
  <div id="isi">
    <h1 align="center">Laporan Penambahan Buku</h1>
        <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
            <thead style="background:#e8ecee">
                <tr class="tr-title">
                    <th height="20" align="center" valign="middle">Judul</th>
                    <th height="20" align="center" valign="middle">Pengarang</th>
                    <th height="20" align="center" valign="middle">Penerbit</th>
                    <th height="20" align="center" valign="middle">Tahun</th>
                    <th height="20" align="center" valign="middle">Stok</th>
                    <th height="20" align="center" valign="middle">Rak</th>
                </tr>
            </thead>
            <tbody>
              @foreach($datas as $data)
              <tr>
                <td align="center">
                  {{$data->judul}}
                </td>

                <td align="center">
                  {{$data->pengarang}}
                </td>
                <td align="center">
                  {{$data->penerbit}}
                </td>
                <td align="center">
                  {{$data->tahun_terbit}}
                </td>
                <td align="center">
                  {{$data->jumlah_buku}}
                </td>
                <td align="center">
                  {{$data->lokasi}}
                </td>
                
              </tr>
            @endforeach
                      </tbody>
        </table>
    </div>
</html>
