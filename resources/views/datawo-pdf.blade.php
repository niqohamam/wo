<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Monitoring Work Order PLTMG Langgur 20 MW</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama Pemohon</th>
    <th>Deskripsi Pekerjaan / Temuan</th>
    <th>Lokasi</th>
    <th>Tgl Open</th>
    <th>Jam Open</th>
    <th>Bidang Pekerjaan</th>
    <th>Status Pekerjaan</th>
    <th>PIC Pekerjaan</th>
  </tr>

  @php 
  $no=1;
  @endphp 

  @foreach ($data as $row)

  <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->pekerjaan_temuan }}</td>
                        <td>{{ $row->lokasi }}</td>
                        <td>{{ $row->tgl_open }}</td>
                        <td>{{ $row->jam_open }}</td>
                        <td>{{ $row->bidang_pekerjaan }}</td>
                        <td>{{ $row->status_pekerjaan }}</td>
                        <td>{{ $row->pic }}</td>com
  </tr>

  @endforeach
  
</table>

</body>
</html>


