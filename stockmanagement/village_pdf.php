<?php 

    define("HOST","localhost");
    $DB_host="localhost";
    $DB_user_name="root";
    $DB_password="";
    $DB_name ="rwanda";
    $connection=mysqli_connect(HOST,$DB_user_name,$DB_password,$DB_name);
    require_once 'fpdf.php';

    $sql = "SELECT p.provinceName, d.districtName, s.sectorName, c.cellId, c.cellName, v.villageName, v.villageId FROM provinces p INNER JOIN districts d ON p.provinceId = d.provinceId INNER JOIN sectors s ON s.districtId = d.districtId INNER JOIN cells c ON s.sectorId = c.sectorId INNER JOIN villages v ON v.cellId = c.cellId GROUP BY v.villageId";
    $data = mysqli_query($connection, $sql);

    if(isset($_POST['btn_pdf'])){
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('arial','b','12');
        $pdf->Cell('32','16', 'VillageId', '1', '0', 'C');
        $pdf->Cell('32','16', 'Province', '1', '0', 'C');
        $pdf->Cell('32','16', 'District', '1', '0', 'C');
        $pdf->Cell('32','16', 'Sector', '1', '0', 'C');
        $pdf->Cell('32','16', 'Cell', '1', '0', 'C');
        $pdf->Cell('32','16', 'Village', '1', '0', 'C');
        $pdf->SetFont('arial', '', '10');
        $pdf->Ln();
        while($row = mysqli_fetch_assoc($data)) {
            $pdf->Cell('32', '16',$row['villageId'], '1', '0', 'C');
            $pdf->Cell('32', '16',$row['provinceName'], '1', '0', 'C');
            $pdf->Cell('32', '16',$row['districtName'], '1', '0', 'C');
            $pdf->Cell('32', '16',$row['sectorName'], '1', '0', 'C');
            $pdf->Cell('32', '16',$row['cellName'], '1', '0', 'C');
            $pdf->Cell('32', '16',$row['villageName'], '1', '0', 'C');
            $pdf->Ln();
        }

        $pdf->Output(); 

    };  