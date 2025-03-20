<a href="{{route('kendaraan.create')}}">
    <input type="button" value="Tambah">
</a>

<table border='1'>
    <tr>
            <td>No</td>
            <td>Nama Pemilik</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
            <td>NIK</td>
            <td>Nomor Handphone</td>
            <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->nm_pemilik}}</td>
         <td>{{$row->tgl_lahir}}</td>
         <td>{{$row->alamat}}</td>
         <td>{{$row->nik}}</td>
         <td>{{$row->no_hp}}</td>
         <td>
            <a href="{{route('pemilik.edit',$row->id_pemilik)}}">update</a>  
            |  
            <a href="{{route('pemilik.delete',$row->id_pemilik)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>