<!DOCTYPE html>
<html>
<head>
<title>Predictor</title>
    <link rel="stylesheet" href="styling.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <style>
            .hi{
            background-image: url("predictor1.jpg");
            
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-color:black;

}

            .hello{
                position: absolute;
                top: 40%;
                left: 50%;
                margin: -150px 0 0 -150px;
                width:400px;
                height:400px;
            }
            .thaks{
                margin-top: 600px;
                text-align: center;
                margin-left: 80px;
                color :blue;
            }
            #pred{
                background-color: black;
                font-size: 15px;
                color: white;
            }
            .column{
                padding:10px;
            }
            ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}  
li {
    float: left;
}
li a {
    display: block;
    padding: 8px;
    background-color: #f8ffbd;
    text-decoration: none;
    border:1px solid gray;
    margin: 3px;
    
}
.container1{
    flex-direction: row;
    justify-content: center;
    align-items: stretch;
    float: right;
    text-align: center;
    text-decoration: none;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.container3{
    background-color:rebeccapurple;
    flex-direction: row;
    justify-content: center;
    align-items: stretch;
    float: right;
    text-align: center;
    text-decoration: none;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.container2{
    float:right;
}
.container{
    display: flex;
    align-content: center;
    flex-direction: row;
    justify-content: center;
} 
            </style>
</head>
<body class="hi">
        <div class="container1">
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li class="active"><a href="#">Predictor</a></li>
                    <li><a href="FAQs.php">FAQs</a></li>
                </ul>
            </div>
            
        </div>
<br><br>
    <div class="hello">
  <div class="container3">
            <div class="row">
                <div class="column" id="pred">
                    <h1>Predictor</h1>
                    <form method="post" action="#">
                        <div class="form-group">
                        <input type="text" name="age" class="form-control" placeholder="Age" required="required" />
                        </div><br>
                        <div class="form-group">
                        <input type="text" name="bmi" class="form-control" placeholder="BMI" required="required" />
                        </div><br>
                        <div class="form-group">
                        <input type="text" name="children" class="form-control" placeholder="Number of children" required="required" />
                        </div><br>
                        <p>Select your region:</p>
                        <div class="radio">
                            <label>
                                <input type="radio" id="southeast" name="region" value=1> SouthEast
                            </label><br>
                            <label>
                                <input type="radio" id="southwest" name="region" value=0> SouthWest
                            </label><br>
                            <label>
                                <input type="radio" id="northeast" name="region" value=3> Northeast
                            </label><br>
                            <label>
                                <input type="radio" id="northwest" name="region" value=2> Northwest
                            </label><br>
                        </div>
                        <p>Select your Gender</p>
                        <div class="radio">
                            <label>
                                <input type="radio" id="male" name="gender" value=0> Male
                            </label>
                            <label>
                                <input type="radio" id="female" name="gender" value=1> Female
                            </label>
                        </div>
                        <p>Are you a smoker</p>
                        <div class="radio">
                            <label>
                                <input type="radio" id="yes" name="smoker" value=1> Yes
                            </label>
                            <label>
                                <input type="radio" id="no" name="smoker" value=0> No
                            </label>
                        </div><br><br>
                        <input type="submit" value="Predict" class="btn btn-primary btn-block btn-large" style="width:100px; height:35px; font-size: large;"> <span class="glyphicon glyphicon-stats"></span></input>
                        <br>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <?php
    error_reporting(0);
    if($_POST){
        $age=$_REQUEST['age'];
        $bmi=$_REQUEST['bmi'];
        $children=$_REQUEST['children'];
        $region=$_REQUEST['region'];
        $gender=$_REQUEST['gender'];
        $smoker=$_REQUEST['smoker'];
        $tmp = exec("python pot.py $age $gender $bmi $children $smoker $region");
        $tmpp= 74*(float)$tmp;
        
    }
    ?>
    <div class="thaks"><br> <br> <br>
    <p> <h3 >Premimum Charges are : ₹<?php echo $tmpp;?></h3></p><br><br><br>
</div>
</body>
</html>