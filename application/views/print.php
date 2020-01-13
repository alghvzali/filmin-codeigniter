    <html>

    <head>
        <title>Cetak PDF</title>
        <style>
            table {
                border-collapse: collapse;
                table-layout: fixed;
                width: 630px;
            }

            table td {
                word-wrap: break-word;
                width: 20%;
            }
        </style>
    </head>

    <body> <b><?php echo $ket; ?></b><br /><br />
        <table border="1" cellpadding="8">
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Film yang dipesan</th>
                <th>Status</th>
            </tr> 
            <?php if (!empty($pemesanan)) {
                $no = 1;
                foreach ($pemesanan as $data) {
                    $tgl = date('d-m-Y', strtotime($data->tanggal));
                    echo "<tr>";
                    echo "<td>" . $tgl . "</td>";
                    echo "<td>" . $data->nama_pembeli . "</td>";
                    echo "<td>" . $data->email . "</td>";
                    echo "<td>" . $data->nama_film . "</td>";
                    echo "<td>" . $data->status . "</td>";
                    echo "</tr>";
                    $no++;
                }
            }    ?>
        </table>
    </body>

    </html>