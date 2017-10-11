<?php
include '../config.php';
require '../tcpdf/tcpdf.php';


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Phoenix Coders');
$pdf->SetTitle('Result Management System PDF ');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data	
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' dlfd ', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));

/*
  class YourPDF extends TCPDF {
        public function Header()
		 {
            if (count($this->pages) === 1) 
			{
			 // Do this only on the first page
                $html .= '<p>Your header here</p>';
            }

            $this->writeHTML($html, true, false, false, false, '');
        }
    }
*/

$pdf->SetFont('Times', '', 11, '', false);
$pdf->setCellHeightRatio(2);


//$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

//$pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, 'S S MEDICORP', 'dfjld ');


// set default monospaced font
//$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

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

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.

//$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();






$html.="<hr>";
$html='<table class="table table-responsive table-hover">';

$html.="<tr>
                                <th>Sr. No</th>
                                <th>Stu Name</th>
                                <th>Semester</th>
								<th>Sub1</th>
								<th>Sub2</th>
								<th>Sub3</th>
								<th>Sub4</th>
								<th>Sub5</th>
								<th>Sub6</th>
								
                                <th>Total<br />(Gain)</th>
					            <th>Total<br />(Subject Marks)</th>
								<th>Per(%)</th>
								
								</tr> ";

$html.="<tr><td colspan='6'>&nbsp;</td></tr>";



 $query=mysqli_query($con,"select * from results");
					  $i=1;
					  
while($rows=mysqli_fetch_array($query))
{
$html.="<tr>";
$html.= "<td>".$i++."</td>";
	
	//show student name
$q=mysqli_query($con,"select name from student where id='".$rows['stu_id']."'");
$r=mysqli_fetch_array($q);
$html.="<td>".$r['name']."</td>";
	
	//show semester name
$q1=mysqli_query($con,"select * from semester where sem_id='".$rows['sem_id']."'");
$r1=mysqli_fetch_array($q1);
	$html.= "<td>".$r1['name']."</td>";
	$html.= "<td>".$rows['sub1']."</td>";
	$html.= "<td>".$rows['sub2']."</td>";
	$html.= "<td>".$rows['sub3']."</td>";
	$html.= "<td>".$rows['sub4']."</td>";
	$html.= "<td>".$rows['sub5']."</td>";
	$html.= "<td>".$rows['sub6']."</td>";
		
	$total=$rows['sub1']+$rows['sub2']+$rows['sub3']+$rows['sub4']+$rows['sub5']+$rows['sub6']+$rows['sub7'];

	
	$html.="<td>".$total."</td>";
	
	
	//get full marks of each subject
$q2=mysqli_query($con,"select * from subject where sem_id='".$rows['sem_id']."'");
$r2=mysqli_fetch_array($q2);	
$total_marks=$r2['marks1']+$r2['marks2']+$r2['marks3']+$r2['marks4']+$r2['marks5']+$r2['marks6'];

	$html.="<td>".$total_marks."  </td>";	
	
	
	$percent=($total*100)/$total_marks;
	$html.= "<td>".(int)$percent." % </td>";
$html.="</tr>";
						                                                     
 }
		
		$html.="			  </tbody>
					  </table>";
  





//$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->writeHTML($html, true, false, false, false);

//for download PDF
//$pdf->Output('quotation_details.pdf', 'D');


//for opening PDF
$pdf->Output('quotation_details.pdf', 'I');


//Save download PDF
//$pdf->Output('quotation.pdf', 'D');

?>

