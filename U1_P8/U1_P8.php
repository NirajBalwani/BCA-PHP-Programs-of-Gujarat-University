<?php
    echo $_SERVER['HTTP_USER_AGENT'];
    $browser = get_browser();
    print_r($browser);
    echo "<br><br>"
?>

<?php
    phpinfo();
    echo "PHP Version" . phpversion();
?>