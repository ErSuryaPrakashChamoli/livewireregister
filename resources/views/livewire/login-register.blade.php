<div>

    <div class="row">
        <div class="col-md-12">

        </div>
    </div>

    @if ($registerForm)

    <form>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Name:</label><br />
                    <input type="text" wire:model="name" class="form-control" />
                    @error('name')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Email:</label><br />
                    <input type="text" wire:model="email" class="form-control" />
                    @error('email')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Password:</label><br />
                    <input type="password" wire:model="password" class="form-control" />
                    @error('password')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button class="btn text-white btn-success" wire:click.prevent='registerStore'>
                    Register
                </button>

            </div>

            <div class="col-md-12 text-center">
                <a href="" class="text-primary" wire:click.prevent='register'><strong>Login </strong></a>
            </div>

        </div>
    </form>

    @else

    <form>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Email:</label><br />
                    <input type="text" wire:model="email" class="form-control" />
                    @error('email')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Password:</label><br />
                    <input type="password" wire:model="password" class="form-control" />
                    @error('password')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 text-center">
                <a href="" class="btn text-white btn-success" wire:click.prevent='login'><strong>Login </strong></a>
            </div>
                <br>  
            <div class="col-md-12 text-center">
                Don't have account <a href="" class="btn text-white btn-success btn-sm" wire:click.prevent='register '>Click here</a>
            </div>

        </div>
    </form>

    @endif
</div>