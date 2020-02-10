<div class=" col-sm-12 container">
    <div class="row ">
        <div class="col-md-10 card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    @foreach ($file as $data)
                        
                    <tr>
                        <th>File :</th>
                        <td><img src="{{ URL::to('/')}}/files/{{$data->file}}" class ="img-thumbnail" width="150" ></td>
                        
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>