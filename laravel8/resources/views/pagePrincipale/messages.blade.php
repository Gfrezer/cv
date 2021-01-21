                    <!--MESSAGES-->
                    <section>
                        <div class="container cv">
                            <div class="row">
                                <div class="espaceTitre" id="vosMessages"></div>
                                <div class="col-md-12">
                                        <h2>VOS MESSAGES</h2>
                                </div>
                            </div>
                            <div class="row">
                                @include('pagePrincipale/messageModal')
                                @foreach($messagesUsers as $messagesUser)
                                @if($messagesUser-> messageAccueil == 1)
                                <div class="col-md-4">
                                    <div class="client-profil" data-aos-delay="400" data-aos-duration="2000"
                                        data-aos="flip-right">
                                        <div class="imgAlea" data-aos-delay="1400" data-aos-duration="2000"
                                            data-aos="flip-up">
                                        </div>
                                        <div class="avatar a{{$loop->iteration}}{{$messagesUser->sexe}}"></div>
                                        <blockquote>
                                            <p><i class="fas fa-quote-left"></i> {{$messagesUser->message_user}} <i
                                                    class="fas fa-quote-right"></i></p>
                                            <br />
                                        </blockquote>
                                        <cite>{{$messagesUser->pseudo}}</cite>
                                        <p class="dateMessage">
                                            {{ \Carbon\Carbon::parse($messagesUser->created_at)->translatedFormat('d F Y') }}
                                        </p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <!-- bouton sur la page accueil -->
                            <div class="wrap introModale">
                                <button class="btn-demo message" data-toggle="modal"
                                    data-target=".bs-example-modal-new">
                                    <span class="btn-gradient">
                                        <i class="far fa-edit"></i>
                                    </span>
                                    <span class="btn-text">Votre message...</span>
                                </button>
                            </div>
                        </div>
                    </section>