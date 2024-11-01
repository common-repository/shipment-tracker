<?php
/*
Plugin Name: Shipment Tracker
Version: 1.0
Plugin URI: http://www.a3designs.com/downloads?did=26
Description: Get Tracking Info on your Package !!   Search your tracking number through FedEx, UPS, DHL, & USPS databases.
Author: Asher Hudson
Author URI: http://www.a3designs.com/
*/

/*  Copyright 2010  Asher Hudson (webmaster[in]a3designs.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
function sampleShipmentTracker()
{
  echo "<h2>Shipment Tracker</h2>";
}
 
function widget_myShipmentTracker($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Shipment Tracker<?php echo $after_title;
  ;
  ?>
<HTML>
<HEAD>
<CENTER><script language="JavaScript">

function dhl()   {window.open('http://track.dhl-usa.com/TrackByNbr.asp?ShipmentNumber=' + urlform.urlvalue.value) }
function fedex() {window.open('http://fedex.com/Tracking?ascend_header=1&clienttype=dotcom&cntry_code=us&language=english&tracknumbers=' + urlform.urlvalue.value) }
function ups()   {window.open('http://wwwapps.ups.com/WebTracking/processInputRequest?HTMLVersion=5.0&loc=en_US&Requester=UPSHome&tracknum=' + urlform.urlvalue.value + '&ignore=&track.x=35&track.y=8') }
function usps()  {window.open('http://trkcnfrm1.smi.usps.com/PTSInternetWeb/InterLabelInquiry.do?origTrackNum=' + urlform.urlvalue.value) }

</script></CENTER>

</HEAD>
<center>- Enter Tracking Number -</center>
<CENTER><BODY background="images/bg01.bmp" bgcolor=#aaaaaa>

<!-- START OF INTERFACE TABLE -->
<TABLE width=150px height=100% cellspacing=0 cellpadding=3 border=0 align=center>
<TR>
<TD valign=top align=center>

<FORM name="urlform">

<input type="text" class="text-trackingnumber" size=19 name="urlvalue" value=""><BR>
<img src=# height=2><BR>

<a href="javascript:fedex()"><img src="http://www.a3designs.com/SITE_A3/OTD_images/ShipmentTracker/fedex.png" border=0></a>
<a href="javascript:ups()"><img src="http://www.a3designs.com/SITE_A3/OTD_images/ShipmentTracker/ups.png" border=0></a>
<a href="javascript:dhl()"><img src="http://www.a3designs.com/SITE_A3/OTD_images/ShipmentTracker/dhl.png" border=0></a>
<a href="javascript:usps()"><img src="http://www.a3designs.com/SITE_A3/OTD_images/ShipmentTracker/usps.png" border=0></a>

</TD>
</TR>
</FORM>
</TABLE>
<!-- END OF INTERFACE TABLE -->

</BODY></CENTER></HTML>

  <?php 
  echo $after_widget;

}
 
function myShipmentTracker_init()
{
  register_sidebar_widget(__('Shipment Tracker'), 'widget_myShipmentTracker');
}
add_action("plugins_loaded", "myShipmentTracker_init");
?>
