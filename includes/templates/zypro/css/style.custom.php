<?php 
$color = $_GET['color']; 
$color = "#".$color; 
header("Content-type: text/css", true);
?>

/* login */
.inputwrapper button { background: #d3401e; border-color: #b02808; }
.inputwrapper button:hover { background: #b02808; border-color: #a42406; }

/* background */

body.loginpage,
.header,
.leftmenu .nav-tabs.nav-stacked > li.active > a,
.leftmenu .nav-tabs.nav-stacked > li.active > a:hover,
.shortcuts li a,
.widgettitle,
.mediamgr .mediamgr_rightinner h4,
.messagemenu,
.msglist li.selected,
.wizard .hormenu li a.done,
.wizard .hormenu li a.selected,
.actionBar a:hover,
.actionBar a:hover,
.wizard .tabbedmenu,
.nav-tabs > .active > a:focus,
.tabbable > .nav-tabs,
.btn-primary, .btn-primary:link,
.nav-tabs > li > a:hover, .nav-tabs > li > a:focus,
.nav-pills > .active > a,
.nav-pills > .active > a:hover,
.nav-pills > .active > a:focus,
.tabs-right .nav-tabs,
.tabs-right > .nav-tabs > li > a,
.tabs-left .nav-tabs,
.tabs-left > .nav-tabs > li > a,
.progress-primary .bar,
.tab-primary.ui-tabs .ui-tabs-nav,
.ui-datepicker-calendar td.ui-datepicker-today a,
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover,
.nav-tabs > .active > a:focus,
.nav-list > .active > a,
.nav-list > .active > a:hover,
.nav-list > .active > a:focus,
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled],
.btn-group.open .btn-primary.dropdown-toggle,
.fc-widget-header,
.fc-widget-header.fc-agenda-gutter.fc-last
{ background-color: <?php echo $color; ?>; }


.loginpanelinner {
	background-color: <?php echo $color; ?> !important;
}

.header .logo {
	background-color: <?php echo $color; ?> !important;
}

/* color */

a,a:hover,a:link,a:active,a:focus,
.pageicon,
.pagetitle h1,
.userlist li .uinfo h5,
.messagemenu ul li.active a,
.msglist li h4,
.actionBar a,
.actionBar a.buttonDisabled,
.wizard .tabbedmenu li a.selected,
.wizard .tabbedmenu li a.done,
.tabbable > .nav-tabs > li.active > a,
.btn-circle.btn-primary, .btn-circle.btn-primary:hover, .btn-circle.btn-primary:focus,
.btn-circle.btn-primary:active, .btn-circle.btn-primary.active, 
.btn-circle.btn-primary.disabled, .btn-circle.btn-primary[disabled],
.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover,
.tabs-right > .nav-tabs .active > a:focus,
.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus
{ color: <?php echo $color; ?>; }


input[type='submit'], button { background-color:  <?php echo $color; ?>;  }
	
	
/* border color */

.headmenu .dropdown-menu,
.pageicon,
.widgetcontent,
.messagemenu ul li.active,
.messageleft,
.messageright,
.messagesearch,
.msgreply,
.wizard .hormenu li a,
.wizard .hormenu li:first-child a,
.stepContainer,
.actionBar,
.actionBar a,
.actionBar a.buttonDisabled,
.tabbable > .nav-tabs,
.tabbable > .tab-content,
.nav-tabs.nav-stacked > li > a:focus,
.btn-circle.btn-primary, .btn-circle.btn-primary:hover, .btn-circle.btn-primary:focus,
.btn-circle.btn-primary:active, .btn-circle.btn-primary.active, 
.btn-circle.btn-primary.disabled, .btn-circle.btn-primary[disabled],
.nav-tabs,
.nav-tabs > li > a:hover, .nav-tabs > li > a:focus,
.tabs-below .tab-content,
.tabs-below > .nav-tabs > li.active > a,
.tabs-right,
.tabs-left,
.tab-primary.ui-tabs,
.btn-primary, .btn-primary:link,
.nav-tabs.nav-stacked > li > a,
.nav-tabs.nav-stacked > li > a:hover,
.nav-tabs.nav-stacked > li > a:hover,
.nav-tabs.nav-stacked > li > a:focus,
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover,
.nav-tabs > .active > a:focus
{ border-color: <?php echo $color; ?>; }


.ui-datepicker-header { background-color: <?php echo $color; ?> !important; }
.ui-datepicker { border-color: <?php echo $color; ?> !important; }


/* extras */

.tabs-below > .nav-tabs > li.active > a { border-bottom: 1px solid <?php echo $color; ?> !important; }
.nav-list > li > a { color: #666; }
.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li { border-color: rgba(255,255,255,0.2); }
.leftmenu .nav-tabs.nav-stacked > li > a { border-color: #232323 !important; }
.leftmenu .nav-tabs.nav-stacked > li.active > a { border-color: rgba(0,0,0,0.1) !important; }

/* ie fix */

.no-rgba .headmenu > li { border-right: 1px solid #ca5f46; }
.no-rgba .headmenu > li:first-child { border-left: 1px solid #ca5f46; }


@media screen and (max-width: 480px) {
 
 .userloggedinfo ul li a:hover { background-color: <?php echo $color; ?>; }
 
  .userloggedinfo .userinfo,
  .wizard .hormenu li,
  .messageright { border-color: <?php echo $color; ?>; }

}



