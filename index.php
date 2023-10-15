<?php
    $proizvodi = array(
        array(
            'id' => 1,
            'naziv' => "Laptop",
            'cena' => 400
        ),
        array(
            'id' => 2,
            'naziv' => "Mis",
            'cena' => 200
        ),        
        array(
            'id' => 3,
            'naziv' => "Tastatura",
            'cena' => 300
        ),
        array(
            'id' => 4,
            'naziv' => "Slusalice",
            'cena' => 100
        ),
    );

    session_start();

    if(!isset($_SESSION['korpa'])) {
        $_SESSION['korpa'] = array();
    }

    if(isset($_POST['submit']) && $_POST['submit']=='Kupi'){
        $_SESSION['korpa'][] = $_POST['id'];
        header('Location: .'); 
        exit();
    }


    if(isset($_GET['vidi_korpu'])) {
        //deo koda koji puni korpu
        $korpa = array();
        $ukupno = 0;
        foreach($_SESSION['korpa'] as $id){
            foreach($proizvodi as $proizvod){
                if($proizvod['id'] == $id){
                    $korpa[] = $proizvod;
                    $ukupno += $proizvod['cena'];
                    break;
                }
            }
        }

        include 'korpa.php';
        exit();
    }

    include 'katalog.php';



?>