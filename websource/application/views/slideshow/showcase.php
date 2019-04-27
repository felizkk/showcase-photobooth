<!DOCTYPE html>
<html>
<head>
<title>Showcase 2019 Photobooth</title>
<link href="/assets/style.css" rel="stylesheet" type="text/css"/>
<script>
    window.onload = function() {
        setTimeout(function(){document.location='http://www.redhatnz.com/slideshow/<?php echo $next_index; ?>';}, 10000);
    }
</script>
</head>
<body style="padding:3px;background-color:#b30000;">

<table style="padding:5px;">
<tr>
    <td style="width:300px;"></td>
    <td style="width:1300px;text-align:center;padding:2px;">
        <img style="width:100%;" src="/assets/powered_by_ansible.png" />
    </td>
    <td style="width:250px;"></td>
</tr>
<tr>
    <td style="width:300px;"></td>
    <td style="width:1300px;text-align:center;padding:2px;">
        <img style="width:100%;" src="http://www.redhatnz.com/photo/<?php echo $visitor_array[$target_index]['location'] . '/' . $visitor_array[$target_index]['external_id']?>_f.jpg" />
    </td>
    <td style="width:250px;"></td>
</tr>

</table>

</body>
</html>
