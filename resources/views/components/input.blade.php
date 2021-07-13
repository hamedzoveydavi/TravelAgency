<div  class=" form-group row">
        
                <label for="name" class="col-md-4 col-form-label text-md-right ">{{$Subject}}</label>
        
        <div class="col-md-6">
            <input id="$id" type="text" class="form-control @error('$name') is-invalid @enderror" name="$name" value="{{ old('$value') }}" required autocomplete="$name" autofocus>

            @error('$name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
</div>





