/*.container {
    width: 822px;
}*/
@font-face {
    font-family: Biko;
    src: url(../fonts/Biko/Biko_Regular.ttf),
	url(../fonts/Biko/Biko_Regular.eot);
	
}
@font-face {
    font-family: Biko-Black;
    src: url(../fonts/Biko-Black/Biko_Black.ttf),
    url(../fonts/Biko-Black/Biko_Black.eot);
}
@font-face {
    font-family: Biko-Bold;
    src: url(../fonts/Biko-Bold/Biko_Bold.ttf),
    url(../fonts/Biko-Bold/Biko_Bold.eot);
}
@font-face {
    font-family: Biko-Light;
    src: url(../fonts/Biko-Light/Biko_Light-Restricted.ttf),
    url(../fonts/Biko-Light/Biko_Light-Restricted.eot);
}
@font-face {
    font-family: OpenSans-Bold;
    src: url(../fonts/OpenSans-Bold.ttf),
	url(../fonts/OpenSans-Bold-webfont.eot);
}
@font-face {
    font-family: OpenSans-BoldItalic;
    src: url(../fonts/OpenSans-BoldItalic.ttf),
	url(../fonts/OpenSans-BoldItalic-webfont.eot);
}
@font-face {
    font-family: OpenSans-Italic;
    src: url(../fonts/OpenSans-Italic.ttf),
	url(../fonts/OpenSans-Italic-webfont.eot);
}
@font-face {
    font-family: OpenSans-Regular;
    src: url(../fonts/OpenSans-Regular.ttf),
	url(../fonts/OpenSans-Regular-webfont.eot);
}
@font-face {
    font-family: OpenSans-Semibold;
    src: url(../fonts/OpenSans-Semibold.ttf),
	url(../fonts/OpenSans-Semibold-webfont.eot);
}
@font-face {
    font-family: OpenSans-Light;
    src: url(../fonts/OpenSans-Light.ttf),
	url(../fonts/OpenSans-Light-webfont.eot);
}
body#main {
    background-color: #f9f8f4;
	font-family: "Myriad Pro", Myriad, "Liberation Sans", "Nimbus Sans L", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
	/*home jumbotron*/
.home .jumbotron{
	background-repeat: no-repeat;
    background-image: url(../img/header-darker);
    background-position: 0% 5%;	
	min-height: 500px;
    margin-bottom: 35px;
	margin-top: 96px;
	position: relative;
	border-bottom: 10px solid #f15b46;
	padding-bottom: 0;
	
}
#levelTwo-header h1, .mainContent h2, div#home-nav-main ul li, #home-header h1:nth-child(2)  {
    font-family: Biko-Bold;
}
#home-header div{
    padding: 181px 0 0 0;
}
#home-header  h1{
	color: #e2a34d;
	text-shadow: 0px 1px rgb(0,0,0);
	line-height: 1;
	word-break: keep-all;
	width: 53%;
	padding-left: 36px;
	margin: 0;
}
#home-header h1:first-child {
    font-size: 31px;
	font-family: openSans-Light;

}
#home-header h1:nth-child(2){
    font-size: 56px;
	padding-top: 9px;
}
span#borderHome {
    border-bottom: 3px solid #e2a34d;
	position: absolute;
	top: 0;
	bottom: -8px;
	 width: 258px;
    left: 37px;
}

#home-header h1:nth-child(3){
    font-size: 23px;
	padding: 39px 205px 0 36px;
	margin-bottom: 0;
	font-family: openSans-Light;
}


nav#home-nav {
    margin-bottom: 20px;
    position: relative;
    min-height: 485px;
	font-size: 30px;
}

nav#home-nav ul {
    list-style: none;
    padding: 0;
	line-height: 1.2;
}

div#home-nav-main {
    background-repeat: no-repeat;
    background-image: url(../img/gateway.png);
    min-height: 485px;
    z-index: 2;
    position: absolute;
    min-width: 517px;	
}
div#home-nav-main ul li a {
    color: #FFF;
}
div#home-nav-main ul li a:hover, #home-nav-sub ul li a:hover, div#home-nav-sub p a:hover {
    color: #f15b46;
    text-decoration: none;
}
div#home-nav-main ul li {
    margin: 45px 0px 0px 10px;
    font-weight: 600;    
    max-width: 30%;
}



div#home-nav-sub {
    min-height: 485px;
    z-index: 1;
    position: absolute;
    right: -15px;
	min-width: 803px;
}
div#desc2, div#desc3, div#desc4 {
  display: none;
}

div#initialDesc {
    background-repeat: no-repeat;
	background-image: url(../img/options.png);
	background-size: 803px 485px;
	height: 485px;
	width: 789px;
}
div#desc2 {
    background-repeat: no-repeat;
	background-image: url(../img/pubComm.png);
	background-size: 803px 485px;
	height: 485px;
	width: 789px;
}
div#desc3 {
    background-repeat: no-repeat;
	background-image: url(../img/experts.png);
	background-size: 803px 485px;
	height: 485px;
	width: 789px;
}
div#desc4 {
    background-repeat: no-repeat;
	background-image: url(../img/commGate.png);
	background-size: 803px 485px;
	height: 485px;
	width: 789px;
}
div#initialDesc {
	
}

#home-nav-sub ul {

}
#home-nav-sub ul li {
    line-height: 2;
}

div#home-nav-sub p {
    margin: 25px 0 15px 0;
	line-height: 1.2;
	width: 75%;
	font-weight: 400;
	font-family: openSans-Regular;
	font-size:30px;
	float: right;
}
div#home-nav-sub p a, #home-nav-sub ul li a{
 
	font-family: biko;
	line-height: 2;
	text-transform: lowercase;
	color: #e2a34d;
}

/* Bottom Footers All */

 
section.banner {
	color: #fff;
	margin-bottom: 20px;
	min-height: 200px;
} 


section.banner h3 {
    font-size: 30px;
	padding: 25px 0 30px 0;
	margin: 0;
	font-weight: 400;
    color: #FFF;
}


section.banner p
 {
    font-size: 20px;
	font-weight: 400;
	line-height: 1.5;
}

section.banner#policies-section,
section.banner#comm-depts{
	background: #a09e99;
}
section.banner#help-section 
{
	background: #5799a3;;
}
section.banner #search {
    text-align: center;
}

section.banner #hr, 
section.banner #vector, 
section#help-section #matrix {
    padding: 0px 0px 0 95px;
}
section.banner #cd {
    padding: 0 265px 12px 333px;
    font-size: 20px;
}
 .site-search-header input {
    min-height: 53px;
	width: 75%;
	color: #e2a34d;
	padding: 0 50px;
	font-size: 23px;
	font-style: italic;
	border: none;
}

 .site-search-header button {
    position: absolute;
	left: 72px;
	top: 0px;
	border: none;
	background-color: #FFF;
	background-image: url(../img/magnifyIcon.png);
	background-position: center center;
	background-repeat: no-repeat;
	min-height: 53px;
	min-width: 53px;
    
}


.home section.banner#help-section .matrix {
	background-image: url(../img/matrixIcon.png);
	background-repeat: no-repeat;
	min-height: 65px;
	max-width: 65px;
}
.home section.banner#help-section .interactive {
	background-image: url(../img/interactiveIcon.png);
	background-repeat: no-repeat;
	min-height: 65px;
	max-width: 86px;
}
section.banner#policies-section .hr {
	background-image: url(../img/hrIcon.png);
	background-repeat: no-repeat;
	min-height: 70px;
	max-width: 69px;
}
section.banner#policies-section .cg {
	background-image: url(../img/cgIcon.png);
	background-repeat: no-repeat;
	min-height: 79px;
	max-width: 50px;
}
section.banner#comm-depts .cd {
	background-image: url(../img/directoryIcon.png);
	background-repeat: no-repeat;
	min-height: 81px;
	max-width: 63px;
}

section.banner#help-section .desc{
	    padding: 0 40px 0 20px;
}
section.banner#help-section .vector {
	background-image: url(../img/vectorIcon.png);
	background-repeat: no-repeat;
	min-height: 79px;
	max-width: 98px;
}
section.banner#help-section .matrix {
	background-image: url(../img/matrixIcon.png);
	background-repeat: no-repeat; 
	min-height: 79px;
	max-width:67px;
}

/* Level One */
.levelOne .page-header{
	background-image: url(../img/header-darker.jpg);
	background-repeat: no-repeat;
	background-position: 0% 32%;
	max-height: 221px;
	margin-bottom: 20px;
	margin-top: 96px;
	padding-bottom: 0;
	border-bottom: 10px solid #f15b46;
	
}
#levelOne-header div{
    padding-top: 30px;
}
#levelOne-header div p{
	color: #e2a34d;
	text-shadow: 1px 1px rgb(0,0,0);
	line-height: 1;
	word-break: keep-all;
	width: 53%;
	font-weight: 100;
	font-size: 58px;
	font-weight: 700;
}
/*Main Content and Secondary Content */
.mainContent {
    background: linear-gradient(to right, #f9f8f4, #FFF);
    margin-bottom: 38px;
    min-height: auto;
}

.mainContent.sectionTwo{
	padding: 20px 70px;
	margin-top: 35px;
}

.mainContent h2 {
	display: inline-block;
	margin-top: 34px;
	font-size: 48px;
	color: #f15b46;
	line-height: 1;
	padding-right: 21px;
	padding-left: 5px;
}
.mainContent h2:nth-child(2) {
    margin: 0;
}
.mainContent h2.singleTitle {

    word-spacing: 9999999px;
}

.mainContent h3 {
    font-size: 36px;   
    font-weight: 400;
    padding: 50px 0 30px; 
}
.mainContent h4 {
    color: #da9738;
    font-size: 30px;
}

.mainContent h3, .mainContent h5 {
	 color: #5799a3;
} 
.mainContent h5 {
	font-size: 26px;
}
.mainContent h5 a {
    text-decoration: none;
}
.mainContent p {
	font-size: 24px;
	margin-top: 30px;
	color: #4f5356;
	font-weight: 600;
	font-family: openSans-Regular;
}
.mainContent p.link-instance, .mainContent p.contact {
	font-size: 26px;
}
 #levelTwo.mainContent p {
	margin-top: 0px;
}
.mainContent a{
	text-decoration: none;
	color: #5799a3;
}

.mainContent .content {
    min-height: 150px;
    padding: 25px 35px 0 35px;
}

.mainContent  .link-instance {
    margin: 0;
    background-image: url(../img/play-arrow.png) ;
	background-repeat: no-repeat;
	background-position: 185px;

}

/* PDN */
.pdnSections {
    padding-top: 110px;
}
.pdnSections:first-child {
    padding-top: 0px;
}
.clear {
    clear: both;
}
/* End Main Content */

/* Level Two */

.levelTwo img {
    height: 185px;
    width: 236px;
    float: left;
    margin: 0 30px 15px 0;
}
.levelTwo p, section#bulletList, section#boldType {
    font-size: 24px;
}
#boldType span {
    font-weight: 600;
}
section#boldType ul {
    list-style: none;
    padding: 0 0 70px 0;
}
section#bulletList, section#linkSection {
    margin-left: 28px;
}
section#linkSection p {
    font-size: 26px;
	font-style: italic;
}
/* Experts */
#experts.boxes {
    padding: 0 15px;
    margin: 0px 15px 100px 15px;
}
#experts.boxes .box {
    background: none;
    color: #050404;
    height: auto;
	margin: 100px 0 0 0;
}
#experts.boxes .box img {
    width: 122px;
    height: 96px;
	margin-bottom: 20px;
}
#experts.boxes .box .desc {
    display: block;
	padding: 20px 20px 0 20px;


}
#experts.boxes .box .desc p{
    line-height:1.2;
	margin: 0;
}
#experts.boxes .box .link {
    padding-top: 20px;
}
#experts.boxes .box .link a{
    color: #5799a3;
}


/* Portal - Landing  */
#landing.boxes {
    padding: 0 75px 50px 75px;
    margin-left: 0px;
}

#landing  .box {
    background: #a09e99;
	line-height: 1.2;
    width: 300px;
    height: 281px;
    margin: 20px;
}
#landing  .box a {
    color: #fff;
    font-size: 30px;
	text-decoration: none;

}

#landing  .image img {
    width: 105px;
	height: 98px;
	margin: 15px 70px 15px 70px;

}

#landing .title {
    padding-bottom: 10px;
	height: 27%;
}
#landing .title span {
    word-spacing: 9999999px;
}

#landing  .subheader {
    font-size: 24px;
	color: #ffe8c8;
}
/* Comm Options */
#commOptions.boxes {
    padding: 0 70px 50px 70px;
    margin-left: 1px;
}
#commOptions.boxes .box {
	background: #a09e99;	
	width: 481px;
	height: 195px;
	margin: 10px;
}
#commOptions.boxes .box .boxPhoto img {
    width: 118px;
    height: 138px;
    margin: 30px 0;
}

#commOptions.boxes .box .boxDesc {
    padding: 40px 40px;
	font-size: 30px;
	line-height: 1.2;
}
#commOptions.boxes .box .boxDesc a{
    color: #FFF;
	text-decoration: none;
}

/* Level Two */
#levelTwo-header.page-header{
	background-image: url(../img/header-darker.jpg);
	background-repeat: no-repeat;
	background-position: 0% 32%;
	max-height: 221px;
	margin-bottom: 20px;
	margin-top: 96px;
	padding-bottom: 0;
	border-bottom: 10px solid #f15b46;
	
}
#levelTwo-header div{
    padding-top: 30px;
}
#levelTwo-header div h1{
	color: #e2a34d;
	text-shadow: 1px 1px rgb(0,0,0);
	line-height: 1;
	word-break: keep-all;
	width: 53%;
	font-weight: 100;
	font-size: 58px;
	font-weight: 700;
}

/*Sub Navigation */
 nav#subnav {
	background-image: url(../img/mobileIcon.png);
	background-repeat: no-repeat;
	min-width: 261px;
	min-height: 169px;
	padding-right: 0px;
}
 nav#subnav .open{
	background-image: url(../img/mobileExtend.png);
	background-repeat: no-repeat;
	min-width: 430px;
	min-height: 169px;
}
nav#subnav .menuButton,  nav#subnav .homeButton{
	position: relative;
}
nav#subnav .menuButton span{
	background-image: url(../img/menuIcon.png);
	background-repeat: no-repeat;
	min-width: 52px;
	min-height: 49px;
	position: absolute;
	top: 51px;
	left: -85px;
	cursor: pointer;


}

nav#subnav .open .menuButton span{ 
left: -105px;
}


nav#subnav .homeButton span{
	background-image: url(../img/homeIcon.png);
	background-repeat: no-repeat;
	min-width: 52px;
	min-height: 49px;
	position: absolute;
	left: 33px;
	top: 49px;
	cursor: pointer;

}
nav#subnav .dropdown-menu{
	background-color: transparent;
	top: 139px;
	background-image: url(../img/dropdown.png);
	background-repeat: no-repeat;
	width: 313px;
	height: 318px;
	border: none;
	box-shadow: none;
	background-position: 0px 5px;
}
nav#subnav ul.menu {
    list-style: none;
    margin: 0;
    padding: 0;
}
nav#subnav ul.menu li {
    padding: 25px 50px 0px 30px;
}
nav#subnav ul.menu li a {
    color: #FFF;
    font-weight: 400;
	font-size: 24px;
	line-height: 1;
}
nav#subnav ul.menu li a:hover {
    color: #e2a34d;
    font-weight: 600;
	font-size: 26px;
	text-decoration: none;
}
/*Boxes */
.levelTwo div.boxes {
    padding: 0 50px;
    margin-left: 10px;
}
.levelTwo .boxes div.box {
	background: #a09e99;
	color: #FFF;
	width: 480px;
	height: 200px;
	margin: 20px;
}
.levelTwo .boxes .box div.boxPhoto {
	background-image: url(../img/image.png);
	background-repeat: no-repeat;
	width: 118px;
	height: 138px;
	margin: 30px 0;
}
.levelTwo .boxes .box div.boxDesc {
    margin: 30px 0 30px 30px;
	font-size: 36px;
	line-height: 1.2;
}
/*Tabs for Suitcase */
#org-tabs {
    padding: 0 35px;
	position: relative;
}
.tabbed-content {
    padding: 25px 70px 200px 70px;
}
#org-tabs ul {
    list-style: none;
    width: 100%;
}
#org-tabs ul, #org-tabs ul li {
    list-style-type: none;
    list-style-position: inside;
    margin: 0;
    padding: 0;
}
#org-tabs ul li#tab-tw-link {
	background: url(../img/tw.png) no-repeat;
    background-size: 359px 94px;
    width: 358px;
    height: 94px;
	float: left;
}
#org-tabs ul li#tab-va-link {
	background: url(../img/tab.png) no-repeat;
    background-size: 359px 94px;
    width: 358px;
    height: 94px;
	float: left;
}
#org-tabs ul li#tab-pg-link {
	background: url(../img/pg.png) no-repeat;
    background-size: 359px 94px;
    width: 358px;
    height: 94px;
	float: left;
}

#org-tabs ul li#tab-tw-link.activeTab {
	background: url(../img/tab-active.png) no-repeat;
    background-size: 359px 94px;
    width: 358px;
    height: 94px;
}
#org-tabs ul li#tab-va-link.activeTab {
	background: url(../img/active-va.png) no-repeat;
    background-size: 359px 94px;
    width: 358px;
    height: 94px;
}
#org-tabs ul li#tab-pg-link.activeTab {
	background: url(../img/active-pg.png) no-repeat;
    background-size: 359px 94px;
    width: 358px;
    height: 94px;
}
#org-tabs ul li a{
	font-size: 30px;
    color: #FFF;
    text-decoration: none;
    display: block;
    width: 20%;
	line-height: 1.2;
	padding: 10px 40px;
	font-family: biko-Bold;
}
#borderResourcesTabs {
    border-bottom: solid 20px #767676;
	width: 91.8%;
    position: absolute;
    left: 35px;
    top: 145px;
}
.tabbed-content ul{
	list-style: none;
}
.tabbed-content ul li a {
    color: #5799a3;
    font-size: 26px;
}
	
/*Advisories */
.slideContent{
  display:none;
}

.active{
  display:block;
}
#news-events {
    background-color: white;
    margin: 20px auto;
    padding: 25px 30px 30px 30px;
    position: relative;
	width: 102.5%;
	right: 14px;
}
#news-events .bx-controls {
    width: 100px;
    position: absolute;
    top: -40px;
    right: 0;
}
.bx-wrapper .bx-controls-direction a {
    text-indent: 0 !important;
    background-image: none !important;
    text-decoration: none;
    font-weight: 700;
    color: #d7d7d7;
    font-size: 50px;
    line-height: 20px;
	
}
.bx-wrapper .bx-viewport {
    -moz-box-shadow: 0 0 5px #ccc;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: none;
	margin-top: 25px;
}

#news-events h3 {
    padding: 0;
    color: #da9738;
	font-size: 36px;
    margin-top: 0;
}
#news-events h4, #news-events p {
	font-size: 24px;
	margin-top: 25px;
}
#news-events p {
    line-height: 1;
	font-weight: 400;
	padding: 0;
	margin: 0;
}

#news-events p a {
    text-decoration: none;
    color: #5799a3;
}
#news-events img {
    width: 243px;
    height: 171px;
}


.clear {
    clear: both;
}

/* Search Page */
#searchPage article {
    padding: 50px;
    line-height: 1.2;
    font-size: 15px;
}

#searchPage .site-search-header button{
	left: 0;
}
#searchPage article span {
    padding: 20px;
    font-style: italic;
}
/* Media 
@media screen and (max-width: 1080px) {
	
section.banner #search {
    text-align: center;
    padding: 0 100px;
}
.site-search-header input {
    width: 85%;
    padding: 0 60px;
}
.site-search-header button {
    left: 141px;
}

.mainContent h2 {
	font-size: 28px;
	line-height: 1;
	padding-right: 0;
	font-weight: 600;
}
nav#subnav .open {
    min-width: 329px;
    min-height: 147px;
    background-size: 323px 146px;
    z-index: 1;
}
nav#subnav {
    min-width: 250px;
    min-height: 169px;
    background-size: 250px 169px;
}
nav#subnav .menuButton span {
	left: -15px;
}
section.banner #hr, section.banner #cg, section.banner #vector, section#help-section #matrix {
    padding: 0 130px;
}
#commOptions.boxes .box {
    width: 590px;
}
#landing .box {
	width: 560px;
}
#landing .title {
    margin: 60px 0px 0px 0px;
}
#landing .subheader {
    padding: 0 35px;
}
#landing .image img {
    width: 150px;
    height: 150px;
    margin: 60px 0px 0px 0;
}
#news-events {
    width: 103.75%;
}
#org-tabs ul li#tab-tw-link.activeTab, #org-tabs ul li#tab-va-link.activeTab, #org-tabs ul li#tab-pg-link.activeTab {
    background-size: 220px 94px;
    width: 220px;
}
#org-tabs ul li#tab-pg-link.activeTab,#org-tabs ul li#tab-pg-link{
	background-size: 221px 94px;
}
#org-tabs ul li#tab-tw-link, #org-tabs ul li#tab-va-link, #org-tabs ul li#tab-pg-link {
    background-size: 220px 94px;
    width: 220px;
}
#borderResourcesTabs {
    top: 141px;
    width: 87.95%;
}
section.banner #cd {
    padding: 0 120px;
    font-size: 22px;
}
section#help-section.banner .desc {
    padding: 0 40px 0 10px;
}
	
}*/
@media screen and (max-width: 1280px) {
	div#home-nav-sub p {
    width: 60%;
	}
	#commOptions.boxes .box {
    width: 45%;
    margin: 5px;
}
#org-tabs ul li#tab-tw-link,
	#org-tabs ul li#tab-va-link,
	#org-tabs ul li#tab-pg-link,
	#org-tabs ul li#tab-tw-link.activeTab, 
	#org-tabs ul li#tab-va-link.activeTab ,
	#org-tabs ul li#tab-pg-link.activeTab {
	background-size: 290px 94px;
	width: 33.33%;
	height: 100%;
}
nav#subnav .menuButton span {
    left: -52px;
}
.mainContent h2 {
    font-size: 43px;
}
}
@media screen and (max-width: 980px) {
	#org-tabs ul li#tab-tw-link,
	#org-tabs ul li#tab-va-link,
	#org-tabs ul li#tab-pg-link,
	#org-tabs ul li#tab-tw-link.activeTab, 
	#org-tabs ul li#tab-va-link.activeTab ,
	#org-tabs ul li#tab-pg-link.activeTab {
	background-size: 210px 94px;
}
#borderResourcesTabs {
    top: 139px;
}
	nav#home-nav {
    font-size: 26px;
	}
	#home-header div {
    padding: 120px 0 0px 0;
}
	div#home-nav-sub p {
    width: 45%;
    font-size: 24px;
}
#commOptions.boxes .box {
    width: 100%;
}
div#home-nav-sub {
    min-width: 400px;
}
div#home-nav-main {
    background-size: 400px 485px;
}
nav#subnav {
    z-index: 1;
}
section.banner #cg, section.banner #hr, section.banner #cd, section#help-section #matrix, section.banner #vector {
    padding: 0 120px 0 140px;
}
section#help-section.banner .desc {
    padding: 0 40px 0 10px;
}
.site-search-header input {
    width: 65%;
    padding: 0 170px;
}	
.site-search-header button {
    left: 140px;
}
#commOptions.boxes .box .boxDesc {
    padding: 61px 0px;
    text-align: center;
}
nav#subnav .menuButton span {   
    left: -46px;
}
nav#subnav .open .menuButton span {
	left: -105px;
}
.mainContent h2.singleTitle {
    font-size: 40px;
}
.mainContent h2 {
    font-size: 27px;
}
.mainContent h3 {
    padding: 0;
}
nav#home-nav ul {
    font-size: 22px;
}
#landing .box {
    width: 49%;
    margin: 1px;
}
#news-events {

    width: 103.75%;
}
.bx-viewport {
    max-width: 84%;
}
}
@media screen and (max-width: 768px) {
	#home-header div {
    padding: 0;
}
span#borderHome {
    border-bottom: none;
}
.home .jumbotron {
    min-height: 0;
	margin: 0;
    position: initial;
    padding-bottom: 0;
}
.jumbotron {
	padding: 0;
    color: inherit;
    background-color: transparent;
}
	#home-header h1:nth-child(3) {
    padding: 30px 100px 0 36px;
}

#levelTwo-header.page-header, #experts.boxes .box {
    margin-top: 0;
}
nav#subnav .menuButton span, nav#subnav .open .menuButton span {   
    left: 110px;
}
	div#home-nav-sub {
    z-index: 1;
}
	div#home-nav-main {
    z-index: 2;
    max-width: 0;
    background-size: 445px 485px;
}
div#initialDesc, div#desc2, div#desc3, div#desc4 {
    background-repeat: no-repeat;
    background-image: url(../img/options.png);
    background-size: 460px 485px;
    height: 485px;
    width: 460px;
}
div#home-nav-sub p {
    width: 55%;
    font-size: 24px;
}


 #experts.boxes .box .link {
	padding: 0;
}
#landing .box {
    width: 100%;
	padding: 70px;
}
#landing .title {
    height: auto;
    padding: 0;
}


#news-events {
    width: 94.5%;
}
}
@media screen and (max-width: 360px) {
div#home-nav-sub {
    min-height: 0;
	
	}
	nav#subnav{
		min-width: 352px;
	}
nav#home-nav ul {
    padding: 15px;
	}
nav#home-nav {
    margin-bottom: 0;
	}
.container {
    padding: 0;
    margin: 0;
}

div#home-nav-sub, div#initialDesc, div#desc2, div#desc3, div#desc4  {
	display: none;
}
#home-header div,#levelTwo-header div {
    padding: 0;
}
#levelTwo-header.page-header {

    margin-bottom: 0;
    margin-top: 0;
    padding-bottom: 0;
}
.home .jumbotron {
    min-height: 0;
	margin: 0;
    position: initial;
    padding-bottom: 0;
}
.jumbotron {
	padding: 0;
    color: inherit;
    background-color: transparent;
}
div#home-nav-main {
    min-height: 0;
    z-index: 0;
    position: inherit;
    min-width: 0;
}

span#borderHome {
    border-bottom: none;
    top: 0;
}
nav#subnav, #home-nav, div#home-nav-main {
    background-image: none;
    background: #535356; 
	min-height: 40px;
}
nav#home-nav, nav#subnav ul.menu li a, nav#subnav ul.menu li a:hover {
	min-height: 0;
}

   
nav#subnav .homeButton {
    display: none;
} 
div#home-nav-main ul li {
    margin: 15px 0;
    font-weight: 600;
    max-width: 100%;
}
section#help-section.banner {
    width: 100%;
    padding: 0;
    margin: 0;
}
.site-search-header button {
    left: 0;
}
nav#subnav .menuButton span {
    position: absolute;
    top: 5px;
    left: 22px;
	background-size: 30px;
}
nav#subnav .open .menuButton span {
    left: 30px;
}
nav#subnav .open {
    min-height: 0;
}
.site-search-header input {
    padding: 0 28px;
    font-size: 16px;
}
.home section#help-section div#search {
    margin: 0 20px 20px;
}
.home section#help-section div#matrix, .home section#help-section div#interactive, section#policies-section div#hr, section#policies-section div#cg, section#comm-depts div#cd, section#help-section div#vector, section#help-section div#matrix {
    padding: 0 0 0 20px;
}
#home-header h1:nth-child(2), #levelTwo-header div h1 {
    font-size: 26px;
    font-weight: 600;
    padding: 10px 22px;
}
.mainContent h2, #org-tabs ul li a, .mainContent h2.singleTitle {
	font-size: 24px;
}

.mainContent h2:nth-child(2) {
    margin: 0;
}
div.title {
	width:100%;
}
#org-tabs, .pdnSections {
    padding: 0;
}
#org-tabs ul li a {
	width: 100%;
}
.mainContent h3, #news-events h3 {
	font-size:20px
}
section.banner h3, 
#commOptions.boxes .box .boxDesc, 
.mainContent h4 ,
.mainContent h5, 
#landing .box a,
#landing .subheader,
#news-events h4,
#news-events p,
.tabbed-content ul li a,
.mainContent p.link-instance, 
nav#home-nav, 
nav#subnav ul.menu li a, 
nav#subnav ul.menu li a:hover {
    font-size: 18px;
}
#landing .title {
    height: auto;
	padding: 0;
}
section.banner p, 
.mainContent p, 
.mainContent p.contact,
section.banner #cd, 
.levelTwo p, 
section#bulletList, 
section#boldType {
    font-size: 16px;
}
.mainContent p {
	margin-top: 0;
}
nav#subnav .dropdown-menu {
    top: 33px;
	width: 100%;
	height: 215px;
}
section.banner {
    margin-bottom: 0;
}
section#help-section.banner .desc, section#boldType ul {
    padding: 0;
}
#commOptions.boxes .box {
  
    width: 100%;
    height: 135px;
    margin: 5px;
}
#commOptions.boxes .box .boxDesc {
    padding: 22%;
    text-align: center;
}
#experts.boxes  {
    padding: 0;
    margin: 0;
}
.mainContent h3{
	padding: 20px 0;
	margin: 0;
}
#experts.boxes .box {
    margin: 15px 0 0 0;
}
#experts.boxes .box .link {
    padding-top: 0;
}
#landing .box {
    width: 100%;
    height: 130px;
    margin: 5px 0;
	padding: 10px;
}
section#bulletList, section#linkSection {
    margin-left: 0;
}
.tabbed-content {
    padding: 30px;
}
#org-tabs ul li#tab-tw-link,
#org-tabs ul li#tab-va-link,
#org-tabs ul li#tab-pg-link,
#org-tabs ul li#tab-tw-link.activeTab, 
#org-tabs ul li#tab-va-link.activeTab ,
#org-tabs ul li#tab-pg-link.activeTab {
background-size: 500px 48px;
width: 100%;
height: 48px;
background-position: -7px;
margin-top: 3px;
}
#borderResourcesTabs {
    border-bottom:none;
}
.mainContent .link-instance {
    background-position: 130px;
    background-size: 20px;
}
.mainContent.sectionTwo {
    padding: 10px 45px;
    margin-top: 0;
}
}
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<?php wp_head(); ?>
		
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,700i" rel="stylesheet">
	</head>
	<body id="main"<?php body_class(); ?>>
<main role="main" class="home">
	
	
	<!-- wrapper -->
		
		
			<!-- header -->
			<div id="home-header" class="jumbotron container">
				<div class="row text-left text-uppercase">			
					<h1 class="hidden-xs col-sm-12 col-md-12">Welcome</h1>
					<h1 class="col-xs-12 col-sm-12 col-md-12"><?php the_title(); ?><span id="borderHome"></span></h1>
					<h1 class="hidden-xs col-sm-12 col-md-12">tagline</h1>
				</div>
			</div>
			<!-- /header -->	
		

//header above 
<?php get_header('home'); ?>

	
			
		<div class="container">	

			<!-- nav -->
			<nav ID="home-nav" class="nav row" role="navigation">				
				<div id="home-nav-main" class="col-xs-12 col-sm-6 col-md-6  text-uppercase">
					<?php wp_nav_menu( 'header' ); ?>					
				</div>
				<div id="home-nav-sub" class="col-xs-12 col-sm-6 col-md-6 text-right"> 
					<div id="initialDesc" class="col-xs-12 col-sm-12 col-md-12 pull-right">
						<?php the_field('initialDesc'); ?>						
						<div class=" col-xs-12 col-sm-12 col-md-12 text-lowercase">
							<?php wp_nav_menu( array('theme_location' => 'extra-menu') ); ?>	
						</div>
					</div>	
					<div id="desc2" class="col-xs-12 col-sm-12 col-md-12 pull-right">
						
							<?php the_field('desc2'); ?>
								
					</div>
					<div id="desc3" class="col-xs-12 col-sm-12 col-md-12 pull-right">				
						<?php the_field('desc3'); ?>
					</div>
					<div id="desc4" class="col-xs-12 col-sm-12 col-md-12 pull-right">		
						<?php the_field('desc4'); ?>			
					</div>					
				</div>
				
			
			</nav>
			
			<?php get_template_part( 'templates/content', 'bannerHelpHome' ); ?>
			<?php get_template_part( 'templates/content', 'bannerCP' ); ?>
			<!-- /nav -->

			<!-- Section -->
			
			<!-- /section -->
		</div>	
		<!-- /wrapper -->	
	</main>

<?php get_footer(); ?>


//js
jQuery(document).ready(function($) {
	
	$(function () {
		
		// DOM ready, take it away
		$('.tabbed-content .tab').hide();
		var currenttab = $('.tabs ul li a').first().attr('rel');
		$('#'+currenttab+'-link').addClass('activeTab');
		var clickedtab = '';
		$('#'+currenttab).show();
		//$('.tabbed-content .tab').first().show();
		$('.tabs a').click(function() {
		  clickedtab = $(this).attr('rel');
		
		  if (clickedtab != currenttab) {
			  $('#'+currenttab+'-link').removeClass('activeTab');
			  $('#'+currenttab).hide();
			  currenttab = clickedtab;
			  $('#'+currenttab+'-link').addClass('activeTab');
			  $('#'+currenttab).fadeIn('normal');
			  //$('.tabbed-content .tab').hide();
			  //console.log(tab);
		  }
		});		
		
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });	

  
$(' .tabbed-content').on('click','a.externalLink', function(e) {
			   var url = $(this).attr('href');
			   window.open(url); return false;
	});

function getSelectedTabId(){
    return $("#tabs .ui-tabs-panel:visible").attr("id");
}
/* Hover Descriptions */
$("#menu-item-46").hover(function() {
    $("#initialDesc").show();
	$("#desc2").hide();
	$("#desc3").hide();
	$("#desc4").hide();
	

});

$("#menu-item-45").hover(function() {
    $("#desc2").show();
	$("#initialDesc").hide();
	$("#desc3").hide();
	$("#desc4").hide();
});
$("#menu-item-44").hover(function() {
    $("#desc3").show();
	$("#initialDesc").hide();
	$("#desc2").hide();
	$("#desc4").hide();
});
$("#menu-item-43").hover(function() {
    $("#desc4").show();
	$("#initialDesc").hide();
	$("#desc3").hide();
	$("#desc2").hide();
});
/*Slider Content Show/Hide Function */
 $(".bxslider a").click(function () {
	 
	 var num = $(this).attr('href');
						
        $(num).addClass('active');      
    				$(num).addClass('active').siblings().removeClass('active');
		
    });
	
	});
	
});


