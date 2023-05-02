<?php
require_once('tcpdf/tcpdf.php');
require_once 'C:\xampp\htdocs\ArtLink\controller\musicienC.php';
require_once 'C:\xampp\htdocs\ArtLink\model\Musician.php';
try {
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Raed');
    $pdf->SetTitle('List of Musicians');
    $pdf->SetSubject('List of Musicians');

    $pdf->AddPage();

    $musician = new musicianC();
    $musicians = $musician->listmusicians();
    $html = '<table border="1">';
    $html .= '<thead><tr><th>Name</th><th>Category</th></tr></thead><tbody>';
    foreach ($musicians as $musician) {
        $cat = new categorieC();
        $category = $cat->getbyid($musician['id_categorie']);
        $html .= '<tr>';
        $html .= '<td>' . $musician['nom_musician'] . ' ' . $musician['prenom_musician'] . '</td>';
        $html .= '<td>' . $category['nom_categorie'] . '</td>';
        $html .= '</tr>';
    }
    $html .= '</tbody></table>';

    $pdf->writeHTML($html);

    $pdf->Output('list_of_musicians.pdf', 'D');

    ob_end_clean();

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>