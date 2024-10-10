@extends('layout.admin')
@section('title', 'Affilly')
@section('content')
    <div class="content-wrapper" style="min-height: 1091px;">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <form class="form" action="{{ url('admin-update-state') }}" method="post">									
									@csrf									
									<div class="box-body">
										<button href="{{url('/admin-states')}}" class="btn btn-primary">back</button>
                                        <hr class="my-15">
                                        <div class="row">
                                            <div class="col-md-5">
												<input type="hidden" name="state_id" value="{{ $states[0]->id }}">
                                                <div class="form-group">
                                                    <label>Country </label>
                                                        <select name="country" class="form-select" id="country-dropdown">                                                            
                                                            @foreach ($countries as $country)															 
                                                                <option value="{{ $country->id }}" {{ $country->id == $states[0]->country_id ? 'selected' : '' }}> {{ $country->name }}</option>
                                                            @endforeach
                                                        </select>
                                            </div>
                                        </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>State Name</label>
                                                    <input type="text" name="name" class="form-control" value="{{ $states[0]->name }}" placeholder="Enter state name">
                                                </div>

                                            </div>
                                            <div class="col-md-2 " style="margin-top:15px">
                                                <button type="submit" class="btn  btn-primary btn-outline">
                                                    Save
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

    <script>
        function country_dropdown() {
            var id = $('#country_drop').val();
            // alert(id);

            $.ajax({
                url: "{{ url('get_sub_category') }}",
                type: "POST",
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },

                success: function(result) {
                    // console.log(result)
                    $('#sub_category_dropdown').append(result);

                }

            });

        }
    </script>

@endsection
