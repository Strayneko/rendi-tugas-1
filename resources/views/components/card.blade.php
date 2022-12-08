    <div class="col-md-3 mb-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ $user['foto'] }}" class="card-img-top" style="width: 100%; height:200px">
            <div class="card-body">
                <h5 class="card-title">{{ $user['nama'] }}</h5>
                <p class="card-text">{{ $user['bio'] }}</p>
                <p class="card-text">{{ $user['alamat'] }}</p>
                <p class="card-text">Role: {{ $user['role'] }}</p>
            </div>
        </div>
    </div>
