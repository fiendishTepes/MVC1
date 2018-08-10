<?php
include 'config.php'; // การตั้งค่าทั้งหมด
include VIEW . "header.php"; // ส่วนหัว
include CUSTOM . "theme.php"; // ธีม css js ต่างๆ 
?>
<div class="row">
    <div class="col-lg-12">
        <nav class="navbar navbar-light bg-light navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/<?php echo DOMAIN; ?>">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileMode" aria-controls="mobileMode" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="mobileMode">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo DOMAIN; ?>">หน้าหลัก</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="productDropdown" data-toggle="dropdown" href="#">หมวดสิ้นค้า</a>
                            <div class="dropdown-menu" aria-labelledby="productDropdown" >
                                <?php //while(): ?>
                                <a class="dropdown-item" href="/<?php echo DOMAIN; ?>/product/<?php echo $arr->product; ?>"><?php echo "ชื่อหมวดสินค้า"; ?></a>
                                <?php //endwhile; ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo DOMAIN; ?>/">แจ้งชำระสินค้า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo DOMAIN; ?>/howtoorder">วิธีชำระสิ้นค้า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo DOMAIN; ?>/contact">ติดต่อเรา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo DOMAIN; ?>/board">กระดานข่าว</a>
                        </li>

                        <?php if ($_SESSION['ststus'] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/<?php echo DOMAIN; ?>/logout"><p class="text-danger">ออกจาระบบ</p></a>
                            </li>
                        <?php } else if (empty($_SESSION['ststus']) && $_SESSION['ststus'] != 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/<?php echo DOMAIN; ?>/register">สมัครสมาชิก</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="#login" id="login">เข้าสู่ระบบ</a>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container">
        <?php new Application(); ?>
    </div>
</div>
<?php include VIEW . "footer.php"; // ส่วนท้าย ?>
<div class="modal fade" id="login-modal" role="diglog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="close">close</a>
            </div>
            <div class="modal-body">
                <form method="post" action="/<?php echo DOMAIN; ?>/login">
                    <div class="form-group">
                        <label>
                            username :
                        </label>
                        <input class="form-control" type="text" name="input[username]" id="input[username]">
                    </div>
                    <div class="form-group">
                        <label>
                            password :
                        </label>
                        <input class="form-control" type="text" name="input[password]" id="input[password]">
                    </div>
                    <div class="nav-item">
                        <button type="submit" class="btn btn-primary">
                            เข้าสุ่ระบบ
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-danger">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#login").click(function () {
            $("#login-modal").modal('show');
        });
    });
</script>