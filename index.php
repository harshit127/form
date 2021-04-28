<html>
    <head>
        <title>
            form
        </title>
        <style> 
        body{
            background-color: black;
            text-align: center;
        }
        
        
        label{
            color: red;
            font-size: 35px;
        }
        .a{
            font-size: 25px;
            border: 4px solid red;
            border-radius: 20%;
        }
        .a1
        {
            position: relative;
            right : 200px;
        }
        .s1{
            font-size: 25px;
            color: red;
        }
        .s3{
            font-size: 20px;
            color: red;
        }
        
        h1{
            text-align: center;
            font-size: 35px;
            color: red;
        }
        marquee{
            font-size: 35px;
            color: red;
            font-family: cursive;
        }
        .a2{
            font-size: 30px;
            background-color: red;
            border-radius: 20px;
                   }
        a{
            font-size: 100px;
            padding: 30px;
            text-align: center;
        }           

        </style>
        <script defer src ='https://use.fontawesome.com/releases/v5.0.7/js/all.js'></script>
        </head>
        <body>
        <?php
         
         $s = "localhost";
                $u = "root";
                $p = "";
                $d = "phpdb2";
                $c = mysqli_connect ($s,$u,$p,$d);
            

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $name = $_POST['name'];
                    $roll = $_POST['roll'];
                    $fn = $_POST['fn'];
                    $mn = $_POST['mn'];
                    $cn = $_POST['cn'];
                    $branch = $_POST['branch'];
                    $dob = $_POST['dob'];
                    $mob = $_POST['mob'];
                    $mail = $_POST['mail'];
                    $addresh = $_POST['addresh'];
                    $hyer = $_POST['hyer'];

                    $newsql = "INSERT INTO `newform`(`name`,`roll`,`fn`,`mn`,`cn`,`branch`,`mob`,`mail`,`addresh`,`hyer`) VALUES
                                        ('$name','$roll','$fn','$mn','$cn','$branch','$mob','$mail','$addresh','$hyer')";
                $re = mysqli_query($c,$newsql);
                echo '<div class="alert alert-warning alert-dismissible fade show s1" role="alert">
                <strong>SUCCESS FULL SUBMITED '.  $name .'</strong> .
                <br>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" s3> OK </button>
              </div>';
                }

                ?>

            <form action="/HARSHIT/dir/index.php" method="post">
                <h1>CODE WITH HARSHIT </h1>
            <marquee> software engineering </marquee>
                <label class='a1'>NAME        </label><input class='a' type ="text" name = "name" ><br><br>
                <label class='a1'>ROLL NO  </label><input class='a' type ="number" name = "roll"><br><br>
                <label class='a1'>FATHER NAME </label><input class='a' type="text" name = "fn"><br><br>
                <label class='a1'>MOTHER NAME </label><input class='a' type="text" name = "mn"><br><br>&nbsp;&nbsp;
                <label class='a1'>COLLEGE NAME</label><input class='a' type="text" name = "cn"><br><br>&nbsp;&nbsp;
                <label class='a1'>BRANCH      </label> <input class='a'type="text" name = "branch"><br><br>
                <label class='a1'>D.O.B       </label><input class='a' type ="date" name = "dob"><br><br>
                <label class='a1'>MOBILE NO   </label><input class='a' type="number" name = "mob"><br><br>
                <label class='a1'>E.mail      </label><input class='a' type = "email" name = "mail"><br><br>
                <label class='a1'>ADDRESS     </label><input class='a' type = "text" name = "addresh"><br><br>
                <label class='a1'>ADHAR NO    </label> <input class='a'type="number"><br><br>
                <label>GENDER -     </label>&nbsp; &nbsp;&nbsp;<label>MALE</label>&nbsp;&nbsp;<input type="radio" name ="my GENDER">&nbsp;&nbsp;<label>FEMALE</label>&nbsp;&nbsp;<input type="radio" name ="my GENDER"><br><br>
                <label>INTROUCTION</label><textarea name="hyer"cols='30' rows="10"></textarea><br><br>
                <label>YOU ARE ABOVE 18</label> <input type="checkbox"><br><br><br>&nbsp;&nbsp;&nbsp;
        
                <input class="a2" type ="reset" value="reset now">&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="a2" type="submit"><br><br>
                 <a href="https://www.google.com"><i class="fab fa-google"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 </form>
                
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
                 integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
                  crossorigin="anonymous"></script>
 </body>
</html>