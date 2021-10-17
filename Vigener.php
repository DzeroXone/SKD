<div class="container">
    <h1>Vigenere - Enkripsi</h1>
    <hr>
    <form action="enkripsi.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
        <label for="basic">Masukkan Plain Text :</label>
        <textarea class="form-control" name="plain" id="textarea-a"></textarea>
        <label for="basic">Masukkan Kunci :</label>
        <textarea class="form-control" name="kunci" id="textarea-a"></textarea><br>
        <input type="submit" class="btn btn-success" value=" Encrypt" data-theme="a">
        <input type="reset" class="btn btn-primary" value=" Hapus" data-theme="a">
    </form>
</div>
<a href="welcome.php">Home</a>
<a href="logout.php">Logout</a>