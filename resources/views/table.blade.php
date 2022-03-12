<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Visitors Table</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Place
                                </th>
                                <th>
                                    Count
                                </th>
                                <th>
                                    Date & Time
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1;
                            @endphp
                            @foreach ($visitors as $visitor)
                                <tr>
                                    <td>
                                        {{ $id }}
                                        @php
                                            $id++;
                                        @endphp
                                    </td>
                                    <td>
                                        {{ $visitor->name }}
                                    </td>
                                    <td>
                                        {{ $visitor->category->name }}
                                    </td>
                                    <td>
                                        {{ $visitor->count }}
                                    </td>
                                    <td>
                                        {{ $visitor->created_at }}
                                    </td>

                                    <td class="text-primary td-actions">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Check Out
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <a href="{{ route('visitor-delete', ['id' => $visitor->id]) }}"><button
                                                type="button" rel="tooltip" class="btn btn-danger">
                                                <i class="material-icons">close</i>
                                            </button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Check Out Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Time: <span class="text-danger font-weight-bold">2:30 H</span> </p>
                <p>Price: <span class="text-danger font-weight-bold">25 EGP</span> </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Check</button>
            </div>
        </div>
    </div>
</div>
