<?php
  $today=date_create(date("Y/m/d"));
  $date=date_create("2020/05/17");
  $interval=date_diff($today,$date);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

<script data-ad-client="ca-pub-1116231675501854" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<link rel = "icon" href ="elements/black-black.png" type = "image/x-icon">
	<meta name="description" content="Mascot Design Competiton - Aakriti Design Week 2020">
	<meta property="og:title" content="AAKRITI Design Week 2020" >
<meta property="og:url" content="https://www.mascot-aakriti.herokuapp.com/" >
	<meta property="og:image" content="https://www.mascot-aakriti.herokuapp.com/elements/black-black.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="index.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
    <title>Aakriti Design Week 2020</title>
  </head>

  <body>
    <div id="core">
    <div class="container" id="top">
      <p id="alsalama" >A L   S A L A M A   I N S T I T U T E   O F   A R C H I T E C T U R E<a href="#reg"><span id="participate">P A R T I C I P A T E   N O W</span></a></p>
    </div>

    <div id="main">
      <div id="mascot">
      </div>
      <div id="days">
        <a href="#register"><p id="participate2"><b>PARTICIPATE NOW</b></p></a>
        DAYS LEFT
        <p id="day"><?php  echo $interval->format('%a');?></p>
      </div>
    </div>
    <div id="content">
    </div>
    <div id="challenge">
      <b>DESIGN CHALLENGE</b>
      <p>We,humans, were born into the lap of nature.Indeed , She is the mother of all. She bestowed upon us the beautiful flora and fauna, the air we breathe, the rivers that give water to quench our thirst. She nurtured ,inspired and looked after all of us. Unfortunately,  we  knowingly or unknowingly have given back very little. In Fact, we have been destroying and exploiting nature to a great extent. Sometimes, we are paid back in our own coin in the form of natural calamities for all our misdeeds.

 Hello friends, It's not too late.Wake up. At least now let's all unite and contribute to set right all the havoc done to nature.Today, Aakriti gives you the platform to bring out your hidden talents , to create something to glorify nature and make her proud of us.

As part of Aakriti Design Week 2020 Mascot Design Competition, you are invited to design a mascot, which would act as a representative of  mother nature. The mascot should convey the message of " Pro- nature design ".

Let your imagination go wild and turn into reality.
</p>
    </div>
    </div>
    <div id="reg"></div>
    <div id="register">
      <div id="register-left">
          <div id="dummy">
          </div>
          <div id="text">
            <p><b>MASCOT DESIGN COMPETITION</b></p>
            <P>The competition seeks to create a meaningful and attractive mascot for AAKRITI DESIGN WEEK 2020 based on the above given design challenge.</p>

            <p><b>AAKRITI DESIGN WEEK 2020</b></p>
            <P>Designs being the most generic idea, its domains are immeasurably huge, AAKRITI 2020 embarks a design culture in six months where we aim to fertilize design brains and up bring diverse talents. Its result will be a <b>DESIGN WEEK</b>, which would be a portfolio of these activities - a pinnacle point where innovations touch the ground and heart contemplate another dimension of design. Designers meet to imagine, Ideate, Innovate and illustrate concepts that contribute to our sustainability. Here, we remind that designers are the global creators, and a platform for their interaction can be revolutionary.</p>
          </div>
      </div>
      <div id="register-right">
        <div id="click">
          <div id="wrap">
            <div id="img1" style="background-image: url(elements/page2/2.png);">  </div>
            <div id="label1">
              <p id="step"><b>STEP-1:REGISTER</b></p>
              <p id="instruction">Click the register button to register your entry.</p>
            </div>
          </div>
          <div id="wrap">
            <div id="img1" style="background-image: url(elements/page2/1.png);"></div>
            <div id="label2">
              <p id="step"><b>STEP-2:BRIEF</b></p>
              <p id="instruction">Click the brief button to download the brief </p>
            </div>
          </div>
          <div id="wrap">
            <div id="img1" style="background-image: url(elements/page2/3.png);"></div>
            <div id="label3">
              <p id="step"><b>STEP-3:DESIGN</b></p>
              <p id="instruction">Read the brief and design your Mascot accordingly</p>
            </div>
          </div>
          <div id="wrap">
          <div id="img1" style="background-image: url(elements/page2/4.png);"></div>
            <div id="label4">
              <p id="step"><b>STEP-4:SUBMIT</b></p>
              <p id="instruction">Click the submit button to upload your design</p>
            </div>
          </div>
          </div>
            <div id="buttons">
              <a href="#newuser"><img id="reg-but" src="elements/page2/5.png"/></a>
              <a href="/mascot_competition_brief.pdf" download="mascot_brief.pdf"><img id="reg-but" src="elements/page2/6.png"/></a>
              <a href="#submission"><img id="reg-but" src="elements/page2/7.png"/></a>
              <a href="#queries"><img id="reg-but" src="elements/page2/8.png"/></a>
            </div>
          </div>
      </div>
      <div id="newuser">
        <b style="color:rgb(125,55,54);">REGISTRATION</b>
        <p style="color:rgb(125,55,54);">NOTE : IN CASE OF INDIVIDUAL PARTICIPATION, FILL IN TEAM MEMBER 1 ONLY</p>
        <form id="user-form" method="post" action="newregistration.php">
          <div id="table-left">
          <table>
            <tr>
              <td id="user-table"><b>TEAM MEMBER 1: LEADER(MANDATORY)</b></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input class="name1" id="namefield" type="text" placeholder="FULL NAME" name="name1" required/></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input class="email1" id="test" type="email" placeholder="EMAIL ID" name="email1" required/></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input class="mobile1" id="test" type="tel" placeholder="MOBILE NUMBER" name="mobile1" required/></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input class="dob" id="test" type="text" placeholder="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" required/></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input class="country" id="namefield" type="text" placeholder="COUNTRY" name="country" required/></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input class="state" id="namefield" type="text" placeholder="STATE" name="state" required/></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input class="city" id="namefield" type="text" placeholder="CITY" name="city" required/></td>
            </tr>
            <tr><td><td></tr>
            <tr><td><td></tr>
            <tr><td><td></tr>
            <tr><td><td></tr>
            <tr><td><td></tr>
            <tr><td><td></tr>
          </table>
        </div>
        <div id="table-right">
          <table>
            <tr> <td id="user-table"><b>TEAM MEMBER 2</b></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr> <td><input class="name2" id="namefield" type="text" placeholder="FULL NAME" name="name2"/></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr> <td><input class="email2" id="test" type="email" placeholder="EMAIL ID" name="email2"/></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr> <td><input class="mobile2" id="test" type="tel" placeholder="MOBILE NUMBER" name="mobile2"/></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr> <td id="user-table"><b>TEAM MEMBER 3</b></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr> <td><input class="name3" id="namefield" type="text" placeholder="FULL NAME" name="name3"/></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr> <td><input class="email3" id="test" type="email" placeholder="EMAIL ID" name="email3"/></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr> <td><input class="mobile3" id="test" type="tel" placeholder="MOBILE NUMBER" name="mobile3"/></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
        </table>
        </div>
          <table id="form-bottom-table">
              <tr><td id="user-table">WHERE DID YOU HERE ABOUT US</td></tr>
            <tr><td>
              <select class="where" id="test6" name="where">
                <option value="INSTAGRAM">FROM INSTAGRAM</option>
                <option value="FACEBOOK">FROM FACEBOOK</option>
                <option value="WHATSAPP">FROM WHATSAPP</option>
                <option value="FROM FRIEND">FROM FRIEND</option>
                <option value="OTHERS">OTHERS</option>
              </select>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
            </td></tr>
            <tr>
              <td style="color:rgb(125,55,54);">You will recieve a confirmation mail to the given Email ID .Please verify your mail ID to confirm registration. </td>
            </tr>
            <tr>
              <td id="form-bottom"><p style="color:rgb(125,55,54);">If you dont recieve a mail, Please contact the event organizers. </p></td>
            </tr>
            <tr>
              <td style="color:rgb(125,55,54)"><input type="checkbox" name="condition" required/>I agree to the terms and conditions.</td>
            </tr>
            <tr>
            <tr>
              <td><input  id="submit-user" type="submit" name="adduser" value="REGISTER"/></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="briefing">
          <div class="column left">
            <p><b>ROUND 1</b></P>
            <p>THE SUBMITTED DESIGNS WILL BE EVALUATED BY A PANEL OF ARCHITECTS AND BEST 5
              DESIGNS WILL PROCEED TO ROUND 2.</p>
              <br>
            <img style=" display: block;  margin-left: auto;  margin-right: auto;  width: 70%;" src="elements/page4/1.png"></img>
            <p><b>ROUND 2</b></P>
            <p>THE BEST 5 DESIGNS WILL BE LEFT FOR ONLINE VOTING</p>
              <br></br>
            <img style=" display: block;  margin-left: auto;  margin-right: auto;  width: 70%;" src="elements/page4/2.png"></img>
          </div>
          <div class="column middle">
            <img width="100%" height="100%" src="elements/page4/3.png"/>
          </div>
          <div class="column right">
            <h2><u><b>JURY CRITERIA</b></u></h2>
            <p><b>DESIGN CHALLENGE</b></p>
              <svg width="90%" height="10px">
                <rect width="100%" height="10px" style="fill:rgb(125,55,54);stroke-width:0;stroke:rgb(0,0,0)" />
              </svg>
            <p><b>CREATIVITY</b></p>
              <svg width="80%" height="10px">
                <rect width="100%" height="10px" style="fill:rgb(125,55,54);stroke-width:0;stroke:rgb(0,0,0)" />
              </svg>
            <p><b>VISUAL IMPACT</b></p>
              <svg width="70%" height="10px">
                <rect width="100%" height="10px" style="fill:rgb(125,55,54);stroke-width:0;stroke:rgb(0,0,0)" />
              </svg>
            <p><b>PRACTICALITY AND APPLICABILITY</b></p>
              <svg width="60%" height="10px">
                <rect width="100%" height="10px" style="fill:rgb(125,55,54);stroke-width:0;stroke:rgb(0,0,0)" />
              </svg>
            <p><b>PRESENTATION OF DESIGN</b></p>
              <svg width="50%" height="10px">
                <rect width="100%" height="10px" style="fill:rgb(125,55,54);stroke-width:0;stroke:rgb(0,0,0)" />
              </svg>
            <p id="text-box">BEST 5 DESIGNS WILL BE AWARDED WITH CERTIFICATES AND MANY MORE</p>
          </div>
      </div>
      <div id="rules">
        <div id="rules-left">
            <p><b>RULES AND REGULATIONS</b></p>
    <p>• The design must be authentic, copied designs are not encouraged. Disguising existing characters to a new one is prohibited.
    <p>• The mascot shouldn't be designed for trolling or any other negative purpose. It shouldn't imitate anyone.
    <p>• The mascot should be flexible and should fit everywhere, i.e. it would be used in posters, videos, installations, mementos, etc.
    <p>• The mascot should fit every human posture and it should be capable of animating.
    <p>• No mascot with political, religious or any sensitive contents will be accepted.
    <p>• Designs submitted after midnight of the last date will not be counted.
    <p>• Designs that are incomplete or which do not obey any one of the above-mentioned requirements and rules will not be accepted.
    <p>• There will be two rounds of selection:
    <p>ROUND 1: The submitted designs will be evaluated by a panel of architects and the best five designs will be proceeded to round two.
    <p>ROUND 2: The best five designs will be left for online voting through our website.

        </div>
        <div id="rules-right">
          <p><b>SUBMISSION REQUIREMENTS</b></p>

            <p>• The medium of designing could be Digital or Paper.
            <p>• The background of the medium should be white and the mascot should be designed in the centre of the medium leaving sufficient margin on each side.
            <p>• Each sheet should only have one view of the mascot (the Front view is compulsory), different views should be drawn on distinct sheets. The number of sheets that can be used is not limited.
            <p>• A brief explanation of the design and its concept is compulsory. You should also name the mascot accordingly.
            <p>• Supportive Videos, GIFs, Slide presentation or Model is optional, you could also show the design process if needed. The presentation of your design carries extra weightage. Videos (if any) should not exceed the time limit of 30 seconds. The video format should be .mp4/.mov/.avi.
            <p>• Design file along with supporting files (if any) must be uploaded to a folder in Google Drive and attach its link in the submission form present on the website www.aakritidesignweek.com. Make sure the link is properly attached and files are properly uploaded into the drive folder, if the folder is found to be blank, entry will be rejected.
            <p>• Design file should be in .jpeg / .pdf format. If the medium of designing is Paper, then it must be scanned using a mobile/scanner and upload it into the Google Drive folder.

          </div>
      </div>
      <div id="submit"></div>
      <div id="submission">
        <p><b>SUBMISSION</b></p>
        <p>NOTE: IF YOU ARE PARTICIPATING AS A TEAM, ENTER DETAILS OF TEAM LEADER ONLY</p>
        <form id="submission-form" method="post" action="submission.php">
          <table>
            <tr>
            <td id="submission-table"><input class="emails" id="test6" type="email" name="emails" placeholder="EMAIL ID" required/></td>
          </tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr>
            <td id="submission-table"><input class="names" id="test6" type="text" name="names" placeholder="FULL NAME" required/></td>
          </tr>
          <tr></tr>
          <tr></tr>
        </table>
        <table style="margin-top:3%;">
          <tr>
            <td id="submission-table2"><b>NAME OF THE MASCOT</b></td>
          </tr>

          <tr>
            <td id="submission-table2"><input class="mascots" id="test3" type="text" name="mascotname" required/></td>
          </tr>
          <tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <td id="submission-table2"><b>DESCRIPTION</b></td>
          </tr>
          <tr>
            <td id="submission-table2"><textarea class="des" id="test4" type="text" name="description" placeholder="(IN NOT MORE THAN 150 WORDS)" required></textarea></td>
          </tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr>
            <td id="submission-table2"><b>GOOGLE DRIVE LINK</b></td>
          </tr>
          <tr>
            <td id="submission-table2"><input class="link" id="test3" type="text" name="link" required/></td>
          </tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr>
            <td id="submission-table2">Steps to upload your design file:</td>
          </tr>
          <tr></tr>
          <tr>
            <td id="submission-table2">1.Upload your design file and supporting files (if any) into a Google Drive Folder</td>
          </tr>
          <tr>
            <td id="submission-table2">2.Copy the drive URL and paste it in the field provided above </td>
          </tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>

          <tr>
            <td id="submission-table2">NOTE: Read the brief for more submission based details.</td>
          </tr>
          <tr>
            <td id="submission-table2"><input type="checkbox" name="condition" required/>I have read the brief and I agree to the terms and conditions.</td>
          </tr>
          <tr>
            <td id="submission-table2"><input id="submit-design" type="submit" name="submits" value="SUBMIT"/></td>
          </tr>
          </table>
        </form>
      </div>

      <!--<div id="iframes">
        <div class="frames frame-left"><iframe src="https://www.youtube.com/embed/fzwOBOjSto8" width="100%" height="100%"></iframe></div>
        <div class="frames frame-middle"><iframe src="https://www.youtube.com/embed/qQdxN9e2xQg" width="100%" height="100%"></iframe></div>
        <div class="frames frame-right"><iframe src="https://www.youtube.com/embed/1pyjZjKmLug" width="100%" height="100%"></iframe></div>
      </div>-->
      <div id="query"></div>
      <div id="queries">
        <p><b>QUERIES</b></p>
        <form id="query-form" method="post" action="query.php">
          <table>
            <tr>
              <td id="user-table"><input class="emailq" id="test" type="email" placeholder="EMAIL ID" name="emailq" required/>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input class="query" id="test" type="text" placeholder="WRITE YOUR QUERY HERE" name="query" required/>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <td id="user-table"><input id="query-submit" type="submit" value="ENQUIRE" name="submitq" required/>
            </tr>
          </table>
        </form>
      </div>

      <div id="footer">
        <div id="footer-top">
          <a target="_blank" href="https://instagram.com/aakritidesignweek?igshid=5xzing9qr3ln"><img id="first" height="4%" width="4%" src="elements/page8/instagram.png"/></a>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=918086155004"><img height="4%" width="4%" src="elements/page8/whatsapp.png"/></a>
          <a target="_blank" href="https://www.facebook.com/aakriti.asia/"><img height="4%" width="4%" src="elements/page8/facebook.png"/></a>
          <a target="_blank" href="https://www.youtube.com/channel/UCfAR3Jl_H-CfkcHDm-bOuGg"><img height="4%" width="4%" src="elements/page8/youtube.png"/></a>
        </div>

        <div id="footer-bottom">
          <div class="bottom bottom-left">
            <p><b>OFFICIAL MAIL ID:</b>
            <br>aakritidesignweek@gmail.com</p>
            <p><b>COMPETITION COORDINATORS:</b>
            <br>ISHAN AHMED, +91 85473 39783
            <br>ARTHANA PRAKASH, +91 80783 52531</p>
            <p><b>AAKRITI COORDINATORS:</b>
            <br>MUHAMMED SHAFAH , +91 75599 76900
            <br>MARJANA PARVEEN S, +91 94464 76000</p>
          </div>
          <div class="bottom bottom-middle">
            <p><a href="index.php#challenge">CHALLENGE</a> | <a href="/mascot_competition_brief.pdf" download="mascot_brief.pdf">BRIEF </a>
                | <a href="index.php#newuser">REGISTER</a> | <a href="index.php#submission">SUBMIT </a>
                | <a href="index.php#queries">QUERY</a></p>
              <img id="alsalamaimage" height="100%" width="80%" src="elements/page8/alsalama2.png"/>
              <img id="fourlabimage" height="100%" width="80%" src="elements/page8/fourlab.png"/>
          </div>
          <div class="bottom bottom-right">
              <img id="alsalamaimage" height="100%" width="80%" src="elements/page8/white-white.png"/>
          </div>
        </div>
      </div>
      <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Fourlab Inc.</h2>
    </div>
    <div class="modal-body">
      <p>Web Designing & Development</p>
      <p>Mobile App Development</p>
      <p>UI/UX Designing</p>
    </div>
    <div class="modal-footer">
      <h3><p>Email: fourlabapps@gmail.com</p>
          <p style="margin-top:-1%;">Contact: +91 75599 76900
         <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp+91 79078 59940</p></h3>
    </div>
  </div>

</div>
<script>
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("fourlabimage");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>
  </body>
</html>
