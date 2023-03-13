<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Seeder;

class CoinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Coin::create([
            'name' => 'Coat of Arms of Andorra',
            'year' => array(2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The coat of arms of Andorra has existed for centuries. This coat of arms has been the national coat of arms of Andorra since 1969. Below the shield arms stands Andorra\'s national motto Virtus Unita Fortior (Latin for United virtue is stronger). The coat of arms also appears on the flag of Andorra.',
            'image' => 'andorra.png',
            'country_id' => 6,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Bertha von Suttner',
            'year' => array(2002, 2003, 2004, 2006, 2008, 2010, 2012, 2013, 2014, 2015, 2017, 2019, 2020, 2021, 2022),
            'description' => 'Austrian writer and peace activist who in 1905 became the first woman to win the Nobel Peace Prize; her novel Die Waffen nieder depicted the horrors of war and became an influential work for the cause of peace.',
            'image' => 'austria.jpg',
            'country_id' => 15,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'King Albert II - 1st series',
            'year' => array(1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006),
            'description' => 'Albert II (Albert Felix Humbert Theodore Chretien Eugene Marie) was born on June 6, 1934. He is the current King of the Belgians and a constitutional monarch, member of the former ducal house of Saxe-Coburg-Gotha.',
            'image' => 'belgium1.jpg',
            'country_id' => 22,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'King Albert II - 2nd series',
            'year' => array(2007, 2008, 2009, 2010, 2011, 2012, 2013),
            'description' => 'Albert II (Albert Felix Humbert Theodore Chretien Eugene Marie) was born on June 6, 1934. He is the current King of the Belgians and a constitutional monarch, member of the former ducal house of Saxe-Coburg-Gotha',
            'image' => 'belgium2.jpg',
            'country_id' => 22,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'King Philippe - 3rd series',
            'year' => array(2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'As of 2014, the second series of the Belgian coins show, on every denomination, the effigy of the new Head of State His Majesty Philippe, King of the Belgians, in profile to the right. To the left of the effigy, the indication of the issuing country "BE" and on top of it the royal monogram. Under the effigy, the mint master mark at the left and the mint mark at the right flank the year of issuance.',
            'image' => 'belgium3.jpg',
            'country_id' => 22,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Croatia Map',
            'year' => array(2023),
            'description' => '',
            'image' => 'croatia1.png',
            'country_id' => 55,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Idol of Pomos',
            'year' => array(2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The coin depicst a cruciform idol from the Chalcolithic period (3000 BC). This characteristic example of the island\'s prehistoric art reflects Cyprus\'s place at the heart of civilisation and antiquity. The sculpture represents a woman with her arms spread. It was probably used as a fertility symbol. Many similar sculptures have been found on Cyprus. Smaller versions were worn as amulets around the neck, just as this idol wears (a small copy of) itself.',
            'image' => 'cyprus.jpg',
            'country_id' => 58,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Map Of Estonia',
            'year' => array(2011, 2016, 2018),
            'description' => 'Estonian euro coins feature a single design for all eight coins. This is a design by Lembit Lohmus and features a contour of Estonia together with the word Eesti (Estonia) and twelve stars, symbolic of the EU, surrounding the map. The design raised a great criticism during 2010 as many people started to protest against the design of Estonian euro coins asking to change the initial idea and follow EU Member States on assigning different symbols to different coins.',
            'image' => 'estonia.jpg',
            'country_id' => 69,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Cloudberry',
            'year' => array(1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'Virtually unknown outside northern Europe, the cloudberry is Finland’s favourite fruit. The tiny, orange-gold bubbles, growing one fruit to a plant, emerge in July and remain ripe for only three weeks of the year.Cloudberries grow well off the beaten path in marshes and wet meadows, and are especially abundant in the wetlands of Lapland in Finland\'s far north. The start of cloudberry season is a cue for Finns to put everyday chores on hold and get picking. Every year, the small town of Ranua on the southern border of Lapland becomes the capital of the cloudberry, hosting Lapland’s annual Cloudberry Market where more than 300 cloudberry vendors bring their freshly picked wares to sell. The price per kilo is chalked up on a board in the central tent and, like a stockmarket, fluctuates according to supply and demand.',
            'image' => 'finland.jpg',
            'country_id' => 74,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Stylised tree - 1st series',
            'year' => array(1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021),
            'description' => 'Depicts a tree, symbolising life, continuity and growth, contained in a hexagon and encircled by the motto of the French Revolution, Liberty, Equality, Fraternity. The slogan outlived the revolution, and later became the rallying cry of activists, who promote democracy or the overthrow of oppressive governments.',
            'image' => 'france1.jpg',
            'country_id' => 75,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Stylised tree - 2nd series',
            'year' => array(2022),
            'description' => 'In 2022, France introduced the second series of €1 and €2 coins. The new design reproduces oak and olive branches forming the tree of life, a symbol of strength, solidity and peace. The tree and the motto are contained in a hexagon.',
            'image' => 'france2.png',
            'country_id' => 75,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'German eagle',
            'year' => array(1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The traditional symbol of German sovereignty, the eagle, surrounded by the stars of Europe, appears on these coins. This motif was designed by Heinz and Sneschana Russewa-Hoyer.',
            'image' => 'germany.jpg',
            'country_id' => 82,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Europa being abducted by Zeus',
            'year' => array(2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'Portrays a scene from a mosaic in Sparta (third century AD), showing Europa being abducted by Zeus, who has taken the form of a bull. In Greek mythology Europa was a beautiful Phoenician princess, daughter of Agenor and Telephassa. Zeus saw her gathering flowers and immediately fell in love with her. Zeus transformed himself into a white bull and carried Europa away to the island of Crete. He then revealed his true identity and Europa became the first queen of Crete. Europa has lent her name to the continent of Europe, which is called Europa in all Germanic languages (except English), and in all Slavic languages which use the Latin alphabet, as well as in Greek and Latin.',
            'image' => 'greece.jpg',
            'country_id' => 85,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Celtic Harp',
            'year' => array(2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'This harp is the national symbol of Ireland, being depicted on national heraldry euro coins and also on the Guinness beer logo. All these show it in its pre-1961 state, when it had a curious "reconstructed" scroll at the base of the pillar. In 1961 the harp was in an exhibition in London, and while it was there it was dismantled and reconstructed by the British Museum, into the shape it has nowadays, closer to an original medieval form.',
            'image' => 'ireland.jpg',
            'country_id' => 106,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Dante Alighieri',
            'year' => array(2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The portrait is housed in the Pope Julius II Wing of the Vatican Palace.',
            'image' => 'italy.jpg',
            'country_id' => 109,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Latvian folk Maiden',
            'year' => array(2014, 2015, 2016, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The folk maiden depicted on the one-euro coin is a symbol of both traditional virtue and Latvian national currency, for it was this same portrait that adorned the reverse of the silver five-lats coin designed for the newly independent Latvian state by Rihards Zarins in the 1920s. The young Latvian woman is portrayed with braided hair, a crown and ears of corn thrown over her shoulder. The latter was meant to be symbolic of Latvian culture which was strongly influenced by agriculture.',
            'image' => 'latvia.jpg',
            'country_id' => 122,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Vytis',
            'year' => array(2015, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The Order of the Cross of Vytis was the first state decoration of the pre-war Lithuania reinstated on 15 January 1991. The first to receive the First Class Order of the Cross of Vytis in the re-established Independent State of Lithuania were the victims of the 1991 January Events in Vilnius and Medininkai.',
            'image' => 'lithuania.jpg',
            'country_id' => 128,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Grand Duke Henri',
            'year' => array(2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'Prince Henri became heir apparent to the Luxembourg throne on the abdication of his paternal grandmother, Grand Duchess Charlotte of Luxembourg, on 12 November 1964. On 4 March 1998, Prince Henri was appointed as Lieutenant Representative by his father, Grand Duke Jean, meaning that he assumed most of his father\'s constitutional powers. On 7 October 2000, immediately following the abdication of his father, Henri acceded as Grand Duke of Luxembourg and took the constitutional oath before the Chamber of Deputies later that day.',
            'image' => 'luxembourg.jpg',
            'country_id' => 129,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Malta',
            'year' => array(2008, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The Maltese cross is identified as the symbol of an order of Christian warriors known as the Knights Hospitaller or Knights of Malta. It was originally the symbol of Amalfi, a small Italian republic of the 11th century. The cross is eight-pointed and has the form of four "V"-shaped arms joined together at their bases, so that each arm has two points. Its design is based on crosses used since the First Crusade.',
            'image' => 'malta.jpg',
            'country_id' => 137,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Prince Rainier III',
            'year' => array(2001, 2002, 2003, 2004),
            'description' => 'Rainier III, Prince of Monaco (Rainier Louis Henri Maxence Bertrand), styled His Serene Highness The Sovereign Prince of Monaco, ruled the Principality of Monaco for more than 50 years, making him one of the longest ruling monarchs of the 20th century.',
            'image' => 'monaco1.jpg',
            'country_id' => 146,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Prince Albert II',
            'year' => array(2006, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'Albert II, Prince of Monaco (Albert Alexandre Louis Pierre Grimaldi), styled His Serene Highness The Sovereign Prince of Monaco, was the head of the House of Grimaldi and the ruler of the Principality of Monaco. He is the son of Rainier III of Monaco and Grace, Princess of Monaco, and the brother of Caroline, Princess of Hanover and Princess Stephanie of Monaco.',
            'image' => 'monaco2.jpg',
            'country_id' => 146,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Queen Beatrix',
            'year' => array(1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013),
            'description' => 'Princess Beatrix is the eldest daughter of Queen Juliana and her husband, Prince Bernhard of Lippe-Biesterfeld. Upon her mother\'s accession in 1948, she became heir presumptive. When her mother abdicated on 30 April 1980, Beatrix succeeded her as queen. ',
            'image' => 'netherlands1.jpg',
            'country_id' => 156,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'King Willem-Alexander',
            'year' => array(2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'Willem-Alexander is the King of the Kingdom of the Netherlands, consisting of the countries of the Netherlands (including the Caribbean Netherlands), Curaçao, Aruba, and Sint Maarten. He is head of the Dutch royal house and the House of Amsberg. The design shows at the right side of the effigy three vertical lines. Between the first and the second line from the right, the Dutch mint master mark, the year of issuance and the mint mark. Between the second and the third line from the right the text "Willem-Alexander" and after the third line from the right the text "Koning der Nederlanden".',
            'image' => 'netherlands2.jpg',
            'country_id' => 156,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Royal Seal of 1144',
            'year' => array(2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The Royal Seal from 1144 surrounded by seven castles and five shields with a ring of stars representing the dialog between the different European Countries.',
            'image' => 'portugal.jpg',
            'country_id' => 178,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Palazzo Pubblico',
            'year' => array(2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016),
            'description' => 'Saint Marinus was the founder of a chapel and monastery, in 301, from where the world\'s oldest surviving republic, San Marino, grew. He is venerated solely in the Roman Catholic Church and the coin depicts his portrait based on a painting by G.B. Urbinelli.',
            'image' => 'sanmarino1.jpg',
            'country_id' => 191,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Portrait of Saint Marino',
            'year' => array(2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'Saint Marinus was the founder of a chapel and monastery, in 301, from where the world\'s oldest surviving republic, San Marino, grew. He is venerated solely in the Roman Catholic Church and the coin depicts his portrait based on a painting by G.B. Urbinelli.',
            'image' => 'sanmarino2.jpg',
            'country_id' => 191,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Coat of arms of Slovakia',
            'year' => array(2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The coat of arms of Slovakia is composed of a silver (argent) double cross, elevated on the middle peak of a dark blue mountain consisting of three peaks. It is situated on a red (gules) early gothic shield. Extremities of the cross are amplificated, and its ends are concaved. The double cross is a symbol of christian religion and hills represent the three symbolic Slovak mountains Tatra, Fatra and Matra (the last one is in present-day in north Hungary and creates south border of Slovakia).',
            'image' => 'slovakia.jpg',
            'country_id' => 199,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'France Prešeren',
            'year' => array(2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The poet France Preseren and the inscription \'Shivé naj vsi naródi\' (God\'s blessing on all nations), a line taken from his poem Zdravljica, which is also used in the country\'s national anthem',
            'image' => 'slovenia.jpg',
            'country_id' => 200,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'King Juan Carlos I - 1st series',
            'year' => array(1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009),
            'description' => 'Juan Carlos I was born on January 5, 1938 and is the reigning King of Spain. His name, when rarely anglicised, is rendered as John Charles Alphonse Victor Maria of Bourbon (and Bourbon-Two Sicilies).',
            'image' => 'spain1.jpg',
            'country_id' => 205,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'King Juan Carlos I - 2nd series',
            'year' => array(2010, 2011, 2012, 2013, 2014),
            'description' => 'Juan Carlos I was born on January 5, 1938 and is the reigning King of Spain. His name, when rarely anglicised, is rendered as John Charles Alphonse Victor Maria of Bourbon (and Bourbon-Two Sicilies).',
            'image' => 'spain2.jpg',
            'country_id' => 205,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'King Felipe VI',
            'year' => array(2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'Felipe VI succeeded to the throne on 19 June 2014 following the abdication of his father, King Juan Carlos I. As heir apparent to the throne, he previously bore the title of Prince of Asturias, and worked to support philanthropic causes and to promote international fellowship among Spanish-speaking countries.',
            'image' => 'spain3.jpg',
            'country_id' => 205,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Pope John Paul II',
            'year' => array(2002, 2003, 2004, 2005),
            'description' => 'Pope John Paul II, 18 May 1920 – 2 April 2005) served as Supreme Pontiff of the Catholic Church and Sovereign of Vatican City from 16 October 1978 until his death almost 27 years later. His was the second-longest pontificate; only Pope Pius IX served longer. He was the only Polish Pope, and was the first non-Italian Pope since Dutch Pope Adrian VI in the 1520s.',
            'image' => 'vatican1.jpg',
            'country_id' => 97,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Coat of arms of the Cardinal Chamberlain',
            'year' => array(2005),
            'description' => 'Insignia of the Apostolic Chamber and the coat of arms of the Camerlengo (Chamberlain) of the Holy Roman Church. Sede vacante is an expression, used in the Canon Law of the Roman Catholic Church, that refers to the vacancy of the episcopal see of a particular church. It is Latin for "the seat being vacant" (the ablative absolute to sedes vacans "vacant seat"), that is, the cathedra of the particular church.',
            'image' => 'vatican2.jpg',
            'country_id' => 97,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Pope Benedict XVI',
            'year' => array(2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013),
            'description' => 'Pope Benedict XVI is the 265th and reigning Pope, by virtue of his office of Bishop of Rome, the head of the Catholic Church and, as such, Sovereign of the Vatican City State. He was elected on 19 April 2005 in a papal conclave, celebrated his Papal Inauguration Mass on 24 April 2005, and took possession of his cathedral, the Basilica of St. John Lateran, on 7 May 2005.',
            'image' => 'vatican3.jpg',
            'country_id' => 97,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Pope Francis',
            'year' => array(2014, 2015, 2016),
            'description' => 'The fourth series, first issued in January 2014, shows Pope Francis.',
            'image' => 'vatican4.jpg',
            'country_id' => 97,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Coat of arms of Pope Francis',
            'year' => array(2017, 2018, 2019, 2020, 2021, 2022),
            'description' => 'The fifth series, first issued in March 2017, shows the coat of arms of the Sovereign of the Vatican City State, Pope Francis.',
            'image' => 'vatican5.jpg',
            'country_id' => 97,
            'type' => 'circulation',
        ]);
        Coin::create([
            'name' => 'Schleswig-Holstein',
            'year' => array(2006),
            'description' => 'The Holstentor, the gate symbolising of the town of Lübeck, is shown in the centre of the coin and below it the word ‘Schleswig-Holstein’.',
            'image' => 'germany2006.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Treaty of Rome',
            'year' => array(2007),
            'description' => 'The Treaty of Rome established the European Economic Community and ultimately led to the introduction of the euro in 1999 and the euro banknotes and coins in 2002. The anniversary was celebrated on 25 March 2007 and the euro area countries have marked the occasion by jointly issuing this commemorative coin. The coin shows the Treaty document signed by the six founding countries on a background evocating the paving (designed by Michelangelo) of the Piazza del Campidoglio in Rome, where the signing took place on 25 March 1957. Its design was selected following a competition organized by the European mints.',
            'image' => 'germany2007.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Mecklenburg-Vorpommern',
            'year' => array(2007),
            'description' => 'The coin shows Schwerin Castle and bears the inscription ‘Mecklenburg-Vorpommern’ - the federal state of Mecklenburg-West Pomerania where the castle is located.',
            'image' => 'germany2007_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Hamburg',
            'year' => array(2008),
            'description' => 'St Michael\'s church is one of Hamburg\'s five main Protestant churches (Hauptkirchen) and the most famous church in the city. It is dedicated to the archangel Michael and a large bronze statue, standing above the portal of the church shows the archangel conquering the devil. The name of the federal State \'HAMBURG\' is inscribed beneath the church. To the right of the church are the engraver\'s stylised initials \'OE\' and above it towards the top centre the mintmark (\'A\', \'D\', \'F\', \'G\' or \'J\'). The outer ring has the year of issue inscribed at the top, six stars on each side and below them the words \'BUNDESREPUBLIK DEUTSCHLAND\'.',
            'image' => 'germany2008.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Sarre',
            'year' => array(2009),
            'description' => 'Ludwigskirche in Old Saarbrucken is a Protestant baroque style church. It is the symbol of the city and is considered to be one of the most important Protestant churches in Germany, along with the Dresden Frauenkirche and the St. Michaelis Church, Hamburg (Michel). The coin depicts the Saint Louis church (Ludwigskirche) in Saarbrucken. The name of the state SAARLAND and the mint mark appear under the monument; the engraver\'s initials FB (Friedrich Brenner) are displayed on the left of the monument.',
            'image' => 'germany2009.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => '10 Years of EMU',
            'year' => array(2009),
            'description' => 'The coin shows a stick figure which merges into the € symbol. It seeks to convey the idea of the single currency and, by extension, Economic and Monetary Union (EMU) being the latest step in Europe’s long history of trade and economic integration. The design was chosen out of a shortlist of five by members of the public across the European Union voting online. It was created by George Stamatopoulos, a sculptor from the Minting department at the Bank of Greece.',
            'image' => 'germany2009_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Bremen',
            'year' => array(2010),
            'description' => 'The Town Hall of Bremen is the seat of the President of the Senate and of the Mayor of the Free Hanseatic City of Bremen. It is one of the most important examples of Brick Gothic architecture in Europe. In July 2004, along with the Bremen Roland, the building was added to the list of UNESCO World Heritage Sites. The Bremen Roland is a statue (Rathausplatz) of the city\'s protector, Roland, erected in 1404, which stands in the market square of Bremen, facing the cathedral.',
            'image' => 'germany2010.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'North-Rhine Westphalia',
            'year' => array(2011),
            'description' => 'Cologne Cathedral is a Roman Catholic church in Cologne, Germany. It is renowned as a monument of Christianity, of German Catholicism in particular, of Gothic architecture and of the continuing faith and perseverance of the people of the city in which it stands. The cathedral is a World Heritage Site, one of the best-known architectural monuments in Germany, and Cologne\'s most famous landmark, described by UNESCO as an "exceptional work of human creative genius". The design shows the Cologne cathedral in its entirety, as a masterpiece of the Gothic architecture, emphasizing the beauty of the south portal. The name NORDRHEIN-WESTFALEN, just below the building, links the pictured building with the state.',
            'image' => 'germany2011.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Bavaria',
            'year' => array(2012),
            'description' => 'Neuschwanstein Castle is a 19th-century Romanesque Revival palace on a rugged hill above the village of Hohenschwangau near Fussen in southwest Bavaria, Germany. The palace was commissioned by Ludwig II of Bavaria as a retreat and as a homage to Richard Wagner. The palace was intended as a personal refuge for the reclusive king, but it was opened to the paying public immediately after his death in 1886. Since then over 60 million people have visited Neuschwanstein Castle.More than 1.3 million people visit annually, with up to 6,000 per day in the summer. The palace has appeared prominently in several movies and was the inspiration for Disneyland\'s Sleeping Beauty Castle and later, similar structures.',
            'image' => 'germany2012.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => '10 Years of Euro Cash',
            'year' => array(2012),
            'description' => 'On 1 January 2002, euro banknotes and coins were introduced in 12 Member States of the European Union. The introduction of the euro cash was an unprecedented challenge, but it went smoothly, and billions of banknotes and coins started to circulate in a matter of days. Five more Member States adopted the euro in later years, so a total of 17 Member States – and 332 million people – use the currency as of 2011. It has become a symbol of Europe, and the banknotes and coins have become a part of european citizens daily lives. Citizens and residents of the euro area selected the winning design for this euro coin, issued by all euro area countries to commemorate ten years of euro banknotes and coins. Using web-voting, they had five designs to choose from which had been pre-selected by a professional jury. The winning design symbolises the way in which the euro has become a true global player over the past ten years, as well as its importance in day-to-day life, with various aspects being depicted: ordinary people (the family of four), trade (the ship), industry (the factory) and energy (the wind power stations).',
            'image' => 'germany2012_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Baden-Württemberg',
            'year' => array(2013),
            'description' => 'The eighth coin of the Bundeslander series is dedicated to Maulbronn Monastery, the best-preserved medieval Cistercian monastery complex in Europe. It is situated on the outskirts of Maulbronn, Baden-Wurttemberg, Germany and is separated from the town by fortifications. Since 1993 the monastery is part of the Unesco World Heritage. Baden-Wurttemberg is the third largest of Germany\'s sixteen states in terms of both area and population, with an area of 35,742 square kilometres (13,800 sq mi) and 10.7 million inhabitants. The state capital is Stuttgart.',
            'image' => 'germany2013.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Elysée Treaty',
            'year' => array(2013),
            'description' => 'Elysee Treaty also known as the Treaty of Friendship, was estabilished by Charles de Gaulle of France and Konrad Adenauer of Germany on January 22, 1963 for reconciliation between the two countries. With it, Germany and France established a new foundation for relations that ended centuries of rivalry between them. The treaty called for consultations between France and West Germany on all important questions and an effort to come to a common stance. Regular summits between high level officials were also established. Among the direct consequences of the Treaty are the creation of the Franco-German Office for Youth (l\'Office franco-allemand pour la jeunesse/Deutsch-Franzosisches Jugendwerk), the creation of Franco-German high schools and the twinning between numerous French and German towns, schools and regions.',
            'image' => 'germany2013_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Lower Saxony',
            'year' => array(2014),
            'description' => 'The Church of St. Michael (German: Michaeliskirche) is an early-Romanesque Lutheran church in Hildesheim, Germany. It has been on the UNESCO World Cultural Heritage list since 1985. As the first building to be constructed in Hamburg after the Reformation, St Michael’s has been the newest and largest mother church since 1685. Hamburg’s iconic landmark is one of the most important baroque churches in northern Germany and a key church in tourism.',
            'image' => 'germany2014.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Hesse',
            'year' => array(2015),
            'description' => 'St Paul\'s Church (Paulskirche) is a church with important political symbolism in central Frankfurt am Main in Hesse, Germany. It was started as a Lutheran church in 1789 and by 1849, it had become the seat of the Frankfurt Parliament. The inner part of the coin features the St. Paul\'s Church in Frankfurt.',
            'image' => 'germany2015.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'European Union flag',
            'year' => array(2015),
            'description' => 'In July 2015, the 19 euro-area countries jointly issued a commemorative euro coin celebrating 30 years of the EU flag. Regardless of the country, it bears the same design on the national side, normally reserved for a motif specific to that country. This is the fourth time the euro-area members have decided to collectively issue a commemorative coin: The first was in 2007 to celebrate the 50th anniversary of the Treaty of Rome, the second time was in 2009 when sixteen countries commemorated 10 years of the EMU and the third time in 2012 to mark 10 years of euro cash. A professional jury selected five coin designs among the 62 designs submitted by Euro area mints. Euro-area citizens and residents were invited to select the winning design by public web-voting until 27 May 2015. The winning design of the online vote was by the hand of Georgios Stamatopoulos from the Bank Of Greece. His proposal had been preselected by the jury alongside designs from Spain, Slovenia, Italy and Cyprus. Marking the 30th anniversary of the EU flag, Stamatopoulos\' entry depicts 12 people forming a human chain around that flag with the 12 gold stars on a blue background. The design was chosen by 30 percent of 100,000 voters in the online competition by the European Commission. Its Vice President Valdis Dombrovskis said the coin celebrated a key moment of the adoption of the flag as the EU \'s official emblem.',
            'image' => 'germany2015_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'German Unification',
            'year' => array(2015),
            'description' => 'The Federal Government decided on 4 June 2014 to issue a 2- euro commemorative coin "25 years of German unity" in January 2015. The coin commemorates the reunification of Germany, marking the 25th anniversary. The formal unification of Germany into a politically and administratively integrated nation state officially occurred on 18 January 1871 at the Versailles Palace\'s Hall of Mirrors in France. Princes of the German states gathered there to proclaim Wilhelm of Prussia as Emperor Wilhelm of the German Empire after the French capitulation in the Franco-Prussian War. The center of the coin depicts a group of people standing in the foreground, the embodiment of a new beginning and the progress towards a better future, and in the background the Brandenburg Gate, symbol of German unity.',
            'image' => 'germany2015_3.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Saxony',
            'year' => array(2016),
            'description' => 'The Zwinger is a palace in the eastern German city of Dresden, built in Rococo style and designed by court architect Matthäus Daniel Pöppelmann. It served as the orangery, exhibition gallery and festival arena of the Dresden Court. The name derives from the German word Zwinger (an enclosed killing ground in front of a castle or city gate). Today, the Zwinger is a museum complex that contains the Gemäldegalerie Alte Meister (Old Masters Picture Gallery), the Dresden Porcelain Collection (Porzellansammlung) and the Mathematisch-Physikalischer Salon (Royal Cabinet of Mathematical and Physical Instruments).The coin shows a view from the inner courtyard of the Zwinger to the Crown Gate.',
            'image' => 'germany2016.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Rhineland-Palatinate',
            'year' => array(2017),
            'description' => 'The twelfth coin of the Bundesländer series is dedicated to Rheinland-Pfalz: Porta Nigra The Porta Nigra (Latin for black gate) is a large Roman city gate in Trier, Germany. It is today the largest Roman city gate north of the Alps. It is designated as part of the Roman Monuments, Cathedral of St. Peter and Church of Our Lady in Trier UNESCO World Heritage Site. The name Porta Nigra originated in the Middle Ages due to the darkened colour of its stone; the original Roman name has not been preserved. Locals commonly refer to the Porta Nigra simply as Porta.',
            'image' => 'germany2017.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Helmut Schmidt',
            'year' => array(2018),
            'description' => 'The coin marks the 100 years since the birth of Helmut Schmidt. Helmut Heinrich Waldemar Schmidt was a German politician and member of the Social Democratic Party of Germany (SPD), who served as Chancellor of the Federal Republic of Germany (West Germany) from 1974 to 1982. Before becoming Chancellor, he had served as Minister of Defence (1969–1972) and as Minister of Finance (1972–1974). In the latter role he gained credit for his financial policies. He had also served briefly as Minister of Economics and as acting Foreign Minister. As Chancellor, he focused on international affairs, seeking "political unification of Europe in partnership with the United States". In 1986 he was a leading proponent of European monetary union and a European Central Bank. The coin depicts Helmut Schmidt in a characteristic pose.',
            'image' => 'germany2018.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Berlin',
            'year' => array(2018),
            'description' => 'This is the 13th coin of the Bundesländer series, commemorating the Charlottenburg Palace. Schloss Charlottenburg is the largest palace in Berlin, in the Charlottenburg district of the Charlottenburg-Wilmersdorf borough. The palace was built at the end of the 17th century and was greatly expanded during the 18th century. It includes much lavish internal decoration in baroque and rococo styles. A large formal garden surrounded by woodland was added behind the palace, including a belvedere, a mausoleum, a theatre and a pavilion. During the Second World War, the palace was badly damaged but has since been reconstructed. The palace with its gardens are a major tourist attraction. The coin shows the main building of the Charlottenburg Palace in the background, with the two statues located at the entrance door to the enclosure in the foreground.',
            'image' => 'germany2018_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Bundesrat',
            'year' => array(2019),
            'description' => 'The 70th anniversary of the Bundesrat’s founding. The design shows a highly detailed and finely sculpted rendering of the Bundesrat building.',
            'image' => 'germany2019.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Fall of Berlin Wall',
            'year' => array(2019),
            'description' => 'The 30th anniversary of the fall of Berlin Wall. The coin commemorates the opening of the Berlin Wall, which marks its 30th anniversary on 9 November 2019. The fall of the wall opened the way for the reunification of Germany.',
            'image' => 'germany2019_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Brandenburg',
            'year' => array(2020),
            'description' => 'Brandenburg 2020. As part of the “Federal States” series, the German government has decided to mint a 2 euro commemorative coin “Brandenburg” (featuring Sanssouci Palace). It is the 15th coin in the series, which was launched in 2006 and numbers 17 coins (one for each of the 16 federal states and one coin featuring the Bundesrat as a constitutional body). The national side of the coin was designed by Neuenhagen-based artist Jordi Truxa and depicts Sanssouci Palace.',
            'image' => 'germany2020.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Kniefall von Warschau',
            'year' => array(2020),
            'description' => 'The national side (picture side) was designed by the artist Bodo Broschat from Berlin. The motif shows the moment of the kneeling of the then German Chancellor as a gesture of humility in front of the memorial to the heroes of the ghetto in Warsaw. The composition represents the reference to the ghetto uprising in 1943 in an impressive way. The design is worked in extremely fine relief technology and takes up strong symbols: the seven-armed candlestick, the ghetto victims and the knee, about which Brandt himself later wrote in his memories : "On the abyss of German history and under the burden of the millions murdered, I did what people do when language fails".',
            'image' => 'germany2020_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Saxony-Anhalt',
            'year' => array(2021),
            'description' => 'Magdeburg Cathedral, officially called the Cathedral of Saints Catherine and Maurice, is a Protestant cathedral in Germany and the oldest Gothic cathedral in the country. It is the proto-cathedral of the former Prince-Archbishopric of Magdeburg. Today it is the principal church of the Evangelical Church in Central Germany. One of its steeples is 99.25 m (325 ft 7 in) tall, and the other is 100.98 m (331 ft 4 in), making it one of the tallest cathedrals in eastern Germany. The cathedral is likewise the landmark of Magdeburg, the capital city of the Bundesland of Saxony-Anhalt, and is also home to the grave of Emperor Otto I the Great. The first church built in 937 at the location of the current cathedral was an abbey called St. Maurice, dedicated to Saint Maurice. The current cathedral was constructed over the period of 300 years starting from 1209, and the completion of the steeples took place only in 1520. Despite being repeatedly looted, Magdeburg Cathedral is rich in art, ranging from antiques to modern art.',
            'image' => 'germany2021.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Thüringen',
            'year' => array(2022),
            'description' => 'The Wartburg is a castle originally built in the Middle Ages. It is situated on a precipice of 410 meters (1,350 ft) to the southwest of and overlooking the town of Eisenach, in the state of Thuringia, Germany. In 1999, UNESCO added Wartburg Castle to the World Heritage List. It was the home of St. Elisabeth of Hungary, the place where Martin Luther translated the New Testament of the Bible into German, the site of the Wartburg festival of 1817 and the supposed setting for the possibly legendary Sängerkrieg. It was an important inspiration for Ludwig II when he decided to build Neuschwanstein Castle. Wartburg is the most-visited tourist attraction in Thuringia after Weimar. Although the castle today still contains substantial original structures from the 12th through 15th centuries, much of the interior dates back only to the 19th century.',
            'image' => 'germany2022.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Erasmus Programme',
            'year' => array(2022),
            'description' => 'The coin designed by Mr Joaquin Jimenez has been selected, having received over 22,000 votes. Euro area Member States are now invited to finalise the next steps in order to proceed to the minting and issuance scheduled for 1 July 2022. After more than 70 coin designs were submitted for this competition, a jury selected six coins to go forward for consideration in public vote which the Commission launched last month. Over 72,000 voted to select the design they believed best represented and celebrated the success of the Erasmus project. Erasmus+ is one of the EU\'s most emblematic initiatives and a European success story. Since its inception in 1987, 10 million people have benefitted from it.',
            'image' => 'germany2022_2.jpg',
            'country_id' => 82,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Entry the Council of Europe',
            'year' => array(2014),
            'description' => 'The design shows at the centre left the coat of arms of Andorra followed by the inscription "20" where the zero is stylised to represent the Council of Europe\'s flag. At the top are the inscriptions "ANDORRA" and underneath "AL CONSELL D\'EUROPA".',
            'image' => 'andorra2014.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Agreement with EU',
            'year' => array(2015),
            'description' => 'The design shows at the top the map of Andorra with the coat of arms of the Principality highlighted inside it. At the bottom of the design, two opposing arrows interlaced, symbolising the Customs Agreement between Andorra and the EU, show the years that are being commemorated ‘1990’ and ‘2015’ (the latter is also the year of issue of the coin) and the name of the issuing country ‘ANDORRA’. Surrounding the map of Andorra appears the inscription ‘25è aniversari de la Signatura de l’Acord Duaner amb la Unió Europea’ (25th anniversary of the Signature of the Customs Agreement with the European Union).',
            'image' => 'andorra2015.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Reform of Electoral Law',
            'year' => array(2015),
            'description' => 'The design shows a partial reproduction of a young person casting a vote. The ballot that the figure is holding reproduces the inscription ‘ANDORRA’. To the left of the figure there are the years that are being commemorated ‘1985’ and ‘2015’ (the latter is the year of issue of the coin as well). A shorter inscription of the commemoration surrounds the whole design ‘30è ANIVERSARI MAJORIA D’EDAT ALS 18 ANYS’ (30th anniversary Coming of Age at 18 years old).',
            'image' => 'andorra2015_2.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'New Reform 1866',
            'year' => array(2016),
            'description' => 'The design shows the main room of ‘Casa de la Vall’ (premises of the Andorran Parliament) with the inscription ‘150 ANYS DE LA NOVA REFORMA DE 1866’, the year of issuance ‘2016’ and the name of the State of issuance ‘ANDORRA’. This commemorative coin celebrates the 150 years of the New Reform Decree, one of the biggest steps on the Andorran and on the Consell General (Andorran Parliament) history, which represented a social and political transformation in the Principality of Andorra.',
            'image' => 'andorra2016.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Radio and Television',
            'year' => array(2016),
            'description' => 'The design shows a microphone and an antenna circled by several circular lines with the inscription ‘25è ANIVERSARI DE RÀDIO I TELEVISIÓ D’ANDORRA’, the year of issuance ‘2016’ and the name of the State of issuance ‘ANDORRA’. This commemorative coin celebrates the 25th anniversary of the establishment of the Andorran public media with the beginning of the broadcast of the Andorran public radio and public television.',
            'image' => 'andorra2016_2.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Anthem of Andorra',
            'year' => array(2017),
            'description' => 'The design depicts a partial reproduction of the anthem of Andorra published in 1914. The central part of the design reproduces the first notes of the anthem flanked by an ornamentation of floral style and the inscription ‘Himne Andorrà’ (Andorran anthem). The upper part of the design shows the year of issuance ‘2017’ and the inscription ‘100 anys de l’himne d’Andorra’ (100 years of the anthem of Andorra). This coin commemorates the 100th anniversary of its admission as the national anthem of Andorra by agreement of the Consell General (Andorran Parliament) of 2 April 1917.',
            'image' => 'andorra2017.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Andorra',
            'year' => array(2017),
            'description' => 'The design reproduces on its upper part a triangle, consisting of three undulating strips representing a simplified version of the map of the country, with the inscriptions ‘Andorra’ and ‘EL PAÍS DELS PIRINEUS’ (the Pyrenean country). These three elements make up the brand owned by the Government of Andorra, which is used to provide a uniform, consistent and coordinated image to all graphic communication and, at the same time, achieve an unmistakable and instant identification. The lower part of the design depicts the year of issuance ‘2017’.',
            'image' => 'andorra2017_2.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Constitution of Andorra',
            'year' => array(2018),
            'description' => 'The design represents the "Monument to the men and women of Andorra who wanted the Constitution", which is located in the Plaza of the General Council (Parliament of Andorra). To the right of the monument is the map of Andorra with the Latin inscription "VIRTVS VNITA FORTIOR" (the united virtue is stronger) in its interior, which is the state motto of the Principality of Andorra.',
            'image' => 'andorra2018.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Universal Declaration of Human Rights',
            'year' => array(2018),
            'description' => 'The design of the coin depicts seven staircases (representing the seven parishes or administrative divisions of Andorra) in the shape of mountains that lead to the valley, where there is the name of the issuing country ‘ANDORRA’ and the year of issue ‘2018’. These staircases are, at the same time, the branches of a tree symbolizing humankind, of which Andorra is an integral part. 30 leaves come out of the branches of this tree representing the 30 articles of the Universal Declaration of Human Rights. The Catalan inscription ‘70 ANYS DE LA DECLARACIÓ UNIVERSAL DELS DRETS HUMANS’ (70 years of the Universal Declaration of Human Rights) surrounds the design, strengthening this commemorative event.',
            'image' => 'andorra2018_2.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Final of the Alpine Ski World Cup',
            'year' => array(2019),
            'description' => 'The design of the coin shows in the foreground a skier sliding down a slope. In the background, four curved lines, from the official logo of these Ski World Cup Finals (11.-17.3.2019), represent the slopes where the competition will take place. Some snowflakes complete the design together with the inscription ‘FINALS DE LA COPA DEL MÓN D’ESQUÍ ANDORRA 2019’ (Andorra 2019 Ski World Cup Finals). The coin’s outer ring depicts the twelve stars of the European flag.',
            'image' => 'andorra2019.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'General Council of Andorra',
            'year' => array(2019),
            'description' => 'A depiction of the upper part of the entry portal of Casa de la Vall with the coat of arms of the country. Two compact groups of human faces on both sides of the design.',
            'image' => 'andorra2019_2.png',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Universal Female Suffrage',
            'year' => array(2020),
            'description' => 'The design of the coin shows a female face inside a wrapper of endless moving lines. These lines are formed by female names in Catalan language close together, making it difficult to read them individually, as a tribute to solidarity of women in the fight for their rights. There is one repeated name only, that of ‘VICTORIA’ and symbolises the victory of gaining the right to vote. The inscriptions ‘50 ANYS DEL SUFRAGI UNIVERSAL FEMENÍ’ (50 years of Universal Female Suffrage) and ‘ANDORRA 1970 - 2020’ complete the design. These inscriptions are also incorporated into the movement of the lines in a way, in order to give more importance to the anniversary that is being commemorated.',
            'image' => 'andorra2020.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Ibero-American Summit',
            'year' => array(2020),
            'description' => 'The 27th Ibero-American Summit of Heads of State and Government will be held in the Principality of Andorra in 2020. Andorra, the newest and smallest member of the Ibero-American Conference, will host this meeting of the highest political level, which comprises 19 Latin American countries together with Spain, Portugal and Andorra, in order to work towards common goals such as Sustainable Development. The design of the coin shows a tree made up by human silhouettes and tine wheels. The human silhouettes symbolize the integration of society, culture and education for the realization of a sustainable future. The tine wheels symbolize the synergy of movement between the ideas and proposals of participants to this Summit. Next to the tree, there is the logo of this 27th Summit. On its upper side, three triangles represent the colours of the Andorran flag. On its lower side, six triangles represent Andorra’s opening towards Sustainable Development Goals. Around the design, there is the inscription ‘XXVII CIMERA IBEROAMERICANA ANDORRA 2020’ (27th Ibero-American Summit Andorra 2020).',
            'image' => 'andorra2020_2.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Coronation of Our Lady of Meritxell',
            'year' => array(2021),
            'description' => 'The foreground of the design depicts the reproduction of the Romanesque carving of Our Lady of Meritxell (patron saint of the Principality of Andorra), which dates back from the 11th and 12th centuries. The background of the design shows a partial reproduction of the basilica sanctuary where it is located, a graphic element symbolizing a flower, the name of the issuing country ‘ANDORRA’ and the years ‘1921-2021’.',
            'image' => 'andorra2021.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Let’s Take Care of Our Elderly',
            'year' => array(2021),
            'description' => 'The subject of the coin ‘CUIDEM LA NOSTRA GENT GRAN’ (taking care of our seniors) is symbolized by the image of the hand of a young person holding another hand that shows all the signs of aging, with a stethoscope below them. The name of the issuing country ‘ANDORRA’ encircling several reproductions of the SARSCoV-2 virus represents the State’s commitment to preventing its spread and caring for its citizens.',
            'image' => 'andorra2021_2.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Monetary Agreement',
            'year' => array(2022),
            'description' => '10 years of currency agreement between Andorra and the EU',
            'image' => 'andorra2022.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
        Coin::create([
            'name' => 'Legend of Charlemagne',
            'year' => array(2022),
            'description' => 'The Legend of Charlemagne',
            'image' => 'andorra2022_2.jpg',
            'country_id' => 6,
            'type' => 'commemorative',
        ]);
    }
}
