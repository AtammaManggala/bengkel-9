@foreach($data as $row)
<form action="{{route('mekanik.update',$id)}}" method="post" name="tambah">
    @csrf 
    <label for="">Nama Mekanik : </label>
    <input type="text" name="mekanik" id="" value="{{$row->nm_mekanik}}"><br>
    
    <label for="">Tanggal Lahir : </label>
    <input type="text" name="tgl_lahir" id="" value="{{$row->tgl_lahir}}"><br>

    <label for="">Alamat : </label>
    <input type="text" name="alamat" id="" value="{{$row->alamat}}"><br>

    <label for="">Nomor Induk Kependudukan : </label>
    <input type="text" name="nik" id="" value="{{$row->nik}}"><br>

    <label for="">Nomor Handphone : </label>
    <input type="text" name="no_hp" id="" value="{{$row->no_hp}}"><br>

    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach