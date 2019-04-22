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
        <img style="width:100%;" src="/assets/banner_showcase.png" />
    </td>
</tr>
<tr>
    <td style="text-align:center;padding:2px;">
        <img style="width:100%;" src="http://www.redhatnz.com/photo/<?php echo $visitor_row['location'] . '/' . $visitor_row['external_id']?>_f.jpg" />
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
    <td style="text-align:left;padding:2px;">
        <table>
            <tr>
                <td style="width:40%;">
                    <img style="width:100%;" src="/assets/raspberrypi.jpg" />
                </td>
                <td style="width:60%;vertical-align:top;">
                    <div class="arial_24">
                        <div style="color:blue;font-weight:bold;">Win a Raspberry Pi Kit!</div>
                        </br>
                        Start your Linux DIY Journey. Rapsberry Pi is a small, easy to use Linux machine. 
                        You can use it for home projects, home automation, or even as a tiny media center for your TV.</br>
                        </br>
                        If you are a Red Hat New Zealand partner or customer, you are eligible to win one. 
                        We have one awesome Raspberry Pi Kit for each showcase and we will announce the winner at the end of each show.</br>
                        </br>
                    </div>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td style="text-align:left;padding:2px;">
        <div class="arial_24">
            <div style="color:blue;font-weight:bold;">Second chance to win a Raspberry Pi Kit!</div>
            </br>
            <div class="arial_16">
                Download your picture and post it in your Linked In. Show us how you think IT Automation can improve your work or life. 
                Use <b>#AnsibleIMShowcase2019</b> so we can find it. The best entry will win.
                </br></br>
            </div>
       </div>
    </td>
</tr>
<tr>
    <td style="text-align:center;padding:2px;">
        <div class="arial_12">
            Contest terms and conditions: http://www.redhatnz.com/showcasetnc.html
        </div>
    </td>
</tr>

</table>

</body>
</html>
