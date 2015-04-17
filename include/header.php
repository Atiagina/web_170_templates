<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>
<meta name="viewport" content="width=device-width">

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<link href="style.css" rel="stylesheet" />  
<style type="text/css">
<!--
   /* replace this line with embedded style rules */
-->  
</style> 

<script src="http://code.jquery.com/jquery-1.4.4.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
$("img.rollover").hover( 
function() { this.src = this.src.replace("_off", "_on"); 
}, 
function() { this.src = this.src.replace("_on", "_off"); 
});
}); 
</script>

<script> 
<!--
var originalNavClasses;

function toggleNav() {
    var elem = document.getElementById('nav-toggle');
    var classes = elem.className;
    if (originalNavClasses === undefined) {
        originalNavClasses = classes;
    }
    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}
-->  
</script>

</head>