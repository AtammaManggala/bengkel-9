<a href="{{route('jnsKendaraan.create')}}">
    <input type="button" value="Tambah">
</a>

<table border='1'>
    <tr>
            <td>No</td>
            <td>Nama Jenis Kendaraan</td>
            <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->nm_jns_kendaraan}}</td>
         <td>
            <a href="{{route('jnskendaraan.edit',$row->id_jns_kendaraan)}}">update</a>  
            |  
            <a href="{{route('jnskendaraan.delete',$row->id_jns_kendaraan)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>