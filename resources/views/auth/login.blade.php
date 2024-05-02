<x-layout>
    <div class="card">
        <form action="{{ route('login') }}" method="POST" class="card text-center m-2">
            @csrf
            <div class="card-header">
              Login
            </div>
            <div class="mx-5 my-3">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>