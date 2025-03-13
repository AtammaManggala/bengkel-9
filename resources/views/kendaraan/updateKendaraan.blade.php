@foreach($data as $row)
<form action="{{route('kendaraan.update',$id)}}" method="post" name="tambah">
    @csrf 
    <label for="">Nomor Polisi Kendaraan : </label>
    <input type="text" name="kendaraan" id="" value="{{$row->no_pol}}"><br>
    
    <label for="">Tahun Kendaraan : </label>
    <input type="text" name="thn_kendaraan" id="" value="{{$row->tahun_kendaraan}}"><br>

    <label for="">Nomor Mesin : </label>
    <input type="text" name="no_mesin_kendaraan" id="" value="{{$row->no_mesin}}"><br>

    <label for="">Nomor Rangka : </label>
    <input type="text" name="no_rangka_kendaraan" id="" value="{{$row->no_rangka}}"><br>

    <label for="">Kapasitas Mesin : </label>
    <input type="text" name="kapasitas_mesin_kendaraan" id="" value="{{$row->kapasitas_mesin}}"><br>

    <label for="">Transmisi : </label>
    <input type="text" name="transmisi_kendaraan" id="" value="{{$row->transmisi}}"><br>

    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach