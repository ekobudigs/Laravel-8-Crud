<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Crad New Akound</div>
                    <div class="card-body">

                        <form action="{{ route('register') }}" method="post">

                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label"> Email</label>
                                <input type="email" value="{{ old('email') }}" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username" class="form-label"> Usernama</label>
                                <input type="text" value="{{ old('username') }}" name="username" id="username"
                                    class="form-control  @error('name') is-invalid @enderror">

                                @error('username')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label"> Nama</label>
                                <input type="text" value="{{ old('name') }}" name="name" id="name"
                                    class="form-control  @error('name') is-invalid @enderror">

                                @error('name')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label"> Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control  @error('password') is-invalid @enderror">
                                @error('password')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Regtister</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
