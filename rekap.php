Open();
$pdf->addPage();
$pdf->setAutoPageBreak(false);
$pdf->setFont('Arial','',12);



$pdf->text(10,30,'LAPORAN DATA BARANG');
$pdf->text(10,36,'INFORMASI DATA');

$yi = 50;
$ya = 44;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->CELL(6,6,'ID BARANG',1,0,'C',1);
$pdf->CELL(25,6,'NAMA BARANG',1,0,'C',1);
$pdf->CELL(50,6,'SATUAN',1,0,'C',1);
$pdf->CELL(50,6,'HARGA',1,0,'C',1);
$ya = $yi + $row;

$sql = mysql_query("select *from tbarang order by Id_barang");
$i = 1;
$no = 1;
$max = 31;
$row = 6;



while($data = mysql_fetch_array($sql)){

$pdf->setXY(10,$ya);
$pdf->setFont('arial','',9);
$pdf->setFillColor(255,255,255);
$pdf->cell(6,6,$no,1,0,'C',1);
$pdf->cell(25,6,$data[Id_barang],1,0,'L',1);
$pdf->cell(50,6,$data[nama_barang],1,0,'L',1);
$pdf->CELL(50,6,$data[satuan],1,0,'C',1);
$pdf->CELL(50,6,$data[harga],1,0,'C',1);

$ya = $ya+$row;
$no++;
$i++;
$dm[Id_barang] = $data[Id_barang];

}
$pdf->text(100,$ya+6,"PADANG , ".$tgl);
$pdf->text(100,$ya+18,"PIMPINAN");
