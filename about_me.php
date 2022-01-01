<?php

require_once 'db_connection.php';

require 'php_functions/about_me_page_php_functions/about_me_page.php';

?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="егор сухачев">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Егор Сухачев | Сайт Егора Сухачева | Обо мне</title>
    <!-- jquery -->
    <script src="http://www.egorsukhachev.com/jquery/jquery-3.5.1.min.js"></script>
    <!-- /jquery -->
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/da9981aa25.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- /font-awesome -->
    <!-- ---- -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- /---- -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- /bootstrap -->
    <link rel="stylesheet" href="css/main.css?v=<?= time() ; ?>">
    <link rel='stylesheet' href='css/header.css?ver=<?= time() ; ?>'>
    <!-- <link rel="stylesheet" href="css/footer.css?ver=4"> -->
    <link rel="stylesheet" href="css/gadgets.css?ver=<?= time() ; ?>">
    <link rel='stylesheet' href="css/about-me.css?ver=<?= time() ; ?>">
    <link rel='stylesheet' href="css/menuLine_module.css?ver=<?= time() ; ?>">
    <link rel='stylesheet' href="css/modal_window_module.css?ver=<?= time() ; ?>">
    <link rel="stylesheet" href="css/my_profile_main.css?ver=<?= time() ; ?>">
    <!-- custom scroll bar css -->
    <script src='javascript/custom_scroll_bar/jquery.mCustomScrollbar.css'></script>
    <!--\ custom scroll bar css -->
</head>
<body>

<div id='aboutMe-mainDiv' class="main_div">
    
    <?php require 'common_modules/header.php'; ?>

    <style>
        /* important!! only about me page */
        #aboutMe-mainDiv > div.header { position: static; }
    </style>
    
    <div class="about-me-menu-line">
        <div class='about-me-menu-line-inner-container'>
        <?php
                
            foreach(get_menu_items() as $item){
                echo "<li " ;
                if($item['isActive'] === '1') 
                {
                    echo "class='active";
                    if($item['blink']) echo ' blink'; 
                    echo "'";
                }
                else
                {

                }
                echo "menu-item-id='" . $item['id'] . "' ";
                if($item['isActive'] === '1') echo ""; //border:1px solid whitesmoke;
                echo "'>$item[theme_name]</li>";
            }
                
        ?>
        </div>
        <div class='my-menu-line-arrow left'>
            <div class='my-arrow-to-left'>&laquo;</div>
        </div>
        <div class='my-menu-line-arrow right'>
            <div class='my-arrow-to-right'>&raquo;</div>
        </div>
    </div>

    <div class="main-content">

        <div id="myProfileMainSlider" class="carousel slide" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#myProfileMainSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myProfileMainSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myProfileMainSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner">
                <?php

                    {
                        $imgPathesArray = array(
                            ['http://www.egorsukhachev.com/data/img/kindergarten.jpg' , 'Детский Сад'] , 
                            ['http://www.egorsukhachev.com/data/img/about_me_images/schule.jpeg' , 'Школа'] , 
                            ['http://www.egorsukhachev.com/data/img/pioner_camp.jpg' , 'Пионерлагерь'] , 
                            ['http://www.egorsukhachev.com/data/img/school.jpg' , 'Школа'] , 
                            ['http://www.egorsukhachev.com/data/img/institute.jpg' , 'Институт'] , 
                            ['http://www.egorsukhachev.com/data/img/inside_the_store_2004.jpg' , '2004'] , 
                            ['http://www.egorsukhachev.com/data/img/turkey_2005.jpg' , '2005'] , 
                            ['http://www.egorsukhachev.com/data/img/2006.jpg' , '2006'] , 
                            ['http://www.egorsukhachev.com/data/img/2007_zavidovo.jpg' , '2007'] , 
                            ['http://www.egorsukhachev.com/data/img/2008_hotel_tukey_egypt.jpg' , '2008'] , 
                            ['http://www.egorsukhachev.com/data/img/2009_winter_ski_hotel_podmoskovye.jpg' , '2009'] , 
                            ['http://www.egorsukhachev.com/data/img/sochi_nice_company_2009.jpg' , '2009'] , 
                            ['http://www.egorsukhachev.com/data/img/milan_2010.jpg' , '2010'] , 
                            ['http://www.egorsukhachev.com/data/img/About_2011_May_Turkey_Hotel.jpg' , '2011'] , 
                            ['http://www.egorsukhachev.com/data/img/2013_the_red_square_area.jpg' , '2013'] , 
                            ['http://www.egorsukhachev.com/data/img/about_me_slider.jpg' , '2015'] , 
                            ['http://www.egorsukhachev.com/data/img/profile_photo.jpg' , '2019'] , 
                            ['http://www.egorsukhachev.com/data/img/next_to_the_wall_2020.jpg' , '2020']
                        );
// data/img/2009_winter_ski_hotel_podmoskovye.jpg
                        $currentItemNumber = 0;
                        $active = ' active';
                        foreach ($imgPathesArray as $item) {
                            echo <<<htmlTags
                            <div class='carousel-item$active'>
                            <img src='$item[0]' class='d-block w-100' alt='...'>
                                <div class='carousel-caption d-md-block'>
                                    <h5>$item[1]</h5>
                                    <p></p>
                                </div>
                            </div>
htmlTags;
                            if($active) $active = '';
                        }
                    }

                ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myProfileMainSlider"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myProfileMainSlider"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>

        <p class='aboutMe-content'>Я, Сухачев Егор Генадиевич, родился в г. Сургут Тюменской области в 1975г. 
            Получил образование в средней школе (11 классов), в ТЮМГНГУ, в МГУ. 
            Жил в поселке Горноправдинск, в г.Мегион, в г.Тюмень (Тюменская обл.). 
            Сейчас живу в Москве (с 2005г.). В разные годы серьезно занимался 2-мя видами спорта. 
            Резко негативно отношусь к табаку, алкоголю, другим дурачущим веществам. 
            Посещал Европу, Африку, Казахстан, Турцию. 
            Имею значительный опыт вождения различных транспортных средств в том числе водных. 
            Имею в собственности однокомнатную квартиру в Южном Бутово, долю в нежилом помещении (90м) в Юго-Восточном,
            (50м) в Юго-Западном округ Москвы, (30м) в г.  Видное, Московская область.
            Четыре а/м: Хёндэ Тусон 2019г.; Газель 2020г.; Фольксваген Каравэл 2020г.; Мерседес Вито 2020г.. 
            Газель и Фольксваген, фактически, на июль 2021г, вот уже более 5 месяцев, а Хёндэ неоднократно,
            в разные периоды, как выведены из строя путинскими дебилами.</p>
        <p class="aboutMe-content important-text">Со мной можно <span class="red-text">встретиться</span>, раз в две недели, по следующему расписанию: 
            <ul>
                <li>в <span class="red-text">субботу</span> на Пушкинской площади (11:00 - 13:00) </li>
                <li>в <span class="red-text">субботу</span> на Большом Москворецком Мосту, у мемориала Б. Немцова (14:00 - 17:00) </li>
                <li>в <span class="red-text">субботу</span> напротив Беларусского посольства в Москве (19:00 - 21:00)</li>
                <li>в <span class="red-text">воскресенье</span> у мемориала "Октябрь, 1993", на ул. Дружинниковской (11:00 - 17:00)</li>
            </ul>
        
            
        
        
        </p>
        <p class="aboutMe-content">Подробности в разделе "Обо мне", в подразделе "Объявления".</p>
        </p>
        <!-- <h2 style="color: #ce5a57;text-align:center">по субботам с 12:00 до 18:00, <br>в сквере Мандельштама</h2> -->
        <div id="about-me-page-modal-window">
            <div class="my-profile-modal-window-nav-panel">
                <div class="mpmv-nav-panel-section-name-wrapper"><span class="mpmv-nav-panel-section-name"></span><span class="mpmv-nav-panel-section-name-count"></span></div>
                <div class="mpmv-nav-panel-closebutton-wrapper"><div id='main-modal-window-close-button'>X</div></div>
            </div>
            
            <div class='main-modal-window-container'></div>
        </div>

        <div id="my-profile-modal-window">
            <div class="my-profile-modal-window-nav-panel">
                <div class="mpmv-nav-panel-section-name-wrapper"><span class="mpmv-nav-panel-section-name"></span><span class="mpmv-nav-panel-section-name-count"></span></div>
                <div class="mpmv-nav-panel-closebutton-wrapper"><button class="my-profile-modal-window-close-button">X</button></div>
            </div>
            <div class="my-profile-modal-window-main-container"></div>
            
            <!-- <button class="my-profile-modal-window-close-button">X</button> -->
            <div class="my-profile-diary-card-modal-window"></div>
            <button class="my-profile-diary-card-modal-window-close-button">&laquo;</button>
            <div class="my-profile-diary-card-modal-window-media-fs"></div>
            <button class="my-profile-diary-card-modal-window-media-fs-close-button">&laquo;</button>
        </div>

        <div id="aboutMe-anotherModalWindow">
            <div class="navPanel">
                <div class="navPanel-name"></div>
                <div class="navPanel-value"></div>
                <button class="navPanel-closebutton">X</button>
            </div>
            <div class="aboutMe-anotherModalWindow-contantContainer">

            </div>
        </div>


        <div id="modalWindowToExclusive"></div>
        <style>
        #modalWindowToExclusive {     
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* border: 2px solid yellow; */
            background-color: #eaeaea;
            /* animation: slideOut 1s ease-out normal forwards; */
            font-family: 'Roboto Mono', monospace;
            /* background-image: url('https://www.setaswall.com/wp-content/uploads/2019/08/Whatsapp-Wallpaper-109-768x1365.jpg'); */  
        }
        </style>
        
        <style>
        #main-modal-window-close-button {
            /* position: absolute; */
            top: 9px;
            right: 9px;
            /* padding: 4px; */
            background-color: transparent;
            cursor: pointer;
            color: black;
            font-family: serif;
        }
        </style>
    </div>

    <div id='mobile_map_module'>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad22e00f71b3806d94d1c178987dde8eeeb19ac66b029536343e17458173c22b8&amp;width=100%&amp;height=360&amp;lang=ru_RU&amp;scroll=true"></script>
        <div class="cover"></div>
    </div>
    
    <?php include 'common_modules/footer.php'; ?>
    <?php include 'common_modules/main_menu_modal.php' ?>
</div>
  
</body>

</html>

<!-- <script src="javascript/menu_button_click_v20210809.js?v="></script> -->
<script src="javascript/my_cars_button.js?v=<?= time(); ?>"></script>

<!-- equipment button -->
<?php 
$equipmentScriptSource = 'http://m.egorsukhachev.com/javascript/about_me/equipment_button/equipment_button.js' ;
// $equipmentScriptSource = 'http://m.egorsukhachev.com/javascript/gadgete_button.js' ;
?>
<script src="<?= $equipmentScriptSource ?>?v=<?= time(); ?>"></script>
<!--END_OF equipment button -->

<script src="javascript/musican_button.v10.js?ver=<?= time(); ?>"></script>
<script src="javascript/politics_button.js?v=<?= time(); ?>"></script>

<!-- ---------------- ad button --------------------- -->
<?php
$ad_script = 'adwertising_button.js' ;
$ad_script = 'about_me/ad_button/ad_button.js' ;
?>
<script src="javascript/<?= $ad_script; ?>?v=<?= time(); ?>"></script>
<!-- END_OF ad button----------------------------------------------- -->

<script src="javascript/cringe_button.js?v=<?= time() ?>"></script>
<script src="javascript/poetry_button.js?v=<?= time(); ?>"></script>
<!-- ------------------------ locations button ------------------------------------- -->
<?php
$locations_url = 'javascript/locations_button.js' ;
$locations_url = 'http://m.egorsukhachev.com/javascript/about_me/locations_a_button/locations_a_button.js' ;
?>
<script src="<?= $locations_url ?>?v=<?= time(); ?>"></script>
<!-- END_OF ------------------------ locations button ------------------------------------- -->
<!-- ------------------------ children button ------------------------------------- -->
<?php 
$children_button_script = 'forChildrens_button.js' ; 
$children_button_script = 'about_me/children_button/children_button.js' ;
?>
<script src="javascript/<?= $children_button_script ; ?>?v=<?= time(); ?>"></script>
<!-- END_OF ----------------- children button ------------------------------- -->
<script src="javascript/humor_button.js?v=<?= time(); ?>"></script>
<script src="javascript/organizations_button.js?v=<?= time(); ?>"></script>
<!-- <script src="javascript/my_diary_button.js?v=<?= time(); ?>"></script> -->
<script src="javascript/neqrologue_button.js?v=<?= time(); ?>"></script>
<script src="javascript/new_subSection_button.js?v=<?= time(); ?>"></script>
<!-- <script src="javascript/click_my_diary_v20211201.js?v=<?= time(); ?>"></script> -->
<script src="sandbox/exclusives_window/exclusives_window_trigger.js?v=<?= time(); ?>"></script>
<script src="sandbox/sandbox_to_diary/loader.js?v=<?php echo time(); ?>"></script>
<script src="http://m.egorsukhachev.com/javascript/about_me/leisure_button/leisure_button.js"></script>
<script>
    let body = document.querySelector('body') ;
    let menu_modal_window = document.querySelector('#module_main-menu-modal');

    let closeButton = document.querySelector('.mm-close-button'); 
    closeButton.addEventListener('click' , () => {
        menu_modal_window.style.right = '-100%'; 
        body.style.overflow = 'auto' ;
    });

    let menuTrigger = document.querySelector('#main-menu-button');
    
    menuTrigger.addEventListener('click' , () => {
        menu_modal_window.style.right = '0'; 
        body.style.overflow = 'hidden' ;
        // body.style.overflow = 'hidden' ;
    });


</script>
<script>
    let crsl = document.querySelector('#myProfileMainSlider');
    var carousel = new bootstrap.Carousel(crsl, {
    interval: 0,
    wrap: false
    }) ;
</script>
<script src="javascript/custom_scroll_bar/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    // (function($){
    //     $(window).on("load",function(){
    //         $(".about-me-menu-line").mCustomScrollbar({
    //             axis:"x" // horizontal scrollbar
    //         });
    //     });
    // })(jQuery);
</script>
<script>
    function scrlIntW(){
        
    }
    scrlIntW();
</script>



<!-- styles to diary -->
<style>

:root {
    --panelHeight: 29px ;
}


    @keyframes slideOut {
        from {
            left: 0 ;
        }

        to {
            left: -100% ;
        }
    }

    @keyframes slideIn {
        from {
            left: -100% ;
        }

        to {
            left: 0% ;
        }
    }

</style>

<style>

div#my-profile-modal-window {
	display: none;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	/* border: 2px solid yellow; */
	background-color: #eaeaea;
	/* animation: slideOut 1s ease-out normal forwards; */
	font-family: 'Roboto Mono', monospace;
	/* background-image: url('https://www.setaswall.com/wp-content/uploads/2019/08/Whatsapp-Wallpaper-109-768x1365.jpg'); */
}


.my-profile-modal-window-nav-panel {
	/* position: absolute; */
	top: 0;
	left: 0;
	width: 100%;
	/* height: var(--panelHeight); */
	background-color: #656565;
	display: flex;
	justify-content: space-between;
	padding: 0 0 0 2px;
	align-items: center;
	/* border: 1px; */
	font-size: 14px;
}

.mpmv-nav-panel-section-name {
	color: whitesmoke;
}

.mpmv-nav-panel-section-name-count {
	color: whitesmoke;
}

.my-profile-modal-window-close-button {
	/* position: absolute; */
	top: 9px;
	right: 9px;
	width: var(--wh);
	height: var(--wh);
	border: 1px;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: serif;
}
    
</style>
<style>
    .my-profile-diary-card-modal-window {
        display: block;
        top: 0;
        /* right: 0; */
        left: -100%;
        width: 100%;
        height: 100%;
        /* border: 2px solid yellow; */
        background-color: #eaeaea;
        /* animation: slideOut 1s ease-out normal forwards; */
        font-family: 'Roboto Mono', monospace;
        background-image: url('https://www.setaswall.com/wp-content/uploads/2019/08/Whatsapp-Wallpaper-109-768x1365.jpg');
        /* display: none; */
        position: absolute;
    }

.my-profile-diary-card-modal-window-close-button {
    position: absolute;
    top: 9px;
    right: 9px;
    width: var(--wh);
    height: var(--wh);
    border: 1px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: serif ;
    display: none;
}

</style>
<style>
    .my-profile-diary-card-modal-window-media-fs {
        display: none;
        top: 0;
        /* right: 0; */
        left: -100%;
        width: 100%;
        height: 100%;
        /* border: 2px solid yellow; */
        background-color: #eaeaea;
        /* animation: slideOut 1s ease-out normal forwards; */
        font-family: 'Roboto Mono', monospace;
        /* background-image: url('https://www.setaswall.com/wp-content/uploads/2019/08/Whatsapp-Wallpaper-109-768x1365.jpg'); */
        background-color: black;
        /* display: none; */
        position: absolute;
    }

    .my-profile-diary-card-modal-window-media-fs-close-button {
        position: absolute;
        top: 9px;
        right: 9px;
        width: var(--wh);
        height: var(--wh);
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: serif ;
        display: none;
    }

    .my-profile-diary-card-modal-window-media-fs iframe video {
        object-position: top;
        /* display: none; */
    }

    
</style>
<style>
/* aboutMe-anotherModalWindow */

#aboutMe-anotherModalWindow {
	background-color: whitesmoke;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	display: none;
	/* padding: 2px; */
	font-size: 14px;
	/* font-family: serif; */
}

#aboutMe-anotherModalWindow a {
	color: inherit ;
    text-decoration: none;
}

#aboutMe-anotherModalWindow a:visited {
	color: inherit ;
    text-decoration: none;
}

.navPanel {
	width: 100%;
	/* height: 28px; */
	background-color: #656565;
	display: flex;
	justify-content: space-between;
	padding: 0 0 0 2px;
	align-items: center;
}

.navPanel-name {
	color: white;
}

.navPanel-closebutton {
	font-family: serif;
	border: 1px;
}

.aboutMe-anotherModalWindow-contantContainer {
	padding: 2px;
	overflow-y: auto;
	height: 100%;
}



div.aboutMe-anotherModalWindow-contantContainer div.timeLine {
    color: grey;
}



/*END aboutMe-anotherModalWindow */
</style>
