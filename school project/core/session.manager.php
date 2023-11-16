<?php
// Set session timeout to 1 hour in seconds
$sessionTimeout = 3600;

// Set the maximum lifetime
ini_set('session.gc_maxlifetime', $sessionTimeout);

// Start the session
session_start();

// Update the session expiration time
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $sessionTimeout)) {
    // If last activity was more than 5 minutes ago, destroy session
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}

// Update last activity time stamp
$_SESSION['LAST_ACTIVITY'] = time();
?>