@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Edit Fee Structure</h1>
                        <form action="{{ route('fees.update', $feeStructure) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="timing_id" class="form-label">Time Slot</label>
                                <select id="timing_id" name="timing_id" class="form-select" >
                                    @foreach ($timings as $timing)
                                        <option value="{{ $timing->id }}" {{ $timing->id == $feeStructure->timing_id ? 'selected' : '' }}>
                                            {{ $timing->time_slot }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="course_duration">Course Duration (Months)</label>
                                <input type="number" name="course_duration" id="course_duration" class="form-control" value="{{ old('course_duration', $feeStructure->course_duration) }}">
                            </div>
                            <div class="mb-3">
                                <label for="main_fee" class="form-label">Main Fee</label>
                                <input type="number" class="form-control" id="main_fee" name="main_fee" value="{{ old('main_fee', $feeStructure->main_fee) }}">
                            </div>
                            <div class="mb-3">
                                <label for="discount_fee" class="form-label">Discount Fee</label>
                                <input type="number" class="form-control" id="discount_fee" name="discount_fee" value="{{ old('discount_fee', $feeStructure->discount_fee) }}">
                            </div>
                            <!-- No final_fee input, it will be calculated in the controller -->
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>
@endsection
