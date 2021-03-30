<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>[Pengaduan Masyarakat] - Laporan Tanggapan</title>
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
            <h6 class="m-0 font-weight-bold text-black">Laporan Tanggapan</h6>
            <br>
            </center>
   <table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nomor Pengaduan</th>
				<th>Tanggal Tanggapan</th>
                <th>Tanggapan</th>
				<th>Nomor Petugas</th>
				<th>Nama Petugas</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($tanggapan as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->id_pengaduan}}</td>
				<td>{{$p->tgl_tanggapan}}</td>
				<td>{{$p->tanggapan}}</td>
				<td>{{$p->id_petugas}}</td>
				<td>{{$p->nama_petugas}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>

    </body>

</html>