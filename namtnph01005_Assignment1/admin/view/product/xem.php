<div class="title">
</div>
<div class="content">
    <div class="khung">
        <div class="img">
            <img src="../images/product/<?php echo $r['hinhanh'] ?>" width="300" height="300"/>
        </div>
        <div class="gia">
            <h3><?php echo $r['tensp'] ?></h3>
            <p style="font-size: 16px;">Giá: <b style="font-size: 16px; color: red"><?php echo number_format($r['gia'], 0) . '&nbsp;vnđ' ?></b></p>

        </div>
        <div class="gt">
            <h3>Giới thiệu sản phẩm</h3>
            <p><?php echo $r['gioithieu'] ?></p>
        </div>
    </div>
