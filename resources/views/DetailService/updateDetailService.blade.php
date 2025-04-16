@foreach($data as $row)
<form action="{{route('detailService.update',$id)}}" method="post" name="tambah">
    @csrf 
    <label for="">Sparepart : </label>
    <input type="text" name="sparepart" id="" value="{{$row->sparepart}}"><br>
    
    <label for="">harga : </label>
    <input type="text" name="harga" id="" value="{{$row->harga}}"><br>

    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach