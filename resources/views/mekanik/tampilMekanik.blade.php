<a href="{{route('mekanik.create')}}">
    <input type="button" value="Tambah">
</a>

<table border='1'>
    <tr>
            <td>No</td>
            <td>Nama Mekanik</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
            <td>Nomor Induk Kependudukan</td>
            <td>Nomor Handphone</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->nm_mekanik}}</td>
         <td>{{$row->tgl_lahir}}</td>
         <td>{{$row->alamat}}</td>
         <td>{{$row->nik}}</td>
         <td>{{$row->no_hp}}</td>
         <td>
            <a href="{{route('mekanik.edit',$row->id_mekanik)}}">update</a>  
            |  
            <a href="{{route('mekanik.delete',$row->id_mekanik)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>