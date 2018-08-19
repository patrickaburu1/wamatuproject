@if(Session::has('success'))
    <div class="row">
        <div class="col-lg-12">
            <div style="text-align: center; width: 100%">
                <div class="alert alert-success alert-styled-left">
                    <button type="button" class="close fade" data-dismiss="alert" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                    {{ Session::get('success') }}    </div>
            </div>

        </div>
    </div>

    @elseif(Session::has('error'))
 

    <div class="row">
        <div class="col-lg-12">
            <div style="text-align: center; width: 100%">
                <div class="alert alert-danger alert-styled-left">
                    <button type="button" class="close fade" data-dismiss="alert" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                    {{ Session::get('error') }}    </div>
            </div>

        </div>
    </div>

@elseif(Session::has('info'))


    <div class="row">
        <div class="col-lg-12">
            <div style="text-align: center; width: 100%">
                <div class="alert alert-info alert-styled-left">
                    <button type="button" class="close fade" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ Session::get('info') }}    </div>
            </div>

        </div>
    </div>


@endif