@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $key => $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
