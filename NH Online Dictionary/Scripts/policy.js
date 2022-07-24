function func_policy(val) {
	document.getElementById('policy_content').innerHTML=" ";
	func_policy_l();
	document.getElementById(val.id).classList.add('policy_sb_hovered');
	if (window.matchMedia("(orientation: portrait)").matches){
		close_pop();
	}
	if (val.id=="policy_sb_1") {
		var a=document.getElementById('policy_content');
		a.innerHTML='<p class="title_policy">License Agreement:</p><br>Our main aims in gathering information are to deliver and enhance our Service, handle your orders, stay in touch with you, and make the Site more enjoyable and simple to use for visitors. We will ask you for personally identifiable information when you want to get in touch with us, register an account on the Site, or update your account settings. The term "Personal Information" refers to details about you that could be utilized to get in touch with or locate you.<br> ';
	}
	else if (val.id=="policy_sb_2") {
		document.getElementById('policy_content').innerHTML='<p class="title_policy">Google AdSense<p><br>The website is linked with Google AdSense to provide ads, and this is the only means we earn from. Google AdSense or any other third party vendors may use cookies to serve ads based on your\'s prior visits to our website. Google uses cookies based on your visit to our site and/or other sites on the Internet. You can opt out of personalized advertising by visiting ads Setting(here https://www.google.com/settings/ads). You can opt out of a third-party vendor\'s use of cookies for personalized advertising by visiting www.aboutads.info. You can visit them at adesnse.google.com and read their terms of use and so on. ';
	}
	else if (val.id=="policy_sb_3") {
		document.getElementById('policy_content').innerHTML='<p class="title_policy">We have framed some of the YouTube videos</p><br>The site contains a page, named D-Tube that has framed-youtube videos from my personal channel of youtube(Darpan\'s Memoir). The number of views from my website is also counted on my total views in youtube, that is, if you\'re logged-in in youtube or any google services in the browser, you see the video onbehalf of that channel. You can also add videos to watch-later or use any youtube provided services in the iFrame.<br><br><p class="title_policy">We also have framed some Twitter posts</p><br>The site contains some twitter posts posted by my twitter account (Darpan Kattel), which means if you\'re pre-logged-in in twitter in the browser you will see the posts on behalf of the account. You also will be able to like and use other services of twitter as it provides in framed contents. Remember we donot collect any information in this service rather than publicly accessed twitter details.<br><br><p class="title_policy">We have also added follow  button and message button of twitter</p><br>As above, we have framed follow and message button whhich means that, you will be able to follow or message me with pre-logged-in account in the browser or by logging-in post licking the button. Remember we donot collect any information in this service rather than publicly accessed twitter details.';
	}
	else if (val.id=="policy_sb_4") {
		document.getElementById('policy_content').innerHTML='<p class="title_policy">We use cookies</p><br>Cookies are small data files stored on your hard drive by a Site. Among other things, cookies help us improve our Site and your experience. We use cookies to see which areas and features are popular and to count visits to our Site. We may use third party cookies, which are served by service providers on our Services, and can be used by such service providers to recognize your computer or mobile device when it visits other sites. you can view more about third parties and their cookie policy from our <b>Thrid party</b> tab ';
	}
	else if (val.id=="policy_sb_5") {
		document.getElementById('policy_content').innerHTML='<p class="title_policy">Cached data</p><br>We store cached data in your system for faster and quicker access to our site whenever you re-visit it. It means, we donot store any other sensetive information rather than our Cascading Style Sheet(CSS) file, JavaScript files and Images.';
	}
	else if (val.id=="policy_sb_6") {
		document.getElementById('policy_content').innerHTML='<p class="title_policy">We use Google Anaytics</p><br>Google Analytics is a web analytics service provided by Google, Inc. (\'Google\'), to better assist websites in understanding how the Site is used. Google Analytics will place cookies on your computer that will generate information that we select about your use of the Site, including your computer\'s IP address. That information will be transmitted to and stored by Google. The information will be used for the purpose of evaluating consumer use of the Site, compiling reports on Site activity, and providing other services relating to Site activity and usage. Google may also transfer this information to third parties where required to do so by law, or where such third parties process the information on Google\'s behalf. You may refuse the use of cookies by selecting the appropriate settings on your browser. Please note that by doing so, you may not be able to use the full functionality of the Site. The use of cookies by Google Analytics is covered by Google\'s Privacy Policy, available at: https://policies.google.com/privacy.';
	}
	else if (val.id=="policy_sb_7") {
		document.getElementById('policy_content').innerHTML='<p class="title_policy">Third Party Sites and Links</p><br>Our Services may contain links to third party sites and features. This Policy does not cover the privacy practices of such third parties. These third parties have their own privacy policies and we do not accept any responsibility or liability for their sites, features or policies. Please read their privacy policies before you submit any data to them. ';
	}
	else if (val.id=="policy_sb_8") {
		document.getElementById('policy_content').innerHTML='<p class="title_policy">Changes to This Policy</p><br>We may change this Policy from time to time. If we make any changes to this Policy, we will change the \'Last Updated\' date above. If we make any material change(s) to the Policy, we will post a notice on our Site prior to such changes(s) taking effect. ';
	}
	else if (val.id=="policy_sb_9") {
		document.getElementById('policy_content').innerHTML='<p class="title_policy">Contacting Us</p><br>If you have any questions about this Privacy Policy, please contact us at hanciephago@2url.one ';
	}
	else{
		console.log('mismatch');
	}
}
function func_policy_l() {
	document.getElementById('policy_sb_1').classList.remove('policy_sb_hovered');
	document.getElementById('policy_sb_2').classList.remove('policy_sb_hovered');
	// document.getElementById('policy_sb_3').classList.remove('policy_sb_hovered');
	document.getElementById('policy_sb_4').classList.remove('policy_sb_hovered');
	document.getElementById('policy_sb_5').classList.remove('policy_sb_hovered');
	document.getElementById('policy_sb_6').classList.remove('policy_sb_hovered');
	document.getElementById('policy_sb_7').classList.remove('policy_sb_hovered');
	document.getElementById('policy_sb_8').classList.remove('policy_sb_hovered');
	document.getElementById('policy_sb_9').classList.remove('policy_sb_hovered');
}
function close_pop(){
	document.getElementById('policy_side_bar').style.transform='translateY(-100%)';
}
function menu_icon(){
	document.getElementById('policy_side_bar').style.transform='translateY(0%)';
}

