<a href="{{route('service.create')}}">
    <input type="button" value="Tambah">
</a>

<table border='1'>
    <tr>
            <td>No</td>
            <td>Jenis Kendaraan</td>
            <td>Keluhan</td>
            <td>Nama Mekanik</td>
            <td>Tanggal Masuk</td>
            <td>Tanggal Keluar</td>
            <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->jns_kendaraan}}</td>
         <td>{{$row->keluhan}}</td>
         <td>{{$row->nm_mekanik}}</td>
         <td>{{$row->tgl_masuk}}</td>
         <td>{{$row->tgl_keluar}}</td>
         <td>
            <a href="{{route('service.edit',$row->id_service)}}">update</a>  
            |  
            <a href="{{route('service.delete',$row->id_service)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>