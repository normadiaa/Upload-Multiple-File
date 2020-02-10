<div class=" col-sm-12 container">
    <div class="row ">
        <div class="col-md-10 card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th align="left">No.</th>
                            <th align="left" >Name</th>
                            <th align="left" >File Id</th>
                            <th align="left">Files</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($reports as $reports)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$reports->name}}</td>
                            <td>{{$reports->file_id}}</td>
                            <td><a href="{{route('displayfile',['file_id'=>$reports->file_id])}}">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>