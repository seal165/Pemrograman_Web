<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_schedule");
$html = '<center><h3>Data Schedule</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Transportatioon</th>
                <th>Region</th>
                <th>Date</th>
                <th>Name</th>
                <th>From</th>
                <th>To</th>
                <th>Time</th>
            </tr>';
$no = 1;
while ($schedule = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $schedule['transportation'] . "</td>
                <td>" . $schedule['region'] . "</td>
                <td>" . $schedule['date'] . "</td>
                <td>" . $schedule['name'] . "</td>
                <td>" . $schedule['from_location'] . "</td>
                <td>" . $schedule['to_location'] . "</td>
                <td>" . $schedule['time'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-schedule.pdf');
?>
