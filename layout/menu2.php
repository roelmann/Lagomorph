<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
	<title>Convert Menu to Dropdown</title>
		

	
	<!-- You COULD just put both menus in the markup,
	     but if you don't like that, this is how you
	     could dynamically create it with jQuery.  -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>
	 // DOM ready
	 $(function() {
	   
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
	   // To make dropdown actually work
	   // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	 
	 });
	</script>
</head>

<body>

  <nav> 
    	
  	<ul> 
<?php  	
    if (!empty($PAGE->theme->settings->menuurl)) {
        $menuurl = $PAGE->theme->settings->menuurl;
    } else {
        $menuurl = $CFG->wwwroot.'/theme/lagomorph/layout/menu1.txt';
    }


$filename = $menuurl;
$fd = fopen ($filename, "r");
$contents = fread ($fd,10000);

fclose ($fd);
$delimiter = ';';
$splitcontents = explode($delimiter, $contents);

foreach ( $splitcontents as $menuitem )
{
$delimiter2 = '|';
$link = explode($delimiter2, $menuitem);
echo "<li><a href=$link[1]>$link[0]</a></li>";
}

?>

    </ul>
  	
  </nav>
  
</body>

</html>
