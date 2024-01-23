<x-app-web-layout>


    <x-slot name="title">
        Add Student
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                <div class="alert alert-success">{{ session('status')}} </div>
                @endif

                <h4 class="text-center fs-2">Add Student</h4>
                <div class="card">

                    <div class="card-header">

                        <a href="{{ url('students')}}" class="btn btn-secondary float-end me-3 mt-2"> Back </a>

                        <div class="card-body">
                            <form action="{{ url('students/create') }}" method="POST">
                                @csrf

                                <div class="form-floating mt-5">
                                    <input class="form-control mb-3" id="floatingInput" type="text" name="name" value="{{ old ('name') }}" />
                                    <label class="form-label" for="floatingInput"> Name </label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="integer" name="age" value="{{ old ('age') }}" />
                                    <label> Age </label>
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="address" value="{{ old ('address') }}" />
                                    <label> Address </label>
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="academic[course]" value="{{ old ('academic.course') }}" />
                                    <label> Course </label>
                                    @error('academic.course') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="academic[year]" value="{{ old ('academic.year') }}" />
                                    <label> Year Level </label>
                                    @error('academic.year') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="country[continent]" value="{{ old ('country.continent') }}" />
                                    <label> Continent </label>
                                    @error('cpuntry.continent') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="country[name]}" value="{{ old ('country.name') }}" />
                                    <label> Country Name </label>
                                    @error('country.name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="country[capital]" value="{{ old ('country.capital') }}" />
                                    <label> Capital </label>
                                    @error('country.capital') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success float-end submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>