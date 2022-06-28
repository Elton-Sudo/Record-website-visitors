# Record-website-visitors
Here is a simple example of how you can record your website visitors using PHP and MySQL.

Add this to your php visitors page:

    //add at the start of the page
    $startTime = microtime(true);
    include"visitors.php";
    
    /*****content go here*****/
    
    //add at the end of the page
    $site_load_time = number_format(( microtime(true) - $startTime), 4) . " Sec";
