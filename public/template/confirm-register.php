<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Untitled Document</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="public/template/css/main1.css" media="all" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	
</head>

<body>


	<div id="wrapper"> <!-- Wrapper-->

		<div id="header"> <!-- header-->
		</div><!--end header-->

		<div id="content"> <!--content-->

			<div class="nav-content"> <!-- nav-->
			</div><!-- end nav-->
	
			<div class="form-register">
				<h2>ご来場の予約はこちら</h2>
				<form method="post" action="?action=success">
					<table >
						<tr>
							<td>モデルウス1 012-345-6789</td>
							<td>モデルウス2 012-345-6789</td>
						</tr>

						<tr>
							<td><strong>ご来場される店舗</strong> </td>
							<td>
		        				
		        				<span><?php echo $data['modelType'] ?><input type='hidden' name ='modelType' value=<?php echo $data['modelType'] ?>></span>
	        				</td>
						</tr>

						<tr>
							<td><strong>ご希望日</strong> </td>
							<td><p><span><?php echo $data['date'] ?></span><input type='hidden' name ='date' value=<?php echo $data['date'] ?>></p></td>
						</tr>

						<tr>
							<td><strong>ご希望時間</strong> </td>
							<td><p><span><?php echo $data['time'] ?></span><input type='hidden' name ='time' value=<?php echo $data['time'] ?>></p></td>
						</tr>	

						<tr>
							<td>
								<strong>お名前</strong>
							</td>
							<td>
								<p><span><?php echo $data['name'] ?></span><input type='hidden' name ='name' value=<?php echo $data['name'] ?>></p>
							</td>
						</tr>

						<tr>
							<td>
								<strong>メールアドレス</strong>
							</td>
							<td>
								<p><span><?php echo $data['mail'] ?></span><input type='hidden' name ='mail' value=<?php echo $data['mail'] ?>></p>
							</td>
						</tr>

						<tr>
							<td>
								<strong>電話番号</strong>
							</td>
							<td>
								<p><span><?php echo $data['phoneNumber'] ?></span><input type='hidden' name ='phoneNumber' value=<?php echo $data['phoneNumber'] ?>></p>
							</td>
						</tr>

						<tr>
							<td>
								<strong>その他、ご希望等</strong> 
							</td>
							<td>

								<p><span><?php echo $data['note'] ?><span><input type='hidden' name ='note' value=<?php echo $data['note'] ?>></p> 
							</td>
						</tr>
						<tr align="center"><td colspan="2"><p>以下の内容で送信します。内容をご確認の上、「送信する」ボタンを押してください。</p></td></tr>

						<tr align="center">
							<td colspan="2">
								<input style=" color: black;border: 1px solid #D6D6D6; background-color: #F2F2F2" type="submit" class="btnback" name="back-register" value="編集する"/>
								<input type="submit" class="btnconfirm" name="confirm-register" value="送信する"/> 
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div> <!--end content-->

		<div id="footer"> <!--footer-->
		</div><!--end footer-->

	</div> <!--End wrapper-->
	<!--<script>
		var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("somedate")[0].setAttribute('min', today);

	</script>-->
</body>
</html>