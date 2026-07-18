<?php
// Since this page is broken on Studio:
header("Location: https://ishowrevival.up.railway.app/newlogin");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://ishowrevival.up.railway.app/css/main.css"/>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
<title>Start Page</title>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>
<link rel="stylesheet" href="http://ishowrevival.up.railway.app/css/Welcome.css">
<script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/api/item.ashx'] = 'http://ishowrevival.up.railway.app/api/item.ashx';
Roblox.Endpoints.Urls['/asset/'] = 'http://ishowrevival.up.railway.app/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'http://ishowrevival.up.railway.app/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'http://ishowrevival.up.railway.app/client-status';
Roblox.Endpoints.Urls['/game/'] = 'http://ishowrevival.up.railway.app/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'http://ishowrevival.up.railway.app/game/edit.ashx';
Roblox.Endpoints.Urls['/game/getauthticket'] = 'http://ishowrevival.up.railway.app/game/getauthticket';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'http://ishowrevival.up.railway.app/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'http://ishowrevival.up.railway.app/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'http://ishowrevival.up.railway.app/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'http://ishowrevival.up.railway.app/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'http://ishowrevival.up.railway.app/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'http://ishowrevival.up.railway.app/login/default.aspx';
Roblox.Endpoints.Urls['/my/character.aspx'] = 'http://ishowrevival.up.railway.app/my/character.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'http://ishowrevival.up.railway.app/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'http://ishowrevival.up.railway.app/chat/chat';
Roblox.Endpoints.Urls['/presence/users'] = 'http://ishowrevival.up.railway.app/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'http://ishowrevival.up.railway.app/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'http://ishowrevival.up.railway.app/friends/list';
Roblox.Endpoints.Urls['/navigation/getCount'] = 'http://ishowrevival.up.railway.app/navigation/getCount';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'http://ishowrevival.up.railway.app/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'http://ishowrevival.up.railway.app/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'http://ishowrevival.up.railway.app/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'http://ishowrevival.up.railway.app/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'http://ishowrevival.up.railway.app/catalog/lists.aspx';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'http://ishowrevival.up.railway.app/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'http://ishowrevival.up.railway.app/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'http://ishowrevival.up.railway.app/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'http://ishowrevival.up.railway.app/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'http://ishowrevival.up.railway.app/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'http://ishowrevival.up.railway.app/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'http://ishowrevival.up.railway.app/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'http://ishowrevival.up.railway.app/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'http://ishowrevival.up.railway.app/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'http://ishowrevival.up.railway.app/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'http://ishowrevival.up.railway.app/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'http://ishowrevival.up.railway.app/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'http://ishowrevival.up.railway.app/bust-thumbnail/json';
Roblox.Endpoints.Urls['/group-thumbnails'] = 'http://ishowrevival.up.railway.app/group-thumbnails';
Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'http://ishowrevival.up.railway.app/groups/getprimarygroupinfo.ashx';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'http://ishowrevival.up.railway.app/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'http://ishowrevival.up.railway.app/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'http://ishowrevival.up.railway.app/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'http://ishowrevival.up.railway.app/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'http://ishowrevival.up.railway.app/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'http://ishowrevival.up.railway.app/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'http://ishowrevival.up.railway.app/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'http://ishowrevival.up.railway.app/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'http://ishowrevival.up.railway.app/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'http://ishowrevival.up.railway.app/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'http://ishowrevival.up.railway.app/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'http://ishowrevival.up.railway.app/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'http://ishowrevival.up.railway.app/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'http://ishowrevival.up.railway.app/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'http://ishowrevival.up.railway.app/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'http://ishowrevival.up.railway.app/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'http://ishowrevival.up.railway.app/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'http://ishowrevival.up.railway.app/service-workers/push-notifications';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>
<script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-43420590-3']);
_gaq.push(['_setDomainName', 'roblox.com']);
(function () {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('http:' == document.location.protocol ? 'http://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript" src="http://ishowrevival.up.railway.app/js/46eace8231bf3c1ce64c55407d9ae60d.js"></script>
<script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'http://ishowrevival.up.railway.app/js/c14a216bd7773e7b637b4e6c3c2e619d.js';Roblox.config.paths['Pages.CatalogShared'] = 'http://ishowrevival.up.railway.app/js/962d5b2c17eda7dc135bb442c25afff9.js';Roblox.config.paths['Widgets.AvatarImage'] = 'http://ishowrevival.up.railway.app/js/0cca42624a8d34662e179c9aa18225da.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'http://ishowrevival.up.railway.app/js/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'http://ishowrevival.up.railway.app/js/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'http://ishowrevival.up.railway.app/js/3368571372da9b2e1713bb54ca42a65a.js';Roblox.config.paths['Widgets.ItemImage'] = 'http://ishowrevival.up.railway.app/js/8babd891cf420dfe3999b3824a0154cb.js';Roblox.config.paths['Widgets.PlaceImage'] = 'http://ishowrevival.up.railway.app/js/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'http://ishowrevival.up.railway.app/js/d6e979598c460090eafb6d38231159f6.js';</script>
<script type="text/javascript">
function editTemplateInStudio(play_placeId) { RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Edit']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); } }; Roblox.Client.WaitForRoblox(function() { RobloxLaunch.StartGame('http://ishowrevival.up.railway.app/Game/edit.ashx?PlaceID='+play_placeId+'&upload=', 'edit.ashx', 'http://ishowrevival.up.railway.app/Login/Negotiate.ashx', 'FETCH', true); }); }
</script>
</head>
<body id="StudioWelcomeBody">
<div class="header">
<div id="header-login-wrapper" class="iframe-login-signup" data-display-opened="">
<a href="http://ishowrevival.up.railway.app/" target="_blank" class="btn-control btn-control-large translate" id="studio-header-signup"><span>Sign Up</span></a>
<span id="header-or">or</span>
<span class="studioiFrameLogin">
<span id="login-span">
<a id="header-login" class="btn-control btn-control-large">Login <span class="grey-arrow">▼</span></a>
</span>
<div id="iFrameLogin" class="studioiFrameLogin" style="display: none">
<iframe id="iframe-login" class="login-frame" src="http://ishowrevival.up.railway.app/Login/iFrameLogin.aspx?loginRedirect=True&amp;parentUrl=http%3a%2f%2fishowrevival.up.railway.app%2fide%2fwelcome" scrolling="no" frameborder="0"></iframe>
</div>
</span>
</div>
<!-- This is only after the login stuff because IE7 demands floated elements be before non-floated -->
<img src="http://ishowrevival.up.railway.app/img/63c8081b4b083e1b75685aef06cdfa77.png" alt="Roblox Studio Title"/>
<p id="HomeLink">
<a class="text-link" href="http://ishowrevival.up.railway.app/develop">Switch to Classic View</a>
</p>
</div>
<div class="container">
<div class="navbar">
<ul class="navlist">
<li id="NewProject"><p>New Project</p></li>
<li id="GamesToggle"><p>Games</p></li>
<li id="MyProjects"><p>My Projects</p></li>
<!--li class="lastnav"><p>Recent News</p></li-->
</ul>
</div>
<div class="main">
<div id="TemplatesView" class="welcome-content-area">
<h2 id="StudioGameTemplates">GAME TEMPLATES</h2>
<div class="templatetypes">
<ul class="templatetypes">
<li data-templatetype="Basic"><a href="#Basic">Basic</a></li>
<li data-templatetype="Theme"><a href="#Theme">Theme</a></li>
<li data-templatetype="Gameplay"><a href="#Gameplay">Gameplay</a></li>
</ul>
<!--div class="tool-tip">
<img alt="Recommended for users new to ROBLOX studio" src="/images/IDE/img-tail-top.png" class="top" />
<p>Recommended for users new to ROBLOX studio</p>
<a class="closeButton"></a>
</div -->
</div>
<div class="templates" data-templatetype="Basic" style="display: block;">
<div class="template" placeid="95206881">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/437e5a1ef10e12231e8dd92f3d5423a1"></a>
<p>Baseplate</p>
</div>
<div class="template" placeid="95206192">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/84782e12ef917af4c3b6c67385a0294a"></a>
<p>Flat Terrain</p>
</div>
</div>
<div class="templates" data-templatetype="Theme">
<div class="template" placeid="203783329">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/e4864dd5b7e4824f346ea872ffd350eb"></a>
<p>City</p>
</div>
<div class="template" placeid="203810088">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/1c6158e9e1b9d8cbc097c9f034a27934"></a>
<p>Medieval</p>
</div>
<div class="template" placeid="264719325">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/0bb4461b2a053bbb4fc37675d6e91dc1"></a>
<p>Pirate Island</p>
</div>
<div class="template" placeid="366120910">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/32a8003137fea846bbe541664dd9aec9"></a>
<p>Western</p>
</div>
<div class="template" placeid="366130569">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/afd2a8622948d55c53ee0194b6e8ca35"></a>
<p>Suburban</p>
</div>
</div>
<div class="templates" data-templatetype="Gameplay">
<div class="template" placeid="203812057">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/75af252c9f36755d98db3296e7e08750"></a>
<p>Obby</p>
</div>
<div class="template" placeid="215383192">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/e8ecec34669474c4162ecc5a04535102"></a>
<p>Racing</p>
</div>
<div class="template" placeid="203885589">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/455d0f9e82e94c171181c2412c219376"></a>
<p>Shooter</p>
</div>
<div class="template" placeid="264715997">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/245ad7724f4f1a688efac0dea30086fe"></a>
<p>Infinite Runner</p>
</div>
<div class="template" placeid="92721754">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/cc6dd833e23a1ea730eda2476b40cbe6"></a>
<p>Capture The Flag</p>
</div>
<div class="template" placeid="301529772">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/f2169bb0b3db528714b32dc785e6456d"></a>
<p>Team/FFA Arena</p>
</div>
<div class="template" placeid="301530843">
<a class="game-image"><img class="" src="http://ishowrevival.up.railway.app/img/3c5e97a9e7e25de299ac713e6d429c6c"></a>
<p>Line Runner</p>
</div>
</div>
</div>
<div id="MyProjectsView" class="welcome-content-area" style="display: none">
<div>
<h2>My Places</h2>
<div id="assetList" class="tab-active">
<div>
<span>You must be logged in to view your published projects!</span>
</div>
<script type="text/javascript">
$('#MyProjects').click(function() {
$('#header-login').addClass('active');
$('#iFrameLogin').css('display', 'block');
});
</script>
</div>
</div>
</div>
<div id="GamesView" class="welcome-content-area" style="display: none">
<div>
<h2>My Games</h2>
<div id="universeList" class="tab-active">
<div>
<span>You must be logged in to view your published projects!</span>
</div>
<script type="text/javascript">
$('#MyProjects').click(function () {
$('#header-login').addClass('active');
$('#iFrameLogin').css('display', 'block');
});
</script>
</div>
</div>
</div>
<div id="ButtonRow" class="divider-top divider-left divider-bottom">
<a class="btn-medium btn-primary" id="EditButton">Edit</a>
<a class="btn-medium btn-primary" id="BuildButton">Build</a>
<a class="btn-medium btn-negative" id="CollapseButton">Cancel</a>
</div>
</div>
</div>
<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
<div class="Title"></div>
<div class="GenericModalBody">
<div>
<div class="ImageContainer">
<img class="GenericModalImage" alt="generic image"/>
</div>
<div class="Message"></div>
</div>
<div class="clear"></div>
<div id="GenericModalButtonContainer" class="GenericModalButtonContainer">
<a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
</div>
</div>
</div>
<script type="text/javascript">
$(function () {
if (typeof Roblox.IDEWelcome === "undefined")
Roblox.IDEWelcome = {};
Roblox.IDEWelcome.Resources = {
//<sl:translate>
openProject: "Open Project",
openProjectText: "To open your project, open to this page in ",
robloxStudio: "ROBLOX Studio",
editPlace: "Edit Place",
toEdit: "To edit ",
openPage: ", open to this page in ",
buildPlace: "Build Place",
toBuild: "To build on ",
placeInactive: "Place Inactive",
activate: ", activate this place by going to File->My Published Projects.",
emailVerifiedTitle: "Verify Your Email",
emailVerifiedMessage: "You must verify your email before you can work on your place. You can verify your email on the <a href='http://ishowrevival.up.railway.app/my/account?confirmemail=1'>Account</a> page.",
verify: "Verify",
OK: "OK"
//</sl:translate>
};
});
</script>
<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
<a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
<div class="Title"></div>
<div class="GenericModalBody">
<div class="TopBody">
<div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
<img class="GenericModalImage" alt="generic image"/>
</div>
<div class="Message"></div>
</div>
<div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
<a href id="roblox-confirm-btn"><span></span></a>
<a href id="roblox-decline-btn"><span></span></a>
</div>
<div class="ConfirmationModalFooter">
</div>
</div>
<script type="text/javascript">
Roblox = Roblox || {};
Roblox.Resources = Roblox.Resources || {};
//<sl:translate>
Roblox.Resources.GenericConfirmation = {
yes: "Yes",
No: "No",
Confirm: "Confirm",
Cancel: "Cancel"
};
//</sl:translate>
</script>
</div>
<script type="text/javascript">function urchinTracker() {}</script>
</body>
</html>
