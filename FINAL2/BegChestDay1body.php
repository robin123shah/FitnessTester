<?php  ?>
<html>
   <head>
     <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Nova+Mono|Roboto+Condensed" rel="stylesheet">

      <title>Begin</title>
      <style>
      body {
        background-image: linear-gradient(#7ED957, #10BBE8);
        font-family: "Helvetica";
        text: "Brown";
      }
      h3{
        font-family: "Helvetica";
      }
      hr{
        color: "Lavander";
      }
      p{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
      .main{
        border-color: blue;
        border-width: 5px;
        width: 600px;
        border-style: dashed;
        margin: 10px;
      }
      .container{
        display: grid;
        grid-template-columns: 2fr 1fr;
      }
      #rightbox{
          float:right;
          background:blue;
          width:25%;
          height:280px;
      }
      a{text-decoration: none;}

      a:link {
        color: white;
      }
      a:visited {
        color: white;
      }
      a:hover {
        color: orangered;
      }
      a:active {
        color: blue;
      }
      big{
        display: inline-block;
        margin-left: auto;
        margin-right: auto;
        <!--font-family: 'Roboto Condensed', "Helvetica Neue", Helvetica;-->
        width: 50%;
        font-size: 50px;
        color: red;
        border-style: dotted;
        border-spacing: 5px;
      }
      .animated-button-2 {
        position: relative;
        display: inline-block;
        padding: 20px 40px;
        font-size: 1.4rem;
        background-color: white;
        <!--background-size: 20px 20px;-->
        border: 1px solid #555;
        color: grey;
        transition: all 0.3s ease;
        width: 200px;
        margin-left: 200px;
      }
      </style>

   </head>
<body>
  <h1 align="center">Chest exercise: Barbell Bench Press</h1>
  <hr>
  <div class="container">
  <div>
    <button class="animated-button-2" onclick="clic()">Start time</button>
    <br><img src="img/bbp.jpg" class="main">
  <br>

  <img src="img/n.jpg" style="width:70;padding:0px 100px 0px 100px;border-radius:50%"></a>

  <a href="BackLatPullDownBegDay1.php"><img src="img/p.png" style="width:70;padding:0px 100px 0px 100px;border-radius:50%"></a>
  <script type = "text/javascript">
    var d = 30;
    function clic(){
    d = 30;
    var x = setInterval(function() {
      d = d -1;
      document.getElementById("demo").innerHTML = d;
      if (d == 0) {
        clearInterval(x);
        window.alert("Duration complete");
      }
    }, 1000);}

  </script>
</div>
<div>
  <b><big id="demo"></big></b>
  <br>
  <br>

  <img src="img/r.jpg" width="200" style="border-color:orange;border-radius:10px;border-width:3px;">
  <h4><a href="fail.html">Test your fitness</a><hr>
  <a href="fail.html">Enter your height and weight</a><hr>
  <a href="fail.html">Know your posture</a><hr>
  <a href="fail.html">Get your monthly fitness report</a><hr>
  <a href="fail.html">Track your progress</a><hr>
  <a href="fail.html">Enter your food data</a></h4>
</div>

</div>
</body>
</html>
<?php ?>