@if(Session::has('success'))
    <div class="row">
        <div class="col-lg-12">
            <div style="text-align: center; width: 100%">
                <div class="alert alert-success alert-styled-left">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    {{ Session::get('success') }}    </div>
            </div>

        </div>
    </div>

    @elseif(Session::has('error'))
  {{--  <div id="alerttopright" class="myadmin-alert myadmin-alert-img alert-danger myadmin-alert-top-right" style="display: block;">
        {{ Session::get('error') }}  </div>--}}

    <div class="row">
        <div class="col-lg-12">
            <div style="text-align: center; width: 100%">
                <div class="alert alert-danger alert-styled-left">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    {{ Session::get('error') }}    </div>
            </div>

        </div>
    </div>


@endif