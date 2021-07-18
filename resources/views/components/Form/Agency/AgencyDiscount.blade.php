<?php
    use App\Models\SubAgency;
    $Agency = SubAgency::all();
?>
<form method="POST" action="{{route('AgencyDiscountStor')}}">
@csrf

                       
                        <div class="form-group row">
                            <label for="SubAgency_id" class="col-md-4 col-form-label text-md-right">{{ __('Agency') }}</label>
                            <div class="col-md-6">
                                <select  name="SubAgency_id" class="form-select" aria-label="Default select example">
                                  <option selected>Open this select menu</option>
                                    @foreach($Agency as $list)
                                        <option name="SubAgency_id" value="{{$list->id}}">{{$list->SubAgency_NameFA}}</option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>
                            <div class="col-md-6">
                                <input id="Discount" type="number" class="form-control @error('Discount') is-invalid @enderror" name="Discount" 
                                
                                 value=@if(!empty($id)) "{{ $data->Discount  }}" @else "{{ old('Discount') }}" @endif 
                                 required autocomplete="Discount">

                                @error('Discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
</form>