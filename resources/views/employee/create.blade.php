@extends('layouts.app')
@section('title','Employee Register')
@section('content')
<div class="card mb-5">
        <div class="card-body mr-5 ">
            <div class="col-sm-12 col-md-12">
                <div class="bg-light rounded p-4">
                    <h6 class="mb-4">Register</h6>
                    <form action="{{route('employeeStore')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-3">
                                <input type="text" class="form-control"  placeholder="employee ID" name="employee_id" required />
                            </div>
                            <div class=" col-sm-12 col-md-6 mb-3">
                                <input type="text" class="form-control"  placeholder="name" name="name" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-3 ">
                                <input type="number" class="form-control"  placeholder="+95 XXX-XXXX-XXX" name="phone" required />
                            </div>
                            <div class="col-sm-12 col-md-6 mb-3">
                                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="youremail@gmail.com" name="email" required />
                                <div id="emailHelp" class="form-text"></div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class=" col-sm-12 col-md-6 mb-3">
                                <input placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" col-sm-12 col-md-6 mb-3">
                                <input type="text" class="form-control"  placeholder="NRC number" name="nrc" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-sm-12 col-md-6 mb-3">
                                <input placeholder="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" required>
                            </div>
                            <div class=" col-sm-12 col-md-6 mb-3">
                                <select class="form-select col-md-6 mb-3" aria-label="Choose Status" name="status">
                                    <option selected>Choose Status</option>
                                    <option value="1">Present</option>
                                    <option value="2">Leave</option>
                                </select>
                            </div>
                        </div>

                       <div class="row">
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="dob" name="dob">
                                <label for="dob">Date Of Birth</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="register_date" name="register_date">
                                <label for="register_date">Register Date</label>
                            </div>
                        </div>
                       </div>

                       <div class="row">
                        <div class=" col-sm-12 col-md-12 mb-3">
                            <select class="form-select col-md-6 mb-3" aria-label="Choose Status" name="department_id">
                                <option selected>Choose Department</option>
                                <option value="1">Present</option>
                                <option value="2">Leave</option>
                            </select>
                        </div>
                    </div>

                        <div class="row">
                            <div class=" col-sm-12 col-md-12 mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea" style="height: 80px;" name="address"></textarea>
                                    <label for="floatingTextarea">Address</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="0" checked>
                                    <label class="form-check-label" for="male" >Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="female" value="1">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Agree Term and Policy</label>
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
   </div>
@endsection
@section('script')

@endsection