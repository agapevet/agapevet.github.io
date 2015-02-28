




/*
     FILE ARCHIVED ON 19:56:41 Feb 28, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:59:31 Feb 28, 2015.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/



 /* Relative Path: /css/skins/global/global_common.css */ 


/* Common CSS for all skins. Copyright 2006-2010 Internet Matrix, Inc. */


/* ---------- begin global styles   ---------- */


body, a, br, div, form, h1, h2, h3, h4, h5, h6, input, label, object, ol, p, select, span, table, td, textarea, tr, ul {margin:0; padding:0;}

body.zoom_1 {-moz-transform:scale(1.2); -moz-transform-origin:0 0; -ms-transform:scale(1.2); -ms-transform-origin:0 0; transform:scale(1.2); transform-origin:0 0; zoom:1.2; zoom:1\0/;}
body.zoom_2 {-moz-transform:scale(1.4); -moz-transform-origin:0 0; -ms-transform:scale(1.4); -ms-transform-origin:0 0; transform:scale(1.4); transform-origin:0 0; zoom:1.4; zoom:1\0/;}

img {border:0;}

div[class="clear_float"] {clear:both;}
span[class="required"] {color:#ff0000;}
span[class^="err"] {color:#e31e1e;}

a[class="nolink"] {cursor:default;}
div[id$="_column"] a[class*="pdf"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -1200px; display:inline-block; margin-bottom:20px; padding-left:20px; line-height:16px;}
div[id$="_column"] a[class*="reader"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -1300px; display:block; margin-bottom:20px; padding-top:39px; width:140px; height:0; overflow:hidden;}
a[class*="flash"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -1500px; display:block; margin:10px auto; padding-top:39px; width:140px; height:0; overflow:hidden;}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {display:block; margin:0; padding:0;}

div[id="banner"] img {display:block;} /* Fixes unwanted padding under the website banner image when using an HTML5 DOCTYPE. */

input[type="text"],
input[type="password"],
textarea {outline:none; resize:none;}

*[class*="clearfix"]:before,
*[class*="clearfix"]:after {content:""; display:table;}
*[class*="clearfix"]:after {clear:both;}
*[class*="clearfix"] {*zoom:1;}


/* ---------- begin legacy styles - DO NOT REMOVE � SEE HOTFIX HFX-2008-03.doc   ---------- */


span[class="left"] {float:left; margin-right:20px;}
span[class="right"] {float:right; margin-left:20px;}
span[class="img-left"] {display:block; margin-right:10px; padding-bottom:10px; float:left;}
span[class="img-right"] {display:block; margin-left:10px; padding-bottom:10px; float:right;}
div[id$="_column"] span[class="img-left"] p,
div[id$="_column"] span[class="img-right"] p {margin-top:10px; font-size:10px;}


/* ---------- begin captions ---------- */


div[class="caption_left"] {margin-right:24px; width:200px; float:left;}
div[class="caption_right"] {margin-left:24px; width:200px; float:right;}
div[id$="_column"] div[class="caption_left"] p,
div[id$="_column"] div[class="caption_right"] p {margin:0; padding-top:12px; line-height:15px; font-size:10px; font-weight:bold;}


/* ---------- begin user login, user forgot password, & user registration forms ---------- */


form[name^="user_"] label {display:block; margin-bottom:4px;}
form[name^="user_"] input[name^="contact_"] {border:1px solid #c1cad2; padding:2px 4px;}
form[name^="user_"] input[type="checkbox"] {width:13px; height:13px; margin-right:4px; vertical-align:middle;}
form[name^="user_"] input[type="checkbox"] + span {vertical-align:middle;}
form[name^="user_"] input[type="submit"] {margin-top:6px;}
form[name^="user_"] select {border:1px solid #c1cad2; padding:1px; width:99%; vertical-align:middle;}

form[name^="user_"] div[class^="fieldset"] {clear:left;}
form[name^="user_"] div[class^="fieldset"] div {margin-bottom:12px; *margin-bottom:-5px; width:49%; float:left;}
form[name^="user_"] div[class^="fieldset"] div:first-child {margin-right:2%;}

form[name="user_add_contact"] div[class$="optional"] {display:none;}
form[name="user_add_contact"][class="showErr"] div[class$="optional"] {display:block;}

form[name^="user_"] div[id^="contact"][class^="fieldset"] {margin-bottom:12px;}
form[name^="user_"] div[id^="contact"][class^="fieldset"] select[name*="birthdate"] {width:16%;}

form[name="user_add_contact"] div[id$="subscription"] {padding-top:6px; *padding-top:4px;}
form[name="user_add_contact"] div[id$="subscription"] span[class^="checkbox"] {line-height:2;}
form[name="user_add_contact"] div[id$="subscription"] label {margin-bottom:12px;}

form[name="user_add_contact"] div[id$="verification"] {margin:12px 0;}
form[name="user_add_contact"] div[id$="verification"] img {
	display: block;
	margin-bottom: 15px;}
form[name="user_add_contact"] div[id$="verification"] input[name^="captcha_input"] {width:26%; display: block;}

form[name="user_login"] div,
form[name^="user_password"] div div {margin-bottom:12px; width:30%;}

div.single_column {
	display: block;
	margin-bottom: 10px;
}

div.single_column label {
	display: inline-block;
	width: 56%;
}
div.single_column input{
	display: inline-block;
	width: 40%;
}
div.single_column select{
	display: inline-block;
	width: 42%;
}

div.birthdate {
	display: inline-block;
	width: 43%;
}

div.birthdate select{	
	width: 46%;
}

/* ---------- begin header ---------- */	


/* div[id="banner"] img {visibility: hidden;} /* for javascript banner wiggle fix */


/* ---------- begin featured articles ---------- */


section[id="featured_articles"] {clear:both;}

article[class*="featured_article"] {display:inline-block; *display:inline; margin-top:18px; margin-right:-3px; width:48%; vertical-align:top; *zoom:1;}
article[class*="featured_article even"] {margin-left:4%;}
article[class*="featured_article"] img {margin-right:10px; width:75px; height:75px; float:left;}
div[id$="_column"] article[class*="featured_article"] p {margin:6px 0;}
article[class*="featured_article"] a[title^="View"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -125px -700px; display:inline-block; padding-left:20px; height:15px; line-height:15px;}
article[class*="featured_article"] a[title^="View"]:hover {background-position:-125px -600px;}


/* ---------- begin lead video attraction ---------- */


div.lead_video_attraction {background:#424242; margin:20px auto;}


/* ---------- begin slideshow ---------- */
div.slideshow_attraction div.slideshow ul{
	margin: 0;
	padding: 0;
}

div.slideshow_attraction div.slideshow ul li{
	margin: 0;
	padding: 0;
}

div.slideshow_attraction div.slideshow ul li a img{
	margin: auto;
}


/* ---------- begin lead generation form ---------- */


form[id^="lead_generation"] {margin:20px 0;}
form[id^="lead_generation"] label {display:inline-block; width:15%;}
form[id^="lead_generation"] input[type="text"] {border:1px solid #c1cad2; margin:0 4px 6px 0; padding:2px; width:144px; *vertical-align:top;}
form[id^="lead_generation"] img {display:block; margin:0 0 6px 15%; width:150px; height:50px;}
form[id^="lead_generation"] div[class^="submit"] {padding-left:15%;}


/* ---------- begin newsletter signup form ---------- */


div.no_int div.news_mod_usr_int {display:none;}

form.nws_sub_frm {padding:8px 12px 9px;}
form.nws_sub_frm span.errstring {display:block; clear:both;}

input.nws_usr_ipt {border:0; margin:4px 0; padding:2px; width:97.5%; height:14px; font-size:11px;}
label.nws_int_lbl {display:block;}
input.nws_cat_cbx {margin:4px 4px 0 0; width:13px; height:13px; float:left; clear:left;}
label.nws_cat_lbl {margin-top:4px; white-space:nowrap; float:left;}

div.news_mod_ver {width:120px; margin:0 auto;}
img.nws_ver_img {display:block; margin:6px 0; width:120px; height:40px;}
label.nws_ver_lbl {width:60px; float:left;}
input.nws_ver_ipt {border:0; padding:2px; width:56px; height:14px; font-size:11px; float:left;}

div.news_mod_sbmt {margin-top:13px; *margin-top:7px; text-align:center;}

/* ---------- begin legacy office hours ---------- */


table[id^="office"] {border-collapse:collapse; width:100%;}
table[id^="office"] td {border:1px solid #e3e4e9; padding:20px; text-align:center;}
table[id^="office"] thead td {background:#e3e4e9; font-weight:bold;}
table[id^="office"] tbody td:first-child {background:#f2f2f5; width:20%;}
table[id^="office"] tbody tr:hover td {background:#f2f2f5;}
table[id^="office"] tbody tr:hover td:first-child {background:#fff;}


/* ---------- begin office hours ---------- */


table[class$="hours"] {border-collapse:collapse; width:100%;}
table[class$="hours"] tr > * {border:1px solid #e3e4e9; padding:20px; text-align:center;}
table[class$="hours"] th {background:#e3e4e9;}
table[class$="hours"] td:first-child {background:#f2f2f5; width:20%;}
table[class$="hours"] tr:hover td {background:#f2f2f5;}
table[class$="hours"] tr:hover td:first-child {background:#fff;}


/* ---------- begin calender ---------- */


div[id*="_calendar_nav"] {background:#6796f2; margin-bottom:10px; padding:5px 0; position:relative; height:15px; line-height:14px; font-size:12px;}
div[id*="_calendar_nav"] > div > strong {background:#fff; display:inline-block; margin:0 5px; padding:0 5px; min-height:15px; vertical-align:top;}
div[id*="_calendar_nav"] > div:first-child {position:absolute; top:5px; left:5px;}
div[id*="_calendar_nav"] > div:first-child a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -100px; display:inline-block; width:15px; height:15px;}
div[id*="_calendar_nav"] > div:first-child a:hover {background-position:0 0;}
div[id*="_calendar_nav"] > div:first-child a ~ a {background-position:100% -300px;}
div[id*="_calendar_nav"] > div:first-child a ~ a:hover {background-position:100% -200px;}
div[id*="_calendar_nav"] > div:first-child a strong {display:none;}
div[id*="_calendar_nav"] > div:first-child + div {margin-left:83px; text-align:center;}
div[id*="_calendar_nav"] > div:first-child + div a {color:#fff; margin:0 6px;}
div[id*="_calendar_nav"] > div:first-child + div a:hover {color:#0046bd;}

div[id*="calendar_opt"] {background:#6796f2; color:#fff; padding:5px; height:15px; line-height:14px; font-size:12px; font-weight:bold; text-align:center;}
div[id$="_column"] div[id*="calendar_opt"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -500px; color:#fff; padding:0 20px; height:15px; font-weight:normal; text-decoration:none; float:left;}
div[id$="_column"] div[id*="calendar_opt"] a:hover {background-position:0 -400px;}
div[id$="_column"] div[id*="calendar_opt"] a ~ a {background-position:100% -700px; float:right;}
div[id$="_column"] div[id*="calendar_opt"] a ~ a:hover {background-position:100% -600px;}

table[id$="_calendar"] {border-collapse:collapse; width:100%; font-size:12px;}
div[id$="_column"] table[id$="_calendar"] p {margin:0; text-align:center;}
table[id$="_calendar"] th {background:#e3e4e9; border:1px solid #e3e4e9; height:25px; line-height:25px; font-weight:bold;}
table[id$="_calendar"] th span {display:none;}
table[id$="_calendar"] td {border:1px solid #e3e4e9; width:14.28%; height:68px;}
table[id$="_calendar"] td p[class="date"] {background:#f2f2f5; line-height:25px;}
table[id$="_calendar"] td p[class^="event_"] a {background:#8dc63f; color:#fff; display:inline-block; margin:10px auto; width:24px; height:24px; line-height:24px; text-decoration:none;}
table[id$="_calendar"] td p[class^="event_"] a:hover {background:#6796f2;}
table[id$="_calendar"] td div {background:#fff; border:1px solid #e3e4e9; border-right-width:6px; border-bottom-width:6px; cursor:pointer; margin:-44px 0 0 -1px; padding:2px 12px; position:absolute; width:180px; visibility:hidden; z-index:100;}
div[id$="_column"] table[id$="_calendar"] td div p {margin:10px 0; text-align:left;}

table[id$="_calendar"] td[class*="_event"] p[class="date"] {background:#8dc63f; color:#fff; font-weight:bold;}
table[id$="_calendar"] td[class*="_current"] p[class="date"] {background:#f09f0f; color:#fff; font-weight:bold;}


/* ---------- begin newsletter can't subscribe message ---------- */


div[id^="newsletter_"] h2 + p > * {display:none;}
div[id^="newsletter_"] h2 + p > strong {background:#e31e1e; color:#fff; display:block; margin:0 auto; margin-bottom:-94px; padding:14px; position:relative; width:122px; height:66px; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; overflow:hidden; z-index:100;}
div[id^="newsletter_"] h2 + p > strong a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -3400px; padding-top:10px; position:absolute; width:10px; height:0; top:6px; left:134px; overflow:hidden;}


/* ---------- begin google map & directions ---------- */


div[id^="map_"] {background:#fff; color:#000; padding:10px; line-height:18px; font-size:12px; font-family:Arial, Helvetica, sans-serif;}

div[id^="map_"] div[id^="top_"] {position:relative; height:22px; margin-bottom:10px;}
div[id^="map_"] div[id^="top_"] label {position:absolute; top:3px; left:-1px;}
div[id^="map_"] div[id^="top_"] label ~ label {left:198px;}
div[id^="map_"] div[id^="top_"] input {border:1px solid #c1cad2; padding:2px 4px; position:absolute; width:142px; top:0; left:38px;}
div[id^="map_"] div[id^="top_"] input ~ input {left:222px;}
div[id^="map_"] div[id^="top_"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -1700px; display:inline-block; padding-left:20px; position:absolute; line-height:16px; top:3px; right:0;}

div[id^="map_"] div[id="map"] {background:#d9d9d9; height:300px;}

div[id^="map_"] div[id^="bottom_"] {margin-top:10px; position:relative; height:16px; line-height:16px;}
div[id^="map_"] div[id^="bottom_"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -1800px; padding-left:20px; position:absolute; top:0; right:116px;}
div[id^="map_"] div[id^="bottom_"] a + a {background-position:0 -1900px; right:0;}

div[id^="map_"] table[class="adp-directions"] {width:100%;}


/* ---------- page options ---------- */


div#page_options {margin:0 auto; position:relative; text-align:center; clear:both;}
div#page_options li {margin:0 6px; display:inline-block; *display:inline;}

li.pOpt a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat; color:#fff; display:inline-block; padding-left:18px; height:16px; line-height:15px; text-decoration:none; vertical-align:middle;}
li.pOpt a.print_page {background-position:0 -2600px;}
li.pOpt a.send_friend {background-position:0 -2700px;}
li.pOpt a.email_us {background-position:0 -2800px;}
li.pOpt a.request_appointment {background-position:0 -2900px;}

li.zoomCtrl span.zmLbl {display:none;}
li.zoomCtrl a {background:#fff; border:1px solid #000; box-shadow:2px 2px 1px rgba(0,0,0,.3); display:inline-block; font-family:Verdana, Geneva, sans-serif; font-weight:bold; overflow:hidden; vertical-align:middle; text-decoration:none;}
li.zoomCtrl a.zoom_0 {font-size:11px; width:14px; height:14px; line-height:13px;}
li.zoomCtrl a.zoom_1 {font-size:14px; margin-left:4px; width:16px; height:16px; line-height:15px;}
li.zoomCtrl a.zoom_2 {font-size:16px; margin-left:4px; width:18px; height:18px; line-height:18px;}

:root li.zoomCtrl a.zoom_0 {line-height:14px \0/IE9;} /* IE9 */
:root li.zoomCtrl a.zoom_2 {line-height:17px \0/IE9;}  /* IE9 */


/* ---------- begin page options print popup ---------- */


body[id="print_page"] {background:#fff; border:0.375in solid #616265; margin:0; padding:0.675in; width:7.25in; line-height:15pt; font-family:Arial, Helvetica, sans-serif; font-size:10pt;}

div[id="print_options"] {position:absolute; top:1in; left:6.25in;}
div[id="print_options"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -1900px; color:#000; display:inline-block; margin-left:10px; padding-left:20px; line-height:16px; text-decoration:none;}
div[id="print_options"] a + a {background-position:0 -2000px;}

div[id="print_address"] {width:5in;}

div[id="print_content"] {border-top:1px dotted #616265; border-bottom:1px dotted #616265; margin:0.25in 0; padding:0.25in 0;}
div[id="print_content"] + p {margin:0; text-align:center;}


/* ---------- begin custom content module ---------- */ 


h2[class*="module_title"]:empty {display:none;}

div[class*="module_content"] {line-height:1.5;}
div[class*="module_content"] ol {list-style:decimal; margin-left:16px;}
div[class*="module_content"] ul {list-style:disc; margin-left:16px;}

div[id$="t_column"] div[class*="module_content"] a {color:#fff; text-decoration:underline;}


/* ---------- begin custom content module- exclusive offer ---------- */


div[class="exclusive_offer"] img[src$="save_medallion.png"],
div[class="exclusive_offer"] img[src$="special_offer.png"] {display:block; margin:0 auto -4px;}
div[class="exclusive_offer"] h3 {margin-bottom:6px; font-size:14px;}


/* ---------- begin custom content module - lead generation form ---------- */ 


div[class^="custom_"] form[id^="lead_generation"] {margin:6px 0 0;} /* override skin specific padding-top:6px; */
div[class^="custom_"] form[id^="lead_generation"] label {display:inline-block; margin-right:-4px; width:50%;}
div[class^="custom_"] form[id^="lead_generation"] input[type="text"] {border:0; margin:3px 0; *margin:2px 0; padding:2px; width:50%; *width:49.5%; height:14px; font-size:12px; vertical-align:top;}
div[class^="custom_"] form[id^="lead_generation"] span[class^="err"] {display:block; text-align:right;}
div[class^="custom_"] form[id^="lead_generation"] div[class^="verify"] {position:relative; padding-top:46px;}
div[class^="custom_"] form[id^="lead_generation"] div[class^="verify"] img {width:120px; height:40px; position:absolute; top:3px; right:0;}
div[class^="custom_"] form[id^="lead_generation"] div[class^="submit"] {padding:10px 0 3px; text-align:center;}


/* ---------- begin custom content module - client testimonial ---------- */ 


div[class="client_testimonial"] blockquote  {margin:0 0 6px;}
div[class="client_testimonial"] > p  {font-weight:bold;}


/* ---------- begin custom content module - follow us ---------- */ 


div[class="follow_us"] a[class*="icon"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/social_media_sprite.png?v=2015-02-19_16-38-15) no-repeat; display:inline-block; width:36px; height:36px;}
div[class="follow_us"] a[class*="icon"]:nth-last-of-type(n+2) {margin-right:-4px;} /* Fix for unwanted whitespace with display:inline-block */
div[class="follow_us"] a[class^="facebook"] {background-position:0 0;}
div[class="follow_us"] a[class^="rss"] {background-position:-36px 0;}
div[class="follow_us"] a[class^="twitter"] {background-position:-72px 0;}
div[class="follow_us"] a[class^="yelp"] {background-position:-108px 0;}
div[class="follow_us"] a[class^="linkedin"] {background-position:0 -37px;}
div[class="follow_us"] a[class^="google"] {background-position:-36px -37px;}
div[class="follow_us"] a[class^="bing"] {background-position:-72px -37px;}
div[class="follow_us"] a[class^="yahoo"] {background-position:-108px -37px;}
div[class="follow_us"] a[class^="youtube"] {background-position:-144px 0;}
div[class="follow_us"] a[class^="googleplus"] {background-position:-144px -37px;}
div[class="follow_us"] a[class^="pintrest"] {background-position:-180px 0;}
div[class="follow_us"] a[class*="icon"] span {display:none;}

div[class="follow_us"] p + div {margin-top:10px; line-height:0.75; text-align:center;}


/* ---------- begin custom content module - office hours ( with token reset ) ---------- */


div[class^="custom_"] div[class$="hours"] thead {display:none;} /* Hide thead. */
div[class^="custom_"] div[class$="hours"] td {background:none; border:0; padding:4px 2px;} /* Reset background & border */
div[class^="custom_"] div[class$="hours"] td:first-child {background:none; width:auto; font-weight:bold;} /* Reset background & width. */
div[class^="custom_"] div[class$="hours"] td:first-child span {display:none;} /* Abbreviate days. */

div[class^="custom_"] div[class$="hours"] table {border-collapse:collapse; width:100%;}
div[class^="custom_"] div[class$="hours"] table + p span {display:inline-block; margin-top:10px; margin-right:-3px; width:50%; text-align:center; vertical-align:middle;}
div[class^="custom_"] div[class$="hours"] table + p a {background:#6796f2; border-radius:4px; -webkit-border-radius:4px; display:block; color:#fff; margin-left:6px; padding:6px 0; line-height:normal; font-weight:bold; text-decoration:none;}


/* ---------- begin custom content module - email us ---------- */


* + div[class*="module_5"] {margin-top:20px;}

div[class="email_us"] {background:#f2f2f5 url(/web/20150228195641/http://agapevet.net/images/common/email_us.png?v=2015-02-19_16-38-15) no-repeat 16px 50%; border-radius:4px; padding:14px 110px 14px 114px; position:relative;}
div[class="email_us"] * {font-size:12px!important; font-weight:normal;}
div[class="email_us"] p {margin:10px 0 0!important;}

div[class="email_us"] a[class*="launch"] {
	background: #c83643; /* Old browsers */
	background: -moz-linear-gradient(top,  #c83643 0%, #8b252e 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#c83643), color-stop(100%,#8b252e)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #c83643 0%,#8b252e 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #c83643 0%,#8b252e 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #c83643 0%,#8b252e 100%); /* IE10+ */
	background: linear-gradient(top,  #c83643 0%,#8b252e 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c83643', endColorstr='#8b252e',GradientType=0 ); /* IE6-9 */
	color:#fff!important; border-radius:3px; box-shadow:0 2px 1px rgba(0,0,0,0.3); margin-top:-24px; position:absolute; top:50%; right:18px; width:74px; height:48px; line-height:48px; font-family:Tahoma, Geneva, sans-serif; font-size:13px!important; font-weight:bold; text-align:center; text-decoration:none!important; text-shadow:0 1px 1px rgba(0,0,0,0.3);
	}


/* ---------- begin custom content contact module ---------- */


div[class*="contact_module"] address {margin-bottom:12px; font-style:normal;}
div[class*="contact_module"] ul {margin-left:0; list-style:none;}
div[class*="contact_module"] a {display:inline-block; margin-top:5px; font-weight:bold;}
div[class*="contact_module"] p:first-of-type {margin-bottom:6px;}


/* ---------- begin blog ---------- */


div[id="blog_options"] {height:35px;}
div[id="blog_options"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -1100px; display:block; padding-left:18px; line-height:15px; float:right;}
div[id="blog_options"] a:hover {background-position:0 -1000px;}
div[id="blog_options"] a[id^="back"] {background-position:0 -500px;}
div[id="blog_options"] a[id^="back"]:hover {background-position:0 -400px;}
div[id="blog_options"] a[id^="rss"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -3500px; float:left;}
div[id="blog_options"] a[id^="rss"]:hover {background-position:0 -3500px;}

div[id="blog_archive"] {background:#e3e4e9; display:none; margin-bottom:20px; padding-bottom:20px; line-height:1; width:100%;}
div[id$="_column"] div[id="blog_archive"] h3 {background:#6796f2 url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 6px -2994px; color:#fff; padding:5px 25px; position:relative; height:15px; line-height:15px; font-size:12px;}
div[id$="_column"] div[id="blog_archive"] h3 a {color:#fff; position:absolute; top:4px; right:6px;}
div[id$="_column"] div[id="blog_archive"] h4 {margin:20px; font-size:14px;}
div[id$="_column"] div[id="blog_archive"] p {margin:0; word-spacing:3px; text-align:center;}

div[class="blog_post"] {border-bottom:1px dotted #808080; margin-bottom:20px;}
div[class="blog_post"] a[id^="rss"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -3500px; display:inline-block; padding-left:20px; height:15px; line-height:14px;}/*Temp until moved above blog post*/
div[class="blog_post"] div {margin-bottom:20px;}
div[id$="_column"] div[class="blog_post"] > p {margin:20px 0;}

h3.comment_title {border-bottom:1px dotted #808080; margin-bottom:20px; padding-bottom:20px;}
p[class="no_comments"] {border-bottom:1px dotted #808080; padding-bottom:20px;}

div[class="blog_comment"] {border-bottom:1px dotted #808080; margin-bottom:20px;}

form[id$="_comment"] {background:#e3e4e9; padding:20px; line-height:normal;}
div[id$="_column"] form[id$="_comment"] h3 {background:#6796f2 url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 6px -3095px; color:#fff; margin:-20px -20px 17px -20px; padding:5px 25px; height:15px; line-height:15px; font-size:12px;}
form[id$="_comment"] label {display:block; margin:6px 0;}
form[id$="_comment"] input[type=text] {border:1px solid #c1cad2; padding:2px 4px; width:335px;}
form[id$="_comment"] input[id="verification_code"] {width:80px; margin-bottom:10px;}
form[id$="_comment"] textarea {border:1px solid #c1cad2; padding:0 2px; overflow:auto;}
form[id$="_comment"] img {margin-top:10px;}
form[id$="_comment"] span[class^="err"] {display:block; margin-bottom:10px;}

form[id$="_comment"] input[type='submit'] {display:block; margin-top:5px;}

/* ---------- begin custom form ---------- */


form[id^="custom"] h3 {margin-bottom:10px;}

form[id^="custom"] #captcha + div {display:block;}
form[id^="custom"] div {margin-bottom:10px; display:inline-block;}
form[id^="custom"] div.object {margin-bottom:10px; clear:both;}
form[id^="custom"] div label {display:inline-block; padding-right:10px; width:190px; vertical-align:top;}

form[id^="custom"] input[type="text"] {border:1px solid #c1cad2; padding:2px 4px; width:200px;}
form[id^="custom"] input[id^="verification"] {width:142px;}
form[id^="custom"] select {border:1px solid #c1cad2; padding:2px; width:210px;}
form[id^="custom"] textarea {border:1px solid #c1cad2; padding:2px 4px; width:200px; height:100px; overflow:auto;}

form[id^="custom"] div.options {width:200px; line-height:1.5em;}
form[id^="custom"] div.options input[type="checkbox"],
form[id^="custom"] div.options input[type="radio"] {margin: 3px 4px 10px 0; width:13px; height:13px; vertical-align:top;}
form[id^="custom"] div.options label {width:165px;}

form[id^="custom"] div.upldBtn input {width:210;}

form[id^="custom"] div.customCaptcha div {display: block;}
form[id^="custom"] div.customCaptcha .verify img {margin:0 0 0 205px;}
form[id^="custom"] div.customCaptcha input[type="submit"] {margin-left:205px;}

form[id^="custom"] input[type="submit"] {cursor:pointer; display:block; margin:10px 0; padding:0 6px;}


/* ---------- begin custom module form ---------- */


div.cc_module_content form[id^="custom"] div.object {margin:7px 0;}
div.cc_module_content form[id^="custom"] h3 {margin:7px 0;}
div.cc_module_content form[id^="custom"] h3:first-of-type {margin-top:0;}
div.cc_module_content form[id^="custom"] label:first-child {display:block; margin-bottom:4px; width:auto;}
div.cc_module_content form[id^="custom"] input[type="text"] {-moz-box-sizing:border-box; box-sizing:border-box; width:100%; padding:1px 4px;}
div.cc_module_content form[id^="custom"] select {width:100%; padding:0;}
div.cc_module_content form[id^="custom"] textarea {-moz-box-sizing:border-box; box-sizing:border-box; display:block; width:100%; height:60px; padding:1px 4px;}

div.cc_module_content form[id^="custom"] div.object.checkbox,
div.cc_module_content form[id^="custom"] div.object.radio {margin:12px 0;}

div.cc_module_content form[id^="custom"] div.options {width:100%; margin:12px 0;}
div.cc_module_content form[id^="custom"] div.options div.option {margin:6px 0; position:relative;}
div.cc_module_content form[id^="custom"] div.options input {position:absolute; top:0; left:0;}
div.cc_module_content form[id^="custom"] div.options input + label {width:auto; padding-left:18px;}

div.cc_module_content form[id^="custom"] div.upldBtn {cursor:pointer; margin:8px 0 12px;}

div.cc_module_content form[id^="custom"] div.verify img {display:block; width:120px; height:40px;}
div.cc_module_content form[id^="custom"] input.verify {width:80px;}


/* ---------- begin exercise category view ---------- */


div[class="iexercise"] {border-bottom:1px dotted #808080; margin-bottom:16px; padding-bottom:20px; line-height:normal;}
div[id$="_column"] div[class="iexercise"] h4 {margin-bottom:17px; font-size:14px;}
div[id$="_column"] div[class="iexercise"] h4 a {text-decoration:none;}

div[id$="_column"] div[class="iexercise"] p {margin:0; position:relative;}
div[class="iexercise"] p a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -125px -700px; display:inline-block; padding-left:20px; position:absolute; top:118px; left:0; height:15px; line-height:15px;}
div[class="iexercise"] p a:hover {background-position:-125px -600px;}

div[class="iexercise"] table {border-collapse:collapse; margin:-108px 0 0 164px;}
div[class="iexercise"] thead {background:#e3e4e9; font-weight:bold; text-align:center;}
div[class="iexercise"] td {border:1px solid #e3e4e9; padding:6px 10px; width:50%;}


/* ---------- begin exercise window ---------- */


body[id^="exercise"] {background:#000;}
body[id^="exercise"] * {border:0; margin:0; padding:0; font-family:arial, helvetica, sans-serif; font-size:12px;}


/* ---------- begin exercise content ---------- */


div[id="exercise_content"] {background:#6186e8 url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_interface_sprite.png?v=2015-02-19_16-38-15) no-repeat; border:10px solid #000; color:#fff; margin:0 auto; width:660px; height:864px;}

div[id="exercise_panel"] {position:relative; width:660px; height:864px; float:left}
div[id="exercise_panel"] h1 {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_icon_sprite.png?v=2015-02-19_16-38-15) no-repeat 18px -72px; padding-left:49px; width:611px; height:68px; line-height:64px; font-size:16px; font-weight:normal;}
div[id="exercise_panel"] h1 strong {font-size:16px;}
div[id="exercise_panel"] h2 {margin:0 auto; width:640px; height:38px; line-height:36px; text-align:center;}
div[id="exercise_panel"] h2 strong {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_icon_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -328px; padding-left:22px; font-weight:normal;}
div[id="exercise_panel"] embed {display:block; margin:0 auto; width:640px; height:524px;}

div[id="exercise_panel"] ul {padding:0 24px; width:612px; height:37px;}
div[id="exercise_panel"] ul li {position:relative; width:155px; height:37px; line-height:36px; list-style:none; text-align:center; float:left;}
div[id="exercise_panel"] ul li a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_interface_sprite.png?v=2015-02-19_16-38-15) no-repeat -155px -874px; color:#fff; display:block; padding-right:5px; width:150px; height:37px; text-decoration:none;}
div[id="exercise_panel"] ul li a:hover {background-position:-310px -874px; position:absolute; height:58px; line-height:50px; top:0px; left:0px;}
div[id="exercise_panel"] ul li a[class^="sel"] {background-position:0 -874px; cursor:default; font-weight:bold;}
div[id="exercise_panel"] ul li a[class^="sel"]:hover {background-position:0 -874px; line-height:36px;}

div[id="exercise_panel"] div {padding:28px; width:604px; height:141px; line-height:18px; text-align:center; overflow:hidden;}
div[id="exercise_panel"] div table {border-collapse:collapse; margin:0 auto 20px auto;}
div[id="exercise_panel"] div table td {border:1px solid #fff; width:118px; vertical-align:middle;}
div[id="exercise_panel"] div table thead td {background:#4b72da; height:28px;}
div[id="exercise_panel"] div table tbody td {background:#799dff; height:58px;}
div[id="exercise_panel"] div[id$="instructions"] {padding:28px 10px; width:640px;}
div[id="exercise_panel"] div[id$="instructions"] div {padding:0 18px; text-align:left; overflow:auto;}
div[id="exercise_panel"] div[id$="instructions"] div h4,
div[id="exercise_panel"] div[id$="instructions"] div p {margin-bottom:18px;}


/* ---------- begin exercise content - prescription ---------- */


div[id="exercise_content"][class^="pre"] {width:900px;}

div[id="exercise_content"][class^="pre"] div[id="exercise_panel"] h1 {background-position:18px 18px; padding-left:52px; width:608px;}
div[id="exercise_content"][class^="pre"] div[id="exercise_panel"] h2 strong {background-position:0 -252px;}
div[id="exercise_content"][class^="pre"] div[id="exercise_panel"] a[id^="email"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_icon_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -176px; color:#fff; display:block; padding-left:18px; position:absolute; width:96px; height:16px; top:26px; right:13px;}

div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] {border-left:10px solid #000; position:relative; width:230px; height:864px; float:left;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] h3 {padding-top:16px; width:230px; height:65px; line-height:19px; font-weight:normal; text-align:center;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] h3 strong {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_icon_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -478px; display:block; margin:0 auto; padding-left:18px; width:162px; font-size:16px;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div {margin:0 auto; width:210px; height:780px; overflow:scroll;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div a {color:#fff; display:block; margin:0 0 20px 20px; width:154px;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div a:hover {color:#18378c;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div a img {background:#4b72da; display:block; margin:0 auto; width:144px; height:108px; opacity:0.5; -ms-filter:"alpha(opacity=50)"; filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity:0.5;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div a:hover img {opacity:1.0; -ms-filter:"alpha(opacity=100)"; filter:alpha(opacity=100); -moz-opacity:1.0; -khtml-opacity:1.0;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div a strong {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_icon_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -404px; display:block; margin:10px 5px 0 5px; padding-left:20px; font-weight:normal;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div a[class^="sel"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_interface_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -942px; padding-top:2px;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div a[class^="sel"]:hover {color:#fff; cursor:default;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div a[class^="sel"] img {border:1px solid #fff; opacity:1.0; -ms-filter:"alpha(opacity=100)"; filter:alpha(opacity=100); -moz-opacity:1.0; -khtml-opacity:1.0;}
div[id="exercise_content"][class^="pre"] div[id="prescription_panel"] div[id="scroll_mask"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/exercise_interface_sprite.png?v=2015-02-19_16-38-15) no-repeat -670px -844px; position:absolute; width:230px; height:20px; left:0; bottom:0; overflow:hidden;}


/* ---------- begin my account / my exercises ---------- */


table[class^="my_exercise"] {border-collapse:collapse; margin:10px 0; width:100%; font-size:12px;}
table[class^="my_exercise"] th {border:1px solid #e3e4e9; background:#e3e4e9; padding:5px 10px;}
table[class^="my_exercise"] td {border:1px solid #e3e4e9; padding:5px 10px;}


/* ---------- begin my account / my orders ---------- */


table[class^="order"] {border-collapse:collapse; width:100%; text-align:center;}
table[class^="order"] th {border:1px solid #e3e4e9; background:#e3e4e9; padding:5px 0;}
table[class^="order"] td {border:1px solid #e3e4e9; padding:5px 0; width:20%;}
table + table[class="order_details"] {margin-top:20px;}


/* ---------- begin store / category view ---------- */


form[id^="shop_add_product"] {border-bottom:1px dotted #808080; padding-bottom:20px;}
form[id^="shop_add_product"] + form[id^="shop_add_product"] {padding-top:20px;}

div[class$="_product"] {padding-left:120px; position:relative; min-height:100px;}
div[class$="_product"] img {position:absolute; width:100px; height:100px; top:0; left:0;}
div[class$="_product"] img + div[class^="product"] {margin-top:5px;}
div[class$="_product"] a[class^="add_"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -125px -700px; display:inline-block; cursor:pointer; padding-left:20px; height:15px; line-height:15px; text-decoration:underline;}
div[class$="_product"] a[class^="add_"]:hover {background-position:-125px -600px;}

div[class^="product"] label {display:inline-block; width:160px; vertical-align:middle;}
div[class^="product"] select {border:1px solid #c1cad2; width:162px; height:20px; vertical-align:middle;}
div[class^="product"] input[type="text"] {border:1px solid #c1cad2; padding:1px 2px; width:156px; height:16px; vertical-align:middle;}
div[class^="product"] + div[class^="product"] {margin-top:5px; *margin-top:3px;}
div[class^="product"] + a[class^="add_"] {margin-top:9px;}

div[class*="attribute_help"] p {background:#f2f2f5; margin:10px 0 0!important; padding:10px; width:305px; line-height:1.5;}

div[class$="_product"] p[class^="product"] {margin:6px 0;}
div[class$="_product"] p[class^="product"] + a[class^="add_"] {margin-top:5px;}

div[id$="_column"] a[class^="add_"] + p {margin:12px 0 0;}


/* ---------- begin store / shopping cart ---------- */


form[id^="cart_"] > div {height:15px;}
form[id^="cart_"] > div a {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -500px; padding:0 20px; height:15px; line-height:14px; float:left;}
form[id^="cart_"] > div a:hover {background-position:0 -400px;}
form[id^="cart_"] > div a + a {background-position:100% -700px; float:right;}
form[id^="cart_"] > div a + a:hover {background-position:100% -600px;}

form[id^="cart_"] table {border-collapse:collapse; margin:20px 0; width:100%; line-height:normal;}
form[id^="cart_"] table tr > * {background:#e3e4e9; border:1px solid #e3e4e9; padding:5px 10px; width:20%;}
form[id^="cart_"] tbody td {background:none; text-align:right;}
form[id^="cart_"] tbody td:nth-child(3) {text-align:center;}
form[id^="cart_"] tbody td:first-child {width:50%; text-align:left;}
form[id^="cart_"] tfoot th {text-align:right;}
form[id^="cart_"] img {margin:5px 0; margin-right:10px; width:25px; height:25px; vertical-align:middle;}
form[id^="cart_"] img + span {display:inline-block; width:78%; vertical-align:middle;}
form[id^="cart_"] img + span > strong {display:block; margin-bottom:4px;}
form[id^="cart_"] input {border:1px solid #c1cad2; display:block; margin:0 auto; width:16px; height:16px; line-height:16px; font-size:11px; text-align:center;}
form[id^="cart_"] p[class$="attributes"] {margin:0;}


/* ---------- begin store - checkout ---------- */


form[id^="checkout_"] {margin-top:20px; line-height:normal;}
form[id^="checkout_"] > div {border:1px solid #e3e4e9; margin-bottom:20px; padding:20px;}
form[id^="checkout_"] > div h4 {background:#e3e4e9; margin:-20px; margin-bottom:20px; padding:5px 10px; font-size:11px;}

form[id^="checkout_"] div > span {display:inline-block; width:49%; margin-right:-3px; vertical-align:top;}
form[id^="checkout_"] div > span + span {margin-left:2%;}
form[id^="checkout_"] div + div {margin-top:10px;}
form[id^="checkout_"] label {display:inline-block; margin-right:-3px; width:45%; vertical-align:top;}
form label.echeckLabel {
	width: 50%;
}
form[id^="checkout_"] input[type="text"],
form[id^="checkout_"] input[type="password"]{border:1px solid #c1cad2; margin-right:-3px; width:55%; height:18px; line-height:18px;}
form[id^="checkout_"] select {border:1px solid #c1cad2; margin-right:-3px; width:55.5%; height:20px;}
form[id^="checkout_"] select[id^="bill_ccexp"] {width:27%;}
form[id^="checkout_"] select[id^="bill_ccexp"] + select {margin-left:1%;}
form[id^="checkout_"] input[type="checkbox"] {margin-right:4px; width:13px; height:13px;}
form[id^="checkout_"] input[type="radio"] {margin-right:4px; width:12px; height:12px;}
form[id^="checkout_"] span[class="errstring"] {display:block; margin-top:4px; margin-left:45%; font-size:11px;}
form[id^="checkout_"] span[class$="msg"] {display:inline-block; margin-bottom:10px;}

form[id^="checkout_"] table {border-collapse:collapse; width:100%; text-align:center;}
form[id^="checkout_"] table tr > * {border:1px solid #e3e4e9; padding:5px 10px; width:20%;}
form[id^="checkout_"] thead tr {background:#e3e4e9; text-align:left;}
form[id^="checkout_"] tbody td:nth-child(even) {text-align:right;}
form[id^="checkout_"] td[class="product"],
form[id^="checkout_"] th[colspan="2"] {width:40%; text-align:left;}
form[id^="checkout_"] td[class="options"] > span + span {display:block; margin-top:6px;}
form[id^="checkout_"] table p[class$="attributes"] {margin:0;}
form[id^="checkout_"] p[class="submit_msg"] {margin:20px 0;}

form[id^="checkout_"] div.submit {border:0; margin:0; padding:0;}

/* For E-Check / Credit Card on File */

form[id^="checkout_"] input[type="radio"] + label,
form[id^="checkout_"] span[class^="checkbox"] + label {margin-right:4px; width:auto;}

form[id^="checkout_"] div[id="payment_type"] span {width:100%;}
form[id^="checkout_"] div[id="standard_payment"] {border:0; margin:0; padding:0;}
form[id^="checkout_"] div[class~="pay_mod"] {border:1px solid #e3e4e9; margin-bottom:20px; padding:20px;}


/* ---------- begin store / invoice ---------- */


div.invLogo {margin-bottom:16px;}

table.view_invoice {border-collapse:collapse;}
table.view_invoice tbody th {background:#e3e4e9; border:1px solid #e3e4e9; padding:5px 10px;}
table.view_invoice tbody td {border:1px solid #e3e4e9; padding:5px 10px;}
table.view_invoice tbody td:nth-child(n+2) {text-align:center;}
table.view_invoice tfoot th:nth-child(n+2) {border:1px solid #e3e4e9; padding:5px 10px; text-align:left;}

table.view_invoice.standard thead th {background:#e3e4e9; border:1px solid #e3e4e9; padding:5px 10px; text-align:left;}
table.view_invoice.standard thead th:nth-child(2) {text-align:right;}
table.view_invoice.standard tbody tr:first-child td {text-align:left;}
table.view_invoice.standard td:nth-child(2n+2) {text-align:right;}

table.view_invoice.imatrix {margin-top:0;}
tr.invoice.head td:nth-child(2),
table.view_invoice.imatrix td:nth-child(2n+3) {text-align:right;}
tr.invoice.bill p {margin-top:0!important;}


/* ---------- begin store / icontrol view cart ---------- */


table[id="view_cart"],
table[id="view_cart"] th,
table[id="view_cart"] tr,
table[id="view_cart"] td {border-color:#e3e4e9;}
table[id="view_cart"] th {background:#e3e4e9;}


/* ---------- begin skin selector ---------- */


a[id="show_selector"] {background:#000; border-radius:6px; box-shadow:2px 2px 0 rgba(0,0,0,0.25); color:#fff; padding:0 10px; position:absolute; top:10px; left:12px; min-width:76px; height:36px; line-height:36px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; text-decoration:none; z-index:999;}
a[id="show_selector"]:hover {color:#898989;}

div[id$="_selector"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/skin_selector_bg.png?v=2015-02-19_16-38-15); color:#fff; display:none; padding:20px; position:absolute; top:0; left:0; min-width:800px; font-family:Arial, Helvetica, sans-serif; font-size:12px; z-index:999;}
div[id$="_selector"] a {color:#fff; text-align:center;}
div[id$="_selector"] a:hover {color:#898989;}
div[id$="_selector"] a:first-child {position:absolute; top:30px; right:35px;}
div[id$="_selector"] p ~ a {background-repeat:no-repeat; color:#fff; display:inline-block; margin:15px; padding-top:136px; width:100px; height:12px; text-decoration:none;}
div[id$="_selector"] p {margin:10px; font-size:14px;}


/* ---------- begin live chat ---------- */


div[id$="chat"] {position:absolute; top:50px; left:12px; z-index:999;}
div[id$="chat"] a {background:#000; border-radius:6px; box-shadow:2px 2px 0 rgba(0,0,0,0.25); color:#fff; display:block; width:96px; height:36px; line-height:36px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; text-decoration:none;} 
div[id$="chat"] a:hover {color:#898989;}
div[id$="chat"] a strong {font-weight:normal;}


/* ---------- begin 3d spine simulator ---------- */


body[id^="spine"] {background:#663399; margin:0; padding:20px;}
body[id^="spine"] div {background:#fff url(/web/20150228195641/http://agapevet.net/css/skins/global/images/3d-spine-bg.png?v=2015-02-19_16-38-15) no-repeat; margin:0 auto; padding:40px; position:relative; width:700px; height:650px;}
body[id^="spine"] a {display:block; width:226px; height:0; padding-top:46px; position:absolute; top:40px; left:40px; overflow:hidden;}
body[id^="spine"] a[class*="flash"] {margin:0;}


/* ---------- begin pet selecter ---------- */


body[id="pet_select"] {background:#007bf2; margin:0; padding:20px;}
body[id="pet_select"] div {background:url(/web/20150228195641/http://agapevet.net/css/skins/global/images/pet_selector_bg.png?v=2015-02-19_16-38-15) no-repeat; margin:0 auto; width:800px; height:800px;}
body[id="pet_select"] a[class$="flash"] {position:relative; top:100px;}

/* ---------- begin default content images ---------- */

img.dfltCntImgRt {border-radius:3px; margin:18px 0 18px 18px; float:right;}
img.dfltCntImgRt:first-child {margin-top:0;}

img.dfltCntImgLt {border-radius:3px; margin:18px 18px 18px 0; float:left;}
img.dfltCntImgLt:first-child {margin-top:0;}

/* ---------- begin request appointment button ---------- */

a.reqAptBtn {background:#fba500; border-radius:12px; box-shadow:inset 0 0 12px 2px #e55b00, 0 2px 2px rgba(0,0,0,0.35); color:#fff!important; display:table; margin:0 auto; padding:0 12px; height:24px; line-height:24px; font-weight:bold; text-decoration:none; text-shadow:0 1px 1px #e55b00;}

/* ---------- begin captcha, honeypot and timecheck fields -------- */

input[name^="captcha_input"] {border:1px solid #c1cad2; padding:2px 4px;}

form[id^="custom"] div.verify_required,
div.verify_required{
    display:none;
}

form[id^="custom"] div.no_captcha_submit{
    display: block;
}

p.form_error_message{
    font-size: 14px;
    color: red;
    margin-bottom: 10px;
}

span.incorrect_captcha {
    display: block;
}



 /* Relative Path: /css/skins/global/global_vet.css */ 


/* Brand specific common CSS for all skins. Copyright 2006-2013 Internet Matrix, Inc. */


/* ---------- begin skin selector ---------- */


div[id$="_selector"] a[id$="_10a"] {background-image:url(/web/20150228195641/http://agapevet.net/images/brands/vet/skin_selector_thumbnails/skin-10a-thumb.png?v=2015-02-19_16-38-15);}
div[id$="_selector"] a[id$="_10b"] {background-image:url(/web/20150228195641/http://agapevet.net/images/brands/vet/skin_selector_thumbnails/skin-10b-thumb.png?v=2015-02-19_16-38-15);}
div[id$="_selector"] a[id$="_10c"] {background-image:url(/web/20150228195641/http://agapevet.net/images/brands/vet/skin_selector_thumbnails/skin-10c-thumb.png?v=2015-02-19_16-38-15);}
div[id$="_selector"] a[id$="_10d"] {background-image:url(/web/20150228195641/http://agapevet.net/images/brands/vet/skin_selector_thumbnails/skin-10d-thumb.png?v=2015-02-19_16-38-15);}
div[id$="_selector"] a[id$="_10e"] {background-image:url(/web/20150228195641/http://agapevet.net/images/brands/vet/skin_selector_thumbnails/skin-10e-thumb.png?v=2015-02-19_16-38-15);}
div[id$="_selector"] a[id$="_10f"] {background-image:url(/web/20150228195641/http://agapevet.net/images/brands/vet/skin_selector_thumbnails/skin-10f-thumb.png?v=2015-02-19_16-38-15);}
div[id$="_selector"] a[id$="_14a"] {background-image:url(/web/20150228195641/http://agapevet.net/images/brands/vet/skin_selector_thumbnails/skin-14a-thumb.png?v=2015-02-19_16-38-15);}



 /* Relative Path: /css/skins/template_10a/skin10_common.css */ 


/* skin 10a common css, copyright 2009 internet matrix, inc. */


/* ---------- begin globals ---------- */


a, br, div, form, h1, h2, h3, h4, h5, h6, input, label, object, ol, p, select, span, table, td, textarea, tr, ul {margin:0; padding:0; list-style:none;}
body {background:#f6f7fa; margin:35px; font-family:arial, helvetica, sans-serif; font-size:14px;}


/* ---------- begin header ---------- */


div[id="header"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -1090px 0; margin:0 auto; position:relative; width:990px; height:91px;}

select.lang_sel {border:1px solid #bec6da; position:absolute; top:-26px; left:4px;}

form#hd_site_srch {position:relative; width:236px; height:28px; top:34px; left:34px;}
form#hd_site_srch input[type="text"] {border:0; padding-top:2px; position:absolute; width:176px; height:26px; top:0; left:12px; font-size:14px;}
form#hd_site_srch input[type="submit"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -100px; border:0; padding-top:28px; position:absolute; width:32px; height:28px; top:0; right:0;}
form#hd_site_srch input[type="submit"]:hover {background-position:0 0; cursor:pointer;}

div#hd_acct_opts {position:absolute; line-height:22px; top:16px; right:19px; white-space:nowrap;}
div#hd_acct_opts a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -300px; color:#185991; display:inline-block; margin:0 7px; padding-left:28px; text-decoration:none;}
div#hd_acct_opts a[class^="log"]:hover {background-position:0 -200px;}
div#hd_acct_opts a[class*="_account"] {background-position:0 -500px;}
div#hd_acct_opts a[class*="_account"]:hover {background-position:0 -400px;}
div#hd_acct_opts a[class*="_cart"] {background-position:0 -700px;}
div#hd_acct_opts a[class*="_cart"]:hover {background-position:0 -600px;}

div#hd_page_opts {position:absolute; right:5px; bottom:1px; line-height:42px;}
div#hd_page_opts span {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) repeat-x 100% -3500px; display:block; padding:0 11px 0 10px; min-width:124px;}
div#hd_page_opts a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -1094px -574px; color:#185991; display:inline-block; font-size:12px; text-align:center; text-decoration:none;}
div#hd_page_opts a + a {background-position:-1094px -656px;}
div#hd_page_opts a:hover {color:#8fbc3a;}


/* ---------- begin banner ---------- */


div[id="header"] + div {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) repeat-x; margin:0 auto; padding:0 5px; width:980px;}
div[id="header"] + div > div {background:#084f8d; width:980px; overflow:hidden;}


div[id="header"] + div .slideshow_attraction {
margin:0;
margin-left:0px;
margin-right:0px;
width: 980px;
border:none;
}

.page_content .slideshow_attraction {
width: 535px;
}


/* ---------- begin custom content ---------- */


div[id^="custom_"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -1090px -141px; margin:0 auto; position:relative; width:990px; z-index:999;}


/* ---------- begin custom content menu ---------- */


div[id^="custom_"] > ul {margin:0 24px; padding-right:4px; position:relative; top:-10px; text-align:center;}
div[id^="custom_"] > ul > li {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 100% -1900px; display:inline-block; margin-right:-4px; padding-right:20px; vertical-align:top;}
div[id^="custom_"] > ul > li[class^="drop"] {background-position:100% -2000px; padding-right:34px;}
div[id^="custom_"] > ul > li > a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -1800px; color:#185991; display:block; padding-left:20px; line-height:46px; font-weight:bold; text-decoration:none; white-space:nowrap;}
div[id^="custom_"] > ul > li:hover > a {color:#8fbc3a;}
div[id^="custom_"] > ul li:hover > div > ul {visibility:visible;}

div[id^="custom_"] > ul > li ul {margin-top:-6px; margin-left:4px; position:absolute; width:220px; text-align:left; visibility:hidden;}
div[id^="custom_"] > ul > li ul li {background:#084f8d; border-right:6px solid #fff; border-left:6px solid #fff; position:relative; width:220px; float:left;}
div[id^="custom_"] > ul > li ul li[class^="drop"] > a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -2176px 50%; padding-right:23px;}
div[id^="custom_"] > ul > li ul li a {border-bottom:1px dotted #fff; color:#fff; display:block; padding:8px; text-decoration:none;}
div[id^="custom_"] > ul > li ul li:hover > a {background-color:#8fbc3a;} 
div[id^="custom_"] > ul > li ul li[class*="_top"] {background:#fff; height:6px; overflow:hidden;}
div[id^="custom_"] > ul > li ul li[class*="_btm"] {background:#fff; margin-top:-1px; height:6px; overflow:hidden;}

div[id^="custom_"] > ul > li ul ul {margin-left:220px; top:0;}


/* ---------- begin content ---------- */


div[id="content"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15); margin:0 auto; padding:0 5px; width:980px;}

a[class^="top"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -465px -500px; color:#12426c; display:inline-block; margin-left:50px; padding-left:18px; line-height:15px;}
a[class^="top"]:hover {background-position:-465px -400px; color:#8fbc3a;}


/* ---------- begin left column ---------- */


div[id^="left_"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -1095px -820px; color:#12426c; padding:40px 50px; position:relative; width:880px; line-height:24px; min-height:180px; float:left; z-index:1;}
div[class="two_column"] div[id^="left_"] {width:535px;}

div[id^="left_"] h1 {font-size:20px; color:#084f8d;}
div[id^="left_"] h2 {font-size:18px; color:#084f8d;}
div[id^="left_"] h3 {font-size:16px; color:#8fbc3a;}
div[id^="left_"] h4 {font-size:16px; color:#8fbc3a;}
div[id^="left_"] h5 {font-size:14px; color:#12426c;}
div[id^="left_"] h6 {font-size:14px; color:#12426c;}
div[id^="left_"] p {margin:20px 0;}
div[id^="left_"] ul {margin:20px 40px; list-style:disc;}
div[id^="left_"] ol {margin:20px 40px; list-style:decimal;}
div[id^="left_"] a {color:#12426c;}
div[id^="left_"] a:hover {color:#8fbc3a;}
div[id^="left_"] a[class^="back"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -465px -900px; display:inline-block; margin-bottom:20px; padding-left:18px; line-height:15px;}
div[id^="left_"] a[class^="back"]:hover {background-position:-465px -800px;}
div[id^="left_"] a[class^="back"] strong {font-weight:normal;}
div[id^="left_"] hr {border-top:1px dotted #9197a6; border-right:none; border-bottom:none; border-left:none; margin:20px 0; height:0; clear:both;}

div[id^="left_"] div[id$="crumbs"] {margin-bottom:-20px; min-height:24px;}
div[id^="left_"] div[id$="crumbs"] p {margin-top:0; margin-bottom:40px; font-size:14px;}

div[id^="left_"] div[id$="_sublinks"] {background:#f6f7fa; border:1px solid #bec6da; margin-top:30px; clear:both;}
div[id^="left_"] div[id$="_sublinks"] h3 {background:#fff; border-bottom:1px solid #bec6da; color:#084f8d; padding:0 20px; height:54px; line-height:54px;}
div[id^="left_"] div[id$="_sublinks"] ul {margin:0 20px; list-style:none;}
div[id^="left_"] div[id$="_sublinks"] li {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -468px -1286px; border-top:1px dotted #9197a6;}
div[id^="left_"] div[id$="_sublinks"] li:first-child {border:none;}
div[id^="left_"] div[id$="_sublinks"] li a {display:block; padding:9px 20px; text-decoration:none;}


/* ---------- begin featured articles ---------- */


p.tgl_sk10_arts {background:#084f8d; color:#fff!important; cursor:pointer; margin-top:40px; padding:0 20px; position:relative; height:54px; line-height:54px; font-size:18px;}
p.tgl_sk10_arts a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -2200px; box-shadow:inset 0 0 0 1px #fff; width:20px; height:20px; position:absolute; top:17px; right:20px; text-indent:-999em;}
p.tgl_sk10_arts:hover a {background-position:0 -2100px;}
p.tgl_sk10_arts.expanded a {background-position:0 -2400px;}
p.tgl_sk10_arts.expanded:hover a {background-position:0 -2300px;}

section[id="featured_articles"] {padding:0 30px; height:420px; overflow:auto;}
p.featuredArticleTitle {display:none;}

article[class*="featured_article"] {width:auto; margin:30px 0 0; padding-left:105px;}
article[class*="featured_article"]:nth-of-type(n+2) {border-top:1px dotted #9197a6; margin-top:25px; padding-top:30px;}
article[class*="featured_article"] img {margin:0 -105px;}
article[class*="featured_article"] h3 {font-size:16px;}
div[id$="_column"] article[class*="featured_article"] p {margin:11px 0 6px;}
article[class*="featured_article"] a[title^="View"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -468px -1199px;}
article[class*="featured_article"] a[title^="View"]:hover {background-position:-468px -1199px;}


/* ---------- begin legacy office hours ---------- */


table[id^="office"] td {border-color:#bec6da;}
table[id^="office"] thead td,
table[id^="office"] tbody td:first-child,
table[id^="office"] tbody tr:hover td {background:#f6f7fa;}


/* ---------- begin office hours ---------- */


table[class$="hours"] tr > * {border-color:#bec6da;}
table[class$="hours"] th,
table[class$="hours"] td:first-child,
table[class$="hours"] tr:hover td {background:#f6f7fa;}


/* ---------- begin calender ---------- */


div[id*="_calendar_nav"] {background:#084f8d;}
div[id*="_calendar_nav"] > div:first-child a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -465px -1600px;}
div[id*="_calendar_nav"] > div:first-child a:hover {background-position:-465px -800px;}
div[id*="_calendar_nav"] > div:first-child a ~ a {background-position:-465px -1700px;}
div[id*="_calendar_nav"] > div:first-child a ~ a:hover {background-position:-465px -1000px;}
div[id*="_calendar_nav"] > div:first-child + div a {margin:0 8px;}
div[id*="_calendar_nav"] > div:first-child + div a:hover {color:#2ea0ff;}

div[id*="calendar_opt"] {background:#084f8d; line-height:15px;}
div[id$="_column"] div[id*="calendar_opt"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -465px -1600px;}
div[id$="_column"] div[id*="calendar_opt"] a:hover {background-position:-465px -800px;}
div[id$="_column"] div[id*="calendar_opt"] a ~ a {background-position:100% -1700px;}
div[id$="_column"] div[id*="calendar_opt"] a ~ a:hover {background-position:100% -1000px;}

table[id$="_calendar"] th {background:#dfe4e8; border-color:#dfe4e8;}
table[id$="_calendar"] td {border-color:#dfe4e8; width:14.28%; height:68px;}
table[id$="_calendar"] td p[class="date"] {background:#f6f7fa;}
table[id$="_calendar"] td p[class^="event_"] a {background:#8fbc3a;}
table[id$="_calendar"] td p[class^="event_"] a:hover {background:#2ea0ff;}
table[id$="_calendar"] td div {border-color:#dfe4e8;}

table[id$="_calendar"] td[class*="_event"] p[class="date"] {background:#8fbc3a;}
table[id$="_calendar"] td[class*="_current"] p[class="date"] {background:#f7941d;}


/* ---------- begin blog ---------- */


div[id="blog_options"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -465px -700px;}
div[id="blog_options"] a:hover {background-position:-465px -600px}
div[id="blog_options"] a[id^="back"] {background-position:-465px -900px;}
div[id="blog_options"] a[id^="back"]:hover {background-position:-465px -800px;}

div[id="blog_archive"] {background:#f6f7fa; border:1px solid #bec6da;}
div[id$="_column"] div[id="blog_archive"] h3 {background:#fff; border-bottom:1px solid #bec6da; color:#084f8d; padding:0 20px; height:54px; line-height:54px; font-size:18px;}
div[id$="_column"] div[id="blog_archive"] h3 a {color:#084f8d; top:0px; right:20px;}
div[id$="_column"] div[id="blog_archive"] h4 {font-size:16px;}

div[class="blog_post"],
h3[class="comment_title"],
p[class="no_comments"],
div[class="blog_comment"] {border-color:#9197a6;}

div[class="blog_comment"] h4 {color:#12426c; font-size:16px;}

form[id$="_comment"] {background:#f6f7fa; border:1px solid #bec6da;}
div[id$="_column"] form[id$="_comment"] h3 {background:#fff; border-bottom:1px solid #bec6da; color:#084f8d; margin:-20px -20px 17px -20px; padding:0 20px; height:54px; line-height:54px; font-size:18px;}


/* ---------- begin exercises ---------- */


div[class="iexercise"] {border-color:#9197a6;}
div[id$="_column"] div[class="iexercise"] h4 {font-size:16px;}

div[class="iexercise"] p a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -465px -1100px;}
div[class="iexercise"] p a:hover {background-position:-465px -1000px;}

div[class="iexercise"] table {background:#f6f7fa; width:362px;}
div[class="iexercise"] thead {background:#fff; color:#084f8d;}
div[class="iexercise"] td {border-color:#bec6da; padding:9px 10px;}


/* ---------- begin my account ---------- */


table[class="my_exercise_prescription"] thead th,
table[class^="order"] tr th {background-color:#f6f7fa;}

table[class="my_exercise_prescription"] thead th,
table[class="my_exercise_prescription"] tr td,
table[class^="order"] tr > * {border-color:#bec6da;}

table[class="my_exercise_prescription"] tr td a {font-weight:bold;}

table[class^="order"] {font-size:13px;}
table.order_invoices {margin:-1px 0;}


/* ---------- begin store ---------- */


form[id^="shop_add_product"] {border-color:#9197a6;}

div[class$="_product"] a[class^="add_"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -465px -1100px;}
div[class$="_product"] a[class^="add_"]:hover {background-position:-465px -1000px;}

div[class^="product"] label {width:206px;}
div[class^="product"] select {width:202px;}
div[class^="product"] input[type="text"] {width:196px;}
div[class*="attribute_help"] p {background:#f6f7fa; width:394px;}

form[id^="cart_"] > div a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -465px -900px;}
form[id^="cart_"] > div a:hover {background-position:-465px -800px;}
form[id^="cart_"] > div a + a {background-position:100% -1100px;}
form[id^="cart_"] > div a + a:hover {background-position:100% -1000px;}
form[id^="cart_"] table tr > * {background-color:#f6f7fa; border-color:#bec6da; padding:9px 10px;}
form[id^="cart_"] tbody td {background-color:#fff;}

form[id^="checkout_"] div,
form[id^="checkout_"] table {border-color:#bec6da;}
form[id^="checkout_"] table tr > * {border-color:#bec6da; padding:9px 10px;}
form[id^="checkout_"] div h4,
form[id^="checkout_"] table thead th {background-color:#f6f7fa; border-bottom:1px solid #bec6da; color:#12426c; padding:9px 10px; font-size:14px;}

form[id^="checkout_"] div[class~="pay_mod"] {border-color:#bec6da;}

table.view_invoice tbody th {background-color:#f6f7fa; border-color:#bec6da;}
table.view_invoice tbody td {border-color:#bec6da;}
table.view_invoice tfoot th:nth-child(n+2) {border-color:#bec6da;}

table.view_invoice.standard thead th {background-color:#f6f7fa; border-color:#bec6da;}


/* ---------- begin right column ---------- */


div[id^="right_"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -1730px -820px; color:#12426c; display:none; padding:40px 50px 40px 0; position:relative; width:295px; min-height:180px; float:left; z-index:2;}
div[class="two_column"] div[id^="right_"] {display:block;}

div[id^="right_"] p[id$="_toggle"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 253px -2183px; border:1px solid #bec6da; color:#084f8d; cursor:pointer; padding:0 20px; width:253px; height:54px; line-height:54px; font-size:18px;}
div[id^="right_"] p[id$="_toggle"]:hover {background-position:253px -2083px;}
div[id^="right_"] p[id$="_toggle"][class*="expanded"] {background-position:253px -2383px;}
div[id^="right_"] p[id$="_toggle"][class*="expanded"]:hover {background-position:253px -2283px;}

div[id^="right_"] div[class^="target"] {background:#f6f7fa; border-bottom:1px solid #bec6da; width:295px;}
div[id^="right_"] div[class^="target"] p {display:none;}

div[id^="right_"] div[class="btm_margin"] {width:295px; height:20px;}


/* ---------- begin itools menu ---------- */


div[id="itools"] {margin-bottom:12px;}

div[id="itools"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -900px; color:#12426c; display:inline-block; margin-bottom:18px; padding-left:32px; height:22px; line-height:22px; font-size:18px; text-decoration:none;}
div[id="itools"] a:hover {background-position:0 -800px;}
div[id="itools"] a[id^="calendar_"] {background-position:0 -1100px;}
div[id="itools"] a[id^="calendar_"]:hover {background-position:0 -1000px;}
div[id="itools"] a[id^="blog_"] {background-position:0 -1300px;}
div[id="itools"] a[id^="blog_"]:hover {background-position:0 -1200px;}
div[id="itools"] a[id^="iexpert_"] {background-position:0 -1500px;}
div[id="itools"] a[id^="iexpert_"]:hover {background-position:0 -1400px;}
div[id="itools"] a[id^="spine_"] {background-position:0 -1700px;}
div[id="itools"] a[id^="spine_"]:hover {background-position:0 -1600px;}
div[id="itools"] a[id^="pet_"] {background-position:0 -2600px;}
div[id="itools"] a[id^="pet_"]:hover {background-position:0 -2500px;}
div[id="itools"] a[id^="dental_"] {background-position:0 -1700px;}
div[id="itools"] a[id^="dental_"]:hover {background-position:0 -1600px;}
div[id="itools"] a strong {font-weight:normal;}

div[id="itools"] > ul > li > div > ul {display:none;}


/* ---------- begin right column menu ---------- */


div[class^="target"] li[class*="_top"], div[class^="target"] li[class*="_btm"] {display:none;}

div[class^="target"] > ul > li {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -2960px 50%;  border-right:1px solid #bec6da; border-left:1px solid #bec6da; position:relative; width:293px; *float:left;/*IE7*/ z-index:1;}
div[class^="target"] > ul > li > a {border-top:1px dotted #9197a6; color:#12426c; display:block; margin:0 20px; padding:13px 20px; text-decoration:none;}
div[class^="target"] > ul:first-child > li:first-child > a {border:0;}
div[class^="target"] > ul > li[class^="drop"] > a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -2434px 50%;}
div[class^="target"] > ul > li[class^="drop"]:hover {background-position:-3260px 50%;}
div[class^="target"] > ul > li:hover > a {color:#8fbc3a;}
div[class^="target"] > ul li:hover > div > ul {left:auto;}

div[class^="target"] > ul > li ul {border:6px solid #fff; margin-left:-233px; position:absolute; width:220px; top:-6px; left:-999em;}
div[class^="target"] > ul > li ul li {background:#084f8d; position:relative; width:220px; float:left;}
div[class^="target"] > ul > li ul li a {border-top:1px dotted #fff; color:#fff; display:block; padding:8px; text-decoration:none;}
div[class^="target"] > ul > li ul li[class^="drop"] > a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -2176px 50%; padding-right:23px;}
div[class^="target"] > ul > li ul li[class*="_top"] + li > a:first-child {border:0;}
div[class^="target"] > ul > li ul li:hover > a {background-color:#8fbc3a;}

div[class^="target"] > ul > li ul ul {margin-left:-232px;}


/* ---------- begin member login & logout panels ---------- */


div[id^="member"] h3 {color:#084f8d; margin-top:6px; font-size:24px; font-weight:normal;}
div[id^="member"] h3 span {color:#8fbc3a;}
div[id^="member"] p {margin-top:5px; line-height:24px;}
div[id^="member"] a {color:#12426c;}
div[id^="member"] a:hover {color:#8fbc3a;}

div[id^="member"] form {background:#f6f7fa; border:1px solid #bec6da; margin-top:23px; position:relative; width:293px; height:144px;}
div[id^="member"] form label {color:#414141; position:absolute; top:17px; left:19px; font-size:12px; font-weight:bold;}
div[id^="member"] form input + label {top:57px;}
div[id^="member"] form label + input {border:1px solid #bec6da; padding:2px 4px; position:absolute; width:166px; height:18px; line-height:18px; top:20px; left:97px; font-size:12px;}
div[id^="member"] form input[name$="password"] {top:60px;}
div[id^="member"] form input[type="submit"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 100% -100px; border:0; padding-top:25px; position:absolute; width:54px; height:25px; top:99px; left:20px;}
div[id^="member"] form input[type="submit"]:hover {background-position:100% 0; cursor:pointer;}

div[id^="member"] ul {border-top:1px dotted #9197a6; margin-top:30px;}
div[id^="member"] ul li {border-bottom:1px dotted #9197a6;}
div[id^="member"] ul li > a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -468px -1398px; display:inline-block; padding-left:20px; margin:13px 0; text-decoration:none;}

div[id^="member"] p + a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 100% -300px; display:block; margin-top:13px; padding-top:25px; width:54px; height:0; overflow:hidden;}
div[id^="member"] p + a:hover {background-position:100% -200px;}

div[id$="logout"] {border-bottom:1px dotted #9197a6; margin-bottom:-1px; padding-bottom:30px;}


/* ---------- begin custom content module ---------- */ 


div[id^="right_"] div[class^="custom_"] {padding-bottom:26px; *padding-bottom:27px;}
div[id^="right_"] div[class^="custom_"]:first-child {margin-top:-5px; *margin-top:-4px;}
div[id^="right_"] div[class^="custom_"]:nth-child(n+2) {border-top:1px dotted #9197a6; border-bottom:1px dotted #9197a6; padding-top:25px; margin-bottom:30px;}
div[id^="right_"] div[class^="custom_"]:nth-child(n+2) + div[class^="custom_"] {margin-top:-31px;}
div[id^="right_"] div[id^="member"] + div[class^="custom_"] {margin-top:-1px;}
div[id^="right_"] p[class*="module_title"] {color:#084f8d; margin-bottom:8px; font-size:24px; font-weight:normal;}
div[id^="right_"] div[class*="module_content"] a {color:#084f8d;}
div[id^="right_"] div[class*="module_content"] a:hover {color:#8fbc3a;}


/* ---------- begin custom content module- exclusive offer ---------- */


div[class="exclusive_offer"] img[src$="save_medallion.png"] {margin:8px auto -2px;}
div[class="exclusive_offer"] h3 {color:#084f8d; margin-bottom:1px; font-size:24px; font-weight:normal; line-height:1.5;}
div[class="exclusive_offer"] h3 span {color:#8fbc3a;}


/* ---------- begin custom content module - lead generation form ---------- */ 


div[class^="custom_"] form[id^="lead_generation"] {background:#f6f7fa; border:1px solid #bec6da; margin:19px 0 4px; padding:20px;}
div[class^="custom_"] form[id^="lead_generation"] label {color:#414141; position:relative; width:78px; top:-8px; font-size:12px; font-weight:bold;}
div[class^="custom_"] form[id^="lead_generation"] input[type="text"] {border:1px solid #bec6da; margin:0 0 16px; padding:2px 4px; width:169px; height:18px; line-height:18px; font-size:12px;}
div[class^="custom_"] form[id^="lead_generation"] div[class^="verify"] {padding-top:40px;}
div[class^="custom_"] form[id^="lead_generation"] div[class^="verify"] img {top:-8px;}
div[class^="custom_"] form[id^="lead_generation"] div[class^="submit"] {padding:0; text-align:left;}
div[class^="custom_"] form[id^="lead_generation"] input[type="submit"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -426px -3400px; border:0; display:block; margin-top:-1px; padding-top:25px; width:54px; height:25px;}
div[class^="custom_"] form[id^="lead_generation"] input[type="submit"]:hover {background-position:-426px -3300px; cursor:pointer;}
div[class^="custom_"] form[id^="lead_generation"] span[class="errstring"] {margin:-16px 0 3px; font-size:12px;}
div[class^="custom_"] form[id^="lead_generation"] input[id="sender_phone"] + span[class="errstring"] {margin-bottom:11px;}


/* ---------- begin custom content module - follow us ---------- */ 


div[class="follow_us"] p + div {margin-top:15px;}


/* ---------- begin custom content module office hours ---------- */


div[class^="custom_"] div[class$="hours"] {margin:6px 0 4px;}
div[class^="custom_"] div[class$="hours"] tr:hover td {background:none;}
div[class^="custom_"] div[class$="hours"] tr:nth-child(odd) td {background:#f6f7fa;}
div[class^="custom_"] div[class$="hours"] table + p span:first-child {margin-top:20px; width:64%;}
div[class^="custom_"] div[class$="hours"] table + p span:first-child {color:#084f8d; font-size:18px; text-align:left;}
div[class^="custom_"] div[class$="hours"] table + p span:first-child strong {padding-right:4px;}
div[class^="custom_"] div[class$="hours"] table + p span:first-child br {display:none;}
div[class^="custom_"] div[class$="hours"] table + p span:last-child {margin-top:20px; width:34%;}
div[class^="custom_"] div[class$="hours"] table + p a {background:#084f8d; padding:6px 12px; float:right;}
div[class^="custom_"] div[class$="hours"] table + p a:hover {background:#8fbc3a;}


/* ---------- begin custom content module - email us ---------- */


* + div[class*="module_5"] {margin-top:30px;}

div[class="email_us"] {background-color:#f6f7fa;}
div[class="email_us"] * {color:#12426c!important;}

div[class="email_us"] a[class*="launch"] {
	background: #1b65a5; /* Old browsers */
	background: -moz-linear-gradient(top, #1b65a5 0%, #084f8d 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1b65a5), color-stop(100%,#084f8d)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #1b65a5 0%,#084f8d 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #1b65a5 0%,#084f8d 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #1b65a5 0%,#084f8d 100%); /* IE10+ */
	background: linear-gradient(top, #1b65a5 0%,#084f8d 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1b65a5', endColorstr='#084f8d',GradientType=0 ); /* IE6-9 */
	}


/* ---------- begin custom module form ---------- */


div[class*="custom_content_"] form[id^="custom"] select {border-color:#bec6da; height:24px; padding:2px;}
div[class*="custom_content_"] form[id^="custom"] input[type="text"] {border-color:#bec6da; padding:3px 4px;}
div[class*="custom_content_"] form[id^="custom"] textarea {border-color:#bec6da; padding:2px 4px;}

div.custom_content_module_5 form[id^="custom"] {width:50%;}

/*.cc_module_content a { color: #12426c !important; }*/
div[id$="t_column"] div[class*="module_content"] a {color:#12426c;}
div[id$="t_column"] div[class*="module_content"] a:hover {color:#8fbc3a;}

/* ---------- begin footer ---------- */


div[id="footer_trim"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -1090px -472px; margin:0 auto; width:990px; height:62px;}

div[id="footer_assets"] {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -3580px 100%; margin:0 auto; padding:30px 0; width:990px;}
div[id="footer_assets"] > div {color:#fff; margin-bottom:5px; text-align:center; overflow:hidden;}
div[id="footer_assets"] a {color:#fff; text-decoration:none;}
div[id="footer_assets"] a:hover {color:#299bfd;}

div[id="footer"] {display:inline-block; width:260px; text-align:left; vertical-align:top;}
div[id="footer"] div + div {position:relative;}
div[id="footer"] p[id$="admin"] a,
div[id="footer"] p[id^="terms"] a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat -468px -1485px; border-top:1px dotted #299bfd; display:block; padding:13px 20px;}
div[id="footer"] p[id$="admin"] > span,
div[id="footer"] p[id^="terms"] > span {display:none;}
div[id="footer"] p[id^="copy"] {border-top:1px dotted #299bfd; padding:13px 16px; line-height:30px;}
div[id="footer"] p[id^="websites"] {border-top:1px dotted #299bfd; padding-top:28px; position:absolute; width:100%; bottom:0; font-size:10px; white-space:nowrap;}
div[id="footer"] p[id^="websites"] a + a {display:inline-block; margin-left:3px; margin-right:4px; vertical-align:middle;}
div[id="footer"] p[id^="websites"] a + a span {display:none;}

div[id="footer"] ~ div {border-left:1px solid #2487dc; display:inline-block; margin-bottom:-1000px; margin-left:40px; padding-bottom:1000px; padding-left:40px; text-align:left; vertical-align:top;}
div[id="footer"] ~ div * {font-weight:normal;}
div[id="footer"] ~ div p {margin-bottom:24px; font-size:24px;}

div#page_options {margin:0; text-align:left; overflow:visible;}
div#page_options li {margin:0; display:block;}

li.pOpt a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10a/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat; color:#fff!important; margin-bottom:38px; padding-left:32px; height:22px; line-height:22px;}
li.pOpt a.print_page {background-position:-458px -2400px;}
li.pOpt a.print_page:hover {background-position:-458px -2300px;}
li.pOpt a.send_friend {background-position:-458px -2600px;}
li.pOpt a.send_friend:hover {background-position:-458px -2500px;}
li.pOpt a.email_us {background-position:-458px -2800px;}
li.pOpt a.email_us:hover {background-position:-458px -2700px;}
li.pOpt a.request_appointment {background-position:-458px -3000px;}
li.pOpt a.request_appointment:hover {background-position:-458px -2900px;}
li.pOpt a:last-child {margin-bottom:30px;}

li.zoomCtrl {border-top:1px dotted #299bfd; padding-top:16px;}
li.zoomCtrl a {background:#f8f8f8; border-color:#414141; color:#414141; text-align:center; vertical-align:bottom;}
li.zoomCtrl a:hover {background:#1a87e6; border-color:#fff; color:#fff;}
li.zoomCtrl:before {content:'Zoom Level:'; margin-right:12px;}

form.nws_sub_frm {margin-top:-4px; padding:0;}
div[class^="news_mod_usr"] {*height:31px; clear:left;}
label.nws_usr_lbl {width:78px; font-size:12px; float:left;}
input.nws_usr_ipt {width:136px; height:19px; float:left;}
div.news_mod_usr_int {position:relative; margin-left:78px; *height:auto; font-size:12px;}
label.nws_int_lbl {position:absolute; top:0; left:-78px;}
div.news_mod_ver {margin:0 0 0 78px; position:relative; clear:left;}
label.nws_ver_lbl {position:absolute; top:0; left:-78px;}
input.nws_ver_ipt {margin-top:2px; *margin-top:-2px; width:50px; height:19px; float:none;}
div.news_mod_sbmt {margin:0 78px; width:54px;}
input.nws_smt_btn {background:#f8f8f8; border:1px solid #414141; color:#414141; margin-top:8px; *margin-top:7px; padding:6px;}
input.nws_smt_btn::-moz-focus-inner {border:0; padding:0;}
input.nws_smt_btn:hover {background:#1a87e6; border-color:#fff; color:#fff; cursor:pointer;}

div.no_int img.nws_ver_img {margin-top:4px;}

form[name="inews_subscribe"] p.form_error_message {
    font-size: 16px;
}




 /* Relative Path: /css/skins/template_10f/skin10_common.css */ 


/* skin 10f common css, copyright 2009 internet matrix, inc. */


/* ---------- begin globals ---------- */


body {background:#00abcf url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/body_bg.png?v=2015-02-19_16-38-15) repeat-x fixed;}


/* ---------- begin header ---------- */


div[id="header"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}
form#hd_site_srch input[type="submit"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

div#hd_acct_opts a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15); color:#fff;}

div#hd_page_opts span {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}
div#hd_page_opts a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15); color:#fff;}
div#hd_page_opts a + a + a {background-position:-1094px -738px;}
div#hd_page_opts a:hover {color:#006175;}


/* ---------- begin banner ---------- */


div[id="header"] + div {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}
div[id="header"] + div > div {background:#007d98;}

div[id="header"] + div .slideshow_attraction {
margin:0;
margin-left:0px;
margin-right:0px;
width: 980px;
border:none;
}

.page_content .slideshow_attraction {
width: 535px;
}

/* ---------- begin custom content ---------- */


div[id^="custom_"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}


/* ---------- begin custom content menu ---------- */


div[id^="custom_"] > ul > li {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}
div[id^="custom_"] > ul > li > a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15); color:#fff;}
div[id^="custom_"] > ul > li:hover > a {color:#006175;}

div[id^="custom_"] > ul > li ul li {background:#00728a; border-right-color:#fff; border-left-color:#fff;}
div[id^="custom_"] > ul > li ul li[class^="drop"] > a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}
div[id^="custom_"] > ul > li ul li a {border-bottom-color:#fff; color:#fff;}
div[id^="custom_"] > ul > li ul li:hover > a {background-color:#00aace;} 
div[id^="custom_"] > ul > li ul li[class*="_top"] {background:#fff;}
div[id^="custom_"] > ul > li ul li[class*="_btm"] {background:#fff;}


/* ---------- begin content ---------- */


div[id="content"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}

a[class^="top"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15); color:#00aace;}
a[class^="top"]:hover {color:#8bd738;}


/* ---------- begin left column ---------- */


div[id^="left_"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15); color:#002a33;}

div[id^="left_"] h1 {font-size:20px; color:#00aace;}
div[id^="left_"] h2 {font-size:18px; color:#00aace;}
div[id^="left_"] h3 {font-size:16px; color:#8bd738;}
div[id^="left_"] h4 {font-size:16px; color:#8bd738;}
div[id^="left_"] h5 {font-size:14px; color:#002a33;}
div[id^="left_"] h6 {font-size:14px; color:#002a33;}
div[id^="left_"] a {color:#00aace;}
div[id^="left_"] a:hover {color:#8bd738;}
div[id^="left_"] a[class^="back"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}
div[id^="left_"] hr {border-top-color:#9197a6;}

div[id^="left_"] div[id$="crumbs"] {color:#00aace;}

div[id^="left_"] div[id$="_sublinks"] {background:#f6f7fa; border-color:#bec6da;}
div[id^="left_"] div[id$="_sublinks"] h3 {background:#fff; border-bottom-color:#bec6da; color:#00aace;}
div[id^="left_"] div[id$="_sublinks"] li {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15); border-top-color:#9197a6;}
div[id^="left_"] div[id$="_sublinks"] li > a {color:#002a33;}
div[id^="left_"] div[id$="_sublinks"] li > a:hover {color:#00aace;}


/* ---------- begin featured articles ---------- */


p.tgl_sk10_arts {background:#00aace url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15) no-repeat -1550px -584px;}
p.tgl_sk10_arts a {background:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15) no-repeat 0 -2200px;}

article[class*="featured_article"] a[title^="View"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}


/* ---------- begin calender ---------- */


div[id*="_calendar_nav"] {background:#00728a;}
div[id*="_calendar_nav"] > div:first-child a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}
div[id*="_calendar_nav"] > div:first-child + div a:hover {color:#00aace;}

div[id*="calendar_opt"] {background:#00728a;}
div[id$="_column"] div[id*="calendar_opt"] a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

table[id$="_calendar"] th {background:#dfe4e8; border-color:#dfe4e8;}
table[id$="_calendar"] td {border-color:#dfe4e8;}
table[id$="_calendar"] td p[class="date"] {background:#f6f7fa;}
table[id$="_calendar"] td p[class^="event_"] a {background:#8bd738;}
table[id$="_calendar"] td p[class^="event_"] a:hover {background:#00aace;}
table[id$="_calendar"] td div {border-color:#dfe4e8;}

table[id$="_calendar"] td[class*="_event"] p[class="date"] {background:#00aace;}
table[id$="_calendar"] td[class*="_current"] p[class="date"] {background:#ffb746;}


/* ---------- begin blog ---------- */


div[id="blog_options"] a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

div[id="blog_archive"] {background:#f6f7fa; border-color:#bec6da;}
div[id$="_column"] div[id="blog_archive"] h3 {background:#fff; border-bottom-color:#bec6da; color:#00aace;}
div[id$="_column"] div[id="blog_archive"] h3 a {color:#00aace;}

div[class="blog_post"],
h3[class="comment_title"],
p[class="no_comments"],
div[class="blog_comment"] {border-color:#9197a6;}

div[class="blog_comment"] h4 {color:#00728a;}

form[id$="_comment"] {background:#f6f7fa; border-color:#bec6da;}
div[id$="_column"] form[id$="_comment"] h3 {background:#fff; border-bottom-color:#bec6da; color:#00aace;}


/* ---------- begin exercises ---------- */


div[class="iexercise"] {border-color:#9197a6;}

div[class="iexercise"] p a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

div[class="iexercise"] table {background:#f6f7fa;}
div[class="iexercise"] thead {background:#fff; color:#00aace;}
div[class="iexercise"] td {border-color:#bec6da;}


/* ---------- begin my account ---------- */


table[class="my_exercise_prescription"] thead th,
table[class^="order"] tr th {background-color:#f6f7fa;}

table[class="my_exercise_prescription"] thead th,
table[class="my_exercise_prescription"] tr td,
table[class^="order"] tr > * {border-color:#bec6da;}


/* ---------- begin store ---------- */


form[id^="shop_add_product"] {border-color:#9197a6;}

div[class$="_product"] a[class^="add_"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

form[id^="cart_"] > div a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}
form[id^="cart_"] table tr > * {background-color:#f6f7fa; border-color:#bec6da;}
form[id^="cart_"] tbody td {background-color:#fff;}

form[id^="checkout_"] div,
form[id^="checkout_"] table {border-color:#bec6da;}
form[id^="checkout_"] table tr > * {border-color:#bec6da;}
form[id^="checkout_"] div h4,
form[id^="checkout_"] table thead th {background-color:#f6f7fa; border-bottom-color:#bec6da; color:#002a33;}

table.view_invoice tbody th {background-color:#f6f7fa; border-color:#bec6da;}
table.view_invoice tbody td {border-color:#bec6da;}
table.view_invoice tfoot th:nth-child(n+2) {border-color:#bec6da;}

table.view_invoice.standard thead th {background-color:#f6f7fa; border-color:#bec6da;}


/* ---------- begin right column ---------- */


div[id^="right_"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15); color:#002a33;}

div[id^="right_"] p[id$="_toggle"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15); border-color:#bec6da; color:#00aace;}

div[id^="right_"] div[class^="target"] {background:#f6f7fa; border-bottom-color:#bec6da;}


/* ---------- begin itools menu ---------- */


div[id="itools"] a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15); color:#00728a;}


/* ---------- begin right column menu ---------- */


div[class^="target"] > ul > li {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15); border-right-color:#bec6da; border-left-color:#bec6da;}
div[class^="target"] > ul > li > a {border-top-color:#9197a6; color:#002a33;}
div[class^="target"] > ul > li[class^="drop"] > a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}
div[class^="target"] > ul > li:hover > a {color:#00aace;}

div[class^="target"] > ul > li ul {border-color:#fff;}
div[class^="target"] > ul > li ul li {background:#00728a;}
div[class^="target"] > ul > li ul li a {border-top-color:#fff; color:#fff;}
div[class^="target"] > ul > li ul li[class^="drop"] > a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}
div[class^="target"] > ul > li ul li:hover > a {background-color:#00aace;}


/* ---------- begin member login & logout panels ---------- */


div[id^="member"] h3 {color:#00aace;}
div[id^="member"] h3 span {color:#8bd738;}
div[id^="member"] a {color:#002a33;}
div[id^="member"] a:hover {color:#00aace;}

div[id^="member"] form {background:#f6f7fa; border-color:#bec6da;}
div[id^="member"] form label {color:#414141;}
div[id^="member"] form label + input {border-color:#bec6da;}
div[id^="member"] form input[type="submit"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

div[id^="member"] ul {border-top-color:9197a6;}
div[id^="member"] ul li {border-bottom-color:#9197a6;}
div[id^="member"] ul li > a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

div[id^="member"] p + a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

div[id$="logout"] {border-bottom-color:#9197a6;}


/* ---------- begin custom content module ---------- */ 


div[id^="right_"] p[class*="module_title"] {color:#00aace;}
div[id^="right_"] div[class*="module_content"] a {color:#00aace;}
div[id^="right_"] div[class*="module_content"] a:hover {color:#8bd738;}
div[id$="t_column"] div[class*="module_content"] a {color:#00aace;}
div[id$="t_column"] div[class*="module_content"] a:hover {color:#8bd738;}


/* ---------- begin custom content module- exclusive offer ---------- */


div[class="exclusive_offer"] h3 {color:#00aace;}
div[class="exclusive_offer"] h3 span {color:#8bd738;}


/* ---------- begin custom content module - lead generation form ---------- */ 


div[class^="custom_"] form[id^="lead_generation"] input[type="submit"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}


/* ---------- begin custom content module office hours ---------- */


div[class^="custom_"] div[class$="hours"] table + p span:first-child {color:#00aace;}
div[class^="custom_"] div[class$="hours"] table + p a {background:#00aace;}
div[class^="custom_"] div[class$="hours"] table + p a:hover {background:#ffb746;}


/* ---------- begin custom content module - email us ---------- */


div[class="email_us"] * {color:#002a33!important;}

div[class="email_us"] a[class*="launch"] {
	background: #00aace; /* Old browsers */
	background: -moz-linear-gradient(top, #00aace 0%, #00728a 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00aace), color-stop(100%,#00728a)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #00aace 0%,#00728a 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #00aace 0%,#00728a 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #00aace 0%,#00728a 100%); /* IE10+ */
	background: linear-gradient(top, #00aace 0%,#00728a 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aace', endColorstr='#00728a',GradientType=0 ); /* IE6-9 */
	}


/* ---------- begin footer ---------- */


div[id="footer_trim"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}

div[id="footer_assets"] {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/horizontal_sprite.png?v=2015-02-19_16-38-15);}
div[id="footer_assets"] a:hover {color:#00c0ea;}

div[id="footer"] p[id$="admin"] a,
div[id="footer"] p[id^="terms"] a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15); border-top-color:#00c0ea;}
div[id="footer"] p[id^="copy"] {border-top-color:#00c0ea;}
div[id="footer"] p[id^="websites"] {border-top-color:#00c0ea;}

div[id="footer"] ~ div {border-left-color:#00a2c5;}

li.pOpt a {background-image:url(/web/20150228195641/http://agapevet.net/css/skins/template_10f/images/vertical_sprite.png?v=2015-02-19_16-38-15);}

li.zoomCtrl {border-top-color:#00c0ea;}
li.zoomCtrl a:hover {background:#7aca24; color:#fff;}

input.nws_smt_btn:hover {background:#7aca24;}




 /* Relative Path: /css/skins/template_10a/skin10_vet.css */ 


/* Brand specific CSS for Skin_10a. Copyright 2006-2010 Internet Matrix, Inc. */


/* ---------- begin footer ---------- */


div[id="footer"] div + div {padding-bottom:45px;} /* Add 28px plus height of brand logo to set this value (i.e. 28px + 17px; = 45px;) */

div[id="footer"] p[id^="websites"] a + a {background:url(/web/20150228195641/http://agapevet.net/images/brands/vet/common/vetmatrix_footer_logo.png?v=2015-02-19_16-38-15); width:140px; height:17px;}