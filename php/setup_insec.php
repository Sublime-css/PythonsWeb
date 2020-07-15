<?php
//New setup.php is much smaller due to optimisation:
$conn_insec = new mysqli("localhost", "insec_user", "TVDPv8tibzfzUHNV", "pythonsweb");
if ($conn_insec->connect_error) {
    die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn_insec->connect_error . "</p>");
}?>