<form action="" method="post" name="tambah">
    @csrf
    <label for="">Nama Mekanik :</label>
    <input type="text" name="mekanik"><br>

    <label for="">Tanggal Lahir :</label>
    <input type="text" name="tgl_lahir"><br>

    <label for="">Alamat :</label>
    <input type="text" name="alamat"><br>

    <label for="">Nomor Induk Kependudukan :</label>
    <input type="text" name="nik"><br>

    <label for="">Nomor Handphone :</label>
    <input type="text" name="no_hp"><br>

    <input type="submit" name="simpan" value="simpan"><br>
</form>