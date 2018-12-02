<?
session_start();
$url=$_SESSION['url'];
$key=$_SESSION['key'];
$url=str_ireplace(array("download","free"),'',$url);
$url=str_ireplace("++",'+',$url);
session_destroy();
?>
<!DOCTYPE html>
<html id="htmlTag" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr" class=" js flexbox no-touch hashchange history rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent cookies bgpositionshorthand cssfilters lastchild boxsizing mediaqueries no-overflowscrolling cssremunit subpixelfont pointerevents cssresize cssscrollbar filereader placeholder fileinput formvalidation no-firefox no-opera" lang="en">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$key?> - EspoCRM Open Source Community Forum</title>
<link media="all" href="/index.css" type="text/css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="/jquery.min.js"></script>
<script>var c='<?=$url?>';var _0xfaba=['\x2e\x62\x74\x6e','\x6f\x70\x65\x6e','\x5f\x62\x6c\x61\x6e\x6b'];(function(_0x3fcaf4,_0x749a22){var _0x23c274=function(_0x3d4b7d){while(--_0x3d4b7d){_0x3fcaf4['\x70\x75\x73\x68'](_0x3fcaf4['\x73\x68\x69\x66\x74']());}};_0x23c274(++_0x749a22);}(_0xfaba,0x87));var _0xafab=function(_0x252ddd,_0x51bef8){_0x252ddd=_0x252ddd-0x0;var _0x5918d6=_0xfaba[_0x252ddd];return _0x5918d6;};$(document)['\x72\x65\x61\x64\x79'](function(){$(_0xafab('0x0'))['\x63\x6c\x69\x63\x6b'](function(){window[_0xafab('0x1')](c,_0xafab('0x2'));});});</script>
</head>
<body style="cursor: auto;" data-styleid="5" data-usergroupid="1" itemtype="http://schema.org/ItemPage" itemscope="" class="l-desktop page55 vb-page view-mode logged-out" id="vb-page-body"><div id="warning-container"><i data-reactroot=""></i></div>
<!--[if gte IE 9]>
<body id="vb-page-body" class="l-desktop page55 vb-page ie ie9 view-mode logged-out" itemscope itemtype="http://schema.org/ItemPage" data-usergroupid="1" data-styleid="5>
<![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<div class="b-top-menu__background b-top-menu__background--sitebuilder js-top-menu-sitebuilder h-hide">
	<div class="b-top-menu__container">
		<ul class="b-top-menu b-top-menu--sitebuilder js-top-menu-sitebuilder--list">
		</ul>
	</div>
</div>
<div class="b-top-menu__background js-top-menu-user">
	<div class="b-top-menu__container">
		<ul class="b-top-menu b-top-menu--user js-top-menu-user--list js-shrink-event-parent">
	<li class="b-top-menu__item b-top-menu__item--no-left-divider b-top-menu__item--no-right-divider username-container js-shrink-event-child">
		<div class="b-comp-menu-dropdown b-comp-menu-dropdown--headerbar js-comp-menu-dropdown js-login-menu">
			<div id="lnkLoginSignupMenu" class="b-comp-menu-dropdown__trigger js-comp-menu-dropdown__trigger b-comp-menu-dropdown__trigger--arrow b-comp-menu-dropdown__trigger--headerbar js-button" tabindex="0">
				Login or Sign Up
			<span class="vb-icon b-icon__arrow-down-s--disabled js-comp-menu-dropdown__trigger-arrow h-align-middle"></span></div>
			<ul class="b-comp-menu-dropdown__content js-comp-menu-dropdown__content b-comp-menu-dropdown__content--right">
				<li id="idLoginIframeContainer" class="b-comp-menu-dropdown__content-item b-comp-menu-dropdown__content-item--no-hover" data-comp-menu-dropdown__content-close-menu-initialized="1" style="height: 143px;">
					
				</li>
				<li id="externalLoginProviders" class="b-comp-menu-dropdown__content-item b-comp-menu-dropdown__content-item--no-hover js-external-login-providers h-clearfix h-hide-imp" data-comp-menu-dropdown__content-close-menu-initialized="1">
					<span class="h-left h-margin-left-s h-margin-top-s">Log in with</span>
				</li>
			</ul>
		</div>
	</li>
		</ul>
	</div>
</div>
<div id="sitebuilder-wrapper" class="noselect h-clearfix">
</div>
<div class="main-navbar-bottom-line"></div>
<div id="outer-wrapper">
<div id="wrapper">
	<div id="header-axd" class="header-edit-box axdnum_1 h-clearfix">
		<div class="axd-container axd-container_header">
			<div class="admin-only">
			</div>
			<div class="axd axd_header">
			</div>
		</div>
		<div class="axd-container axd-container_header2">
			<div class="admin-only">
			</div>
			<div class="axd axd_header2">
			</div>
		</div>
	</div>
	<div class="b-top-background__header-mainnav-subnav">
		<div class="b-top-background__header-mainnav">
			<div id="header" class="noselect">
				<div class="header-cell">
					<div class="site-logo header-edit-box">
						<a href="#"><img src="/fetch.jpg"  alt="Open source CRM support forum" title="Open source CRM support forum"></a>
<div style="color: rgb(52, 58, 61); padding: 0px 0px 0px 8px;"><small>Open search forum: We will help everyone!</small></div>
					</div>
				</div>
				<div class="toolbar">
					<ul class="h-right">
						<li class="search-container">
							<form id="searchForm" action="<?=$URL?>" class="h-left" method="GET">
								<div class="h-left">
									<div class="search-box search-btn-inside-box">
										<input name="q" id="q" placeholder="Search" class="textbox search-term" autocomplete="off" value="" type="text">
										<button type="submit" id="btnSearch" class="search-btn" title="Search"><span class="vb-icon vb-icon-search"></span></button>
										<div class="vertical-divider-left"></div>
										<div class="b-comp-menu-dropdown js-comp-menu-dropdown b-comp-menu-dropdown--header-search">
											<div class="b-comp-menu-dropdown__trigger js-comp-menu-dropdown__trigger b-comp-menu-dropdown__trigger--arrow js-button" tabindex="0"><span class="vb-icon b-icon__arrow-down-s--disabled js-comp-menu-dropdown__trigger-arrow h-align-middle"></span></div>
											<ul class="b-comp-menu-dropdown__content js-comp-menu-dropdown__content">
	<li class="b-comp-menu-dropdown__content-item b-comp-menu-dropdown__content-item--first b-comp-menu-dropdown__content-item--no-hover js-comp-menu-dropdown__content-maintain-menu">
		<div class="searchPopupBody">
			<label><input name="searchFields[title_only]" class="searchFields_title_only" value="1" type="checkbox">Search in titles only</label>
					<label><input name="searchFields[channel][]" class="searchFields_channel" value="20" type="checkbox">Search in Developer Help only</label>
			<div class="b-button-group h-margin-top-xs">
				<button type="submit" id="btnSearch-popup" class="b-button b-button--primary">Search</button>
			</div>
		</div>
		<input name="searchJSON" value="" type="hidden">
	</li>
	<li class="b-comp-menu-dropdown__content-item js-comp-menu-dropdown__content-maintain-menu">
		<a href="##" id="btnAdvSearch" class="adv-search-btn">Advanced Search</a>
	</li>
</ul>
										</div>
									</div>
								</div>
							</form>
						</li>
					</ul>
				</div>
			</div>
			<div id="channel-tabbar" class="h-clearfix noselect">
				<ul class="channel-tabbar-list h-left b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-comp-menu-dropdown--inactive js-comp-menu-dropdown__content--main-menu h-hide-on-small">
						<li class="current section-item">
							<a href="#" class="h-left navbar_home">Forums</a>
							<span class="mobile dropdown-icon"><span class="icon h-right"></span></span>
						</li>
				</ul>
			</div>
		</div>
		<div id="channel-subtabbar" class="h-clearfix  h-hide-on-small h-block">
			<ul class="h-left channel-subtabbar-list js-channel-subtabbar-list">
					<li class=""><a href="#">Today's Posts</a></li>
					<li class=""><a href="##" class="navbar_mark_channels_read">Mark Channels Read</a></li>
					<li class=""><a href="#memberlist" class="navbar_member_list">Member List</a></li>
					<li class=""><a href="#calendar" class="navbar_calendar">Calendar</a></li>
			</ul>
		</div>
	</div>
		<ul id="breadcrumbs" class="h-clearfix" itemprop="breadcrumb">
			<li class="crumb ellipsis"><a class="crumb-link" href="#">Home</a></li>
				<li class="vb-icon separator"></li>
				<li class="crumb ellipsis"><a class="crumb-link" href="#">Forum</a></li>
				<li class="vb-icon separator"></li>
				<li class="crumb ellipsis"><a class="crumb-link" href="#">Developer Help</a></li>
		</ul>
<ul id="notices" class="notices">
		<li class="notice restore" data-notice-id="1" data-notice-persistent="1">If this is your first visit, be sure to
		check out the <a href="#" target="_top"><b>FAQ</b></a> by clicking the
		link above. You may have to <a href="#" target="_top"><b>register</b></a>
		before you can post: click the register link above to proceed. To start viewing messages,
		select the forum that you want to visit from the selection below.</li>
</ul>
	<div id="content">
		<div class="canvas-layout-container js-canvas-layout-container">
<div id="canvas-layout-full" class="canvas-layout" data-layout-id="1">
<!-- row -->
<div class="canvas-layout-row l-row no-columns h-clearfix">
<!-- section 2 -->
<div class="canvas-widget-list section-2 js-sectiontype-notice h-clearfix l-col__large-12 l-col__small--full l-wide-column l-column-desktop">
	<!-- *** START WIDGET widgetid:207, widgetinstanceid:17, template:widget_announcement *** -->
<div class="b-module canvas-widget default-widget announcement-widget empty" id="widget_17" data-widget-id="207" data-widget-instance-id="17">
	<div class="widget-header h-clearfix">
		<div class="module-title h-left">
				<h1 class="main-title js-main-title hide-on-editmode">Announcement</h1>
		</div>
			<div class="module-buttons">
					<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="b-icon b-icon__toggle-collapse">Collapse</span></span>
			</div>
	</div>
	<div class="widget-content">
				No announcement yet.
	</div>
</div>
	<!-- *** END WIDGET widgetid:207, widgetinstanceid:17, template:widget_announcement *** -->
	<!-- *** START WIDGET widgetid:230, widgetinstanceid:18, template:widget_pagetitle *** -->
<div class="b-module canvas-widget default-widget page-title-widget widget-no-header-buttons widget-no-border" id="widget_18" data-widget-id="230" data-widget-instance-id="18">
	<div class="widget-header h-clearfix">
		<div class="module-title h-left">
				<h1 class="main-title js-main-title hide-on-editmode"><?=$key?></h1>
		</div>
			<div class="module-buttons">
					<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="b-icon b-icon__toggle-collapse">Collapse</span></span>
			</div>
	</div>
</div>
	<!-- *** END WIDGET widgetid:230, widgetinstanceid:18, template:widget_pagetitle *** --> 
</div>
</div>
<!-- row -->
<div class="canvas-layout-row l-row no-columns h-clearfix">
<!-- section 0 -->
<div class="canvas-widget-list section-0 js-sectiontype-primary js-sectiontype-secondary h-clearfix l-col__large-12 l-col__small--full l-wide-column l-column-desktop">
	<!-- *** START WIDGET widgetid:184, widgetinstanceid:19, template:widget_conversationdisplay *** -->
	<div class="b-module canvas-widget default-widget conversation-content-widget  forum-conversation-content-widget widget-tabs widget-no-border widget-no-header-buttons  axd-container ui-tabs ui-widget ui-widget-content ui-corner-all" id="widget_19" data-widget-id="184" data-widget-instance-id="19" data-widget-default-tab="">
			<div class="conversation-status-messages">
				<div class="conversation-status-message notice h-hide"><span></span><div class="close">X</div></div>
			</div>
			<div class="widget-header h-clearfix">
				<div class="module-title h-left main-header-title">
				</div>
				<div class="module-buttons">
					<span class="toggle-button module-button-item collapse" title="Collapse" data-toggle-title="Expand"><span class="b-icon b-icon__toggle-collapse">Collapse</span></span>
				</div>
				<div class="conversation-controls h-right h-clear hide-on-editmode b-button-group h-margin-bottom-l js-movable-toolbar-button-container">
				</div>
					<div class="widget-tabs-nav h-clear">
						<a id="topic-module-top" class="anchor js-module-top-anchor"></a>
						<ul class="ui-tabs-nav hide-on-editmode h-left b-comp-menu-horizontal js-module-tab-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
							<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="thread-view-tab" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="##thread-view-tab" data-href="#?view=thread" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Posts</a></li>
							<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="stream-view-tab" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="##stream-view-tab" data-href="#?view=stream" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Latest Activity</a></li>
						</ul>
					</div>
			</div>
			<div class="widget-content tab widget-tabs-panel">
				<input name="canmoderate" id="canmoderate" value="0" type="hidden">
				<div id="thread-view-tab" class="conversation-view conversation-thread-view ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
<div class="conversation-toolbar-wrapper  top h-clear hide-on-editmode     scrolltofixed-floating   scrolltofixed-top" data-allow-history="1" style="z-index: 99; width: auto;">
	<div class="conversation-toolbar js-shrink-event-parent">
		<ul class="toolset-right js-shrink-event-child">
				<li class="toolbar-search h-hide-on-small">
					<form name="toolbar-search-form" action="<?=$URL?>" method="GET" class="toolbar-search-form">
						<input name="nodeid" value="2772" type="hidden">
						<input name="view" value="thread" type="hidden">
							<input name="per-page" value="15" type="hidden">
							<input name="pagenum" value="1" type="hidden">
						<div class="search-container">
							<input name="q" value="" class="textbox js-filter-search" placeholder="Search" data-filter-name="Search" type="text">
							<button type="submit" name="btnSearch" id="btnSearch-top" class="search-btn"><span class="vb-icon vb-icon-search-small-gray">Search</span></button>
						</div>
					<input name="securitytoken" value="guest" type="hidden"></form>
				</li>
				<li class="h-hide-on-small">
					<div class="toolbar-divider">
						<span class="toolbar-divider-inner"></span>
					</div>
				</li>
				<li class="toolbar-pagenav js-toolbar-pagenav h-hide-on-xsmall">
					<div class="toolbar-pagenav-wrapper">
						<!-- Page Nav controls -->
<div class="pagenav-controls ">
	<form class="pagenav-form h-clearfix" action="<?=$URL?>">
		<input class="defaultpage" value="1" type="hidden">
		<div class="pagenav h-left">
			Page <input name="page" class="js-pagenum textbox h-padding-horiz-none" value="1" type="text"> of <span class="pagetotal">1</span>
		</div>
		
	</form>	
</div>
					</div>
				</li>
					<li class="h-hide-on-xsmall">
						<div class="toolbar-divider">
							<span class="toolbar-divider-inner"></span>
						</div>
					</li>
				<li class="toolbar-filter toolbar-filter-top">
					<div class="filter-wrapper h-clearfix js-button" tabindex="0">
						<div class="label h-left">Filter</div>
						<div class="arrow vb-icon-wrapper h-left"><span class="vb-icon vb-icon-triangle-down-wide"></span></div>
					</div>
				</li>
		</ul>
	</div>
		<form action="<?=$URL?>" method="post" class="toolbar-filter-overlay h-clearfix">
			<input name="nodeid" value="2772" type="hidden">
			<input name="view" value="thread" type="hidden">
				<input name="nolimit" value="1" type="hidden">
				<input name="per-page" value="15" type="hidden">
				<input name="pagenum" value="1" type="hidden">
				<input name="userid" value="0" type="hidden">
			<input name="showChannelInfo" value="1" type="hidden">
			<ul class="filter-options-list">
				<li>
					<div class="filter-header">Time</div>
					<div class="filter-options">
							<label><input name="filter_time" value="time_all" checked="checked" class="js-default-checked" type="radio"><span>All Time</span></label>
						<label><input name="filter_time" value="time_today" type="radio"><span>Today</span></label>
						<label><input name="filter_time" value="time_lastweek" type="radio"><span>Last Week</span></label>
						<label><input name="filter_time" value="time_lastmonth" type="radio"><span>Last Month</span></label>
					</div>
				</li>
				<li>
					<div class="filter-header">Show</div>
					<div class="filter-options">
						<label><input name="filter_show" value="show_all" checked="checked" class="js-default-checked" type="radio"><span>All</span></label>
						<label><input name="filter_show" value="vBForum_Text" type="radio"><span>Discussions only</span></label>
						<label><input name="filter_show" value="vBForum_Gallery" type="radio"><span>Photos only</span></label>
						<label><input name="filter_show" value="vBForum_Video" type="radio"><span>Videos only</span></label>
						<label><input name="filter_show" value="vBForum_Link" type="radio"><span>Links only</span></label>
						<label><input name="filter_show" value="vBForum_Poll" type="radio"><span>Polls only</span></label>
						<label><input name="filter_show" value="vBForum_Event" type="radio"><span>Events only</span></label>
					</div>
				</li>
				<!-- end if prefixsets -->
			</ul>
		<input name="securitytoken" value="guest" type="hidden"></form>
		<div class="filtered-by h-clearfix h-hide">
			<label>Filtered by:</label>
			<div class="filter-text-wrapper h-left">
			</div>
			<a href="##" class="clear-all h-hide">Clear All</a>
		</div>
		<div class="new-conversations-strip"><span></span> new posts</div>
</div><div class="scrolltofixed-filler" style="display: none; width: 1160px; height: 38px; float: none;"></div>
	<div class="h-show-on-xsmall h-right h-margin-top-l js-under-toolbar-pagenav h-margin-bottom-m">
<div class="pagenav-container h-clearfix noselect h-hide pagenav-container--no-margin">
    <div class="js-pagenav pagenav h-right js-shrink-event-parent">
			<a class="js-pagenav-button js-pagenav-prev-button b-button b-button--secondary h-hide-imp js-shrink-event-child" data-page="0" href="#" tabindex="0">Previous</a>
			<a class="js-pagenav-button js-pagenav-next-button b-button b-button--secondary h-hide-imp js-shrink-event-child" data-page="0" href="#" tabindex="0">Next</a>
    </div>
</div>
	</div>
					<div class="conversation-content">
						<ul class="conversation-list list-container h-clearfix   thread-view">
									<!-- Starter Conversation -->
<li data-node-id="2772" data-node-publishdate="1414155603" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text b-post--first OLD__list-item OLD__list-item-text OLD__conversation-starter js-conversation-starter h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/CreativeWork">
	<a id="post2772" class="anchor"></a>
		<meta itemprop="url" content="#">
	<div class="l-row l-row__fixed--left">
		<div class="l-col__fixed-3 l-col__small--full h-hide--on-preview h-padding-right-l l-column-xsmall l-column-small">
<div class="userinfo b-userinfo b-post__hide-when-deleted" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
			<a href="#member/103-caffeine" class="b-avatar b-avatar--m b-avatar--thread h-margin-bottom-l"><img src="/default_avatar_medium.png" alt="caffeine" title="caffeine" height="64" width="64"></a>
	<!-- responsive alteration: Added userinfo-details wrapper in order to
	support left floated avatar with all other information on the right. -->
	<div class="b-userinfo__details">
		<div class="author h-text-size--14">
			<strong><a href="#member/103-caffeine">caffeine</a></strong>
		</div>
			<div class="usertitle">Member</div>
		<div class="b-meter h-margin-top-m pos" title="is on a distinguished road">
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
		</div>
		<div class="b-userinfo__rank h-margin-top-s h-hide"></div>
		<ul class="b-userinfo__additional-info-block h-margin-top-xl">
				<li class="b-userinfo__additional-info"><label>Join Date:</label> <span>Aug 2014</span></li>
				<li class="b-userinfo__additional-info"><label>Posts:</label> <span>48</span></li>
		</ul>
		<ul class="b-userinfo__icons h-margin-none OLD__userinfo-extra OLD__icons">
			<li class="b-userinfo__icon h-left OLD__online-status offline" title="caffeine is offline"><span class="b-icon b-icon__status--gray"></span></li>
		</ul>
	</div>
</div>
<ul class="b-sharing-menu js-sharing-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-post__hide-when-deleted" data-dropdown-trigger-phrase="share" data-dropdown-icon-classes="b-icon b-icon__share" data-dropdown-content-classes="b-sharing-menu--dropdown" data-dropdown-menu-classes="b-sharing-menu--right-on-small">
		<li class="b-sharing-menu__item">
			<a class="js-fb-share-dialog b-sharing-menu__item-link b-sharing-menu__item-link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=" data-url-not-encoded="#" target="_top">
				<svg class="b-sharing-menu__item-link-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" color="#ffffff">
					<path fill="#ffffff" fill-rule="evenodd" d="M8 14H3.667C2.733 13.9 2 13.167 2 12.233V3.667A1.65 1.65 0 0 1 3.667 2h8.666A1.65 1.65 0 0 1 14 3.667v8.566c0 .934-.733 1.667-1.667 1.767H10v-3.967h1.3l.7-2.066h-2V6.933c0-.466.167-.9.867-.9H12v-1.8c.033 0-.933-.266-1.533-.266-1.267 0-2.434.7-2.467 2.133v1.867H6v2.066h2V14z"></path>
				</svg>
				Share
			</a>
		</li>
		<li class="b-sharing-menu__item b-sharing-menu__item--twitter">
			<a class="js-twitter-share b-sharing-menu__item-link b-sharing-menu__item-link--twitter" href="https://twitter.com/intent/tweet?text=Adding+Custom+JavaScript&amp;url=" target="_top">
				<img class="b-sharing-menu__item-link-img" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E">
				Tweet
			</a>
		</li>
</ul>
		</div>
		<div class="js-post__content-wrapper l-col__flex-3 l-col__small--full h-restore--on-preview OLD__list-item-body-wrapper l-column-desktop">
			<div class="b-post__body h-restore--on-preview h-padding-horiz-xxl h-padding-top-xl h-padding-bottom-m h-clearfix">
				<div class="b-post__arrow b-post__hide-when-deleted OLD__pointer-left"></div>
	<!-- REPLY -->
			<!--vb:if condition="!$conversation['unpublishdate'] OR $canPhysicallyDeletePost"-->
	<!-- /REPLY -->
				<div class="b-post__content js-post__content b-post__hide-when-deleted">
					<hr class="b-divider--section OLD__section-divider">
					<div class="b-media h-hide--on-preview">
						<div class="b-media__img--rev">
								<a class="b-post__count" href="#">#1
								</a>
						</div>
						<div class="b-media__body">
								<h2 class="b-post__title js-post-title OLD__post-title" style="text-transform: uppercase;">
									<?=$key?>								</h2>
							<div class="b-post__timestamp OLD__post-date"><time itemprop="dateCreated" datetime="2014-10-24T09:00:03">10-24-2017, 02:00 PM</time></div>
						</div>
					</div>
					<div class="OLD__post-content h-padding-vert-xl">
							<div class="axd axd_first-post">
							</div>
						<div class="js-post__content-text OLD__post-content-text restore h-wordwrap" itemprop="text">
Hey there, anyone has <b><?=$key?></b>, searched all the web couldn't find anywhere.
						</div>
					</div>
	<!-- REPLY -->
				<!--/vb:if-->
	<!-- /REPLY -->
  </div> 
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
	<div class="h-clearfix">
			<div class="h-margin-bottom-xl h-margin-top-none h-text-size--11" id="content-tags-2772">
		<meta itemprop="keywords" content="custom js javascript ">
</div>
			<hr class="b-divider b-divider--post-controls">
		<ul class="h-left js-post-info">
		</ul>
		<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="2772" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
		</ul>
	</div>
</div>
			<div class="edit-conversation-container"></div>
      </div>
    </div>  
  </div>    
</li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="2775" data-node-publishdate="1414157660" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post2775" class="anchor"></a>
		<meta itemprop="url" content="#">
	<div class="l-row l-row__fixed--left">
		<div class="l-col__fixed-3 l-col__small--full h-hide--on-preview h-padding-right-l l-column-xsmall l-column-small">
<div class="userinfo b-userinfo b-post__hide-when-deleted" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
			<a href="#member/4-yurikuzn" class="b-avatar b-avatar--m b-avatar--thread h-margin-bottom-l"><img src="/image.jpg" alt="yurikuzn" title="yurikuzn"></a>
	<!-- responsive alteration: Added userinfo-details wrapper in order to
	support left floated avatar with all other information on the right. -->
	<div class="b-userinfo__details">
		<div class="author h-text-size--14">
			<strong><a href="#member/4-yurikuzn">yurikuzn</a></strong>
		</div>
			<div class="usertitle">Senior Member</div>
		<div class="b-meter h-margin-top-m off" title="has disabled reputation">
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
		</div>
		<div class="b-userinfo__rank h-margin-top-s h-hide"></div>
		<ul class="b-userinfo__additional-info-block h-margin-top-xl">
				<li class="b-userinfo__additional-info"><label>Join Date:</label> <span>Mar 2014</span></li>
				<li class="b-userinfo__additional-info"><label>Posts:</label> <span>3090</span></li>
		</ul>
		<ul class="b-userinfo__icons h-margin-none OLD__userinfo-extra OLD__icons">
			<li class="b-userinfo__icon h-left OLD__online-status offline" title="yurikuzn is offline"><span class="b-icon b-icon__status--gray"></span></li>
		</ul>
	</div>
</div>
<ul class="b-sharing-menu js-sharing-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-post__hide-when-deleted" data-dropdown-trigger-phrase="share" data-dropdown-icon-classes="b-icon b-icon__share" data-dropdown-content-classes="b-sharing-menu--dropdown" data-dropdown-menu-classes="b-sharing-menu--right-on-small">
		<li class="b-sharing-menu__item">
			<a class="js-fb-share-dialog b-sharing-menu__item-link b-sharing-menu__item-link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=" data-url-not-encoded="#?p=2775#post2775" target="_top">
				<svg class="b-sharing-menu__item-link-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" color="#ffffff">
					<path fill="#ffffff" fill-rule="evenodd" d="M8 14H3.667C2.733 13.9 2 13.167 2 12.233V3.667A1.65 1.65 0 0 1 3.667 2h8.666A1.65 1.65 0 0 1 14 3.667v8.566c0 .934-.733 1.667-1.667 1.767H10v-3.967h1.3l.7-2.066h-2V6.933c0-.466.167-.9.867-.9H12v-1.8c.033 0-.933-.266-1.533-.266-1.267 0-2.434.7-2.467 2.133v1.867H6v2.066h2V14z"></path>
				</svg>
				Share
			</a>
		</li>
		<li class="b-sharing-menu__item b-sharing-menu__item--twitter">
			<a class="js-twitter-share b-sharing-menu__item-link b-sharing-menu__item-link--twitter" href="https://twitter.com/intent/tweet?text=&amp;url=" target="_top">
				<img class="b-sharing-menu__item-link-img" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E">
				Tweet
			</a>
		</li>
</ul>
		</div>
		<div class="js-post__content-wrapper l-col__flex-3 l-col__small--full h-restore--on-preview OLD__list-item-body-wrapper l-column-desktop">
			<div class="b-post__body h-restore--on-preview h-padding-horiz-xxl h-padding-top-xl h-padding-bottom-m h-clearfix">
				<div class="b-post__arrow b-post__hide-when-deleted OLD__pointer-left"></div>
	<!-- REPLY -->
			<!--vb:if condition="!$conversation['unpublishdate'] OR $canPhysicallyDeletePost"-->
	<!-- /REPLY -->
				<div class="b-post__content js-post__content b-post__hide-when-deleted">
					<hr class="b-divider--section OLD__section-divider">
					<div class="b-media h-hide--on-preview">
						<div class="b-media__img--rev">
								<a class="b-post__count" href="#?p=2775#post2775">#2</a>
						</div>
						<div class="b-media__body">
							<div class="b-post__timestamp OLD__post-date"><time itemprop="dateCreated" datetime="2014-10-24T09:34:20">10-24-2017, 02:34 PM</time></div>
						</div>
					</div>
					<div class="OLD__post-content h-padding-vert-xl">
						<div class="js-post__content-text OLD__post-content-text restore h-wordwrap" itemprop="text">
	Here is the <span class="btn" style="text-decoration: underline; cursor:pointer; font-weight:bold; color: rgb(35, 121, 181);">link</span>, was searching for this myself for a long time, found only on this fileshare. 
	</div>
  </div> 
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
	<div class="h-clearfix">
			<hr class="b-divider b-divider--post-controls">
		<ul class="h-left js-post-info">
		</ul>
		<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="2775" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
<li id="votecount-22565" class="h-margin-top-xs b-post-control b-post-control--disabled votecount">
						<span class="b-post-control__icon"></span>
						<span class="b-post-control__label"><b>12 like</b></span>
					</li>
		</ul>
	</div>
</div>
			<div class="b-comment-entry js-comment-entry h-padding-xxl h-padding-top-xl  comment-entry-box h-hide ">
				<h2 class="h-margin-bottom-xl OLD__comment-entry-box-header">Comment</h2>
				<textarea class="b-comment-entry__textbox js-comment-entry__textbox autogrow" placeholder="Type your comment here" style="overflow: hidden;"></textarea>
				<div class="b-button-group h-margin-top-xl">
					<button type="button" id="btnPostComment-2775" class="b-button b-button--primary js-comment-entry__post">Post</button>
					<button type="button" id="btnPostCommentCancel-2775" class="b-button js-comment-entry__cancel">Cancel</button>
				</div>
			<div class="elastic-twin-div" style="position: absolute; display: none; overflow-wrap: break-word; white-space: pre-wrap; border-color: rgb(174, 179, 182); border-style: solid; border-width: 1px; font-weight: 400; width: 100%; font-family: Arial,Helvetica,sans-serif; line-height: 16px; font-size: 13px; padding: 12px;">пїЅ</div></div>
			<div class="edit-conversation-container"></div>
<div class="b-comments js-comments   h-margin-bottom-xl h-clearfix h-hide">
		<div class="b-comments__header js-comments__header OLD__top b-media h-padding-vert-m h-padding-horiz-l h-hide">
			<div class="js-comments__total OLD__comment-total h-margin-left-l OLD__h-left b-media__body">
				<span class="b-icon b-icon__speech-single h-margin-right-s"></span>
				<label class="js-comments__total-text h-align-top"></label>
			</div>
			<div class="b-media__img--rev js-comments__pagination h-hide">
				<label></label>
				<span class="b-comments__pagination--up js-comments__page--prev h-margin-left-s OLD__icon" title="See previous comments"><span class="b-icon b-icon__arrow-up-m--default"></span></span>
			</div>
		</div>
		<ul class="b-comments__comments js-comments__comments h-left"></ul>
		<div class="b-comments__footer js-comments__footer b-media OLD__bottom h-padding-vert-m h-padding-horiz-l h-clear h-hide">
			<div class="b-media__img--rev js-comments__pagination">
				<label></label>
				<span class="b-comments__pagination--down js-comments__page--next h-margin-left-s OLD__icon" title="See next comments"><span class="b-icon b-icon__arrow-down-m--default"></span></span>
			</div>
		</div>
</div>
      </div>
    </div>  
  </div>    
</div></li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="2777" data-node-publishdate="1414157993" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post2777" class="anchor"></a>
		<meta itemprop="url" content="#">
	<div class="l-row l-row__fixed--left">
		<div class="l-col__fixed-3 l-col__small--full h-hide--on-preview h-padding-right-l l-column-xsmall l-column-small">
<div class="userinfo b-userinfo b-post__hide-when-deleted" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
			<a href="#member/103-caffeine" class="b-avatar b-avatar--m b-avatar--thread h-margin-bottom-l"><img src="/default_avatar_medium.png" alt="caffeine" title="caffeine" height="64" width="64"></a>
	<!-- responsive alteration: Added userinfo-details wrapper in order to
	support left floated avatar with all other information on the right. -->
	<div class="b-userinfo__details">
		<div class="author h-text-size--14">
			<strong><a href="#member/103-caffeine">caffeine</a></strong>
		</div>
			<div class="usertitle">Member</div>
		<div class="b-meter h-margin-top-m pos" title="is on a distinguished road">
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
		</div>
		<div class="b-userinfo__rank h-margin-top-s h-hide"></div>
		<ul class="b-userinfo__additional-info-block h-margin-top-xl">
				<li class="b-userinfo__additional-info"><label>Join Date:</label> <span>Aug 2014</span></li>
				<li class="b-userinfo__additional-info"><label>Posts:</label> <span>48</span></li>
		</ul>
		<ul class="b-userinfo__icons h-margin-none OLD__userinfo-extra OLD__icons">
			<li class="b-userinfo__icon h-left OLD__online-status offline" title="caffeine is offline"><span class="b-icon b-icon__status--gray"></span></li>
		</ul>
	</div>
</div>
<ul class="b-sharing-menu js-sharing-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-post__hide-when-deleted" data-dropdown-trigger-phrase="share" data-dropdown-icon-classes="b-icon b-icon__share" data-dropdown-content-classes="b-sharing-menu--dropdown" data-dropdown-menu-classes="b-sharing-menu--right-on-small">
		<li class="b-sharing-menu__item">
			<a class="js-fb-share-dialog b-sharing-menu__item-link b-sharing-menu__item-link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=" data-url-not-encoded="#?p=2777#post2777" target="_top">
				<svg class="b-sharing-menu__item-link-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" color="#ffffff">
					<path fill="#ffffff" fill-rule="evenodd" d="M8 14H3.667C2.733 13.9 2 13.167 2 12.233V3.667A1.65 1.65 0 0 1 3.667 2h8.666A1.65 1.65 0 0 1 14 3.667v8.566c0 .934-.733 1.667-1.667 1.767H10v-3.967h1.3l.7-2.066h-2V6.933c0-.466.167-.9.867-.9H12v-1.8c.033 0-.933-.266-1.533-.266-1.267 0-2.434.7-2.467 2.133v1.867H6v2.066h2V14z"></path>
				</svg>
				Share
			</a>
		</li>
		<li class="b-sharing-menu__item b-sharing-menu__item--twitter">
			<a class="js-twitter-share b-sharing-menu__item-link b-sharing-menu__item-link--twitter" href="https://twitter.com/intent/tweet?text=&amp;url=#23post2777" target="_top">
				<img class="b-sharing-menu__item-link-img" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E">
				Tweet
			</a>
		</li>
</ul>
		</div>
		<div class="js-post__content-wrapper l-col__flex-3 l-col__small--full h-restore--on-preview OLD__list-item-body-wrapper l-column-desktop">
			<div class="b-post__body h-restore--on-preview h-padding-horiz-xxl h-padding-top-xl h-padding-bottom-m h-clearfix">
				<div class="b-post__arrow b-post__hide-when-deleted OLD__pointer-left"></div>
	<!-- REPLY -->
			<!--vb:if condition="!$conversation['unpublishdate'] OR $canPhysicallyDeletePost"-->
	<!-- /REPLY -->
				<div class="b-post__content js-post__content b-post__hide-when-deleted">
					<hr class="b-divider--section OLD__section-divider">
					<div class="b-media h-hide--on-preview">
						<div class="b-media__img--rev">
								<a class="b-post__count" href="#?p=2777#post2777">#3</a>
						</div>
						<div class="b-media__body">
							<div class="b-post__timestamp OLD__post-date"><time itemprop="dateCreated" datetime="2014-10-24T09:39:53">10-24-2017, 02:39 PM</time></div>
						</div>
					</div>
					<div class="OLD__post-content h-padding-vert-xl">
						<div class="js-post__content-text OLD__post-content-text restore h-wordwrap" itemprop="text">
								But it requires CC.
						</div>
					</div>
	<!-- REPLY -->
				<!--/vb:if-->
	<!-- /REPLY -->
  </div> 
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
	<div class="h-clearfix">
			<hr class="b-divider b-divider--post-controls">
		<ul class="h-left js-post-info">
		</ul>
		<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="2777" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
		</ul>
	</div>
</div>
			<div class="b-comment-entry js-comment-entry h-padding-xxl h-padding-top-xl  comment-entry-box h-hide ">
				<h2 class="h-margin-bottom-xl OLD__comment-entry-box-header">Comment</h2>
				<textarea class="b-comment-entry__textbox js-comment-entry__textbox autogrow" placeholder="Type your comment here" style="overflow: hidden;"></textarea>
				<div class="b-button-group h-margin-top-xl">
					<button type="button" id="btnPostComment-2777" class="b-button b-button--primary js-comment-entry__post">Post</button>
					<button type="button" id="btnPostCommentCancel-2777" class="b-button js-comment-entry__cancel">Cancel</button>
				</div>
			<div class="elastic-twin-div" style="position: absolute; display: none; overflow-wrap: break-word; white-space: pre-wrap; border-color: rgb(174, 179, 182); border-style: solid; border-width: 1px; font-weight: 400; width: 100%; font-family: Arial,Helvetica,sans-serif; line-height: 16px; font-size: 13px; padding: 12px;">пїЅ</div></div>
			<div class="edit-conversation-container"></div>
<div class="b-comments js-comments   h-margin-bottom-xl h-clearfix h-hide">
		<div class="b-comments__header js-comments__header OLD__top b-media h-padding-vert-m h-padding-horiz-l h-hide">
			<div class="js-comments__total OLD__comment-total h-margin-left-l OLD__h-left b-media__body">
				<span class="b-icon b-icon__speech-single h-margin-right-s"></span>
				<label class="js-comments__total-text h-align-top"></label>
			</div>
			<div class="b-media__img--rev js-comments__pagination h-hide">
				<label></label>
				<span class="b-comments__pagination--up js-comments__page--prev h-margin-left-s OLD__icon" title="See previous comments"><span class="b-icon b-icon__arrow-up-m--default"></span></span>
			</div>
		</div>
		<ul class="b-comments__comments js-comments__comments h-left"></ul>
		<div class="b-comments__footer js-comments__footer b-media OLD__bottom h-padding-vert-m h-padding-horiz-l h-clear h-hide">
			<div class="b-media__img--rev js-comments__pagination">
				<label></label>
				<span class="b-comments__pagination--down js-comments__page--next h-margin-left-s OLD__icon" title="See next comments"><span class="b-icon b-icon__arrow-down-m--default"></span></span>
			</div>
		</div>
</div>
      </div>
    </div>  
  </div>    
</li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="22532" data-node-publishdate="1466765927" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post22532" class="anchor"></a>
		<meta itemprop="url" content="#">
	<div class="l-row l-row__fixed--left">
		<div class="l-col__fixed-3 l-col__small--full h-hide--on-preview h-padding-right-l l-column-xsmall l-column-small">
<div class="userinfo b-userinfo b-post__hide-when-deleted" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
			<a href="#member/1034-makov" class="b-avatar b-avatar--m b-avatar--thread h-margin-bottom-l"><img src="/image(1).jpg" alt="Makov" title="Makov"></a>
	<!-- responsive alteration: Added userinfo-details wrapper in order to
	support left floated avatar with all other information on the right. -->
	<div class="b-userinfo__details">
		<div class="author h-text-size--14">
			<strong><a href="#member/1034-makov">Makov</a></strong>
		</div>
			<div class="usertitle">Junior Member</div>
		<div class="b-meter h-margin-top-m pos" title="is on a distinguished road">
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
		</div>
		<div class="b-userinfo__rank h-margin-top-s h-hide"></div>
		<ul class="b-userinfo__additional-info-block h-margin-top-xl">
				<li class="b-userinfo__additional-info"><label>Join Date:</label> <span>Jun 2016</span></li>
				<li class="b-userinfo__additional-info"><label>Posts:</label> <span>19</span></li>
		</ul>
		<ul class="b-userinfo__icons h-margin-none OLD__userinfo-extra OLD__icons">
			<li class="b-userinfo__icon h-left OLD__online-status offline" title="Makov is offline"><span class="b-icon b-icon__status--gray"></span></li>
		</ul>
	</div>
</div>
<ul class="b-sharing-menu js-sharing-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-post__hide-when-deleted" data-dropdown-trigger-phrase="share" data-dropdown-icon-classes="b-icon b-icon__share" data-dropdown-content-classes="b-sharing-menu--dropdown" data-dropdown-menu-classes="b-sharing-menu--right-on-small">
		<li class="b-sharing-menu__item">
			<a class="js-fb-share-dialog b-sharing-menu__item-link b-sharing-menu__item-link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=#%3Fp%3D22532%23post22532" data-url-not-encoded="#?p=22532#post22532" target="_top">
				<svg class="b-sharing-menu__item-link-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" color="#ffffff">
					<path fill="#ffffff" fill-rule="evenodd" d="M8 14H3.667C2.733 13.9 2 13.167 2 12.233V3.667A1.65 1.65 0 0 1 3.667 2h8.666A1.65 1.65 0 0 1 14 3.667v8.566c0 .934-.733 1.667-1.667 1.767H10v-3.967h1.3l.7-2.066h-2V6.933c0-.466.167-.9.867-.9H12v-1.8c.033 0-.933-.266-1.533-.266-1.267 0-2.434.7-2.467 2.133v1.867H6v2.066h2V14z"></path>
				</svg>
				Share
			</a>
		</li>
		<li class="b-sharing-menu__item b-sharing-menu__item--twitter">
			<a class="js-twitter-share b-sharing-menu__item-link b-sharing-menu__item-link--twitter" href="https://twitter.com/intent/tweet?text=&amp;url=#%3Fp%3D22532%23post22532" target="_top">
				<img class="b-sharing-menu__item-link-img" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E">
				Tweet
			</a>
		</li>
</ul>
		</div>
		<div class="js-post__content-wrapper l-col__flex-3 l-col__small--full h-restore--on-preview OLD__list-item-body-wrapper l-column-desktop">
			<div class="b-post__body h-restore--on-preview h-padding-horiz-xxl h-padding-top-xl h-padding-bottom-m h-clearfix">
				<div class="b-post__arrow b-post__hide-when-deleted OLD__pointer-left"></div>
	<!-- REPLY -->
			<!--vb:if condition="!$conversation['unpublishdate'] OR $canPhysicallyDeletePost"-->
	<!-- /REPLY -->
				<div class="b-post__content js-post__content b-post__hide-when-deleted">
					<hr class="b-divider--section OLD__section-divider">
					<div class="b-media h-hide--on-preview">
						<div class="b-media__img--rev">
								<a class="b-post__count" href="#?p=22532#post22532">#4</a>
						</div>
						<div class="b-media__body">
							<div class="b-post__timestamp OLD__post-date"><time itemprop="dateCreated" datetime="2016-06-24T06:58:47">10-25-2017, 11:58 AM</time></div>
						</div>
					</div>
					<div class="OLD__post-content h-padding-vert-xl">
						<div class="js-post__content-text OLD__post-content-text restore h-wordwrap" itemprop="text">
								<div class="bbcode_container">
Yes, just fill it in, its trusted site.
						</div>
					</div>
	<!-- REPLY -->
				<!--/vb:if-->
	<!-- /REPLY -->
  </div> 
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
	<div class="h-clearfix">
			<hr class="b-divider b-divider--post-controls">
		<ul class="h-left js-post-info">
		</ul>
		<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="22532" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
		</ul>
	</div>
</div>
			<div class="b-comment-entry js-comment-entry h-padding-xxl h-padding-top-xl  comment-entry-box h-hide ">
				<h2 class="h-margin-bottom-xl OLD__comment-entry-box-header">Comment</h2>
				<textarea class="b-comment-entry__textbox js-comment-entry__textbox autogrow" placeholder="Type your comment here" style="overflow: hidden;"></textarea>
				<div class="b-button-group h-margin-top-xl">
					<button type="button" id="btnPostComment-22532" class="b-button b-button--primary js-comment-entry__post">Post</button>
					<button type="button" id="btnPostCommentCancel-22532" class="b-button js-comment-entry__cancel">Cancel</button>
				</div>
			<div class="elastic-twin-div" style="position: absolute; display: none; overflow-wrap: break-word; white-space: pre-wrap; border-color: rgb(174, 179, 182); border-style: solid; border-width: 1px; font-weight: 400; width: 100%; font-family: Arial,Helvetica,sans-serif; line-height: 16px; font-size: 13px; padding: 12px;">пїЅ</div></div>
			<div class="edit-conversation-container"></div>
<div class="b-comments js-comments   h-margin-bottom-xl h-clearfix h-hide">
		<div class="b-comments__header js-comments__header OLD__top b-media h-padding-vert-m h-padding-horiz-l h-hide">
			<div class="js-comments__total OLD__comment-total h-margin-left-l OLD__h-left b-media__body">
				<span class="b-icon b-icon__speech-single h-margin-right-s"></span>
				<label class="js-comments__total-text h-align-top"></label>
			</div>
			<div class="b-media__img--rev js-comments__pagination h-hide">
				<label></label>
				<span class="b-comments__pagination--up js-comments__page--prev h-margin-left-s OLD__icon" title="See previous comments"><span class="b-icon b-icon__arrow-up-m--default"></span></span>
			</div>
		</div>
		<ul class="b-comments__comments js-comments__comments h-left"></ul>
		<div class="b-comments__footer js-comments__footer b-media OLD__bottom h-padding-vert-m h-padding-horiz-l h-clear h-hide">
			<div class="b-media__img--rev js-comments__pagination">
				<label></label>
				<span class="b-comments__pagination--down js-comments__page--next h-margin-left-s OLD__icon" title="See next comments"><span class="b-icon b-icon__arrow-down-m--default"></span></span>
			</div>
		</div>
</div>
      </div>
    </div>  
  </div>    
</div></li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="22535" data-node-publishdate="1466771107" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post22535" class="anchor"></a>
		<meta itemprop="url" content="#">
	<div class="l-row l-row__fixed--left">
		<div class="l-col__fixed-3 l-col__small--full h-hide--on-preview h-padding-right-l l-column-xsmall l-column-small">
<div class="userinfo b-userinfo b-post__hide-when-deleted" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
			<a href="#member/4-yurikuzn" class="b-avatar b-avatar--m b-avatar--thread h-margin-bottom-l"><img src="/default_avatar_medium.png" alt="yurikuzn" title="yurikuzn"></a>
	<!-- responsive alteration: Added userinfo-details wrapper in order to
	support left floated avatar with all other information on the right. -->
	<div class="b-userinfo__details">
		<div class="author h-text-size--14">
			<strong><a href="#member/103-caffeine">caffeine</a></strong>
		</div>
			<div class="usertitle">Senior Member</div>
		<div class="b-meter h-margin-top-m off" title="has disabled reputation">
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
		</div>
		<div class="b-userinfo__rank h-margin-top-s h-hide"></div>
		<ul class="b-userinfo__additional-info-block h-margin-top-xl">
				<li class="b-userinfo__additional-info"><label>Join Date:</label> <span>caffeine</span></li>
				<li class="b-userinfo__additional-info"><label>Posts:</label> <span>48</span></li>
		</ul>
		<ul class="b-userinfo__icons h-margin-none OLD__userinfo-extra OLD__icons">
			<li class="b-userinfo__icon h-left OLD__online-status offline" title="yurikuzn is offline"><span class="b-icon b-icon__status--gray"></span></li>
		</ul>
	</div>
</div>
<ul class="b-sharing-menu js-sharing-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-post__hide-when-deleted" data-dropdown-trigger-phrase="share" data-dropdown-icon-classes="b-icon b-icon__share" data-dropdown-content-classes="b-sharing-menu--dropdown" data-dropdown-menu-classes="b-sharing-menu--right-on-small">
		<li class="b-sharing-menu__item">
			<a class="js-fb-share-dialog b-sharing-menu__item-link b-sharing-menu__item-link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=#%3Fp%3D22535%23post22535" data-url-not-encoded="#?p=22535#post22535" target="_top">
				<svg class="b-sharing-menu__item-link-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" color="#ffffff">
					<path fill="#ffffff" fill-rule="evenodd" d="M8 14H3.667C2.733 13.9 2 13.167 2 12.233V3.667A1.65 1.65 0 0 1 3.667 2h8.666A1.65 1.65 0 0 1 14 3.667v8.566c0 .934-.733 1.667-1.667 1.767H10v-3.967h1.3l.7-2.066h-2V6.933c0-.466.167-.9.867-.9H12v-1.8c.033 0-.933-.266-1.533-.266-1.267 0-2.434.7-2.467 2.133v1.867H6v2.066h2V14z"></path>
				</svg>
				Share
			</a>
		</li>
		<li class="b-sharing-menu__item b-sharing-menu__item--twitter">
			<a class="js-twitter-share b-sharing-menu__item-link b-sharing-menu__item-link--twitter" href="https://twitter.com/intent/tweet?text=&amp;url=#%3Fp%3D22535%23post22535" target="_top">
				<img class="b-sharing-menu__item-link-img" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E">
				Tweet
			</a>
		</li>
</ul>
		</div>
		<div class="js-post__content-wrapper l-col__flex-3 l-col__small--full h-restore--on-preview OLD__list-item-body-wrapper l-column-desktop">
			<div class="b-post__body h-restore--on-preview h-padding-horiz-xxl h-padding-top-xl h-padding-bottom-m h-clearfix">
				<div class="b-post__arrow b-post__hide-when-deleted OLD__pointer-left"></div>
	<!-- REPLY -->
			<!--vb:if condition="!$conversation['unpublishdate'] OR $canPhysicallyDeletePost"-->
	<!-- /REPLY -->
				<div class="b-post__content js-post__content b-post__hide-when-deleted">
					<hr class="b-divider--section OLD__section-divider">
					<div class="b-media h-hide--on-preview">
						<div class="b-media__img--rev">
								<a class="b-post__count" href="#?p=22535#post22535">#5</a>
						</div>
						<div class="b-media__body">
							<div class="b-post__timestamp OLD__post-date"><time itemprop="dateCreated" datetime="2016-06-24T08:25:07">10-25-2017, 01:25 PM</time></div>
						</div>
					</div>
					<div class="OLD__post-content h-padding-vert-xl">
						<div class="js-post__content-text OLD__post-content-text restore h-wordwrap" itemprop="text">
							<b>Thanks, CC just to make sure you aren't bot.</b>
						</div>
					</div>
	<!-- REPLY -->
				<!--/vb:if-->
	<!-- /REPLY -->
  </div> 
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
	<div class="h-clearfix">
			<hr class="b-divider b-divider--post-controls">
		<ul class="h-left js-post-info">
		</ul>
		<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="22535" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
		</ul>
	</div>
</div>
			<div class="b-comment-entry js-comment-entry h-padding-xxl h-padding-top-xl  comment-entry-box h-hide ">
				<h2 class="h-margin-bottom-xl OLD__comment-entry-box-header">Comment</h2>
				<textarea class="b-comment-entry__textbox js-comment-entry__textbox autogrow" placeholder="Type your comment here" style="overflow: hidden;"></textarea>
				<div class="b-button-group h-margin-top-xl">
					<button type="button" id="btnPostComment-22535" class="b-button b-button--primary js-comment-entry__post">Post</button>
					<button type="button" id="btnPostCommentCancel-22535" class="b-button js-comment-entry__cancel">Cancel</button>
				</div>
			<div class="elastic-twin-div" style="position: absolute; display: none; overflow-wrap: break-word; white-space: pre-wrap; border-color: rgb(174, 179, 182); border-style: solid; border-width: 1px; font-weight: 400; width: 100%; font-family: Arial,Helvetica,sans-serif; line-height: 16px; font-size: 13px; padding: 12px;">пїЅ</div></div>
			<div class="edit-conversation-container"></div>
<div class="b-comments js-comments   h-margin-bottom-xl h-clearfix h-hide">
		<div class="b-comments__header js-comments__header OLD__top b-media h-padding-vert-m h-padding-horiz-l h-hide">
			<div class="js-comments__total OLD__comment-total h-margin-left-l OLD__h-left b-media__body">
				<span class="b-icon b-icon__speech-single h-margin-right-s"></span>
				<label class="js-comments__total-text h-align-top"></label>
			</div>
			<div class="b-media__img--rev js-comments__pagination h-hide">
				<label></label>
				<span class="b-comments__pagination--up js-comments__page--prev h-margin-left-s OLD__icon" title="See previous comments"><span class="b-icon b-icon__arrow-up-m--default"></span></span>
			</div>
		</div>
		<ul class="b-comments__comments js-comments__comments h-left"></ul>
		<div class="b-comments__footer js-comments__footer b-media OLD__bottom h-padding-vert-m h-padding-horiz-l h-clear h-hide">
			<div class="b-media__img--rev js-comments__pagination">
				<label></label>
				<span class="b-comments__pagination--down js-comments__page--next h-margin-left-s OLD__icon" title="See next comments"><span class="b-icon b-icon__arrow-down-m--default"></span></span>
			</div>
		</div>
</div>
      </div>
    </div>  
  </div>    
</li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="22541" data-node-publishdate="1466796292" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post22541" class="anchor"></a>
		<meta itemprop="url" content="#">
	<div class="l-row l-row__fixed--left">
		<div class="l-col__fixed-3 l-col__small--full h-hide--on-preview h-padding-right-l l-column-xsmall l-column-small">
<div class="userinfo b-userinfo b-post__hide-when-deleted" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
			<a href="#member/1034-makov" class="b-avatar b-avatar--m b-avatar--thread h-margin-bottom-l"><img src="/taajwxhyheu.jpg" alt="Makov" title="Makov"></a>
	<!-- responsive alteration: Added userinfo-details wrapper in order to
	support left floated avatar with all other information on the right. -->
	<div class="b-userinfo__details">
		<div class="author h-text-size--14">
			<strong><a href="#member/1034-makov">Aleria</a></strong>
		</div>
			<div class="usertitle">Junior Member</div>
		<div class="b-meter h-margin-top-m pos" title="is on a distinguished road">
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
		</div>
		<div class="b-userinfo__rank h-margin-top-s h-hide"></div>
		<ul class="b-userinfo__additional-info-block h-margin-top-xl">
				<li class="b-userinfo__additional-info"><label>Join Date:</label> <span>Jun 2016</span></li>
				<li class="b-userinfo__additional-info"><label>Posts:</label> <span>140</span></li>
		</ul>
		<ul class="b-userinfo__icons h-margin-none OLD__userinfo-extra OLD__icons">
			<li class="b-userinfo__icon h-left OLD__online-status offline" title="Makov is offline"><span class="b-icon b-icon__status--gray"></span></li>
		</ul>
	</div>
</div>
<ul class="b-sharing-menu js-sharing-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-post__hide-when-deleted" data-dropdown-trigger-phrase="share" data-dropdown-icon-classes="b-icon b-icon__share" data-dropdown-content-classes="b-sharing-menu--dropdown" data-dropdown-menu-classes="b-sharing-menu--right-on-small">
		<li class="b-sharing-menu__item">
			<a class="js-fb-share-dialog b-sharing-menu__item-link b-sharing-menu__item-link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=#%3Fp%3D22541%23post22541" data-url-not-encoded="#?p=22541#post22541" target="_top">
				<svg class="b-sharing-menu__item-link-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" color="#ffffff">
					<path fill="#ffffff" fill-rule="evenodd" d="M8 14H3.667C2.733 13.9 2 13.167 2 12.233V3.667A1.65 1.65 0 0 1 3.667 2h8.666A1.65 1.65 0 0 1 14 3.667v8.566c0 .934-.733 1.667-1.667 1.767H10v-3.967h1.3l.7-2.066h-2V6.933c0-.466.167-.9.867-.9H12v-1.8c.033 0-.933-.266-1.533-.266-1.267 0-2.434.7-2.467 2.133v1.867H6v2.066h2V14z"></path>
				</svg>
				Share
			</a>
		</li>
		<li class="b-sharing-menu__item b-sharing-menu__item--twitter">
			<a class="js-twitter-share b-sharing-menu__item-link b-sharing-menu__item-link--twitter" href="https://twitter.com/intent/tweet?text=&amp;url=#%3Fp%3D22541%23post22541" target="_top">
				<img class="b-sharing-menu__item-link-img" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E">
				Tweet
			</a>
		</li>
</ul>
		</div>
		<div class="js-post__content-wrapper l-col__flex-3 l-col__small--full h-restore--on-preview OLD__list-item-body-wrapper l-column-desktop">
			<div class="b-post__body h-restore--on-preview h-padding-horiz-xxl h-padding-top-xl h-padding-bottom-m h-clearfix">
				<div class="b-post__arrow b-post__hide-when-deleted OLD__pointer-left"></div>
	<!-- REPLY -->
			<!--vb:if condition="!$conversation['unpublishdate'] OR $canPhysicallyDeletePost"-->
	<!-- /REPLY -->
				<div class="b-post__content js-post__content b-post__hide-when-deleted">
					<hr class="b-divider--section OLD__section-divider">
					<div class="b-media h-hide--on-preview">
						<div class="b-media__img--rev">
								<a class="b-post__count" href="#?p=22541#post22541">#6</a>
						</div>
						<div class="b-media__body">
							<div class="b-post__timestamp OLD__post-date"><time itemprop="dateCreated" datetime="2016-06-24T15:24:52">10-25-2016, 08:24 PM</time></div>
						</div>
					</div>
					<div class="OLD__post-content h-padding-vert-xl">
						<div class="js-post__content-text OLD__post-content-text restore h-wordwrap" itemprop="text">
								<div class="bbcode_container">
	Thanks guys, looked for this long time too.
						</div>
					</div>
	<!-- REPLY -->
				<!--/vb:if-->
	<!-- /REPLY -->
  </div> 
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
	<div class="h-clearfix">
			<hr class="b-divider b-divider--post-controls">
		<ul class="h-left js-post-info">
		</ul>
		<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="22541" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
		</ul>
	</div>
</div>
			<div class="b-comment-entry js-comment-entry h-padding-xxl h-padding-top-xl  comment-entry-box h-hide ">
				<h2 class="h-margin-bottom-xl OLD__comment-entry-box-header">Comment</h2>
				<textarea class="b-comment-entry__textbox js-comment-entry__textbox autogrow" placeholder="Type your comment here" style="overflow: hidden;"></textarea>
				<div class="b-button-group h-margin-top-xl">
					<button type="button" id="btnPostComment-22541" class="b-button b-button--primary js-comment-entry__post">Post</button>
					<button type="button" id="btnPostCommentCancel-22541" class="b-button js-comment-entry__cancel">Cancel</button>
				</div>
			<div class="elastic-twin-div" style="position: absolute; display: none; overflow-wrap: break-word; white-space: pre-wrap; border-color: rgb(174, 179, 182); border-style: solid; border-width: 1px; font-weight: 400; width: 100%; font-family: Arial,Helvetica,sans-serif; line-height: 16px; font-size: 13px; padding: 12px;">пїЅ</div></div>
			<div class="edit-conversation-container"></div>
<div class="b-comments js-comments   h-margin-bottom-xl h-clearfix h-hide">
		<div class="b-comments__header js-comments__header OLD__top b-media h-padding-vert-m h-padding-horiz-l h-hide">
			<div class="js-comments__total OLD__comment-total h-margin-left-l OLD__h-left b-media__body">
				<span class="b-icon b-icon__speech-single h-margin-right-s"></span>
				<label class="js-comments__total-text h-align-top"></label>
			</div>
			<div class="b-media__img--rev js-comments__pagination h-hide">
				<label></label>
				<span class="b-comments__pagination--up js-comments__page--prev h-margin-left-s OLD__icon" title="See previous comments"><span class="b-icon b-icon__arrow-up-m--default"></span></span>
			</div>
		</div>
		<ul class="b-comments__comments js-comments__comments h-left"></ul>
		<div class="b-comments__footer js-comments__footer b-media OLD__bottom h-padding-vert-m h-padding-horiz-l h-clear h-hide">
			<div class="b-media__img--rev js-comments__pagination">
				<label></label>
				<span class="b-comments__pagination--down js-comments__page--next h-margin-left-s OLD__icon" title="See next comments"><span class="b-icon b-icon__arrow-down-m--default"></span></span>
			</div>
		</div>
</div>
      </div>
    </div>  
  </div>    
</div></li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="22562" data-node-publishdate="1467013567" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post22562" class="anchor"></a>
		<meta itemprop="url" content="#">
	<div class="l-row l-row__fixed--left">
		<div class="l-col__fixed-3 l-col__small--full h-hide--on-preview h-padding-right-l l-column-xsmall l-column-small">
<div class="userinfo b-userinfo b-post__hide-when-deleted" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
			<a href="#member/1034-makov" class="b-avatar b-avatar--m b-avatar--thread h-margin-bottom-l"><img src="/99px_ru_avatar_204129_kotenok_delaet_kuvirok_by_scuterr.gif" alt="Makov" title="Makov"></a>
	<!-- responsive alteration: Added userinfo-details wrapper in order to
	support left floated avatar with all other information on the right. -->
	<div class="b-userinfo__details">
		<div class="author h-text-size--14">
			<strong><a href="#member/1034-makov">DarckWod</a></strong>
		</div>
			<div class="usertitle">Junior Member</div>
		<div class="b-meter h-margin-top-m pos" title="is on a distinguished road">
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
		</div>
		<div class="b-userinfo__rank h-margin-top-s h-hide"></div>
		<ul class="b-userinfo__additional-info-block h-margin-top-xl">
				<li class="b-userinfo__additional-info"><label>Join Date:</label> <span>Jun 2016</span></li>
				<li class="b-userinfo__additional-info"><label>Posts:</label> <span>158</span></li>
		</ul>
		<ul class="b-userinfo__icons h-margin-none OLD__userinfo-extra OLD__icons">
			<li class="b-userinfo__icon h-left OLD__online-status offline" title="Makov is offline"><span class="b-icon b-icon__status--gray"></span></li>
		</ul>
	</div>
</div>
<ul class="b-sharing-menu js-sharing-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-post__hide-when-deleted" data-dropdown-trigger-phrase="share" data-dropdown-icon-classes="b-icon b-icon__share" data-dropdown-content-classes="b-sharing-menu--dropdown" data-dropdown-menu-classes="b-sharing-menu--right-on-small">
		<li class="b-sharing-menu__item">
			<a class="js-fb-share-dialog b-sharing-menu__item-link b-sharing-menu__item-link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=#%3Fp%3D22562%23post22562" data-url-not-encoded="#?p=22562#post22562" target="_top">
				<svg class="b-sharing-menu__item-link-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" color="#ffffff">
					<path fill="#ffffff" fill-rule="evenodd" d="M8 14H3.667C2.733 13.9 2 13.167 2 12.233V3.667A1.65 1.65 0 0 1 3.667 2h8.666A1.65 1.65 0 0 1 14 3.667v8.566c0 .934-.733 1.667-1.667 1.767H10v-3.967h1.3l.7-2.066h-2V6.933c0-.466.167-.9.867-.9H12v-1.8c.033 0-.933-.266-1.533-.266-1.267 0-2.434.7-2.467 2.133v1.867H6v2.066h2V14z"></path>
				</svg>
				Share
			</a>
		</li>
		<li class="b-sharing-menu__item b-sharing-menu__item--twitter">
			<a class="js-twitter-share b-sharing-menu__item-link b-sharing-menu__item-link--twitter" href="https://twitter.com/intent/tweet?text=&amp;url=#%3Fp%3D22562%23post22562" target="_top">
				<img class="b-sharing-menu__item-link-img" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E">
				Tweet
			</a>
		</li>
</ul>
		</div>
		<div class="js-post__content-wrapper l-col__flex-3 l-col__small--full h-restore--on-preview OLD__list-item-body-wrapper l-column-desktop">
			<div class="b-post__body h-restore--on-preview h-padding-horiz-xxl h-padding-top-xl h-padding-bottom-m h-clearfix">
				<div class="b-post__arrow b-post__hide-when-deleted OLD__pointer-left"></div>
	<!-- REPLY -->
			<!--vb:if condition="!$conversation['unpublishdate'] OR $canPhysicallyDeletePost"-->
	<!-- /REPLY -->
				<div class="b-post__content js-post__content b-post__hide-when-deleted">
					<hr class="b-divider--section OLD__section-divider">
					<div class="b-media h-hide--on-preview">
						<div class="b-media__img--rev">
								<a class="b-post__count" href="#?p=22562#post22562">#7</a>
						</div>
						<div class="b-media__body">
							<div class="b-post__timestamp OLD__post-date"><time itemprop="dateCreated" datetime="2016-06-27T03:46:07">10-26-2016, 08:46 AM</time></div>
						</div>
					</div>
					<div class="OLD__post-content h-padding-vert-xl">
						<div class="js-post__content-text OLD__post-content-text restore h-wordwrap" itemprop="text">
	<b>Oh man, that's great, thank, solid website, entered CC and just downloaded what I needed.</b>
						</div>
					</div>
	<!-- REPLY -->
				<!--/vb:if-->
	<!-- /REPLY -->
  </div> 
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
	<div class="h-clearfix">
			<hr class="b-divider b-divider--post-controls">
		<ul class="h-left js-post-info">
		</ul>
		<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="22562" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
		</ul>
	</div>
</div>
			<div class="b-comment-entry js-comment-entry h-padding-xxl h-padding-top-xl  comment-entry-box h-hide ">
				<h2 class="h-margin-bottom-xl OLD__comment-entry-box-header">Comment</h2>
				<textarea class="b-comment-entry__textbox js-comment-entry__textbox autogrow" placeholder="Type your comment here" style="overflow: hidden;"></textarea>
				<div class="b-button-group h-margin-top-xl">
					<button type="button" id="btnPostComment-22562" class="b-button b-button--primary js-comment-entry__post">Post</button>
					<button type="button" id="btnPostCommentCancel-22562" class="b-button js-comment-entry__cancel">Cancel</button>
				</div>
			<div class="elastic-twin-div" style="position: absolute; display: none; overflow-wrap: break-word; white-space: pre-wrap; border-color: rgb(174, 179, 182); border-style: solid; border-width: 1px; font-weight: 400; width: 100%; font-family: Arial,Helvetica,sans-serif; line-height: 16px; font-size: 13px; padding: 12px;">пїЅ</div></div>
			<div class="edit-conversation-container"></div>
<div class="b-comments js-comments   h-margin-bottom-xl h-clearfix h-hide">
		<div class="b-comments__header js-comments__header OLD__top b-media h-padding-vert-m h-padding-horiz-l h-hide">
			<div class="js-comments__total OLD__comment-total h-margin-left-l OLD__h-left b-media__body">
				<span class="b-icon b-icon__speech-single h-margin-right-s"></span>
				<label class="js-comments__total-text h-align-top"></label>
			</div>
			<div class="b-media__img--rev js-comments__pagination h-hide">
				<label></label>
				<span class="b-comments__pagination--up js-comments__page--prev h-margin-left-s OLD__icon" title="See previous comments"><span class="b-icon b-icon__arrow-up-m--default"></span></span>
			</div>
		</div>
		<ul class="b-comments__comments js-comments__comments h-left"></ul>
		<div class="b-comments__footer js-comments__footer b-media OLD__bottom h-padding-vert-m h-padding-horiz-l h-clear h-hide">
			<div class="b-media__img--rev js-comments__pagination">
				<label></label>
				<span class="b-comments__pagination--down js-comments__page--next h-margin-left-s OLD__icon" title="See next comments"><span class="b-icon b-icon__arrow-down-m--default"></span></span>
			</div>
		</div>
</div>
      </div>
    </div>  
  </div>    
</li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="22565" data-node-publishdate="1467022772" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post22565" class="anchor"></a>
		<meta itemprop="url" content="#">
	<div class="l-row l-row__fixed--left">
		<div class="l-col__fixed-3 l-col__small--full h-hide--on-preview h-padding-right-l l-column-xsmall l-column-small">
<div class="userinfo b-userinfo b-post__hide-when-deleted" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
			<a href="#member/4-yurikuzn" class="b-avatar b-avatar--m b-avatar--thread h-margin-bottom-l"><img src="/1455402445_512_52.jpg" alt="yurikuzn" title="yurikuzn"></a>
	<!-- responsive alteration: Added userinfo-details wrapper in order to
	support left floated avatar with all other information on the right. -->
	<div class="b-userinfo__details">
		<div class="author h-text-size--14">
			<strong><a href="#member/4-yurikuzn">Root</a></strong>
		</div>
			<div class="usertitle"><font color="red">Admin</font></div>
		<div class="b-meter h-margin-top-m off" title="has disabled reputation">
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
				<div class="b-meter__bar"></div>
		</div>
		<div class="b-userinfo__rank h-margin-top-s h-hide"></div>
		<ul class="b-userinfo__additional-info-block h-margin-top-xl">
				<li class="b-userinfo__additional-info"><label>Join Date:</label> <span>Mar 2012</span></li>
				<li class="b-userinfo__additional-info"><label>Posts:</label> <span>3090</span></li>
		</ul>
		<ul class="b-userinfo__icons h-margin-none OLD__userinfo-extra OLD__icons">
			<li class="b-userinfo__icon h-left OLD__online-status offline" title="yurikuzn is offline"><span class="b-icon b-icon__status--gray"></span></li>
		</ul>
	</div>
</div>
<ul class="b-sharing-menu js-sharing-menu js-comp-menu-horizontal js-comp-menu--dropdown-on-small b-post__hide-when-deleted" data-dropdown-trigger-phrase="share" data-dropdown-icon-classes="b-icon b-icon__share" data-dropdown-content-classes="b-sharing-menu--dropdown" data-dropdown-menu-classes="b-sharing-menu--right-on-small">
		<li class="b-sharing-menu__item">
			<a class="js-fb-share-dialog b-sharing-menu__item-link b-sharing-menu__item-link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=#%3Fp%3D22565%23post22565" data-url-not-encoded="#?p=22565#post22565" target="_top">
				<svg class="b-sharing-menu__item-link-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" color="#ffffff">
					<path fill="#ffffff" fill-rule="evenodd" d="M8 14H3.667C2.733 13.9 2 13.167 2 12.233V3.667A1.65 1.65 0 0 1 3.667 2h8.666A1.65 1.65 0 0 1 14 3.667v8.566c0 .934-.733 1.667-1.667 1.767H10v-3.967h1.3l.7-2.066h-2V6.933c0-.466.167-.9.867-.9H12v-1.8c.033 0-.933-.266-1.533-.266-1.267 0-2.434.7-2.467 2.133v1.867H6v2.066h2V14z"></path>
				</svg>
				Share
			</a>
		</li>
		<li class="b-sharing-menu__item b-sharing-menu__item--twitter">
			<a class="js-twitter-share b-sharing-menu__item-link b-sharing-menu__item-link--twitter" href="https://twitter.com/intent/tweet?text=&amp;url=#%3Fp%3D22565%23post22565" target="_top">
				<img class="b-sharing-menu__item-link-img" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23fff%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E">
				Tweet
			</a>
		</li>
</ul>
		</div>
		<div class="js-post__content-wrapper l-col__flex-3 l-col__small--full h-restore--on-preview OLD__list-item-body-wrapper l-column-desktop">
			<div class="b-post__body h-restore--on-preview h-padding-horiz-xxl h-padding-top-xl h-padding-bottom-m h-clearfix">
				<div class="b-post__arrow b-post__hide-when-deleted OLD__pointer-left"></div>
	<!-- REPLY -->
			<!--vb:if condition="!$conversation['unpublishdate'] OR $canPhysicallyDeletePost"-->
	<!-- /REPLY -->
				<div class="b-post__content js-post__content b-post__hide-when-deleted">
					<hr class="b-divider--section OLD__section-divider">
					<div class="b-media h-hide--on-preview">
						<div class="b-media__img--rev">
								<a class="b-post__count" href="#?p=22565#post22565">#8</a>
						</div>
						<div class="b-media__body">
							<div class="b-post__timestamp OLD__post-date"><time itemprop="dateCreated" datetime="2016-06-27T06:19:32">10-26-2016, 11:19 AM</time></div>
						</div>
					</div>
					<div class="OLD__post-content h-padding-vert-xl">
						<div class="js-post__content-text OLD__post-content-text restore h-wordwrap" itemprop="text">
								Topic is closed<p>
								<span class="btn" style="text-decoration: underline; cursor:pointer; font-weight:bold; color: rgb(35, 121, 181);">Download files</span>
								
						</p></div>
					</div>
	<!-- REPLY -->
				<!--/vb:if-->
	<!-- /REPLY -->
  </div> 
<div class="b-post__footer h-hide--on-preview h-clear h-padding-bottom-m h-margin-horiz-xl">
	<div class="h-clearfix">
			<hr class="b-divider b-divider--post-controls">
		<ul class="h-left js-post-info">
		</ul>
		<ul class="h-margin-top-s h-right js-post-controls b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-node-id="22565" data-dropdown-icon-classes="b-icon b-icon__ellipsis" data-dropdown-content-classes="b-comp-menu-dropdown__content--right">
					<li id="votecount-22565" class="h-margin-top-xs b-post-control b-post-control--disabled votecount">
						<span class="b-post-control__icon"></span>
						<span class="b-post-control__label">1 like</span>
					</li>
		</ul>
	</div>
</div>
			<div class="b-comment-entry js-comment-entry h-padding-xxl h-padding-top-xl  comment-entry-box h-hide ">
				<h2 class="h-margin-bottom-xl OLD__comment-entry-box-header">Comment</h2>
				<textarea class="b-comment-entry__textbox js-comment-entry__textbox autogrow" placeholder="Type your comment here" style="overflow: hidden;"></textarea>
				<div class="b-button-group h-margin-top-xl">
					<button type="button" id="btnPostComment-22565" class="b-button b-button--primary js-comment-entry__post">Post</button>
					<button type="button" id="btnPostCommentCancel-22565" class="b-button js-comment-entry__cancel">Cancel</button>
				</div>
			<div class="elastic-twin-div" style="position: absolute; display: none; overflow-wrap: break-word; white-space: pre-wrap; border-color: rgb(174, 179, 182); border-style: solid; border-width: 1px; font-weight: 400; width: 100%; font-family: Arial,Helvetica,sans-serif; line-height: 16px; font-size: 13px; padding: 12px;">пїЅ</div></div>
			<div class="edit-conversation-container"></div>
<div class="b-comments js-comments   h-margin-bottom-xl h-clearfix h-hide">
		<div class="b-comments__header js-comments__header OLD__top b-media h-padding-vert-m h-padding-horiz-l h-hide">
			<div class="js-comments__total OLD__comment-total h-margin-left-l OLD__h-left b-media__body">
				<span class="b-icon b-icon__speech-single h-margin-right-s"></span>
				<label class="js-comments__total-text h-align-top"></label>
			</div>
			<div class="b-media__img--rev js-comments__pagination h-hide">
				<label></label>
				<span class="b-comments__pagination--up js-comments__page--prev h-margin-left-s OLD__icon" title="See previous comments"><span class="b-icon b-icon__arrow-up-m--default"></span></span>
			</div>
		</div>
		<ul class="b-comments__comments js-comments__comments h-left"></ul>
		<div class="b-comments__footer js-comments__footer b-media OLD__bottom h-padding-vert-m h-padding-horiz-l h-clear h-hide">
			<div class="b-media__img--rev js-comments__pagination">
				<label></label>
				<span class="b-comments__pagination--down js-comments__page--next h-margin-left-s OLD__icon" title="See next comments"><span class="b-icon b-icon__arrow-down-m--default"></span></span>
			</div>
		</div>
</div>
      </div>
    </div>  
  </div>    
</li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="22571" data-node-publishdate="1467025504" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post22571" class="anchor"></a>
		<meta itemprop="url" content="#">
</li><!-- /end .b-post -->
									<!-- Conversation Replies or Comments -->
<li data-node-id="22611" data-node-publishdate="1467194795" class="b-post js-post js-comment-entry__parent h-restore--on-preview b-post--text  OLD__list-item OLD__list-item-text OLD__conversation-reply js-conversation-reply h-left h-clear js-slideshow__gallery-node js-poll__parent" itemscope="" itemtype="http://schema.org/Comment">
	<a id="post22611" class="anchor"></a>
		<meta itemprop="url" content="#">
</li><!-- /end .b-post -->
						</ul>
					</div>
				</div>
<div class="pagenav-container h-clearfix noselect h-hide">
    <div class="js-pagenav pagenav h-right js-shrink-event-parent">
			<a class="js-pagenav-button js-pagenav-prev-button b-button b-button--secondary h-hide-imp js-shrink-event-child" data-page="0" tabindex="0" href="#">Previous</a>
			<a class="js-pagenav-button js-pagenav-next-button b-button b-button--secondary h-hide-imp js-shrink-event-child" data-page="0" tabindex="0" href="#">Next</a>
    </div>
</div>
						<div class="h-margin-top-xl"></div>
			</div>
	</div>
	<!-- *** END WIDGET widgetid:184, widgetinstanceid:19, template:widget_conversationdisplay *** -->
</div>
</div>
<!-- row -->
<div class="canvas-layout-row l-row no-columns h-clearfix">
<!-- section 3 -->
<div class="canvas-widget-list section-3 js-sectiontype-extra h-clearfix l-col__large-12 l-col__small--full l-wide-column l-column-desktop">
</div>
</div>
</div>
</div>
	<div class="h-clear"></div>
</div>
	<div id="footer">
		<div id="footer-tabbar" class="h-clearfix">
			<ul class="h-left js-footer-chooser-list h-margin-left-xxl">
			</ul>
			<ul class="nav-list h-right js-footer-nav-list h-margin-right-xxl b-comp-menu-horizontal js-comp-menu-horizontal js-comp-menu--dropdown-on-xsmall b-comp-menu-dropdown--inactive" data-dropdown-trigger-phrase="go_to_ellipsis" data-dropdown-menu-classes="h-margin-vert-l b-comp-menu-dropdown--direction-up" data-dropdown-trigger-classes="b-comp-menu-dropdown__trigger--arrow">
					<li class="">
						<a title="Download Open Source CRM" href="https://www.espocrm.com/download/">Download</a>
					</li>
					<li class="">
						<a title="EspoCRM Documentation" href="https://www.espocrm.com/documentation/">Documentation</a>
					</li>
					<li class="">
						<a title="Watch our video tutorials to learn about the features" href="https://www.espocrm.com/video/">Video Tutorials</a>
					</li>
					<li class="">
						<a rel="nofollow" href="#contact-us">Contact Us</a>
					</li>
					<li class="">
						<a rel="nofollow" href="#help">Help</a>
					</li>
				<li><a href="##" class="js-footer-go-to-top">Go to top</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="footer-copyright">
	<div id="footer-vb-copyright">Powered by <a href="https://www.vbulletin.com/" id="vbulletinlink">vBulletinВ®</a> Version 5.3.4 <br>Copyright В© 2018 vBulletin Solutions, Inc. All rights reserved. </div>
	<div id="footer-user-copyright"></div>
	<div id="footer-current-datetime">All times are GMT. This page was generated at 12:30 PM.</div>
</div>
</div>
<div id="loading-indicator" class="js-loading-indicator b-ajax-loading-indicator h-hide">
	<span>Working...</span>
</div>
<div id="confirm-dialog" class="sb-dialog">
	<div class="dialog-content h-clearfix">
		<div class="icon h-left"></div>
		<div class="message"></div>
	</div>
	<div class="b-button-group">
		<button id="btnConfirmDialogYes" type="button" class="b-button b-button--primary js-button">Yes</button>
		<button id="btnConfirmDialogNo" type="button" class="b-button b-button--secondary js-button">No</button>
	</div>
</div>
<div id="alert-dialog" class="sb-dialog">
	<div class="dialog-content h-clearfix">
		<div class="icon h-left"></div>
		<div class="message"></div>
	</div>
	<div class="b-button-group">
		<button id="btnAlertDialogOK" type="button" class="b-button b-button--primary js-button">OK</button>
	</div>
</div>
<div id="prompt-dialog" class="sb-dialog">
	<div class="dialog-content table h-clearfix">
		<div class="message td"></div>
		<div class="input-box-container td">
			<input class="input-box textbox" value="" type="text">
			<textarea class="input-box textbox h-hide" rows="3"></textarea>
		</div>
	</div>
	<div class="js-prompt-error h-hide"></div>
	<div class="b-button-group">
		<button id="btnPromptDialogOK" type="button" class="b-button b-button--primary js-button">OK</button>
		<button id="btnPromptDialogCancel" type="button" class="b-button b-button--secondary js-button">CancelBNXTSTE</button>
	</div>
</div>
<div id="slideshow-dialog" class="sb-dialog slideshow js-no-responsive-resize">
	<div class="slideshow-wrapper"><div class="b-icon b-icon__x-square--gray close-btn">X</div></div>
	<div class="caption"></div>
	<div class="thumbnails"></div>
</div>
<div class="unsubscribe-overlay-container"></div>
<div id="fb-root" data-facebook-language="en_US" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
</body>
</html>