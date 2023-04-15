<?php                
require '../controllers/server/server.php';
$userID = $_SESSION['thriftID'];
$state = "APPROVED";
$display_query = $server->prepare("select event_id,event_name,event_start_date,event_end_date from calendar_event_master where event_id = ? and event_state = ?");
$display_query->bind_param("ss", $userID, $state); $display_query->execute();
$results = $display_query->get_result();
$count = $results->num_rows;
if($count>0) 
{
	$data_arr=array();
    $i=1;
	while($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC))
	{	
	$data_arr[$i]['event_id'] = $data_row['event_id'];
	$data_arr[$i]['title'] = $data_row['event_name'];
	$data_arr[$i]['start'] = date("Y-m-d", strtotime($data_row['event_start_date']));
	$data_arr[$i]['end'] = date("Y-m-d", strtotime($data_row['event_end_date']));
	$data_arr[$i]['color'] = '#'.substr(uniqid(),-6); // 'green'; pass colour name
	$i++;
	}
	
	$data = array(
                'status' => true,
                'msg' => 'successfully!',
				'data' => $data_arr
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Error!'				
            );
}
echo json_encode($data);
?>