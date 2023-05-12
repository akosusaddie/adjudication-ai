@extends('layout.app')
@section('title', 'All Adjudications')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>List of Adjudication Rules</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/">Adjudication Rules</a></li>
          <li class="breadcrumb-item active">List Adjudication Rules</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a onclick="goBack()" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
                     <a href="{{route('create-adjudication')}}" class="btn btn-primary float-right"><i class="bi bi-plus-circle"></i>  Add</a>
                </div>
              <div class="card-body">
                @livewire('adjudication.adjudications-table')
              </div>
            </div>

          </div>

        </div>
      </section>

  </main><!-- End #main -->

  @endsection
