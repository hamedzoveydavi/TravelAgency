    <div  class="form-group row">
       
            <label for="password" class="col-md-4 col-form-label text-md-right">{{$Subject}}</label>
        

        <div class="col-md-6">
            <input id="$name" type="password" class="form-control @error('$name') is-invalid @enderror" name="$name" required autocomplete="new-password">
           
            @error('$name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

   

 