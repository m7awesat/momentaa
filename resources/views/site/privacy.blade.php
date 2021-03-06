@extends('site.layouts.siteApp')

@section('content')

    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Privacy</h2>
                    <!--<ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ol>-->
                </div>

            </div>
        </section><!-- End Contact Section -->
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show text-center">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center">
                {!! session('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session('message'))
            <div class="alert alert-info alert-dismissible fade show text-center">
                {!! session('message') !!}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show text-center">
                {!! session('error') !!}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    @endif
    <!-- ======= Contact Section ======= -->
        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h2>
                        Angaben gem???? ?? 5 TMG</h2>

                        <ul>
                            <li>Nael Arafat</li>
                            <li>Wunstorferstra??e 42</li>
                            <li>30453 Hannover</li>
                        </ul>
                        
                        <p>
                            Vertreten durch: <u>Nael Arafat</u>
                        </p>
                        
                        
                        
                        <p>
                            <u>Kontakt:</u>
                        
                            <ul>
                                <li>Telefon ??? mobil: +49 176 43673470</li>
                                <li>E-Mail: info@momentaa.de</li>
                                <li>Umsatzsteuer-ID:
                        Umsatzsteuer-Identifikationsnummer gem???? ??27a Umsatzsteuergesetz: 87239413062</li>
                            </ul>
                        </p>
                        
                        
                        
                        
                        
                        
                        <h2>Haftungsausschluss:</h2>
                        
                        Haftung f??r Inhalte
                        <p>
                        Die Inhalte unserer Seiten wurden mit gr????ter Sorgfalt erstellt. F??r die Richtigkeit, Vollst??ndigkeit und Aktualit??t der Inhalte k??nnen wir jedoch keine Gew??hr ??bernehmen. Als Diensteanbieter sind wir gem???? ?? 7 Abs.1 TMG f??r eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach ???? 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, ??bermittelte oder gespeicherte fremde Informationen zu ??berwachen oder nach Umst??nden zu forschen, die auf eine rechtswidrige T??tigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unber??hrt. Eine diesbez??gliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung m??glich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.
                        </p>
                        <h2>
                        Haftung f??r Links
                        </h2>
                        <p>
                        Unser Angebot enth??lt Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb k??nnen wir f??r diese fremden Inhalte auch keine Gew??hr ??bernehmen. F??r die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf m??gliche Rechtsverst????e ??berpr??ft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.
                        </p>
                        <h2>
                        Urheberrecht
                        </h2>
                        <p>
                        Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielf??ltigung, Bearbeitung, Verbreitung und jede Art der Verwertung au??erhalb der Grenzen des Urheberrechtes bed??rfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur f??r den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
                        </p>
                        <h2>
                        Datenschutz
                        </h2>
                        <p>
                        Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten m??glich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit m??glich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdr??ckliche Zustimmung nicht an Dritte weitergegeben.
                        Wir weisen darauf hin, dass die Daten??bertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitsl??cken aufweisen kann. Ein l??ckenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht m??glich.
                        Der Nutzung von im Rahmen der Impressumspflicht ver??ffentlichten Kontaktdaten durch Dritte zur ??bersendung von nicht ausdr??cklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdr??cklich widersprochen. Die Betreiber der Seiten behalten sich ausdr??cklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.
                        </p>
                        <h2>
                        Google Analytics
                        </h2>
                        <p>
                        Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (''Google''). Google Analytics verwendet sog. ''Cookies'', Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie erm??glicht. Die durch den Cookie erzeugten Informationen ??ber Ihre Benutzung dieser Website (einschlie??lich Ihrer IP-Adresse) wird an einen Server von Google in den USA ??bertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports ??ber die Websiteaktivit??ten f??r die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte ??bertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten der Google in Verbindung bringen. Sie k??nnen die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht s??mtliche Funktionen dieser Website voll umf??nglich nutzen k??nnen. Durch die Nutzung dieser Website erkl??ren Sie sich mit der Bearbeitung der ??ber Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.
                        </p>
                        <h2>
                        Google AdSense
                        </h2>
                        <p>
                        Diese Website benutzt Google Adsense, einen Webanzeigendienst der Google Inc., USA (''Google''). Google Adsense verwendet sog. ''Cookies'' (Textdateien), die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie erm??glicht. Google Adsense verwendet auch sog. ''Web Beacons'' (kleine unsichtbare Grafiken) zur Sammlung von Informationen. Durch die Verwendung des Web Beacons k??nnen einfache Aktionen wie der Besucherverkehr auf der Webseite aufgezeichnet und gesammelt werden. Die durch den Cookie und/oder Web Beacon erzeugten Informationen ??ber Ihre Benutzung dieser Website (einschlie??lich Ihrer IP-Adresse) werden an einen Server von Google in den USA ??bertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website im Hinblick auf die Anzeigen auszuwerten, um Reports ??ber die Websiteaktivit??ten und Anzeigen f??r die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte ??bertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten der Google in Verbindung bringen. Das Speichern von Cookies auf Ihrer Festplatte und die Anzeige von Web Beacons k??nnen Sie verhindern, indem Sie in Ihren Browser-Einstellungen ''keine Cookies akzeptieren'' w??hlen (Im MS Internet-Explorer unter ''Extras > Internetoptionen > Datenschutz > Einstellung''; im Firefox unter ''Extras > Einstellungen > Datenschutz > Cookies''); wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht s??mtliche Funktionen dieser Website voll umf??nglich nutzen k??nnen. Durch die Nutzung dieser Website erkl??ren Sie sich mit der Bearbeitung der ??ber Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.
                        </p>
                         
                        
                        Website Impressum erstellt durch impressum-generator.de von der Kanzlei Hasselbach
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


@endsection
