<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

    <div class="container">
    <div class="backgroundimg">
    <div id="intro-box">
    <div id="intro-tekst" style="background-color:#F2F0EA ; border-radius: 10px;">
        <h2 style="color:#F05130;font-size:70px; padding:15px; margin-bottom:0px; margin: 0px !important;">STREET FOOD FRIENDS</h2>
        <h4 style="color:#F05130 ;  padding:15px; margin-bottom:0px; margin: 0px !important;">Bliv en del af fælleskabet idag!
- det GRATIS</h4>
        <p style="padding-left:200px; padding-right:200px; font-weight:bolder;  padding:15px;margin-bottom:0px;margin: 0px !important;" >
        
Hos Esbjerg Streetfood tilbyder vi nu kundekort, hvor du kan få en masse fede fordele eksempelvis  

Arrangementer, Rabatter og Nye Kulinariske Muligheder. Hop hen i vores bar og få det i dag, eller sign up her på hjemmesiden.</p>
</div>
<a id="knap1" href="<?php get_permalink(get_page_by_path("sign-up/"))?>">
       
            <h4 style="margin:0px ;">TILDMED DIG HER!</h4>
        
        </a>
    </div>
    </div>


    <div id="member-offers">
        <div id="first-offer" class="row">
            <div id="offer1" class="col-md-6 col-sm-12">
                <h4>10% i alle barer</h4>
                <div class="divider"></div>
                <p>Vi giver dig 10% på alle drikkevare uanset klokkeslæt. Henvend dig i den nærmeste bar næste gang du besøger os!</p>
            </div>
            
            <div id="offer1img" class="col-md-6 col-sm-12">
                <img  id="img1" src="<?php the_field("img1")?>" alt="">
            </div>
        </div>
        <div id="second-offer" class="row">
        <div  class="col-md-6 col-sm-12">
                <img id="img2" src="<?php the_field("img2")?>" alt="">
            </div>
        <div id="offer2" class="col-md-6 col-sm-12">
                <h4>Invitation til ekslusive events</h4>
                <div class="divider"></div>
                <p>Få invitationer før alle andre i din mail!. Få eksklusive medlemstilbud og invitationer til events ( bare rolig, vi spammer ikke)</p>
            </div>
            
            
        </div>

        <div id="third-offer" class="row">
        <div id="offer3" class="col-md-6 col-sm-12">
                <h4>Frokosttilbud</h4>
                <div class="divider"></div>
                <p>Få rabat mellem 11-14 hver dag!
                    Nyd fordelene ved at spare penge på din frokost. (eksklusiv drikkevarer, og kan ikke sammensættet med andre tilbud)</p>
            </div>
            
            <div  class="col-md-6 col-sm-12">
                <img id="img4" src="<?php the_field("img4")?>" alt="">
            </div>
        </div>

    </div>

    <div id="heading">
            <h4 style="color:#FFFFFF ; font-size: 25px;">Kommende events <span style="color: #F05130; Text-decoration:underline;">KUN</span> for medlemmer</h4>
        </div>

    <div id="member-events">
    
        <div id="event" class="row">
            <div class="col-md-5 col-sm-12">
                <img id="img3" src="<?php the_field("eventimg")?>" alt="">
            </div>
            <div id="event-text" class="col-md-7 col-sm-12">
                <h4>All you can eat - Small</h4>
                <p>Prøv noget nyt, spis alt hvad du kan fra de forskellige madboder. Alle serveringer er små anretninger, så du kan smage mest muligt fra vores fantastiske køkkener. </p>
                <p>(Eventet gælder kun for medlemmer af Street Food Friends, prisen er eksklusiv drikkevare og i tidsrummet 17-20)</p>
                <h3 style="font-size:20px ;">Ikke medlem? <span style="color: #F05130; Text-decoration:underline;">Bliv medlem idag - helt gratis!</span></h3>
                <h3>149,- kr pr. pers.</h3>
                <a id="knap1" href="<?php get_permalink(get_page_by_path("register/"))?>">
                    <h4 style="margin:0px ;">KØB DIN BILLET HER</h4>
                </a>
            </div>
        </div>
    </div>


    <div id="sign-up">

    <div class="dotted-divider"></div>

        <h4 style="font-size:40px ;">Tilmeld dig til <span style="color: #F05130;">  STREET FOOD FRIENDS </span> nu</h4>
        <div class="divider"></div>
        <div class="blanket">
            <h4>Oplev fordelene</h4>
            <p>- 10% på alle drikkevare i alle barer</p>
            <p>- Eksklusive medlemsinvitationer</p>
            <p>- Events kun for medlemmer</p>
            <p>- Frokosttilbud</p>
            <a id="knap1" href="http://street-food-friends.local/register/(opens in a new tab)">
            <h4 style="margin: 0px;">BLIV MEDLEM NU</h4>
            </a>
        </div>
        

    <div class="dotted-divider"></div>
    </div>

    </div>


    <?php endwhile ?>

<?php get_footer(); ?>