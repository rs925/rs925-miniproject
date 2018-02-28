@extends('Layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="card mt-3">
                            <div class="col-xs-6">
                                <h3>Login</h3>

                            </div>

                            <div class="card-body">

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form id="login-form"
                                                  role="form" style="display: block;">
                                                <div class="form-group">
                                                    <input type="text" name="username" id="username" tabindex="1"
                                                           class="form-control" placeholder="Username" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" tabindex="2"
                                                           class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group text-center">
                                                    <input type="checkbox" tabindex="3" class="" name="remember"
                                                           id="remember">
                                                    <label for="remember"> Remember Me</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" name="login-submit" id="login-submit"
                                                                   tabindex="4" class="btn btn-primary col-lg-6"
                                                                   value="Log In">
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection