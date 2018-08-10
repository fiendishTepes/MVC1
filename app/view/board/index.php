
<div class="container">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <p>เขียนเว็บบอร์ด</p>
                <button class="btn btn-info" type="button" id="addBoard" data-target="#addBoard">สร้างกระดานข่าว</button>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <table broder="0" width="100%" class="table table-hover text-center">
            <tr>
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
            </tr>
            <?php
            $con = Application::myConnect();
            $start = 0;
            $limit = 20;
            $rs = $con->query("SELECT * FROM tbl_board2 LIMIT $start , $limit");
            while ($arr = $rs->fetch_object()):
                ?>
                <tr>
                    <td><?php echo ++$n; ?></td>
                    <td>
                        <a href="/<?php echo DOMAIN . "/board/?id=" . $arr->board_id; ?>"><?php echo $arr->board_title; ?></a>
                    </td>
                    <td><?php echo $arr->board_master; ?></td>
                    <td><?php echo $arr->board_date; ?></td>
                </tr>
<?php endwhile; ?>
        </table>
    </div>
</div>
<div class="modal fade" id="addBoard" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
            </div>
            <div class="modal-body">
                <form method="post" action="/<?php echo DOMAIN; ?>/board/add">
                    <table class="table table-bordered"> 
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label>หัวข้อ</label>
                                    <input type="text" name="input[title]" id="input[title]" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label>
                                        ข้อความ
                                    </label>
                                    <textarea class="form-control" name="input[content]" id="input[contents]"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="input[master]"  id="inpit[master]" value="<?php echo $_SESSION['name']; ?>">
                                <button type="submit" class="bn btn-info">เพิ่ม</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("button#addBoard").click(function () {
            $("div#addBoard").modal('show');
        });
    });
</script>