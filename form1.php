<?php
// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf_include.php');

// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new TCPDF('L', 'mm', array('300','297'), true, 'UTF-8', false);


// set document information

// set default header data
// set header and footer fonts
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
.noBorder {
    border:none !important;
}
</style>
<h4>SOPIR : WANDI</h4>
<h4>NOPOL : L 8048 US</h4>
<form method="post" action="http://localhost/printvars.php" enctype="multipart/form-data">
  <div align="center"><h4>PERIODE : 12-18 Agustus 2017</h4></div>
  <table border="1">
    <tr>
      <th width="4%" align="center">NO</th>
      <th width="10%" align="center">TANGGAL</th>
      <th width="7%" align="center">NO SJ</th>
      <th width="8%" align="center">GENSET</th>
      <th width="10%" align="center">JML BOX</th>
      <th width="15%" align="center">NO.CONTAINER</th>
      <th width="10%" align="center">MT/FULL</th>
      <th width="10%" align="center">STATUS</th>
      <th width="10%" align="center">DARI</th>
      <th width="10%" align="center">KE</th>
      <th width="10%" align="center">ONGKOS</th>
    </tr>
    <tr>
      <td>1</td>
      <td>05/06/17</td>
      <td>10298</td>
      <td></td>
      <td>1X20</td>
      <td>OOLIU 520024.4</td>
      <td>MT/FULL</td>
      <td>STUFFING</td>
      <td>DEPO</td>
      <td>MARGO</td>
      <td>167.000</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>


  </table>

  <table>
  <tr>
    <th style="border:0 solid black;"width="4%" align="center"></th>
    <th style="border:0px solid black;"width="4%"width="10%" align="center"></th>
    <th style="border:0px solid black;"width="4%" width="7%" align="center"></th>
    <th style="border:0px solid black;"width="4%" width="8%" align="center"></th>
    <th style="border:0px solid black;"width="4%"width="10%" align="center"></th>
    <th style="border:0px solid black;"width="4%"width="15%" align="center"></th>
    <th style="border:0px solid black;"width="4%"width="10%" align="center"></th>
    <th style="border:0px solid black;"width="4%"width="10%" align="center"></th>
    <th style="border:0px solid black;"width="4%" width="10%" align="center"></th>
    <th style="border:0px solid black;"width="4%"width="10%" align="center"></th>
    <th style="border:0px solid black;"width="4%"width="10%" align="center"></th>
  </tr>
  <tr style="text-align:right;">
    <td colspan="10"></td>
    <td style="border: 3px solid black;">167.000</td>
  </tr>
  <tr style="text-align:right;">
  <td colspan="9"></td>
    <td>UANG MAKAN</td>
    <td >55.000</td>
  </tr>
  <tr>
<td colspan="3" border="2">PENERIMA</td>
<td colspan="6"></td>
<td><b>TOTAL</b></td>
<td border="4">222.000</td>
  </tr>
  <tr>
<td border="2" rowspan="4" colspan="3" >WANDI</td>
<td colspan="6"></td>
<td style="font-size: 11px;">BON RIT-RITAN</td>
<td >500.000</td>
  </tr>
  <tr>
<td colspan="2" ></td>
<td style="font-size: 11px;">KLAIM + MIN</td>
<td border="2">PINJAMAN</td>
<td border="2" colspan="2">SISA PINJAMAN</td>
<td><b>TOTAL</b></td>
<td border="4">(278.000)</td>
  </tr>
  <tr>
<td colspan="2" ></td>
<td style="font-size: 11px;">BON PRIBADI PLUS MIN</td>
<td border="2">32.790.000</td>
<td border="2" colspan="2">32.790.000</td>
<td>ANGSURAN</td>
<td ></td>
  </tr>
  <tr>
<td colspan="5"></td>
<td colspan="2">TOTAL YANG DITERIMA</td>
<td border="4">(278.000)</td>
  </tr>

</table>
<br />
<br />
<table>
<tr>
<td width="4%" align="center"></td>
<td width="4%"width="10%" align="center"></td>
<td width="4%" width="7%" align="center"></td>
<td width="4%" width="8%" align="center"></td>
<td width="4%"width="10%" align="center"></td>
<td width="4%"width="15%" align="center"></td>
<td width="4%"width="10%" align="center"></td>
<td width="4%"width="10%" align="center"></td>
<td width="4%" width="10%" align="center"></td>
<td width="4%"width="10%" align="center"></td>
<td width="4%"width="10%" align="center"></td>
</tr>
<tr>
<td></td>
<td border="1">537</td>
<td border="1">543</td>
<td border="1">548</td>
<td border="1">586</td>
<td border="1">596</td>
<td border="1"></td>
<td border="1"></td>
<td border="1"></td>
<td border="2" rowspan="2">TOTAL BON 7.400.000</td>
</tr>
<tr>
<td></td>
<td border="1">700.000</td>
<td border="1">600.000</td>
<td border="1">5.100.000</td>
<td border="1">500.000</td>
<td border="1">500.000</td>
<td border="1"></td>
<td border="1"></td>
<td border="1"><div contenteditable="true" id="editor">Please type something in here</div></td>

</tr>

  <tr>
  <td></td>
    <td colspan="2">Ket. uang makan per hari Rp.5000 POT INSENTIF Rp.100.000,-</td>
    <td></td>
    <td rowspan="2">Dibuat Oleh, Chichi</td>
    <td></td>
    <td rowspan="2">Diperiksa Oleh, Dadang</td>
    <td></td>
    <td rowspan="2">Mengetahui Oleh, Misnan</td>
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
