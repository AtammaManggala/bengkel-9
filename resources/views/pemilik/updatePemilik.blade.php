@foreach($data as $row)
<form action="{{route('pemilik.update',$id)}}" method="post" name="tambah">
    @csrf 
    <label for="">Nama Pemilik : </label>
    <input type="text" name="pemilik" id="" value="{{$row->nm_pemilik}}"><br>
    
    <label for="">Tanggal Lahir : </label>
    <input type="text" name="tanggal_lahir" id="" value="{{$row->tgl_lahir}}"><br>

    <label for="">Alamat : </label>
    <input type="text" name="alamat_pemilik" id="" value="{{$row->alamat}}"><br>
    
    <label for="">NIK : </label>
    <input type="text" name="nik_pemilik" id="" value="{{$row->nik}}"><br>

    <label for="">Nomor Handphone : </label>
    <input type="text" name="nomor_hp_pemilik" id="" value="{{$row->no_hp}}"><br>

    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach