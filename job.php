<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                color:rgb(248, 4, 16);
                margin: 60px 20px 40px;
                text-align: center;
            }
            .a{
                margin: 40px 110px ;
                background-image: linear-gradient(to right, rgb(251, 250, 252) , rgb(4, 248, 4) );           
                color: black;
                cursor: pointer;
                padding: 3px 10px;
            }
            p{
                padding: 0px 25px;
                color:rgb(3, 189, 245);
                font-size:20px;
            }
            .b{
                font-size: 30px;
                color: rgb(2, 2, 2);
                padding: 0px 20px;
            }
            .but{
                padding: 5px 20px;
                margin:3px 500px 15px;
                background-image: linear-gradient(to right, rgb(0, 255, 255) , rgb(255, 0, 221) );           
                cursor:alias;
            }
            .a:hover{
                background-image: linear-gradient(to right, rgb(255, 0, 200) , rgb(21, 255, 0) );           
                transform: scale(1.175);
                border: 2px solid red ;

            }
            .but:hover{
                color:blue;
                background-color: rgb(7, 250, 7);
            }
            ul {
               list-style-type: none;
                margin: 0;
               padding: 0;
               overflow: hidden;
               background-color: rgb(23, 24, 24);
               }
            li,bu
            {
                float: left;
                display: block;
                color: rgb(16, 29, 13);
                padding: 10px 50px;
                margin: 4px 8px;  
                cursor: pointer;
            }
            .bu{
                height: 20px;
                width: 200px;
            }
            .l1:hover,.l2:hover,.l3:hover,.l4:hover,.l5:hover {
                background:linear-gradient(yellow,pink) ;
                cursor: pointer;
            }  
            .btn{
                margin: 0px 15px;           
                height:20px;
                width:120px;
                font-size: small;
                background:linear-gradient(yellow,pink) ;
                cursor:alias;
           }
        </style>
 <?php


if(isset($_POST['comp3']))
{
    header("location:job.php");
}
if(isset($_POST['pra']))
 {
     header("location:job.php");
 }
 if(isset($_POST['about2']))
 {
     header("location:about.php");
 }
 if(isset($_POST['contact2']))
 {
     header("location:contact.php");
 }
 if(isset($_POST['toyo']))
 {
     header("location:detail.php");
 }
 if(isset($_POST['micro']))
 {
     header("location:detail.php");
 }
 if(isset($_POST['face']))
 {
     header("location:detail.php");
 }
 if(isset($_POST['sam']))
 {
     header("location:detail.php");
 }
 if(isset($_POST['acce']))
 {
     header("location:detail.php");
 }
 if(isset($_POST['ibm']))
 {
     header("location:detail.php");
 }
 if(isset($_POST['comp']))
 {
     header("location:detail.php");
 }



 ?>

    </head>
    <body style="background-image: linear-gradient(to right, rgb(0, 26, 255) , yellow );           ">  
    <form action="main.php" method="POST">
        <h1>FIND AN IDEAL JOB FOR YOU.. !!!</h1>
        <ul>

      
           <li class="l3"><input type="submit" class="btn" value="COMPANIES" name="comp3"></li>
            <li class="l4"i><input type="submit" class="btn" value="PRACTICE" name="pra"></li>
            <li class="l5"><input type="submit" class="btn" value="ABOUT" name="about2"></li>
            <li class="l5"><input type="submit" class="btn" value="CONTACT US" name="contact2"></li>
       <!--    <li class="l1"><input type="submit" class="btn" value="" name="comp"></li>
            <li class="l3"><input type="submit" class="btn" value="PRACTICE" name="pra"></li>
            <li class="l4"i><input type="submit" class="btn" value="ABOUT US" name="about"></li>
            <li class="l5"><input type="submit" class="btn" value="CONTACT US" name="contact"></li> -->
            <li><input class="bu" type="text" placeholder="SEARCH"></li>
        </ul></br>
        <marquee style="background-color: rgb(0, 238, 255);color: rgb(255, 0, 13);padding: 2px 4px;margin: 20px 20px 30px;">***   THESE COMPANIES ARE NOW HIRING ... HURRY UP AND APPLY NOW .. !!!  ***</marquee>
        <div class="a">
                <p class="b"> SAMSUNG ELECTRONICS</p>
                <p>POST : Web Developer-Backend & Frontend</p>
                <input type="submit" class="but" value="DETAILS" name="sam">
        </div>
        <div class="a">
            <p class="b"> TOYOTA MOTORS </p>
            <p>POST : Web Developer-Backend & Frontend</p>
            <input type="submit" class="but" value="DETAILS" name="toyo">
    </div>
    <div class="a">
        <p class="b"> MICROSOFT </p>
        <p>POST : Web Developer-Backend & Frontend</p>
        <input type="submit" class="but" value="DETAILS" name="micro">
    </div>
    <div class="a">
        <p class="b"> IBM </p>
        <p>POST : Web Developer-Backend & Frontend</p>
        <input type="submit" class="but" value="DETAILS" name="ibm">
    </div>   
    <div class="a">
        <p class="b"> ACCENTURE </p>
        <p>POST : Web Developer-Backend & Frontend</p>
        <input type="submit" class="but" value="DETAILS" name="acce">
    </div>
    <div class="a">
        <p class="b"> INTEL </p>
        <p>POST : Web Developer-Backend & Frontend</p>
        <input type="button" class="but" value="DETAILS">
    </div>
    <div class="a">
        <p class="b"> FACEBOOK </p>
        <p>POST : Web Developer-Backend & Frontend</p>
        <input type="submit" class="but" value="DETAILS" name="face">
    </div>
    <div class="a">
        <p class="b"> GOOGLE </p>
        <p>POST : Web Developer-Backend & Frontend</p>
        <input type="button" class="but" value="DETAILS">
    </div>
    <div class="a">
        <p class="b"> CISCO </p>
        <p>POST : Web Developer-Backend & Frontend</p>
        <input type="button" class="but" value="DETAILS">
    </div>
    <div class="a">
        <p class="b"> J.P.MORGAN </p>
        <p>POST : Web Developer-Backend & Frontend</p>
        <input type="button" class="but" value="DETAILS">
</div>
<div class="a">
    <p class="b"> HITACHI </p>
    <p>POST : Web Developer-Backend & Frontend</p>
    <input type="button" class="but" value="DETAILS">
</div>
<div class="a">
    <p class="b"> ORACLE </p>
    <p>POST : Web Developer-Backend & Frontend</p>
    <input type="button" class="but" value="DETAILS">
</div>
<div class="a">
    <p class="b"> SAP </p>
    <p>POST : Web Developer-Backend & Frontend</p>
    <input type="button" class="but" value="DETAILS">
</div>
<div class="a">
    <p class="b"> HSBC </p>
    <p>POST : Web Developer-Backend & Frontend</p>
    <input type="button" class="but" value="DETAILS">
</div>
<div class="a">
    <p class="b"> AMAZON </p>
    <p>POST : Web Developer-Backend & Frontend</p>
    <input type="button" class="but" value="DETAILS">
</div>
<div class="a">
    <p class="b"> NETFLIX </p>
    <p>POST : Web Developer-Backend & Frontend</p>
    <input type="button" class="but" value="DETAILS">
</div>
<div class="a">
    <p class="b"> PAY PAL </p>
    <p>POST : Web Developer-Backend & Frontend</p>
    <input type="button" class="but" value="DETAILS">
</div>
        </form>
    </body>
</html>