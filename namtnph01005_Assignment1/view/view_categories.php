
<div class="left">
    <div class="title_left">
        <p>Sản phẩm</p>
    </div>

    <div class="content_left">
        <br/>
        <?php
        foreach ($category as $r) {
            ?>
            <li>
                <p><?php echo "<a href='index.php?page=product&id=" . $r['mamucsp'] . "'>" . $r['tenmucsp'] . "</a><br>"; ?></p>
            </li>
        <?php } ?>
            <br/>
    </div>
    <div class="title_left">
        <p>Search</p>
    </div>
    <div class="content_left">
        <form action="index.php?page=search" method="POST" class="frms">
            <input type="text" name="keyword" placeholder="Tìm kiếm..." class="typex">
            <input type="submit" name="btnsearch" value="Search" class="nutnhoxx">
        </form>

    </div>
</div>

