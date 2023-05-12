@extends('layout.app')
@section('title', 'Create')
@section('content')

<main id="main" class="main">
    <div id="toast-container" class="toast-top-right"></div>
    <div class="pagetitle">
      <h1>New Adjudication Rule</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/">Knowledge Base</a></li>
          <li class="breadcrumb-item active">New Adjudication Rule</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <a onclick="goBack()" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
                <a href="{{route('list-adjudication')}}" class="btn btn-primary float-right"><i class="bi bi-list"></i>  List</a>
            </div>
            <div class="card-body">
              @livewire('adjudication.adjudication-create')

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  @endsection
