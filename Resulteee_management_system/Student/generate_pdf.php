<?php
 session_start();
error_reporting(1);

  extract($_SESSION);
  if((!isset($_SESSION['Loged_User']))||($_SESSION['res']!="student"))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
 ?>
<?php
include '../config.php';
require '../tcpdf/tcpdf.php';
extract($_GET);

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


	//show student name
$q=mysqli_query($con,"select name from student where Index_no='".$_GET['Index_no']."'");
$r=mysqli_fetch_array($q);
//$html.="<td>".$r['name']."</td>";
//echo $r['name'];
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Phenix Coders');
$pdf->SetTitle('Results Sheet PDF ');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

 //set default header data	
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'University of Jaffna ', 'Faculty of Science', array(0,64,255), array(0,64,128));

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
                                <th>No</th>
								<th>Title</th>
                                <th>Course Code</th>
								<th>Credit Value</th>
								<th>Semester</th>
								<th>Level</th>
								<th>Result</th>
							</tr>  ";

$html.="<tr><td colspan='6'>&nbsp;</td></tr>";

 $query=mysqli_query($con,"select Course_Code,credit,semester,Level,Result from results where Index_no='".$_GET['Index_no']."'");
					  $i=1;
					  
while($rows=mysqli_fetch_array($query))
{
$html.="<tr>";
$html.= "<td>".$i++."</td>";
	
	
	//show results
$sem=mysqli_query($con,"select Course_Title from course where Course_Code='".$rows['Course_Code']."'");
	$sem1=mysqli_fetch_array($sem);
	$html.= "<td>".$sem1['Course_Title']."</td>";
	$html.= "<td>".$rows['Course_Code']."</td>";
	$html.= "<td>".$rows['credit']."</td>";
	$html.= "<td>".$rows['semester']."</td>";
	$html.= "<td>".$rows['Level']."</td>";
	$html.= "<td>".$rows['Result']."</td>";
	
$html.="</tr>";
						                                                     
 }
		
		$html.="			  </tbody>
					  </table>";
  

//$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->writeHTML($html, true, false, false, false);

//for download PDF
//$pdf->Output('results_sheet.pdf', 'D');


//for opening PDF
$pdf->Output('results_sheet.pdf', 'I');


//Save download PDF
//$pdf->Output('results_sheet.pdf', 'D');

?>

