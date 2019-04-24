<!DOCTYPE html>
<html>
<head>
<title>Leads by Ansible</title>
<link href="/assets/style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="padding:3px;background-color:white;">

<table style="width:100%;padding:5px;">
<tr>
    <th class="list" style="width:80px;">ID</th>
    <th class="list" style="width:100px;">Date</th>
    <th class="list" style="width:100px;">Location</th>
    <th class="list" style="width:200px;">External ID</th>
    <th class="list" style="width:200px;">Full Name</th>
    <th class="list" style="width:200px;">Company</th>
    <th class="list" style="width:100px;">Flyer</th>
    <th class="list" style="width:100px;">Download</th>
</tr>

<?php foreach ($visitor_array as $visitor): ?>
<tr class="list">
    <td class="list">
        <?php echo $visitor['id']; ?>
    </td>
    <td class="list">
        <?php if ($visitor['timestamp'] != "") echo date('d-m-Y, H:i:s', $visitor['timestamp']); ?>
    </td>
    <td class="list">
        <a class="link" href="http://www.redhatnz.com/leads/<?php echo $visitor['location']; ?>"><?php echo $visitor['location']; ?></a>
    </td>
    <td class="list">
        <?php echo $visitor['external_id']; ?>
    </td>
    <td class="list">
        <?php echo $visitor['fullname']; ?>
    </td>
    <td class="list">
        <?php echo $visitor['company']; ?>
    </td>
    <td class="list">
        <a class="link" href="http://www.redhatnz.com/flyer/<?php echo $visitor['external_id']; ?>">Flyer</a>
    </td>
    <td class="list">
        <a class="link" href="http://www.redhatnz.com/download/<?php echo $visitor['external_id']; ?>">Download</a>
    </td>                    
</tr>

<?php endforeach ?>
</table>

</body>
</html>