<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>





    <nav class="navbar navbar-expand-lg bg-body-tertiary py-4" style="border-bottom:1px solid gray">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
        </div>
    </nav>

    <div class="container" style="position: relative;height:90vh;">
        <div class="login-container container" style="position:absolute;transform:translateY(-50%);top:50%">

            <div class="main-section ">

                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{ session()->get('message') }}</strong>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        @if (is_array(session()->get('error')))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach (session()->get('error') as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <strong>{{ session()->get('error') }}</strong>
                        @endif
                    </div>
                @endif
                {{-- {{dd($errors)}} --}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="js-message-wrap">

                </div>

                <div class="row justify-content-center">
                    
                    <div class="col-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title">Login</h3>
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            aria-describedby="emailHelpId" placeholder="abc@mail.com" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="******" />
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <p class="mt-4">Don't have any account ? <a style="color:blue; font-weight:500"
                                            data-bs-toggle="modal" data-bs-target="#developer_register">create one</a>
                                    </p>




                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>






   

    <!-- Modal developer-->
    <div class="modal fade" id="developer_register" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Resistration Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('register')}}" method="POST" class="text-center">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Full Name" />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="abc@mail.com" />
                        </div>
                        

                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="confirm_password"
                                id="confirm_password" placeholder="Retype Password" />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
