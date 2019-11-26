<?php 
    include_once "../persist/SqlManager.class.php";
	$conn = new SqlManager("connect");
    
    $query = "SELECT * FROM pessoa";

	$result = $conn->ExecuteRead($query);
	
	$return = "<table align='center' border=1  cellpadding='0' cellspacing='0'>";
	$return .= "<tr><td><label>Nome Bar:</label></td>";
	$return .= "<td><label>" . utf8_decode($bar) . "</label></td></tr>";
	
	foreach ( $result as $row )s
	{
		$valor = utf8_decode($row["pessoa"]);
		$return .= "<tr>";
		$return .= "<td colspan='2'>";
		$return .= "<label>" . $valor . "</label>";
		$return .= "</td>";
		$return .= "</tr>";
    }
    
    $return .= "</table>";

    $conn->closeConnection();
    echo($return)
?>
    

    <header class="header">
        <div class="header__logo-box">
            <img class="header__logo"src="img/logo-white.png" alt="Logo">
        </div>
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Events</span>
                <span class="heading-primary--sub">Expanding your knowledge</span>
            </h1>
            <a href="#" class="btn btn--white btn--animated">See your events</a>
        </div>
    </header>
    <main>
        <section class="section-stories">
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="img/video.mov" >
                    <source src="img/video.mp4" type="video/mp4">
                    Your browser is not supported!
                </video>
            </div>
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    We make people smarter
                </h2>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/story-1.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">Mary Smith</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            I had the best lectures ever
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe possimus eaque, odio atque aut laborum, optio veniam voluptates aliquid temporibus placeat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe possimus eaque, odio atque aut laborum!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/story-2.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">Jack Wilson</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            Wow! My life is completely different now!
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe possimus eaque, odio atque aut laborum, optio veniam voluptates aliquid temporibus placeat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe possimus eaque, odio atque aut laborum!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-create">
            <div class="row">
                <div class="create">
                    <div class="create__form">
                        <form method="POST" action="#" class="form">
                                <div class="u-center-text u-margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                        Sign up now
                                    </h2>
                                </div> 
                            <div class="form__group">
                                <input name="event_name" type="text" class="form__input" placeholder="Event Name" id="name" required>
                                <label for="name" class="form__label">Event name</label>
                            </div>
                            <div class="form__group">
                                <input name="local" type="text" class="form__input" placeholder="Local" id="local" required>
                                <label for="local" class="form__label">Local</label>
                            </div>
                            <div class="form__group u-margin-bottom-tiny">
                                <input name="date" type="text" class="form__input" placeholder="Date" id="date" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" required>
                                <label for="date" class="form__label">DD/MM/YYYY</label>
                            </div>
                            <div class="form__group">
                                <button class="btn btn--blue">Next step &rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                        <h2 class="heading-secondary">
                            Most popular events
                        </h2>
                </div>
                <div class="row">

                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">
                                        The Sea Explorer
                                    </span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>3 day tours</li>
                                        <li>Up to 30 people</li>
                                        <li>2 tour guides</li>
                                        <li>Sleep in cozy hotels</li>
                                        <li>Dificulty: easy</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$297</p>
                                    </div>
                                    <a href="#" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="card">
                                <div class="card__side card__side--front">
                                        <div class="card__picture card__picture--2">
                                            &nbsp;
                                        </div>
                                        <h4 class="card__heading">
                                            <span class="card__heading-span card__heading-span--2">
                                                The Forest Hiker
                                            </span>
                                        </h4>
                                        <div class="card__details">
                                            <ul>
                                                <li>3 day tour</li>
                                                <li>Up to 40 people</li>
                                                <li>6 tour guides</li>
                                                <li>Sleep in provided tents</li>
                                                <li>Dificulty: medium</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card__side card__side--back card__side--back-2">
                                        <div class="card__cta">
                                            <div class="card__price-box">
                                                <p class="card__price-only">Only</p>
                                                <p class="card__price-value">$497</p>
                                            </div>
                                            <a href="#" class="btn btn--white">Book now!</a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--3">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--3">
                                            The Sea Explorer
                                        </span>
                                    </h4>
                                    <div class="card__details">
                                        <ul>
                                            <li>5 day tours</li>
                                            <li>Up to 15 people</li>
                                            <li>3 tour guides</li>
                                            <li>Sleep in cozy hotels</li>
                                            <li>Dificulty: hard</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$897</p>
                                    </div>
                                    <a href="#" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-center-text u-margin-top-huge">
                    <a href="#" class="btn btn--blue">Discover all tours</a>
                </div> 
            </section>
    </main>

    <footer class="footer">
            <div class="footer__logo-box">
                <img src="img/logo-white.png" alt="Full logo" class="footer__logo">
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Contanct Us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Privacy Policy</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        Built my <a href="#" class="footer__link">Yuri Brasil</a> for his online course <a href="#" class="footer__link">Advanced CSS and SASS</a>. Copyright &copy; by Yuri Brasil. You are 100% allowed to use this webpage for both personal and commercial use, but NOT to claim it as your own design. A credit to the original author, Jonas Schmedtmann is of course highly appreciated!
                    </p>
                </div>
            </div>
        </footer>