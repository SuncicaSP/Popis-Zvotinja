<?php
    date_default_timezone_set('Europe/Zagreb');
    if (isset($_POST['boja'])) {
        $boja = $_POST['boja'];
        $opis = $_POST['opis'];
        $pasmina = $_POST['pasmina'];
        $recommended = $_POST['recommended']; // 'yes' or 'no'

        $result = '';
        $result .= '<Zivotinja>\n';
        $result .= '<boja>' . $boja . "</boja>\n";
        $result .= '<OpisZivotinje>' . $opis . "</OpisZivotinje>\n";
        $result .= '<pasmina>' . $pasmina . "</pasmina>\n";
        $result .= '<Recommended>' . $recommended . "</Recommended>\n";
        $result .= '</Zivotinja>';

        $filename = 'PopisZivotinja' . '.xml';
        file_put_contents($filename, $result);
        die('UspjeĹˇno generiran XML!');
        //$xml=simplexml_load_file("baza.xml") or die("Dogodila se greska");

    }
?>

<!doctype html>
<html lang="en">

<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <link rel="stylesheet" href="style.css">
    <title>PopisĹ˝ivotinja</title>
</header>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Angels among us...</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	<img id="dogImage" src="https://dog.ceo/img/dog-api-logo.svg">
      <li class="nav-item">
        <a class="nav-link" href="#">PoÄŤetna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://www.noina-arka.hr/udomi-psa/">Ĺ tiÄ‡enici</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://angelsrescue.org/">O nama</a>
      </li>
	 </ul>
		<img id="dogImage" src="https://dog.ceo/img/dog-api-logo.svg">
  </div>
</nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1 class="mb-5 text-center">Unesite podatke o Ĺľeljenoj Ĺľivotinji</h1>
                <form action="" method="POST">
                  
                    <div class="form-group">
                        <label for="boja">boja</label>
                        <input type="text" name="boja" class="form-control" id="boja">
                    </div>
              
                    <div class="form-group">
                        <label for="pasmina">Pasmina</label>
                        <input type="text" name="pasmina" class="form-control" id="pasmina">
                    </div>
                 
                    <div class="form-group">
                        <label for="opis">Opis Ĺľivotinje</label>
                        <textarea class="form-control" name="opis" id="opsi" rows="3"></textarea>
                    </div>

                    <label for="nekretnina">Posjedujete li vlastitu nekretninu?</label>
                    <select class="custom-select" name="recommended" id="recommended">
                        <option value="yes">Da</option>
                        <option value="no">Ne</option>
                    </select>
				   <label for="iskustvo">Iskustvo sa Ĺľivotinjom?</label>
                    <select class="custom-select" name="recommended" id="recommended">
                        <option value="yes">Da</option>
                        <option value="no">Ne</option>
                    </select>

                    <button type="submit" class="btn btn-primary float-right mt-3">Spremi_XML</button>
                </form>

            </div>
        </div>
        <div class="mb-5"></div>
    </div>
    <footer>
        <div class="container">
            <div class="row justify-content-md-center">
                <p>Angels among us...</p>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>