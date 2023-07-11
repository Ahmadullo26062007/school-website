<div class="row vh-100">
    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
                <h1 class="h2">Welcome back, Charles</h1>
                <p class="lead">
                    Sign in to your account to continue
                </p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input class="form-control form-control-lg" wire:model="username" type="text"
                                    name="username" placeholder="Enter your username" />
                                @error('username')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control form-control-lg" type="password" wire:model="password"
                                    name="password" placeholder="Enter your password" />
                                @error('password')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($user_yoq)
                                <span style="color: red">Bunday foydalanuvchi topilmadi</span>
                            @endif
                            @if ($null)
                                <span style="color: red">Bunday foydalanuvchi topilmadi</span>
                            @endif
                            <div class="text-center mt-3">
                                <button type="button" wire:click="login" class="btn btn-lg btn-primary">Sign
                                    in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
