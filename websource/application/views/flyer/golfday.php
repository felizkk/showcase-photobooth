<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>
<link href="/assets/style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="padding:3px;">

<table style="width:1000px;border:2px solid black;padding:5px;">
<tr>
    <td style="text-align:center;padding:2px;">
        <img style="width:100%;" src="/assets/powered_by_ansible.png" />
    </td>
</tr>
<tr>
    <td style="text-align:center;padding:2px;">
        <img style="width:100%;" src="/assets/banner_curekids.png" />
    </td>
</tr>
<tr>
    <td style="text-align:center;padding:2px;">
        <img style="width:100%;" src="http://showcase/photo/<?php echo $visitor_row['location'] . '/' . $visitor_row['external_id']?>.jpg" />
    </td>
</tr>
<tr>
    <td style="text-align:center;padding:2px;">
        <div class="arial_24">
            Download your picture at:</br>
            <div style="color:red;font-weight:bold;">http://www.redhatnz.com/download/<?php echo $visitor_row['external_id']?></br></div>
            </br>
        </div>
    </td>
</tr>
<tr>
    <td style="text-align:center;padding:2px;">
        <div class="arial_24">
            Thank you for your support for Cure Kids!
            </br></br>
        </div>
    </td>
</tr>

</table>

</body>
</html>
