<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
	case "index.php": 
		$title = "Home | Axi Tattoo | Seattle, WA";
	break;
	
	case "about.php": 
		$title = "About | Axi Tattoo | Seattle, WA";
	break;
	
	case "bio.php": 
		$title = "Biography | Axi Tattoo | Seattle, WA";
	break;
	
	case "howiwork.php": 
		$title = "How I Work | Axi Tattoo | Seattle, WA";
	break;
	
	case "testimonials.php": 
		$title = "Testimonials | Axi Tattoo | Seattle, WA";
	break;
	
	case "tattoo.php": 
		$title = "Tattoo Overview | Axi Tattoo | Seattle, WA";
	break;
	
	case "tattoo-gallery.php": 
		$title = "Tattoo Gallery | Axi Tattoo | Seattle, WA";
	break;
	
	case "paintings.php": 
		$title = "Paintings and Other Artworks Gallery | Axi Tattoo | Seattle, WA";
	break;
	
	case "faq.php": 
		$title = "FAQ | Axi Tattoo | Seattle, WA";
	break;
	
	case "contact.php": 
		$title = "Contact | Axi Tattoo | Seattle, WA";
	break;
	
	case "contact-form.php": 
		$title = "Make an Appointment | Axi Tattoo | Seattle, WA";
	break;
	
	case "sitemap.php": 
		$title = "Sitemap | Axi Tattoo | Seattle, WA";
	break;
	
	default:
		$title = "Axi Tattoo | Seattle. WA";
	};
