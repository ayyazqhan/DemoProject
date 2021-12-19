@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        
    </div>

    <div class="card-body">
        <form action="{{ route("enrollments.store") }}" method="POST">
        {{ csrf_field() }}
        
            <div class="form-group {{ $errors->has('discipline_id') ? 'has-error' : '' }}">
                <label for="user">Discipline*</label>
                <select name="discipline_id" id="user" class="form-control select2" required>
                    @foreach($disciplines as $id => $discipline)
                        <option value="{{ $id }}" {{ (isset($enrollment) && $enrollment->discipline ? $enrollment->discipline->id : old('discipline_id')) == $id ? 'selected' : '' }}>{{ $discipline }}</option>
                    @endforeach
                </select>
                @if($errors->has('discipline_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('discipline_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
                <label for="course">course*</label>
                <select name="course_id" id="course" class="form-control select2" required>
                    @foreach($courses as $id => $course)
                        <option value="{{ $id }}" {{ (isset($enrollment) && $enrollment->course ? $enrollment->course->id : old('course_id')) == $id ? 'selected' : '' }}>{{ $course }}</option>
                    @endforeach
                </select>
                @if($errors->has('course_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('course_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label>status*</label>
                @foreach(App\Enrollment::STATUS_RADIO as $key => $label)
                    <div>
                        <input id="status_{{ $key }}" name="status" type="radio" value="{{ $key }}" {{ old('status', 'awaiting') === (string)$key ? 'checked' : '' }} required>
                        <label for="status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </em>
                @endif
            </div>
            <input name="student_id" type="hidden" value="{{ Auth::user()->id }}">
            <div>
                <input class="btn btn-danger" type="submit" value="save">
            </div>
        </form>


    </div>
</div>
@endsection



