<?php
$id = $_GET['id'];
$product = get_SanPham_Id($id);
?>
<div class="img1">
<table border='1'>
	<tr>
	<td>Hình Ảnh :</td>
	<td><img src="images/product/<?php echo $product['hinhanh'] ?>" width="200" height="200" style="margin-top: 40px;"/></td>
	</tr>
	<tr>
	<td>Tên Sản Phẩm:</td>
	<td><h3 style="font-size: 18px; color: red"> <?php echo $product['tensp'] ?></h3></td>
	</tr>
	<tr>
	<td> Xuất Xứ:</td>
	<td><?php echo $product['xuatxu'] ?></td>
	</tr>
	<tr>
	<td> Chất liệu:</td>
	<td><?php echo $product['chatlieu'] ?></td>
	</tr>
	<tr>
	<td>Giá: </td>
	<td><b style="font-size: 16px; color: red"><?php echo number_format($product['gia'], 0) . '&nbsp;vnđ' ?></b></p></td>
	</tr>
	<tr>
	<td>Bảo Hành: </td>
	<td><b style="font-size: 16px; color: red"><?php echo $product['baohanh'] ?></b></p></td>
	</tr>
     
	
    
	</table>
</div>
<div class="gia1">
   <br/>

<h3 style="padding: 10px;">Giới thiệu sản phẩm</h3>
<p><?php echo $product['gioithieu'] ?></p>
<a href="index.php?page=addcart&idgh=<?php echo $id; ?>"><input type="submit" name="mua hang" value="Mua hàng" class="nuttox" style="margin-bottom: 250px;"/></a>
</div>

