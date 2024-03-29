<?php
return [
    // Funktionszuweisung
    'keyFunctionMap' => [
        'child_lock' => 'handleState',
        'voltage' => 'handleVoltage',
        'presence_sensitivity' => 'handleSimpleValue',
        'detection_distance_min' => 'handleSimpleValue',
        'detection_distance_max' => 'handleSimpleValue',
        'presence_state' => 'handleSimpleValue',
        'presence_event' => 'handleSimpleValue',
        'action_zone' => 'handleSimpleValue',
        'device_mode' => 'handleSimpleValue',
        'monitoring_mode' => 'handleSimpleValue',
        'approach_distance' => 'handleSimpleValue',
        'reset_nopresence_status' => 'handleSimpleValue',
        'scale_protection' => 'handleState',
        'led_indication' => 'handleState',
        'learn_ir_code' => 'handleState',
        'error' => 'handleSimpleValue',
        'learned_ir_code' => 'handleSimpleValue',
        'fan_mode' => 'handleSimpleValue',
        'alarm_time' => 'handleSimpleValue',
        'alarm_mode' => 'handleSimpleValue',
        'charge_state' => 'handleState',
        'alarm_melody' => 'handleSimpleValue',
        'tamper_alarm' => 'handleState',
        'tamper_alarm_switch' => 'handleState',
        'alarm_switch' => 'handleState',
        'alarm_state' => 'handleSimpleValue',
        'do_not_disturb' => 'handleSimpleValue',
        'color_power_on_behavior' => 'handleSimpleValue',
        'displayed_temperature' => 'handleSimpleValue',
        'remote_temperature' => 'handleSimpleValue',
        'battery_state' => 'handleSimpleValue',
        'temperature_unit' => 'handleSimpleValue',
        'soil_moisture' => 'handleSimpleValue',
        'mute' => 'handleSimpleValue',
        'mute_buzzer' => 'handleSimpleValue',
        'adaptation_run_control' => 'handleSimpleValue',
        'adaptation_run_status' => 'handleSimpleValue',
        'day_of_week' => 'handleSimpleValue',
        'regulation_setpoint_offset' => 'handleSimpleValue',
        'load_estimate' => 'handleSimpleValue',
        'load_room_mean' => 'handleSimpleValue',
        'algorithm_scale_factor' => 'handleSimpleValue',
        'trigger_time' => 'handleSimpleValue',
        'window_open_internal' => 'handleSimpleValue',
        'adaptation_run_settings' => 'handleSimpleValue',
        'preheat_status' => 'handleSimpleValue',
        'load_balancing_enable' => 'handleSimpleValue',
        'window_open_external' => 'handleSimpleValue',
        'window_open_feature' => 'handleSimpleValue',
        'radiator_covered' => 'handleSimpleValue',
        'external_measured_room_sensor' => 'handleSimpleValue',
        'occupied_heating_setpoint_scheduled' => 'handleSimpleValue',
        'setpoint_change_source' => 'handleSimpleValue',
        'heat_required' => 'handleSimpleValue',
        'heat_available' => 'handleSimpleValue',
        'viewing_direction' => 'handleSimpleValue',
        'thermostat_vertical_orientation' => 'handleSimpleValue',
        'mounted_mode_control' => 'handleSimpleValue',
        'programming_operation_mode' => 'handleSimpleValue',
        'keypad_lockout' => 'handleSimpleValue',
        'linkage_alarm_state' => 'handleSimpleValue',
        'linkage_alarm' => 'handleSimpleValue',
        'heartbeat_indicator' => 'handleSimpleValue',
        'buzzer_manual_mute' => 'handleSimpleValue',
        'buzzer_manual_alarm' => 'handleSimpleValue',
        'buzzer' => 'handleSimpleValue',
        'smoke_density_dbm' =>'handleSimpleValue' ,
        'display_brightness' => 'handleSimpleValue',
        'display_ontime' => 'handleSimpleValue',
        'display_orientation' => 'handleSimpleValue',
        'fan_state' => 'handleState',
        'boost' => 'handleState',
        'boost_heating' => 'handleState',
        'boost_heating_countdown_time_set' => 'handleSimpleValue',
        'valve_state' => 'handleState',
        'eco_mode' => 'handleState',
        'side' => 'handleSimpleValue',
        'power_outage_count' => 'handleSimpleValue',
        'switch_type' => 'handleSimpleValue',
        'indicator_mode' => 'handleSimpleValue',
        'temperature_alarm' => 'handleSimpleValue',
        'humidity_alarm' => 'handleSimpleValue',
        'alarm' => 'handleSimpleValue',
        'melody' => 'handleSimpleValue',
        'power_type' => 'handleSimpleValue',
        'volume' => 'handleSimpleValue',
        'humidity_max' => 'handleSimpleValue',
        'humidity_min' => 'handleSimpleValue',
        'temperature_max' => 'handleSimpleValue',
        'temperature_min' => 'handleSimpleValue',
        'backlight_mode' => 'handleSimpleValue',
        'led_state' => 'handleSimpleValue',
        'duration_of_absence' => 'handleSimpleValue',
        'duration_of_attendance' => 'handleSimpleValue',
        'action_rate' => 'handleSimpleValue',
        'action_step_size' => 'handleSimpleValue',
        'action_transition_time' => 'handleSimpleValue',
        'action_group' => 'handleSimpleValue',
        'action_color_temperature' => 'handleSimpleValue',
        'temperature' => 'handleSimpleValue',
        'temperature_l1' => 'handleSimpleValue',
        'temperature_l2' => 'handleSimpleValue',
        'temperature_l3' => 'handleSimpleValue',
        'temperature_l4' => 'handleSimpleValue',
        'temperature_l5' => 'handleSimpleValue',
        'temperature_l6' => 'handleSimpleValue',
        'temperature_l7' => 'handleSimpleValue',
        'temperature_l8' => 'handleSimpleValue',
        'device_temperature' => 'handleSimpleValue',
        'local_temperature' => 'handleSimpleValue',
        'local_temperature_calibration' => 'handleSimpleValue',
        'max_temperature' => 'handleSimpleValue',
        'min_temperature' => 'handleSimpleValue',
        'eco_temperature' => 'handleSimpleValue',
        'preset' => 'handleSimpleValue',
        'away_mode' => 'handleState',
        'away_preset_days' => 'handleSimpleValue',
        'away_preset_temperature' => 'handleSimpleValue',
        'boost_time' => 'handleSimpleValue',
        'comfort_temperature' => 'handleSimpleValue',
        'eco_temperature' => 'handleSimpleValue',
        'current_heating_setpoint' => 'handleSimpleValue',
        'current_heating_setpoint_auto' => 'handleSimpleValue',
        'occupied_heating_setpoint' => 'handleSimpleValue',
        'pi_heating_demand' => 'handleSimpleValue',
        'programming_mode' => 'handleSimpleValue',
        'system_mode' => 'handleSimpleValue',
        'running_state' => 'handleSimpleValue',
        'sensor' => 'handleSimpleValue',
        'linkquality' => 'handleSimpleValue',
        'last_seen' => 'handleSimpleValue',
        'valve_position' => 'handleSimpleValue',
        'humidity' => 'handleSimpleValue',
        'pressure' => 'handleSimpleValue',
        'battery' => 'handleSimpleValue',
        'voltage' => 'handleVoltage',
        'current' => 'handleSimpleValue',
        'action' => 'handleSimpleValue',
        'brightness' => 'handleSimpleValue',
        'brightness_rgb' => 'handleSimpleValue',
        'brightness_cct' => 'handleSimpleValue',
        'brightness_white' => 'handleSimpleValue',
        'position' => 'handleSimpleValue',
        'position_left' => 'handleSimpleValue',
        'position_right' => 'handleSimpleValue',
        'motor_speed' => 'handleSimpleValue',
        'region_id' => 'handleSimpleValue',
        'occupancy' => 'handleSimpleValue',
        'occupancy_timeout' => 'handleSimpleValue',
        'motion_sensitivity' => 'handleSimpleValue',
        'presence' => 'handleSimpleValue',
        'motion' => 'handleSimpleValue',
        'motion_state' => 'handleSimpleValue',
        'motion_direction' => 'handleSimpleValue',
        'motor_direction' => 'handleSimpleValue',
        'scene' => 'handleSimpleValue',
        'motion_speed' => 'handleSimpleValue',
        'led_enable' => 'handleSimpleValue',
        'replace_filter' => 'handleSimpleValue',
        'filter_age' => 'handleSimpleValue',
        'fan_speed' => 'handleSimpleValue',
        'air_quality' => 'handleSimpleValue',
        'radar_sensitivity' => 'handleSimpleValue',
        'radar_scene' => 'handleSimpleValue',
        'motor_working_mode' => 'handleSimpleValue',
        'detection_interval' => 'handleSimpleValue',
        'control' => 'handleSimpleValue',
        'mode' => 'handleSimpleValue',
        'week' => 'handleSimpleValue',
        'control_back_mode' => 'handleSimpleValue',
        'border' => 'handleSimpleValue',
        'illuminance' => 'handleSimpleValue',
        'illuminance_lux' => 'handleSimpleValue',
        'illuminance_lux_l1' => 'handleSimpleValue',
        'illuminance_lux_l2' => 'handleSimpleValue',
        'illuminance_lux_l3' => 'handleSimpleValue',
        'illuminance_lux_l4' => 'handleSimpleValue',
        'illuminance_lux_l5' => 'handleSimpleValue',
        'illuminance_lux_l6' => 'handleSimpleValue',
        'illuminance_lux_l7' => 'handleSimpleValue',
        'illuminance_lux_l8' => 'handleSimpleValue',
        'strength' => 'handleSimpleValue',
        'water_leak' => 'handleSimpleValue',
        'contact' => 'handleSimpleValue',
        'carbon_monoxide' => 'handleSimpleValue',
        'smoke' => 'handleSimpleValue',
        'smoke_density' => 'handleSimpleValue',
        'tamper' => 'handleSimpleValue',
        'battery_low' => 'handleSimpleValue',
        'action_angle' => 'handleSimpleValue',
        'angle_x' => 'handleSimpleValue',
        'angle_y' => 'handleSimpleValue',
        'angle_x_absolute' => 'handleSimpleValue',
        'angle_y_absolute' => 'handleSimpleValue',
        'angle_z' => 'handleSimpleValue',
        'action_from_side' => 'handleSimpleValue',
        'action_side' => 'handleSimpleValue',
        'action_to_side' => 'handleSimpleValue',
        'power' => 'handleSimpleValue',
        'consumer_connected' => 'handleSimpleValue',
        'energy' => 'handleSimpleValue',
        'overload_protection' => 'handleSimpleValue',
        'duration' => 'handleSimpleValue',
        'action_duration' => 'handleSimpleValue',
        'percent_state' => 'handleSimpleValue',
        'color' => 'handleColorRGBValue',
        'color_rgb' => 'handleColorRGBValue',
        'sensitivity' => 'handleSimpleValue',
        'color_temp' => 'handleColorTemperature',
        'color_temp_rgb' => 'handleColorTemperature',
        'color_temp_cct' => 'handleColorTemperature',
        'color_temp_startup_rgb' => 'handleSimpleValue',
        'color_temp_startup_cct' => 'handleSimpleValue',
        'color_temp_startup' => 'handleSimpleValue',
        'state' => 'handleState',
        'led_disabled_night' => 'handleSimpleValue',
        'state_rgb' => 'handleSimpleValue',
        'state_cct' => 'handleSimpleValue',
        'state_white' => 'handleSimpleValue',
        'power_outage_memory' => 'handleSimpleValue',
        'power_on_behavior' => 'handleSimpleValue',
        'power_on_behavior_l1' => 'handleSimpleValue',
        'power_on_behavior_l2' => 'handleSimpleValue',
        'power_on_behavior_l3' => 'handleSimpleValue',
        'power_on_behavior_l4' => 'handleSimpleValue',
        'state_l1' => 'handleState',
        'state_l2' => 'handleState',
        'state_l3' => 'handleState',
        'state_l4' => 'handleState',
        'state_l5' => 'handleState',
        'state_l6' => 'handleState',
        'state_l7' => 'handleState',
        'state_l8' => 'handleState',
        'state_left' => 'handleState',
        'state_right' => 'handleState',
        'window' => 'handleState',
        'window_detection' => 'handleState',
        'open_window' => 'handleState',
        'window_open' => 'handleState',
        'button_lock' => 'handleSimpleValue',
        'open_window_temperature' => 'handleSimpleValue',
        'holiday_temperature' => 'handleSimpleValue',
        'boost_timeset_countdown' => 'handleSimpleValue',
        'frost_protection' => 'handleState',
        'heating_stop' => 'handleState',
        'test' => 'handleSimpleValue',
        'valve_detection' => 'handleState',
        'auto_lock' => 'handleState',
        'update_available' => 'handleSimpleValue',
        'voc' => 'handleSimpleValue',
        'pm25' => 'handleSimpleValue',
        'co2' => 'handleSimpleValue',
        'formaldehyd' => 'handleSimpleValue',
        'force' => 'handleSimpleValue',
        'moving' => 'handleSimpleValue',
        'moving_left' => 'handleSimpleValue',
        'moving_right' => 'handleSimpleValue',
        'trv_mode' => 'handleSimpleValue',
        'calibration' => 'handleState',
        'calibration_left' => 'handleState',
        'calibration_right' => 'handleState',
        'motor_reversal' => 'handleState',
        'motor_reversal_left' => 'handleState',
        'motor_reversal_right' => 'handleState',
        'calibration_time' => 'handleSimpleValue',
        'calibration_time_left' => 'handleSimpleValue',
        'calibration_time_right' => 'handleSimpleValue',
        'target_distance' => 'handleSimpleValue',
        'minimum_range' => 'handleSimpleValue',
        'maximum_range' => 'handleSimpleValue',
        'deadzone_temperature' => 'handleSimpleValue',
        'max_temperature_limit' => 'handleSimpleValue',
        'detection_delay' => 'handleSimpleValue',
        'self_test' => 'handleSimpleValue',
        'fading_time' => 'handleSimpleValue',
        'trigger' => 'handleState',
        'garage_door_contact' => 'handleSimpleValue',
        'brightness_level' => 'handleSimpleValue',
        'trigger_indicator' => 'handleSimpleValue',
        'action_code' => 'handleSimpleValue',
        'action_transaction' => 'handleSimpleValue',
        'vibration' => 'handleSimpleValue',
        'thermostat_unit' => 'handleSimpleValue',
    ],
];