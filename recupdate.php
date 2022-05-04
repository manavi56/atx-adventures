<?php
    // error_reporting(E_ALL);
    // ini_set("display_errors", "on");

    print <<<TOP
    <html>
    <head>
        <link rel="stylesheet" href="recommendations.css">
        <link rel="stylesheet" href="nav-bar.css">
    </head> 
TOP;

    // Retrieve data from Query String
    $activity = $_GET['activity'];
    
    if ($activity == 'outdoor') {
        print <<<OUT
        <h1 id = "header">Outdoor Activities</h1>
        <div id = "top_ten">
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/auditorium-shores.png" alt = "auditorium shores pic"/>
                <figcaption id = "caption" ><a href="https://www.austintexas.org/listings/auditorium-shores/8371/" style="color: #8ca778" target="_blank">Auditorium Shores</a></br>Watch an outdoor concert or throw a frisbee around with your friends here. This is a great place to watch the sunset in downtown!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/mount-bonell.png" alt = "mount bonnell pic"/>
                <figcaption id = "caption" ><a href="https://www.austintexas.org/austin-insider-blog/post/mount-bonnell-for-beginners/" style="color: #8ca778" target="_blank">Mount Bonnell</a></br>This is a great beginner hike in Austin and has a gorgeous view of the Colorado River!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/360-bridge.png" alt = "360 overlook"/>
                <figcaption id = "caption" ><a href="https://austin.com/adventure-austin-360-overlook/" style="color: #8ca778" target="_blank">360 Overlook</a></br>This is a hike that takes you to an absolutely beautiful view of Lake Austin. Another great sunset spot!</figcaption>
            </figure>
        </div>
    </div>
    <br><br><br><br>
OUT;
    } elseif ($activity == 'diningin') {
        print <<<OUT
        <h1 id = "header">Dine In Restaurants</h1>
        <div id = "top_ten">
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/ramen-tatsuya.png" alt = "ramen tatsuya pic"/>
                <figcaption id = "caption" ><a href="https://ramen-tatsuya.com" style="color: #8ca778" target="_blank">Ramen Tatsuya</a></br>Come here for amazing Japanese Ramen. There is something for everyone - sweet, spicy, savory, and umami flavors!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/aba-restaurant.png" alt = "aba pic"/>
                <figcaption id = "caption" ><a href="https://www.abarestaurants.com/austin/" style="color: #8ca778" target="_blank">Aba</a></br>Aba has amazing Mediterranean food. Make sure to make a reservation because this restaurant is booked months in advance!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/blacks-bbq.png" alt = "blacks bbq pic"/>
                <figcaption id = "caption" ><a href="https://www.blacksbbq.com" style="color: #8ca778" target="_blank">Black's BBQ</a></br>Black's BBQ is good ol' Texas BBQ that will satisfy your Southern Food cravings!</figcaption>
            </figure>
        </div>
    </div>
    <br><br><br><br>
OUT;
    } elseif ($activity == 'foodtrucks') {
        print <<<OUT
        <h1 id = "header">Food Trucks</h1>
        <div id = "top_ten">
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/patrizi.png" alt = "patrizi's pic"/>
                <figcaption id = "caption" ><a href="https://www.patrizis.com" style="color: #8ca778" target="_blank">Patrizi's</a></br>This food truck has a super cute sit-down area where you can enjoy the delicious pasta! You can even join for trivia on Tuesdays!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/discada.png" alt = "discada pic"/>
                <figcaption id = "caption" ><a href="http://www.discadatx.com" style="color: #8ca778" target="_blank">Discada</a></br> This taco truck has amazing tacos and elote! There's only one taco flavor, which tells you how good it is!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/picnic.png" alt = "picnic pic"/>
                <figcaption id = "caption" ><a href="https://www.thepicnicaustin.com" style="color: #8ca778" target="_blank">The Picnic Food Truck Park</a></br> This food truck park has all the cuisines you would want - Thai, Mediterranean, Tex-Mex, Italian, Gelato, and more!</figcaption>
            </figure>
        </div>
    </div>
    <br><br><br><br>
OUT;
    } elseif ($activity == 'bar') {
        print <<<OUT
        <h1 id = "header">Bars</h1>
        <div id = "top_ten">
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/bufords.png" alt = "buford's pic"/>
                <figcaption id = "caption" ><a href="https://www.bufordsaustin.com" style="color: #8ca778" target="_blank">Buford's</a></br>Come here for some amazing music you can dance your heart out to!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/aquariam.png" alt = "aquarium pic"/>
                <figcaption id = "caption" ><a href="https://www.theaquariumon6th.com" style="color: #8ca778" target="_blank">The Aquarium</a></br>Try out their fish bowl drinks that are bound to get you in a good mood!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/half-step-bar.png" alt = "half step bar pic"/>
                <figcaption id = "caption" ><a href="https://www.austintexas.org/listings/half-step-bar/9235/" style="color: #8ca778" target="_blank"> Half Step </a></br>Come to this bar on Rainey Street to have some amazing cocktails!</figcaption>
            </figure>
        </div>
    </div>
    <br><br><br><br>
OUT;
    } else {
        print <<<OUT
        <h1 id = "header">Art Attractions</h1>
        <div id = "top_ten">
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/blanton-museum.jpg" alt = "blanton museum pic"/>
                <figcaption id = "caption" ><a href="https://blantonmuseum.org" style="color: #8ca778" target="_blank">Blanton Museum</a></br>This museum on the UT Austin Campus has amazing installations and art that will put you in awe!</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/austin-art-garage.png" alt = "austin art garage pic"/>
                <figcaption id = "caption" ><a href="https://austinartgarage.com" style="color: #8ca778" target="_blank">Austin Art Garage</a></br>This garage displays locally-made art that is bound to inspire you! It has something for everyone, from college students to art collectors.</figcaption>
            </figure>
        </div>
        <div class = "column">
            <figure>
                <img class = "attractions" src = "media/women-and-their-work.png" alt = "women and their work pic"/>
                <figcaption id = "caption" ><a href="https://womenandtheirwork.org" style="color: #8ca778" target="_blank"> Women and their Work </a></br>This is a non-profit arts organization that displays conteporary art created by women!</figcaption>
            </figure>
        </div>
    </div>
    <br><br><br><br>
OUT;
    }

?>