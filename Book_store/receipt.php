<html>
<body>
<style>
/* -------------------------------------
    GLOBAL
------------------------------------- */
* {
  margin: 0;
  padding: 0;
  font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  box-sizing: border-box;
  font-size: 14px;
}

img {
  max-width: 100%;
}

body {
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none;
  width: 100% !important;
  height: 100%;
  line-height: 1.6;
}

/* Let's make sure all tables have defaults */
table td {
  vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
body {
  background-color: #f6f6f6;
}

.body-wrap {
  background-color: #f6f6f6;
  width: 100%;
}

.container {
  display: block !important;
  max-width: 600px !important;
  margin: 0 auto !important;
  /* makes it centered */
  clear: both !important;
}

.content {
  max-width: 600px;
  margin: 0 auto;
  display: block;
  padding: 20px;
}

/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
.main {
  background: #fff;
  border: 1px solid #e9e9e9;
  border-radius: 3px;
}

.content-wrap {
  padding: 20px;
}

.content-block {
  padding: 0 0 20px;
}

.header {
  width: 100%;
  margin-bottom: 20px;
}

.footer {
  width: 100%;
  clear: both;
  color: #999;
  padding: 20px;
}
.footer a {
  color: #999;
}
.footer p, .footer a, .footer unsubscribe, .footer td {
  font-size: 12px;
}

/* -------------------------------------
    GRID AND COLUMNS
------------------------------------- */
.column-left {
  float: left;
  width: 50%;
}

.column-right {
  float: left;
  width: 50%;
}

/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
  font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  color: #000;
  margin: 40px 0 0;
  line-height: 1.2;
  font-weight: 400;
}

h1 {
  font-size: 32px;
  font-weight: 500;
}

h2 {
  font-size: 24px;
}

h3 {
  font-size: 18px;
}

h4 {
  font-size: 14px;
  font-weight: 600;
}

p, ul, ol {
  margin-bottom: 10px;
  font-weight: normal;
}
p li, ul li, ol li {
  margin-left: 5px;
  list-style-position: inside;
}

/* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */
a {
  color: #348eda;
  text-decoration: underline;
}

.btn-primary {
  text-decoration: none;
  color: #FFF;
  background-color: #348eda;
  border: solid #348eda;
  border-width: 10px 20px;
  line-height: 2;
  font-weight: bold;
  text-align: center;
  cursor: pointer;
  display: inline-block;
  border-radius: 5px;
  text-transform: capitalize;
}

/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
.last {
  margin-bottom: 0;
}

.first {
  margin-top: 0;
}

.padding {
  padding: 10px 0;
}

.aligncenter {
  text-align: center;
}

.alignright {
  text-align: right;
}

.alignleft {
  text-align: left;
}

.clear {
  clear: both;
}

/* -------------------------------------
    Alerts
------------------------------------- */
.alert {
  font-size: 16px;
  color: #fff;
  font-weight: 500;
  padding: 20px;
  text-align: center;
  border-radius: 3px 3px 0 0;
}
.alert a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  font-size: 16px;
}
.alert.alert-warning {
  background: #ff9f00;
}
.alert.alert-bad {
  background: #d0021b;
}
.alert.alert-good {
  background: #68b90f;
}

/* -------------------------------------
    INVOICE
------------------------------------- */
.invoice {
  margin: 40px auto;
  text-align: left;
  width: 80%;
}
.invoice td {
  padding: 5px 0;
}
.invoice .invoice-items {
  width: 100%;
}
.invoice .invoice-items td {
  border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
  border-top: 2px solid #333;
  border-bottom: 2px solid #333;
  font-weight: 700;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 640px) {
  h1, h2, h3, h4 {
    font-weight: 600 !important;
    margin: 20px 0 5px !important;
  }

  h1 {
    font-size: 22px !important;
  }

  h2 {
    font-size: 18px !important;
  }

  h3 {
    font-size: 16px !important;
  }

  .container {
    width: 100% !important;
  }

  .content, .content-wrapper {
    padding: 10px !important;
  }

  .invoice {
    width: 100% !important;
  }
}
</style>
<table class="body-wrap">
    <tr>
		<td>
    	 
		</td>
		<td class="container" width="600">
			<div class="content">
				<table class="main" width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="content-wrap aligncenter">
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td class="content-block">
									<?php
			 $connection = mysql_connect("localhost","root","");
			 mysql_select_db("lestari_fd", $connection);
			 $sql ="select max(order_id) as idlatest from orders";
			 $sqlExecute = mysql_query($sql) or die (mysql_error());
			$result = mysql_fetch_assoc($sqlExecute);
			$latestid = $result['idlatest'];
			 $result1 = "SELECT * FROM orders where order_id='$latestid'";
			 $output1 = mysql_query($result1);
			 $row1 = mysql_fetch_array($output1);
			 ?>
			 

                                    <img src="images/logo.png" style="width:100%;max-width:100%">   
										<h1>PAYMENT RECEIPT</h1>
									</td>
								</tr>
								<tr>
									<td class="content-block">
										<h2>Thanks for choosing Lestari Cafe</h2>
									</td>
								</tr>
								<tr>
									<td class="content-block">
										<table class="invoice">
											<tr>
												<td><?php echo $row1['dates']?></td>
											</tr>
												<td>
													<table class="invoice-items" cellpadding="0" cellspacing="0">
														<tr>
															<td>Makanan & Minuman</td>
															<td class="alignright">RM<?php echo number_format ($row1['price'],2,'.','')?></td>
														</tr>
														<tr>
															<td>-</td>
															<td class="alignright">-</td>
														</tr>
														<tr>
															<td>-</td>
															<td class="alignright">-</td>
														</tr>
														<tr class="total">
															<td class="alignright" width="80%">Total :</td>
															<td class="alignright">RM<?php echo number_format($row1['price'],2,'.','')?></td>
														</tr>
														
													</table>
												</td>
		
											</tr>
										</table>
									</td>
								</tr>
								
							</table>
						</td>
					</tr>
				</table>
				<body onload="javascript:window.print();">
				</body>
				<div class="footer">
					<table width="100%">
						
								<tr>
									<td class="aligncenter content-block">
                                   <br>KAFE LESTARI UTeM<br>
                                        <a href="tel:0124657534">0187854260</a> | 
                                        <a href="localhost/new/">Lestari Cafe UTeM</a><br>
                                        <a href="http://www.utem.edu.my/portal/">Universiti Teknikal Malaysia Melaka, Hang Tuah Jaya, 76100 Durian Tunggal Melaka</a>
									</td>
								</tr>
					</table>
				</div></div>
		</td>
		<td></td>
	</tr>
</table>
</body>
</html>