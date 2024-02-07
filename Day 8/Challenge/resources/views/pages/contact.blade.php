@include('layout.main')

@section('title','Home')

@section('container')

<!-- Header -->
<header class="masthead contact">
    <div class="container">
        <div class="masthead-heading text-uppercase">Contatc Us</div>
    </div>
</header>

<div class="container mt-4 mb-4">
    <form>
        <div class="row">
            <div class="mb-3 col-md-4">
                <label class="form-label">Name </label>
                <input type="password" class="form-control" id="nama">
            </div>
            <div class="mb-3 col-md-4">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3 col-md-4">
                <label class="form-label">Subject</label>
                <input type="email" class="form-control" id="subject">
                </div>
        </div>
        <div class="col-md-12 form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
</div>

@endsection