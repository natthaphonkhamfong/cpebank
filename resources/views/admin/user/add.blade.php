@extends('admin.layout.layout')
@section('title')
    {{$title}}
@endsection

@section('content-header')
    {{$content_header}}
@endsection

@section('content')

    <form method="post" action="./add">
        {{csrf_field()}}
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" name="fname" id=""
                   placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Last Name</label>
            <input type="text" class="form-control" name="lname" id=""
                   placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Date of birth</label>
            <input type="date" class="form-control" name="dob" id=""
                   placeholder="01-01-2019">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" maxlength="10" class="form-control" name="phone" id=""
                   placeholder="0812345678">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id=""
                   placeholder="abc@gmail.com">
        </div>
        <div class="form-group">
            <label for="type">Type</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="customer" value="customer" checked>
                <label class="form-check-label" for="customer">
                    customer
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="officer" value="officer">
                <label class="form-check-label" for="officer">
                    officer
                </label>
            </div>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg col-3">Submit</button>
            <button type="reset" class="btn btn-secondary btn-sm">clear</button>
        </div>


    </form>



@endsection