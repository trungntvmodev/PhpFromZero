<?php
function logMessage($type, $level, $message)
{
    global $debug;
    global $use_syslog;
    if ($use_syslog) {
        define_syslog_variables();
        if ($debug) {
        }
        if ($level == 0) {
            $s_level = LOG_ERR;
        } else {
            if ($level == 1) {
                $s_level = LOG_WARNING;
            } else {
                if ($level == 2) {
                    $s_level = LOG_INFO;
                } else {
                    if ($level == 3) {
                        $s_level = LOG_DEBUG;
                    } else {
                        $s_level = LOG_ERR;
                    }
                }
            }
        }
        $s_message = $type . " " . $message;
        openlog("restbot", LOG_PID, LOG_DAEMON);
        syslog($s_level, $s_message);
        closelog();
    }
}
?>
