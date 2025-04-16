@foreach($data as $row)
<form action="{{route('jnsService.update',$id)}}" method="post" name="tambah">
    @csrf 
    <label for="">Jenis Service : </label>
    <input type="text" name="jns_service" id="" value="{{$row->jns_service}}"><br>
    
    <label for="">Keterangan : </label>
    <input type="text" name="keterangan" id="" value="{{$row->keterangan}}"><br>

    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach