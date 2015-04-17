<?php include 'include/config.php'; ?> 
<?php include'include/header.php'; ?>
<body id="contact-form">
<?php include'include/nav.php'; ?>

<aside id="primary">
          
<?php include'include/nav-sub.php'; ?>
        

       
        </aside><!-- /primary -->
       
<div id="main">       


<div id="content">
          <h3>Make an appointment</h3>         
          <p>Want to make an appointment, discuss your future tattoo or order a sketch?  For all these questions and more, please, contact me through the following form!</p>
 
<?php

/* FUNCTION TO DEFINE PAGE AND MAKE LINKS */

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

function makeLinks($linkArray)
{
    $myReturn = '';
    foreach($linkArray as $url => $text)
    {
	    
	    if(THIS_PAGE == $url)
	    {//current page, add class 
		    $myReturn .= '<li class="current"><a href="' . $url . '">' . $text . '</a></li>';   
		     
		    }else{
			    
			$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>';    
			    }
	    
    }    
    return $myReturn;    
}


/*FUNCTION 3 used to build a better email */

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}

/* PHP FORM ITSELF */

if(isset($_POST['Name']))  
{
   $to='anna@atiagina.com';
	$replyto = $_POST['Email'];
	$subject='Test Email from ' . $_POST['Name'] . ' ' . $today;
	$today = date("F j, Y, g:i a"); 
	$message = process_post (); //loop through all form elements
	
	$headers='From: noreply@atiagina.com' . PHP_EOL .
	   'Reply-To: ' . $replyto . PHP_EOL .
	   'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
	
	echo "<p>Thank you for your message! I will contact you asap.</p>";
	echo '<p><a href="order.php">Want to write me again?</a></p>';
	echo '
    <form action="' . THIS_PAGE . '" method="post" >
    <fieldset>
<legend>Contact Axi</legend>

<p><label for="Name">Name:</label>
<input type="text" name="Name" id="Name" maxlength="40"/>
</p>

<p>
<label for="Email">Email (required):</label>
<input type="Email" name="Email" id="Email" maxlength="40" required="required"/>
</p>

<p><label for="mobile">Mobile phone:</label>
<input type="tel" name="mobile" id="mobile" maxlength="15"/>
</p>

<p><label for="phone">Day phone:</label>
<input type="tel" name="phone" id="phone" maxlength="15"/>
</p>

<p>How do you prefer to be contacted?<br/>

<label> <input type="checkbox" id="byemail" name="how-to-contact[]" value="byemail"/> 
By Email</label>

<label> <input type="checkbox" id="mobilecall" name="how-to-contact[]" value="mobilecall"/> 
Mobile Call</label>


<label> <input type="checkbox" id="dayphone" name="how-to-contact[]" value="dayphone"/> 
Day Phone Call</label>


<label> <input type="checkbox" id="message" name="how-to-contact[]" value="message"/> 
Text Message</label>
</p>

<p>What are you interested in?<br>

<label><input type="radio" id="interest-tattoo" name="interest" value="tattoo" />Tattoo</label>
<label><input type="radio" id="interest-painting" name="interest" value="painting" />Painting</label>
<label><input type="radio" id="interest-sketch" name="interest" value="sketch" />Sketch</label>
<label><input type="radio" id="interest-other" name="interest" value="other" />Other</label>
<label for="interest-specify">If other, please, specify:</label>
<input type="text" name="interest-specify" id="interest-specify" maxlength="150"/>
</p>

<p>
<label for="how-found">How did you know about me and my website?</label>

<select name="how-found" id="how-found" size="1">
<option value="#">Choose one</option>
<option value="friends">Friends</option>
<option value="card"> Business Card</option>
<option value="facebook">Facebook</option>
<option value="instagram">Instagram</option>
<option value="yelp">Yelp</option>
<option value="other">Other</option>
</select>
</p>

<p>
<label for="comments">Comments and details:</label>
<textarea name="comments" id="comments" rows="5" cols="25"></textarea>
</p>

<p class="submit-button">
<input type="submit" value="Send to Axi" />
</p>
</fieldset>
</form>    
    ';
}else{
    echo '
    <form action="' . THIS_PAGE . '" method="post" >
    <fieldset>
<legend>Contact Axi</legend>

<p><label for="Name">Name:</label>
<input type="text" name="Name" id="Name" maxlength="40"/>
</p>

<p>
<label for="Email">Email (required):</label>
<input type="Email" name="Email" id="Email" maxlength="40" required="required"/>
</p>

<p><label for="mobile">Mobile phone:</label>
<input type="tel" name="mobile" id="mobile" maxlength="15"/>
</p>

<p><label for="phone">Day phone:</label>
<input type="tel" name="phone" id="phone" maxlength="15"/>
</p>

<p>How do you prefer to be contacted?<br/>

<label> <input type="checkbox" id="byemail" name="how-to-contact[]" value="byemail"/> 
By Email</label>

<label> <input type="checkbox" id="mobilecall" name="how-to-contact[]" value="mobilecall"/> 
Mobile Call</label>


<label> <input type="checkbox" id="dayphone" name="how-to-contact[]" value="dayphone"/> 
Day Phone Call</label>


<label> <input type="checkbox" id="message" name="how-to-contact[]" value="message"/> 
Text Message</label>
</p>

<p>What are you interested in?<br>

<label><input type="radio" id="interest-tattoo" name="interest" value="tattoo" />Tattoo</label>
<label><input type="radio" id="interest-painting" name="interest" value="painting" />Painting</label>
<label><input type="radio" id="interest-sketch" name="interest" value="sketch" />Sketch</label>
<label><input type="radio" id="interest-other" name="interest" value="other" />Other</label>
<label for="interest-specify">If other, please, specify:</label>
<input type="text" name="interest-specify" id="interest-specify" maxlength="150"/>
</p>

<p>
<label for="how-found">How did you know about me and my website?</label>

<select name="how-found" id="how-found" size="1">
<option value="#">Choose one</option>
<option value="friends">Friends</option>
<option value="card"> Business Card</option>
<option value="facebook">Facebook</option>
<option value="instagram">Instagram</option>
<option value="yelp">Yelp</option>
<option value="other">Other</option>
</select>
</p>

<p>
<label for="comments">Comments and details:</label>
<textarea name="comments" id="comments" rows="5" cols="25"></textarea>
</p>

<p class="submit-button">
<input type="submit" value="Send to Axi" />
</p>
</fieldset>
</form>    
    ';
    }

?>


<p><a href="#wrapper">Go to Top</a></p>

</div> <!--  end of the content div  -->

<aside id="secondary">

 <?php include'include/asidenav.php'; ?>        
   
<div id="gotattoo">

<h3><a href="tattoo-gallery.php">Tattoo Gallery</a></h3>
</div>

<div id="gopainting">
<h3><a href="paintings-gallery.php">Paintings</a></h3>
</div>   
</aside>  <!--  end of secondary aside  -->

</div> <!--  end of main  -->
<div id="instagram">
<!-- SnapWidget -->
<script src="http://snapwidget.com/js/snapwidget.js"></script>
<iframe src="http://snapwidget.com/in/?h=YXhpdGF0dG9vfGlufDEyNXw0fDF8fG5vfDIwfG5vbmV8b25TdGFydHx5ZXN8eWVz&ve=110315" title="Instagram Widget" class="snapwidget-widget"allowTransparency="true" frameborder="0" scrolling="no"></iframe>
</div> <!-- end of instagram -->

<?php include'include/footer.php'; ?> 