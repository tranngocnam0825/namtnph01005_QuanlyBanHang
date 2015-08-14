<div class="right">
    <div class="title_right">
        <p>Sản phẩm mới</p>
    </div>
    <div class="content_right">
        <?php 
        $products =  get_sp();
            foreach ($products as $r){
        ?>
        <div class="khungsp" style="float: left">
                <img src="images/product/<?php echo $r['hinhanh'] ?>" width="190" height="160"/>
                <p><b style="font-weight: bold; text-align: center; color: brown;"><?php echo $r['tensp']?></b></p>
                <center><p><strong><?php echo number_format($r['gia'],0).'<b style="color:red">&nbsp;vnđ</b>' ?></strong></p></center>
                <center>
                    <a href="index.php?page=chitiet&id=<?php echo  $r['masp']; ?>"><input type="submit" name="chi tiet" value="Chi tiết" class="nutnhox" /></a>
                <a href="index.php?page=addcart&idgh=<?php echo  $r['masp']; ?>"><input type="submit" name="mua hang" value="Mua hàng" class="nutnhox"/></a>
                </center>
            </div>
        <?php 
        }?>
    </div>
</div> 