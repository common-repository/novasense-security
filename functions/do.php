<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

const NSTIS_SAFE = 0;
const NSTIS_THREAT = 1;
const NSTIS_ABUSER = 2;
const NSTIS_MALWARE = 3;
const NSTIS_BOTNET = 4;

function nstis_error($ip, $code) {
    if (!is_admin()) {
        require_once(NSTIS_STARTER_PLUGIN_DIR . 'public/error.php');
        exit;
    }
}

function nstis_processRequest() {
    $nstis_whitelist = [
        '127.0.0.1',
    ];

    $userIp = nstis_getUserIp();
    if (in_array($userIp, $nstis_whitelist, false)) {
        $result = NSTIS_SAFE;
    } else {
        $result = nstis_rblLookup($userIp);
    }

    $settings = nstis_get_settings();

    switch ($result) {
        case NSTIS_THREAT:
            if (isset($settings['threats'])) {
                nstis_error($userIp, $result);
            }

        case NSTIS_ABUSER:
            if (isset($settings['abusers'])) {
                nstis_error($userIp, $result);
            }

        case NSTIS_MALWARE:
            if (isset($settings['malware'])) {
                nstis_error($userIp, $result);
            }

        case NSTIS_BOTNET:
            if (isset($settings['botnets'])) {
                nstis_error($userIp, $result);
            }
    }
}
add_action('plugins_loaded', 'nstis_processRequest');

function nstis_rblLookup($ip) {
    $lookup = nstis_reverseIp($ip) . '.rbl.novasense-threats.com';
    $rbl = gethostbyname($lookup);

    if ($lookup != $rbl) {
        switch ($rbl) {
            case "127.0.0.3":
                return NSTIS_THREAT;
            
            case "127.0.0.4":
                return NSTIS_ABUSER;

            case "127.0.0.5":
                return NSTIS_MALWARE;

            case "127.0.0.6":
                return NSTIS_BOTNET;
        }
    }

    return NSTIS_SAFE;
}

function nstis_reverseIp($ip) {
    return implode('.', array_reverse(explode('.', $ip)));
}

function nstis_getUserIp() {
    if (!empty( $_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $_SERVER['REMOTE_ADDR'];
}