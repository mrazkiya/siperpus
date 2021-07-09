<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Laporan Peminjaman Buku</title>
  <link rel="stylesheet" href="">
	
</head>
  <div id="isi">
    <h1 align="center">Laporan Peminjaman Buku</h1>
        <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
            <thead style="background:#e8ecee">
                <tr class="tr-title">
                    <th height="20" align="center" valign="middle">Judul Buku</th>
                    <th height="20" align="center" valign="middle">Nama</th>
                    <th height="20" align="center" valign="middle">Tanggal Pinjam</th>
                    <th height="20" align="center" valign="middle">Tanggal Kembali</th>
                    <th height="20" align="center" valign="middle">Status</th>
                </tr>
            </thead>
            <tbody>
                      @foreach($datas as $data)
                       <tr>
                      
                          <td align="center">
                          
                            {{$data->buku->judul}}
                          
                          </td>

                          <td align="center">
                            {{$data->anggota->nama}}
                          </td>
                          <td align="center">
                           {{date('d/m/y', strtotime($data->tgl_pinjam))}}
                          </td>
                          <td align="center">
                            {{date('d/m/y', strtotime($data->tgl_kembali))}}
                          </td>
                          <td align="center">
                          @if($data->status == 'pinjam')
                            <label class="badge badge-warning">Sedang</label>
                          @else
                            <label class="badge badge-success">Selesai</label>
                          @endif
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
        </table>
    </div>
</html>