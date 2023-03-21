@extends('layouts.main')

@section('title', 'Forum')

@section('content')

    <!-- Page Container -->
    <div class="ms-5 me-5 p-3" style="margin-top:80px">
        <!-- The Grid -->
        <div class="row">
            <!-- Left Column -->
            <div class="col-sm-3">
                <!-- Profile -->
                <div class="card border bg-white rounded shadow p-3">
                    <div class="container">
                        <h4 class="text-center">My Profile</h4>
                        <p class="text-center">
                            <img src="/img/avatar.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar">
                        </p>
                        <hr>
                        <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
                        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
                    </div>
                </div>
                <br>

                <!-- Accordion -->
                <div class="card border bg-white rounded shadow p-1">
                    <div class="w3-white">
                        <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align">
                            <i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> 
                            My Groups
                        </button>
                        <div id="Demo1" class="w3-hide w3-container">
                            <p>Some text..</p>
                        </div>
                        <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i
                                class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
                        <div id="Demo2" class="w3-hide w3-container">
                            <p>Some other text..</p>
                        </div>
                        <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i
                                class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                        <div id="Demo3" class="w3-hide w3-container">
                            <div class="w3-row-padding">
                                <br>
                                <div class="w3-half">
                                    <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!-- Interests -->
                <div class="card border bg-white rounded shadow p-3">
                    <div class="w3-container">
                        <p>Interests</p>
                        <p>
                            <span class="w3-tag w3-small w3-theme-d5">News</span>
                            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
                            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
                            <span class="w3-tag w3-small w3-theme-d2">Games</span>
                            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
                            <span class="w3-tag w3-small w3-theme">Games</span>
                            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                            <span class="w3-tag w3-small w3-theme-l2">Food</span>
                            <span class="w3-tag w3-small w3-theme-l3">Design</span>
                            <span class="w3-tag w3-small w3-theme-l4">Art</span>
                            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                        </p>
                    </div>
                </div>
                <br>

                <!-- Alert Box -->
                <div class="card border bg-white rounded shadow p-3">
                    <span onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-theme-l3 w3-display-topright">
                        <i class="fa fa-remove"></i>
                    </span>
                    <p><strong>Hey!</strong></p>
                    <p>People are looking at your profile. Find out who.</p>
                </div>
                <!-- End Left Column -->
            </div>

            <!-- Middle Column -->
            <div class="col-sm-7">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border bg-white rounded shadow">
                            <div class="container p-3">
                                <h6 class="w3-opacity">Social Media template by w3.css</h6>
                                <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
                                <button type="button" class="w3-button w3-theme">
                                    <i class="fa fa-pencil"></i>
                                    Post
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="card border bg-white rounded shadow">
                            <div class="container p-3">
                                <img src="/img/avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                <span class="w3-right w3-opacity">1 min</span>
                                <h4>John Doe</h4><br>
                                <hr class="w3-clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="w3-row-padding" style="margin:0 -16px">
                                    <div class="w3-half">
                                        <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                                    </div>
                                </div>
                                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
                                    <i class="fa fa-thumbs-up"></i> 
                                    Like
                                </button>
                                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom">
                                    <i class="fa fa-comment"></i>
                                    Comment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="card border bg-white rounded shadow">
                            <div class="container p-3">
                                <img src="/img/avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                <span class="w3-right w3-opacity">1 min</span>
                                <h4>John Doe</h4><br>
                                <hr class="w3-clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="w3-row-padding" style="margin:0 -16px">
                                    <div class="w3-half">
                                        <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                                    </div>
                                </div>
                                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
                                    <i class="fa fa-thumbs-up"></i> 
                                    Like
                                </button>
                                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom">
                                    <i class="fa fa-comment"></i>
                                    Comment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="card border bg-white rounded shadow">
                            <div class="container p-3">
                                <img src="/img/avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                <span class="w3-right w3-opacity">1 min</span>
                                <h4>John Doe</h4><br>
                                <hr class="w3-clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="w3-row-padding" style="margin:0 -16px">
                                    <div class="w3-half">
                                        <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                                    </div>
                                </div>
                                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
                                    <i class="fa fa-thumbs-up"></i> 
                                    Like
                                </button>
                                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom">
                                    <i class="fa fa-comment"></i>
                                    Comment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="card border bg-white rounded shadow">
                            <div class="container p-3">
                                <img src="/img/avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                <span class="w3-right w3-opacity">1 min</span>
                                <h4>John Doe</h4><br>
                                <hr class="w3-clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="w3-row-padding" style="margin:0 -16px">
                                    <div class="w3-half">
                                        <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                                    </div>
                                </div>
                                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
                                    <i class="fa fa-thumbs-up"></i> 
                                    Like
                                </button>
                                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom">
                                    <i class="fa fa-comment"></i>
                                    Comment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>          
                <!-- End Middle Column -->
            </div>

            <!-- Right Column -->
            <div class="col-sm-2">
                <div class="card border bg-white rounded shadow p-3 text-center">
                    <div class="container">
                        <h3>Junte-se a nossa comunidade!</h3>
                        
                        <p>Para usufruir do nosso fórum e participar conosco faça seu login, caso não seja cadastrado faça seu cadastro.</p>

                        <a href="{{ route('register') }}" class="button btn-cadastro">Cadastrar-se</a>
                    </div>
                </div>
                <br>

                <div class="card border bg-white rounded shadow p-3">
                    <div class="container text-center">
                        <p>Friend Request</p>
                        <img src="/img/avatar.png" alt="Avatar" style="width:50%"><br>
                        <span>Jane Doe</span>
                        <div class="w3-row w3-opacity">
                            <div class="w3-half">
                                <button class="w3-button w3-block w3-green w3-section" title="Accept"><i
                                        class="fa fa-check"></i></button>
                            </div>
                            <div class="w3-half">
                                <button class="w3-button w3-block w3-red w3-section" title="Decline"><i
                                        class="fa fa-remove"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="card border bg-white rounded shadow p-3">
                    <p>ADS</p>
                </div>
                <br>

                <div class="card border bg-white rounded shadow p-3">
                    <p><i class="fa fa-bug w3-xxlarge"></i></p>
                </div>

                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>

    <script>
        // Accordion
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-theme-d1";
            } else {
                x.className = x.className.replace("w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-theme-d1", "");
            }
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

@endsection