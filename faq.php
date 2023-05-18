<html>

    <head><style>.login-background {

            background-image: url('path/to/background-image.jpg');

            background-size: cover;

            background-position: right;

            height: 100vh;

            display: flex;

            justify-content: right;

            align-items: right;

          }

          

          .login-form {

            background-color:grey;

            padding: 20px;

            border-radius: 50px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);

            max-width: 400px;

            width: 100%;

          }

          

          .login-form h2 {

            margin-top: 0;

            text-align: center;

          }

          

          .login-form form {

            display: flex;

            flex-direction: column;

          }

          

      

          

         

          

         

              

        </style> </head>

    <body>   

       <form method="post" action="q.php" >

       <label for="inp08">Ask your question?<br>

 <textarea rows="10" cols="40" id="inp08" name="q"></textarea><br><br>

<input type="submit" value="submit" name="submit">

 

       </form>

       <?php 

       $ques=$_post["q"];





$file = fopen("faq.txt","a");

fwrite($file,$ques);



?>

<div class="login-background">

                <div class="login-form">

                     frequently asked questions

                     : jbkjb</div></div>



    </body>

</html>