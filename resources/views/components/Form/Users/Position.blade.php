
<form methd="post" action="{{route('PositionStor')}}">
@csrf
                  
                    @component('components.object.input',[
                        
                        'Subject'=>'Position Name',
                        'name'=>'Position_Name',
                        'value'=>''

                        ])     @endcomponent    

    
                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

</form>