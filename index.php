<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CV Builder | ArielLozaM</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <?php
    require_once ('templates/header.php');
  ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
  <h1 class="display-4" id="printFullName">Full Name</h1>
  <p class="lead" id="printFullAddress">Complete Address</p>
  <p><a id="printContactEmail" href="#">Correo Electronico</a></p>
</div>
    <section id="bio">
      <h2>Biography</h2>
        <hr>
      <div class="contentItems">
        <p id="printBioData">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptates molestiae corrupti reiciendis earum numquam quibusdam explicabo, eligendi et maxime ea quas quaerat nostrum temporibus deleniti accusamus a excepturi obcaecati!
        </p>
      </div>
      </section>

      <section id="exp">
      <h2>EXPERIENCE</h2>
        <hr>
     <div class="contentItems" id="printExpData">
       <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0" id="printExpTitle">Senior Web Developer</h3>
            <div class="subheading mb-3" id="printExpComp">Intelitec Solutions</div>
            <p id="printExpACont">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary" id="printExpDateStart">March 2013</span> - <span class="text-primary" id="printExpDateEnd">Present</span>
          </div>
        </div>
      </div>
      </section>

      <section id="edu">
      <h2>EDUCATION</h2>
        <hr>
      <div class="contentItems">
        <p id="printEduData">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptates molestiae corrupti reiciendis earum numquam quibusdam explicabo, eligendi et maxime ea quas quaerat nostrum temporibus deleniti accusamus a excepturi obcaecati!
        </p>
      </div>
      </section>

      <section id="skill">
      <h2>SKILLS</h2>
        <hr>
     <div class="contentItems">
        <p id="printSkillsData">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptates molestiae corrupti reiciendis earum numquam quibusdam explicabo, eligendi et maxime ea quas quaerat nostrum temporibus deleniti accusamus a excepturi obcaecati!
        </p>
      </div>
      </section>

      <section id="int">
      <h2>INTERESTS</h2>
        <hr>
       <div class="contentItems">
        <p id="printIntData">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptates molestiae corrupti reiciendis earum numquam quibusdam explicabo, eligendi et maxime ea quas quaerat nostrum temporibus deleniti accusamus a excepturi obcaecati!
        </p>
      </div>
      </section>

      <section id="aww">
      <h2>AWARDS & CERTIFICATIONS</h2>
      <h4><small><em>Web Developer</em></small></h4>
        <hr>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis deserunt dolorem obcaecati ipsum expedita quo quasi illum saepe quam animi alias quos aliquid esse odio, tempore unde enim molestiae sint!</p>
      </section>

      <h3></h3>
    </div>
  </div>
</div>

<footer>
    <div class="container">
            <div class="row">
                <p class="text-center">This APP it's been develop by <a href="http://ariellozam.xyz">ArielLozaM</a></p>
            </div>
    </div>
</footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>
