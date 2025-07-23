<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    @include('header')
    <main>
        <div>
            <img src="{{asset(plateauFromage.jpeg)}}" alt="plateau de fromage">
        </div>
        <div>
            <h1>Nos produits phares</h1>
            <div>
                    <img src="{{asset(image/pateDur.jpg)}}" alt="Fromage pate dur">
                    <img src="{{asset(image/pateDurePresse.jpg)}}" alt="Fromage pate dur presse">
                    <img src="{{asset(image/pateMolle.jpg)}}" alt="Fromage pate molle">
            </div>
        </div>

        <div>
            <h2>Qui se cache derrière Croute et Créature ?</h2>
            <p>Eh bien… derrière chaque croûte bien faite, il y a un nain expert, de monstrueux tétons vaillant, et un amour du bon goût. <br> 
            Pas de vaches, pas de chèvres… Ici, on trait du troll, on presse du gobelin, on affine du yéti. <br>
            Oui, oui, c’est du lait 100% monstre, riche en… euh… caractère.</p>

            Notre secret ?   <br>
            Des monstres bien nourris, une cave un peu hantée, et un savoir-faire qui sent fort… très fort.

    N       <p>Notre credo ?   <br>
            Si ça ne bouge pas un peu tout seul, c’est pas mûr !</p>
        </div>    
        <div>
            <a href="">Découvrez l'équipe de C et C</a>

            <h2>Provenance des laits</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra maximus augue. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <p>Nam pharetra maximus augue. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim.</p>
            <p>Nous trayions nos trollettes selon un savoir-faire nain ancestrale.
            <p>Pour arriver à notre but, nous nous servons de statuettes enroulées dans du jambon, de bras de manchots et de fers à lisser le pain mais nous n’en dirons pas plus. Secret de fabrication !</p>
        
            <a href="">En savoir plus</a>
            <img src="{{asset(image/pateDur.jpg)}}" alt="">
        </div>
        <div>
            <h2>Nos types de Fromage</h2>

            <div>
                <div>
                    <img src="{{asset(image/pateDur.jpg)}}" alt="">
                    <h3>Fromage pâte persillée</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra maximus augue. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim.</p>
                </div>
                <div>
                    <img src="{{asset(image/pateDur.jpg)}}" alt="">
                    <h3>Fromage pâte pressée cuite</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra maximus augue. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim.</p>
                </div>
                <div>
                    <img src="{{asset(image/pateDur.jpg)}}" alt="">
                    <h3>Fromage pâte molle</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra maximus augue. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim.</p>
                </div>
                <div> 
                    <img src="{{asset(image/pateDur.jpg)}}" alt="">
                    <h3>Fromage de 'ieps</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra maximus augue. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim.</p>
                </div>
            </div>
        </div>
        <div>
            <h2>Avis client</h2>
            <img src="{{asset(image/pateDur.jpg)}}" alt="">
            <p>Incoyablus de fromatis cactus ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra maximus augue. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim. Donec eu orci aliquet, hendrerit metus ac, imperdiet nutella. </p>
            <p>- Chantalito</p>
        </div>
    </main>
</body>
</html>