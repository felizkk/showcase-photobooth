# An Ansible Photobooth Playbook

This is a DIY Cloud-Photobooth that is driven by Ansible Automation for Ingram Micro NZ Showcase 2019.
Ansible Tower is used as the "remote control" and data entry via Tower Survey.

# General Requirements:
1. Good enough IP Camera (1080p) that supports MJPEG Stream. Make sure this can be mounted on a tripod if you use a tripod
2. A mini-PC/Desktop/Laptop for Ansible Tower Server with minimum 2 connections. One for camera, one for internet. An Intel NUC is recommended due to its small size, has WiFi built in and has another ethernet port.
3. Cloud webserver and dbserver (can be all-in-one server as well)
4. The Tower server can not be combined with the Cloud Web/DBServer
5. USB printer that works with Linux if you are printing a flyer

# Cloud Web/DBServer Notes
1. You will need to create a webserver and dbserver (can be separated or all-in-one) on a cloud provider of your choice
2. Make sure Ansible Tower can connect to it (provide credentials, key, public IP access, etc)
3. The compute size of your webserver/dbserver will depend on your requirement. On low traffic, 1 vCPU and 1GB of RAM is enough
4. This github repo provides "very basic" example of the webserver framework using CodeIgniter. It is an MVC PHP web framework (https://www.codeigniter.com/user_guide/overview/mvc.htm). For details on how it works, visit codeigniter website

# Photobooth Process Flow
1. Visitor enters details via Tower Survey: name, company, position, email, phone, etc
2. Tower template job: run showcase-photobooth playbook
3. Ansible task: create unique-ID for visitor
4. Ansible task: replaces past photo result with a JPEG showing "GET READY" text
5. Ansible task: calls VLC media player and playback countdown video
6. Ansible task: waits for a few second (follows countdown length)
7. Ansible task: plays camera shutter sound
8. Ansible task: capture photo - a jpeg stream from MJPEG
9. Ansible task: append captured jpeg with a banner for branding
10. Ansible task: uploads original photo and appended photo (with banner) to cloud webserver
11. Ansible task: create database entry on cloud dbserver using SQL template
12. Ansible task: use firefox to generate flyer jpeg by using "screenshot" of flyer web page
13. Ansible task: print flyer

# Ansible Tower Server Requirements and Software Install:
1. A mini-PC that meets Tower minimum requirements. Example: Core i5 with 8GB of RAM
2. The PC will need 2 connections. One for the internet (software install and to cloud servers), one for the MJPEG stream from the camera
3. CentOS 7 installation, with post-install updates (# yum udpate)
4. Desktop GUI installation
   # yum groupinstall "Server with GUI"
5. Set-default target to graphical/GUI 
   # systemctl set-default graphical
6. After reboot, Tower GUI will asks to create a normal user. So do this
7. Install EPEL repo for ansible installation
   # yum install epel-release
   # yum install ansible
8. Install Ansible Tower and provide your Tower license key
   Follow the steps here: https://docs.ansible.com/ansible-tower/latest/html/quickinstall/prepare.html
9. Disable Tower Job Isolation (Settings - Jobs - Enable Job Isolation: Off)
10. Run these playbooks from your Ansible control node (or locally on tower)
    - photobooth_prepare.yml : installation of photobooth software components on Tower server
    - webserver_deploy.yml : installation of webserver and its components
    - webserver_update_page.yml : copying the websource directory to the webserver
    - dbserver_deploy.yml : install mysql server
    - dbserver_init_db.yml : create database and initial test entries
11. Playbooks to run via Tower (with Template)
    - photobooth.yml : the actual photobooth run. See yaml file for variables required
    - dbserver_backup.yml : create database dump for backup
    - dbserver_draw.yml : select a random winner from visitor entries
12. Printer setup. Please make sure your USB printer is connected to the Tower server and driver is installed. Please visit the vendor's website for instruction on how to install the Linux driver.

# Working with Cloud Server
1. Make sure you provide the cloud account credentials to Tower
2. Make sure Tower can connect to the cloud VMs. Whether you use static inventory or dynamic inventory is up to you

# Accessing Cloud Webserver
1. Slideshow (with rotation with the last 5 photos): http://<your_ip_or_domain>/slideshow/0
   You do this slideshow using another PC/laptop connected to a different monitor
2. Visitor Leads (with download and flyer pages): http://<your_ip_or_domain>/leads

# Photobooth Playbook Preparation
1. Do below steps everytime your Tower server is booted up and you are preparing for the event.
2. Make sure no firefox instance is present. Do ps -ef and kill those processes if they exist
3. use GUI application menu, run single firefox and browse the MJPEG http stream. Example (on my Forticam IP Camera): http://192.168.4.245:8008
4. Open chromium web browser, and browse https://localhost for Tower GUI
5. Open vlc from menu (in preferences: make sure single instance, no resize, no OSD, minimum GUI)
6. Using Files application, open /tmp/output_append.png (this is to show GET READY as well as most recent shot)

# Recommended Stand Layout
1. The Tower PC needs to be connected to a monitor, and the GUI needs to show real-time MJPEG stream (as mirror) using firefox, VLC media player (for countdown), and an a JPEG viewer (for recent photo result). You will need to resize those application windows accordingly.
2. Another laptop is connected to another monitor, and running the photobooth slideshow from the internet

