CREATE DATA MHS
<h1>Create Mahasiswa</h1>

<form method="post" action='/report/data_mahasiswa'>
    @csrf
    <table >
        <tr>
            <td>
                <label for="nim">NIM: </label>
            </td>
            <td>
                <input type="text" name="nim" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="Nama">Nama: </label>
            </td>
            <td>
                <input type="text" name="nama" required> 
            </td>
        </tr>
        <tr>
            <td>
                <label for="kota_asal">Kota Asal: </label>
            </td>
            <td>
                <input type="text" name="kota_asal" required> 
            </td>
        </tr>
    </table>
  
    <button type="submit">Tambah Mahasiswa</button>
 
</form>