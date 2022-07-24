

CREATE TABLE `contact` (
  `Contact_ID` int(12) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `DOB` varchar(255) DEFAULT NULL,
  `Mobile` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Contact_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO contact VALUES("1","Hancie Phago","Male","2060-01-20","9825915122","hanciewanemphago@gmail.com","Bhadrapur-2","1");
INSERT INTO contact VALUES("2","Nitesh Hamal","Male","2060-01-07","9813371345","nitesh0hamal@gmail.com","Arjundhara, Salbari","1");
INSERT INTO contact VALUES("3","Bardan Bhattarai","Male","2060-06-01","981-3786099 ","bardanbhattrai@gmail.com","Giri Chowk","1");
INSERT INTO contact VALUES("4","Naindra Raj Phago","Male","2048-03-12","9816043149","naindrarajphago@gmail.com","Bhadrapur-2","1");
INSERT INTO contact VALUES("5","Sayal Limbu","Male","2063-09-24","9825947907","sahilphago23@gmail.com","Bhadrapur-2","1");
INSERT INTO contact VALUES("6","Bina Wanem Phago","Female","2049-03-09","981-7941313 ","wanembg@gmail.com","Bhadrapur-2","1");



CREATE TABLE `daily_expenses` (
  `Expenses_ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `amount` bigint(20) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `date2` datetime DEFAULT NULL,
  PRIMARY KEY (`Expenses_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `daily_expenses_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO daily_expenses VALUES("2","2079-03-14","1600","Shopping","Vanja(Solon) and vanji(Trifen) shopping","1","2022-06-28 11:57:34");
INSERT INTO daily_expenses VALUES("3","2079-03-15","2500","Shopping","Sunita di lai surta suruwal kinideko","1","2022-06-29 10:49:38");
INSERT INTO daily_expenses VALUES("4","2079-03-17","3000","Travelling","KTM to Jhapa","1","2022-07-02 06:37:18");
INSERT INTO daily_expenses VALUES("5","2079-03-18","1000","Foods","Goodpath pustakari and apples expenses","1","2022-07-02 08:39:27");
INSERT INTO daily_expenses VALUES("6","2079-03-17","600","Hotel and Restaurant","Rs. 600 foods at ramnagar hotel","1","2022-07-02 08:41:10");
INSERT INTO daily_expenses VALUES("7","2079-03-19","500","Shopping","Meksi for mummy","1","2022-07-03 08:35:10");
INSERT INTO daily_expenses VALUES("8","2079-03-19","3000","Gym and Exercises","Sagarmatha Gym fees","1","2022-07-04 00:59:44");
INSERT INTO daily_expenses VALUES("9","2079-03-23","500","Fuel","Bike fuel","1","2022-07-07 06:12:33");
INSERT INTO daily_expenses VALUES("10","2079-03-23","4500","Repair and Maintenance","Bike tire repair and replace","1","2022-07-07 06:12:55");



CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO events VALUES("3","Nitesh Birthday","2023-04-20 00:00:00","2023-04-21 00:00:00","1");
INSERT INTO events VALUES("5","Hancie Birthday","2023-05-03 00:00:00","2023-05-04 00:00:00","1");
INSERT INTO events VALUES("7","Finish Cisco Python Class","2022-09-29 00:00:00","2022-09-29 00:00:00","1");



CREATE TABLE `loan` (
  `Loan_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(255) DEFAULT NULL,
  `Giver_Name` varchar(255) DEFAULT NULL,
  `Receiver_Name` varchar(255) DEFAULT NULL,
  `Amount` bigint(20) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `date2` datetime DEFAULT NULL,
  PRIMARY KEY (`Loan_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO loan VALUES("1","2078-12-20 ","Mahesh Hamal ","Hancie Phago","18000","Admission Fees","Due","1","2022-06-29 08:23:20");



CREATE TABLE `messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Logs` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO messages VALUES("1","Hancie Phago","9825915122","hanciewanemphago@gmail.com","hy","2022-06-26 05:32:33");
INSERT INTO messages VALUES("3","Sayal Limbu","+9779825947907","sahilphago23@gmail.com","Hello dai!","2022-07-10 09:39:20");



CREATE TABLE `notes` (
  `Note_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Notes` text DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Note_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

INSERT INTO notes VALUES("5","Sanima Bank","<p>Account No. is 023011060006398<br />
Mobile Banking:<br />
Username: 9825915122<br />
Password: hienih720<br />
Transaction pin: 0720<br />
<br />
e-banking login username and password:<br />
Customer ID: R000867402<br />
Login ID: R000867402<br />
Password: Hienih@720<br />
Phone Number: +977()9825915122</p>
","1");
INSERT INTO notes VALUES("6","Nepal Investment Bank Limited (NIBL)","<p>Account Number : 02805290251648<br />
Account Open Date : 11/21/2021<br />
Account Type : NIBL Online Saving Account<br />
Currency : NPR<br />
Branch Name : New Baneshwor<br />
Mobile Number : 9825915122<br />
E-mail ID : <a href="mailto:hanciewanemphago@gmail.com" rel="nofollow" target="_blank">hanciewanemphago@gmail.com</a></p>
","1");
INSERT INTO notes VALUES("7","Nabil Bank","<p>A/C Holder Name: HANCIE PHAGO<br />
Account Number: 04510017504567<br />
Bank Name: Nabil Bank<br />
Username: 9825915122<br />
Pw: hienih720<br />
ATM PIN: 0720</p>
","1");
INSERT INTO notes VALUES("8","NIC Bank","<p>We welcome you to NIC ASIA family. Your AC number is 0675759532890001.<br />
Transaction Pin: 2007<br />
Sir/Ma&#39;am, as per the provided details, your CRN number is M5-R01289952.<br />
<br />
Boid no: 1301370004434537</p>
","1");
INSERT INTO notes VALUES("9","Google Accounts","<p><a href="mailto:saugatgurung000@gmail.com" rel="nofollow" target="_blank">saugatgurung000@gmail.com</a><br />
Password- 100saugat<br />
<a href="mailto:gurungsaugat0001@gmail.com" rel="nofollow" target="_blank">gurungsaugat0001@gmail.com</a><br />
Password- 32gurung001<br />
<br />
<a href="mailto:sujitrai1890@gmail.com" rel="nofollow" target="_blank">sujitrai1890@gmail.com</a><br />
sujit@720<br />
<br />
<a href="mailto:Vemalleemboo07@gmail.com" rel="nofollow" target="_blank">Vemalleemboo07@gmail.com</a><br />
vimallimbu1234<br />
<br />
<a href="mailto:vemalkhonga08@gmail.com" rel="nofollow" target="_blank">vemalkhonga08@gmail.com</a><br />
limbukta1234<br />
<br />
<a href="mailto:herry1234720@gmail.com" rel="nofollow" target="_blank">herry1234720@gmail.com</a><br />
hienih720<br />
<br />
<a href="mailto:rohankhawas2007@gmail.com" rel="nofollow" target="_blank">rohankhawas2007@gmail.com</a><br />
hienih720<br />
<br />
<a href="mailto:kreetikashrestha1212@gmail.com" rel="nofollow" target="_blank">kreetikashrestha1212@gmail.com</a><br />
hienih720<br />
<br />
<a href="mailto:darpankattel@gmail.com" rel="nofollow" target="_blank">darpankattel@gmail.com</a><br />
hienih720<br />
<br />
<a href="mailto:bardanbhattb@gmail.com" rel="nofollow" target="_blank">bardanbhattb@gmail.com</a><br />
bardanbhattc@...<br />
bardanbhattd@..<br />
Pass _#freefire sabko<br />
<br />
<a href="mailto:rockstarbardan@gmail.com" rel="nofollow" target="_blank">rockstarbardan@gmail.com</a><br />
#bhattu@123<br />
<br />
<a href="mailto:praveshrai5334@gmail.com" rel="nofollow" target="_blank">praveshrai5334@gmail.com</a><br />
wearetheteam<br />
<br />
<a href="mailto:praveshrai479@gmail.com" rel="nofollow" target="_blank">praveshrai479@gmail.com</a><br />
wearetheteam<br />
<br />
<a href="mailto:parajuliraja0@gmail.com" rel="nofollow" target="_blank">parajuliraja0@gmail.com</a><br />
Sandip@720<br />
<br />
<a href="mailto:bardanbhattrai@gmail.com" rel="nofollow" target="_blank">bardanbhattrai@gmail.com</a><br />
@bhattu123<br />
<br />
<a href="mailto:resankhadka720@gmail.com" rel="nofollow" target="_blank">resankhadka720@gmail.com</a><br />
Resan@720<br />
<br />
<a href="mailto:priyashlimbu720@gmail.com" rel="nofollow" target="_blank">priyashlimbu720@gmail.com</a><br />
priyash@720<br />
<br />
<br />
&nbsp;</p>
","1");
INSERT INTO notes VALUES("10","College Account","<p><a href="https://breo.beds.ac.uk/" rel="nofollow" target="_blank">https://breo.beds.ac.uk/</a><br />
Username: 2126466<br />
Password: Bedfordshire03052003<br />
<br />
&nbsp;</p>
","1");
INSERT INTO notes VALUES("11","Gastric Medicines","<p>Rabeprazole Tableets IP 20 mg - use to treat gastric and heart burn</p>
","1");
INSERT INTO notes VALUES("12","Nitesh Birthday Wishes","<p>You are there for me whenever I really need you, no matter where you are or what you are doing. To me, you are nothing less than one of my family members. I don&#39;t know what will happen tomorrow or where will the two of us be. But today I just want to thank you for being always supportive to me. On this special day, I wish you everything in this world. Hope you find every nicest thing in your life. May God bless every day that you live and every moment that you enjoy. Have a very happy and eventful birthday my best friend Nitesh 🎂🎂🎂🎉🎉🎉🎉🎉❤️❤️❤️❤️</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
","1");
INSERT INTO notes VALUES("13","Java assignment feedback","<p>Your report is well presented and professional and covers all of the requirements of the assignment. You were provided with guidance on report structure and even with a report template for Assignment 2 and you have used this&nbsp;</p>

<p>There is a title page and there is a table of contents.</p>

<p>There is a good Introduction/Overview.</p>

<p>There is a good Task Description.</p>

<p>You have a Project Plan</p>

<p>There is an Overview of Functional, Non-Functional and Usability Requirements</p>

<p>Your Design section includes Use Case diagram and Activity diagrams with Fig. Nos., captions and explanations.</p>

<p>You have included use case specifications</p>

<p>&nbsp;</p>

<p>There is a Class Diagram with an explanation<br />
EVERY DIAGRAM NEEDS A FIG NO, CAPTION AND EXPLANATION. YOU HAVE DONE THIS CONSISTENTLY<br />
There is an Entity Relationship Diagram, with an explanation. This has been implemented using the commercially acceptable Visual Paradigm CE.<br />
An ERM consists of an ERD plus a list of entities. You have done this<br />
There is a Data Dictionary.&nbsp;<br />
There is a list of skeleton tables.<br />
You have made a good attempt at Interface Design with explanations.<br />
You have a very good Implementation section.<br />
There is a very good testing section and you have followed the guidance given.&nbsp;<br />
You have reflected on and discussed your assignment work in detail.<br />
You have a list of references and you have a Conclusion<br />
There is an Appendix that contains all your well-presented, and fully commented code. The Appendix includes a lot of other relevant information<br />
You have uploaded the zipped code and have produced a functional application.<br />
You have uploaded a recording demo in your application.<br />
This is excellent and well-documented work - your report is comprehensive.</p>
","1");
INSERT INTO notes VALUES("14","Movies List","<p>The shawshank redemption, &nbsp;Inception ,Interesteller,Shutter island, Pulp fiction,12 angry men,The green mile,Forrest grump ,The prestige, Mr.nobody,Source code,Triangle,The matrix,In time, Dr.strange, ,The escape plan,life is beautiful,Hachiko,A &nbsp;beautiful mind,Theory of everything,Perfume,Olympus has fallen,Gravity,Martian,Wanted,Fight club,Inside out,John wick,Now u see me,Coherence,Unlocked,Dictator,Predestination,Eternal sunshine of the spotless mind,The illusonist,Looper,V for vendetta, Seven,Momento,Rear window,Vertigo,The thing,The sixth sense, The Bourne Ultimatum,Lone survior, October sky,Wall-E, Rango,Hector,Upside down, Conclusion,Split, Uninvited,300, Flowers of war,Miracle in cell no.17, Saving pirate ryan, The terminal, Old boy,Hobbit, Silence of lambs,The kite runner,Back to the future, persuit of happiness, The pianist, The equilizer, The dictator, Butterfly effect, The foreigner, The tourist, Psycho, Hacksaw ridge, &nbsp;Devil&#39; s double, Repo men, Hide and seek, Frequency,Time lapse, The usual suspect, The accountant, I origin, Shot caller, The jacket, Thor Raganharok, Gone with the wind, Good fellas, The shining, Jaws, A space odyssey, Leon, Avatar, Cadence, The fifth element, The fugitive, The Birds, Heat, Taken , De ja vu, Infinity Chamber.<br />
&nbsp;</p>
","1");
INSERT INTO notes VALUES("15","Netflix","<p>Netflix details :</p>

<p>iser86@fundeg.club<br />
Pass: 031031</p>

<p>Your Profile Name:User 5<br />
Pincode: 5009</p>

<p>&nbsp;</p>

<p>Id: rnb@gokyotech.com<br />
Pw: snap101<br />
Profile: &nbsp;Barsha<br />
Pin: &nbsp;2090</p>
","1");
INSERT INTO notes VALUES("16","Anime List","<p># Anime</p>

<p>1. Naruto</p>

<p>2. Idaten Jump</p>

<p>3. Naruto Shippuden</p>

<p>4. Tokyo Ghoul</p>

<p>5. Attack on Titan</p>

<p>6. Demon Slayer</p>

<p>7. Black Clover</p>

<p>8. Haikyuu</p>

<p>9. Ushio &amp; Tora</p>

<p>10. Bungo Stray Dogs</p>

<p>11. One Piece</p>

<p>12. Assassination Classroom</p>

<p>13. Jujutsu Kaisen</p>

<p>14. My Hero Academia</p>

<p>15. Tokyo Revengers</p>

<p>16. Horimiya</p>

<p>17. Seven Deadly Sins</p>

<p>18. One Punch Man</p>

<p>19. Your Name</p>

<p>20. Mushoku Tensei:&nbsp;***Jobless Reincarnation***</p>

<p>21. The God of High School</p>

<p>22. Scissor Seven</p>

<p>23. Fairy Tail</p>

<p>24. Hunter x Hunter</p>

<p>25. Plunderer&nbsp;</p>

<p>26. The Daily Life of the Immortal King</p>

<p>27. Spy x Family</p>
","2");



CREATE TABLE `password` (
  `Password_ID` int(11) NOT NULL AUTO_INCREMENT,
  `URL` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Account` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Password_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `password_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

INSERT INTO password VALUES("1","Google.com","Google","hanciephago@gmail.com","hienih720","1");
INSERT INTO password VALUES("2","github.com","Github","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("3","apple.com","Apple","hanciewanemphago@gmail.com","Hienih@720**##2f","1");
INSERT INTO password VALUES("4","https://breo.beds.ac.uk/","Breo","2126466","Bedfordshire03052003","1");
INSERT INTO password VALUES("5","evision.beds.ac.uk","Evision","2126466","hienih720","1");
INSERT INTO password VALUES("6","customer.cgnet.com.np","CG Wifi","9825915122","9825915122","1");
INSERT INTO password VALUES("7","cisco.com","Cisco","hancie.phago@study.beds.ac.uk","Hienih@720","1");
INSERT INTO password VALUES("8","Terabox","Terabox","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("9","esewa.com.np","Esewa","9825915122","Hienih@720","1");
INSERT INTO password VALUES("10","facebook.com","Facebook","9816043149","phago12345","1");
INSERT INTO password VALUES("11","facebook.com","Facebook","9863606021","hienih720","1");
INSERT INTO password VALUES("12","firstlink.net.np","Firstlink Wifi","bdp_hancie","12345","1");
INSERT INTO password VALUES("13","Netflix.com","Netflix ","Jerushalimboo@gmail.com","Jerusha123","1");
INSERT INTO password VALUES("14","account.xiaomi.com","Xiaomi (MI)","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("15","axiata.com","Ncell","9825915122","Hienih@720**##2f","1");
INSERT INTO password VALUES("16","cloudflare.com","Cloudflare","hanciewanemphago@gmail.com","hienih@720","1");
INSERT INTO password VALUES("17","daftsex.com","Daftsex","darpankattel@gmail.com","hienih720","1");
INSERT INTO password VALUES("18","e-sathi.com","e-sathi","Hancie720","hienih720","1");
INSERT INTO password VALUES("19","zoom.us","Zoom","hanciewanemphago@gmail.com","Hienih720","1");
INSERT INTO password VALUES("20","xvideos.com","Xvideos","wanemclub@gmail.com","hienih720","1");
INSERT INTO password VALUES("21","xnxx.com","Xnxx","wanemclub@gmail.com","hienih720","1");
INSERT INTO password VALUES("22","wordpress.com","Wordpress","hanciewanemphago@gmail.com","Hienih@720","1");
INSERT INTO password VALUES("23","wordpress.org","Wordpress","hancie720","hienih@720**##2f","1");
INSERT INTO password VALUES("24","developers.uptodown.com","Uptodown","hanciewanemphago@gmail.com","Hancie1234","1");
INSERT INTO password VALUES("25","twitter.com","Twitter","Hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("26","codepen.io","Codepen","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("27","infinityfree.net","Infinity Web Hosting","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("28","infinityfree.net","Infinity Web Hosting","wanemclub@gmail.com","hienih720","1");
INSERT INTO password VALUES("29","khalti.com","Khalti","9825915122","hienih720","1");
INSERT INTO password VALUES("30","linkedin.com","Linkedin","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("31","notion.so","Notion","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("32","https://student.patancollege.edu.np/","PCPS College","2202112583","49h3emw5","1");
INSERT INTO password VALUES("33","patient.info","Patients","hamronepalihealth@gmail.com","Hienih@720**##2f","1");
INSERT INTO password VALUES("34","paypal.com","Paypal","Hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("35","https://www.pinterest.com/","Pinterest","Hanciewanemphago@gmail.com","signed in with www.facebook.com","1");
INSERT INTO password VALUES("36","pornhub.com","Pornhub","ashus720","hienih720","1");
INSERT INTO password VALUES("37","pornhub.com","Pornhub","wanemclub@gmail.com","hancie1234","1");
INSERT INTO password VALUES("38","register.com.np","Register Domain","wanemclub@gmail.com","hienih720","1");
INSERT INTO password VALUES("39","https://m.facebook.com/?_rdr","Facebook ","nitesh0hamal@gmail.com","hienih@720**##2f","2");
INSERT INTO password VALUES("40","www.tiktok.com","Tiktok","9825915122 or hanciewanem","hienih720","1");
INSERT INTO password VALUES("41","tiktok.com","TikTok","niteshhamal","hienih720","1");
INSERT INTO password VALUES("42","www.tiktok.com","Tiktok","nitishahamal@gmail.com","hienih720","1");
INSERT INTO password VALUES("43","accounts.google.com","Google","hamronepalihealth@gmail.com","hienih720","1");
INSERT INTO password VALUES("44","Google.com","Google","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("45","Google.com","Google","wanemclub@gmail.com","hienih720","1");
INSERT INTO password VALUES("46","www.hancie-phago.com.np","Hancie Phago Website","hanciephago@gmail.com","0720","1");
INSERT INTO password VALUES("47","www.hancie-phago.com.np","Hancie Phago Website","nitesh0hamal@gmail.com","0720","1");
INSERT INTO password VALUES("48","infinityfree.net","Infinity Web Hosting","hanciephago@gmail.com","hienih720","1");
INSERT INTO password VALUES("49","https://sajiloebanking.sanimabank.com/","Sanima Sajilo e-Banking","9825915122","Hienih@720","1");
INSERT INTO password VALUES("50","amazon.in","Amazon","hanciewanemphago@gmail.com","hienih@720","1");
INSERT INTO password VALUES("51","adobe.com","Adobe","hanciewanemphago@gmail.com","H4@22!@sseh1234","1");
INSERT INTO password VALUES("52","www.daraz.com.np","Daraz","9825915122","hienih720","1");
INSERT INTO password VALUES("53","discord.com","Discord","hanciewanemphago@gmail.com","hienih720","1");
INSERT INTO password VALUES("54","outlook.live.com/mail","Outlook","hanciephago@2url.one","Hienih@720
","1");



CREATE TABLE `projects` (
  `Project_ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `progress` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Project_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO projects VALUES("1","2079-02-01","Naindra Tea Farming","Web Application","100","Active","1");
INSERT INTO projects VALUES("2","2079-03-28","NH Nepali Dictionary ","Desktop Application","100","Completed","1");
INSERT INTO projects VALUES("3","2079-03-28","Wanem Unicode Converter","Desktop Application","100","Completed","1");
INSERT INTO projects VALUES("4","2079-03-28","Hancie Phago","Website","100","Completed","1");
INSERT INTO projects VALUES("5","2079-03-28","Hancie e-Learning Studio","Web Application","100","Active","1");
INSERT INTO projects VALUES("6","2079-03-28","Hamro Nepali Health","Web Application","100","Active","1");



CREATE TABLE `saving` (
  `Saving_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(255) DEFAULT NULL,
  `Amount` bigint(20) DEFAULT NULL,
  `Income_Source` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Saving_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `saving_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO saving VALUES("1","2079-03-16","11000","By Parent","Total 3 months saving in NIBL Bank","1");



CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO users VALUES("1","Hancie Phago","2003-03-20","9825915122","hanciephago@gmail.com","KTM","07202007");
INSERT INTO users VALUES("2","Nitesh Hamal","2003-03-07","9813371345","nitesh0hamal@gmail.com","KTM","0720");
INSERT INTO users VALUES("3","Bardan Bhattarai","2003","9813371456","bardanbhattarai@gmail.com","Bhdrapur","Bardan720");

