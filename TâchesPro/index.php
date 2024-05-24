<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tâches Pro</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="container">
        <div class="contenar_image">
           <img src="./img/giphy.gif" alt="">
        </div>
        <!--====={{log in start}}====-->
        <div class="forms form_login">
           <h3>Tâches<span>Pro</span></h3>
           <div class="contenar_log_login">
            <img src="./img/icons8-circled-user-female-skin-type-6.gif" alt="">
            <span>Log in</span>
           </div>
           <div class="form">
             <input type="text" class="email_sin_in" placeholder="Enter your email" required>
             <input type="password" class="password_sin_in" placeholder="Enter your password" required>
             <button class="submit submit_sin_in">submit</button>
           </div>
           <h6 class="Create_account">Create an account</h6>
<div id="hh"></div>
        </div>
        <!--====={{log in end}}====-->
        <!--====={{Sign up start}}====-->
        <div class="forms Sign_up">
           <h3>Tâches<span>Pro</span></h3>
           <div class="contenar_log_login">
            <img src="./img/icons8-sign-up.gif" alt="">
            <span>Sign up</span>
           </div>
           <div class="form">
             <input type="text" class="input_name" placeholder="Enter your name" required>
             <input type="text" class="input_email" placeholder="Enter your email" required>
             <input type="password" class="input_password" placeholder="Enter your password">
             <input type="file" name="image" class="image">
             <button class="submit submit_sin_up">submit</button>
           </div>
           <h6 class="Log_in">Already have an Atlassian account? Log in</h6>

        </div>
        <!--====={{Sign up end}}====-->
        <div class="contenar_image">
           <img src="./img/image-removebg-preview.png" alt="">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>
    <script src='./js/index.js'></script>
    <script src="./jquery/sin_up.js"></script>
    <script src="./jquery/sin_in.js"></script>
</body>
</html>