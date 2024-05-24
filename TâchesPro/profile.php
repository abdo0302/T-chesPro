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
    <title>Tâches Pro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/profile.css">
</head>
<body>
     <!--======{{header start}}=====-->
    <header id="header">
        <div class="contenar_header">
            <h3 class="logo">Tâches <span>Pro</span></h3>
            <nav class="nav_bar">
                <ul>
                    <li>Home</li>
                    <li class="button_creer">Créer</li>
                    <li class="button_categories">Categories</li>
                    <li class="Exporter">Exporter</li>
                    <li class="button_inpourt">Inpourt</li>
                    <li class="info_profile">
                     <span><?php echo $_SESSION['nom'] ?></span>
                     <div><img class="image_profile" src="./ajax/img/<?php echo $_SESSION['image']?>" alt=""></div></li><div class="menu_user"><span class="log_ouT">Log out</span><span class="button_modifier_color">color card</span></div>
                  </ul>
            </nav>
        </div>
    </header>
    <!--header end-->
    <!--======{{main start}}=====-->
    <main>
        <section class="home">
            <div>
                <h3><img src="./img/icons8-alphabetical-sorting (1).gif" alt=""> Toutes les tâches sont triées par catégories <select class="select selectt" name="" id=""></select></h3>
                <div class="contenar_les_tache contenar_les_tache_par_categoti">
                  
                </div>
            </div>
            <div>  
                <h3><img src="./img/icons8-priority.gif" alt=""> Toutes les tâches sont prioritaires<select class="select select_prioritai" name="" id=""><option value="Très important">Très important</option><option value="important">important</option><option value="Sans importance">Sans importance</option></select></h3>
                <div class="contenar_les_tache contenar_lestache_prioritai">
                   

                </div>
            </div>
        </section>
        <section class="Créer">
         <div class="d1"><i class="fa-solid fa-x close_form"></i></div>
            <div class="contenar_form_creer_tach">
               <h3>Créer une tâche</h3>
               <div class="form">
                  <div><span>Titre</span></div>
                  <input type="text" class="input_tetle">
                  <div><span>Description</span></div>
                  <input type="text" class="input_Description">
                  <div><span>Date</span></div>
                  <input type="date" name="" id="" class="input_date">
                  <div class="d2">
                     <div>
                        <select name="" id="" class="complete">
                           <option value="incomplete">incomplete</option>
                           <option value="completet">completet</option>
                        </select>
                     </div>
                     <select name="" id="" class="prioritai">
                        <option value="Très important">Très important</option>
                        <option value="important">important</option>
                        <option value="Sans importance">Sans importance</option>
                     </select>
                  </div>
                  <div><span>catégories</span></div>
                  <select class="selec_categori catégories">
                     
                  </select>
                  
                  


               </div>
               <div>
                  <button class="creer_tach">submit</button>
               </div>
            </div>
        </section>
        <section class="Categories">
            <div class="d1"><i class="fa-solid fa-x close_form_categories"></i></div>
            <div class="contenar_form_categories">
               <h3>catégories</h3>
               <div class="contenar_select_1">
                  <span>Toutes catégories</span>
                  <select class="select_Toutes_catégories" name="" id="">
                     
                  </select>
               </div>
               <div class="buttons">
                  <button class="button_ajout_categori">ajout</button>
                  <button class="button_supprimer">supprimer</button>
               </div>
               <div class='contenar_select_supprimer'>
                  <select name="" id="">
                     
                  </select>
               </div>
               <div class="contenar_ajout">
                  <input type="text" class="input_name_categori"><button class="button_submit">ajout</button>
               </div>

            </div>
        </section>
        <section class="section_modifier">
         <div class="g"><i class="fa-solid fa-x close_form_modifier"></i></div>
            <div class="contenar_form_creer_tach">
               <h3>modifier une tâche</h3>
               <div class="form form_modifier">
                  <div><span>Titre</span></div>
                  <input type="text" class="input_tetle input_tetle_modifier">
                  <div><span>Description</span></div>
                  <input type="text" class="input_Description input_Description_modifier">
                  <div class="d2">
                     <div>
                        <select name="" id="" class="complete modifier_complete" value="completet">
                           <option value="incomplete">incomplete</option>
                           <option value="completet">completet</option>
                        </select>
                     </div>
                  </div>
                  <div>
                      <button class="modifier_tach">submit</button>
                  </div>
               </div>
               
            </div>
        </section>
        <section class="section_Afficher">
          <div class="d1"><i class="fa-solid fa-x close"></i></div>
            <div class="ffffff">
               
           </div>
        </section>
        <section class="section_inpourt">
        <div class="g"><i class="fa-solid fa-x close_form_inpourt"></i></div>
           <div class="contenar_input_inpourt">
              <h3>Impourt les taches</h3>
              <div>
               <input type="file" class="input_file_tache"> <button class="inpourt" >ajout</button>
              </div>
              
               <button class="send">inpourt</button>
           </div>
        </section>
        <section class="modifier_color_card">
        <div class="g"><i class="fa-solid fa-x clos"></i></div>
        <div class="contenar_color_input">
          <input type="color" name="" id="" class="input_color"> <button class="button_chonge_color">ok</button>
        </div>
        </section>
    </main>
    <!--main end-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>
    <script src='./js/profile.js'></script>
    <script src='./jquery/log_out_profile.js'></script>
    <script src="./jquery/creer_categori.js"></script>
    <script src='./jquery/get_categories.js'></script>
    <script src="./jquery/creer_tache.js"></script>
    <script src="./jquery/page_profile_ready_t.js"></script>
    <script src='./jquery/select_catigori.js'></script>
    <script src="./jquery/select_prioritai.js"></script>
    <script src="./jquery/supprimer_tach.js"></script>
    <script src="./jquery/modifier.js"></script>
    <script src="./jquery/Afficher.js"></script>
    <script src='./jquery/export.js'></script>
    <script src="./jquery/inpourt.js"></script>
    <script src="./jquery/send_db.js"></script>
    <script src="./jquery/afficher_info_modifier.js"></script>
    <script src="./jquery/modifier_color_body.js"></script>
    <script src="./jquery/page_profile_ready_color.js"></script>
</body>    
</html>