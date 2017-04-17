

<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>
	<!-- Form -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Wizard -->
	<script src="js/plugins/wizard/jquery.form.wizard.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
	<!-- XEditable -->
	<script src="js/plugins/momentjs/jquery.moment.js"></script>
	<script src="js/plugins/mockjax/jquery.mockjax.js"></script>
	<script src="js/plugins/xeditable/bootstrap-editable.min.js"></script>
	<script src="js/plugins/xeditable/demo.js"></script>
	<script src="js/plugins/xeditable/address.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body>
	
	<div class="container-fluid" id="content">
		
		<div id="main">
			<div class="container-fluid">
				
			<?php 
include('db.php');

 $ids=$_POST['id'];
  $mobile=$_POST['mobile'];
 //$age=$_POST['age'];
 //$req=$_POST['req'];
 
 
 
				 
 
	
	$a=mysql_query("SELECT * FROM cuscare WHERE ID='$ids'");
	$var1=mysql_fetch_array($a);
	$var2=mysql_fetch_row($a);
	
	
	//echo $var1['id'];
	$id=  $var1['ID'];
	$b=mysql_query("SELECT * FROM cuscare WHERE MOBNO='$mobile'" );
	$mob=mysql_fetch_array($b);
	$var2=mysql_fetch_row($b);
	$mob=  $mob['MOBNO'];
	if($ids == $id)
 {
	$title=  $var1['TITLE'];
	$mob =  $var1['MOBNO'];
	$user =  $var1['USERNAME'];
	$add=  $var1['ADDRESS'];
	$street = $var1['STREET'];
	$subarea = $var1['SUBAREA'];
	$area=$var1['AREA'];
	$thrash=$var1['THRASH'];
	//echo "Your Req ID is: ".$id;
	//echo $mob;
	//echo $user;



 
 
	

?>	
				
	<div class="row-fluid" style="margin-left:-200px;">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-magic"></i>
									Existing Customer Care Request
								</h3>
							</div>
							<div class="box-content">
								<form action="#" method="POST" class='form-horizontal form-wizard' id="ss">
									<div class="step" id="firstStep">
										<ul class="wizard-steps steps-4">
											<li class='active'>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
													</span>
													<span class="description">
														Previous Request
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Add Request
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="step-forms">
											<div class="control-group">
											<label for="textfield" class="control-label">	Request ID</label>
											<div class="controls">
											<input type="text" name="reqid" readonly value="<?php echo $id; ?>" number="true" id="reqid" class="required" style="width:190px; margin-top:10px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">User ID:</label>
											<div class="controls">
												<input type="text" name="userid" readonly  value="<?php echo $id; ?>" number="true" id="userid" class="required" style="width:190px; ">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">Mobile No:</label>
											<div class="controls">
												<input type="text" readonly name="mobile" value="<?php echo $mob; ?>" number="true"  id="mobile" class="required"  style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">TITLE:</label>
											<div class="controls">
												<input type="text" readonly  name="title" value="<?php echo $title;?>" id="title" class="required"  style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">NAME:</label>
											<div class="controls">
												<input type="text" readonly name="username"value="<?php echo $user; ?>" id="username" class="required"  style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">Door No / Floor No</label>
											<div class="controls">
												<input type="text" readonly class="required"  name="address"  value="<?php echo $add; ?>" id="address"   style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">STREET NAME:</label>
											<div class="controls">
											
						<input type="text" readonly class="required"  name="address"  value="<?php echo $street; ?>" id="address"   style="width:190px;">
											
												
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">THRASH:</label>
											<div class="controls">
											
								<input type="text" readonly class="required"  name="address"  value="<?php echo $thrash; ?>" id="address"   style="width:190px;">
											
												
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">SUBAREA:</label>
											<div class="controls">
											
								<input type="text" readonly class="required"  name="address"  value="<?php echo $subarea; ?>" id="address"   style="width:190px;">
												
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">AREA:</label>
											<div class="controls">
											
								<input type="text" readonly class="required"  name="address"  value="<?php echo $area; ?>" id="address"   style="width:190px;">
												
											</div>
										</div>
										</div>
									</div>
									<div class="step" id="secondStep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="textfield" class="control-label">AREA:</label>
											<div class="controls">
											
												
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">CITY:</label>
											<div class="controls">
											<select name="city" id="city" class="required" style="width: 190px;">
										
	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
											</div>
										</div>
									<!--  	<div class="control-group">
											<label for="textfield" class="control-label">COUNTRY::</label>
											<div class="controls">
												<input type="text" name="country" value="" id="country" class="required" style="width:190px;">
											</div>
										</div>  -->
										<div class="control-group">
											<label for="password" class="control-label">PINCODE:</label>
											<div class="controls">
												<input type="text"  name="pinfcode" value="" number="true" id="pinfcode" style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">LANDMARK:</label>
											<div class="controls">
												
											</div>
										</div>
										<div align="center" style="margin-left:50px;" >
										
										
										
										
											<input autocomplete="off"  type="button" name="add" style="width: 100px" class="btn btn-primary" value="Add Request" id="add"  onclick="check_uploaddis(this.value)">
										
											<input type="hidden" name="view" value="" id="view" />
											<input type="submit" value="View Previous Request" name="viewreq" class="btn btn-primary" /></div><br>
										
										<div class="control-group">
											<label for="textarea" class="control-label">REQUEST1: 	</label>
											<div class="controls">
											<table><tr>         
											<td>Group</td>
											<td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-original-title="Select group">Admin</a></td>
											<td class='hidden-480'><span class="muted">Select, loaded from server. <strong>No buttons</strong> mode</span></td>
										</tr> </table>
											<td class='hidden-480'><span class="muted">Select, loaded from server. <strong>No buttons</strong> mode</span></td>
											<a href="#" id="address" data-type="address" data-pk="1" data-original-title="Please, fill address">hhh</a>
											<td class='hidden-480'><span class="muted">Your custom input, several fields</span></td>
											<input type="date" name="date1" value="" id="date1" class="required" style="width:130px;">
											
<input autocomplete="off"  style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px"  type="text" name="other" value="" id="other" class="required">
											</div>
										</div>
										<!-- ---------------------------The Add New Request DIV -------------------------------- -->
										<div class="control-group" id="bc" style="display:none;" >
											<label for="textarea" class="control-label">REQUEST2: 	</label>
											<div class="controls">
											<input type="date" name="date2" value="" id="date2" style="width:130px;">
											
<input autocomplete="off"   style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px"  type="text" name="othera" value="" id="othera" class="required">
											</div>
										</div>
										<div class="control-group" id="bc1" style="display:none;">
											<label for="textarea" class="control-label">REQUEST3: 	</label>
											<div class="controls">
											<input type="date" name="date3" value="" id="date3" style="width:130px;">
											
<input autocomplete="off"   style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px" type="text" name="otherb" value="" id="otherb" class="required">
											</div>
										</div>
										<div class="control-group" id="bc2" style="display:none;">
											<label for="textarea" class="control-label">REQUEST4: 	</label>
											<div class="controls">
											<input type="date" name="date4" value="" id="date4" class="requirefffd" style="width:130px;">
												
<input autocomplete="off"     style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px"  type="text" name="otherc" value="" id="otherc" class="required">
											</div>
										</div>
										<div class="control-group" id="bc3" style="display:none;">
											<label for="textarea" class="control-label">REQUEST5: 	</label>
											<div class="controls">
											<input type="date" name="date5" value="" id="date5" class="requirefffd" style="width:130px;">
												
<input autocomplete="off"    style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px"  type="text" name="otherd" value="" id="otherd" class="required">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">NOTE:</label>
											<div class="controls">
												<textarea 
	id="note" name="note" class="required" style="width: 300px;" maxlength="300" rows="2"
	cols="50"></textarea>
											</div>
										</div>
									</div>
									<div class="step" id="thirdStep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Previous Request
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Additional information</label>
											<div class="controls">
												<textarea name="textare" id="tt333" class="span12" rows="7" placeholder="You can provide additional information in here..."></textarea>
											</div>
										</div>
									</div>
									<div class="step" id="fourthstep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Check again</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="policy" value="agree" data-rule-required="true"> Everything is ok. Submit</label>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="btn" value="Back" id="back">
										<input type="submit" class="btn btn-primary" value="Submit" id="next">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
<?php } ?>
<?php if($ids != $id) { ?>
<div class="row-fluid" style="margin-left:-200px;">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-magic"></i>
									Create Customer Care Request
								</h3>
							</div>
							<div class="box-content">
								<form action="#" method="POST" class='form-horizontal form-wizard' id="ss">
									<div class="step" id="firstStep">
										<ul class="wizard-steps steps-4">
											<li class='active'>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
													</span>
													<span class="description">
													Add Request
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Note
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="step-forms">
											<div class="control-group">
											<label for="textfield" class="control-label">	Request ID</label>
											<div class="controls">
											<input type="text" name="reqid"  value="" number="true" id="reqid" class="required" style="width:190px; margin-top:10px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">User ID:</label>
											<div class="controls">
												<input type="text" name="userid"  value="" number="true" id="userid" class="required" style="width:190px; ">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">Mobile No:</label>
											<div class="controls">
												<input type="text"  name="mobile" value="" number="true"  id="mobile" class="required"  style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">TITLE:</label>
											<div class="controls">
												<input type="text"   name="title" value="" id="title" class="required"  style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">NAME:</label>
											<div class="controls">
												<input type="text"  name="username"value="" id="username" class="required"  style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">Door No / Floor No</label>
											<div class="controls">
												<input type="text" class="required"  name="address"  value="" id="address"   style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">STREET NAME:</label>
											<div class="controls">
											
											
												
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">THRASH:</label>
											<div class="controls">
											
											
												
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">SUBAREA:</label>
											<div class="controls">
											
												
											</div>
										</div>
										</div>
									</div>
									<div class="step" id="secondStep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="textfield" class="control-label">AREA:</label>
											<div class="controls">
											
												
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">CITY:</label>
											<div class="controls">
											<select name="city" id="city" class="required" style="width: 190px;">
										
	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
											</div>
										</div>
									<!--  	<div class="control-group">
											<label for="textfield" class="control-label">COUNTRY::</label>
											<div class="controls">
												<input type="text" name="country" value="" id="country" class="required" style="width:190px;">
											</div>
										</div>  -->
										<div class="control-group">
											<label for="password" class="control-label">PINCODE:</label>
											<div class="controls">
												<input type="text"  name="pinfcode" value="" number="true" id="pinfcode" style="width:190px;">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">LANDMARK:</label>
											<div class="controls">
												
											</div>
										</div>
										<div align="center" style="margin-left:50px;" >
										
										
										
										
											<input autocomplete="off"  type="button" name="add" style="width: 100px" class="btn btn-primary" value="Add Request" id="add"  onclick="check_uploaddis(this.value)">
										
											<input type="hidden" name="view" value="" id="view" />
											<input type="submit" value="View Previous Request" name="viewreq" class="btn btn-primary" /></div><br>
										
										<div class="control-group">
											<label for="textarea" class="control-label">REQUEST1: 	</label>
											<div class="controls">
											<table><tr>         
											<td>Group</td>
											<td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-original-title="Select group">Admin</a></td>
											<td class='hidden-480'><span class="muted">Select, loaded from server. <strong>No buttons</strong> mode</span></td>
										</tr> </table>
											<td class='hidden-480'><span class="muted">Select, loaded from server. <strong>No buttons</strong> mode</span></td>
											<a href="#" id="address" data-type="address" data-pk="1" data-original-title="Please, fill address">hhh</a>
											<td class='hidden-480'><span class="muted">Your custom input, several fields</span></td>
											<input type="date" name="date1" value="" id="date1" class="required" style="width:130px;">
											
<input autocomplete="off"  style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px"  type="text" name="other" value="" id="other" class="required">
											</div>
										</div>
										<!-- ---------------------------The Add New Request DIV -------------------------------- -->
										<div class="control-group" id="bc" style="display:none;" >
											<label for="textarea" class="control-label">REQUEST2: 	</label>
											<div class="controls">
											<input type="date" name="date2" value="" id="date2" style="width:130px;">
											
<input autocomplete="off"   style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px"  type="text" name="othera" value="" id="othera" class="required">
											</div>
										</div>
										<div class="control-group" id="bc1" style="display:none;">
											<label for="textarea" class="control-label">REQUEST3: 	</label>
											<div class="controls">
											<input type="date" name="date3" value="" id="date3" style="width:130px;">
											
<input autocomplete="off"   style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px" type="text" name="otherb" value="" id="otherb" class="required">
											</div>
										</div>
										<div class="control-group" id="bc2" style="display:none;">
											<label for="textarea" class="control-label">REQUEST4: 	</label>
											<div class="controls">
											<input type="date" name="date4" value="" id="date4" class="requirefffd" style="width:130px;">
												
<input autocomplete="off"     style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px"  type="text" name="otherc" value="" id="otherc" class="required">
											</div>
										</div>
										<div class="control-group" id="bc3" style="display:none;">
											<label for="textarea" class="control-label">REQUEST5: 	</label>
											<div class="controls">
											<input type="date" name="date5" value="" id="date5" class="requirefffd" style="width:130px;">
												
<input autocomplete="off"    style="display: none; width:90px;height:20px;margin-left:280px;margin-top:-30px"  type="text" name="otherd" value="" id="otherd" class="required">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">NOTE:</label>
											<div class="controls">
												<textarea 
	id="note" name="note" class="required" style="width: 300px;" maxlength="300" rows="2"
	cols="50"></textarea>
											</div>
										</div>
									</div>
									<div class="step" id="thirdStep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Previous Request
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Additional information</label>
											<div class="controls">
												<textarea name="textare" id="tt333" class="span12" rows="7" placeholder="You can provide additional information in here..."></textarea>
											</div>
										</div>
									</div>
									<div class="step" id="fourthstep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Check again</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="policy" value="agree" data-rule-required="true"> Everything is ok. Submit</label>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="btn" value="Back" id="back">
										<input type="submit" class="btn btn-primary" value="Submit" id="next">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
<?php } ?>				
				
				
				
				
			</div>
		</div></div>
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38620714-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>

	</html>


 