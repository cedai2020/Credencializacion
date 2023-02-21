<?php
    function generar($nombre, $numero, $fecha, $foto, $firma) {
        require('../fpdf/fpdf.php');
        //require('conexion-simple.php');
        $pdf = new FPDF('L', 'mm', [87.46, 55.97]);

        $urlFoto = "../Assets/images/". $foto;
        $urlFirma = "../Assets/images/". $firma;

        $pdf->AddPage();

        //Fondo frontal
        $pdf->Image('../Assets/images/c1.jpg', 0, 0, 87.46);

        //Firma 1
        $pdf->Image($urlFirma, 9, 40, 20);

        //Firma 2
        $pdf->Image($urlFirma, 57, 40, 20);

        //Foto
        $pdf->Image($urlFoto, 6, 4, 20);

        $pdf->AddPage();

        //Fondo trasero
        $pdf->Image('../Assets/images/c2.jpg', 0, 0, 87.46);

        //Texto nombre
        $pdf->SetFont('Arial', 'B', 5);
        $pdf->SetXY(21.5, 29);
        $pdf->Cell(40, 2, utf8_decode($nombre));

        //Texto nacimiento
        $pdf->SetFont('Arial', 'B', 5);
        $pdf->SetXY(26.5, 34.5);
        $pdf->Cell(40, -1, $fecha);

        //Texto número
        $pdf->SetFont('Arial', 'B', 5);
        $pdf->SetXY(22, 42);
        $pdf->Cell(40, -7, $numero);


        $pdf->Output('D','credencial.pdf');
    }
?>