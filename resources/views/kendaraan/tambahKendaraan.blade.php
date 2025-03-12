<form action="" method="post" name="tambah">
    @csrf 
    <label for="">Nomor Polisi Kendaraan : </label>
    <input type="text" name="kendaraan" id=""><br>
    
    <label for="">Tahun Kendaraan : </label>
    <input type="text" name="thn_kendaraan" id=""><br>
    
    <label for="">Nomor Mesin : </label>
    <input type="text" name="no_mesin_kendaraan" id=""><br>
    
    <label for="">Nomor Rangka : </label>
    <input type="text" name="no_rangka_kendaraan" id=""><br>
    
    <label for="">Kapasitas Mesin : </label>
    <input type="text" name="kapasitas_mesin_kendaraan" id=""><br>
    
    <label for="">Transmisi : </label>
    <input type="text" name="transmisi_kendaraan" id=""><br>

    <input type="submit" name="simpan" value="simpan"><br>
</form>