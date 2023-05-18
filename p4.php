<html>



    <head>



        <?php



        // Retrieve user input from form submission

        $q1=$_POST["q1"];

        $q2=$_POST["q2"];

        $q3=$_POST["q3"];

        $q4=$_POST["q4"];

        $q5=$_POST["q5"];



        // Initialize variables to track quiz results

        $attempted = 0;

        $correct = 0;

        $wrong = 0;



        // Check answers and update quiz results variables

        if($q1=="S") {

            $attempted++;

            $correct++;

        }

        else if($q1!="") {

            $attempted++;

            $wrong++;

        }



        if($q2=="Q") {

            $attempted++;

            $correct++;

        }

        else if($q2!="") {

            $attempted++;

            $wrong++;

        }



        if($q3=="T") {

            $attempted++;

            $correct++;

        }

        else if($q3!="") {

            $attempted++;

            $wrong++;

        }



        if($q4=="po") {

            $attempted++;

            $correct++;

        }

        else if($q4!="") {

            $attempted++;

            $wrong++;

        }



        if($q5=="T") {

            $attempted++;

            $correct++;

        }

        else if($q5!="") {

            $attempted++;

            $wrong++;

        }



        // Calculate accuracy and not attempted questions

        $accuracy = round(($correct / $attempted) * 100, 2);

        $not_attempted = 5 - $attempted;



        ?>



        



  <title>Quiz Results</title>



  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</head>



<body>



<canvas id="quiz-chart" height="200" width="200"></canvas>








  <script>



    var ctx = document.getElementById('quiz-chart').getContext('2d');



    var quizChart = new Chart(ctx, {



        type: 'pie',



        data: {



            labels: ['Correct', 'Wrong', 'Accuracy', 'Not Attempted'],



            datasets: [{



                label: 'Quiz Results',



                data: [<?php echo $correct ?>, <?php echo $wrong ?>, <?php echo $accuracy ?>, <?php echo $not_attempted ?>],



                backgroundColor: [
    'rgba(75, 192, 192, 0.4)',
    'rgba(255, 99, 132, 0.4)',
    'rgba(54, 162, 235, 0.4)',
    'rgba(255, 206, 86, 0.4)'
],
borderColor: [
    'rgba(75, 192, 192, 1)',
    'rgba(255, 99, 132, 1)',
    'rgba(54, 162, 235, 1)',
    'rgba(255, 206, 86, 1)'
],


                borderWidth: 1



            }]



        },



        options: {



            responsive: true,



            title: {



                display: true,



                text: 'Quiz Results'



            },



            legend: {



                display: true,



                position: 'bottom'



            }



        }



    });



  </script>






<?php


if($correct>=3)
        
           {echo "<font size=\"10\"color=\"green\">Congratulations!!&#128512&#128512 you have qualified first round</font>";
           echo "<br>";
              echo "<font size=\"10\" color=\"purple\"> Score is::$correct</font>"
              ;
              
              echo "<br>";echo "<br>";echo "<br>";
                        echo "<a href=\"ds_page2.html\" target=\"blank\">click here to move to next round</a>";}
        
        else
            {echo "<font size=\"10\"color=\"red\">sorry!!&#128542 &#128542you have failed the first round</font>";
            echo "<br>";
            echo "<font size=\"10\" color=\"purple\"> Score is::$correct</font>";
         echo "<br\>";echo "<br>";echo "<br>";
         echo "<a href=\"p2.html\" target=\"blank\">click here to move to home page</a>";}
         
         
         
         
         
         

            
        ?>
        
        
       </body>
        </html>
