<!DOCTYPE html>
<html>
<head>
<title>Golfday Photobooth</title>
<link href="/assets/style.css" rel="stylesheet" type="text/css"/>
<script>
    window.onload = function() {
        setTimeout(function(){document.location='http://showcase/slideshow/<?php echo $next_index; ?>';}, 10000);
    }
</script>
</head>
<body style="padding:3px;background-color:black;">

<table style="width:100%;padding:5px;">
<tr>
    <td style="text-align:center;padding:2px;">
        <div class="arial_24" style="color:white;">A Cloud Photobooth Powered by Ansible and Azure</div>
    </td>
</tr>
<tr>
    <td style="text-align:center;padding:2px;">
        <img style="width:1200px;" src="http://showcase/photo/<?php echo $visitor_array[$target_index]['location'] . '/' . $visitor_array[$target_index]['external_id']?>.jpg" />
    </td>
</tr>
<tr>
    <td style="text-align:center;padding:2px;">
        <div class="arial_24" style="color:white;">Thank You <?php echo $visitor_array[$target_index]['fullname']; ?> for visiting our booth!</div>
    </td>
</tr>

</table>

</body>
</html>