<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/privacy.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/footer.css' rel='stylesheet' type='text/css'></link>
</head>
<body>
  <?php
  include("config.php");
  $con=myConnection();
  if(isset($_POST['mail'])){
  $ml=$_POST['email'];
  if(!empty($ml)){
  $dt=date('Y-m-d');
  $sql="Insert into mailing values('$ml','$dt')";
  if(mysqli_query($con,$sql)){
    myAlert("Thank you for subscribing");
  }
  else{
    myAlert("Sorry It could not be done.");
  }
}
else{
  myAlert("Enter your mail.");
}
}
?>
<div id="container">
	<header>
    <div id='nav'>
      <ul>
        <img src="hotel/logo.jpg" alt="Company's Logo" style="width:300px;height:60px;">
        <li><a href="checkin.php" id="book_now"><img src="hotel/checkin.jpg" alt="Boking Option" style="height:40px;width:150px"></a></li>
        <li><a href="about.php">ABOUT US</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">SERVICES</a>
            <div class="dropdown-content">
                <a href="./meeting.php">MEETING & EVENTS</a>
                <a href="./wedding.php">WEDDINGS</a>
                <a href="./show_spa.php">SPA</a>
                <a href="./show_transport.php">TRANSPORTATION</a>
                <a href="./show_beauty.php">HAIR & BEAUTY SALOON</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">CUISINE</a>
            <div class="dropdown-content">
                <a href="./show_restaurant.php">KINGSMEN RESTAURANT</a>
                <a href="./show_bar.php">BAR NINETEEN 12</a>
                <a href="./show_pool">POOL LOUNGE</a>
                <a href="./show_cafe">CABANA COFFEE</a>
            </div>
         </li>
         <li><a href="offers.php">OFFERS</a></li>
         <li><a href="show_rooms.php">SUITES & ROOMS</a></li>
         <li><a href="home.php">HOME</a></li>
      </ul>
    </div>
</header>
	
		<div id="content" style="font-family: helvetica;font-size: 20;color:black; background-color: white;position: relative;top:100px;text-align:left;height: 1750px">
		We, Dorchester Services Limited, for itself and on behalf of its affiliates, are committed to protecting and respecting your privacy.

    This policy (together with our terms of use www.dorchestercollection.com/en/terms/ and any other documents referred to on it) sets out the basis on which any personal data we collect from you, or that you provide to us, will be processed by us.  Please read the following carefully to understand our views and practices regarding your personal data and how we will treat it.
    Information we may collect from you<br>

    We may collect and process the following data about you:

    Information that you provide by filling in forms on our site www.dorchestercollection.com .  This includes information provided at the time of registering to use our site,subscribing to our service, posting material or requesting further services.  We may also ask you for information when you report a problem with our site.
    If you contact us, we may keep a record of that correspondence.
    We may also ask you to complete surveys that we use for research purposes, although you do not have to respond to them.
    Details of transactions you carry out through our site and of the fulfilment of your orders.
    Details of your visits to our site including,but not limited to, traffic data, location data, weblogs and other communication data, whether this is required for our own billing purposes or otherwise and the resources that you access.<br>
    IP addresses

    We may collect information about your computer, including where available your IP address,operating system and browser type, for system administration and to report aggregate information to our advertisers.  This is statistical data about our users???browsing actions and patterns, and does not identify any individual.<br>

    Where we store your personal data

    The data that we collect from you may be transferred to, and stored at, a destination outside the European Economic Area (???EEA???).  It may also be processed by staff operating outside the EEA who work for us or for one of our suppliers. Such staff may be engaged in, among other things, the fulfillment of your order, the processing of your payment details and the provision of support services.  By submitting your personal data, you agree to this transfer, storing or processing.  We will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this privacy policy.<br>

    All information you provide to us is stored on our secure servers.  Any payment transactions will be encrypted using SSL technology.

    WHERE WE HAVE GIVEN YOU (OR WHERE YOU HAVE CHOSEN) A PASSWORD WHICH ENABLES YOU TO ACCESS CERTAIN PARTS OF OUR SITE, YOU ARE RESPONSIBLE FOR KEEPING THIS PASSWORD CONFIDENTIAL. WE ASK YOU NOT TO SHARE A PASSWORD WITH ANYONE.

    Unfortunately, the transmission of information via the internet is not completely secure.  Although we will do our best to protect your personal data, we cannot guarantee the security of your data transmitted to our site; any transmission is at your own risk.  Once we have received your information, we will use strict procedures and security features to try to prevent unauthorized access.<br>

    Uses made of the information

    We use information held about you in the following ways:

    To ensure that content from our site is presented in the most effective manner for you and for your computer.
    To provide you with information, products or services that you request from us or which we feel may interest you, where you have consented to be contacted for such purposes.
    To carry out our obligations arising from any contracts entered into between you and us.
    To allow you to participate in interactive features of our service, when you choose to do so.
    To notify you about changes to our service.
    We may also use your data, or permit selected third parties to use your data, to provide you with information about goods and services which may be of interest to you and we or they may contact you about these by post or telephone.

    If you are an existing customer, we will only contact you by electronic means (e-mail or SMS) with information about goods and services similar to those which were the subject of a previous sale to you.<br>

    If you are a new customer, and where we permit selected third parties to use your data, we (or they) will contact you by electronic means only if you have consented to this.
    
    If you do not want us to use your data in this way, or to pass your details on to third parties for marketing purposes, please tick the relevant box situated on the form on which we collect your data.
    
    We do not disclose information about identifiable individuals to our advertisers, but we may provide them with aggregate information about our users (for example, we may inform them that 500 men aged under 30 have clicked on their advertisement on any given day).  We may also use such aggregate information to help advertisers reach the kind of audience they want to target (for example, women in SW1).  We may make use of the personal data we have collected from you to enable us to comply with our advertisers??? wishes by displaying their advertisement to that target audience.<br>
    
    Disclosure of your information

    We may disclose your personal information to any member of our group, which means our subsidiaries,our ultimate holding company and its subsidiaries, as defined in section 1159 of the UK Companies Act 2006.

    We may disclose your personal information to third parties:

    In the event that we sell or buy any business or assets, in which case we may disclose your personal data to the prospective seller or buyer of such business or assets.
    If Dorchester Services Limited or substantially all of its assets are acquired by a third party, in which case personal data held by it about its customers will be one of the transferred assets.
    If we are under a duty to disclose or share your personal data in order to comply with any legal obligation, or in order to enforce or apply our terms of use www.dorchestercollection.com/en/terms/ and/or terms and conditions of supply www.dorchestercollection.com/en/terms/ and other agreements; or to protect the rights, property, or safety of Dorchester Services Limited, our customers, or others.  This includes exchanging information with other companies and organisations for the purposes of fraud protection and credit risk reduction.<br>
    Your rights

    You have the right to ask us not to process your personal data for marketing purposes. We will usually inform you (before collecting your data) if we intend to use your data for such purposes or if we intend to disclose your information to any third party for such purposes. You can exercise your right to prevent such processing by checking certain boxes on the forms we use to collect your data.  You can also exercise the right at any time by contacting us at Dorchester Collection, Sixth Floor East, Lansdowne House,Berkeley Square, London W1J 6ER.

    Our site may, from time to time, contain links to and from the websites of our partner networks,advertisers and affiliates.  If you follow a link to any of these websites, please note that these websites have their own privacy policies and that we do not accept any responsibility or liability for these policies.  Please check these policies before you submit any personal data to these websites.<br>

    Access to information

    The Act gives you the right to access information held about you. Your right of access can be exercised in accordance with the Act. Any access request may be subject to a fee of ??10 to meet our costs in providing you with details of the information we hold about you.<br>

    Changes to our privacy policy

    Any changes we may make to our privacy policy in the future will be posted on this page and, where appropriate, notified to you by e-mail.<br>

    Questions, comments and requests regarding this privacy policy are welcomed and should be addressed to Dorchester Collection, Sixth Floor East, Lansdowne House, Berkeley Square, London W1J 6ER.
    INFORMATION ABOUT OUR USE OF COOKIES
    Our website uses cookies to distinguish you from other users of our website. This helps us to provide you with a good experience when you browse our website and also allows us to improve our site. By continuing to browse the site, you are agreeing to our use of cookies.

    A cookie is a small file of letters and numbers that we store on your browser or the hard drive of your computer if you agree. Cookies contain information that is transferred to your computer???s hard drive.

    Strictly necessary cookies. These are cookies that are required for the operation of our website. They include, for example, cookies that enable you to log into secure areas of our website, use a shopping cart or make use of e-billing services.
    Analytical/performance cookies. They allow us to recognise and count the number of visitors and to see how visitors move around our website when they are using it. This helps us to improve the way our website works, for example, by ensuring that users are finding what they are looking for easily.
    Functionality cookies. These are used to recognise you when you return to our website. This enables us to personalise our content for you, greet you by name and remember your preferences (for example, your choice of language or region).
    Targeting cookies. These cookies record your visit to our website, the pages you have visited and the links you have followed. We will use this information to make our website and the advertising displayed on it more relevant to your interests. We may also share this information with third parties for this purpose.
	</div>

</div>
<div id="footer">
  <div id="menu">
    <a href='./home.php'>HOME</a><br>
    <a href='./show_rooms.php'>SUITES & ROOMS</a><br>
    <a href='./offers.php'>SERVICES</a><br>
    <a href='./about.php'>ABOUT US</a><br>
    <h3 style="font-style: italic;font-size:20;">Subscribe to mailing list:</h3>
    <form method="post">
      <img src="images/email.jpg" alt="Submit" style="height:40px;margin:10px;position: relative;top:-20px"><input type="text" name="email" style="width:200px;height:30px;box-sizing: border-box;border:2px solid black;position: relative;top:-45px">
      <input type="submit" name="mail" value="" style="background-image: url('./images/submit.jpg');background-size:100% 100%;height: 40px;width: 130px;position: relative;top:-30px;">
      </form>
  </div>
  <div id="contact">
    <h4 style="font-size: 25;color: black;position: relative;top:-30px;font-style: italic;">Contact Us:</h4>
    <h2 style="font-family:helevetica;font-size: 17;color: black;">The Beverly Hills Hotel in Beverly Hills 9641 Sunset Boulevard, 90210 USA<br>
        Email: tim_doug@gmail.com;<br>
        Phone: 9802342231 (10:00 am - 09:00 pm)
    </h2>
  </div>
  <div id="social">
    <div style="position: relative;left:-135px">
    <h3 style="font-style: italic;font-size:30;position: relative;text-align: left;top:-25;left:150px">The Social Club</h3>
    
    <a href="./"><img src="./images/facebook.jpg" alt="facebookLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="./"><img src="./images/twitter.jpg" alt="twitterLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="./"><img src="./images/instagram.jpg" alt="instagramLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="./"><img src="./images/youtube.jpg" alt="youtubeLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
  </div>
  </div>
  <div id="quality">
    <h5 style="font-style: italic;font-size:20;position: relative;text-align: left;top:-50;left:0px">Quality First!</h5>
    <a href="./"><img src="./images/qt1.jpg" alt="facebookLogo" style="height:100px;width:100px;position:relative;top:-65px;left:0px"></a>
    <a href="./"><img src="./images/qt2.jpg" alt="twitterLogo" style="height:100px;width:100px;position:relative;top:-65px;left:0px"></a>
    <a href="./"><img src="./images/qt3.jpg" alt="instagramLogo" style="height:100px;width:100px;position:relative;top:-65px;left:0px"></a>
    <a href="./"><img src="./images/qt4.jpg" alt="youtubeLogo" style="height:100px;width:100px;position:relative;top:-65px;left:0px"></a>
  </div>


  <div id="terms">
      <img src="./hotel/5star.jpg" alt="youtubeLogo" style="height:70px;width:200px;position:relative;top:10px;left:210px">
      <a href='./privacy.php' style="left: -70px;top:35px">Privacy</a>
      <a href='./termsOfUse.php' style="left: -70px;top:35px">Terms Of Use</a>
  </div>

</div>
</body>
</html>


