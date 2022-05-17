<?php
require('fpdf.php');
/*A4 width : 219mm*/
$pdf = new FPDF('P','mm','A4');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Hello World!');

        $hostName = "localhost";
        $userName = "root";
        $password = "123";
        $databaseName = "eldb";
        $conn = new mysqli($hostName, $userName, $password, $databaseName);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }






class PDF extends FPDF
{

    
    

// function Header()
//                 {
//                     // Logo
//                     // $this->Image('logo.png',10,6,30);
//                     // Arial bold 15
//                     $this->SetFont('Arial','B',15);
//                     // Move to the right
//                     // $this->Cell(80);
//                     // Title
//                     $this->Cell(100,10,'Division of Biomedical Engineering Services',0,0,);
//                     $this->SetFont('Arial','B',18);
//                     $this->cell(75,10, 'JOB CARD',0,0,'R');
//                     // Line break
//                     $this->Ln(8);
//                     $this->SetFont('Arial','B',15);
//                     $this->Cell(50,10,'Ministry of Health');
//                     $this->Ln(8);
//                 }


                

// // Page footer
// function Footer()
//                 {
//                     // Position at 1.5 cm from bottom
//                     $this->SetY(-15);
//                     // Arial italic 8
//                     $this->SetFont('Arial','I',8);
//                     // Page number
//                     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
//                 }
}




$select = "SELECT * FROM `institutes` ORDER BY Job_id DESC LIMIT 0,1";
$result = $conn->query($select);
// Instanciation of inherited class
                $pdf = new PDF();
                $pdf->AliasNbPages();
                $pdf->AddPage();


                    $pdf->SetFont('Arial','i',11);
                    while($row = $result->fetch_object()){
                    $job_id = $row->job_id;
                    $institute_name = $row->institute_name;
                    $equipment_name= $row->equipment_name;
                    $equipment_make = $row->equipment_make;
                    $equipment_model = $row->equipment_model;
                    $location_id = $row->location_id;
                    $oic_id = $row->oic_id;
                    $h_type = $row->h_type;
                    $dt2 = $row-> dt2;


                    $pdf->SetFont('Arial','B',15);
                    $pdf->Cell(120,10,'Division of Biomedical Engineering Services',0,0,);
                    $pdf->SetFont('Arial','B',20);
                    $pdf->cell(75,10, 'JOB CARD',0,1,'C');
                    $pdf->SetFont('Arial','B',15);
                    $pdf->Cell(120,10,'Ministry of Health',0,0,'L');
                    $pdf->SetFont('Arial','B',10);
                    $pdf->cell(10, 6, 'Job No :',0,0,'c');
                    $pdf->Cell(10 ,6,'',0,0);
                    $pdf->SetFont('Arial','B',12);
                    $pdf->Cell(10, 6,'EL',1,0,'c');
                    $pdf->Cell(20,6,$job_id,1,0,'R');
                    $pdf->Cell(8, 6,'22',1,0,'c');
                    $pdf->Cell(6, 6,'C',1,0,'c');
                    $pdf->Ln();


                    $pdf->SetFont('Arial','B',10);
                    $pdf->cell(4, 6, '1.',0,0,'R');
                    $pdf->cell(50, 6, 'Place',0,0,'R');
                    $pdf->cell(15, 6, '',0,0,'C');
                    $pdf->cell(25, 6, 'Type',0,1,'L');
                    $pdf->cell(20, 6, 'Institute :',0,0,'c');
                    $pdf->Cell(40,6,$institute_name,1,0,'C');
                   
                    $pdf->Cell(20,6,$h_type,1,0,'C');
                    $pdf->Cell(44 ,8,'',0,0);

                    $pdf->cell(30, 6, 'Location :',0,0,'R');
                    $pdf->Cell(30,6,$location_id,1,1,'C');
                    $pdf->Cell(26,2,'',0,1,);
                    $pdf->cell(40, 6, 'Massage received on:');
                    $pdf->Cell(30,6, $dt2 ,1,0,'C');
                    $pdf->Cell(65,1,'',0,0,);
                    $pdf->cell(12, 6, 'Type','R');
                    $pdf->Cell(9 ,6,'LTR',1,0,'C');
                    $pdf->Cell(9 ,6,'PHN',1,0,'C');
                    $pdf->Cell(9 ,6,'FAX',1,0,'C');
                    $pdf->Cell(9 ,6,'PSL',1,1,'C');
                    
                    
                    $pdf->Cell(26,2,'',0,1,);
                    $pdf->cell(22, 6, 'Equipment :');
                    $pdf->Cell(75,6,$equipment_name,1,0,'C');
                    $pdf->cell(3, 6, '',0,0,'C');
                    $pdf->cell(15, 6, 'Make :','R');
                    $pdf->Cell(25,6,$equipment_make,1,0,);
                    $pdf->cell(5, 6, '',0,0,'C');
                    $pdf->cell(15, 6, 'Model :','R');
                    $pdf->Cell(25,6,$equipment_model,1,1);
                    $pdf->cell(50, 4, '',0,1,'C');
                    $pdf->cell(35, 6, 'Massage Taken by:');
                    $pdf->Cell(50 ,4,'.............................................',0,0,'L');
                    $pdf->Cell(20,6,$oic_id,1,0,'C');
                    $pdf->cell(20, 6, '',0,0,'C');
                    $pdf->Cell(60 ,4,'Signature:-............................. ',0,1,'L');
                    $pdf->Ln();
                    $pdf->cell(50, 1, '',0,1,'C');
                    $pdf->cell(10, 6, 'OIC :');
                    $pdf->Cell(50 ,4,'...............................................',0,0,'L');
                    $pdf->Cell(20,6,'',1,0,'C');
                    $pdf->cell(20, 6, '',0,0,'C');
                    $pdf->cell(12, 6, 'Date:','R');
                    $pdf->Cell(6 ,6,'',1,0,'C');
                    $pdf->Cell(6 ,6,'',1,0,'C');
                    $pdf->Cell(6 ,6,'',1,0,'C');
                    $pdf->Cell(6 ,6,'',1,0,'C');
                    $pdf->Cell(6 ,6,'2',1,0,'C');
                    $pdf->Cell(6 ,6,'0',1,0,'C');
                    $pdf->Cell(6 ,6,'',1,0,'C');
                    $pdf->Cell(6 ,6,'',1,0,'C');
                    
                //     $pdf->cell(50, 6, '',0,0,'C');
                    $pdf->Ln();
                 
                  

                    
                 

}


$pdf->Cell(50 ,1,'',0,1);
$pdf -> Line(15, 75, 203, 75);
$pdf -> Line(15, 76, 203, 76);
$pdf->SetFont('Arial','B',9);
/*Heading Of the table*/
$pdf->Cell(50 ,6,'2.',0,1);
$pdf->Cell(32 ,6,'Date & Time',1,0,'C');
$pdf->Cell(32 ,6,'',1,0,'C');
$pdf->Cell(32 ,6,'',1,0,'C');
$pdf->Cell(32 ,6,'',1,0,'C');
$pdf->Cell(32 ,6,'',1,0,'C');
$pdf->Cell(32 ,6,'',1,1,'C');
$pdf->Cell(32 ,6,'Staff No.',1,0,'C');
$pdf->Cell(16 ,6,'Time On',1,0,'C');
$pdf->Cell(16 ,6,'Time Off',1,0,'C');
$pdf->Cell(16 ,6,'Time On',1,0,'C');
$pdf->Cell(16 ,6,'Time Off',1,0,'C');
$pdf->Cell(16 ,6,'Time On',1,0,'C');
$pdf->Cell(16 ,6,'Time Off',1,0,'C');
$pdf->Cell(16 ,6,'Time On',1,0,'C');
$pdf->Cell(16 ,6,'Time Off',1,0,'C');
$pdf->Cell(16 ,6,'Time On',1,0,'C');
$pdf->Cell(16 ,6,'Time Off',1,1,'C');
/*Heading Of the table end*/
$pdf->Cell(32 ,5,'1',1,0,'L');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,1,'C');
//2
$pdf->Cell(32 ,5,'2',1,0,'L');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,0,'C');
$pdf->Cell(16 ,5,'',1,1,'C');
//3
$pdf->Cell(32 ,4,'3',1,0,'L');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,1,'C');
//4
$pdf->Cell(32 ,4,'4',1,0,'L');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,1,'C');
//5
$pdf->Cell(32 ,4,'5',1,0,'L');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,1,'C');
//6
$pdf->Cell(32 ,4,'6',1,0,'L');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,1,'C');
//7
$pdf->Cell(32 ,4,'7',1,0,'L');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,0,'C');
$pdf->Cell(16 ,4,'',1,1,'C');


//end of section 2
$pdf->Cell(16 ,3,'',0,1,'C');
$pdf -> Line(15, 124, 203, 124);
$pdf -> Line(15, 125, 203, 125);
$pdf->Cell(20 ,10,'3.',0,0);
$pdf->Cell(35 ,10,'ISSUES',0,0,'C');
$pdf->Cell(70 ,10,'SPARE PARTS',0,0,'C');
$pdf->Cell(60 ,10,'RETURNS',0,0,'C');

$pdf-> Ln();
/*Heading Of the table*/
$pdf->Cell(27 ,6,'H500',1,0,'C');
$pdf->Cell(20 ,6,'Stock No',1,0,'C');
$pdf->Cell(20 ,6,'Qty',1,0,'C');
$pdf->Cell(47 ,6,'Discription',1,0,'C');
$pdf->Cell(12 ,6,'Sig.',1,0,'C');
$pdf->Cell(27 ,6,'H503',1,0,'C');
$pdf->Cell(20 ,6,'Stock No',1,0,'C');
$pdf->Cell(20 ,6,'Qty',1,1,'C');
//1
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//2
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//3
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//4
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//5
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//6
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//7
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//8
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//9
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');
//10
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(47 ,5,'',1,0,'C');
$pdf->Cell(12 ,5,'',1,0,'C');
$pdf->Cell(27 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,0,'C');
$pdf->Cell(20 ,5,'',1,1,'C');


$pdf->Cell(2 ,4,'',0,1);
$pdf -> Line(15, 191, 203, 191);
$pdf -> Line(15, 192, 203, 192);

$pdf->Cell(8 ,6,'4.',0,0);

$pdf->Cell(40 ,1,'',0,0);
$pdf->Cell(36 ,6,'INITIALS',0,0,'L');
$pdf->Cell(30 ,6,'SURNAME',0,0,'C');
$pdf->Cell(60 ,6,'DESIGNATION',0,1,'R');
// $pdf->Cell(47 ,6,'',1,0,'C');
// $pdf->Cell(12 ,6,'',1,0,'C');
// $pdf->Cell(27 ,6,'',1,0,'C');
// $pdf->Cell(27 ,6,'',1,0,'C');

$pdf->Cell(8 ,6,'  I,',0,0,'C');
$pdf->Cell(12 ,6,'Dr.',1,0,'C');
$pdf->Cell(12 ,6,'Mr.',1,0,'C');
$pdf->Cell(12 ,6,'Mrs.',1,0,'C');
$pdf->Cell(22 ,6,'',1,0,'C');
$pdf->Cell(75 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');

$pdf-> Ln();

$pdf->SetFont('Arial','i',7);
$pdf->Cell(80 ,4,'     of this institution certify that :',0,1,'L');
$pdf->Cell(186 ,4,'    1. The medical equipment referred to in section 1 was reported as being defective to the BES.',0,1,'L');
$pdf->Cell(206 ,4,'    2. That the BES officers listed in section 2 personally attended to the repair of this equipment at the times specified therein.',0,1,'L');
$pdf->Cell(100 ,4,'    3. That the entries in section 5 are to the best of my knowledge correct.',0,1,'L');

$pdf->SetFont('Arial','i',10);
$pdf->Cell(290 ,6,'OBSERVATIONS:- ...............................................................................................................................................................',0,1,'L');
$pdf-> Ln();
$pdf->Cell(310 ,4,'Time:- ......................                         Date:-.............................                          Signature:- ......................',0,1,'L');
$pdf -> Line(10, 240, 203, 240);
$pdf -> Line(10, 241, 203, 241);

$pdf-> Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150 ,4,'5.   Officer in Charge :........................                       Signature:-........................ ',0,0,'L');
$pdf->Cell(15 ,6,'Number:',0,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,1,'C');

$pdf->Cell(290 ,6,'Repaired - Un repaired as :.................................................................................................................................................. ',0,1,'L');
$pdf->Cell(290 ,6,'.................................................................................................................................................. ',0,0,'L');
$pdf-> Ln();
$pdf-> Ln();
$pdf->Cell(45 ,6,'Job completed on:',0,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'2',1,0,'C');
$pdf->Cell(6 ,6,'0',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(6 ,6,'',1,0,'C');
$pdf->Cell(115 ,6,'Officer in Charge :- ............................',0,0,'C');



// $pdf->Cell(27 ,6,'',1,0,'C');
// $pdf->Cell(27 ,6,'',1,0,'C');
// $pdf->Cell(12 ,6,'',1,1,'C');
// $pdf->Cell(12 ,6,'',1,1,'C');
// $pdf->Cell(12 ,6,'',1,1,'C');

// $pdf->SetFont('Arial','',10);
//     // for ($i = 0; $i <= 10; $i++) {
// 	// 	$pdf->Cell(10 ,6,$i,1,0);
// 	// 	$pdf->Cell(80 ,6,'HP Laptop',1,0);
// 	// 	$pdf->Cell(23 ,6,'1',1,0,'R');
// 	// 	$pdf->Cell(30 ,6,'15000.00',1,0,'R');
// 	// 	$pdf->Cell(20 ,6,'100.00',1,0,'R');
// 	// 	$pdf->Cell(25 ,6,'15100.00',1,1,'R');
// 	// }
		

// // $pdf->Cell(118 ,6,'',0,0);
// // $pdf->Cell(25 ,6,'Subtotal',0,0);
// // $pdf->Cell(45 ,6,'151000.00',1,1,'R');


                $pdf->Output();
?>



