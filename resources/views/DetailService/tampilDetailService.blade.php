<a href="{{route('detailService.create')}}">
    <input type="button" value="Tambah">
</a>

<table border='1'>
    <tr>
            <td>No</td>
            <td>Sparepart</td>
            <td>Harga</td>
            <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->sparepart}}</td>
         <td>{{$row->harga}}</td>
         <td>
            <a href="{{route('detailService.edit',$row->id_detail_service)}}">update</a>  
            |  
            <a href="{{route('detailService.delete',$row->id_detail_service)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>