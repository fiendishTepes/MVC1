<?php

include 'config.php';
include VIEW . "header.php"; // ส่วนหัว
include CUSTOM . "theme.php"; // ธีม css js ต่างๆ 
?>

<?php

$htmls = '
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere <?php echo "MYPHPPP"; ?> </a>
  </div>
</div>
     ';

$con = Application::myConnect();
$rs = $con->query("SELECT * FROM tbl_board2 LIMIT 0,50");
?>
<?php

$html .= '<table align="center" cellspacing="0" cellpadding="0" class="table table-bordered" border="1" width="100%">'
        . '<tr align="center">
                <td>
                    ลำดับ
                </td>
                <td>
                    หัวข้อ
                </td>
                <td>
                    ผู้เขียน
                </td>
                <td>
                    วันที่เขียน
                </td>
            </tr>';
?>
<?php while ($arr = $rs->fetch_object()): ?>
    <?php

    $html .= '
        <tr>
            <td>'.++$n.'</td>
            <td>
                '.$arr->board_title.'
            </td>
            <td>'.$arr->board_master.'</td>
            <td>'.$arr->board_date.'</td>
        </tr>
    ';
    ?>
<?php endwhile; ?>

<?php 
$html .="</table>";
//echo $html;
$pdf = Application::myMpdf();
$pdf->WriteHTML($html);
$pdf->Output();
?>
