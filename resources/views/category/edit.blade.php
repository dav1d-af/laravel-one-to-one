<x-app-web-layout>


    <x-slot name="title">
        Edit Student
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                <div class="alert alert-success">{{ session('status')}} </div>
                @endif

                <h4 class="text-center fs-2">Edit Student</h4>
                <div class="card">

                    <div class="card-header">

                        <a href="{{ url('students')}}" class="btn btn-secondary float-end me-3 mt-2"> Back </a>

                        <div class="card-body">
                            <form action="{{ url('students/'.$student->id.'/edit') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-floating mt-5">
                                    <input class="form-control mb-3" id="floatingInput" type="text" name="name" value="{{ old ('student',$student->name) }}" />
                                    <label class="form-label" for="floatingInput"> Name </label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="integer" name="age" value="{{ old ('student',$student->age) }}" />
                                    <label> Age </label>
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="address" value="{{ old ('student',$student->address) }}" />
                                    <label> Address </label>
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="academic[course]" value="{{ old ('academic.course',($student->academic)->course ?? '') }}" />
                                    <label> Course </label>
                                    @error('academic.course') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="academic[year]" value="{{ old ('academic.year',($student->academic)->year ?? '') }}" />
                                    <label> Year Level </label>
                                    @error('academic.year') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="country[continent]" value="{{ old ('country.continent',($student->country)->continent ?? '') }}" />
                                    <label> Continent </label>
                                    @error('country.continent') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="country[name]}" value="{{ old ('country.name',($student->country)->name ?? '') }}" />
                                    <label> Country Name </label>
                                    @error('country.name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingPassword" type="text" name="country[capital]" value="{{ old ('country.capital',($student->country)->capital ?? '') }}" />
                                    <label> Capital </label>
                                    @error('country.capital') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success float-end submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>