
<?php

/* Redirect browser */
header("Location: http://www.redhatnz.com/photo/" . $visitor_row['location'] . '/' . $visitor_row['external_id'] . '.jpg');

/* Make sure that code below does not get executed when we redirect. */
exit;

?>
