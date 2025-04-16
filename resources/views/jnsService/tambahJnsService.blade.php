<form action="" method="post" name="tambah">
    @csrf 
    <label for="">Jenis Service : </label>
    <input type="text" name="jns_service" id=""><br>
    
    <label for="">Keterangan : </label>
    <input type="text" name="keterangan" id=""><br>

    <input type="submit" name="simpan" value="simpan"><br>
</form>