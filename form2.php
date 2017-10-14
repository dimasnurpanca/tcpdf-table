<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf_include.php');

// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new TCPDF('L', 'mm', array('300','297'), true, 'UTF-8', false);


// set document information

// set default header data
// set header and footer fonts
$pdf->SetPrintHeader(false);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// IMPORTANT: disable font subsetting to allow users editing the document
$pdf->setFontSubsetting(false);

// set font
$pdf->SetFont('helvetica', '', 10, '', false);

// add a page
$pdf->AddPage("L");

// create some HTML content
$html = <<<EOD
<style>
th {border: 4px solid black; padding: 3px;}
td {line-height: 25px; text-align:center; vertical-align:middle;}
table {border-collapse: collapse; }

</style>

<table>
<tr>
<td rowspan="4" align="left">Alamat: <input type="text" name="txtNameSearch" /></td>
<td rowspan="4" align="left"></td>
<td rowspan="4" align="left">No :</td>

</tr>
</table>
<form method="post" action="http://localhost/printvars.php" enctype="multipart/form-data">
  <div align="center"><h3><u>SURAT JALAN</u></h3></div>
  <table>
  <tr>
  <td colspan="1" width="100px" align="left">Dari Gudang :</td>
  <td  colspan="3" align="left">Kalianak</td>
  <td align="left">Dikirim Kepada :</td>
  </tr>
  <tr>
  <td colspan="1" width="100px" align="left">Nama Kapal :</td>
  <td  colspan="3" align="left">Teluk Flamingo</td>
  <td align="left">PT.PRIM</td>
  </tr>
  <tr>
  <td colspan="1" width="100px" align="left">Tgl Berangkat :</td>
  <td  colspan="3" align="left"></td>
  <td align="left">Perg</td>
  </tr>
  <tr>
  <td colspan="1" width="100px" align="left">Truck No.Pol. :</td>
  <td  colspan="3" align="left">L</td>
  <td align="left">Mojokerto</td>
  </tr>
  <tr>
  <td colspan="1" width="120px" align="left">Pers. Pelayaran :</td>
  <td  colspan="3" align="left">SPIL</td>
  </tr>
  <tr>
  <td colspan="1" width="100px" align="left">Tujuan Akhir :</td>
  <td  colspan="3" align="left">Banjarmasin</td>
  </tr>
  </table>














<br />
<br />
<table border="1">
       <tr >
           <td rowspan="2">Jenis Barang</td>
           <td colspan="2">Jumlah Barang</td>
           <td rowspan="2">No Container</td>
           <td rowspan="2">No Segel</td>
           <td rowspan="2">Keterangan</td>
       </tr>
       <tr>
           <td colspan="2">Coly</td>
       </tr>
       <tr>
 <td ></td>
  <td colspan="2"></td>
   <td ></td>
    <td></td>
     <td ></td>
       </tr>
       <tr>
 <td ></td>
  <td colspan="2"></td>
   <td ></td>
    <td></td>
     <td ></td>
       </tr>
       <tr>
 <td ></td>
  <td colspan="2"></td>
   <td ></td>
    <td></td>
     <td ></td>
       </tr>
       <tr>
 <td ></td>
  <td colspan="2"></td>
   <td ></td>
    <td></td>
     <td ></td>
       </tr>
       <tr>
 <td ></td>
  <td colspan="2"></td>
   <td ></td>
    <td></td>
     <td ></td>
       </tr>

  </table>
  <span>Catatan : Barang diterima dalam keadaan baik dan cukup</span>
  <br/>

  <h4 align="right">Surabaya, 19.07.2017</h4>


  <table>
         <tr >
             <td width="20%" colspan="1">Penerima</td>
             <td width="20%" colspan="1">Bagian Gudang</td>
             <td width="20%" colspan="1">Sopir Truck</td>
             <td width="20%" colspan="1">PT.CMS</td>

         </tr>
         <tr >
             <td width="20%" colspan="1"></td>
             <td width="20%" colspan="1"></td>
             <td width="20%" colspan="1" ></td>
             <td width="20%" colspan="1"></td>

         </tr>
         <tr >
             <td width="20%" colspan="1"></td>
             <td width="20%" colspan="1"></td>
             <td width="20%" colspan="1" ></td>
             <td width="20%" colspan="1"></td>

         </tr>
         <tr >
             <td width="20%" colspan="1">(..........)</td>
             <td width="20%" colspan="1">(..........)</td>
             <td width="20%" colspan="1" >(..........)</td>
             <td width="20%" colspan="1">(..........)</td>

         </tr>
         <tr >
             <td width="20%" colspan="1">Pelayaran</td>
             <td width="20%" colspan="1">PT</td>

         </tr>


    </table>
<br/>
<br/>
<br/>
    <table>
    <tr >
        <td width="40%" colspan="1">Lembar :</td>
    </tr>
           <tr >
               <td align="center" width="50%" colspan="1">1. PT.CMS (Putih)</td>
               <td width="25%" colspan="1">4. Perusahaan Angkutan (Hijau)</td>
</tr>
<tr >
    <td align="center" width="50%" colspan="1">2. PT.Depo Container (Merah)</td>
    <td width="25%" colspan="1">5. Perusahaan Pelayaran (Kuning)</td>
</tr>
<tr >
    <td align="center" width="50%" colspan="1">3. Bagian Gudang (Biru)</td>
</tr>

</table>
<br /><br /><br />

<input type="button" name="print" value="Print" onclick="print()" />
<br />
</form>
EOD;

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);


// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('form1.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
