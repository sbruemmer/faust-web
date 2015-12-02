      <?php include "includes/header.php"; ?>
      <section class="pure-noprint">
        <div class="slider">
          <div>
            <div class="center">
              <img src="img/slider/mephisto.png">
              <div class="text">
                    <p>Die digitale Faust-Edition besteht aus einem <a href="/archives.php"
                            >Archiv</a> der Handschriften und der zu Lebzeiten erschienenen
                        textkritisch relevanten Drucke zum ‚Faust‘, einem Lesetext des ‚<a
                            href="/print/faust1.html">Faust I</a> und des ‚<a
                            href="/print/faust2.html">Faust II</a>‘ sowie Visualisierungen zur <a
                            href="/chessboard_overview.php">Genese</a> des Werks.</p>
              </div>
            </div>
          </div>

          <div style="background:#b7b18f url(img/slider/2-II-H.1-bg.png) center center;">
            <div class="center">
              <img src="img/slider/2-II-H.1.png">
              <div class="text">
                <h2>Archiv</h2>
                    <p>Zum ‚Faust‘ ist <a href="/archives_locations.php?view=archives">weltweit</a>
                        ein umfangreicher Bestand an <a
                            href="/archives_manuscripts.php?view=manuscript-concordance"
                            >Handschriften</a> und <a
                            href="/archives_manuscripts.php?view=print-concordance">Drucken</a> aus
                        der Zeit von von etwa 1774 bis 1831 erhalten. Das <a href="/archives.php"
                            >Archiv</a> macht die gesamte Überlieferung in Abbildungen,
                        Transkriptionen und Zeugenbeschreibungen zugänglich.</p>
              </div>
            </div>
          </div>

          <div style="background:#d8d5ca url(img/slider/H-P123.5-hg.png) center center;">
            <div class="center">
              <img src="img/slider/H-P123.5.png">
              <div class="text">
                <h2>Genese</h2>
                    <p>Goethe hat beinahe in jeder Phase seines Lebens an dem Werkprojekt ‚Faust‘
                        gearbeitet. Verschiedene Grafiken stellen die <a
                            href="/chessboard_overview.php">Genese</a> von Goethes ‚Faust‘
                        retrospektiv, d.h. vom abgeschlossenen Werk ausgehend dar.</p>
              </div>
            </div>
          </div>

          <div style="background:#cdc6ac url(img/slider/2-H-hg.png) center center;">
            <div class="center">
              <div class="text">
                <h2>Text</h2>
                    <p>Der Text des ‚<a href="/print/faust1.html">Faust I</a>‘ beruht auf dem
                        Erstdruck von 1808, der des ‚<a href="/print/faust2.html">Faust II</a>‘ auf
                        der großen Reinschrift, die heute im Goethe- und Schiller-Archiv liegt. Vom
                        Text aus sind alle übrigen handschriftlichen und gedruckten Fassungen
                        erreichbar.</p>
              </div>
              <img src="img/slider/2-H.png">
            </div>
          </div>
        </div>
      </section>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.slick.min.js"></script>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          $('.slider').slick({
            adaptiveHeight: true,
            autoplay: true,
            dots:true,
            autoplaySpeed: 3000,
            pauseOnHover: true,
            responsive: [
              {
                breakpoint: 1125,
                settings: {
                  arrows: false
                }
              }
            ]
          });
        });
      </script>

      <section class="center pure-g-r">
        <div class="pure-u-1-5"></div>
        
        <article class="pure-u-3-5 pure-gap">

          <h2>Historisch-kritische Edition von Goethes Faust</h2>
          <p>Herausgegeben von Anne Bohnenkamp, Silke Henke und Fotis Jannidis</p>
          <p>Gefördert von: <a href="http://www.dfg.de" target="_blank"><img style="vertical-align:middle; height:45px; margin-top:-12px;" alt="DFG - Deutsche Forschungsgesellschaft" src="img/DFG-Logo.png"></a></p>
          <p><a href="project.php">Informationen zum Projekt</a></p>
          <p><a href="intro.php">Informationen zur Ausgabe</a></p>

        </article>

        <div class="pure-u-1-5"></div>

        </div>
      </section>
      <?php include "includes/footer.php"; ?>