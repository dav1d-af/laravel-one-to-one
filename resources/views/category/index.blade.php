<x-app-web-layout>

    <x-slot name="title">
        CRUD API Operation
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Students Table (All records can be viewed by GET method in Postman.)
                            <a href="{{ url('students/create')}}" class="btn btn-primary float-end"> Add Student </a>
                        </h4>
                        
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Continent</th>
                                        <th>Country Name</th>
                                        <th>Capital</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $item)
                                    <tr>
                                        <td>{{ $item->name ?: 'N/A'}}
                                            @if ($item->name)
                                                <a href="{{ url('students/'.$item->id.'/delete-name') }}" class="btn btn-warning mx-1">Delete</a>
                                            @endif
                                        </td>
                                        <td>{{ $item->age ?: 'N/A'}}
                                            @if ($item->age)
                                                <a href="{{ url('students/'.$item->id.'/delete-age') }}" class="btn btn-warning mx-1">Delete</a>
                                            @endif
                                        </td>
                                        <td>{{ $item->address ?: 'N/A'}}
                                            @if ($item->address)
                                                <a href="{{ url('students/'.$item->id.'/delete-address') }}" class="btn btn-warning mx-1">Delete</a>
                                            @endif
                                        </td>
                                        <td>{{ $item->academic->course ?: 'N/A'}}
                                            @if ($item->academic->course)
                                                <a href="{{ url('students/'.$item->id.'/delete-course') }}" class="btn btn-warning mx-1">Delete</a>
                                            @endif
                                        </td>
                                        <td>{{ $item->academic->year ?: 'N/A'}}
                                            @if ($item->academic->year)
                                                <a href="{{ url('students/'.$item->id.'/delete-year') }}" class="btn btn-warning mx-1">Delete</a>
                                            @endif
                                        </td>
                                        <td>{{ $item->country->continent ?: 'N/A'}}
                                            @if ($item->country->continent)
                                                <a href="{{ url('students/'.$item->id.'/delete-continent') }}" class="btn btn-warning mx-1">Delete</a>
                                            @endif
                                        </td>
                                        <td>{{ $item->country->name ?: 'N/A'}}
                                            @if ($item->country->name)
                                                <a href="{{ url('students/'.$item->id.'/delete-name2') }}" class="btn btn-warning mx-1">Delete</a>
                                            @endif
                                        </td>
                                        <td>{{ $item->country->capital ?: 'N/A'}}
                                            @if ($item->country->capital)
                                                <a href="{{ url('students/'.$item->id.'/delete-capital') }}" class="btn btn-warning mx-1">Delete</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('students/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                            <a href="{{ url('students/'.$item->id.'/delete') }}" class="btn btn-danger mx-1">Delete</a>
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
    
</x-app-web-layout>