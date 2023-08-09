<?php

namespace Vanderbilt\CareerDevLibrary;

require_once(dirname(__FILE__)."/ClassLoader.php");

class ReactNIHTables {
    public static function fastField($pid, $field) {
	    $values = [];

        $module = Application::getModule();
	    $sql = "SELECT record, value, instance
                    FROM redcap_data
                    WHERE project_id = ?
                        AND field_name= ?";
        if ($module) {
            $q = $module->query($sql, [$pid, $field]);
        } else {
            $q = db_query($sql, [$pid, $field]);
        }

	    $hasMultipleInstances = FALSE;
	    while ($row = $q->fetch_assoc()) {
	        if ($row['instance']) {
	            $hasMultipleInstances = TRUE;
	            $instance = $row['instance'];
            } else {
	            $instance = 1;
            }
	        $recordId = $row['record'];
	        $value = $row['value'];
	        if (!isset($values[$recordId])) {
	            $values[$recordId] = [];
            }
	        $values[$recordId][$instance] = $value;
        }

        if (!$hasMultipleInstances) {
            foreach ($values as $recordId => $instanceValues) {
                $values[$recordId] = $values[$recordId][1];
            }
        }

        var_dump($values);

	    return $values;
    }
}
