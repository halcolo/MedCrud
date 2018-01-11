<?php
//Start the connections and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('connect.php');



date_default_timezone_set("America/Bogota");

	$usuario = 'SELECT * FROM tabla301127_30 ORDER BY sec_tercero DESC';	
	$usuarios=$conn->query($usuario);
	
if(isset($_POST['create_pdf'])){
	require_once('../../tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Juan Diego Alfonso');
	$pdf->SetTitle($_POST['reporte_name']);
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';
	
	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">'.'Reporte de Empleados'.'</h1>
       	
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>NUM_DOC</th>
            <th>NOM_TER</th>
            <th>APELL_TER</th>
            <th>ESPEC</th>
            <th>CIUDAD</th>
            <th>HOSPITAL</th>
            <th>REG_MED</th>
          </tr>
        </thead>
	';
	
	
	while ($user=$usuarios->fetch_assoc()) { 
	$content .= '
		<tr bgcolor="'.$color.'">
            <td>'.$user['id_doc'].'</td>
            <td>'.$user['nom_ter'].'</td>
            <td>'.$user['apell_ter'].'</td>
            <td>'.$user['especialidad'].'</td>
            <td>'.$user['ciudad'].'</td>
            <td>'.$user['hospital'].'</td>
            <td>'.$user['reg_med'].'</td>
        </tr>
	';
	}
	
	$content .= '</table>';
	
	$content .= '
		<div class="row padding">
        	<div class="col-md-12" style="text-align:center;">
            	<span>Pdf Creator </span><a>MEDIMAX</a>
            </div>
        </div>
    	
	';
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}
unset($_SESSION['reg_med']);

?>