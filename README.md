# Record-website-visitors
Here is a simple example of how you can record your website visitors using PHP and MySQL.

Add this to your php visitors page:

    //add at the start of the page
    $startTime = microtime(true);
    include"visitors.php";
    
    /*****content go here*****/
    
    //add at the end of the page
    $site_load_time = number_format(( microtime(true) - $startTime), 4) . " Sec";



Here's the structure for your table `ed_visitors_data`

CREATE TABLE `ed_visitors_data` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `country` text NOT NULL,
  `country_code` text NOT NULL,
  `country_flag` text NOT NULL,
  `city` text NOT NULL,
  `region` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `timezone` text NOT NULL,
  `continent_code` text NOT NULL,
  `continent_name` text NOT NULL,
  `currency_code` text NOT NULL,
  `time_on_site` text NOT NULL,
  `current_url` text NOT NULL,
  `referrer_url` text NOT NULL,
  `browser` text NOT NULL,
  `device` text NOT NULL,
  `os` text NOT NULL,
  `visit_count` int(50) NOT NULL,
  `last_visit` text DEFAULT NULL,
  `site_load_time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `ed_visitors_data`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ed_visitors_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;
