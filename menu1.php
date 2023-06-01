<h2>Informasi Perangkat</h2>
<table>
    <tr>
        <th>Nama Properti</th>
        <th>Nilai</th>
    </tr>
    <?php
        // Jalankan perintah termux-telephony-deviceinfo
        $deviceInfo = shell_exec("termux-telephony-deviceinfo");
        $deviceInfo = json_decode($deviceInfo, true);

        // Tampilkan informasi perangkat dalam bentuk grid
        foreach ($deviceInfo as $property => $value) {
            echo "<tr><td>" . $property . "</td><td>" . $value . "</td></tr>";
        }
    ?>
</table>

<h2>Informasi Seluler</h2>
<table>
    <tr>
        <th>Nama Properti</th>
        <th>Nilai</th>
    </tr>
    <?php
        // Jalankan perintah termux-telephony-cellinfo
        $cellInfo = shell_exec("termux-telephony-cellinfo");
        $cellInfo = json_decode($cellInfo, true);

        // Tampilkan informasi seluler dalam bentuk grid
        foreach ($cellInfo as $cell) {
            foreach ($cell as $property => $value) {
                echo "<tr><td>" . $property . "</td><td>" . $value . "</td></tr>";
            }
            echo "<tr><td colspan='2'><hr></td></tr>"; // Add horizontal line between cells
        }
    ?>
</table>