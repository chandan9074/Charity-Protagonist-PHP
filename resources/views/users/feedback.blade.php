<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #290600ce;
        }

        /* map */
        .mapouter {
            position: relative;
            text-align: right;
            width: 100%;
            height: 650px;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 100%;
            height: 650px;
            border: 3px solid rgba(47, 0, 0, 0.952);
            border-radius: 15px;
        }

        .gmap_iframe {
            height: 650px !important;
        }

        textarea {
            padding: 10px;
        }

        input {
            width: 82%;
            padding: 10px 0;
        }

        .bg-img {
            background-color: rgb(56, 39, 39);
            border-radius: 20px;
        }
    </style>

</head>

<body class="min-vh-100 d-flex justify-content-center align-items-center">
    <section class="container-fluid w-75">
        <div class="row g-5">
            <div class="col-6">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=660&amp;height=650&amp;hl=en&amp;q=Daffodil International University&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://www.fnfgo.com/">Friday Night Funkin Mods</a>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center bg-img">
                <div>
                    <h1 class="fw-bold my-3 text-white opacity-75">Give us your Feedback</h1>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-user fs-2 me-3 text-white opacity-75"></i>
                        <input type="text" class="my-3 rounded-3 bg-dark  text-white px-3" placeholder="Name">
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope fs-2 me-3 text-white opacity-75"></i>
                        <input type="email" class="my-3 rounded-3 bg-dark  text-white px-3" placeholder="Email">
                    </div>
                    <div class="d-flex">
                        <i class="fas fa-comment-alt fs-2 me-3 text-white opacity-75 mt-4"></i>
                        <textarea cols="50" rows="10" class="my-3 rounded-3 border-1 bg-dark  text-white"
                            placeholder="Write your valuable feedback here"></textarea>
                    </div>

                    <button class="btn btn-danger px-4 py-2 rounded-3 ms-5 mt-3">Submit</button>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/21b1f782ae.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>