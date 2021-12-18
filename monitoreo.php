<?php 
include('session.php');
if($user_check == NULL){
  header("Location: index.php"); // Redirecting To Home Page
}
session_abort()
?>

<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hidroponia ABR</title>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>
    <link rel="shortcut icon" type="image/png" href="/minilogo.png"/>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<style>
  .parche {
    flex-grow: 1;
    margin: 100 auto;
    position: absolute;,
    width: 100%;
}
  .message {
    background-color: #81BB34;
    border-bottom: 10px solid;

  }
</style>
            <!-------------------------JavaScript------------------------->
<script type="text/javascript">

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}


    </script>
    </head>

    <body>
    <?php
include 'nav.html';
?>
        <section class="section">
    <div class="container">
      <p class="title">
        Monitoreo de <strong style="color:#17A3E1"><?php echo $user_check?></strong><strong> en Hidroponia ABR <ion-icon name="tv-outline"></ion-icon></strong>
        <br>
      </div>
<?php
include 'submonitoreo.php';
include 'footer.html';
?>
    
        </body>
        </html>