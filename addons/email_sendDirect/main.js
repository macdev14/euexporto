//----- ToolTips ------//
Text[1] = ["BCC admin on user communication", "<strong>Affects:</strong> \"BCC:\" field<br /><strong>Used:</strong> (If not left blank): All \"notify friend\" and \"notify seller\" emails sent between sellers and users.<br /><br /><strong>More Info:</strong> Enter an email address here to have a blind copy of all notify friend and notify seller email sent.  If this address is left empty no email will be sent.  This does not affect communications sent from within communication section."]
Text[2] = ["Standard SendMail Connection","This is the standard connection, which uses your Linux host's built in sendmail function.  Use this connection type for most standard Linux servers.<br /><strong>Windows Server:</strong> This setting does not work on Windows servers.  If your host uses a Windows server, select SMTP Connection, and for the host use the detected PHP SMTP host setting."]
Text[3] = ["SMTP Connection","Requires Email \"SMTP\" connection to send email (Usually provided through your Host or Email service provider).  Use this connection to directly connect to a SMTP server.  <br /><br /><strong>Windows Servers:</strong> For Window's Servers, use SMTP Connection, and for the SMTP Host use the php.ini Detected Setting."]
Text[4] = ["Admin Reply-to Address","<strong>Affects:</strong> \"From:\" and \"Reply To:\" fields<br /><strong>Used:</strong> On all admin communication emails sent to users.<br /><br /><strong>More Info:</strong> This is the email address that acts as the Reply-To or From address, when sending communication emails to users from the admin account."]
Text[5] = ["Client Side Admin Email","When you log into the client side as the admin user, this is the email address used for that user."]
Text[6] = ["Registration Notify Address","<strong>Affects:</strong>  To: field<br /><strong>Used:</strong> In Emails sent to notify the Admin User of new registrations and as the from email address in all registration emails sent to new registrants.<br /><br /><strong>More Info:</strong> This is the email address that a notification email will be sent to whenever someone registers, or attempts to register on the site, as long as you have that setting turned on under Email Setup > Notification Email Config.  This also used as the from email address used in all emails sent to new registrants so if the client respond their responses will go to this email address.  So make sure that email address actually exists or has a forward before setting.<br><strong>Note:</strong> This setting appears in both Email Setup pages, changeing this setting on either page affects the same setting."]
Text[7] = ["Send Text Emails as:","<strong>HTML</strong>:  Removes all HTML tags (for security), and converts all \"new lines\" into HTML line breaks (&lt;br> tags), and sends the email in HTML mode."+
"<br /><strong>Convert URL's into HTML links</strong>: When turned on, this converts URLs found into clickable HTML links."+
"<br /><br /><strong>Plain-Text</strong>:  Email is sent \"as-is\" in plain-text format, with all HTML tags removed."+
"<br /><br /><strong>Exceptions:</strong> This setting only applies to plain text emails, it does not apply to email sent through admin messaging system, if using content type of HTML."]
Text[8] = ["SMTP Settings","Typical settings:<br /><strong>SMTP Host:</strong> localhost<br /><strong>SMTP Port:</strong> 25<br /><strong>Connection Security:</strong> None<br />You may also try using the settings detected in php.ini, or ask your hosting provider."]
Text[9] = ["Native mail() Connection (Compatibility Mode)","This uses the built in PHP function mail().  Only use this when you know that the mail() function works, but neither Sendmail or SMTP will work on your host.  This is not recommended unless neither SendMail nor SMTP connection will work on your host, as using mail() can significantly slow down the site when sending more than 1 email at once."]
Text[10] = ["BCC Email address for All Emails", "<strong>Affects:</strong> \"BCC:\" field<br /><strong>Used:</strong> (If not left blank): <em>All emails</em> sent from the software, including emails sent to the admin.<br /><br /><strong>More Info:</strong> Enter an email address here to have a blind copy of all emails sent by the software, even email sent to admin user, and emails sent using admin messaging system.  If this address is left empty no BCC email will be set."]
Text[11] = ["Site-Wide Email Header", "<strong>Affects:</strong> <em>All emails</em> sent from the software, including emails sent to the admin.<br /><strong>Used:</strong> (If not left blank): <em>All emails</em> sent from the software, including emails sent to the admin.<br /><br /><strong>More Info:</strong> Enter the text you wish to appear at the TOP of all the emails sent by your site."]
Text[12] = ["Site-Wide Email Footer", "<strong>Affects:</strong> <em>All emails</em> sent from the software, including emails sent to the admin.<br /><strong>Used:</strong> (If not left blank): <em>All emails</em> sent from the software, including emails sent to the admin.<br /><br /><strong>More Info:</strong> Enter the text you wish to appear at the BOTTOM of all the emails sent by your site."]