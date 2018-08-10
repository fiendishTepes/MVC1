<?php
include 'config.php'; // การตั้งค่าทั้งหมด
include VIEW . "header.php"; // ส่วนหัว
include CUSTOM . "theme.php"; // ธีม css js ต่างๆ 
?>
<meta charset="UTF-8">
<div class="row">
    <div class="col-lg-12">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg" style=" top: 0; width: 100%; ">
            <div class="container">
                <a class="navbar-brand" href="/<?php echo DOMAIN; ?>">ADMINISTER</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileMode" aria-controls="mobileMode" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="mobileMode">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo DOMAIN; ?>">หน้าหลัก</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="collapse" href="#editProduct">จัดการสิ้นค้า / หมวดสิ้นค้า <span class="caret"></span></a>
                            <div class="collapse bg-warning" id="editProduct" >

                                <a class="dropdown-item" href="/<?php echo DOMAIN; ?>/">
                                    <?php echo "จัดการหมวดสิ้นค้า"; ?>
                                </a>
                                <a class="dropdown-item" href="/<?php echo DOMAIN; ?>/">
                                    <?php echo "จัดการสิ้รค้า"; ?>
                                </a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="editMember" data-toggle="collapse" href="#member">จัดการสมาชิกสมาชิก <span class="caret"></span></a>
                            <div class="collapse bg-warning" id="member">
                                <a class="dropdown-item" href="/<?php echo DOMAIN; ?>/">
                                    เพิ่มสมาชิก
                                </a>
                                <a class="dropdown-item" href="/<?php echo DOMAIN; ?>/">
                                    แก้ไขสมาชิก
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo DOMAIN; ?>/">ตรวจสอบ การชำระสินค้า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo DOMAIN; ?>/howtoorder">จัดการข่าวสาร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="faq-modal" data-toggle="modal" href="#faq">FAQ'S</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container">

        <?php new Application(); ?>
    </div>   
</div>
<div class="modal fade" id="faq" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1 class="text-center">ยินดีต้อนรับเข้าสู่ระบบทดสอบ</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#faq-modal").click(function(){
            $('#faq').modal('show')
        });
    });
</script>
<?php include VIEW . "footer.php"; // ส่วนท้าย ?>
