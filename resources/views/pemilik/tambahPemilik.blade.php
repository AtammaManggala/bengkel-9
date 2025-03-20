<form action="" method="post" name="tambah">
    @csrf 
    <label for="">Nama pemilik : </label>
    <input type="text" name="pemilik" id=""><br>
    
    <label for="">Tanggal lahir : </label>
    <input type="text" name="tgl_lahir" id=""><br>
    
    <label for="">Alamat : </label>
    <input type="text" name="alamat" id=""><br>
    
    <label for="">NIK : </label>
    <input type="text" name="nik" id=""><br>
    
    <label for="">Nomor Handphone : </label>
    <input type="text" name="no_hp" id=""><br>
    
    <input type="submit" name="simpan" value="simpan"><br>
</form>