<?php
/*--- settings & errors ---*/
//ini_set('display_errors', 0);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

/*--- create connection ---*/
function Conn() {
    return $conn = new mysqli("localhost", "eltonbro_elton", "pass", "db");
}

/*--- functions ---*/
//Analytics Results
function showResults() {

    $return_results = "";
    $return_results .= "
    <script>
        $(document).ready( function () {
            $('#analytics_results').DataTable();
        } );
    </script>
    <div class='padd-15'>
        <div class='results-container'>
            <h2>EltonB Analytics</h2>
            <div class=row'>
                <table id='analytics_results' class='display'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Country</th>
                            <th>Region</th>
                            <th>Continent Name</th>
                            <th>Browser</th>
                            <th>Device</th>
                            <th>Device OS</th>
                            <th>Visit Count</th>
                            <th>Last Visit</th>
                            <th>Load Time</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $conn = Conn();
                    $sql = "SELECT * FROM ed_visitors_data ORDER BY last_visit DESC";
                    $result=$conn->query($sql);
                    if ($result->num_rows>0){
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $ip = $row['ip'];
                            $country = $row['country'];
                            $country_code = $row['country_code'];
                            $country_flag = $row['country_flag'];
                            $flag = "<img src='flags/$country_flag' alt='$country_code' style='width: 30px; border-radius: 50%; height: 30px;'>";
                            $city = $row['city'];
                            $region = $row['region'];
                            $latitude = $row['latitude'];
                            $longitude = $row['longitude'];
                            $timezone = $row['timezone'];
                            $continent_code = $row['continent_code'];
                            $continent_name = $row['continent_name'];
                            $currency_code = $row['currency_code'];
                            $time_on_site = $row['time_on_site'];
                            $current_url = $row['current_url'];
                            $referrer_url = $row['referrer_url'];
                            $browser_name = $row['browser'];
                            $device = $row['device'];
                            $os = $row['os'];
                            $visit_count = $row['visit_count'];
                            $last_visit = $row['last_visit'];
                            $site_load_time = $row['site_load_time'];

                            $return_results .="
                            <tr>
                                <td>$id</td>
                                <td>$flag</td>
                                <td>$region</td>
                                <td>$continent_name</td>
                                <td>$browser_name</td>
                                <td>$device</td>
                                <td>$os</td>
                                <td>$visit_count</td>
                                <td>$last_visit</td>
                                <td>$site_load_time</td>
                            </tr>";
                        }
                    }
            $return_results .="
                    </tbody>
                </table>
            </div>
        </div>
    </div>";
    return $return_results;
}
/***END***/

/*--- actions ---*/
if ($_GET['action']=="showResults") {
    echo showResults();
    die();
}
die('<center style="margin-top: 300px; color: #ff4500;"><h1>&#129497; You Shall Not Pass!</h1></center>');