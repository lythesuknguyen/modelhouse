<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Untitled Document</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <link rel="stylesheet" type="text/css" href="public/template/css/main1.css" media="all" /> 
   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  	 <link rel="stylesheet" href="/resources/demos/style.css">
  	
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script>
  	var currentDate = new Date();
  		$(function(){
        $("#datepicker").datepicker(
            {
            monthNamesShort: [ "1月", "2月", "3月", "4月","5月", "6月", "7月", "8月", "9月","10月", "11月", "12月"],
            monthNames: [ "1月", "2月", "3月", "4月","5月", "6月", "7月", "8月", "9月","10月", "11月", "12月"],
    		dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
            minDate: currentDate,
            beforeShowDay: function (date) {
            if (date.getDay() == 3) {
                return [false, ''];
            }
            return [true, ''];
           }
        });
    });
  	</script>
</head>

<body>	

	<div id="wrapper"> <!-- Wrapper-->

		<div id="header"> <!-- header-->
		</div><!--end header-->

		<div id="content"> <!--content-->

			<div class="nav-content"> <!-- nav-->
			</div><!-- end nav-->
			
			<div class="form-register">
				
				<form method="POST" action="?action=register">
					<table id= "ResponsiveTable">
						<tr>
							 <td colspan="2"> <h2>ご来場の予約はこちら</h2></td>
						</tr>
						<tr>
							<td tableHeadData= ''>モデルウス1 012-345-6789</td>
							<td tableHeadData= ''>モデルウス2 012-345-6789</td>
						</tr>
						<tr>
							<td tableHeadData = ''>
								<strong>ご来場される店舗</strong> <strong class="txt-error"><?php echo isset($error['modelType'])? ERROR_REQUIRE :''; ?></strong>
							</td>
							<td tableHeadData = ''>
		        				<input type="radio" name="modelType" value="modelhouse1" <?php echo ($data['modelType']=='modelhouse1') ? 'checked' : '' ?> ><span>ModelHouse 1</span>
		        				<input type="radio" name="modelType" value="modelhouse2" <?php echo ($data['modelType']=='modelhouse2') ? 'checked' : '' ?> ><span>ModelHouse 2</span>
		        			
		        				<span class="txt-error"><?php echo isset($error['modelType'])? $error['modelType'] :''; ?></span>
	        				</td>
						</tr>

						<tr>
							<td tableHeadData = ''>
								<strong>ご希望日</strong> <strong class="txt-error"><?php echo isset($error['date'])? ERROR_REQUIRE :''; ?></strong></td>
							<td tableHeadData = ''>
								<input type="text" name="date" id="datepicker" value= <?php echo isset($data['date']) ? $data['date']:''?>>
		        				<span class="txt-error"><?php echo isset($error['date'])? $error['date'] :''; ?></span>
								</br>
								<span class="txt-note">定休日は毎週水曜日他、臨時休業日の場合もございます。</span>
							</td>
						</tr>

						<tr>
							<td tableHeadData = ''>
								<strong>ご希望時間</strong> <strong class="txt-error"><?php echo isset($error['time'])? ERROR_REQUIRE :''; ?></strong></td>
							<td tableHeadData = ''>
								<select name="time">
								<?php $options = array('--:--','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30'); 

									for($i = 0; $i < count($options); $i++) {
										echo '<option value = "'.$options[$i]
											.($data['time'] == $options[$i] ? '"selected' : '"').'>'
											.$options[$i]
											.'</option>';
									}

  								?>
								</select>

								<span class="txt-error"><?php echo isset($error['time'])? $error['time'] :''; ?></span>
								</br>
								<span class="txt-note">受付時間１０:００－１６:３０からお選びください。（営業時間１０:００－１７:００)</span>
							</td>
						</tr>	

						<tr>
							<td tableHeadData = ''>
								<strong>お名前</strong>
								<strong class="txt-error"><?php echo isset($error['name'])? ERROR_REQUIRE :''; ?></strong>
							</td>
							<td tableHeadData = ''>
								<input type="text" name="name" placeholder=" 列) 山田" value= <?php echo isset($data['name']) ? $data['name']:''?>> 
								<span class="txt-error"><?php echo isset($error['name'])? $error['name'] :''; ?></span>
							</td>
						</tr>

						<tr>
							<td tableHeadData = ''>
								<strong>メールアドレス</strong>
								<strong class="txt-error"><?php echo isset($error['mail'])? ERROR_REQUIRE :''; ?></strong>
							</td>
							<td tableHeadData = ''>
								<input type="text" name="mail" placeholder="列）info@rapinics.co.jp" value= <?php echo isset($data['mail']) ? $data['mail']:''?>>
		        				<span class="txt-error"><?php echo isset($error['mail'])? $error['mail'] :''; ?></span>
							</td>
						</tr>

						<tr>
							<td tableHeadData = ''>
								<strong>電話番号</strong>
								<strong class="txt-error"><?php echo isset($error['phoneNumber'])? ERROR_REQUIRE :''; ?></strong>
							</td>
							<td tableHeadData = ''>
								<input type="text" name="phoneNumber" placeholder="列）123 456 789" value= <?php echo isset($data['phoneNumber']) ? $data['phoneNumber']:''?>>
		        				<span class="txt-error"><?php echo isset($error['phoneNumber'])? $error['phoneNumber'] :''; ?></span>

							</td>
						</tr>

						<tr>
							<td tableHeadData = ''>
								<strong>その他、ご希望等</strong> 
								<!-- <strong class="txt-error">必須</strong> -->
							</td>
							<td tableHeadData = ''>
								<textarea name="note" cols="40" rows="8"><?php echo isset($data['note']) ? $data['note']:''?></textarea>
							</td>
						</tr>

						<tr align="center">
							<td colspan="2"><input type="submit" name="btnRegister" value="入力内容を確認する"/></td>
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