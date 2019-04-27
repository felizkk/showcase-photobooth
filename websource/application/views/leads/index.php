<!DOCTYPE html>
<html>
<head>
<title>Leads by Ansible</title>
<link href="/assets/style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="padding:3px;background-color:white;">

<p><div class="arial_16" style="text-align:left;">Ansible Photobooth Leads</div></p>

<table style="padding:5px;">
<tr>
    <th class="list" style="width:80px;">ID</th>
    <th class="list" style="width:160px;">Date</th>    
    <th class="list" style="width:100px;">Location</th>
    <th class="list" style="width:150px;">External ID</th>
    <th class="list" style="width:250px;">Full Name</th>
    <th class="list" style="width:250px;">Company</th>
    <th class="list" style="width:100px;">Flyer</th>
    <th class="list" style="width:100px;">Download</th>
</tr>

<?php 
    $bg_color = "lightgrey";
    foreach ($visitor_array as $visitor):
?>
<tr class="list">
    <?php
        if ($bg_color == "white") $bg_color = "lightgrey";
        else $bg_color = "white";
    ?>
    <td class="list" style="background-color:<?php echo $bg_color; ?>;">
        <?php echo $visitor['id']; ?>
    </td>
    <td class="list" style="background-color:<?php echo $bg_color; ?>;">
        <?php if ($visitor['timestamp'] != "") echo date('d-m-Y, H:i:s', $visitor['timestamp']); ?>
    </td>    
    <td class="list" style="background-color:<?php echo $bg_color; ?>;">
        <a class="link" href="http://www.redhatnz.com/leads/<?php echo $visitor['location']; ?>"><?php echo $visitor['location']; ?></a>
    </td>
    <td class="list" style="background-color:<?php echo $bg_color; ?>;">
        <?php echo $visitor['external_id']; ?>
    </td>
    <td class="list" style="background-color:<?php echo $bg_color; ?>;">
        <?php echo $visitor['fullname']; ?>
    </td>
    <td class="list" style="background-color:<?php echo $bg_color; ?>;">
        <?php echo $visitor['company']; ?>
    </td>
    <td class="list" style="background-color:<?php echo $bg_color; ?>;">
        <a class="link" href="http://www.redhatnz.com/flyer/<?php echo $visitor['external_id']; ?>">Flyer</a>
    </td>
    <td class="list" style="background-color:<?php echo $bg_color; ?>;">
        <a class="link" href="http://www.redhatnz.com/download/<?php echo $visitor['external_id']; ?>">Download</a>
    </td>
</tr>

<?php endforeach ?>
</table>

</body>
</html>