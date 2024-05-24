<?php
 if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <!--====={{aside start}}====-->
    <aside>
        <div class="contenar_logo">
            <h3 class="logo">Tâches <span>Pro</span></h3>
        </div>
        <nav>
            <span><img src="./img/icons8-dashboard-64.png"> Dashboards</span>
            <span class="button_Exporter"><img src="./img/icons8-export-64.png"> Exporter</span>
            <span class="button_log_out"><img src="./img/icons8-log-out.gif"> Log out</span>
        </nav>
    
    </aside>
    <!--aside end-->
    <!--====={{main start}}====-->
    <main>
      <header>
            <div class="contenar_icon_bar">
            <i class="fa-solid fa-bars"></i>
            </div>
        <div class="contenar_info_user">
            <div class="log_name">
                <img class="image_profile" src="./ajax/img/<?php echo $_SESSION['image']?>" alt="">

            </div>
            <div class="info">
                <span><?php echo $_SESSION['nom'] ?></span>
                <span class="email"><?php echo $_SESSION['email']; ?></span>
            </div>
            <div class="contenar_icone_settings">
                <img src="./img/icons8-settings.gif" alt="">
            </div>
        </div>
      </header>
      <section class="Dashboards">
        <!--div_left-->
        <div class="div_left">
            <div class="nomber_all">
                <div class="nomber_users"><img src="./img/icons8-users (1).gif" alt=""><span></span></div>
                <div class="nomber_tach"><img src="./img/icons8-list.gif" alt=""><span></span></div>
            </div>
            <div class="contenar_users">
                <div class="conrenar_tetle">
                    <span>Users</span>
                </div>
                <div class="all_user">
                    
                </div>

            </div>
        </div>
        
    </main>
    <!--main end-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>
    <script src='./jquery/log_out_admin.js'></script>
    <script src='./jquery/git_users.js'></script>
    <script src='./jquery/nomber_user_tache.js'></script>
    <script src='./jquery/supprimer_users.js'></script>
    <script src="./jquery/admin_export.js"></script>
</body>
</html>