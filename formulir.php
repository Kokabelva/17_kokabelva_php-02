<h1> Input Data </h1>

<form action="simpan.php" method="post"> 
    <table>
    <tr>
         <td>ID Buku</td>
         <td>:</td>
         <td><input type="text" name="id_buku"></td>
    </tr>
    <tr>
          <td>Judul Buku</td>
          <td>:</tb>
          <td><input type="text" name= "judul_buku"></td>
    </tr>
    <tr>
          <td>Penulis</td>
          <td>:</tb>
          <td><input type="text" name= "penulis"></td>
    </tr>
    <tr>
          <td>Jenis Buku</td>
          <td>:</tb>
    <td><input type="text" name= "jenis_buku" >
    </tr>
          <td>Gambar Buku</td>
          <td>:</tb>
    <td><input type="file" name= "gambar_buku" accept="image/*">
    </tr>
    </table>
<input type="submit" name="simpan" value="SIMPAN">
</form>
