

<script type='text/javascript'>

function formValidator(){
	// Make quick references to our fields
	var firstname = document.getElementById('firstname');
	var email = document.getElementById('email');
	var addr = document.getElementById('addr');
	var zip = document.getElementById('zip');
	var state = document.getElementById('state');
	var username = document.getElementById('username');
	
	
	// Check each input in the order that it appears in the form!
	if(isAlphabet(firstname, "Please enter only letters for your name")){
		if(emailValidator(email, "Please enter a valid email address")){
		if(isAlphanumeric(addr, "Numbers and Letters Only for Address")){
			if(isNumeric(zip, "Please enter a valid zip code")){
				if(madeSelection(state, "Please Choose a State")){
					if(lengthRestriction(username, 6, 8)){
						
							return true;
						}
					}
				}
			}
		}
	}
	
	
	return false;
	
}

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}

function madeSelection(elem, helperMsg){
	if(elem.value == "Please Choose"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
</script>
    <?php
	include_once('class.phpmailer.php');
    if($_POST)
	{
	
$full_name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$tour_packeg=$_POST['Tour'];
$adult=$_POST['adults'];
$chield=$_POST['Children'];
$customiztrip=$_POST['customize'];

$ip=$_SERVER['REMOTE_ADDR'];
$datetime=date("Y-m-d H:i:s");

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = $mail->getFile('contents.html');
$body             = <<<HHHHHHHHHHHHHH
<table width="634" border="0" cellspacing="0" align="center">
  <tr>
    <td width="299">Full Name</td>
    <td width="11"><div align="center"><strong>:</strong></div></td>
    <td width="318">{$full_name}</td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$email}</td>
  <tr>
    <td>Contact No.</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$contact}</td>
  </tr>
    <tr>
    <td>Tour Packege</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$tour_packeg}</td>
  </tr>
    <tr>
    <td>Adult</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$adult}</td>
  </tr>
    <tr>
    <td>Children</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$chield}</td>
  </tr>
  </tr>
    <td>Customize Trip</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$customiztrip}</td>
  </tr>
  <tr>
    <td>ip</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$ip}</td>
  </tr>
  <tr>
    <td>Date Time</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$datetime}</td>
  </tr>
</table>
HHHHHHHHHHHHHH;

$body             = eregi_replace("[\]",'',$body);

$mail->From       = $email;
$mail->FromName   = "Active Bhutan Tours & Treks";

$mail->Subject    = "Active Bhutan Tours & Treks | Send Your Queries";



$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAddress("activebhutantours@gmail.com ", "activebhutantours");
$mail->AddCC("nazmul_hosen00@yahoo.com", "nazmul");
//$mail->AddAttachment("images/phpmailer.gif");             // attachment

//mysql_query("INSERT INTO tbl_guestbook VALUES ('', '$full_name', '$email', '$website', '$comment','0', '$datetime', '$ip', '')") or die (mysql_error());
if(!$mail->Send()) {
?>
<center><samp style="font-size:18px; color:#F00;">Your request has been sent</samp></center>

  <?php
} else {

?>
<center><samp style="font-size:18px; color:#F00;">Your request not sent. Plese try later</samp></center>

<?php
}
  //echo "Message sent!";
}

?>	

<div class="ouerie">
<div class="ouerietop">Send Your Queries</div>

<div style="float:left; padding:8px; height:auto; width:234px;">

      
<form action="<?php $_SERVER['PHP_SELF']; ?>" onsubmit='return formValidator()' method="post" >

              
        <table cellpadding="2"  align="center" cellspacing="0" border="0">
          <tr>
            <td>Name</td>
            <td> : </td>
            <td>
              <input class="inputbg" style="width:170px; border:#000 solid 1px; background-color:#faf9d7; margin-left:8px;" name="name" type="text" id="firstname" value="" size="25" /> </td>
          </tr>
          <tr><td height="8px"></td></tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>
              <input style="width:170px; border:#000 solid 1px; background-color:#faf9d7; margin-left:8px;" class="inputbg" name="email" type="text" id="email" value="" size="25" /></td>
          </tr>
          <tr><td height="8px"></td></tr>
          <tr>
            <td>Country</td>
            <td>:</td>
            <td>              
              <SELECT style="width:170px; border:#000 solid 1px; background-color:#faf9d7; margin-left:8px;" class="validate[required[text]] text-input" type="text" name="Country" id="Country" >
        <OPTION SELECTED VALUE="---">Select Country  
          <OPTION>United Kingdom  
          <OPTION>United States  
          <OPTION>Afghanistan  
          <OPTION>Albania  
          <OPTION>Algeria  
          <OPTION>American Samoa  
          <OPTION>Andorra  
          <OPTION>Angola  
          <OPTION>Anguilla  
          <OPTION>Antarctica  
          <OPTION>Antigua And Barbuda  
          <OPTION>Argentina  
          <OPTION>Armenia  
          <OPTION>Aruba  
          <OPTION>Australia  
          <OPTION>Austria  
          <OPTION>Azerbaijan  
          <OPTION>Bahamas  
          <OPTION>Bahrain  
          <OPTION>Bangladesh  
          <OPTION>Barbados  
          <OPTION>Belarus  
          <OPTION>Belgium  
          <OPTION>Belize  
          <OPTION>Benin  
          <OPTION>Bermuda  
          <OPTION>Bhutan  
          <OPTION>Bolivia  
          <OPTION>Bosnia Hercegovina  
          <OPTION>Botswana  
          <OPTION>Bouvet Island  
          <OPTION>Brazil  
          <OPTION>Brunei Darussalam  
          <OPTION>Bulgaria  
          <OPTION>Burkina Faso  
          <OPTION>Burundi  
          <OPTION>Byelorussian SSR  
          <OPTION>Cambodia  
          <OPTION>Cameroon  
          <OPTION>Canada  
          <OPTION>Cape Verde  
          <OPTION>Cayman Islands  
          <OPTION>Central African Republic  
          <OPTION>Chad  
          <OPTION>Chile  
          <OPTION>China  
          <OPTION>Christmas Island  
          <OPTION>Cocos (Keeling) Islands  
          <OPTION>Colombia  
          <OPTION>Comoros  
          <OPTION>Congo  
          <OPTION>Cook Islands  
          <OPTION>Costa Rica  
          <OPTION>Cote D'Ivoire  
          <OPTION>Croatia  
          <OPTION>Cuba  
          <OPTION>Cyprus  
          <OPTION>Czech Republic  
          <OPTION>Czechoslovakia  
          <OPTION>Denmark  
          <OPTION>Djibouti  
          <OPTION>Dominica  
          <OPTION>Dominican Republic  
          <OPTION>East Timor  
          <OPTION>Ecuador  
          <OPTION>Egypt  
          <OPTION>El Salvador  
          <OPTION>England  
          <OPTION>Equatorial Guinea  
          <OPTION>Eritrea  
          <OPTION>Estonia  
          <OPTION>Ethiopia  
          <OPTION>Falkland Islands  
          <OPTION>Faroe Islands  
          <OPTION>Fiji  
          <OPTION>Finland  
          <OPTION>France  
          <OPTION>Gabon  
          <OPTION>Gambia  
          <OPTION>Georgia  
          <OPTION>Germany  
          <OPTION>Ghana  
          <OPTION>Gibraltar  
          <OPTION>Great Britain  
          <OPTION>Greece  
          <OPTION>Greenland  
          <OPTION>Grenada  
          <OPTION>Guadeloupe  
          <OPTION>Guam  
          <OPTION>Guatemela  
          <OPTION>Guernsey  
          <OPTION>Guiana  
          <OPTION>Guinea  
          <OPTION>Guinea-Bissau  
          <OPTION>Guyana  
          <OPTION>Haiti  
          <OPTION>Heard Islands  
          <OPTION>Honduras  
          <OPTION>Hong Kong  
          <OPTION>Hungary  
          <OPTION>Iceland  
          <OPTION>India  
          <OPTION>Indonesia  
          <OPTION>Iran  
          <OPTION>Iraq  
          <OPTION>Ireland  
          <OPTION>Isle Of Man  
          <OPTION>Israel  
          <OPTION>Italy  
          <OPTION>Jamaica  
          <OPTION>Japan  
          <OPTION>Jersey  
          <OPTION>Jordan  
          <OPTION>Kazakhstan  
          <OPTION>Kenya  
          <OPTION>Kiribati  
          <OPTION>Korea, South  
          <OPTION>Korea, North  
          <OPTION>Kuwait  
          <OPTION>Kyrgyzstan  
          <OPTION>Lao People's Dem. Rep.  
          <OPTION>Latvia  
          <OPTION>Lebanon  
          <OPTION>Lesotho  
          <OPTION>Liberia  
          <OPTION>Libya  
          <OPTION>Liechtenstein  
          <OPTION>Lithuania  
          <OPTION>Luxembourg  
          <OPTION>Macau  
          <OPTION>Macedonia  
          <OPTION>Madagascar  
          <OPTION>Malawi  
          <OPTION>Malaysia  
          <OPTION>Maldives  
          <OPTION>Mali  
          <OPTION>Malta  
          <OPTION>Mariana Islands  
          <OPTION>Marshall Islands  
          <OPTION>Martinique  
          <OPTION>Mauritania  
          <OPTION>Mauritius  
          <OPTION>Mayotte  
          <OPTION>Mexico  
          <OPTION>Micronesia  
          <OPTION>Moldova  
          <OPTION>Monaco  
          <OPTION>Mongolia  
          <OPTION>Montserrat  
          <OPTION>Morocco  
          <OPTION>Mozambique  
          <OPTION>Myanmar  
          <OPTION>Namibia  
          <OPTION>Nauru  
          <OPTION>Nepal  
          <OPTION>Netherlands  
          <OPTION>Netherlands Antilles  
          <OPTION>Neutral Zone  
          <OPTION>New Caledonia  
          <OPTION>New Zealand  
          <OPTION>Nicaragua  
          <OPTION>Niger  
          <OPTION>Nigeria  
          <OPTION>Niue  
          <OPTION>Norfolk Island  
          <OPTION>Northern Ireland  
          <OPTION>Norway  
          <OPTION>Oman  
          <OPTION>Pakistan  
          <OPTION>Palau  
          <OPTION>Panama  
          <OPTION>Papua New Guinea  
          <OPTION>Paraguay  
          <OPTION>Peru  
          <OPTION>Philippines  
          <OPTION>Pitcairn  
          <OPTION>Poland  
          <OPTION>Polynesia  
          <OPTION>Portugal  
          <OPTION>Puerto Rico  
          <OPTION>Qatar  
          <OPTION>Reunion  
          <OPTION>Romania  
          <OPTION>Russian Federation  
          <OPTION>Rwanda  
          <OPTION>Saint Helena  
          <OPTION>Saint Kitts  
          <OPTION>Saint Lucia  
          <OPTION>Saint Pierre  
          <OPTION>Saint Vincent  
          <OPTION>Samoa  
          <OPTION>San Marino  
          <OPTION>Sao Tome and Principe  
          <OPTION>Saudi Arabia  
          <OPTION>Scotland  
          <OPTION>Senegal  
          <OPTION>Seychelles  
          <OPTION>Sierra Leone  
          <OPTION>Singapore  
          <OPTION>Slovakia  
          <OPTION>Slovenia  
          <OPTION>Solomon Islands  
          <OPTION>Somalia  
          <OPTION>South Africa  
          <OPTION>South Georgia  
          <OPTION>Spain  
          <OPTION>Sri Lanka  
          <OPTION>Sudan  
          <OPTION>Suriname  
          <OPTION>Svalbard  
          <OPTION>Swaziland  
          <OPTION>Sweden  
          <OPTION>Switzerland  
          <OPTION>Syrian Arab Republic  
          <OPTION>Taiwan  
          <OPTION>Tajikista  
          <OPTION>Tanzania  
          <OPTION>Thailand  
          <OPTION>Togo  
          <OPTION>Tokelau  
          <OPTION>Tonga  
          <OPTION>Trinidad and Tobago  
          <OPTION>Tunisia  
          <OPTION>Turkey  
          <OPTION>Turkmenistan  
          <OPTION>Turks and Caicos Islands  
          <OPTION>Tuvalu  
          <OPTION>Uganda  
          <OPTION>Ukraine  
          <OPTION>United Arab Emirates  
          <OPTION>United Kingdom  
          <OPTION>United States  
          <OPTION>Uruguay  
          <OPTION>Uzbekistan  
          <OPTION>Vanuatu  
          <OPTION>Vatican City State  
          <OPTION>Venezuela  
          <OPTION>Vietnam  
          <OPTION>Virgin Islands  
          <OPTION>Wales  
          <OPTION>Western Sahara  
          <OPTION>Yemen  
          <OPTION>Yugoslavia  
          <OPTION>Zaire  
          <OPTION>Zambia  
          <OPTION>Zimbabwe
          </OPTION>  
        </SELECT></td>
          </tr>
          <tr><td height="8px"></td></tr>

  <tr>
    <td valign="top"> <span>Query</span></td>
    <td valign="top">:</td>
    <td><textarea style="width:170px; border:#000 solid 1px; background-color:#faf9d7; margin-left:8px;" rows="3" cols="20" name="SpecialRequirement"></textarea></td>
  </tr>
  </table>
  <table>
  <tr>
    <td width="260">&nbsp;</td>
    <td width="67"><input type="image"  id="reset" value=""></td>
    <td width="133"><input type="image"  id="submit" value=""/>
    
    </td>
  </tr>
</table>
    </form>

</div></div>
