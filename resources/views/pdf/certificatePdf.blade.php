<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    {{--
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" /> --}}

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        .container {
            height: 100vh;
            position: relative;
            margin-top: 2%;
        }

        h1 {
            font-size: 30px;
        }

        footer {
            bottom: 20px;
            height: 100px;
            position: absolute;
            width: 100%;
        }
    </style>

    <title>Student Certificate</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="">
                <img src="{{ $images['logo'] }}" alt="" width="100px" />
            </div>
            <div class="text-center">
                <h1 class="m-0 text-danger fw-bold">
                    A Caring School
                    <br />
                    <span class="text-primary">
                        THE ANGELS SCHOOL SYSTEM Khan Garh </span><span style="font-size: 10px"
                        class="text-dark">REGD.</span>
                    <br />

                    <span class="h4 fw-bold">INSPIRING CHILDREN FOR EXCITING FUTURES</span>
                </h1>
                <br />
            </div>
            <div class=""></div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <p><b>Ref:</b><input type="text" /></p>
            </div>
            <div class="">
                <p><b>Date:</b><input type="text" /></p>
            </div>
        </div>
        <div>
            {{ $content }}
        </div>
        <footer style="background-color: {{ $colors['primary'] }}">
            <div class="d-flex">
                <div class="baby ps-5">
                    <img src="{{ $images['baby'] }}" width="100px" alt="" />
                </div>
                <div>
                    <h5 class="pt-4 ps-5 text-center">
                        Shah Jamal Road Khan Garh, Email: mughees752@gmail.com <br />
                        Phone: 0333-6021981, 0300-6021981
                    </h5>
                </div>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>