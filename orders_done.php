<!DOCTYPE html>
<?php
/*Name: Settbon
  Surname: Benjamin
  Student#: 218327862
  Title of Project
  Declaration: This is my own work and
    any code obtained from other sources
    will be referenced
*/
?>
<html>
	<head>
		<title>Goose Down Sleeping Bag</title>
	</head>
	<body>
		<!--table displaying CWT logo and page title -->
		<table width="80%" align="center">
			<tr>
				<td><img src="tents.jpg" width="200" height="174" align="right" style="WIDTH: 200px; HEIGHT: 174px"></td>
				<td><big><b>&nbsp;&nbsp;3-Season Tent</big></B></td>
			</tr>
		</table>
		<!--table and form displaying inventory data -->
		<form name="frmOrderItem" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<p><table width="80%" border="5" cellspacing="3" cellpadding="5" align="center">
					<tr>
						<th width="20%">
							Selection</th>
						<th width="20%">
							Size</th>
						<th width="20%">
							Color</th>
						<th width="20%">
							Price</th>
						<th width="20%">
							In Stock?</th>
					</tr>
					<tr>
						<td align="center"><input type="radio" checked name="optInvid" value="YES"></td>
						<td align="center">Rectangular</td>
						<td align="center">Blue</td>
                        <td align="center"><input type="hidden" name="price" value="259.99">259.99</input></td>
						<td align="center">Yes</td>
					</tr>
				</table>
			</p>
			<p>
				<!--table displaying form controls -->
				<table width="80%" cellspacing="3" cellpadding="5" align="center">
					<tr>
						<td width="70%"><big>Desired Quantity</big> <input type="text" name="txtQuantity" size="10"></td>
						<td align="right" width="15%"><input type="submit" value="Submit Order" id="btnSubmit" name="btnSubmit"></td>
					</tr>
				</table>
			</p>
            <?php
            $subtot = 0;
            $tax = 0;
            $tot = 0;
            if(isset($_POST['btnSubmit'])){// si tu as pas appuyé sur le bouton la valeur est nulle
                $subtot = $_POST['txtQuantity'] * $_POST['price'];
                $tax = 0.14 * $subtot;
                $tot = $subtot + $tax;
            }
            ?>
            <!-- table summarizing order -->
			<p>
				<table width="80%" align="center" border id="Table1">
					<tr>
						<td align="right">Subtotal:</td>
						<td><input type="text" name="txtSubTotal" value="R <?php echo $subtot= number_format($subtot,2) ?>"></td>
					</tr>
					<tr>
						<td align="right">Tax:</td>
						<td><input type="text" name="txtTax" value="R <?php echo $tax= number_format($tax,2) ?>"></td>
					</tr>
					<tr>
						<td align="right">Order Total:</td>
						<td><input type="text" name="txtOrderTotal" value="R <?php echo $tot= number_format($tot,2) ?>"></td>
					</tr>
				</table>
			</p>
		</form>
	</body>
</html>
