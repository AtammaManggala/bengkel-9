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
            <td>id Jenis Kendaraan</td>
            <td>id Pemilik</td>
            <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->no_pol}}</td>
         <td>
            <!-- <a href="{{route('jnskendaraan.edit',$row->id_jns_kendaraan)}}">update</a>   -->
        </td>
    </tr>
    @endforeach
</table>