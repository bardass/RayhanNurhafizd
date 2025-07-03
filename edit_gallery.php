<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
header('location:login.php');
exit;
}
$id = $_GET['id_gallery'];
$sql = "SELECT * FROM tbl_gallery WHERE id_gallery = '$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
?>
<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
header('location:login.php');
exit;
}
$id = $_GET['id_gallery'];
$sql = "SELECT * FROM tbl_gallery WHERE id_gallery = '$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
?>
<div>

<label class="block text-sm font-medium text-gray-700 mb-1">Gambar

Saat Ini</label>

<img src="../images/<?php echo $data['foto']; ?>" class="h-40

rounded shadow mb-3" alt="Foto Lama">
</div>
<div>
<label for="foto" class="block text-sm font-medium text-gray-700

mb-1">Ganti Gambar (Opsional)</label>

<input type="file" id="foto" name="foto" accept="image/*"
class="block w-full text-sm text-gray-600 file:mr-4 file:py-2
file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold
file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200">
</div>
<div class="flex justify-end space-x-4">
<button type="submit"

class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-
800 transition">Simpan Perubahan</button>

<a href="data_gallery.php"

class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-
gray-400 transition">Batal</a>

</div>
</form>
</main>
</div>
<!-- Footer -->
<footer class="bg-blue-800 text-white text-center py-4 mt-10">
&copy; <?php echo date('Y'); ?> | Created by NamaSendiri
</footer>
</body>
</html>