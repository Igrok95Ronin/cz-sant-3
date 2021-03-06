<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'INSTALATÉRSKÉ A TOPENÁŘSKÉ PRÁCE NÁCHOD'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>
<body>
    
    
        <!--Шапка сайта-->
        <header class="header d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 header-container">
                        <div class="header-wrapper">
                            <img class="header-log" src="assets/img/vana.png" alt="" >
                            <img class="header-log2" src="assets/img/jirikavalek-logo-vtp-3.png" alt="" >
                        </div>
                        <div class="d-grid col-2 header-btn">
                            <a class="btn header-btn__link" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                        </div>
                    </div>                 
                </div>            
            </div>
        </header>

        <!-- Основное содержимое страницы -->
        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 section-container d-md-none">
                        <div class="fixed-top">
                            <div class="d-grid col-12 ">
                                <a class="btn header-btn__link btn2" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                            </div>
                        </div>
                    </div>                 
                </div>            
            </div>
        </section>
        <section class="second-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 second-container">
                        <h1 class="second-title"><?= $title ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="third-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 third-container">
                        <div class="third-img"></div>
                        <div class="third-description">
                            <h3 class="third-description__title">O NÁS</h3>
                            <p class="third-description__text">Jsme připraveni realizovat veškeré <b>instalatérské práce</b> a <b>havarijní práce</b> k vaší absolutní spokojenosti. Samozřejmostí je také <b>závěrečný úklid, odvoz odpadu a suti</b>. Vždy dodržujeme bezpečnost práce a stanovené normy a předpisy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourth-section py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 fourth-container">
                        <div class="fourth-box">
                            <img class="fourth-box__img" src="assets/img/00-kalend.png" alt="" >
                            <p class="fourth-box__name">Klademe důraz na <b>dodržování termínů</b></p>
                        </div>
                        <div class="fourth-box">
                            <img class="fourth-box__img" src="assets/img/001-trophy.png" alt="" >
                            <p class="fourth-box__name"><b>Dlouholetá praxe</b> v oboru instalatérství</p>
                        </div>
                        <div class="fourth-box">
                            <img class="fourth-box__img" src="assets/img/002-smajl.png" alt="" >
                            <p class="fourth-box__name">Klientům vycházíme <b>maximálně vstříc</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fifth-section pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 fifth-container">
                        <h2 class="fifth-title">SLUŽBY</h2>
                        <div class="fifth-box">
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/1-plumber-kopie.png" alt="" >
                                <p class="fifth-items__text">Dodávka a montáž vody, odpadu a topení</p>
                            </div>
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/2-tap-1-kopie.png" alt="" >
                                <p class="fifth-items__text">Vodovodní baterie</p>
                            </div>
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/3-pipes-3-kopie.png" alt="" >
                                <p class="fifth-items__text">Rekonstrukce potrubí</p>
                            </div>
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/4-toilet-kopie.png" alt="" >
                                <p class="fifth-items__text">Montáž sanitárního vybavení</p>
                            </div>
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/5-shower-1-kopie.png" alt="" >
                                <p class="fifth-items__text">Rekonstrukce koupelen včetně vybavení</p>
                            </div>
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/6-bathtub-kopie.png" alt="" >
                                <p class="fifth-items__text">Výměny zařizovacích prvků</p>
                            </div>
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/7-pipe-1-kopie.png" alt="" >
                                <p class="fifth-items__text">Prodej vodoinstalačního a topenářského materiálu</p>
                            </div>
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/8-radiator-kopie.png" alt="" >
                                <p class="fifth-items__text">Montáž rozvodů ústředního vytápění</p>
                            </div>
                            <div class="fifth-items">
                                <img class="fifth-items__img" src="assets/img/9-toolbox-kopie.png" alt="" >
                                <p class="fifth-items__text">Rozvody vnitřního plynovodu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sixth-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 sixth-container">
                        <div class="sixth-left-block">
                            <h3 class="sixth-left-block__title">NABÍZÍME</h3>
                            <p class="sixth-left-block__text">montáž a dodávka <span>ZTI (zdravotně technické instalace)</span> v bytových i nebytových objektech</p>
                            <ul class="sixth-left-block__ul">
                                <li class="sixth-left-block__li">rozvody studené, teplé vody a kanalizace</li>
                                <li class="sixth-left-block__li">plynové rozvody</li>
                                <li class="sixth-left-block__li">dodávky a montáž zařizovacích předmětů</li>
                            </ul>
                            <p class="sixth-left-block__text">montáž a dodávka <span>ÚT (ústředního topení)</span>  v bytových i nebytových objektech</p>
                            <ul class="sixth-left-block__ul">
                                <li class="sixth-left-block__li">instalace tepelných čerpadel</li>
                                <li class="sixth-left-block__li">instalace podlahového vytápění</li>
                                <li class="sixth-left-block__li">dodávky a montáž kotlů</li>
                            </ul>
                        </div>
                        <div class="sixth-right-block"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="seventh-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 seventh-container">
                        <h2 class="seventh-title">PRO DALŠÍ INFORMACE VOLEJTE:</h2>
                        <a class="seventh-link d-none d-md-block" href="<?= $phone_href ?>"><?= $phone_name ?></a>
                        <div class="d-grid col-12 header-btn header-btn--width d-md-none">
                            <a class="btn header-btn__link header-btn__link--color-btn" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="eighth-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 eighth-container">
                        <h2 class="eighth-title">VYBRANÉ REFERENCE</h2>
                        <div class="eighth-box">
                            <div class="eighth-items">
                                <img class="eighth-items__img" src="assets/img/1.1ceska-skalice.jpg" alt="" >
                                <p class="eighth-items__text">RD Na Hradě Česká Skalice</p>
                            </div>
                            <div class="eighth-items">
                                <img class="eighth-items__img" src="assets/img/1.2Farmet.jpg" alt="" >
                                <p class="eighth-items__text">Haly Farmet</p>
                            </div>
                            <div class="eighth-items">
                                <img class="eighth-items__img" src="assets/img/1.3Chlumec1.jpg" alt="" >
                                <p class="eighth-items__text">SŠTŘ Chlumec nad Cidlinou 1.</p>
                            </div>
                            <div class="eighth-items">
                                <img class="eighth-items__img" src="assets/img/1.4Chlumec2.jpg" alt="" >
                                <p class="eighth-items__text">SŠTŘ Chlumec nad Cidlinou 2.</p>
                            </div>
                            <div class="eighth-items">
                                <img class="eighth-items__img" src="assets/img/1.5Kovpal.jpg" alt="" >
                                <p class="eighth-items__text">Výrobní hala KOVPAL Dobruška</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ninth-section mt-5 pb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ninth-container">
                        <h2 class="ninth-title">KONTAKT</h2>
                        <div class="forms-box mt-5">
                            <form id="jq_form">
                                <!-- <h6 class="forms__h6 text-center forms-box__title">Objednejte si zámečníka!<h6> -->
                                <div class="mb-3 mt-4">
                                    <input class="form-control" placeholder="Jméno" name="jq_name" type="text">
                                    <div id="jq_name" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                </div>
                                <div class="my-3">
                                    <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                    <div id="jq_phone" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                </div>
                                <div class="my-3">
                                    <input class="form-control" placeholder="Ulice" name="jq_street" type="text">
                                </div>
                                <div class="my-3">
                                    <input class="form-control" placeholder="PSČ / město" name="jq_city" type="text">
                                </div>
                                <div class="my-3">
                                    <input class="form-control" placeholder="E-Mail" name="jq_email" type="text"> 
                                </div>
                                <div class="my-3">
                                    <textarea rows="5" class="form-control" name="jq_text" placeholder="Zprávy"></textarea>
                                    <div id="jq_text" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                </div>
                                <input class="btn text-uppercase fw-bold mb-1 px-5 py-2 forms-box__buttom" type="submit" id="jq_submit" value="Odeslat"> 
                                <div id="jq_success" style="display:none">Díky za vaši zprávu. Byla odeslána.</div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tenth-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 tenth-container">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active img-box" data-bs-interval="100000">
                                <img src="assets/img/0.1heimer.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.2HL.gif" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.3jika-logo-1-1024x495.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.4korado-logo-png-transparent.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.5Laufen.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.6logo-dz-drazice.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.7logo-ravak-v-ramecku.jpg" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.8logo-sanela.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.9logo-vagnerplast.png" class="w-100 imgWidth" alt="...">
                              </div>
                              <div class="carousel-item img-box" data-bs-interval="10000">
                                <img src="assets/img/0.10norma.gif" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.11osma.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.12raf.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.13roltechnik_logo_zakladni_barevne_rgb.jpg" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.14teiko.jpg" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.15triker.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.16vagnerplast_logo.gif" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.17venta.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.18viegalogo_306x263_98918.jpg" class="w-100 imgWidth" alt="...">
                              </div>
                              <div class="carousel-item img-box" data-bs-interval="10000">
                                <img src="assets/img/0.19WavinEkoplastiklogo4x.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.20maro.gif" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.21logo-velkoobchod.svg" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.22azp-logo-cz_d4628755.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.23dakon.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.24Geberit.png" class="w-100 imgWidth" alt="...">
                                <img src="assets/img/0.25geosagt.png" class="w-100 imgWidth" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Предыдущий</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Следующий</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Нижний колонтитул страницы-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 footer-container">
                       <p class="m-0 ms-4"> 2022</p>
                    </div>                 
                </div>            
            </div>
        </footer>
        <!--Style-->     
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="assets/css/bootstrap.bundle.min.js"></script>
</body>
</html>