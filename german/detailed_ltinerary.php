<?php
$action=$_GET['action'];
$product=$_GET['product'];
?>


        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="css/template.css" type="text/css"/>
        <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
        </script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
        </script>
        		<link rel="stylesheet" href="css/jquery.ui.all.css">
		<script src="js/jquery.ui.core.js"></script>
		<script src="js/jquery.ui.widget.js"></script>

		<script src="js/jquery.ui.datepicker.js"></script>
        <script type="application/javascript">
            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
				$( ".datepicker" ).datepicker();
                jQuery("#formID").validationEngine();
            });
            
            function checkHELLO(field, rules, i, options){
                if (field.val() != "HELLO") {
                    // this allows to use i18 for the error msgs
                    return options.allrules.validate2fields.alertText;
                }
            }
        </script>
        <div class="main">
<?php
	include 'productleftcont.php';
?>
<div class="bannerimg"><img src="images/banner.png" /></div>

<div class="linkcont" style="margin-top:8px; height:auto;">
<div class="linkconttop">Request Detailed ltinerary</div>

<div style="float:left; padding:8px; height:auto; width:714px;">
   

        <form id="formID" class="formular" method="post" action="mailsend.php">
          <table width="680" border="0" cellspacing="0">
                      <tr>
    <td width="160"><strong>Product Name</strong></td>
    <td width="10">:</td>
    <td colspan="4"><input class="text-input" type="text" name="product-name" id="product-name" value="<?=$product?>" disabled="disabled" /></td>
    </tr>
            <tr>
    <td width="160"><span>Your Name</span></td>
    <td width="10">:</td>
    <td colspan="4"><input class="validate[required] text-input" type="text" name="full-name" id="full-name" /></td>
    </tr>
  <tr>
    <td><span>Your E-mail Address</span></td>
    <td>:</td>
    <td colspan="4"><input class="validate[required,custom[email]] text-input" type="text" name="email" id="email" /></td>
 </tr>
          <tr>
            <td>Contact No.</td>
            <td>:</td>
            <td>              
              <input class="validate[required,custom[number]] text-input" name="contact" type="text" id="contact" /></td>
          </tr>
  <tr>
    <td colspan="6">Special Requirments</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4"><textarea class="validate[required,custom[email]] text-input" cols="50" rows="5" wrap="virtual" name="comment"></textarea></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4"><input class="submit" type="submit" value="Submit"/></td>
    </tr>
</table>
        </form>

</div></div></div>