<?php

$lang['freqBorder'] = 'The borderline between an ordinary user and a spammer when checking the frequency score<br>If the score is the number set here or more, the plugin regards the visitor as a spammer.  If the set number is 0 then the plugin won\'t check the frequency score.<br>It will be a standard borderline, but some functions using this plugin may use the more severe or laxer standards.';
$lang['confidenceBorder'] = 'The borderline between an ordinary user and a spammer when checking the confidence score<br>If the score is the number set here or more, the plugin regards the visitor as a spammer.  If the set number is 0 then the plugin won\'t check the confidence score. <br>It will be a standard borderline, but some functions using this plugin may use the more severe or laxer standards.';
$lang['protectRegFreq'] = 'Check the frequency score of the visitor\'s IP address, and the given real name and e-mail address to protect the registration form?<br>If the given number is "0" then the plugin won\'t do that, otherwise it\'ll do.  You can define the borderline special to this function.  If "-1" then the plugin will use the conf "freqBorder" above, if more than 0 then the number will be the borderline.';
$lang['protectRegConf'] = 'Check the confidence score of the visitor\'s IP address, and the given real name and e-mail address to protect the registration form?<br>If the given number is "0" then the plugin won\'t do that, otherwise it\'ll do.  You can define the borderline special to this function.  If "-1" then the plugin will use the conf "confidenceBorder" above, if more than 0 (and 100 or less) then the number will be the borderline.';
$lang['preventNuisanceReg'] = 'Protection duration of the registration form after a spammy request (minutes, set to 0 to disable)<br>This option prevents multiplex spammy requests from the same IP address.  If there is a spammy request of user registration, the plugin makes a temporary file where holds the IP address from which the spammy request is sent.  If a registration request is being sent from the same IP address, and the elapsed time is not enough, the system prevents the request.';
$lang['protectEditFreq'] = 'Check the frequency score of the visitor\'s IP address to protect the edit form?<br>If the given number is "0" then the plugin won\'t do that, otherwise it\'ll do.  You can define the borderline special to this function.  If "-1" then the plugin will use the conf "freqBorder" above, if more than 0 then the number will be the borderline.';
$lang['protectEditConf'] = 'Check the confidence score of the visitor\'s IP address to protect the edit form?<br>If the given number is "0" then the plugin won\'t do that, otherwise it\'ll do.  You can define the borderline special to this function.  If "-1" then the plugin will use the conf "confidenceBorder" above, if more than 0 (and 100 or less) then the number will be the borderline.';
$lang['accessRefusalFreq'] = 'Check the frequency score of the visitor\'s IP address and refuse him if he is a spammer? (access denial)<br>If the given number is "0" then the plugin won\'t do that, otherwise it\'ll do.  You can define the borderline special to this function.  If "-1" then the plugin will use the conf "freqBorder" above, if more than 0 then the number will be the borderline.';
$lang['accessRefusalConf'] = 'Check the confidence score of the visitor\'s IP address and refuse him if he is a spammer? (access denial)<br>If the given number is "0" then the plugin won\'t do that, otherwise it\'ll do.  You can define the borderline special to this function.  If "-1" then the plugin will use the conf "confidenceBorder" above, if more than 0 (and 100 or less) then the number will be the borderline.';
$lang['skipMgAndSp'] = 'Don\'t check logged-in users, managers and superusers? (see config "<a href="#config___manager">manager</a>" and "<a href="#config___superuser">superuser</a>")';
$lang['ipWhitelist'] = 'Whitelist of IP addresses<br>The plugin won\'t check the accesses/posts with these IPs.<br>Enter one IP per line.<br>Wildcards available:<br>? = one character<br>* = one or more characters<br><br>e.g.: "123.456.???.123" → 123.456.789.123, etc. (123.456.78.123 won\'t be excluded)<br>e.g.: "123.*.789.123" → 123.456.789.123, 123.9.789.123, etc.';
$lang['emailWhitelist'] = 'Whitelist of e-mail addresses<br>The plugin won\'t check the accesses/posts with these e-mail addresses.<br>Enter one address per line.  Internationalized Domain Name (IDN) is acceptable.<br>Wildcards available:<br>? = one character (any type of characters)<br>* = one or more characters (any type of characters)<br>! = one character (a numeral)<br>~ = one or more characters (numerals)<br><br>e.g.: "???@example.com" -> 123@example.com, etc. (4567@example.com won\'t be excluded)<br>e.g.: "*@example.com" -> hogehoge@example.com, blahblah1234@example.com, etc.';
$lang['nameWhitelist'] = 'Whitelist of user names (not user IDs)<br>The plugin won\'t check the accesses/posts with these names.<br>Enter one name per line.<br>Wildcards available:<br>? = one character (any type of characters)<br>* = one or more characters (any type of characters)<br>! = one character (a numeral)<br>~ = one or more characters (numerals)<br><br>e.g.: "???Spammer" -> FunSpammer, etc. (IntelligentSpammer won\'t be excluded)<br>e.g.: "*Socks" -> RedSocks, BlackSocks, etc.';
$lang['userWhitelist'] = 'Whitelist of users and user groups (not users\' real name)<br>The plugin won\'t check the accesses/posts from these users and the users in these groups.<br>Enter users and user groups separated by comma.';
$lang['logPlace'] = 'Where to save the log when a spammer is detected<br>Enter the file path (directory and file name) to save the log file.  If empty, the plugin doesn\'t save the log.<br>Pick up and delete the log file if necessary.<br>e.g.: <code>/yourserver/log/sfslogfile.txt</code>';
$lang['reportAPI'] = 'An API key used when reporting through addToDatabase function (Keep it a secret!)<br>If empty, the addToDatabase function won\'t work.';
$lang['skipMgAndSp_o_0']  ='Check everyone';
$lang['skipMgAndSp_o_sp']  ='Skip superusers';
$lang['skipMgAndSp_o_mg']    ='Skip managers (including superusers)';
$lang['skipMgAndSp_o_user']    ='Skip logged-in users (including mgr. and spusr.)';