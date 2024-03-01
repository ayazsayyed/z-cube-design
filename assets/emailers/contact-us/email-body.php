<?php
function generateEmailBody($name, $contact, $email, $message) {
	ob_start();
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="telephone=no" name="format-detection">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> Z-Cube-Design New Form Submission</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	
	<style type="text/css">
		body {
			font-family: "Open Sans", sans-serif;
			background-color: #fff;
		}
		/* Outlook link fix */
	
		#outlook a {
			padding: 0;
		}
		/* Hotmail background &amp; line height fixes */
	
		.ExternalClass {
			width: 100% !important;
		}	
		
		.ExternalClass,
		.ExternalClass p,
		.ExternalClass span,
		.ExternalClass font,
		.ExternalClass td,
		.ExternalClass div {
			line-height: 100%;
		}
		/* Image borders &amp; formatting */
	
		img {
			outline: none;
			text-decoration: none;
			-ms-interpolation-mode: bicubic;
			margin: 0 0 0 0 !important;
		}
		

		a{
			color: #fe4124;
		}
	
		@media (max-width: 599px) {

			br{
				display: none !important;
			}

			td[class=splitt] {
				float: left !important;
				width: 100% !important;
				display: block !important;
				text-align: center !important;
			}

			table[class=tableleft] { text-align: left !important; }

			table[class=width100] { width:100% !important; }

			table[class=btn] { width:90% !important; }

			table[class=width94_40] { width:94.40% !important;}

			table[class=width95] { width:95% !important;}

			table[class=width90] { width:90% !important;}

			td[class=split] { float: left !important; width: 100% !important; display: block !important; text-align: center !important;}

			td[class=arrow] { float: left !important; width: 5% !important; display: block !important; text-align: center !important; padding-left: 5px;}

			td[class=arrow] img {width: 12px !important; height: 13px !important;}

			td[class=cont] { float: left !important; width: 93% !important; display: block !important; text-align: left !important;}

			table[class=btmpadding] { padding-bottom:10px !important;}

			td[class=tdcenter] { text-align: center !important;}

			td[class=width100] { width:100% !important;}

			td[class=width94_40] { width:94.40% !important;}

			td[class=width95] { width:95% !important;}

			td[class=width90] { width:90% !important; }

			td[class=margingbttm] { margin-bottom:10px !important;}

			.textcenter { width: 100%; float: left; text-align: center;}

			.textcenter table { margin: 0 auto; }

			.max_w100{ max-width: 100% !important; width: auto!important; height: auto; }

			td[class=space2] { display: none !important; }

			td[class=hei_10] { height: 10px !important; }
			
		}

	</style>

</head>

<body style="padding:0; margin:0; background-color:#ffffff; -webkit-text-size-adjust: 100%;font-family: 'Open Sans', 'arial', sans-serif;">

	<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td valign="top" align="center" class="width100">
				<table align="center" width="600" cellspacing="0" cellpadding="0" class="width100">

					<tr>
						<td valign="top" align="center" class="width100">
							<table align="center" width="100%" class="width95" cellspacing="0" cellpadding="0">

								<tr>
									<td valign="top" align="center" height="20"></td>
								</tr>

								<tr>
									<td valign="top" align="center" class="width100" style="line-height: 1;font-size: 0;border: 0;">
										<a href="https://zcubedesign.com/" target="_blank" style="line-height:1; font-size: 0;display: inline-block;border: 0;">
											<img src="https://zcubedesign.com/assets/emailer/images/logo.png" alt="the round tree logo" width="60">
										</a>
									</td>
								</tr>

								<tr>
									<td valign="top" align="center" height="20"></td>
								</tr>

							</table>
						</td>
					</tr>

					<tr>
						<td valign="top" align="center" class="width100">
							<table align="center" width="100" class="width95" cellspacing="0" cellpadding="0">
								<tr>

									<td valign="top" align="center" class="width100">
										<table align="center" width="530" class="width100" cellspacing="0" cellpadding="0" style="padding:0 20px; border-radius: 8px 8px 0 0; background-color: #d3d3d340;">
											<tr>
												<td valign="top" align="center" height="20"></td>
											</tr>
			
											<tr>
												<td valign="top" align="center" class="width100" style="line-height: 1.1;font-weight: 500;font-size: 18px;">
													New Form Submission <br />									
												</td>
											</tr>
			
											<tr>
												<td valign="top" align="center" height="10"></td>
											</tr>

											<tr>
												<td valign="top" align="center" class="width100" style="line-height: 1.4;font-weight: 500;font-size: 13px;">
													Congratulations! A recent website visitor has completed a form submission. <br />The captured details are as follows. Appreciate your attention!												</td>
											</tr>
			
											<tr>
												<td valign="top" align="center" height="40"></td>
											</tr>
											
										</table>
									</td>

								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td valign="top" align="center" class="width100">
							<table align="center" width="530" class="width95" cellspacing="0" cellpadding="0" style="background-color: #d3d3d340;border-radius: 0 0 8px 8px;">
								<tr>
									<td valign="top" align="center" class="width100">
										<table align="center" width="470" class="width95" cellspacing="0" cellpadding="0" style="border:1px solid lightgray; border-radius: 8px;">
											<tr>
												<td valign="top" align="center" height="20"></td>
											</tr>

											<tr>
												<td valign="top" align="center" height="10" width="20" style="width: 20px;">&nbsp;</td>
												<td valign="top" align="left" height="10" width="430" style="width: 430px;">
													<table align="left" width="100%" class="width95" cellspacing="0" cellpadding="0">
														<tr>
															<td valign="top" align="left" width="110" id="cust_name" style="width:110px; line-height: 1.2;font-weight: 700; font-size: 14px;">
																Name :
															</td>
			
															<td valign="top" align="left" id="cust_name_value" style="line-height: 1.2;font-weight: 500; font-size: 14px;">
															<?php echo $name; ?>
															</td>
														</tr>
														
														<tr>
															<td valign="top" align="center" height="20"></td>
														</tr>
														<tr>
															<td valign="top" align="left" id="cust_phone" style="line-height: 1.2;font-weight: 700; font-size: 14px;">
																Phone No :
															</td>

															<td valign="top" align="left" id="cust_phone_value" style="line-height: 1.2;font-weight: 500; font-size: 14px;">
															<?php echo $contact; ?>
															</td>
														</tr>
														
														<tr>
															<td valign="top" align="center" height="20"></td>
														</tr>
			
														<tr>
															<td valign="top" align="left" id="cust_email" style="line-height: 1.2;font-weight: 700; font-size: 14px;">
																Email :
															</td>
															<td valign="top" align="left" id="cust_emial_value" style="line-height: 1.2;font-weight: 500; font-size: 14px;">
															<?php echo $email; ?>
															</td>
														</tr>
			
														<tr>
															<td valign="top" align="center" height="20"></td>
														</tr>
			
														<tr>
															<td valign="top" align="left" id="cust_email" style="line-height: 1.2;font-weight: 700; font-size: 14px;">
																Message :
															</td>
															<td valign="top" align="left" id="cust_emial_value" style="line-height: 1.2;font-weight: 500; font-size: 14px;">
															<?php echo $message; ?>
															</td>
														</tr>

														<tr>
															<td valign="top" align="center" height="20"></td>
														</tr>

														<tr>
															<td valign="top" align="left" id="cust_email" style="line-height: 1.2;font-weight: 700; font-size: 14px;">
																Time  :
															</td>
															<td valign="top" align="left" id="cust_emial_value" style="line-height: 1.2;font-weight: 500; font-size: 14px;">
																10:00am
															</td>
														</tr>
			
													</table>
												</td>
												<td valign="top" align="center" height="10" width="20" style="width: 20px;">&nbsp;</td>
											</tr>

											<tr>
												<td valign="top" align="center" height="20"></td>
											</tr>

										</table>
									</td>
								</tr>

								<tr>
									<td valign="top" align="center" height="40"></td>
								</tr>

							</table>
						</td>
					</tr>
				
					<tr>
						<td valign="top" align="center" class="width100">
							<table align="center" width="560" class="width95" cellspacing="0" cellpadding="0" style="background-color: #ffffff;">

								<tr>
									<td valign="top" align="center" height="20" class="width100"></td>
								</tr>

								<tr>
									<td valign="top" align="center" class="width100" style="line-height: 1.5;font-size: 10px;color: #999; font-weight: 600;">
										401, Off New Link Rd, Veera Desai Industrial Estate, <br /> Andheri West, Mumbai, Maharashtra 400102
									</td>
								</tr>

								<tr>
									<td valign="top" align="center" height="10" class="width100"></td>
								</tr>

								<tr>
									<td valign="top" align="center" class="width100" style="line-height: 1.5;font-size: 10px;color: #2c2b2f; font-weight: 600;">
										<a href="https://zcubedesign.com/" target="_blank" style="line-height: 1.1;">www.zcubedesign.com</a>
									</td>
								</tr>

								<tr>
									<td valign="top" align="center" height="10" class="width100"></td>
								</tr>

								
								<tr>
									<td align="center" valign="top">
										<table cellspacing="0" cellpadding="0">
											<tr>
												<td align="center" valign="top">
													<a href="https://www.facebook.com/conceptanddesign.co"  target="_blank" style="display: inline-block; font-size: 0; line-height: 1;padding: 0; margin: 0;">
														<img src="https://zcubedesign.com/assets/emailer/images/facebook_icon.png" alt=" facebook icon " style="width: 23px;">
													</a>
												</td>
												<td align="center" valign="top" width="8" style="font-size: 1px; line-height: 1px;"></td>
												<td align="center" valign="top">
													<a href="https://www.instagram.com/zcubedesignpvtltd" target="_blank" style="display: inline-block; font-size: 0; line-height: 1;padding: 0; margin: 0;">
														<img src="https://zcubedesign.com/assets/emailer/images/insta_icon.png" alt="instagram icon" style="width: 23px;">
													</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>

								<tr>
									<td valign="top" align="center" height="20" class="width100"></td>
								</tr>

							</table>
						</td>
					</tr>
					
				</table>
			</td>
		</tr>
	</table>
</body>

</html>
<?php
$body = ob_get_clean();
ob_flush();
return $body;
}
?>