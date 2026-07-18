<?php
// yes i cleaned ur code cuz MY EYESSS
// i agree
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) {
$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
header('HTTP/1.1 301 Moved Permanently');
header('Location: ' . $redirect);
exit();
}
$redirs = array(
"/index.php" => "/",
"/login/index.php" => "/login/",
"/register/index.php" => "/register/"
);
include_once ($_SERVER['DOCUMENT_ROOT'].'/config/includes.php');
$logged = false;
$url = basename($_SERVER['REQUEST_URI']);
$urlArray = explode("/", $url);
$urlArray = array_reverse($urlArray);
$urlArray[0];
if (isset($_COOKIE['password']) || isset($_COOKIE['_ROBLOSECURITY'])) {
$usr = getUserData($con);
if ($usr) {
$logged = true;
$username = $usr['username'];
$Robux = $usr['Robux'];
} else {
$logged = false;
if (strpos($_SERVER['HTTP_USER_AGENT'], "Discord") === false) {
if (array_key_exists(basename($_SERVER['PHP_SELF']), $redirs)) {
$redirectURL = $redirs[basename($_SERVER['PHP_SELF'])];
header("Location: $redirectURL");
exit();
} else {
header("Location: https://ishowrevival.up.railway.app/login/");
exit();
}
}
}
} else {
if (array_key_exists(basename($_SERVER['PHP_SELF']), $redirs)) {
$redirectURL = $redirs[basename($_SERVER['PHP_SELF'])];
header("Location: $redirectURL");
exit();
} else {
header("Location: https://ishowrevival.up.railway.app/login/");
exit();
}
}
$timey = time();
if ($usr['banned'] > 0) {
if ($_SERVER['PHP_SELF'] != "/banned/index.php") {
header('Location: /banned/');
exit();
}
}
$uID = $usr['id'];
$ExperimentalTheme = $usr['ExperimentalTheme'];
if (is_array($usr)) {
if ($usr['activated'] == 0) {
if (basename($_SERVER['PHP_SELF']) != "/login/index.php" && $_SERVER['PHP_SELF'] != "/forgotPasswordOrUsername/index.php") {
header("Location: https://ishowrevival.up.railway.app/register/notactivated");
exit();
}
}
}
$SuperAdmin = $usr['SuperAdmin'];
if($usr['CanSee2020'] == 1){
$CanSee2020 = true;
}else{
$CanSee2020 = false;
}
function robloxNumberFormat($number, $decimals = 1) {
if ($number >= 1000000000) {
return number_format($number / 1000000000, $decimals) . 'B';
}
if ($number >= 1000000) {
return number_format($number / 1000000, $decimals) . 'M';
}
if ($number >= 1000) {
return number_format($number / 1000, $decimals) . 'K';
}
return (int)number_format($number, $decimals);
}
$membership = $usr['membership'];
$notificationvalue = 0;
$friendamquery = $con->prepare("SELECT count(*) FROM `friends` WHERE `status`='1' AND toid= :toid");
$friendamquery->execute(['toid' => $uID]);
$friendreqcount = $friendamquery->fetchColumn();
$messageamquery = $con->prepare("SELECT messageid,toid FROM `messages` WHERE `toid`= :toid AND `messageread` = '0'");
$messageamquery->execute(['toid' => $uID]);
$messagescount = $messageamquery->rowCount();
$notificationvalue = $friendreqcount + $messagescount;
if($friendreqcount > 0){
$friendsnotifcation = "true";
}else{
$friendsnotifcation = "false";
}
if($messagescount > 0){
$messagenotifcation = "true";
}else{
$messagenotifcation = "false";
}
$now = time();
$timefromdatabase = $usr['onlinetime'];
$dif = time() - $timefromdatabase;
if ($dif > 120) {
$newtime = $now + 120;
$sql = "UPDATE `users` SET `online` = '1' WHERE `id` = '$uID'";
$con->exec($sql);
$sql2 = "UPDATE `users` SET `onlinetime` = '$newtime' WHERE `id` = '$uID'";
$con->exec($sql2);
$sql3 = "UPDATE `users` SET `clientstatus` = 'Unknown' WHERE `id` = '$uID'";
$con->exec($sql3);
}
$now = time();
$timefromdatabase = $online['gametime'];
$dif = time() - $timefromdatabase;
$timefromdatabase = $usr['gametime'];
$dif = time() - $timefromdatabase;
if ($dif > 120) {
$newtime = $now + 120;
$sql3 = "UPDATE `users` SET `InGameId` = '0' WHERE `id` = '$uID'";
$con->exec($sql3);
$sql4 = "UPDATE `users` SET `InJobId` = '0' WHERE `id` = '$uID'";
$con->exec($sql4);
}
// if it isnt evident for some reason stripos confuses me
if (!stripos($_SERVER['HTTP_USER_AGENT'], "Roblox Android App") === false) {
$hidenavbar = "hidden";
}
if (!stripos($_SERVER['HTTP_USER_AGENT'], "Roblox iOS App") === false) {
$hidenavbar = "hidden";
}
if ($usr['locale'] != NULL) {
$locale = $usr['locale'];
$localeMappings = [
'en-us' => 'English',
'es-es' => 'Spanish',
'sl-sl' => 'Slovenian',
'hu-hu' => 'Hungarian',
'tr-tr' => 'Turkish',
'da-dk' => 'Danish',
'it-it' => 'Italian',
'lv-lv' => 'Latvian',
'bn-bd' => 'Bengali',
'lt-lt' => 'Lithuanian',
'id-id' => 'Indonesian',
'my-mm' => 'Burmese',
'fr-fr' => 'French',
'et-ee' => 'Estonian',
'bs-ba' => 'Bosnian',
'si-lk' => 'Sinhala',
'pt-br' => 'Portuguese',
'cs-cz' => 'Czech',
'ja-jp' => 'Japanese',
'ar-001' => 'Arabic',
'ms-my' => 'Malay',
'nb-no' => 'Bokmal',
'de-de' => 'German',
'zh-tw' => 'Chinese',
'th-th' => 'Thai',
'km-kh' => 'Khmer',
'ru-ru' => 'Russian',
'fi-fi' => 'Finnish',
'sk-sk' => 'Slovak',
'el-gr' => 'Greek',
'pl-pl' => 'Polish',
'kk-kz' => 'Kazakh',
'sr-rs' => 'Serbian',
'ka-ge' => 'Georgian',
'zh-cn' => 'Chinese',
'ko-kr' => 'Korean',
'hr-hr' => 'Croatian',
'hi-in' => 'Hindi',
'sq-al' => 'Albanian',
'vi-vn' => 'Vietnamese',
'uk-ua' => 'Ukrainian',
'sv-se' => 'Swedish',
'bg-bg' => 'Bulgarian'
];
if (isset($localeMappings[$locale])) {
$fulllocale = $localeMappings[$locale];
} else {
$fulllocale = "English";
}
}else{
$locale = "en-us";
$fulllocale = "English";
}
?>
<head>
<?php
if($ExperimentalTheme == "Light"){
?>
<link rel="stylesheet" href="https://ishowrevival.up.railway.app/css/main2.css"/>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<?php
}elseif($ExperimentalTheme == "2016E"){
?>
<link rel="stylesheet" href="https://ishowrevival.up.railway.app/css/2016e.css"/>
<?
}elseif($ExperimentalTheme == "AprilFools"){
?>
<link rel="stylesheet" href="https://ishowrevival.up.railway.app/css/aprilfools.css"/>
<?
}elseif($ExperimentalTheme == "Pdark"){
?>
<link rel="stylesheet" href="https://ishowrevival.up.railway.app/css/pdark.css"/>
<?
}elseif($ExperimentalTheme == "newtheme"){
?>
<link rel="stylesheet" href="https://ishowrevival.up.railway.app/css/newtheme.css"/>
<?
}else{
?>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<?
}
?>
<?php
if($username == "dinnerbone"){
echo'<style>
body{
-moz-transform: rotate(180deg);
-webkit-transform: rotate(180deg);
-ms-transform: rotate(180deg);
-o-transform: rotate(180deg);
transform: rotate(180deg);
}
</style>';
}
?>
<!DOCTYPE html><!--[if IE 8]>
<html class=ie8 ng-app=robloxApp>
<![endif]--> <!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head data-machine-id=WEB1262>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta charset=UTF-8>
<meta name=viewport content="width=device-width, initial-scale=1">
<script type=application/ld+json>
{
"@context" : "http://schema.org",
"@type" : "Organization",
"name" : "Limbo",
"url" : "https://ishowrevival.up.railway.app/",
"logo": "https://ishowrevival.up.railway.app/img/c69b74f49e785df33b732273fad9dbe0.png",
"sameAs" : [
"https://www.facebook.com/ROBLOX/",
"https://twitter.com/roblox",
"https://www.linkedin.com/company/147977",
"https://www.instagram.com/roblox/",
"https://www.youtube.com/user/roblox",
"https://plus.google.com/+roblox",
"https://www.twitch.tv/roblox"
]
}
</script>
<meta name=locale-data data-language-code=<?php echo $locale;?> data-language-name=<?php echo $fulllocale;?> data-locale-api-url=https://ishowrevival.up.railway.app>
<meta name=device-meta data-device-type=computer data-is-in-app=false data-is-desktop=true data-is-phone=false data-is-tablet=false data-is-console=false data-is-android-app=false data-is-ios-app=false data-is-uwp-app=false data-is-xbox-app=false data-is-amazon-app=false data-is-studio=false data-app-type=unknown>
<meta name="user-data"
data-userid="<?=$uID;?>"
data-name="<?php echo NOXSSPlz($username);?>"
data-isunder13="false" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<script>var Roblox=Roblox||{};Roblox.BundleVerifierConstants={eventStreamUrl:"http://ecsv2.roblox.com/pe?t=diagnostic",deviceType:"Computer",cdnLoggingEnabled:JSON.parse("false")};</script><script>var Roblox=Roblox||{};Roblox.BundleDetector={jsBundlesLoaded:{},bundlesReported:{},counterNames:{cdnPrefix:"CDNBundleError_",unknown:"CDNBundleError_unknown",cssError:"CssBundleError",jsError:"JavascriptBundleError",jsFileError:"JsFileExecutionError",resourceError:"ResourcePerformance_Error",resourceLoaded:"ResourcePerformance_Loaded"},timing:undefined,setTiming:function(windowTiming){this.timing=windowTiming;},getCurrentTime:function(){return new Date().getTime();},logToEphemeralStatistics:function(sequenceName,value){var deviceType=Roblox.BundleVerifierConstants.deviceType;sequenceName+="_"+deviceType;var xhr=new XMLHttpRequest();xhr.open('POST','/game/report-stats?name='+sequenceName+"&value="+value,true);xhr.withCredentials=true;xhr.send();},logToEphemeralCounter:function(ephemeralCounterName){var deviceType=Roblox.BundleVerifierConstants.deviceType;ephemeralCounterName+="_"+deviceType;var xhr=new XMLHttpRequest();xhr.open('POST','/game/report-event?name='+ephemeralCounterName,true);xhr.withCredentials=true;xhr.send();},logToEventStream:function(failedBundle,ctx,cdnProvider){var esUrl=Roblox.BundleVerifierConstants.eventStreamUrl,currentPageUrl=encodeURIComponent(window.location.href);var deviceType=Roblox.BundleVerifierConstants.deviceType;ctx+="_"+deviceType;var params="&evt=webBundleError&url="+currentPageUrl+"&ctx="+ctx+"&fileSourceUrl="+encodeURIComponent(failedBundle)+"&cdnName="+(cdnProvider||"unknown");var img=new Image();img.src=esUrl+params;},getCdnInfo:function(failedBundle,ctx,fileType){if(Roblox.BundleVerifierConstants.cdnLoggingEnabled){var xhr=new XMLHttpRequest();var counter=this.counterNames;xhr.open('GET',failedBundle,true);xhr.onreadystatechange=function(){if(xhr.readyState===xhr.HEADERS_RECEIVED){var cdnProvider=xhr.getResponseHeader("rbx-cdn-provider");if(cdnProvider&&cdnProvider.length>0){Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix+cdnProvider+"_"+fileType);}
else{Roblox.BundleDetector.logToEphemeralCounter(counter.unknown+"_"+fileType);}
Roblox.BundleDetector.logToEventStream(failedBundle,ctx,(cdnProvider||""));}}
xhr.onerror=function(){Roblox.BundleDetector.logToEphemeralCounter(counter.unknown+"_"+fileType);Roblox.BundleDetector.logToEventStream(failedBundle,ctx);};xhr.send();}
else{this.logToEventStream(failedBundle,ctx);}},reportResourceError:function(resourceName){var ephemeralCounterName=this.counterNames.resourceError+"_"+resourceName;this.logToEphemeralCounter(ephemeralCounterName);},reportResourceLoaded:function(resourceName){if(this.timing&&this.timing.domComplete){var loadTimeInMs=this.getCurrentTime()-this.timing.domComplete;var sequenceName=this.counterNames.resourceLoaded+"_"+resourceName;this.logToEphemeralStatistics(sequenceName,loadTimeInMs);}},reportBundleError:function(bundleTag){var ephemeralCounterName,failedBundle,ctx;if(bundleTag.rel&&bundleTag.rel==="stylesheet"){ephemeralCounterName=this.counterNames.cssError;failedBundle=bundleTag.href;ctx="css";}
else{ephemeralCounterName=this.counterNames.jsError;failedBundle=bundleTag.src;ctx="js";}
this.bundlesReported[failedBundle]=true;this.logToEphemeralCounter(ephemeralCounterName);this.getCdnInfo(failedBundle,ctx,ctx);},bundleDetected:function(bundleName){this.jsBundlesLoaded[bundleName]=true;},verifyBundles:function(document){var ephemeralCounterName=this.counterNames.jsFileError,eventContext=ephemeralCounterName;var scripts=(document&&document.scripts)||window.document.scripts;var errorsList=[];for(var i=0;i<scripts.length;i++){var item=scripts[i];if(item.src&&item.dataset.monitor&&item.dataset.bundlename){if(!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(item.dataset.bundlename)){errorsList.push(item);}}}
if(errorsList.length>0){for(var j=0;j<errorsList.length;j++){var script=errorsList[j];if(!this.bundlesReported[script.src]){this.logToEphemeralCounter(ephemeralCounterName);this.getCdnInfo(script.src,eventContext,'js');}}}}};window.addEventListener("load",function(evt){Roblox.BundleDetector.verifyBundles();});Roblox.BundleDetector.setTiming(window.performance.timing);
</script>
<link href=https://ishowrevival.up.railway.app/favicon.ico rel=icon>
<link rel="manifest" href="https://ishowrevival.up.railway.app/v2/push-notifications/chrome-manifest" crossorigin="use-credentials">
<script onerror=Roblox.BundleDetector&amp;&amp;Roblox.BundleDetector.reportBundleError(this) data-monitor=true src=//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js></script><script>window.jQuery||document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script><script onerror=Roblox.BundleDetector&amp;&amp;Roblox.BundleDetector.reportBundleError(this) data-monitor=true src=//ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js></script><script>window.jQuery||document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script><script>var Roblox=Roblox||{};Roblox.EnvironmentUrls=Roblox.EnvironmentUrls||{};Roblox.EnvironmentUrls={abuseAppSite:"https://ishowrevival.up.railway.app",accountSettingsApi:"https://ishowrevival.up.railway.app",amazonStoreLink:"http://amzn.com/B00NUF4YOA",apiProxyUrl:"https://ishowrevival.up.railway.app",appProtocolUrl:"robloxmobile://",appStoreLink:"https://itunes.apple.com/us/app/roblox-mobile/id431946152",authApi:"https://ishowrevival.up.railway.app",authAppSite:"https://ishowrevival.up.railway.app",avatarApi:"https://ishowrevival.up.railway.app",avatarAppSite:"https://ishowrevival.up.railway.app",badgesApi:"https://ishowrevival.up.railway.app",catalogApi:"https://ishowrevival.up.railway.app",chatApi:"https://ishowrevival.up.railway.app",chatAppSite:"https://chatsite.ishowrevival.up.railway.app",domain:"ishowrevival.up.railway.app",followingsApi:"https://ishowrevival.up.railway.app",friendsApi:"https://ishowrevival.up.railway.app",friendsAppSite:"https://ishowrevival.up.railway.app",gamesApi:"https://ishowrevival.up.railway.app",gamesAppSite:"https://ishowrevival.up.railway.app",googlePlayStoreLink:"https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",groupsApi:"https://ishowrevival.up.railway.app",groupsAppSite:"https://ishowrevival.up.railway.app",iosAppStoreLink:"https://itunes.apple.com/us/app/roblox-mobile/id431946152",localeApi:"https://ishowrevival.up.railway.app",notificationApi:"https://ishowrevival.up.railway.app",notificationAppSite:"https://ishowrevival.up.railway.app",presenceApi:"https://ishowrevival.up.railway.app",publishApi:"https://ishowrevival.up.railway.app",surveysAppSite:"https://ishowrevival.up.railway.app",thumbnailsApi:"https://ishowrevival.up.railway.app",translationAppSite:"https://ishowrevival.up.railway.app",websiteUrl:"https://ishowrevival.up.railway.app",windowsStoreLink:"https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",xboxStoreLink:"https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"}</script><script>var Roblox=Roblox||{};Roblox.GaEventSettings={gaDFPPreRollEnabled:"false"==="true",gaLaunchAttemptAndLaunchSuccessEnabled:"false"==="true",gaPerformanceEventEnabled:"false"==="true"};</script><script onerror=Roblox.BundleDetector&amp;&amp;Roblox.BundleDetector.reportBundleError(this) data-monitor=true data-bundlename=headerinit src=https://ishowrevival.up.railway.app/js/320c48b73216ab58062c45351addcaa1.js></script>
<script type="text/javascript">
var Roblox = Roblox || {};
Roblox.RealTimeSettings = Roblox.RealTimeSettings ||
{
NotificationsEndpoint: "https://ishowrevival.up.railway.app",
MaxConnectionTime: "21600000",
IsEventPublishingEnabled: false,
IsDisconnectOnSlowConnectionDisabled: true,
IsSignalRClientTransportRestrictionEnabled: true,
IsLocalStorageInRealTimeEnabled: true,
IsDebuggerEnabled: "False"
}
</script>
<script type="text/javascript">
var Roblox = Roblox || {};
Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
// please keep the list in alphabetical order
Roblox.EnvironmentUrls = {
abtestingApiSite: "https://ishowrevival.up.railway.app",
accountInformationApi: "https://ishowrevival.up.railway.app",
accountSettingsApi: "https://ishowrevival.up.railway.app",
amazonStoreLink: "http://amzn.com/B00NUF4YOA",
apiGatewayUrl: "https://ishowrevival.up.railway.app",
apiProxyUrl: "https://ishowrevival.up.railway.app",
appProtocolUrl: "robloxmobile://",
appStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
authApi: "https://ishowrevival.up.railway.app",
authAppSite: "https://ishowrevival.up.railway.app",
avatarApi: "https://ishowrevival.up.railway.app",
avatarAppSite: "https://ishowrevival.up.railway.app",
badgesApi: "https://ishowrevival.up.railway.app",
billingApi: "https://ishowrevival.up.railway.app",
captchaApi: "https://ishowrevival.up.railway.app",
catalogApi: "https://ishowrevival.up.railway.app",
chatApi: "https://ishowrevival.up.railway.app",
contactsApi: "https://ishowrevival.up.railway.app",
developApi: "https://ishowrevival.up.railway.app",
domain: "ishowrevival.up.railway.app",
economyApi: "https://ishowrevival.up.railway.app",
followingsApi: "https://ishowrevival.up.railway.app",
friendsApi: "https://ishowrevival.up.railway.app",
friendsAppSite: "https://ishowrevival.up.railway.app",
gamesApi: "https://ishowrevival.up.railway.app",
gamesAppSite: "https://ishowrevival.up.railway.app",
gameInternationalizationApi: "https://ishowrevival.up.railway.app",
googlePlayStoreLink: "https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
groupsApi: "https://ishowrevival.up.railway.app",
inventoryApi: "https://ishowrevival.up.railway.app",
itemConfigurationApi: "https://ishowrevival.up.railway.app",
iosAppStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
localeApi: "https://ishowrevival.up.railway.app",
localizationTablesApi: "https://ishowrevival.up.railway.app",
metricsApi: "https://ishowrevival.up.railway.app",
midasApi: "https://ishowrevival.up.railway.app",
notificationApi: "https://ishowrevival.up.railway.app",
notificationAppSite: "https://ishowrevival.up.railway.app",
premiumFeaturesApi: "https://ishowrevival.up.railway.app",
presenceApi: "https://ishowrevival.up.railway.app",
publishApi: "https://ishowrevival.up.railway.app",
surveysAppSite: "https://ishowrevival.up.railway.app",
thumbnailsApi: "https://ishowrevival.up.railway.app",
translationRolesApi: "https://ishowrevival.up.railway.app",
voiceApi: "https://ishowrevival.up.railway.app",
websiteUrl: "https://ishowrevival.up.railway.app",
windowsStoreLink: "https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
xboxStoreLink: "https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
}
</script>
<meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<script>var Roblox=Roblox||{};Roblox.AdsHelper=Roblox.AdsHelper||{};Roblox.AdsLibrary=Roblox.AdsLibrary||{};Roblox.AdsHelper.toggleAdsSlot=function(slotId,GPTRandomSlotIdentifier){var gutterAdsEnabled=false;if(gutterAdsEnabled){googletag.display(GPTRandomSlotIdentifier);return;}
if(typeof slotId!=='undefined'&&slotId&&slotId.length>0){var slotElm=$("#"+slotId);if(slotElm.is(":visible")){googletag.display(GPTRandomSlotIdentifier);}else{var adParam=Roblox.AdsLibrary.adsParameters[slotId];if(adParam){adParam.template=slotElm.html();slotElm.empty();}}}}
</script><script>$(function(){Roblox.JSErrorTracker.initialize({'suppressConsoleError':true});});</script><!--[if lt IE 9]><script src=//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=//oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]--><script>var _gaq=_gaq||[];window.GoogleAnalyticsDisableRoblox2=true;_gaq.push(['b._setAccount','UA-486632-1']);_gaq.push(['b._setSampleRate','10']);_gaq.push(['b._setCampSourceKey','rbx_source']);_gaq.push(['b._setCampMediumKey','rbx_medium']);_gaq.push(['b._setCampContentKey','rbx_campaign']);_gaq.push(['b._setDomainName','ishowrevival.up.railway.app']);_gaq.push(['b._setCustomVar',1,'Visitor','Anonymous',2]);_gaq.push(['b._setPageGroup',1,'Games']);_gaq.push(['b._trackPageview']);_gaq.push(['c._setAccount','UA-26810151-2']);_gaq.push(['c._setSampleRate','1']);_gaq.push(['c._setDomainName','ishowrevival.up.railway.app']);_gaq.push(['c._setPageGroup',1,'Games']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script><script>if(Roblox&&Roblox.EventStream){Roblox.EventStream.Init("https://ecsv2.ishowrevival.up.railway.app/www/e.png","https://ecsv2.ishowrevival.up.railway.app/www/e.png","https://ecsv2.ishowrevival.up.railway.app/pe?t=studio","https://ecsv2.ishowrevival.up.railway.app/pe?t=diagnostic");}</script><script>if(Roblox&&Roblox.PageHeartbeatEvent){Roblox.PageHeartbeatEvent.Init([2,8,20,60]);}</script><script>if(typeof(Roblox)==="undefined"){Roblox={};}
Roblox.Endpoints=Roblox.Endpoints||{};Roblox.Endpoints.Urls=Roblox.Endpoints.Urls||{};Roblox.Endpoints.Urls['/api/item.ashx']='https://ishowrevival.up.railway.app/api/item.ashx';Roblox.Endpoints.Urls['/asset/']='https://ishowrevival.up.railway.app/asset/';Roblox.Endpoints.Urls['/client-status/set']='https://ishowrevival.up.railway.app/client-status/set';Roblox.Endpoints.Urls['/client-status']='https://ishowrevival.up.railway.app/client-status';Roblox.Endpoints.Urls['/game/']='https://ishowrevival.up.railway.app/game/';Roblox.Endpoints.Urls['/game-auth/getauthticket']='https://ishowrevival.up.railway.app/game-auth/getauthticket';Roblox.Endpoints.Urls['/game/edit.ashx']='https://ishowrevival.up.railway.app/game/edit.ashx';Roblox.Endpoints.Urls['/game/getauthticket']='https://ishowrevival.up.railway.app/game/getauthticket';Roblox.Endpoints.Urls['/game/get-hash']='https://ishowrevival.up.railway.app/game/get-hash';Roblox.Endpoints.Urls['/game/placelauncher.ashx']='https://ishowrevival.up.railway.app/game/placelauncher.ashx';Roblox.Endpoints.Urls['/game/preloader']='https://ishowrevival.up.railway.app/game/preloader';Roblox.Endpoints.Urls['/game/report-stats']='https://ishowrevival.up.railway.app/game/report-stats';Roblox.Endpoints.Urls['/game/report-event']='https://ishowrevival.up.railway.app/game/report-event';Roblox.Endpoints.Urls['/game/updateprerollcount']='https://ishowrevival.up.railway.app/game/updateprerollcount';Roblox.Endpoints.Urls['/login/default.aspx']='https://ishowrevival.up.railway.app/login/default.aspx';Roblox.Endpoints.Urls['/my/avatar']='https://ishowrevival.up.railway.app/my/avatar';Roblox.Endpoints.Urls['/my/money.aspx']='https://ishowrevival.up.railway.app/my/money.aspx';Roblox.Endpoints.Urls['/navigation/userdata']='https://ishowrevival.up.railway.app/navigation/userdata';Roblox.Endpoints.Urls['/chat/chat']='https://ishowrevival.up.railway.app/chat/chat';Roblox.Endpoints.Urls['/chat/data']='https://ishowrevival.up.railway.app/chat/data';Roblox.Endpoints.Urls['/presence/users']='https://ishowrevival.up.railway.app/presence/users';Roblox.Endpoints.Urls['/presence/user']='https://ishowrevival.up.railway.app/presence/user';Roblox.Endpoints.Urls['/friends/list']='https://ishowrevival.up.railway.app/friends/list';Roblox.Endpoints.Urls['/navigation/getcount']='https://ishowrevival.up.railway.app/navigation/getCount';Roblox.Endpoints.Urls['/regex/email']='https://ishowrevival.up.railway.app/regex/email';Roblox.Endpoints.Urls['/catalog/browse.aspx']='https://ishowrevival.up.railway.app/catalog/browse.aspx';Roblox.Endpoints.Urls['/catalog/html']='https://ishowrevival.up.railway.app/catalog/html';Roblox.Endpoints.Urls['/catalog/json']='https://ishowrevival.up.railway.app/catalog/json';Roblox.Endpoints.Urls['/catalog/contents']='https://ishowrevival.up.railway.app/catalog/contents';Roblox.Endpoints.Urls['/catalog/lists.aspx']='https://ishowrevival.up.railway.app/catalog/lists.aspx';Roblox.Endpoints.Urls['/catalog/items']='https://ishowrevival.up.railway.app/catalog/items';Roblox.Endpoints.Urls['/asset-hash-thumbnail/image']='https://ishowrevival.up.railway.app/asset-hash-thumbnail/image';Roblox.Endpoints.Urls['/asset-hash-thumbnail/json']='https://ishowrevival.up.railway.app/asset-hash-thumbnail/json';Roblox.Endpoints.Urls['/asset-thumbnail-3d/json']='https://ishowrevival.up.railway.app/asset-thumbnail-3d/json';Roblox.Endpoints.Urls['/asset-thumbnail/image']='https://ishowrevival.up.railway.app/asset-thumbnail/image';Roblox.Endpoints.Urls['/asset-thumbnail/json']='https://ishowrevival.up.railway.app/asset-thumbnail/json';Roblox.Endpoints.Urls['/asset-thumbnail/url']='https://ishowrevival.up.railway.app/asset-thumbnail/url';Roblox.Endpoints.Urls['/asset/request-thumbnail-fix']='https://ishowrevival.up.railway.app/asset/request-thumbnail-fix';Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json']='https://ishowrevival.up.railway.app/avatar-thumbnail-3d/json';Roblox.Endpoints.Urls['/avatar-thumbnail/image']='https://ishowrevival.up.railway.app/avatar-thumbnail/image';Roblox.Endpoints.Urls['/avatar-thumbnail/json']='https://ishowrevival.up.railway.app/avatar-thumbnail/json';Roblox.Endpoints.Urls['/avatar-thumbnails']='https://ishowrevival.up.railway.app/avatar-thumbnails';Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix']='https://ishowrevival.up.railway.app/avatar/request-thumbnail-fix';Roblox.Endpoints.Urls['/bust-thumbnail/json']='https://ishowrevival.up.railway.app/bust-thumbnail/json';Roblox.Endpoints.Urls['/group-thumbnails']='https://ishowrevival.up.railway.app/group-thumbnails';Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx']='https://ishowrevival.up.railway.app/groups/getprimarygroupinfo.ashx';Roblox.Endpoints.Urls['/headshot-thumbnail/json']='https://ishowrevival.up.railway.app/headshot-thumbnail/json';Roblox.Endpoints.Urls['/item-thumbnails']='https://ishowrevival.up.railway.app/item-thumbnails';Roblox.Endpoints.Urls['/outfit-thumbnail/json']='https://ishowrevival.up.railway.app/outfit-thumbnail/json';Roblox.Endpoints.Urls['/place-thumbnails']='https://ishowrevival.up.railway.app/place-thumbnails';Roblox.Endpoints.Urls['/thumbnail/asset/']='https://ishowrevival.up.railway.app/thumbnail/asset/';Roblox.Endpoints.Urls['/thumbnail/avatar-headshot']='https://ishowrevival.up.railway.app/thumbnail/avatar-headshot';Roblox.Endpoints.Urls['/thumbnail/avatar-headshots']='https://ishowrevival.up.railway.app/thumbnail/avatar-headshots';Roblox.Endpoints.Urls['/thumbnail/user-avatar']='https://ishowrevival.up.railway.app/thumbnail/user-avatar';Roblox.Endpoints.Urls['/thumbnail/resolve-hash']='https://ishowrevival.up.railway.app/thumbnail/resolve-hash';Roblox.Endpoints.Urls['/thumbnail/place']='https://ishowrevival.up.railway.app/thumbnail/place';Roblox.Endpoints.Urls['/thumbnail/get-asset-media']='https://ishowrevival.up.railway.app/thumbnail/get-asset-media';Roblox.Endpoints.Urls['/thumbnail/remove-asset-media']='https://ishowrevival.up.railway.app/thumbnail/remove-asset-media';Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order']='https://ishowrevival.up.railway.app/thumbnail/set-asset-media-sort-order';Roblox.Endpoints.Urls['/thumbnail/place-thumbnails']='https://ishowrevival.up.railway.app/thumbnail/place-thumbnails';Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial']='https://ishowrevival.up.railway.app/thumbnail/place-thumbnails-partial';Roblox.Endpoints.Urls['/thumbnail_holder/g']='https://ishowrevival.up.railway.app/thumbnail_holder/g';Roblox.Endpoints.Urls['/users/{id}/profile']='https://ishowrevival.up.railway.app/users/{id}/profile';Roblox.Endpoints.Urls['/service-workers/push-notifications']='https://ishowrevival.up.railway.app/service-workers/push-notifications';Roblox.Endpoints.Urls['/notification-stream/notification-stream-data']='https://ishowrevival.up.railway.app/notification-stream/notification-stream-data';Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest']='https://ishowrevival.up.railway.app/api/friends/acceptfriendrequest';Roblox.Endpoints.Urls['/api/friends/declinefriendrequest']='https://ishowrevival.up.railway.app/api/friends/declinefriendrequest';Roblox.Endpoints.Urls['/authentication/is-logged-in']='https://ishowrevival.up.railway.app/authentication/is-logged-in';Roblox.Endpoints.addCrossDomainOptionsToAllRequests=true;
</script><script>if(typeof(Roblox)==="undefined"){Roblox={};}
Roblox.Endpoints=Roblox.Endpoints||{};Roblox.Endpoints.Urls=Roblox.Endpoints.Urls||{};
</script><script>Roblox=Roblox||{};Roblox.AbuseReportPVMeta={desktopEnabled:true,phoneEnabled:false,inAppEnabled:false,inApp:false};</script>
<body id="rbx-body" class="rbx-body <?php if($ExperimentalTheme == "Dark"){echo"dark-theme";}?>" data-performance-relative-value="0.005" data-internal-page-name="Profile" data-send-event-percentage="0.01">
<div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.voidrev\.us|voidrevlabs\.us)|(www\.shopvoidrev\.us))(?!\/[A-Za-z0-9-+&amp;@#\/=~_|!:,.;]*%)((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(?=\s|\b))" data-regex-flags="gm" data-as-http-regex="(([^.]help|polls)\.voidrev\.us)"></div>
<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500" data-ga-logging-percent="10"></div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0" data-http-retry-max-times="1"></div>
<div id="TosAgreementInfo" data-terms-check-needed="false"></div>
<div id="fb-root"></div>
<?php if($maincss == false){echo'
<div id="wrap" class="wrap no-gutter-ads logged-in" data-gutter-ads-enabled="false">';
}else{
echo '<div id="wrap" class="wrap no-gutter-ads logged-in nav-content" data-gutter-ads-enabled="false">';
}
?>
<div id="header" class="navbar-fixed-top rbx-header <?=$hidenavbar;?>" data-isauthenticated="true" role="navigation">
<div class="container-fluid">
<div class="rbx-navbar-header">
<div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false">
<span class="icon-nav-menu"></span>
</div>
<div class="navbar-header">
<a class="navbar-brand" href="https://ishowrevival.up.railway.app/">
<span class="icon-logo"></span>
<span class="icon-logo-r"></span>
</a>
</div>
</div>
<ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
<li>
<a class="nav-menu-title text-header" href="https://ishowrevival.up.railway.app/games">Games</a>
</li>
<li>
<a class="nav-menu-title text-header" href="https://ishowrevival.up.railway.app/catalog/">Catalog</a>
</li>
<li>
<a class="nav-menu-title text-header" href="https://ishowrevival.up.railway.app/develop">Create</a>
</li>
<li>
<a class="buy-robux nav-menu-title text-header" href="https://ishowrevival.up.railway.app/upgrades/robux?ctx=nav">Robux</a>
</li>
</ul>
<div id="navbar-universal-search" class="navbar-left rbx-navbar-search col-xs-5 col-sm-6 col-md-3" data-behavior="univeral-search" role="search">
<div class="input-group">
<input id="navbar-search-input" class="form-control input-field" type="text" placeholder="Search" maxlength="120">
<div class="input-group-btn">
<button id="navbar-search-btn" class="input-addon-btn" type="submit">
<span class="icon-nav-search"></span>
</button>
</div>
</div>
<ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
<li class="rbx-navbar-search-option rbx-clickable-li selected" data-searchurl="https://ishowrevival.up.railway.app/search/users?keyword=">
<a class="rbx-navbar-search-anchor" href="https://ishowrevival.up.railway.app/search/users?keyword=">
<span class="rbx-navbar-search-text"> Search "<span class="rbx-navbar-search-string"></span>" in Players </span>
</a>
</li>
<li class="rbx-navbar-search-option rbx-clickable-li" data-searchurl="https://ishowrevival.up.railway.app/games/?Keyword=">
<a class="rbx-navbar-search-anchor" href="https://ishowrevival.up.railway.app/games/?Keyword=">
<span class="rbx-navbar-search-text"> Search "<span class="rbx-navbar-search-string"></span>" in Games </span>
</a>
</li>
<li class="rbx-navbar-search-option rbx-clickable-li" data-searchurl="https://ishowrevival.up.railway.app/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
<a class="rbx-navbar-search-anchor" href="https://ishowrevival.up.railway.app/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
<span class="rbx-navbar-search-text"> Search "<span class="rbx-navbar-search-string"></span>" in Catalog </span>
</a>
</li>
<li class="rbx-navbar-search-option rbx-clickable-li" data-searchurl="https://ishowrevival.up.railway.app/search/groups?keyword=">
<a class="rbx-navbar-search-anchor" href="https://ishowrevival.up.railway.app/search/groups?keyword=">
<span class="rbx-navbar-search-text"> Search "<span class="rbx-navbar-search-string"></span>" in Groups </span>
</a>
</li>
<li class="rbx-navbar-search-option rbx-clickable-li" data-searchurl="https://ishowrevival.up.railway.app/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
<a class="rbx-navbar-search-anchor" href="https://ishowrevival.up.railway.app/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
<span class="rbx-navbar-search-text"> Search "<span class="rbx-navbar-search-string"></span>" in Library </span>
</a>
</li>
</ul>
</div>
<div class="navbar-right rbx-navbar-right">
<?php if($logged == true){?>
<ul class="nav navbar-right rbx-navbar-icon-group">
<li id="navbar-setting" class="navbar-icon-item">
<a class="rbx-menu-item roblox-popover-close" data-toggle="popover" data-bind="popover-setting" data-viewport="#header" data-original-title="" title="">
<span class="icon-nav-settings roblox-popover-close" id="nav-settings"></span>
<span class="notification-red nav-setting-highlight hidden">0</span>
</a>
<div class="rbx-popover-content" data-toggle="popover-setting">
<ul class="dropdown-menu" role="menu">
<li>
<a class="rbx-menu-item" href="https://ishowrevival.up.railway.app/my/account"> Settings <span class="notification-blue nav-setting-highlight hidden">0</span>
</a>
</li>
<li>
<a class="rbx-menu-item" href="https://ishowrevival.up.railway.app/users/extrasettings">Extra Settings</span>
</a>
</li>
<?php if($usr['Admin'] == '1'){
echo' <li>
<a class="rbx-menu-item" href="https://ishowrevival.up.railway.app/Admi">
Admin
</a>
</li>';
} ?>
<li><a class="rbx-menu-item" href="https://ishowrevival.up.railway.app/users/switchthemes/" target="_blank">Themes</a></li>
<li>
<a class="rbx-menu-item" data-behavior="logout" data-bind="https://ishowrevival.up.railway.app/authentication/logout">Logout</a>
</li>
</ul>
</div>
</li>
<li id="navbar-robux" class="navbar-icon-item">
<a id="nav-robux-icon" class="nav-robux-icon rbx-menu-item" data-toggle="popover" data-bind="popover-robux" data-original-title="" title="">
<span class="icon-nav-robux roblox-popover-close" id="nav-robux"></span>
<span class="rbx-text-navbar-right text-header" id="nav-robux-amount"><?php echo robloxNumberFormat($Robux);?></span>
</a>
<div class="rbx-popover-content" data-toggle="popover-robux">
<ul class="dropdown-menu" role="menu">
<li>
<a href="https://ishowrevival.up.railway.app/My/Money.aspx#/#Summary_tab" id="nav-robux-balance" class="rbx-menu-item"><?php echo $Robux;?>&nbsp;Robux</a>
</li>
<li>
<a href="https://ishowrevival.up.railway.app/upgrades/robux?ctx=navpopover" class="rbx-menu-item">Buy Robux</a>
</li>
</ul>
</div>
</li>
<li class="navbar-icon-item navbar-stream">
<div ng-controller="notificationStreamIconController" class="notification-stream" ng-class="{'inApp':library.inApp}" id="notification-stream-icon-container" notification-stream-icon="">
<a id="nav-ns-icon" class="roblox-popover rbx-menu-item notification-stream-icon" data-bind="notification-stream" data-container="notification-stream-container" notification-indicator="">
<span class="icon-nav-notification-stream" id="nav-notifications"></span>
<span class="notification-red ng-binding hidden" ng-show="layout.unreadNotifications>0&amp;&amp;(!layout.isNotificationContentOpen)">0</span>
</a>
</div>
</li>
<li class="rbx-navbar-right-search" data-toggle="toggle-search">
<a class="rbx-menu-icon rbx-menu-item">
<span class="icon-nav-search-white"></span>
</a>
</li>
</ul>
<div class="xsmall age-bracket-label text-header">
<span class="age-bracket-label-username"><?php echo NoXSSPlz($username);?>: </span>13+
</div>
<? } ?>
</div>
<ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
<li>
<a class="nav-menu-title text-header" href="https://ishowrevival.up.railway.app/games">Games</a>
</li>
<li>
<a class="nav-menu-title text-header" href="https://ishowrevival.up.railway.app/catalog/">Catalog</a>
</li>
<li>
<a class="nav-menu-title text-header" href="https://ishowrevival.up.railway.app/develop">Create</a>
</li>
<li>
<a class="buy-robux nav-menu-title" href="https://ishowrevival.up.railway.app/upgrades/robux?ctx=nav">Robux</a>
</li>
</ul>
</div>
</div>
<?php if($logged == true){?>
<div id="navigation" class="rbx-left-col" data-behavior="left-col">
<ul>
<li class="text-lead">
<a class="text-nav text-overflow" href="https://ishowrevival.up.railway.app/users/<?=$uID;?>/profile"><?php echo NoXSSPlz($username);?></a>
</li>
<li class="rbx-divider"></li>
</ul>
<div class="rbx-scrollbar mCustomScrollbar _mCS_1 mCS_no_scrollbar" data-toggle="scrollbar" onselectstart="return false">
<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0">
<div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
<ul>
<li>
<a href="https://ishowrevival.up.railway.app/home" id="nav-home" class="text-nav">
<span class="icon-nav-home"></span>
<span>Home</span>
</a>
</li>
<li>
<a href="https://ishowrevival.up.railway.app/users/<?=$uID;?>/profile" id="nav-profile" class="text-nav">
<span class="icon-nav-profile"></span>
<span>Profile</span>
</a>
</li>
<li id="navigation-messages">
<a href="https://ishowrevival.up.railway.app/my/messages/#!/inbox" id="nav-message" data-count="<?=$messagescount;?>" class="text-nav">
<span class="icon-nav-message"></span>
<span>Messages</span>
<span class="notification-blue <?php if($messagenotifcation === "true"){echo"";}else{echo"hidden";}?>" title="<?=$messagescount;?>"><?=$messagescount;?></span>
</a>
</li>
<li id="navigation-friends">
<a href="https://ishowrevival.up.railway.app/users/friends/?id=<?=$uID;?>" id="nav-friends" data-count="<?=$friendreqcount;?>" class="text-nav">
<span class="icon-nav-friends"></span>
<span>Friends</span>
<span class="notification-blue <?php if($friendsnotifcation === "true"){echo"";}else{echo"hidden";}?>" title="<?=$friendreqcount;?>"><?=$friendreqcount;?></span>
</a>
</li>
<li>
<a href="https://ishowrevival.up.railway.app/my/avatar" id="nav-character" class="text-nav">
<span class="icon-nav-charactercustomizer"></span>
<span>Avatar</span>
</a>
</li>
<li>
<a href="https://ishowrevival.up.railway.app/users/profile/inventory/?id=<?=$usr['id']?>" id="nav-inventory" class="text-nav">
<span class="icon-nav-inventory"></span>
<span>Inventory</span>
</a>
</li>
<li>
<a href="https://ishowrevival.up.railway.app/my/money.aspx#/#TradeItems_tab" id="nav-trade" class="text-nav">
<span class="icon-nav-trade"></span>
<span>Trade</span>
</a>
</li>
<li>
<a href="https://ishowrevival.up.railway.app/my/groups.aspx" id="nav-group" class="text-nav">
<span class="icon-nav-group"></span>
<span>Groups</span>
</a>
</li>
<li>
<a href="https://ishowrevival.up.railway.app" id="nav-blog" class="text-nav">
<span class="icon-nav-blog"></span>
<span>Blog</span>
</a>
</li>
<li>
<a id="nav-shop" class="text-nav roblox-shop-interstitial">
<span class="icon-nav-shop"></span>
<span>Shop</span>
</a>
</li>
<?php if($membership == "None"){?>
<li class="rbx-upgrade-now">
<a href="https://ishowrevival.up.railway.app/premium/membership?ctx=leftnav" class="btn-growth-md btn-secondary-md" id="upgrade-now-button">Upgrade Now</a>
</li>
<? } ?>
<li class="font-bold small text-nav">Events</li>
</ul>
</div>
<div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
<div class="mCSB_draggerContainer">
<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;">
<div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
</div>
<div class="mCSB_draggerRail"></div>
</div>
</div>
</div>
</div>
</div>
<? } ?>
<div id=i18nForAmazonShopSwitch data-is-i18n-enabled-for-shop-amazon-dialog=true data-amazon-store-url="https://www.amazon.com/roblox?&amp;_encoding=UTF8&amp;tag=r05d13-20&amp;linkCode=ur2&amp;linkId=4ba2e1ad82f781c8e8cc98329b1066d0&amp;camp=1789&amp;creative=9325" style=display:none></div>
<script>var Roblox=Roblox||{};(function(){if(Roblox&&Roblox.Performance){Roblox.Performance.setPerformanceMark("navigation_end");}})();</script>
<div class=container-main>
<script>if(top.location!=self.location){top.location=self.location.href;}</script>
<div class=alert-container>
<noscript>
<div>
<div class=alert-info role=alert>Please enable Javascript to use all the features on this site.</div>
</div>
</noscript>
</div>
<?php
$alertquery = $con->prepare("SELECT * FROM `alerts` ORDER BY id DESC");
$alertquery->execute();
$alert = $alertquery->fetch();
if(is_array($alert) && !empty($alert['text'])){
echo '
<div class=alert-container>
<div class="alert-info">
<p>'.NoXSSPlz($alert["text"]).'</p>
</div>
</div>';
}
?>
<div class=content>