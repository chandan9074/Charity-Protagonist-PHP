<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/21b1f782ae.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage/homeStyle.css')}}" />
</head>

<body>
    <section class="bg-img">
        <nav class="container navbar navbar-light mb-5 mb-md-0">
            <a class="navbar-brand text-uppercase text-white fw-bold fs-2" href="#">Charity</a>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-dark me-md-2 px-4" type="button" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Login</button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content bg-dark text-white text-opacity-75">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Existing User Login</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('auth.check') }}" method="post">

                                @if(Session::get('fail'))
                                    <div class="alart alart-danger">
                                        {{ Session::get('fail')}}
                                    </div>
                                @endif
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control bg-body text-white"
                                            id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputPassword5" class="form-label">Password</label>
                                        <input type="password" id="inputPassword5" name="password"
                                            class="form-control bg-body text-white"
                                            aria-describedby="passwordHelpBlock">
                                        <div id="passwordHelpBlock" class="form-text">
                                            Your password must be 8-20 characters long, contain letters and numbers, and
                                            must not contain spaces, special characters, or emoji.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <a href="#" class="text-decoration-none text-danger">Forget Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-success">Login</button>
                                </form>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div> -->
                        </div>
                    </div>
                </div>


                <a href="{{url('/auth/signup')}}"><button class="btn btn-danger" type="button">Register</button></a>
            </div>
        </nav>
        <div class="content-height container d-flex justify-content-center align-items-center">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 bg-transparent text-white text-opacity-75 border-0 p-4">
                        <div class="card-body px-0">
                            <i class="fas fa-quote-right mb-4"></i>
                            <h2 class="fw-bold">I care not for a man’s religion whose dog and cat are not
                                the
                                better for it.
                            </h2>
                        </div>
                        <div class="card-footer bg-transparent border-0 mb-4 px-0">
                            <h5>-Abraham Lincoln</h5>
                        </div>
                        <hr class="w-50 mx-auto">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-transparent text-white text-opacity-75 border-0 border-0 p-4">
                        <div class="card-body px-0">
                            <i class="fas fa-quote-right mb-4"></i>
                            <h2 class="fw-bold">A wise man should have money in his head, but not in his
                                heart.
                            </h2>
                        </div>
                        <div class="card-footer bg-transparent border-0 mb-4 px-0">
                            <h5>-Jonathan Swift</h5>
                        </div>
                        <hr class="w-50 mx-auto">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-transparent text-white text-opacity-75 border-0 border-0 p-4">
                        <div class="card-body px-0">
                            <i class="fas fa-quote-right mb-4"></i>
                            <h2 class="fw-bold">I care not for a man’s religion whose dog and cat are not
                                the
                                better for it.</h2>
                        </div>
                        <div class="card-footer bg-transparent border-0 mb-4 px-0">
                            <h5>-Tom Ahern</h5>
                        </div>
                        <hr class="w-50 mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>