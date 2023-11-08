<?php

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';




if($lang == 'es'){
 define('LANG','es');   
 define('SHOW','Show');
 define('BIO','Bio');
 define('GALERY','Galeria');
 define('TOUR','Tour');
 define('IMG','./img/spain.png');
 define('LOGO','./img/logo_naranja.png');
 $textosShow = array(
   'tituloFestival'=>'FESTIVALES',
    'TITULO' => 'Maromas',
    'CUERPO' => 'Maromas es un espectáculo unipersonal callejero basado en las acrobacias del circo. De pequeñas a grandes destrezas que se irán desarrollando a medida que avance el show, mezclando diversas formas de participación y comunicación con el público. Cronopia descubre poco a poco sus distintas habilidades de una manera ingenua y a veces hasta problemática que nos hará reír y sorprender. Entre las habilidades se encuentran las acrobacias con pelota de fitness, manipulación de raquetas, saltos acrobáticos y las mas peculiares contorsiones. Sin dejar atrás el número central donde combina su flexibilidad con la dislocación generándole un gran impacto al espectador.',
    'FichaTecnica' => 'Ficha Técnica.',
    'DURACION' => 'Duracion del show: 35 min.',
    'MONTAJE' => 'Montaje: 10 min.',
    'DESMONTAJE' => 'Desmontaje 15 min.',
    'ESPACIO' => 'ESPACIO:',
    'ALTURA' => 'Altura: 3,5 mts',
    'DIMENSION' => 'Dimension: 7x5 mts.'
 );
 $textosBio = array(
    'TITULO' => 'Contorcionista',
    'CUERPO' => "Su formación comienza a la corta edad de 6 años, realizando gimnasia artística en el C.P.O. (Centro de Promoción Olímpica) en Argentina, donde atravesó su infancia.
    Durante este período participó en la obra de teatro Variette, dirigida por Mauricio Kagel, en el famoso teatro Colón.
    A los 11 años cambió de deporte y se inició en la gimnasia rítmica en el G.E.V.P. (Gimnasia y Esgrima de Villa del Parque)
    donde pudo concentrarse en su flexibilidad. Al mismo tiempo, impartió formación en danza clásica, jazz y contemporánea.
    A la edad de 17 años, se encuentra con las diferentes disciplinas del circo, en el Circo Criollo (una de las dos primeras escuelas de circo de América Latina)
    e inició su formación como artista circense, dedicándose a las contorsiones y al trapecio.
    A los 19 años inició su carrera artística como contorsionista y artista de calle. Desde entonces ha recorrido el mundo con su espectáculo 'Maromas' en países como:
    Argentina, Brasil, Chile, Puerto Rico, Italia,España ,Francia, Alemania, Bélgica, Países Bajos, Eslovenia, Austria, Suiza, Suecia, Noruega, Dinamarca, Luxemburgo,
    República Checa, Polonia, Serbia, Grecia, San Marino, Croacia, Turquía y Malasia.",
);
   $timeline2023 = array(
      '1' => '- <b>Circo Fest</b> - Puerto Rico',
      '2' => '- <b>Festivalove</b> - Italia',
      '3' => '- <b>Busker Chur</b> - Suiza',
      '4' => '- <b>Alchemika</b> - Italia',
      '5' => '- <b>Street Theater Festival Brunico</b> - Italia',
      '6' => '- <b>Les Nuits du Cirque</b> - Belgica',
      '7' => '- <b>Girovagarte</b> - Italia',
      '8' => '- <b>Street Performers Festival Villach</b> - Austria',
      '9' => '- <b>Gauklerfestung</b> - Alemania',
      '10' => '- <b>Schloss spektakel</b> - Alemania',
      '11' => '- <b>Eis Zeitreise</b> - Austria',
      '12' => '- <b>Variete et cetera</b> - Alemania'
);
   $timeline2022 = array(
      '1' => '- <b>Festival Art de Rue Sion</b> - Suiza',
      '2' => '- <b>Andersen Festival</b> - Dinamarca',
      '3' => '- <b>Buskers Braunschweig</b> - Alemania',
      '4' => '- <b>Ana Desetnica</b> - Eslovenia',
      '5' => '- <b>Linz Theater Spektakel</b> - Austria',
      '6' => '- <b>Scarti di strada</b> - Italia',
      '7' => '- <b>Amalo street Festival</b> - Italia',
      '8' => '- <b>Bolzano in bici</b> - Italia',
      '9' => '- <b>Brick Lane Busker Festival</b> - Italia',
   );

   $timeline20212020 = array(
      '1' => '- <b>Gallura Buskers Festival</b> - Italia',
      '2' => '- <b>Pula Buskers - Italia</b> ',
      '3' => '- <b>Rubano Street Festival</b> - Italia',
      '4' => '- <b>Abano Street Circus</b> - Italia',
      '5' => '- <b>Kiel Woche</b> - Alemania',
      '6' => '- <b>Festival internacional de clowns y payasos de Arrigorriaga</b> - Pais Vasco',
      '7' => '- <b>Figuriamoci - Trento</b> - Italia',
      '8' => '- <b>Mestre Carnival Street Show</b> - Italia',
      '9' => '- <b>International FOF - Offida</b> - Italia',
   );
   $timeline2019 = array(
      '1' => '- <b>Asfaltart</b> - Italia',
      '2' => '- <b>La Notte delle Streghe</b> - Italia ',
      '3' => '- <b>Sinjor Circo</b> - Belgica',
      '4' => '- <b>Post circus</b> - Luxembourgo',
      '5' => '- <b>U23 Gavle</b> - Suecia',
      '6' => '- <b>Linzer Pflasterspektakel</b> - Austria',
      '7' => '- <b>Heisses Pflaster Vocklamarkt</b> - Austria',
      '8' => '- <b>Villacher Straßenkunstfestival</b> - Austria',
      '9' => '- <b>La strada Ausburg</b> - Alemania',
      '10' => '- <b>Komedianti v ulicích</b> - Republica Checa',
      '11' => '- <b>Bondone in strada</b> - Italia',
      '12' => '- <b>Malices et Merveilles</b> - Francia',
      '13' => '- <b>Aout en Eclats</b> - Belgica',
      '14' => '- <b>Ibla buskers festival</b> - Italia',
   );
   $timeline2018 = array(
      '1' => '- <b>Spoleto a Colori</b> - Italia',
      '2' => '- <b>Namur en Mai</b> - Belgica',
      '3' => '- <b>Chapeu! Festival internazionale di artisti di strada</b> - Italia',
      '4' => '- <b>UFO - Uliczny Festiwal Osobliwosci</b> - Polonia',
      '5' => '- <b>FITS - Festivalul international de Teatru de la Sibiu</b> - Polonia',
      '6' => '- <b>PIT - Porsgrunn Internasjonale Teaterfestival</b> - Noruega',
      '7' => '- <b>Kiel Artist</b> - Alemania',
      '8' => '- <b>Festival Caleidoscopio</b> - Italia',
      '9' => '- <b>Linzer Pflasterspektakel</b> - Austria',
      '10' => '- <b>Bascherdeis</b> - Italia',
      '11' => '- <b>Bastidart</b> - Francia',
      '12' => '- <b>Malmöfestivalen</b> - Suecia',
      '13' => '- <b>Puppets Occupy Street Festival Craiova</b> - Rumania',
      '14' => '- <b>EKE Brouwsels Op Straat</b> - Belgica',
      '15' => '- <b>Izmir Enternasyonal Fuari</b> - Turquia',
      '16' => '- <b>Ursino Buskers Festival</b> - Italia',
      '17' => '- <b>Gütersloher Straßenfiffi</b> - Alemania',
      '18' => '- <b>Festivalul interna?ional tanar al publicului La?i</b> - Rumania',
   );
   $timeline2017 = array(
      '1' => '- <b>ARTECAI La Serena, Santiago de Chile y Montepatria</b> - Chile',
      '2' => '- <b>International Festival of Street Artists of Bahia</b> - Brasil',
      '3' => '- <b>Wortegemsen Feesten</b> - Belgica',
      '4' => '- <b>Belluno Balocchi</b> - Italia',
      '5' => '- <b>Internationella Gatuteatrefestivalen Halmstad</b>  - Suecia',
      '6' => '- <b>Giovediamoci</b> - Italia',
      '7' => '- <b>Fira de Circ al carrer</b> - España',
      '8' => '- <b>Voilá</b> - Italia',
      '9' => '- <b>Strassenkunstfestival Villach</b> - Austria',
      '10' => '- <b>SMIAF San Marino International Art Festival</b> - San Marino',
      '11' => '- <b>Gezoarsefeesten</b> - Bélgica',
      '12' => '- <b>Abracadabra</b> - Italia',
   );
   $timeline2016 = array(
      '1' => '- <b>Malo Juggling Festival</b> - Italia',
      '2' => '- <b>Straattheaterfestival De Ronde Venen</b> - Holanda',
      '3' => '- <b>Schortenser Klinkerzauber</b> - Alemania',
      '4' => '- <b>Stockholm Street Festival</b> - Suecia',
      '5' => '- <b>Stockholm Street Festival On Tour Trollhättan, Borgholm, Tingsryd, Karlshamn, Lund, Växjö, Halmstad, Helsingør</b>  - Suecia',
      '6' => '- <b>Zürcher Theater Spektakel</b> - Suiza',
      '7' => '- <b>Izmir Enternasyonal Fuari</b> - Turquia',
      '8' => '- <b>Festival Internazionale Artisti di Strada Staranzano</b> - Italia',
      '9' => '- <b>FITICH</b> - Chile',
   );
   $timeline2015 = array(
      '1' => '- <b>Usedom Kleinkunstfestival</b> - Alemania',
      '2' => '- <b>Cest is d Best </b> - Croacia',
      '3' => '- <b>Theater Aan Twater</b> - Bélgica',
      '4' => '- <b>Street Art Festival Nordhorn</b> - Alemania',
      '5' => '- <b>Mhlviertler Speckdackel</b>  - Austria',
      '6' => '- <b>Gallura Busker Festival</b> - Italia',
      '7' => '- <b>Tolfarte</b> - Italia',
      '8' => '- <b>Circus and Teatro di strada Stignano</b> - Italia',
      '9' => '- <b>SanFrancirco</b> - Argentina',
   );
   $timeline20142010 = array(
      '1' => '- <b>Tui</b> - España',
      '2' => '- <b>Festival des artistes de rue Vevey</b> - Suiza',
      '3' => '- <b>Invasion Callejera</b> - Chile',
      '4' => '- <b>Callearte</b> - Chile',
      '5' => '- <b>Entepola</b>  - Chile',
      '6' => '- <b>Umore Azooka</b> - Pais Vasco',
      '7' => '- <b>Festival of street artists Arrigorriaga</b> - País Vasco',
      '8' => '- <b>Busker festival Bydgozczc</b> - Polonia',
      '9' => '- <b>Busker Festival Belgrad</b> - Serbia',
      '10' => '- <b>Ioannina street theater festival</b> - Grecia',
      '11' => '- <b>Street Art Sogel</b> - Alemania',
      '12' => '- <b>Berlin Lacht</b> - Alemania',
      '13' => '- <b>Malmo Festival</b> - Suecia',
      '14' => '- <b>Fresh Circus Festival</b> - Suecia',
   );





  
}elseif($lang == 'en'){
    define('LANG','en');
 define('SHOW','Show');
 define('BIO','Bio');
 define('GALERY','Gallery');
 define('TOUR','Tour');
 define('IMG','./img/unitedkingdom.png');
 define('LOGO','./img/logo_naranja.png');




 $textosShow = array(
    'tituloFestival'=>'FESTIVALS',
    'TITULO' => 'Contortionism',
    'CUERPO' => 'Maromas is a one-girl street show based on circus acrobatics. From small pirouettes to great 
    stunts that will grow as the presentation goes on, mixing crazy and diverse ways of 
    communication with the audience and also involving them activelly in the performance.
    Little by little Cronopia will discover her multiple skills in such naive and troublesome ways that 
    will make our jaws drop. 
    Cronopia is guaranteed to make us laugh and to entertain the whole 
    family. Among her various abilities there are gym ball, rackets , acrobatic stunts and the 
    most peculiar body contortions, without leaving behind the main act where she combines her many talents with 
    dislocations of the arms and different joints creating a great impact to the attentive observers.',
    'FichaTecnica' => 'Technical requirements:',
    'DURACION' => 'Duration show: 35 min.',
    'MONTAJE' => 'Assembly time: 10 min.',
    'DESMONTAJE' => 'Dismantling time: 15 min.',
    'ESPACIO' => 'SPACE:',
    'ALTURA' => 'Height: 3,5 mts',
    'DIMENSION' => 'Dimension: 7x5 mts.'

 );

 $textosBio = array(
    'TITULO' => 'Contorcionist',
    'CUERPO' => "Her formation begins from the small age of 6 years, doing artistic gymnastics in the C.P.O. 
    (Centro de Promocion Olimpica) in Argentina, where she spent great time of his childhood. During 
    that period of time, she participated in the play 'Variette' directed by Mauricio Kagel in the 
    renowned theater 'Colón'.
    At the age of 11 years she changed sports and began rhythmic gymnastics in G.E.V.P. (Gimnasia y 
    Esgrima de Villa del Parque) where she has been able to focus her elongation skills. At the same 
    time, she performed Classical, Jazz and Contemporary dance training.
    At the age of 17 years, she meets the different disciplines of the circus, in the 'Circo Criollo' (one of 
    the first two circus schools in Latin America) she began her training as a circus artist, dedicated 
    specifically to contortions and the trapeze.
    At 19 he began her artistic career as a contortionist and street artist. Since then, she has 
    been touring around the world with her show 'Maromas', covering countries such as: Argentina, 
    Brazil, Chile,Puerto Rico, Italy, Spain, France, Germany, Belgium, Holland, Slovenia, Austria, Switzerland, Sweden, 
    Norway, Denmark, Luxembourg, Czech Republic, Poland, Serbia, Greece, San Marino, Croatia, 
    Turkey and Malaysia.",
 );

 $timeline2023 = array(
   '1' => '- <b>Circo Fest</b> - Puerto Rico',
   '2' => '- <b>Festivalove</b> - Italy',
   '3' => '- <b>Busker Chur</b> - Switzerland',
   '4' => '- <b>Alchemika</b> - Italy',
   '5' => '- <b>Street Theater Festival Brunico</b> - Italy',
   '6' => '- <b>Les Nuits du Cirque</b> - Belgium',
   '7' => '- <b>Girovagarte</b> - Italy',
   '8' => '- <b>Street Performers Festival Villach</b> - Austria',
   '9' => '- <b>Gauklerfestung</b> - Germany',
   '10' => '- <b>Schloss spektakel</b> - Germany',
   '11' => '- <b>Eis Zeitreise</b> - Austria',
   '12' => '- <b>Variete et cetera</b> - Germany'
);
$timeline2022 = array(
   '1' => '- <b>Festival Art de Rue Sion</b> - Switzerland',
   '2' => '- <b>Andersen Festival</b> - Denmark',
   '3' => '- <b>Buskers Braunschweig</b> - Germany',
   '4' => '- <b>Ana Desetnica</b> - Slovenia',
   '5' => '- <b>Linz Theater Spektakel</b> - Austria',
   '6' => '- <b>Scarti di strada</b> - Italy',
   '7' => '- <b>Amalo street Festival</b> - Italy',
   '8' => '- <b>Bolzano in bici</b> - Italy',
   '9' => '- <b>Brick Lane Busker Festival</b> - Italy',
);

$timeline20212020 = array(
   '1' => '- <b>Gallura Buskers Festival</b> - Italy',
   '2' => '- <b>Pula Buskers - Italy</b> ',
   '3' => '- <b>Rubano Street Festival</b> - Italy',
   '4' => '- <b>Abano Street Circus</b> - Italy',
   '5' => '- <b>Kiel Woche</b> - Germany',
   '6' => '- <b>Festival internacional de clowns y payasos de Arrigorriaga</b> - Basque Country',
   '7' => '- <b>Figuriamoci - Trento</b> - Italy',
   '8' => '- <b>Mestre Carnival Street Show</b> - Italy',
   '9' => '- <b>International FOF - Offida</b> - Italy',
);
$timeline2019 = array(
   '1' => '- <b>Asfaltart</b> - Italy',
   '2' => '- <b>La Notte delle Streghe</b> - Italy ',
   '3' => '- <b>Sinjor Circo</b> - Belgium',
   '4' => '- <b>Post circus</b> - Luxembourg',
   '5' => '- <b>U23 Gavle</b> - Sweden',
   '6' => '- <b>Linzer Pflasterspektakel</b> - Austria',
   '7' => '- <b>Heisses Pflaster Vocklamarkt</b> - Austria',
   '8' => '- <b>Villacher Straßenkunstfestival</b> - Austria',
   '9' => '- <b>La strada Ausburg</b> - Germany',
   '10' => '- <b>Komedianti v ulicích</b> - Czech Republic',
   '11' => '- <b>Bondone in strada</b> - Italy',
   '12' => '- <b>Malices et Merveilles</b> - France',
   '13' => '- <b>Aout en Eclats</b> - Belgium',
   '14' => '- <b>Ibla buskers festival</b> - Italy',
);
$timeline2018 = array(
   '1' => '- <b>Spoleto a Colori</b> - Italy',
   '2' => '- <b>Namur en Mai</b> - Belgium',
   '3' => '- <b>Chapeu! Festival internazionale di artisti di strada</b> - Italy',
   '4' => '- <b>UFO - Uliczny Festiwal Osobliwosci</b> - Poland',
   '5' => '- <b>FITS - Festivalul international de Teatru de la Sibiu</b> - Poland',
   '6' => '- <b>PIT - Porsgrunn Internasjonale Teaterfestival</b> - Norway',
   '7' => '- <b>Kiel Artist</b> - Germany',
   '8' => '- <b>Festival Caleidoscopio</b> - Italy',
   '9' => '- <b>Linzer Pflasterspektakel</b> - Austria',
   '10' => '- <b>Bascherdeis</b> - Italy',
   '11' => '- <b>Bastidart</b> - France',
   '12' => '- <b>Malmöfestivalen</b> - Sweden',
   '13' => '- <b>Puppets Occupy Street Festival Craiova</b> - Romania',
   '14' => '- <b>EKE Brouwsels Op Straat</b> - Belgium',
   '15' => '- <b>Izmir Enternasyonal Fuari</b> - Turkey',
   '16' => '- <b>Ursino Buskers Festival</b> - Italy',
   '17' => '- <b>Gütersloher Straßenfiffi</b> - Germany',
   '18' => '- <b>Festivalul interna?ional tanar al publicului La?i</b> - Romania',
);
$timeline2017 = array(
   '1' => '- <b>ARTECAI La Serena, Santiago de Chile y Montepatria</b> - Chile',
   '2' => '- <b>International Festival of Street Artists of Bahia</b> - Brazil',
   '3' => '- <b>Wortegemsen Feesten</b> - Belgium',
   '4' => '- <b>Belluno Balocchi</b> - Italy',
   '5' => '- <b>Internationella Gatuteatrefestivalen Halmstad</b>  - Sweden',
   '6' => '- <b>Giovediamoci</b> - Italy',
   '7' => '- <b>Fira de Circ al carrer</b> - Spain',
   '8' => '- <b>Voilá</b> - Italy',
   '9' => '- <b>Strassenkunstfestival Villach</b> - Austria',
   '10' => '- <b>SMIAF San Marino International Art Festival</b> - San Marino',
   '11' => '- <b>Gezoarsefeesten</b> - Belgium',
   '12' => '- <b>Abracadabra</b> - Italy',
);
$timeline2016 = array(
   '1' => '- <b>Malo Juggling Festival</b> - Italy',
   '2' => '- <b>Straattheaterfestival De Ronde Venen</b> - Netherlands',
   '3' => '- <b>Schortenser Klinkerzauber</b> - Germany',
   '4' => '- <b>Stockholm Street Festival</b> - Sweden',
   '5' => '- <b>Stockholm Street Festival On Tour Trollhättan, Borgholm, Tingsryd, Karlshamn, Lund, Växjö, Halmstad, Helsingør</b>  - Suecia',
   '6' => '- <b>Zürcher Theater Spektakel</b> - Switzerland',
   '7' => '- <b>Izmir Enternasyonal Fuari</b> - Turkey',
   '8' => '- <b>Festival Internazionale Artisti di Strada Staranzano</b> - Italy',
   '9' => '- <b>FITICH</b> - Chile',
);
$timeline2015 = array(
   '1' => '- <b>Usedom Kleinkunstfestival</b> - Germany',
   '2' => '- <b>Cest is d Best </b> - Croatia',
   '3' => '- <b>Theater Aan Twater</b> - Bélgium',
   '4' => '- <b>Street Art Festival Nordhorn</b> - Germany',
   '5' => '- <b>Mhlviertler Speckdackel</b>  - Austria',
   '6' => '- <b>Gallura Busker Festival</b> - Italy',
   '7' => '- <b>Tolfarte</b> - Italy',
   '8' => '- <b>Circus and Teatro di strada Stignano</b> - Italy',
   '9' => '- <b>SanFrancirco</b> - Argentina',
);
$timeline20142010 = array(
   '1' => '- <b>Tui</b> - Spain',
   '2' => '- <b>Festival des artistes de rue Vevey</b> - Switzerland',
   '3' => '- <b>Invasion Callejera</b> - Chile',
   '4' => '- <b>Callearte</b> - Chile',
   '5' => '- <b>Entepola</b>  - Chile',
   '6' => '- <b>Umore Azooka</b> - Basque Country',
   '7' => '- <b>Festival of street artists Arrigorriaga</b> - Basque Country',
   '8' => '- <b>Busker festival Bydgozczc</b> - Poland',
   '9' => '- <b>Busker Festival Belgrad</b> - Serbia',
   '10' => '- <b>Ioannina street theater festival</b> - Greece',
   '11' => '- <b>Street Art Sogel</b> - Germany',
   '12' => '- <b>Berlin Lacht</b> - Germany',
   '13' => '- <b>Malmo Festival</b> - Sweden',
   '14' => '- <b>Fresh Circus Festival</b> - Sweden',
);


}elseif($lang == 'it'){
      define('LANG','it');
      define('SHOW','Show');
      define('BIO','Bio');
      define('GALERY','Galleria');
      define('TOUR','Tour');
      define('IMG','./img/italy.png');
      define('LOGO','./img/logo_naranja.png');

 $textosShow = array(
   'tituloFestival'=>'FESTE',
   'TITULO' => 'Contorcionista',
   'CUERPO' => '"Maromas" è uno spettacolo di strada in base alle acrobazie del circo. 
   Da piccole a grandi abilità che svilupperà come lo spettacolo va avanti, mescolando le varie forme di partecipazione e di comunicazione con il pubblico. Cronopia scopre gradualmente le sue diverse competenze in modo ingenuo e talvolta anche problematico che ci fanno ridere e sorprendere.
   Fa delle acrobazie con una palla gigante, giocoleria con i cappelli e rachette di tennis, e le contorsioni più stravaganti.
   Senza lasciare il numero centrale che unisce le contorsioni con la dislocazione che genera un grande impatto sullo spettatore.',
   
   'FichaTecnica' => 'Requisiti tecnici:',
   'DURACION' => 'Durata dell spettacolo: 35 min.',
   'MONTAJE' => 'preparazione: 10 min.',
   'DESMONTAJE' => 'Smontaggio: 15 min.',
   'ESPACIO' => 'SPAZIO:',
   'ALTURA' => 'ALTEZZA: 3,5 mts',
   'DIMENSION' => 'Dimensione: 7x5 mts.'

);

$textosBio = array(
   'TITULO' => 'Contorcionista',
   'CUERPO' => 'La sua formazione inizia dalla piccola età di 6 anni, eseguendo ginnastica artistica nel C.P.O. ' .
   '(Centro de Promocion Olimpica) in Argentina, dove ha trascorso molto tempo nella sua infanzia. ' .
   'Durante questo periodo ho partecipato al show "Variette" diretto da Mauricio Kagel nel rinomato teatro "Colón". ' .
   'All\'età di 11 anni ha cambiato sport e ha iniziato la ginnastica ritmica in G.E.V.P. ' .
   '(Gimnasia y Esgrima de Villa del Parque) dove è stato in grado di concentrare le proprie abilità di allungamento. ' .
   'Allo stesso tempo, ha eseguito corsi di danza classica, jazz e contemporanea. ' .
   'All\'età di 17 conosce le diverse discipline del circo, nel "Circo Criollo" ' .
   '(una delle prime due scuole di circo in America Latina) ha iniziato la sua formazione come artista di circo, ' .
   'specificamente dedicato alle contorsioni e trapezio. ' .
   'A 19 anni ha iniziato la sua carriera artistica come contortista e artista di strada. ' .
   'Da quel momento si rende tour in tutto il mondo, paesi come: Argentina, Brasile, Cile, Porto Rico ' .
   'Spagna, Francia, Germania, Italia, Olanda, Belgio, Danimarca, Svezia, Austria, Svizzera, ' .
   'Croazia, Serbia, Grecia, Polonia, Repubblica Ceca, Slovenia, Norvegia, Lussemburgo, San Marino, ' .
   'Turchia e Malesia.',


);

$timeline2023 = array(
   '1' => '- <b>Circo Fest</b> - Puerto Rico',
   '2' => '- <b>Festivalove</b> - Italia',
   '3' => '- <b>Busker Chur</b> - Suiza',
   '4' => '- <b>Alchemika</b> - Italia',
   '5' => '- <b>Street Theater Festival Brunico</b> - Italia',
   '6' => '- <b>Les Nuits du Cirque</b> - Belgica',
   '7' => '- <b>Girovagarte</b> - Italia',
   '8' => '- <b>Street Performers Festival Villach</b> - Austria',
   '9' => '- <b>Gauklerfestung</b> - Alemania',
   '10' => '- <b>Schloss spektakel</b> - Alemania',
   '11' => '- <b>Eis Zeitreise</b> - Austria',
   '12' => '- <b>Variete et cetera</b> - Alemania'
);
$timeline2022 = array(
   '1' => '- <b>Festival Art de Rue Sion</b> - Suiza',
   '2' => '- <b>Andersen Festival</b> - Dinamarca',
   '3' => '- <b>Buskers Braunschweig</b> - Alemania',
   '4' => '- <b>Ana Desetnica</b> - Eslovenia',
   '5' => '- <b>Linz Theater Spektakel</b> - Austria',
   '6' => '- <b>Scarti di strada</b> - Italia',
   '7' => '- <b>Amalo street Festival</b> - Italia',
   '8' => '- <b>Bolzano in bici</b> - Italia',
   '9' => '- <b>Brick Lane Busker Festival</b> - Italia',
);

$timeline20212020 = array(
   '1' => '- <b>Gallura Buskers Festival</b> - Italia',
   '2' => '- <b>Pula Buskers - Italia</b> ',
   '3' => '- <b>Rubano Street Festival</b> - Italia',
   '4' => '- <b>Abano Street Circus</b> - Italia',
   '5' => '- <b>Kiel Woche</b> - Alemania',
   '6' => '- <b>Festival internacional de clowns y payasos de Arrigorriaga</b> - Pais Vasco',
   '7' => '- <b>Figuriamoci - Trento</b> - Italia',
   '8' => '- <b>Mestre Carnival Street Show</b> - Italia',
   '9' => '- <b>International FOF - Offida</b> - Italia',
);
$timeline2019 = array(
   '1' => '- <b>Asfaltart</b> - Italia',
   '2' => '- <b>La Notte delle Streghe</b> - Italia ',
   '3' => '- <b>Sinjor Circo</b> - Belgica',
   '4' => '- <b>Post circus</b> - Luxembourgo',
   '5' => '- <b>U23 Gavle</b> - Suecia',
   '6' => '- <b>Linzer Pflasterspektakel</b> - Austria',
   '7' => '- <b>Heisses Pflaster Vocklamarkt</b> - Austria',
   '8' => '- <b>Villacher Straßenkunstfestival</b> - Austria',
   '9' => '- <b>La strada Ausburg</b> - Alemania',
   '10' => '- <b>Komedianti v ulicích</b> - Repubblica Ceca',
   '11' => '- <b>Bondone in strada</b> - Italia',
   '12' => '- <b>Malices et Merveilles</b> - Francia',
   '13' => '- <b>Aout en Eclats</b> - Belgica',
   '14' => '- <b>Ibla buskers festival</b> - Italia',
);
$timeline2018 = array(
   '1' => '- <b>Spoleto a Colori</b> - Italia',
   '2' => '- <b>Namur en Mai</b> - Belgica',
   '3' => '- <b>Chapeu! Festival internazionale di artisti di strada</b> - Italia',
   '4' => '- <b>UFO - Uliczny Festiwal Osobliwosci</b> - Polonia',
   '5' => '- <b>FITS - Festivalul international de Teatru de la Sibiu</b> - Polonia',
   '6' => '- <b>PIT - Porsgrunn Internasjonale Teaterfestival</b> - Noruega',
   '7' => '- <b>Kiel Artist</b> - Alemania',
   '8' => '- <b>Festival Caleidoscopio</b> - Italia',
   '9' => '- <b>Linzer Pflasterspektakel</b> - Austria',
   '10' => '- <b>Bascherdeis</b> - Italia',
   '11' => '- <b>Bastidart</b> - Francia',
   '12' => '- <b>Malmöfestivalen</b> - Suecia',
   '13' => '- <b>Puppets Occupy Street Festival Craiova</b> - Rumania',
   '14' => '- <b>EKE Brouwsels Op Straat</b> - Belgica',
   '15' => '- <b>Izmir Enternasyonal Fuari</b> - Turquia',
   '16' => '- <b>Ursino Buskers Festival</b> - Italia',
   '17' => '- <b>Gütersloher Straßenfiffi</b> - Alemania',
   '18' => '- <b>Festivalul interna?ional tanar al publicului La?i</b> - Rumania',
);
$timeline2017 = array(
   '1' => '- <b>ARTECAI La Serena, Santiago de Chile y Montepatria</b> - Chile',
   '2' => '- <b>International Festival of Street Artists of Bahia</b> - Brasil',
   '3' => '- <b>Wortegemsen Feesten</b> - Belgica',
   '4' => '- <b>Belluno Balocchi</b> - Italia',
   '5' => '- <b>Internationella Gatuteatrefestivalen Halmstad</b>  - Suecia',
   '6' => '- <b>Giovediamoci</b> - Italia',
   '7' => '- <b>Fira de Circ al carrer</b> - España',
   '8' => '- <b>Voilá</b> - Italia',
   '9' => '- <b>Strassenkunstfestival Villach</b> - Austria',
   '10' => '- <b>SMIAF San Marino International Art Festival</b> - San Marino',
   '11' => '- <b>Gezoarsefeesten</b> - Bélgica',
   '12' => '- <b>Abracadabra</b> - Italia',
);
$timeline2016 = array(
   '1' => '- <b>Malo Juggling Festival</b> - Italia',
   '2' => '- <b>Straattheaterfestival De Ronde Venen</b> - Olanda',
   '3' => '- <b>Schortenser Klinkerzauber</b> - Alemania',
   '4' => '- <b>Stockholm Street Festival</b> - Suecia',
   '5' => '- <b>Stockholm Street Festival On Tour Trollhättan, Borgholm, Tingsryd, Karlshamn, Lund, Växjö, Halmstad, Helsingør</b>  - Suecia',
   '6' => '- <b>Zürcher Theater Spektakel</b> - Suiza',
   '7' => '- <b>Izmir Enternasyonal Fuari</b> - Turquia',
   '8' => '- <b>Festival Internazionale Artisti di Strada Staranzano</b> - Italia',
   '9' => '- <b>FITICH</b> - Chile',
);
$timeline2015 = array(
   '1' => '- <b>Usedom Kleinkunstfestival</b> - Alemania',
   '2' => '- <b>Cest is d Best </b> - Croacia',
   '3' => '- <b>Theater Aan Twater</b> - Bélgica',
   '4' => '- <b>Street Art Festival Nordhorn</b> - Alemania',
   '5' => '- <b>Mhlviertler Speckdackel</b>  - Austria',
   '6' => '- <b>Gallura Busker Festival</b> - Italia',
   '7' => '- <b>Tolfarte</b> - Italia',
   '8' => '- <b>Circus and Teatro di strada Stignano</b> - Italia',
   '9' => '- <b>SanFrancirco</b> - Argentina',
);
$timeline20142010 = array(
   '1' => '- <b>Tui</b> - España',
   '2' => '- <b>Festival des artistes de rue Vevey</b> - Suiza',
   '3' => '- <b>Invasion Callejera</b> - Chile',
   '4' => '- <b>Callearte</b> - Chile',
   '5' => '- <b>Entepola</b>  - Chile',
   '6' => '- <b>Umore Azooka</b> - Pais Vasco',
   '7' => '- <b>Festival of street artists Arrigorriaga</b> - País Vasco',
   '8' => '- <b>Busker festival Bydgozczc</b> - Polonia',
   '9' => '- <b>Busker Festival Belgrad</b> - Serbia',
   '10' => '- <b>Ioannina street theater festival</b> - Grecia',
   '11' => '- <b>Street Art Sogel</b> - Alemania',
   '12' => '- <b>Berlin Lacht</b> - Alemania',
   '13' => '- <b>Malmo Festival</b> - Suecia',
   '14' => '- <b>Fresh Circus Festival</b> - Suecia',
);
}

