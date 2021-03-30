<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>[Pengaduan Masyarakat] - Laporan Pengaduan</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="author" content="">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
            <center>
            <h6 class="m-0 font-weight-bold text-black">Laporan Pengaduan</h6>
            <br>
            </center>
   <table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Tanggal Pengaduan</th>
                <th>Nama Pengadu</th>
                <th>Isi Laporan</th>
				<th>Foto</th>
                <th>Tanggal Tanggapan</th>
                <th>Tanggapan</th>
                <th>Status</th>
                <th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($data as $datas)
			<tr>
				<td>{{$i++}}</td>
                <td>{{$datas->tgl_pengaduan}}</td>
                <td>{{$datas->nama}}</td>
                <td>{{$datas->isi_laporan}}</td>
                <td><img src="{{url('/images/'.$datas->foto)}}"  style="max-width: 40px"></td>
                <td>{{$datas->tgl_tanggapan}}</td>
                <td>{{$datas->tanggapan}}</td>
                <td>{{$datas->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>

    </body>

</html>