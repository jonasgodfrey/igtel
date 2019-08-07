<?php
  require('inc/config.php');
  require('inc/db.php');

$sql = "SELECT RatingID, OperatorID FROM consumersreports";

$report = [];    
    
$result = $conn->query($sql);
    if($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            

            if(!isset($report[$row['OperatorID']]))
                $report[$row['OperatorID']] = ['strength' => 0, 'frequency' => 0];

            $report[$row['OperatorID']]['strength'] += $row['RatingID'];
            $report[$row['OperatorID']]['frequency'] += 1;
        }
    }

    foreach($report as $key => $value){

        $report[$key]['average'] = $value['strength'] / $value['frequency'];
    }

    $reportArray = [];

    foreach($report as $key => $value){

        $reportArray[] = $value['average'];
    }
    
    echo json_encode($reportArray);

?>

