<a href="{{route('kendaraan.create')}}">
    <input type="button" value="Tambah">
</a>

<table border='1'>
    <tr>
            <td>No</td>
            <td>Nomor Polisi</td>
            <td>Tahun Kendaraan</td>
            <td>Nomor Mesin</td>
            <td>Nomor Rangka</td>
            <td>Kapasitas Mesin</td>
            <td>Transmisi</td>
            <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->no_pol}}</td>
         <td>{{$row->tahun_kendaraan}}</td>
         <td>{{$row->no_mesin}}</td>
         <td>{{$row->no_rangka}}</td>
         <td>{{$row->kapasitas_mesin}}</td>
         <td>{{$row->transmisi}}</td>
         <td>
            <a href="{{route('kendaraan.edit',$row->id_kendaraan)}}">update</a>  
            |  
            <a href="{{route('kendaraan.delete',$row->id_kendaraan)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>