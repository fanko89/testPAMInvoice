

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name="format-detection" content="telephone=no">
    
    
    <!-- Favicon shortcut icon-->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img2/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img2/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img2/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img2/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="img2/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="img2/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="img2/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img2/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="img2/favicon/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="img2/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="img2/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img2/favicon/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="img2/favicon/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="img2/favicon/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="img2/favicon/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="img2/favicon/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="img2/favicon/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="img2/favicon/mstile-310x310.png" />

	
	<title>At Your Service Pros Invoice</title>
    <link href="assets/jquery.signaturepad.css" rel="stylesheet">
    
     <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.css">
    
    <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
</head>

	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />

</head>

<body>


<form class="ui form">



			
  <div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
        
        <div class="info">
          <p align="center"><strong>157 West State Street Lehi, UT 84043 | (801) 367 .8640 | atyourservicepros.us | Office@atyourservicepros.us</strong></p></div>    
        
          <div id="logo">

       
              <img id="image" src="images/at your service pros invoice img.png" alt="logo" />
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
		        <textarea oninput="auto_grow(this)" rows="3" id="task" textarea="textarea" placeholder="item/task completed"></textarea>
	        <a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea oninput="auto_grow(this)" rows="3" id="details" textarea="textarea" placeholder="Details"></textarea></td>
		      <td><input type="text" width="70px" textarea class="cost"  placeholder="$0"  /></td>
		      <td><input type="text" width="70px" textarea class="qty" placeholder="0" /></td>
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
<br />
<br />
        
        
    <div id="terms">
	  <h5>Notes</h5>
     
     <input type="text" textarea id="notes"/>
<br/><input type="text" textarea id="notes"/>
<br/><input type="text" textarea id="notes"/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
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








	
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
<script type='text/javascript' src='js/example.js'></script>

	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
<script type='text/javascript' src='js/example.js'></script>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://github.com/niklasvh/html2canvas/releases/download/0.5.0-alpha1/html2canvas.svg.js"></script>
	<script type="text/javascript" src="js/jspdf.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>



	<script type='text/javascript' src="js/jquery-1.3.2.min.js"></script>
	<script type='text/javascript' src="js/example.js"></script>


<script type="text/javascript" src="js/app.js"></script>
	
<script src="assets/numeric-1.2.6.min.js"></script> 
<script src="assets/bezier.js"></script> 
<script src="js/jquery.signaturepad.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/json3/3.3.2/json3.min.js"></script>


<script>
    $(document).ready(function() {
      $('#linear').signaturePad({drawOnly:true, lineTop:200});
      $('#smoothed').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:200});
      $('#smoothed-variableStrokeWidth').signaturePad({drawOnly:true, drawBezierCurves:true, variableStrokeWidth:true, lineTop:200});
    });
  </script> 




</body>

</html>