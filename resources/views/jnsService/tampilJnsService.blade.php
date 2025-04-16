<a href="{{route('jnsService.create')}}">
    <input type="button" value="Tambah">
</a>

<table border='1'>
    <tr>
            <td>No</td>
            <td>Jenis Service</td>
            <td>Keterangan</td>
            <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->jns_service}}</td>
         <td>{{$row->keterangan}}</td>
         <td>
            <a href="{{route('jnsService.edit',$row->id_jns_service)}}">update</a>  
            |  
            <a href="{{route('jnsService.delete',$row->id_jns_service)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>