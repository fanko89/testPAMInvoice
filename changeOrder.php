

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name="format-detection" content="telephone=no">
    
    
    <!-- Favicon shortcut icon-->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img4/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img4/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img4/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img4/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="img4/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="img4/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="img4/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img4/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="img4/favicon/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="img4/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="img4/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img4/favicon/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="img4/favicon/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />

    
	
	<title>Precision Air Management Change Order</title>
    <link href="assets/jquery.signaturepad.css" rel="stylesheet">
    
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />

</head>

<body>


<form class="ui form">



			
  <div id="page-wrap">

		<textarea id="header">CHANGE ORDER</textarea>
        
        <div class="info">
          <p align="center"><strong>157 West State Street Lehi, UT 84043 | (801) 367 8640 | Fax: (801) 407 1900| precisionairmgmt.com | office@precisionairmgmt.com</strong></p></div>    
        
          <div id="logo">

       
              <img id="image" src="images/top_left_logo.png" alt="logo" />
            </div>
		
	 
		
		<div id="top_header">
		<div id="identity">
		
        <h3>Customers Info:</h3>
        			
      <input type="text" textarea id="name" placeholder="Customer Name"  />
      <input type="text" textarea id="address" placeholder="Street Address" />
      <input type="text" textarea id="region" placeholder="City, State Zip" />
      <input type="text" textarea id="phone" placeholder="Phone Number" />
     
      <input type="text" textarea id="email" placeholder="Email Address" />
     
        


  </div> 
  </div>         

  <div style="clear:both"></div>
		
	  <div id="customer">
<h3>Technician Name:</h3>
<br />
        <input type="text" textarea id="customer-title"  placeholder="Your Name" />

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td> <textarea id="randomNumber"></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Date</td>
                    <td><input type="text" textarea id="date"  placeholder="Current Date" /></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$0.00</div></td>
                </tr>

            </table>
		
	  </div>
		
    <table width="100%" id="items">
		
		  <tr>
		      <th width="133">Item/task</th>
		      <th width="219">Description</th>
		      <th width="88">Cost</th>
		      <th width="90">Quantity</th>
		      <th width="46">Price</th>
		  </tr>
		  
		 <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr">
		        <textarea rows="3" id="task" textarea="textarea" placeholder="item/task completed"></textarea>
	        <a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea rows="3" id="details" textarea="textarea" placeholder="Details"></textarea></td>
		      <td><input type="text" textarea class="cost"  placeholder="$0"  /></td>
		      <td><input type="text" textarea class="qty" placeholder="0" /></td>
		      <td><span class="price">$0</span></td>
		  </tr>
		  
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row"> add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td height="48" colspan="2" class="blank">Payment Type: </td>
	        <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$0.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"><input type="text" textarea="textarea" id="payment" rows="1" placeholder="payment type"/></td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$0.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"></td> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td width="86" class="total-value"><input type="text" textarea id="paid"  placeholder="$0.00" /></td>
		  </tr>
		  <tr>
         
		      <td colspan="2" class="blank">&nbsp;</td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$0.00</div></td>
		  </tr>
		
		</table>
	
	
	
	<div class="wrapper">
  <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
</div>


<button id="clear">Clear</button><!doctype html>
	
	
	
	
	
	
	 
        
        
       <div class="sigPad" id="smoothed-variableStrokeWidth" style="width:424px;">
<h3>Signature</h3>
    
       

<div class="sig sigWrapper" style="height:auto;">
<div class="typed"></div>
<canvas class="pad" width="420" height="100"></canvas>
<input type="hidden" name="output-3" class="output">
</div>

<ul class="sigNav">
<li class="clearButton"><a href="#clear">Clear</a></li>
</ul>  
  


        
        </div>
        
        
         
<br />
<br />

        
        
    <div id="terms">
	  <h5>Notes</h5>
      <textarea rows="4" id="notes" textarea="textarea"></textarea>
	  </div>
	
</div>
</div>
</form>



<div class="row">
    <div class="col-sm-offset-5 col-sm-2 text-center">
<div class="btn btn-danger btn-lg" id="create_pdf">Create PDF
</div>
</div>
</div>
<br/>
<br/>
<br/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type='text/javascript' src="js/jquery-1.3.2.min.js"></script>
	<script type='text/javascript' src="js/example.js"></script>	
<script src="assets/numeric-1.2.6.min.js"></script> 
<script src="assets/bezier.js"></script> 
<script src="js/jquery.signaturepad.js"></script> 
<script src="assets/json2.min.js"></script>



  
   <script src="../jquery.signaturepad.js"></script>
  <script>
    $(document).ready(function() {
      $('.sigPad').signaturePad();
    });
  </script>
  <script src="../assets/json2.min.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>

</html>