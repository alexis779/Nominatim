<?php
	$details = array();
	$details['lat'] = $aPointDetails['lat'];
	$details['lon'] = $aPointDetails['lon'];
	$details['address'] = array();
	foreach($aAddressLines as $aAddressLine)
	{
		if (! is_null($aAddressLine["admin_level"]))
		{
			$addressElement = array("localname" => $aAddressLine["localname"], "place_id" => $aAddressLine["place_id"], "osm_type" => $aAddressLine["osm_type"], "osm_id" => $aAddressLine["osm_id"], "type" => $aAddressLine["type"], "admin_level" => $aAddressLine["admin_level"]);
			array_push($details['address'], $addressElement);
		}
	}
	javascript_renderData($details);
?>
