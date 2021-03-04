<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>

    <!--Main Navigation-->
    <header>

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Image Upload</h5>
                <p class="card-text">

                </p>
                {{--  <img width="500px" class="img-fluid" src="{{ Cloudinary::getImage($imageId) }}" alt="">  --}}
                <img width="500px" class="img-fluid" src="https://res.cloudinary.com/manaratha-2031/image/upload/v1/{{ $imageId }}.jpg" alt="">
                <form action="/upload-image/upload" method="POST" enctype="multipart/form-data">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <label class="form-label" for="fleImage">Image input</label>
                    <input type="file" class="form-control" id="fleImage" name="fleImage" accept="image" required />
                    <br />
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer>

    </footer>
    <!--Footer-->

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
    ></script>
</body>
</html>
