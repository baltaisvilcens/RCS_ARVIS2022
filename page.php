<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="master.css">
    <title>Portfolio</title>
</head>
    <nav class="navbar">
        <button class="click">MENU</button>
            <ul class="list">
                <li class="links"><a href="#home">Home</a></li>
                <li class="links"><a href="#portfolio">Portfolio</a></li>
                <li class="links"><a href="#education">Education</a></li>
                <li class="links"><a href="#about">About me</a></li>
                <li class="links"><a href="#contact">Contact me</a></li>
            </ul>
    </nav>
    <section id="home">
        <h1 class="heading">Sveiki, es esmu</h1>
        <h1 class="heading">Arvis Šuksts</h1>
        <br><br>
        <p>Šis ir mans portfolio</p>
    </section>
    <section id="portfolio">
        <h1 class="heading">Portfolio</h1>
        <div class="gallery">
            <img src="Images/img1.jpg" alt="">
            <img src="Images/img2.jpg" alt="">
            <img src="Images/img3.jpg" alt="">
            <img src="Images/img4.jpg" alt="">
            <img src="Images/img5.jpg" alt="">
            <img src="Images/img6.jpg" alt="">
        </div>
    </section>
    <section id="education">
        <h1 class="heading">Education</h1>
        <div class="columns">
            <div class="box">
                <h2>Pamatizglītības iegūšana</h2>
                <p>Pirmās mācību gaitas uzsāku 2009.gada spetembrī, Ilzenes pamatskolā. Ilzenes pamatskolā mācījos līdz 2015. gadam, bet dažādu apstākļu dēļ 2015. gadā mainīju mācīšanās iestādi uz Strautiņu pamatskolu. 2018. gadā tika iegūta pamatizglītība Strautiņu pamatskolā.</p>
            </div>
            <div class="box">
                <h2>Vidējās izglītības iegūšana</h2>
                <p>Pēc pamatizglītības iegūšanas devos uz Lejasciema vidusskolu 2018. gadā, kur ne tikai tika iegūta vidējā izglītība, bet atradu savu dzīves turpmāko mērķi. Mīļākais priekšmets bija informātika, kur arī sāku interesēties ne tikai par programmēšanu, sportu, bet arī par fotografēšanu! Sasniegti labi rādītāji sportā, sporta pasākumos. Piedalījos skriešanas sacensībās, orientēšanās sacensībās. </p>
            </div>
        </div>
    </section>
    <section id="about">
        <h1 class="heading">About me</h1>
        <div class="about">
            <img src="Images/profila_bilde.jpg" alt="My pic">
            <div class="name">
                <h2>Es esmu Arvis Šuksts</h2>
                <p>Sveiki! Man sauc Arvis Šuksts! Man ir 19 gadi, mācos Web izstrādi Riga Coding School! 
                    Par programmēšanu un mājaslapu veidošanu sāku jau 16 gadu vecumā, izmantojot jau gatavus failus ( Web uzstādīšana caur Filezilla izmantojot IPS un IPB failus, pluginu uzinstalēšana), 
                    protams, vēl esmu palīdzējis veidot ( SA:MP un Minecraft spēļu serverus.) Kā arī šobrīd apgūstu Worldpress zināšanas. Esmu cilvēks, kurš labprāt strādā komandas darbu, kā arī esmu draudzīga persona, 
                    spēju sadarboties ar kolēģiem un izveidot vienu kopēju valodu! 
                    Esmu sportisks, aktīvs cilvēks, kurš meklē iespējas sevi pilnveidot. Esmu mērķtiecīgs un vienmēr gatavs sākt un izmēģināt ko jaunu! 
                    Kāda veida daru es tieši meklēju? Es uzskatu, ka man vispiemērotākais darbs būtu veidot mājaslapas vizuālo daļu, jeb vairāk esmu vērsts uz Front-End programmēšanu.  
                    Protams, arī bez programmēšanas mani piesaista fotografēšana. Savienojot šīs divas lietas varētu sanākt lielisks rezultāts un materiāls. Ar fotografēšanu es varētu palīdzēt gan programmētājiem, gan citiem uzņēmējiem. 
                    Vienmēr esmu gatavs sākt un to nekad nenožēlošu!
                </p>
            </div>
        </div>
    </section>
    <section id="contact">
        <h1 class="heading">Kontakti</h1>
        <div class="error-message" style="color:#fff;font-family: Arial;text-align: center;"></div>
        <form class="form" action="contact.php" method="POST">
            <input type="text" name="name" class="input" placeholder="Enter Your Name">
            <input type="email" name="email" class="input" placeholder="Enter Your Email">
            <textarea name="msg" id="msg" cols="70" rows="20" placeholder="Enter Your Message" class="text"></textarea>
            <button type="submit" value="Submit" id="Submit" class="submit">Send</button>
        </form>
    </section>
    <script>
        let click = document.querySelector('.click');
        let list = document.querySelector('.list');
        click.addEventListener("click", () => { list.classList.toggle('newlist'); });
    </script>
</body>
    <script type="text/javascript" src="script.js?v=2"></script>
</html>
