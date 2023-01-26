<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">IO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        </ul>
                        <form class="d-flex" role="search">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected disabled>Please Select</option>
                                    <option value="0">Jorabek</option>
                                    <option value="1">Sardor</option>
                                </select>
                                <label for="floatingSelect">Student</label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form class=" col-12" role="search">
                <div class="form-floating">
                    <select class="form-select col-12" id="floatingSelect" aria-label="Floating label select example">
                        <option selected disabled>Please Select</option>
                        <option value="0">Jorabek</option>
                        <option value="1">Sardor</option>
                    </select>
                    <label for="floatingSelect">Savollar</label>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
