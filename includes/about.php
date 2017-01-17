<?php

?>	
	<div data-role="page" id="about">
		<!--Menu Panel-->
		<?php include 'includes/panel.php'; ?>
		<!-- /Menu Panel-->
		<div data-role="header" data-theme="b" id="about">
			<a href="#" data-rel="back" class="ui-btn-left ui-btn ui-icon-back ui-btn-icon-notext ui-shadow ui-corner-all" data-role="button" role="button">Back</a>
			<a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn-right ui-btn-b ui-icon-bars ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all ui-first-child" role="button">My button</a>
			<h1>About</h1>
		</div><!-- /header -->
		<picture>
			<source srcset="images/CRAIG_450.png" media="(min-width: 480px)">
			<img src="images/CRAIG_300.png" class="avatar" alt="Craig Bell">
		</picture>
		<div role="main" class="ui-content">
			<div class="ui-grid-solo">
				<div class="ui-block-a">
					<p>Craig Bell deviated away from his undergraduat studies in Fine Art ('05 - '09) to practise in IT where he had already used computers and technology for almost two decades.  It was due to his flare with video and audio editing (in his course), toying with the family router, printers, MS DOS family pc and much, much more that he took an interest in the Masters conversion course at University College Dublin ('12 - '13).</p>
					<p>Introduced to a foundation of Web Development, Relational Database Design and various programming language modules Craig passed through the postgraduate world unscathed. His path, after working in an internship shortly after his studies and Realex Payments for a brief 11 months, was slightly bumpy when he was without work for a total of 8 months (3 months before and 5 months after starting at Realex).  Nonetheless, he continued to work ahead to seek his next adventure and shortly after being accepted on to a Springboard programme (WebElevate 4.0) he was given another chance where he began to work in one of the top IT Solutions companies (with over 80 customers) for credit unions in Ireland. The company has customers based in Northern Ireland, Republic of Ireland and Scotland.</p>
					<p>Currently Craig is training for a new role based within Shared Services for Wellington IT Solutions.  The role involves continuous proactive monitoring of various services.  There serveices include the processing of electronic payments (EFT), Irish Credit Bureau checks and extracts, ATM transmission files, third party files and more.</p>
					<!--Details on each course-->
					<?php include 'includes/modules.php'; ?>
					<!-- /Details on each course-->
				</div>
			</div>
			<div class="ui-grid-a"><div class="ui-block-a"><a href="#" class="ui-btn ui-corner-all ui-btn-icon-left ui-icon-carat-l">Previous</a></div><div class="ui-block-b"><a href="#projects"  class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-carat-r">Next</a></div>
			</div>
		</div><!-- /content -->
		<div data-role="footer" data-theme="b">
			<p class="reference"><a href="https://github.com/redbairn">© 2016 REDBAIRN</a></p>
		</div><!-- /footer -->
	</div><!-- /page -->