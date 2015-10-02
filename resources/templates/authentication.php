    <div>

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
                            <div class="row row-edited">
                                <div class="div-input-half-left">
                                    <label for="first_name">First Name</label>
                                    <input id="first_name"  type="text" class="validate input-position">

                                </div>
                                <div class="div-input-half">
                                    <label for="last_name">Last Name</label>

                                    <input id="last_name" type="text" class="validate input-position" >
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-input-half-left">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="validate input-position">
                                </div>
                                <div class="div-input-half">
                                    <label for="add-avatar">Add Avatar</label>
                                   <input type="file" name="fileToUpload" id="add-avatar" class="input-position">
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-input-half-left">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="validate input-position">
                                </div>
                                <div class="div-input-half">
                                    <label for="password-confirm">Confirm password</label>
                                    <input id="password-confirm" type="password" class="validate input-position">
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-submit">
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
                    <div class="row row-edited">
                        <form class="col s12">
                            <div class="row row-edited">
                                <div class="input-full">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="validate input-position">
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="input-full">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="validate input-position">
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-submit">
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
        
    </div>