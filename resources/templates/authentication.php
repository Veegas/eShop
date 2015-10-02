    <div class="row">
        <div class="col s12">
            <ul class="tabs auth-tabs">
                <li class="tab col s3"><a href="#signup">Signup</a></li>
                <li class="tab col s3"><a class="active" href="#login">Login</a></li>
            </ul>
        </div>
    </div>

        <div id="signup" class="col s12">
            <div class="card">
                <div class="card-content white-text">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field col s6">
                                    <label for="add-avatar">Add Avatar</label>
                                    <a class="btn-floating btn-large waves-effect waves-light deep-orange" id="add-avatar"><i class="material-icons"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="password-confirm" type="password" class="validate">
                                    <label for="password-confirm">Confirm password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Signup
                                                <i class="material-icons right"></i>
                                    </button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="login" class="col s12">
            <div class="card">
                <div class="card-content white-text">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Login
                                                <i class="material-icons right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
