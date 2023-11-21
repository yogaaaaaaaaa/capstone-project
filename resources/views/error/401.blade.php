<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>401 Unauthorized</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('admin.partials.link')
</head>
<body>

    <!-- 404 Start -->
    <div class="container-fluid">
        <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
            <div class="col-md-6 text-center p-4">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1 fw-bold">401</h1>
                <h1 class="mb-4">Unauthorized</h1>
                <p class="mb-4">Sorry, an error occurred while authenticating with Google.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('login')}}">Go Back To Login Page</a>
            </div>
        </div>
    </div>
    <!-- 404 End -->

    @include('admin.partials.script')
</body>
</html>