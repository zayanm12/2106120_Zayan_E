<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penyewaan PlayStation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak">
        <form action="proses_input.php" method="post">
            <h2>Form Penyewaan PlayStation</h2>

            <label for="nama">Nama Penyewa :</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Umur :</label>
            <input type="number" name="umur" required>

            <label for="jenisps">Jenis PS :</label><br>
            <select id="jenisps" name="jenisps" required>
                <option value="PS 3">PS 3</option>
                <option value="PS 4">PS 4</option>
                <option value="PS 5">PS 5</option>
            </select>

            <label for="tanggal">Tanggal Penyewaan :</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
