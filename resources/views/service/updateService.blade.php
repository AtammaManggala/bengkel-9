@foreach($data as $row)
<form action="{{route('service.update',$id)}}" method="post" name="tambah">
    @csrf 
    <label for="">Jenis Kendaraan : </label>
    <input type="text" name="service" id="" value="{{$row->jns_kendaraan}}"><br>
    
    <label for="">Keluhan : </label>
    <input type="text" name="keluhan" id="" value="{{$row->keluhan}}"><br>

    <label for="">Nama Mekanik : </label>
    <input type="text" name="nm_mekanik" id="" value="{{$row->nm_mekanik}}"><br>

    <label for="">Tanggal Masuk : </label>
    <input type="text" name="tgl_masuk" id="" value="{{$row->tgl_masuk}}"><br>

    <label for="">Tanggala Keluar : </label>
    <input type="text" name="tgl_keluar" id="" value="{{$row->tgl_keluar}}"><br>

    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach