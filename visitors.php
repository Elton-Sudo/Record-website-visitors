<?php
function Conn() {
    return $conn = new mysqli("localhost", "eltonbro_elton", "pass", "db");
}
/***country flags***/
$flags = array(
    'AF' => 'Afghanistan.png',
    'AX' => 'Aland_Islands.png',
    'AL' => 'Albania.png',
    'DZ' => 'Algeria.png',
    'AS' => 'American_Samoa.png',
    'AD' => 'Andorra.png',
    'AO' => 'Angola.png',
    'AI' => 'Anguilla.png',
    'AQ' => 'Antarctica.png',
    'AG' => 'Antigua_and_Barbuda.png',
    'AR' => 'Argentina.png',
    'AM' => 'Armenia.png',
    'AW' => 'Aruba.png',
    'AU' => 'Australia.png',
    'AT' => 'Austria.png',
    'AZ' => 'Azerbaijan.png',
    'BS' => 'Bahamas.png',
    'BH' => 'Bahrain.png',
    'BD' => 'Bangladesh.png',
    'BB' => 'Barbados.png',
    'BY' => 'Belarus.png',
    'BE' => 'Belgium.png',
    'BZ' => 'Belize.png',
    'BJ' => 'Benin.png',
    'BM' => 'Bermuda.png',
    'BT' => 'Bhutan.png',
    'BO' => 'Bolivia.png',
    'BA' => 'Bosnia.png',
    'BW' => 'Botswana.png',
    'BV' => 'Bouvet_Island.png',
    'BR' => 'Brazil.png',
    'IO' => 'British_Virgin_Islands.png',
    'VG' => 'British_Virgin_Islands.png',
    'BN' => 'Brunei.png',
    'BG' => 'Bulgaria.png',
    'BF' => 'Burkina_Faso.png',
    'BI' => 'Burundi.png',
    'KH' => 'Cambodia.png',
    'CM' => 'Cameroon.png',
    'CA' => 'Canada.png',
    'CV' => 'Cape_Verde.png',
    'KY' => 'Cayman_Islands.png',
    'CF' => 'Central_African_Republic.png',
    'TD' => 'Chad.png',
    'CL' => 'Chile.png',
    'CN' => 'China.png',
    'CX' => 'Christmas_Island.png',
    'CC' => 'Cocos_(Keeling)_Islands.png',
    'CO' => 'Colombia.png',
    'KM' => 'Comoros.png',
    'CG' => 'Congo.png',
    'CD' => 'Democratic_Republic_of_the_Congo.png',
    'CK' => 'Cook_Islands.png',
    'CR' => 'Costa_Rica.png',
    'CI' => 'Cote_Ivoire.png',
    'HR' => 'Croatia.png',
    'CU' => 'Cuba.png',
    'CY' => 'Cyprus.png',
    'CZ' => 'Czech_Republic.png',
    'DK' => 'Denmark.png',
    'DJ' => 'Djibouti.png',
    'DM' => 'Dominica.png',
    'DO' => 'Dominican_Republic.png',
    'EC' => 'Ecuador.png',
    'EG' => 'Egypt.png',
    'SV' => 'El_Salvador.png',
    'GQ' => 'Equatorial_Guinea.png',
    'ER' => 'Eritrea.png',
    'EE' => 'Estonia.png',
    'ET' => 'Ethiopia.png',
    'FK' => 'Falkland_Islands.png',
    'FO' => 'Faroe_Islands.png',
    'FJ' => 'Fiji.png',
    'FI' => 'Finland.png',
    'FR' => 'France.png',
    'GF' => 'French_Guiana.png',
    'PF' => 'French_Polynesia.png',
    'TF' => 'French_Southern.png',
    'GA' => 'Gabon.png',
    'GM' => 'Gambia.png',
    'GE' => 'Georgia.png',
    'DE' => 'Germany.png',
    'GH' => 'Ghana.png',
    'GI' => 'Gibraltar.png',
    'GR' => 'Greece.png',
    'GL' => 'Greenland.png',
    'GD' => 'Grenada.png',
    'GP' => 'France.png',
    'GU' => 'Guam.png',
    'GT' => 'Guatemala.png',
    'GG' => 'Guernsey.png',
    'GN' => 'Guinea.png',
    'GW' => 'Guinea_Bissau.png',
    'GY' => 'Guyana.png',
    'HT' => 'Haiti.png',
    'HN' => 'Honduras.png',
    'HK' => 'Hong_Kong.png',
    'HU' => 'Hungary.png',
    'IS' => 'Iceland.png',
    'IN' => 'India.png',
    'ID' => 'Indonesia.png',
    'IR' => 'Iran.png',
    'IQ' => 'Iraq.png',
    'IE' => 'Ireland.png',
    'IM' => 'Isle_Of_Man.png',
    'IL' => 'Israel.png',
    'IT' => 'Italy.png',
    'JM' => 'Jamaica.png',
    'JP' => 'Japan.png',
    'JE' => 'Jersey.png',
    'JO' => 'Jordan.png',
    'KZ' => 'Kazakhstan.png',
    'KE' => 'Kenya.png',
    'KI' => 'Kiribati.png',
    'KR' => 'Korea.png',
    'KW' => 'Kuwait.png',
    'KG' => 'Kyrgyzstan.png',
    'LA' => 'Laos.png',
    'LV' => 'Latvia.png',
    'LB' => 'Lebanon.png',
    'LS' => 'Lesotho.png',
    'LR' => 'Liberia.png',
    'LY' => 'Libya.png',
    'LI' => 'Liechtenstein.png',
    'LT' => 'Lithuania.png',
    'LU' => 'Luxembourg.png',
    'MO' => 'Macao.png',
    'MK' => 'Macedonia.png',
    'MG' => 'Madagascar.png',
    'MW' => 'Malawi.png',
    'MY' => 'Malaysia.png',
    'MV' => 'Maldives.png',
    'ML' => 'Mali.png',
    'MT' => 'Malta.png',
    'MH' => 'Marshall_Islands.png',
    'MQ' => 'Martinique.png',
    'MR' => 'Mauritania.png',
    'MU' => 'Mauritius.png',
    'YT' => 'Mayotte.png',
    'MX' => 'Mexico.png',
    'FM' => 'Micronesia.png',
    'MD' => 'Moldova.png',
    'MC' => 'Monaco.png',
    'MN' => 'Mongolia.png',
    'ME' => 'Montenegro.png',
    'MS' => 'Montserrat.png',
    'MA' => 'Morocco.png',
    'MZ' => 'Mozambique.png',
    'MM' => 'Myanmar.png',
    'NA' => 'Namibia.png',
    'NR' => 'Nauru.png',
    'NP' => 'Nepal.png',
    'NL' => 'Netherlands.png',
    'AN' => 'Netherlands_Antilles.png',
    'NC' => 'New_Caledonia.png',
    'NZ' => 'New_Zealand.png',
    'NI' => 'Nicaragua.png',
    'NE' => 'Niger.png',
    'NG' => 'Nigeria.png',
    'NU' => 'Niue.png',
    'NF' => 'Norfolk_Island.png',
    'MP' => 'Northern_Mariana_Islands.png',
    'NO' => 'Norway.png',
    'OM' => 'Oman.png',
    'PK' => 'Pakistan.png',
    'PW' => 'Palau.png',
    'PS' => 'Palestin.png',
    'PA' => 'Panama.png',
    'PG' => 'Papua_New_Guinea.png',
    'PY' => 'Paraguay.png',
    'PE' => 'Peru.png',
    'PH' => 'Philippines.png',
    'PN' => 'Pitcairn_Islands.png',
    'PL' => 'Poland.png',
    'PT' => 'Portugal.png',
    'PR' => 'Puerto_Rico.png',
    'QA' => 'Qatar.png',
    'RE' => 'Reunion.png',
    'RO' => 'Romania.png',
    'RU' => 'Russian_Federation.png',
    'RW' => 'Rwanda.png',
    'BL' => 'Saint_Barthelemy.png',
    'SH' => 'Saint_Helena.png',
    'KN' => 'Saint_Kitts_and_Nevis.png',
    'LC' => 'Saint_Lucia.png',
    'MF' => 'Saint_Martin.png',
    'PM' => 'Saint_Pierre_And_Miquelon.png',
    'VC' => 'Saint_Vincent_And_Grenadines.png',
    'WS' => 'Samoa.png',
    'SM' => 'San_Marino.png',
    'ST' => 'Sao_Tome_and_Principe.png',
    'SA' => 'Saudi_Arabia.png',
    'SN' => 'Senegal.png',
    'RS' => 'Serbia.png',
    'SC' => 'Seychelles.png',
    'SL' => 'Sierra_Leone.png',
    'SG' => 'Singapore.png',
    'SK' => 'Slovakia.png',
    'SI' => 'Slovenia.png',
    'SB' => 'Solomon_Islands.png',
    'SO' => 'Somalia.png',
    'ZA' => 'South_Africa.png',
    'GS' => 'South_Georgia.png',
    'ES' => 'Spain.png',
    'LK' => 'Sri_Lanka.png',
    'SD' => 'Sudan.png',
    'SR' => 'Suriname.png',
    'SJ' => 'Svalbard_and_Jan_Mayen.png',
    'SZ' => 'Swaziland.png',
    'SE' => 'Sweden.png',
    'CH' => 'Switzerland.png',
    'SY' => 'Syrian_Arab_Republic.png',
    'TW' => 'Taiwan.png',
    'TJ' => 'Tajikistan.png',
    'TZ' => 'Tanzania.png',
    'TH' => 'Thailand.png',
    'TL' => 'Timor-Leste.png',
    'TG' => 'Togo.png',
    'TK' => 'Tokelau.png',
    'TO' => 'Tonga.png',
    'TT' => 'Trinidad_and_Tobago.png',
    'TN' => 'Tunisia.png',
    'TR' => 'Turkey.png',
    'TM' => 'Turkmenistan.png',
    'TC' => 'Turks_and_Caicos_Islands.png',
    'TV' => 'Tuvalu.png',
    'UG' => 'Uganda.png',
    'UA' => 'Ukraine.png',
    'AE' => 'United_Arab_Emirates.png',
    'GB' => 'United_Kingdom.png',
    'US' => 'United_States.png',
    'UM' => 'United_States_Outlying_Islands.png',
    'UY' => 'Uruguay.png',
    'VI' => 'US_Virgin_Islands.png',
    'UZ' => 'Uzbekistan.png',
    'VU' => 'Vanuatu.png',
    'VA' => 'Vatican_City.png',
    'VE' => 'Venezuela.png',
    'VN' => 'Vietnam.png',
    'WF' => 'Wallis_and_Futuna.png',
    'EH' => 'Western_Sahara.png',
    'YE' => 'Yemen.png',
    'ZM' => 'Zambia.png',
    'ZW' => 'Zimbabwe.png',
);

/***get browser info***/
require_once('browser.php');
$browser = new Wolfcast\BrowserDetection;
$browser_name = $browser->getName();
$browser_version = $browser->getVersion();
/***END***/

/***get device info***/
require_once('mobile-detect.php');
$detect = new Mobile_Detect;
if ($detect->isMobile()) {
    $device = 'Mobile';
}
elseif ($detect->isTablet()) {
    $device = 'Tablet';
}
else {
    $device = 'PC';
}

if ($detect->isiOS()) {
    $os = 'IOS';
}
elseif ($detect->isAndroidOS()) {
    $os = 'Android';
}
else {
    $os = 'Windows';
}
/***END***/

/***get geoplugin info***/
$visitor_ip = $_SERVER['REMOTE_ADDR'];

$geoplugin = "http://www.geoplugin.net/json.gp?ip=";
$ip_info = @json_decode(file_get_contents($geoplugin.$visitor_ip));

if ($ip_info && $ip_info->geoplugin_countryName != null) {
    $ip = $ip_info->geoplugin_request;
    $country = $ip_info->geoplugin_countryName;
    $country_code = $ip_info->geoplugin_countryCode;
    $city = $ip_info->geoplugin_city;
    $region = $ip_info->geoplugin_region;
    $latitude = $ip_info->geoplugin_latitude;
    $longitude = $ip_info->geoplugin_longitude;
    $radius = $ip_info->geoplugin_locationAccuracyRadius;
    $continent_code = $ip_info->geoplugin_continentCode;
    $continent_name = $ip_info->geoplugin_continentName;
    $timezone = $ip_info->geoplugin_timezone;
    $currency_code = $ip_info->geoplugin_currencyCode;
}
else {
    $region = "N/A";
    $city = "N/A";
    $country = "N/A";
    $country_code = "N/A";
    $latitude = "N/A";
    $longitude = "N/A";
    $radius = "N/A";
    $continent_code = "N/A";
    $continent_name = "N/A";
    $timezone = "N/A";
    $currency_code = "N/A";
}
/***END***/

/***get links info***/
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING'];
$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/';
/***END***/

/***get last visit date***/
$last_visit = date('Y-m-d');
/***END***/

/***check for visitors and update visitor's info if they exist, else add them as new visitors***/
$conn = Conn();                                                                               
$sqlcheck="SELECT * FROM ed_visitors_data where ip='$ip'";
$result = $conn->query($sqlcheck);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $visit_count = $row['visit_count'];
    }
    //Update existing Visitors
    $sql="UPDATE ed_visitors_data SET visit_count='$visit_count'+1, region='$region', browser='$browser_name', device='$device', os='$os', last_visit='$last_visit', site_load_time='$site_load_time' WHERE ip='$ip'";
    $conn->query( $sql );
    //echo "$sql\n";
}
else {
    /***get flag***/
    foreach ($flags as $code => $flag) {
        if ($code == $country_code) {
            $country_flag = $flag;
        }
    }
    if ($country_flag == '') {
        $country_flag = "no-flag.png";
    }
    /***END***/

    //Insert new unique Visitors
    $sql="INSERT INTO ed_visitors_data (ip,country,country_code,country_flag,city,region,latitude,longitude,timezone,continent_code,continent_name,currency_code,time_on_site,current_url,referrer_url,browser,device,os,visit_count,last_visit,site_load_time)
    VALUES ('$ip','$country','$country_code','$country_flag','$city','$region','$latitude','$longitude','$timezone','$continent_code','$continent_name','$currency_code','$time_on_site','$current_url','$referrer_url','$browser_name','$device','$os','1','$last_visit','$site_load_time')";
    $conn->query($sql);
    //echo "$sql\n";
}
/***END***/