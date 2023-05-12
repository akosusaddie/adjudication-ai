@extends('layout.app')
@section('title', 'Adjudication Details')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Adjudication Rule Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item">Adjudication Rules</li>
          <li class="breadcrumb-item active">Adjudication Rule Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a onclick="goBack()" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
                    <a href="{{route('list-adjudication')}}" class="btn btn-primary float-right"><i class="bi bi-list"></i>  List Adjudications</a>
                </div>
              <div class="card-body">
                @livewire('adjudication.adjudication-show', ['diseaseId' => $disease->id])
              </div>
            </div>

          </div>

        </div>
      </section>

  </main><!-- End #main -->

  @endsection
