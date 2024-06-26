<x-layout>
    <div class="card">
        <div class="card text-center m-2" style="width: 350px; height: 200px">
            <div class="card-header">
              Welcome
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center gap-3">
              <h5 class="card-title">Let's get started</h5>
              <div class="d-flex justify-content-center align-items-center gap-4">
                  <a href="{{ route('login') }}" class="btn btn-primary">Login</a> 
                  <a href="{{ route('register') }}" class="btn btn-primary">Register</a> 
              </div>
            </div>
        </div>
    </div>
</x-layout>