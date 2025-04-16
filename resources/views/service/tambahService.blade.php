<form action="" method="post" name="tambah">
    @csrf 
    <label for="">Jenis Kendaraan : </label>
    <input type="text" name="service" id=""><br>
    
    <label for="">Keluhan : </label>
    <input type="text" name="keluhan" id=""><br>
    
    <label for="">Nama Mekanik : </label>
    <input type="text" name="nm_mekanik" id=""><br>
    
    <label for="">Tanggal Masuk : </label>
    <input type="text" name="tgl_masuk" id=""><br>
    
    <label for="">Tanggal Keluar : </label>
    <input type="text" name="tgl_keluar" id=""><br>

    <input type="submit" name="simpan" value="simpan"><br>
</form>