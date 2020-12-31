<?php
/*
	You need to set these variables to be appropriate for your site and user.

	$strFlashcomServer - The flashcom server: flashcom.yourcompany.userplane.com
	$strDomainID - The domain ID of this site: yourdomain.com
	$strSessionGUID - The session identifier for the currently logged in user
	$strKey - Additional login information you may need passed
    $strInstanceID - Optional identifier for the instance, used when you are running more than one instance of the application on a single domainID.
	$strUpdateRedirectURL - If the user does not have the correct version of Flash installed, this is the URL that they are sent to after the auto-upgrade.  Should be the URL of this page (including query string) in most cases.
*/
$strFlashcomServer = "flashcom.yourcompany.userplane.com";
$strDomainID = "yourdomain.com";
$strSessionGUID = "aaaa";
$strKey = "";
$strInstanceID = "";
$strUpdateRedirectURL = "mc.php";
?>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html;  charset=ISO-8859-1">
	<title>Userplane Minichat</title>

	<script language="JavaScript">
	<!--
		function csEvent( strEvent, strParameter1, strParameter2, cssID )
		{
			if( strEvent == "InstantCommunicator.StartConversation" )
			{
				var strUserID = strParameter1;
				var bServer = strParameter2;
				// open up an InstantCommunicator window.  For example:
				launchWM( "<?php echo( $strSessionGUID ); ?>", strUserID );
			}
			else if( strEvent == "User.ViewProfile" )
			{
				var strUserID = strParameter1;
			}
			else if( strEvent == "User.Block" )
			{
				var strBlockedUserID = strParameter1;
				var bBlocked = strParameter2;
			}
			else if( strEvent == "User.AddFriend" )
			{
				var strFriendUserID = strParameter1;
				var bFriend = strParameter2;
			}
			else if( strEvent == "Chat.Help" )
			{
			}
			else if( strEvent == "User.NoTextEntry" )
			{
			}
			else if( strEvent == "Minichat.LaunchWebchat" )
			{
			}
			else if( strEvent == "Connection.Success" )
			{
			}
			else if( strEvent == "Connection.Failure" )
			{
				if( strParameter1 == "Session.Timeout" )
				{
					//handle timeout here, both inactivity and session timeouts
				}
				if( strParameter1 == "User.Banned" )
				{
					//handle ban event here
				}
			}
		}
		function launchWM( userID, destinationUserID )
		{
			var popupWindowTest = window.open( "wm.php?strDestinationUserID=" + destinationUserID, "WMWindow_" + replaceAlpha(userID) + "_" + replaceAlpha(destinationUserID), "width=360,height=397,toolbar=0,directories=0,menubar=0,status=0,location=0,scrollbars=0,resizable=1" );
			if( popupWindowTest == null )
			{
				alert( "Your popup blocker stopped an IM window from opening" );
			}
		}

		function replaceAlpha( strIn )
		{
			var strOut = "";
			for( var i = 0 ; i < strIn.length ; i++ )
			{
				var cChar = strIn.charAt(i);
				if( ( cChar >= 'A' && cChar <= 'Z' )
					|| ( cChar >= 'a' && cChar <= 'z' )
					|| ( cChar >= '0' && cChar <= '9' ) )
				{
					strOut += cChar;
				}
				else
				{
					strOut += "_";
				}
			}

			return strOut;
		}

		function getLocaleData( cssID )
		{
			var data = new Object();
			data.historyNotificationMessage = "********** The messages above were sent before you arrived";
			data.whisperHowToMessage = "********** To send a private message, type: <nameOfUser> your message here";
			data.userJoinNotificationMessage = "********** at TIMESTAMP SCREEN_NAME joined the room";
			data.userLeaveNotificationMessage = "********** at TIMESTAMP SCREEN_NAME left the room";
			data.userNameChangeNotificationMessage = "********** SCREEN_NAME has changed their name to NEW_SCREEN_NAME";
			data.userMessageSentMessage = "SCREEN_NAME: MESSAGE";
			data.textAdvertisementMessage = "Check out our sponsored link:";
			data.userNotAuthorizedErrorMessage = "You could not be authorized.\n\nPlease re-login to the\nwebsite and try again.";
			data.serverLicenseErrorMessage = "The license for this\nUserplane app is no longer valid.\n\nYou should have your webmaster contact\nUserplane Support (support@userplane.com)\nto resolve this issue.";
			data.userBanNoticeErrorMessage = "You've been banned from this\napplication by a site administrator.\n\nYou'll need to get in touch with them\nfor more information.";
			data.clientVersionErrorMessage = "Your web browser is running an old\nversion of this application.\n\nYou should empty your browser's cache\nand log back in.";
			data.serverMaxUsersErrorMessage = "The chat has reached the max\nallowed number of users.\nPlease try again later.";
			data.serverNoAdminErrorMessage = "This chat requires that an Admin is\nlogged in at all times.\nCurrently none are connected.\nPlease try again later.";
			data.invalidDomainErrorMessage = "This chat is currently offline";
			data.whisperSentMessage = "You whispered to SCREEN_NAME";
			data.whisperNotSentMessage = "Your whisper wasn't sent. Please check the name and try again";
			data.whisperReceivedMessage = "SCREEN_NAME whispers";
			data.whisperPersonalMessage = "You whispered to yourself";
			data.floodControlSlowDownMessage = "********** Please slow down. You must wait a few seconds";
			data.floodControlResumeMessage = "********** You may now resume sending";

			if( cssID == "mc" )
			{
				data.userJoinNotificationMessage = "********** at TIMESTAMP SCREEN_NAME joined the Minichat";
				data.userLeaveNotificationMessage = "********** at TIMESTAMP SCREEN_NAME left the Minichat";
				data.userCountLabel = "chatting";
				data.watcherCountLabel = "observing";
				data.copyrightText = "©2007 Userplane";
			}
			return data;
		}

		function getPreferences( cssID )
		{
			var data = new Object();
			if( cssID == "mc" )
			{
				data.useTimestamps = false;
				data.branding = "Userplane Webchat";
				data.brandingOpacity = 0.50;
				data.chatButtonLabel = "Enter Chat";
				data.sendMessageButtonLabel = "Post Message";
				data.showMinichatFooter = true;
				data.minichatBuddyPicURL = "";
				data.showMinichatBuddyPic = false;
				data.showMinichatDescription = true;
				data.showMinichatRoomName = true;
				data.minichatBuddyPicMaxWidth = 160;
				data.minichatBuddyPicMaxHeight = 60;
				data.minichatBackgroundColor = "FFA500";
				data.minichatForegroundColor = "FFFFFF";
				data.minichatConversationBackgroundColor = "FFFFFF";
				data.minichatConversationBorderColor = "00D2FF";
				data.minichatConversationLinkColor = "";
				data.minichatConversationForegroundColor = "";
				data.minichatConversationWhisperColor = "";
				data.minichatConversationAnnouncementColor = "";
				data.onlineUserMessageColor = "";
				data.localUserMessageColor = "";
				data.scrollBarBorderColor = "";
				data.scrollbarTrackColor = "";
				data.scrollbarThumbColor = "";
				data.overrideCustomFontColors  = "false";
				data.useHistoryColor = "false";
				data.historyColor = "";
				data.roomUserlistWidth = "";
				data.inlineChatButton = "false";
			}
			return data;
		}

	//-->
	</script>
</head>
<body bgcolor="#ffffff" bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">




<?php
/* Do not change anything below here */
$strSwfServer = "swf.userplane.com";
$strApplicationName = "CommunicationSuite";
?>
	<script type="text/javascript" src="flashobject.js"></script>

	<!---
		The content of this div should hold whatever HTML you would like to show in the case that the
		user does not have Flash installed.  Its contents get replaced with the Flash movie for everyone
		else.
	--->
	<div id="flashcontent">
		<strong>You need to upgrade your Flash Player by clicking <a href="http://www.macromedia.com/go/getflash/" target="_blank">this link</a>.</strong><br><br><strong>If you see this and have already upgraded we suggest you follow <a href="http://www.adobe.com/cfusion/knowledgebase/index.cfm?id=tn_14157" target="_blank">this link</a> to uninstall Flash and reinstall again.</strong>
	</div>

	<script type="text/javascript">
		// <![CDATA[

		var fo = new FlashObject("http://<?php echo( $strSwfServer ); ?>/<?php echo( $strApplicationName ); ?>/mc.swf", "mc", "100%", "100%", "9", "#ffffff", false, "best");
		fo.addParam("scale", "noscale");
		fo.addParam("menu", "false");
		fo.addParam("salign", "LT");
		fo.addParam("allowScriptAccess", "always");
		fo.addVariable("strServer", "<?php echo($strFlashcomServer); ?>");
		fo.addVariable("strSwfServer", "<?php echo($strSwfServer); ?>");
		fo.addVariable("strApplicationName", "<?php echo($strApplicationName); ?>" );
		fo.addVariable("strDomainID", "<?php echo($strDomainID); ?>" );
		fo.addVariable("strInstanceID", "<?php echo($strInstanceID); ?>" );
		fo.addVariable("strSpawnID", "" );
		fo.addVariable("strSessionGUID", "<?php echo($strSessionGUID); ?>" );
		fo.addVariable("strKey", "<?php echo($strKey); ?>" );
		fo.addVariable("strCssID", "mc");
		fo.useExpressInstall('expressinstall.swf');
  		fo.setAttribute('xiRedirectUrl', "<?php echo($strUpdateRedirectURL); ?>");
		fo.write("flashcontent");

		// COPYRIGHT Userplane 2006 (http://www.userplane.com)
		// CS version 2.0.2

		// ]]>
	</script>
</body>
</html>