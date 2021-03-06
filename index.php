<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    body{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: arial, sans-serif;
    }
    header{
      border-bottom:1px solid grey;
      height: 87px;
      background-color: white;
      position: fixed;
      top: 0;
      width: 100%;
    }
    .frame-nav{
      display: flex;
      flex-direction: column;
      width: 100%;
    }
    .nav{
      display: flex;
      height: 60px;
    }
    .sx{
      display: flex;
      width: 40%;
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }
    .sx img{
      height: 40px;
      margin-left: 20px;
      margin-right: 20px;
    }
    .dx{
      display: flex;
      width: 60%;
      justify-content: flex-end;
      align-items: center;
    }
    .dx img{
      width: 20px;
      margin: 10px;
    }
    button{
      background-color: rgb(27, 113, 229);
      border: none;
      outline: none;
      padding: 10px 20px 10px 20px;
      border-radius: 4px;
      font-size: 15px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 20px;
    }
    .sx h2{
      color: gray;
      font-weight: 500;
      font-size: 20px;
    }
    #under{
      height: 25px;
      padding-left: 20px;
      display: flex;
      align-items: center;
    }
    ul{
      height: 100%;
      margin: 0;
      padding: 0;
    }
    li:last-child{
      border-bottom: solid 3px blue;
    }
    li{
      display: inline-block;
      margin-right: 30px;
      height: 100%;
    }
    #last{
      color: blue;
    }
    .nav h3{
      margin-right: 40px;
      color: gray;
      font-weight: 500;
      font-size: 17px;
    }
    main{
      padding-top: 150px;
    }
    .frame-question{
      width: 70%;
      margin: auto;
      line-height: 25px;
      top: 350px;
    }
    .frame-question h2{
      color: rgb(67, 67, 67);
    }
    .frame-question h5{
      color: gray;
    }

  </style>

</head>

<?php
 $domande = [

   [ 
    'dom' => "Come state implementando la recente decisione della Corte di giustizia dell' Unione europea (CGUE) relativa al diritto all' oblio?",

    'risposta' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non pi?? rilevanti, o eccessivi.
    
    Da quando questa decisione ?? stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perch?? dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
    
    Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodich?? valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perch?? abbiamo gi?? ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi ?? un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorit?? garante per la protezione dei dati personali nel tuo paese.
    
    Nei prossimi mesi lavoreremo a stretto contatto con le autorit?? per la protezione dei dati e con altre autorit?? per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
    
    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
   
  ],

  [ 
    'dom' =>  "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",

    'risposta' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi ?? imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

    Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora pi?? efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Cos??, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
    
    Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.
    
    Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.
    "
  ],

  [
    'dom' =>  "Perch?? il mio account ?? associato a un paese?",

    'risposta' => "Il tuo account ?? associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:

    1. La societ?? consociata Google che offre i servizi, tratta le tue informazioni ed ?? responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due societ?? seguenti

    Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.
    Google LLC, con sede negli Stati Uniti, per il resto del mondo.

    2. La versione dei termini che regola il nostro rapporto, che pu?? variare in base alle leggi locali.

    Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla societ?? consociata che li offre o dal paese a cui ?? associato il tuo account.",

  ],
  [
    'dom' =>  "Stabilire il paese associato al tuo account",
    
    'risposta' => "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove ?? stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso pi?? tempo nell'ultimo anno.

    I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.
    
    Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato."
  ],

  [
    'dom' =>  "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",

    'risposta' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avr?? rilevato l'aggiornamento, le informazioni non verranno pi?? visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, ?? inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.",

  ],

  [
    'dom' =>  "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",

    'risposta' => "In alcuni casi s??. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento pu?? fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
  ]

 ];

?>


<body>

  <header>
    <div class="frame-nav">

    <div class="nav">
      <div class="sx">
        <img src="img/Google-logo.png" alt="">
        <h2>Privacy e Policy</h2>
      </div>

      <div class="dx">
        <img src="img/menu.png" alt="">
        <button>Accedi</button>
      </div>
    </div>

    <div id="under" class="nav">

      <ul>
        <li>Introduzione</li>
        <li>Norme sulla Privacy</li>
        <li>Tecnologie</li>
        <li>Termini di servizio</li>
        <li id="last">Domande Frequenti</li>
      </ul>

    </div>
    
    </div>
  </header>
  
  <main>

    <div class="frame-question">

    <?php foreach($domande as $oggetto) { ?>

        <h2>
          <?php echo $oggetto['dom'] ?>
        </h2>

        <h5>
          <?php echo $oggetto['risposta'] ?>
        </h5>

      <?php } ?>

    </div>

  </main>



</body>
</html>