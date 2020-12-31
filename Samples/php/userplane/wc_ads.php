<?php
	$strZoneIDBanner = "4078";
	$strZoneIDText = "193";
	$strDomainID = "YOUR_DOMAIN_ID_HERE";
/*	These zoneID's will be assigned to you by Userplane.  You will receive them in the same email as the flashcom info. */
?>

		<frameset rows="*,150" framespacing="0" frameborder="no" border="0">
			<frame src="wc.php" name="Userlist_Frame"  scrolling="NO" noresize>
			<frame src="http://subtracts.userplane.com/mmm/bannerstorage/ch_int_frameset.html?app=wc&zoneID=<?php echo( $strZoneIDBanner ); ?>&textZoneID=<?php echo( $strZoneIDText ); ?>&domainid=<?php echo( $strDomainID ); ?>" name="Ad_Frame" scrolling="NO" noresize>
 
		</frameset><noframes></noframes>
